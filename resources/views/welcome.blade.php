@extends('layouts.pageLayout')

@section("pageContent")

    <header class="w-full h-1/2 flex justify-center items-center border-2 relative" id="slider">

      @auth
      <img src="https://images.tokopedia.net/img/cache/1208/NsjrJu/2024/4/5/f81fc664-aeaf-441d-b1e4-f115e5eb23ae.jpg.webp?ect=4g" alt="slider" >
     
     <!-- Arrow control section -->
      <div class="leftArrow w-10 h-10 absolute top-1/2 left-10 -rotate-90 bg-slate-100 p-2 rounded-full flex items-center justify-center cursor-pointer transition-all duration-300 ease-in-out" id="leftArrow">
        <i class="fa-solid fa-chevron-up"></i>
      </div>
      <div class="rightArrow w-10 h-10 absolute top-1/2 right-10 bg-slate-100 p-2 rounded-full rotate-90 flex items-center justify-center cursor-pointer transition-all duration-300 ease-in-out" id="rightArrow">
        <i class="fa-solid fa-chevron-up"></i>
      </div>

      <!-- dot control section -->
      <div class="dot-wrapper absolute bottom-4 left-10 flex gap-3">
        <div class="dot w-[1rem] h-[1rem] rounded-full bg-slate-100 cursor-pointer"></div>
        <div class="dot w-[1rem] h-[1rem] rounded-full bg-slate-300 cursor-pointer"></div>
        <div class="dot w-[1rem] h-[1rem] rounded-full bg-slate-300 cursor-pointer"></div>
      </div>
      @endauth

      @guest
      
      @endguest
    </header> 
@endsection