<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\User;
use App\Models\Order;
use App\Models\Product;
use App\Models\CartItem;
use App\Models\Category;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    //
    public function adminDashboard()
    {
        $user = auth()->user();
        return view('dashboard.admin.dashboard', compact('user'));
    }

    public function vendorDashboard()
    {
        $user = auth()->user();
        $total_orders = Order::All()->where('vendor_id', $user->id);
        $total_products = Product::All()->where('user_id', $user->id);
        $total_categories = Category::All();
        
        $total_orderitems = Order::where('vendor_id', $user->id)->with('orderitem')->get();

        // foreach ($total_orderitems as $total_orderitem) {

        // }
        // foreach ($total_orderitem->orderitem as $total_item) {}
        // dump($total_item);


        $orderitems = Order::where('vendor_id', $user->id)->with('orderitem')->get()->take(5);
        $orders = Order::All()->where('vendor_id', $user->id)->sortByDesc('created_at')->take(5);
        $products = Product::All()->where('user_id', $user->id)->sortByDesc('created_at')->take(5);
        $categories = Category::All()->sortByDesc('created_at')->take(5);
        return view('dashboard.vendors.dashboard', compact('user', 'orders', 'products', 'categories', 'orderitems', 'total_orders', 'total_products', 'total_categories', 'total_orderitems'));
    }

    public function userDashboard()
    {
        $user = auth()->user();
        $wishlists = Wishlist::all()->where('user_id', $user->id);
        $carts = Cart::all()->where('user_id', $user->id);
        foreach ($carts as $cart)
            $id = $cart->id;
        $cartitems = CartItem::all()->where('cart_id', $id);
        return view('dashboard.users.dashboard', compact('user', 'carts', 'cartitems', 'wishlists'));
    }

    public function profile()
    {
        $user = auth()->user();
        return view('dashboard.profile', compact('user'));
    }

    public function editUserProfile()
    {
        $user = User::findOrFail(auth()->user()->id);
        return view('dashboard.users.editprofile', compact('user'));
    }

    public function updateUserProfile(Request $request, $id)
    {
        $user = User::findOrFail(auth()->user()->id);

        $request->validate([
            'name' => ['nullable'],
            'email' => ['nullable', Rule::unique('users')->ignore($user)],
            'phone' => ['nullable', Rule::unique('users')->ignore($user)],
            'address' => ['nullable'],
            'password' => ['nullable', 'min:8'],
            'confirmpassword' => ['nullable', 'same:password', 'min:8'],
            'image' => ['nullable', 'mimes:jpg,png,jpeg']
        ]);

        if ($request->hasFile('image')) {
            $img_dir = $request->file('image')->store('images/users', 'public');
        } else {
            $img_dir = NULL;
        }

        // Only update the fields that are not null
        $user->name = $request->name ?? $user->name;
        $user->email = $request->email ?? $user->email;
        $user->phone = $request->phone ?? $user->phone;
        $user->address = $request->address ?? $user->address;


        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($user->image && Storage::exists($user->image)) {
                Storage::delete($user->image);
            }

            // Save new image
            $imagePath = $request->file('image')->store('images/users', 'public');
            $user->image = $imagePath;
        }
        // dd($user);

        $user->save();

        return redirect(route('dashboard', absolute: false))->with('success', 'Profile updated successfully!');
    }

    public function editVendorProfile()
    {
        $user = User::findOrFail(auth()->user()->id);
        return view('dashboard.vendors.editprofile', compact('user'));
    }

    public function updateVendorProfile(Request $request, $id)
    {
        $user = User::findOrFail(auth()->user()->id);

        $request->validate([
            'name' => ['nullable'],
            'email' => ['nullable', Rule::unique('users')->ignore($user)],
            'phone' => ['nullable', Rule::unique('users')->ignore($user)],
            'address' => ['nullable'],
            'password' => ['nullable', 'min:8'],
            'confirmpassword' => ['nullable', 'same:password', 'min:8'],
            'image' => ['nullable', 'mimes:jpg,png,jpeg']
        ]);

        // Only update the fields that are not null
        $user->name = $request->name ?? $user->name;
        $user->email = $request->email ?? $user->email;
        $user->phone = $request->phone ?? $user->phone;
        $user->address = $request->address ?? $user->address;


        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($user->image && Storage::exists($user->image)) {
                Storage::delete($user->image);
            }

            // Save new image
            $imagePath = $request->file('image')->store('images/users', 'public');
            $user->image = $imagePath;
        }
        
        $user->save();

        return redirect(route('dashboard', absolute: false))->with('success', 'Profile updated successfully!');
    }
}