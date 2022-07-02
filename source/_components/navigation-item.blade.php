@props(['isActive' => false])

<a {{ $attributes }} @class([
    'text-gray-800' => !$isActive,
    'text-sky-900' => $isActive,
    'tracking-wider font-semibold hover:text-sky-900',
])>
    {{ $slot }}
</a>
