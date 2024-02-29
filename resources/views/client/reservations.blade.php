@extends('layouts.master')
@section('domaine')

@include('client.navbar')  

<div class=" flex justify-center gap-x-8 flex-wrap">
  @if($reservations->first())
  @foreach ($reservations as $reservation)
    

    <div class="reserve-wrapper grid grid-cols-1 gap-6 sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-1 xl:grid-cols-1 w-[700px] relative">

        {{-- DELETE BUTTON START --}}
        @if($reservation->date > now()->addHour()->timezone('Africa/Casablanca')->toDateTimeString())
          <form action="{{ route('reservation.delete', ['reservation' => $reservation->id]) }}" method="POST" class="absolute top-0 right-0 translate-x-[50%] z-50 w-12 h-12">
            @csrf
            @method('DELETE')

            <button type="submit" class="absolute w-full h-full top-0 left-0 px-4 py-2 bg-red-500 text-white text-2xl font-black rounded-full">X</button>
          </form>
        @endif
        {{-- DELETE BUTTON END --}}

        <div class="relative py-6 px-6 rounded-3xl my-4 shadow-xl  " style="background:linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 1)), url('{{ asset('pictures/cc.jpg') }}') no-repeat center;background-size:cover">
           
        <div class=" text-white flex items-center justify-between left-4 -top-6">
            <div class="flex items-center text-sm">
              <div class="relative w-16 h-16 mr-3 rounded-full md:block">
              <img src="" class="object-cover w-full h-full rounded-full " alt="">
              <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
              </div>
              <div>
                <p class="font-bold font-mono text-xl text-white">{{ $reservation->services->first()->artisan->user->name }}</p>
                <p class="text-m font-mono text-white font-bold">
                    @foreach ($reservation->services->first()->artisan->domains as $domain)
                        <span>{{ ucwords($domain->nom) . ($loop->last ? '' : ', ') }}</span>
                    @endforeach
                </p>
              </div>
            </div>

            <div class="p-4 bg-white text-black rounded-lg font-bold">
                        <p>${{ $reservation->services->first()->tarif }}/h</p> 
                    </div>
          </div>
          
          <div class="mt-8">
              <div class="flex space-x-3 text-white text-xl font-bold">
                
                <div class="flex-col justify-between items-center">
                    <h1 class="text-4xl">{{ $reservation->services->first()->nom }}</h1> 
                    <p>{{ $reservation->services->first()->description }}</p> 
                </div> 
            </div>
              <div class="flex space-x-3 text-white font-bold text-xl my-3">
              </div>
              <div class="flex justify-between">

                  {{-- RECLAMATION BUTTON START --}}
                    @if($reservation->date < now()->timezone('Africa/Casablanca')->toDateTimeString() && !$reservation->services[0]->artisan->reviews()->first())
                      <div class="my-2">
                        <a href="{{route('reclamation', ['id' => $reservation->services->first()->artisan->id])}}" class="text-[#023e8a] bg-white focus:ring-4 focus:outline-none focus:ring-blue-400 /50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-blue-400 /50 dark:hover:bg-blue-400 /30 me-2 mb-2">
                            <img src="{{asset('pictures/reservation.png')}}" class="h-6 w-6" alt="">
                            
                            Réclamation
                            </a>
                      </div>
                    @endif
                  {{-- RECLAMATION BUTTON END --}}
                 

                  <div class="my-2">

                    {{-- INVOICE BUTTON START --}}
                      @if($reservation->date < now()->timezone('Africa/Casablanca')->toDateTimeString() && !$reservation->services[0]->artisan->reclamations()->first())
                        <a href="{{route('invoice', ['reservation' => $reservation->id])}}" class="text-[#023e8a] bg-white focus:ring-4 focus:outline-none focus:ring-blue-400 /50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-blue-400 /50 dark:hover:bg-blue-400 /30 me-2 mb-2">
                          <img src="{{asset('pictures/pdf.png')}}" class="h-6 w-6" alt="">
                          Devis
                        </a>
                      @endif
                    {{-- INVOICE BUTTON END --}}
                       
                    @if($reservation->date < now()->timezone('Africa/Casablanca')->toDateTimeString() && !$reservation->services[0]->artisan->reviews()->first() && !$reservation->services[0]->artisan->reclamations()->first())
                     <button onclick="showForm(event)" data-id="{{ $reservation->services[0]->id }}" class="text-[#023e8a] bg-white focus:ring-4 focus:outline-none focus:ring-blue-400 /50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-blue-400 /50 dark:hover:bg-blue-400 /30 me-2 mb-2">
                        <img src="{{asset('pictures/review.png')}}" class="h-6 w-6" alt="">
                        Review
                      </button>
                    @endif

                    <a href="" class="text-[#023e8a] bg-white focus:ring-4 focus:outline-none focus:ring-blue-400 /50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-blue-400 /50 dark:hover:bg-blue-400 /30 me-2 mb-2">
                      <img src="{{asset('pictures/conversation.png')}}" class="h-6 w-6" alt="">
                      Envoyer un message
                    </a>
                     
                    
                </div>
              </div>
        
          </div>
      </div>
      
  </div>
    @endforeach
    @else
      <h1 class="h-full">Nothing here.</h1>
    @endif
  
</div>

<div id="overlay" class="absolute top-0 left-0 w-full h-full flex justify-center items-center bg-black opacity-[0.8] z-[25] hidden"></div>

<script>
  const reserveButtons = document.querySelectorAll('.review-button');
  const overlay = document.querySelector('#overlay');
  // const reserveForm = document.querySelector('#reserve-form');
  const reserveWrappers = document.querySelectorAll('.reserve-wrapper');

  function showForm(e) {
      //console.log(e.target);
      overlay.classList.toggle('hidden');
      reserveWrapper = e.target.closest(".reserve-wrapper");
      reserveWrapper.classList.toggle('z-[30]');
      reserveWrapper.innerHTML += `<div id="reserve-form" class="absolute bottom-[0%] left-[50%] translate-x-[-50%] translate-y-[100%] flex flex-col-reverse justify-center items-center bg-opacity-[0.8] z-[35]">

                                      <form action="http://localhost/review/add/${e.target.getAttribute('data-id')}" method="POST" class="my-2 bg-white flex flex-col items-center gap-8 p-4 rounded z-[50]">
                                          @csrf

                                          <div class="flex items-center">
                                            @for ($i = 1; $i <= 5; $i++)
                                              <input type="radio" id="{{ $i }}" name="note" value="{{ $i }}" class="ml-4">
                                              <label for="{{ $i }}">{{ $i }}</label><br>
                                            @endfor
                                          </div>

                                          <input class="text-xl p-2 bg-gray-200 rounded" type="text" name="commentaire">
                                          <button type="submit" class="text-[#023e8a] bg-white focus:ring-4 focus:outline-none focus:ring-blue-400 /50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-blue-400 /50 dark:hover:bg-blue-400 /30 me-2 mb-2">
                                              <img src="{{asset('pictures/reservation.png')}}" class="h-6 w-6" alt="">
                                              
                                              
                                              Submit
                                          </button>
                                      </form>
                                      <h1 class="p-4 bg-white rounded-lg">ADD REVIEW:</h1>

                                  </div>`;
  }

  overlay.addEventListener('click', () => {
      overlay.classList.toggle('hidden');
      // reserveForm.classList.toggle('hidden');
      document.querySelector('#reserve-form').remove();
      reserveWrappers.forEach((e) => {
          e.classList.remove('z-[30]');
      })
  })
</script>
  @endsection