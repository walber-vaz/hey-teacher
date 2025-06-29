<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-form post :action="route('question.store')">
                <x-textarea label="Faça uma perguntar" name="question"/>
                <div>
                    <x-btn.primary type="submit" label="Enviar"/>
                    <x-btn.reset type="reset" label="Cancelar"/>
                </div>
            </x-form>
            <hr class="my-8 border-gray-300 dark:border-gray-700 border-dashed"/>
            @foreach($questions as $item)
                <x-question :question="$item"/>
            @endforeach
        </div>
    </div>
</x-app-layout>
