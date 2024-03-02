@props(["modalId", "styled"])
@php
    $styled = $styled ?? "false";
@endphp
<button data-modal-target="{{ $modalId }}" data-modal-toggle="{{ $modalId }}"
        class="{{ isset($styled) && $styled ? "" : "middle none font-sans font-bold center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 rounded-lg bg-gradient-to-r from-blue-600 to-blue-400 text-white shadow-md shadow-blue-500/20 hover:shadow-lg hover:shadow-blue-500/40 active:opacity-[0.85]  flex items-center gap-4 px-4 capitalize" }}"
        type="button">
    {{ $slot }}
</button>
