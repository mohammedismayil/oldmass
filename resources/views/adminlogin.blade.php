<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <script src="https://cdn.tailwindcss.com/"></script>
    <title>Admin Login</title>
</head>

<body class="bg-gray-100">
    <div class="container  bg-white p-10 mt-10 m-auto w-1/2 rounded-md content-center justify-center flex-wrap">
       
        <h1 class="text-3xl text-center font-bold ">Login</h1>

        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative hidden" role="alert">
            <strong class="font-bold">Holy smokes!</strong>
            <span class="block sm:inline">Something seriously bad happened.</span>
            <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
              <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
            </span>
          </div>
       

<form  action="{{ action('App\Http\Controllers\AdminController@loginAdmin') }}"  method="POST">
    @csrf
    <div class="flex  content-center justify-center w-full ">
<div class=" py-5 content-center justify-center w-1/2 ">
    <div class="py-2 content-center justify-center w-full m-auto">
        <h3>Email</h3>
        <input class="border border-black rounded-full w-full m-auto h-8 pl-3" id="email" name="email" required autofocus >
    </div>
    <div class="py-2 content-center justify-center w-full m-auto">
        <h3>Password</h3>
        <input class="border border-black rounded-full w-full m-auto h-8 pl-3" name="password"required autofocus id="password">
    </div>
</div>
</div>

<div class="flex content-center justify-center">
    <button type="submit" class=" bg-purple-700 px-5 py-2 w-1/2 rounded-full text-white font-bold ">Login</button>
</div>
</form>
           
            
      





    </div>

</body>

</html>
