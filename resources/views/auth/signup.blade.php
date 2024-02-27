@extends('layouts.master')
@section('signup')
<style>
    #chauffeurForm {
        @apply transform translate-x-full;
    }
</style>
<section class="bg-white dark:bg-gray-100 ">
    <div class="flex justify-center min-h-screen">
        <div class="hidden bg-cover lg:block lg:w-2/5" style="background-image: url('{{ asset('pictures/man.png') }}')">
            <div class="bg-gray-900 bg-opacity-40">
                <a href="/"><button class=" absolute ml-5 mt-5 hover:bg-[#3a86ff] duration-700 bg-gray-200 rounded-lg px-1">
                    <svg class="w-[46px] h-[36px] text-[#3a86ff] hover:text-white duration-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.6" d="M5 12h14M5 12l4-4m-4 4 4 4"/>
                      </svg>
                </button></a>
            </div>
        </div>

        <div class="flex items-center w-full max-w-3xl p-8 mx-auto lg:px-12 lg:w-3/5">
            <div class="w-full">
                <h1 class="text-2xl mb-8    font-semibold tracking-wider text-black capitalize">
                    Créez votre compte prestataire
                </h1>

                <div class="text-sm flex justify-center">
                    <a href="/auth/github/redirect"  class="text-white bg-[#4285F4] hover:bg-[#4285F4]/90 focus:ring-4 focus:outline-none focus:ring-[#4285F4]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-[#4285F4]/55 me-2 mb-2">
                        <svg class="w-4 h-4 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 19">
                        <path fill-rule="evenodd" d="M8.842 18.083a8.8 8.8 0 0 1-8.65-8.948 8.841 8.841 0 0 1 8.8-8.652h.153a8.464 8.464 0 0 1 5.7 2.257l-2.193 2.038A5.27 5.27 0 0 0 9.09 3.4a5.882 5.882 0 0 0-.2 11.76h.124a5.091 5.091 0 0 0 5.248-4.057L14.3 11H9V8h8.34c.066.543.095 1.09.088 1.636-.086 5.053-3.463 8.449-8.4 8.449l-.186-.002Z" clip-rule="evenodd"/>
                        </svg>
                        Sign in with Google
                        </a>
                    <h2 class="mx-4 font-mono text-2xl text-black">OR</h2> 
                    <a href="/auth/github/redirect" class="text-white bg-[#24292F] hover:bg-[#24292F]/90 focus:ring-4 focus:outline-none focus:ring-[#24292F]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-gray-500 dark:hover:bg-[#050708]/30 me-2 mb-2">
                        <svg class="w-4 h-4 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 .333A9.911 9.911 0 0 0 6.866 19.65c.5.092.678-.215.678-.477 0-.237-.01-1.017-.014-1.845-2.757.6-3.338-1.169-3.338-1.169a2.627 2.627 0 0 0-1.1-1.451c-.9-.615.07-.6.07-.6a2.084 2.084 0 0 1 1.518 1.021 2.11 2.11 0 0 0 2.884.823c.044-.503.268-.973.63-1.325-2.2-.25-4.516-1.1-4.516-4.9A3.832 3.832 0 0 1 4.7 7.068a3.56 3.56 0 0 1 .095-2.623s.832-.266 2.726 1.016a9.409 9.409 0 0 1 4.962 0c1.89-1.282 2.717-1.016 2.717-1.016.366.83.402 1.768.1 2.623a3.827 3.827 0 0 1 1.02 2.659c0 3.807-2.319 4.644-4.525 4.889a2.366 2.366 0 0 1 .673 1.834c0 1.326-.012 2.394-.012 2.72 0 .263.18.572.681.475A9.911 9.911 0 0 0 10 .333Z" clip-rule="evenodd"/>
                        </svg>
                        Sign in with Github
                        </a>
                </div>

                <div class="mt-6">
                    <h1 class="text-gray-500 ">Sélectionnez le type de compte</h1>

                    <div class="mt-3 md:flex md:items-center md:-mx-2">
                        <button id="client-btn" class="flex justify-center w-full px-6 py-3 text-[#3a86ff] border border-[#3a86ff] rounded-lg md:w-auto md:mx-2 focus:outline-none focus:bg-[#3a86ff] focus:text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>

                            <span class="mx-2">
                                Client
                            </span>
                        </button>

                        <button id="artisan-btn" class="flex justify-center w-full px-6 py-3 mt-4 text-[#3a86ff] border border-[#3a86ff] rounded-lg md:mt-0 md:w-auto md:mx-2 dark:border-[#3a86ff] dark:text-[#3a86ff] focus:bg-[#3a86ff] focus:text-white focus:outline-none">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>

                            <span class="mx-2">
                                Artisan
                            </span>
                        </button>
                    </div>
                </div>


            <div id="forms-container" class="flex overflow-hidden transition-transform transform ease-in-out duration-500">
                <div id="client" class="w-full">
                    <form action="{{ route('signup.client')}}" method="POST" class="grid grid-cols-1 gap-6 mt-8 md:grid-cols-2" enctype="multipart/form-data">
                        @csrf
                    
                        <div class="col-span-2 flex justify-center">
                            <div class="relative">
                                <div class="shrink-0">
                                    <img id="client_pic" class="h-16 w-16 object-cover rounded-full" src="https://lh3.googleusercontent.com/a-/AFdZucpC_6WFBIfaAbPHBwGM9z8SxyM1oV4wB4Ngwp_UyQ=s96-c" alt="Current profile photo" />
                                  </div>
                                  <label class="block">
                                    <span class="sr-only">Choose profile photo</span>
                                    <input type="file" name="picture" onchange="loadFile(event, 'client_pic')" class="block w-full text-sm text-slate-500
                                      file:mr-4 file:py-2 file:px-4
                                      file:rounded-full file:border-0
                                      file:text-sm file:font-semibold
                                      file:bg-violet-50 file:text-violet-700
                                      hover:file:bg-violet-100
                                    "/>
                                  </label>
                            </div>
                        </div>
                    
                        <div>
                            <label class="block mb-2 text-sm text-gray-700">First Name</label>
                            <input name="name" type="text" placeholder="John" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg focus:outline-none focus:border-blue-400 focus:ring focus:ring-blue-400 focus:ring-opacity-40" />
                        </div>
                    
                        <div>
                            <label class="block mb-2 text-sm text-gray-700">Last name</label>
                            <input name="lname" type="text" placeholder="Snow" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg focus:outline-none focus:border-blue-400 focus:ring focus:ring-blue-400 focus:ring-opacity-40" />
                        </div>
                    
                        <div>
                            <label class="block mb-2 text-sm text-gray-700">Adresse</label>
                            <input name="address" type="text" placeholder="Snow" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg focus:outline-none focus:border-blue-400 focus:ring focus:ring-blue-400 focus:ring-opacity-40" />
                        </div>
                    
                        <div>
                            <label class="block mb-2 text-sm text-gray-800">Phone number</label>
                            <input name="phone" type="text" placeholder="XXX-XX-XXXX-XXX" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg focus:outline-none focus:border-blue-400 focus:ring focus:ring-blue-400 focus:ring-opacity-40" />
                        </div>
                    
                    
                        <div>
                            <label class="block mb-2 text-sm text-gray-800">Email address</label>
                            <input name="email" type="email" placeholder="johnsnow@example.com" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg focus:outline-none focus:border-blue-400 focus:ring focus:ring-blue-400 focus:ring-opacity-40" />
                        </div>
                    
                        <div>
                            <label class="block mb-2 text-sm text-gray-700">Password</label>
                            <input name="password" type="password" placeholder="Enter your password" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg focus:outline-none focus:border-blue-400 focus:ring focus:ring-blue-400 focus:ring-opacity-40" />
                        </div>
                    
                        <div>
                            <label class="block mb-2 text-sm text-gray-700">Confirme Password</label>
                            <input name="conpassword" type="password" placeholder="Enter your password" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg focus:outline-none focus:border-blue-400 focus:ring focus:ring-blue-400 focus:ring-opacity-40" />
                        </div>
                    
                        <button type="submit" class="col-span-2 flex items-center justify-between w-full px-6 py-3 text-sm tracking-wide text-white capitalize transition-colors duration-300 transform bg-[#3a86ff] rounded-lg hover:bg-[#3a86ff] focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-50">
                            <span>Sign Up </span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 rtl:-scale-x-100" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    
                        <div class="col-span-2 text-red-500 text-[20px]">
                            @if ($errors->any())
                                <div>{{ $errors->first() }}</div>
                            @endif
                        </div>
                    </form>
                    
            </div>
                <div id="artisan" class="hidden w-full">
                    <form action="{{ route('signup.artisan')}}" method="POST" class="grid grid-cols-1 gap-6 mt-8 md:grid-cols-2" enctype="multipart/form-data">
                        @csrf
                        <div class="col-span-2 flex justify-center">
                            <div class="relative">
                                <div class="shrink-0">
                                    <img id="artisan_pic" class="h-16 w-16 object-cover rounded-full" src="https://lh3.googleusercontent.com/a-/AFdZucpC_6WFBIfaAbPHBwGM9z8SxyM1oV4wB4Ngwp_UyQ=s96-c" alt="Current profile photo" />
                                  </div>
                                  <label class="block">
                                    <span class="sr-only">Choose profile photo</span>
                                    <input type="file" name="picture" onchange="loadFile(event, 'artisan_pic')" class="block w-full text-sm text-slate-500
                                      file:mr-4 file:py-2 file:px-4
                                      file:rounded-full file:border-0
                                      file:text-sm file:font-semibold
                                      file:bg-violet-50 file:text-violet-700
                                      hover:file:bg-violet-100
                                    "/>
                                  </label>
                            </div>
                        </div>
                        <div>
                            <label class="block mb-2 text-sm text-gray-700">First Name</label>
                            <input name="name" type="text" placeholder="John" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg focus:outline-none focus:border-blue-400 focus:ring focus:ring-blue-400 focus:ring-opacity-40" />
                        </div>
                        <div>
                            <label class="block mb-2 text-sm text-gray-700">Last name</label>
                            <input name="lname" type="text" placeholder="Snow" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg focus:outline-none focus:border-blue-400 focus:ring focus:ring-blue-400 focus:ring-opacity-40" />
                        </div>
                        <div>
                            <label class="block mb-2 text-sm text-gray-700">Adresse</label>
                            <input name="address" type="text" placeholder="Snow" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg focus:outline-none focus:border-blue-400 focus:ring focus:ring-blue-400 focus:ring-opacity-40" />
                        </div>
                        <div>
                            <label class="block mb-2 text-sm text-gray-800">Phone number</label>
                            <input name="phone" type="text" placeholder="XXX-XX-XXXX-XXX" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg focus:outline-none focus:border-blue-400 focus:ring focus:ring-blue-400 focus:ring-opacity-40" />
                        </div>
                        <div>
                            <label class="block mb-2 text-sm text-gray-800">Email address</label>
                            <input name="email" type="email" placeholder="johnsnow@example.com" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg focus:outline-none focus:border-blue-400 focus:ring focus:ring-blue-400 focus:ring-opacity-40" />
                        </div>

                        <div>
                            <label class="block mb-2 text-sm text-gray-800">Domains</label>
                            <select class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg focus:outline-none focus:border-blue-400 focus:ring focus:ring-blue-400 focus:ring-opacity-40"
                            name="domain" >
                                @foreach ($domains as $domain)  
                                <option value="{{$domain->id}}">{{$domain->nom}}</option>
                                @endforeach
                                
                                
                              </select>
                        </div>

                        <div>
                            <label class="block mb-2 text-sm text-gray-700">Password</label>
                            <input name="password" type="password" placeholder="Enter your password" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg focus:outline-none focus:border-blue-400 focus:ring focus:ring-blue-400 focus:ring-opacity-40" />
                        </div>
                        <div>
                            <label class="block mb-2 text-sm text-gray-700">Confirme Password</label>
                            <input name="conpassword" type="password" placeholder="Enter your password" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg focus:outline-none focus:border-blue-400 focus:ring focus:ring-blue-400 focus:ring-opacity-40" />
                        </div>
                        <button type="submit" class="col-span-2 flex items-center justify-between w-full px-6 py-3 text-sm tracking-wide text-white capitalize transition-colors duration-300 transform bg-[#3a86ff] rounded-lg hover:bg-[#3a86ff] focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-50">
                            <span>Sign Up </span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 rtl:-scale-x-100" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                            </svg>
                        </button>
                        <div class="col-span-2 text-red-500 text-[20px]">
                            @if ($errors->any())
                                <div>{{ $errors->first() }}</div>
                            @endif
                        </div>
                    </form>
                    
                </div>
            </div>
           

            </div>
        </div>
    </div>
</section>


<script src="js/forms.js"></script>

@endsection