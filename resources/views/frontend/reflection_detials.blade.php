@extends('frontend.layouts.master')

@section('content')
    <nav class=" bg-black/80 backdrop-blur-md border-b border-white/10">
        <div class="max-w-7xl mx-auto px-6 h-14 flex items-center justify-between">
            <a href="{{ route('home') }}" class="nav-link text-[#ccc]">
                ← Back
            </a>
        </div>
    </nav>

    <div class="bg-black text-white selection:bg-white/10">

        <section class="py-16 flex items-center justify-center px-4">
            <div class="w-full max-w-4xl">

                <div class="relative rounded-xl overflow-hidden bg-black shadow-xl shadow-black/50">
                    <iframe class="w-full h-full aspect-video"
                        src="https://www.youtube.com/embed/1Fz7Qg0r5qU?rel=0&vq=hd1080">
                    </iframe>
                </div>

            </div>
        </section>
        <section class="px-4 pb-16">
            <div class="max-w-2xl mx-auto">

                <p class="text-[#ccc] leading-relaxed text-lg space-y-6">
                    There was a moment when speaking up felt unnecessary.
                    Everyone else stayed silent.

                    It would have been easier to do the same.

                    But something didn’t sit right.

                    And even now —
                    it’s that moment that stays.
                </p>

            </div>
        </section>
        <section class="text-center py-20">
            <p class="text-xl text-white font-light">
                Some choices stay with you.
            </p>
        </section>

        <section class="text-center pb-24">
            <div class="space-y-6">

                <p class="text-lg text-[#ccc]">
                    Tell us about one.
                </p>

                <a href="{{route('share.reflection')}}"
                    class="inline-block text-sm text-white border border-white/20 px-6 py-3 rounded-full hover:bg-white hover:text-black transition">
                   Share your reflection
                </a>

            </div>
        </section>
    </div> 
@endsection
