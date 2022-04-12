<x-dash-layout>

    <x-slot name="sidebar">@include('layouts.sidebar')</x-slot>

    <div class="w-full m-auto mt-4 block p-6 max-w-screen-md bg-white rounded-lg border border-gray-200 shadow-md">
        {{-- Alert messages --}}

        <x-alert :error-bag="$errors" :show="$errors->any() || Arr::hasAny(session()->all(), ['success', 'error'])"></x-alert>
        {{--/ Alert messages --}}

        <form action="{{ url('play-quize') }}" method="post">
            @csrf
        <div x-data="{ quizes : {{$quizes}} }">
            <template x-for="(q, index) in quizes">
                <div class="m-auto my-3 block p-6 max-w-screen-md bg-white rounded-lg border border-gray-200 shadow-md hover:bg-gray-100">
                    <div class="relative z-0 mb-6 w-full group">
                        <label for="task_title" class="block mb-2 text-base text-gray-600 font-bold">Q. <p x-text="q.question" class="inline"></p></label>
                    </div>
                    <div class="relative z-0 mb-6 w-full group">

                        <label for="description" class="block mb-2 text-sm font-medium text-gray-600">Write
                            something about it</label>
                        <input type="hidden" name="ques[]" x-model="q.id">
                        <textarea name="ans[]" id="description" rows="2"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"></textarea>
                    </div>

                </div>
            </template>
            <div x-show="quizes.length < 1">Oops! We don't have any quize yet. It is under construction...</div>
        </div>
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Submit
        </button>
        </form>
    </div>


</x-dash-layout>
