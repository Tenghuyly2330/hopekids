@extends('layouts.master')

@section('content')
    <section class="w-full h-[60vh] md:h-screen">
        <img src="{{ asset('assets/career.png') }}" class="absolute object-cover z-1 w-full h-[60vh] md:h-screen inset-0 "
            alt="">
        <div>

            <div class="absolute h-[60vh] object-cover md:h-screen inset-0 z-10 bg-black/50"></div>

            <div class="relative z-10 pt-[15vh] md:pt-[30vh]">

                <h1 class="text-[25px] md:text-[50px] text-center text-gradient font-[700]">
                    Career</h1>

                <p class="text-left max-w-[700px] mx-auto md:text-[18px] text-white text-[15px] lg:text-[16px]">
                    Hope Kids provides affordable, inclusive, and professional education for
                    children with autism and special needs in Phnom Penh and across
                    Cambodia.
                </p>
            </div>
        </div>
    </section>

    <section class="relative z-20 p-5 md:pt-1 lg:-mt-40">
        <div
            class="relative max-w-7xl mx-auto rounded-xl bg-gradient-to-r from-[#5897FF] to-[#1C0186]
            grid grid-cols-1 md:grid-cols-2 items-center gap-5 p-4">

            <!-- Left Box -->
            <div class="w-full h-full">
                <img src="{{ asset('assets/career1.png') }}" class="w-full lg:w-full md:w-full rounded-xl object-cover"
                    alt="">
            </div>

            <!-- Right Box -->
            <div class="w-full text-white pb-2">

                <p class="text-[22px] text-center md:text-[30px] lg:text-[45px] lg:pt-5 font-regular leading-tight">Start
                    Your Journey</p>
                <p class="text-[22px] text-center md:text-[30px] lg:text-[45px] font-regular">
                    with Us!</p>

                <p class="text-[12px] text-center md:text-[14px] mt-3 md:mt-5 px-10">
                    We work with diverse international and local non-governmental organizations,
                    microfinance institutions, corporate partners, and national authorities to build
                    a better life through safe and affordable homes.
                </p>
                
                @if (session('success'))
                    <div x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 3000)"
                        class="fixed top-5 right-5 bg-green-600 text-white px-5 py-3 rounded-lg shadow-lg z-50">
                        {{ session('success') }}
                    </div>
                @endif

                <form class="mt-8 flex flex-col md:ms-3 gap-4" action="{{ route('contact.submit') }}" method="POST">
                    @csrf

                    <div>
                        <label class="text-[12px]">First Name</label>
                        <input type="text" name="fname" class="p-3 bg-white text-black rounded-full w-full mt-1">
                    </div>

                    <div>
                        <label class="text-[12px]">Last Name</label>
                        <input type="text" name="lname" class="p-3 bg-white text-black rounded-full w-full mt-1">
                    </div>

                    <div>
                        <label class="text-[12px]">Email</label>
                        <input type="email" name="email" class="p-3 bg-white text-black rounded-full w-full mt-1">
                    </div>

                    <div>
                        <label class="text-[12px]">Position</label>
                        <select class="p-3 bg-white text-black rounded-full w-full mt-1" name="position">
                            <option value="" disabled selected>Select a position</option>
                            <option value="teacher">Teacher</option>
                            <option value="therapist">Therapist</option>
                            <option value="administrator">Administrator</option>
                            <option value="other">Other</option>
                        </select>
                    </div>

                    <div>
                        <label class="text-[12px]">Message</label>
                        <input type="text" name="message" class="p-3 bg-white text-black rounded-full w-full mt-1">
                    </div>

                    <button type="submit" class="mt-5 bg-[#C4D600] text-black py-4 rounded-full w-full text-[16px]">
                        SUBMIT
                    </button>

                </form>

            </div>

        </div>

    </section>
@endsection
