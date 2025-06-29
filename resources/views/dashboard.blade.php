<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form class="w-full flex flex-col gap-4" action="{{ route('question.store')  }}" method="POST">
                @csrf
                <label
                    for="question"
                    class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">
                    Faça uma pergunta <span class="text-red-500">*</span>
                </label>
                <textarea
                    name="question"
                    placeholder="Digite sua pergunta aqui..."
                    id="question"
                    rows="4"
                    class="block p-2.5 w-full text-sm resize-none text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                >{{ old('question') }}</textarea>
                @error('question')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
                <div>
                    <button
                        type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 w-fit hover:cursor-pointer">
                        Enviar Pergunta
                    </button>
                    <button
                        type="reset"
                        class="py-2.5 hover:cursor-pointer px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700"
                    >
                        Cancelar
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
