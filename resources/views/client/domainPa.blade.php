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
<div class=" flex justify-center gap-x-8 flex-wrap">

    @foreach ($services as $service)
            <div class="reserve-wrapper grid grid-cols-1 gap-6 sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-1 xl:grid-cols-1 w-[500px]">
                <div class=" relative  py-6 px-6 rounded-3xl my-4 shadow-xl  " style="background:linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 1)), url('{{ asset('pictures/cc.jpg') }}') no-repeat center;background-size:cover">
                
                <div class=" text-white flex items-center justify-between left-4 -top-6">
                    <div class="flex items-center text-sm">
                        <div class="relative w-16 h-16 mr-3 rounded-full md:block">
                        <img src="" class="object-cover w-full h-full rounded-full " alt="">
                        <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true">
                            <img src="{{ asset('images/users/' . $service->artisan->user->picture) }}">
                        </div>
                        </div>
                        <div>
                            <p class="font-bold font-mono text-xl text-white">{{ $service->artisan->user->name }}</p>
                            <p class="text-m font-mono text-white font-bold">
                                @foreach ($service->artisan->domains as $domain)
                                    <span>{{ $domain->nom . ($loop->last ? '' : ', ') }}</span>
                                @endforeach
                            </p>
                        </div>
                    </div>

                    <div class="p-4 bg-white text-black rounded-lg font-bold">
                        <p>${{ $service->tarif }}</p> 
                    </div>
                </div>
                
                <div class="mt-8">
                    <div class="flex space-x-3 text-white text-xl font-bold">
                        
                        <div class="flex-col justify-between items-center">
                            <h1 class="text-4xl">{{ $service->nom }}</h1> 
                            <p>{{ $service->description }}</p> 
                        </div> 
                    </div>
                    <div class="flex space-x-3 text-white font-bold text-xl my-3">
                    </div>
                    <div class="flex justify-between">
                        <div class="my-2">
                            <button type="button" data-id="{{ $service->id }}" class="reserve-button text-[#023e8a] bg-white focus:ring-4 focus:outline-none focus:ring-blue-400 /50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-blue-400 /50 dark:hover:bg-blue-400 /30 me-2 mb-2">
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
    @endforeach
</div>

{{-- search card  end  --}}

{{-- popup reserve --}}
<div id="reserve-form" class="fixed top-[50%] left-[50%] translate-x-[-50%] translate-y-[-50%] flex flex-col-reverse justify-center items-center bg-opacity-[0.8] z-[35] hidden">
    
    <form action="" method="POST" class="my-2 bg-white flex flex-col items-center gap-8 p-4 rounded z-[50]">
        @csrf
        <input class="text-xl p-2 bg-gray-200 rounded" type="datetime-local" value = "{{ now()->addHours(1)->timezone('Africa/Casablanca')->format('Y-m-d\TH:i') }}" min="{{ now()->timezone('Africa/Casablanca')->format('Y-m-d\TH:i') }}" max="{{ now()->timezone('Africa/Casablanca')->addMonth()->format('Y-m-d\TH:i') }}" name="date">
        <button type="submit" class="text-[#023e8a] bg-white focus:ring-4 focus:outline-none focus:ring-blue-400 /50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-blue-400 /50 dark:hover:bg-blue-400 /30 me-2 mb-2">
            <img src="{{asset('pictures/reservation.png')}}" class="h-6 w-6" alt="">
            
            
            Réserver
        </button>
    </form>
    <h1 class="p-4 bg-white rounded-lg">SELECT DATE:</h1>

</div>

<div id="overlay" class="absolute top-0 left-0 w-full h-full flex justify-center items-center bg-black opacity-[0.8] z-[20] hidden"></div>

{{-- popup reserve end --}}

{{-- dommaines --}}

<section class="bg-white ">
    <h3 class="mt-12 text-bold font-mono text-3xl text-center" >Artisans</h3>
	<div class="py-4 px-2 mx-auto max-w-screen-xl sm:py-4 lg:px-6">
		<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4 h-full">
			
            {{-- @foreach ($artisans as $art)
                
            
			<div class="col-span-2 sm:col-span-2 md:col-span-2 bg-stone-50">
				<a href="/ArtisanPage/{{$art->id}}" class="group relative flex flex-col overflow-hidden rounded-lg px-4 pb-4 pt-40 mb-4">
					<img src="/images/domains/{{$art->user->picture}}" alt="" class="absolute inset-0 h-full w-full object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out">
					<div class="absolute inset-0 bg-gradient-to-b from-gray-900/25 to-gray-900/5"></div>
					<h3 class="z-10 text-2xl font-medium text-white absolute top-0 left-0 p-4 xs:text-xl md:text-3xl">{{$art->user->name}}</h3>
				</a>
			</div>
            @endforeach --}}
			
			
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

<script>
    const reserveButtons = document.querySelectorAll('.reserve-button');
    const overlay = document.querySelector('#overlay');
    const reserveForm = document.querySelector('#reserve-form');
    const reserveWrappers = document.querySelectorAll('.reserve-wrapper');

    reserveButtons.forEach((e) => {
        e.addEventListener('click', () => {
            // e.getAttribute('data-id')
    
            overlay.classList.toggle('hidden');
            e.closest(".reserve-wrapper").classList.toggle('z-[30]');
            reserveForm.classList.toggle('hidden');
            reserveForm.firstElementChild.action = "{{ route('reservation.store', ['id' => $service->id]) }}";
        })
    })

    overlay.addEventListener('click', () => {
        overlay.classList.toggle('hidden');
        reserveForm.classList.toggle('hidden');
        reserveWrappers.forEach((e) => {
            e.classList.remove('z-[30]');
        })
    })


</script>



  
    @endsection



    