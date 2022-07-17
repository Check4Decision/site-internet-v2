@props(['image', 'imageAlt'])

<div
    class="w-72 bg-gradient-to-br from-white via-gray-100 to-white p-5 m-2 space-y-5 border border-gray-200 shadow-md rounded-md">
    <div class="flex flex-col gap-5 items-center">
        <div class="w-20 h-20 overflow-hidden rounded-full shrink-0">
            <img class="w-full h-full" src="/assets/images/{{ $image }}" alt="{{ $imageAlt }}" width="80"
                height="80" loading="lazy" decoding="async">
        </div>

        <div class="space-y-1 text-left">
            <h3 class="text-gray-800 font-bold">{{ $name }}</h3>
            <!-- <h4 class="text-sm text-white font-light">{{ $jobTitle }}</h4> -->
        </div>
    </div>

    <p class="text-gray-600 font-medium leading-relaxed">
        {{ $slot }}
    </p>
</div>
