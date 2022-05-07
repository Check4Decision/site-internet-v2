@props(['icon'])

<div class="flex flex-col items-center gap-4 rounded-lg p-2">
    <div class="bg-blue-500 text-white p-2 rounded-md">
        <x-icon :name="$icon" />
    </div>
    <span class="text-center font-bold">{{ $slot }}</span>
</div>
