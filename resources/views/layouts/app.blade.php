<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- css -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    <div id="app">
       <nav class='w-full h-12 bg-green-600 flex items-center justify-between shadow-md shadow-slate-700 fixed top-0'>
        <h1 class="logo text-red ml-5 font-bold text-white">
            <a href="/">
             MiniPedia
            </a>
        </h1>
        <div class="navItem flex items-center gap-3 text-white ">
        <ul class="navItem flex items-center gap-3 text-white text-sm">    
                <li>
                    <a href="">Home</a>
                </li>
                <li>
                    <a href="">Product</a>
                </li>
                <li>
                    <a href="">Cart</a>
                </li>

                @auth
                @if(Auth::user()->is_admin == 1)
                <button class="text-white bg-blue-700 p-2 font-bold rounded" 
                onClick="window.location.href='/admin/dashboard'"
                >Admin Dashboard</button>
                @endif
                @endauth

            </ul>
            <div class="profile-wrapper mr-4 relative">
                <img src="https://source.unsplash.com/200x200/?profile" class='rounded-full cursor-pointer' alt="profile" width='40px' height='40px' id="profileAction">
                <div class="profile-dropdown w-24 h-[5rem] bg-white absolute right-0 shadow-md rounded-md overflow-hidden hidden flex flex-col items-center justify-center gap-1" id="dropdownAction">
                    
                    <!-- Auth Link  -->
                    
                    @guest
                        @if(Route::has('login'))
                        <a href='{{route("login")}}' class="text-slate-700 w-full h-1/2 text-sm hover:bg-slate-700 hover:text-slate-100 transition-all flex items-center pl-2">Login</a>
                        @endif
                        
                        @if(Route::has("register"))
                        <a href='{{route("register")}}' class="text-slate-700 w-full h-1/2 text-sm hover:bg-slate-700 hover:text-slate-100 transition-all flex items-center pl-2">Register</a>
                        @endif
                        
                        @else
                        <form action="{{route('logout')}}" method="post" class="flex flex-col items-center w-full h-full">
                            @csrf
                                <button class="text-slate-700 w-full h-full text-sm hover:bg-slate-700 hover:text-slate-100 transition-all ">{{__('My Profile')}}</button>
                                <button type="submit" class="text-slate-700 w-full h-full text-sm hover:bg-slate-700 hover:text-slate-100 transition-all ">{{__('Logout')}}</button>
                            </form>
                    @endguest     

                </div>
            </div>
        </div>
       </nav>
        <main>
            @yield('content')
        </main>
    </div>
    
    <!-- script -->
    <script src='{{asset("js/dashboard.js")}}'></script>
</body>
</html>
