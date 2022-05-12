@props(['icon'])

<div class="flex flex-col items-center gap-4 rounded-lg p-2">
    <div class="p-2 rounded-md text-sky-700">
        <x-icon :name="$icon" class="w-10 h-10" />
    </div>
    <span class="text-center text-sky-900 font-light tracking-wider">{{ $slot }}</span>
</div>
