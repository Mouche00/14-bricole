
<div class=" min-h-screen">
    <div class=" bg-white text-blue-800 px-10 py-1  w-full">
        <div class=" flex items-center justify-between py-2 text-5x1">
            <img src="{{asset('pictures/logo.png')}}" class="h-16" alt="">
          <ul class="flex space-x-4">
            <li><a href="{{route('client')}}" class="text-black text-xl font-mono ">Home</a></li>
            <li><a href="{{route('artisans')}}" class="text-black text-xl font-mono">Artisans</a></li>
            <li><a href="{{route('profile')}}" class="text-black text-xl font-mono">Profile</a></li>
        </ul>
          <div class="flex items-center text-gray-500"> 
            <span class="material-icons-outlined p-2" style="font-size: 30px"></span>
            <div class="bg-center bg-cover bg-no-repeat rounded-full inline-block h-12 w-12 ml-2" style="background-image:  url('{{ asset('pictures/plombier.jpg') }}')"></div>
          </div>
      </div>
    </div>