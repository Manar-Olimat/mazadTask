@extends('layout')

@section('content')





 
<section class="register_bg">
 {{-- <section class="flex mt-24 items-center flex-1">
  <div class="flex flex-col w-full ">
      <h1 class="text-5xl font-extrabold text-center lg:text-7xl 2xl:text-8xl">
          <span
              class="text-transparent bg-gradient-to-br bg-clip-text from-teal-500 via-indigo-500 to-sky-500 dark:from-teal-200 dark:via-indigo-300 dark:to-sky-500">
              Edit
          </span>

          <span
              class="text-transparent bg-gradient-to-tr bg-clip-text from-blue-500 via-pink-500 to-red-500 dark:from-sky-300 dark:via-pink-300 dark:to-red-500">
              Employee
          </span>
      </h1>


  </div>



</section> --}}
<section>
  <div class="mx-auto max-w-screen-xl px-4 py-8">
    <div class="relative mx-auto max-w-3xl text-center">
      <span
        class="absolute inset-x-0 top-1/2 h-px -translate-y-1/2 bg-black/10"
      ></span>

      <h2
        class="relative inline-block bg-white rounded-lg shadow px-4 text-center text-2xl font-bold"
      >
        Explore Products
      </h2>
    </div>

    <div class="mt-8 grid grid-cols-2 gap-x-4 gap-y-8 lg:grid-cols-4">

      {{-- display products from database --}}
      @foreach ($products as $item)
<x-product-card :item="$item"/> 
@endforeach
      </div>

  
  </div>
</section>
</section>





@endsection