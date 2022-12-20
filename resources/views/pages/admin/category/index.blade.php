@extends('layouts.admin')

@section('title', 'Category')

@section('content')
<div class="py-12 container mx-auto gap-8 flex flex-col">
    <div class="flex justify-between">
        <h1 class="text-3xl font-semibold">Categories</h1>
        <a href="{{ route('categories.create') }}" class="btn">Create</a>
    </div>
    <div class="overflow-x-auto h-full">
        <table class="table w-full">
            <!-- head -->
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Category Name</th>
                    <th>Category Slug</th>
                    <th>Assets</th>
                </tr>
            </thead>
            <tbody>
                <!-- row 1 -->
                @foreach ($categories as $category)
                <tr>
                    <th>{{ $loop->iteration }}</th>
                    <td>{{ $category->category_name }}</td>
                    <td>{{ $category->category_slug}}</td>
                    <td><img src="{{ $category->path }}" class="object-cover w-48 rounded-md" alt=""></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
