@extends('layouts.master')

@section('content')
    <section class="w-full h-[60vh] md:h-screen">
        <img src="{{ asset('assets/professional_hero.png') }}"
            class="absolute object-cover z-1 w-full h-[60vh] md:h-screen inset-0 " alt="">
        <div>
            <div class="absolute h-[60vh] object-cover md:h-screen inset-0 z-10 bg-black/50"></div>

            <div class="relative z-10 pt-[15vh] md:pt-[30vh]">

                <h1 class="text-[25px] md:text-[50px] text-center text-gradient font-[700]">
                    Professional Team</h1>>
                <p class="text-center max-w-[700px] mx-auto md:text-[18px] text-white text-[15px] lg:text-[16px]">
                    Hope Kids provides affordable, inclusive, and professional education for
                    children with autism and special needs in Phnom Penh and across
                    Cambodia.
                </p>
            </div>
        </div>
    </section>

    <section class="mt-5 md:mt-10">
        <h1 class="text-[#5794FE] text-[40px] md:text-[50px] text-center">Message from Our founder</h1>
        <div class="mt-10">
            <div class="flex justify-center flex-wrap gap-4 md:gap-30">
                <div class="w-[230px] h-[230px] rounded-full overflow-hidden">
                    <div class="w-[230px] h-[230px] rounded-full overflow-hidden">
                        <img src="{{ asset('assets/mamlay.png') }}" class="w-full h-full object-cover object-top"
                            alt="">
                    </div>
                </div>
                <div class="px-4">
                    <img src="{{ asset('assets/double_qout.png') }}" alt="">
                    <p class="w-full md:w-[700px] text-[15px]  md:text-[20px] mt-5 md:mt-10">There is a need for quality
                        education and services for children with special
                        needs in Cambodia. We, in Hope Kids are committed to providing
                        comprehensive support to Cambodian children with special needs. My
                        dream is to expand Hope Kids branches throughout Cambodia, ensuring
                        accessibility of quality education and services for children in rural,
                        provincial and urban areas. We also strive to make our services available
                        to families of all socioeconomic backgrounds.</p>

                    <p class="w-full md:w-[700px] text-[15px]  md:text-[20px] mt-5 md:mt-10">
                        We aim to create an inclusive school environment where children with
                        special needs can thrive, ultimately transitioning to mainstream schooling
                        and achieving self-sufficiency. We desire to instill hope and persistence in
                        the hearts of all parents of children with special needs. Every child is
                        unique and gifted in their own way.
                    </p>

                    <h1 class="text-[#1C0186] font-bold text-[20px] mt-5">Mrs. Mam Lay</h1>
                    <p class="text-[#5796FF] text-[15px]  font-regular">Founder & Executive Director</p>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-10 bg-[#F0F6FF] w-full ">
        <div class="pt-10 pb-20 max-w-7xl mx-auto px-4">
            <h1 class="text-[#5794FE] text-[25px] md:text-[50px] font-light text-center pb-10">Our Professional Team</h1>

            <div class="grid grid-cols-1 lg:grid-cols-3 items-start">
                <div class="w-[230px] h-[230px] rounded-full overflow-hidden">
                    <div class="w-[230px] h-[230px] rounded-full overflow-hidden">
                        <img src="{{ asset('assets/mamlay.png') }}" class="w-full h-full object-cover object-top"
                            alt="">

                    </div>
                </div>
                <div class="col-span-1 lg:col-span-2 pt-4 md:pt-0">
                    <div>
                        <h1 class="text-[#1C0186] font-bold text-[20px] md:text-[15px] lg:text-[20px]">Mrs. Mam Lay</h1>
                        <h1 class="text-[#5796FF] text-[14px] md:text-[15px] lg:text-[20px] font-regular">Founder &
                            Executive Director</h1>
                    </div>
                    <div class="mt-5">
                        <h1 class="text-[#1C0186] text-[14px] font-semibold md:text-[15px] lg:text-[20px]">Education
                        </h1>
                        <p class="text-[12px] md:text-[15px] lg:text-[20px] font-light mt-2">Bachelor’s in Psychology
                            (Royal University of Phnom Penh) </p>
                        <p class="text-[12px] md:text-[15px] lg:text-[20px] font-light ">Degree in Education Science
                            (National Institute of Education, India)</p>
                        <p class="text-[12px] md:text-[15px] lg:text-[20px] font-light ">Post-Graduation Diploma in
                            Special Education (University of Madras, India)</p>
                    </div>
                    <div class="mt-5">
                        <h1 class="text-[#1C0186] text-[14px] font-semibold md:text-[15pxpx] lg:text-[20px]">Other
                            certificates</h1>
                        <p class="text-[12px] md:text-[15px] lg:text-[20px] font-light mt-2">Picture Exchange
                            Communication System (PECS, Australia)</p>
                        <p class="text-[12px] font-light  md:text-[15px] lg:text-[20px]">TEACCH for Early Learner’s
                            Foundation of Structured Teaching (TEACCH, USA)</p>
                        <p class="text-[12px] font-light md:text-[15px] lg:text-[20px] ">ABAT, Applied Behavior Analysis
                            Technician training (SEED Services, Malaysia)</p>

                    </div>
                    <div class="mt-5">
                        <h1 class="text-[#1C0186] text-[14px] md:text-[15px] lg:text-[20px] font-semibold">Experience
                        </h1>
                        <p class="text-[12px] font-light mt-2 md:text-[15px] lg:text-[20px]">More than 17 years of
                            experience working with children and adolescents with special needs at Caritas</p>
                        <p class="text-[12px] font-light mt-2 md:text-[15px] lg:text-[20px]">CCAMH & Hope Kids Special
                            Education School</p>
                    </div>

                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 items-start pt-10">
                <div class="w-[230px] h-[230px] rounded-full overflow-hidden">
                    <img src="{{ asset('assets/Ranjani Poobalan.png') }}" class="w-full h-full object-cover object-right"
                        alt="">

                </div>
                <div class="col-span-1 lg:col-span-2 pt-4 md:pt-0">
                    <div>
                        <h1 class="text-[#1C0186] font-bold text-[20px] md:text-[15px] lg:text-[20px]">Ms. Ranjani Poobalan
                        </h1>
                        <h1 class="text-[#5796FF] text-[14px] md:text-[15px] lg:text-[20px] font-regular">Program
                            Director/Pediatric Physiotherapist</h1>
                    </div>
                    <div class="mt-5">
                        <h1 class="text-[#1C0186] text-[14px] font-semibold md:text-[15px] lg:text-[20px]">Education
                        </h1>
                        <p class="text-[12px] md:text-[15px] lg:text-[20px] font-light mt-2">Bachelor s in Physiotherapy
                            (PSG College of Physiotherapy, India) </p>
                        <p class="text-[12px] md:text-[15px] lg:text-[20px] font-light ">Gold medalist for Masters in
                            Pediatric Physiotherapy (SRM University, India)</p>
                    </div>
                    <div class="mt-5">
                        <h1 class="text-[#1C0186] text-[14px] font-semibold md:text-[15pxpx] lg:text-[20px]">Other
                            certificates</h1>
                        <p class="text-[12px] md:text-[15px] lg:text-[20px] font-light mt-2">Sensory Integration Therapy
                        </p>
                        <p class="text-[12px] font-light  md:text-[15px] lg:text-[20px]"> Play Therapy</p>
                        <p class="text-[12px] font-light md:text-[15px] lg:text-[20px] ">Aquatic Therapy</p>
                        <p class="text-[12px] font-light md:text-[15px] lg:text-[20px] ">General Movements Assessment
                            Early Identification and Intervention</p>
                        <p class="text-[12px] font-light  md:text-[15px] lg:text-[20px]">Picture Exchange Communication
                            System (PECS Australia)</p>
                        <p class="text-[12px] font-light md:text-[15px] lg:text-[20px]">TEACCH for Early Learners
                            Foundation of Structured Teaching (TEACCH, USA)</p>
                        <p class="text-[12px] font-light md:text-[15px] lg:text-[20px]">ABAT, Applied Behavior Analysis
                            Technician Training (SEED Services, Malaysia)</p>
                    </div>
                    <div class="mt-5">
                        <h1 class="text-[#1C0186] text-[14px] md:text-[15px] lg:text-[20px] font-semibold">Experience
                        </h1>
                        <p class="text-[12px] font-light mt-2 md:text-[15px] lg:text-[20px]">More than 12 years
                            experience working with children in India, Sri Lanka and Cambodia</p>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 items-start pt-10">
                <div class="w-[230px] h-[230px] rounded-full overflow-hidden">
                    <img src="{{ asset('assets/sonita.png') }}" class="w-full h-full object-cover" alt="">

                </div>
                <div class="col-span-1 lg:col-span-2 pt-4 md:pt-0">
                    <div>
                        <h1 class="text-[#1C0186] font-bold text-[20px] md:text-[15px] lg:text-[20px]">Ms. Um Sonita
                        </h1>
                        <h1 class="text-[#5796FF] text-[14px] md:text-[15px] lg:text-[20px] font-regular">Program
                            Manager/Clinical Psychologist</h1>
                    </div>
                    <div class="mt-5">
                        <h1 class="text-[#1C0186] text-[14px] font-semibold md:text-[15px] lg:text-[20px]">Education
                        </h1>
                        <p class="text-[12px] font-light mt-2 md:text-[15px] lg:text-[20px]">Bachelor’s in Psychology
                            (Royal University of Phnom Penh)</p>
                        <p class="text-[12px] font-light md:text-[15px] lg:text-[20px]">Bachelor’s in Teaching English
                            as a Foreign Language TEFL (BELTEI International University)</p>
                        <p class="text-[12px] font-light md:text-[15px] lg:text-[20px]">Bachelor’s in Psychology (Royal
                            University of Phnom Penh)</p>
                    </div>
                    <div class="mt-5">
                        <h1 class="text-[#1C0186] text-[14px] font-semibold md:text-[15px] lg:text-[20px]">Other
                            certificates</h1>
                        <p class="text-[12px] font-light mt-2 md:text-[15px] lg:text-[20px]">Picture Exchange
                            Communication System (PECs, Australia)</p>
                        <p class="text-[12px] font-light md:text-[15px] lg:text-[20px]">Applied Behavior Analysis
                            Technician Training (SEED Services, Malaysia)</p>
                        <p class="text-[12px] font-light md:text-[15px] lg:text-[20px]">Workshop on Child Inclusion Is
                            my child really included?” (Bangkok, Thailand)</p>
                        <p class="text-[12px] font-light md:text-[15px] lg:text-[20px]">Fundamentals of early
                            intervention for children at risk for learning disabilities (India)</p>
                    </div>
                    <div class="mt-5">
                        <h1 class="text-[#1C0186] text-[14px] md:text-[15px] lg:text-[20px] font-semibold">Experience
                        </h1>
                        <p class="text-[12px] font-light mt-2 md:text-[15px] lg:text-[20px]">Over 6 years of experience
                            in working with children with special needs</p>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 items-start pt-10">
                <div class="w-[230px] h-[230px] rounded-full overflow-hidden">
                    <img src="{{ asset('assets/person.png') }}" class="w-full h-full object-cover object-top"
                        alt="">

                </div>
                <div class="col-span-1 lg:col-span-2 pt-4 md:pt-0">
                    <div>
                        <h1 class="text-[#1C0186] font-bold text-[20px] md:text-[15px] lg:text-[20px]">Mr. Suraj
                            Venugopal</h1>
                        <h1 class="text-[#5796FF] text-[14px] md:text-[15px] lg:text-[20px] font-regular">
                            Audiologist & Speech Language Pathologist</h1>
                    </div>
                    <div class="mt-5">
                        <h1 class="text-[#1C0186] text-[14px] font-semibold md:text-[15px] lg:text-[20px]">Education
                        </h1>
                        <p class="text-[12px] font-light mt-2 md:text-[15px] lg:text-[20px]">Bachelors in Audiology
                            & Speech Language Pathology, (Father Muller Medical College, India)</p>
                        <p class="text-[12px] font-light md:text-[15px] lg:text-[20px]">Post Graduate Diploma in
                            Special Needs (Alison Education, Ireland)</p>
                    </div>
                    <div class="mt-5">
                        <h1 class="text-[#1C0186] text-[14px] font-semibold md:text-[15px] lg:text-[20px]">Other
                            certificates</h1>
                        <p class="text-[12px] font-light mt-2 md:text-[15px] lg:text-[20px]">Autism Awareness &
                            Support (Alison Education, Ireland)</p>
                        <p class="text-[12px] font-light md:text-[15px] lg:text-[20px]">Children with Autism in
                            School (Alison Education, Ireland)</p>
                        <p class="text-[12px] font-light md:text-[15px] lg:text-[20px]">Autism Spectrum Disorders:
                            Early Intervention for Young Children with ASD The COM DEALL model </p>
                        <p class="text-[12px] font-light md:text-[15px] lg:text-[20px]">(Communication DEALL, India)
                        </p>
                        <p class="text-[12px] font-light md:text-[15px] lg:text-[20px]">Hearing health management,
                            auditory electrophysiology, auditory psychoacoustics, vestibular and </p>
                        <p class="text-[12px] font-light md:text-[15px] lg:text-[20px]">balance disorders (BAA
                            Sivantos Inc, India)</p>
                        <p class="text-[12px] font-light md:text-[15px] lg:text-[20px]">AAC: Communication made
                            better (Father Muller Medical College, India)</p>
                        <p class="text-[12px] font-light md:text-[15px] lg:text-[20px]">Comprehensive hearing
                            assessment and rehabilitation, child language assessment, laryngectomy & voice </p>
                        <p class="text-[12px] font-light md:text-[15px] lg:text-[20px]">rehabilitation (FMCI, India)
                        </p>
                        <p class="text-[12px] font-light md:text-[15px] lg:text-[20px]">Landmark Forum Methodology
                            in Producing Breakthroughs (Landmark Forum, India)</p>
                    </div>
                    <div class="mt-5">
                        <h1 class="text-[#1C0186] text-[14px] md:text-[15px] lg:text-[20px] font-semibold">
                            Experience</h1>
                        <p class="text-[12px] font-light mt-2 md:text-[15px] lg:text-[20px]">Over 9 years of
                            experience working as an audiologist and speech language pathologist in India</p>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 items-start pt-10">
                <div class="w-[230px] h-[230px] rounded-full overflow-hidden">
                    <img src="{{ asset('assets/lyyang1.jpg') }}" class="w-full h-full object-cover object-right"
                        alt="">

                </div>
                <div class="col-span-1 lg:col-span-2 pt-4 md:pt-0">
                    <div>
                        <h1 class="text-[#1C0186] font-bold text-[20px] md:text-[15px] lg:text-[20px]">Ms. Ly
                            Yang</h1>
                        <h1 class="text-[#5796FF] text-[14px] md:text-[15px] lg:text-[20px] font-regular">
                            Program Coordinator
                        </h1>
                    </div>
                    <div class="mt-5">
                        <h1 class="text-[#1C0186] text-[14px] font-semibold md:text-[15px] lg:text-[20px]">
                            Education</h1>
                        <p class="text-[12px] font-light mt-2 md:text-[15px] lg:text-[20px]">Bachelor’s in
                            Psychology (Royal University of Phnom Penh)</p>
                        <p class="text-[12px] font-light md:text-[15px] lg:text-[20px]">Graduate in Pedology
                            and Teaching Methodology (PTEC, Phnom Penh Teacher Education College)</p>
                        <p class="text-[12px] font-light md:text-[15px] lg:text-[20px]">Early Intervention
                            program (Central Special Education Center, Thailand)</p>
                    </div>
                    <div class="mt-5">
                        <h1 class="text-[#1C0186] text-[14px] font-semibold md:text-[15px] lg:text-[20px]">
                            Other certificates</h1>
                        <p class="text-[12px] font-light mt-2 md:text-[15px] lg:text-[20px]">Early Intervention
                            program (Central Special Education Center, Thailand)</p>
                        <p class="text-[12px] font-light md:text-[15px] lg:text-[20px]">ABAT, Applied Behavior
                            Analysis Technician Training (SEED Services, Malaysia)</p>
                        <p class="text-[12px] font-light md:text-[15px] lg:text-[20px]">Fundamentals of early
                            intervention for children at risk for learning disabilities (India)</p>
                    </div>
                    <div class="mt-5">
                        <h1 class="text-[#1C0186] text-[14px] md:text-[15px] lg:text-[20px] font-semibold">
                            Experience</h1>
                        <p class="text-[12px] font-light mt-2 md:text-[15px] lg:text-[20px]">Over 6 years of
                            experience working with children with special needs</p>
                    </div>

                </div>
            </div>
        </div>
    </section>

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
@endsection
