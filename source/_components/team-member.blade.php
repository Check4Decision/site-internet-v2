@props(['image', 'imageAlt', 'imageScale', 'imageTranslate'])

<div class="bg-gray-100 p-8 space-y-5 rounded-lg w-80 flex-shrink-0">
    <div class="flex gap-4 items-center">
        <div class="w-20 h-20 overflow-hidden rounded-full">
            <img class="w-full h-full transform {{ $imageTranslate }}"
                style="--tw-scale-x: {{ $imageScale }}; --tw-scale-y: {{ $imageScale }};"
                src="/assets/images/{{ $image }}" alt="{{ $imageAlt }}">
        </div>

        <div class="space-y-1 text-left">
            <h3 class="text-sm font-bold">{{ $name }}</h3>
            <h4 class="text-sm text-gray-500">{{ $jobTitle }}</h4>
        </div>
    </div>

    <p class="text-sm leading-relaxed tracking-wide text-left">
        {{ $slot }}
    </p>
</div>
