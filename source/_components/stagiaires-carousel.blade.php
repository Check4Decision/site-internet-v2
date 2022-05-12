@props(['stagiaires'])

<div class="space-y-5 mt-20" x-data="{
    gapSize: 1.25, // gap-5
    itemSize: 21.25, // 20rem (size of an itemP: w-80) + gapSize
    scrollLeft: 0,
    nbItems: @js($stagiaires->count()),
    currentItem: 1,
    minScreenWidths: {
        'md': 768, // tailwindcss md breakpoint value in px
    },
    get nbItemsShown() {
        const windowWidth = window.innerWidth;

        switch (true) {
            case (windowWidth < this.minScreenWidths['md']):
                return 1;
            default:
                return 2;
        }
    },
    get scrollWidth() {
        const windowWidth = window.innerWidth;

        switch (true) {
            case (windowWidth < this.minScreenWidths['md']):
                return this.itemSize;
            default:
                return this.itemSize * 2;
        }
    }
}">
    <div class="overflow-x-hidden w-84 mx-auto md:w-169 px-2">
        <div class="flex flex-nowrap transition-transform duration-500"
            x-bind:style="{ gap: `${gapSize}rem`, 'transform': `translateX(${scrollLeft}rem)` }">
            @foreach ($stagiaires as $stagiaire)
                <x-team-member :image="$stagiaire->image" :image-alt="$stagiaire->image_alt" :image-scale="$stagiaire->image_scale" :image-translate="$stagiaire->image_translate">
                    <x-slot name="name">
                        {{ $stagiaire->name }}
                    </x-slot>
                    <x-slot name="jobTitle">
                        {{ $stagiaire->job_title }}
                    </x-slot>

                    <!-- Remove p tags -->
                    {{ \Illuminate\Support\Str::between($stagiaire->getContent(), '<p>', '</p>') }}
                </x-team-member>
            @endforeach
        </div>
    </div>

    <!-- Previous button -->
    <div class="space-x-3">
        <button class="rounded-full p-3 bg-white" x-on:click="scrollLeft += scrollWidth; currentItem -= nbItemsShown;"
            x-bind:disabled="currentItem === 1"
            x-bind:class="{ 'text-cyan-800': (currentItem > 1), 'text-gray-300': (currentItem === 1) }">
            <x-icon name="arrow-narrow-left" class="w-5 h-5" />
        </button>

        <!-- Next button -->
        <button class="rounded-full bg-white  p-3" x-on:click="scrollLeft -= scrollWidth; currentItem += nbItemsShown;"
            x-bind:disabled="(currentItem + nbItemsShown) > nbItems"
            x-bind:class="{
                'text-cyan-800': ((currentItem + nbItemsShown) <= nbItems),
                'text-gray-300': ((currentItem + nbItemsShown) > nbItems)
            }">
            <x-icon name="arrow-narrow-right" class="w-5 h-5" />
        </button>
    </div>
</div>
