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
                    <h6>Réservation</h6>


                </div>
                <div class="flex-auto px-0 pt-0 pb-2">
                    <div class="p-0 overflow-x-auto">
                        <table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
                            <thead class="align-bottom">
                            <tr>
                                <x-elements.th>#ID</x-elements.th>
                                <x-elements.th>Evénements</x-elements.th>
                                <x-elements.th>Utilisateur</x-elements.th>
                                <x-elements.th>Email</x-elements.th>
                                <x-elements.th>décliner</x-elements.th>
                                <x-elements.th>Valider</x-elements.th>
                            </tr>
                            </thead>
                            <tbody >
                            @forelse ($reservations as $reservation)
                                <tr class="{{ $reservation->isConfirmed ? 'bg-green-700 text-white ' : 'bg-red-700 text-white' }}">
                                    <x-elements.td> {{$reservation->id}}</x-elements.td>
                                    <x-elements.td> {{$reservation->event->title}}</x-elements.td>
                                    <x-elements.td> {{$reservation->user->name}}</x-elements.td>
                                    <x-elements.td> {{$reservation->user->email}}</x-elements.td>
                                    <x-elements.td>
                                        <div class="flex">
                                            <form action="{{route('decline',$reservation)}}" method="post">
                                                @csrf
                                                <button
                                                        type="submit"
                                                        class="hover:bg-red-200 hover:text-white  rounded-2xl transition-all">
                                                    <x-svg-icon name="delete"></x-svg-icon>
                                                </button>
                                            </form>

                                        </div>

                                    </x-elements.td>


                                    <x-elements.td>
                                        <form action="{{route('valider',$reservation)}}" method="post">
                                            @csrf
                                            <button
                                                    type="submit"
                                                    class="hover:bg-green-200 hover:text-white p-1 rounded-2xl">
                                                <x-svg-icon name="add"></x-svg-icon>
                                            </button>
                                        </form>
                                    </x-elements.td>


                                </tr>
                            @empty
                                <x-elements.no_data/>
                            @endforelse
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


