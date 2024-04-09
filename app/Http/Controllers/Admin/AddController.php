<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductCategory;
use Illuminate\Support\Facades\Storage;

class AddController extends Controller
{
    public function index()
    {
        return view('admin.Category.index');
    }
    public function create()
    {
        $data = ProductCategory::all();
        return view('admin.Category.create',compact('data'));
    }
    //
    public function store(Request $request)
    {

        $request->validate([
            'productcategory' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = new ProductCategory;
        $data->product_category = $request->productcategory;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            Storage::putFileAs('public/images', $image, $imageName);
            $data->image = 'storage/images/' . $imageName;
        }

        $data->save();

        return redirect()->back()->with('message','Product Category Successfully Inserted');

    }

    public function delete($id) {
        $data = ProductCategory::find($id);
        $data->delete();
        return redirect()->back()->with('message','Product Category Successfully ');
    }

    public function edit($id)
    {
        $data = ProductCategory::findOrFail($id);
        return view('admin.category.edit', compact('data'));
    }

    public function edit_me(Request $request, $id)
    {
        $request->validate([
            'productcategory' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $category = ProductCategory::findOrFail($id);
        $category->product_category = $request->productcategory;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            Storage::putFileAs('public/images', $image, $imageName);
            $category->image = 'storage/images/' . $imageName;
        }

        $category->save();

        return redirect()->back()->with('message', 'Product Category Updated Successfully');
        // return redirect()->route('admin.category.edit')->with('message', 'Product Category Updated Successfully');
    }
}
