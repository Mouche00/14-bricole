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
                    <a href="/auth/google/redirect" class="py-2 px-4 flex justify-center items-center bg-red-600 hover:bg-red-700 focus:ring-red-500 focus:ring-offset-red-200 text-white w-15 transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2 rounded-lg">
                        <svg width="20" height="20" fill="currentColor" class="mr-2" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                            <path d="M896 786h725q12 67 12 128 0 217-91 387.5t-259.5 266.5-386.5 96q-157 0-299-60.5t-245-163.5-163.5-245-60.5-299 60.5-299 163.5-245 245-163.5 299-60.5q300 0 515 201l-209 201q-123-119-306-119-129 0-238.5 65t-173.5 176.5-64 243.5 64 243.5 173.5 176.5 238.5 65q87 0 160-24t120-60 82-82 51.5-87 22.5-78h-436v-264z"></path>
                        </svg>
                        Sign in with Google
                    </a>
                    <h2 class="mx-4 font-mono text-2xl text-black">OR</h2> 
                    <a href="/auth/google/redirect" class="py-2 px-4 flex justify-center items-center bg-blue-600 hover:bg-blue-700 focus:ring-blue-500 focus:ring-offset-blue-200 text-white w-15 transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2 rounded-lg">
                        <svg width="20" height="20" fill="currentColor" class="mr-2" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1343 12v264h-157q-86 0-116 36t-30 108v189h293l-39 296h-254v759h-306v-759h-255v-296h255v-218q0-186 104-288.5t277-102.5q147 0 228 12z"></path>
                        </svg>
                        Sign in with Facebook
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