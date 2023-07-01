<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\Category;
use App\Models\Measure;

class AddProduct extends Component
{
    
       public $category_id;
       public $category_list = [];
       public $name_fr;
       public $name_en;
       public $price;
       public $weight;
       public $width;
       public $length;
       public $height;
       public $measure_id;
       public $measure_list = [];
       public $description_fr;
       public $description_en;
       public $materials_fr;
       public $materials_en;
       public $instruction_fr;
       public $instruction_en;
       public $price_with_discount;
       public $nb_views = 0;

       public $image_path;

       public function mount()
    {
        $this->category_list = Category::all();
        $this->measure_list = Measure::all();
    }
       
    public function render()
    {
        return view('livewire.add-product');
    }

    public function save()
    {
        $product = new Product();
        $product->category_id = $this->category_id;
        $product->name_fr =  $this->name_fr;
        $product->name_en = $this->name_en;
        $product->price =  $this->price;
        $product->weight =  $this->weight;
        $product->width = $this->width;
        $product->length = $this->length;
        $product->height = $this->height;
        $product->measure_id = $this->measure_id;
        $product->description_fr = $this->description_fr; 
        $product->description_en = $this->description_en;
        $product->materials_fr = $this->materials_fr;
        $product->materials_en =  $this->materials_en;
        $product->instruction_fr =  $this->instruction_fr;
        $product->instruction_en = $this->instruction_en;

        $product->price_with_discount = $this->price_with_discount;
        $product->nb_views = $this->nb_views;

        
        $product-> image_path = "pusto";

        $product->save();
    }
}
