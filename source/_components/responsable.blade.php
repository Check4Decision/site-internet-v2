@props(['image', 'imageAlt', 'imageScale', 'imageTranslate'])

<div class="p-5 space-y-5">
    <div class="flex gap-5 items-center">
        <div class="w-20 h-20 overflow-hidden rounded-full shrink-0">
            <img class="w-full h-full transform {{ $imageTranslate }}"
                style="--tw-scale-x: {{ $imageScale }}; --tw-scale-y: {{ $imageScale }};"
                src="/assets/images/{{ $image }}" alt="{{ $imageAlt }}">
        </div>

        <div class="space-y-1 text-left">
            <h3 class="font-semibold tracking-wider">{{ $name }}</h3>
            <h4 class="text-sm text-gray-600">{{ $jobTitle }}</h4>
        </div>
    </div>

    <p class="leading-relaxed tracking-wide">
        {{ $slot }}
    </p>
</div>
