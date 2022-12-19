@extends('layouts.admin')

@section('title', 'Create Product')

@section('content')
<div class="py-12 container mx-auto gap-8 flex flex-col">
    <div class="flex justify-between">
        <h1 class="text-3xl font-semibold">Product - Create</h1>
    </div>

    @if (count($errors) > 0)
    <div class="alert alert-error shadow-lg w-auto max-w-xs flex flex-col">
        @foreach ($errors->all() as $error)
        <div>
            <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
            <span>{{ $error }}</span>
        </div>
        @endforeach
    </div>
    @endif

    <form action="{{ route('products.store') }}" method="POST" class="flex flex-col h-full gap-6"
        enctype="multipart/form-data">
        @csrf
        <div class="form-control w-full max-w-xs">
            <label class="label" for="name">
                <span class="label-text">Product Name</span>
            </label>
            <input type="text" name="name" id="name" placeholder="Name"
                class="py-2 px-4 rounded-lg input input-bordered w-auto max-w-xs" />
        </div>
        <div class="form-control w-full max-w-xs">
            <label class="label" for="price">
                <span class="label-text">Product Price</span>
            </label>
            <input type="number" name="price" id="price" placeholder="Price"
                class="py-2 px-4 rounded-lg input input-bordered w-auto max-w-xs" />
        </div>
        <div class="form-control w-full max-w-xs">
            <label class="label" for="image">
                <span class="label-text">Image</span>
            </label>
            <input type="file" name="image[]" id="image" class="file-input file-input-bordered w-auto max-w-xs"
                multiple />
        </div>
        <div class="form-control">
            <label class="label" for="desc">
                <span class="label-text">Product Description</span>
            </label>
            <textarea class="textarea textarea-bordered w-auto max-w-xs h-24" name="desc" id="desc"
                placeholder="Description"></textarea>
        </div>
        <button class="btn btn-primary self-start w-fit">Submit</button>
    </form>
</div>
@endsection
