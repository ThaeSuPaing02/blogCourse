<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div> --}}

    {{-- <h1 class="font-bold font-mono text-5xl">Home Page</h1>

    <a href="{{ route('user#changePasswordPage') }}">
        <button class="bg-slate-500 hover:bg-slate-700 text-white font-mono font-bold  py-2 px-4 rounded m-6">Change
            Password</button>
    </a> --}}

    <nav class=" border-gray-200 dark:bg-gray-900 bg-white">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="https://flowbite.com/" class="flex items-center">
                {{-- <img src="https://flowbite.com/docs/images/logo.svg" class="h-8 mr-3" alt="" /> --}}
                <i class="fa-solid fa-bug text-4xl me-4"></i>
                <span class="self-center text-3xl font-semibold whitespace-nowrap dark:text-white">Development
                    Team</span>
            </a>
            <div class="flex items-center md:order-2">
                <button type="button"
                    class="border border-green-500 flex mr-3 text-sm bg-white rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                    id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown"
                    data-dropdown-placement="bottom">
                    <span class="sr-only">Open user menu</span>
                    <i class="fa-solid fa-user-secret rounded-full w-14 h-14 text-5xl"></i>
                    {{-- <img class="w-8 h-8 rounded-full" src="/docs/images/people/profile-picture-3.jpg" alt="user photo"> --}}
                </button>
                <!-- Dropdown menu -->
                <div class="border border-green-500 z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600"
                    id="user-dropdown">
                    <div class="px-4 py-3">
                        <span class="block text-lg text-gray-900 dark:text-white font-semibold">Bonnie Green</span>
                        <span
                            class="block text-lg  text-gray-500 truncate dark:text-gray-400 font-semibold">name@flowbite.com</span>
                    </div>
                    <ul class="py-2 " aria-labelledby="user-menu-button">
                        <li>
                            <a href="#"
                                class="font-semibold block px-4 py-2 text- text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
                                <i class="fa-solid fa-user-tie"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"
                                class="font-semibold block px-4 py-2 text- text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
                                <i class="fa-solid fa-key"></i> Change
                                Password</a>
                        </li>
                        <li>
                            <a href="#"
                                class="font-semibold block px-4 py-2 text- text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
                                <i class="fa-solid fa-bars-staggered"></i> Admin
                                List</a>
                        </li>
                        <li>
                            <a href=""
                                class="font-semibold block px-4 py-2 text- text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
                                <i class="fa-solid fa-right-from-bracket"></i> Log
                                Out</a>
                        </li>
                    </ul>
                </div>
                <button data-collapse-toggle="mobile-menu-2" type="button"
                    class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="mobile-menu-2" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="mobile-menu-2">
                <ul
                    class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a href="#"
                            class="text-xl block py-2 pl-3 pr-4 text-white bg-green-500 rounded md:bg-transparent md:text-green-500 md:p-0 md:dark:text-green-500"
                            aria-current="page">User</a>
                    </li>
                    <li>
                        <a href="{{ route('course#list') }}"
                            class="text-xl block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-green-500 md:p-0 dark:text-white md:dark:hover:text-green-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Courses</a>
                    </li>
                    <li>
                        <a href="{{ route('category#list') }}"
                            class="text-xl block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-green-500 md:p-0 dark:text-white md:dark:hover:text-green-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Category</a>
                    </li>
                    <li>
                        <a href="#"
                            class="text-xl block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-green-500 md:p-0 dark:text-white md:dark:hover:text-green-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Article</a>
                    </li>
                    <li>
                        <a href="#"
                            class="text-xl block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-green-500 md:p-0 dark:text-white md:dark:hover:text-green-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Paid
                            Student</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    @yield('content')

</x-app-layout>
