<!DOCTYPE html>
<html lang="en">

<head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/intersect@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="icon" type="image/png" href="{{ asset('assets/images/logo_new.png') }}">
    <title>Hope Kids School</title>

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- Kantumruy Pro -->
    <link href="https://fonts.googleapis.com/css2?family=Kantumruy+Pro:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>

    {{-- aos --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<style>
    [x-cloak] {
        display: none !important;
    }

    .text-gradient {
        background: linear-gradient(90deg, #5897FF 0%, #1C0186 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }


    @property --num {
        syntax: "<integer>";
        initial-value: 0;
        inherits: false;
    }

    @keyframes counter {
        from {
            --num: 0;
        }

        to {
            --num: 5;
        }
    }

    .kantumruy {
        font-family: "Kantumruy Pro", sans-serif;
    }

    .inter {
        font-family: "Inter", sans-serif;
    }

    .animate-counter {
        animation: counter 1s linear forwards;
        counter-reset: value var(--num);
    }

    .animate-counter::after {
        content: counter(value);
    }

    /* Counter to 6 */
    @keyframes counter-6 {
        from {
            --num: 0;
        }

        to {
            --num: 7;
        }
    }

    .animate-counter-6 {
        animation: counter-6 1s linear forwards;
        counter-reset: value var(--num);
    }

    .animate-counter-6::after {
        content: counter(value);
    }

    /* Counter to 100 */
    @keyframes counter-100 {
        from {
            --num: 0;
        }

        to {
            --num: 116;
        }
    }

    .animate-counter-100 {
        animation: counter-100 1s linear forwards;
        counter-reset: value var(--num);
    }

    .animate-counter-100::after {
        content: counter(value);
    }

    /* Counter to 30 */
    @keyframes counter-30 {
        from {
            --num: 0;
        }

        to {
            --num: 46;
        }
    }

    .animate-counter-30 {
        animation: counter-30 1s linear forwards;
        counter-reset: value var(--num);
    }

    .animate-counter-30::after {
        content: counter(value);
    }

    .prose ul {
        list-style-type: disc;
        padding-left: 1.25rem;
        font-size: 16px;
    }

    .prose ul li::marker {}

    .prose ol {
        list-style-type: decimal;
        padding-left: 1.25rem;
        font-size: 16px;
    }

    .prose p {
        font-size: 16px;
    }

    .prose strong {
        font-size: 18px;
    }

    @media (max-width: 639px) {

        .prose strong {
            font-size: 16px;
        }

        .prose p span {
            font-size: 14px;
        }

        .prose ul {
            list-style-type: disc;
            padding-left: 1.25rem;
            font-size: 14px;
        }
    }


    html {
        scroll-behavior: smooth;
    }

    .swiper-pagination .swiper-pagination-bullet {
        background-color: #000;
        width: 30px;
        height: 20px;
        border-radius: 10px;
    }

    .swiper-pagination .swiper-pagination-bullet-active {
        width: 30px;
        height: 20px;
        border-radius: 10px;
        background-color: #5739f1;
    }

    .swiper {
        margin-inline: initial;
        padding-top: 2rem;
        padding-bottom: 4rem;
    }

    @media (max-width: 768px) {
        .swiper-pagination .swiper-pagination-bullet {
            background-color: #000;
            width: 6px;
            height: 6px;
            border-radius: 50%;
            margin: 0 5px;
        }

        .swiper-pagination .swiper-pagination-bullet-active {
            width: 16px;
            height: 6px;
            border-radius: 10px;
            background-color: #000;
        }
    }
</style>

<body class="{{ app()->getLocale() === 'en' ? 'inter' : 'kantumruy' }}" x-data="{ open: false, dropdown: null }">
    @php
        $locale = app()->getLocale();
    @endphp
    @include('components.navbar', [
        'programs' => $programs,
        'fb' => $fb,
        'telegram' => $telegram,
        'tiktok' => $tiktok,
        'yt' => $yt,
    ])

    <main>
        @yield('content')
    </main>

    {{-- footer --}}



    {{-- location --}}
    <div class="mt-10 px-4 overflow-hidden" id="find">
        <h1 class="text-gradient text-[25px] md:text-[30px] font-[700] text-center" data-aos="fade-right"
            data-aos-duration="800">
            {{ app()->getLocale() === 'en' ? 'Find Us!' : 'ស្វែងរកសាខាដែលនៅជិតលោកអ្នក' }}</h1>

        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-6 gap-4 mt-10 overflow-hidden" data-aos="fade-up"
            data-aos-duration="800">

            @foreach ($branches as $item)
                <div class="flex flex-col gap-3">

                    <div class="w-full h-[180px]">
                        <p class="text-[#1E1E1E] text-[15px] font-bold">
                            {{ app()->getLocale() === 'en' ? $item->title_en : $item->title_km }}
                        </p>

                        <div class="text-[#1E1E1E] font-regular text-[11px] xl:text-[12px] mt-2">
                            {!! app()->getLocale() === 'en' ? $item->content_en : $item->content_km !!}
                        </div>
                    </div>
                    <img src="{{ asset($item->image) }}" alt=""
                        class="w-full h-[200px] md:h-[150px] object-cover">
                    <div class="w-full h-[200px] md:h-[120px]">
                        <iframe src="{{ $item->url_map }}" width="100%" height="100%" style="border:0;"
                            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                        </iframe>

                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="mt-5">
        <div class="bg-[#5796FF] w-full py-10 px-5">
            <div class="max-w-7xl mx-auto flex flex-col lg:flex-row justify-between gap-10 text-white">

                <!-- Column 1: Logo & About -->
                <div class="flex-1 flex flex-col gap-5">
                    <div class="flex items-center gap-5">
                        <img src="{{ asset('assets/images/logo_new.png') }}" class="w-20 h-20 md:w-24 md:h-24"
                            alt="Logo" />
                        {{-- <div>
                            <h2 class="text-2xl md:text-3xl font-bold leading-tight kantumruy">{{ app()->getLocale() === 'en' ? 'សាលារៀនអប់រំពិសេស' : 'Hope ' }}</h2>
                            <h3 class="text-sm md:text-lg font-semibold">
                                {{ app()->getLocale() === 'en' ? 'Special Education School' : 'ក្តីសង្ឃឹមកុមារ' }}
                            </h3>
                        </div> --}}
                        <div class="flex items-center justify-center" data-aos="fade-up" data-aos-duration="800">
                            {!! app()->getLocale() === 'en'
                                ? '<div class="flex flex-col">
                                <h2 class="text-2xl md:text-3xl font-bold leading-tight">Hope Kids</h2>
                                    <h3 class="text-sm md:text-lg font-semibold">
                                        Special Education School
                                    </h3>
                                    </div>'
                                : '<div class="flex flex-col">
                                    <h3 class="text-sm md:text-lg font-semibold">
                                        សាលារៀនអប់រំពិសេស
                                    </h3>
                                    <h2 class="text-2xl md:text-3xl font-bold leading-tight">ក្ដីសង្ឃឹមកុមារ</h2>
                                </div>' !!}
                        </div>
                    </div>

                    <p class="text-sm md:text-base font-light max-w-md">
                        {{ app()->getLocale() === 'en' ? 'Hope Kids Special Education School is a leading autism and special needs education center in Phnom Penh and across Cambodia. We provide affordable programs for children with autism, ADHD, cerebral palsy, and other developmental challenges through compassionate teaching and therapy.' : 'សាលារៀនអប់រំពិសេសហូបឃីដគឺជាសាលារៀនផ្តល់សេវាកម្មអប់រំសម្រាប់កុមារដែលមានជំងឺអូទីសឹម និងតម្រូវការពិសេសឈានមុខគេមួយនៅក្នុងទីក្រុងភ្នំពេញ និងទូទាំងប្រទេសកម្ពុជា។ យើងផ្តល់ជូននូវកម្មវិធីដែលមានតម្លៃសមរម្យសម្រាប់កុមារដែលមានជំងឺអូទីសឹម ជំងឺADHD ពិការចលករខួរក្បាល និងបញ្ហាប្រឈមនៃការអភិវឌ្ឍន៍ផ្សេងៗទៀត តាមរយៈការបង្រៀន និងការព្យាបាលដោយក្តីមេត្តាករុណា។' }}
                    </p>

                    <!-- Social Icons -->
                    <ul class="flex gap-4 text-2xl md:text-2xl mt-3">
                        <li>
                            <a href="{{ $fb->url }}" target="__blank">
                                <svg class="w-6 h-6" viewBox="0 0 21 21" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.3559 0C4.64566 0 0 4.64566 0 10.3559C0 16.0656 4.64566 20.7117 10.3559 20.7117C16.0656 20.7117 20.7117 16.0656 20.7117 10.3559C20.7117 4.64566 16.0665 0 10.3559 0ZM12.9313 10.7204H11.2465V16.7256H8.74988C8.74988 16.7256 8.74988 13.4443 8.74988 10.7204H7.56312V8.59804H8.74988V7.22524C8.74988 6.24205 9.21708 4.70573 11.2694 4.70573L13.1194 4.71282V6.77306C13.1194 6.77306 11.9952 6.77306 11.7766 6.77306C11.5581 6.77306 11.2473 6.88235 11.2473 7.35122V8.59846H13.1494L12.9313 10.7204Z"
                                        fill="#007BFF" />
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="{{ $telegram->url }}" target="__blank">
                                <svg class="w-6 h-6" viewBox="0 0 21 21" fill="none"
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
                                <svg class="w-6 h-6" viewBox="0 0 21 21" fill="none"
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
                                <svg class="h-6" viewBox="0 0 20 14" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M8 10L13.19 7L8 4V10ZM19.56 2.17C19.69 2.64 19.78 3.27 19.84 4.07C19.91 4.87 19.94 5.56 19.94 6.16L20 7C20 9.19 19.84 10.8 19.56 11.83C19.31 12.73 18.73 13.31 17.83 13.56C17.36 13.69 16.5 13.78 15.18 13.84C13.88 13.91 12.69 13.94 11.59 13.94L10 14C5.81 14 3.2 13.84 2.17 13.56C1.27 13.31 0.69 12.73 0.44 11.83C0.31 11.36 0.22 10.73 0.16 9.93C0.0900001 9.13 0.0599999 8.44 0.0599999 7.84L0 7C0 4.81 0.16 3.2 0.44 2.17C0.69 1.27 1.27 0.69 2.17 0.44C2.64 0.31 3.5 0.22 4.82 0.16C6.12 0.0899998 7.31 0.0599999 8.41 0.0599999L10 0C14.19 0 16.8 0.16 17.83 0.44C18.73 0.69 19.31 1.27 19.56 2.17Z"
                                        fill="#FF0000" />
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Column 2: Navigation Links -->
                <div class="flex justify-center lg:ms-10">
                    <div class="flex-1 lg:ms-10 mt-10 lg:mt-0">
                        <h2 class="text-lg md:text-[25px] font-bold mb-4">
                            {{ app()->getLocale() === 'en' ? 'Information' : 'ព័ត៌មាន' }}</h2>
                        <ul class="space-y-3 text-sm md:text-base font-light">
                            <li><a href="{{ URL('/') }}"
                                    class="hover:underline">{{ app()->getLocale() === 'en' ? 'Home' : 'ទំព័រដើម' }}</a>
                            </li>
                            <li><a href="{{ URL('/about') }}"
                                    class="hover:underline">{{ app()->getLocale() === 'en' ? 'About Us' : 'អំពីយើងខ្ញុំ' }}</a>
                            </li>
                            <li><a href="{{ URL('/ourprogram') }}"
                                    class="hover:underline">{{ app()->getLocale() === 'en' ? 'Our Programs' : 'កម្មវិធីសិក្សា' }}</a>
                            </li>
                            <li><a href="{{ URL('/professionalteam') }}"
                                    class="hover:underline">{{ app()->getLocale() === 'en' ? 'Professional Team' : 'អ្នកជំនាញ' }}</a>
                            </li>
                            <li><a href="{{ URL('/career') }}"
                                    class="hover:underline">{{ app()->getLocale() === 'en' ? 'Career' : 'ឱកាសការងារ' }}</a>
                            </li>
                            <li><a href="{{ URL('/articles') }}"
                                    class="hover:underline">{{ app()->getLocale() === 'en' ? 'Articles' : 'អត្ថបទ' }}</a>
                            </li>
                            <li><a href="{{ URL('/event') }}"
                                    class="hover:underline">{{ app()->getLocale() === 'en' ? 'Events' : 'ព្រឹត្តិការណ៍ ' }}</a>
                            </li>
                            <li><a href="{{ URL('/contact') }}"
                                    class="hover:underline">{{ app()->getLocale() === 'en' ? 'Contact' : 'ការទំនាក់ទំនង' }}</a>
                            </li>
                        </ul>
                    </div>
                    <div class="flex-1 mt-10 lg:mt-0 md:hidden">
                        <h2 class="text-lg md:text-xl font-bold mb-4">
                            {{ app()->getLocale() === 'en' ? 'Contact Us' : 'ការទំនាក់ទំនង' }}</h2>
                        <p class="text-sm md:text-base font-light mb-2">
                            {{ app()->getLocale() === 'en' ? '#579, Street 35C, Phum Meanchey, Sangkat Steung Meanchey, Khan Meanchey, Phnom Penh, Cambodia' : 'ផ្ទះលេខ ៥៧៩ ផ្លូវលេខ ៣៥C ភូមិមានជ័យ សង្កាត់ស្ទឹងមានជ័យ ខណ្ឌមានជ័យ ភ្នំពេញ កម្ពុជា' }}
                        </p>
                        </p>
                        <p class="text-sm md:text-base font-light mt-2">012 345 678 | 010 654 987</p>
                        <p class="text-sm md:text-base font-light mt-2">
                            {{ app()->getLocale() === 'en' ? 'Email:' : 'អ៊ីមែល៖ ' }} hopekids.info@gmail.com</p>
                        <p class="text-sm md:text-base font-light mt-2">
                            {{ app()->getLocale() === 'en' ? 'Operating Hours: Monday – Friday | 8:00 AM – 6:00 PM' : 'ម៉ោងធ្វើការ៖ ច័ន្ទ – សុក្រ | ៨:០០ ព្រឹក – ៦:០០ ល្ងាច' }}
                        </p>
                    </div>
                </div>


                <!-- Column 3: Contact Info -->
                <div class="flex-1 lg:ms-[30px] mt-10 lg:mt-0 hidden md:block">
                    <h2 class="text-lg md:text-[25px] font-bold mb-4">
                        {{ app()->getLocale() === 'en' ? 'Contact Us' : 'ការទំនាក់ទំនង' }}</h2>
                    <p class="text-sm md:text-base font-light mb-2">
                        {{ app()->getLocale() === 'en' ? '#579, Street 35C, Phum Meanchey, Sangkat Steung Meanchey, Khan Meanchey, Phnom Penh, Cambodia' : 'ផ្ទះលេខ ៥៧៩ ផ្លូវលេខ ៣៥C ភូមិមានជ័យ សង្កាត់ស្ទឹងមានជ័យ ខណ្ឌមានជ័យ ភ្នំពេញ កម្ពុជា' }}
                    </p>
                    </p>
                    <p class="text-sm md:text-base font-light mt-2">085 253 388</p>
                    <p class="text-sm md:text-base font-light mt-2">
                        {{ app()->getLocale() === 'en' ? 'Email:' : 'អ៊ីមែល៖ ' }} hopekids.info@gmail.com</p>
                    <p class="text-sm md:text-base font-light mt-2">
                        {{ app()->getLocale() === 'en' ? 'Operating Hours: Monday – Friday | 8:00 AM – 6:00 PM' : 'ម៉ោងធ្វើការ៖ ច័ន្ទ – សុក្រ | ៨:០០ ព្រឹក – ៦:០០ ល្ងាច' }}
                    </p>
                </div>

            </div>
        </div>

        <!-- Footer Text -->
        <p class="text-[#5796FF] text-[15px] md:text-[17px] my-4 font-light text-center">
            {{ app()->getLocale() === 'en' ? 'HOPE KIDS Special Education School' : 'សាលារៀនអប់រំពិសេសហូបឃីដ' }}
        </p>
    </div>

</body>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
{{-- aos --}}
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<!-- Initialize Swiper -->
<script>
    const swiper = new Swiper(".mySwiper", {
        slidesPerView: 4,
        spaceBetween: 20,
        slidesPerGroup: 4,
        // loop: true,

        breakpoints: {
            320: {
                slidesPerView: 1,
                slidesPerGroup: 1
            },
            640: {
                slidesPerView: 2,
                slidesPerGroup: 2
            },
            1024: {
                slidesPerView: 3,
                slidesPerGroup: 3
            },
            1440: {
                slidesPerView: 4,
                slidesPerGroup: 4
            },
        },

        pagination: {
            el: ".swiper-pagination",
            clickable: true,
            type: "bullets",
        },
    });

    const swiperCertificate = new Swiper(".certificateSwiper", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        coverflowEffect: {
            rotate: 0,
            stretch: 0,
            depth: 100,
            modifier: 1,
            slideShadows: false,
        },
        pagination: {
            el: ".swiper-pagination",
        },
        loop: true,
    });
</script>
<script>
    AOS.init();
</script>

</html>
