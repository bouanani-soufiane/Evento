<x-sections.home-header/>

<section class="py-4  ">
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="max-w-2xl mx-auto text-center">
            <h2 class="text-3xl font-bold leading-tight text-black sm:text-4xl lg:text-5xl">Vos Tickets</h2>
        </div>

    </div>
</section>
<section class=" w-fit mx-auto m-16  bg-gradient-to-b from-green-100 to-green-0">

    <div class="grid grid-cols-1 lg:grid-cols-2 relative">

        <main class="w-screen  flex flex-col">
            @forelse($tickets as $ticket)

            <section class="mb-6 w-full flex-grow  flex items-center justify-center p-4">
                <div class="flex w-full max-w-3xl text-zinc-900 h-64">
                    <div class="h-full bg-white flex items-center justify-center px-8 rounded-l-3xl">
                        <img   src="{{ asset('logo.png')}}"  class="w-auto mx-auto h-16" >
                    </div>
                    <div class="relative h-full flex flex-col items-center border-dashed justify-between border-2 bg-white border-zinc-900">
                        <div class="absolute rounded-full w-8 h-8 bg-zinc-900 -top-5"></div>
                        <div class="absolute rounded-full w-8 h-8 bg-zinc-900 -bottom-5"></div>
                    </div>
                    <div class="h-full py-8 px-10 bg-white flex-grow rounded-r-3xl flex flex-col">
                        <div class="flex w-full justify-between items-center">
                            <div class="flex flex-col items-center">
                                <span class="text-4xl font-bold">{{$ticket->event->title}}</span>
                                <span class="text-zinc-500 text-sm">Brisbane</span>
                            </div>
                            <div class="flex flex-col flex-grow items-center px-10">

                            </div>
                            <div class="flex flex-col items-center">
                                <span class="text-4xl font-bold bg-green-100 px-3 py-1 rounded-2xl  ">{{$ticket->event->price}}$</span>
                                <span class="text-zinc-500 text-sm"></span>
                            </div>
                        </div>
                        <div class="flex w-full mt-auto justify-between">
                            <div class="flex flex-col">
                                <span class="text-xs text-zinc-400">Date</span>
                                <span class="font-mono">{{$ticket->event->date}}</span>
                            </div>
                            <div class="flex flex-col">
                                <span class="text-xs text-zinc-400">localisation</span>
                                <span class="font-mono">{{$ticket->event->localisation}}</span>
                            </div>
                            <div class="flex flex-col">
                                <span class="text-xs text-zinc-400">client nom</span>
                                <span class="font-mono">Rob Stinson</span>
                            </div>
                            <div class="flex flex-col">
                                <span class="text-xs text-zinc-400">serie</span>
                                <span class="font-mono">{{$ticket->id}}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            @empty
                <x-elements.no_data/>
            @endforelse
        </main>

    </div>
</section>

<x-sections.home-footer/>
