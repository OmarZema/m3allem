<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M3allem</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
     <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
      integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
      crossorigin="anonymous"
    />

</head>

<body class="bg-gray-100">
    <nav class="p-6 bg-white flex justify-between mb-6">
        <ul class="flex items-center">
            <li>
                <a href="" class="p-3 italic">Home</a>
              
            </li>
            <li>
                  <a href=" {{ route('dashboard') }}" class="p-3">Doshboard</a>
            </li>
            <li>
                <a href="{{ route('posts') }}" class="p-3">Posts</a>

            </li>
        </ul>
        <ul class="flex item-center">
           

          @auth
        <li>
             <a href="" class="p-3">{{auth()->user()->name}}</a>

         </li>
            <li>
                <form action="{{ route('logout')}}" method="post" class="p-3 inline">
                   
                   @csrf
                    <button  type="submit" >Logout</button>
                </form>
                {{-- <a href="{{ route('logout')}}">Logout</a> --}}
            </li>

            @endauth

            @guest
            <li>
                <a href="{{ route('register') }}" class="p-3">Register</a>
            </li>
            <li>
                <a href="{{ route('login') }}" class="p-3">login</a>
            </li>
            @endguest
        </ul>
    </nav>
  
@yield('content')
</body>

</html>