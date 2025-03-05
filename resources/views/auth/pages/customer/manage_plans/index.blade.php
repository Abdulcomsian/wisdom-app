@extends('layouts.user.app')
@section('title', 'Dashboard')
@section('header', 'Dashboard')
@section('content')
    <div id="sign-up" class="py-[40px] w-full">
        <div class="container mx-auto p-4 text-center">
            <div class="flex flex-col md:flex-row justify-center gap-[20px] my-8 2xl:gap-[30px]">
                <!-- check 1 -->
                <div
                    class="sf-pro-regular bg-white rounded-lg p-6 shadow-md mb-4 md:mb-0 md:w-1/4 md:text-left chk-para 2xl:p-12 2xl:w-[410px] 2xl:h-[281px]">
                    <h2 class="sf-pro-regular text-4xl font-bold text-[#3A3A3A] xl:leading-[71px] 2xl:text-[60px]">
                        $1.99
                    </h2>
                    <p
                        class="sf-pro-regular text-sm text-[#3A3A3A] xl:leading-[23px] 2xl:text-[20px] 2xl:mt-6 font-semibold">
                        One text a week<br />Can select up to 2 categories.
                    </p>
                    <button class="bg-[#FFC400] text-[#3A3A3A] font-semibold py-2 px-4 rounded mt-4 w-full 2xl:mt-6">
                        Select
                    </button>
                </div>

                <!-- check 2 -->

                <div
                    class="sf-pro-regular bg-white rounded-lg p-6 shadow-md mb-4 md:mb-0 md:w-1/4 md:text-left chk-para 2xl:p-12 2xl:w-[410px] 2xl:h-[281px]">
                    <h2 class="sf-pro-regular text-4xl font-bold text-[#3A3A3A] xl:leading-[71px] 2xl:text-[60px]">
                        $2.99
                    </h2>
                    <p
                        class="sf-pro-regular text-sm text-[#3A3A3A] xl:leading-[23px] 2xl:text-[20px] 2xl:mt-6 font-semibold">
                        Three texts a week<br />Can select up to 8 Categories.
                    </p>
                    <button class="bg-[#FFC400] text-[#3A3A3A] font-semibold py-2 px-4 rounded mt-4 w-full 2xl:mt-6">
                        Select
                    </button>
                </div>
                <!-- check 3 -->

                <div
                    class="sf-pro-regular bg-white rounded-lg p-6 shadow-md mb-4 md:mb-0 md:w-1/4 md:text-left chk-para 2xl:p-12 2xl:w-[410px] 2xl:h-[281px]">
                    <h2 class="text-4xl font-bold text-[#3A3A3A] xl:leading-[71px] 2xl:text-[60px]">
                        $4.99
                    </h2>
                    <p class="text-sm text-[#3A3A3A] xl:leading-[23px] 2xl:text-[20px] 2xl:mt-6 font-semibold">
                        Text Daily<br />Select any categories
                    </p>
                    <button class="bg-[#FFC400] text-[#3A3A3A] font-semibold py-2 px-4 rounded mt-4 w-full 2xl:mt-6">
                        Select
                    </button>
                </div>
            </div>
        </div>
        <form class="max-w-sm w-[85%] md:w-full mx-6 md:mx-auto mt-[21px] sf-pro-regular font-normal">
            <div>
                <button class="bg-gray-800 text-white py-2 px-4 font-bold rounded-lg w-full mt-3 2xl:text-xl 2xl:py-3">
                    <a href="payment.html"> Payment Method</a>
                </button>
            </div>
        </form>
    </div>
@endsection
