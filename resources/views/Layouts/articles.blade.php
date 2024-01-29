@extends('Layouts.main')
@section('content')
{{-- place for navigation --}}
<div class="nav bg-slate-700 h-16"></div>

{{-- place for article content --}}
<div class="article ">
    <div class="bg-slate-300">
        <h1>Hi, Good Day!</h1>
        <div class="min-h-screen flex px-1 md:px-2 lg:px-6">
            <div class="flex-1">
                <ul class="grid grid-cols-9  mb-6 ">
                    {{-- first column --}}
                    @foreach ($articles as $data)
                    <li class="bg-white col-span-6 mb-3 rounded-l-lg shadow-xl overflow-hidden"><div class="h-44 flex flex-row rounded-lg">
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
                            <i class="fa-solid fa-ellipsis-vertical text-sm sm:text-lg lg:text-xl pl-5"></i>
                            <i class="fa-solid fa-bookmark text-sm sm:text-lg lg:text-xl  pl-4"></i>
                        </div>
                        </div>
                    </div></li>
                    {{-- second col --}}
                    <h1 class="bg-red-300 col-span-3">hello</h1>
                    {{-- second col end --}}
                    @endforeach
                    {{-- first column end --}}



                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
