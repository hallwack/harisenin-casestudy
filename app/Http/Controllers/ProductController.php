<?php

namespace App\Http\Controllers;

use App\Models\Asset;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    //
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view('pages.admin.product.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $item = $request->validate([
      'name' => 'required',
      'price' => 'required|numeric',
      'image' => 'required',
      'image.*' => 'mimes:jpg,bmp,png',
      'desc' => 'required'
    ]);

    $item['product_name'] = $slug =  $request->name;
    $item['product_slug'] = Str::slug($slug);
    $item['price'] = $request->price;
    $item['description'] = $request->desc;

    foreach ($request->file('image') as $imgFile) {
      $dataImg[] = [
        'name' => $imgFile->getFilename() . '.' . $imgFile->getClientOriginalExtension(),
        'path' => $imgFile->getPathname(),
        'size' => $imgFile->getSize()
      ];
    }

    $product = new Product();
    $product = $product->create($item);
    $product->asset()->createMany($dataImg);

    return view('pages.admin.product.index');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\Product  $product
   * @return \Illuminate\Http\Response
   */
  public function show(Product $product)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\Product  $product
   * @return \Illuminate\Http\Response
   */
  public function edit(Product $product)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Product  $product
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Product $product)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Product  $product
   * @return \Illuminate\Http\Response
   */
  public function destroy(Product $product)
  {
    //
  }
}
