@extends('_layouts.main')

@section('title', 'Publications')

@section('main')
    <section class="py-10">
        <div class="mx-10 xl:mx-auto space-y-12" style="max-width: 80rem;">
            <h2 class="text-4xl sm:text-5xl font-koulen text-sky-900 text-center">Publications scientifiques </h2>

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
