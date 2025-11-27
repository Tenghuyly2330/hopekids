@extends('layouts.master')

@section('content')
    <section class="">

        <div class="w-full h-[60vh] md:h-screen">
            <img src="{{ asset('assets/about_hero.png') }}"
                class="absolute z-1 w-full h-[60vh] md:h-screen inset-0 object-cover" alt="">
            <div class="absolute h-[60vh] object-cover md:h-screen inset-0 z-10 bg-black/50"></div>

            <div class="relative z-10 px-4 max-w-[700px] mx-auto pt-[10vh] md:pt-[30vh]">
                <h1 class="text-[25px] md:text-[50px] text-center text-gradient font-[700]">About Us</h1>
                <p class="text-center text-white text-[14px] lg:text-[16px]">
                    Hope Kids Special Education School stands committed to its vision of creating a world where every
                    child—regardless of challenges, background, or ability—has the opportunity to reach their fullest
                    potential. Through compassion, expertise, and innovation, we continue to build a future filled
                    with hope, dignity, and possibilities for every child we serve </p>

            </div>
        </div>
        <div id="mission" class="relative md:-top-[100px] max-w-7xl mx-auto z-40 px-4 mt-5 md:mt-0">
            <div class="grid grid-cols-1 grid-rows-1 lg:grid-cols-2 lg:grid-rows-3 gap-4 w-full">
                <div class="bg-[#5796FF] rounded-md">
                    <div class="flex justify-center flex-col lg:flex-row items-center gap-10 p-10">
                        <img src="{{ asset('assets/mission.png') }}" alt="" class="w-24 h-24">
                        <div class="flex flex-col">
                            <h1 class="text-[#F6F6F6] text-[15px] md:text-[25px] font-semibold">Mission</h1>
                            <p class="text-[#F6F6F6] font-regular text-[13px] md:text-[15px]">We are highly committed in
                                offering excellent, high quality,
                                sustainable special education and holistic services to
                                children with special needs and their families that improves
                                their quality of life..</p>
                        </div>
                    </div>
                </div>

                <div id="core_values" class="bg-[#C3D500] order-last lg:order-none row-span-1 lg:row-span-3 rounded-md">
                    <div class="flex justify-center lg:justify-start flex-col items-center lg:items-start gap-2 p-10">

                        <img src="{{ asset('assets/value.png') }}" alt="" class="w-24 h-24 mt-4">
                        <h2 class="text-[#1C0186] text-[15px] md:text-[25px] font-semibold pt-2">Core
                            Values</h2>

                        <!-- 1 -->
                        <div>
                            <h1 class="text-[#1C0186] text-[15px] md:text-[20px] font-regular">1. Accessibility to all </h1>
                            <p class="md:text-[15px] text-[10px] text-[#1C0186] font-regular">
                                We are committed to providing special education services that are affordable, inclusive, and
                                available to families from diverse socio-economic backgrounds. Through partnerships,
                                community outreach, and need-based support, we ensure that no child is left behind due to
                                financial limitations.
                            </p>
                        </div>

                        <!-- 2 -->
                        <div>
                            <h1 class="text-[#1C0186] text-[15px] md:text-[20px] font-regular">2. Highest standards of care
                            </h1>
                            <p class="md:text-[15px] text-[10px]  text-[#1C0186] font-regular">
                                Hope Kids strives to maintain the highest quality of intervention and educational support.
                                Our team consists of trained and dedicated professionals including special educators,
                                occupational therapy, physiotherapy, sensory-integration therapy, psychology, speech and
                                language therapy & other allied specialists who work collaboratively to create
                                individualised learning pathways.
                            </p>
                        </div>

                        <!-- 3 -->
                        <div>
                            <h1 class="text-[#1C0186] text-[15px] md:text-[20px] font-regular">3. Child centered and
                                evidence based support</h1>
                            <p class="md:text-[15px] text-[10px] text-[#1C0186] font-regular">
                                Our programs are built on globally recognised frameworks and evidence-based practices. We
                                emphasise personalised planning, continuous assessment, and parent collaboration to support
                                each child’s developmental, academic, social, and emotional growth.


                            </p>
                        </div>

                        <!-- 4 -->
                        <div>
                            <h1 class="text-[#1C0186] text-[15px] md:text-[20px] font-regular">4. Building inclusion &
                                awareness </h1>
                            <p class="md:text-[15px] text-[10px]  text-[#1C0186] font-regular">
                                We aim to be a driving force in fostering acceptance and understanding of children with
                                special needs. We work with parents, educators, and the community to promote inclusive
                                mindsets and advocate for equal opportunities.
                            </p>
                        </div>
                    </div>

                </div>

                <div id="vision" class="bg-[#FE5900] rounded-md">
                    <div class="flex justify-center flex-col lg:flex-row  items-center gap-10 p-10">
                        <img src="{{ asset('assets/vision.png') }}" alt="" class="w-24 h-24">
                        <div class="flex flex-col">
                            <h1 class="text-[#F6F6F6] text-[15px] md:text-[25px] font-semibold">Vision</h1>
                            <p class="text-[#F6F6F6] font-regular text-[10px] md:text-[13px]">To be the most trusted,
                                preferred and leading educational
                                institution in the whole of Cambodia that provides excellent
                                evidence based special education and holistic services for
                                children with special needs, their families and their
                                communities.</p>
                        </div>
                    </div>

                </div>

                <!-- Row 3, col 1 -->
                <div id="our_goals" class="bg-[#E3264E] rounded-md">
                    <div class="flex justify-center flex-col lg:flex-row items-center gap-10 p-10">
                        <img src="{{ asset('assets/goal.png') }}" alt="" class="w-24 h-24" />
                        <div class="flex flex-col">
                            <h1 class="text-[#F6F6F6] text-[15px] md:text-[25px] font-semibold">Our Goals & Roadmap</h1>
                            <p class="text-[#F6F6F6] font-regular text-[8px] md:text-[13px]">At Hope Kids Special
                                Education School, our mission is simple yet powerful:
                                to make high-quality special education accessible to every child who needs it,
                                regardless of their socio-economic background.
                                We believe every child deserves the chance to learn, grow, communicate, explore, and
                                thrive in a supportive and nurturing environment.

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>

    <section class="" id="school_license">
        <h1 class="text-[16px] md:text-[30px] text-gradient font-[700] text-center">Our Institutes' Licenses</h1>
        <div class="mt-5">
            <div class='w-full flex gap-4 max-w-7xl mx-auto px-4 my-20 overflow-x-auto'>
                {{-- @foreach ($licenses as $index => $license)
                    <div class="flex-shrink-0 my-5" data-aos='fade-up' data-aos-duration='1200'>
                        <img src="{{ $license->image }}" alt="Certificate {{ $index + 1 }}"
                            class="w-full h-[20rem] lg:h-[25rem] xl:h-[26rem] object-contain object-center" />
                    </div>
                @endforeach --}}
                <div class="flex-shrink-0 my-5">
                    <img src="assets/licen1.jpg" alt=""
                        class="w-full h-[15rem] lg:h-[25rem] xl:h-[26rem] object-contain object-center" />
                    <h1 class="text-center text-[12px] md:text-[14px] mt-2">Approval and Branches Licensing</h1>
                </div>
                <div class="flex-shrink-0 my-5">
                    <img src="assets/licen2.jpg" alt=""
                        class="w-full h-[15rem] lg:h-[25rem] xl:h-[26rem] object-contain object-center" />
                    <h1 class="text-center text-[12px] md:text-[14px] mt-2">Approval and Branches Licensing</h1>

                </div>

                <div class="flex-shrink-0 my-5">
                    <img src="assets/licen3.jpg" alt=""
                        class="w-full h-[15rem] lg:h-[25rem] xl:h-[26rem] object-contain object-center" />
                    <h1 class="text-center text-[12px] md:text-[14px] mt-2">Approval and Branches Licensing</h1>

                </div>
                <div class="flex-shrink-0 my-5">
                    <img src="assets/licen4.jpg" alt=""
                        class="w-full h-[15rem] lg:h-[25rem] xl:h-[26rem] object-contain object-center" />
                    <h1 class="text-center text-[12px] md:text-[14px] mt-2">Approval and Branches Licensing</h1>

                </div>
                <div class="flex-shrink-0 my-5">
                    <img src="assets/licen5.jpg" alt=""
                        class="w-full h-[15rem] lg:h-[25rem] xl:h-[26rem] object-contain object-center" />
                    <h1 class="text-center text-[12px] md:text-[14px] mt-2">Approval and Branches Licensing</h1>

                </div>
                <div class="flex-shrink-0 my-5">
                    <img src="assets/licen6.jpg" alt=""
                        class="w-full h-[15rem] lg:h-[25rem] xl:h-[26rem] object-contain object-center" />
                    <h1 class="text-center text-[12px] md:text-[14px] mt-2">Approval and Branches Licensing</h1>

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
