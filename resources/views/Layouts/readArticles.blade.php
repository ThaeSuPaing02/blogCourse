@extends('Layouts.main')
@section('content')
{{-- place for navigation --}}
<div class="nav bg-slate-700 h-16"></div>


<div class="grid grid-cols-1 grid-rows-1">
    <div class="">
        <div class="flex">
            <div class="h-72 w-screen flex flex-row rounded-lg">
                <img src="{{asset('img/matsuriBG.jpg')}}" class="h-full w-full object-cover object-right-center relative"/>
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
        <div class="font-sans text-4xl font-bold mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam accusamus distinctio soluta.</div>
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
                    <a href="">Candice Wu</a>
                  </h5>
                </div>
                <p class="block font-sans text-base font-light leading-relaxed text-blue-gray-900 antialiased">
                  Frontend Lead @ Google
                </p>
              </div>
            </div>
          </div>
          <div class="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod exercitationem sed aliquid odio cum! Deserunt, hic quia. Nulla quas odit possimus, officia fugiat aspernatur perferendis laudantium magni harum, repudiandae dolorum aut? Totam non pariatur repellat optio sequi architecto cum doloribus sit. Molestiae animi cumque corporis temporibus mollitia fuga est culpa officiis architecto blanditiis porro inventore quisquam necessitatibus magnam, illum natus nobis provident accusamus tenetur ex. Perferendis quas ad animi tempora omnis eligendi, libero dolorem, veritatis et facilis enim incidunt dignissimos ratione cumque? Ratione corporis libero vitae, accusantium ea doloremque et officia earum soluta tenetur alias quis beatae dolorem sed a aut placeat odio ut, debitis eum voluptate distinctio consectetur nemo atque! Veniam quis aperiam recusandae, suscipit quo laudantium voluptas eum fugit delectus explicabo natus hic culpa debitis quibusdam! Qui veritatis exercitationem omnis labore corporis. Quibusdam quam unde, earum facilis nisi iste corporis voluptatibus rerum cumque aut vitae temporibus consectetur deleniti amet ducimus possimus necessitatibus aspernatur molestias ullam qui soluta provident, totam commodi ex? Necessitatibus beatae ex impedit quasi atque mollitia veritatis laborum quae? Debitis culpa sunt necessitatibus cum cupiditate libero, ipsum quod, quos aliquam reiciendis nemo blanditiis a nihil velit aut distinctio. Laudantium magni dolores ea. Quo harum voluptate enim, ad perferendis excepturi fuga aspernatur, natus error voluptas unde, deleniti vitae! Consectetur esse asperiores totam laudantium, omnis rem quasi aperiam nesciunt ab nisi officia ex exercitationem iure nulla maiores consequatur nemo. Asperiores amet vitae corporis expedita, fuga numquam quidem nobis quas fugiat maiores similique deleniti quam doloremque exercitationem saepe odio culpa quaerat aliquid. Nobis, provident. Assumenda officiis dignissimos temporibus vitae possimus cum nam sit voluptas sapiente consectetur maiores laboriosam odio quia vel distinctio facere velit corporis, laudantium, deserunt voluptatibus natus eligendi et quae! Omnis voluptas illum officia, quis iure error voluptatibus, aliquid excepturi maxime consectetur ullam est! At sapiente quaerat ex in, voluptate, placeat possimus dicta cum aut sint exercitationem eos perspiciatis quibusdam veniam dolor mollitia. Ratione, numquam expedita! Reiciendis, eius iste! Dicta doloremque sit, necessitatibus tempora iure expedita hic ipsa in ipsum quod, id cum quidem maiores magnam veniam. Voluptatibus dicta repudiandae rem nulla qui veniam et deserunt. Itaque incidunt pariatur quaerat ipsa harum. Quia animi doloremque dolor quo blanditiis ad hic aliquam. Aliquam similique nemo dolores consectetur obcaecati labore voluptatem, sapiente natus porro repudiandae dignissimos, corrupti hic iure alias suscipit molestiae rem debitis? Aspernatur facilis, dicta expedita, officia omnis exercitationem eligendi quidem aperiam quisquam dolor, mollitia consequuntur perferendis obcaecati blanditiis dolores perspiciatis iusto veniam? Rem placeat deleniti laborum, labore ducimus esse molestiae dolor mollitia tenetur odit iusto recusandae sunt debitis ut doloremque corporis, qui modi aliquid ea? Atque voluptatum commodi iure earum, sint dignissimos quisquam harum obcaecati. Optio dicta, fugit enim molestiae totam, reiciendis quasi nihil voluptatem labore aspernatur molestias quidem cupiditate at sequi, dolorum error quisquam quibusdam voluptate? Similique quidem sint molestiae laborum suscipit assumenda temporibus necessitatibus accusantium magni esse deleniti, alias deserunt, hic eius. Maiores voluptatibus ea eveniet, maxime, ab deleniti perspiciatis consectetur omnis, id cumque et dolorem? Dicta perspiciatis consequuntur libero molestiae! Laboriosam, sunt voluptates?</p>
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
                        src="{{asset('images/'.$data->image)}}"
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
