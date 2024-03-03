<x-modals.modal modalId="category-create" modalTitle="Créer une catégorie" width="max-w-xl">
    <form action="{{ route("categories.store") }}" method="post" class="p-4 md:p-5" enctype="multipart/form-data">
        @csrf
        <div class="flex flex-col gap-4 mb-4 ">
            <x-inputs.n-input name="name" type="text" placeholder="Saisir le nom du catégorie !! "/>
            <x-inputs.textarea name="description" label="description"/>
                <input type="file" id="myFile" name="image">
{{--            <x-inputs.file name="image"></x-inputs.file>--}}
        </div>
        <div class="flex justify-center">
            <button type="submit"
                    class="inline-block p-3 text-white  text-center rounded-lg bg-gradient-to-tl from-purple-700 to-pink-500">
                <x-svg-icon name="add"/>
                Ajouter une catégorie
            </button>
        </div>
    </form>
</x-modals.modal>
