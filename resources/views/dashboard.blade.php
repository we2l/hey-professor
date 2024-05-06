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
    </x-container>

</x-app-layout>
