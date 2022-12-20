@extends('layouts.main')

@section('title', 'Product')

@section('content')
<div class="container mx-auto">
    <nav class="navbar bg-base-100 py-8">
        <div class="flex-1">
            <a class="btn btn-ghost normal-case text-xl">Harisenin Studycase</a>
        </div>
        <div class="flex-none">
            <ul class="menu menu-horizontal px-1">
                <li><a>Home</a></li>
                <li><a>Product</a></li>
                <li><a>Category</a></li>
            </ul>
        </div>
    </nav>

    <div class="py-12 gap-8 flex flex-col">
        <h1 class="text-3xl font-semibold">{{ $product->product_name }}</h1>
        <div class="flex flex-col gap-4">
            <p class="text-xl">Product Images</p>
            <div class="flex w-full gap-8">
                @foreach($product->asset as $asset)
                <div class="card w-96 bg-base-100 shadow-xl">
                    <figure><img src="{{ $asset->path }}" /></figure>
                    <div class="card-body">
                        <p>Size: {{ floor($asset->size/1024) }} kb</p>
                    </div>
                </div> @endforeach
            </div>
        </div>
        <div class="flex flex-col gap-4">
            <p class="text-xl">Product Price</p>
            <p>${{ $product->price }}</p>
        </div>
        <div class="flex flex-col gap-4">
            <p class="text-xl">Product Description</p>
            <p>{{ $product->description }}</p>
        </div>
    </div>
</div>
@endsection
