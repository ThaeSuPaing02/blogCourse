@extends('dashboard')

@section('content')
    <div class=" ml-20 mt-10 ">
        <a href="{{ route('category#list') }}">
            <button
                class="border hover:bg-green-500 hover:text-slate-900 border-green-400 bg-green-400 text-white font-semibold rounded-md px-3 mb-3 w-32">
                <i class="fa-solid fa-arrow-left"></i> Back</button>
        </a>
    </div>
    {{-- category create card  --}}
    <div class="container flex justify-center">

        <div
            class="w-96 mt-5 max-w-sm p-6 bg-white  border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">

            <h1 class="text-xl text-center font-semibold"> <i class="fa-solid fa-envelope"></i> Edit Your Category Here</h1>
            <hr>
            <form action="{{ route('category#update', $category->id) }}" method="post" class="mt-6">
                @csrf
                <div class="mb-6">

                    <input type="text" name="categoryName" value="{{ old('categoryName', $category->name) }}"
                        class="@error('categoryName') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Enter Your Category">
                    @error('categoryName')
                        <div class="text-red-600">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <button type="submit"
                    class="text-white bg-green-400 hover:bg-green-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <i class="fa-solid fa-circle-plus"></i> Update</button>
            </form>
        </div>
    </div>
@endsection
