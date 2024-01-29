@extends('dashboard')

@section('content')
    {{-- category create card  --}}
    <div class="container   mx-auto  flex justify-center">

        <div
            class="w-full mt-5 max-w-sm p-10 bg-white  border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <h1 class="text-xl text-center font-semibold"> <i class="fa-solid fa-envelope"></i> Update Course Here</h1>
            <hr>
            <form action="" method="post" class="mt-6" enctype="multipart/form-data">
                @csrf
                <div class="mb-6 ">

                    <input type="text" name="courseName"
                        class="mt-4 @error('courseName') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Enter Course Name " value="{{ old('courseName', $course->name) }}">
                    @error('courseName')
                        <div class="text-red-600">
                            {{ $message }}
                        </div>
                    @enderror


                    <select name="courseCategory"
                        class="mt-4 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option value="">Choose Category</option>
                        @foreach ($category as $item)
                            <option value="{{ $item->id }}" @if ($cou->category_id == $item->id) selected @endif>
                                {{ $item->name }}</option>
                        @endforeach

                    </select>


                    <input type="text" name="courseFee"
                        class="mt-4 @error('courseFee') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Enter  Course Fee " value="{{ old('courseFee', $course->fee) }}">
                    @error('courseFee')
                        <div class="text-red-600">
                            {{ $message }}
                        </div>
                    @enderror

                    <input type="text" name="courseDuration"
                        class="mt-4 @error('courseDuration') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Enter  Course Duration " value="{{ old('courseDuration', $course->course_duration) }}">
                    @error('courseDuration')
                        <div class="text-red-600">
                            {{ $message }}
                        </div>
                    @enderror

                    <input type="text" name="coursePeriod"
                        class="mt-4 @error('coursePeriod') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Enter  Course Period  " value="{{ old('coursePeriod', $course->period) }}">
                    @error('coursePeriod')
                        <div class="text-red-600">
                            {{ $message }}
                        </div>
                    @enderror

                    <textarea name="courseDescription" cols="30" rows="10"
                        class="mt-4  text-slate-900 @error('courseDescription') is-invalid @enderror bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Enter Course Description">{{ old('courseDescription', $course->description) }}
                    </textarea>
                    @error('courseDescription')
                        <div class="text-red-600">
                            {{ $message }}
                        </div>
                    @enderror

                    {{-- <input type="text" name="courseDescription"
                        class="@error('courseDescription') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Enter  Course Description ">
                    @error('courseDescription')
                        <div class="text-red-600">
                            {{ $message }}
                        </div>
                    @enderror --}}

                    <input type="text" name="courseInstructor"
                        class="mt-4 @error('courseInstructor') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Enter  Course Instructor " value="{{ old('courseInstructor', $course->instructor) }}">
                    @error('courseInstructor')
                        <div class="text-red-600">
                            {{ $message }}
                        </div>
                    @enderror

                    <input type="text" name="student"
                        class="mt-4 @error('student') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Enter  Student " value="{{ old('student', $course->student) }}">
                    @error('student')
                        <div class="text-red-600">
                            {{ $message }}
                        </div>
                    @enderror

                    <img src="{{ asset('storage/' . $course->image) }}" class="w-28 rounded-lg shadow-lg mt-10" />
                    <input type="file" name="image"
                        class="mt-4 @error('image') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Enter  Course Name ">
                    @error('image')
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
