@props(["modalId", "styled"])

<button data-modal-target="{{ $modalId }}" data-modal-toggle="{{ $modalId }}"
        class="{{ isset($styled) && $styled == true ?  "inline-block text-white px-2 py-2 text-center rounded-lg bg-gradient-to-tl from-purple-700 to-pink-500" : ""}}"
        type="button">
    {{ $slot }}
</button>
