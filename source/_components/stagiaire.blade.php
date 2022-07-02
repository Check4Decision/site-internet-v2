@props(['image', 'imageAlt', 'imageScale', 'imageTranslate'])

<div class="w-72 bg-transparent ring-2 ring-gray-300 p-5 m-2 space-y-5 rounded-lg">
    <div class="flex flex-col gap-5 items-center">
        <div class="w-20 h-20 overflow-hidden rounded-full shrink-0">
            <img class="w-full h-full transform {{ $imageTranslate }}"
                style="--tw-scale-x: {{ $imageScale }}; --tw-scale-y: {{ $imageScale }};"
                src="/assets/images/{{ $image }}" alt="{{ $imageAlt }}">
        </div>

        <div class="space-y-1 text-left">
            <h3 class="text-sm text-white font-semibold tracking-wider">{{ $name }}</h3>
            <!-- <h4 class="text-sm text-white font-light">{{ $jobTitle }}</h4> -->
        </div>
    </div>

    <p class="text-sm text-white font-medium leading-relaxed tracking-wider">
        {{ $slot }}
    </p>
</div>
