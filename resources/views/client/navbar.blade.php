{{-- 
<div class=" min-h-screen relative">
    <div class=" bg-white text-blue-800 px-10 py-1  w-full">
        <div class=" flex items-center justify-between py-2 text-5x1">
            <img src="{{asset('pictures/logo.png')}}" class="h-16" alt="">
          <ul class="flex space-x-4">
            <li><a href="{{route('client')}}" class="text-black text-xl font-mono ">Home</a></li>
            <li><a href="{{route('reservations')}}" class="text-black text-xl font-mono">Réservations</a></li>
            <li><a href="{{route('profile')}}" class="text-black text-xl font-mono">Profile</a></li>
        </ul>
          <div class="flex items-center text-gray-500"> 
            <span class="material-icons-outlined p-2" style="font-size: 30px"></span>
            <div class="bg-center bg-cover bg-no-repeat rounded-full inline-block h-12 w-12 ml-2" style="background-image:  url('{{ asset('pictures/plombier.jpg') }}')"></div>
          </div>
      </div>
    </div> --}}

    <nav x-data="{ isOpen: false }" class="relative bg-white shadow ">
        <div class="container px-6 mx-auto">
            <div class="lg:flex lg:items-center lg:justify-between">
                <div class="flex items-center justify-between">
                    <a href="#">
                        <img class="w-20 h-20 mt-[-10px]" src="{{url('img/logo.png')}}" alt="">
                    </a>
    
                    <!-- Mobile menu button -->
                    <div class="flex lg:hidden">
                        <button x-cloak @click="isOpen = !isOpen" type="button" class="text-gray-500 dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-400 focus:outline-none focus:text-gray-600 dark:focus:text-gray-400" aria-label="toggle menu">
                            <svg x-show="!isOpen" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4 8h16M4 16h16" />
                            </svg>
                    
                            <svg x-show="isOpen" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
    
                <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
                <div x-cloak :class="[isOpen ? 'translate-x-0 opacity-100 ' : 'opacity-0 -translate-x-full']" class="absolute inset-x-0 z-20 w-full px-6 py-4 transition-all duration-300 ease-in-out bg-white  lg:mt-0 lg:p-0 lg:top-0 lg:relative lg:bg-transparent lg:w-auto lg:opacity-100 lg:translate-x-0 lg:flex lg:items-center">
                    <div class="flex flex-col -mx-6 lg:flex-row lg:items-center lg:mx-8">
                            <a href="{{route('client')}}" class="border-b-2 border-transparent hover:text-gray-800 transition-colors duration-300 transform dark:hover:text-gray-800 hover:border-blue-600 mx-1.5 sm:mx-6">Home</a>
                    
                            <a href="{{route('reservations')}}" class="border-b-2 border-transparent hover:text-gray-800 transition-colors duration-300 transform dark:hover:text-gray-800 hover:border-blue-600 mx-1.5 sm:mx-6">Réservations</a>
                        
                            <a href="{{route('profile')}}" class="border-b-2 border-transparent hover:text-gray-800 transition-colors duration-300 transform dark:hover:text-gray-800 hover:border-blue-600 mx-1.5 sm:mx-6">Profile</a>
    
                             </div>
    
                    <div class="flex items-center mt-4 lg:mt-0">
                        <button type="button" class="flex items-center focus:outline-none" aria-label="toggle profile dropdown">
                            <div class="w-8 h-8 overflow-hidden border-2 border-gray-400 rounded-full">
                                <img src="{{ asset('images/users/' . auth()->user()->picture) }}" class="object-cover w-full h-full" alt="avatar">
                            </div>
    
                            <h3 class="mx-2 text-gray-700 dark:text-gray-200 lg:hidden">Khatab wedaa</h3>
                        </button>
                       <a href="{{ route('logout') }}"><button class="hidden mx-4 text-gray-600 transition-colors duration-300 transform lg:block dark:text-gray-200 hover:text-gray-700 dark:hover:text-gray-400 focus:text-gray-700 dark:focus:text-gray-400 focus:outline-none" aria-label="show notifications">
                            <svg class="w-6 h-6 text-gray-500 hover:text-red-600 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12H4m12 0-4 4m4-4-4-4m3-4h2a3 3 0 0 1 3 3v10a3 3 0 0 1-3 3h-2"/>
                              </svg>
                        </button></a> 
    
    
    
    
                        
                    </div>
                </div>
            </div>
        </div>
    </nav>

