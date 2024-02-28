@extends('layouts.master')
@section('profile')
@include('client.navbar')  
    
<div class="w-full h-full relative mt-4  my-24 overflow-hidden">
  <div class="top h-64 w-full bg-blue-600 overflow-hidden relative" >
    <img src="{{asset('pictures/cc.jpg')}}" alt="" class="bg w-full h-full object-cover object-center absolute z-0">
    <div class="flex flex-col justify-center items-center relative h-full bg-black bg-opacity-50 text-white">
      <img src="{{ asset('images/users/' . $user->picture) }}" class="h-24 w-24 object-cover rounded-full">
      <h1 class="text-2xl font-semibold">{{ $user->name }}</h1>
    </div>
  </div>
  
    <div class="p-8 col-span-12 md:border-solid md:border-l md:border-black md:border-opacity-25 h-full pb-12 md:col-span-10">
      <div class="px-4 pt-4">
        <form action="{{ route('update.client') }}" method="POST" enctype="multipart/form-data" class="flex flex-col space-y-8">
          @csrf
          @method('PUT')
      
          <div>
              <h3 class="text-3xl text-center mb-8 font-bold font-mono">Votre Profile</h3>
              <hr >
          </div>
      
          <div class="flex flex-col space-y-4 md:space-y-0 md:flex-row md:space-x-4">
              <div class="form-item w-full">
                  <label class="text-2xl font-mono text-black font-bold ">Prénom</label>
                  <input type="text" name="name" value="{{ $user->name }}" class="mt-1 p-2 w-full border rounded-md font-bold text-xl font-mono" >
              </div>
      
              <div class="form-item w-full">
                  <label class="text-2xl font-mono text-black font-bold ">Nom</label>
                  <input type="text" name="lname" value="{{ $user->lname }}" class="mt-1 p-2 w-full border rounded-md font-bold text-xl font-mono" >
              </div>
          </div>
      
          <div class="form-item w-full">
              <label class="text-2xl font-mono text-black font-bold ">Email</label>
              <input type="text" name="email" value="{{ $user->email }}" class="mt-1 p-2 w-full border rounded-md font-bold text-xl font-mono" disabled>
          </div>
      
          <div class="flex flex-col space-y-4 md:space-y-0 md:flex-row md:space-x-4">
              <div class="form-item w-full">
                  <label class="text-2xl font-mono text-black font-bold ">Adress</label>
                  <input type="text" name="address" value="{{ $user->address }}" class="mt-1 p-2 w-full border rounded-md font-bold text-xl font-mono" >
              </div>
      
              <div class="form-item w-full">
                  <label class="text-2xl font-mono text-black font-bold ">Téléphone</label>
                  <input type="text" name="phone" value="{{ $user->phone }}" class="mt-1 p-2 w-full border rounded-md font-bold text-xl font-mono" >
              </div>
          </div>
      
          <button type="submit" class="bg-[#023e8a] rounded-lg shadow text-center text-2xl text-white  font-bold font-mono w-full py-3 mt-9">Enregistrer</button>
      </form>
      
      </div>
    </div>


  </div>
</div>


















@endsection


