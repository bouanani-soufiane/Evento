<nav
    class="absolute top-0 z-30 flex flex-wrap items-center justify-between w-full px-4 py-2 mt-6 mb-4 shadow-none lg:flex-nowrap lg:justify-start">
    <div class="container flex items-center justify-between py-0 flex-wrap-inherit">
        <a class="py-2.375 text-sm mr-4 ml-4 whitespace-nowrap font-bold text-white lg:ml-0"
           href="/">
            <x-application-logo/>
        </a>
        <button navbar-trigger
                class="px-3 py-1 ml-2 leading-none transition-all bg-transparent border border-transparent border-solid rounded-lg shadow-none cursor-pointer text-lg ease-soft-in-out lg:hidden"
                type="button" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
          <span class="inline-block mt-2 align-middle bg-center bg-no-repeat bg-cover w-6 h-6 bg-none">
            <span bar1
                  class="w-5.5 rounded-xs duration-350 relative my-0 mx-auto block h-px bg-white transition-all"></span>
            <span bar2
                  class="w-5.5 rounded-xs mt-1.75 duration-350 relative my-0 mx-auto block h-px bg-white transition-all"></span>
            <span bar3
                  class="w-5.5 rounded-xs mt-1.75 duration-350 relative my-0 mx-auto block h-px bg-white transition-all"></span>
          </span>
        </button>
        <div navbar-menu
             class="items-center flex-grow transition-all ease-soft duration-350 lg-max:bg-white lg-max:max-h-0 lg-max:overflow-hidden basis-full rounded-xl lg:flex lg:basis-auto">
            <ul class="flex flex-col pl-0 mx-auto mb-0 list-none lg:flex-row xl:ml-auto">
                <li>
                    <a class="flex items-center px-4 py-2 mr-2 font-normal text-white transition-all duration-250 lg-max:opacity-0 lg-max:text-slate-700 ease-soft-in-out text-sm lg:px-2 lg:hover:text-white/75"
                       aria-current="page" href="/event">
                        <i class="mr-1 text-white lg-max:text-slate-700 fa fa-calendar opacity-60"></i>

                        Événement
                    </a>
                </li>
                <li>
                    <a class="block px-4 py-2 mr-2 font-normal text-white transition-all duration-250 lg-max:opacity-0 lg-max:text-slate-700 ease-soft-in-out text-sm lg:px-2 lg:hover:text-white/75"
                       href="/category">
                        <i class="mr-1 text-white lg-max:text-slate-700 fa fa-folder opacity-60"></i>

                        Categories
                    </a>
                </li>
                <li>
                    <a class="block px-4 py-2 mr-2 font-normal text-white transition-all duration-250 lg-max:opacity-0 lg-max:text-slate-700 ease-soft-in-out text-sm lg:px-2 lg:hover:text-white/75"
                       href="/profile">
                        <i class="mr-1 text-white lg-max:text-slate-700 fas fa-user-circle opacity-60"></i>
                        Profile
                    </a>
                </li>
            </ul>
            <!-- online builder btn  -->
            <!-- <li class="flex items-center">
              <a
                class="leading-pro ease-soft-in border-white/75 text-xs tracking-tight-soft rounded-3.5xl hover:border-white/75 hover:scale-102 active:hover:border-white/75 active:hover:scale-102 active:opacity-85 active:shadow-soft-xs active:border-white/75 bg-white/10 hover:bg-white/10 active:hover:bg-white/10 mr-2 mb-0 inline-block cursor-pointer border border-solid py-2 px-8 text-center align-middle font-bold uppercase text-white shadow-none transition-all hover:text-white hover:opacity-75 hover:shadow-none active:scale-100 active:bg-white active:text-black active:hover:text-white active:hover:opacity-75 active:hover:shadow-none"
                target="_blank"
                href="https://www.creative-tim.com/builder/soft-ui?ref=navbar-dashboard&amp;_ga=2.76518741.1192788655.1647724933-1242940210.1644448053"
                >Online Builder</a
              >
            </li> -->
        </div>
    </div>
</nav>
