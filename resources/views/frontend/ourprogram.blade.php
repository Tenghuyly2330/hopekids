@extends('layouts.master')

@section('content')
    <section class="w-full h-[60vh] md:h-screen">
        <div class="absolute h-[60vh] object-cover md:h-screen inset-0 z-10 bg-black/50"></div>
        <img src="{{ asset('assets/hero_ourprogram.png') }}"
            class="absolute object-cover z-1 w-full h-[60vh] md:h-screen inset-0 " alt="">
        <div>
            <div class="relative z-10 pt-[15vh] md:pt-[30vh]">
                <h1 class="text-[25px] md:text-[50px] text-center text-gradient font-[700]">
                    {{ __("message.our_program") }}</h1>
                <p class="text-left max-w-[700px] mx-auto md:text-[18px] text-white text-[15px] lg:text-[16px]">
                    {{ __("message.our_program_content") }}</p>

            </div>
        </div>
    </section>

    <section class="">
        <div class="flex flex-col items-center gap-4 md:gap-40 px-4 max-w-7xl mx-auto py-5 md:py-20">
            @foreach ($programs as $index => $item)
                @php
                    $colors = [
                        '#00AFD7',
                        '#C3D500',
                        '#FE5900',
                        '#29A71A',
                        '#1F088C',
                        '#E3264E',
                        '#5796FF',
                        '#C3D500',
                        '#1F088C',
                        '#1F088C',
                        '#C3D500',
                        '#E3264E',
                        '#E3264E',
                        '#C3D500',
                    ];
                    $isOdd = $item->id % 2 == 1;
                @endphp

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-14 xl:gap-30" id="1">
                    <div class="relative w-full h-full {{ $isOdd ? 'md:order-1' : 'md:order-2' }}">
                        <img src="{{ asset($item->image) }}" alt=""
                            class="w-full h-[250px] md:h-[400px] rounded-[30px] object-cover ">
                        <div style="background-color: {{ $colors[$index % count($colors)] }}"
                            class="flex items-center justify-center w-[100px] h-[80px] lg:w-[180px] lg:h-[120px] xl:w-[220px] xl:h-[160px] rounded-2xl absolute {{ $isOdd ? 'bottom-0 right-0 lg:-bottom-[30px] xl:-bottom-[70px] lg:-right-[30px] xl:-right-[70px]' : 'bottom-0 left-0 lg:-bottom-[30px] xl:-bottom-[70px] lg:-left-[30px] xl:-left-[70px]' }} ">
                            <h1 class="text-white text-[40px] lg:text-[70px] font-bold">{{ app()->getLocale() === 'en' ? $item->number_en : $item->number_km }}</h1>
                        </div>
                    </div>

                    <div  class="md:mt-5 text-start {{ $isOdd ? 'md:order-2' : 'md:order-1' }}">
                        <h2 style="color: {{ $colors[$index % count($colors)] }}" class="text-[20px] md:text-[30px]">
                            {{ app()->getLocale() === 'en' ? $item->title_en : $item->title_km }}
                        </h2>
                        <div class="text-[12px] lg:text-[15px]">
                            {!! app()->getLocale() === 'en' ? $item->content_en : $item->content_km !!}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
