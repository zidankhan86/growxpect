@extends('frontend.layouts.master')

@section('content')
    <div class="text-gray-100 lg:mb-12">
        <div class="w-full max-w-6xl mx-auto px-4 pt-8">
            <!-- Header -->
            <div class="flex justify-between items-center mb-8">
                <h1 class="text-3xl font-bold">ড্যাশবোর্ড</h1>
                <span class="text-gray-400">স্বাগতম{{ $user->name ? ', '.$user->name : (auth()->user()->name ? ', '.auth()->user()->name : '') }}</span>
            </div>

            <div class="grid lg:grid-cols-4 gap-6">
                <!-- Sidebar Menu -->
                <div class="lg:col-span-1 bg-[#0c0c0c] rounded-lg p-4 space-y-2 self-start">
                    <h2 class="text-xl font-semibold mb-4">ড্যাশবোর্ড মেনু</h2>
                    @include('user.sidebar')
                </div>

                <!-- Main Content -->
                <div class="lg:col-span-3 bg-[#080808] rounded-lg p-6 space-y-6">

                    <h2 class="text-2xl font-semibold mb-4">প্রোফাইল আপডেট</h2>

                    <form id="profileForm" action="{{ route('user.profile.update') }}" method="post" enctype="multipart/form-data" class="space-y-4">
                        @csrf

                        @if(session('success'))
                            <div class="p-3 bg-green-600 rounded text-white">{{ session('success') }}</div>
                        @endif

                        @if($errors->hasBag('profile'))
                            <div class="p-3 bg-red-700 rounded text-white">
                                <ul class="list-disc pl-5">
                                    @foreach($errors->getBag('profile')->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div>
                            <label class="block text-gray-400 mb-1" for="name">নাম</label>
                            <input type="text" id="name" name="name" required
                                value="{{ old('name', $user->name ?? '') }}"
                                class="w-full rounded border border-gray-700 bg-[#111111] px-3 py-2 focus:outline-none focus:ring-2 focus:ring-gold"
                                placeholder="আপনার নাম লিখুন">
                        </div>

                        <div>
                            <label class="block text-gray-400 mb-1" for="email">ইমেইল</label>
                            <input type="email" id="email" name="email" required
                                value="{{ old('email', $user->email ?? '') }}"
                                class="w-full rounded border border-gray-700 bg-[#111111] px-3 py-2 focus:outline-none focus:ring-2 focus:ring-gold"
                                placeholder="আপনার ইমেইল লিখুন">
                        </div>

                        <div>
                            <label class="block text-gray-400 mb-1" for="profile">প্রোফাইল ছবি</label>
                            @if(!empty($user->image))
                                @php
                                    $publicPath = public_path($user->image);
                                    $storagePath = public_path('storage/' . ltrim($user->image, '/'));
                                    if (file_exists($publicPath) && is_file($publicPath)) {
                                        $imgUrl = asset($user->image);
                                    } elseif (file_exists($storagePath) && is_file($storagePath)) {
                                        $imgUrl = asset('storage/' . ltrim($user->image, '/'));
                                    } else {
                                        $imgUrl = asset('user.png');
                                    }
                                @endphp
                                <div class="mb-2">
                                    <img src="{{ $imgUrl }}" alt="profile" class="w-24 h-24 rounded-full object-cover">
                                </div>
                            @endif
                            <input type="file" id="profile" name="profile" accept="image/*"
                                class="w-full rounded border border-gray-700 bg-[#111111] px-3 py-2 text-gray-200">
                        </div>

                        <div>
                            <button type="submit" class="btn rounded">
                                <span class="btn-text">প্রোফাইল আপডেট করুন</span>
                                <span class="btn-spinner hidden items-center" aria-hidden="true">
                                    <svg class="w-5 h-5 animate-spin" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none">
                                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v4a4 4 0 00-4 4H4z"></path>
                                    </svg>
                                </span>
                            </button>
                        </div>
                    </form>
                    @push('script')
                        <script>
                            $(document).ready(function(){
                                $('#profileForm').on('submit', function(){
                                    var $btn = $(this).find('button[type="submit"]');
                                    $btn.prop('disabled', true).attr('aria-disabled', 'true');
                                    $btn.find('.btn-text').addClass('hidden');
                                    $btn.find('.btn-spinner').removeClass('hidden');
                                });
                            });
                        </script>
                    @endpush
                </div>
            </div>
        </div>
    </div>
@endsection
