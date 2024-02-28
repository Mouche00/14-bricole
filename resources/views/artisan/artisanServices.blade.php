@extends('header')
@include('artisan.navbar')


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
                  
                    <div class="absolute inset-0 flex items-center" aria-hidden="true" x-description="Completed Step">
                    </div>
                    <a href="#" class="relative w-8 h-8 flex items-center justify-center bg-indigo-600 rounded-full hover:bg-indigo-900">
                      <svg class="w-5 h-5 text-white" x-description="Heroicon name: solid/check" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
          <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
        </svg>
                    </a>
            </ol>
          </nav>
        
            </div>
          </div>

    </div>  


    <div class="flex justify-center">
        <h2 class="text-2xl font-semibold text-gray-700 capitalize ">Add Sercices</h2>
    </div>  
    <form action="{{ route('addServices') }}" method="POST" enctype="multipart/form-data">
        @csrf

            <div>
                <div id="competences-container">
                    <div class="competence-entry">
                        <label for="competences" class="text-gray-600 ">Competences & tariff</label>
                        <div class="flex justify-center items-center space-x-8 ">

                            <input type="text" name="nom[]" class="competence-input block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-blue-400 rounded-md  dark:text-gray-600 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring" placeholder="Competences" required="">
                            <input type="text" name="tarif[]" class="tarif-input block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-blue-400 rounded-md  dark:text-gray-600 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring" placeholder="Tarif" required="">
                            <div class="w-10 h-10 flex items-center justify-center  top-0 right-0 cursor-pointer" onclick="addInput()">
                                <img src="{{asset('pictures/plus.png')}}"  alt="">
                        </div>
                    </div>
                </div>
            </div>
        <div class="flex justify-end mt-6">
            <button type="submit" class="px-8 py-2.5 leading-5 text-white transition-colors duration-300 transform bg-blue-500 rounded-md hover:bg-blue-700 focus:outline-none focus:bg-gray-600">Submit</button>
        </div>
    </form>
</section>


<script src="js/services.js"></script>
