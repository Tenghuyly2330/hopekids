@extends('layouts.master')

@section('content')
    {{-- banner --}}
    <section id="welcome" class="w-full h-[60vh] md:h-screen">
        <img src="{{ asset('assets/hero1.jpg') }}" class="absolute -z-10 w-full h-[60vh] object-cover md:h-screen inset-0"
            alt="">
        <div class="absolute h-[60vh] object-cover md:h-screen inset-0 z-10 bg-black/50"></div>

        <div class="relative w-full flex flex-col items-center lg:items-end text-left pt-[10vh] md:pt-[30vh]">

            <!-- Text container with blur background on the RIGHT -->
            <div class="relative w-fit text-center lg:text-left">

                <!-- BLUR ONLY ON RIGHT SIDE -->
                <div
                    class="absolute top-0 right-0 h-full w-full md:w-[500px]
                    bg-[radial-gradient(circle,_#FFFFFF_40%,_#D9D9D9_100%)]
                    blur-[60px] pointer-events-none">
                </div>

                <!-- TEXT -->
                <div class="relative z-10 text-center lg:text-left w-full md:w-[500px]">
                    <h1 class="text-[20px] md:text-[40px] font-regular text-white text-gradient">
                        {{ app()->getLocale() === 'en' ? 'Welcome To' : 'សូមស្វាគមន៍មកកាន់' }} <br>
                        <span
                            class="text-[40px] md:text-[80px] font-[700] py-2 leading-none">{{ app()->getLocale() === 'en' ? 'HOPE KIDS' : 'ហូបឃីដ' }}</span>
                    </h1>

                    <p class="text-[#1C0186] font-bold text-[16px] md:text-[25px] pt-2">
                        {{ app()->getLocale() === 'en' ? 'Special Education School' : 'សាលារៀនអប់រំពិសេស' }}
                    </p>
                </div>
            </div>

            <!-- DESCRIPTION -->
            <div class="relative z-10 text-center lg:text-left mt-2 w-full md:w-[500px] px-3 md:px-0">
                <p class="text-[#fff] text-[12px] lg:text-[16px] font-medium">
                    {{ app()->getLocale() === 'en' ? 'Hope kids Special Education School We offer Special Education and Holistic Speech Delay, Intellectual Disabilities, Leaning Difficulty and Cerebral Palsy.' : 'សាលារៀនអប់រំពិសេសគឺជាសាលារៀនដែលកុមារទទួលបានការថែទាំ ការគាំពារ និងការអភិវឌ្ឍជំនាញជីវិត។ ការអប់រំពិសេសនេះផ្តោតលើការជួយកុមារដែលមាន​ការពន្យារពេលនិយាយ ខ្សោយសតិបញ្ញា ការលំបាកក្នុងការរៀន និងជំងឺពិការចលករខួលក្បាលជាដើម។' }}
                </p>
            </div>

            <!-- BUTTONS -->
            <div class="flex ite justify-center lg:justify-start gap-2 relative z-10 mt-3 w-full md:w-[500px]">
                <button
                    class="px-4 py-2 text-[14px] lg:text-[16px] rounded-full bg-gradient-to-r from-blue-300 to-blue-700 text-white">
                    <a href="#contact">{{ app()->getLocale() === 'en' ? 'Enroll Now' : 'ចុះឈ្មោះឥឡូវនេះ' }}</a>
                </button>

                <button
                    class="px-4 py-2 text-[14px] lg:text-[16px] rounded-full bg-gradient-to-r from-blue-300 to-blue-700 text-white">
                    <a
                        href="#find">{{ app()->getLocale() === 'en' ? 'Find Our Nearest Branch' : 'ស្វែងរកសាខាដែលនៅជិតលោកអ្នក' }}</a>
                </button>
            </div>

        </div>


    </section>

    {{-- reading --}}
    <section class="flex flex-col justify-center items-center text-center py-5 md:py-10 px-4" id="hopekid">
        <h1 class="text-[25px] md:text-[30px] text-gradient font-[700]">
            {{ app()->getLocale() === 'en' ? 'About Us' : 'អំពីយើងខ្ញុំ' }}</h1>
        <p class="text-[16px] md:text-[20px] font-medium text-gradient">
            {{ app()->getLocale() === 'en' ? 'HOPE KIDS Special Education School' : 'សាលារៀនអប់រំពិសេសហូបឃីដ' }}
        </p>
        <p class="mt-3 text-[14px] md:text-[16px] text-left w-full md:w-[700px]">
            {{ app()->getLocale() === 'en' ? 'Hope Kids was founded in Cambodia to make quality special education accessible to every child regardless of financial or geographic limitations. We serve families from all backgrounds and provinces, ensuring every child has the opportunity to learn, grow, and thrive.' : 'សាលារៀនអប់រំពិសេសហូបឃីដ ត្រូវបានបង្កើតឡើងនៅប្រទេសកម្ពុជាដើម្បីផ្តល់ឱកាសឱ្យកុមារគ្រប់រូប ទទួលបានការអប់រំពិសេសប្រកបដោយគុណភាព មិនថាកុមារមកពីក្រុមគ្រួសារមានកម្រិតហិរញ្ញវត្ថុទាប ឬទីតាំងភូមិសាស្ត្រឆ្ងាយយ៉ាងណាក៏ដោយ។ យើងខ្ញុំបម្រើសេវាកម្មជូនដល់ក្រុមគ្រួសារពីគ្រប់ជាន់ថ្នាក់ និងគ្រប់ខេត្ត/រាជធានី ដើម្បីធានាថា កុមារគ្រប់រូបទទួលបានឱកាសរៀនសូត្រ អភិវឌ្ឍ និងរីកចម្រើន។' }}
        </p>
        <a href="{{ URL('/about') }}"
            class="py-1 px-3 mt-4 text-[14px] lg:text-[16px] rounded-full bg-gradient-to-r from-[#5897FF] to-[#1C0186] text-white">
            {{ app()->getLocale() === 'en' ? 'Read More' : 'អានបន្ថែម' }}
        </a>

    </section>

    {{-- our program --}}
    <section id="program" class="w-full px-2 max-w-7xl mx-auto py-5 md:py-10" id="program">
        <h1 class="text-center text-[25px] md:text-[30px] text-gradient font-[700] mb-5">
            {{ app()->getLocale() === 'en' ? 'Our Programs' : 'កម្មវិធីសិក្សា' }}
        </h1>

        <div class="swiper mySwiper ">
            <div class="swiper-wrapper">
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
                @endphp
                @foreach ($programs as $index => $item)
                    <div class="swiper-slide">
                        <div class="w-full">
                            <img src="{{ asset($item->image) }}" class="w-full h-[160px] object-cover" />
                            <div class="text-white p-4 flex flex-col justify-between py-4"
                                style="background-color: {{ $colors[$index % count($colors)] }}">
                                <h1 class="text-[18px] font-semibold leading-tight mb-2 min-h-[70px]">
                                    {{-- Structured Teaching (TEACCH Program) --}}
                                    {{ app()->getLocale() === 'en' ? $item->title_en : $item->title_km }}
                                </h1>
                                <div class="text-[14px] line-clamp-2">
                                    {!! app()->getLocale() === 'en' ? $item->content_en : $item->content_km !!}
                                </div>
                                <a href="{{ URL('/ourprogram/#1') }}"
                                    class="mt-4 py-1 px-5 text-[14px] font-[600] bg-white text-black self-start">
                                    <span>Detail</span>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="swiper-pagination mt-30"></div>
        </div>
    </section>

    {{-- school licen --}}
    <div id="school_facilities" class="relative z-20 py-5 md:py-10" id="facilites">
        <img src="{{ asset('assets/bg_image.png') }}"
            class="absolute inset-0 bg-no-repeat bg-cover md:bg-cover h-[300px] md:h-[380px] md:w-full -z-10"
            alt="">

        <!-- Dark Overlay -->
        <div class="absolute inset-0 bg-black/60 z-10 h-[300px] md:h-[380px]"></div>
        <!-- Content -->
        <div class="relative z-10 flex flex-col items-center justify-center h-[300px] md:h-[380px]">
            <h1 class="text-center text-[25px] md:text-[40px] font-light text-white">
                {{ __("message.school_facilities") }}
            </h1>
            <p class="text-center text-[15px] md:text-[20px] font-bold text-white">{{ __("message.school_facilities_title") }}</p>
            <p class="max-w-[700px] mx-auto pz-4 text-[10px] md:text-[15px] font-light text-white text-center ">
                {{ __("message.school_facilities_content") }}
            </p>
        </div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-3 px-2">
        <img src="{{ asset('assets/school1.png') }}" alt="School Facilities"
            class="w-full sm:w-[370px] h-[250px] sm:h-[325px]">
        <img src="{{ asset('assets/school2.png') }}" alt="School Facilities"
            class="w-full sm:w-[370px] h-[250px] sm:h-[325px]">
        <img src="{{ asset('assets/school3.png') }}" alt="School Facilities"
            class="w-full sm:w-[370px] h-[250px] sm:h-[325px]">
        <img src="{{ asset('assets/school4.png') }}" alt="School Facilities"
            class="w-full sm:w-[370px] h-[250px] sm:h-[325px]">
    </div>

    {{-- our branch --}}
    <div id="our_branch" class="relative my-10 max-w-7xl mx-auto flex flex-col items-center justify-center px-4"
        id="branch">

        <h1 class="text-center text-[25px] md:text-[30px] text-gradient font-[700]">
            {{ app()->getLocale() === 'en' ? 'Our Branches' : 'Our Branches' }}</h1>

        <img src="{{ asset('assets/images/map1.png') }}" alt="" class="w-full md:w-2/3 h-full">

    </div>

    <div class="relative mt-30">

        <div class="absolute inset-0 bg-center bg-cover bg-no-repeat z-0"
            style="background-image: url('{{ asset('assets/ourj.png') }}');">
        </div>

        <div class="absolute inset-0 bg-black/60 z-0"></div>

        <div id="counter-section"
            class="relative z-10 flex flex-col md:flex-col lg:flex-row justify-center items-center gap-6 md:gap-10 py-10 lg:py-20">
            <div class="flex flex-col items-center text-white">
                <h2 class="text-[50px] md:text-[70px] font-bold text-[#29A71A]">
                    <span id="count-years">0</span>
                </h2>
                <p class="text-xl">{{ app()->getLocale() === 'en' ? 'Years' : 'Years' }}</p>
            </div>
            <div class="flex flex-col items-center text-white">
                <h2 class="text-[50px] md:text-[70px] font-bold text-[#00AFD7]">
                    <span id="count-branches">0</span>
                </h2>
                <p class="text-xl">{{ app()->getLocale() === 'en' ? 'Branches' : 'Branches' }}</p>
            </div>
            <div class="flex flex-col items-center text-white">
                <h2 class="text-[50px] md:text-[70px] font-bold text-[#C3D500]">
                    <span id="count-students">0</span>
                </h2>
                <p class="text-xl">{{ app()->getLocale() === 'en' ? 'Students' : 'Students' }}</p>
            </div>
            <div class="flex flex-col items-center text-white">
                <h2 class="text-[50px] md:text-[70px] font-bold text-[#FE5900]">
                    <span id="count-staff">0</span>
                </h2>
                <p class="text-xl">{{ app()->getLocale() === 'en' ? 'Teachers & Staff' : 'Teachers & Staff' }}</p>
            </div>
        </div>


    </div>

    {{-- parent --}}
    <div id="parent" class="bg-[#F8F8F8]">

        <div class="pt-10">
            <h1 class="text-[25px] md:text-[30px] text-gradient font-[700] text-center">
                {{ app()->getLocale() === 'en' ? 'Parents’ Testimonials' : 'Parents’ Testimonials' }}
            </h1>

            <div class="mt-5 flex flex-wrap justify-center md:flex-col xl:flex-row items-center gap-10">

                <!-- Card 1 -->
                <div
                    class="bg-white rounded rounded-t-xl rounded-b-xl shadow-md w-[400px] h-[300px] p-5 border border-gray-300 flex flex-col">

                    <!-- Video box with play icon -->
                    <div class="aspect-w-16 aspect-h-9">
                        <iframe src="https://www.youtube.com/embed/hxmWP5sCJJE" title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen class="w-full h-full">
                        </iframe>
                    </div>

                    <!-- Text -->
                    <p class="text-gray-700 text-[15px] leading-tight pt-1">
                        "My son has improved so much in his communication and focus since joining Hope Kids.
                        The teachers are caring and patient."
                    </p>
                    <p class="mt-4">Mrs. Sreyneang, <br>
                        Phnom Penh</p>
                </div>

                <!-- Card 2 -->
                <div
                    class="bg-white rounded-t-xl rounded-b-xl shadow-md w-[400px] h-[300px] p-5 border border-gray-300 flex flex-col">
                    <div class="aspect-w-16 aspect-h-9">
                        <iframe src="https://www.youtube.com/embed/RLUiipvc4sY" title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen class="w-full h-full">
                        </iframe>
                    </div>

                    <!-- Text -->
                    <p class="text-gray-700 text-[15px] leading-tight pt-1">
                        "My son has improved so much in his communication and focus since joining Hope Kids.
                        The teachers are caring and patient."
                    </p>
                    <p class="mt-4">Mrs. Sreyneang, <br>
                        Phnom Penh</p>
                </div>

                <!-- Card 3 -->
                <div
                    class="bg-white rounded-t-xl rounded-b-xl shadow-md w-[400px] h-[300px] p-5 border border-gray-300 flex flex-col">

                    <!-- Video box with play icon -->
                    <div class="aspect-w-16 aspect-h-9">
                        <iframe src="https://www.youtube.com/embed/N1Cm9etBZdc" title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen class="w-full h-full">
                        </iframe>
                    </div>
                    <!-- Text -->
                    <p class="text-gray-700 text-[15px] leading-tight pt-1">
                        "My son has improved so much in his communication and focus since joining Hope Kids.
                        The teachers are caring and patient."
                    </p>
                    <p class="mt-4">Mrs. Sreyneang, <br>
                        Phnom Penh</p>
                </div>

            </div>
        </div>
    </div>

    {{-- faqs --}}
    <section id="faq" class="mt-20 px-4 md:px-0" id="faq">
        <h1 class="text-[25px] md:text-[30px] text-gradient font-[700] text-center">
            {{ app()->getLocale() === 'en' ? 'Frequently Asked Questions' : 'សំណួរញឹកញាប់ដែលអាណាព្យាបាលតែងតែសួរ' }}
        </h1>

        <div class="mt-5 flex flex-col md:flex-row flex-wrap justify-center items-start gap-5 md:gap-8">

            <!-- Column 1 -->
            <div class="flex flex-col gap-5 md:w-[48%]">

                <!-- Question 1 -->
                <div class="border border-[#DBDBDB] rounded-lg p-4 bg-white faq-item cursor-pointer"
                    onclick="toggleFaq(this)">
                    <div class="flex justify-between items-start">
                        <p class="text-[#1E1E1E] text-[15px] md:text-[16px] font-medium">
                            {{ app()->getLocale() === 'en' ? 'Q: What is special education?' : 'សំណួរ៖ តើការអប់រំពិសេសគឺជាអ្វី?' }}
                        </p>
                        <div
                            class="arrow w-0 h-0 border-l-[10px] border-l-transparent border-r-[10px] border-r-transparent border-b-[15px] border-b-gray-400 mt-2">
                        </div>
                    </div>

                    <p class="answer mt-3 text-[#1C0186] text-[14px] md:text-[15px] hidden">
                        {{ app()->getLocale() === 'en' ? 'A: Special education is designed to support children with developmental, learning, or behavior challenges by providing individualized methods and therapies.' : 'ចម្លើយ: ការអប់រំពិសេសត្រូវបានរចនាឡើងដើម្បីគាំពារកុមារដែលមានបញ្ហាក្នុងការអភិវឌ្ឍ, រៀន, ឬអាកប្បកិរិយា ដោយផ្ដល់វិធីសាស្ត្របង្រៀនតាមតម្រួវការនិមួយៗ, ការព្យាបាល និងផ្តល់ជំនួយនានា ដែលជួយឱ្យពួកគេចេះរៀន និងរីកចម្រើនតាមសមត្ថភាព។' }}
                    </p>
                </div>

                <!-- Question 2 -->
                <div class="border border-[#DBDBDB] rounded-lg p-4 bg-white faq-item cursor-pointer"
                    onclick="toggleFaq(this)">
                    <div class="flex justify-between items-start">
                        <p class="text-[15px] md:text-[16px] font-medium">
                            {{ app()->getLocale() === 'en' ? 'Q: Why is special education important in Cambodia?' : 'សំណួរ៖ ហេតុអ្វីបានជាការអប់រំពិសេសសំខាន់នៅប្រទេសកម្ពុជា?' }}
                        </p>
                        <div
                            class="arrow w-0 h-0 border-l-[10px] border-l-transparent border-r-[10px] border-r-transparent border-b-[15px] border-b-gray-400 mt-2">
                        </div>
                    </div>
                    <p class="answer mt-3 text-[#1C0186] text-[14px] md:text-[15px] hidden">
                        {{ app()->getLocale() === 'en' ? 'A: It ensures that children with special needs receive the support required for their development and independence.' : 'ចម្លើយ: ការអប់រំពិសេសធានាថាកុមារដែលមានតម្រូវការពិសេសទទួលបានការគាំពារដែលពាក់ព័ន្ធសម្រាប់ការអភិវឌ្ឍន៍ និងភាពឯករាជ្យរបស់ពួកគេ។' }}
                    </p>
                </div>

                <!-- Question 3 -->
                <div class="border border-[#DBDBDB] rounded-lg p-4 bg-white faq-item cursor-pointer"
                    onclick="toggleFaq(this)">
                    <div class="flex justify-between items-start">
                        <p class="text-[15px] md:text-[16px]">
                            {{ app()->getLocale() === 'en' ? 'Q: How can parents enroll their child at Hope Kids?' : 'សំណួរ៖ តើអាណាព្យាបាលអាចចុះឈ្មោះកូនរបស់ខ្លួននៅសាលារៀនអប់រំពិសេសហូបឃីដបានយ៉ាងដូចម្តេច?' }}</p>
                        <div
                            class="arrow w-0 h-0 border-l-[10px] border-l-transparent border-r-[10px] border-r-transparent border-b-[15px] border-b-gray-400 mt-2">
                        </div>
                    </div>
                    <p class="answer mt-3 text-[#1C0186] text-[14px] md:text-[15px] hidden">
                        {{ app()->getLocale() === 'en' ? 'A: Parents can enroll by contacting our office or visiting our center for an initial assessment.' : 'ចម្លើយ: អាណាព្យាបាលអាចចុះឈ្មោះកូនបានដោយទំនាក់ទំនងទៅកាន់ការិយាល័យរបស់យើងខ្ញុំសម្រាប់ការវាយតម្លៃដំបូង។' }}
                    </p>
                </div>

                <!-- Question 4 -->
                <div class="border border-[#DBDBDB] rounded-lg p-4 bg-white faq-item cursor-pointer"
                    onclick="toggleFaq(this)">
                    <div class="flex justify-between items-start">
                        <p class="text-[15px] md:text-[16px]">
                            {{ app()->getLocale() === 'en' ? 'Q: Are services available outside Phnom Penh?' : 'សំណួរ៖ តើសេវាកម្មអប់រំនេះមាននៅខាងក្រៅរាជធានីភ្នំពេញដែរឬទេ?' }}
                            </p>
                        <div
                            class="arrow w-0 h-0 border-l-[10px] border-l-transparent border-r-[10px] border-r-transparent border-b-[15px] border-b-gray-400 mt-2">
                        </div>
                    </div>
                    <p class="answer mt-3 text-[#1C0186] text-[14px] md:text-[15px] hidden">
                        {{ app()->getLocale() === 'en' ? 'A: Yes, we offer outreach services and consultations outside Phnom Penh.' : 'ចម្លើយ: មាន យើងខ្ញុំផ្តល់សេវាកម្មនៅតាមបណ្តាខេត្ត និងការប្រឹក្សាពីចម្ងាយសម្រាប់អាណាព្យាបាលដែលរស់នៅក្រៅទីក្រុងភ្នំពេញ។' }}
                    </p>
                </div>

            </div>

            <!-- Column 2 -->
            <div class="flex flex-col gap-5 md:w-[48%]">

                <!-- Question 5 -->
                <div class="border border-[#DBDBDB] rounded-lg p-4 bg-white faq-item cursor-pointer"
                    onclick="toggleFaq(this)">
                    <div class="flex justify-between items-start">
                        <p class="text-[15px] md:text-[16px]">
                            {{ app()->getLocale() === 'en' ? 'Q: Who can benefit from special education services?' : 'សំណួរ៖ តើនរណាអាចទទួលបានផលប្រយោជន៍ពីសេវាកម្មអប់រំពិសេសនៅសាលារៀនអប់រំពិសេសហូបឃីដ?' }}
                            </p>
                        <div
                            class="arrow w-0 h-0 border-l-[10px] border-l-transparent border-r-[10px] border-r-transparent border-b-[15px] border-b-gray-400 mt-2">
                        </div>
                    </div>
                    <p class="answer mt-3 text-[#1C0186] text-[14px] md:text-[15px] hidden">
                        {{ app()->getLocale() === 'en' ? 'A: Children with autism, ADHD, Down syndrome, learning delays, and more.' : 'ចម្លើយ: កុមារដែលមានជំងឺអូទីសឹម , ADHD, ដោនសិនដ្រូម, ការពន្យារពេលក្នុងការរៀន និងបញ្ហាផ្សេងៗទៀត។' }}

                    </p>
                </div>

                <!-- Question 6 -->
                <div class="border border-[#DBDBDB] rounded-lg p-4 bg-white faq-item cursor-pointer"
                    onclick="toggleFaq(this)">
                    <div class="flex justify-between items-start">
                        <p class="text-[15px] md:text-[16px]">
                            {{ app()->getLocale() === 'en' ? 'Q: What kind of professionals work at Hope Kids?' : 'សំណួរ៖ តើមានអ្នកជំនាញប្រភេទណាខ្លះធ្វើការនៅសាលារៀនអប់រំពិសេសហូបឃីដ?' }}
                            </p>
                        <div
                            class="arrow w-0 h-0 border-l-[10px] border-l-transparent border-r-[10px] border-r-transparent border-b-[15px] border-b-gray-400 mt-2">
                        </div>
                    </div>
                    <p class="answer mt-3 text-[#1C0186] text-[14px] md:text-[15px] hidden">
                        {{ app()->getLocale() === 'en' ? 'A: Therapists, special educators, psychologists, and trained caregivers.' : 'ចម្លើយ: អ្នកជំនាញលើការព្យាបាល, អ្នកជំនាញលើការអប់រំពិសេស, ចិត្តវិទូ, និងអ្នកជំនាញដែលបានការបណ្ដុះបណ្ដាលពាក់ព័ន្ធ។' }}
                    </p>
                </div>

                <!-- Question 7 -->
                <div class="border border-[#DBDBDB] rounded-lg p-4 bg-white faq-item cursor-pointer"
                    onclick="toggleFaq(this)">
                    <div class="flex justify-between items-start">
                        <p class="text-[15px] md:text-[16px]">
                            {{ app()->getLocale() === 'en' ? 'Q: How are children’s progress monitored?' : 'សំណួរ៖ តើធ្វើដូចម្តេចដើម្បីតាមដានភាពប្រសើរនិងគោលដៅរបស់កូនៗ?' }}
                            </p>
                        <div
                            class="arrow w-0 h-0 border-l-[10px] border-l-transparent border-r-[10px] border-r-transparent border-b-[15px] border-b-gray-400 mt-2">
                        </div>
                    </div>
                    <p class="answer mt-3 text-[#1C0186] text-[14px] md:text-[15px] hidden">
                        {{ app()->getLocale() === 'en' ? 'A: Through regular assessments, progress reports, and parent meetings.' : 'ចម្លើយ: តាមរយៈការវាយតម្លៃប្រចាំថ្ងៃ របាយការណ៍កំណើត និងការជួបប្រជុំជាមួយអាណាព្យបាល។' }}
                    </p>
                </div>

                <!-- Question 8 -->
                <div class="border border-[#DBDBDB] rounded-lg p-4 bg-white faq-item cursor-pointer"
                    onclick="toggleFaq(this)">
                    <div class="flex justify-between items-start">
                        <p class="text-[15px] md:text-[16px]">
                            {{ app()->getLocale() === 'en' ? 'Q: Does Hope Kids provide parent training?' : 'សំណួរ៖ តើសាលារៀនអប់រំពិសេសហូបឃីដផ្តល់ការបណ្តុះបណ្តាល ឬការគាំពារដល់អាណាព្យាបាលដែរឬទេ?' }} </p>
                        <div
                            class="arrow w-0 h-0 border-l-[10px] border-l-transparent border-r-[10px] border-r-transparent border-b-[15px] border-b-gray-400 mt-2">
                        </div>
                    </div>
                    <p class="answer mt-3 text-[#1C0186] text-[14px] md:text-[15px] hidden">
                        {{ app()->getLocale() === 'en' ? 'A: Yes, parent workshops and home-training programs are available.' : 'ចម្លើយ: បាទ/ចាស, មានការផ្តល់ជូនជាសិក្ខាសាលាសម្រាប់អាណាព្យាបាល និងកម្មវិធីបណ្តុះបណ្តាលនៅគេហដ្ឋាន។' }}
                    </p>
                </div>

            </div>

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

    {{-- contact form --}}
    <div id="schedule" class="mt-10" id="contact">
        @if (session('success'))
            <div x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 3000)"
                class="fixed top-5 right-5 bg-green-600 text-white px-5 py-3 rounded-lg shadow-lg z-50">
                {{ session('success') }}
            </div>
        @endif
        <h1 class="text-gradient text-[25px] md:text-[30px] font-[700] text-center">Contact Form</h1>
        <div class="mt-10 bg-[#CBDBF4] w-full max-w-7xl mx-auto rounded-2xl">

            <div class="p-5 md:p-10">
                <form action="{{ route('contact.contact') }}" method="POST"
                    class="w-full grid grid-cols-1 md:grid-cols-2 gap-4 ">
                    @csrf
                    <div class="flex flex-col gap-3">
                        <!-- Input 1 -->
                        <input type="text" placeholder="Parent Name" name="name"
                            class="p-3 bg-white rounded-full border-none placeholder-[#5796FF]">

                        <!-- Input 2 -->
                        <input type="number" placeholder="phone Number" name="phone_number"
                            class="p-3  bg-white rounded-full border-none placeholder-[#5796FF]">

                        <!-- Select 1 -->
                        <select name="enquiry"
                            class="bg-white text-[#5796FF] p-3 rounded-full border-none focus:ring-2 focus:ring-blue-400">
                            <option class="bg-blue-500 text-white">• General enquiry</option>
                            <option class="bg-blue-500 text-white">• Enrolment / Admissions</option>
                            <option class="bg-blue-500 text-white">• Partnership / Collaboration</option>
                            <option class="bg-blue-500 text-white">• Volunteer / Internship</option>
                        </select>

                        <!-- Select 2 -->
                        <select name="location"
                            class="bg-white p-3 text-[#5796FF] rounded-full border-none focus:ring-2 focus:ring-blue-400">
                            <option value="" disabled >Select Branch</option>
                            <option class="bg-blue-500 text-white">Steng Meanchey</option>
                            <option class="bg-blue-500 text-white">Peng Hout Boeung Snor</option>
                            <option class="bg-blue-500 text-white">Banteay Meanchey</option>
                            <option class="bg-blue-500 text-white">Battambang</option>
                            <option class="bg-blue-500 text-white">Ratanakiri</option>
                            <option class="bg-blue-500 text-white">Kampot</option>
                        </select>

                    </div>
                    <div class="flex flex-col gap-3">

                        <!-- Textarea -->
                        <textarea rows="4" placeholder="Your Message" name="message"
                            class="bg-white p-3 rounded-2xl border-none placeholder-[#5796FF]"></textarea>

                        <!-- Input 3 -->
                        <input type="text" placeholder="Email" name="email"
                            class="bg-white p-3 rounded-full border-none placeholder-[#5796FF]">

                        <!-- Input 4 -->
                        <input type="text" placeholder="Telegram" name="telegram"
                            class="bg-white p-3 rounded-full border-none placeholder-[#5796FF]">

                        <div class="flex items-start gap-1">
                            <i class="fa-solid fa-circle-check" style="color: #29A71A"></i>
                            <p class=" text-[#5796FF] font-regular text-[12px] md:text-[14px]">I consent to having this
                                website store my submitted <br> information so they can respond to my enquiry.”</p>
                        </div>
                    </div>

                    <div class="w-full md:col-span-2 flex justify-center items-center mt-3 ">
                        <button class="rounded-full bg-gradient-to-r from-[#5897FF] to-[#1C0186] text-white px-6 py-2"
                            type="submit">
                            Submit
                        </button>
                    </div>
                </form>
                <p class="text-[#5796FF] text-center font-regular text-[11px] md:text-[15px] mt-5">We’ll respond within
                    24-48 hours. If urgent, you may also call us at 085 253 388</p>
            </div>
        </div>

    </div>

    <script>
        function toggleFaq(box) {
            const answer = box.querySelector(".answer");
            const arrow = box.querySelector(".arrow");

            answer.classList.toggle("hidden");
            arrow.classList.toggle("rotate-180");
        }
    </script>
    <script>
        function animateCounter(id, target, duration = 2000) {
            const el = document.getElementById(id);
            let start = 0;
            const stepTime = 16;
            const increment = target / (duration / stepTime);

            const timer = setInterval(() => {
                start += increment;
                if (start >= target) {
                    el.textContent = target;
                    clearInterval(timer);
                } else {
                    el.textContent = Math.floor(start);
                }
            }, stepTime);
        }

        function initCounters() {
            const section = document.getElementById('counter-section');

            const observer = new IntersectionObserver((entries) => {
                if (entries[0].isIntersecting) {
                    animateCounter("count-years", 5);
                    animateCounter("count-branches", 7);
                    animateCounter("count-students", 264);
                    animateCounter("count-staff", 107);
                    observer.disconnect(); // only run once
                }
            }, {
                threshold: 0.5
            });

            observer.observe(section);
        }

        document.addEventListener("DOMContentLoaded", initCounters);
    </script>
@endsection
