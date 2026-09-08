<header id="site-header" class="py-4 z-10 bg-dark  top-0 w-full">
    <nav class="fixed top-0 left-0 right-0 z-50 border-b border-border/50 bg-background/80 backdrop-blur-xl">
        <div class="container flex h-16 items-center justify-between">

            <!-- Logo -->
            <a class="flex items-center gap-2" href="{{route('home')}}">
                 
            </a>

            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center gap-8">
                <a href="#" class="nav-link nav-link-primary">Home</a>
                <a href="#" class="nav-link nav-link-muted">Stories</a>
                <a href="#" class="nav-link nav-link-muted">Share Story</a>
                <a href="#" class="nav-link nav-link-muted">About</a>
            </div>

            <!-- Mobile Menu Button -->
            <button class="md:hidden text-foreground">
                <svg xmlns="http://www.w3.org/2000/svg" class="lucide lucide-menu h-6 w-6" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="4" y1="6" x2="20" y2="6"></line>
                    <line x1="4" y1="12" x2="20" y2="12"></line>
                    <line x1="4" y1="18" x2="20" y2="18"></line>
                </svg>
            </button>

        </div>
    </nav>
</header>

<button type="button" command="show-modal" commandfor="mobile-menu"
    class="relative cursor-pointer rounded-md bg-[#303030] p-2 lg:hidden text-white">
    <span class="absolute -inset-0.5"></span>
    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true"
        class="size-6">
        <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round" stroke-linejoin="round" />
    </svg>
</button>

<el-dialog>
    <dialog id="mobile-menu" class="backdrop:bg-transparent lg:hidden">
        <el-dialog-backdrop
            class="fixed inset-0 bg-black/25 transition-opacity duration-300 ease-linear data-closed:opacity-0"></el-dialog-backdrop>
        <div tabindex="0" class="fixed inset-0 flex focus:outline-none">
            <el-dialog-panel
                class="relative flex w-full max-w-xs transform flex-col overflow-y-auto bg-[#000000] pb-12 shadow-xl transition duration-300 ease-in-out data-closed:-translate-x-full">
                <div class="flex items-center justify-end px-4 py-4">
                    <button type="button" command="close" commandfor="mobile-menu"
                        class="relative -m-2 inline-flex cursor-pointer items-center justify-center rounded-md p-2 text-gray-400">
                        <span class="absolute -inset-0"></span>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                            data-slot="icon" aria-hidden="true" class="size-6">
                            <path d="M6 18 18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>

                <div class="px-4">
                    <a href="{{ route('home') }}" class="text-[14px] md:text-[15px] mb-0 btn px-3 lg:px-6 mb-3 py-2">
                        Home
                    </a>
                    @auth
                        <a href="{{ route('user.dashboard') }}" class="text-[14px] md:text-[15px] btn px-3 lg:px-6 py-2">
                            ড্যাশবোর্ড
                        </a>
                    @else
                        <button class="loginBtn text-[14px] w-full block md:text-[15px] mb-0 btn px-3 lg:px-6 py-2"
                            command="close" commandfor="mobile-menu">
                            লগইন / রেজিস্টার
                        </button>
                    @endauth
                </div>
            </el-dialog-panel>
        </div>
    </dialog>
</el-dialog>
