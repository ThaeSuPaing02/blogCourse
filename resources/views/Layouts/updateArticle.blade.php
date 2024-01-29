@extends('Layouts.main')
@section('content')
{{-- place for navigation --}}
<div class="nav bg-slate-700 h-16">

</div>

    <div class="grid grid-cols-9">
        <form action="{{route('article.updateArticle',$data['id'])}}" method="post"  class="col-span-6 col-start-2">
            @csrf

        {{-- some text --}}
        <div class="col-span-7 col-start-2 my-3">
            <span class="text-2xl font-semibold border-b py-2 bg-clip-text text-transparent bg-gradient-to-b from-purple-500 to-pink-500">
                Update Your Post Here
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
                    <option value="{{$one['category']}}">{{$one['category']}}</option>
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
                <input type="text" name="title" value="{{$data['title']}}" id="default-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
        </div>

        {{-- description --}}
        <div class="col-span-7 col-start-2 my-3">
            <label for="message" class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Description</label>
            @error('description')
                    <small class="text-red-700 text-sm">{{$message}}</small>
                @enderror
            <textarea id="message" name="description" value="" rows="18" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your thoughts here...">
                {{$data['article_text']}}
            </textarea>
        </div>

        {{-- author --}}
        <div class="col-span-7 col-start-2 my-3">
            <div class="">
                <label for="default-input" class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Author</label>
                @error('author')
                    <small class="text-red-700 text-sm">{{$message}}</small>
                @enderror
                <input type="text" name="author" value="{{$data['author']}}" id="default-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
        </div>

        {{-- button --}}
        <div class="col-span-7 col-start-8 my-3">
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-base px-12 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Preview</button>
        </div>
    </form>
    </div>
@endsection
