@props(['isActive' => false])

<a {{ $attributes }} @class([
    'text-white sm:text-gray-700' => !$isActive,
    'text-white underline decoration-white decoration-2 underline-offset-4 sm:no-underline sm:bg-sky-600/10 sm:text-sky-700' => $isActive,
    'tracking-wider font-semibold sm:p-2 sm:rounded-md sm:hover:bg-sky-600/10 sm:hover:text-sky-700',
])>
    {{ $slot }}
</a>
