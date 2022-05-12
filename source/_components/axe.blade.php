@props(['icon'])

<div class="flex items-start gap-4">
    <div class="bg-cyan-700 text-white p-2 rounded-md">
        <x-icon :name="$icon" class="w-10 h-10" />
    </div>

    <div class="space-y-2">
        <h3 class="text-lg font-black tracking-wide text-left text-white">
            {{ $title }}
        </h3>
        <p class="text-left text-sm font-light text-white leading-loose tracking-wider">
            {{ $slot }}
        </p>
    </div>
</div>
