@props(['label', 'name'])

<label
    for="question"
    class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">
    {{ $label }} <span class="text-red-500">*</span>
</label>
<textarea
    name="{{ $name }}"
    placeholder="Digite sua pergunta aqui..."
    id="{{ $name }}"
    rows="4"
    class="block p-2.5 w-full text-sm resize-none text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
>{{ old($name) }}</textarea>
@error($name)
<span class="text-red-500 text-sm">{{ $message }}</span>
@enderror
