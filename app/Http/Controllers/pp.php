<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
    public function index()
    {
        $products = Product::latest()->paginate(2);
        return view('welcome',compact('products'));
    }
    public function store(){
        Product::create([
            'title' => 'This is product Three',
            'description' => 'Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero',
            'sku' => 'GT_003'
        ]);
    }
}
