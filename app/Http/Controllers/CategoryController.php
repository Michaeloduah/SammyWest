<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = auth()->user();
        $categories = Category::All();
        return view('dashboard.vendors.category.index', compact('user', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = auth()->user();
        return view('dashboard.vendors.category.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $category = $request->validate([
            'name' => ['required', 'unique:categories'],
            'image' => ['required', 'mimes:jpg,png,jpeg,mp4']
        ]);

        // dd($category);

        $img_dir = $request->file('image')->store('images/category', 'public');

        $category = Category::create([
            'name' => $request->input('name'),
            'image' => $img_dir
        ]);

        return redirect(route('vendor.dashboard.category.index', absolute: false));
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category, $id)
    {
        $category = Category::findOrFail($id);
        return view('dashboard.vendors.category.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category, $id)
    {
        $user = auth()->user();
        $category = Category::findOrFail($id);
        return view('dashboard.vendors.category.edit', compact('user', 'category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);
        $valid = $request->validate([
            'name' => ['required', Rule::unique('categories')->ignore($category)],
            'image' => 'mimes:jpg,png,jpeg,mp4'
        ]);

        $category->name = $request->name ?? $category->name;

        if ($request->hasFile('image')) {
            if ($category->image) {
                Storage::delete($category->image);
            }
            $category->update(array_merge($valid, ['image' => $request->file('image')->store('images/category', 'public')]));
        } else {
            $category->update(array_merge($valid));
        }

        return redirect(route('vendor.dashboard.category.index', absolute: false));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category, $id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect()->back()->with('message', 'Message deleted Successfully');
    }
}

