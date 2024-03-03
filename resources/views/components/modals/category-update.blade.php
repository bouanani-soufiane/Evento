<x-modals.modal modalId="category-edit" modalTitle="Modifier la catégorie" width="max-w-xl">
    <form id="category-update" method="post" class="p-4 md:p-5" enctype="multipart/form-data">
        @method("put")
        @csrf
        <div class="flex flex-col gap-4 mb-4 ">
            <x-inputs.n-input name="name" type="text" placeholder="Saisir le nom du catégorie  !! "/>
            <x-inputs.textarea name="description" label="description"/>
            <x-inputs.file name="image"/>
        </div>
        <div class="flex justify-center">

            <button type="submit"
                    class="inline-block p-3 text-white  text-center rounded-lg bg-gradient-to-tl from-purple-700 to-pink-500">
                <x-svg-icon name="add"/>
                Modifier
            </button>
        </div>
    </form>
</x-modals.modal>
