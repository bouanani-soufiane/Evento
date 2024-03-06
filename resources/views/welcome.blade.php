<x-sections.home-header/>

    <section class="py-10 sm:py-16 lg:py-24">
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="grid items-center grid-cols-1 gap-12 lg:grid-cols-2">
                <div>
                    <h1 class="text-xl font-bold text-black sm:text-6xl lg:text-7xl">
                        Vivez des événements inoubliables avec
                        <div class="relative inline-flex">
                            <span class="absolute inset-x-0 bottom-0 border-b-[30px] border-[#4ADE80]"></span>
                            <h1 class="relative text-4xl font-bold text-black sm:text-6xl lg:text-7xl">Evento.</h1>
                        </div>
                    </h1>

                    <p class="mt-8 text-base text-black sm:text-xl">Des expériences extraordinaires : EVENTO - votre
                        partenaire de confiance pour la gestion d'événements

                    </p>

                    <div class="mt-10 sm:flex sm:items-center sm:space-x-8">
                        <a href="#" title=""
                           class="inline-flex items-center justify-center px-10 py-4 text-base font-semibold text-white transition-all duration-200 bg-orange-500 hover:bg-orange-600 focus:bg-orange-600"
                           role="button">Commencer à explorer</a>


                    </div>
                </div>

                <div>
                    <img class="w-full" src="bg_home.png" alt=""/>
                </div>
            </div>
        </div>
    </section>
</div>

<div class="px-4 mx-auto  bg-gradient-to-b from-white to-green-50">
    <div class="max-w-2xl mx-auto text-center">
        <div class="relative inline-flex">
            <span class="absolute inset-x-0 bottom-0 border-b-[54px] border-[#FF3EA5]"></span>
            <h1 class="relative text-4xl font-bold text-black sm:text-6xl lg:text-7xl">Latest from blog</h1>
        </div>
        <p class="max-w-xl mx-auto mt-4 text-base leading-relaxed text-gray-600">Amet minim mollit non deserunt
            ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis.</p>
    </div>

    <div class="bg-gradient-to-b from-white to-green-50 ">
        <div>

            <main class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex items-baseline justify-between border-b border-gray-200 pb-6 pt-24">
                    <h1 class="text-4xl font-bold tracking-tight text-gray-900">Les meilleures offres atterrissent ici</h1>

                        <form class="w-full" action="{{route('home.index')}}">
                            <label for="default-search" class=" text-sm font-medium text-gray-900 sr-only dark:text-gray-300">Search</label>
                            <div class="relative">
                                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                    <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                                </div>
                                <input type="search" name="search" id="default-search" class="block p-4 pl-10 w-full text-sm text-gray-900 bg-white rounded-lg border focus:ring-blue-500 focus:border-blue-500 dark:bg-white dark:border-green-200 dark:placeholder-gray-400 dark:text-black dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="Search Mockups, Logos..." required>
                                <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-green-200 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-green-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                            </div>
                        </form>

                </div>

                <section aria-labelledby="products-heading" class="pb-24 pt-6">

                    <div class="grid grid-cols-1 gap-x-8 gap-y-10 lg:grid-cols-4">
                        <!-- Filters -->
                        <form  action="{{route('home.index')}}">

                            <div class="border-b border-gray-200 py-6">
                                <h1 class="font-bold font-weight-bold">Tous les category</h1>
                                <div class="pt-6" id="filter-section-2">
                                    <div class="space-y-4">
                                        @foreach($categories as $category)
                                            <div class="flex items-center">
                                                <input id="{{$category->name}}" name="filter" value="{{$category->id}}" type="checkbox"
                                                       class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-100 focus:ring-indigo-500">
                                                <label for="{{$category->name}}" class="ml-3 text-sm text-gray-600">{{$category->name}}</label>
                                            </div>
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="mt-2 rounded btn btn-danger bg-yellow-200 text-black hover:bg-red-500 px-4 py-2 hover:text-white">filter</button>
                        </form>

                        <!-- Product grid -->
                        <div class="lg:col-span-3">
                            <section class=" ">

                                <div
                                    class=" grid max-w-md grid-cols-1 mx-auto lg:max-w-fit lg:mt-6 lg:grid-cols-3 gap-x-10 gap-y-12">

                                    @forelse ($events as $index => $event)
                                        <div tabindex="0"
                                             class="relative rounded-xl shadow-2xl focus:outline-none mx-2 w-72 xl:mb-0 mb-8">
                                            <div class="rounded">
                                                <img alt="person capturing an image"
                                                     src="{{ asset('storage/'.$event->image->path)}} " tabindex="0"
                                                     class="rounded-xl focus:outline-none w-full h-44"
                                                     style="height: 200px"
                                                />
                                            </div>
                                            <div class=" bg-white rounded-2xl ">
                                                <div class="flex items-center justify-between px-4 pt-4">
                                                    <div>
                                                        <svg xmlns="http://www.w3.org/2000/svg" tabindex="0"
                                                             class="focus:outline-none" width="20" height="20"
                                                             viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50"
                                                             fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                            <path
                                                                d="M9 4h6a2 2 0 0 1 2 2v14l-5-3l-5 3v-14a2 2 0 0 1 2 -2"></path>
                                                        </svg>
                                                    </div>
                                                    <div class="bg-yellow-200 py-1.5 px-6 rounded-full">
                                                        <p tabindex="0"
                                                           class="focus:outline-none text-xs text-yellow-700">{{$event->category->name}}</p>
                                                    </div>
                                                </div>
                                                <div class="p-4">
                                                    <div class="flex items-center">
                                                        <h2 tabindex="0"
                                                            class="focus:outline-none text-lg font-semibold"> {{$event->title}}</h2>
                                                    </div>
                                                    <p tabindex="0"
                                                       class="focus:outline-none text-xs text-gray-600 mt-2">{{Str::limit($event->description,68)}}</p>

                                                    <div class="flex py-4  text-sm text-gray-500">
                                                        <div class="flex-1 inline-flex items-center">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                 class="h-5 w-5 mr-3 text-gray-400" fill="none"
                                                                 viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                      stroke-width="2"
                                                                      d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                                                </path>
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                      stroke-width="2"
                                                                      d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                                            </svg>
                                                            <p class="">{{$event->localisation}}</p>
                                                        </div>
                                                        <div class="flex-1 inline-flex items-center">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                 class="h-5 w-5 mr-2 text-gray-400" fill="none"
                                                                 viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                      stroke-width="2"
                                                                      d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                            </svg>
                                                            <p class="">{{$event->date}}</p>
                                                        </div>
                                                    </div>
                                                    <a href="{{route('events.shows',$event->slug)}}" class="bottom-3 right-2 flex align-items-end">
                                                        <span class="title-font font-medium text-2xl text-gray-900">$58.00</span>
                                                        <button
                                                            class="flex ml-auto text-white bg-red-500 border-0 py-2 px-6 focus:outline-none hover:bg-red-600 rounded">
                                                            Réservez
                                                        </button>

                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    @empty
                                        <x-elements.no_data/>
                                    @endforelse

                                </div>

                        </div>
                    </div>

                </section>


            </main>
        </div>
    </div>
    <x-sections.home-footer/>



