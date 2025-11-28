@extends('layouts.master')

@section('content')
    <style>
        .content-text strong {
            font-size: 20px;
            color: #1C0186;
        }

        @media (max-width: 767px){
            font-size: 16px;
        }
    </style>

    <section class="w-full h-[60vh] md:h-screen">
        <img src="{{ asset('assets/professional_hero.png') }}"
            class="absolute object-cover z-1 w-full h-[60vh] md:h-screen inset-0 " alt="">
        <div>
            <div class="absolute h-[60vh] object-cover md:h-screen inset-0 z-10 bg-black/50"></div>

            <div class="relative z-10 pt-[15vh] md:pt-[30vh]">

                <h1 class="text-[25px] md:text-[50px] text-center text-gradient font-[700]">
                    {{ app()->getLocale() === 'en' ? 'Professional Team' : 'Professional Team' }}</h1>>
                <p class="text-left max-w-[700px] mx-auto md:text-[18px] text-white text-[15px] lg:text-[16px]">
                    {{ app()->getLocale() === 'en' ? 'Hope Kids provides affordable, inclusive, and professional education for children with autism and special needs in Phnom Penh and across Cambodia.' : 'Hope Kids provides affordable, inclusive, and professional education for children with autism and special needs in Phnom Penh and across Cambodia.' }}
                </p>
            </div>
        </div>
    </section>

    <section class="mt-5 md:mt-10">
        <h1 class="text-[25px] md:text-[50px] text-center text-gradient font-[700]">
            {{ app()->getLocale() === 'en' ? 'Message from Our Founder' : 'Message from Our Founder' }}</h1>
        <div class="mt-10">
            <div class="flex justify-center flex-wrap gap-4 md:gap-30">
                <div class="w-[230px] h-[230px] rounded-full overflow-hidden">
                    <div class="w-[230px] h-[230px] rounded-full overflow-hidden">
                        <img src="{{ asset($messages->image) }}" class="w-full h-full object-cover object-top"
                            alt="">
                    </div>
                </div>
                <div class="px-4">
                    <img src="{{ asset('assets/double_qout.png') }}" alt="">
                    <div class="w-full md:w-[700px] text-[14px] md:text-[16px] mt-5 md:mt-10">
                        {!! app()->getLocale() === 'en' ? $messages->content_en : $messages->content_km !!}
                    </div>

                    <h1 class="text-[#1C0186] font-bold text-[20px] mt-5">
                        {{ app()->getLocale() === 'en' ? $messages->name_en : $messages->name_km }}</h1>
                    <p class="text-[#5796FF] text-[15px]  font-regular">
                        {{ app()->getLocale() === 'en' ? $messages->position_en : $messages->position_km }}</p>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-10 bg-[#F0F6FF] w-full">
        <div class="pt-10 pb-20 max-w-7xl mx-auto px-4">
            <h1 class="text-[25px] md:text-[50px] text-center text-gradient font-[700] pb-10">{{ app()->getLocale() === 'en' ? 'Our Professional Team' : 'Our Professional Team' }}</h1>

            @foreach ($teams as $item)
                <div class="grid grid-cols-1 lg:grid-cols-3 items-start mt-10">
                    <div class="w-[230px] h-[230px] rounded-full overflow-hidden">
                        <div class="w-[230px] h-[230px] rounded-full border border-[#1C0186] overflow-hidden">
                            <img src="{{ asset($item->image) }}" class="w-full h-full object-cover object-top"
                                alt="">

                        </div>
                    </div>
                    <div class="col-span-1 lg:col-span-2 pt-4 md:pt-0">
                        <div>
                            <h1 class="text-[#1C0186] font-bold text-[16px] lg:text-[20px]">{{ app()->getLocale() === 'en' ? $messages->name_en : $messages->name_km }}</h1>
                            <h1 class="text-[#5796FF] text-[14px] md:text-[16px] font-regular">{{ app()->getLocale() === 'en' ? $messages->position_en : $messages->position_km }}</h1>
                        </div>
                        <div class="mt-5 text-[14px] md:text-[16px] content-text">
                            {!! app()->getLocale() === 'en' ? $item->content_en : $item->content_km !!}
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
                {{ __('message.banner_content') }}
            </p>
        </div>
    </section>
@endsection
