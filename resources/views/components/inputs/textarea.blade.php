@props(["name", "label"])

<div class="col-span-2">
    <label for="{{ $name }}" class="block mb-2 text-sm font-medium text-gray-900">{{ $label }}</label>
    <textarea id="{{ $name }}" rows="4" name="{{ $name }}"
              class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
              placeholder="Ecrivez un {{ $name }} ici" >{{ old($name) }}</textarea>
</div>
