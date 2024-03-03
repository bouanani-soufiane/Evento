@props(["modalId", "styled","category" => false])
<button data-modal-target="{{ $modalId }}" data-modal-toggle="{{ $modalId }}"
        data-slug="{{$category->slug ?? false}} "
        class="{{ isset($styled) && $styled == true ?  "inline-block px-6 py-3 font-bold text-center text-white uppercase align-middle transition-all bg-transparent rounded-lg cursor-pointer leading-pro text-xs ease-soft-in shadow-soft-md bg-150 bg-gradient-to-tl from-gray-900 to-slate-800 hover:shadow-soft-xs active:opacity-85 hover:scale-102 tracking-tight-soft bg-x-25" : ""}}"
        type="button"
       >


    {{ $slot }}
</button>
