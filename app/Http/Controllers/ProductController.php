<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Cart;
use App\Models\User;
use App\Models\CartItem;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = auth()->user();
        $products = Product::All()->where('user_id', $user->id);
        return view('dashboard.vendors.food.index', compact('user', 'foods'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = auth()->user();
        $categories = Category::all()->where('user_id', $user->id);
        return view('dashboard.vendors.food.create', compact('user', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product = $request->validate([
            'category_id' => 'required',
            'name' => 'required',
            'description' => 'required',
            'image[]' => 'mimes:jpg,png,jpeg,svg',
            'price' => 'required',
            'discount' => 'required',
            'processing_time' => 'required',
            'ready_made' => 'required',
        ]);

        $fileNames = [];
        foreach ($request->file('image') as $image) {
            $imageName = $image->hashName();
            $image->store('images/foods', 'public');
            $fileNames[] = $imageName;
        }

        $images = $fileNames;
        $user = auth()->user()->id;

        $product = Product::create([
            'user_id' => $user,
            'category_id' => $request->input('category_id'),
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'images' => $images,
            'price' => $request->input('price'),
            'discount' => $request->input('discount'),
            'processing_time' => $request->input('processing_time'),
            'ready_made' => $request->input('ready_made'),
        ]);
        // dd($product);

        return redirect()->intended(route('vendor.dashboard.food.index',  absolute: false));
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product, $id)
    {
        $user = auth()->user();
        $categories = Category::All()->where('user_id', $user->id);
        $product = Product::findOrFail($id);
        // dd($inCart);
        return view('dashboard.vendors.food.show', compact('user', 'categories', 'food',));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product, $id)
    {
        $user = auth()->user();
        $categories = Category::All()->where('user_id', $user->id);
        $product = Product::findOrFail($id);
        return view('dashboard.vendors.food.edit', compact('user', 'categories', 'food'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $valid = $request->validate([
            'name' => 'nullable',
            'description' => 'nullable',
            'image[]' => 'mimes:jpg,png,jpeg,svg',
            'price' => 'nullable',
            'discount' => 'nullable',
            'processing_time' => 'nullable',
            'ready_made' => 'nullable',
        ]);


        $fileNames = [];
        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $image) {
                // Check if the image is valid
                if ($image->isValid()) {
                    $imageName = $image->hashName();
                    $image->store('images/foods', 'public');
                    $fileNames[] = $imageName;
                } else {
                    return('Invalid file upload');
                }
            }

            $images = $fileNames;
        } else {
            $images = $product->images; // Ensure $product->images is set correctly
        }

        $product->category_id = $request->category_id ?? $product->category_id;
        $product->name = $request->name ?? $product->name;
        $product->description = $request->description ?? $product->description;
        $product->price = $request->price ?? $product->price;
        $product->discount = $request->discount ?? $product->discount;
        $product->processing_time = $request->processing_time ?? $product->processing_time;
        $product->ready_made = $request->ready_made ?? $product->ready_made;
        $product->images = $images ?? $product->images;
        
        $product->save();

        return redirect()->intended(route('vendor.dashboard.food.index',  absolute: false));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product, $id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->back()->with('message', 'Message deleted Successfully');
    }

    public function allFood()
    {
        $user = auth()->user();
        $vendors = User::all()->where('account_type', 'vendor');
        $products = Product::paginate(6);
        foreach ($products as $product) {
            
            $inCart = CartItem::where('food_id', $product->id)->exists();
            $product->in_cart = $inCart;
        }
        $carts = Cart::all()->where('user_id', $user->id);
        foreach ($carts as $cart)
            $id = $cart->id;
        $cartitems = CartItem::all()->where('cart_id', $id);
        return view('dashboard.users.food.index', compact('user', 'foods', 'carts', 'inCart', 'cartitems', 'vendors'));
    }

    public function details(Product $product, $id)
    {
        $user = auth()->user();
        $categories = Category::All()->where('user_id', $user->id);
        $product = Product::findOrFail($id);
        // Check if the food ID exists in the cartitem table
        $inCart = CartItem::where('food_id', $id)->exists();
        $carts = Cart::all()->where('user_id', $user->id);
        foreach ($carts as $cart)
            $id = $cart->id;
        $cartitems = CartItem::all()->where('cart_id', $id);
        return view('dashboard.users.food.show', compact('user', 'categories', 'food', 'inCart', 'cartitems'));
    }

    public function search(Request $request)
    {
        $user = auth()->user();
        $search = $request->validate([
            'keyword' => 'required',
        ]);


        $products = Product::where('name', 'LIKE', "%$request->keyword%")->get();
        $users = User::where('name', 'LIKE', "%$request->keyword%")
            ->where('account_type', 'vendor')
            ->get(['name', 'email', 'phone', 'address', 'image']);
        // dd($users, $products);
        return view('dashboard.users.food.result', compact('users', 'foods'));
    }
}

