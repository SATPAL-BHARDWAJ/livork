<x-dash-layout>
    <x-slot name="sidebar">
        @include('layouts.sidebar')
    </x-slot>

    <div class="flex max-w-screen-lg justify-around w-full m-auto">
    <div class="m-auto my-3 block p-6 max-w-screen-md bg-white rounded-lg border border-gray-200 shadow-md hover:bg-gray-100">
        Report A
        <div class="mt-3">
            Total Tasks : {{ $total_tasks??0 }}
        </div>
    </div>
    <div class="m-auto my-3 block p-6 max-w-screen-md bg-white rounded-lg border border-gray-200 shadow-md hover:bg-gray-100">
        Report B
        <div class="mt-3">
            Calories Intake : {{ $calories_intake??0 }}
        </div>
        <div class="mt-3">
            Calories Consumed : {{ $calories_consumed??0 }}
        </div>
    </div>
</div>
</x-dash-layout>
