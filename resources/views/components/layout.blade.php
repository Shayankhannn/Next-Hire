<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Next Hire</title>
    @vite(['resources/js/app.js'])
</head>
<body>
    <div class="">
        <nav>
            <div class="">
                <a href="">
         <img src="{{ Vite::asset('resources/images/next-hire.png') }}" alt="" class="">
                </a>
            </div>
            <div class="">
                <ul class="">
                    <li class=""></li>
                    <li class=""></li>
                    <li class=""></li>
                </ul>
            </div>
            <div class="">

            </div>
        </nav>

        <main>
            {{ $slot }}
        </main>

    </div>
</body>
</html>