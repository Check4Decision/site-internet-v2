@props(['image', 'imageAlt'])

<div class="bg-white border border-gray-200 shadow-md p-5 space-y-5 rounded-md">
    <div class="flex gap-5 items-center">
        <div class="w-20 h-20 overflow-hidden rounded-full shrink-0">
            <img class="w-full h-full" src="/assets/images/{{ $image }}" alt="{{ $imageAlt }}" width="80"
                height="80" loading="lazy" decoding="async">
        </div>

        <div class="space-y-1 text-left">
            <h3 class="font-bold text-gray-800">{{ $name }}</h3>
            <h4 class="text-sm  text-gray-600">{{ $jobTitle }}</h4>
        </div>
    </div>

    <p class="font-medium text-gray-600 leading-relaxed">
        {{ $slot }}
    </p>
</div>
