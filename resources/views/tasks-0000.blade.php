<x-dash-layout>

    <x-slot name="sidebar">@include('layouts.sidebar')</x-slot>

    <div x-data="handler()"
        class="w-full m-auto mt-4 block p-6 max-w-screen-md bg-white rounded-lg border border-gray-200 shadow-md">
        <template x-for="(field, index) in fields" :key="index" id="task_form">
            <div
                class="m-auto my-3 block p-6 max-w-screen-md bg-white rounded-lg border border-gray-200 shadow-md hover:bg-gray-100">
                <div class="flex items-center w-full max-w-screen-md mb-2" role="alert">
                    <button @click="removeField(index)" type="button"
                        class="ml-auto -mx-1.5 -my-1.5 inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-red-500 bg-red-100 rounded-lg">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>

                <div class="flex p-2 w-full justify-center space-x-0 mb-2" x-data="{ taskLabel : '' }">
                    <button
                        class="min-w-auto w-32 h-10 p-2 rounded-l-full hover:bg-red-500  text-white font-semibold  hover:flex-grow transition-all duration-200 ease-in-out leading-relaxed overflow-y-hidden" :class="taskLabel == 'imp-urgent' ? 'flex-grow bg-red-500' : 'bg-red-300'" @click="taskLabel = 'imp-urgent'">
                        Important and Urgent
                        <input type="checkbox" name="task_label" id="" x-model="taskLabel" value="imp-urgent" />
                    </button>
                    {{-- <input type="checkbox" name="tlabel" value="imp-urgent" x-model="taskLabel" /> --}}
                    <button
                        class="min-w-auto w-32 h-10 bg-blue-300 p-2 rounded-none hover:bg-blue-500 text-white font-semibold  hover:flex-grow transition-all duration-200 ease-in-out leading-relaxed overflow-y-hidden" @click="taskLabel = 'imp-not-urgent'" :class="taskLabel == 'imp-not-urgent' ? 'flex-grow bg-blue-500' : 'bg-blue-300'">
                        Important but Not-urgent
                        <input type="checkbox" name="task_label" id="" x-model="taskLabel" value="imp-not-urgent" />
                    </button>
                    <button
                        class="min-w-auto w-32 h-10 bg-purple-300 p-2 rounded-none hover:bg-purple-500 text-white font-semibold  hover:flex-grow transition-all duration-200 ease-in-out leading-relaxed overflow-y-hidden" :class="taskLabel == 'not-imp-urgent' ? 'flex-grow bg-purple-500' : 'bg-purple-300'" @click="taskLabel = 'not-imp-urgent'">
                        Not-important but urgent
                        <input type="checkbox" name="task_label" id="" x-model="taskLabel" value="not-imp-urgent" />
                    </button>
                    <button
                        class="min-w-auto w-32 h-10 bg-green-300 p-2 rounded-r-full hover:bg-green-500 text-white font-semibold hover:flex-grow transition-all duration-200 ease-in-out leading-relaxed overflow-y-hidden" :class="taskLabel == 'not-imp-not-urgent' ? 'flex-grow bg-green-500' : 'bg-green-300'" @click="taskLabel = 'not-imp-not-urgent'">
                        Not-important and Not-urgent
                        <input type="checkbox" name="task_label" id="" x-model="taskLabel" value="not-imp-not-urgent" />
                    </button>

                </div>

                <div class="relative z-0 mb-6 w-full group">
                    <label for="task_title" class="block mb-2 text-sm font-medium text-gray-600">Task
                        Title</label>
                    <input type="text" name="task_title[]"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder=" " required />
                </div>
                <div class="relative z-0 mb-6 w-full group">

                    <label for="description" class="block mb-2 text-sm font-medium text-gray-600">Write
                        something about it</label>
                    <textarea name="description[]" id="description" rows="2"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"></textarea>
                </div>
                <div class="grid xl:grid-cols-2 xl:gap-6">
                    <div class="relative z-0 mb-6 w-full group">
                        <label for="repeate" class="block mb-2 text-sm font-medium text-gray-600">Repeate Task</label>
                        <select name="repeate[]" id="repeat"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer">
                            <option>Once</option>
                            <option>Daily</option>
                        </select>
                    </div>
                    <div class="relative z-0 mb-6 w-full group">
                        <label for="hours" class="block mb-2 text-sm font-medium text-gray-600">Hours</label>
                        <input id="hours" type="text" name="hours[]"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder=" " required />
                    </div>
                </div>

                <div class="inline-flex items-center justify-between w-full">
                    <div class="flex items-center w-full">
                        <div class="relative">
                            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <input x-init="createDateTimePicker('start_at[]')" name="start_at[]"
                                type="text"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5"
                                placeholder="Start at">
                        </div>
                        <span class="mx-4 text-gray-500">to</span>
                        <div class="relative">
                            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <input x-init="createDateTimePicker('ends_at[]')" x-model="field.ends_at" name="ends_at[]"
                                type="text"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 datepicker-input"
                                placeholder="Ends at">
                        </div>
                    </div>

                    <div class="flex items-center">
                        <input name="anytime[]" id="checkbox-1" aria-describedby="checkbox-1"
                            type="checkbox"
                            class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 ">
                        <label for="checkbox-1" class="ml-3 text-sm font-medium text-gray-900">Anytime</label>
                    </div>
                </div>
            </div>

        </template>
        <button type="button" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
            @click="addNewField()">+ Add Task</button>
    </div>
</x-dash-layout>
