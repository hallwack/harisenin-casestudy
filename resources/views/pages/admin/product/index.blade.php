@extends('layouts.admin')

@section('title', 'Product')

@section('content')
<div class="py-12 container mx-auto gap-8 flex flex-col">
    <div class="flex justify-between">
        <h1 class="text-3xl font-semibold">Products</h1>
        <a href="{{ route('products.create') }}" class="btn">Create</a>
    </div>
    <div class="overflow-x-auto h-full">
        <table class="table w-full">
            <!-- head -->
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Product Name</th>
                    <th>Product Slug</th>
                    <th>Product Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- row 1 -->
                @foreach ($products as $product)
                <tr>
                    <th>{{ $loop->iteration }}</th>
                    <td>{{ $product->product_name }}</td>
                    <td>{{ $product->product_slug }}</td>
                    <td>{{ $product->price }}</td>
                    <td>
                        <div class="dropdown">
                            <label tabindex="0" class="btn">Click</label>
                            <ul tabindex="0" class="dropdown-content menu p-2 shadow bg-base-100 rounded-box w-52">
                                <li><a href="{{ route('products.show', $product->id) }}">Details</a></li>
                            </ul>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
