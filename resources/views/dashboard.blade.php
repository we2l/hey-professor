<x-app-layout>
    <x-slot name="header">
        <x-header>
            {{ __('Dashboard') }}
        </x-header>
    </x-slot>
    <x-container>
        <x-form post action="question.store">

            <x-textarea label="Question" name="question">

            </x-textarea>

            <x-button type="submit">
                Save
            </x-button>

        </x-form>

        <hr class="border-gray-700 border-dashed mt-4">

        <div class="dark:text-gray-400 space-y-4">
            @foreach($questions as $item)
                <x-question
                    :question="$item->question"
                />
            @endforeach
        </div>

    </x-container>

</x-app-layout>
