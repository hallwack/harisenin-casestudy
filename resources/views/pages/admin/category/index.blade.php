@extends('layouts.admin')

@section('title', 'Category')

@section('content')
<div class="py-12 container mx-auto gap-8 flex flex-col">
    <div class="flex justify-between">
        <h1 class="text-3xl font-semibold">Category</h1>
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
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- row 1 -->
                <tr>
                    <th>1</th>
                    <td>Berita</td>
                    <td>berita</td>
                    <td><img src="https://placeimg.com/400/225/arch" class="object-cover w-48 rounded-md" alt=""></td>
                    <td>
                        <div class="dropdown">
                            <label tabindex="0" class="btn">Click</label>
                            <ul tabindex="0" class="dropdown-content menu p-2 shadow bg-base-100 rounded-box w-52">
                                <li><a>Edit</a></li>
                                <li><a>Delete</a></li>
                            </ul>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th>1</th>
                    <td>Berita</td>
                    <td>berita</td>
                    <td><img src="https://placeimg.com/400/225/arch" class="object-cover w-48 rounded-md" alt=""></td>
                    <td>
                        <div class="dropdown">
                            <label tabindex="0" class="btn m-1">Click</label>
                            <ul tabindex="0" class="dropdown-content menu p-2 shadow bg-base-100 rounded-box w-52">
                                <li><a>Edit</a></li>
                                <li><a>Delete</a></li>
                            </ul>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th>1</th>
                    <td>Berita</td>
                    <td>berita</td>
                    <td><img src="https://placeimg.com/400/225/arch" class="object-cover w-48 rounded-md" alt=""></td>
                    <td>
                        <div class="dropdown">
                            <label tabindex="0" class="btn m-1">Click</label>
                            <ul tabindex="0" class="dropdown-content menu p-2 shadow bg-base-100 rounded-box w-52">
                                <li><a>Edit</a></li>
                                <li><a>Delete</a></li>
                            </ul>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
