@extends('header')
<div class="hidden fixed h-full bg-slate-600 bg-opacity-60 blur-2xl z-40 w-screen" id="overlay">
    </div>
<div id="popup-window" class="hidden fixed 
h-48 w-800  p-3 m-auto top-0 right-0 left-0 z-50 ">
   <form class="max-w-md mx-auto p-6 bg-white border rounded-lg shadow-lg" action="{{route('domains.store')}}" method="POST" enctype="multipart/form-data">
       @csrf
       <div class=" mx-auto">
            <h2 class="text-2xl font-bold mb-6">Ajouter Domain</h2>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="name">
              Name:
            </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" 
                name="nom" placeholder="Domain Name">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="feedback">
              Description:
            </label>
                <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="feedback" rows="5" 
                name="description"
                placeholder="Enter your Description"></textarea>
            </div>
            <div class="mb-4">
                <div class="flex-1 items-center max-w-screen-sm mx-auto mb-3 space-y-4 sm:flex sm:space-y-0">
                    <div class="relative w-full">
                      <div class="items-center justify-center max-w-xl mx-auto">
                        <label class="flex justify-center w-full h-32 px-4 transition bg-white border-2 border-gray-300 border-dashed rounded-md appearance-none cursor-pointer hover:border-gray-400 focus:outline-none" id="drop"><span class="flex items-center space-x-2"><svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path></svg><span class="font-medium text-gray-600">Drop files to Attach, or<span class="text-blue-600 underline ml-[4px]">browse</span></span></span><input type="file" name="picture" class="hidden" accept="image/png,image/jpeg" id="input"></label>
                      </div>
                    </div>
                  </div>
            </div>
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
            Submit
          </button>
        
           
       </div>
      
   </form>
  
</div>
<div class="container flex gap-10">
    <aside class="flex flex-col w-64 h-screen px-4 py-4 overflow-y-auto bg-white   shadow-lg dark:border-gray-700">

        @include('admin.asside')


    <section class="bg-white dark:bg-gray-900 w-full">
        <div class="container px-6 py-10 mx-auto">
            <div class="flex items-center justify-between">
                <h1 class="text-2xl font-semibold text-gray-800 capitalize lg:text-3xl dark:text-white">Domain </h1>
             

                    <div class="relative inline-flex  group">
                        <div
                            class="absolute transitiona-all duration-1000 opacity-70 -inset-px bg-gradient-to-r from-[#66aacc] via-[#307299] to-[#172b3a] rounded-xl blur-lg">
                        </div>
                        <a href="#" title="Get quote now"
                            class="reser-button relative inline-flex items-center justify-center px-8 py-4 text-lg font-bold text-white transition-all duration-200 bg-gray-900 font-pj rounded-xl "
                            role="button">Ajouter Domain
                        </a>
                    </div>
               
    
               
            </div>
    
            <hr class="my-8 border-gray-200 dark:border-gray-700">
    
            <div class="grid grid-cols-1 gap-8 md:grid-cols-2 xl:grid-cols-3">
                @foreach ($domains as $domain)
                <div>
    
                    <div class="mt-8 border-2 border-solid divide-slate-950 rounded-md px-3 py-4">
                
    
                        <h1 class="mt-4 text-xl font-semibold text-gray-800 dark:text-white">
                            <a href="/domainpage/{{$domain->id}}">
                                {{$domain->nom}}
                            </a>
                        </h1>
                        

                        <img class="object-cover py-4 object-center w-full h-64 rounded-lg lg:h-80" src="/images/domains/{{$domain->picture}}" alt="">
    
                        <p class="mt-2 text-gray-500 dark:text-gray-400">
                            {{$domain->description}}
                        </p>
                        <div class="flex items-center justify-center mt-2">
                            <div class="inline-flex items-center rounded-md shadow-sm">
                             
                                    <button
                                        class="text-slate-800 hover:text-blue-600 text-sm bg-white hover:bg-slate-100 border border-slate-200 rounded-l-lg font-medium px-4 py-2 inline-flex space-x-1 items-center">
                                        <span>
                                            <a href="/domainpage/{{$domain->id}}">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            </svg>
                                            </a>
                                        </span>
                                        <span class="hidden md:inline-block"><a href="/domainpage/{{$domain->id}}">
                                            View
                                        </a></span>
                                    </button>
                               
                                <form action="{{route('domains.destroy', ['domain' => $domain['id']])}}" method="POST" class=" m-0 p-0 ">
                                    @csrf
                                    @method('DELETE')
                                            <button
                                                class="text-slate-800 hover:text-blue-600 text-sm bg-white hover:bg-slate-100 border border-slate-200 rounded-r-lg font-medium px-4 py-2 inline-flex space-x-1 items-center" type="submit">
                                                <span>
            
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                            stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                                        </svg>
                                                 
                                                </span>
                                                <span class="hidden md:inline-block">
                                                        Delete
                                                </span>
                                            </button>
                                        </form>
                   
                            </div>
                        </div>
                        
                    </div>
                </div>
                    
                @endforeach
            </div>
        </div>
    </section>
</div>

<script src="js/main.js"></script>