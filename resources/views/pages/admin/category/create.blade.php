@extends('layouts.admin')

@section('title', 'Create Category')

@section('content')
<div class="py-12 container mx-auto gap-8 flex flex-col">
    <div class="flex justify-between">
        <h1 class="text-3xl font-semibold">Category - Create</h1>
    </div>
    <form action="{{ route('categories.store') }}" method="POST" class="flex flex-col h-full gap-6" enctype="multipart/form-data">
        <div class="form-control w-full max-w-xs">
            @csrf
            <label class="label" for="name">
                <span class="label-text">What is your name?</span>
            </label>
            <input type="text" name="name" id="name" placeholder="Type here"
                class="py-2 px-4 rounded-lg input input-bordered w-auto max-w-xs" />
        </div>
        <div class="form-control w-full max-w-xs">
            <label class="label" for="image">
                <span class="label-text">Pick a file</span>
            </label>
            <input type="file" name="image" id="image" class="file-input file-input-bordered w-auto max-w-xs" />
        </div>
        <button class="btn btn-primary self-start w-fit">Submit</button>
    </form>
</div>
@endsection
