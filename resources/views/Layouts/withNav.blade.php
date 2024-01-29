@extends('Layouts.main')
@section('content')
{{-- place for navigation --}}
<div class="nav bg-slate-700 h-16">
    <button class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" type="button" data-drawer-target="drawer-navigation" data-drawer-show="drawer-navigation" aria-controls="drawer-navigation">
    Show navigation
    </button>
</div>


<!-- drawer init and show -->
 <!-- drawer component -->
 <div id="drawer-navigation" class="fixed bg-slate-100 top-0 left-0 z-40 h-screen p-4 overflow-y-auto transition-transform -translate-x-full w-60 dark:bg-gray-800" tabindex="-1" aria-labelledby="drawer-navigation-label">
     <h5 id="drawer-navigation-label" class="text-base font-semibold text-gray-500 uppercase dark:text-gray-400">Menu</h5>
     <button type="button" data-drawer-hide="drawer-navigation" aria-controls="drawer-navigation" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absolute top-2.5 right-2.5 inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" >
         <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
         <span class="sr-only">Close menu</span>
     </button>
   <div class="py-4 overflow-y-auto">
       <ul class="space-y-2 font-medium">
          <li>
             <a href="#" class="flex items-center p-2 border text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                <svg aria-hidden="true" class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path><path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path></svg>
                <span class="ml-3">Dashboard</span>
             </a>
          </li>
          <li>
             <button type="button" class="flex items-center w-full p-2 border text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                   <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd"></path></svg>
                   <span class="flex-1 ml-3 text-left whitespace-nowrap">E-commerce</span>
                   <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
             </button>
             <ul id="dropdown-example" class="hidden py-2 space-y-2">
                   <li>
                      <a href="#" class="flex items-center w-full p-2 border text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Products</a>
                   </li>
                   <li>
                      <a href="#" class="flex items-center w-full p-2 border text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Billing</a>
                   </li>
                   <li>
                      <a href="#" class="flex items-center w-full p-2 border text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Invoice</a>
                   </li>
             </ul>
          </li>
          <li>
             <a href="#" class="flex items-center p-2 border text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
                <span class="flex-1 ml-3 whitespace-nowrap">Kanban</span>
                <span class="inline-flex items-center justify-center px-2 ml-3 text-sm font-medium text-gray-800 bg-gray-100 rounded-full dark:bg-gray-700 dark:text-gray-300">Pro</span>
             </a>
          </li>
          <li>
             <a href="#" class="flex items-center p-2 border text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M8.707 7.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l2-2a1 1 0 00-1.414-1.414L11 7.586V3a1 1 0 10-2 0v4.586l-.293-.293z"></path><path d="M3 5a2 2 0 012-2h1a1 1 0 010 2H5v7h2l1 2h4l1-2h2V5h-1a1 1 0 110-2h1a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V5z"></path></svg>
                <span class="flex-1 ml-3 whitespace-nowrap">Inbox</span>
                <span class="inline-flex items-center justify-center w-3 h-3 p-3 ml-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300">3</span>
             </a>
          </li>
          <li>
             <a href="#" class="flex items-center p-2 border text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>
                <span class="flex-1 ml-3 whitespace-nowrap">Users</span>
             </a>
          </li>
          <li>
             <a href="#" class="flex items-center p-2 mb-3 border text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd"></path></svg>
                <span class="flex-1 ml-3 whitespace-nowrap">Products</span>
             </a>
          </li>
          <span class="font-light p-3 text-sm">Coding Roadmap</span>
          <li>

<div class="w-full text-gray-900 bg-slate-100 shadow border border-gray-200 rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-white">
    {{-- 1 --}}
    <button type="button" class="flex items-center w-full p-2 mb-1 text-base bg-slate-50 text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown2" data-collapse-toggle="dropdown2">
        <i class="fa-solid fa-code"></i>
        <span class="flex-1 ml-3 text-left whitespace-nowrap">Start Here</span>
        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
    </button>
    <ul id="dropdown2" class="hidden py-2 space-y-2">
        <li>
           <a href="#" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Products</a>
        </li>
        <li>
           <a href="#" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Billing</a>
        </li>
        <li>
           <a href="#" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Invoice</a>
        </li>
  </ul>
  {{--  2 --}}
    <button type="button" class="flex items-center w-full p-2 mb-1 bg-slate-50 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown3" data-collapse-toggle="dropdown3">
        <i class="fa-brands fa-html5"></i>
        <span class="flex-1 ml-3 text-left whitespace-nowrap">Week 1</span>
        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
    </button>
    <ul id="dropdown3" class="hidden py-2 space-y-2">
        <li>
            <a href="#" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-200 dark:text-white dark:hover:bg-gray-700">Products</a>
        </li>
        <li>
            <a href="#" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Billing</a>
        </li>
        <li>
            <a href="#" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Invoice</a>
        </li>
    </ul>
    {{-- 3 --}}
    <button type="button" class="flex items-center w-full p-2 mb-1 bg-slate-50 border text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-200 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown4" data-collapse-toggle="dropdown4">
        <i class="fa-brands fa-css3"></i>
        <span class="flex-1 ml-3 text-left whitespace-nowrap">Week 2</span>
        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
    </button>
    <ul id="dropdown4" class="hidden py-2 space-y-2">
        <li>
            <a href="#" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Products</a>
        </li>
        <li>
            <a href="#" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Billing</a>
        </li>
        <li>
            <a href="#" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Invoice</a>
        </li>
    </ul>
    {{-- 4 --}}
    <button type="button" class="flex items-center w-full my-1 p-2 border text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown5" data-collapse-toggle="dropdown5">
        <i class="fa-brands fa-js"></i>
        <span class="flex-1 ml-3 text-left whitespace-nowrap">Week 3</span>
        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
    </button>
    <ul id="dropdown5" class="hidden py-2 space-y-2">
        <li>
            <a href="#" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Products</a>
        </li>
        <li>
            <a href="#" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Billing</a>
        </li>
        <li>
            <a href="#" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Invoice</a>
        </li>
    </ul>
</div>

          </li>
          <li>
             <a href="#" class="flex items-center p-2 border text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z" clip-rule="evenodd"></path></svg>
                <span class="flex-1 ml-3 whitespace-nowrap">Sign In</span>
             </a>
          </li>
          <li>
             <a href="#" class="flex items-center p-2  border text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5 4a3 3 0 00-3 3v6a3 3 0 003 3h10a3 3 0 003-3V7a3 3 0 00-3-3H5zm-1 9v-1h5v2H5a1 1 0 01-1-1zm7 1h4a1 1 0 001-1v-1h-5v2zm0-4h5V8h-5v2zM9 8H4v2h5V8z" clip-rule="evenodd"></path></svg>
                <span class="flex-1 ml-3 whitespace-nowrap">Sign Up</span>
             </a>
          </li>
       </ul>
    </div>
 </div>
 {{-- drawer end --}}

 {{-- main content start --}}

{{-- place for image or ad --}}
<div class="h-44 bg-indigo-400 w-full"></div>
{{-- <img src="{{asset('img/matsuriBG.jpg')}}" class="h-44 w-full object-cover object-right-center relative"/> --}}

{{--place for search bar and breadcrumbs --}}
<div class="flex flex-row justify-between bg-slate-300 h-11">
    {{-- breadcrumbs --}}
    <div class=""><div class="w-max text-left">
        <nav aria-label="breadcrumb">
          <ol class="flex w-full flex-wrap items-center rounded-md bg-blue-gray-50 bg-opacity-60 py-2 px-4">
            <li class="flex cursor-pointer items-center font-sans text-sm font-normal leading-normal text-blue-gray-900 antialiased transition-colors duration-300 hover:text-pink-500">
              <a class="opacity-60" href="#">
                <span>Docs</span>
              </a>
              <span class="pointer-events-none mx-2 select-none font-sans text-sm font-normal leading-normal text-blue-gray-500 antialiased">
                /
              </span>
            </li>
            <li class="flex cursor-pointer items-center font-sans text-sm font-normal leading-normal text-blue-gray-900 antialiased transition-colors duration-300 hover:text-pink-500">
              <a class="opacity-60" href="#">
                <span>Components</span>
              </a>
              <span class="pointer-events-none mx-2 select-none font-sans text-sm font-normal leading-normal text-blue-gray-500 antialiased">
                /
              </span>
            </li>
            <li class="flex cursor-pointer items-center font-sans text-sm font-normal leading-normal text-blue-gray-900 antialiased transition-colors duration-300 hover:text-pink-500">
              <a
                class="font-medium text-blue-gray-900 transition-colors hover:text-pink-500"
                href="#"
              >
                Breadcrumbs
              </a>
            </li>
          </ol>
        </nav>
      </div></div>
      {{-- breadcrumbs end --}}

      {{-- search bar start --}}
    <form class="flex items-center">
        <label for="simple-search" class="sr-only">Search</label>
        <div class="relative w-full">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
            </div>
            <input type="text" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search" required>
        </div>
        <button type="submit" class="p-2.5 ml-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
            <span class="sr-only">Search</span>
        </button>
    </form>
      {{-- search bar end --}}
</div>

{{-- place for main content grid start --}}
<div class="grid grid-cols-9 grid-rows-5 gap-4 mx-3 mt-2">
    <div class="col-span-9 sm:col-start-3 md:col-span-3 lg:col-span-3 xl:col-span-3 xxl:col-span-3 justify-self-center">
        {{-- admin card test --}}
        <div class="relative mb-4 mt-6 flex w-96 flex-col rounded-xl bg-white bg-clip-border text-gray-700 shadow-md">
            <div class="p-6">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
                fill="currentColor"
                aria-hidden="true"
                class="mb-4 h-12 w-12 text-pink-500"
              >
                <path
                  fill-rule="evenodd"
                  d="M9.315 7.584C12.195 3.883 16.695 1.5 21.75 1.5a.75.75 0 01.75.75c0 5.056-2.383 9.555-6.084 12.436A6.75 6.75 0 019.75 22.5a.75.75 0 01-.75-.75v-4.131A15.838 15.838 0 016.382 15H2.25a.75.75 0 01-.75-.75 6.75 6.75 0 017.815-6.666zM15 6.75a2.25 2.25 0 100 4.5 2.25 2.25 0 000-4.5z"
                  clip-rule="evenodd"
                ></path>
                <path d="M5.26 17.242a.75.75 0 10-.897-1.203 5.243 5.243 0 00-2.05 5.022.75.75 0 00.625.627 5.243 5.243 0 005.022-2.051.75.75 0 10-1.202-.897 3.744 3.744 0 01-3.008 1.51c0-1.23.592-2.323 1.51-3.008z"></path>
              </svg>
              <h5 class="mb-2 block font-sans text-xl font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased">
                Creat New Post?
              </h5>
              <p class="block font-sans text-base font-light leading-relaxed text-inherit antialiased">
                Because it's about motivating the doers. Because I'm here to follow my
                dreams and inspire others.
              </p>
            </div>
            <div class="p-6 pt-0">
              <a
                class="!font-medium !text-blue-gray-900 !transition-colors hover:!text-pink-500"
                href="{{route('article.create')}}"
              >
                <button
                  class="flex select-none items-center gap-2 rounded-lg py-2 px-4 text-center align-middle font-sans text-xs font-bold uppercase text-pink-500 transition-all hover:bg-pink-500/10 active:bg-pink-500/30 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                  type="button"
                  data-ripple-dark="true"
                >
                  Learn More
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="2"
                    stroke="currentColor"
                    aria-hidden="true"
                    class="h-4 w-4"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3"
                    ></path>
                  </svg>
                </button>
              </a>
            </div>
          </div>
        {{-- ad card --}}
        <div class="relative mb-3 flex w-full max-w-[20rem] flex-col rounded-xl bg-gradient-to-tr from-pink-600 to-pink-400 bg-clip-border p-8 text-white shadow-md shadow-pink-500/40">
            <div class="relative m-0 mb-8 overflow-hidden rounded-none border-b border-white/10 bg-transparent bg-clip-border pb-8 text-center text-gray-700 shadow-none">
              <p class="block font-sans text-sm font-normal uppercase leading-normal text-white antialiased">
                standard
              </p>
              <h1 class="mt-6 flex justify-center gap-1 font-sans text-7xl font-normal tracking-normal text-white antialiased">
                <span class="mt-2 text-4xl">$</span>29
                <span class="self-end text-4xl">/mo</span>
              </h1>
            </div>
            <div class="p-0">
              <ul class="flex flex-col gap-4">
                <li class="flex items-center gap-4">
                  <span class="rounded-full border border-white/20 bg-white/20 p-1">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke-width="2"
                      stroke="currentColor"
                      aria-hidden="true"
                      class="h-3 w-3"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M4.5 12.75l6 6 9-13.5"
                      ></path>
                    </svg>
                  </span>
                  <p class="block font-sans text-base font-normal leading-relaxed text-inherit antialiased">
                    5 team members
                  </p>
                </li>
                <li class="flex items-center gap-4">
                  <span class="rounded-full border border-white/20 bg-white/20 p-1">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke-width="2"
                      stroke="currentColor"
                      aria-hidden="true"
                      class="h-3 w-3"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M4.5 12.75l6 6 9-13.5"
                      ></path>
                    </svg>
                  </span>
                  <p class="block font-sans text-base font-normal leading-relaxed text-inherit antialiased">
                    200+ components
                  </p>
                </li>
                <li class="flex items-center gap-4">
                  <span class="rounded-full border border-white/20 bg-white/20 p-1">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke-width="2"
                      stroke="currentColor"
                      aria-hidden="true"
                      class="h-3 w-3"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M4.5 12.75l6 6 9-13.5"
                      ></path>
                    </svg>
                  </span>
                  <p class="block font-sans text-base font-normal leading-relaxed text-inherit antialiased">
                    40+ built-in pages
                  </p>
                </li>
                <li class="flex items-center gap-4">
                  <span class="rounded-full border border-white/20 bg-white/20 p-1">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke-width="2"
                      stroke="currentColor"
                      aria-hidden="true"
                      class="h-3 w-3"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M4.5 12.75l6 6 9-13.5"
                      ></path>
                    </svg>
                  </span>
                  <p class="block font-sans text-base font-normal leading-relaxed text-inherit antialiased">
                    1 year free updates
                  </p>
                </li>
                <li class="flex items-center gap-4">
                  <span class="rounded-full border border-white/20 bg-white/20 p-1">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke-width="2"
                      stroke="currentColor"
                      aria-hidden="true"
                      class="h-3 w-3"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M4.5 12.75l6 6 9-13.5"
                      ></path>
                    </svg>
                  </span>
                  <p class="block font-sans text-base font-normal leading-relaxed text-inherit antialiased">
                    Life time technical support
                  </p>
                </li>
              </ul>
            </div>
            <div class="mt-12 p-0">
              <button
                class="block w-full select-none rounded-lg bg-white py-3.5 px-7 text-center align-middle font-sans text-sm font-bold uppercase text-pink-500 shadow-md shadow-blue-gray-500/10 transition-all hover:scale-[1.02] hover:shadow-lg hover:shadow-blue-gray-500/20 focus:scale-[1.02] focus:opacity-[0.85] focus:shadow-none active:scale-100 active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                type="button"
                data-ripple-dark="true"
              >
                Buy Now
              </button>
            </div>
          </div>
          {{-- ad card end --}}

          {{-- subscribe card --}}
        <div class="w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
            <form class="space-y-6" action="#">
                <h5 class="text-xl font-medium text-gray-900 dark:text-white">Sign in to our platform</h5>
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
                    <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="name@company.com" required>
                </div>
                <div>
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your password</label>
                    <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                </div>
                <div class="flex items-start">
                    <div class="flex items-start">
                        <div class="flex items-center h-5">
                            <input id="remember" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" required>
                        </div>
                    <label for="remember" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Remember me</label>
                    </div>
                    <a href="#" class="ml-auto text-sm text-blue-700 hover:underline dark:text-blue-500">Lost Password?</a>
                </div>
            <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Login to your account</button>
            <div class="text-sm font-medium text-gray-500 dark:text-gray-300">
                Not registered? <a href="#" class="text-blue-700 hover:underline dark:text-blue-500">Create account</a>
            </div>
        </form>
        </div>
    {{-- subscribe card end --}}
    </div>

    {{-- second grid  --}}
    <div class="col-span-9 row-start-1 sm:col-span-9 sm:row-start-1 md:col-span-9 md:row-start-1 lg:col-span-6 lg:col-start-4">
            {{-- admin view CRUD Alert --}}
            {{-- create start --}}
            @if (session('createSuccess'))
                    <div
                    class="font-regular relative block w-full rounded-lg bg-green-400 p-4 text-base leading-5 text-white opacity-100"
                    data-dismissible="alert"
                  >
                    <div class="mr-12">{{session('createSuccess')}}</div>
                    <div
                      class="absolute top-2.5 right-3 w-max rounded-lg transition-all hover:bg-white hover:bg-opacity-20"
                      data-dismissible-target="alert"
                    >
                      <button
                        role="button"
                        class="w-max rounded-lg p-1"
                        data-alert-dimissible="true"
                      >
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          class="h-6 w-6"
                          fill="none"
                          viewBox="0 0 24 24"
                          stroke="currentColor"
                          stroke-width="2"
                        >
                          <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M6 18L18 6M6 6l12 12"
                          ></path>
                        </svg>
                      </button>
                    </div>
                  </div>
            @endif
            {{-- create end --}}
            {{-- delete start --}}
            @if (session('deleteSuccess'))
                    <div
                    class="font-regular relative block w-full rounded-lg bg-green-400 p-4 text-base leading-5 text-white opacity-100"
                    data-dismissible="alert"
                  >
                    <div class="mr-12">{{session('deleteSuccess')}}</div>
                    <div
                      class="absolute top-2.5 right-3 w-max rounded-lg transition-all hover:bg-white hover:bg-opacity-20"
                      data-dismissible-target="alert"
                    >
                      <button
                        role="button"
                        class="w-max rounded-lg p-1"
                        data-alert-dimissible="true"
                      >
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          class="h-6 w-6"
                          fill="none"
                          viewBox="0 0 24 24"
                          stroke="currentColor"
                          stroke-width="2"
                        >
                          <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M6 18L18 6M6 6l12 12"
                          ></path>
                        </svg>
                      </button>
                    </div>
                  </div>
            @endif
            {{-- delete end --}}
             {{-- update start --}}
             @if (session('updateSuccess'))
             <div
             class="font-regular relative block w-full rounded-lg bg-green-400 p-4 text-base leading-5 text-white opacity-100"
             data-dismissible="alert"
           >
             <div class="mr-12">{{session('updateSuccess')}}</div>
             <div
               class="absolute top-2.5 right-3 w-max rounded-lg transition-all hover:bg-white hover:bg-opacity-20"
               data-dismissible-target="alert"
             >
               <button
                 role="button"
                 class="w-max rounded-lg p-1"
                 data-alert-dimissible="true"
               >
                 <svg
                   xmlns="http://www.w3.org/2000/svg"
                   class="h-6 w-6"
                   fill="none"
                   viewBox="0 0 24 24"
                   stroke="currentColor"
                   stroke-width="2"
                 >
                   <path
                     stroke-linecap="round"
                     stroke-linejoin="round"
                     d="M6 18L18 6M6 6l12 12"
                   ></path>
                 </svg>
               </button>
             </div>
           </div>
     @endif
     {{-- update end --}}
        {{-- admin view CRUD Alert end --}}
        {{-- unfinished read --}}
        <span class="text-base font-sans">Continue Reading?</span>
        <div class="bg-cyan-100 col-span-6 mb-3 rounded-l-lg shadow-xl overflow-hidden"><div class="h-44 flex flex-row rounded-lg">
            <div class="basis-4/12 "><img
                src="{{asset('img/matsuriBG.jpg')}}"
                alt="image"
                class="h-full w-full object-cover rounded-l-lg"/>
            </div>
            <div class="basis-7/12 pl-3">

                <div class="">
                    <h6 class="my-2 text-xs font-semibold uppercase antialiased">
                       <span class="border rounded-lg bg-slate-200 text-muted">startups</span>
                    </h6>
                    <h4 class="mb-2 block font-sans text-lg font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased">
                        <a href="{{route('article#readmore')}}">How To Get Away With Murder</a>
                    </h4>
                    <p class="mb-1 font-sans font-sm leading-4 text-gray-700 antialiased hidden sm:hidden md:block" >
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum eum totam quos dolore ullam repellat.
                    <a href="{{route('article#readmore')}}"><span class=" font-sans text-xs font-bold uppercase text-pink-500">Read More <i class="fa-solid fa-arrow-right"></i></span></a>
                    </p>
                    <div class="">
                        <div class="relative flex w-full max-w-[26rem] flex-col rounded-xl bg-transparent bg-clip-border text-gray-700 shadow-none">
                            <div class="relative mx-0 flex items-center gap-4 overflow-hidden rounded-xl bg-transparent bg-clip-border pt-0 text-gray-700 shadow-none">
                              <img
                                src="{{asset('img/me.jpg')}}"
                                alt="candice wu"
                                class="relative inline-block h-[30px] w-[30px] !rounded-full object-cover object-center"
                              />
                              <div class="flex w-full flex-col gap-0.5">
                                <div class="flex items-center justify-between">
                                  <h5 class="block font-sans text-xs font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased">
                                   Thae Su Paing
                                  </h5>
                                </div>
                                <p class="block font-sans text-xs font-light leading-relaxed text-blue-gray-900 antialiased">
                                  Frontend Lead @ Google
                                </p>
                              </div>
                            </div>
                          </div>
                    </div>
                </div>

            </div>
            <div class="basis-1/12">
            <div class="flex flex-col h-44 justify-between py-3">
                <i class="fa-solid fa-ellipsis-vertical text-sm sm:text-lg lg:text-xl pl-5"></i>
                <i class="fa-solid fa-bookmark text-sm sm:text-lg lg:text-xl  pl-4"></i>
            </div>
            </div>
        </div></div>
        {{-- unfinished read end --}}

        {{-- tab start --}}
        <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
            <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
                <li class="mr-2" role="presentation">
                    <button class="inline-block p-4 border-b-2 rounded-t-lg" id="profile-tab" data-tabs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Profile</button>
                </li>
                <li class="mr-2" role="presentation">
                    <button class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="false">Dashboard</button>
                </li>
                <li class="mr-2" role="presentation">
                    <button class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="settings-tab" data-tabs-target="#settings" type="button" role="tab" aria-controls="settings" aria-selected="false">Settings</button>
                </li>
                <li role="presentation">
                    <button class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="contacts-tab" data-tabs-target="#contacts" type="button" role="tab" aria-controls="contacts" aria-selected="false">Contacts</button>
                </li>
            </ul>
        </div>
        <div id="myTabContent">
            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                @foreach ($articles as $data)
                <div class="bg-white col-span-6 mb-3 rounded-l-lg shadow-xl overflow-hidden"><div class="h-44 flex flex-row rounded-lg">
                    <div class="basis-4/12 "><img
                        src="{{asset('img/matsuriBG.jpg')}}"
                        alt="image"
                        class="h-full w-full object-cover rounded-l-lg"/>
                    </div>
                    <div class="basis-7/12 pl-3">

                        <div class="">
                            <h6 class="my-2 text-xs font-semibold uppercase antialiased">
                               <span class="border rounded-lg bg-slate-200 text-muted">startups</span>
                            </h6>
                            <h4 class="mb-2 block font-sans text-lg font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased">
                                <a href="{{route('article#readmore')}}">{{$data->title}}</a>
                            </h4>
                            <p class="mb-1 font-sans font-sm leading-4 text-gray-700 antialiased hidden sm:hidden md:block" >
                                {{Str::words($data->article_text, 15, '...')}}
                            <a href="{{route('article.show',$data['id'])}}"><span class=" font-sans text-xs font-bold uppercase text-pink-500">Read More <i class="fa-solid fa-arrow-right"></i></span></a>
                            </p>
                            <div class="">
                                <div class="relative flex w-full max-w-[26rem] flex-col rounded-xl bg-transparent bg-clip-border text-gray-700 shadow-none">
                                    <div class="relative mx-0 flex items-center gap-4 overflow-hidden rounded-xl bg-transparent bg-clip-border pt-0 text-gray-700 shadow-none">
                                      <img
                                        src="{{asset('img/me.jpg')}}"
                                        alt="candice wu"
                                        class="relative inline-block h-[30px] w-[30px] !rounded-full object-cover object-center"
                                      />
                                      <div class="flex w-full flex-col gap-0.5">
                                        <div class="flex items-center justify-between">
                                          <h5 class="block font-sans text-xs font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased">
                                            {{$data->author}}
                                          </h5>
                                        </div>
                                        <p class="block font-sans text-xs font-light leading-relaxed text-blue-gray-900 antialiased">
                                          Frontend Lead @ Google
                                        </p>
                                      </div>
                                    </div>
                                  </div>
                            </div>
                        </div>

                    </div>
                    <div class="basis-1/12">
                    <div class="flex flex-col h-44 justify-between py-3">
                        <i class="fa-solid fa-ellipsis-vertical text-sm sm:text-lg lg:text-xl pl-5"
                            data-dropdown-toggle="dropdown"
                        ></i>
                        <form action="{{route('article.destroy',$data->id)}}" method="post">
                            @csrf
                            {{ method_field('DELETE')}}
                            <button type="submit"><i class="fa-solid fa-trash text-sm sm:text-lg lg:text-xl pl-4"></i></button>
                        </form>
                        <a href="{{route('article.edit',$data->id)}}"><i class="fa-solid fa-pen-to-square text-sm sm:text-lg lg:text-xl pl-4"></i></a>
                        <i class="fa-solid fa-bookmark text-sm sm:text-lg lg:text-xl  pl-4">
                        </i>
                        {{-- drop down for three dots icon --}}
                        <!-- Dropdown menu -->
                        <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                                <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                     Dashboard{{$data->id}}</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                    Delete{{$data->id}}</a>
                                </li>
                                <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign out</a>
                                </li>
                            </ul>
                        </div>
                        {{-- drop down for three dots icon end --}}

                        {{-- popup menu content --}}
                        {{-- <ul
                        role="menu"
                        data-popover="menu"
                        data-popover-placement="bottom"
                        class="absolute z-10 min-w-[180px] overflow-auto rounded-md border border-blue-gray-50 bg-white p-3 font-sans text-sm font-normal text-blue-gray-500 shadow-lg shadow-blue-gray-500/10 focus:outline-none"
                      >
                        <a href=""><li
                          role="menuitem"
                          class="block w-full cursor-pointer select-none rounded-md px-3 pt-[9px] pb-2 text-start leading-tight transition-all hover:bg-blue-50 hover:bg-opacity-80 hover:text-blue-900 focus:bg-blue-50 focus:bg-opacity-80 focus:text-blue-900 active:bg-blue-50 active:bg-opacity-80 active:text-blue-900"
                        >
                        <i class="fa-solid fa-flag mr-3"></i>Report
                        </li></a>
                        <a href=""><li
                          role="menuitem"
                          class="block w-full cursor-pointer select-none rounded-md px-3 pt-[9px] pb-2 text-start leading-tight transition-all hover:bg-blue-50 hover:bg-opacity-80 hover:text-blue-900 focus:bg-blue-50 focus:bg-opacity-80 focus:text-blue-900 active:bg-blue-50 active:bg-opacity-80 active:text-blue-900"
                        >
                        <i class="fa-solid fa-heart mr-3"></i>Favorite
                        </li></a>
                        <a href="{{route('article#delete',$data->id)}}"><li
                            role="menuitem"
                            class="block w-full cursor-pointer select-none rounded-md px-3 pt-[9px] pb-2 text-start leading-tight transition-all hover:bg-blue-50 hover:bg-opacity-80 hover:text-blue-900 focus:bg-blue-50 focus:bg-opacity-80 focus:text-blue-900 active:bg-blue-50 active:bg-opacity-80 active:text-blue-900"
                          >
                          <i class="fa-solid fa-trash mr-3"></i>Delete{{$data->id}}
                          </li></a>

                        <a href=""><li
                          role="menuitem"
                          class="block w-full cursor-pointer select-none rounded-md px-3 pt-[9px] pb-2 text-start leading-tight transition-all hover:bg-blue-50 hover:bg-opacity-80 hover:text-blue-900 focus:bg-blue-50 focus:bg-opacity-80 focus:text-blue-900 active:bg-blue-50 active:bg-opacity-80 active:text-blue-900"
                        >
                        <i class="fa-solid fa-pen-to-square mr-3"></i>Update
                        </li></a>
                      </ul> --}}

                        {{-- popup menu content end --}}
                    </div>
                    </div>
                </div></div>
                @endforeach
                {{$articles->links()}}
            </div>
            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Dashboard tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
            </div>
            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="settings" role="tabpanel" aria-labelledby="settings-tab">
                <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Settings tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
            </div>
            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="contacts" role="tabpanel" aria-labelledby="contacts-tab">
                <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Contacts tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
            </div>
        </div>
        {{-- tab end --}}
    </div>
</div>
 {{-- main content end --}}
@endsection
