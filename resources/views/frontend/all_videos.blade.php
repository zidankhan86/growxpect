@extends('frontend.layouts.master')

@section('content')
    <nav class=" bg-black/80 backdrop-blur-md border-b border-white/10">
        <div class="max-w-7xl mx-auto px-6 h-14 flex items-center justify-between">
            <a href="{{ route('home') }}" class="nav-link text-[#ccc]">
                ← Back
            </a>
        </div>
    </nav>

    <div class="bg-black py-12 text-white selection:bg-white/10">

        <section class="pb-12 flex items-center justify-center px-4 reveal">
            <div class="text-center space-y-8">
                <p class="font-display text-2xl font-light font-playfair tracking-wide">
                    Reflections
                </p>
                <p class="font-display text-3xl md:text-5xl lg:text-6xl font-light font-playfair tracking-wide">
                    Moments that stayed.
                </p>
            </div>
        </section>

        <section class="">
            <div class="container mx-auto">

                <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-10">

                    @for ($i = 0; $i < 3; $i++)
                        <!-- Card 1 -->
                        <div class="group reveal" data-aos="fade-up" data-aos-duration="800">
                            <a href="{{ route('reflection.detials', 1) }}" class="block">

                                <div
                                    class="relative aspect-video rounded-xl overflow-hidden bg-[#111] shadow-lg shadow-black/40">

                                    <iframe
                                        class="absolute top-1/2 left-1/2 w-[130%] h-[130%] -translate-x-1/2 -translate-y-1/2"
                                        src="https://www.youtube.com/embed/1Fz7Qg0r5qU?si=X74AqdxQpq09NhMi=1&mute=1&controls=0&modestbranding=1&rel=0&iv_load_policy=3&playsinline=1&showinfo=0"
                                        title="YouTube video player" frameborder="0" allow="autoplay; encrypted-media"
                                        allowfullscreen>
                                    </iframe>
                                </div>

                                <div class="mt-5 space-y-3">
                                    <h3 class="text-lg font-light text-[#ddd] group-hover:text-white transition">
                                        The Night I Chose Honesty Over Comfort
                                    </h3>
                                    <p class="text-[18px] text-[#777] group-hover:text-[#aaa] transition">
                                        When everyone looked away, I found the courage to speak up — and it changed
                                        everything.
                                    </p>
                                </div>

                            </a>
                        </div>

                        <!-- Card 2 -->
                        <div class="group reveal" data-aos="fade-up" data-aos-duration="800">
                            <a href="{{ route('reflection.detials', 1) }}" class="block">

                                <div
                                    class="relative aspect-video rounded-xl overflow-hidden bg-[#111] shadow-lg shadow-black/40">
                                    <iframe
                                        class="absolute top-1/2 left-1/2 w-[130%] h-[130%] -translate-x-1/2 -translate-y-1/2"
                                        src="https://www.youtube.com/embed/upwFLq7KOv8?si=X74AqdxQpq09NhMi=1&mute=1&controls=0&modestbranding=1&rel=0&iv_load_policy=3&playsinline=1&showinfo=0"
                                        title="YouTube video player" frameborder="0" allow="autoplay; encrypted-media"
                                        allowfullscreen>
                                    </iframe>

                                </div>

                                <div class="mt-5 space-y-3">
                                    <h3 class="text-lg font-light text-[#ddd] group-hover:text-white transition">
                                        Leading When Nobody Believed
                                    </h3>
                                    <p class="text-[18px] text-[#777] group-hover:text-[#aaa] transition">
                                        A story of standing firm in conviction when the crowd chose silence.
                                    </p>
                                </div>

                            </a>
                        </div>

                        <!-- Card 3 -->
                        <div class="group reveal" data-aos="fade-up" data-aos-duration="800">
                            <a href="{{ route('reflection.detials', 1) }}" class="block">

                                <div
                                    class="relative aspect-video rounded-xl overflow-hidden bg-[#111] shadow-lg shadow-black/40">
                                    <iframe
                                        class="absolute top-1/2 left-1/2 w-[130%] h-[130%] -translate-x-1/2 -translate-y-1/2"
                                        src="https://www.youtube.com/embed/upwFLq7KOv8?si=X74AqdxQpq09NhMi=1&mute=1&controls=0&modestbranding=1&rel=0&iv_load_policy=3&playsinline=1&showinfo=0"
                                        title="YouTube video player" frameborder="0" allow="autoplay; encrypted-media"
                                        allowfullscreen>
                                    </iframe>


                                </div>

                                <div class="mt-5 space-y-3">
                                    <h3 class="text-lg font-light text-[#ddd] group-hover:text-white transition">
                                        Sixty Years of Keeping a Promise
                                    </h3>
                                    <p class="text-[18px] text-[#777] group-hover:text-[#aaa] transition">
                                        A lifetime of integrity, told through the eyes of a grandfather.
                                    </p>
                                </div>

                            </a>
                        </div>
                    @endfor

                </div>

            </div>
        </section>
    </div>
@endsection
@push('script')
    <script>
        AOS.init({
            once: true,
            offset: 100,
        });
    </script>
@endpush
