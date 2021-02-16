<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $query=DB::select("select p.id,p.title,p.sku,p.description,pimg.file_path from products p,product_images pimg where p.id=pimg.product_id");
        return view('product.index',["products"=>$query]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $title=$request->txtTitle;
        $sku=$request->txtSKU;
        $desc=$request->txtDescription;
        $img=$request->input_img;

        if(isset($img)){
            $filename=time().'.'.$request->input_img->extension();
            $request->file('input_img')->move(public_path('product_img'),$filename);
        }
        $img="no_photo";
        DB::insert("insert into products(title,description,sku)values('$title','$sku','$desc')");
        DB::insert("insert into product_images(file_path)values('$filename')");

        return redirect('products'); 

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
