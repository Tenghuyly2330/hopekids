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
    <link rel="icon" type="image/png" href="{{ asset('assets/logo.jpg') }}">
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- Kantumruy Pro -->
    <link href="https://fonts.googleapis.com/css2?family=Kantumruy+Pro:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
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

    * {

        font-family: "inter", sans-serif;


    }

    .swiper-pagination .swiper-pagination-bullet {
        background-color: #000;
        width: 20px;
        height: 12px;
        border-radius: 10px;
    }

    .swiper-pagination .swiper-pagination-bullet-active {
        width: 20px;
        height: 12px;
        border-radius: 10px;
        background-color: #000;
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

<body class="inter" x-data="{ open: false, dropdown: null }">
    @php
        $locale = app()->getLocale();
    @endphp
    @include('components.navbar')

    <main>
        @yield('content')
    </main>

    {{-- footer --}}



    {{-- location --}}
    <div class="mt-10 px-4" id="find">
        <h1 class="text-[#5796FF] text-[25px] font-light text-center">Find Us!</h1>

        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-6 gap-4 mt-10">
            <div class="flex flex-col gap-3">

                <div class="w-full h-[180px]">
                    <p class="text-[#1E1E1E] text-[15px] font-bold">Phnom Penh <br> (Stueng Mean chey)</p>

                    <p class="text-[#1E1E1E] font-regular text-[11px] xl:text-[12px] mt-2">#579, Street 35C, Phum
                        Meanchey, Sangkat
                        Steung
                        Meanchey, Khan Meanchey, Phnom Penh, Cambodia</p>
                    <p class="text-[#1E1E1E] font-regular text-[11px] xl:text-[12px]">085 253 388 / 086 253 388</p>
                    <p class="text-[#1E1E1E] font-regular text-[11px] xl:text-[12px]">Email:
                        hopekids.info@gmail.com
                    </p>
                    <p class="text-[#1E1E1E] font-regular text-[11px] xl:text-[12px]">Operating Hours: Monday –
                        Friday
                        | 8:00 AM –
                        6:00 PM</p>
                </div>
                <img src="{{ asset('assets/1.jpg') }}" alt=""
                    class="w-full h-[200px] md:h-[150px] object-cover">
                <div class="w-full h-[200px] md:h-[120px]">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d59452.627223846284!2d104.8816533!3d11.5365121!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3109510f5db80c37%3A0x98a09bf77e8ffbbe!2sHope%20Kids!5e1!3m2!1skm!2skh!4v1763456250580!5m2!1skm!2skh"
                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>

                </div>
            </div>

            <div class="flex flex-col gap-3">

                <div class="w-full h-[180px]">
                    <p class="text-[#1E1E1E] text-[15px] font-bold">Phnom Penh <br> (Peng Huot Beng Snor)</p>

                    <p class="text-[#1E1E1E] font-regular text-[11px] xl:text-[12px]">#579, Street 35C, Phum
                        Meanchey,
                        Sangkat Steung
                        Meanchey,
                        Khan Meanchey, Phnom Penh, Cambodia</p>
                    <p class="text-[#1E1E1E] font-regular text-[11px] xl:text-[12px]">010 727 416 / 085 727 416</p>
                    <p class="text-[#1E1E1E] font-regular text-[11px] xl:text-[12px]">Email:
                        hopekids.info@gmail.com
                    </p>
                    <p class="text-[#1E1E1E] font-regular text-[11px] xl:text-[12px]">Operating Hours: Monday –
                        Friday
                        | 8:00 AM –
                        6:00 PM
                    </p>
                </div>

                <img src="{{ asset('assets/2.jpg') }}" class="w-full h-[200px] md:h-[150px] object-cover"
                    alt="">
                <div class="w-full h-[200px] md:h-[120px]">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d29725.908552752466!2d104.9090806!3d11.5403364!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31095741c53872d5%3A0x16dff306476054b!2sHope%20kids%20Special%20Education%20school%20Boeung%20Snor!5e1!3m2!1skm!2skh!4v1763538992182!5m2!1skm!2skh"
                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>

                </div>
            </div>

            <div class="flex flex-col gap-3">
                <div class="w-full h-[180px]">
                    <p class="text-[#1E1E1E] text-[15px] font-bold">Kampot</p>

                    <p class="text-[#1E1E1E] font-regular text-[11px] xl:text-[12px]">#579, Street 35C, Phum
                        Meanchey,
                        Sangkat Steung
                        Meanchey,
                        Khan Meanchey, Phnom Penh, Cambodia</p>
                    <p class="text-[#1E1E1E] font-regular text-[11px] xl:text-[12px]">090 333 185 / 085 333 815</p>
                    <p class="text-[#1E1E1E] font-regular text-[11px] xl:text-[12px]">Email:
                        hopekids.info@gmail.com
                    </p>
                    <p class="text-[#1E1E1E] font-regular text-[11px] xl:text-[12px]">Operating Hours: Monday –
                        Friday
                        | 8:00 AM –
                        6:00 PM
                    </p>
                </div>


                <img src="{{ asset('assets/kampot.jpg') }}" class="w-full h-[200px] md:h-[150px] object-cover"
                    alt="">
                <div class="w-full h-[200px] md:h-[120px]">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3726.5118856022223!2d104.5720087!3d10.696274499999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3109bfc52bb358cb%3A0x7dc9b45554d80dfa!2sHope%20Kids%20Special%20Education%20School%20Toukmeas%20Branch!5e1!3m2!1skm!2skh!4v1763539462498!5m2!1skm!2skh"
                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>

            <div class="flex flex-col gap-3">
                <div class="w-full h-[180px]">

                    <p class="text-[#1E1E1E] text-[15px] font-bold">Battambang</p>

                    <p class="text-[#1E1E1E] font-regular text-[11px] xl:text-[12px]">#579, Street 35C, Phum
                        Meanchey,
                        Sangkat Steung
                        Meanchey, Khan Meanchey, Phnom Penh, Cambodia</p>
                    <p class="text-[#1E1E1E] font-regular text-[11px] xl:text-[12px]">085 227 436 / 010 227 436</p>
                    <p class="text-[#1E1E1E] font-regular text-[11px] xl:text-[12px]">Email:
                        hopekids.info@gmail.com
                    </p>
                    <p class="text-[#1E1E1E] font-regular text-[11px] xl:text-[12px]">Operating Hours: Monday –
                        Friday
                        | 8:00 AM –
                        6:00 PM
                    </p>
                </div>

                <img src="{{ asset('assets/battambang.jpg') }}" class="w-full h-[200px] md:h-[150px] object-cover"
                    alt="">
                <div class="w-full h-[200px] md:h-[120px]">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1897021.1982686522!2d102.7590864!3d12.316543!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31054b0eeb0ac569%3A0xf47e3e1959da725d!2sHope%20Kids%20Special%20Education%20School%20Battambang!5e1!3m2!1skm!2skh!4v1763538841595!5m2!1skm!2skh"
                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>

                </div>
            </div>

            <div class="flex flex-col gap-3">
                <div class="w-full h-[180px]">
                    <p class="text-[#1E1E1E] text-[15px] font-bold">Banteay Mean Chey</p>

                    <p class="text-[#1E1E1E] font-regular text-[11px] xl:text-[12px]">#579, Street 35C, Phum
                        Meanchey,
                        Sangkat Steung
                        Meanchey, Khan Meanchey, Phnom Penh, Cambodia</p>
                    <p class="text-[#1E1E1E] font-regular text-[11px] xl:text-[12px]">096 888 3165/090 888 316</p>
                    <p class="text-[#1E1E1E] font-regular text-[11px] xl:text-[12px]">Email:
                        hopekids.info@gmail.com
                    </p>
                    <p class="text-[#1E1E1E] font-regular text-[11px] xl:text-[12px]">Operating Hours: Monday –
                        Friday
                        | 8:00 AM –
                        6:00 PM
                    </p>
                </div>
                <img src="{{ asset('assets/banteaymeanchey.jpg') }}"
                    class="w-full h-[200px] md:h-[150px] object-cover" alt="">
                <div class="w-full h-[200px] md:h-[120px]">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3686.2789026689784!2d102.95208819999999!3d13.586583!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x311ae78620f2b49d%3A0xff2eb4052b12ba18!2sHope%20Kids%20Special%20Education%20School%20-%20Banteymeanchey!5e1!3m2!1skm!2skh!4v1763539635032!5m2!1skm!2skh"
                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>

            <div class="flex flex-col gap-3">
                <div class="w-full h-[180px]">
                    <p class="text-[#1E1E1E] text-[15px] font-bold">Ratanakiri</p>

                    <p class="text-[#1E1E1E] font-regular text-[11px] xl:text-[12px]">#579, Street 35C, Phum
                        Meanchey,
                        Sangkat Steung
                        Meanchey, Khan Meanchey, Phnom Penh, Cambodia</p>
                    <p class="text-[#1E1E1E] font-regular text-[11px] xl:text-[12px]">066 888 309 / 096 888 2037
                    </p>
                    <p class="text-[#1E1E1E] font-regular text-[11px] xl:text-[12px]">Email:
                        hopekids.info@gmail.com
                    </p>
                    <p class="text-[#1E1E1E] font-regular text-[11px] xl:text-[12px]">Operating Hours: Monday –
                        Friday
                        | 8:00 AM –
                        6:00 PM
                    </p>
                </div>
                <img src="{{ asset('assets/ratanakkiri.jpg') }}" class="w-full h-[200px] md:h-[150px] object-cover"
                    alt="">
                <div class="w-full h-[200px] md:h-[120px]">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3683.87248099572!2d106.97970407485575!3d13.740491786650187!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x316ce10032547b37%3A0xef7f7b51dd358947!2sHope%20Kids%20Ratanakiri!5e1!3m2!1sen!2skh!4v1763539086933!5m2!1sen!2skh"
                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>

        </div>
    </div>

    <div class="mt-5">
        <div class="bg-[#5796FF] w-full py-10 px-5">
            <div class="max-w-7xl mx-auto flex flex-col lg:flex-row justify-between gap-10 text-white">

                <!-- Column 1: Logo & About -->
                <div class="flex-1 flex flex-col gap-5">
                    <div class="flex items-center gap-5">
                        <img src="{{ asset('assets/logo.jpg') }}" class="w-20 h-20 md:w-24 md:h-24 rounded-full"
                            alt="Logo" />
                        <div>
                            <h2 class="text-2xl md:text-3xl font-bold leading-tight kantumruy">ក្តីសង្ឃឺមកុមារ</h2>
                            <h2 class="text-xl md:text-2xl font-black leading-tight">HOPE KIDS</h2>
                            <h3 class="text-sm md:text-lg font-semibold">Special Education School</h3>
                        </div>
                    </div>

                    <p class="text-sm md:text-base font-light max-w-md">
                        Hope Kids Special Education School is a leading autism and special needs education center in
                        Phnom Penh and across Cambodia. We provide affordable programs for children with autism,
                        ADHD,
                        cerebral palsy, and other developmental challenges through compassionate teaching and
                        therapy.
                    </p>

                    <!-- Social Icons -->
                    <ul class="flex gap-4 text-2xl md:text-2xl mt-3">
                        <li>
                            <a href="https://www.facebook.com/hopekidspp" target="_blank" class="text-[#007BFF]">
                                <i class="fa-brands fa-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://bio.link/hopekidsinfo" target="__blank" class="text-[#039BE5]">
                                <i class="fa-brands fa-telegram"></i>
                            </a>
                        </li>
                        <li><a style="color:white"
                                href="https://www.tiktok.com/@hopekidsofficial?_t=ZS-8uAfAIUNOFe&_r=1"
                                target="__blank"><img src="{{ asset('assets/tiktok1.png') }}" class="w-6 h-6 mt-1"
                                    alt=""></a></li>
                        <li>
                            <a style="color: red" href="https://www.youtube.com/@HopeKids-cambodia" target="__black">
                                <i class="fa-brands fa-youtube"></i>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Column 2: Navigation Links -->
                <div class="flex justify-center lg:ms-10">
                    <div class="flex-1 lg:ms-10 mt-10 lg:mt-0">
                        <h2 class="text-lg md:text-[25px] font-bold mb-4">Information</h2>
                        <ul class="space-y-3 text-sm md:text-base font-light">
                            <li><a href="{{ URL('/') }}" class="hover:underline">Home</a></li>
                            <li><a href="{{ URL('/about') }}" class="hover:underline">About Us</a></li>
                            <li><a href="{{ URL('/ourprogram') }}" class="hover:underline">Our Programs</a></li>
                            <li><a href="{{ URL('/professionalteam') }}" class="hover:underline">Professional
                                    Team</a></li>
                            <li><a href="{{ URL('/career') }}" class="hover:underline">Career</a></li>
                            <li><a href="{{ URL('/articles') }}" class="hover:underline">Article</a></li>
                            <li><a href="{{ URL('/event') }}" class="hover:underline">Event</a></li>

                            <li><a href="{{ URL('/contact') }}" class="hover:underline">Contact</a></li>
                        </ul>
                    </div>
                    <div class="flex-1 mt-10 lg:mt-0 md:hidden">
                        <h2 class="text-lg md:text-xl font-bold mb-4">Contact Us</h2>
                        <p class="text-sm md:text-base font-light mb-2">
                            #579, Street 35C, Phum Meanchey, Sangkat Steung Meanchey, Khan Meanchey, Phnom Penh,
                            Cambodia
                        </p>
                        <p class="text-sm md:text-base font-light mt-2">012 345 678 | 010 654 987</p>
                        <p class="text-sm md:text-base font-light mt-2">Email: hopekids.info@gmail.com</p>
                        <p class="text-sm md:text-base font-light mt-2">
                            Operating Hours: <br> Monday – Friday | 8:00 AM – 6:00 PM
                        </p>
                    </div>
                </div>


                <!-- Column 3: Contact Info -->
                <div class="flex-1 lg:ms-[30px] mt-10 lg:mt-0 hidden md:block">
                    <h2 class="text-lg md:text-[25px] font-bold mb-4">Contact Us</h2>
                    <p class="text-sm md:text-base font-light mb-2">
                        #579, Street 35C, Phum Meanchey, Sangkat Steung Meanchey, Khan Meanchey, Phnom Penh,
                        Cambodia
                    </p>
                    <p class="text-sm md:text-base font-light mt-2">085 253 388</p>
                    <p class="text-sm md:text-base font-light mt-2">Email: hopekids.info@gmail.com</p>
                    <p class="text-sm md:text-base font-light mt-2">
                        Operating Hours: <br> 8:00-12:00 & 14:00-17:00
                    </p>
                </div>

            </div>
        </div>

        <!-- Footer Text -->
        <p class="text-[#5796FF] text-[15px] md:text-[17px] mt-5 font-light text-center">
            HOPE KIDS Special Education School
        </p>
    </div>

</body>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".mySwiper", {
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
</script>

</html>
