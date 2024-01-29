@extends('Layouts.main')
@section('content')
{{-- place for navigation --}}
<div class="nav bg-slate-700 h-16"></div>

{{-- place for image or ad --}}
<div class="h-44 bg-indigo-400 w-full"></div>
{{-- <img src="{{asset('img/matsuriBG.jpg')}}" class="h-44 w-full object-cover object-right-center relative"/> --}}

{{--place for search bar and breadcrumbs --}}
<div class="flex items-center flex-row-reverse sm:flex-row md:flex-row lg:flex-row xl:flex-row xxl:flex-row justify-between bg-slate-300 h-11">
    {{-- breadcrumbs --}}
    <div class="hidden sm:block"><div class="w-max text-left">
        <nav aria-label="breadcrumb">
          <ol class="flex w-full flex-wrap items-center rounded-md bg-blue-gray-50 bg-opacity-60 py-2 px-4">
            <li class="flex cursor-pointer items-center font-sans text-sm font-normal leading-normal text-blue-gray-900 antialiased transition-colors duration-300 hover:text-pink-500">
              <a class="opacity-60" href="#">
                <span>Home</span>
              </a>
              <span class="pointer-events-none mx-2 select-none font-sans text-sm font-normal leading-normal text-blue-gray-500 antialiased">
                /
              </span>
            </li>
            <li class="flex cursor-pointer items-center font-sans text-sm font-normal leading-normal text-blue-gray-900 antialiased transition-colors duration-300 hover:text-pink-500">
              <a class="opacity-60" href="#">
                <span>Article</span>
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
                View
              </a>
            </li>
          </ol>
        </nav>
      </div></div>
      {{-- breadcrumbs end --}}

      {{-- search bar start --}}
    <form class="flex items-center place-items-end sm:place-items-end" action="{{route('articles#index')}}" method="GET">
        <label for="simple-search" class="sr-only">Search</label>
        <div class="relative w-full">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
            </div>
            <input type="text" name="searchKey" value="{{request('searchKey')}}" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search">
        </div>
        <button type="submit" class="p-2.5 ml-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
            <span class="sr-only">Search</span>
        </button>
    </form>
      {{-- search bar end --}}
</div>

{{-- place for main content grid start --}}
<div class="grid grid-cols-9 grid-rows-5 gap-0 sm:gap-0 md:gap-4 lg:gap-4 mx-3 mt-2">
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
                       <span class="border rounded-lg bg-slate-200 text-sm">start ups</span>
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
                {{-- @foreach ($categories as $one)
                <li class="mr-2" role="presentation">
                    <button class="inline-block p-4 border-b-2 rounded-t-lg" id="foryou-tab" data-tabs-target="#foryou" type="button" role="tab" aria-controls="foryou" aria-selected="false">{{$one['category']}}</button>
                </li>
                @endforeach --}}
                <li class="mr-2" role="presentation">
                    <button class="inline-block p-4 border-b-2 rounded-t-lg" id="foryou-tab" data-tabs-target="#foryou" type="button" role="tab" aria-controls="foryou" aria-selected="false">For You</button>
                </li>
                <li class="mr-2" role="presentation">
                    <button class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="false">Computer Science</button>
                </li>
                <li class="mr-2" role="presentation">
                    <button class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="data-tab" data-tabs-target="#data" type="button" role="tab" aria-controls="data" aria-selected="false">Data</button>
                </li>
                <li role="presentation">
                    <button class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="contacts-tab" data-tabs-target="#contacts" type="button" role="tab" aria-controls="contacts" aria-selected="false">{{$name}}</button>
                </li>
            </ul>
        </div>
        <div id="myTabContent">
            {{-- for you tab start --}}
            <div class="hidden p-2 rounded-lg bg-gray-50 dark:bg-gray-800" id="foryou" role="tabpanel" aria-labelledby="foryou-tab">
                @if(count($articles)!=0)
                @foreach ($articles as $data)
                <div class="bg-white col-span-6 mb-3 rounded-l-lg shadow-xl overflow-hidden">
                    <div class="h-28 sm:h-32 md:h-36 lg:h-40 xl:h-40 xxl:h-44 flex flex-row rounded-lg">
                    <div class="basis-4/12 "><img
                        src="{{asset('images/'.$data->image)}}"
                        alt="image"
                        class="h-full w-full object-cover rounded-l-lg"/>
                    </div>
                    <div class="basis-7/12 pl-3">
                        <div class="">
                            <h6 class="my-2 text-xs font-semibold uppercase antialiased">
                               <span class="border rounded-md bg-slate-200 text-xs">{{$data->category}}</span>
                            </h6>
                            <h4 class="mb-2 block font-sans text-sm sm:text-md md:text-lg lg:text-lg font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased">
                                <a href="{{route('article.show',$data['id'])}}">{{$data->title}}</a>
                            </h4>
                            <p class="mb-1 font-sans font-sm leading-4 text-gray-700 antialiased hidden sm:hidden md:block" >
                                {{Str::words($data->article_text, 12, '...')}}
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
                    <div class="basis-1/12 pl-5">
                    <div class="flex flex-col h-28 sm:h-32 md:h-36 lg:h-40 xl:h-40 xxl:h-44 justify-between py-3">
                        <i class="fa-solid fa-ellipsis-vertical text-sm sm:text-md lg:text-lg pl-5"
                            data-dropdown-toggle="dropdown"
                        ></i>
                        <form action="{{route('article.destroy',$data->id)}}" method="post">
                            @csrf
                            {{ method_field('DELETE')}}
                            <button type="submit"><i class="fa-solid fa-trash text-sm sm:text-md lg:text-lg pl-4"></i></button>
                        </form>
                        <a href="{{route('article.edit',$data->id)}}"><i class="fa-solid fa-pen-to-square text-sm sm:text-md lg:text-lg pl-4"></i></a>
                        <a href="{{route('article#favorite',$data->id)}}"><i class="fa-solid fa-bookmark text-sm sm:text-md lg:text-lg pl-4">
                        </i></a>
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

                    </div>
                    </div>
                </div></div>
                @endforeach
                @else
                <div class="flex flex-row justify-center">
                    <span class="text-base font-medium">The keyword you search does not found. &nbsp</span>
                    <span class="underline text-blue-600"><a href="{{route('articles#index')}}">See All Posts</a></span>
                </div>
                @endif
                {{$articles->appends(request()->query())->links()}}
            </div>
            {{-- for you tab end --}}

            {{-- computer science tab start --}}
            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
              @foreach ($articles as $data)
              @if ($data->category == "Computer Science")
              <div class="bg-white col-span-6 mb-3 rounded-l-lg shadow-xl overflow-hidden">
                  <div class="h-28 sm:h-32 md:h-36 lg:h-40 xl:h-40 xxl:h-44 flex flex-row rounded-lg">
                  <div class="basis-4/12 "><img
                      src="{{asset('images/'.$data->image)}}"
                      alt="image"
                      class="h-full w-full object-cover rounded-l-lg"/>
                  </div>
                  <div class="basis-7/12 pl-3">
                      <div class="">
                          <h6 class="my-2 text-xs font-semibold uppercase antialiased">
                             <span class="border rounded-md bg-slate-200 text-xs">{{$data->category}}</span>
                          </h6>
                          <h4 class="mb-2 block font-sans text-sm sm:text-md md:text-lg lg:text-lg font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased">
                              <a href="{{route('article.show',$data['id'])}}">{{$data->title}}</a>
                          </h4>
                          <p class="mb-1 font-sans font-sm leading-4 text-gray-700 antialiased hidden sm:hidden md:block" >
                              {{Str::words($data->article_text, 12, '...')}}
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
                  <div class="basis-1/12 pl-5">
                  <div class="flex flex-col h-28 sm:h-32 md:h-36 lg:h-40 xl:h-40 xxl:h-44 justify-between py-3">
                      <i class="fa-solid fa-ellipsis-vertical text-sm sm:text-md lg:text-lg pl-5"
                          data-dropdown-toggle="dropdown"
                      ></i>
                      <form action="{{route('article.destroy',$data->id)}}" method="post">
                          @csrf
                          {{ method_field('DELETE')}}
                          <button type="submit"><i class="fa-solid fa-trash text-sm sm:text-md lg:text-lg pl-4"></i></button>
                      </form>
                      <a href="{{route('article.edit',$data->id)}}"><i class="fa-solid fa-pen-to-square text-sm sm:text-md lg:text-lg pl-4"></i></a>
                      <i class="fa-solid fa-bookmark text-sm sm:text-md lg:text-lg pl-4">
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

                  </div>
                  </div>
              </div></div>
              @else
no post
              @endif
          @endforeach
          {{$articles->appends(request()->query())->links()}}
            </div>
            {{-- computer science tab end --}}

            {{-- data tab start --}}
            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="data" role="tabpanel" aria-labelledby="data-tab">
                <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Data tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
                @foreach ($articles as $data)
                    @if ($data->category == "data")
                    <div class="bg-white col-span-6 mb-3 rounded-l-lg shadow-xl overflow-hidden">
                        <div class="h-28 sm:h-32 md:h-36 lg:h-40 xl:h-40 xxl:h-44 flex flex-row rounded-lg">
                        <div class="basis-4/12 "><img
                            src="{{asset('images/'.$data->image)}}"
                            alt="image"
                            class="h-full w-full object-cover rounded-l-lg"/>
                        </div>
                        <div class="basis-7/12 pl-3">
                            <div class="">
                                <h6 class="my-2 text-xs font-semibold uppercase antialiased">
                                   <span class="border rounded-md bg-slate-200 text-xs">{{$data->category}}hh</span>
                                </h6>
                                <h4 class="mb-2 block font-sans text-sm sm:text-md md:text-lg lg:text-lg font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased">
                                    <a href="{{route('article.show',$data['id'])}}">{{$data->title}}</a>
                                </h4>
                                <p class="mb-1 font-sans font-sm leading-4 text-gray-700 antialiased hidden sm:hidden md:block" >
                                    {{Str::words($data->article_text, 12, '...')}}
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
                        <div class="basis-1/12 pl-5">
                        <div class="flex flex-col h-28 sm:h-32 md:h-36 lg:h-40 xl:h-40 xxl:h-44 justify-between py-3">
                            <i class="fa-solid fa-ellipsis-vertical text-sm sm:text-md lg:text-lg pl-5"
                                data-dropdown-toggle="dropdown"
                            ></i>
                            <form action="{{route('article.destroy',$data->id)}}" method="post">
                                @csrf
                                {{ method_field('DELETE')}}
                                <button type="submit"><i class="fa-solid fa-trash text-sm sm:text-md lg:text-lg pl-4"></i></button>
                            </form>
                            <a href="{{route('article.edit',$data->id)}}"><i class="fa-solid fa-pen-to-square text-sm sm:text-md lg:text-lg pl-4"></i></a>
                            <i class="fa-solid fa-bookmark text-sm sm:text-md lg:text-lg pl-4">
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

                        </div>
                        </div>
                    </div></div>
                    @else
no post
                    @endif
                @endforeach
                {{$articles->appends(request()->query())->links()}}
            </div>
             {{-- data tab end --}}

             {{-- business tab start --}}
            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="contacts" role="tabpanel" aria-labelledby="contacts-tab">
                <p class="text-sm text-gray-500 dark:text-gray-400"> <strong class="font-medium text-gray-800 dark:text-white">Contacts tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
                @foreach ($articles as $data)
                @if ($data->category == "business")
                <div class="bg-white col-span-6 mb-3 rounded-l-lg shadow-xl overflow-hidden">
                    <div class="h-28 sm:h-32 md:h-36 lg:h-40 xl:h-40 xxl:h-44 flex flex-row rounded-lg">
                    <div class="basis-4/12 "><img
                        src="{{asset('images/'.$data->image)}}"
                        alt="image"
                        class="h-full w-full object-cover rounded-l-lg"/>
                    </div>
                    <div class="basis-7/12 pl-3">
                        <div class="">
                            <h6 class="my-2 text-xs font-semibold uppercase antialiased">
                               <span class="border rounded-md bg-slate-200 text-xs">{{$data->category}}hh</span>
                            </h6>
                            <h4 class="mb-2 block font-sans text-sm sm:text-md md:text-lg lg:text-lg font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased">
                                <a href="{{route('article.show',$data['id'])}}">{{$data->title}}</a>
                            </h4>
                            <p class="mb-1 font-sans font-sm leading-4 text-gray-700 antialiased hidden sm:hidden md:block" >
                                {{Str::words($data->article_text, 12, '...')}}
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
                    <div class="basis-1/12 pl-5">
                    <div class="flex flex-col h-28 sm:h-32 md:h-36 lg:h-40 xl:h-40 xxl:h-44 justify-between py-3">
                        <i class="fa-solid fa-ellipsis-vertical text-sm sm:text-md lg:text-lg pl-5"
                            data-dropdown-toggle="dropdown"
                        ></i>
                        <form action="{{route('article.destroy',$data->id)}}" method="post">
                            @csrf
                            {{ method_field('DELETE')}}
                            <button type="submit"><i class="fa-solid fa-trash text-sm sm:text-md lg:text-lg pl-4"></i></button>
                        </form>
                        <a href="{{route('article.edit',$data->id)}}"><i class="fa-solid fa-pen-to-square text-sm sm:text-md lg:text-lg pl-4"></i></a>
                        <i class="fa-solid fa-bookmark text-sm sm:text-md lg:text-lg pl-4">
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

                    </div>
                    </div>
                </div></div>
                @else
no post
                @endif
            @endforeach
            {{$articles->appends(request()->query())->links()}}
              </div>
            {{-- business tab end --}}
        </div>
        {{-- tab end --}}
    </div>
</div>
@endsection
