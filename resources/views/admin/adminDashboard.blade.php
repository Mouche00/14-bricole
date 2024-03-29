@extends('header')
<div class="conatiner flex gap-10">

@include('admin.asside')


<!--
  This example requires Tailwind CSS v2.0+

  The alpine.js code is *NOT* production ready and is included to preview
  possible interactivity
-->
<div class="bg-gray-100">
    <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
      
  <div>
    <h3 class="text-2xl leading-6 font-medium text-gray-900">
Statistiques    </h3>

    <dl class="mt-5 w-[1140px] grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3">
      
        <div class="relative bg-white pt-5 px-4 pb-12 sm:pt-6 sm:px-6 shadow rounded-lg overflow-hidden">
          <dt>
            <div class="absolute bg-indigo-500 rounded-md p-3">
              <svg class="h-6 w-6 text-white" x-description="Heroicon name: outline/users" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
</svg>
            </div>
            <p class="ml-16 text-sm font-medium text-gray-500 truncate">Total Artisans</p>
          </dt>
          <dd class="ml-16 pb-6 flex items-baseline sm:pb-7">
            <p class="text-2xl font-semibold text-gray-900">
              71,897
            </p>
            <p class="ml-2 flex items-baseline text-sm font-semibold text-green-600">
              
                <svg class="self-center flex-shrink-0 h-5 w-5 text-green-500" x-description="Heroicon name: solid/arrow-sm-up" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
  <path fill-rule="evenodd" d="M5.293 9.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 7.414V15a1 1 0 11-2 0V7.414L6.707 9.707a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
</svg>
              <span class="sr-only">
                Increased by
              </span>
              122
            </p>
            <div class="absolute bottom-0 inset-x-0 bg-gray-50 px-4 py-4 sm:px-6">
              <div class="text-sm">
                <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500"> View all<span class="sr-only"> Total Subscribers stats</span></a>
              </div>
            </div>
          </dd>
        </div>
      
        <div class="relative bg-white pt-5 px-4 pb-12 sm:pt-6 sm:px-6 shadow rounded-lg overflow-hidden">
          <dt>
            <div class="absolute bg-indigo-500 rounded-md p-3">
              <svg class="h-6 w-6 text-white" x-description="Heroicon name: outline/mail-open" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 19v-8.93a2 2 0 01.89-1.664l7-4.666a2 2 0 012.22 0l7 4.666A2 2 0 0121 10.07V19M3 19a2 2 0 002 2h14a2 2 0 002-2M3 19l6.75-4.5M21 19l-6.75-4.5M3 10l6.75 4.5M21 10l-6.75 4.5m0 0l-1.14.76a2 2 0 01-2.22 0l-1.14-.76"></path>
</svg>
            </div>
            <p class="ml-16 text-sm font-medium text-gray-500 truncate">Total Clients</p>
          </dt>
          <dd class="ml-16 pb-6 flex items-baseline sm:pb-7">
            <p class="text-2xl font-semibold text-gray-900">
              58.16%
            </p>
            <p class="ml-2 flex items-baseline text-sm font-semibold text-green-600">
              
                <svg class="self-center flex-shrink-0 h-5 w-5 text-green-500" x-description="Heroicon name: solid/arrow-sm-up" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
  <path fill-rule="evenodd" d="M5.293 9.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 7.414V15a1 1 0 11-2 0V7.414L6.707 9.707a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
</svg>
              <span class="sr-only">
                Increased by
              </span>
              5.4%
            </p>
            <div class="absolute bottom-0 inset-x-0 bg-gray-50 px-4 py-4 sm:px-6">
              <div class="text-sm">
                <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500"> View all<span class="sr-only"> Avg. Open Rate stats</span></a>
              </div>
            </div>
          </dd>
        </div>
      
        <div class="relative bg-white pt-5 px-4 pb-12 sm:pt-6 sm:px-6 shadow rounded-lg overflow-hidden">
          <dt>
            <div class="absolute bg-indigo-500 rounded-md p-3">
              <svg class="h-6 w-6 text-white" x-description="Heroicon name: outline/cursor-click" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122"></path>
</svg>
            </div>
            <p class="ml-16 text-sm font-medium text-gray-500 truncate">Total Domains</p>
          </dt>
          <dd class="ml-16 pb-6 flex items-baseline sm:pb-7">
            <p class="text-2xl font-semibold text-gray-900">
              24.57%
            </p>
            <p class="ml-2 flex items-baseline text-sm font-semibold text-red-600">
              
                <svg class="self-center flex-shrink-0 h-5 w-5 text-red-500" x-description="Heroicon name: solid/arrow-sm-down" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
  <path fill-rule="evenodd" d="M14.707 10.293a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 111.414-1.414L9 12.586V5a1 1 0 012 0v7.586l2.293-2.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
</svg>
              <span class="sr-only">
                Decreased by
              </span>
              3.2%
            </p>
            <div class="absolute bottom-0 inset-x-0 bg-gray-50 px-4 py-4 sm:px-6">
              <div class="text-sm">
                <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500"> View all<span class="sr-only"> Avg. Click Rate stats</span></a>
              </div>
            </div>
          </dd>
        </div>
      
    </dl>
  </div>
  <div class="mt-10">
    <h3 class="text-2xl leading-6 font-medium text-gray-900">
      Requests   
     </h3>

     <div class="mt-5 flex flex-wrap gap-20">

      <div class="w-full max-w-xs overflow-hidden bg-white rounded-lg shadow-lg dark:bg-gray-800">
        <img class="object-cover w-full h-56" src="https://images.unsplash.com/photo-1542156822-6924d1a71ace?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="avatar">
    
        <div class="py-5 text-center">
            <a href="#" class="block text-xl font-bold text-gray-800 dark:text-white" tabindex="0" role="link">John Doe</a>
            <span class="text-sm text-gray-700 dark:text-gray-200">Software Engineer</span>
        </div>
        <div class="flex justify-center gap-5">
          <div><button><img class="w-6 mt-1 py-1" src="{{url('img/accept_icon.png')}}" alt=""></button></div>
          <div><button><img class="w-8 py-1" src="{{url('img/icons8-cancel.png')}}" alt=""></button></div>
        </div>
      </div>


     </div>
  </div>
    </div>

  </div>

</div>