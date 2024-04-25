<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form action="{{route('question.store')}}" method="post">
                @csrf
                <div class="mb-4">
                    <label
                        for="question"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                    >
                        Question
                    </label>
                    <textarea
                        name="question"
                        id="question"
                        rows="3"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Leave a comment..."
                    >
                        {{ old('question') }}
                    </textarea>
                    @error('question')
                    <span class="text-red-400">{{ $message }}</span>
                    @enderror
                </div>
                <button
                    type="submit"
                    class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"
                >
                    Save
                </button>

            </form>
        </div>
    </div>
</x-app-layout>
