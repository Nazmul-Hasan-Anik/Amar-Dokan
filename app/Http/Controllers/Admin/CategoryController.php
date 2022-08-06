<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\File;

class CategoryController extends Controller
{
    public function index()
    {
        $categories=Category::all();
        return view('admin.category.index',compact('categories'));
        
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
            $file->move('asset/upload/category',$filename);
            $category->image=$filename;

        }

        $category->name=$request->input('name');
        $category->slug=$request->input('slug');
        $category->description=$request->input('description');
        $category->status=$request->input('status')==TRUE ? '1':'0';
        $category->popular=$request->input('popular')==TRUE ? '1':'0';
        $category->meta_title=$request->input('meta_title');
        $category->meta_descrip=$request->input('meta_descrip');
        $category->meta_keywords=$request->input('meta_keywords');
        $category->save();
        return redirect('categories')->with('success','Category inserted successfully');
    }

    public function edit($id)
    {
        $categories=Category::find($id);
         return view('admin.category.edit',compact('categories'));
    }

    public function update(Request $request,$id)
    {
        $categories=Category::find($id);
        if($request->hasFile('image')){
        $path='asset/upload/category/'.$categories->image;
        if(File::exists($path)){
            File::delete('$path');
        }
            $file=$request->file('image');
            $ext=$file->getClientOriginalExtension();
            $filename=time().".".$ext;
            $file->move('asset/upload/category',$filename);
            $categories->image=$filename;
        }
        $categories->name=$request->input('name');
        $categories->slug=$request->input('slug');
        $categories->description=$request->input('description');
        $categories->status=$request->input('status')==TRUE ? '1':'0';
        $categories->popular=$request->input('popular')==TRUE ? '1':'0';
        $categories->meta_title=$request->input('meta_title');
        $categories->meta_descrip=$request->input('meta_descrip');
        $categories->meta_keywords=$request->input('meta_keywords');
        $categories->update();
        return redirect('categories')->with('success','Category Updated successfully');
    }

    public function delete($id)
    {
        $categories=Category::find($id);
        if($categories->image){
        $path='asset/upload/category/'.$categories->image;
        if(File::exists($path)){
            File::delete('$path');
        }
        $categories->delete();
        return redirect('categories')->with('success','Category deleted successfully');
    }}
}
