<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Harisenin Studycase - @yield('title')</title>
</head>

<body>
    <div class="flex min-h-screen">
        <div class="flex w-96 flex-col items-center justify-between bg-inherit py-12">
            <div class="flex w-full flex-col gap-12">
                <h1 class="text-center text-xl font-medium">Harisenin Studycase</h1>
                <div class="flex flex-col gap-8 mx-8">
                    <a class="h-8 flex-row items-center border-r-sky-300 text-lg font-medium">Home</a>
                    <a class="h-8 flex-row items-center border-r-sky-300 text-lg font-medium">Product</a>
                    <a class="h-8 flex-row items-center border-r-sky-300 text-lg font-medium">Category</a>
                </div>
            </div>
        </div>
        <div class="flex flex-col w-full">
            @yield('content')
        </div>
    </div>
</body>

</html>
