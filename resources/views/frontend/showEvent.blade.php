@extends('layouts.master')

@section('content')
    <div class="w-full h-[60vh] md:h-screen">
        <img src="{{ asset($banner_image->image) }}" class="absolute object-cover z-1 w-full h-[60vh] md:h-screen inset-0 "
            alt="">
        <div>
            <div class="absolute h-[60vh] object-cover md:h-screen inset-0 z-10 bg-black/50"></div>

            <div class="relative z-10 pt-[15vh] md:pt-[30vh] overflow-hidden">
                <h1 class="text-[25px] md:text-[50px] text-center text-gradient font-[700]" data-aos="fade-right" data-aos-duration="1000">
                    {{ app()->getLocale() === 'en' ? $banner_image->title1_en : $banner_image->title1_km }}</h1>
                <p class="text-left max-w-[700px] mx-auto md:text-[18px] text-white text-[15px] lg:text-[16px] px-4" data-aos="fade-left" data-aos-duration="1000">
                    {{ app()->getLocale() === 'en' ? $banner_image->content_en : $banner_image->content_km }}</p>

            </div>
        </div>
    </div>

    <section class="w-full max-w-7xl mx-auto px-4 py-5 md:py-10">
        @php
            $event_image = json_decode($event->image, true) ?? [];
        @endphp
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4" data-aos="fade-up" data-aos-duration="1000">
            @foreach ($event_image as $img)
                <img src="{{ asset($img) }}" alt="" loading="lazy"
                    class="w-full h-[300px] md:h-[400px] object-cover object-center rounded-md">
            @endforeach
        </div>

        <h1 class="text-xl font-semibold pt-4" data-aos="fade-right" data-aos-duration="1000">
            {{ app()->getLocale() === 'en' ? $event->title_en : $event->title_km }}
        </h1>

        <div class="text-[13px] md:text-[14px] pt-4" data-aos="fade-right" data-aos-duration="1000">
            {!! app()->getLocale() === 'en' ? $event->content_en : $event->content_km !!}
        </div>

        <a href="{{ URL('/event') }}" data-aos="fade-right" data-aos-duration="1000"
            class="text-black mt-10 flex items-center hover:text-[#1C0186] hover:translate-x-[5px] transition-all duration-150">
            <svg class="w-8 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                    <path d="M6 12H18M6 12L11 7M6 12L11 17" stroke="#000000" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round"></path>
                </g>
            </svg>
            <span>{{ app()->getLocale() === 'en' ? 'Back to Event' : 'ត្រឡប់ទៅព្រឹត្តិការណ៍វិញ' }}</span>
        </a>
    </section>
@endsection
