@extends('layouts.admin')

@section('title', 'Product')

@section('content')
<div class="py-12 container mx-auto gap-8 flex flex-col">
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
@endsection
