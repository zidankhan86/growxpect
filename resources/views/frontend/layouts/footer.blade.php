@php
    $footerData = \App\Models\HomepageContent::section('footer');
@endphp

<footer class="relative bg-background py-20 sm:py-32 px-4 border-t border-border/30">

    <div class="max-w-4xl mx-auto text-center">

        <div style="opacity: 1;">

            <!-- Main Text -->
            <p class="font-display text-xl sm:text-3xl text-white italic">
                Every story matters.
            </p>

            <!-- Divider + Caption -->
            <div class="mt-10 flex items-center justify-center gap-8">

                <div class="w-8 h-px bg-border"></div>

                <p class="font-body text-[10px] tracking-[0.4em] font-inter uppercase text-white">
                    An interactive emotional experience
                </p>

                <div class="w-8 h-px bg-border"></div>

            </div>

        </div>

    </div>

</footer>