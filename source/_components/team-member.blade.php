@props(['image', 'imageAlt', 'imageScale', 'imageTranslate'])

<div class="bg-white border border-gray-300 shadow-sm p-8 space-y-5 rounded-lg w-80 flex-shrink-0">
    <div class="flex gap-4 items-center">
        <div class="w-20 h-20 overflow-hidden rounded-full shrink-0">
            <img class="w-full h-full transform {{ $imageTranslate }}" style="--tw-scale-x: {{ $imageScale }}; --tw-scale-y: {{ $imageScale }};" src="/assets/images/{{ $image }}" alt="{{ $imageAlt }}">
        </div>

        <div class="space-y-1 text-left">
            <h3 class="text-black tracking-wider">{{ $name }}</h3>
            <h4 class="text-sm font-light text-gray-700">{{ $jobTitle }}</h4>
        </div>
    </div>

    <p class="text-sm leading-relaxed tracking-wider text-left font-light text-gray-900">
        {{ $slot }}
    </p>
</div>
