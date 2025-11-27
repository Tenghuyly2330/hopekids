@extends('layouts.master')

@section('content')
    {{-- banner --}}
    <section id="welcome" class="w-full h-[60vh] md:h-screen">
        <img src="{{ asset('assets/hero1.jpg') }}" class="absolute -z-10 w-full h-[60vh] object-cover md:h-screen inset-0 "
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
                        Welcome To <br>
                        <span class="text-[40px] md:text-[80px] font-[700] py-2 leading-none">HOPE KIDS</span>
                    </h1>

                    <p class="text-[#1C0186] font-bold text-[16px] md:text-[25px] pt-2">
                        Special Education School
                    </p>
                </div>
            </div>

            <!-- DESCRIPTION -->
            <div class="relative z-10 text-center lg:text-left mt-2 w-full md:w-[500px] px-3 md:px-0">
                <p class="text-[#fff] text-[12px] lg:text-[16px] font-medium">
                    Hope kids Special Education School We offer Special Education and
                    Holistic Speech Delay. Intellectual Disabilities . Leaning Difficulty
                    and Cerebral Palsy.
                </p>
            </div>

            <!-- BUTTONS -->
            <div class="flex ite justify-center lg:justify-start gap-2 relative z-10 mt-3 w-full md:w-[500px]">
                <button
                    class="px-4 py-2 text-[14px] lg:text-[16px] rounded-full bg-gradient-to-r from-blue-300 to-blue-700 text-white">
                    <a href="#contact">Enroll Now</a>
                </button>

                <button
                    class="px-4 py-2 text-[14px] lg:text-[16px] rounded-full bg-gradient-to-r from-blue-300 to-blue-700 text-white">
                    <a href="#find">Find Our Nearest Branch</a>
                </button>
            </div>

        </div>


    </section>

    {{-- reading --}}
    <section class="flex flex-col justify-center items-center text-center py-5 md:py-10 px-4" id="hopekid">
        <h1 class="text-[25px] md:text-[30px] text-gradient font-[700]">About Us</h1>
        <p class="text-[16px] md:text-[20px] font-medium text-gradient">HOPE KIDS Special Education School</p>
        <p class="mt-3 text-[14px] md:text-[16px] text-center w-full md:w-[700px]">
            Hope Kids was founded in Cambodia to make quality special education accessible to every child regardless of
            financial or geographic limitations. We serve families from all backgrounds
            and provinces, ensuring every child has the opportunity to learn, grow, and thrive.
        </p>
        <a href="{{ URL('/about') }}"
            class="py-1 px-3 mt-4 text-[14px] lg:text-[16px] rounded-full bg-gradient-to-r from-[#5897FF] to-[#1C0186] text-white">
            Read More
        </a>

    </section>

    {{-- our program --}}
    <section id="program" class="w-full px-2 max-w-7xl mx-auto py-5 md:py-10" id="program">
        <h1 class="text-center text-[25px] md:text-[30px] text-gradient font-[700] mb-5">
            Our Programs
        </h1>

        <div class="swiper mySwiper ">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="w-full">
                        <img src="{{ asset('assets/ourprogram/program-1.png') }}" class="w-full h-[160px] object-cover" />
                        <div class="text-white p-4 flex flex-col justify-between bg-[#00AFD7] py-4">
                            <h1 class="text-[18px] font-semibold leading-tight mb-2 min-h-[70px]">
                                Structured Teaching <br> (TEACCH Program)
                            </h1>
                            <p class="text-[14px] line-clamp-2">
                                Hope Kids uses the TEACCH® Structured Teaching approach from the University of North
                                Carolina, USA.
                            </p>
                            <a href="{{ URL('/ourprogram/#1') }}"
                                class="mt-4 py-1 px-5 text-[14px] font-[600] bg-white text-black self-start">
                                <span>Detail</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="w-full">
                        <img src="{{ asset('assets/ourprogram/program-2.jpg') }}" class="w-full h-[160px] object-cover" />
                        <div class="text-white p-4 flex flex-col justify-between bg-[#C3D500] py-4">
                            <h1 class="text-[18px] font-semibold leading-tight mb-2 min-h-[70px]">
                                Special <br> Education
                            </h1>
                            <p class="text-[14px] line-clamp-2">
                                Special education at Hope Kids is fully individualized to meet the needs of children with
                                mental, physical, emotional, or behavioral challenges.
                            </p>
                            <a href="{{ URL('/ourprogram/#2') }}"
                                class="mt-4 py-1 px-5 text-[14px] font-[600] bg-white text-black self-start">
                                <span>Detail</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="w-full">
                        <img src="{{ asset('assets/ourprogram/program-3.jpg') }}" class="w-full h-[160px] object-cover" />
                        <div class="text-white p-4 flex flex-col justify-between bg-[#FE5900] py-4">
                            <h1 class="text-[18px] font-semibold leading-tight mb-2 min-h-[70px]">
                                Applied Behavior <br> Analysis (ABA)
                            </h1>
                            <p class="text-[14px] line-clamp-2">
                                ABA is a proven, research based method for improving behavior, communication, social skills,
                                and daily living abilities in children with autism.
                            </p>
                            <a href="{{ URL('/ourprogram/#3') }}"
                                class="mt-4 py-1 px-5 text-[14px] font-[600] bg-white text-black self-start">
                                <span>Detail</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="w-full">
                        <img src="{{ asset('assets/ourprogram/program-4.jpg') }}" class="w-full h-[160px] object-cover" />
                        <div class="text-white p-4 flex flex-col justify-between bg-[#29A71A] py-4">
                            <h1 class="text-[18px] font-semibold leading-tight mb-2 min-h-[70px]">
                                Occupational Therapy (OT)
                            </h1>
                            <p class="text-[14px] line-clamp-2">
                                OT helps children develop essential skills for daily living, play, school readiness, fine
                                and gross motor development, sensory processing,
                            </p>
                            <a href="{{ URL('/ourprogram/#4') }}"
                                class="mt-4 py-1 px-5 text-[14px] font-[600] bg-white text-black self-start">
                                <span>Detail</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="w-full">
                        <img src="{{ asset('assets/ourprogram/program-5.jpg') }}" class="w-full h-[160px] object-cover" />
                        <div class="text-white p-4 flex flex-col justify-between bg-[#1F088C] py-4">
                            <h1 class="text-[18px] font-semibold leading-tight mb-2 min-h-[70px]">
                                Sensory Integration <br> Therapy
                            </h1>
                            <p class="text-[14px] line-clamp-2">
                                This therapy helps children with sensory processing difficulties respond more effectively to
                                sensory input.
                            </p>
                            <a href="{{ URL('/ourprogram/#5') }}"
                                class="mt-4 py-1 px-5 text-[14px] font-[600] bg-white text-black self-start">
                                <span>Detail</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="w-full">
                        <img src="{{ asset('assets/ourprogram/program-6.jpg') }}" class="w-full h-[160px] object-cover" />
                        <div class="text-white p-4 flex flex-col justify-between bg-[#E3264E] py-4">
                            <h1 class="text-[18px] font-semibold leading-tight mb-2 min-h-[70px]">
                                Early Intervention <br> Therapy
                            </h1>
                            <p class="text-[14px] line-clamp-2">
                                Designed for children from 18 months onward, early intervention targets speech, motor,
                                cognitive, and social emotional development at the earliest
                            </p>
                            <a href="{{ URL('/ourprogram/#6') }}"
                                class="mt-4 py-1 px-5 text-[14px] font-[600] bg-white text-black self-start">
                                <span>Detail</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="w-full">
                        <img src="{{ asset('assets/ourprogram/program-7.jpg') }}" class="w-full h-[160px] object-cover" />
                        <div class="text-white p-4 flex flex-col justify-between bg-[#5796FF] py-4">
                            <h1 class="text-[18px] font-semibold leading-tight mb-2 min-h-[70px]">
                                Play Therapy
                            </h1>
                            <p class="text-[14px] line-clamp-2">
                                Play therapy helps children express themselves, develop social and emotional skills, improve
                                behavior,
                            </p>
                            <a href="{{ URL('/ourprogram/#7') }}"
                                class="mt-4 py-1 px-5 text-[14px] font-[600] bg-white text-black self-start">
                                <span>Detail</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="w-full">
                        <img src="{{ asset('assets/ourprogram/program-8.jpg') }}" class="w-full h-[160px] object-cover" />
                        <div class="text-white p-4 flex flex-col justify-between bg-[#C3D500] py-4">
                            <h1 class="text-[18px] font-semibold leading-tight mb-2 min-h-[70px]">
                                Speech Therapy
                            </h1>
                            <p class="text-[14px] line-clamp-2">
                                Speech therapy improves communication, speech clarity, understanding, and language
                                development. Led by a highly qualified Speech-Language
                            </p>
                            <a href="{{ URL('/ourprogram/#8') }}"
                                class="mt-4 py-1 px-5 text-[14px] font-[600] bg-white text-black self-start">
                                <span>Detail</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="w-full">
                        <img src="{{ asset('assets/ourprogram/program-9.jpg') }}"
                            class="w-full h-[160px] object-cover" />
                        <div class="text-white p-4 flex flex-col justify-between bg-[#1F088C] py-4">
                            <h1 class="text-[18px] font-semibold leading-tight mb-2 min-h-[70px]">
                                Art Therapy
                            </h1>
                            <p class="text-[14px] line-clamp-2">
                                Art therapy allows children to express feelings, improve self esteem, develop fine motor
                                skills, and regulate emotions through creative activities.
                            </p>
                            <a href="{{ URL('/ourprogram/#9') }}"
                                class="mt-4 py-1 px-5 text-[14px] font-[600] bg-white text-black self-start">
                                <span>Detail</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="w-full">
                        <img src="{{ asset('assets/ourprogram/program-10.jpg') }}"
                            class="w-full h-[160px] object-cover" />
                        <div class="text-white p-4 flex flex-col justify-between bg-[#1F088C] py-4">
                            <h1 class="text-[18px] font-semibold leading-tight mb-2 min-h-[70px]">
                                Picture Exchange <br>
                                Communication System (PECS)
                            </h1>
                            <p class="text-[14px] line-clamp-2">
                                PECS is an internationally recognized communication system that helps non verbal children
                                communicate using pictures. Hope Kids core team has been
                            </p>
                            <a href="{{ URL('/ourprogram/#10') }}"
                                class="mt-4 py-1 px-5 text-[14px] font-[600] bg-white text-black self-start">
                                <span>Detail</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="w-full">
                        <img src="{{ asset('assets/our2.png') }}" class="w-full h-[160px] object-cover" />
                        <div class="text-white p-4 flex flex-col justify-between bg-[#C3D500] py-4">
                            <h1 class="text-[18px] font-semibold leading-tight mb-2 min-h-[70px]">
                                School Readiness program
                            </h1>
                            <p class="text-[14px] line-clamp-2">
                                This program prepares children with autism for mainstream school by developing social
                                skills, communication, academics,
                            </p>
                            <a href="{{ URL('/ourprogram/#11') }}"
                                class="mt-4 py-1 px-5 text-[14px] font-[600] bg-white text-black self-start">
                                <span>Detail</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="w-full">
                        <img src="{{ asset('assets/ourprogram/program-12.jpg') }}"
                            class="w-full h-[160px] object-cover" />
                        <div class="text-white p-4 flex flex-col justify-between bg-[#E3264E] py-4">
                            <h1 class="text-[18px] font-semibold leading-tight mb-2 min-h-[70px]">
                                Activities of Daily Living <br> Training
                            </h1>
                            <p class="text-[14px] line-clamp-2">
                                ADL training teaches essential self care skills such as hygiene, dressing, feeding,
                                toileting, and basic health routines. The goal is to build independence,
                            </p>
                            <a href="{{ URL('/ourprogram/#12') }}"
                                class="mt-4 py-1 px-5 text-[14px] font-[600] bg-white text-black self-start">
                                <span>Detail</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="w-full">
                        <img src="{{ asset('assets/ourprogram/program-13.jpg') }}"
                            class="w-full h-[160px] object-cover" />
                        <div class="text-white p-4 flex flex-col justify-between bg-[#E3264E] py-4">
                            <h1 class="text-[18px] font-semibold leading-tight mb-2 min-h-[70px]">
                                Parent Education and <br>
                                Counselling
                            </h1>
                            <p class="text-[14px] line-clamp-2">
                                Parents receive continuous training, emotional support, and guidance to better understand
                                their childs needs and development.
                            </p>
                            <a href="{{ URL('/ourprogram/#13') }}"
                                class="mt-4 py-1 px-5 text-[14px] font-[600] bg-white text-black self-start">
                                <span>Detail</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="w-full">
                        <img src="{{ asset('assets/our2.png') }}" class="w-full h-[160px] object-cover" />
                        <div class="text-white p-4 flex flex-col justify-between bg-[#C3D500] py-4">
                            <h1 class="text-[18px] font-semibold leading-tight mb-2 min-h-[70px]">
                                Cerebral Palsy <br> Development Program
                            </h1>
                            <p class="text-[14px] line-clamp-2">
                                We provide individualized support for children with cerebral palsy through personalized
                                education plans, physiotherapy, occupational therapy, and
                            </p>
                            <a href="{{ URL('/ourprogram/#14') }}"
                                class="mt-4 py-1 px-5 text-[14px] font-[600] bg-white text-black self-start">
                                <span>Detail</span>
                            </a>
                        </div>
                    </div>
                </div>
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
                School Facilities
            </h1>
            <p class="text-center text-[15px] md:text-[20px] font-bold text-white">A Safe and Nurturing Learning
                Environment</p>
            <p class="text-[10px] md:text-[15px] font-light text-white text-center ">
                Hope Kids is equipped with sensory rooms, therapy spaces, learning classrooms, <br>
                and play areas designed to support children’s development. Each facility is <br>
                created for safety, engagement, and comfort.
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
    <div id="our_branch" class="relative my-10 max-w-7xl mx-auto flex flex-col items-center justify-center px-4" id="branch">

        <h1 class="text-center text-[25px] md:text-[30px] text-gradient font-[700]">Our Branches</h1>

        <img src="{{ asset('assets/images/map.png') }}" alt="" class="w-full md:w-2/3 h-full">

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
                <p class="text-xl">Years</p>
            </div>
            <div class="flex flex-col items-center text-white">
                <h2 class="text-[50px] md:text-[70px] font-bold text-[#00AFD7]">
                    <span id="count-branches">0</span>
                </h2>
                <p class="text-xl">Branches</p>
            </div>
            <div class="flex flex-col items-center text-white">
                <h2 class="text-[50px] md:text-[70px] font-bold text-[#C3D500]">
                    <span id="count-students">0</span>
                </h2>
                <p class="text-xl">Students</p>
            </div>
            <div class="flex flex-col items-center text-white">
                <h2 class="text-[50px] md:text-[70px] font-bold text-[#FE5900]">
                    <span id="count-staff">0</span>
                </h2>
                <p class="text-xl">Teachers & Staff</p>
            </div>
        </div>


    </div>

    {{-- parent --}}
    <div id="parent" class="bg-[#F8F8F8]">

        <div class="pt-10">
            <h1 class="text-[25px] md:text-[30px] text-gradient font-[700] text-center">
                Parents’ Testimonials
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

            <div>


            </div>
        </div>
    </div>

    {{-- faqs --}}
    <section id="faq" class="mt-20 px-4 md:px-0" id="faq">
        <h1 class="text-[25px] md:text-[30px] text-gradient font-[700] text-center">
            Frequently Asked Questions
        </h1>

        <div class="mt-5 flex flex-col md:flex-row flex-wrap justify-center items-start gap-5 md:gap-8">

            <!-- Column 1 -->
            <div class="flex flex-col gap-5 md:w-[48%]">

                <!-- Question 1 -->
                <div class="border border-[#DBDBDB] rounded-lg p-4 bg-white faq-item cursor-pointer"
                    onclick="toggleFaq(this)">
                    <div class="flex justify-between items-start">
                        <p class="text-[#1E1E1E] text-[15px] md:text-[16px] font-medium">
                            Q: What is special education?
                        </p>
                        <div
                            class="arrow w-0 h-0 border-l-[10px] border-l-transparent border-r-[10px] border-r-transparent border-b-[15px] border-b-gray-400 mt-2">
                        </div>
                    </div>

                    <p class="answer mt-3 text-[#1C0186] text-[14px] md:text-[15px] hidden">
                        A: Special education is designed to support children with developmental, learning, or behavior
                        challenges by providing individualized methods and therapies.
                    </p>
                </div>

                <!-- Question 2 -->
                <div class="border border-[#DBDBDB] rounded-lg p-4 bg-white faq-item cursor-pointer"
                    onclick="toggleFaq(this)">
                    <div class="flex justify-between items-start">
                        <p class="text-[15px] md:text-[16px] font-medium">Q: Why is special education important in
                            Cambodia?</p>
                        <div
                            class="arrow w-0 h-0 border-l-[10px] border-l-transparent border-r-[10px] border-r-transparent border-b-[15px] border-b-gray-400 mt-2">
                        </div>
                    </div>
                    <p class="answer mt-3 text-[#1C0186] text-[14px] md:text-[15px] hidden">
                        A: It ensures that children with special needs receive the support required for their development
                        and independence.
                    </p>
                </div>

                <!-- Question 3 -->
                <div class="border border-[#DBDBDB] rounded-lg p-4 bg-white faq-item cursor-pointer"
                    onclick="toggleFaq(this)">
                    <div class="flex justify-between items-start">
                        <p class="text-[15px] md:text-[16px]">Q: How can parents enroll their child at Hope Kids?</p>
                        <div
                            class="arrow w-0 h-0 border-l-[10px] border-l-transparent border-r-[10px] border-r-transparent border-b-[15px] border-b-gray-400 mt-2">
                        </div>
                    </div>
                    <p class="answer mt-3 text-[#1C0186] text-[14px] md:text-[15px] hidden">
                        A: Parents can enroll by contacting our office or visiting our center for an initial assessment.
                    </p>
                </div>

                <!-- Question 4 -->
                <div class="border border-[#DBDBDB] rounded-lg p-4 bg-white faq-item cursor-pointer"
                    onclick="toggleFaq(this)">
                    <div class="flex justify-between items-start">
                        <p class="text-[15px] md:text-[16px]">Q: Are services available outside Phnom Penh?</p>
                        <div
                            class="arrow w-0 h-0 border-l-[10px] border-l-transparent border-r-[10px] border-r-transparent border-b-[15px] border-b-gray-400 mt-2">
                        </div>
                    </div>
                    <p class="answer mt-3 text-[#1C0186] text-[14px] md:text-[15px] hidden">
                        A: Yes, we offer outreach services and consultations outside Phnom Penh.
                    </p>
                </div>

            </div>

            <!-- Column 2 -->
            <div class="flex flex-col gap-5 md:w-[48%]">

                <!-- Question 5 -->
                <div class="border border-[#DBDBDB] rounded-lg p-4 bg-white faq-item cursor-pointer"
                    onclick="toggleFaq(this)">
                    <div class="flex justify-between items-start">
                        <p class="text-[15px] md:text-[16px]">Q: Who can benefit from special education services?</p>
                        <div
                            class="arrow w-0 h-0 border-l-[10px] border-l-transparent border-r-[10px] border-r-transparent border-b-[15px] border-b-gray-400 mt-2">
                        </div>
                    </div>
                    <p class="answer mt-3 text-[#1C0186] text-[14px] md:text-[15px] hidden">
                        A: Children with autism, ADHD, Down syndrome, learning delays, and more.
                    </p>
                </div>

                <!-- Question 6 -->
                <div class="border border-[#DBDBDB] rounded-lg p-4 bg-white faq-item cursor-pointer"
                    onclick="toggleFaq(this)">
                    <div class="flex justify-between items-start">
                        <p class="text-[15px] md:text-[16px]">Q: What kind of professionals work at Hope Kids?</p>
                        <div
                            class="arrow w-0 h-0 border-l-[10px] border-l-transparent border-r-[10px] border-r-transparent border-b-[15px] border-b-gray-400 mt-2">
                        </div>
                    </div>
                    <p class="answer mt-3 text-[#1C0186] text-[14px] md:text-[15px] hidden">
                        A: Therapists, special educators, psychologists, and trained caregivers.
                    </p>
                </div>

                <!-- Question 7 -->
                <div class="border border-[#DBDBDB] rounded-lg p-4 bg-white faq-item cursor-pointer"
                    onclick="toggleFaq(this)">
                    <div class="flex justify-between items-start">
                        <p class="text-[15px] md:text-[16px]">Q: How are children’s progress monitored?</p>
                        <div
                            class="arrow w-0 h-0 border-l-[10px] border-l-transparent border-r-[10px] border-r-transparent border-b-[15px] border-b-gray-400 mt-2">
                        </div>
                    </div>
                    <p class="answer mt-3 text-[#1C0186] text-[14px] md:text-[15px] hidden">
                        A: Through regular assessments, progress reports, and parent meetings.
                    </p>
                </div>

                <!-- Question 8 -->
                <div class="border border-[#DBDBDB] rounded-lg p-4 bg-white faq-item cursor-pointer"
                    onclick="toggleFaq(this)">
                    <div class="flex justify-between items-start">
                        <p class="text-[15px] md:text-[16px]">Q: Does Hope Kids provide parent training?</p>
                        <div
                            class="arrow w-0 h-0 border-l-[10px] border-l-transparent border-r-[10px] border-r-transparent border-b-[15px] border-b-gray-400 mt-2">
                        </div>
                    </div>
                    <p class="answer mt-3 text-[#1C0186] text-[14px] md:text-[15px] hidden">
                        A: Yes, parent workshops and home-training programs are available.
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
            <p class="text-[10px] md:text-[23px] font-medium text-white/90 text-center">
                Hope kids Special Education School We offer Special <br>
                Education and Holistic Speech Delay. Intellectual Disabilities . <br>
                Leaning Difficulty and Cerebral Palsy.
            </p>
        </div>
    </section>

    {{-- contact form --}}
    <div id="schedule" class="mt-10" id="contact">
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
                <p class="text-[#5796FF] text-center font-regular text-[11px] md:text-[15px] mt-5">We ll respond within
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
