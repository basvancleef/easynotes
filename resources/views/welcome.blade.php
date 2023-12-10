<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>EasyNotes</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="relative flex justify-center items-center min-h-screen bg-center">
        <div class="max-w-7xl mx-auto p-6 lg:p-8">
            <div class="flex justify-center">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500"/>
            </div>

            <div class="italic text-center mt-4">Your Thoughts, Simply Organized.</div>

            <div class="mt-16">
                <div class="grid grid-cols-2 md:grid-cols-2 gap-6 lg:gap-8">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold rounded-md text-center bg-[#7CDD86] py-2 px-2.5 text-white hover:bg-[#5FBA68]" wire:navigate>Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold rounded-md text-center bg-[#7CDD86] py-2 px-2.5 text-white hover:bg-[#5FBA68]" wire:navigate>Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="sm:ms-4 rounded-md font-semibold bg-[#7CDD86] py-2 px-2.5 text-center text-white hover:bg-[#5FBA68]" wire:navigate>Register</a>
                        @endif
                    @endauth
                </div>
            </div>

            <div class="flex justify-center mt-16 px-0">
                <div class="text-center text-sm text-gray-500 dark:text-gray-400 sm:text-start">
                    <div class="flex items-center gap-4">
                        <a href="https://github.com/basvancleef"
                           class="group inline-flex items-center hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                            Bas van Cleef
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
