@extends('header')

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
                        <a href="artisan" class="border-b-2 border-transparent hover:text-gray-800 transition-colors duration-300 transform dark:hover:text-gray-800 hover:border-blue-600 mx-1.5 sm:mx-6">Home</a>
                
                        <a href="domain" class="border-b-2 border-transparent hover:text-gray-800 transition-colors duration-300 transform dark:hover:text-gray-800 hover:border-blue-600 mx-1.5 sm:mx-6">Domain</a>
                
                        <a href="competances" class="border-b-2 border-transparent hover:text-gray-800 transition-colors duration-300 transform dark:hover:text-gray-800 hover:border-blue-600 mx-1.5 sm:mx-6">Compétances</a>

                        <a href="services" class="border-b-2 border-transparent hover:text-gray-800 transition-colors duration-300 transform dark:hover:text-gray-800 hover:border-blue-600 mx-1.5 sm:mx-6">Services</a>

                        <a href="{{ route('images') }}" class="border-b-2 border-transparent hover:text-gray-800 transition-colors duration-300 transform dark:hover:text-gray-800 hover:border-blue-600 mx-1.5 sm:mx-6">Images</a>
                </div>

                <div class="flex items-center mt-4 lg:mt-0">
                    <button type="button" class="flex items-center focus:outline-none" aria-label="toggle profile dropdown">
                        <div class="w-8 h-8 overflow-hidden border-2 border-gray-400 rounded-full">
                            <img src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80" class="object-cover w-full h-full" alt="avatar">
                        </div>

                        <h3 class="mx-2 text-gray-700 dark:text-gray-200 lg:hidden">Khatab wedaa</h3>
                    </button>
                   <a href="login"><button class="hidden mx-4 text-gray-600 transition-colors duration-300 transform lg:block dark:text-gray-200 hover:text-gray-700 dark:hover:text-gray-400 focus:text-gray-700 dark:focus:text-gray-400 focus:outline-none" aria-label="show notifications">
                        <svg class="w-6 h-6 text-gray-500 hover:text-red-600 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12H4m12 0-4 4m4-4-4-4m3-4h2a3 3 0 0 1 3 3v10a3 3 0 0 1-3 3h-2"/>
                          </svg>
                    </button></a> 

                    
                </div>
            </div>
        </div>
    </div>
</nav>

<section class="max-w-4xl p-6 mx-auto bg-white rounded-md shadow-md mt-32">
    <div class="flex justify-center ml-16">
        <div class="bg-white">
            <div class="flex justify-center mx-auto py-12">
              
         
        
            </div>
          </div>

    </div> 
    <div class="flex justify-center">
        <h2 class="text-2xl font-semibold text-gray-700 capitalize ">Add Images</h2>
    </div>  
    <form action="{{ route('images.artisan') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mt-10">
            <div class="flex justify-center">
                <label for="dropzone-file" class="flex items-center px-3 py-3 w-72  mx-auto mt-4 text-center bg-white border-2 border-dashed rounded-lg cursor-pointer dark:border-blue-500 dark:bg-gray-900">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-blue-300 dark:text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12" />
                    </svg>
                    <h2 class="mx-3 text-blue-400">Profile Photo</h2>
                    <input id="dropzone-file" name="images[]" type="file" class="hidden" multiple required accept="image/jpeg, image/png, image/jpg, image/gif, image/svg+xml" />
                </label>
            </div>
        </div>
    
        <div class="flex justify-end mt-6">
            <button type="submit" class="px-8 py-2.5 leading-5 text-white transition-colors duration-300 transform bg-blue-500 rounded-md hover:bg-blue-700 focus:outline-none focus:bg-gray-600">Add</button>
        </div>
    </form>
</section>


