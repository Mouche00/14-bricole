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
                <h1 class="text-2xl font-semibold tracking-wider text-black capitalize">
                    Créez votre compte prestataire
                </h1>

               

                <div class="mt-6">
                    <h1 class="text-gray-500 ">Sélectionnez le type de compte</h1>

                    <div class="mt-3 md:flex md:items-center md:-mx-2">
                        <button id="passager-btn" class="flex justify-center w-full px-6 py-3 text-[#3a86ff] border border-[#3a86ff] rounded-lg md:w-auto md:mx-2 focus:outline-none focus:bg-[#3a86ff] focus:text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>

                            <span class="mx-2">
                                Client
                            </span>
                        </button>

                        <button id="chauffeur-btn" class="flex justify-center w-full px-6 py-3 mt-4 text-[#3a86ff] border border-[#3a86ff] rounded-lg md:mt-0 md:w-auto md:mx-2 dark:border-[#3a86ff] dark:text-[#3a86ff] focus:bg-[#3a86ff] focus:text-white focus:outline-none">
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
                <div id="client-form" class="w-full">
                <form action="{{route('signup.client')}}" method="POST" class="grid grid-cols-1 gap-6 mt-8 md:grid-cols-2 ">
                    @csrf
                  
                    <input type="text" name="role" value="client" class="hidden">
                    <div>
                        <label class="block mb-2 text-sm text-gray-700 ">First Name</label>
                        <input name="name" type="text" placeholder="John" class="block w-full px-5 py-3 mt-2 text-gray-300 placeholder-gray-400 bg-white border border-gray-200 rounded-lg dark:placeholder-gray-300 dark:bg-gray-100 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                    </div>

                    <div>
                        <label class="block mb-2 text-sm text-gray-700 ">Last name</label>
                        <input name="lname" type="text" placeholder="Snow" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg dark:placeholder-gray-300 dark:bg-gray-100 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                    </div>
                    <div>
                        <label class="block mb-2 text-sm text-gray-700 ">Adresse</label>
                        <input name="address" type="text" placeholder="Snow" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg dark:placeholder-gray-300 dark:bg-gray-100 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                    </div>

                    <div>
                        <label class="block mb-2 text-sm text-gray-800">Phone number</label>
                        <input name="phone" type="text" placeholder="XXX-XX-XXXX-XXX" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg dark:placeholder-gray-300 dark:bg-gray-100 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                    </div>

                   
                    <div>
                          
                          <label for="dropzone-file" class="flex items-center px-3 py-3  mx-auto mt-6 text-center bg-white border  rounded-lg cursor-pointer border-gray-600 dark:bg-gray-100">
                              <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-300 dark:text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12" />
                              </svg>
              
                              <h2 class="mx-3 text-gray-400">Profile Photo</h2>
              
                              <input name="picture" id="dropzone-file" type="file" class="hidden" />
                          </label>
                      </div>


                    <div>
                        <label class="block mb-2 text-sm text-gray-800">Email address</label>
                        <input name="email" type="email" placeholder="johnsnow@example.com" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg dark:placeholder-gray-300 dark:bg-gray-100 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                    </div>

                    <input name="role" type="hidden" placeholder="your role" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg dark:placeholder-gray-300 dark:bg-gray-100 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />


                    <div>
                        <label class="block mb-2 text-sm text-gray-700 ">Password</label>
                        <input name="password" type="password" placeholder="Enter your password" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg dark:placeholder-gray-300 dark:bg-gray-100 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                    </div>
                    <div>
                        <label class="block mb-2 text-sm text-gray-700 ">Confirme Password</label>
                        <input name="conpassword" type="password" placeholder="Enter your password" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg dark:placeholder-gray-300 dark:bg-gray-100 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                    </div>

                    <button type="submit"
                        class="flex items-center justify-between w-full px-6 py-3 text-sm tracking-wide text-white capitalize transition-colors duration-300 transform bg-[#3a86ff] rounded-lg hover:bg-[#3a86ff] focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-50">
                        <span>Sign Up </span>

                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 rtl:-scale-x-100" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                    <div class="text-red-500 text-[20px]">
                        @if ($errors->any())
                            <div>{{ $errors->first() }}</div>
                        @endif
                    </div>
                </form>
            </div>
                <div id="artisan-form" class="hidden w-full">
                    <form action="{{route('signup.artisan')}}" method="POST" class="grid grid-cols-1 gap-6 mt-8 md:grid-cols-2 ">
                        @csrf

                        <div>
                            <label class="block mb-2 text-sm text-gray-700 ">First Name</label>
                            <input name="name" type="text" placeholder="John" class="block w-full px-5 py-3 mt-2 text-gray-300 placeholder-gray-400 bg-white border border-gray-200 rounded-lg dark:placeholder-gray-300 dark:bg-gray-100 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                        </div>
    
                        <div>
                            <label class="block mb-2 text-sm text-gray-700 ">Last name</label>
                            <input name="lname" type="text" placeholder="Snow" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg dark:placeholder-gray-300 dark:bg-gray-100 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                        </div>
                        <div>
                            <label class="block mb-2 text-sm text-gray-700 ">Adresse</label>
                            <input name="address" type="text" placeholder="Snow" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg dark:placeholder-gray-300 dark:bg-gray-100 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                        </div>

                        <div>
                              
                          {{-- <label for="dropzone-file" class="flex items-center px-3 py-3  mx-auto mt-6 text-center bg-white border  rounded-lg cursor-pointer border-gray-600 dark:bg-gray-100">
                              <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-300 dark:text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12" />
                              </svg>
              
                              <h2 class="mx-3 text-gray-400">Profile Photo</h2>
              
                            </label> --}}
                            <input name="picture" id="dropzone-file" type="file"/>
                        </div>

                        <div>
                            <label class="block mb-2 text-sm text-gray-800">Phone number</label>
                            <input name="phone" type="text" placeholder="XXX-XX-XXXX-XXX" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg dark:placeholder-gray-300 dark:bg-gray-100 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                        </div>
    
                        <div>
                            <label class="block mb-2 text-sm text-gray-700 ">Tarif</label>
                            <input name="tarif" type="text" placeholder="Enter your Matricule" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg dark:placeholder-gray-300 dark:bg-gray-100 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                        </div>
                        
                        <div>
                            <label class="block mb-2 text-sm text-gray-700 ">Email</label>
                            <input name="email" type="email" placeholder="Enter your Email" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg dark:placeholder-gray-300 dark:bg-gray-100 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                        </div>
    
                        <div>
                            <label class="block mb-2 text-sm text-gray-700 ">Password</label>
                            <input name="password" type="password" placeholder="Enter your password" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg dark:placeholder-gray-300 dark:bg-gray-100 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                        </div>
                        <div>
                            <label class="block mb-2 text-sm text-gray-700 ">Confirme Password</label>
                            <input name="conpassword" type="password" placeholder="Enter your password" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg dark:placeholder-gray-300 dark:bg-gray-100 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                        </div>
    
                        <button type="submit"
                            class="flex items-center justify-between w-full px-6 py-3 text-sm tracking-wide text-white capitalize transition-colors duration-300 transform bg-[#3a86ff] rounded-lg hover:bg-[#3a86ff] focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-50">
                            <span>Sign Up </span>
    
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 rtl:-scale-x-100" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                    </form>
                </div>
            </div>


            </div>
        </div>
    </div>
</section>


<script >
    const passagerForm = document.getElementById('passagerForm');
const chauffeurForm = document.getElementById('chauffeurForm');

document.getElementById('passager-btn').addEventListener('click', function () {
    passagerForm.classList.remove('hidden');
    chauffeurForm.classList.add('hidden');
});

document.getElementById('chauffeur-btn').addEventListener('click', function () {
    passagerForm.classList.add('hidden');
    chauffeurForm.classList.remove('hidden');
});
</script>

@endsection