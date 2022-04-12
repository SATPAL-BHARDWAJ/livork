<x-dash-layout>

    <x-slot name="sidebar">@include('layouts.sidebar')</x-slot>

    <div x-data="handler({{$tasks}})"
        class="w-full m-auto mt-4 block p-6 max-w-screen-lg bg-white rounded-lg border border-gray-200 shadow-md">

        {{-- Alert messages --}}
        <x-alert :error-bag="$errors" :show="$errors->any() || Arr::hasAny(session()->all(), ['success', 'error'])"></x-alert>
        {{--/ Alert messages --}}

        <div class="flex p-4 mb-4 bg-blue-100 rounded-lg items-center " role="alert">
            <div class="flex items-center text-sm font-bold">
                Finished
            </div>
            <div class="ml-3 text-sm font-bold w-96">
                Priority
            </div>
            <div class="ml-3 text-sm font-bold w-full">
                Task
            </div>

            <p class="text-sm font-bold">Action</p>
        </div>
        <form action="{{ url('/tasks') }}" method="post">
            @csrf
            <template x-for="(field, index) in fields" :key="index">

                <div class="flex p-4 mb-4 bg-blue-100 rounded-lg items-center " role="alert">
                    <div class="flex items-center">
                        <input x-if="field.logger != null" name="mark_finish[]" id="checkbox-all" x-model="field.logger.mark_finish" type="checkbox"
                            class="w-8 h-8 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500" value="1">
                        <label for="checkbox-all" class="sr-only">checkbox</label>
                    </div>
                    <div class="ml-3 text-sm font-medium text-blue-700 w-96">
                        <select name="task_label[]" x-model="field.task_label_id"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer ">
                            <option disabled>Select urgency</option>
                            <option value="1">Important and urgent</option>
                            <option value="2">Important but not urgent</option>
                            <option value="3">Not important but urgent</option>
                            <option value="4">Not important and not urgent</option>
                        </select>
                    </div>
                    <div class="ml-3 text-sm font-medium text-blue-700 w-full">
                        <input type="text" name="title[]" x-model="field.title"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder="Enter task" required />
                    </div>
                    {{-- <button type="submit"
                        class="mx-2 bg-blue-100 text-blue-500 rounded-lg focus:ring-2 focus:ring-blue-400 p-1.5 hover:bg-blue-200 inline-flex h-8 w-8 "
                        data-dismiss-target="#alert-1" aria-label="Close">
                        <span class="sr-only">Save</span>
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z">
                            </path>
                        </svg>
                    </button> --}}
                    <button @click="removeField(index)" type="button"
                        class="ml-auto -mx-1.5 -my-1.5 bg-red-100 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex h-8 w-8 ">
                        <span class="sr-only">Close</span>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>

            </template>
            <button type="button" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
            @click="addNewField()">+ Add Task</button>
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" x-bind:disabled="fields.length < 1"> Save </button>
            <p x-show="fields.length < 1" class="mt-2 text-red-600">At least one task required to save!</p>
        </form>

    </div>
</x-dash-layout>
