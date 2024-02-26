@extends('layouts.master')
@section('client')
<link rel="stylesheet" href="css/client.css">
@include('client.navbar')

    <div style="background:linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('{{ asset('pictures/az.png') }}') no-repeat center;background-size:cover"
    class="py-52 px-1 md:px-8 text-center relative text-white font-bold text-2xl md:text-3xl overflow-auto">
    <h1 class="pb-4 font-mono">Recherchez votre service</h1>
    <div class="w-11/12 md:w-3/4 lg:max-w-3xl m-auto">
        <div class="relative z-0 text-base text-black">
            
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
                    <a href="{{route('reservations')}}" class="text-[#023e8a] bg-white focus:ring-4 focus:outline-none focus:ring-blue-400 /50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-blue-400 /50 dark:hover:bg-blue-400 /30 me-2 mb-2">
                        <img src="{{asset('pictures/reservation.png')}}" class="h-6 w-6" alt="">
                        
                        Réserver
                        </a>
                  </div>
                
                  <div class="my-2">
                    <a href="{{route('reservations')}}" class="text-[#023e8a] bg-white focus:ring-4 focus:outline-none focus:ring-blue-400 /50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-blue-400 /50 dark:hover:bg-blue-400 /30 me-2 mb-2">
                        <img src="{{asset('pictures/conversation.png')}}" class="h-6 w-6" alt="">
                        Envoyer un message
                        </a>
                    
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
            <h2 class="mb-4 text-center text-2xl text-gray-900 font-bold font-mono md:text-4xl">Comment ça marche ?</h2>
        </div>
        <div class="grid gap-12 items-center md:grid-cols-4">
            <div class="space-y-4 text-center">
                <img class="w-32 h-32 mx-auto object-cover rounded-xl md:w-20 md:h-20 lg:w-32 lg:h-32" 
                    src="{{asset('pictures/demande.png')}}" alt="woman" loading="lazy" width="640" height="805">
                <div>
                    <h4 class="text-xl font-bold font-mono">1. Publiez votre demande</h4>
                    <span class="block text-sm font-bold font-mono text-[#023e8a]">Sélectionnez une catégorie et décrivez votre besoin</span>
                </div>
            </div>
            <div class="space-y-4 text-center">
                <img class="w-32 h-32 mx-auto object-cover rounded-xl md:w-20 md:h-20 lg:w-32 lg:h-32" 
                    src="{{asset('pictures/parametres.png')}}" alt="man" loading="lazy" width="1000" height="667">
                <div>
                    <h4 class="text-xl font-bold font-mono">2. Recevez des offres en 48h</h4>
                    <span class="block text-sm font-bold font-mono text-[#023e8a]">Comparez les devis des prestataires</span>
                </div>
            </div>
            <div class="space-y-4 text-center">
                <img class="w-32 h-32 mx-auto object-cover rounded-xl md:w-20 md:h-20 lg:w-32 lg:h-32" 
                    src="{{asset('pictures/ingenieur.png')}}" alt="woman" loading="lazy" width="1000" height="667">
                <div>
                    <h4 class="text-xl font-bold font-mono">3. Choisissez votre prestataire</h4>
                    <span class="block text-sm font-bold font-mono text-[#023e8a]">Particulier ou professionnel selon votre budget</span>
                </div>
            </div>
            <div class="space-y-4 text-center">
                <img class="w-32 h-32 mx-auto object-cover rounded-xl md:w-20 md:h-20 lg:w-32 lg:h-32" 
                    src="{{asset('pictures/travaux.png')}}" alt="woman" loading="lazy" width="1000" height="667">
                <div>
                    <h4 class="text-xl font-bold font-mono">4. Réalisez tous vos travaux</h4>
                    <span class="block text-sm font-bold font-mono text-[#023e8a]">Fixez un rendez-vous et notez la prestation</span>
                </div>
            </div>
        </div>
    </div>
</div>



  
    @endsection



    