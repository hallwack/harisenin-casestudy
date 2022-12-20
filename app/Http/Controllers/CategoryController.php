<?php

namespace App\Http\Controllers;

use App\Models\Asset;
use App\Models\Category;
use Carbon\Carbon;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use function App\Http\Controllers\slugTitle as ControllersSlugTitle;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::join('assets', 'categories.asset_id', 'assets.id')->get();
        return view('pages.admin.category.index', ['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.category.create');
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
            'image' => 'required|mimes:jpg,bmp,png'
        ]);

        function slugTitle($req)
        {
            $slug = Str::slug($req);
            $slug .= '-';
            $slug .= Carbon::parse(now())->format('mdY');
            return $slug;
        }

        $item['image'] = $request->file('image');

        $upload = Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();
        $assets_store = Asset::create([
            'name' => $item['image']->getFilename() . '.' . $item['image']->getClientOriginalExtension(),
            'path' => $upload,
            'size' => $item['image']->getSize()
        ]);

        $item['category_name'] = $slug = $request->name;
        $item['category_slug'] = ControllersSlugTitle($slug);
        $item['asset_id'] = $assets_store->id;

        Category::create($item);

        return redirect()->route('categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }
}
