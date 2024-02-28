@extends('header')
<div class="hidden fixed h-full bg-slate-600 bg-opacity-60 blur-2xl z-40 w-screen" id="overlay">
    </div>
<div id="popup-window" class="hidden fixed 
h-48 w-800  p-3 m-auto top-0 right-0 left-0 z-50 ">
   <form class="max-w-md mx-auto p-6 bg-white border rounded-lg shadow-lg" action="{{route('competance.store')}}" method="POST">
       @csrf
       <div class=" mx-auto">
       
            <h2 class="text-2xl font-bold mb-6">Ajouter Competance</h2>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="name">
              Name:
            </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" 
                name="nom" placeholder="Competence Name">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="name">
              Domaine:
            </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" 
                name="domain_id" hidden value="{{$domain->id}}" readonly>
            </div>
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
            Submit
          </button>
        
           
       </div>
      
   </form>
  
</div>
<div class="container flex gap-10">
    <aside class="flex flex-col w-64 h-screen px-4 py-4 overflow-y-auto bg-white   shadow-lg dark:border-gray-700">
        <a href="#" class="mx-auto">
            <img class="w-28 h-28 " src="{{url('img/logo.png')}}" alt="">
        </a>
    
        <div class="flex flex-col items-center mt-6 -mx-2">
            <img class="object-cover w-24 h-24 mx-2 rounded-full" src="https://images.unsplash.com/photo-1531427186611-ecfd6d936c79?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" alt="avatar">
            <h4 class="mx-2 mt-2 font-medium text-gray-800 dark:text-gray-600">John Doe</h4>
            <p class="mx-2 mt-1 text-sm font-medium text-gray-600 dark:text-gray-400">john@example.com</p>
        </div>
    
        <div class="flex flex-col justify-between flex-1 mt-6">
            <nav>
                <a href="admin" class="flex items-center px-4 py-2 text-gray-700 rounded-lg dark:text-gray-400 hover:text-white dark:hover:bg-blue-600 duration-300" href="#">
                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M19 11H5M19 11C20.1046 11 21 11.8954 21 13V19C21 20.1046 20.1046 21 19 21H5C3.89543 21 3 20.1046 3 19V13C3 11.8954 3.89543 11 5 11M19 11V9C19 7.89543 18.1046 7 17 7M5 11V9C5 7.89543 5.89543 7 7 7M7 7V5C7 3.89543 7.89543 3 9 3H15C16.1046 3 17 3.89543 17 5V7M7 7H17" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
    
                    <span class="mx-4 font-medium">Dashboard</span>
                </a>
    
                <a href="usersDashboard" class="flex items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-300 transform rounded-lg dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-blue-600 dark:hover:text-gray-200 hover:text-gray-700" href="#">
                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M12 14C8.13401 14 5 17.134 5 21H19C19 17.134 15.866 14 12 14Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
    
                    <span class="mx-4 font-medium">Users</span>
                </a>
    
                <a href="domainDashboard" class="flex items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-300 transform rounded-lg dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-blue-600 dark:hover:text-gray-200 hover:text-gray-700" href="#">
                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15 5V7M15 11V13M15 17V19M5 5C3.89543 5 3 5.89543 3 7V10C4.10457 10 5 10.8954 5 12C5 13.1046 4.10457 14 3 14V17C3 18.1046 3.89543 19 5 19H19C20.1046 19 21 18.1046 21 17V14C19.8954 14 19 13.1046 19 12C19 10.8954 19.8954 10 21 10V7C21 5.89543 20.1046 5 19 5H5Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
    
                    <span class="mx-4 font-medium">Domains</span>
                </a>
                <a href="requestsDashboard" class="flex items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-300 transform rounded-lg dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-blue-600 dark:hover:text-gray-200 hover:text-gray-700" href="#">
                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15 5V7M15 11V13M15 17V19M5 5C3.89543 5 3 5.89543 3 7V10C4.10457 10 5 10.8954 5 12C5 13.1046 4.10457 14 3 14V17C3 18.1046 3.89543 19 5 19H19C20.1046 19 21 18.1046 21 17V14C19.8954 14 19 13.1046 19 12C19 10.8954 19.8954 10 21 10V7C21 5.89543 20.1046 5 19 5H5Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
    
                    <span class="mx-4 font-medium">Requests</span>
                </a>
                <a href="{{route('reclaDashboard')}}" class="flex items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-300 transform rounded-lg dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-blue-600 dark:hover:text-gray-200 hover:text-gray-700">
                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15 5V7M15 11V13M15 17V19M5 5C3.89543 5 3 5.89543 3 7V10C4.10457 10 5 10.8954 5 12C5 13.1046 4.10457 14 3 14V17C3 18.1046 3.89543 19 5 19H19C20.1046 19 21 18.1046 21 17V14C19.8954 14 19 13.1046 19 12C19 10.8954 19.8954 10 21 10V7C21 5.89543 20.1046 5 19 5H5Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
    
                    <span class="mx-4 font-medium">Reclamations</span>
                </a>
    
                <a href="login" class="flex items-center gap  px-4 py-2 mt-5 text-gray-600 transition-colors duration-300 transform rounded-lg dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-red-600 dark:hover:text-gray-200 hover:text-gray-700" href="#">
                    <svg class="w-6 h-6 text-red-500 hover:text-white " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12H4m12 0-4 4m4-4-4-4m3-4h2a3 3 0 0 1 3 3v10a3 3 0 0 1-3 3h-2"/>
                      </svg>
    
                    <span class="mx-4 font-medium">Log out</span>
                </a>
            </nav>
        </div>
    </aside>


    <section class="bg-white dark:bg-gray-900 w-full">
        <div class="container px-6 py-10 mx-auto">
            <div class="flex items-center justify-between">
                <h1 class="text-2xl font-semibold text-gray-800 capitalize lg:text-3xl dark:text-white">Domain </h1>
             

                    <div class="relative inline-flex  group">
                        <div
                            class="absolute transitiona-all duration-1000 opacity-70 -inset-px bg-gradient-to-r from-[#66aacc] via-[#307299] to-[#172b3a] rounded-xl blur-lg">
                        </div>
                        <a href="#" title="Get quote now"
                            class="relative inline-flex items-center justify-center px-8 py-4 text-lg font-bold text-white transition-all duration-200 bg-gray-900 font-pj rounded-xl "
                            role="button">Ajouter Domain
                        </a>
                    </div>
               
    
               
            </div>
    
            <hr class="my-8 border-gray-200 dark:border-gray-700">
    





            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="max-w-3xl">
                    <div class="py-8">
                        <h1 class="text-3xl font-bold mb-2">{{$domain->nom}}</h1>
                        <p class="text-gray-500 text-sm">Published on <time>{{$domain->created_at->diffForHumans()}}</time></p>
                    </div>
                    <img src="/images/domains/{{$domain->picture}}" alt="Featured image" class="w-full h-auto mb-8">
                    <div class="prose prose-sm sm:prose lg:prose-lg xl:prose-xl mx-auto">
                        <p>{{$domain->description}}</p>
                    </div>
                </div>
                <div class="container mx-auto p-6">
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <h2 class="text-lg font-semibold mb-4">Competences Assocciee</h2>
                        <div class="flex flex-wrap gap-2">
                            @foreach ($competences as $competence)
                            <a href="#" class="bg-gray-200 hover:bg-gray-300 py-1 px-2 rounded-lg text-sm">{{$competence->nom}}</a>
                            @endforeach
                            <button>
                                <a class="reser-button bg-gray-600 hover:bg-gray-900 py-1 px-2 rounded-lg text-sm text-white mx-10">Ajouter Une Competence</a>
                            </button>

                        </div>
                    </div>
                </div>
            </div>











                {{-- <div>

    
                    <div class="mt-8 border-2 border-solid divide-slate-950 rounded-md pl-3 pb-4">
                 
    
                        <h1 class="mt-4 text-xl font-semibold text-gray-800 dark:text-white">
                            <a href="">
                                {{$domain->nom}}
                            </a>
                        </h1>
    
                        <p class="mt-2 text-gray-500 dark:text-gray-400">
                            {{$domain->description}}
                        </p>
    
    
                    </div>
                </div> --}}
                    
    
          
        </div>
    </section>
</div>

<script src="{{url('js/main.js')}}"></script>
