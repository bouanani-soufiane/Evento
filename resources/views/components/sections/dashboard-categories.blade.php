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
                    <h6>Catégories d'événements</h6>


                    <x-modals.button modalId="category-create" :styled="true">Créer une catégorie</x-modals.button>
                </div>
                <div class="flex-auto px-0 pt-0 pb-2">
                    <div class="p-0 overflow-x-auto">
                        <table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
                            <thead class="align-bottom">
                            <tr>
                                <x-elements.th>Nom</x-elements.th>
                                <x-elements.th>Description</x-elements.th>
                                <x-elements.th>nombre des d'événements</x-elements.th>
                                <x-elements.th>actions</x-elements.th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse ($categories as $category)
                                <tr>
                                    <x-elements.td>
                                        <img src="{{ asset('storage/'.$category->image->path)}}"
                                             class="inline-flex items-center justify-center mr-4 text-sm text-white transition-all duration-200 ease-soft-in-out h-9 w-9 rounded-xl"
                                             alt="user1"/>{{ $category->id}} | {{ $category->name }}
                                    </x-elements.td>

                                    <x-elements.td>{{ $category->description }}</x-elements.td>

                                    <x-elements.td>{{ $category->event_count }}</x-elements.td>

                                    <td class="py-3 px-5 border-b border-blue-gray-50 flex items-center gap-2">
                                        <button
                                            data-slug="{{ $category->slug }}"
                                            data-name="{{ $category->name }}"
                                            data-description="{{ $category->description }}"
                                            data-modal-target="category-edit"
                                            data-modal-toggle="category-edit"
                                            class="bg-green-500 hover:bg-green-700 font-bold py-2 px-4 rounded-full"
                                            type="button">
                                            <x-svg-icon name="edit"/>
                                        </button>
                                        <x-modals.category-update :slug="$category"/>

                                        <button data-modal-target="category-delete" data-modal-toggle="category-delete"
                                                data-slug="{{$category->slug}}"
                                                type="button">
                                            <x-svg-icon name="delete"></x-svg-icon>
                                        </button>
                                        <x-modals.category-delete />
                                    </td>
                                </tr>
                            @empty
                                <x-elements.no_data/>
                            @endforelse
                            </tbody>
                        </table>
                        @if ($categories->isNotEmpty())
                            <x-sections.pagination :model="$categories"/>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


