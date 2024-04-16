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
       <nav class='w-full h-14 bg-slate-800 flex items-center justify-between shadow-md shadow-slate-700 fixed top-0'>
        <div class="navItem flex items-center gap-10">
            <h1 class="logo text-red ml-5 font-bold text-white text-2xl">
                <a href="/">
                    MiniPedia
                </a>
            </h1>
             
            <!-- search bar -->
            <div class='flex items-center gap-5'>
                <h3 class="text-white font-bold pointer" id='categoryDropdown'>
                    <i class="fa-solid fa-circle-arrow-up" id='categoryDropdownArrow'></i>
                    {{__('Category')}}
                </h3>
                <form action="" method="post">
                    <div class='flex items-center gap-1 w-[40rem] h-10 border-2 bg-white px-2 rounded-md'>
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <input type="text" name="search" id="search" placeholder='Search something?' class='focus:outline-none border-none mx-2 w-full'>
                    </div>
                </form>
            </div>

            
        </div>
        <div class="navItem flex items-center gap-3 text-white ">
        <ul class="navItem flex items-center gap-3 text-white text-md">    
                <li>
                    <a href="/">{{__('Home')}}</a>
                </li>

                <li>
                    <a href="">{{__('Product')}}</a>
                </li>
                
                <li>
                    <button class="pointer text-yellow-500">
                        <i class="fa-solid fa-bell"></i>
                    </button>
                </li>

                <li>
                    <button class="pointer text-violet-500">
                        <i class="fa-solid fa-cart-shopping"></i>
                    </button>
                </li>

                @auth
                @if(Auth::user()->is_admin == 1)
                <button class="text-white bg-blue-700 p-2 font-bold rounded" 
                onClick="window.location.href='/admin/dashboard'">Admin Dashboard</button>
                @endif
                @endauth

            </ul>

            <!-- dropdown profile -->
            @guest
            @if(Route::has('login'))
                <a href="{{ route('login') }}" class="text-slate-700  w-20 h-8 bg-green-500 text-sm hover:bg-green-600 hover:text-slate-100 transition-all flex gap-2 items-center justify-center mr-4 rounded-md">
                    <i class="fa-solid fa-right-to-bracket"></i>
                    {{__('Login')}}
                </a>
                @endif
                
                
                @else
                    <div class="profile-wrapper mr-4 relative">
                        <div class="profile flex items-center gap-2 cursor-pointer">
                            <img src="https://source.unsplash.com/200x200/?profile" class='rounded-full cursor-pointer' alt="profile" width='40px' height='40px' id="profileAction">
                            <p>{{Auth::user()->name}}</p>
                        </div>
                    <div class="profile-dropdown w-32 h-[5rem] bg-white absolute right-0 shadow-md rounded-md overflow-hidden hidden flex flex-col items-center justify-center gap-1" id="dropdownAction">
                        
                    <!-- Auth Link  -->
                    
                        
                        <button class="text-slate-700 w-full h-full text-sm hover:bg-slate-700 hover:text-slate-100 transition-all text-left pl-3" id="profileAction"><i class="fa-solid fa-id-card"></i> {{__('My Profile')}}</button>
                        <form action="{{route('logout')}}" method="post" class="flex flex-col items-center w-full h-full">
                            @csrf
                            <button type="submit" class="text-slate-700 w-full h-full text-sm hover:bg-slate-700 hover:text-slate-100 transition-all text-left pl-3"><i class="fa-solid fa-arrow-right-from-bracket"></i> {{__('Logout')}}</button>
                        </form>

                    </div>
            @endguest     
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
