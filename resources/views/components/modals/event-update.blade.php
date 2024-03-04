<x-modals.modal modalId="event-update" modalTitle="Modifier l'événement" width="max-w-xl">
    <form id="event-edit"  method="post" class="p-4 md:p-5" enctype="multipart/form-data">
        @method("put")
        @csrf
        <div class="flex flex-col gap-4 mb-4 ">
            <x-inputs.n-input name="title" type="text" placeholder="Saisir le titre d'événements !! "/>
            <x-inputs.textarea name="description" label="description"/>
            <x-inputs.n-input name="localisation" type="text" placeholder="Saisir la localisation d'événements !! "/>
            <x-inputs.n-input name="date" type="date" placeholder="Saisir la date d'événements !! "/>
            <x-inputs.n-input name="price" type="number" placeholder="Saisir le prix d'événements !! "/>
            <x-inputs.n-input name="totalPlace" type="number" placeholder="Saisir le nombre de place d'événements !! "/>
            <label>Categorie </label>
            <select id="category_id" name="category_id"
                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                <option disabled>Choisissez une Categorie</option>

                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
            <label>Type de réservation</label>
            <select id="reservationType" name="reservationType"
                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                <option disabled>Choisissez le type de réservation</option>

                @foreach(\App\Enums\ReservationTypeEnum::cases() as $type)
                    <option value="{{ $type->value }}">{{ $type->name }}</option>
                @endforeach
            </select>

            <input type="file" id="myFile" name="image">
        </div>
        <div class="flex justify-center">
            <button type="submit"
                    class="inline-block p-3 text-white  text-center rounded-lg bg-gradient-to-tl from-purple-700 to-pink-500">
                <x-svg-icon name="add"/>
                Ajouter un événements
            </button>
        </div>
    </form>
</x-modals.modal>
