<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Category;
use Illuminate\Support\Facades\Validator;
class MenuController extends Controller
{
    public function index()
    {
        $menus = Menu::with('category')->get();
        return view('admin.menu.index', compact('menus'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.menu.create', compact('categories'));
    }



    public function Store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'category_id' => 'required',
            'name' => 'required|string|max:255',
            'description' => 'string',
            'price' => 'required|numeric',
        ], [
            'category_id.required' => 'Please choose a category.',

        ]);

        if ($validator->fails() ) {
            return redirect()->back()->withErrors($validator)->withInput();
        }



            Menu::insert([
                'category_id' => $request->category_id,
                'name' => $request->name,
                'price' => $request->price,
                'description' => $request->description,
                'created_at' => Carbon::now()
            ]);


        $notification = [
            'message' => 'MenuInserted Successfully',
            'alert-type' => 'success'
        ];

        return redirect()->route('menus.index')->with($notification);
    }





    public function edit($id)
    {
        $menu = Menu::findOrFail($id);
        $categories = Category::all();
        return view('admin.menu.edit', compact('menu', 'categories'));
    }


    public function update(Request $request, $id)
    {

        $request->validate([
            'category_id' => 'required',
            'name' => 'required|string|max:255',
            'description' => 'string',
            'price' => 'required|numeric',
        ], [
            'category_id.required' => 'Please choose a category.',

        ]);
        $menu_id = $request->id;
        Menu::findOrFail($menu_id)->update([
            'category_id' => $request->category_id,
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'created_at' => Carbon::now()


        ]);

        $notification = array(
            'message' => 'Menu Updated  Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('menus.index')->with($notification);
    }
    public function UpdateMenu(Request $request){
        $validator = Validator::make($request->all(), [
            'category_id' => 'required',
            'name' => 'required|string|max:255',
            'description' => 'string',
            'price' => 'required|numeric',

        ], [

        ]);

        if ($validator->fails() ) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $category_id = $request->id;


            Menu::findOrFail($category_id)->update([
                'category_id' => $request->category_id,
                'name' => $request->name,
                'price' => $request->price,
                'description' => $request->description,
                'created_at' => Carbon::now()
            ]);

            $notification = array(
                'message' => 'Menu Updated Successfully',
                'alert-type' => 'success'
            );
            return redirect()->route('menus.index')->with($notification);

    }// End Method

    public function DeleteMenuItem($id)
    {


        Menu::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Menu item Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }// End Method

}
