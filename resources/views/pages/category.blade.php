@extends('layouts.main')

@section('title', 'Category')

@section('content')
<div class="container mx-auto">
    <nav class="navbar bg-base-100 py-8">
        <div class="flex-1">
            <a href="{{ route('home') }}" class="btn btn-ghost normal-case text-xl">Harisenin Studycase</a>
        </div>
        <div class="flex-none">
            <ul class="menu menu-horizontal px-1">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('product') }}">Product</a></li>
                <li><a href="{{ route('category') }}">Category</a></li>
            </ul>
        </div>
    </nav>

    <section class="flex flex-col gap-4">
        <h1 class="text-3xl font-semibold">Latest Category</h1>
        <div class="grid grid-flow-row grid-cols-4 gap-12">
            @foreach($categories as $category)
            <div class="card w-full bg-base-100 shadow-xl">
                <figure><img src="{{ $category->path }}" /></figure>
                <div class="card-body">
                    <div class="flex justify-between items-center">
                        <h2 class="card-title text-2xl">{{ $category->category_name }}</h2>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
</div>
