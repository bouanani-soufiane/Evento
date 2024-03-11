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
                    <h6>Gérer les utilisateurs</h6>

                </div>
                <div class="flex-auto px-0 pt-0 pb-2">
                    <div class="p-0 overflow-x-auto">
                        <table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
                            <thead class="align-bottom">
                            <tr>
                                <x-elements.th>#ID</x-elements.th>
                                <x-elements.th>Nom</x-elements.th>
                                <x-elements.th>Email</x-elements.th>
                                <x-elements.th>Role</x-elements.th>
                                <x-elements.th>supprimer L'UTILISATEUR</x-elements.th>
                                <x-elements.th>BLOQUER/DÉBLOQUER </x-elements.th>
                                <x-elements.th>autoriser/refuser la réservation</x-elements.th>
                                <x-elements.th>création d'un événement</x-elements.th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse ($users as $user)
                                <tr>
                                    <x-elements.td>
                                        <div> {{$user->id}}</div>
                                    </x-elements.td>
                                    <x-elements.td>{{$user->name}}</x-elements.td>
                                    <x-elements.td>{{$user->email}}</x-elements.td>
                                    <x-elements.td> {{$user->roles->pluck('name')[0]}}</x-elements.td>
                                    @if($user->roles->pluck('name')[0] != 'admin')

                                    <td class="text-center px-6 py-3 align-middle bg-transparent border-b whitespace-wrap shadow-transparent ">
                                        <div class="flex justify-center">
                                            <form action="{{route('deleteUser',$user)}}" method="post"
                                                  class="mr-4">
                                                @csrf
                                                <button
                                                        type="submit">
                                                    <x-svg-icon name="user-remove"></x-svg-icon>
                                                </button>
                                            </form>
                                            <form action="{{route('restoreUser',$user)}}" method="post">
                                                @csrf
                                                <button
                                                        type="submit">
                                                    <x-svg-icon name="restoreUser"></x-svg-icon>
                                                </button>
                                            </form>
                                        </div>
                                    </td>



                                    <td class="text-center px-6 py-3 align-middle bg-transparent border-b whitespace-wrap shadow-transparent flex justify-center ">
                                        <form action="{{route('blockuser',$user)}}" method="post" class="mr-4" >
                                            @csrf
                                            <button
                                                    type="submit">
                                                <x-svg-icon name="user-remove"></x-svg-icon>
                                            </button>
                                        </form>
                                        <form action="{{route('deblockuser',$user)}}" method="post">
                                            @csrf
                                            <button
                                                    type="submit">
                                                <x-svg-icon name="user-deblock"></x-svg-icon>
                                            </button>
                                        </form>
                                    </td>
                                    <td class="text-center px-6 py-3 align-middle bg-transparent border-b whitespace-wrap shadow-transparent ">
                                   <div class="flex justify-center">
                                       <form action="{{route('revokeReservation',$user)}}" method="post" class="mr-4">
                                           @csrf
                                           <button
                                                   type="submit">
                                               <x-svg-icon name="block"></x-svg-icon>
                                           </button>
                                       </form>
                                       <form action="{{route('giveReservation',$user)}}" method="post">
                                           @csrf
                                           <button
                                                   type="submit">
                                               <x-svg-icon name="giveReservation"></x-svg-icon>
                                           </button>
                                       </form>
                                   </div>
                                    </td>

                                    <td class="text-center px-6 py-3 align-middle bg-transparent border-b whitespace-wrap shadow-transparent">
                                        <div class="flex justify-center">
                                            <form action="{{route('removeCreateEvent',$user)}}" method="post" class="mr-4">
                                                @csrf
                                                <button
                                                        type="submit">
                                                    <x-svg-icon name="block"></x-svg-icon>
                                                </button>
                                            </form>
                                            <form action="{{route('giveCreateEvent',$user)}}" method="post">
                                                @csrf
                                                <button
                                                        type="submit">
                                                    <x-svg-icon name="giveReservation"></x-svg-icon>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                    @endif
                                </tr>
                            @empty
                                <x-elements.no_data/>
                            @endforelse
                            </tbody>
                        </table>
                        @if ($users->isNotEmpty())
                            <x-sections.pagination :model="$users"/>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


