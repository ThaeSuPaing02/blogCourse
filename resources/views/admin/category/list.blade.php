@extends('dashboard')

@section('content')
    <div class="m-10">
        <a href="{{ route('category#createPage') }}">
            <button class="border rounded-lg bg-green-400 border-cyan-500 p-3 hover:bg-green-500 hover:text-white"> <i
                    class="fa-solid fa-circle-plus"></i>
                Create Your Category</button>
        </a>

    </div>

    <form class="m-6" action="{{ route('category#list') }}" method="get">
        @csrf
        <label class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
        <div class="relative">
            <input type="search" name="key"
                class=" w-96  p-2  text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-green-500 focus:border-green-500 dark:bg-green-700 dark:border-green-600 dark:placeholder-green-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500"
                placeholder="Search Your Category..." value="{{ request('key') }}">
            <button type="submit"
                class="text-white bg-green-400 hover:bg-green-500 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 hover:text-gray-900">Search</button>
        </div>
    </form>

    @if (session('categorySuccess'))
        <div class="p-4 m-4 text-sm w-96 text-slate-900 rounded-lg bg-green-400 dark:bg-gray-800 dark:text-green-400"
            role="alert">
            <span class="font-medium">{{ session('categorySuccess') }}</span>
        </div>
    @endif

    @if (session('categoryDelete'))
        <div class="p-4 m-4 text-sm w-96 text-slate-900 rounded-lg bg-red-400 dark:bg-gray-800 dark:text-green-400"
            role="alert">
            <span class="font-medium">{{ session('categoryDelete') }}</span>
        </div>
    @endif

    @if (session('categoryUpdate'))
        <div class="p-4 m-4 text-sm w-96 text-slate-900 rounded-lg bg-green-400 dark:bg-gray-800 dark:text-green-400"
            role="alert">
            <span class="font-medium">{{ session('categoryUpdate') }}</span>
        </div>
    @endif

    @if (sizeof($categories) > 0)
        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 table-auto">
                <thead class="text-base text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 ">
                    <tr>
                        <th scope="col" class="px-20 py-3">
                            id
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Category Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Created Date
                        </th>
                        <th scope="col" class="px-10  py-3 ">
                            Edit Category
                        </th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 text-base">
                            <td class="px-20 py-4">
                                {{ $category->id }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $category->name }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $category->created_at->format('j-F-Y') }}
                            </td>

                            <td class="px-6 py-4 ">
                                <a href="{{ route('category#edit', $category->id) }}">
                                    <button
                                        class="border bg-gray-900 rounded-lg text-white w-24 hover:bg-green-500 hover:text-gray-900 ">
                                        <i class="fa-solid fa-pen-fancy"></i> </button>
                                </a>
                                <a href="{{ route('category#delete', $category->id) }}">
                                    <button
                                        class="border bg-teal-600  hover:bg-red-500 hover:text-gray-900 rounded-lg text-white w-24 ">
                                        <i class="fa-solid fa-trash-can"></i>
                                    </button>
                                </a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>

            <div class="">
                {{ $categories->links() }}
                {{-- {{ $categories->appends(request()->query())->links() }} --}}
            </div>
        </div>
    @else
        <h2 class="text-xl text-red-500 text-center font-semibold">There is no Categories Here!</h2>
    @endif

@endsection
