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

        .core-text strong {
            font-size: 20px;
            font-weight: 600;
            color: #1C0186;
            text-decoration: underline;
        }

        .core-text ul {
            list-style-type: disc;
            padding-left: 1.25rem;
            font-size: 16px;
        }

        @media (max-width: 767px) {
            .core-text strong {
                font-size: 16px;
                color: #1C0186;
            }

            .core-text ul {
                list-style-type: disc;
                padding-left: 1.25rem;
                font-size: 14px;
            }
        }
    </style>

    <section class="">

        <div class="w-full h-[60vh] lg:h-screen">
            <img src="{{ asset($banner_image->image) }}" class="absolute z-1 w-full h-[60vh] lg:h-screen inset-0 object-cover"
                alt="">
            <div class="absolute h-[60vh] object-cover lg:h-screen inset-0 z-10 bg-black/70"></div>

            <div class="relative z-10 px-4 max-w-[700px] mx-auto pt-[10vh] lg:pt-[30vh] overflow-hidden">
                <h1 class="text-[25px] md:text-[50px] text-center text-[#5897FF] font-[700]"  data-aos="fade-right" data-aos-duration="1000">{{ app()->getLocale() === 'en' ? $banner_image->title1_en : $banner_image->title1_km }}</h1>
                <p class="text-left text-white text-[14px] lg:text-[16px]"  data-aos="fade-left" data-aos-duration="1000">{{ app()->getLocale() === 'en' ? $banner_image->content_en : $banner_image->content_km }}</p>
            </div>
        </div>
        <div id="mission" class="relative md:-top-[100px] max-w-7xl mx-auto z-40 px-4 mt-5 md:mt-0">
            <div class="grid grid-cols-1 grid-rows-1 lg:grid-cols-2 lg:grid-rows-3 gap-4 w-full overflow-hidden">
                <div class="bg-[#5796FF] rounded-md" data-aos="fade-right" data-aos-duration="1000">
                    <div class="flex justify-center flex-col lg:flex-row items-center gap-10 p-10">
                        <img src="{{ asset($missions->image) }}" alt="" class="w-24 h-24">
                        <div class="flex flex-col">
                            <h1 class="text-[#F6F6F6] text-[15px] md:text-[25px] font-semibold">
                                {{ app()->getLocale() === 'en' ? $missions->title_en : $missions->title_km }}</h1>
                            <div class="text-[#F6F6F6] font-regular text-[12px] md:text-[13px]">{!! app()->getLocale() === 'en' ? $missions->content_en : $missions->content_km !!}
                            </div>
                        </div>
                    </div>
                </div>

                <div id="core_values" data-aos="fade-left" data-aos-duration="1000" class="bg-[#C3D500] order-last lg:order-none row-span-1 lg:row-span-3 rounded-md">
                    <div class="flex justify-center lg:justify-start flex-col items-center lg:items-start gap-2 p-10">

                        <img src="{{ asset($core->image) }}" alt="" class="w-24 h-24 mt-4">
                        <h2 class="text-[#1C0186] text-[15px] md:text-[25px] font-semibold pt-2">
                            {{ app()->getLocale() === 'en' ? $core->title_en : $core->title_km }}</h2>

                        <div class="md:text-[15px] text-[14px] text-[#1C0186] font-regular core-text">
                            {!! app()->getLocale() === 'en' ? $core->content_en : $core->content_km !!}
                        </div>
                    </div>

                </div>

                <div id="vision" class="bg-[#FE5900] rounded-md" data-aos="fade-right" data-aos-duration="1000">
                    <div class="flex justify-center flex-col lg:flex-row  items-center gap-10 p-10">
                        <img src="{{ asset($visions->image) }}" alt="" class="w-24 h-24">
                        <div class="flex flex-col">
                            <h1 class="text-[#F6F6F6] text-[15px] md:text-[25px] font-semibold">{{ app()->getLocale() === 'en' ? $visions->title_en : $visions->title_km }}
                            </h1>
                            <div class="text-[#F6F6F6] font-regular text-[12px] md:text-[13px]">
                                {!! app()->getLocale() === 'en' ? $visions->content_en : $visions->content_km !!}</div>
                        </div>
                    </div>

                </div>

                <!-- Row 3, col 1 -->
                <div id="our_goals" class="bg-[#E3264E] rounded-md" data-aos="fade-right" data-aos-duration="1000">
                    <div class="flex justify-center flex-col lg:flex-row items-center gap-10 p-10">
                        <img src="{{ asset($goals->image) }}" alt="" class="w-24 h-24" />
                        <div class="flex flex-col">
                            <h1 class="text-[#F6F6F6] text-[15px] md:text-[25px] font-semibold">
                                {{ app()->getLocale() === 'en' ? $goals->title_en : $goals->title_km }}</h1>
                            <div class="text-[#F6F6F6] font-regular text-[12px] md:text-[13px]">
                                {!! app()->getLocale() === 'en' ? $goals->content_en : $goals->content_km !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>

    {{-- license destop --}}
    {{-- <section class="hidden md:block" id="school_license">
        <h1 class="text-[16px] md:text-[30px] text-gradient font-[700] text-center pt-5 md:pt-10">
            {{ app()->getLocale() === 'en' ? "Our Institutes' Licenses" : "អាជ្ងាបណ្ណរបស់ស្ថាប័នរបស់យើងខ្ញុំ" }}
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
    </section> --}}

    {{-- license mobile --}}
    {{-- <div id='registration_docs' class='md:hidden swiper-certificate py-10'>
        <h1 class="text-[16px] md:text-[30px] text-gradient font-[700] text-center pb-10">
            {{ app()->getLocale() === 'en' ? "Our Institutes' Licenses" : "Our Institutes' Licenses" }}</h1>
        <div class="swiper certificateSwiper" style="width: 80%; height: 300px; margin: auto;">
            <div class="swiper-wrapper">
                @foreach ($certificates as $index => $certificate)
                    <div class="swiper-slide">
                        <div class="flex flex-col justify-center items-center h-full">
                            <img src="{{ $certificate->image }}" alt=""
                                class="w-full h-[15rem] lg:h-[25rem] xl:h-[26rem] object-contain object-center" />
                            <h1 class="text-center text-[12px] md:text-[14px] mt-2">
                                {{ app()->getLocale() === 'en' ? $certificate->title_en : $certificate->title_km }}</h1>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div> --}}

    {{-- banner --}}
    <section class="relative z-20 py-20 w-full mt-10">

        <!-- Background image -->
        <div class="absolute inset-0 bg-cover top-0 left-0 bg-no-repeat grayscales "
            style="background-image: url('{{ asset('assets/kid.png') }}');">
        </div>

        <!-- Dark overlay -->
        <div class="absolute inset-0 bg-black/60 z-0"></div>

        <!-- Content -->
        <div class="relative z-10" data-aos="fade-right" data-aos-duration="1000">
            <p class="w-full max-w-[700px] mx-auto px-2 text-[16px] md:text-[20px] font-medium text-white/90 text-center">
                {{ __('message.banner_content') }}
            </p>
        </div>
    </section>
@endsection
