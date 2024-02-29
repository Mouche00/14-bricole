@extends('header')
@include('artisan.navbar')


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
    
        @if(Auth::user()->artisans && Auth::user()->artisans->isNotEmpty())
            <input type="hidden" name="artisan_id" value="{{ Auth::user()->artisans->first()->id }}">
        @endif
    
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


