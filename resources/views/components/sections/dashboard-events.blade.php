<div class="w-full px-6 py-6 mx-auto">
    <div class="flex flex-wrap -mx-3">
        <div class="flex-none w-full max-w-full px-3">
            @if(session('success'))
                <div class=" p-4 my-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative"
                     role="alert"
                     id="successMessage">
                    <strong class="font-bold">Success!</strong>
                    <span class="block sm:inline">{{ session('success') }}</span>
                </div>
            @endif
            <div
                class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
                <div
                    class="relative bg-clip-border rounded-xl overflow-hidden bg-transparent text-gray-700 shadow-none m-0 flex items-center justify-between p-6">
                    <h6>Evénements</h6>


                    <x-modals.button modalId="event-create" :styled="true"><i class="fas fa-plus"> </i>&nbsp;&nbsp;
                        Créer un Evénements
                    </x-modals.button>
                </div>
                <div class="flex-auto px-0 pt-0 pb-2">
                    <div class="p-0 overflow-x-auto">
                        <table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
                            <thead class="align-bottom">
                            <tr>
                                <x-elements.th>#ID</x-elements.th>
                                <x-elements.th>Image</x-elements.th>
                                <x-elements.th>Titre</x-elements.th>
                                <x-elements.th>Date</x-elements.th>
                                <x-elements.th>Prix</x-elements.th>
                                <x-elements.th>Nombre de places</x-elements.th>
                                <x-elements.th>Type</x-elements.th>
                                <x-elements.th>Est vérifié</x-elements.th>
                                <x-elements.th>Actions</x-elements.th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse ($events as $event)
                                <tr>
                                    <x-elements.td>
                                        <div> {{Str::limit( $event->id ,6)}}</div>
                                    </x-elements.td>
                                    <x-elements.td>
                                        <img src="{{ asset('storage/'.$event->image->path)}}"
                                             class="inline-flex items-center justify-center mr-4 text-sm text-white transition-all duration-200 ease-soft-in-out h-9 w-9 rounded-xl"
                                             alt="user1"/>
                                    </x-elements.td>
                                    <x-elements.td>{{Str::limit( $event->title ,12)}}</x-elements.td>
                                    <x-elements.td>{{ $event->date }}</x-elements.td>
                                    <x-elements.td>{{ $event->price }} DH</x-elements.td>
                                    <x-elements.td>{{ $event->totalPlace }}</x-elements.td>
                                    <x-elements.td>{{ $event->reservationType }}</x-elements.td>
                                    <x-elements.td>

                                        @if($event->isVerified)

                                            <span
                                                class="bg-gradient-to-tl from-green-600 to-lime-400 px-2.5 text-xs rounded-1.8 py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">VÉRIFIÉ</span>
                                        @else
                                            <span
                                                class="bg-gradient-to-tl from-slate-600 to-slate-300 px-2.5 text-xs rounded-1.8 py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">NON VÉRIFIÉ </span>
                                        @endif
                                    </x-elements.td>

                                    <td class="py-3 px-5 border-b border-blue-gray-50 flex items-center gap-2">
                                        <button
                                            data-slug="{{ $event->slug }}"
                                            data-title="{{ $event->title }}"
                                            data-description="{{ $event->description }}"
                                            data-date="{{ $event->date }}"
                                            data-numberOfSeats="{{ $event->totalPlace }}"
                                            data-price="{{ $event->price }}"
                                            data-categoryId="{{ $event->category->id }}"
                                            data-bookingType="{{ $event->reservationType }}"
                                            data-localisation="{{ $event->localisation }}"
                                            data-modal-target="event-update"
                                            data-modal-toggle="event-update"
                                            class="bg-green-500 hover:bg-green-700 font-bold py-2 px-4 rounded-full"
                                            type="button">
                                            <x-svg-icon name="edit"/>
                                        </button>
                                        <x-modals.event-update :slug="$event" :categories="$categories"/>

                                        <button data-modal-target="event-delete" data-modal-toggle="event-delete"
                                                data-slug="{{$event->slug}}"
                                                type="button">
                                            <x-svg-icon name="delete"></x-svg-icon>
                                        </button>


                                        <form action="{{route('events.verify',$event->slug)}}" method="post">
                                            @csrf
                                            <input type="hidden" name="oldValue" value="{{ !$event->isVerified}}">

                                            <button>
                                                <x-svg-icon name="validate"></x-svg-icon>
                                            </button>
                                        </form>
                                        <x-modals.event-delete :slug="$event->slug"/>
                                    </td>
                                </tr>
                            @empty
                                <x-elements.no_data/>
                            @endforelse
                            </tbody>
                        </table>
                        @if ($events->isNotEmpty())
                            <x-sections.pagination :model="$events"/>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


