<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Next Hire</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="bg-black text-white pb-10 capitalize">
    <div class="px-10">
        <nav class="flex justify-between items-center py-4 border-b border-white/10">
            <div >
                <a href="">
         <img class="w-20 h-auto cover " src="{{ Vite::asset('resources/images/next-hire.png') }}" alt="" >
                </a>
            </div>
            <div class="space-x-4 font-bold ">
               <a href="" >Job</a>
               <a href="" >Careers</a>
               <a href="" >Salaries</a>
               <a href="" >Companies</a>
            </div>
            @auth
                <div class="flex items-center space-x-3">
                    <div>

                        <a href="/jobs/create" class="bg-blue-600 px-4 py-2 rounded-md hover:bg-blue-700 transition font-bold">Post a Job </a>
                    </div>
            <div >
                    <form method="POST" action="/logout" class="inline">
                        @csrf
                        @method('DELETE')
                        <button class="cursor-pointer bg-white text-black px-4 py-2 rounded-md hover:bg-gray-200 transition font-bold">LogOut</button>
                    </form>
            </div>
            <div>
                
                    {{-- Welcome, {{ auth()->user()->employer->name ?? auth()->user()->name }} --}}
                <img src="{{ auth()->user()->employer->logo ?? auth()->user()->name }}" alt="" class="inline rounded-full w-10 h-10 object-cover ml-2">
                
            </div>
                
            </div>
            @endauth
            @guest
            <div class="space-x-4">
                <a href="/register" class="bg-blue-600 px-4 py-2 rounded-md hover:bg-blue-700 transition">Register</a>
                <a href="/login" class="bg-white text-black px-4 py-2 rounded-md hover:bg-gray-200 transition">Login</a>
            </div>
            @endguest
        </nav>

        <main class="mt-10 max-w-[986px] mx-auto ">
            {{ $slot }}
        </main>

    </div>


    

</body>
</html>