<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return view('admin.categories.index', compact('categories'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.categories.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ], [
            'name.required' => 'The name field is required.',
            'name.alpha' => 'The name field should only contain alphabetic characters.',
        ]);

        Category::insert([
            'name' => $request->name,
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Category Inserted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('categories.index')->with($notification);


    }


//    public function show($id)
//    {
//        $category = Category::findOrFail($id);
//        return view('categories.show', compact('category'));
//    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.categories.edit', compact('category'));
    }

//    public function update(Request $request, $id)
//    {
//        $request->validate([
//            'name' => 'required|string|max:255',
//        ]);
//
//        $category = Category::findOrFail($id);
//        $category->update($request->all());
//
//        return redirect()->route('categories.index')->with('success', 'Category updated successfully.');
//    }


    public function UpdateCategory(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ], [
            'name.required' => 'The name field is required.',
            'name.alpha' => 'The name field should only contain alphabetic characters.',
        ]);

        $category_id = $request->id;
            Category::findOrFail($category_id)->update([
                'name' => $request->name,
            ]);
            $notification = array(
                'message' => 'Category Updated Successfully',
                'alert-type' => 'success'
            );
            return redirect()->route('categories.index')->with($notification);
    } // End Method


    public function DeleteCategory($id){

        $categories = Category::findOrFail($id);


        Category::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Category Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }// End Method
}
