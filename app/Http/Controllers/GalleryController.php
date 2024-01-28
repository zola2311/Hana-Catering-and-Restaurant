<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;

class GalleryController extends Controller
{

    public function create()
    {
        return view('admin.galleries.create');
    }

    public function StoreMultiImage(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'images' => 'required|array',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ], [
            'images.required' => 'Please select at least one image.',
            'images.array' => 'The images must be an array.',
            'images.*.image' => 'The file must be an image.',
            'images.*.mimes' => 'Only JPEG, PNG, JPG,WEBP, and GIF images are allowed.',
            'images.*.max' => 'The maximum file size allowed is 2MB.',
        ]);


        if ($validator->fails() || $request->file('images') === null) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $image = $request->file('images');

        foreach ($image as $multi_image) {
            $name_gen = hexdec(uniqid()) . '.' . $multi_image->getClientOriginalExtension();
            Image::make($multi_image)->resize(1024, 800)->save('upload/images/' . $name_gen);
            $save_url = 'upload/images/' . $name_gen;


            Gallery::insert([
                'images' => $save_url,
                'created_at' => Carbon::now()
            ]);
        }

        $notification = [
            'message' => 'Image Inserted Successfully',
            'alert-type' => 'success'
        ];

        return redirect()->route('all.images')->with($notification);
    }






    public function AllImages(){

        $allImages = Gallery::all();
        return view('admin.galleries.index',compact('allImages'));

    }// End Method

    public function EditImage($id){

        $editableImage = Gallery::findOrFail($id);
        return view('admin.galleries.edit',compact('editableImage'));

    }// End Method

    public function UpdateImage(Request $request){
        $validator = Validator::make($request->all(), [
            'images' => 'required|image|mimes:jpeg,png,WEBP,jpg,gif|max:2048',

        ], [

            'images.required' => 'Please select at least one image.',
            'images.image' => 'The file must be an image.',
            'images.mimes' => 'Only JPEG, PNG, JPG, and GIF images are allowed.',
            'images.max' => 'The maximum file size allowed is 2MB.',
        ]);

        if ($validator->fails() || $request->file('images') === null) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $multi_image_id = $request->id;
        if ($request->file('images')) {
            $image = $request->file('images');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();  // 3434343443.jpg
            Image::make($image)->resize(1024, 800)->save('upload/images/' . $name_gen);
            $save_url = 'upload/images/'.$name_gen;

            Gallery::findOrFail($multi_image_id)->update([
                'images' => $save_url,
            ]);

            $notification = array(
                'message' => 'Image Updated Successfully',
                'alert-type' => 'success'
            );

            return redirect()->route('all.images')->with($notification);

        }

    }// End Method


    public function DeleteImage($id){

        $multi = Gallery::findOrFail($id);
        $img = $multi->images;
        unlink($img);

        Gallery::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Image Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);


    }// End Method
    public function deletemultipleimages(Request $request)
    {
        $selectedImages = $request->input('selected_images');

        if (!empty($selectedImages)) {
            // Delete the selected images
            Gallery::whereIn('id', $selectedImages)->delete();

            $request->session()->flash('alert-type', 'success');
            $request->session()->flash('message', 'Selected images deleted successfully.');

            return redirect()->route('all.images');
        } else {
            $notification = array(
                'message' => 'Please select at least one image to delete.',
                'alert-type' => 'warning'
            );

            return redirect()->back()->with($notification);
        }
    }
}
