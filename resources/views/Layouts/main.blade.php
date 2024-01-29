<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    {{-- font awesome link --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- cdn link of flowbite --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
    @vite('resources/css/app.css')
</head>
<body>
    @yield('content')
</body>

{{-- flow bite --}}
<script src="../path/to/flowbite/dist/flowbite.min.js"></script>
{{-- for tab --}}
<!-- from node_modules -->
<script src="node_modules/@material-tailwind/html/scripts/tabs.js"></script>

{{-- for menu to work --}}
<!-- from node_modules -->
<script
  type="module"
  src="node_modules/@material-tailwind/html@latest/scripts/popover.js"
></script>
<!-- from cdn -->
<script
  type="module"
  src="https://unpkg.com/@material-tailwind/html@latest/scripts/popover.js"
></script>

{{-- cdn link of flowbite --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>

{{-- for CRUD alert to work --}}
<!-- from node_modules -->
<script src="node_modules/@material-tailwind/html@latest/scripts/dismissible.js"></script>

<!-- from cdn -->
<script src="https://unpkg.com/@material-tailwind/html@latest/scripts/dismissible.js"></script>
</html>
