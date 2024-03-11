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
                       role="button"> S'inscrire </a>
                @endif
            </div>
        </div>
    </div>
</header>
