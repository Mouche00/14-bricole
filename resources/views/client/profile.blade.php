@extends('layouts.master')
@section('profile')
@include('client.navbar')  
    
<div class="w-full h-full relative mt-4  my-24 overflow-hidden">
  <div class="top h-64 w-full bg-blue-600 overflow-hidden relative" >
    <img src="{{asset('pictures/cc.jpg')}}" alt="" class="bg w-full h-full object-cover object-center absolute z-0">
    <div class="flex flex-col justify-center items-center relative h-full bg-black bg-opacity-50 text-white">
      <img src="{{asset('pictures/man.png')}}" class="h-24 w-24 object-cover rounded-full">
      <h1 class="text-2xl font-semibold">Ayoub Chaabat</h1>
      <h4 class="text-sm font-semibold">Joined Since '19</h4>
    </div>
  </div>
  
    <div class="p-8 col-span-12 md:border-solid md:border-l md:border-black md:border-opacity-25 h-full pb-12 md:col-span-10">
      <div class="px-4 pt-4">
        <form action="#" class="flex flex-col space-y-8">

          <div>
            <h3 class="text-2xl font-semibold">Basic Information</h3>
            <hr>
          </div>

          <div class="form-item">
            <label class="text-xl ">Full Name</label>
            <input type="text" value="Antonia P. Howell" class="w-full appearance-none text-black text-opacity-50 rounded shadow py-1 px-2  mr-2 focus:outline-none focus:shadow-outline focus:border-blue-200" disabled>
          </div>

          <div class="flex flex-col space-y-4 md:space-y-0 md:flex-row md:space-x-4">

            <div class="form-item w-full">
              <label class="text-xl ">Username</label>
              <input type="text" value="antonia" class="w-full appearance-none text-black text-opacity-50 rounded shadow py-1 px-2 mr-2 focus:outline-none focus:shadow-outline focus:border-blue-200 text-opacity-25 " disabled>
            </div>

            <div class="form-item w-full">
              <label class="text-xl ">Email</label>
              <input type="text" value="antoniaph@gmail.com" class="w-full appearance-none text-black text-opacity-50 rounded shadow py-1 px-2 mr-2 focus:outline-none focus:shadow-outline focus:border-blue-200 text-opacity-25 " disabled>
            </div>
          </div>

          <div>
            <h3 class="text-2xl font-semibold ">More About Me</h3>
            <hr>
          </div>

          <div class="form-item w-full">
            <label class="text-xl ">Biography</label>
            <textarea cols="30" rows="10" class="w-full appearance-none text-black text-opacity-50 rounded shadow py-1 px-2 mr-2 focus:outline-none focus:shadow-outline focus:border-blue-200 text-opacity-25 " disabled>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem natus nobis odio. Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium, eveniet fugiat? Explicabo assumenda dignissimos quisquam perspiciatis corporis sint commodi cumque rem tempora!</textarea>
          </div>

         

        </form>
      </div>
    </div>


  </div>
</div>


















@endsection