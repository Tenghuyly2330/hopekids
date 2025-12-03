@extends('layouts.master')

@section('content')
    <section class="w-full h-[60vh] lg:h-screen">
        <div class="absolute w-full h-[60vh] lg:h-screen inset-0 z-10 bg-black/70"></div>
        <img src="{{ asset($banner_image->image) }}" class="absolute object-cover z-1 w-full h-[60vh] lg:h-screen inset-0 "
            alt="">
        <div>
            <div class="relative z-10 pt-[15vh] lg:pt-[30vh] overflow-hidden">
                <h1 class="text-[25px] md:text-[50px] text-center text-[#5897FF] font-[700]" data-aos="fade-right"
                    data-aos-duration="1000">
                    {{ app()->getLocale() === 'en' ? $banner_image->title1_en : $banner_image->title1_km }}</h1>
                <p class="text-left max-w-[700px] mx-auto text-white text-[15px] lg:text-[16px] px-4" data-aos="fade-left"
                    data-aos-duration="1000">
                    {{ app()->getLocale() === 'en' ? $banner_image->content_en : $banner_image->content_km }}</p>
            </div>
        </div>
    </section>

    <div class="mt-5 md:mt-10 px-5">

        <div class="grid grid-cols-1 lg:grid-cols-2 justify-center w-full max-w-7xl mx-auto px-4 overflow-hidden">

            <!-- Left Column -->
            <div class="flex flex-col place-items-center" data-aos="fade-right" data-aos-duration="1000">

                <!-- Social Icons -->
                <ul class="flex items-center gap-6 w-full justify-center">
                    <li>
                        <a href="{{ $fb->url }}" target="_blank">
                            <svg class="w-10 h-10" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10.3559 0C4.64566 0 0 4.64566 0 10.3559C0 16.0656 4.64566 20.7117 10.3559 20.7117C16.0656 20.7117 20.7117 16.0656 20.7117 10.3559C20.7117 4.64566 16.0665 0 10.3559 0ZM12.9313 10.7204H11.2465V16.7256H8.74988C8.74988 16.7256 8.74988 13.4443 8.74988 10.7204H7.56312V8.59804H8.74988V7.22524C8.74988 6.24205 9.21708 4.70573 11.2694 4.70573L13.1194 4.71282V6.77306C13.1194 6.77306 11.9952 6.77306 11.7766 6.77306C11.5581 6.77306 11.2473 6.88235 11.2473 7.35122V8.59846H13.1494L12.9313 10.7204Z"
                                    fill="#007BFF" />
                            </svg>
                        </a>
                    </li>

                    <li>
                        <a href="{{ $telegram->url }}" target="_blank" rel="noopener noreferrer">
                            <svg class="w-10 h-10" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10.3559 20.7117C16.0752 20.7117 20.7117 16.0752 20.7117 10.3559C20.7117 4.63648 16.0752 0 10.3559 0C4.63648 0 0 4.63648 0 10.3559C0 16.0752 4.63648 20.7117 10.3559 20.7117Z"
                                    fill="#039BE5" />
                                <path
                                    d="M4.73909 10.1315L14.7239 6.28175C15.1873 6.11433 15.592 6.3948 15.4419 7.09554L15.4427 7.09468L13.7426 15.1041C13.6166 15.6719 13.2792 15.81 12.8072 15.5425L10.2182 13.6344L8.96945 14.8374C8.83137 14.9755 8.71487 15.092 8.44735 15.092L8.63116 12.4573L13.4294 8.1225C13.6382 7.93868 13.3828 7.83513 13.1075 8.01808L7.17789 11.7514L4.62172 10.954C4.06682 10.7779 4.05474 10.3991 4.73909 10.1315Z"
                                    fill="white" />
                            </svg>
                        </a>
                    </li>

                    <li>
                        <a href="{{ $tiktok->url }}" target="_blank">
                            <svg class="w-10 h-10" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="10.5" cy="10.5" r="10.5" fill="black" />
                                <path
                                    d="M14.3138 5.35C13.7472 4.69961 13.4349 3.8645 13.4349 3H10.8731V13.3333C10.8537 13.8927 10.619 14.4226 10.2184 14.8112C9.81774 15.1999 9.28257 15.417 8.72576 15.4167C7.54847 15.4167 6.57015 14.45 6.57015 13.25C6.57015 11.8167 7.94643 10.7417 9.36416 11.1833V8.55C6.50383 8.16667 4 10.4 4 13.25C4 16.025 6.28827 18 8.71747 18C11.3208 18 13.4349 15.875 13.4349 13.25V8.00833C14.4738 8.75821 15.721 9.16054 17 9.15833V6.58333C17 6.58333 15.4413 6.65833 14.3138 5.35Z"
                                    fill="white" />
                            </svg>

                        </a>
                    </li>

                    <li>
                        <a href="{{ $yt->url }}" target="_blank">
                            <svg class="h-10" viewBox="0 0 20 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8 10L13.19 7L8 4V10ZM19.56 2.17C19.69 2.64 19.78 3.27 19.84 4.07C19.91 4.87 19.94 5.56 19.94 6.16L20 7C20 9.19 19.84 10.8 19.56 11.83C19.31 12.73 18.73 13.31 17.83 13.56C17.36 13.69 16.5 13.78 15.18 13.84C13.88 13.91 12.69 13.94 11.59 13.94L10 14C5.81 14 3.2 13.84 2.17 13.56C1.27 13.31 0.69 12.73 0.44 11.83C0.31 11.36 0.22 10.73 0.16 9.93C0.0900001 9.13 0.0599999 8.44 0.0599999 7.84L0 7C0 4.81 0.16 3.2 0.44 2.17C0.69 1.27 1.27 0.69 2.17 0.44C2.64 0.31 3.5 0.22 4.82 0.16C6.12 0.0899998 7.31 0.0599999 8.41 0.0599999L10 0C14.19 0 16.8 0.16 17.83 0.44C18.73 0.69 19.31 1.27 19.56 2.17Z"
                                    fill="#FF0000" />
                            </svg>
                        </a>
                    </li>
                </ul>

                <!-- QR -->
                {{-- <img src="{{ asset('assets/qr.png') }}" class="w-48 md:w-64 mt-6" alt=""> --}}
                <img src="{{ asset('assets/qr_telegram.png') }}" class="w-48 md:w-64 mt-6" alt="">

                <h1 class="text-[#5796FF] text-[20px] md:text-[25px] font-light mt-3">
                    Hot Line
                </h1>

            </div>

            <!-- Right Column -->
            <div class="text-start md:text-center lg:text-left w-full pt-10 lg:maw-w-md lg:pt-0" data-aos="fade-left"
                data-aos-duration="1000">
                <h2 class="text-xl md:text-2xl font-bold mb-4">
                    {{ app()->getLocale() === 'en' ? 'Contact Us' : 'ការទំនាក់ទំនង' }}</h2>

                <p class="text-sm md:text-base font-light mb-2">
                    {{ app()->getLocale() === 'en' ? '#579, Street 35C, Phum Meanchey, Sangkat Steung Meanchey, Khan Meanchey, Phnom Penh, Cambodia' : 'ផ្ទះលេខ ៥៧៩ ផ្លូវលេខ ៣៥C ភូមិមានជ័យ សង្កាត់ស្ទឹងមានជ័យ ខណ្ឌមានជ័យ ភ្នំពេញ កម្ពុជា' }}
                </p>

                <p class="text-sm md:text-base font-light mt-4">+855 86 253 388</p>
                <p class="text-sm md:text-base font-light mt-4">+855 85 253 388</p>
                <p class="text-sm md:text-base font-light mt-4">{{ app()->getLocale() === 'en' ? 'Email:' : 'អ៊ីមែល៖' }}
                    hopekids.info@gmail.com</p>

                {{-- <p class="text-sm md:text-base font-light mt-4">
                    {{ app()->getLocale() === 'en' ? 'Operating Hours: Monday – Sunday | 8:00 AM – 6:00 PM' : 'ម៉ោងធ្វើការ៖ ច័ន្ទ – អាទិត្យ | ៨:០០ ព្រឹក – ៦:០០ ល្ងាច' }}
                </p> --}}
                <div
                    class="text-sm md:text-base font-light mt-4">
                    <p class="">{{ app()->getLocale() === 'en' ? 'Operating Hours:' : 'ម៉ោងធ្វើការ៖' }}</p>
                    <p class="mt-4">{{ app()->getLocale() === 'en' ? 'Monday – Friday | 8:00 AM – 6:00 PM' : 'ច័ន្ទ – សុក្រ | ៨:០០ ព្រឹក – ៦:០០ ល្ងាច' }}</p>
                    <p>{{ app()->getLocale() === 'en' ? 'Saturday | 8:00 AM – 6:00 PM' : 'សៅរ៍ | ៨:០០ ព្រឹក – ៦:០០ ល្ងាច' }}</p>
                    <p>{{ app()->getLocale() === 'en' ? 'Sunday | 8:00 AM – 6:00 PM' : 'អាទិត្យ | ៨:០០ ព្រឹក – ៦:០០ ល្ងាច' }}</p>
                </div>

            </div>

        </div>

    </div>
@endsection
