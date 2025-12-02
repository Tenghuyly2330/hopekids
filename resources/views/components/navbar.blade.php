<style>
    nav a {
        position: relative;
        width: 100%;
        height: 100%;
    }
</style>
<div class="relative w-full hidden pt-4 lg:block z-40 bg-transparent">
    <div class="max-w-7xl mx-auto flex items-center justify-between gap-2 px-10 xl:px-0 overflow-hidden">

        <!-- Contact Info -->
        <div class="flex gap-3 lg:gap-6 text-[#FFFFFF] text-[10px] lg:text-[15px] font-light xl:ms-[90px] relative z-10" data-aos="fade-right" data-aos-duration="1000">
            <p class="flex items-center gap-1">
                <span class="text-[#5796FF] ">
                    <svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M2 16C1.45 16 0.979333 15.8043 0.588 15.413C0.196667 15.0217 0.000666667 14.5507 0 14V2C0 1.45 0.196 0.979333 0.588 0.588C0.98 0.196666 1.45067 0.000666667 2 0H18C18.55 0 19.021 0.196 19.413 0.588C19.805 0.98 20.0007 1.45067 20 2V14C20 14.55 19.8043 15.021 19.413 15.413C19.0217 15.805 18.5507 16.0007 18 16H2ZM10 9L2 4V14H18V4L10 9ZM10 7L18 2H2L10 7ZM2 4V2V14V4Z"
                            fill="white" />
                    </svg>
                </span>
                info@hopekidsschool.com
            </p>
            <p class="flex items-center gap-1">
                <span class="text-[#5796FF]">
                    <svg width="17" height="17" viewBox="0 0 17 17" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M4.32812 0.5C4.76562 0.5 6.51562 4.4375 6.51562 4.875C6.51562 5.75 5.20312 6.625 4.76562 7.5C4.32812 8.375 5.20312 9.25 6.07812 10.125C6.41937 10.4662 7.82812 11.875 8.70312 11.4375C9.57812 11 10.4531 9.6875 11.3281 9.6875C11.7656 9.6875 15.7031 11.4375 15.7031 11.875C15.7031 13.625 14.3906 14.9375 13.0781 15.375C11.7656 15.8125 10.8906 15.8125 9.14062 15.375C7.39062 14.9375 6.07812 14.5 3.89062 12.3125C1.70312 10.125 1.26562 8.8125 0.828125 7.0625C0.390625 5.3125 0.390625 4.4375 0.828125 3.125C1.26562 1.8125 2.57812 0.5 4.32812 0.5Z"
                            stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>

                </span>
                085 253 388
            </p>
        </div>

        <div class="flex items-center gap-4" data-aos="fade-left" data-aos-duration="1000">
            <div class="hidden lg:flex items-center gap-2 text-[14px]">
                <!-- Clickable flag to switch language -->
                <img src="{{ $locale === 'en' ? asset('assets/images/icons/usa-flag.png') : asset('assets/images/icons/kh-flag.png') }}"
                    alt="Flag" class="w-6 h-6 rounded-full">

                <a href="{{ route('lang.switch', 'en') }}"
                    class="{{ $locale === 'en' ? 'text-[#FFFFFF] font-bold' : 'text-[#FFFFFF]' }}">
                    {{ $locale === 'en' ? 'English' : 'ភាសាអង់គ្លេស' }}
                </a>
                <!-- Language links -->
                <a href="{{ route('lang.switch', 'km') }}"
                    class="{{ $locale === 'km' ? 'text-[#FFFFFF] font-bold' : 'text-[#FFFFFF]' }}">
                    {{ $locale === 'en' ? 'Khmer' : 'ភាសាខ្មែរ' }}
                </a>
            </div>
            <!-- Social Icons -->
            <ul class="flex items-center gap-4 relative z-10">
                <li>
                    <a href="{{ $fb->url }}" target="__blank">
                        <svg class="w-6 h-6" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M10.3559 0C4.64566 0 0 4.64566 0 10.3559C0 16.0656 4.64566 20.7117 10.3559 20.7117C16.0656 20.7117 20.7117 16.0656 20.7117 10.3559C20.7117 4.64566 16.0665 0 10.3559 0ZM12.9313 10.7204H11.2465V16.7256H8.74988C8.74988 16.7256 8.74988 13.4443 8.74988 10.7204H7.56312V8.59804H8.74988V7.22524C8.74988 6.24205 9.21708 4.70573 11.2694 4.70573L13.1194 4.71282V6.77306C13.1194 6.77306 11.9952 6.77306 11.7766 6.77306C11.5581 6.77306 11.2473 6.88235 11.2473 7.35122V8.59846H13.1494L12.9313 10.7204Z"
                                fill="#007BFF" />
                        </svg>

                    </a>
                </li>
                <li>
                    <a href="{{ $telegram->url }}" target="__blank">
                        <svg class="w-6 h-6" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M10.3559 20.7117C16.0752 20.7117 20.7117 16.0752 20.7117 10.3559C20.7117 4.63648 16.0752 0 10.3559 0C4.63648 0 0 4.63648 0 10.3559C0 16.0752 4.63648 20.7117 10.3559 20.7117Z"
                                fill="#039BE5" />
                            <path
                                d="M4.73909 10.1315L14.7239 6.28175C15.1873 6.11433 15.592 6.3948 15.4419 7.09554L15.4427 7.09468L13.7426 15.1041C13.6166 15.6719 13.2792 15.81 12.8072 15.5425L10.2182 13.6344L8.96945 14.8374C8.83137 14.9755 8.71487 15.092 8.44735 15.092L8.63116 12.4573L13.4294 8.1225C13.6382 7.93868 13.3828 7.83513 13.1075 8.01808L7.17789 11.7514L4.62172 10.954C4.06682 10.7779 4.05474 10.3991 4.73909 10.1315Z"
                                fill="white" />
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="{{ $tiktok->url }}" target="__blank">
                        <svg class="w-6 h-6" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="10.5" cy="10.5" r="10.5" fill="black" />
                            <path
                                d="M14.3138 5.35C13.7472 4.69961 13.4349 3.8645 13.4349 3H10.8731V13.3333C10.8537 13.8927 10.619 14.4226 10.2184 14.8112C9.81774 15.1999 9.28257 15.417 8.72576 15.4167C7.54847 15.4167 6.57015 14.45 6.57015 13.25C6.57015 11.8167 7.94643 10.7417 9.36416 11.1833V8.55C6.50383 8.16667 4 10.4 4 13.25C4 16.025 6.28827 18 8.71747 18C11.3208 18 13.4349 15.875 13.4349 13.25V8.00833C14.4738 8.75821 15.721 9.16054 17 9.15833V6.58333C17 6.58333 15.4413 6.65833 14.3138 5.35Z"
                                fill="white" />
                        </svg>

                    </a>
                </li>
                <li>
                    <a href="{{ $yt->url }}" target="__black">
                        <svg class="h-6" viewBox="0 0 20 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M8 10L13.19 7L8 4V10ZM19.56 2.17C19.69 2.64 19.78 3.27 19.84 4.07C19.91 4.87 19.94 5.56 19.94 6.16L20 7C20 9.19 19.84 10.8 19.56 11.83C19.31 12.73 18.73 13.31 17.83 13.56C17.36 13.69 16.5 13.78 15.18 13.84C13.88 13.91 12.69 13.94 11.59 13.94L10 14C5.81 14 3.2 13.84 2.17 13.56C1.27 13.31 0.69 12.73 0.44 11.83C0.31 11.36 0.22 10.73 0.16 9.93C0.0900001 9.13 0.0599999 8.44 0.0599999 7.84L0 7C0 4.81 0.16 3.2 0.44 2.17C0.69 1.27 1.27 0.69 2.17 0.44C2.64 0.31 3.5 0.22 4.82 0.16C6.12 0.0899998 7.31 0.0599999 8.41 0.0599999L10 0C14.19 0 16.8 0.16 17.83 0.44C18.73 0.69 19.31 1.27 19.56 2.17Z"
                                fill="#FF0000" />
                        </svg>
                    </a>
                </li>
            </ul>
        </div>


    </div>
</div>

<div class="w-full px-4 pt-3">

    <div class="w-full max-w-7xl mx-auto flex lg:hidden justify-between items-center md:gap-3 relative z-40 overflow-hidden">

        <!-- Logo -->
        <img src="{{ asset('assets/images/logo_new.png') }}" class="rounded-full w-16 h-16 shadow-md"  />

        <div class="flex lg:hidden items-center gap-2">
            <div class="flex items-center gap-1 text-[14px]" data-aos="fade-left" data-aos-duration="1000">
                <!-- Clickable flag to switch language -->
                <img src="{{ $locale === 'en' ? asset('assets/images/icons/usa-flag.png') : asset('assets/images/icons/kh-flag.png') }}"
                    alt="Flag" class="w-6 h-6 rounded-full">

                <a href="{{ route('lang.switch', 'en') }}"
                    class="{{ $locale === 'en' ? 'text-[#FFFFFF] font-bold' : 'text-[#FFFFFF]' }}">
                    {{ $locale === 'en' ? 'English' : 'ភាសាអង់គ្លេស' }}
                </a>
                <!-- Language links -->
                <a href="{{ route('lang.switch', 'km') }}"
                    class="{{ $locale === 'km' ? 'text-[#FFFFFF] font-bold' : 'text-[#FFFFFF]' }}">
                    {{ $locale === 'en' ? 'Khmer' : 'ភាសាខ្មែរ' }}
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <button @click="open = true" class="text-white p-2 font-bold text-3xl relative z-1">
                <i class="fa-solid fa-bars"></i>
            </button>
        </div>
    </div>

    <!-- MOBILE BACKDROP -->
    <div x-show="open" x-transition.opacity @click="open = false" class="fixed  ms-10 z-40"></div>

    <!-- MOBILE SIDEBAR -->
    <div x-show="open" x-cloak x-transition:enter="transition transform duration-300"
        x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0"
        x-transition:leave="transition transform duration-300" x-transition:leave-start="translate-x-0"
        x-transition:leave-end="translate-x-full"
        class="fixed top-0 right-0 w-64 h-full bg-white shadow-xl p-5 z-[999]">
        <div class="flex justify-end items-end mb-6">
            <button @click="open = false" class="text-2xl">
                <i class="fa-solid fa-xmark"></i>
            </button>
        </div>

        <ul class="flex flex-col gap-5 text-[17px] relative z-10">
            <li><a href="{{ URL('/') }}"
                    class="text-[#1C0186]">{{ app()->getLocale() === 'en' ? 'Home' : 'ទំព័រដើម​' }}</a></li>
            <li><a href="{{ URL('/about') }}"
                    class="text-[#1C0186]">{{ app()->getLocale() === 'en' ? 'About Us' : 'អំពីយើងខ្ញុំ' }}</a></li>
            <li><a href="{{ URL('/ourprogram') }}"
                    class="text-[#1C0186]">{{ app()->getLocale() === 'en' ? 'Our Program' : 'កម្មវិធីសិក្សា' }}</a>
            </li>
            <li><a href="{{ URL('/professionalteam') }}"
                    class="text-[#1C0186]">{{ app()->getLocale() === 'en' ? 'Professional Team' : 'អ្នកជំនាញ' }}</a>
            </li>
            <li><a href="{{ URL('/career') }}"
                    class="text-[#1C0186]">{{ app()->getLocale() === 'en' ? 'Career' : 'ឱកាសការងារ' }}</a></li>
            <li><a href="{{ URL('/articles') }}"
                    class="text-[#1C0186]">{{ app()->getLocale() === 'en' ? 'Articles' : 'អត្ថបទ' }}</a></li>
            <li><a href="{{ URL('/event') }}"
                    class="text-[#1C0186]">{{ app()->getLocale() === 'en' ? 'Events' : 'ព្រឹត្តិការណ៍' }}</a></li>
            <li><a href="{{ URL('/contact') }}"
                    class="text-[#1C0186]">{{ app()->getLocale() === 'en' ? 'Contact Us' : 'ការទំនាក់ទំនង' }}</a></li>
        </ul>
        <div class="w-full py-5 px-2">
            <div class="flex flex-col gap-2">

                <!-- Contact Info -->
                <div
                    class="flex flex-col gap-3 md:gap-6 text-[#1E078B] text-[10px] md:text-[15px] font-light relative z-10">
                    <p class="flex items-center gap-1">
                        <span class="text-[#5796FF] "><i class="fa-regular fa-envelope"></i></span>
                        info@hopekidsschool.com
                    </p>
                    <p class="flex items-center gap-1">
                        <span class="text-[#5796FF]"><i class="fa-solid fa-phone-flip"></i></span>
                        090 / 092 / 098 639 168
                    </p>
                </div>

                <!-- Social Icons -->
                <ul class="flex items-center gap-4 relative z-10 pt-2">
                    <li>
                        <a href="{{ $fb->url }}" target="__blank">
                            <svg class="w-4 h-4" viewBox="0 0 21 21" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10.3559 0C4.64566 0 0 4.64566 0 10.3559C0 16.0656 4.64566 20.7117 10.3559 20.7117C16.0656 20.7117 20.7117 16.0656 20.7117 10.3559C20.7117 4.64566 16.0665 0 10.3559 0ZM12.9313 10.7204H11.2465V16.7256H8.74988C8.74988 16.7256 8.74988 13.4443 8.74988 10.7204H7.56312V8.59804H8.74988V7.22524C8.74988 6.24205 9.21708 4.70573 11.2694 4.70573L13.1194 4.71282V6.77306C13.1194 6.77306 11.9952 6.77306 11.7766 6.77306C11.5581 6.77306 11.2473 6.88235 11.2473 7.35122V8.59846H13.1494L12.9313 10.7204Z"
                                    fill="#007BFF" />
                            </svg>

                        </a>
                    </li>
                    <li>
                        <a href="{{ $telegram->url }} target="__blank">
                            <svg class="w-4 h-4" viewBox="0 0 21 21" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10.3559 20.7117C16.0752 20.7117 20.7117 16.0752 20.7117 10.3559C20.7117 4.63648 16.0752 0 10.3559 0C4.63648 0 0 4.63648 0 10.3559C0 16.0752 4.63648 20.7117 10.3559 20.7117Z"
                                    fill="#039BE5" />
                                <path
                                    d="M4.73909 10.1315L14.7239 6.28175C15.1873 6.11433 15.592 6.3948 15.4419 7.09554L15.4427 7.09468L13.7426 15.1041C13.6166 15.6719 13.2792 15.81 12.8072 15.5425L10.2182 13.6344L8.96945 14.8374C8.83137 14.9755 8.71487 15.092 8.44735 15.092L8.63116 12.4573L13.4294 8.1225C13.6382 7.93868 13.3828 7.83513 13.1075 8.01808L7.17789 11.7514L4.62172 10.954C4.06682 10.7779 4.05474 10.3991 4.73909 10.1315Z"
                                    fill="white" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="{{ $tiktok->url }}" target="__blank">
                            <svg class="w-4 h-4" viewBox="0 0 21 21" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="10.5" cy="10.5" r="10.5" fill="black" />
                                <path
                                    d="M14.3138 5.35C13.7472 4.69961 13.4349 3.8645 13.4349 3H10.8731V13.3333C10.8537 13.8927 10.619 14.4226 10.2184 14.8112C9.81774 15.1999 9.28257 15.417 8.72576 15.4167C7.54847 15.4167 6.57015 14.45 6.57015 13.25C6.57015 11.8167 7.94643 10.7417 9.36416 11.1833V8.55C6.50383 8.16667 4 10.4 4 13.25C4 16.025 6.28827 18 8.71747 18C11.3208 18 13.4349 15.875 13.4349 13.25V8.00833C14.4738 8.75821 15.721 9.16054 17 9.15833V6.58333C17 6.58333 15.4413 6.65833 14.3138 5.35Z"
                                    fill="white" />
                            </svg>

                        </a>
                    </li>
                    <li>
                        <a href="{{ $yt->url }}" target="__black">
                            <svg class="h-4" viewBox="0 0 20 14" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8 10L13.19 7L8 4V10ZM19.56 2.17C19.69 2.64 19.78 3.27 19.84 4.07C19.91 4.87 19.94 5.56 19.94 6.16L20 7C20 9.19 19.84 10.8 19.56 11.83C19.31 12.73 18.73 13.31 17.83 13.56C17.36 13.69 16.5 13.78 15.18 13.84C13.88 13.91 12.69 13.94 11.59 13.94L10 14C5.81 14 3.2 13.84 2.17 13.56C1.27 13.31 0.69 12.73 0.44 11.83C0.31 11.36 0.22 10.73 0.16 9.93C0.0900001 9.13 0.0599999 8.44 0.0599999 7.84L0 7C0 4.81 0.16 3.2 0.44 2.17C0.69 1.27 1.27 0.69 2.17 0.44C2.64 0.31 3.5 0.22 4.82 0.16C6.12 0.0899998 7.31 0.0599999 8.41 0.0599999L10 0C14.19 0 16.8 0.16 17.83 0.44C18.73 0.69 19.31 1.27 19.56 2.17Z"
                                    fill="#FF0000" />
                            </svg>
                        </a>
                    </li>
                </ul>

            </div>
        </div>

    </div>
</div>

<nav class="relative w-full bg-[#D9ECEE] hidden lg:flex" >
    <div class="absolute left-1/2 -translate-x-1/2 z-50 w-max flex items-center gap-4 py-2">
        <img src="{{ asset('assets/images/logo_new.png') }}" alt="" class="w-16 h-16 object-cover">
        <ul class="flex items-center bg-[#ffffff] space-x-1 px-3 xl:px-10 py-4 rounded-full">
            <li class="relative group">
                <a href="{{ route('home') }}"
                    class="px-5 xl:px-7 py-4 text-[16px] xl:text-[19px] nav_link {{ Route::is('home') ? 'py-2 px-5 rounded-full bg-gradient-to-r from-[#5897FF] to-[#1C0186]' : 'py-8' }}">{{ app()->getLocale() === 'en' ? 'Home' : 'ទំព័រដើម​' }}</a>
                <ul
                    class="absolute left-1/2 transform -translate-x-1/2 hidden mt-6 py-4 w-44 bg-[#FFFFFF] shadow-lg rounded-lg {{ Route::is('home') ? '' : 'group-hover:block' }} z-50">
                    <li class="hover:bg-[#5897FF]"><a href="/#welcome"
                            class="block px-2 py-2 text-[15px] xl:text-[16px] text-[#000]">{{ app()->getLocale() === 'en' ? 'Welcome to HopeKids' : 'សូមស្វាគមន៍មកកាន់ សាលារៀនអប់រំពិសេសក្ដីសង្ឃឹមកុមារ' }}</a>
                    </li>
                    <li class="hover:bg-[#5897FF]"><a href="/#program"
                            class="block px-2 py-2 text-[15px] xl:text-[16px] text-[#000]">{{ app()->getLocale() === 'en' ? 'Our Programs' : 'កម្មវិធីសិក្សា' }}</a>
                    </li>

                    <li class="hover:bg-[#5897FF]"><a href="/#school_facilities"
                            class="block px-2 py-2 text-[15px] xl:text-[16px] text-[#000]">{{ app()->getLocale() === 'en' ? 'School Facilities' : 'បរិវេណសាលា​' }}</a>
                    </li>
                    <li class="hover:bg-[#5897FF]"><a href="/#our_branch"
                            class="block px-2 py-2 text-[15px] xl:text-[16px] text-[#000]">{{ app()->getLocale() === 'en' ? 'Our Branches' : 'សាខាយើងខ្ញុំ' }}</a>
                    </li>
                    {{-- <li class="hover:bg-[#5897FF]"><a href="/#parent"
                            class="block px-2 py-2 text-[15px] xl:text-[16px] text-[#000]">{{ app()->getLocale() === 'en' ? 'Parents’ Testimonials' : 'Parents’ Testimonials' }}</a>
                    </li> --}}
                    {{-- <li class="hover:bg-[#5897FF]"><a href="/#faq"
                            class="block px-2 py-2 text-[15px] xl:text-[16px] text-[#000]">{{ app()->getLocale() === 'en' ? 'FAQ' : 'FAQ' }}</a>
                    </li> --}}
                    {{-- <li class="hover:bg-[#5897FF]"><a href="/#contact"
                            class="block px-2 py-2 text-[15px] xl:text-[16px] text-[#000]">{{ app()->getLocale() === 'en' ? 'Schedule a tour' : 'Schedule a tour' }}</a>
                    </li> --}}
                </ul>
            </li>
            <li class="relative group">
                <a href="{{ route('about') }}"
                    class="px-5 xl:px-7 py-4 text-[16px] xl:text-[19px] nav_link {{ Route::is('about') ? 'py-2 px-5 rounded-full bg-gradient-to-r from-[#5897FF] to-[#1C0186]' : 'py-8' }}">{{ app()->getLocale() === 'en' ? 'About Us' : 'អំពីយើងខ្ញុំ' }}</a>
                <ul
                    class="absolute left-1/2 transform -translate-x-1/2 hidden mt-6 py-2 w-44 bg-[#FFFFFF] shadow-lg rounded-lg {{ Route::is('about') ? '' : 'group-hover:block' }} z-50">
                    <li class="hover:bg-[#5897FF]"><a href="/about#mission"
                            class="block px-2 py-2 text-[15px] xl:text-[16px] text-[#000]">{{ app()->getLocale() === 'en' ? 'Mission' : 'បេសកកម្ម' }}</a>
                    </li>
                    <li class="hover:bg-[#5897FF]"><a href="/about#vision"
                            class="block px-2 py-2 text-[15px] xl:text-[16px] text-[#000]">{{ app()->getLocale() === 'en' ? 'Vision' : 'ចក្ខុវិស័យ' }}</a>
                    </li>
                    <li class="hover:bg-[#5897FF]"><a href="/about#core_values"
                            class="block px-2 py-2 text-[15px] xl:text-[16px] text-[#000]">{{ app()->getLocale() === 'en' ? 'Core Values' : 'គុណតម្លៃស្នូល' }}</a>
                    </li>
                    <li class="hover:bg-[#5897FF]"><a href="/about#our_goals"
                            class="block px-2 py-2 text-[15px] xl:text-[16px] text-[#000]">{{ app()->getLocale() === 'en' ? 'Our Goals' : 'គោលដៅរបស់យើងខ្ញុំ' }}</a>
                    </li>
                    {{-- <li class="hover:bg-[#5897FF]"><a href="/about#school_license"
                            class="block px-2 py-2 text-[15px] xl:text-[16px] text-[#000]">{{ app()->getLocale() === 'en' ? 'School License' : 'School License' }}</a>
                    </li> --}}
                </ul>
            </li>
            <li class="relative group">
                <a href="{{ route('ourprogram') }}"
                    class="px-5 xl:px-7 py-4 text-[16px] xl:text-[19px] nav_link {{ Route::is('ourprogram') ? 'py-2 px-5 rounded-full bg-gradient-to-r from-[#5897FF] to-[#1C0186]' : 'py-8' }}">{{ app()->getLocale() === 'en' ? 'Our Programs' : 'កម្មវិធីសិក្សា' }}</a>
                <ul
                    class="absolute left-1/2 transform -translate-x-1/2 hidden mt-6 py-2 w-64 bg-[#FFFFFF] shadow-lg rounded-lg {{ Route::is('ourprogram') ? '' : 'group-hover:block' }} z-50">
                    @foreach ($programs as $item)
                        <li class="hover:bg-[#5897FF]"><a href="{{ url('/ourprogram/#' . $item->number_en) }}"
                                class="block px-2 py-2 text-[15px] xl:text-[16px] text-[#000]">{{ app()->getLocale() === 'en' ? $item->title_en : $item->title_km }}</a>
                        </li>
                    @endforeach

                    {{-- <li class="hover:bg-[#5897FF]"><a href="/ourprogram#1"
                            class="block px-2 py-2 text-[14px] text-[#000]">{{ app()->getLocale() === 'en' ? 'Structured Teaching' : 'ការបង្រៀនតាមបែបរចនាសម្ព័ន្ធ' }}</a>
                    </li>
                    <li class="hover:bg-[#5897FF]"><a href="/ourprogram#2"
                            class="block px-2 py-2 text-[14px] text-[#000]">{{ app()->getLocale() === 'en' ? 'Special Education' : 'ការអប់រំពិសេស' }}</a>
                    </li>
                    <li class="hover:bg-[#5897FF]"><a href="/ourprogram#3"
                            class="block px-2 py-2 text-[14px] text-[#000]">{{ app()->getLocale() === 'en' ? 'Applied Behavior Analysis' : 'ការវិភាគ និងការអនុវត្តន៍វិធីសាស្រ្តគ្រប់គ្រងវិបត្តិអាកប្បកិរិយា' }}</a>
                    </li>
                    <li class="hover:bg-[#5897FF]"><a href="/ourprogram#4"
                            class="block px-2 py-2 text-[14px] text-[#000]">{{ app()->getLocale() === 'en' ? 'Occupational Therapy (OT)' : 'ការព្យាបាលមុខងារប្រចាំថ្ងៃ' }}</a>
                    </li>
                    <li class="hover:bg-[#5897FF]"><a href="/ourprogram#5"
                            class="block px-2 py-2 text-[14px] text-[#000]">{{ app()->getLocale() === 'en' ? 'Sensory Integration Therapy' : 'ការព្យាបាលដោយការរួមបញ្ចូលញាណដឹង' }}</a>
                    </li>
                    <li class="hover:bg-[#5897FF]"><a href="/ourprogram#6"
                            class="block px-2 py-2 text-[14px] text-[#000]">{{ app()->getLocale() === 'en' ? 'Early Intervention Therapy' : 'ការជួយជម្រុញអោយទាន់ពេលវេលា' }}</a>
                    </li>
                    <li class="hover:bg-[#5897FF]"><a href="/ourprogram#7"
                            class="block px-2 py-2 text-[14px] text-[#000]">{{ app()->getLocale() === 'en' ? 'Play Therapy' : 'ការព្យាបាលតាមរយៈការលេង' }}</a>
                    </li>
                    <li class="hover:bg-[#5897FF]"><a href="/ourprogram#8"
                            class="block px-2 py-2 text-[14px] text-[#000]">{{ app()->getLocale() === 'en' ? 'Speech Therapy' : 'ការព្យាបាលភាសា' }}</a>
                    </li>
                    <li class="hover:bg-[#5897FF]"><a href="/ourprogram#9"
                            class="block px-2 py-2 text-[14px] text-[#000]">{{ app()->getLocale() === 'en' ? 'Art Therapy' : 'ការព្យាបាលតាមបែបសិល្បៈ' }}</a>
                    </li>
                    <li class="hover:bg-[#5897FF]"><a href="/ourprogram#10"
                            class="block px-2 py-2 text-[14px] text-[#000]">{{ app()->getLocale() === 'en' ? 'Picture Exchange Communication System (PECS)' : 'ការទំនាក់ទំនងតាមរយៈការផ្លាស់ប្តូររូបភាព' }}</a>
                    </li>

                    <li class="hover:bg-[#5897FF]"><a href="/ourprogram#11"
                            class="block px-2 py-2 text-[14px] text-[#000]">{{ app()->getLocale() === 'en' ? 'School Readiness Program' : 'កម្មវិធីរៀបចំសម្រាប់ចូលសាលា' }}</a>
                    </li>

                    <li class="hover:bg-[#5897FF]"><a href="/ourprogram#12"
                            class="block px-2 py-2 text-[14px] text-[#000]">{{ app()->getLocale() === 'en' ? 'Activities of Daily Living Training' : 'ការបណ្តុះបណ្តាលសកម្មភាពប្រចាំថ្ងៃ' }}</a>
                    </li>
                    <li class="hover:bg-[#5897FF]"><a href="/ourprogram#13"
                            class="block px-2 py-2 text-[14px] text-[#000]">{{ app()->getLocale() === 'en' ? 'Parent Education and Counselling' : 'ការអប់រំ និងប្រឹក្សាអាណាព្យាបាល' }}</a>
                    </li>
                    <li class="hover:bg-[#5897FF]"><a href="/ourprogram#14"
                            class="block px-2 py-2 text-[14px] text-[#000]">{{ app()->getLocale() === 'en' ? 'Cerebral Palsy Development Program' : 'កម្មវិធីអភិវឌ្ឍន៍សម្រាប់កុមារដែលមានពិការចលករខួរក្បាល' }}</a>
                    </li> --}}
                </ul>
            </li>
            <li class="relative group">
                <a href="{{ route('professionalteam') }}"
                    class="px-5 xl:px-7 py-4 xl:py-4 text-[14px] xl:text-[19px] nav_link {{ Route::is('professionalteam') ? 'py-2 px-5 rounded-full bg-gradient-to-r from-[#5897FF] to-[#1C0186]' : '' }}">{{ app()->getLocale() === 'en' ? 'Professional Team' : 'អ្នកជំនាញ' }}</a>
            </li>
            <li class="relative group">
                <a href="{{ route('career') }}"
                    class="px-5 xl:px-7 py-4 xl:py-4 text-[14px] xl:text-[19px] nav_link {{ Route::is('career') ? 'py-2 px-5 rounded-full bg-gradient-to-r from-[#5897FF] to-[#1C0186]' : '' }}">{{ app()->getLocale() === 'en' ? 'Career' : 'ឱកាសការងារ' }}</a>
            </li>
            <li class="relative group">
                <a href="{{ route('articles') }}"
                    class="px-5 xl:px-7 py-4 xl:py-4 text-[14px] xl:text-[19px] nav_link {{ Route::is('articles') ? 'py-2 px-5 rounded-full bg-gradient-to-r from-[#5897FF] to-[#1C0186]' : '' }}">{{ app()->getLocale() === 'en' ? 'Articles' : 'អត្ថបទ' }}</a>
            </li>
            <li class="relative group">
                <a href="{{ route('event') }}"
                    class="px-5 xl:px-7 py-4 xl:py-4 text-[14px] xl:text-[19px] nav_link {{ Route::is('event') ? 'py-2 px-5 rounded-full bg-gradient-to-r from-[#5897FF] to-[#1C0186]' : '' }}">{{ app()->getLocale() === 'en' ? 'Events' : 'ព្រឹត្តិការណ៍' }}</a>
            </li>
            <li class="relative group">
                <a href="{{ route('contact') }}"
                    class="px-5 xl:px-7 py-4 xl:py-4 text-[14px] xl:text-[19px] nav_link {{ Route::is('contact') ? 'py-2 px-5 rounded-full bg-gradient-to-r from-[#5897FF] to-[#1C0186]' : '' }}">{{ app()->getLocale() === 'en' ? 'Contact Us' : 'ការទំនាក់ទំនង' }}</a>
            </li>
        </ul>
    </div>
</nav>
