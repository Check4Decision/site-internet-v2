@extends('_layouts.main')

@section('title', 'Publications')

@section('main')
    <section class="px-5 py-20 md:px-10">
        <div class="max-w-7xl mx-10 xl:mx-auto space-y-12">
            <h2 class="text-4xl text-center font-bold sm:text-5xl">Publications scientifiques </h2>

            <ul class="divide-y-2 divide-gray-100">
                @foreach ($publications as $publication)
                    <li class="py-4 text-gray-900">
                        <!-- Remove p tags -->
                        {{ \Illuminate\Support\Str::between($publication->getContent(), '<p>', '</p>') }}
                    </li>
                @endforeach
            </ul>
        </div>
    </section>
@endsection
