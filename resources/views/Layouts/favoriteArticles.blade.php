@extends('Layouts.main')
@section('content')
{{-- place for navigation --}}
<div class="nav bg-slate-700 h-16"></div>

{{-- testing place --}}
@foreach ($data as $item)
    {{$item->article_id}}
@endforeach


{{-- place for main content --}}
<div class="grid grid-rows-4 grid-cols-9">
    {{-- first grid start --}}
        <div class="col-span-3 p-3">
            {{-- flex 1 --}}
            <div class="flex flex-row justify-between">
                <span class="font-bold text-2xl">Saved</span>
                <a href=""><i class="fa-solid fa-gear font-bold text-xl border px-3 py-1 bg-slate-100 rounded-md hover:bg-indigo-200"></i></a>
            </div>
            {{-- flex 2 --}}
            <div class="flex flex-row my-2 px-3  bg-slate-300 border rounded-lg p-1">
                <span class="font-semibold text-lg"><i class="fa-solid fa-floppy-disk mr-3 border rounded-full bg-indigo-400 p-3"></i>All Saved Articles</span>
            </div>
            <hr class="">
            <span class="text-lg font-semibold">My Collections</span>
            {{-- flex 3 --}}
            <div class="flex flex-row my-2 px-3 rounded-md p-1  hover:bg-indigo-200">
                <span class="font-semibold text-base"><i class="fa-solid fa-plus mr-5 border rounded-full p-2 bg-slate-50"></i>IT</span>
            </div>
            {{-- flex 4 --}}
            <div class="flex flex-row my-2 px-3 rounded-md p-1  hover:bg-indigo-200">
                <span class="font-semibold text-base"><i class="fa-solid fa-plus mr-5 border rounded-full p-2 bg-slate-50"></i>Beauty</span>
            </div>
            {{-- flex 5 --}}
            <div class="flex flex-row my-2 px-3 rounded-md p-1  hover:bg-indigo-200">
                <span class="font-semibold text-base"><i class="fa-solid fa-plus mr-5 border rounded-full p-2 bg-slate-50"></i>World History</span>
            </div>
            {{-- flex 6 --}}
            <div class="flex flex-row my-2 px-3 rounded-md p-1  hover:bg-indigo-200">
                <span class="font-semibold text-base"><i class="fa-solid fa-plus mr-5 border rounded-full p-2 bg-slate-50"></i>Quotes</span>
            </div>
        </div>
    {{-- first grid end --}}

    {{-- second grid start --}}
        <div class="col-span-6 p-2 bg-slate-100">
            <div class="flex flex-row justify-between p-3">
                <span class="font-bold text-lg">All</span>
                <a href=""><i class="fa-solid fa-sliders font-bold text-lg border rounded-md px-3 py-1 bg-slate-100 hover:bg-indigo-200"></i></a>
            </div>
            @foreach ($articles as $favs)
            @if ($favs->id == 2)

            {{$favs->id}}
            <div class="bg-white col-span-6 mb-3 rounded-l-lg shadow-xl overflow-hidden">
                <div class="h-28 sm:h-32 md:h-36 lg:h-40 xl:h-40 xxl:h-44 flex flex-row rounded-lg">
                <div class="basis-4/12 "><img
                    src="{{asset('images/'.$favs->image)}}"
                    alt="image"
                    class="h-full w-full object-cover rounded-l-lg"/>
                </div>
                <div class="basis-7/12 pl-3">
                    <div class="">
                        <h6 class="my-2 text-xs font-semibold uppercase antialiased">
                           <span class="border rounded-md bg-slate-200 text-xs">{{$favs->category}}
                           </span>
                        </h6>
                        <h4 class="mb-2 block font-sans text-sm sm:text-md md:text-lg lg:text-lg font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased">
                            <a href="">{{$favs->title}}</a>
                        </h4>
                        <p class="mb-1 font-sans font-sm leading-4 text-gray-700 antialiased hidden sm:hidden md:block" >
                            {{Str::words($favs->article_text, 12, '...')}}
                        <a href=""><span class=" font-sans text-xs font-bold uppercase text-pink-500">Read More <i class="fa-solid fa-arrow-right"></i></span></a>
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
                <div class="basis-1/12 pl-5">
                <div class="flex flex-col h-28 sm:h-32 md:h-36 lg:h-40 xl:h-40 xxl:h-44 justify-between py-3">
                    <i class="fa-solid fa-ellipsis-vertical text-sm sm:text-md lg:text-lg pl-5"
                        data-dropdown-toggle="dropdown"
                    ></i>
                    {{-- <form action="{{route('article.destroy',$data->id)}}" method="post">
                        @csrf
                        {{ method_field('DELETE')}}
                        <button type="submit"><i class="fa-solid fa-trash text-sm sm:text-md lg:text-lg pl-4"></i></button>
                    </form> --}}
                    <a href=""><i class="fa-solid fa-pen-to-square text-sm sm:text-md lg:text-lg pl-4"></i></a>
                    <a href=""><i class="fa-solid fa-bookmark text-sm sm:text-md lg:text-lg pl-4">
                    </i></a>
                    {{-- drop down for three dots icon --}}
                    <!-- Dropdown menu -->
                    <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                 Dashboard</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                Delete</a>
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
            @endif
            @endforeach
        </div>
    {{-- second grid end --}}
</div>
{{-- place for main content end --}}
@endsection
