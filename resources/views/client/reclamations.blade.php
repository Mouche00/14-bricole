@extends('layouts.master')
@section('reserv')
@include('client.navbar')

  <section class=""  style="background:linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('{{ asset('pictures/az.png') }}') no-repeat center;background-size:cover">
<section class="pb-20 relative block  " >
        <div class="container mx-auto px-4 lg:pt-24 lg:pb-64">
          <div class="flex flex-wrap text-center justify-center">
            <div class="w-full lg:w-6/12 px-4">
              <h2 class="text-4xl font-semibold font-mono text-white">Envoyer votre Réclamation</h2>
            </div>
          </div>
   
        </div>
      </section>
      <section class="relative block pt-24 lg:pt-0 ">
        <div class="container mx-auto px-4">
          <div class="flex flex-wrap justify-center lg:-mt-64 -mt-48">
            <div class="w-full lg:w-6/12 px-4">
              <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-gray-200">
                <form action="{{ route('reclamation.store', [$artisan->artisan()->first()->id]) }}" method="POST" class="flex-auto p-5 lg:p-10">
                  @csrf
                  
                  <h4 class="text-2xl font-semibold font-mono">Remplissez ce formulaire et nous vous répondrons dans les 24 heures.
                  </h4>
                  <div class="relative w-full mb-3 mt-8 ">
                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2 font-mono " for="full-name">Full Name</label><input type="text" value="{{ auth()->user()->name . ' ' . auth()->user()->lname }}" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="Full Name" disabled>
                  </div>
                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2 font-mono" for="email">Email</label><input type="email" value="{{ auth()->user()->email }}" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="Email" disabled>
                  </div>
                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2 font-mono" for="artisan">Artisan</label><input type="text" value="{{ $artisan->name . ' ' . $artisan->lname }}" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="Email" disabled>
                  </div>
                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2 font-mono" for="message">Message</label><textarea name="message" rows="4" cols="80" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full" placeholder="Type a message..."></textarea>
                  </div>
                  <div class="text-center mt-6">
                    <button type="submit" class=" font-mono bg-[#023e8a] text-white active:bg-[#023e8a] text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button">
                      Réserver
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="flex flex-wrap mt-12 justify-center">
            <div class="w-full lg:w-3/12 px-4 text-center">
                <div class=" inline-flex items-center justify-center  w-28 h-28 shadow-lg rounded-full bg-white">
                    <img src="{{asset('pictures/prestataires.png')}}" class="h-16"  alt="">
              </div>
              <h6 class="text-xl mt-5 font-semibold text-white">
                Des prestataires compétents et qualifiés
              </h6>
              
            </div>
            <div class="w-full lg:w-3/12 px-4 text-center">
                <div class=" inline-flex items-center justify-center  w-28 h-28 shadow-lg rounded-full bg-white">
                    <img src="{{asset('pictures/medaille.png')}}" class="h-16"  alt="">
              </div>
              <h5 class="text-xl mt-5 font-semibold text-white">
                Top 3 plateformes de services
              </h5>
             
            </div>
            <div class="w-full lg:w-3/12 px-4 text-center">
                <div class=" inline-flex items-center justify-center  w-28 h-28 shadow-lg rounded-full bg-white">
                    <img src="{{asset('pictures/garanti.png')}}" class="h-16"  alt="">
              </div>
              <h5 class="text-xl mt-5 font-semibold text-white">Garantie "Satisfait ou Refait"</h5>
             
            </div>
          </div>
      </section>
    </section>
    
@endsection