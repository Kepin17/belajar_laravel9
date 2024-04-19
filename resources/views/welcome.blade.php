@extends('layouts.pageLayout')

@section("pageContent")

    <header class="w-full h-1/2 flex justify-center items-center relative" id="slider">

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
    </header> 

    <main>
    <section class='product-section w-full h-screen  my-5'>
        <div class="product-wrapper border-2">
          <h1 class="product-title font-bold text-3xl p-3">Product</h1>
          <div class="card-wrapper w-full h-full p-3  overflow-hidden">

          @foreach ($products as $product)
          <div class="card w-[20rem] h-[25rem] rounded-md overflow-hidden inline-block m-3 shadow-lg">
            <div class="card-img w-full h-1/2 border-2  overflow-hidden">
              <img src="{{ asset('storage/'.$product->product_image) }}" alt="{{$product->product_name}}-img" class="w-full h-full object-cover">
            </div> 
            <div class="cart-textbox w-full h-[8rem] flex flex-col gap-2 p-3">
              <h3 class="card-title font-bold text-xl">{{$product->product_name}}</h3>
              <p>{{$product->product_description}}</p>
            </div>
            <div class="button-cart-wrapper w-full h-[3rem] flex items-center justify-between p-3">
            <div>
              <button class="button-cart bg-violet-500 w-32 h-9 rounded-md font-bold text-slate-100"><i class="fa-solid fa-cart-plus"></i> Add To Cart</button>
              <button class="button-cart bg-violet-500 w-10 h-9 rounded-md font-bold text-slate-100"><i class="fa-solid fa-eye"></i></button>
            </div>  
              <p>$ {{$product->product_price}}</p>
            </div>
          </div> 
          @endforeach
          </div>
        </div>
      </section>
    </main>
@endsection