<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Slider;

class ProductController extends Controller
{
    public function welcome()
    {
        $products = Product::get();
        $sliders = Slider::get();
        return view('welcome', ['products'=> $products, 'sliders'=> $sliders]);
    }

    public function detail($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();
        $products = Product::limit(6)->get();

        return view('detail', ['product'=> $product, "products"=> $products]);
    }


    public function sliders()
    {
        $sliders = Slider::get();
        return view('admin/slider', ['sliders'=> $sliders]);
    }
    
    public function storeslider(Request $request)
    {
           $request->validate([
               'image' => 'required|image|mimes:png,jpg,jpeg|max:2048'
           ]);
   
           $imageName = time().'.'.$request->image->extension();
   
           // Public Folder
           $request->image->move(public_path('images'), $imageName);
   
           $sldier = Slider::firstOrCreate([
            'title' => $request->input("title"),
               'image' => $imageName
           ]);

           return back()->with('success', 'Image uploaded Successfully!')
           ->with('image', $imageName);
       }
       public function sliderdelete($id)
       {
           $product = Slider::where('id', $id)->delete();
   
           return redirect('admin/slider');
       }

       public function categories()
       {
           $categories = Category::get();
           return view('admin/category', ['categories'=> $categories]);
       }
       
       public function storecategory(Request $request)
       {
              $sldier = Category::firstOrCreate([
               'title' => $request->input("title")
              ]);
      
      
              return back()->with('success', 'Image uploaded Successfully!');
          }
          public function categorydelete($id)
          {
              $product = Category::where('id', $id)->delete();
      
              return redirect('admin/category');
          }


   
       public function index()
    {
        $categories = Category::get();
        return view('admin/index', ['categories'=> $categories]);
    }

    public function list()
    {
        $products = Product::get();

        return view('admin/list', ['products'=> $products]);
    }

    public function delete($slug)
    {
        $product = Product::where('slug', $slug)->delete();

        return redirect('admin/product');
    }

    // Store Image
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:png,jpg,jpeg|max:2048'
        ]);

        $imageName = time().'.'.$request->image->extension();

        // Public Folder
        $request->image->move(public_path('images'), $imageName);

        $products = Product::firstOrCreate([
            'title' => $request->input("title"),
            'slug' => $request->input("slug"),
            'attr' => $request->input("attr"),
            'desc' => $request->input("desc"),
            'image' => $imageName,
            'category' => $request->input("category"),
        ]);


        return back()->with('success', 'Image uploaded Successfully!')
        ->with('image', $imageName);
    }
}
