@extends('layouts.app')

@section('content')
<div class="form-wrapper w-full h-screen flex items-center justify-center ">
    <section class="form-container w-auto h-auto border-2 p-20 rounded-md shadow-lg">
        <div>
            <h1 class="form-title text-center font-bold text-xl">{{__('Login Page')}}</h1>
            <form method="POST" action="{{ route('login') }}" class='mt-4'>
            @csrf
            <div class="flex flex-col gap-2">
                <label for="email">{{__('Email')}}</label>
                <input class="border-2 focus:outline-none p-2 rounded-md" type="email" name="email" id="email" placeholder="{{__('Email')}}" value="{{ old('email') }}" autocomplete="false" required>
            </div>
            
            <div class="flex flex-col gap-2">
                <label for="password">{{__('Password')}}</label>
                <input class="border-2 focus:outline-none p-2 rounded-md" type="password" name="password" id="password" placeholder="{{__('Password')}}"  autocomplete="false" required>    
            </div>
            
            <small>{{__("Don't have an account?")}} <a href="{{route('register')}}" class="text-blue-500">{{__('Register')}}</a></small>
            <button type="submit" class="btn w-full h-10 bg-green-500 text-white rounded-lg mt-3">{{__('Login')}}</button>
            </form>
        </div>
    </section>
</div>
@endsection
