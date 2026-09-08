@extends('frontend.layouts.master')
@section('seo')
    <title>{{ $title ?? config('app.name') }}</title>
    <meta name="description" content="{{ $og_description ?? '' }}">
    <meta name="keywords" content="{{ $meta_keywords ?? '' }}">
    <meta property="og:title" content="{{ $og_title ?? '' }}">
    <meta property="og:description" content="{{ $og_description ?? '' }}">
    <meta property="og:image" content="{{ asset($og_image ?? '') }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">
@endsection
@section('content')
    <section class="pt-32 pb-20 bg-gradient-to-b from-muted/10 to-background relative overflow-hidden">
        <div class="absolute inset-0 opacity-30">
            <div class="absolute top-20 left-10 w-72 h-72 bg-primary/10 rounded-full blur-3xl"></div>
            <div class="absolute bottom-10 right-10 w-96 h-96 bg-primary/5 rounded-full blur-3xl"></div>
        </div>
        <div class="container mx-auto px-6 relative">
            <div class="max-w-4xl mx-auto text-center">
                <div
                    class="inline-flex items-center gap-2 bg-primary/10 text-primary px-4 py-2 rounded-full text-sm font-medium mb-6">
                    What We Offer
                </div>
                <h1 class="text-2xl md:text-3xl xl:text-5xl font-bold text-foreground mb-6 leading-tight">Our Services</h1>
                <p class="text-muted-foreground text-lg">
                    We offer a comprehensive range of digital services to help your
                    business thrive in the modern world.
                </p>
            </div>
        </div>
    </section>
    <section id="services" class="relative scroll-mt-25 overflow-hidden pt-12 pb-16">
        <div class="bg-mesh absolute inset-0 opacity-50"></div>
        <div class="relative z-10 container">


            <!-- Services Grid -->
            <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">


               @foreach($services as $index => $service)
                <div class="group glass-card service-card hover-lift" style="animation-delay: {{ $index * 0.1 }}s">

                    {{-- Background gradient --}}
                    <div class="service-card-bg group-hover:opacity-100"
                        style="background: linear-gradient(135deg, rgba(0, 214, 164, 0.1) 0%, rgba(166, 77, 255, 0.1) 100%);">
                    </div>

                    {{-- Service Icon --}}
                    <div class="service-icon">
                        @if($service->icon)
                            <i class="{{ $service->icon }} text-primary h-7 w-7"></i>
                        @else
                            {{-- Default icon if none set --}}
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                 stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-code-xml text-primary h-7 w-7">
                                <path d="m18 16 4-4-4-4"></path>
                                <path d="m6 8-4 4 4 4"></path>
                                <path d="m14.5 4-5 16"></path>
                            </svg>
                        @endif
                    </div>

                    {{-- Service Title --}}
                    <h3 class="service-title">{{ $service->title }}</h3>

                    {{-- Short Description --}}
                    <p class="service-desc">
                        {!! nl2br(e($service->short_description)) !!}
                    </p>
                </div>
               @endforeach



            </div>
        </div>
    </section>
@endsection
