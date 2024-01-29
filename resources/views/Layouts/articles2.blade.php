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
                <div class="grid grid-cols-9 grid-rows-5  mb-6 ">

                    {{-- first column  --}}
                    <div class="col-span-9 sm:col-span-9 md:col-span-9 lg:col-span-9 xl:col-span-5 xxl:col-span-6 mr-3">
                        <ul class="">
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
                            @endforeach
                        </ul>
                    </div>

                    {{-- second column --}}
                    <div class="col-span-9 sm:col-span-9 md:col-span-9 lg:col-span-9 xl:col-span-4 xxl:col-span-3 mr-4">
                        <div class="bg-red- mt-3">
                            <div class="grid grid-cols-1 grid-rows-{{1}} grid-flow-row place-items-start space-y-2">
                                <div class="text-2xl font-sans font-semibold ">Top Picks For You</div>
                                <div class="grid grid-cols-1 place-items-center">
                                    @for ($i=0;$i<2;$i++)
                                    <div class="relative flex w-96 flex-col mb-2 bg-white bg-clip-border text-gray-700 shadow-md">
                                        <div class="p-6">
                                            <h5 class="mb-2 block font-sans text-xl font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased">
                                                 UI/UX Review Check
                                            </h5>
                                            <p class="block font-sans text-base font-light leading-relaxed text-inherit antialiased">
                                            The place is close to Barceloneta Beach and bus stop just 2 min by walk
                                             and near to "Naviglio" where you can enjoy the main night life in
                                            Barcelona.
                                            </p>
                                        </div>
                                    </div>
                                    @endfor
                                </div>

                            </div>

                        </div>
                    </div>
                    {{-- second column end --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
