@extends('_layouts.main')

@section('title', 'Publications')

@section('main')
    <section class="text-center pt-10 pb-20">
        <div class="mx-auto space-y-24" style="max-width: 50rem;">
            <h2 class="text-4xl sm:text-5xl font-koulen text-sky-900">Publications scientifiques</h2>

            <div class="grid grid-cols-2 place-items-center gap-6 sm:grid-cols-4">
                <img class="w-28 h-28" src="/assets/images/ut.png" alt="Logo Université de Thiès">
                <img class="w-28 h-28" src="/assets/images/utt.png" alt="Logo Université de Technologie de Troyes">
                <img class="w-28 h-28" src="/assets/images/ceamitic.png" alt="Logo CEA-MITIC">
                <img class="w-28 h-28" src="/assets/images/ucao.png"
                    alt="Logo Université Catholique de l'Afrique de l'Ouest">
            </div>
        </div>
    </section>
@endsection
