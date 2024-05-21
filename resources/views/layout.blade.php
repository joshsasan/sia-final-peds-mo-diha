<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pedals Mo Diha</title>
    <script src="https://cdn.tailwindcss.com"></script>
    
    <style>
        #title {
            font-family: Arial, Helvetica, sans-serif;
            font-weight: bold;
            letter-spacing: 0.1ch;
        }

        .title {
            font-family: sans-serif;
            letter-spacing: 0.1ch;
        }

        .nav {
            font-family: sans-serif;
            opacity: 0.5;
            transition-duration: 500ms;
        }

        .nav:hover {
            opacity: 0.9;
            cursor: pointer;
        }

        #sidebar {
            transition: transform 0.3s ease-in-out;
            transform: translateX(-100%);
        }

        #sidebar.active {
            transform: translateX(0);
        }

        #menu-button {
            position: absolute;
            top: 1rem;
            left: 1rem;
            z-index: 10;
            cursor: pointer;
            color: gray
        }

        #logo {
            margin-top: 1rem;
            text-align: center;
        }

        #logo img {
            max-width: 100px;
        }
    </style>
</head>
<body>
    <div id="main" class="bg-gray-950 flex h-screen relative">
        <div id="menu-button" class="text-white p-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M3 5h14a1 1 0 010 2H3a1 1 0 010-2zm0 4h14a1 1 0 010 2H3a1 1 0 010-2zm0 4h14a1 1 0 010 2H3a1 1 0 010-2z" clip-rule="evenodd" />
            </svg>
        </div>
        <div id="sidebar" class="fixed top-0 left-0 w-1/4 bg-gray-800 text-white h-full p-4 z-20">
            <h1 id="title" class="text-3xl mb-8 opacity-70 hover:opacity-100 duration-500 cursor-pointer">Pedals Mo Diha</h1>
            <nav id="main-nav">
                <div id="logo">
                    <img src="peds.webp" alt="Pedals Mo Diha Logo">
                </div>
                <ul class="space-y-4 text-xl">
                    <li><a class="nav block" href="{{ url('/') }}">Home</a></li>
                    <li><a class="nav block" href="{{ url('/pedals') }}">Pedals</a></li>
                    <li><a class="nav block" href="{{ url('/about') }}">About</a></li>
                </ul>
            </nav>
            
        </div>
        <div id="content" class="bg-gray-900 w-full p-8">
            @yield('content')
        </div>
    </div>
    <script>
        document.getElementById('menu-button').addEventListener('click', function () {
            document.getElementById('sidebar').classList.toggle('active');
        });
    </script>
</body>
</html>
