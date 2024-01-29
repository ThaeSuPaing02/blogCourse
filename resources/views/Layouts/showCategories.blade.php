@extends('Layouts.main')
@section('content')
    {{-- select category --}}
    <div class="col-span-7 col-start-2 my-3">
        <label for="countries" class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Select a Category</label>
            <select id="countries" name="category" value="{{old('category')}}"class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option></option>
                @foreach ($categories as $one)
                <option value="{{$one['category']}}">{{$one['category']}}</option>
            @endforeach
        </select>
        <div class="">
            <form action=""></form>
        </div>
        <span id="{{$name}}">{{$name}}</span>
        <input type="text" value="{{$name}}" id="getId" class="getId">
    </div>
    <script>
        // document.getElementById({{$name}}).style.color = "red";
        var id = document.getElementById("getId").value;
        document.getElementById(id).style.color="red";
    </script>
@endsection
