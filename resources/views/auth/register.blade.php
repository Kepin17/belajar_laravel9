@extends('layouts.app')

@section('content')

<div class="form-wrapper w-full h-screen flex items-center justify-center ">
    <section class="form-container w-auto h-auto border-2 p-20 rounded-md shadow-lg">
        <div>
            <h1 class="form-title text-center font-bold text-xl">{{__('Register')}}</h1>
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
<!-- 
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->
@endsection
