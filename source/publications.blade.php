@extends('_layouts.main')

@section('title', 'Publications')

@section('main')
    <section class="px-5 py-20 md:px-10">
        <div class="max-w-7xl mx-10 xl:mx-auto space-y-12">
            <x-section-title>
                Publications scientifiques
            </x-section-title>

            <ul class="divide-y-2 divide-gray-200">
                @foreach ($publications as $publication)
                    <li class="py-4 font-medium text-gray-800">
                        <!-- Remove p tags -->
                        {{ \Illuminate\Support\Str::between($publication->getContent(), '<p>', '</p>') }}
                    </li>
                @endforeach
            </ul>
        </div>
    </section>
@endsection
