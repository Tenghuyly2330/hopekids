@extends('layouts.master')

@section('content')
    <section class="w-full h-[60vh] md:h-screen">
        <div class="absolute w-full h-[60vh] md:h-screen inset-0 z-10 bg-black/50"></div>
        <img src="{{ asset('assets/contact_hero.png') }}"
            class="absolute object-cover z-1 w-full h-[60vh] md:h-screen inset-0 " alt="">
        <div>
            <div class="relative z-10 pt-[15vh] md:pt-[30vh]">
                <h1 class="text-[25px] md:text-[50px] text-center text-gradient font-[700]">
                    {{ app()->getLocale() === 'en' ? 'Contact Us' : 'ការទំនាក់ទំនង' }}</h1>
                <p class="text-left max-w-[700px] mx-auto md:text-[18px] text-white text-[15px] lg:text-[16px] px-4">
                    Hope Kids provides affordable, inclusive, and professional education for
                    children with autism and special needs in Phnom Penh and across
                    Cambodia</p>

            </div>
        </div>
    </section>

    <div class="mt-5 md:mt-10 px-5">

        <div class="grid grid-cols-1 lg:grid-cols-2 justify-center w-full max-w-7xl mx-auto px-4">

            <!-- Left Column -->
            <div class="flex flex-col items-center lg:items-start">

                <!-- Social Icons -->
                <ul class="flex items-center gap-6 md:gap-10 text-xl md:text-2xl">
                    <li>
                        <a href="https://www.facebook.com/hopekidspp" target="_blank" class="text-[#007BFF]">
                            <i class="fa-brands fa-facebook text-4xl md:text-5xl"></i>
                        </a>
                    </li>

                    <li>
                        <a href="https://bio.link/hopekidsinfo" target="_blank" class="text-[#039BE5]">
                            <i class="fa-brands fa-telegram text-4xl md:text-5xl"></i>
                        </a>
                    </li>

                    <li>
                        <a href="https://www.tiktok.com/@hopekidsofficial?_t=ZS-8uAfAIUNOFe&_r=1" target="_blank">
                            <img src="{{ asset('assets/tiktok1.png') }}" class="w-10 h-10 md:w-14 md:h-14" alt="">
                        </a>
                    </li>

                    <li>
                        <a href="https://www.youtube.com/@HopeKids-cambodia" target="_blank" class="text-red-500">
                            <i class="fa-brands fa-youtube text-4xl md:text-5xl"></i>
                        </a>
                    </li>
                </ul>

                <!-- QR -->
                <img src="{{ asset('assets/qr.png') }}" class="w-48 md:w-64 mt-6 lg:ms-20" alt="">

                <h1 class="text-[#5796FF] text-2xl md:text-3xl font-light mt-3 lg:ms-28">
                    Hot Line
                </h1>

            </div>

            <!-- Right Column -->
            <div class="text-center lg:text-left max-w-md">
                <h2 class="text-xl md:text-2xl font-bold mb-4">{{ app()->getLocale() === 'en' ? 'Contact Us' : 'ការទំនាក់ទំនង' }}</h2>

                <p class="text-sm md:text-base font-light mb-2">
                    #579, Street 35C, Phum Meanchey, Sangkat Steung Meanchey,<br>
                    Khan Meanchey, Phnom Penh, Cambodia
                </p>

                <p class="text-sm md:text-base font-light mt-4"> 086 253 388</p>
                <p class="text-sm md:text-base font-light mt-4">085 253 388</p>
                <p class="text-sm md:text-base font-light mt-4">Email: hopekids.info@gmail.com</p>

                <p class="text-sm md:text-base font-light mt-4">
                    Operating Hours: <br>
                    Monday – Friday | 8:00 AM – 6:00 PM
                </p>
            </div>

        </div>

    </div>
@endsection
