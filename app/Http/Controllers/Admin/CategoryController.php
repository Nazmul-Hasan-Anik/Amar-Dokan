<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        return view('admin.category.index');
    }
    public function add()
    {
        return view('admin.category.add');
    }
    public function insert(Request $request)
    {
        $category= new Category();
        if($request->hasFile('image'))
        {
            $file=$request->file('image');
            $ext=$file->getClientOriginalExtension();
            $filename=time().".".$ext;
            $file->move('asset.upload.category'.$filename);
            $category->image=$filename;

        }

        $category->name=$request->input('name');
        $category->slug=$request->input('slug');
        $category->description=$request->input('description');
        $category->status=$request->input('status')==TRUE ? '1':'0';
        $category->status=$request->input('popular')==TRUE ? '1':'0';
        $category->meta_title=$request->input('meta_title');
        $category->meta_descrip=$request->input('meta_descrip');
        $category->meta_keywords=$request->input('meta_keywords');
        $category->save();
        // return Redirect()->route('home.page')->with('status','Category inserted successfully');
    }
}