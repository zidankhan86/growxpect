@extends('frontend.layouts.master')

@push('style')
<style>
    @keyframes classSlideIn {
        from { opacity: 0; transform: translateY(28px) scale(0.96); }
        to   { opacity: 1; transform: translateY(0)   scale(1);    }
    }
    .class-card.class-animate-in {
        animation: classSlideIn 0.45s ease forwards;
    }
    /* See-more text */
    .see-more-wrapper {
        text-align: center;
        margin-top: 1.5rem;
    }
    .see-more-text {
        display: inline-block;
        color: #f0137a;
        font-size: 0.88rem;
        letter-spacing: 0.18em;
        cursor: pointer;
        user-select: none;
        transition: color 0.3s ease, letter-spacing 0.3s ease, opacity 0.3s ease;
        font-family: 'Hind Siliguri', sans-serif;
        font-weight: 600;
    }
    .see-more-text:hover {
        color: #ff6aab;
        letter-spacing: 0.26em;
    }
    /* fade-out the wrapper on collapse */
    .see-more-wrapper.fade-out {
        animation: smFadeOut 0.35s ease forwards;
    }
    @keyframes smFadeOut {
        to { opacity: 0; height: 0; margin: 0; overflow: hidden; }
    }
    /* See-more spinner */
    .see-more-spinner {
        width: 34px;
        height: 34px;
        border: 3px solid rgba(255,255,255,0.12);
        border-top-color: #f0137a;
        border-radius: 50%;
        animation: seeMoreSpin 1s linear infinite;
        display: inline-block;
        vertical-align: middle;
        margin-left: 0.8rem;
    }
    @keyframes seeMoreSpin { to { transform: rotate(360deg); } }
    .see-more-text.disabled { opacity: 0.5; pointer-events: none; }
</style>
@endpush

@section('content')
    <div class="text-gray-100 lg:mb-12">
        <div class="w-full max-w-6xl mx-auto px-4 pt-8">
            <!-- Header -->
            <div class="flex justify-between items-center mb-8">
                <h1 class="text-3xl font-bold">ড্যাশবোর্ড</h1>
                <span class="text-gray-400">স্বাগতম{{ $user->name ? ', '.$user->name : (auth()->user()->name ? ', '.auth()->user()->name : '') }}</span>
            </div>

            <div class="grid lg:grid-cols-4 gap-6">
                <!-- Sidebar -->
                <div class="lg:col-span-1 bg-[#0c0c0c] rounded-lg p-4 space-y-2 self-start">
                    <h2 class="text-xl font-semibold mb-4">ড্যাশবোর্ড মেনু</h2>
                    @include('user.sidebar')
                </div>

                <!-- Main Content -->
                <div class="lg:col-span-3 space-y-5">

                    <!-- ── Profile Card ── -->
                    <div class="bg-[#080808] rounded-lg p-6">
                        <div class="flex items-center space-x-4">

                            <img src="{{ getPhoto($user->image) }}" alt="{{ $user->name }}"
                                 class="w-16 md:w-20 h-16 md:h-20 rounded-full border-2 border-gray-600 object-cover">
                            <div>
                                <h3 class="text-lg md:text-2xl font-semibold">{{ $user->name }}</h3>
                                <p class="text-gray-400">{{ $user->email }}</p>
                                <p class="text-gray-400">যোগদান: {{ $user->created_at->format('d M, Y') }}</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection

@push('script')
    <script>
        function playVideo(thumbWrapper) {
            var container = thumbWrapper.parentElement;
            var embedUrl  = container.getAttribute('data-embed');
            if (!embedUrl) return;

            var iframe = document.createElement('iframe');
            iframe.setAttribute('src', embedUrl + '&autoplay=1');
            iframe.setAttribute('frameborder', '0');
            iframe.setAttribute('allow', 'accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture');
            iframe.setAttribute('allowfullscreen', '');
            iframe.style.cssText = 'position:absolute;top:0;left:0;width:100%;height:100%;';
            container.innerHTML = '';
            container.appendChild(iframe);
        }

        function showAllClasses() {
            if (window.seeMoreInProgress) return;

            var extrasSelector = '.extra-class';
            var wrapper = document.getElementById('see-more-wrapper');
            var text = document.getElementById('see-more-text');
            var spinner = document.getElementById('see-more-spinner');

            var extras = Array.from(document.querySelectorAll(extrasSelector));
            if (!extras.length) {
                if (wrapper) {
                    wrapper.classList.add('fade-out');
                    setTimeout(function () { wrapper.remove(); }, 380);
                }
                return;
            }

            var hidden = extras.filter(function (el) {
                return el.style.display === 'none' || window.getComputedStyle(el).display === 'none';
            });

            if (!hidden.length) {
                if (wrapper) {
                    wrapper.classList.add('fade-out');
                    setTimeout(function () { wrapper.remove(); }, 380);
                }
                return;
            }

            // Show spinner and disable button
            window.seeMoreInProgress = true;
            if (text) {
                text.dataset.origText = text.textContent;
                text.textContent = 'লোড হচ্ছে...';
                text.classList.add('disabled');
                text.setAttribute('aria-busy', 'true');
            }
            if (spinner) spinner.style.display = '';

            var delay = 1000; // 1 second
            setTimeout(function () {
                // Re-evaluate hidden elements
                var extrasNow = Array.from(document.querySelectorAll(extrasSelector));
                var hiddenNow = extrasNow.filter(function (el) {
                    return el.style.display === 'none' || window.getComputedStyle(el).display === 'none';
                });

                if (!hiddenNow.length) {
                    if (wrapper) {
                        wrapper.classList.add('fade-out');
                        setTimeout(function () { wrapper.remove(); }, 380);
                    }
                    if (text) {
                        text.textContent = text.dataset.origText || '';
                        text.classList.remove('disabled');
                        text.removeAttribute('aria-busy');
                    }
                    if (spinner) spinner.style.display = 'none';
                    window.seeMoreInProgress = false;
                    return;
                }

                var toShow = hiddenNow.slice(0, 4);
                toShow.forEach(function (el, i) {
                    el.style.display = '';
                    el.style.animationDelay = (i * 0.12) + 's';
                    el.classList.add('class-animate-in');
                    el.classList.remove('extra-class');
                });

                var remaining = hiddenNow.length - toShow.length;
                if (remaining <= 0) {
                    if (wrapper) {
                        wrapper.classList.add('fade-out');
                        setTimeout(function () { wrapper.remove(); }, 380);
                    }
                } else {
                    if (text) {
                        text.textContent = '.......... আরও ' + Math.min(remaining, 4) + 'টি ক্লাস দেখুন';
                    }
                }

                if (spinner) spinner.style.display = 'none';
                if (text) {
                    text.classList.remove('disabled');
                    text.removeAttribute('aria-busy');
                }

                window.seeMoreInProgress = false;
            }, delay);
        }
    </script>
@endpush
