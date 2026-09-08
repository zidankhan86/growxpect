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

                    <h2 class="text-2xl font-semibold mb-4">পাসওয়ার্ড পরিবর্তন</h2>

                    <form id="passwordForm" action="{{ route('user.password.update') }}" method="post" class="space-y-4">
                        @csrf

                        @if(session('success'))
                            <div class="p-3 bg-green-600 rounded text-white">{{ session('success') }}</div>
                        @endif

                        @if($errors->hasBag('password'))
                            <div class="p-3 bg-red-700 rounded text-white">
                                <ul class="list-disc pl-5">
                                    @foreach($errors->getBag('password')->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div>
                            <label class="block text-gray-400 mb-1" for="current_password">বর্তমান পাসওয়ার্ড</label>
                            <input type="password" id="current_password" name="current_password" required
                                class="w-full rounded border border-gray-700 bg-[#111111] px-3 py-2 focus:outline-none focus:ring-2 focus:ring-gold"
                                placeholder="বর্তমান পাসওয়ার্ড লিখুন">
                        </div>

                        <div>
                            <label class="block text-gray-400 mb-1" for="password">নতুন পাসওয়ার্ড</label>
                            <input type="password" id="password" name="password" required
                                class="w-full rounded border border-gray-700 bg-[#111111] px-3 py-2 focus:outline-none focus:ring-2 focus:ring-gold"
                                placeholder="নতুন পাসওয়ার্ড লিখুন">
                        </div>

                        <div>
                            <label class="block text-gray-400 mb-1" for="password_confirmation">নতুন পাসওয়ার্ড নিশ্চিত
                                করুন</label>
                            <input type="password" id="password_confirmation" name="password_confirmation" required
                                class="w-full rounded border border-gray-700 bg-[#111111] px-3 py-2 focus:outline-none focus:ring-2 focus:ring-gold"
                                placeholder="নতুন পাসওয়ার্ড পুনরায় লিখুন">
                        </div>

                        <div>
                            <button type="submit" class="btn rounded">
                                <span class="btn-text">পাসওয়ার্ড পরিবর্তন করুন</span>
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
                                $('#passwordForm').on('submit', function(){
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
