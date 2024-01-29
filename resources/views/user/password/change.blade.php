@extends('Layouts.main')

@section('content')
    <section class="bg-slate-400">

        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0 w-full">
            <div class="">
                <a href="{{ route('dashboard') }}"> <button type="submit"
                        class="  text-white bg-green-400 hover:bg-green-300 hover:text-slate-500   rounded-lg mb-5 mr-80 text-sm px-5 py-2.5 font-semibold ">
                        <i class="fa-solid fa-arrow-left"></i> Back</button>
                </a>
            </div>

            <div
                class="w-full p-6 bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md dark:bg-gray-800 dark:border-gray-700 sm:p-8">
                <h1 class=" mb-1 text-xl text-center font-bold leading-tight tracking-tight text-gray-900 md:text-2xl">
                    Change Password
                </h1>

                @if (session('changeSuccess'))
                    <div class="p-4 mb-4 text-sm text-green-900 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
                        role="alert">
                        <span class="font-medium">{{ session('changeSuccess') }}</span>
                    </div>
                @endif

                @if (session('notMatch'))
                    <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
                        role="alert">
                        <span class="font-medium">{{ session('notMatch') }}</span>
                    </div>
                @endif

                <form class="mt-4 space-y-4 lg:mt-5 md:space-y-5" action="{{ route('user#changePassword') }}"
                    method="post">
                    @csrf
                    <div>
                        <label for="oldPassword" class="font-bold  block mb-2 text-sm  text-gray-900"> Current
                            Password</label>
                        <input type="password" name="oldPassword"
                            class="@error('oldPassword') is-invalid @enderror border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Enter Old Password ...">
                        @error('oldPassword')
                            <div class="text-red-600">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div>
                        <label for="newPassword" class="font-bold  block mb-2 text-sm  text-gray-900">New
                            Password</label>
                        <input type="password" name="newPassword"
                            class="@error('newPassword') @enderror border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:focus:ring-blue-6 dark:focus:border-blue-500"
                            placeholder="Enter New Password ...">
                        @error('newPassword')
                            <div class="text-red-600">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div>
                        <label for="confirmNewPassword" class="font-bold  block mb-2 text-sm  text-gray-900">Confirm New
                            password</label>
                        <input type="password" name="confirmNewPassword"
                            class="@error('confirmNewPassword') @enderror border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Enter Confirm New Password ...">
                        @error('confirmNewPassword')
                            <div class="text-red-600">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <button type="submit"
                        class=" w-full text-white bg-green-400 hover:bg-green-300 hover:text-slate-500 focus:ring-4 focus:outline-none   rounded-lg text-sm px-5 py-2.5 text-center font-semibold ">
                        <i class="fa-solid fa-key"></i> Change Password</button>
                </form>
            </div>
        </div>
    </section>
@endsection
