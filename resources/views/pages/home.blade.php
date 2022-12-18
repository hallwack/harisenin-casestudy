@extends('layouts.main')

@section('title', 'Home')

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
                <li tabindex="0">
                    <a>
                        Parent
                        <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                            viewBox="0 0 24 24">
                            <path d="M7.41,8.58L12,13.17L16.59,8.58L18,10L12,16L6,10L7.41,8.58Z" /></svg>
                    </a>
                    <ul class="p-2 bg-base-100">
                        <li><a>Submenu 1</a></li>
                        <li><a>Submenu 2</a></li>
                    </ul>
                </li>
                <li><a>Item 3</a></li>
            </ul>
        </div>
    </nav>

    <section class="flex flex-col gap-4">
        <h1 class="text-3xl font-semibold">Latest Product</h1>
        <div class="grid grid-flow-row grid-cols-4 gap-12">
            <div class="card w-full bg-base-100 shadow-xl">
                <figure><img src="https://placeimg.com/400/225/arch" alt="Shoes" /></figure>
                <div class="card-body">
                    <div class="flex justify-between items-center">
                        <h2 class="card-title text-2xl">Shoes!</h2>
                        <span class="text-md">$500</span>
                    </div>
                    <p>If a dog chews shoes whose shoes does he choose?</p>
                    <div class="card-actions justify-end">
                        <button class="btn btn-primary">Buy Now</button>
                    </div>
                </div>
            </div>
            <div class="card w-full bg-base-100 shadow-xl">
                <figure><img src="https://placeimg.com/400/225/arch" alt="Shoes" /></figure>
                <div class="card-body">
                    <div class="flex justify-between items-center">
                        <h2 class="card-title text-2xl">Shoes!</h2>
                        <span class="text-md">$500</span>
                    </div>
                    <p>If a dog chews shoes whose shoes does he choose?</p>
                    <div class="card-actions justify-end">
                        <button class="btn btn-primary">Buy Now</button>
                    </div>
                </div>
            </div>
            <div class="card w-full bg-base-100 shadow-xl">
                <figure><img src="https://placeimg.com/400/225/arch" alt="Shoes" /></figure>
                <div class="card-body">
                    <div class="flex justify-between items-center">
                        <h2 class="card-title text-2xl">Shoes!</h2>
                        <span class="text-md">$500</span>
                    </div>
                    <p>If a dog chews shoes whose shoes does he choose?</p>
                    <div class="card-actions justify-end">
                        <button class="btn btn-primary">Buy Now</button>
                    </div>
                </div>
            </div>
            <div class="card w-full bg-base-100 shadow-xl">
                <figure><img src="https://placeimg.com/400/225/arch" alt="Shoes" /></figure>
                <div class="card-body">
                    <div class="flex justify-between items-center">
                        <h2 class="card-title text-2xl">Shoes!</h2>
                        <span class="text-md">$500</span>
                    </div>
                    <p>If a dog chews shoes whose shoes does he choose?</p>
                    <div class="card-actions justify-end">
                        <button class="btn btn-primary">Buy Now</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
