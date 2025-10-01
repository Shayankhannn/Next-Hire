<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Next Hire</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="bg-black text-white pb-10">
    <div class="px-10">
        <nav class="flex justify-between items-center py-4 border-b border-white/10">
            <div >
                <a href="">
         <img class="w-20 h-auto cover " src="{{ Vite::asset('resources/images/next-hire.png') }}" alt="" >
                </a>
            </div>
            <div class="space-x-6 font-bold">
               <a href="" >Job</a>
               <a href="" >Careers</a>
               <a href="" >Salaries</a>
               <a href="" >Companies</a>
            </div>
            @auth
                <div >
                <a href="/jobs/create">Post a Job </a>
            </div>
                <div >
                    <x-forms.form method="DELETE" action="/logout" class="inline">
                        <button type="submit">LogOut</button>
                    </x-forms.form>
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