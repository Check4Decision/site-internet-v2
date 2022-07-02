@props(['stagiaires'])

<div class="team-carousel max-w-[85rem] mx-auto">
    @foreach ($stagiaires as $stagiaire)
        <x-stagiaire :image="$stagiaire->image" :image-alt="$stagiaire->image_alt" :image-scale="$stagiaire->image_scale" :image-translate="$stagiaire->image_translate">
            <x-slot name="name">
                {{ $stagiaire->name }}
            </x-slot>
            <x-slot name="jobTitle">
                {{ $stagiaire->job_title }}
            </x-slot>

            <!-- Remove p tags -->
            {{ \Illuminate\Support\Str::between($stagiaire->getContent(), '<p>', '</p>') }}
        </x-stagiaire>
    @endforeach
</div>

<!-- Carousel arrows -->
<div class="carousel-arrows w-24 h-24 max-w-[85rem] relative mx-auto"></div>
