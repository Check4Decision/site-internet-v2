@props(['isActive' => false])

<a {{ $attributes }} @class([
    'text-white sm:text-gray-800' => !$isActive,
    'text-white underline decoration-white decoration-2 underline-offset-4 sm:text-sky-900 sm:no-underline' => $isActive,
    'tracking-wider font-semibold sm:hover:text-sky-900',
])>
    {{ $slot }}
</a>
