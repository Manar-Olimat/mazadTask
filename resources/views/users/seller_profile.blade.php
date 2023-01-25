@extends('layout')

@section('content')
    <section class="relative inner lg:pb-24 pb-16 ">
        <div class="container ">
            <div class="profile-banner relative text-transparent">
                {{-- <input id="pro-banner" name="profile-banner" type="file" class="hidden" onchange="loadFile(event)"> --}}
                <div class="relative rounded-md shrink-0">
                    <img src="https://shreethemes.in/techwind/layouts/assets/images/blog/bg.jpg"
                        class=" w-full rounded-md h-96 object-cover" id="profile-banner" alt="">
                    {{-- <div class="absolute inset-0 bg-black/70"></div> --}}
                    <label class="absolute inset-0 cursor-pointer" for="pro-banner"></label>
                </div>
            </div>
        </div>
        <!--end container-->

        <div class="container lg:mt-24 mt-16">
            <div class="md:flex">
                <div class="lg:w-1/4 md:w-1/3 md:px-3">
                    <div class="relative md:-mt-48 -mt-32">
                        <div class="p-6 rounded-md shadow dark:shadow-gray-800 bg-white dark:bg-slate-900">
                            <div class="profile-pic text-center mb-5">
                                <input id="pro-img" name="profile-image" type="file" class="hidden"
                                    onchange="loadFile(event)">
                                <div>
                                    <div class="relative h-28 w-28 mx-auto">
                                        <img src="https://www.freeiconspng.com/thumbs/retail-store-icon/retail-store-icon-18.png"
                                            class="rounded-full shadow dark:shadow-gray-800 ring-4 ring-slate-50 dark:ring-slate-800"
                                            id="profile-image" alt="">
                                        <label class="absolute inset-0 cursor-pointer" for="pro-img"></label>
                                    </div>

                                    <div class="mt-4">
                                        <h5 class="text-lg font-semibold">{{ $store->name }}</h5>
                                        <p class="text-slate-400">{{ $store->contact_email }}</p>
                                    </div>
                                </div>
                            </div>

                            <div class="border-t border-gray-100 dark:border-gray-700">
                                <ul class="list-none sidebar-nav mb-0 mt-3" id="myTab" data-tabs-toggle="#myTabContent"
                                    role="tablist">
                                    <li class="navbar-item sidelist account-menu pb-6 active" role="presentation">
                                        <a class="flex  items-center w-full space-x-2 text-white bg-indigo-600 rounded-lg"
                                            id="profile-tab" data-tabs-target="#profile" type="button" role="tab"
                                            aria-controls="profile" aria-selected="false">
                                            <span aria-hidden="true" class="p-2 bg-indigo-700 rounded-lg">
                                                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                                </svg>
                                            </span>
                                            <span>Profile</span>
                                        </a>
                                    </li>

                                    <li class="sidelist pb-6" role="presentation">
                                        <a id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab"
                                            aria-controls="dashboard" aria-selected="false"
                                            class="flex items-center space-x-2 text-indigo-600 transition-colors rounded-lg group hover:bg-indigo-600 hover:text-white">
                                            <span aria-hidden="true"
                                                class="p-2 transition-colors rounded-lg group-hover:bg-indigo-700 group-hover:text-white">
                                                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                                                </svg>
                                            </span>
                                            <span>Products Info</span>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- wrapper -->
                <div class="container grid grid-cols-12 items-start gap-6 pt-4 pb-16">



                    <!-- info -->
                    <div class="col-span-9 shadow bg-white rounded px-6 pt-5 pb-7">
                        <div id="myTabContent">
                            <div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="profile" role="tabpanel"
                                aria-labelledby="profile-tab">
                                <h4 class="text-lg font-medium capitalize mb-4">
                                    Store information
                                </h4>
                                <div class="space-y-4">
                                    <div class="grid grid-cols-2 gap-4">
                                        <div>
                                            <label for="first">Name</label>
                                            <input disabled type="text" name="first" value={{ $store->name }}
                                                id="first" class="input-box bg-white border">
                                        </div>
                                        <div>
                                            <label for="last">Type</label>
                                            <input disabled type="text" name="last" id="last"
                                                value={{ $store->type }} class="input-box bg-white border">
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-2 gap-4">
                                        <div>
                                            <label for="phone">Phone</label>
                                            <input disabled type="text" name="phone" id="phone"
                                                value={{ $store->contact_phone }} class="input-box bg-white border">
                                        </div>
                                        <div>
                                            <label for="email">Email</label>
                                            <input disabled type="text" name="email" id="email"
                                                value={{ $store->contact_email }} class="input-box bg-white border">

                                        </div>
                                    </div>

                                </div>
                                <!-- Modal toggle -->

                                <div class="mt-4">
                                    <button type="button" data-modal-toggle="defaultModal"
                                        class="py-3 px-4 text-center log_btn text-white bg-black border border-primary rounded-md  hover:text-primary transition font-medium">save
                                        changes</button>
                                </div>
                            </div>
                            {{-- /////////////////////////////////// --}}



                            <!-- Main modal -->
                            <div id="defaultModal" tabindex="-1" aria-hidden="true"
                                class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
                                <div class="relative w-full h-full max-w-2xl md:h-auto">
                                    <!-- Modal content -->
                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                        <!-- Modal header -->
                                        <div
                                            class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                                Edit Store Information
                                            </h3>
                                            <button type="button"
                                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                data-modal-toggle="defaultModal">
                                                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor"
                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                                <span class="sr-only">Close modal</span>
                                            </button>
                                        </div>
                                        <!-- Modal body -->
                                        <div class="py-8 space-y-4">
                                            <div class="grid grid-cols-2 gap-4">
                                                <form action="/update/{{ $store->id }}">
                                                    <div>
                                                        <label for="first">Name</label>
                                                        <input type="text" name="first" value={{ $store->name }}
                                                            id="first" class="input-box bg-white border">
                                                    </div>
                                                    <div>
                                                        <label for="last">Type</label>
                                                        <input type="text" name="last" id="last"
                                                            value={{ $store->type }} class="input-box bg-white border">
                                                    </div>
                                            </div>
                                            <div class="grid grid-cols-2 gap-4">
                                                <div>
                                                    <label for="phone">Phone</label>
                                                    <input type="text" name="phone" id="phone"
                                                        value={{ $store->contact_phone }}
                                                        class="input-box bg-white border">
                                                </div>
                                                <div>
                                                    <label for="email">Email</label>
                                                    <input type="text" name="email" id="email"
                                                        value={{ $store->contact_email }}
                                                        class="input-box bg-white border">

                                                </div>

                                            </div>

                                        </div>
                                        <!-- Modal footer -->
                                        <div
                                            class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                                            <button data-modal-toggle="defaultModal" type="submit"
                                                class="text-white log_btn hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">I
                                                accept</button>
                                            <button data-modal-toggle="defaultModal" type="button"
                                                class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Decline</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            {{-- ///////////////////////////////////// --}}
                            <div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="dashboard" role="tabpanel"
                                aria-labelledby="dashboard-tab">
                                <h4 class="text-lg font-medium capitalize mb-4">
                                    Products
                                </h4>
                                <a type="button" class=" m-2" data-modal-toggle="add_product">
                                  <script src="https://cdn.lordicon.com/qjzruarw.js"></script>
                                  <script src="https://cdn.lordicon.com/qjzruarw.js"></script>
                                  <lord-icon
                                      src="https://cdn.lordicon.com/xzksbhzh.json"
                                      trigger="hover"
                                      colors="primary:#4e3de3,secondary:#ebe6ef"
                                      style="width:80px;height:80px">
                                  </lord-icon></a>
    {{-- /////////////////////////////////// --}}



                            <!-- Main modal -->
                            <div id="add_product" tabindex="-1" aria-hidden="true"
                                class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
                                <div class="relative w-full h-full max-w-2xl md:h-auto">
                                    <!-- Modal content -->
                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                        <!-- Modal header -->
                                        <div
                                            class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                               Add New Product
                                            </h3>
                                            <button type="button"
                                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                data-modal-toggle="add_product">
                                                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor"
                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                                <span class="sr-only">Close modal</span>
                                            </button>
                                        </div>
                                        <!-- Modal body -->
                                        <div class="py-8 space-y-4">
                                           
<form class="px-8" action="/product/new" method="POST">

  @csrf
@method('post')
  <div class="relative z-0 mb-6 w-full group">
    <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">name</label>
    <input type="text" name="name" id="small-input" class="block p-2 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
    @error('name')
    <p class="text-red-500 text-xs mt-1">
        {{$message}}
    </p> 
    @enderror
  </div>
  <div class="relative z-0 mb-6 w-full group">
    <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">image</label>
    <input type="text" name="images" id="small-input" class="block p-2 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
    @error('images')
    <p class="text-red-500 text-xs mt-1">
        {{$message}}
    </p> 
    @enderror
  </div>
  <div class="relative z-0 mb-6 w-full group">
    <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">price</label>
    <input type="text" name="price" id="small-input" class="block p-2 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
    @error('price')
    <p class="text-red-500 text-xs mt-1">
        {{$message}}
    </p> 
    @enderror
   </div>
  <div class="grid md:grid-cols-2 md:gap-6">
    <div class="relative z-0 mb-6 w-full group">
      <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">category</label>
      <input type="text" name="category" id="small-input" class="block p-2 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
      @error('category')
      <p class="text-red-500 text-xs mt-1">
          {{$message}}
      </p> 
      @enderror
    </div>
    <div class="relative z-0 mb-6 w-full group">
      <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">color</label>
      <input type="text" name="color" id="small-input" class="block p-2 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
      @error('color')
      <p class="text-red-500 text-xs mt-1">
          {{$message}}
      </p> 
      @enderror
    </div>
  </div>
  <div class="grid md:grid-cols-2 md:gap-6">
    <div class="relative z-0 mb-6 w-full group">
      <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">tags</label>
      <input type="text" name="tags"  id="small-input" class="block p-2 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
      @error('tags')
      <p class="text-red-500 text-xs mt-1">
          {{$message}}
      </p> 
      @enderror
    </div>
  <div class="relative z-0 mb-6 w-full group">
    <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">quantity</label>
    <input type="text" name="quantity" id="small-input" class="block p-2 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
    @error('quantity')
    <p class="text-red-500 text-xs mt-1">
        {{$message}}
    </p> 
    @enderror
  </div>
    <div class="relative z-0 mb-6 w-full group">
      <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">description</label>
      <textarea  id="small-input" name="description" class="block p-2 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
      </textarea>
      @error('description')
      <p class="text-red-500 text-xs mt-1">
          {{$message}}
      </p> 
      @enderror
      </div>
  </div>
  <button type="submit" class="text-white log_btn hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
</form>

                                        </div>
                                        
                                    </div>
                                </div>
                            </div>

                            {{-- ///////////////////////////////////// --}}
                                <div class="space-y-4">
                                    <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
                                        <div class="pb- bg-white dark:bg-gray-900">
                                            <label for="table-search" class="sr-only">Search</label>
                                            <div class="relative mt-1">
                                                <div
                                                    class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                                    <svg class="w-5 h-5 text-gray-500 dark:text-gray-400"
                                                        aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd"
                                                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                                            clip-rule="evenodd"></path>
                                                    </svg>
                                                </div>
                                                <input type="text" id="table-search"
                                                    class="block p-2 pl-10 w-80 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                    placeholder="Search for items">
                                            </div>
                                        </div>


                                        <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
                                            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">

                                                <thead
                                                    class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                                    <tr>
                                                        <th scope="col" class="py-3 px-6">
                                                            Product Image
                                                        </th>
                                                        <th scope="col" class="py-3 px-6">
                                                            Product name
                                                        </th>

                                                        <th scope="col" class="py-3 px-6">
                                                            Category
                                                        </th>
                                                        <th scope="col" class="py-3 px-6">
                                                            Price
                                                        </th>
                                                        <th scope="col" class="py-3 px-6">
                                                            <span class="sr-only">Edit</span>
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($products as $item)
                                                        <tr
                                                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                                            <th scope="row"
                                                                class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                                <img src={{ $item->images }} alt={{ $item->name }}
                                                                    class='w-16 h-16'>
                                                            </th>

                                                            <th scope="row"
                                                                class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                                {{ $item->name }}
                                                            </th>

                                                            <td class="py-4 px-6">
                                                                {{ $item->category }}
                                                            </td>
                                                            <td class="py-4 px-6">
                                                                ${{ $item->price }}
                                                            </td>
                                                            <td class="py-4 px-6 text-right">
                                                                <a href="#"
                                                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                                            </td>
                                                            <td class="py-4 px-6 text-right">
                                                                <a href="#"
                                                                    class="font-medium text-red-600 dark:text-blue-500 hover:underline">Delete</a>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>

                                    </div>

                                </div>
                               
                            </div>




                        </div>
                        <!-- ./info -->

                    </div>
                    <!-- ./wrapper -->
                </div>
                <!--end grid-->
            </div>
            <!--end container-->
    </section>
    {{-- </section> --}}
@endsection
