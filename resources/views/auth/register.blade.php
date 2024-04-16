@extends('layouts.app')

@section('content')

<div class="form-wrapper w-full h-screen flex items-center justify-center ">
    <section class="form-container w-auto h-auto border-2 p-20 rounded-md shadow-lg">
        <div>
            <h1 class="form-title text-center font-bold text-xl">{{__('Register Page')}}</h1>
            <form method="POST" action="{{ route('register') }}" class='mt-4'>
            @csrf
            <div class="flex flex-col gap-2"> 
                <label for="name">{{__('Name')}}</label> 
                <input class="border-2 focus:outline-none p-2 rounded-md" type="text" name="name" id="name" placeholder="{{__('Name')}}" value="{{ old('name') }}" autocomplete="false" required>
            </div>
        
            <div class="flex flex-col gap-2">
                <label for="email">{{__('Email')}}</label>
                <input class="border-2 focus:outline-none p-2 rounded-md" type="email" name="email" id="email" placeholder="{{__('Email')}}" value="{{ old('email') }}" autocomplete="false" required>
            </div>
            
            <div class="flex flex-col gap-2">
                <label for="password">{{__('Password')}}</label>
                <input class="border-2 focus:outline-none p-2 rounded-md" type="password" name="password" id="password" placeholder="{{__('Password')}}"  autocomplete="false" required>    
            </div>
            
            
            <div class="flex flex-col">
                <label for="checkpassword">{{__('Recheck Password')}}</label>
                <input class="border-2 focus:outline-none p-2 rounded-md" type="password" name="password_confirmation" id="password_confirmation" placeholder="{{__('Recheck Password')}}" autocomplete="false" required>    
            </div>
            <small>{{__('Already have an account?')}} <a href="{{route('login')}}" class="text-blue-500">{{__('Login')}}</a></small>
            <button type="submit" class="btn w-full h-10 bg-green-500 text-white rounded-lg mt-3">{{__('Register')}}</button>
            </form>
        </div>
    </section>
</div>
@endsection
