@extends('layouts.master')

@section('content')
    <style>
        .swiper-certificate .swiper {
            margin-inline: initial;
            padding-top: 4rem;
            padding-bottom: 6rem;
        }

        .swiper-certificate .swiper-pagination .swiper-pagination-bullet {
            background-color: #2E4354;
            width: 6px;
            height: 6px;
            border-radius: 50%;
            margin: 0 5px;
        }

        .swiper-certificate .swiper-pagination .swiper-pagination-bullet-active {
            width: 16px;
            height: 6px;
            border-radius: 10px;
            background-color: #2E4354;
        }
    </style>

    <section class="">

        <div class="w-full h-[60vh] md:h-screen">
            <img src="{{ asset($banner_image->image) }}"
                class="absolute z-1 w-full h-[60vh] md:h-screen inset-0 object-cover" alt="">
            <div class="absolute h-[60vh] object-cover md:h-screen inset-0 z-10 bg-black/50"></div>

            <div class="relative z-10 px-4 max-w-[700px] mx-auto pt-[10vh] md:pt-[30vh]">
                <h1 class="text-[25px] md:text-[50px] text-center text-gradient font-[700]">{{ __('message.about_us') }}</h1>
                <p class="text-left text-white text-[14px] lg:text-[16px]">{{ __('message.about_us_content') }}</p>

            </div>
        </div>
        <div id="mission" class="relative md:-top-[100px] max-w-7xl mx-auto z-40 px-4 mt-5 md:mt-0">
            <div class="grid grid-cols-1 grid-rows-1 lg:grid-cols-2 lg:grid-rows-3 gap-4 w-full">
                <div class="bg-[#5796FF] rounded-md">
                    <div class="flex justify-center flex-col lg:flex-row items-center gap-10 p-10">
                        <img src="{{ asset('assets/mission.png') }}" alt="" class="w-24 h-24">
                        <div class="flex flex-col">
                            <h1 class="text-[#F6F6F6] text-[15px] md:text-[25px] font-semibold">{{ __('message.mission') }}</h1>
                            <p class="text-[#F6F6F6] font-regular text-[13px] md:text-[15px]">{{ __('message.mission_content') }}</p>
                        </div>
                    </div>
                </div>

                <div id="core_values" class="bg-[#C3D500] order-last lg:order-none row-span-1 lg:row-span-3 rounded-md">
                    <div class="flex justify-center lg:justify-start flex-col items-center lg:items-start gap-2 p-10">

                        <img src="{{ asset('assets/value.png') }}" alt="" class="w-24 h-24 mt-4">
                        <h2 class="text-[#1C0186] text-[15px] md:text-[25px] font-semibold pt-2">{{ __('message.core_values') }}</h2>

                        <!-- 1 -->
                        <div>
                            <h1 class="text-[#1C0186] text-[15px] md:text-[20px] font-regular">{{ __('message.core_values_title1') }} </h1>
                            <p class="md:text-[15px] text-[10px] text-[#1C0186] font-regular">
                                {{ __('message.core_values_des1') }}
                            </p>
                        </div>

                        <!-- 2 -->
                        <div>
                            <h1 class="text-[#1C0186] text-[15px] md:text-[20px] font-regular">{{ __('message.core_values_title2') }}
                            </h1>
                            <p class="md:text-[15px] text-[10px]  text-[#1C0186] font-regular">
                                {{ __('message.core_values_des2') }}
                            </p>
                        </div>

                        <!-- 3 -->
                        <div>
                            <h1 class="text-[#1C0186] text-[15px] md:text-[20px] font-regular">{{ __('message.core_values_title3') }}</h1>
                            <p class="md:text-[15px] text-[10px] text-[#1C0186] font-regular">
                                {{ __('message.core_values_des3') }}
                            </p>
                        </div>

                        <!-- 4 -->
                        <div>
                            <h1 class="text-[#1C0186] text-[15px] md:text-[20px] font-regular">{{ __('message.core_values_title4') }}</h1>
                            <p class="md:text-[15px] text-[10px]  text-[#1C0186] font-regular">
                               {{ __('message.core_values_des4') }}
                            </p>
                        </div>
                    </div>

                </div>

                <div id="vision" class="bg-[#FE5900] rounded-md">
                    <div class="flex justify-center flex-col lg:flex-row  items-center gap-10 p-10">
                        <img src="{{ asset('assets/vision.png') }}" alt="" class="w-24 h-24">
                        <div class="flex flex-col">
                            <h1 class="text-[#F6F6F6] text-[15px] md:text-[25px] font-semibold">{{ __('message.vision') }}</h1>
                            <p class="text-[#F6F6F6] font-regular text-[10px] md:text-[13px]">
                                {{ __('message.vision_content') }}</p>
                        </div>
                    </div>

                </div>

                <!-- Row 3, col 1 -->
                <div id="our_goals" class="bg-[#E3264E] rounded-md">
                    <div class="flex justify-center flex-col lg:flex-row items-center gap-10 p-10">
                        <img src="{{ asset('assets/goal.png') }}" alt="" class="w-24 h-24" />
                        <div class="flex flex-col">
                            <h1 class="text-[#F6F6F6] text-[15px] md:text-[25px] font-semibold">{{ __('message.our_goal') }}</h1>
                            <p class="text-[#F6F6F6] font-regular text-[8px] md:text-[13px]">
                                {{ __('message.our_goal_content') }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>

    {{-- license destop --}}
    <section class="hidden md:block" id="school_license">
        <h1 class="text-[16px] md:text-[30px] text-gradient font-[700] text-center pt-5 md:pt-10">
            {{ app()->getLocale() === 'en' ? "Our Institutes' Licenses" : "Our Institutes' Licenses" }}
        </h1>
        <div class="mt-5">
            <div class='w-full flex gap-4 max-w-7xl mx-auto px-4 my-20 overflow-x-auto'>
                @foreach ($certificates as $index => $certificate)
                    <div class="flex-shrink-0 my-5" data-aos='fade-up' data-aos-duration='1200'>
                        <img src="{{ $certificate->image }}" alt="Certificate {{ $index + 1 }}"
                            class="w-full h-[20rem] lg:h-[25rem] xl:h-[26rem] object-contain object-center" />
                        <h1 class="text-center text-[12px] md:text-[14px] mt-2">
                            {{ app()->getLocale() === 'en' ? $certificate->title_en : $certificate->title_km }}</h1>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- license mobile --}}
    <div id='registration_docs' class='md:hidden swiper-certificate py-10'>
        <h1 class="text-[16px] md:text-[30px] text-gradient font-[700] text-center pb-10">
            {{ app()->getLocale() === 'en' ? "Our Institutes' Licenses" : "Our Institutes' Licenses" }}</h1>
        <div class="swiper certificateSwiper" style="width: 80%; height: 300px; margin: auto;">
            <div class="swiper-wrapper">
                @foreach ($certificates as $index => $certificate)
                    <div class="swiper-slide">
                        <div class="flex flex-col justify-center items-center h-full">
                            <img src="{{ $certificate->image }}" alt=""
                                class="w-full h-[15rem] lg:h-[25rem] xl:h-[26rem] object-contain object-center" />
                            <h1 class="text-center text-[12px] md:text-[14px] mt-2">{{ app()->getLocale() === 'en' ? $certificate->title_en : $certificate->title_km }}</h1>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>

    {{-- banner --}}
    <section class="relative z-20 py-20 w-full mt-10">

        <!-- Background image -->
        <div class="absolute inset-0 bg-cover top-0 left-0 bg-no-repeat grayscales "
            style="background-image: url('{{ asset('assets/kid.png') }}');">
        </div>

        <!-- Dark overlay -->
        <div class="absolute inset-0 bg-black/60 z-0"></div>

        <!-- Content -->
        <div class="relative z-10">
            <p class="w-full max-w-[700px] mx-auto px-2 text-[16px] md:text-[20px] font-medium text-white/90 text-center">
                {{ __("message.banner_content") }}
            </p>
        </div>
    </section>
@endsection
