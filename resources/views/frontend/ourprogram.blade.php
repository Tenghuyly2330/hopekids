@extends('layouts.master')

@section('content')
    <section class="w-full h-[60vh] md:h-screen">
        <div class="absolute h-[60vh] object-cover md:h-screen inset-0 z-10 bg-black/50"></div>
        <img src="{{ asset('assets/hero_ourprogram.png') }}"
            class="absolute object-cover z-1 w-full h-[60vh] md:h-screen inset-0 " alt="">
        <div>
            <div class="relative z-10 pt-[15vh] md:pt-[30vh]">
                <h1 class="text-[25px] md:text-[50px] text-center text-gradient font-[700]">
                    Program</h1>
                <p class="text-center max-w-[700px] mx-auto md:text-[18px] text-white text-[15px] lg:text-[16px]">
                    Hope Kids provides affordable, inclusive, and professional education for
                    children with autism and special needs in Phnom Penh and across
                    Cambodia</p>

            </div>
        </div>
    </section>

    <section class="">
        <div class="flex flex-col items-center gap-4 md:gap-40 px-4 max-w-7xl mx-auto py-20">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-14 xl:gap-30" id="1">
                <div class="relative w-full h-full">
                    <img src="{{ asset('assets/ourprogram/program-1.png') }}" alt=""
                        class="w-full h-[250px] md:h-[400px] rounded-[30px] object-cover">
                    <div
                        class="bg-[#00AFD7] flex items-center justify-center w-[100px] h-[80px] lg:w-[180px] lg:h-[120px] xl:w-[220px] xl:h-[160px] rounded-2xl absolute bottom-0 right-0 lg:-bottom-[30px] xl:-bottom-[70px] lg:-right-[30px] xl:-right-[70px]">
                        <h1 class="text-white text-[40px] lg:text-[70px] font-bold">01</h1>
                    </div>
                </div>

                <div class="md:mt-5 text-start">
                    <h2 class="text-[#00AFD7] text-[20px] md:text-[30px]">
                        Structured Teaching <br> (TEACCH Program)
                    </h2>
                    <p class="text-[12px] lg:text-[15px]">
                        Hope Kids uses the TEACCH® Structured Teaching approach from the University of North Carolina, USA.
                        This method supports children with autism through visual tools, structured environments,
                        individualized schedules, and organized classroom systems. All staff are trained in TEACCH, with
                        some receiving
                        advanced training from the USA.
                    </p>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-14 xl:gap-30" id="2">
                <div class="md:mt-5 order-2 md:order-none">
                    <h2 class="text-[#C3D500] text-start md:text-end text-[20px] md:text-[30px]">Special Education</h2>
                    <p class="text-start md:text-end text-[12px] lg:text-[15px]">
                        Special education at Hope Kids is fully individualized to meet the needs of children with mental,
                        physical, emotional, or behavioral challenges. Led by Director Mrs. Mam Lay, who has over 15 years
                        of experience, the program provides personalized learning approaches for children with diverse
                        needs.
                    </p>
                </div>
                <div class="relative w-full h-full order-1 md:order-none">
                    <img src="{{ asset('assets/ourprogram/program-2.jpg') }}" alt=""
                        class="w-full h-[250px] md:h-[400px] rounded-[30px] object-cover">
                    <div
                        class="bg-[#C3D500] flex items-center justify-center w-[100px] h-[80px] lg:w-[180px] lg:h-[120px] xl:w-[220px] xl:h-[160px] rounded-2xl absolute bottom-0 left-0 lg:-bottom-[30px] xl:-bottom-[70px] lg:-left-[30px] xl:-left-[70px]">
                        <h1 class="text-white text-[40px] lg:text-[70px] font-bold">02</h1>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-14 xl:gap-30" id="3">
                <div class="relative w-full h-full">
                    <img src="{{ asset('assets/ourprogram/program-3.jpg') }}" alt=""
                        class="w-full h-[250px] md:h-[400px] rounded-[30px] object-cover">
                    <div
                        class="bg-[#FE5900] flex items-center justify-center w-[100px] h-[80px] lg:w-[180px] lg:h-[120px] xl:w-[220px] xl:h-[160px] rounded-2xl absolute bottom-0 right-0 lg:-bottom-[30px] xl:-bottom-[70px] lg:-right-[30px] xl:-right-[70px]">
                        <h1 class="text-white text-[40px] lg:text-[70px] font-bold">03</h1>
                    </div>
                </div>

                <div class="md:mt-5">
                    <h2 class="text-[#FE5900] text-start text-[20px] md:text-[30px]">
                        Applied Behavior <br>
                        Analysis (ABA)
                    </h2>
                    <p class="text-[12px] lg:text-[15px]">
                        ABA is a proven, research based method for improving behavior, communication, social skills, and
                        daily living abilities in children with autism. Several Hope Kids staff are undergoing ABA
                        Technician
                        training ensuring high-quality and evidence based support.
                    </p>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2  gap-6 lg:gap-14 xl:gap-30" id="4">
                <div class="md:mt-5 text-start md:text-end order-2 md:order-none">
                    <h2 class="text-[#29A71A] text-[20px] md:text-[30px]">Occupational Therapy (OT)</h2>
                    <p class="  text-[12px] lg:text-[15px]">
                        OT helps children develop essential skills for daily living, play, school readiness, fine and gross
                        motor
                        development, sensory processing, and emotional regulation. Therapy is play based and tailored to
                        each
                        child’s needs.
                    </p>
                </div>
                <div class="relative w-full h-full order-1 md:order-none">
                    <img src="{{ asset('assets/ourprogram/program-4.jpg') }}" alt=""
                        class="w-full h-[250px] md:h-[400px] rounded-[30px] object-cover">
                    <div
                        class="bg-[#29A71A] flex items-center justify-center w-[100px] h-[80px] lg:w-[180px] lg:h-[120px] xl:w-[220px] xl:h-[160px] rounded-2xl absolute bottom-0 left-0 lg:-bottom-[30px] xl:-bottom-[70px] lg:-left-[30px] xl:-left-[70px]">
                        <h1 class="text-white text-[40px] lg:text-[70px] font-bold">04</h1>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-14 xl:gap-30" id="5">
                <div class="relative w-full h-full">
                    <img src="{{ asset('assets/ourprogram/program-5.jpg') }}" alt=""
                        class="w-full h-[250px] md:h-[400px] rounded-[30px] object-cover">
                    <div
                        class="bg-[#1F088C] flex items-center justify-center w-[100px] h-[80px] lg:w-[180px] lg:h-[120px] xl:w-[220px] xl:h-[160px] rounded-2xl absolute bottom-0 right-0 lg:-bottom-[30px] xl:-bottom-[70px] lg:-right-[30px] xl:-right-[70px]">
                        <h1 class="text-white text-[40px] lg:text-[70px] font-bold">05</h1>
                    </div>
                </div>

                <div class="md:mt-5 text-start">
                    <h2 class="text-[#1F088C] text-[20px] md:text-[30px]">
                        Sensory Integration <br> Therapy
                    </h2>
                    <p class="text-[12px] lg:text-[15px]">
                        This therapy helps children with sensory processing difficulties respond more effectively to sensory
                        input.
                        A certified therapist assesses each child’s sensory needs and creates individualized sensory diets
                        to improve
                        focus, behavior, and participation.This therapy helps children with sensory processing difficulties
                        respond more effectively to sensory
                        input.
                        A certified therapist assesses each child’s sensory needs and creates individualized sensory diets
                        to improve
                        focus, behavior, and participation.
                    </p>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2  gap-6 lg:gap-14 xl:gap-30" id="6">
                <div class="md:mt-5 text-start md:text-end order-2 md:order-none">
                    <h2 class="text-[#E3264E] text-[20px] md:text-[30px]">Early Intervention <br>
                        Therapy</h2>
                    <p class="  text-[12px] lg:text-[15px]">
                        Designed for children from 18 months onward, early intervention targets speech, motor, cognitive,
                        and
                        social emotional development at the earliest stage. A multidisciplinary team works together to
                        support
                        optimal early growth
                    </p>
                </div>
                <div class="relative w-full h-full order-1 md:order-none">
                    <img src="{{ asset('assets/ourprogram/program-6.jpg') }}" alt=""
                        class="w-full h-[250px] md:h-[400px] rounded-[30px] object-cover">
                    <div
                        class="bg-[#E3264E] flex items-center justify-center w-[100px] h-[80px] lg:w-[180px] lg:h-[120px] xl:w-[220px] xl:h-[160px] rounded-2xl absolute bottom-0 left-0 lg:-bottom-[30px] xl:-bottom-[70px] lg:-left-[30px] xl:-left-[70px]">
                        <h1 class="text-white text-[40px] lg:text-[70px] font-bold">06</h1>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-14 xl:gap-30" id="7">
                <div class="relative w-full h-full">
                    <img src="{{ asset('assets/ourprogram/program-7.jpg') }}" alt=""
                        class="w-full h-[250px] md:h-[400px] rounded-[30px] object-cover">
                    <div
                        class="bg-[#5796FF] flex items-center justify-center w-[100px] h-[80px] lg:w-[180px] lg:h-[120px] xl:w-[220px] xl:h-[160px] rounded-2xl absolute bottom-0 right-0 lg:-bottom-[30px] xl:-bottom-[70px] lg:-right-[30px] xl:-right-[70px]">
                        <h1 class="text-white text-[40px] lg:text-[70px] font-bold">07</h1>
                    </div>
                </div>

                <div class="md:mt-5 text-start">
                    <h2 class="text-[#5796FF] text-[20px] md:text-[30px]">
                        Play Therapy
                    </h2>
                    <p class="text-[12px] lg:text-[15px]">
                        Play therapy helps children express themselves, develop social and emotional skills, improve
                        behavior, and
                        enhance imagination. Guided by a Level 1 Play Therapy certified Program Director, Hope Kids
                        integrates
                        play based learning into daily sessions.
                    </p>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2  gap-6 lg:gap-14 xl:gap-30" id="8">
                <div class="md:mt-5 text-start md:text-end order-2 md:order-none">
                    <h2 class="text-[#C3D500] text-[20px] md:text-[30px]">Speech Therapy</h2>
                    <p class="  text-[12px] lg:text-[15px]">
                        Speech therapy improves communication, speech clarity, understanding, and language development. Led
                        by a highly qualified Speech-Language Pathologist, sessions are individualized, and parents receive
                        training to continue supporting communication at home.
                    </p>
                </div>
                <div class="relative w-full h-full order-1 md:order-none">
                    <img src="{{ asset('assets/ourprogram/program-8.jpg') }}" alt=""
                        class="w-full h-[250px] md:h-[400px] rounded-[30px] object-cover">
                    <div
                        class="bg-[#C3D500] flex items-center justify-center w-[100px] h-[80px] lg:w-[180px] lg:h-[120px] xl:w-[220px] xl:h-[160px] rounded-2xl absolute bottom-0 left-0 lg:-bottom-[30px] xl:-bottom-[70px] lg:-left-[30px] xl:-left-[70px]">
                        <h1 class="text-white text-[40px] lg:text-[70px] font-bold">08</h1>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-14 xl:gap-30" id="9">
                <div class="relative w-full h-full">
                    <img src="{{ asset('assets/ourprogram/program-9.jpg') }}" alt=""
                        class="w-full h-[250px] md:h-[400px] rounded-[30px] object-cover">
                    <div
                        class="bg-[#1F088C] flex items-center justify-center w-[100px] h-[80px] lg:w-[180px] lg:h-[120px] xl:w-[220px] xl:h-[160px] rounded-2xl absolute bottom-0 right-0 lg:-bottom-[30px] xl:-bottom-[70px] lg:-right-[30px] xl:-right-[70px]">
                        <h1 class="text-white text-[40px] lg:text-[70px] font-bold">09</h1>
                    </div>
                </div>

                <div class="md:mt-5 text-start">
                    <h2 class="text-[#1F088C] text-[20px] md:text-[30px]">
                        Art Therapy
                    </h2>
                    <p class="text-[12px] lg:text-[15px]">
                        Art therapy allows children to express feelings, improve self esteem, develop fine motor skills, and
                        regulate emotions through creative activities. It is an effective and enjoyable therapeutic tool for
                        children
                        with special needs.
                    </p>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2  gap-6 lg:gap-14 xl:gap-30" id="10">
                <div class="md:mt-5 text-start md:text-end order-2 md:order-none">
                    <h2 class="text-[#C3D500] text-[20px] md:text-[30px]">Picture Exchange <br>
                        Communication System (PECS)</h2>
                    <p class="  text-[12px] lg:text-[15px]">
                        PECS is an internationally recognized communication system that helps non verbal children
                        communicate using
                        pictures. Hope Kids core team has been trained in PECS Level 1 in Singapore to ensure global
                        standard services.
                    </p>
                </div>
                <div class="relative w-full h-full order-1 md:order-none">
                    <img src="{{ asset('assets/ourprogram/program-10.jpg') }}" alt=""
                        class="w-full h-[250px] md:h-[400px] rounded-[30px] object-cover">
                    <div
                        class="bg-[#C3D500] flex items-center justify-center w-[100px] h-[80px] lg:w-[180px] lg:h-[120px] xl:w-[220px] xl:h-[160px] rounded-2xl absolute bottom-0 left-0 lg:-bottom-[30px] xl:-bottom-[70px] lg:-left-[30px] xl:-left-[70px]">
                        <h1 class="text-white text-[40px] lg:text-[70px] font-bold">10</h1>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-14 xl:gap-30" id="11">
                <div class="relative w-full h-full">
                    <img src="{{ asset('assets/program7.png') }}" alt=""
                        class="w-full h-[250px] md:h-[400px] rounded-[30px] object-cover">
                    <div
                        class="bg-[#1F088C] flex items-center justify-center w-[100px] h-[80px] lg:w-[180px] lg:h-[120px] xl:w-[220px] xl:h-[160px] rounded-2xl absolute bottom-0 right-0 lg:-bottom-[30px] xl:-bottom-[70px] lg:-right-[30px] xl:-right-[70px]">
                        <h1 class="text-white text-[40px] lg:text-[70px] font-bold">11</h1>
                    </div>
                </div>

                <div class="md:mt-5 text-start">
                    <h2 class="text-[#1F088C] text-[20px] md:text-[30px]">
                        School Readiness
                        program
                    </h2>
                    <p class="text-[12px] lg:text-[15px]">
                        This program prepares children with autism for mainstream school by developing social skills,
                        communication, academics, emotional regulation, sensory skills, and independent learning. It uses
                        evidence based methods such as ABA, visual supports, and structured teaching.
                    </p>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2  gap-6 lg:gap-14 xl:gap-30" id="12">
                <div class="md:mt-5 text-start md:text-end order-2 md:order-none">
                    <h2 class="text-[#E3264E] text-[20px] md:text-[30px]">Activities of Daily Living
                        Training</h2>
                    <p class="  text-[12px] lg:text-[15px]">
                        ADL training teaches essential self care skills such as hygiene, dressing, feeding, toileting, and
                        basic health
                        routines. The goal is to build independence, confidence, and daily functioning.
                    </p>
                </div>
                <div class="relative w-full h-full order-1 md:order-none">
                    <img src="{{ asset('assets/ourprogram/program-12.jpg') }}" alt=""
                        class="w-full h-[250px] md:h-[400px] rounded-[30px] object-cover">
                    <div
                        class="bg-[#E3264E] flex items-center justify-center w-[100px] h-[80px] lg:w-[180px] lg:h-[120px] xl:w-[220px] xl:h-[160px] rounded-2xl absolute bottom-0 left-0 lg:-bottom-[30px] xl:-bottom-[70px] lg:-left-[30px] xl:-left-[70px]">
                        <h1 class="text-white text-[40px] lg:text-[70px] font-bold">12</h1>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-14 xl:gap-30" id="13">
                <div class="relative w-full h-full">
                    <img src="{{ asset('assets/ourprogram/program-13.jpg') }}" alt=""
                        class="w-full h-[250px] md:h-[400px] rounded-[30px] object-cover">
                    <div
                        class="bg-[#5796FF] flex items-center justify-center w-[100px] h-[80px] lg:w-[180px] lg:h-[120px] xl:w-[220px] xl:h-[160px] rounded-2xl absolute bottom-0 right-0 lg:-bottom-[30px] xl:-bottom-[70px] lg:-right-[30px] xl:-right-[70px]">
                        <h1 class="text-white text-[40px] lg:text-[70px] font-bold">13</h1>
                    </div>
                </div>

                <div class="md:mt-5 text-start">
                    <h2 class="text-[#5796FF] text-[20px] md:text-[30px]">
                        Parent Education and <br>
                        Counselling
                    </h2>
                    <p class="text-[12px] lg:text-[15px]">
                        Parents receive continuous training, emotional support, and guidance to better understand their
                        childs
                        needs and development. Services include counseling, workshops, home strategies, collaboration
                        support,
                        and transition planning.
                    </p>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2  gap-6 lg:gap-14 xl:gap-30" id="14">
                <div class="md:mt-5 text-start md:text-end order-2 md:order-none">
                    <h2 class="text-[#C3D500] text-[20px] md:text-[30px]">Cerebral Palsy
                        Development Program</h2>
                    <p class="  text-[12px] lg:text-[15px]">
                        We provide individualized support for children with cerebral palsy through personalized education
                        plans, physiotherapy, occupational therapy, and adaptive learning. Our dedicated team helps improve
                        physical abilities, communication skills, and overall development in a nurturing and inclusive
                        environment.
                    </p>
                </div>
                <div class="relative w-full h-full order-1 md:order-none">
                    <img src="{{ asset('assets/program7.png') }}" alt=""
                        class="w-full h-[250px] md:h-[400px] rounded-[30px] object-cover">
                    <div
                        class="bg-[#C3D500] flex items-center justify-center w-[100px] h-[80px] lg:w-[180px] lg:h-[120px] xl:w-[220px] xl:h-[160px] rounded-2xl absolute bottom-0 left-0 lg:-bottom-[30px] xl:-bottom-[70px] lg:-left-[30px] xl:-left-[70px]">
                        <h1 class="text-white text-[40px] lg:text-[70px] font-bold">14</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
