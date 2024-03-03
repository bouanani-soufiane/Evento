<x-dashboard>
    <x-admin.dashboard-side/>
    <x-admin.statistics/>
    <x-sections.dashboard-categories :categories="$categories"/>

    <x-modals.category-create />

    <script src="{{asset('js/category-edit.js')}}"></script>

</x-dashboard>
