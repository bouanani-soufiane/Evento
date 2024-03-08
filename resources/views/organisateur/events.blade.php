<x-dashboard>
    <x-admin.dashboard-side/>
    <x-sections.dashboard-events :events="$events" :categories="$categories"/>
    <x-modals.event-create :categories="$categories"/>
    <script src="{{asset('js/event-edit.js')}}"></script>
    <script src="{{asset('js/event-delete.js')}}"></script>

</x-dashboard>
