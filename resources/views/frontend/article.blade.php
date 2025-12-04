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
                <h1 class="text-[25px] md:text-[50px] text-center text-[#5897FF] font-[700]" data-aos="fade-right" data-aos-duration="1000">{{ app()->getLocale() === 'en' ? $banner_image->title1_en : $banner_image->title1_km }}
                    </h1>
                <p class="text-left max-w-[700px] mx-auto md:text-[18px] text-white text-[15px] lg:text-[16px] px-4" data-aos="fade-left" data-aos-duration="1000">
                    {{ app()->getLocale() === 'en' ? $banner_image->content_en : $banner_image->content_km }}
                </p>

            </div>
        </div>
    </section>

    <section class="mt-5 md:mt-10">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-x-4 gap-y-10 px-5 lg:px-10" data-aos="fade-up" data-aos-duration="1000">
            @foreach ($article as $item)
                <div class="flex flex-col items-start">
                    <img src="{{ asset($item->image) }}" class="w-full h-[200px] md:h-[300px] object-cover rounded-[30px]" alt="">


                    <div class="flex items-center mt-4 px-4">
                        <div class="w-1 h-[100px] bg-[#1C0186] rounded-full"></div>
                        <div class="ml-4">
                            <h1 class="text-gradient text-[16px] md:text-[20px] font-black mt-4">
                                {{ app()->getLocale() === 'en' ? $item->title_en : $item->title_km }}
                            </h1>
                            <div class="text-[14px] md:text-[16px] line-clamp-3">
                                {!! app()->getLocale() === 'en' ? $item->content_en : $item->content_km !!}
                            </div>
                            <a href="{{ route('articles.show', $item->slug) }}"
                                class="text-black rounded mt-3 flex items-center hover:translate-x-[5px] transition-all duration-150">
                                <svg class="w-8 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path d="M6 12H18M18 12L13 7M18 12L13 17" stroke="#000000" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                    </g>
                                </svg>
                                <span>{{ app()->getLocale() === 'en' ? 'Detail' : 'អានបន្ថែម' }}</span>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

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
