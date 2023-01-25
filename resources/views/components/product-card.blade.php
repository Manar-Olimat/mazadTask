@props(['item'])




{{-- <div class="mt-8 grid grid-cols-2 gap-x-4 gap-y-8 lg:grid-cols-4"> --}}
    <span  class="relative bg-white rounded-lg shadow block border border-gray-100">
        

        <img alt="product"
            {{-- src="https://images.unsplash.com/photo-1603356033288-acfcb54801e6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1180&q=80" --}}
            src={{$item->images}}
            {{-- src='https://theelegance.pk/wp-content/uploads/2022/04/WHITE-FRIENDS-MALE-600x600-1.jpg' --}}
            class=" product_img " />

        <div class="p-6">
<a href="/product-details/{{$item->id}}">
            <h3 class="mt-1 text-lg font-bold">{{$item->name}}</h3>
</a>
           
        </div>
    </span>

{{-- </div> --}}