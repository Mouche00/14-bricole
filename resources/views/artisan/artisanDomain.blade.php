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
              
          <nav aria-label="Progress">
            <ol role="list" class="flex items-center">
              
                <li class="relative pr-8 sm:pr-20">
                  
                    <div class="absolute inset-0 flex items-center" aria-hidden="true" x-description="Completed Step">
                      <div class="h-0.5 w-full bg-indigo-600"></div>
                    </div>
                    <a href="#" class="relative w-8 h-8 flex items-center justify-center bg-indigo-600 rounded-full hover:bg-indigo-900">
                      <svg class="w-5 h-5 text-white" x-description="Heroicon name: solid/check" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
          <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
        </svg>
                    </a>
                  </li>
              
                  <li class="relative pr-8 sm:pr-20">
          
                    <div class="absolute inset-0 flex items-center" aria-hidden="true" x-description="Upcoming Step">
                      <div class="h-0.5 w-full bg-indigo-600"></div>

                    </div>
                    <a href="#" class="group relative w-8 h-8 flex items-center justify-center bg-white border-2 border-indigo-600 rounded-full hover:border-gray-400">
                      <span class="h-2.5 w-2.5 bg-transparent rounded-full group-hover:bg-gray-300" aria-hidden="true"></span>
                      <span class="sr-only">Step 4</span>
                    </a>
                  </li>

                  <li class="relative pr-8 sm:pr-20">
          
                    <div class="absolute inset-0 flex items-center" aria-hidden="true" x-description="Upcoming Step">

                    </div>
                    <a href="#" class="group relative w-8 h-8 flex items-center justify-center bg-white border-2 border-indigo-600 rounded-full hover:border-gray-400">
                      <span class="h-2.5 w-2.5 bg-transparent rounded-full group-hover:bg-gray-300" aria-hidden="true"></span>
                      <span class="sr-only">Step 4</span>
                    </a>
                  </li>
            </ol>
          </nav>
        
            </div>
          </div>

    </div>  


    <div class="flex justify-center">
        <h2 class="text-2xl font-semibold text-gray-700 capitalize ">Add Domain</h2>
    </div>  
    <form action="{{ route('domains.artisan') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="grid grid-cols-1 gap-6 mt-10 sm:grid-cols-2">
            
                <fieldset x-data="window.Components.radioGroup({ initialCheckedIndex: 0 })" x-init="init()">
                    <legend class="sr-only">
                      Pricing plans
                    </legend>
                    <h2 class="text-gray-600">Domains</h2>
                    <div class="grid grid-cols-1 gap-6 mt-2 sm:grid-cols-3">    
               
                        <label x-radio-group-option="" class="rounded-tl-md rounded-tr-md border-blue-400   relative border p-4 flex flex-col cursor-pointer md:pl-4 md:pr-6 md:grid md:grid-cols-3 focus:outline-none" x-description="Checked: &quot;bg-indigo-50 border-indigo-200 z-10&quot;, Not Checked: &quot;border-gray-200&quot;" :class="{ 'bg-indigo-50 border-indigo-200 z-10': (value === 'Business'), 'border-gray-200': !(value === 'Business') }">
                            <div class="flex items-center text-sm">
                              <input type="radio" x-model="value" name="name" value="forgeron" class="h-4 w-4 text-indigo-600 border-gray-300 focus:ring-indigo-500" aria-labelledby="pricing-plans-1-label" aria-describedby="pricing-plans-1-description-0 pricing-plans-1-description-1">             
                              <span id="pricing-plans-1-label" class="ml-3 font-medium" x-description="Checked: &quot;text-indigo-900&quot;, Not Checked: &quot;text-gray-900&quot;" :class="{ 'text-indigo-900': (value === 'Business'), 'text-gray-900': !(value === 'Business') }">Forgeron</span>
                            </div>
                          </label>

                          <label x-radio-group-option="" class="rounded-tl-md rounded-tr-md border-blue-400   relative border p-4 flex flex-col cursor-pointer md:pl-4 md:pr-6 md:grid md:grid-cols-3 focus:outline-none" x-description="Checked: &quot;bg-indigo-50 border-indigo-200 z-10&quot;, Not Checked: &quot;border-gray-200&quot;" :class="{ 'bg-indigo-50 border-indigo-200 z-10': (value === 'Business'), 'border-gray-200': !(value === 'Business') }">
                            <div class="flex items-center text-sm">
                              <input type="radio" x-model="value" name="name" value="Najar" class="h-4 w-4 text-indigo-600 border-gray-300 focus:ring-indigo-500" aria-labelledby="pricing-plans-1-label" aria-describedby="pricing-plans-1-description-0 pricing-plans-1-description-1">             
                              <span id="pricing-plans-1-label" class="ml-3 font-medium" x-description="Checked: &quot;text-indigo-900&quot;, Not Checked: &quot;text-gray-900&quot;" :class="{ 'text-indigo-900': (value === 'Business'), 'text-gray-900': !(value === 'Business') }">Najar</span>
                            </div>
                          </label>
                    </div>
                  </fieldset>
            

            {{-- <div>
                <label class="text-gray-600" for="description">Description</label>
                <input id="description" name="description" type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-blue-400 rounded-md  dark:text-gray-600 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
            </div> --}}

            <input type="hidden" name="artisan_id" value="{{ Auth::user()->artisan->id }}">


           
        </div>

        <div class="flex justify-end mt-6">
            <button type="submit" class="px-8 py-2.5 leading-5 text-white transition-colors duration-300 transform bg-blue-500 rounded-md hover:bg-blue-700 focus:outline-none focus:bg-gray-600">Next</button>
        </div>
    </form>
</section>




