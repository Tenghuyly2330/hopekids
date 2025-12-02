@extends('layouts.master')

@section('content')
    <section class="w-full h-[60vh] lg:h-screen">
        <img src="{{ asset($banner_image->image) }}" class="absolute object-cover z-1 w-full h-[60vh] lg:h-screen inset-0 "
            alt="">
        <div>

            <div class="absolute h-[60vh] object-cover lg:h-screen inset-0 z-10 bg-black/50"></div>

            <div class="relative z-10 pt-[15vh] lg:pt-[30vh] overflow-hidden">

                <h1 class="text-[25px] md:text-[50px] text-center text-gradient font-[700]" data-aos="fade-right" data-aos-duration="1000">
                    {{ app()->getLocale() === 'en' ? $banner_image->title1_en : $banner_image->title1_km }}
                </h1>

                <p class="text-left max-w-[700px] mx-auto md:text-[18px] text-white text-[15px] lg:text-[16px]  px-4" data-aos="fade-left" data-aos-duration="1000">
                    {{ app()->getLocale() === 'en' ? $banner_image->content_en : $banner_image->content_km }}
                </p>
            </div>
        </div>
    </section>

    <section class="relative z-20 p-5 md:pt-1 lg:-mt-40">
        <div
            class="relative max-w-7xl mx-auto rounded-xl bg-gradient-to-r from-[#5897FF] to-[#1C0186]
            grid grid-cols-1 md:grid-cols-2 items-center gap-5 p-4 overflow-hidden">

            <!-- Left Box -->
            <div class="w-full h-full" data-aos="fade-right" data-aos-duration="1000">
                <img src="{{ asset('assets/career1.png') }}" class="w-full h-full rounded-xl object-cover"
                    alt="">
            </div>

            <!-- Right Box -->
            <div class="w-full text-white pb-2" data-aos="fade-left" data-aos-duration="1000">

                <p class="text-[22px] text-center md:text-[30px] lg:text-[45px] lg:pt-5 font-regular leading-tight">
                    {{ app()->getLocale() === 'en' ? 'Start Your Journey' : 'ចាប់ផ្តើមដំណើររបស់អ្នក' }}
                </p>
                <p class="text-[22px] text-center md:text-[30px] lg:text-[45px] font-regular">
                    {{ app()->getLocale() === 'en' ? 'with Us!' : 'ជាមួយយើង' }}
                </p>
                {{-- <p class="text-[12px] text-center md:text-[14px] mt-3 md:mt-5 px-10">
                    {{ app()->getLocale() === 'en' ? 'We work with diverse international and local non-governmental organizations, microfinance institutions, corporate partners, and national authorities to build a better life through safe and affordable homes.' : 'យើងសហការជាមួយអង្គការអន្តរជាតិ និងក្នុងស្រុកមិនមែនរដ្ឋាភិបាល ស្ថាប័នហិរញ្ញវត្ថុតូច មិត្តភាពសហគ្រាស និងអាជ្ញាធរជាតិនានា ដើម្បីបង្កើតជីវិតល្អប្រសើរឡើង តាមរយៈផ្ទះសុវត្ថិភាព និងមានតម្លៃសមរម្យ។' }}
                </p> --}}

                @if (session('success'))
                    <div x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 3000)"
                        class="fixed top-5 right-5 bg-green-600 text-white px-5 py-3 rounded-lg shadow-lg z-50">
                        {{ session('success') }}
                    </div>
                @endif

                <form class="mt-8 flex flex-col md:ms-3 gap-4" action="{{ route('contact.submit') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div>
                        <label class="text-[12px]">{{ app()->getLocale() === 'en' ? 'First Name' : 'ឈ្មោះ' }}</label>
                        <input type="text" name="fname" class="p-3 bg-white text-black rounded-full w-full mt-1">
                    </div>

                    <div>
                        <label class="text-[12px]">{{ app()->getLocale() === 'en' ? 'Last Name' : 'ត្រកូល ' }}</label>
                        <input type="text" name="lname" class="p-3 bg-white text-black rounded-full w-full mt-1">
                    </div>

                    <div>
                        <label class="text-[12px]">{{ app()->getLocale() === 'en' ? 'Email' : 'អ៊ីមែល' }}</label>
                        <input type="email" name="email" class="p-3 bg-white text-black rounded-full w-full mt-1">
                    </div>

                    <div>
                        <label class="text-[12px]">{{ app()->getLocale() === 'en' ? 'Position Applied' : 'តំណែងកំពុងរើស' }}</label>
                        <select class="p-3 bg-white text-black rounded-full w-full mt-1" name="position">
                            <option value="" disabled selected>
                                {{ app()->getLocale() === 'en' ? 'Select a position' : 'ជ្រើសរើសមុខតំណែង' }}</option>
                            @foreach ($careers as $item)
                                <option value="{{ $item->slug }}">{{ app()->getLocale() === 'en' ? $item->position_en : $item->position_km }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div>
                        <label
                            class="text-[12px]">{{ app()->getLocale() === 'en' ? 'Upload CV' : 'ដាក់ CV' }}</label>
                        <input type="file" name="cv_file" class="p-3 bg-white text-black rounded-full w-full mt-1">
                    </div>

                    <div>
                        <label
                            class="text-[12px]">{{ app()->getLocale() === 'en' ? 'Upload Cover Letter' : 'ដាក់ Cover Letter' }}</label>
                        <input type="file" name="cover_file" class="p-3 bg-white text-black rounded-full w-full mt-1">
                    </div>


                    {{-- <div>
                        <label class="text-[12px]">{{ app()->getLocale() === 'en' ? 'Message' : 'សារ ' }}</label>
                        <input type="text" name="message" class="p-3 bg-white text-black rounded-full w-full mt-1">
                    </div> --}}

                    <button type="submit" class="mt-5 bg-[#C4D600] text-black py-4 rounded-full w-full text-[16px]">
                        {{ app()->getLocale() === 'en' ? 'SUBMIT' : 'ដាក់ស្នើ ' }}
                    </button>
                </form>

            </div>
        </div>
    </section>
@endsection
