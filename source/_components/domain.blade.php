@props(['icon'])

<div class="flex flex-col items-center gap-3">
    <div class="border-2 border-sky-700 text-sky-700 px-1 py-2 rounded-md" aria-hidden="true">
        <x-icons :name="$icon" class="w-10 h-10" stroke-width="1.25" />
    </div>
    <span class="text-center text-base text-black font-bold">
        {{ $slot }}
    </span>
</div>
