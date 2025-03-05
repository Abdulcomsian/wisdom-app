@extends('layouts.app')
@section('title', 'Sign In')
@section('header')
    <header class="relative headerBg h-fit flex flex-col">
    @endsection
    @section('content')
        <!-- =======HERo======== -->
        <main
            class="relative w-full max-w-md mx-auto lg:mt-2 mb-8 p-8 pb-4 p bg-[#FFC400] rounded-lg shadow-[0_0_10px_rgba(0,0,0,0.4)] inter-regular">
            <h2
                class="sf-pro-regular text-3xl font-semibold italic text-center text-[#3A3A3A] mb-4 xl:text-[40px] 2xl:text-[50px]">
                Sign UP
            </h2>
            <p class="sf-pro-regular text-center text-[18px] font-semibold italic text-[#3A3A3A] mt-5 2xl:text-[20px]">
                Free 7-days trial
            </p>
            <p
                class="sf-pro-regular tracking-wide text-center text-[#3A3A3A] text-[12px] italic lg:text-[13px] 2xl:text-[16px]">
                (Cancel anytime by replying "unsubscribe" to the message)
            </p>
            <p
                class="sf-pro-regular tracking-wide text-center lg:text-left text-[#3A3A3A] text-[16px] font-semibold mb-6 italic 2xl:text-[20px]">
                Provide your payment info to begin the free trial.
            </p>
            <form id="payment-form">
                @csrf
                <input type="hidden" name="plan_id" value="{{ $plan->id }}">

                @foreach ($categories as $category)
                    <input type="hidden" name="categories[]" value="{{ $category }}">
                @endforeach

                <div class="mb-4">
                    <label class="block text-[#3A3A3A] text-[14px] pb-1 leading-[22px] 2xl:font-medium 2xl:text-[18px]">
                        Card Number
                    </label>
                    <div id="card-number" class="w-full px-3 py-2 border border-[#3A3A3A] rounded"></div>
                </div>

                <div class="flex space-x-4 mb-4">
                    <div class="w-1/2">
                        <label class="block text-[#3A3A3A] text-[14px] pb-1 leading-[22px] 2xl:font-medium 2xl:text-[18px]">
                            Expiration Date
                        </label>
                        <div id="card-expiry" class="w-full px-3 py-2 border border-[#3A3A3A] rounded"></div>
                    </div>
                    <div class="w-1/2">
                        <label class="block text-[#3A3A3A] text-[14px] pb-1 leading-[22px] 2xl:font-medium 2xl:text-[18px]">
                            CVV
                        </label>
                        <div id="card-cvc" class="w-full px-3 py-2 border border-[#3A3A3A] rounded"></div>
                    </div>
                </div>

                <div class="mb-4">
                    <label class="block text-[#3A3A3A] text-[14px] pb-1 leading-[22px] 2xl:font-medium 2xl:text-[18px]">
                        Country
                    </label>
                    <input id="billing-country" class="w-full px-3 py-2 border border-[#3A3A3A] rounded" placeholder="US"
                        type="text" />
                </div>

                <div class="mb-4">
                    <label class="block text-[#3A3A3A] text-[14px] pb-1 leading-[22px] 2xl:font-medium 2xl:text-[18px]">
                        ZIP Code
                    </label>
                    <input id="billing-zip" class="w-full px-3 py-2 border border-[#3A3A3A] rounded" placeholder="12345"
                        type="number" />
                </div>

                <button id="submit-button" class="w-full bg-[#3A3A3A] text-white py-2 rounded font-bold">
                    Begin Free Trial
                </button>

                <div id="card-errors" role="alert" class="text-red-500 mt-2"></div>
            </form>
        </main>
        <div class="background-icons hidden md:block">
            <!-- 1 -->
            <div class="icon1">
                <svg width="116" height="116" viewBox="0 0 176 176" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g filter="url(#filter0_d_8007_1887)">
                        <circle cx="87.6805" cy="58.4454" r="27.5" transform="rotate(-15 87.6805 58.4454)"
                            fill="white" />
                    </g>
                    <g clip-path="url(#clip0_8007_1887)">
                        <path
                            d="M92.9195 54.9172H78.8125C77.2592 54.9172 76 56.1764 76 57.7297V63.4484C76 65.0017 77.2592 66.2609 78.8125 66.2609H79.5602V70.6761C79.5602 70.8953 79.8342 70.9946 79.9746 70.8261L83.7789 66.2609H90.107C91.6603 66.2609 92.9195 65.0017 92.9195 63.4484V54.9172Z"
                            fill="#FFDD55" />
                        <path
                            d="M92.9195 54.9172V63.4484C92.9195 65.0019 91.6605 66.2609 90.107 66.2609H84.46V54.9172H92.9195Z"
                            fill="#FFB555" />
                        <path
                            d="M89.6383 61.1984H79.3258C78.9375 61.1984 78.6227 61.5132 78.6227 61.9016C78.6227 62.2899 78.9375 62.6047 79.3258 62.6047H89.6383C90.0266 62.6047 90.3414 62.2899 90.3414 61.9016C90.3414 61.5132 90.0266 61.1984 89.6383 61.1984Z"
                            fill="#FFB555" />
                        <path
                            d="M90.3414 61.9016C90.3414 62.2897 90.0264 62.6047 89.6383 62.6047H84.46V61.1984H89.6383C90.0264 61.1984 90.3414 61.5134 90.3414 61.9016Z"
                            fill="#FF9000" />
                        <path
                            d="M79.3258 59.7922H87.2969C87.6852 59.7922 88 59.4774 88 59.0891C88 58.7007 87.6852 58.3859 87.2969 58.3859H79.3258C78.9375 58.3859 78.6227 58.7007 78.6227 59.0891C78.6227 59.4774 78.9375 59.7922 79.3258 59.7922Z"
                            fill="#FFB555" />
                        <path
                            d="M88 59.0891C88 59.4772 87.685 59.7922 87.2969 59.7922H84.46V58.3859H87.2969C87.685 58.3859 88 58.7009 88 59.0891Z"
                            fill="#FF9000" />
                        <path
                            d="M92.2188 59.7453C94.937 59.7453 97.1406 57.5417 97.1406 54.8234C97.1406 52.1051 94.937 49.9016 92.2188 49.9016C89.5005 49.9016 87.2969 52.1051 87.2969 54.8234C87.2969 57.5417 89.5005 59.7453 92.2188 59.7453Z"
                            fill="#F25A3C" />
                        <path
                            d="M97.1406 54.8234C97.1406 57.5375 94.9328 59.7453 92.2188 59.7453V49.9016C94.9328 49.9016 97.1406 52.1094 97.1406 54.8234Z"
                            fill="#E43539" />
                        <path
                            d="M92.0198 52.7525L91.3167 52.9869C90.9483 53.1097 90.7492 53.5079 90.872 53.8763C91.0358 54.3675 91.5343 54.3557 91.539 54.3572V56.2273C91.539 56.6156 91.8538 56.9305 92.2421 56.9305C92.6305 56.9305 92.9453 56.6156 92.9453 56.2273V53.4195C92.9453 52.9402 92.4751 52.6009 92.0198 52.7525Z"
                            fill="#E9F3FB" />
                        <path
                            d="M92.9453 53.4195V56.2273C92.9453 56.6155 92.6303 56.9305 92.2422 56.9305C92.2342 56.9305 92.2262 56.9305 92.2188 56.93V52.7164C92.6022 52.7028 92.9453 53.0098 92.9453 53.4195Z"
                            fill="#D6E9F8" />
                        <path
                            d="M92.2211 47.0891C91.8328 47.0891 91.518 47.4039 91.518 47.7922V48.5445C91.518 48.9328 91.8328 49.2476 92.2211 49.2476C92.6094 49.2476 92.9242 48.9328 92.9242 48.5445V47.7922C92.9242 47.4039 92.6094 47.0891 92.2211 47.0891Z"
                            fill="#F25A3C" />
                        <path
                            d="M92.9242 47.7922V48.5445C92.9242 48.9326 92.6092 49.2476 92.2211 49.2476H92.2188V47.0891H92.2211C92.6092 47.0891 92.9242 47.4041 92.9242 47.7922Z"
                            fill="#E43539" />
                        <path
                            d="M87.6788 49.3786C87.4042 49.104 86.959 49.104 86.6844 49.3786C86.4098 49.6531 86.4098 50.0983 86.6844 50.3729L87.2164 50.9049C87.4909 51.1795 87.9361 51.1795 88.2107 50.9049C88.4853 50.6303 88.4853 50.1851 88.2107 49.9105L87.6788 49.3786Z"
                            fill="#F25A3C" />
                        <path
                            d="M97.2164 58.9294C96.9419 58.6548 96.4967 58.6548 96.2221 58.9294C95.9475 59.204 95.9475 59.6492 96.2221 59.9238L96.754 60.4558C97.0286 60.7304 97.4738 60.7304 97.7484 60.4558C98.023 60.1812 98.023 59.736 97.7484 59.4614L97.2164 58.9294ZM99.2969 54.2187H98.5445C98.1562 54.2187 97.8414 54.5335 97.8414 54.9219C97.8414 55.3102 98.1562 55.625 98.5445 55.625H99.2969C99.6852 55.625 100 55.3102 100 54.9219C100 54.5335 99.6852 54.2187 99.2969 54.2187ZM97.223 50.9115L97.755 50.3795C98.0296 50.1049 98.0296 49.6598 97.755 49.3852C97.4805 49.1106 97.0352 49.1106 96.7607 49.3852L96.2287 49.9172C95.9541 50.1918 95.9541 50.6369 96.2287 50.9115C96.5032 51.1861 96.9485 51.1862 97.223 50.9115Z"
                            fill="#E43539" />
                    </g>
                    <defs>
                        <filter id="filter0_d_8007_1887" x="0.17366" y="0.938599" width="175.014" height="175.014"
                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" type="matrix"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                            <feOffset dy="30" />
                            <feGaussianBlur stdDeviation="30" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix type="matrix"
                                values="0 0 0 0 0.344915 0 0 0 0 0.309028 0 0 0 0 0.432639 0 0 0 0.15 0" />
                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_8007_1887" />
                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_8007_1887" result="shape" />
                        </filter>
                        <clipPath id="clip0_8007_1887">
                            <rect width="24" height="24" fill="white" transform="translate(76 47)" />
                        </clipPath>
                    </defs>
                </svg>
            </div>

            <!-- 2 -->
            <div class="icon2">
                <svg width="128" height="128" class="icon2" viewBox="0 0 198 198" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <g filter="url(#filter0_d_8007_1868)">
                        <circle cx="99" cy="69" r="39" fill="white" />
                    </g>
                    <g clip-path="url(#clip0_8007_1868)">
                        <path
                            d="M100.095 62.7457C94.7151 62.7457 90.3755 66.4294 88.735 71.1146C88.3738 72.1463 88.2602 73.2758 88.2602 74.432C88.2602 80.9684 93.559 86.2672 100.095 86.2672H106.165C106.853 86.2672 107.527 86.2051 108.183 86.0923L111.757 87.8677C112.645 88.3091 113.668 87.585 113.547 86.6003L113.219 83.9351C116.12 81.7781 118 78.3248 118 74.432C118 68.0055 112.878 62.7753 106.493 62.6013L100.095 62.7457Z"
                            fill="url(#paint0_linear_8007_1868)" />
                        <path
                            d="M113.219 83.9347L113.547 86.5999C113.668 87.585 112.645 88.3092 111.757 87.8673L108.183 86.0925C107.526 86.205 106.853 86.2669 106.165 86.2669H103.885L88.7326 71.1138L88.7311 71.1175C90.1333 66.4294 94.7097 62.7456 100.095 62.7456L106.493 62.6011C109.631 62.6866 112.464 63.9934 114.534 66.0628C116.675 68.205 118 71.1637 118 74.4317C118 78.3249 116.12 81.7784 113.219 83.9347Z"
                            fill="url(#paint1_linear_8007_1868)" />
                        <path
                            d="M117.192 78.7357H89.0674C90.7891 83.144 95.0774 86.2672 100.095 86.2672H106.165C106.853 86.2672 107.527 86.2051 108.183 86.0923L111.757 87.8677C112.645 88.309 113.668 87.585 113.547 86.6002L113.219 83.935C114.988 82.6195 116.377 80.8212 117.192 78.7357Z"
                            fill="url(#paint2_linear_8007_1868)" />
                        <path
                            d="M90.617 50H96.0616C101.925 50 106.679 54.7534 106.679 60.617C106.679 61.2952 106.615 61.9585 106.493 62.6013C105.564 67.5165 101.247 71.1594 96.0616 71.1594H90.6169C89.9994 71.1594 89.3954 71.1782 88.8068 71.077L85.6006 72.6696C84.8035 73.0656 83.8861 72.416 83.9947 71.5327L84.2886 69.1418C81.6864 67.2069 80 64.1091 80 60.617C80 54.7534 84.7534 50 90.617 50Z"
                            fill="url(#paint3_linear_8007_1868)" />
                        <path
                            d="M80.6058 64.1569C81.3158 66.1642 82.6116 67.8948 84.2888 69.1419L83.9948 71.5327C83.8862 72.416 84.8037 73.0656 85.6007 72.6697L88.8069 71.077C89.3955 71.1782 89.9996 71.1594 90.617 71.1594H96.0616C100.684 71.1594 104.541 68.2798 105.999 64.1569H80.6058Z"
                            fill="url(#paint4_linear_8007_1868)" />
                        <path
                            d="M99.1198 61.612C100.266 61.612 101.195 60.6831 101.195 59.5373C101.195 58.3914 100.266 57.4625 99.1198 57.4625C97.974 57.4625 97.0451 58.3914 97.0451 59.5373C97.0451 60.6831 97.974 61.612 99.1198 61.612Z"
                            fill="url(#paint5_linear_8007_1868)" />
                        <path
                            d="M93.3393 61.612C94.4851 61.612 95.414 60.6831 95.414 59.5373C95.414 58.3914 94.4851 57.4625 93.3393 57.4625C92.1934 57.4625 91.2645 58.3914 91.2645 59.5373C91.2645 60.6831 92.1934 61.612 93.3393 61.612Z"
                            fill="url(#paint6_linear_8007_1868)" />
                        <path
                            d="M87.5586 61.612C88.7045 61.612 89.6334 60.6831 89.6334 59.5373C89.6334 58.3914 88.7045 57.4625 87.5586 57.4625C86.4128 57.4625 85.4839 58.3914 85.4839 59.5373C85.4839 60.6831 86.4128 61.612 87.5586 61.612Z"
                            fill="url(#paint7_linear_8007_1868)" />
                        <path
                            d="M108.911 77.1384C110.057 77.1384 110.985 76.2095 110.985 75.0637C110.985 73.9178 110.057 72.989 108.911 72.989C107.765 72.989 106.836 73.9178 106.836 75.0637C106.836 76.2095 107.765 77.1384 108.911 77.1384Z"
                            fill="url(#paint8_linear_8007_1868)" />
                        <path
                            d="M103.13 77.1384C104.276 77.1384 105.205 76.2095 105.205 75.0637C105.205 73.9178 104.276 72.989 103.13 72.989C101.984 72.989 101.055 73.9178 101.055 75.0637C101.055 76.2095 101.984 77.1384 103.13 77.1384Z"
                            fill="url(#paint9_linear_8007_1868)" />
                        <path
                            d="M97.3495 77.1384C98.4954 77.1384 99.4243 76.2095 99.4243 75.0637C99.4243 73.9178 98.4954 72.989 97.3495 72.989C96.2037 72.989 95.2748 73.9178 95.2748 75.0637C95.2748 76.2095 96.2037 77.1384 97.3495 77.1384Z"
                            fill="url(#paint10_linear_8007_1868)" />
                        <path
                            d="M106.493 62.6015C106.384 62.5985 106.274 62.5968 106.165 62.5968H100.095C94.7109 62.5968 90.1669 66.1929 88.7323 71.1142L88.8069 71.0771C89.3955 71.1783 89.9996 71.234 90.617 71.234H96.0616C101.247 71.2339 105.563 67.5165 106.493 62.6015Z"
                            fill="url(#paint11_linear_8007_1868)" />
                    </g>
                    <defs>
                        <filter id="filter0_d_8007_1868" x="0" y="0" width="198" height="198"
                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" type="matrix"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                            <feOffset dy="30" />
                            <feGaussianBlur stdDeviation="30" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix type="matrix"
                                values="0 0 0 0 0.344915 0 0 0 0 0.309028 0 0 0 0 0.432639 0 0 0 0.15 0" />
                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_8007_1868" />
                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_8007_1868"
                                result="shape" />
                        </filter>
                        <linearGradient id="paint0_linear_8007_1868" x1="103.13" y1="66.545" x2="103.13"
                            y2="82.2371" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#DC4955" />
                            <stop offset="1" stop-color="#C4237C" />
                        </linearGradient>
                        <linearGradient id="paint1_linear_8007_1868" x1="110.972" y1="77.9296" x2="96.003"
                            y2="62.9607" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#8A1958" stop-opacity="0" />
                            <stop offset="1" stop-color="#8A1958" />
                        </linearGradient>
                        <linearGradient id="paint2_linear_8007_1868" x1="103.13" y1="80.2794" x2="103.13"
                            y2="86.4572" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#8A1958" stop-opacity="0" />
                            <stop offset="1" stop-color="#8A1958" />
                        </linearGradient>
                        <linearGradient id="paint3_linear_8007_1868" x1="86.7508" y1="51.1165" x2="102.594"
                            y2="76.3315" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#76CCF8" />
                            <stop offset="0.833" stop-color="#518EF8" />
                            <stop offset="1" stop-color="#4981F8" />
                        </linearGradient>
                        <linearGradient id="paint4_linear_8007_1868" x1="93.3022" y1="65.1007" x2="93.3022"
                            y2="71.2123" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#4071F7" stop-opacity="0" />
                            <stop offset="1" stop-color="#30569F" />
                        </linearGradient>
                        <linearGradient id="paint5_linear_8007_1868" x1="100.267" y1="58.3905" x2="97.3213"
                            y2="61.3358" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#EEF4FF" />
                            <stop offset="1" stop-color="#CFE7FD" />
                        </linearGradient>
                        <linearGradient id="paint6_linear_8007_1868" x1="94.486" y1="58.3905" x2="91.5407"
                            y2="61.3358" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#EEF4FF" />
                            <stop offset="1" stop-color="#CFE7FD" />
                        </linearGradient>
                        <linearGradient id="paint7_linear_8007_1868" x1="88.7054" y1="58.3905" x2="85.7602"
                            y2="61.3358" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#EEF4FF" />
                            <stop offset="1" stop-color="#CFE7FD" />
                        </linearGradient>
                        <linearGradient id="paint8_linear_8007_1868" x1="110.057" y1="73.917" x2="107.112"
                            y2="76.8622" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#EEF4FF" />
                            <stop offset="1" stop-color="#CFE7FD" />
                        </linearGradient>
                        <linearGradient id="paint9_linear_8007_1868" x1="104.277" y1="73.917" x2="101.332"
                            y2="76.8622" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#EEF4FF" />
                            <stop offset="1" stop-color="#CFE7FD" />
                        </linearGradient>
                        <linearGradient id="paint10_linear_8007_1868" x1="98.4962" y1="73.917" x2="95.551"
                            y2="76.8622" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#EEF4FF" />
                            <stop offset="1" stop-color="#CFE7FD" />
                        </linearGradient>
                        <linearGradient id="paint11_linear_8007_1868" x1="97.6124" y1="64.7033" x2="97.6124"
                            y2="72.4752" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#9D66D6" />
                            <stop offset="1" stop-color="#453D81" />
                        </linearGradient>
                        <clipPath id="clip0_8007_1868">
                            <rect width="38" height="38" fill="white" transform="translate(80 50)" />
                        </clipPath>
                    </defs>
                </svg>
            </div>

            <!-- 3 -->
            <div class="icon3">
                <svg width="118" height="119" class="icon3" viewBox="0 0 179 179" fill="none"
                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g filter="url(#filter0_d_8007_1884)">
                        <circle cx="89.5" cy="59.5" r="29.5" fill="white" />
                    </g>
                    <rect x="75" y="45" width="29" height="29" fill="url(#pattern0_8007_1884)" />
                    <defs>
                        <filter id="filter0_d_8007_1884" x="0" y="0" width="179" height="179"
                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" type="matrix"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                            <feOffset dy="30" />
                            <feGaussianBlur stdDeviation="30" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix type="matrix"
                                values="0 0 0 0 0.344915 0 0 0 0 0.309028 0 0 0 0 0.432639 0 0 0 0.15 0" />
                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_8007_1884" />
                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_8007_1884"
                                result="shape" />
                        </filter>
                        <pattern id="pattern0_8007_1884" patternContentUnits="objectBoundingBox" width="1"
                            height="1">
                            <use xlink:href="#image0_8007_1884" transform="scale(0.00195312)" />
                        </pattern>
                        <image id="image0_8007_1884" width="512" height="512"
                            xlink:href="data:image/png;base64,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" />
                    </defs>
                </svg>
            </div>

            <!-- 4 -->
            <div class="icon4">
                <svg width="133" height="133" viewBox="0 0 202 202" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <g filter="url(#filter0_d_8007_1857)">
                        <circle cx="100.563" cy="70.563" r="40.468" transform="rotate(15 100.563 70.563)"
                            fill="white" />
                    </g>
                    <path
                        d="M94.6229 62.8627C95.5773 54.8814 102.872 49.0358 110.87 49.8386C110.903 49.8419 110.936 49.8455 110.97 49.849L110.971 49.8163L123.843 50.32C124.765 50.356 125.084 51.564 124.299 52.05L120.325 54.5116C123.183 57.5779 124.753 61.8393 124.224 66.4201C123.385 73.6865 117.22 79.3463 109.909 79.57C100.763 79.8499 93.533 71.977 94.6229 62.8627Z"
                        fill="white" />
                    <path
                        d="M113.09 80.3697C112.117 89.4699 104.189 96.4037 95.0389 96.2317C94.7586 96.2265 94.4806 96.2144 94.2049 96.1956V96.2349H78.194C77.2713 96.2349 76.9059 95.0403 77.6707 94.5241L82.8035 91.0597C79.4696 87.7522 77.4374 83.139 77.5361 78.0486C77.7159 68.787 85.143 61.0881 94.3934 60.598C105.336 60.018 114.273 69.3073 113.09 80.3697Z"
                        fill="#429DDA" />
                    <path
                        d="M89.016 78.4033C89.016 79.5299 88.1027 80.4432 86.9761 80.4432H85.5772C84.4506 80.4432 83.5373 79.5299 83.5373 78.4033C83.5373 77.2766 84.4506 76.3633 85.5772 76.3633H86.9761C88.1026 76.3633 89.016 77.2767 89.016 78.4033ZM97.438 78.4033C97.438 79.5299 96.5247 80.4432 95.3981 80.4432H93.9992C92.8726 80.4432 91.9593 79.5299 91.9593 78.4033C91.9593 77.2766 92.8726 76.3633 93.9992 76.3633H95.3981C96.5247 76.3633 97.438 77.2767 97.438 78.4033ZM105.86 78.4033C105.86 79.5299 104.947 80.4432 103.82 80.4432H102.421C101.295 80.4432 100.381 79.5299 100.381 78.4033C100.381 77.2766 101.295 76.3633 102.421 76.3633H103.82C104.947 76.3633 105.86 77.2767 105.86 78.4033Z"
                        fill="white" />
                    <path
                        d="M117.724 59.0941H105.86C105.598 59.0941 105.385 59.3065 105.385 59.569C105.385 59.8315 105.598 60.0439 105.86 60.0439H117.724C117.986 60.0439 118.199 59.8315 118.199 59.569C118.199 59.3065 117.986 59.0941 117.724 59.0941ZM117.724 64.197H110.706C110.444 64.197 110.231 64.4094 110.231 64.6719C110.231 64.9344 110.444 65.1469 110.706 65.1469H117.724C117.986 65.1469 118.199 64.9344 118.199 64.6719C118.199 64.4094 117.986 64.197 117.724 64.197Z"
                        fill="#40437E" />
                    <path
                        d="M125.17 50.8948C125.008 50.2822 124.495 49.8704 123.862 49.8459C110.068 49.3146 110.981 49.3201 110.85 49.3598C103.542 48.6582 96.8405 53.3178 94.7318 60.114C94.6106 60.1179 94.4899 60.1168 94.3685 60.1231C84.8487 60.6277 77.2467 68.4972 77.0614 78.039C76.9668 82.9031 78.7399 87.4769 82.066 90.9842L77.4053 94.1301C76.8796 94.4849 76.6601 95.1053 76.8453 95.7115C77.0308 96.3176 77.5602 96.7094 78.194 96.7094C86.2211 96.7044 87.2999 96.7099 95.3703 96.7099C104.622 96.7099 112.579 89.6162 113.562 80.4204C113.597 80.0978 113.621 79.7758 113.639 79.454C119.471 77.7776 123.976 72.7066 124.696 66.475C125.194 62.1604 123.871 57.8718 121.057 54.6164L124.549 52.454C125.088 52.12 125.332 51.5079 125.17 50.8948ZM112.618 80.3192C111.686 89.037 104.143 95.7601 95.3713 95.7601L78.1941 95.7596C77.8778 95.7596 77.777 95.5101 77.7536 95.4337C77.7302 95.3571 77.6743 95.0942 77.9365 94.9176L83.0693 91.453C83.1275 91.4137 83.1762 91.362 83.212 91.3016C83.2478 91.2412 83.2697 91.1737 83.2763 91.1038C83.2828 91.0339 83.2738 90.9634 83.2499 90.8975C83.226 90.8315 83.1878 90.7716 83.138 90.7221C79.7386 87.3499 77.9178 82.8521 78.0111 78.0576C78.1866 69.0111 85.3936 61.5501 94.4186 61.072C99.5201 60.7942 104.459 62.7674 107.964 66.4656C111.468 70.1621 113.164 75.2116 112.618 80.3192ZM124.049 51.6461L120.075 54.1076C120.015 54.1445 119.965 54.1943 119.926 54.2532C119.888 54.3121 119.864 54.3787 119.854 54.4483C119.845 54.5179 119.851 54.5887 119.873 54.6556C119.894 54.7225 119.93 54.7838 119.978 54.8351C122.865 57.9334 124.241 62.1357 123.753 66.3654C123.089 72.1085 118.998 76.7971 113.667 78.4517C113.671 73.7557 111.897 69.2345 108.653 65.8122C105.269 62.2414 100.622 60.2119 95.7286 60.1083C97.8106 53.8699 104.048 49.6367 110.824 50.3114C110.776 50.3097 110.332 50.3035 123.825 50.7946C124.14 50.8071 124.232 51.0598 124.252 51.1373C124.272 51.2143 124.318 51.4796 124.049 51.6461Z"
                        fill="#40437E" />
                    <path
                        d="M86.9761 75.8887H85.5772C84.1907 75.8887 83.0624 77.0169 83.0624 78.4035C83.0624 79.7901 84.1906 80.9179 85.5772 80.9179H86.9761C88.3626 80.9179 89.4909 79.79 89.4909 78.4035C89.4909 77.017 88.3626 75.8887 86.9761 75.8887ZM86.9761 79.9682H85.5772C84.7142 79.9682 84.0121 79.2661 84.0121 78.4035C84.0121 77.5405 84.7142 76.8384 85.5772 76.8384H86.9761C87.8391 76.8384 88.5412 77.5404 88.5412 78.4035C88.5412 79.2661 87.8391 79.9682 86.9761 79.9682ZM95.3979 75.8887H93.9993C92.6128 75.8887 91.4845 77.0169 91.4845 78.4035C91.4845 79.7901 92.6127 80.9179 93.9993 80.9179H95.3979C96.7845 80.9179 97.9128 79.79 97.9128 78.4035C97.9128 77.017 96.7845 75.8887 95.3979 75.8887ZM95.3979 79.9682H93.9993C93.1363 79.9682 92.4342 79.2661 92.4342 78.4035C92.4342 77.5405 93.1362 76.8384 93.9993 76.8384H95.3979C96.2609 76.8384 96.9631 77.5404 96.9631 78.4035C96.9631 79.2661 96.2609 79.9682 95.3979 79.9682ZM103.82 75.8887H102.421C101.035 75.8887 99.9063 77.0169 99.9063 78.4035C99.9063 79.7901 101.035 80.9179 102.421 80.9179H103.82C105.207 80.9179 106.335 79.79 106.335 78.4035C106.335 77.017 105.207 75.8887 103.82 75.8887ZM103.82 79.9682H102.421C101.558 79.9682 100.856 79.2661 100.856 78.4035C100.856 77.5405 101.558 76.8384 102.421 76.8384H103.82C104.683 76.8384 105.385 77.5404 105.385 78.4035C105.385 79.2661 104.683 79.9682 103.82 79.9682Z"
                        fill="#40437E" />
                    <defs>
                        <filter id="filter0_d_8007_1857" x="0.0850372" y="0.0849609" width="200.956" height="200.956"
                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" type="matrix"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                            <feOffset dy="30" />
                            <feGaussianBlur stdDeviation="30" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix type="matrix"
                                values="0 0 0 0 0.344915 0 0 0 0 0.309028 0 0 0 0 0.432639 0 0 0 0.15 0" />
                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_8007_1857" />
                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_8007_1857"
                                result="shape" />
                        </filter>
                    </defs>
                </svg>
            </div>

            <!-- 5 -->
            <div class="icon5">
                <svg width="164" height="164" viewBox="0 0 164 164" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <g filter="url(#filter0_d_8007_1944)">
                        <circle cx="82" cy="52" r="22" fill="white" />
                    </g>
                    <g clip-path="url(#clip0_8007_1944)">
                        <path
                            d="M86.0967 45.7593L76.5893 46.8544C76.404 46.8756 76.225 46.9346 76.0633 47.0275C75.9016 47.1205 75.7606 47.2456 75.649 47.395C75.5373 47.5444 75.4574 47.7151 75.4142 47.8965C75.3709 48.078 75.3652 48.2663 75.3973 48.4501L76.1317 52.6657C76.1827 52.9585 76.3276 53.2267 76.5446 53.4298C76.7615 53.6329 77.0386 53.7599 77.3341 53.7916L78.5264 53.9196L81.1114 56.1235C81.3994 56.3692 81.8295 56.0864 81.7178 55.7242L81.2495 54.2109L84.5329 54.5631C84.8594 54.5982 85.1877 54.5148 85.4577 54.328C85.7278 54.1412 85.9217 53.8635 86.0039 53.5456L87.5785 47.4618C87.6341 47.2467 87.6365 47.0213 87.5855 46.805C87.5345 46.5888 87.4316 46.3882 87.2857 46.2205C87.1399 46.0529 86.9554 45.9234 86.7482 45.843C86.5411 45.7626 86.3175 45.7339 86.0967 45.7593ZM79.0088 50.9724C78.8551 50.9724 78.7049 50.9268 78.5771 50.8414C78.4493 50.756 78.3497 50.6347 78.2909 50.4927C78.2321 50.3507 78.2167 50.1945 78.2467 50.0437C78.2767 49.893 78.3507 49.7545 78.4594 49.6458C78.568 49.5372 78.7065 49.4632 78.8572 49.4332C79.008 49.4032 79.1642 49.4186 79.3062 49.4774C79.4482 49.5362 79.5695 49.6358 79.6549 49.7636C79.7403 49.8914 79.7859 50.0416 79.7859 50.1953C79.7858 50.4014 79.7038 50.5991 79.5581 50.7448C79.4123 50.8905 79.2146 50.9724 79.0085 50.9724H79.0088ZM81.5003 50.9724C81.3467 50.9724 81.1964 50.9268 81.0686 50.8414C80.9408 50.756 80.8412 50.6347 80.7824 50.4927C80.7236 50.3507 80.7082 50.1945 80.7382 50.0437C80.7682 49.893 80.8422 49.7545 80.9509 49.6458C81.0596 49.5372 81.198 49.4632 81.3487 49.4332C81.4995 49.4032 81.6557 49.4186 81.7977 49.4774C81.9397 49.5362 82.0611 49.6358 82.1465 49.7636C82.2318 49.8914 82.2774 50.0416 82.2774 50.1953C82.2773 50.4014 82.1954 50.5991 82.0496 50.7448C81.9038 50.8905 81.7061 50.9724 81.5 50.9724H81.5003ZM83.9919 50.9724C83.8382 50.9724 83.6879 50.9268 83.5602 50.8414C83.4324 50.756 83.3328 50.6347 83.274 50.4927C83.2151 50.3507 83.1997 50.1945 83.2297 50.0437C83.2597 49.893 83.3337 49.7545 83.4424 49.6458C83.5511 49.5372 83.6895 49.4632 83.8403 49.4332C83.991 49.4032 84.1473 49.4186 84.2892 49.4774C84.4312 49.5362 84.5526 49.6358 84.638 49.7636C84.7234 49.8914 84.7689 50.0416 84.7689 50.1953C84.7688 50.4014 84.6869 50.5991 84.5411 50.7448C84.3953 50.8905 84.1976 50.9724 83.9915 50.9724H83.9919Z"
                            fill="#DA0A92" />
                        <path
                            d="M81.5 41.8164C83.5033 41.8179 85.4444 42.5117 86.9947 43.7804C88.545 45.0491 89.6092 46.8147 90.0069 48.7781C90.4046 50.7414 90.1115 52.7819 89.1771 54.5539C88.2428 56.326 86.7247 57.7206 84.8799 58.5015C82.7601 59.3852 80.3766 59.3934 78.2507 58.5244C76.1249 57.6553 74.4297 55.9797 73.5361 53.864C72.6424 51.7484 72.623 49.365 73.482 47.235C74.3411 45.1051 76.0087 43.4021 78.1201 42.4985C79.1893 42.046 80.3389 41.814 81.5 41.8164ZM81.5 41C76.2535 41 72 45.2535 72 50.5C72 55.7465 76.2535 60 81.5 60C86.7465 60 91 55.7465 91 50.5C91 45.2535 86.7465 41 81.5 41Z"
                            fill="#DA0A92" />
                    </g>
                    <defs>
                        <filter id="filter0_d_8007_1944" x="0" y="0" width="164" height="164"
                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" type="matrix"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                            <feOffset dy="30" />
                            <feGaussianBlur stdDeviation="30" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix type="matrix"
                                values="0 0 0 0 0.344915 0 0 0 0 0.309028 0 0 0 0 0.432639 0 0 0 0.15 0" />
                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_8007_1944" />
                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_8007_1944"
                                result="shape" />
                        </filter>
                        <clipPath id="clip0_8007_1944">
                            <rect width="19" height="19" fill="white" transform="translate(72 41)" />
                        </clipPath>
                    </defs>
                </svg>
            </div>

            <!-- 6 -->
            <div class="icon6">
                <svg width="135" height="135" class="icon7" viewBox="0 0 198 198" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <g filter="url(#filter0_d_8007_1923)">
                        <circle cx="99" cy="69" r="39" fill="white" />
                    </g>
                    <path
                        d="M108.175 89H89.8249C88.0469 89 86.6056 87.5587 86.6056 85.7807V52.2193C86.6056 50.4413 88.0469 49 89.8249 49H108.175C109.953 49 111.394 50.4413 111.394 52.2193V85.7807C111.394 87.5587 109.953 89 108.175 89Z"
                        fill="#3D6D93" />
                    <path
                        d="M108.175 49H105.761C107.539 49 108.98 50.4413 108.98 52.2193V85.7807C108.98 87.5587 107.539 89 105.761 89H108.175C109.953 89 111.394 87.5587 111.394 85.7807V52.2193C111.394 50.4413 109.953 49 108.175 49Z"
                        fill="#335E80" />
                    <path
                        d="M104.912 52.0584C104.912 52.6593 104.425 53.1464 103.824 53.1464H94.1764C93.5755 53.1464 93.0883 52.6593 93.0883 52.0584C93.0884 51.9738 93.0717 51.8901 93.0394 51.812C93.007 51.7339 92.9596 51.6629 92.8998 51.6031C92.84 51.5433 92.769 51.4959 92.6909 51.4635C92.6128 51.4312 92.5291 51.4145 92.4445 51.4145H90.2274C89.5607 51.4145 89.0201 51.955 89.0201 52.6218V85.3784C89.0201 86.0451 89.5606 86.5856 90.2274 86.5856H107.773C108.439 86.5856 108.98 86.0452 108.98 85.3784V52.6217C108.98 51.955 108.44 51.4145 107.773 51.4145H105.556C105.385 51.4145 105.221 51.4823 105.1 51.6031C104.98 51.7238 104.912 51.8876 104.912 52.0584Z"
                        fill="#F9F7F8" />
                    <path
                        d="M99.0001 51.6768C99.3334 51.6768 99.6037 51.4066 99.6037 51.0732C99.6037 50.7398 99.3334 50.4696 99.0001 50.4696C98.6667 50.4696 98.3965 50.7398 98.3965 51.0732C98.3965 51.4066 98.6667 51.6768 99.0001 51.6768Z"
                        fill="#335E80" />
                    <path
                        d="M92.8716 65.9009C93.8529 64.7238 94.4255 63.1941 94.3683 61.5289C94.2511 58.1129 91.4528 55.3524 88.0356 55.2791C84.3627 55.2004 81.366 58.1788 81.415 61.8451C81.4626 65.4029 84.4224 68.2353 87.9805 68.2353H93.9031C94.1899 68.2353 94.3336 67.8885 94.1308 67.6857L92.8924 66.4473C92.7438 66.2987 92.7369 66.0624 92.8716 65.9009Z"
                        fill="#F58A97" />
                    <path
                        d="M92.8925 66.4474C92.7437 66.2987 92.737 66.0624 92.8716 65.9009C93.853 64.7237 94.4255 63.1941 94.3684 61.5289C94.2512 58.1129 91.4529 55.3524 88.0356 55.2791C87.581 55.2692 87.1265 55.3069 86.6797 55.3915C89.5987 55.9442 91.8491 58.4735 91.9539 61.5289C92.011 63.1941 91.4385 64.7237 90.4572 65.9009C90.3225 66.0624 90.3293 66.2987 90.478 66.4474L91.7165 67.6859C91.9193 67.8887 91.7756 68.2355 91.4888 68.2355H93.9033C94.1901 68.2355 94.3337 67.8887 94.1309 67.6859L92.8925 66.4474Z"
                        fill="#F07281" />
                    <path
                        d="M87.8934 62.3601C88.2267 62.3601 88.497 62.0899 88.497 61.7565C88.497 61.4232 88.2267 61.153 87.8934 61.153C87.56 61.153 87.2898 61.4232 87.2898 61.7565C87.2898 62.0899 87.56 62.3601 87.8934 62.3601Z"
                        fill="#FDD1D5" />
                    <path
                        d="M90.3078 62.3601C90.6412 62.3601 90.9114 62.0899 90.9114 61.7565C90.9114 61.4232 90.6412 61.153 90.3078 61.153C89.9745 61.153 89.7042 61.4232 89.7042 61.7565C89.7042 62.0899 89.9745 62.3601 90.3078 62.3601Z"
                        fill="#FDD1D5" />
                    <path
                        d="M85.479 62.3601C85.8123 62.3601 86.0826 62.0899 86.0826 61.7565C86.0826 61.4232 85.8123 61.153 85.479 61.153C85.1456 61.153 84.8754 61.4232 84.8754 61.7565C84.8754 62.0899 85.1456 62.3601 85.479 62.3601Z"
                        fill="#FDD1D5" />
                    <path
                        d="M105.304 68.2354H96.3441C96.184 68.2354 96.0305 68.1718 95.9173 68.0586C95.8041 67.9454 95.7405 67.7919 95.7405 67.6318C95.7405 67.4717 95.8041 67.3182 95.9173 67.205C96.0305 67.0918 96.184 67.0282 96.3441 67.0282H105.304C105.464 67.0282 105.618 67.0918 105.731 67.205C105.844 67.3182 105.908 67.4717 105.908 67.6318C105.908 67.7919 105.844 67.9454 105.731 68.0586C105.618 68.1718 105.464 68.2354 105.304 68.2354ZM105.304 65.8209H96.3441C96.184 65.8209 96.0305 65.7573 95.9173 65.6441C95.8041 65.531 95.7405 65.3774 95.7405 65.2173C95.7405 65.0573 95.8041 64.9037 95.9173 64.7905C96.0305 64.6773 96.184 64.6138 96.3441 64.6138H105.304C105.464 64.6138 105.618 64.6773 105.731 64.7905C105.844 64.9037 105.908 65.0573 105.908 65.2173C105.908 65.3774 105.844 65.531 105.731 65.6441C105.618 65.7573 105.464 65.8209 105.304 65.8209ZM105.304 63.4064H97.5514C97.3913 63.4064 97.2377 63.3428 97.1245 63.2296C97.0114 63.1164 96.9478 62.9629 96.9478 62.8028C96.9478 62.6427 97.0114 62.4892 97.1245 62.376C97.2377 62.2628 97.3913 62.1992 97.5514 62.1992H105.304C105.464 62.1992 105.618 62.2628 105.731 62.376C105.844 62.4892 105.908 62.6427 105.908 62.8028C105.908 62.9629 105.844 63.1164 105.731 63.2296C105.618 63.3428 105.464 63.4064 105.304 63.4064ZM101.682 82.7223H92.7224C92.5623 82.7223 92.4088 82.6588 92.2956 82.5456C92.1824 82.4324 92.1188 82.2788 92.1188 82.1188C92.1188 81.9587 92.1824 81.8051 92.2956 81.6919C92.4088 81.5787 92.5623 81.5152 92.7224 81.5152H101.682C101.842 81.5152 101.996 81.5787 102.109 81.6919C102.222 81.8051 102.286 81.9587 102.286 82.1188C102.286 82.2788 102.222 82.4324 102.109 82.5456C101.996 82.6588 101.842 82.7223 101.682 82.7223ZM101.682 80.3078H92.7224C92.5623 80.3078 92.4088 80.2442 92.2956 80.131C92.1824 80.0178 92.1188 79.8643 92.1188 79.7042C92.1188 79.5441 92.1824 79.3906 92.2956 79.2774C92.4088 79.1642 92.5623 79.1006 92.7224 79.1006H101.682C101.842 79.1006 101.996 79.1642 102.109 79.2774C102.222 79.3906 102.286 79.5441 102.286 79.7042C102.286 79.8643 102.222 80.0178 102.109 80.131C101.996 80.2442 101.842 80.3078 101.682 80.3078ZM100.475 77.8934H92.7224C92.5623 77.8934 92.4088 77.8298 92.2956 77.7166C92.1824 77.6034 92.1188 77.4498 92.1188 77.2898C92.1188 77.1297 92.1824 76.9762 92.2956 76.863C92.4088 76.7498 92.5623 76.6862 92.7224 76.6862H100.475C100.635 76.6862 100.789 76.7498 100.902 76.863C101.015 76.9762 101.079 77.1297 101.079 77.2898C101.079 77.4498 101.015 77.6034 100.902 77.7166C100.789 77.8298 100.635 77.8934 100.475 77.8934Z"
                        fill="#DEDAEE" />
                    <path
                        d="M105.128 80.3878C104.147 79.2107 103.575 77.6811 103.632 76.0159C103.749 72.5999 106.547 69.8394 109.964 69.7661C113.637 69.6874 116.634 72.6659 116.585 76.3321C116.537 79.8899 113.578 82.7223 110.02 82.7223H104.097C103.81 82.7223 103.666 82.3755 103.869 82.1727L105.108 80.9342C105.256 80.7856 105.263 80.5494 105.128 80.3878Z"
                        fill="#AEE69C" />
                    <path
                        d="M109.964 69.7661C109.609 69.7742 109.255 69.8118 108.906 69.8785C111.932 70.452 114.213 73.1295 114.17 76.3321C114.123 79.8899 111.163 82.7223 107.605 82.7223H110.019C113.578 82.7223 116.537 79.8899 116.585 76.3321C116.634 72.6659 113.637 69.6874 109.964 69.7661Z"
                        fill="#89DAA4" />
                    <path
                        d="M110.107 76.847C110.44 76.847 110.71 76.5768 110.71 76.2434C110.71 75.9101 110.44 75.6398 110.107 75.6398C109.773 75.6398 109.503 75.9101 109.503 76.2434C109.503 76.5768 109.773 76.847 110.107 76.847Z"
                        fill="#D5EFC8" />
                    <path
                        d="M107.692 76.847C108.026 76.847 108.296 76.5768 108.296 76.2434C108.296 75.9101 108.026 75.6398 107.692 75.6398C107.359 75.6398 107.089 75.9101 107.089 76.2434C107.089 76.5768 107.359 76.847 107.692 76.847Z"
                        fill="#D5EFC8" />
                    <path
                        d="M112.521 76.847C112.854 76.847 113.125 76.5768 113.125 76.2434C113.125 75.9101 112.854 75.6398 112.521 75.6398C112.188 75.6398 111.917 75.9101 111.917 76.2434C111.917 76.5768 112.188 76.847 112.521 76.847Z"
                        fill="#D5EFC8" />
                    <defs>
                        <filter id="filter0_d_8007_1923" x="0" y="0" width="198" height="198"
                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" type="matrix"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                            <feOffset dy="30" />
                            <feGaussianBlur stdDeviation="30" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix type="matrix"
                                values="0 0 0 0 0.344915 0 0 0 0 0.309028 0 0 0 0 0.432639 0 0 0 0.15 0" />
                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_8007_1923" />
                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_8007_1923"
                                result="shape" />
                        </filter>
                    </defs>
                </svg>
            </div>

            <!-- 7 -->
            <div class="icon7">
                <svg width="120" height="120" class="icon6" viewBox="0 0 179 179" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <g filter="url(#filter0_d_8007_1909)">
                        <circle cx="89.5" cy="59.5" r="29.5" fill="white" />
                    </g>
                    <path
                        d="M94.156 71.8613C94.965 71.8613 95.6208 71.2055 95.6208 70.3965C95.6208 69.5875 94.965 68.9316 94.156 68.9316C93.347 68.9316 92.6912 69.5875 92.6912 70.3965C92.6912 71.2055 93.347 71.8613 94.156 71.8613Z"
                        fill="#FFD400" />
                    <path
                        d="M79.8005 49.5957C80.448 49.5957 80.9724 50.1201 80.9724 50.7676C80.9724 51.415 80.448 51.9395 79.8005 51.9395C79.1531 51.9395 78.6287 51.415 78.6287 50.7676C78.6287 50.1201 79.1531 49.5957 79.8005 49.5957Z"
                        fill="#FFD400" />
                    <path
                        d="M102.652 56.627C102.652 59.8602 101.015 62.7113 98.5247 64.3965L99.7224 67.7598L96.1165 65.5637C93.8033 66.298 91.2243 66.1184 88.9851 64.9637C89.1204 64.4563 89.1925 63.9237 89.1925 63.3734C89.1925 60.2744 86.9037 57.7098 83.9249 57.2773C83.5507 51.7846 87.9065 47.252 93.2771 47.252C98.455 47.252 102.652 51.449 102.652 56.627Z"
                        fill="#07CC66" />
                    <path
                        d="M101.48 46.666C101.804 46.666 102.066 46.9285 102.066 47.252C102.066 47.5754 101.804 47.8379 101.48 47.8379C101.157 47.8379 100.894 47.5754 100.894 47.252C100.894 46.9285 101.157 46.666 101.48 46.666Z"
                        fill="#94D4FF" />
                    <path
                        d="M99.1365 54.8691C99.4599 54.8691 99.7224 55.1316 99.7224 55.4551C99.7224 55.7785 99.4599 56.041 99.1365 56.041C98.813 56.041 98.5505 55.7785 98.5505 55.4551C98.5505 55.1316 98.813 54.8691 99.1365 54.8691Z"
                        fill="white" />
                    <path
                        d="M98.5505 68.9316C98.874 68.9316 99.1365 69.1941 99.1365 69.5176C99.1365 69.841 98.874 70.1035 98.5505 70.1035C98.2271 70.1035 97.9646 69.841 97.9646 69.5176C97.9646 69.1941 98.2271 68.9316 98.5505 68.9316ZM89.7615 70.1035C90.0849 70.1035 90.3474 70.366 90.3474 70.6895C90.3474 71.0129 90.0849 71.2754 89.7615 71.2754C89.438 71.2754 89.1755 71.0129 89.1755 70.6895C89.1755 70.366 89.438 70.1035 89.7615 70.1035ZM84.488 46.666C84.8115 46.666 85.074 46.9285 85.074 47.252C85.074 47.5754 84.8115 47.8379 84.488 47.8379C84.1645 47.8379 83.9021 47.5754 83.9021 47.252C83.9021 46.9285 84.1645 46.666 84.488 46.666ZM79.2146 54.2832C79.538 54.2832 79.8005 54.5457 79.8005 54.8691C79.8005 55.1926 79.538 55.4551 79.2146 55.4551C78.8911 55.4551 78.6287 55.1926 78.6287 54.8691C78.6287 54.5457 78.8911 54.2832 79.2146 54.2832Z"
                        fill="#94D4FF" />
                    <path
                        d="M93.863 54.2832H88.5896C88.266 54.2832 88.0037 54.0209 88.0037 53.6973C88.0037 53.3737 88.266 53.1113 88.5896 53.1113H93.863C94.1866 53.1113 94.449 53.3737 94.449 53.6973C94.449 54.0209 94.1866 54.2832 93.863 54.2832ZM97.3787 56.041H88.5896C88.266 56.041 88.0037 55.7787 88.0037 55.4551C88.0037 55.1315 88.266 54.8691 88.5896 54.8691H97.3787C97.7022 54.8691 97.9646 55.1315 97.9646 55.4551C97.9646 55.7787 97.7022 56.041 97.3787 56.041ZM100.308 57.7988H88.5896C88.266 57.7988 88.0037 57.5365 88.0037 57.2129C88.0037 56.8893 88.266 56.627 88.5896 56.627H100.308C100.632 56.627 100.894 56.8893 100.894 57.2129C100.894 57.5365 100.632 57.7988 100.308 57.7988Z"
                        fill="white" />
                    <path
                        d="M83.0899 69.476C82.4395 69.476 81.8126 69.3746 81.2237 69.1877L78.6873 70.6309L79.6417 68.4207C78.0052 67.3133 76.9294 65.44 76.9294 63.3148C76.9294 59.9123 79.6874 57.1542 83.09 57.1542C86.4875 57.1542 89.2511 59.9074 89.2511 63.3148C89.2511 66.7115 86.4986 69.476 83.0899 69.476Z"
                        fill="#5CBEFF" />
                    <path
                        d="M86.3044 65.3574H79.8591C79.5355 65.3574 79.2732 65.095 79.2732 64.7715C79.2732 64.4479 79.5355 64.1855 79.8591 64.1855H86.3044C86.628 64.1855 86.8904 64.4479 86.8904 64.7715C86.8904 65.095 86.628 65.3574 86.3044 65.3574ZM86.3044 63.5996H79.8591C79.5355 63.5996 79.2732 63.3372 79.2732 63.0137C79.2732 62.6901 79.5355 62.4277 79.8591 62.4277H86.3044C86.628 62.4277 86.8904 62.6901 86.8904 63.0137C86.8904 63.3372 86.628 63.5996 86.3044 63.5996ZM86.3044 61.8418H79.8591C79.5355 61.8418 79.2732 61.5794 79.2732 61.2559C79.2732 60.9323 79.5355 60.6699 79.8591 60.6699H86.3044C86.628 60.6699 86.8904 60.9323 86.8904 61.2559C86.8904 61.5794 86.628 61.8418 86.3044 61.8418Z"
                        fill="white" />
                    <defs>
                        <filter id="filter0_d_8007_1909" x="0" y="0" width="179" height="179"
                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" type="matrix"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                            <feOffset dy="30" />
                            <feGaussianBlur stdDeviation="30" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix type="matrix"
                                values="0 0 0 0 0.344915 0 0 0 0 0.309028 0 0 0 0 0.432639 0 0 0 0.15 0" />
                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_8007_1909" />
                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_8007_1909"
                                result="shape" />
                        </filter>
                    </defs>
                </svg>
            </div>

            <!-- 8 -->
            <div class="icon8">
                <svg width="120" height="120" viewBox="0 0 201 201" fill="none"
                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g filter="url(#filter0_d_8035_1011)">
                        <circle cx="100.563" cy="72.563" r="43.734" transform="rotate(15 100.563 72.563)"
                            fill="white" />
                    </g>
                    <rect x="69" y="41" width="63" height="63" fill="url(#pattern0_8035_1011)" />
                    <defs>
                        <filter id="filter0_d_8035_1011" x="0.987457" y="0.902786" width="199.151" height="199.151"
                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" type="matrix"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                            <feOffset dy="27.9153" />
                            <feGaussianBlur stdDeviation="27.9153" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix type="matrix"
                                values="0 0 0 0 0.344915 0 0 0 0 0.309028 0 0 0 0 0.432639 0 0 0 0.15 0" />
                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_8035_1011" />
                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_8035_1011"
                                result="shape" />
                        </filter>
                        <pattern id="pattern0_8035_1011" patternContentUnits="objectBoundingBox" width="1"
                            height="1">
                            <use xlink:href="#image0_8035_1011" transform="scale(0.00195312)" />
                        </pattern>
                        <image id="image0_8035_1011" width="512" height="512"
                            xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAgAAAAIACAYAAAD0eNT6AAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAAOxAAADsQBlSsOGwAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAACAASURBVHic7d15fFx1vf/x9+fMJE0yk3SjrApFQYViRUIzCS0Y2SuUpXWSIoJFsderV6/L9er1+oO6Xr3odRcFFxShTQZaNtnFspRsRARvQdwoIAKFrrOlycz5/P4oeindsszM58z3vJ9/+UCavGgy8/3M92wAEREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREb1MrAOIaOw0mYxkni1Mh187XdWfHlHZB9Dp6sk+8DEVgkkKaQAAgTaKIAqFKDDl5S9RCyD28v/OAhje/u9iMwSqioJC0i//+RwU2wBsFMFLgGwowt8g4m2AN7whflB0g6RSxQr/FRDRBHEAIAoYnX1BLDMpN9OT6KE+/JkiMlOAmT5woED2AXQfAFOtO19lI4CXFNjgAX9TYJ2qrvPgrfO18GTcH35SBm/OWUcS0f/hAEBkQGdfEMvHhmapylsUOAw+ZkIwE4pDIZhh3Vcm6wGsg2IdgCfFkz+J+I/WZ+vWyqNXZ43biEKHAwBRmWXnLj4QRb9ZgSOhMgvQZgBvAuBZtwXIcxAdhC9rAXlMtTAYH3jz44JlvnUYkas4ABCV0NCcRa8reN5cUa9NxT8GkKPwf8faaQwEyCh0raj3GxV9MKK6pr4/9aR1F5ErOAAQjZO2t0cz2elv9DxvrsKbB+AEQA+x7nLc8xB9CJAHfNU1jdMyA3Lbbduso4iqEQcAolHS9iV12Xz+BBV9m/iYC8EcAA3WXSGXg2JABfcL9L7YtMx9HAiIRocDANEe5FuSh/qCUyBysipOB9Bo3UR7lAewBoK7FXJTY2/X49ZBREHFAYDoFbR9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RERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERNXo/wOPsq/zCL0uMgAAAABJRU5ErkJggg==" />
                    </defs>
                </svg>
            </div>
        </div>
    </header>

    @endsection
    @push('scripts')
        <script>
            var stripe = Stripe("{{ env('STRIPE_KEY') }}");
            var elements = stripe.elements();

            // Create individual elements
            var cardNumber = elements.create('cardNumber', {
                style: {
                    base: {
                        fontSize: '16px'
                    }
                }
            });
            var cardExpiry = elements.create('cardExpiry', {
                style: {
                    base: {
                        fontSize: '16px'
                    }
                }
            });
            var cardCvc = elements.create('cardCvc', {
                style: {
                    base: {
                        fontSize: '16px'
                    }
                }
            });

            // Mount elements to their respective divs
            cardNumber.mount('#card-number');
            cardExpiry.mount('#card-expiry');
            cardCvc.mount('#card-cvc');

            var form = document.getElementById('payment-form');
            var submitButton = document.getElementById('submit-button');

            form.addEventListener('submit', async function(event) {
                showLoader();
                this.disabled = true;

                event.preventDefault();
                submitButton.disabled = true;

                const {
                    paymentMethod,
                    error
                } = await stripe.createPaymentMethod({
                    type: 'card',
                    card: cardNumber, // Only the card number element is passed here
                    billing_details: {
                        address: {
                            postal_code: document.getElementById('billing-zip').value,
                            country: document.getElementById('billing-country').value,
                        }
                    }
                });

                if (error) {
                    hideLoader();
                    this.disabled = false;
                    document.getElementById('card-errors').textContent = error.message;
                    submitButton.disabled = false;
                    return;
                }

                var formData = new FormData(form);
                var plan_id = formData.get("plan_id");
                var categories = JSON.stringify([...document.querySelectorAll("input[name='categories[]']")].map(
                    input => input.value));

                fetch("{{ route('subscribe') }}", {
                        method: "POST",
                        headers: {
                            "Content-Type": "application/json",
                            "X-CSRF-TOKEN": "{{ csrf_token() }}"
                        },
                        body: JSON.stringify({
                            plan_id: plan_id,
                            categories: JSON.parse(categories),
                            payment_method_id: paymentMethod.id,
                        })
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.requires_action) {
                            stripe.handleCardAction(data.payment_intent_client_secret)
                                .then(function(result) {
                                    if (result.error) {
                                        toastr.error(result.error.message, 'Error');
                                        submitButton.disabled = false;
                                    } else {
                                        fetch("{{ route('subscribe') }}", {
                                                method: "POST",
                                                headers: {
                                                    "Content-Type": "application/json",
                                                    "X-CSRF-TOKEN": "{{ csrf_token() }}"
                                                },
                                                body: JSON.stringify({
                                                    plan_id: plan_id,
                                                    categories: JSON.parse(categories),
                                                    payment_method_id: paymentMethod.id,
                                                })
                                            })
                                            .then(response => response.json())
                                            .then(data => {
                                                if (data.success) {
                                                    window.location.href = data.redirect_url;
                                                } else {
                                                    hideLoader();
                                                    this.disabled = false;
                                                    toastr.error('Error creating subscription!',
                                                        'Error');
                                                    submitButton.disabled = false;
                                                }
                                            });
                                    }
                                });
                        } else if (data.success) {
                            window.location.href = data.redirect_url;
                        } else {
                            hideLoader();
                            this.disabled = false;
                            toastr.error('Error creating subscription!', 'Error');
                            submitButton.disabled = false;
                        }
                    })
                    .catch(error => {
                        hideLoader();
                        this.disabled = false;
                        toastr.error('Error creating subscription!', 'Error');
                        submitButton.disabled = false;
                    });
            });
        </script>
    @endpush
