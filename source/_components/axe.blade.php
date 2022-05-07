@props(['icon'])

<article class="flex items-start gap-4">
    <div class="bg-blue-500 text-white p-2 rounded-md">
        <x-icon :name="$icon" />
    </div>

    <div class="space-y-2">
        <h3 class="text-lg font-bold text-left">
            {{ $title }}
        </h3>
        <p class="text-left text-sm text-gray-600 leading-loose tracking-wider">
            {{ $slot }}
        </p>
    </div>
</article>
