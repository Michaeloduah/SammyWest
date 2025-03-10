<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\User;
use App\Models\Product;
use App\Models\CartItem;
use App\Models\Category;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $products = Product::All();
        return view('dashboard.vendors.product.index', compact('user', 'products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = Auth::user();
        $categories = Category::all();
        return view('dashboard.vendors.product.create', compact('user', 'categories'));
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
        ]);

        $fileNames = [];
        foreach ($request->file('image') as $image) {
            $imageName = $image->hashName();
            $image->store('images/products', 'public');
            $fileNames[] = $imageName;
        }

        $images = $fileNames;
        $user = Auth::user()->id;

        $product = Product::create([
            'user_id' => $user,
            'category_id' => $request->input('category_id'),
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'images' => $images,
            'price' => $request->input('price'),
            'discount' => $request->input('discount')
        ]);
        // dd($product);

        return redirect()->intended(route('vendor.dashboard.product.index',  absolute: false));
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product, $id)
    {
        $user = Auth::user();
        $categories = Category::All();
        $product = Product::findOrFail($id);
        // dd($inCart);
        return view('dashboard.vendors.product.show', compact('user', 'categories', 'product',));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product, $id)
    {
        $user = Auth::user();
        $categories = Category::All();
        $product = Product::findOrFail($id);
        return view('dashboard.vendors.product.edit', compact('user', 'categories', 'product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $valid = $request->validate([
            'category_id' => 'nullable',
            'name' => 'nullable',
            'description' => 'nullable',
            'image[]' => 'mimes:jpg,png,jpeg,svg',
            'price' => 'nullable',
            'discount' => 'nullable',
        ]);

        $fileNames = [];
        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $image) {
                // Check if the image is valid
                if ($image->isValid()) {
                    $imageName = $image->hashName();
                    $image->store('images/products', 'public');
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
        $product->images = $images ?? $product->images;
        
        $product->save();

        return redirect()->intended(route('vendor.dashboard.product.index',  absolute: false));
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

    public function allProduct()
    {
        $user = Auth::user();
        $vendors = User::all()->where('is_admin', 'vendor');
        $products = Product::paginate(6);
        foreach ($products as $product) {
            
            $inCart = CartItem::where('product_id', $product->id)->exists();
            $product->in_cart = $inCart;
        }
        $carts = Cart::all()->where('user_id', $user->id);
        foreach ($carts as $cart)
            $id = $cart->id;
        $cartitems = CartItem::all()->where('cart_id', $id);
        return view('dashboard.users.product.index', compact('user', 'products', 'carts', 'inCart', 'cartitems', 'vendors'));
    }

    public function details(Product $product, $id)
    {
        $user = Auth::user();
        $categories = Category::All()->where('user_id', $user->id);
        $product = Product::findOrFail($id);
        $wishlists = Wishlist::all()->where('user_id', $user->id);
        // Check if the food ID exists in the cartitem table
        $inCart = CartItem::where('product_id', $id)->exists();
        $carts = Cart::all()->where('user_id', $user->id);
        foreach ($carts as $cart)
            $id = $cart->id;
        $cartitems = CartItem::all()->where('cart_id', $id);
        return view('dashboard.users.product.show', compact('user', 'categories', 'product', 'inCart', 'cartitems', 'wishlists'));
    }

    public function search(Request $request)
    {
        $user = Auth::user();
        $search = $request->validate([
            'keyword' => 'required',
        ]);
        $wishlists = Wishlist::all()->where('user_id', $user->id);
        $carts = Cart::all()->where('user_id', $user->id);
        foreach ($carts as $cart)
            $id = $cart->id;
        $cartitems = CartItem::all()->where('cart_id', $id);

        $products = Product::where('name', 'LIKE', "%$request->keyword%")->get();
        // dd($users, $products);
        return view('dashboard.users.product.result', compact( 'products', 'cartitems', 'wishlists'));
    }
}

