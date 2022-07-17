@props(['icon'])

<div class="text-center md:text-left space-y-5">
    <div class="inline-block bg-sky-600/70 text-white p-2 rounded-md shadow-md" aria-hidden="true">
        <x-icons :name="$icon" class="w-12 h-12" stroke-width="1.5" />
    </div>

    <div>
        <h3 class="text-gray-800 font-bold">
            {{ $title }}}
        </h3>
        <p class="text-gray-600 font-medium mt-2 leading-loose">
            {{ $slot }}
        </p>
    </div>
</div>
