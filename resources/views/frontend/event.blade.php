@extends('layouts.master')

@section('content')
    <div class="w-full h-[60vh] md:h-screen">
        <img src="{{ asset('assets/event_hero.png') }}" class="absolute object-cover z-1 w-full h-[60vh] md:h-screen inset-0 "
            alt="">
        <div>
            <div class="absolute h-[60vh] object-cover md:h-screen inset-0 z-10 bg-black/50"></div>

            <div class="relative z-10 pt-[15vh] md:pt-[30vh]">
                <h1 class="text-[25px] md:text-[50px] text-center text-gradient font-[700]">
                    {{ app()->getLocale() === 'en' ? 'Events' : 'ព្រឹត្តិការណ៍' }}</h1>
                <p class="text-left max-w-[700px] mx-auto md:text-[18px] text-white text-[15px] lg:text-[16px] px-4">
                    We offer Special Education and Holistic Services for
                    Children with Autism, Down’s Syndrome, Language and Speech Delay, Intellectual Disabilities and
                    Learning Difficulty.</p>

            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto mb-20 px-5">
        @foreach ($event as $index => $item)
            @php
                $images = json_decode($item->image, true);
                $isOdd = $item->id % 2 == 1;
            @endphp

            <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-6 md:gap-20 mt-5 md:mt-10">

                <div class="w-full {{ $isOdd ? 'md:order-1' : 'md:order-2' }}">
                    <img src="{{ asset($images[0]) }}" class="w-full h-[400px] rounded-xl object-cover" alt="">
                </div>

                <div class="{{ $isOdd ? 'md:order-2' : 'md:order-1' }}">
                    <h1 class="text-gradient text-xl font-semibold">
                        {{ app()->getLocale() === 'en' ? $item->title_en : $item->title_km }}
                    </h1>

                    <div class="text-[13px] md:text-[14px] line-clamp-3 pt-4">
                        {!! app()->getLocale() === 'en' ? $item->content_en : $item->content_km !!}
                    </div>

                    <a href="{{ route('event.show', $item->slug) }}"
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
        @endforeach
    </div>
@endsection
