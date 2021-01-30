@extends('layouts.app')

@section('content')

<section class="absolute w-full h-full">





    <div class="absolute top-0 w-full h-full bg-gray-900"
        style="background-image: url(./assets/img/register_bg_2.png); background-size: 100%; background-repeat: no-repeat;">
    </div>
    <div class="container mx-auto px-4 h-full">
        <div class="flex content-center items-center justify-center h-full">
            <div class="w-full lg:w-4/12 px-4">
                <div
                    class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-gray-300 border-0">

                    <div class="flex-auto px-4 lg:px-10 py-10 pt-0 m-8">
                        <div class="text-gray-500 text-center mb-3 font-bold">
                            <p>sign in</p>
                        </div>

                        @if(session('status'))
                            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-8 "
                                role="alert">

                                <span class="block sm:inline">

                                    {{ session('status') }}

                                </span>

                            </div>
                        @endif
                        <form  action="{{ route('login') }}" method="post">

                            @csrf

                            <div class="relative w-full mb-3">
                                <label class="block uppercase text-gray-700 text-xs font-bold mb-2"
                                    for="email">Email</label>
                                    <input type="email" name="email" id="email" placeholder="Email"
                                    class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded
                                     text-sm shadow focus:outline-none focus:shadow-outline w-full @error('email') border-red-500 @enderror "
                                     style="transition: all 0.15s ease 0s;" 
                                    value="{{ old('email') }}" />
                                        @error('email')
                                            <div class="text-red-500 mt-2 text-sm">
                                                {{ $message }}
                                            </div>
                                         @enderror
                            
                                </div>
                                
                            <div class="relative w-full mb-3">
                                <label class="block uppercase text-gray-700 text-xs font-bold mb-2"
                                    for="password">Mot de passe</label>
                                    <input  type="password" name="password" id="password" placeholder="Mot de passe"
                                    class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full @error('password') border-red-500 @enderror " 
                                    style="transition: all 0.15s ease 0s;"
                                    value="{{ old('password') }}" />
                                    @error('password')
                                        <div class="text-red-500 mt-2 text-sm">
                                            {{ $message }}
                                        </div>
                                    @enderror
                            </div>


                            <div>
                                <label for="remember" class="inline-flex items-center cursor-pointer">  
                                    <input id="remember"
                                        name="remember"
                                        type="checkbox" 
                                        class="form-checkbox text-gray-800 ml-1 w-5 h-5"
                                        style="transition: all 0.15s ease 0s;" />
                                        <span
                                        class="ml-2 text-sm font-semibold text-gray-700">se souvenir de moi</span>
                          </div>


                            <div class="text-center mt-6">
                                <button
                                    class="bg-gray-900 text-white active:bg-gray-700 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 w-full"
                                    type="submit" style="transition: all 0.15s ease 0s;">
                                    Sign In
                                </button>
                            </div>


                        </form>
                    </div>
                </div>
                <div class="flex flex-wrap mt-6">
                    <div class="w-1/2 text-right">
                        <a href="#pablo" class="text-gray-300"><small>Create new account</small></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
