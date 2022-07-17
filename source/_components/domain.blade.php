@props(['icon'])

<div class="flex flex-col items-center gap-3">
    <div class="bg-sky-600/70 text-white p-2 rounded-md shadow-md" aria-hidden="true">
        <x-icons :name="$icon" class="w-12 h-12" stroke-width="1.5" />
    </div>
    <span class="text-center text-gray-800 font-bold">
        {{ $slot }}
    </span>
</div>
