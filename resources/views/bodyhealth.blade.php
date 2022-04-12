<x-dash-layout>

    <x-slot name="sidebar">@include('layouts.sidebar')</x-slot>

    <div x-data="handler()"
        class="w-full m-auto mt-4 block p-6 max-w-screen-md bg-white rounded-lg border border-gray-200 shadow-md">
        <form action="{{ url('/meals') }}" method="post">@csrf
            <template x-for="(field, index) in fields" :key="index">
                <div
                    class="m-auto my-3 block p-6 max-w-screen-md bg-white rounded-lg border border-gray-200 shadow-md hover:bg-gray-100">
                    <div class="flex items-center w-full max-w-screen-md mb-2" role="alert">
                        <button @click="removeField(index)" type="button"
                            class="ml-auto -mx-1.5 -my-1.5 inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-red-500 bg-red-100 rounded-lg">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>

                    <div class="relative z-0 mb-6 w-full group">
                        <label for="task_title" class="block mb-2 text-sm font-medium text-gray-600">Meal
                            Title</label>
                        <input type="text" name="name[]"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder=" " required />
                    </div>
                    <div class="relative z-0 mb-6 w-full group">

                        <label for="description" class="block mb-2 text-sm font-medium text-gray-600">Write
                            something about it</label>
                        <textarea name="description[]" id="description" rows="2"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"></textarea>
                    </div>

                </div>

            </template>
            <button type="button" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                @click="addNewField()">+ Add Meal</button>
            <button type="submit"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Save</button>
        </form>
    </div>

    <div x-data="handler()"
        class="w-full m-auto mt-4 block p-6 max-w-screen-md bg-white rounded-lg border border-gray-200 shadow-md">
        <form action="{{ url('/exercises') }}" method="post">@csrf
            <template x-for="(field, index) in fields" :key="index">
                <div
                    class="m-auto my-3 block p-6 max-w-screen-md bg-white rounded-lg border border-gray-200 shadow-md hover:bg-gray-100">
                    <div class="flex items-center w-full max-w-screen-md mb-2" role="alert">
                        <button @click="removeField(index)" type="button"
                            class="ml-auto -mx-1.5 -my-1.5 inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-red-500 bg-red-100 rounded-lg">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>

                    <div class="grid xl:grid-cols-2 xl:gap-6">
                        <div class="relative z-0 mb-6 w-full group">
                            <label for="exercise_type" class="block mb-2 text-sm font-medium text-gray-600">Excercise
                                type</label>
                            <select name="exercise_type[]" id="exercise_type"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer">
                                <option value="yoga">Yoga</option>
                                <option value="meditation">Meditation</option>
                                <option value="cardio">Cardio</option>
                                <option value="weight-lifting">Weight Lifting</option>
                            </select>
                        </div>
                        <div class="relative z-0 mb-6 w-full group">
                            <label for="duration" class="block mb-2 text-sm font-medium text-gray-600">Duration
                                (minutes)</label>
                            <input id="duration" type="text" name="duration[]"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " required />
                        </div>
                    </div>

            </template>
            <button type="button" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                @click="addNewField()">+ Add Excercise</button>
            <button type="submit"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Save</button>
        </form>
    </div>
</x-dash-layout>
