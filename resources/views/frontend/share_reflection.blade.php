@extends('frontend.layouts.master')

@section('content')
    <nav class=" bg-black/80 backdrop-blur-md border-b border-white/10">
        <div class="max-w-7xl mx-auto px-6 h-14 flex items-center justify-between">
            <a href="{{ route('home') }}" class="nav-link text-[#ccc]">
                ← Back
            </a>
        </div>
    </nav>

    <section class="flex  py-12 items-center justify-center px-4 reveal">
        <div class="text-center space-y-8">
            <p class="font-display text-3xl md:text-5xl text-white lg:text-6xl font-light font-playfair tracking-wide">
                Tell us about one.
            </p>
            <p class="font-display text-xl font-light font-inter italic text-gray-400">
                A moment that stayed with you. No scripts needed.
            </p>
        </div>
    </section>

    <div class="max-w-3xl mx-auto px-6 pb-32">
        <form action="#" method="POST" enctype="multipart/form-data" class="space-y-8 pt-8">
            @csrf

            <!-- Name -->
            <div class="space-y-2">
                <label class="text-xs tracking-[0.2em] uppercase text-white block">
                    Your name <span class="text-white">(optional)</span>
                </label>

                <input type="text" name="name" id="nameInput" placeholder="Write your name"
                    class="w-full bg-transparent border-b border-[#222] focus:border-[#555] outline-none pb-2 text-sm text-[#ccc] placeholder:text-[#333] transition duration-500">

            </div>

            <!-- Reflection -->
            <div class="space-y-2">
                <label class="text-xs tracking-[0.2em] uppercase text-white block">
                    Your reflection
                </label>

                <textarea name="reflection" rows="6" required
                    placeholder="What happened?
What did you do?
Why does it stay with you?"
                    class="w-full bg-transparent border border-[#181818] focus:border-[#333] rounded-sm outline-none p-4 text-sm text-[#ccc] placeholder:text-[#333] transition duration-500 resize-none leading-relaxed"></textarea>
            </div>

            <!-- File Upload -->
            <div class="space-y-2">
                <label class="text-xs tracking-[0.2em] uppercase text-white block">
                    Video
                </label>

                <div
                    class="relative border border-dashed border-[#1a1a1a] hover:border-[#333] rounded-sm p-8 text-center transition duration-500 cursor-pointer">
                    <input type="file" name="media" accept="video/*,audio/*"
                        class="absolute inset-0 w-full h-full opacity-0 cursor-pointer">

                    <div class="flex flex-col items-center gap-2">
                        <p class="text-sm text-[#777]">Drag & drop or click</p>
                        <p class="text-[10px] text-white">MP4, MOV, WebM, MP3</p>
                    </div>
                </div>
            </div>

            <!-- Submit -->
            <button type="submit" class="btn-primary">
                Share your reflection
            </button>

        </form>
    </div>
@endsection
