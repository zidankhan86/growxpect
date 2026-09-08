@extends('frontend.layouts.master')

@section('content')
    <main id="story-container" aria-label="Integrity reflection story">
        <section class="story-section story-section--text">
            <div class="story-content active">
                <h2 class="story-title">When no one's watching...</h2>
            </div>
        </section>

        <section class="story-section story-section--text">
            <div class="story-content">
                <h2 class="story-title">Who are you?</h2>
            </div>
        </section>

        <section class="story-section story-section--text">
            <div class="story-content">
                <h2 class="story-title">The moment didn't seem important.</h2>
            </div>
        </section>

        <section class="story-section story-section--text">
            <div class="story-content">
                <h2 class="story-title">Until it stayed with you.</h2>
            </div>
        </section>

        <section class="story-section story-section--video">
            <div class="story-content video-content">
                <div class="video-wrapper aspect-video bg-black" role="button" tabindex="0" aria-label="Play full video">
                    <iframe
                        class="w-full h-full"
                        data-video-id="a17AUmx3CkA"
                        title="Integrity reflection video"
                        allow="autoplay; encrypted-media; picture-in-picture"
                        allowfullscreen
                        loading="eager">
                    </iframe>
                </div>
            </div>
        </section>

        <section class="story-section story-section--text">
            <div class="story-content">
                <h2 class="story-title">Not the moments you talk about.</h2>
            </div>
        </section>

        <section class="story-section story-section--text">
            <div class="story-content">
                <h2 class="story-title">The ones you still carry.</h2>
            </div>
        </section>

        <section class="story-section story-section--video">
            <div class="story-content video-content">
                <div class="video-wrapper" role="button" tabindex="0" aria-label="Play full video">
                    <iframe
                        data-video-id="UjWCIwPONsc"
                        title="Integrity reflection video"
                        allow="autoplay; encrypted-media; picture-in-picture"
                        allowfullscreen
                        loading="eager">
                    </iframe>
                </div>
            </div>
        </section>

        <section class="story-section story-section--text">
            <div class="story-content">
                <h2 class="story-title">Some decisions never leave your heart.</h2>
            </div>
        </section>

        <section class="story-section story-section--text">
            <div class="story-content">
                <h2 class="story-title mb-12">Tell us about the moment that never really left you.</h2>

                <a href="{{ route('video.list') }}"
                    class="story-cta group">
                    <span class="story-cta__shine"></span>
                    <span class="story-cta__label">Watch more reflections</span>
                    <span class="story-cta__arrow">&rarr;</span>
                </a>
            </div>
        </section>
    </main>
@endsection

@push('script')
    <script>
        (() => {
            const sections = [...document.querySelectorAll('.story-section')];
            const videoSections = new Set(sections
                .map((section, index) => section.classList.contains('story-section--video') ? index : null)
                .filter(index => index !== null));
            const textDuration = 5600;
            const firstBeatDuration = 3600;
            const videoDuration = 10000;
            const cinematicScrollDuration = 2600;
            const inactivityResumeDelay = 9000;

            let currentIndex = 0;
            let autoFlow = true;
            let programmaticScroll = false;
            let flowTimer = null;
            let resumeTimer = null;

            if ('scrollRestoration' in window.history) {
                window.history.scrollRestoration = 'manual';
            }

            const buildVideoSrc = (id, controls = false) => {
                const params = new URLSearchParams({
                    autoplay: '1',
                    mute: controls ? '0' : '1',
                    controls: controls ? '1' : '0',
                    modestbranding: '1',
                    rel: '0',
                    playsinline: '1',
                    enablejsapi: '1'
                });

                return `https://www.youtube.com/embed/${id}?${params.toString()}`;
            };

            const loadVideo = (section, controls = false) => {
                const iframe = section.querySelector('iframe[data-video-id]');
                if (!iframe) return;

                const nextSrc = buildVideoSrc(iframe.dataset.videoId, controls);
                const wrapper = iframe.closest('.video-wrapper');

                if (iframe.src !== nextSrc) {
                    wrapper?.classList.remove('is-loaded');
                    iframe.src = nextSrc;
                }
            };

            const resetInactiveVideos = (activeIndex) => {
                sections.forEach((section, index) => {
                    if (index === activeIndex || !section.classList.contains('story-section--video')) return;

                    const iframe = section.querySelector('iframe[data-video-id]');
                    if (iframe) iframe.removeAttribute('src');
                    section.querySelector('.video-wrapper')?.classList.remove('is-loaded');
                    section.classList.remove('video-engaged');
                });
            };

            const clearFlowTimer = () => {
                if (flowTimer) window.clearTimeout(flowTimer);
                flowTimer = null;
            };

            const cinematicEase = (progress) => 1 - Math.pow(1 - progress, 4);

            const scrollToSection = (section) => {
                if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
                    section.scrollIntoView({ block: 'center' });
                    return;
                }

                const startY = window.scrollY;
                const targetY = section.getBoundingClientRect().top + window.scrollY;
                const distance = targetY - startY;
                const startTime = performance.now();
                document.documentElement.classList.add('is-cinematic-scrolling');

                const step = (now) => {
                    const elapsed = now - startTime;
                    const progress = Math.min(elapsed / cinematicScrollDuration, 1);
                    const eased = cinematicEase(progress);

                    window.scrollTo(0, startY + distance * eased);

                    if (progress < 1) {
                        window.requestAnimationFrame(step);
                    } else {
                        window.scrollTo(0, targetY);
                        document.documentElement.classList.remove('is-cinematic-scrolling');
                    }
                };

                window.requestAnimationFrame(step);
            };

            const activate = (index, shouldScroll = true) => {
                if (index < 0 || index >= sections.length) return;

                const previousIndex = currentIndex;
                currentIndex = index;
                sections.forEach((section, sectionIndex) => {
                    const active = sectionIndex === index;
                    const leaving = sectionIndex === previousIndex && previousIndex !== index;

                    if (leaving) {
                        section.classList.add('leaving');
                        window.setTimeout(() => section.classList.remove('leaving'), 1700);
                    }

                    section.classList.toggle('active', active);
                    section.querySelector('.story-content')?.classList.toggle('active', active);
                });

                resetInactiveVideos(index);

                if (videoSections.has(index)) {
                    loadVideo(sections[index]);
                }

                if (shouldScroll) {
                    programmaticScroll = true;
                    scrollToSection(sections[index]);
                    window.setTimeout(() => {
                        programmaticScroll = false;
                    }, cinematicScrollDuration + 250);
                }
            };

            const nextDelay = () => {
                if (videoSections.has(currentIndex)) return videoDuration;
                return currentIndex === 0 ? firstBeatDuration : textDuration;
            };

            const scheduleNext = () => {
                clearFlowTimer();
                if (!autoFlow || currentIndex >= sections.length - 1) return;

                flowTimer = window.setTimeout(() => {
                    if (!autoFlow) return;
                    activate(currentIndex + 1);
                    scheduleNext();
                }, nextDelay());
            };

            const pauseAutoFlow = (resume = true) => {
                autoFlow = false;
                clearFlowTimer();

                if (resumeTimer) window.clearTimeout(resumeTimer);
                if (!resume) return;

                resumeTimer = window.setTimeout(() => {
                    autoFlow = true;
                    scheduleNext();
                }, inactivityResumeDelay);
            };

            const syncToViewport = () => {
                if (programmaticScroll) return;

                const center = window.innerHeight / 2;
                const visibleIndex = sections.findIndex(section => {
                    const rect = section.getBoundingClientRect();
                    return rect.top <= center && rect.bottom >= center;
                });

                if (visibleIndex !== -1 && visibleIndex !== currentIndex) {
                    activate(visibleIndex, false);
                }
            };

            sections.forEach(section => {
                const videoButton = section.querySelector('.video-wrapper');
                if (!videoButton) return;
                const iframe = videoButton.querySelector('iframe[data-video-id]');

                iframe?.addEventListener('load', () => {
                    videoButton.classList.add('is-loaded');
                });

                videoButton.addEventListener('click', () => {
                    pauseAutoFlow(false);
                    section.classList.add('video-engaged');
                    videoButton.removeAttribute('role');
                    videoButton.removeAttribute('tabindex');
                    videoButton.removeAttribute('aria-label');
                    loadVideo(section, true);
                });

                videoButton.addEventListener('keydown', (event) => {
                    if (event.key !== 'Enter' && event.key !== ' ') return;

                    event.preventDefault();
                    videoButton.click();
                });
            });

            ['wheel', 'touchstart', 'keydown'].forEach(eventName => {
                window.addEventListener(eventName, () => pauseAutoFlow(true), { passive: true });
            });

            window.addEventListener('scroll', () => {
                syncToViewport();
                if (!programmaticScroll) pauseAutoFlow(true);
            }, { passive: true });

            window.addEventListener('load', () => {
                window.scrollTo({ top: 0, left: 0, behavior: 'auto' });
                activate(0, false);
                scheduleNext();
            });
        })();
    </script>
@endpush
