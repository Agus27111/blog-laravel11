@props(['active'])

<a {{ $attributes->merge(['class' => 'text-white ' . ($active ? 'bg-gray-900' : 'text-gray-300 hover:bg-gray-700 hover:text-white') . ' rounded-md px-2 py-1 text-sm font-medium']) }} aria-current="{{ $active ? 'page' : false }}">
    {{ $slot }}
</a>
