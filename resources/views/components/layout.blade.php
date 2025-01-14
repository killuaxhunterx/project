<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pixel Position</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;500;600&display=swap">
    @vite(['resources/js/app.js'])
</head>
<body class="bg-black text-white font-hanken-grotesk pb-20">
    <div class="px-10">
        <nav class=" flex justify-between items-center border-b border-white/10 py-4">
            <div>
                <a href="/">
                    <img src="{{Vite::asset('/resources/images/logo.svg')}}" alt="">
                </a>
            </div>
            <div class="space-x-10 font-bold">
                <a href="/">Jobs</a>
                <a href="#">Careers</a>
                <a href="#">Salaries</a>
                <a href="#">Companies</a>
            </div>
            <div class="space-x-6 flex">
                @auth
                <a href="/jobs/create">Post a job</a>
                
                <form method="POST" action="/logout">
                    @csrf
                    @method('DELETE')
                    <button>Log out </button>
                </form>
                @endauth
            </div>

            @guest()
            <div class="space-x-10 font-bold">
                <a href="/register">Sign in</a>
                <a href="/login">Log In</a>
            </div>
            @endguest
        </nav>
        <main class="mt-10 max-w-[986px] mx-auto">
            {{$slot}}
        </main>
        <footer>

        </footer>
    </div>

    
</body>
</html>