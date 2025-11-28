@extends('layouts.master')

@section('content')
    <section class="w-full h-[60vh] md:h-screen">
        <img src="{{ asset('assets/article_hero.png') }}"
            class="absolute object-cover z-1 w-full h-[60vh] md:h-screen inset-0 " alt="">
        <div>
            <div class="absolute h-[60vh] object-cover md:h-screen inset-0 z-10 bg-black/50"></div>

            <div class="relative z-10 pt-[15vh] md:pt-[30vh]">
                <h1 class="text-[25px] md:text-[50px] text-center text-gradient font-[700]">{{ app()->getLocale() === 'en' ? 'Articles' : 'អត្ថបទ' }}
                    </h1>
                <p class="text-left max-w-[700px] mx-auto md:text-[18px] text-white text-[15px] lg:text-[16px]  px-4">
                    {{ app()->getLocale() === 'en' ? 'Hope Kids provides affordable, inclusive, and professional education for children with autism and special needs in Phnom Penh and across Cambodia.' : 'យើងផ្ដល់ ការអប់រំពិសេស និងសេវាកម្មទូលំទូលាយ សម្រាប់កុមារដែលមាន អូទីសុីម, ជំងឺ Down’s Syndrome, ផ្ទុកភាសា និងពន្យាពេលនិយាយ ខ្វះខាតផ្នែកចំណេះដឹង  និងបញ្ហាសិក្សា ។' }}
                </p>

            </div>
        </div>
    </section>

    <section class="mt-5 md:mt-10">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-x-4 gap-y-10 px-5 lg:px-10">
            @foreach ($article as $item)
                <div class="flex flex-col items-start">
                    <img src="{{ asset($item->image) }}" class="w-full h-[200px] md:h-[300px] object-cover rounded-[30px]" alt="">


                    <div class="flex items-center mt-4 px-4">
                        <div class="w-1 h-[100px] bg-[#1C0186] rounded-full"></div>
                        <div class="ml-4">
                            <h1 class="text-gradient text-[16px] md:text-[20px] font-black mt-4">
                                {{ app()->getLocale() === 'en' ? $item->title_en : $item->title_km }}
                            </h1>
                            <div class="text-[13px] md:text-[14px] line-clamp-3">
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
                                <span>{{ app()->getLocale() === 'en' ? 'Detail' : 'ព័ត៌មាបន្ថែម' }}</span>
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
