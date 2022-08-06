<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Validation\Rules\Exists;

class FrontController extends Controller
{
    public function index()
    {   $products=Product::where('trending','1')->take(15)->get();
        $trending_cat=Category::where('popular','1')->take(15)->get();
        return view('frontend.index',compact('products','trending_cat'));
    }

    public function category()
    {
        $category=Category::where('status','0')->get();
        return view('frontend.category',compact('category'));
    
    }

    public function viewcategory($slug)
    {
        if (Category::where('slug', $slug)->exists()) {
            $categories=Category::where('slug',$slug)->first();
            $products=Product::where('cate_id',$categories->id)->where('status','0')->get();
            return view('frontend.products.index',compact('categories','products'));
        }

        else{
            return redirect('/')->with('Failed','Slug Not Found');
        }
    }
}
