@extends('layouts.master')

@section('content')
    <section class="w-full h-[60vh] md:h-screen">
        <img src="{{ asset($banner_image->image) }}"
            class="absolute object-cover z-1 w-full h-[60vh] md:h-screen inset-0 " alt="">
        <div>
            <div class="absolute h-[60vh] object-cover md:h-screen inset-0 z-10 bg-black/50"></div>

            <div class="relative z-10 pt-[15vh] md:pt-[30vh]">
                <h1 class="text-[25px] md:text-[50px] text-center text-gradient font-[700]">
                    {{ app()->getLocale() === 'en' ? 'Articles' : 'អត្ថបទ' }}
                </h1>
                <p class="text-left max-w-[700px] mx-auto md:text-[18px] text-white text-[15px] lg:text-[16px]  px-4">
                    {{ app()->getLocale() === 'en' ? 'Hope Kids provides affordable, inclusive, and professional education for children with autism and special needs in Phnom Penh and across Cambodia.' : 'យើងផ្ដល់ ការអប់រំពិសេស និងសេវាកម្មទូលំទូលាយ សម្រាប់កុមារដែលមាន អូទីសុីម, ជំងឺ Down’s Syndrome, ផ្ទុកភាសា និងពន្យាពេលនិយាយ ខ្វះខាតផ្នែកចំណេះដឹង  និងបញ្ហាសិក្សា ។' }}
                </p>

            </div>
        </div>
    </section>

    <div class="max-w-5xl mx-auto px-6  py-10">
        <div class="w-full">
            <img src="{{ asset($article->image) }}" class="rounded-2xl shadow-lg w-full h-[400px] object-cover"
                alt="article">
        </div>

        <div class="flex flex-col lg:flex-row gap-10">
            <div class="w-full lg:w-full mt-10">
                <h1 class="text-[#1C0186] text-[32px] lg:text-[38px] font-black leading-tight">
                    {{ app()->getLocale() === 'en' ? $article->title_en : $article->title_km }}
                </h1>
                <div class="text-[13px] md:text-[14px] prose">
                    {!! app()->getLocale() === 'en' ? $article->content_en : $article->content_km !!}
                </div>
            </div>
        </div>



        <a href="{{ URL('/articles') }}"
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
