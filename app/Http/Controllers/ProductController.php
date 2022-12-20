<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Carbon\Carbon;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use function App\Http\Controllers\slugTitle as ControllersSlugTitle;

class ProductController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $products = Product::with('asset')->get();
    return view('pages.admin.product.index', ['products' => $products]);
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

    function slugTitle($req)
    {
      $slug = Str::slug($req);
      $slug .= '-';
      $slug .= Carbon::parse(now())->format('mdY');
      return $slug;
    }

    $item['product_name'] = $slug =  $request->name;
    $item['product_slug'] = ControllersSlugTitle($slug);
    $item['price'] = $request->price;
    $item['description'] = $request->desc;

    foreach ($request->file('image') as $imgFile) {
      $upload = Cloudinary::upload($imgFile->getRealPath())->getSecurePath();
      $dataImg[] = [
        'name' => $imgFile->getFilename() . '.' . $imgFile->getClientOriginalExtension(),
        'path' => $upload,
        'size' => $imgFile->getSize()
      ];
    }

    $product = new Product();
    $product = $product->create($item);
    $product->asset()->createMany($dataImg);

    return redirect()->route('products.index');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\Product  $product
   * @return \Illuminate\Http\Response
   */
  public function show(Product $product)
  {
    $product->asset->first();
    return view('pages.admin.product.details', ['product' => $product]);
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
