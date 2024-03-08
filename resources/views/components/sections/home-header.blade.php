<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')

    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

    <title>Document</title>
</head>
<body>
<div class="bg-gradient-to-b from-green-100 to-green-0">
    <header class="">
        <div class="px-4 mx-auto sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16 lg:h-20">
                <div class="flex-shrink-0">
                    <a href="/home" title="" class="flex">
                        <img class="w-auto h-20"
                             src="{{ asset('logo.png')}}" alt=""/>
                    </a>
                </div>

                <button type="button"
                        class="inline-flex p-1 text-black transition-all duration-200 border border-black lg:hidden focus:bg-gray-100 hover:bg-gray-100">
                    <!-- Menu open: "hidden", Menu closed: "block" -->
                    <svg class="block w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>

                    <!-- Menu open: "block", Menu closed: "hidden" -->
                    <svg class="hidden w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>

                <div class="hidden ml-auto lg:flex lg:items-center lg:justify-center lg:space-x-10">
                    <a href="/home" title=""
                       class="text-base font-semibold text-black transition-all duration-200 hover:text-opacity-80">
                        Accueil
                    </a>


                    <a href="{{route('ticket.index',Auth::user())}}" title=""
                       class="text-base font-semibold text-black transition-all duration-200 hover:text-opacity-80">
                        ticket </a>


                    <div class="w-px h-5 bg-black/20"></div>



                    @if (Auth::check())
                        <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end"
                            aria-labelledby="navbarDarkDropdownMenuLink">
                            <form action="{{ route('logout') }}" method="post">
                                @csrf
                                <li>
                                    <button type="submit" class="dropdown-item btn btn-link">Logout</button>
                                </li>
                            </form>
                        </ul>
                    @else
                        <a href="{{ route('register') }}" title=""
                           class="inline-flex items-center justify-center px-5 py-2.5 text-base font-semibold text-black border-2 border-black hover:bg-black hover:text-white transition-all duration-200 focus:bg-black focus:text-white"
                           role="button"> S'inscrire  </a>
                    @endif
                </div>
            </div>
        </div>
    </header>
