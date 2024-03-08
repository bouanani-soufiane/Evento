<!-- Navbar -->
<nav class="relative flex flex-wrap items-center justify-between px-0 py-2 mx-6 transition-all shadow-none duration-250 ease-soft-in rounded-2xl lg:flex-nowrap lg:justify-start" navbar-main navbar-scroll="true">
    <div class="flex items-center justify-between w-full px-4 py-1 mx-auto flex-wrap-inherit">
        <nav>
            <ol class="flex flex-wrap pt-1 mr-12 bg-transparent rounded-lg sm:mr-16">
                <li class="leading-normal text-sm text-xl">
                    <a class="text-slate-700  font-bold capitalize " href="javascript:;">Dashboard</a>
                </li>
                <li class="text-xl pl-2 capitalize leading-normal text-slate-700 before:float-left before:pr-2 before:text-gray-600 before:content-['/']"
                    aria-current="page">{!! Request::segment(2    ) !!}
                </li>
            </ol>
        </nav>

        <div class="flex items-center mt-2 grow sm:mt-0 sm:mr-6 md:mr-0 lg:flex lg:basis-auto">
            <div class="flex items-center md:ml-auto md:pr-4">

            </div>
            <ul class="flex flex-row justify-end pl-0 mb-0 list-none md-max:w-full">

                <li class="flex items-center ">
                    <a href="#" class="block px-0 py-2 font-semibold transition-all ease-nav-brand text-sm text-slate-500">
                        <i class="fa fa-user sm:mr-1"></i>
                        <span class="hidden sm:inline">{{Auth::user()->name}}</span>
                    </a>
                </li>




            </ul>
        </div>
    </div>
</nav>

<!-- end Navbar -->
