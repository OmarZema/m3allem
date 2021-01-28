@extends('layouts.app')

@section('content')
   <div class="flex justify-center ">
       <div class="w-4/12 bg-white p-6 rounded-lg">

 @if (session('status'))
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-8 " role="alert">

  <span class="block sm:inline"> 
       
                  {{  session('status')}}
                
        </span>
 
</div>
@endif
      

    <form action="{{ route('login') }}" method="post">
           
        @csrf
        

                <div class="mb-4">
                    
                                <label for="email" class="sr-only">Email</label>
                                <input type="email" name="email" id="email" placeholder="Email"
                                class="bg-gray-100 border-2 w-full p-4 rounded-lg  @error('email') border-red-500 @enderror"  value="{{ old('email') }}">

                                    @error('email')
                                <div class="text-red-500 mt-2 text-sm">
                                {{$message}}      
                                </div>    
                    @enderror 

                </div>

                
                <div class="mb-4">
                    
                                <label for="password" class="sr-only">Pasword</label>
                                <input type="password" name="password" id="pqssword" placeholder="password"
                                class="bg-gray-100 border-2 w-full p-4 rounded-lg  @error('password') border-red-500 @enderror"  value="{{ old('password') }}">

                                         @error('password')
                                <div class="text-red-500 mt-2 text-sm">
                                {{$message}}      
                                </div>    
                    @enderror 
                </div>

               <div class="mb-4">
                   <div class="flex items-center">
                       <input type="checkbox" name="remember" id="remember" class="mr-2">
                       <label for="remember">Remember me</label>
                   </div>
               </div>

                <div>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded font-medium w-full">Login</button>
                </div>
    </form>
    </div>
   </div>
@endsection