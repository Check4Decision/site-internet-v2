@props(['isActive' => false])
@aware(['withBgImage'])

@php
$normalStateClasses = $withBgImage ? 'sm:text-gray-300/90' : 'sm:text-gray-700';
$activeStateClasses = $withBgImage ? 'sm:bg-sky-600/25 sm:text-sky-400' : 'sm:bg-sky-600/10 sm:text-sky-700';
$hoverStateClasses = $withBgImage ? 'sm:hover:bg-sky-600/25 sm:hover:text-sky-400' : 'sm:hover:bg-sky-600/10 sm:hover:text-sky-700';
@endphp

<a {{ $attributes }} @class([
    "text-white {$normalStateClasses}" => !$isActive,
    "text-white underline decoration-white decoration-2 underline-offset-4 sm:no-underline {$activeStateClasses} sm:bg-sky-600/25 sm:text-sky-400" => $isActive,
    "tracking-wider font-semibold sm:p-2 sm:rounded-md {$hoverStateClasses}",
])>
    {{ $slot }}
</a>
