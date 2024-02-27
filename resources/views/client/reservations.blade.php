@extends('layouts.master')
@section('domaine')

@include('client.navbar')  

<div class=" flex justify-center space-x-8">
    <div class="grid grid-cols-1 gap-6 sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-1 xl:grid-cols-1 w-[700px]">
        <div class=" relative  py-6 px-6 rounded-3xl my-4 shadow-xl  " style="background:linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('{{ asset('pictures/cc.jpg') }}') no-repeat center;background-size:cover">
           
        <div class=" text-white flex items-center left-4 -top-6">
            <div class="flex items-center text-sm">
              <div class="relative w-16 h-16 mr-3 rounded-full md:block">
              <img src="" class="object-cover w-full h-full rounded-full " alt="">
              <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
              </div>
              <div>
                <p class="font-bold font-mono text-xl text-white">Ayoub chabaat</p>
                <p class="text-m font-mono text-white font-bold">Plombier</p>
              </div>
            </div>
          </div>
          
          <div class="mt-8">
              <div class="flex space-x-3 text-white text-xl font-bold">
                
                <div class="flex-col justify-between items-center">
                    <p>Lorem ipsum dolor sit amet.</p> 
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veniam nemo magnam cupiditate, velit sequi ea? Suscipit ipsum repudiandae laudantium velit.</p> 
                  </div> 
            </div>
              <div class="flex space-x-3 text-white font-bold text-xl my-3">
              </div>
              <div class="flex justify-between">
                  <div class="my-2">
                    <a href="{{route('reclamations')}}" class="text-[#023e8a] bg-white focus:ring-4 focus:outline-none focus:ring-blue-400 /50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-blue-400 /50 dark:hover:bg-blue-400 /30 me-2 mb-2">
                        <img src="{{asset('pictures/reservation.png')}}" class="h-6 w-6" alt="">
                        
                        Réclamations
                        </a>
                  </div>
                 

                  <div class="my-2">
                    <a href="{{route('invoice')}}" class="text-[#023e8a] bg-white focus:ring-4 focus:outline-none focus:ring-blue-400 /50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-blue-400 /50 dark:hover:bg-blue-400 /30 me-2 mb-2">
                      <img src="{{asset('pictures/pdf.png')}}" class="h-6 w-6" alt="">
                      Download
                      </a>
                    <a href="{{route('reclamations')}}" class="text-[#023e8a] bg-white focus:ring-4 focus:outline-none focus:ring-blue-400 /50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-blue-400 /50 dark:hover:bg-blue-400 /30 me-2 mb-2">
                        <img src="{{asset('pictures/conversation.png')}}" class="h-6 w-6" alt="">
                        Envoyer un message
                        </a>

                    
                </div>
              </div>
        
          </div>
      </div>
      
  </div>
  
</div>
  @endsection