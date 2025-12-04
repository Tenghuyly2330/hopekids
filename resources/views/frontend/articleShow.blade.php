@extends('layouts.master')
@php
    use Artesaos\SEOTools\Facades\SEOTools;
@endphp
@section('meta_tag')
    {!! SEOTools::generate() !!}
@endsection
@section('content')
    <section class="w-full h-[60vh] lg:h-screen">
        <img src="{{ asset($banner_image->image) }}"
            class="absolute object-cover z-1 w-full h-[60vh] lg:h-screen inset-0 " alt="">
        <div>
            <div class="absolute h-[60vh] object-cover lg:h-screen inset-0 z-10 bg-black/70"></div>

            <div class="relative z-10 pt-[15vh] lg:pt-[30vh] overflow-hidden">
                <h1 class="text-[25px] md:text-[50px] text-center text-[#5897FF] font-[700]" data-aos="fade-right" data-aos-duration="1000">
                    {{ app()->getLocale() === 'en' ? $banner_image->title1_en : $banner_image->title1_km }}
                </h1>
                <p class="text-left max-w-[700px] mx-auto md:text-[18px] text-white text-[15px] lg:text-[16px] px-4" data-aos="fade-left" data-aos-duration="1000">
                    {{ app()->getLocale() === 'en' ? $banner_image->content_en : $banner_image->content_km }}
                </p>

            </div>
        </div>
    </section>

    <div class="max-w-5xl mx-auto px-6  py-10">
        <div class="w-full" data-aos="fade-up" data-aos-duration="1000">
            <img src="{{ asset($article->image) }}" class="rounded-2xl shadow-lg w-full h-[400px] object-cover"
                alt="article">
        </div>

        <div class="flex flex-col lg:flex-row gap-10" data-aos="fade-right" data-aos-duration="1000">
            <div class="w-full lg:w-full mt-10">
                <h1 class="text-[#1C0186] text-[32px] lg:text-[38px] font-black leading-tight">
                    {{ app()->getLocale() === 'en' ? $article->title_en : $article->title_km }}
                </h1>
                <div class="text-[14px] md:text-[16px] prose">
                    {!! app()->getLocale() === 'en' ? $article->content_en : $article->content_km !!}
                </div>
            </div>
        </div>



        <a href="{{ URL('/articles') }}" data-aos="fade-right" data-aos-duration="1000"
            class="text-black mt-10 flex items-center hover:text-[#1C0186] hover:translate-x-[5px] transition-all duration-150">
            <svg class="w-8 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                    <path d="M6 12H18M6 12L11 7M6 12L11 17" stroke="#000000" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round"></path>
                </g>
            </svg>
            <span>{{ app()->getLocale() === 'en' ? 'Back to Article' : 'ត្រឡប់ទៅអត្ថបទ' }}</span>
        </a>

    </div>
@endsection
