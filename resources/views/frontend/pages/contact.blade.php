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
                    <span class="w-2 h-2 bg-primary rounded-full animate-pulse"></span>Get in Touch
                </div>
                <h1 class="text-2xl md:text-3xl xl:text-5xl font-bold text-foreground mb-6 leading-tight">Let's Start a <span
                        class="text-primary">Conversation</span></h1>
                <p class="text-xl text-muted-foreground max-w-2xl mx-auto leading-relaxed">Have a project in mind? We'd love
                    to hear from you. Send us a message and we'll respond as soon as possible.</p>
            </div>
        </div>
    </section>
    <section class="py-16 border-b border-border">
        <div class="container mx-auto px-6">
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div
                    class="bg-background border border-border rounded-2xl p-6 hover:shadow-lg hover:border-primary/20 transition-all duration-300 group">
                    <div
                        class="w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center text-primary mb-4 group-hover:bg-primary group-hover:text-primary-foreground transition-all duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-mail w-5 h-5">
                            <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                            <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-foreground mb-1">Email Us</h3><a href="mailto:{{ $settings->email }}"
                        class="text-primary font-medium hover:underline block mb-1">{{ $settings->email }}</a>
                    <p class="text-sm text-muted-foreground">Send us an email anytime</p>
                </div>
                <div
                    class="bg-background border border-border rounded-2xl p-6 hover:shadow-lg hover:border-primary/20 transition-all duration-300 group">
                    <div
                        class="w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center text-primary mb-4 group-hover:bg-primary group-hover:text-primary-foreground transition-all duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-phone w-5 h-5">
                            <path
                                d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-foreground mb-1">Call Us</h3><a href="tel:+15551234567"
                        class="text-primary font-medium hover:underline block mb-1">{{ $settings->phone }}</a>
                    <p class="text-sm text-muted-foreground">Mon-Fri from 9am to 10pm </p>
                </div>
                <div
                    class="bg-background border border-border rounded-2xl p-6 hover:shadow-lg hover:border-primary/20 transition-all duration-300 group">
                    <div
                        class="w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center text-primary mb-4 group-hover:bg-primary group-hover:text-primary-foreground transition-all duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-map-pin w-5 h-5">
                            <path
                                d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0">
                            </path>
                            <circle cx="12" cy="10" r="3"></circle>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-foreground mb-1">Visit Us</h3><a href="#"
                        class="text-primary font-medium hover:underline block mb-1">{{ $settings->address }}</a>
                    <p class="text-sm text-muted-foreground">{{ $settings->office_address }}</p>
                </div>
                <div
                    class="bg-background border border-border rounded-2xl p-6 hover:shadow-lg hover:border-primary/20 transition-all duration-300 group">
                    <div
                        class="w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center text-primary mb-4 group-hover:bg-primary group-hover:text-primary-foreground transition-all duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-clock w-5 h-5">
                            <circle cx="12" cy="12" r="10"></circle>
                            <polyline points="12 6 12 12 16 14"></polyline>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-foreground mb-1">Business Hours</h3>
                    <p class="text-primary font-medium mb-1">Monday - Friday</p>
                    <p class="text-sm text-muted-foreground">9:00 AM - 6:00 PM PST</p>
                </div>
            </div>
        </div>
    </section>
    <section class="py-24">
        <div class="container mx-auto px-6">
            <div class="">
                <div class="lg:max-w-[800px] mx-auto">
                    <div class="mb-8">
                        <div
                            class="inline-flex items-center gap-2 bg-primary/10 text-primary px-4 py-2 rounded-full text-sm font-medium mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-message-square w-4 h-4">
                                <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                            </svg>Send a Message
                        </div>
                        <h2 class="text-3xl font-bold text-foreground mb-2">Tell Us About Your Project</h2>
                        <p class="text-muted-foreground">Fill out the form below and we'll get back to you within 24 hours.
                        </p>
                    </div>
                    <form action="{{ route('contact.store') }}" method="post" class="space-y-6">
                        @csrf
                        @honeypot
                        <input name="myField" type="text">

                        <div class="grid md:grid-cols-2 gap-6">
                            <div><label class="block text-sm font-medium text-foreground mb-2">Full Name <span
                                        class="text-destructive">*</span></label><input
                                    class="flex w-full rounded-md border border-input bg-background px-3 py-2 text-base ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm h-12"
                                    required="" placeholder="John Doe" name="name"></div>
                            <div><label class="block text-sm font-medium text-foreground mb-2">Email Address <span
                                        class="text-destructive">*</span></label><input type="email"
                                    class="flex w-full rounded-md border border-input bg-background px-3 py-2 text-base ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm h-12"
                                    required="" placeholder="john@example.com" name="email"></div>
                        </div>
                        <div class="grid md:grid-cols-2 gap-6">
                            <div><label class="block text-sm font-medium text-foreground mb-2">Phone Number</label><input
                                    class="flex w-full rounded-md border border-input bg-background px-3 py-2 text-base ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm h-12"
                                    placeholder="+1 (555) 000-0000" name="phone"></div>
                            <div><label class="block text-sm font-medium text-foreground mb-2">Company Name</label><input
                                    class="flex w-full rounded-md border border-input bg-background px-3 py-2 text-base ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm h-12"
                                    placeholder="Your Company" name="company"></div>
                        </div>
                        <div><label class="block text-sm font-medium text-foreground mb-2">Subject <span
                                    class="text-destructive">*</span></label><input
                                class="flex w-full rounded-md border border-input bg-background px-3 py-2 text-base ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm h-12"
                                required="" placeholder="How can we help you?" name="reason"></div>
                        <div><label class="block text-sm font-medium text-foreground mb-2">Your Message <span
                                    class="text-destructive">*</span></label>
                            <textarea
                                class="flex min-h-[80px] w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
                                required="" placeholder="Tell us about your project, goals, and timeline..." rows="6" name="message"></textarea>
                        </div><button
                            class="inline-flex cursor-pointer items-center justify-center whitespace-nowrap rounded-lg font-semibold ring-offset-background transition-all duration-200 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-primary text-primary-foreground hover:bg-primary/90 shadow-sm h-12 px-8 text-base w-full md:w-auto gap-2"
                            type="submit">Send Message<svg xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-send w-4 h-4">
                                <path
                                    d="M14.536 21.686a.5.5 0 0 0 .937-.024l6.5-19a.496.496 0 0 0-.635-.635l-19 6.5a.5.5 0 0 0-.024.937l7.93 3.18a2 2 0 0 1 1.112 1.11z">
                                </path>
                                <path d="m21.854 2.147-10.94 10.939"></path>
                            </svg></button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
