@extends('Layouts.main')
@section('content')
{{-- place for navigation --}}
<div class="nav bg-slate-700 h-16">

</div>

<div class="grid grid-cols-9">
    {{-- first part of gird --}}
    <form action="{{route('article.store')}}" method="POST" class="col-span-6 col-start-2"  enctype="multipart/form-data">
            @csrf
        {{-- some text --}}
        <div class="col-span-7 col-start-2 my-3">
            <span class="text-2xl font-semibold border-b py-2 bg-clip-text text-transparent bg-gradient-to-b from-purple-500 to-pink-500">
                Create Your Amazing Content Here
            </span>
        </div>

        {{-- select category --}}
        <div class="col-span-7 col-start-2 my-3">
        <label for="countries" class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Select a Category</label>
        @error('category')
                    <small class="text-red-700 text-sm">{{$message}}</small>
        @enderror
        <select id="countries" name="category" value="{{old('category')}}"class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option></option>
                @foreach ($categories as $one)
                <option value="{{$one['name']}}">{{$one['name']}}</option>
            @endforeach
        </select>
        </div>


        {{-- insert image--}}
        <div class="col-span-7 col-start-2 my-2">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload file</label>
            @error('image')
                    <small class="text-red-700 text-sm">{{$message}}</small>
                @enderror
            <input name="image" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">
        </div>

        {{-- title --}}
        <div class="col-span-7 col-start-2 my-2">
            <div class="">
                <label for="default-input" class="block text-base font-medium text-gray-900 dark:text-white">Title</label>
                @error('title')
                    <small class="text-red-700 text-sm">{{$message}}</small>
                @enderror
                <input type="text" name="title" value="{{old('title')}}"id="default-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
        </div>

        {{-- description --}}
        <div class="col-span-7 col-start-2 my-3">
            <label for="message" class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Description</label>
            @error('description')
                    <small class="text-red-700 text-sm">{{$message}}</small>
                @enderror
            <textarea id="message" name="description" value=""rows="18" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your thoughts here...">
                {{old('description')}}
            </textarea>
        </div>

        {{-- author --}}
        <div class="col-span-7 col-start-2 my-3">
            <div class="">
                <label for="default-input" class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Author</label>
                @error('author')
                    <small class="text-red-700 text-sm">{{$message}}</small>
                @enderror
                <input type="text" name="author" value="{{old('author')}}" id="default-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
        </div>

        {{-- button --}}
        <div class="col-span-5 col-start-8 my-3">
            <button type="submit"  class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-base px-12 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Submit</button>
        </div>
        <div class=" col-start-8 my-3">
            <button type="button" data-modal-target="defaultModal" data-modal-toggle="defaultModal" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-base px-12 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Preview</button>
        </div>

    </form>

    {{-- second part of grid start --}}
        <div class="">
            <div class=" rounded-md m-3">
                <div class="">
                    <a href="{{route('category.show')}}">Testing</a>
                </div>
            </div>
        </div>
    {{-- second part of grid end --}}
    {{-- modal content start --}}
    <!-- Modal toggle -->
  <!-- Main modal -->
  <div id="defaultModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
      <div class="relative w-full max-w-2xl max-h-full">
          <!-- Modal content -->
          <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
              <!-- Modal header -->
              <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                  <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                      Preview
                  </h3>
                  <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="defaultModal">
                      <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                      <span class="sr-only">Close modal</span>
                  </button>
              </div>
              {{-- Modal header end --}}

              <!-- Modal body -->
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
            </div>
              {{-- Modal body end --}}
              <!-- Modal footer -->
              <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                  <button data-modal-hide="defaultModal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">I accept</button>
                  <button data-modal-hide="defaultModal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Decline</button>
              </div>
          </div>
      </div>
  </div>
    {{-- modal content end --}}
</div>
@endsection
