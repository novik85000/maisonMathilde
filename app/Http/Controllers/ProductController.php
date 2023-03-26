<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\DeliveryType;
use App\Models\Gallery;
use App\Models\Measure;
use Illuminate\Http\Request;

use App\Models\Product;

class ProductController extends Controller
{

    public function addProduct()
    {
        $category_list = Category::all();

        $measures_list = Measure::all();

        return view('creations-add',
            ['category_list'=> $category_list, 'measure_list'=> $measures_list]) ;
    }

    public function submit(ProductRequest $request)
    {
        $product = new Product();
        $product->category_id = $request->input('category_id');
        $product->name_fr = $request->input('name_fr');
        $product->name_en = $request->input('name_en');
        $product->price = $request->input('price');
        $product->weight = $request->input('weight');
        $product->width = $request->input('width');
        $product->length = $request->input('length');
        $product->height = $request->input('height');
        $product->measure_id = $request->input('measure_id');
        $product->description_fr = $request->input('description_fr');
        $product->description_en = $request->input('description_en');
        $product->materials_fr = $request->input('materials_fr');
        $product->materials_en = $request->input('materials_en');
        $product->instruction_fr = $request->input('instruction_fr');
        $product->instruction_en = $request->input('instruction_en');

        $product->price_with_discount = $request->input('price');
        $product->nb_views = 0;

        $imagePath = $request-> file('imageMain')-> store('public');
        $imagePath_storage = str_replace('public','storage', $imagePath);
        $product-> image_path = $imagePath_storage;

        $product->save();

        // Сохранение файлов

        $paths = [];
        foreach ($request->file('image') as $file){
            $paths[] = $file -> store('public');
        }

        $i = 1;
        foreach ($paths as $path){
            $gallery = new Gallery();
            $gallery-> product_id = $product->id;
            $gallery-> path = str_replace('public','storage', $path);
            $gallery-> position = $i;
            $gallery->save();
            $i++;
        }

        return redirect()-> route('home')-> with('success',  trans('products.alert_success'));
    }

    public function showAllProducts()
    {
        $products = Product::all();

        $files = Gallery:: all();

        $tarifs = DeliveryType::all();


        return view('products.products-all',
            ['products'=> $products, 'files'=> $files, 'tarifs'=> $tarifs]) ;
    }

}
