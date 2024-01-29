@extends('Layouts.main')
@section('content')
{{-- place for navigation --}}
<div class="nav bg-slate-700 h-16"></div>


<div class="grid grid-cols-1 grid-rows-1">
    <div class="">
        <div class="flex">
            <div class="h-72 w-screen flex flex-row rounded-lg">
                <img src="{{asset('images/'.$data->image)}}" class="h-full w-full object-cover object-right-center relative"/>
                <div class="absolute w-screen">
                    <div class="grid grid-rows-1 grid-cols-2">
                    <div class=""><a href="{{route('articles#index')}}"><i class="fa-solid fa-chevron-left  text-white text-5xl  p-4 pl-10"></i></a></div>
                    <div class="justify-self-end"><i class="fa-solid  fa-ellipsis-vertical  text-white text-5xl p-4 pe-10"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="grid md:grid-cols-3 lg:grid-cols-5 xl:grid-cols-5 xxl:grid-cols-5 rounded-lg">
    <div class="sm:col-span-5 md:col-span-5 lg:col-span-3 xl:col-span-3 xxl:col-span-3 pl-7 border rounded-lg m-4">
        <div class="font-sans text-4xl font-bold mb-4">{{$data->title}}</div>
        <div class="relative flex w-full max-w-[26rem] flex-col rounded-xl bg-transparent bg-clip-border text-gray-700 shadow-none">
            <div class="relative mx-0 mt-4 flex items-center gap-4 overflow-hidden rounded-xl bg-transparent bg-clip-border pt-0 pb-8 text-gray-700 shadow-none">
              <img
                src="https://images.unsplash.com/photo-1633332755192-727a05c4013d?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=1480&amp;q=80"
                alt="candice wu"
                class="relative inline-block h-[75px] w-[75px] !rounded-full object-cover object-center"
              />
              <div class="flex w-full flex-col gap-0.5">
                <div class="flex items-center justify-between">
                  <h5 class="block font-sans text-xl font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased">
                    <a href="">{{$data->author}}</a>
                  </h5>
                </div>
                <p class="block font-sans text-base font-light leading-relaxed text-blue-gray-900 antialiased">
                  Frontend Lead @ Google
                </p>
              </div>
            </div>
          </div>
          <div class="">
            <p>{{$data->article_text}}</p>
          </div>
          <div class="m-7 bg-zinc-50 rounded-lg shadow">
            <div class="grid grid-cols-4 grid-rows-2 gap-4 place-items-center h-20 p-2 rounded-lg shadow bg-zinc-100">
                <div><i class="fa-regular fa-thumbs-up text-2xl"></i></div>
                <div><i class="fa-regular fa-comment text-2xl"></i></div>
                <div><i class="fa-regular fa-bookmark  text-2xl"></i></div>
                <div><i class="fa-solid fa-share-from-square text-2xl"></i></div>
                <div class=""><span class="text-sm">125 Like</span></div>
                <div class=""><span class="text-sm">33 Comments</span></div>
                <div class=""><span class="text-sm">Add to your list</span></div>
                <div class=""><span class="text-sm">Share</span></div>
            </div>
          </div>
    </div>
    {{-- side column --}}
    <div class="sm:col-span-5 md:col-span-5 lg:col-span-2 xl:col-span-2 xxl:col-span-2 bg-red- mt-3 ml-2 ">
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
            {{-- popular post part --}}
            <span class="text-xl font-bold font-sans my-2">POPULAR POSTS</span>
            <div class="grid grid-rows-1">
                @for ($i=0;$i<2;$i++)
                <div class="bg-white mb-3 shadow-xl col-span-4 sm:col-span-3 lg:col-span-3 xl:col-span-2 xxl:col-span-2  overflow-hidden">
                    <div class="h-36 flex flex-row rounded-lg">
                    <div class="basis-4/12 "><img
                        src="{{asset('img/matsuriBG.jpg')}}"
                        alt="image"
                        class="h-full w-full object-cover"/>
                    </div>
                    <div class="basis-7/12 pl-3">

                        <div class="">
                            <h6 class="my-2 text-xs font-semibold uppercase antialiased">
                               <span class="border rounded-lg bg-slate-200 text-muted">startups</span>
                            </h6>
                            <h4 class="mb-2 block font-sans text-lg font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased">
                                <a href="">How to Be a Person who is always happy</a>
                            </h4>
                            <p class="mb-1 font-sans font-sm leading-4 text-gray-700 antialiased hidden sm:hidden md:block" >
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto sit voluptatem odio.
                            <a href="{{route('article#readmore')}}"><span class=" font-sans text-xs font-bold uppercase text-pink-500">Read More <i class="fa-solid fa-arrow-right"></i></span></a>
                            </p>
                        </div>
                    </div>
                    <div class="basis-1/12">
                    <div class="flex flex-col h-36 justify-between py-3">
                        <i class="fa-solid fa-ellipsis-vertical text-sm sm:text-lg lg:text-xl pl-5"></i>
                        <i class="fa-solid fa-bookmark text-sm sm:text-lg lg:text-xl  pl-4"></i>
                    </div>
                    </div></div>
                </div>
                @endfor
            </div>
            {{-- popular post part end --}}
            {{-- latest --}}
            <span class="text-xl font-bold font-sans my-2">Latest</span>
            <div class="grid grid-rows-1">
                @for ($i=0;$i<2;$i++)
                <div class="bg-white mb-3 shadow-xl col-span-3 sm:col-span-3 lg:col-span-3 xl:col-span-2 xxl:col-span-2  overflow-hidden"><div class="h-36 flex flex-row rounded-lg">
                    <div class="basis-4/12 "><img
                        src="{{asset('img/matsuriBG.jpg')}}"
                        alt="image"
                        class="h-full w-full object-cover"/>
                    </div>
                    <div class="basis-7/12 pl-3">

                        <div class="">
                            <h6 class="my-2 text-xs font-semibold uppercase antialiased">
                               <span class="border rounded-lg bg-slate-200 text-muted">startups</span>
                            </h6>
                            <h4 class="mb-2 block font-sans text-lg font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased">
                                <a href="">How to Be a Person who is always happy</a>
                            </h4>
                            <p class="mb-1 font-sans font-sm leading-4 text-gray-700 antialiased hidden sm:hidden md:block" >
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto sit voluptatem odio.
                            <a href="{{route('article#readmore')}}"><span class=" font-sans text-xs font-bold uppercase text-pink-500">Read More <i class="fa-solid fa-arrow-right"></i></span></a>
                            </p>
                        </div>
                    </div>
                    <div class="basis-1/12">
                    <div class="flex flex-col h-36 justify-between py-3">
                        <i class="fa-solid fa-ellipsis-vertical text-sm sm:text-lg lg:text-xl pl-5"></i>
                        <i class="fa-solid fa-bookmark text-sm sm:text-lg lg:text-xl  pl-4"></i>
                    </div>
                    </div></div>
                </div>
                @endfor
            </div>
            {{-- latest end --}}
        </div>
    </div>
</div>
</div>

@endsection
