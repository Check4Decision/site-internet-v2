@props(['icon'])

<div class="text-center md:text-left space-y-5">
    <div class="inline-block border-2 border-white text-white p-2 rounded-md" aria-hidden="true">
        <x-icons :name="$icon" class="w-10 h-10" stroke-width="1.25" />
    </div>

    <div class="space-y-5">
        <h3 class="text-xl text-white font-bold">
            {{ $title }}}
        </h3>
        <p class="text-white font-medium leading-loose tracking-wider">
            {{ $slot }}
        </p>
    </div>
</div>
