@extends('header')


@include('artisan.navbar')

<section class="max-w-4xl p-6 mx-auto bg-white rounded-md shadow-md mt-32">
    <div class="flex justify-center ml-16">
        <div class="bg-white">
            <div class="flex justify-center mx-auto py-12">
              
          <nav aria-label="Progress">
            <ol role="list" class="flex items-center">
              
                <li class="relative pr-8 sm:pr-20">
                  
                    <div class="absolute inset-0 flex items-center" aria-hidden="true" x-description="Completed Step">
                      <div class="h-0.5 w-full bg-indigo-600"></div>
                    </div>
                    <a href="#" class="relative w-8 h-8 flex items-center justify-center bg-indigo-600 rounded-full hover:bg-indigo-900">
                      <svg class="w-5 h-5 text-white" x-description="Heroicon name: solid/check" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
          <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
        </svg>
                    </a>
                  </li>
              
                  <li class="relative pr-8 sm:pr-20">
                  
                    <div class="absolute inset-0 flex items-center" aria-hidden="true" x-description="Completed Step">
                        <div class="h-0.5 w-full bg-indigo-600"></div>

                    </div>
                    <a href="#" class="relative w-8 h-8 flex items-center justify-center bg-indigo-600 rounded-full hover:bg-indigo-900">
                      <svg class="w-5 h-5 text-white" x-description="Heroicon name: solid/check" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
          <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
        </svg>
                    </a>
                  </li>

                  <li class="relative pr-8 sm:pr-20">
          
                    <div class="absolute inset-0 flex items-center" aria-hidden="true" x-description="Upcoming Step">

                    </div>
                    <a href="#" class="group relative w-8 h-8 flex items-center justify-center bg-white border-2 border-indigo-600 rounded-full hover:border-gray-400">
                      <span class="h-2.5 w-2.5 bg-transparent rounded-full group-hover:bg-gray-300" aria-hidden="true"></span>
                      <span class="sr-only">Step 4</span>
                    </a>
                  </li>
            </ol>
          </nav>
        
            </div>
          </div>

    </div> 
    <div class="flex justify-center">
        <h2 class="text-2xl font-semibold text-gray-700 capitalize ">Add Compétances</h2>
    </div>  
    <form action="{{ route('competances.artisan') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="grid grid-cols-1 gap-6 mt-10 sm:grid-cols-2">
            <div class="flex flex-col">
                <label class="text-gray-600" for="competances">Compétances</label>
                <div class="dropdown">
                    <div class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-blue-400 rounded-md dark:text-gray-600 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
                        Select Options
                    </div>
    
                    <div id="dropdownContent" class="dropdown-content">
                        @foreach($competances as $competance)
                            <label>
                                <input type="checkbox" name="competance_ids[]" value="{{$competance->id}}" class="mr-2">{{$competance->nom}}
                            </label>
                        @endforeach
                        <input type="hidden" name="artisan_id" value="{{ Auth::user()->artisan->id }}">
                    </div>
                </div>
            </div>
        </div>
    
        <div class="flex justify-end mt-6">
            <button type="submit" class="px-8 py-2.5 leading-5 text-white transition-colors duration-300 transform bg-blue-500 rounded-md hover:bg-blue-700 focus:outline-none focus:bg-gray-600">Next</button>
        </div>
    </form>
</section>

<script>
    function toggleDropdown() {
        document.getElementById('dropdownContent').classList.toggle('hidden');
    }

    function updateSelection(checkbox) {
        console.log('Option ' + checkbox.value + ' is ' + (checkbox.checked ? 'checked' : 'unchecked'));
    }
</script>


