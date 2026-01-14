<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pixel Positions</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-black-theme text-white pb-20">

    <div class="px-10">
        <header class="border-white/10 border-b py-4">
            <nav class="flex justify-between items-center">
                <a href="/">
                    <span>
                        <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="" />
                    </span>
                </a>

                <ul class="flex space-x-6 font-bold">
                    <li>Jobs</li>
                    <li>Careers</li>
                    <li>Salaries</li>
                    <li>Companies</li>
                </ul>

                @auth
                <div class="flex gap-8">
                    <a href="/jobs/create">Post a job</a>

                    <form method="POST" action="/logout">
                        @csrf
                        @method('DELETE')
                        <button>Log Out</button>
                    </form>
                </div>
                @endauth
                @guest
                <menu class="flex space-x-6 font-bold">
                    <li><a href="/register">Sign Up</a></li>
                    <li><a href="/login">Log In</a></li>
                </menu>
                @endguest

            </nav>
        </header>

        <main class="mt-10 max-w-246.5 mx-auto">
            {{ $slot }}
        </main>
    </div>
</body>
</html>
