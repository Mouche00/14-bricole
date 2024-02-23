@extends('layouts.master')
@section('client')
<link rel="stylesheet" href="css/client.css">

<div class=" min-h-screen">
    <div class="fixed bg-white text-blue-800 px-10 py-1 z-10 w-full">
        <div class=" flex items-center justify-between py-2 text-5x1">
            {{-- <img src="{{asset('pictures/oo.png')}}" class="h-24" alt=""> --}}
          <ul class="flex space-x-4">
            <li><a href="#" class="text-black text-xl font-mono ">Home</a></li>
            <li><a href="#" class="text-black text-xl font-mono">Artisans</a></li>
        </ul>
          <div class="flex items-center text-gray-500"> 
            <span class="material-icons-outlined p-2" style="font-size: 30px"></span>
            <div class="bg-center bg-cover bg-no-repeat rounded-full inline-block h-12 w-12 ml-2" style="background-image: url(https://i.pinimg.com/564x/de/0f/3d/de0f3d06d2c6dbf29a888cf78e4c0323.jpg)"></div>
          </div>
      </div>
    </div>

    <div style="background:linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('{{ asset('pictures/az.png') }}') no-repeat center;background-size:cover"
    class="py-52 px-1 md:px-8 text-center relative text-white font-bold text-2xl md:text-3xl overflow-auto">
    <h1 class="pb-4 font-mono">Recherchez votre service</h1>
    <div class="w-11/12 md:w-3/4 lg:max-w-3xl m-auto">
        <div class="relative z-30 text-base text-black">
            
            <div class="overflow-hidden z-0 rounded-full relative p-3 font-mono">
                <form role="form" class="relative flex z-50 bg-white rounded-full">
                  <input type="text" placeholder="enter your search here" class="rounded-full flex-1 px-6 py-4 text-gray-700 focus:outline-none">
                  <button class=" rounded-full w-16 h-16 ">
                    <div class="flex gap-3 justify-center items-center">
                      <span>
                          <img class="h-6 w-6" src="{{asset('pictures/chercher.png')}}" alt="">
                      </span>
                    </div>
                </button>
                </form>
                <div class="glow glow-1 z-10 bg-[#023e8a] absolute"></div>
                <div class="glow glow-2 z-20 bg-blue-400 absolute"></div>
                <div class="glow glow-3 z-30 bg-blue-400 absolute"></div>
                <div class="glow glow-4 z-40 bg-[#023e8a] absolute"></div>
              </div>
           
            <div
                class="text-left absolute top-10 rounded-t-none rounded-b-2xl shadow bg-white divide-y w-full max-h-40 overflow-auto">
            </div>
        </div>
    </div>
</div>

{{-- search card  --}}
<div class=" flex justify-center ">
    <div class="grid grid-cols-1 gap-6 sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-1 xl:grid-cols-1 w-[700px]">
        <div class=" relative  py-6 px-6 rounded-3xl my-4 shadow-xl  " style="background:linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('{{ asset('pictures/cc.jpg') }}') no-repeat center;background-size:cover">
           
        <div class=" text-white flex items-center left-4 -top-6">
            <div class="flex items-center text-sm">
              <div class="relative w-16 h-16 mr-3 rounded-full md:block">
              <img src="" class="object-cover w-full h-full rounded-full " alt="">
              <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
              </div>
              <div>
                <p class="font-bold font-mono text-xl text-white">Ayoub Chabat</p>
                <p class="text-m font-mono text-white font-bold">Plombier</p>
              </div>
            </div>
          </div>
          
          <div class="mt-8">
              <div class="flex space-x-3 text-white text-xl font-bold">
                
                <div class="flex-col justify-between items-center">
                  

                    <p>Lorem ipsum dolor sit amet.</p> 
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veniam nemo magnam cupiditate, velit sequi ea? Suscipit ipsum repudiandae laudantium velit.</p>
                   
                  </div>
                 
            </div>
            
              <div class="flex space-x-3 text-white font-bold text-xl my-3">
              
               
              </div>


              <div class="flex justify-between">
                  <div class="my-2">
                    <button type="button" class="text-[#023e8a] bg-white focus:ring-4 focus:outline-none focus:ring-blue-400 /50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-blue-400 /50 dark:hover:bg-blue-400 /30 me-2 mb-2">
                        <svg class="w-5 h-5 me-2 -ms-1" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="apple" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path fill="currentColor" d="M318.7 268.7c-.2-36.7 16.4-64.4 50-84.8-18.8-26.9-47.2-41.7-84.7-44.6-35.5-2.8-74.3 20.7-88.5 20.7-15 0-49.4-19.7-76.4-19.7C63.3 141.2 4 184.8 4 273.5q0 39.3 14.4 81.2c12.8 36.7 59 126.7 107.2 125.2 25.2-.6 43-17.9 75.8-17.9 31.8 0 48.3 17.9 76.4 17.9 48.6-.7 90.4-82.5 102.6-119.3-65.2-30.7-61.7-90-61.7-91.9zm-56.6-164.2c27.3-32.4 24.8-61.9 24-72.5-24.1 1.4-52 16.4-67.9 34.9-17.5 19.8-27.8 44.3-25.6 71.9 26.1 2 49.9-11.4 69.5-34.3z"></path></svg>
                        Réserver
                        </button>
                  </div>
                
                  <div class="my-2">
                    <button type="button" class="text-[#023e8a] bg-white focus:ring-4 focus:outline-none focus:ring-blue-400 /50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-blue-400 /50 dark:hover:bg-blue-400 /30 me-2 mb-2">
                        <svg class="w-5 h-5 me-2 -ms-1" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="apple" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path fill="currentColor" d="M318.7 268.7c-.2-36.7 16.4-64.4 50-84.8-18.8-26.9-47.2-41.7-84.7-44.6-35.5-2.8-74.3 20.7-88.5 20.7-15 0-49.4-19.7-76.4-19.7C63.3 141.2 4 184.8 4 273.5q0 39.3 14.4 81.2c12.8 36.7 59 126.7 107.2 125.2 25.2-.6 43-17.9 75.8-17.9 31.8 0 48.3 17.9 76.4 17.9 48.6-.7 90.4-82.5 102.6-119.3-65.2-30.7-61.7-90-61.7-91.9zm-56.6-164.2c27.3-32.4 24.8-61.9 24-72.5-24.1 1.4-52 16.4-67.9 34.9-17.5 19.8-27.8 44.3-25.6 71.9 26.1 2 49.9-11.4 69.5-34.3z"></path></svg>
                        Envoyer un message
                        </button>
                    
                </div>
              </div>
        
          </div>
      </div>
  </div>
</div>

{{-- search card  end  --}}

{{-- dommaines --}}

<section class="bg-white ">
    <h3 class="mt-12 text-bold font-mono text-3xl text-center" >Dommaines</h3>
	<div class="py-4 px-2 mx-auto max-w-screen-xl sm:py-4 lg:px-6">
		<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-5 gap-4 h-full">
			<div class="col-span-2 sm:col-span-1 md:col-span-2 bg-gray-50 h-auto md:h-full flex flex-col">
				<a href="" class="group relative flex flex-col overflow-hidden rounded-lg px-4 pb-4 pt-40 flex-grow">
					<img src="{{asset('pictures/plombier.jpg')}}" alt="" class="absolute inset-0 h-full w-full object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out">
					<div class="absolute inset-0 bg-gradient-to-b from-gray-900/25 to-gray-900/5"></div>
					<h3 class="z-10 text-2xl font-medium text-white absolute top-0 left-0 p-4 xs:text-xl md:text-3xl">Plombier</h3>
				</a>
			</div>
			<div class="col-span-2 sm:col-span-1 md:col-span-2 bg-stone-50">
				<a href="" class="group relative flex flex-col overflow-hidden rounded-lg px-4 pb-4 pt-40 mb-4">
					<img src="{{asset('pictures/Electricien.jpg')}}" alt="" class="absolute inset-0 h-full w-full object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out">
					<div class="absolute inset-0 bg-gradient-to-b from-gray-900/25 to-gray-900/5"></div>
					<h3 class="z-10 text-2xl font-medium text-white absolute top-0 left-0 p-4 xs:text-xl md:text-3xl">Electricien</h3>
				</a>
				<div class="grid gap-4 grid-cols-2 sm:grid-cols-2 lg:grid-cols-2">
					<a href="" class="group relative flex flex-col overflow-hidden rounded-lg px-4 pb-4 pt-40">
						<img src="{{asset('pictures/plombier.jpg')}}" alt="" class="absolute inset-0 h-full w-full object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out">
						<div class="absolute inset-0 bg-gradient-to-b from-gray-900/25 to-gray-900/5"></div>
						<h3 class="z-10 text-2xl font-medium text-white absolute top-0 left-0 p-4 xs:text-xl md:text-3xl">Teinturier</h3>
					</a>
					<a href="" class="group relative flex flex-col overflow-hidden rounded-lg px-4 pb-4 pt-40">
						<img src="{{asset('pictures/Menuisier.jpg')}}" alt="" class="absolute inset-0 h-full w-full object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out">
						<div class="absolute inset-0 bg-gradient-to-b from-gray-900/25 to-gray-900/5"></div>
						<h3 class="z-10 text-2xl font-medium text-white absolute top-0 left-0 p-4 xs:text-xl md:text-3xl">Menuisier</h3>
					</a>
				</div>
			</div>
			<div class="col-span-2 sm:col-span-1 md:col-span-1 bg-sky-50 h-auto md:h-full flex flex-col">
				<a href="" class="group relative flex flex-col overflow-hidden rounded-lg px-4 pb-4 pt-40 flex-grow">
					<img src="{{asset('pictures/construction.jpg')}}" alt="" class="absolute inset-0 h-full w-full object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out">
					<div class="absolute inset-0 bg-gradient-to-b from-gray-900/25 to-gray-900/5"></div>
					<h3 class="z-10 text-2xl font-medium text-white absolute top-0 left-0 p-4 xs:text-xl md:text-3xl">construction</h3>
				</a>
			</div>
		</div>
	</div>
</section>



<!-- component -->
<div class="py-20 bg-gray-50">
    <div class="container mx-auto px-6 md:px-12 xl:px-32">
        <div class="mb-16 text-center">
            <h2 class="mb-4 text-center text-2xl text-gray-900 font-bold md:text-4xl">Tailus blocks leadership</h2>
            <p class="text-gray-600 lg:w-8/12 lg:mx-auto">Tailus prides itself not only on award-winning technology, but also on the talent of its people of some of the brightest minds and most experienced executives in business.</p>
        </div>
        <div class="grid gap-12 items-center md:grid-cols-3">
            <div class="space-y-4 text-center">
                <img class="w-64 h-64 mx-auto object-cover rounded-xl md:w-40 md:h-40 lg:w-64 lg:h-64" 
                    src="https://tailus.io/sources/blocks/classic/preview/images/woman1.jpg" alt="woman" loading="lazy" width="640" height="805">
                <div>
                    <h4 class="text-2xl">Hentoni Doe</h4>
                    <span class="block text-sm text-gray-500">CEO-Founder</span>
                </div>
            </div>
            <div class="space-y-4 text-center">
                <img class="w-64 h-64 mx-auto object-cover rounded-xl md:w-48 md:h-64 lg:w-64 lg:h-80" 
                    src="https://tailus.io/sources/blocks/classic/preview/images/man.jpg" alt="man" loading="lazy" width="1000" height="667">
                <div>
                    <h4 class="text-2xl">Jonathan Doe</h4>
                    <span class="block text-sm text-gray-500">Chief Technical Officer</span>
                </div>
            </div>
            <div class="space-y-4 text-center">
                <img class="w-64 h-64 mx-auto object-cover rounded-xl md:w-40 md:h-40 lg:w-64 lg:h-64" 
                    src="https://tailus.io/sources/blocks/classic/preview/images/woman.jpg" alt="woman" loading="lazy" width="1000" height="667">
                <div>
                    <h4 class="text-2xl">Anabelle Doe</h4>
                    <span class="block text-sm text-gray-500">Chief Operations Officer</span>
                </div>
            </div>
        </div>
    </div>
</div>



  
    @endsection



    