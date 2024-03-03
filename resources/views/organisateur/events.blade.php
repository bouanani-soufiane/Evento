<x-dashboard>
    <x-admin.dashboard-side/>
    <x-admin.statistics/>
    <x-sections.dashboard-events :events="$events" :categories="$categories"/>
    <x-modals.event-create :categories="$categories"/>
    <script src="{{asset('js/event-edit.js')}}"></script>

</x-dashboard>
