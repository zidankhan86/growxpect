@extends('frontend.layouts.master')

@section('content')
    <section class="py-4 md:py-8 px-4">

        <div class="max-w-5xl mx-auto">

            <!-- Card Container -->
            <div class="bg-[#090909] rounded-2xl  p-6 md:p-10">

                <!-- Title -->
                <h1 class="text-2xl  font-bold text-white mb-4 leading-snug">
                    {{ $data->title }}
                </h1>

                <!-- Content -->
                <div class="text-white">
                    {!! $data->body !!}
                </div>

            </div>

        </div>

    </section>
@endsection
