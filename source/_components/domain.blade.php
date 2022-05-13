@props(['icon'])

<div class="flex flex-col items-center gap-4 p-2 bg-white border border-gray-300 shadow-sm rounded-lg">
    <div class="p-2 rounded-md text-sky-700">
        <x-icon :name="$icon" class="w-10 h-10" />
    </div>
    <span class="text-center text-sky-900 font-light tracking-wider">{{ $slot }}</span>
</div>
