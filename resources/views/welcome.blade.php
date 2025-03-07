@extends('layouts.app')
@section('title', 'Sign In')
@section('header')
    <header class="relative headerBg h-fit flex flex-col">
    @endsection
    @section('content')
        <div class="hidden fixed top-0 left-0 w-full h-full bg-white urbanist flex flex-col items-center justify-center z-40"
            id="menu">
            <ul class="flex flex-col space-y-6 text-center">
                <li>
                    <a class="text-[#FFC400] font-bold text-2xl" href="#"> Home </a>
                </li>
                <li>
                    <a class="text-[#3A3A3A] text-2xl" href="#"> About us </a>
                </li>
                <li>
                    <a class="text-[#3A3A3A] text-2xl" href="#FAQ"> FAQ </a>
                </li>
                <li>
                    <a class="text-[#3A3A3A] font-semibold text-2xl" href="sign-up.html">
                        Member Login
                    </a>
                </li>
            </ul>
            <a class="bg-[#FFC400] text-white py-2 px-4 rounded-full font-bold mt-6" href="#">
                Contact Us
            </a>
        </div>
        <!-- =======HERo======== -->
        <div class="banner flex flex-col mt-[120px] items-center justify-center text-center">
            <div class="bn-headings">
                <h1
                    class="text-3xl md:text-5xl font-[800] text-[#FFC400] 2xl:text-[88px] 2xl:font-extrabold CabinetGrotesk-800">
                    Inspiring Daily Messages
                </h1>
                <h2
                    class="text-2xl md:text-5xl font-[800] text-[#3A3A3A] mt-1 md:mt-2 2xl:text-[88px] 2xl:font-extrabold CabinetGrotesk-800">
                    From Yours Truly
                </h2>
            </div>
            <div class="image">
                <img src="{{ asset('asset/images/bannerImage.png') }}" alt=""
                    class="h-[300px] md:h-[400px] 2xl:h-[550px]" />
                {{-- <video src="{{ asset('asset/images/quote_video.mp4') }}"
                            class="h-[300px] md:h-[400px] 2xl:h-[550px]"
                            autoplay loop muted playsinline>
                        </video> --}}
            </div>
        </div>
        <div class="bn-para pb-20">
            <p
                class="bn-para text-[#8D8D8D] text-sm md:text-[17px] max-w-[646px] mx-4 md:mx-auto mt-4 leading-[18px] 2xl:text-[24px] 2xl:max-w-[1000px] 2xl:leading-[26px]">
                Sign Up To Receive Daily Texts Designed To Uplift And Guide You On
                Your Journey Through Life. Your Journey Through Life. Each Message
                Offers Inspiration, Wisdom, Motivation, Or Even A Little Something To
                Make You Smile. Think Of It As A True Friend, Always There To Brighten
                Your Day With Meaningful Words.
            </p>
        </div>
        <div class="background-icons hidden lg:block">
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
                <svg width="48" height="48" class="icon8" viewBox="0 0 63 63" fill="none"
                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <rect width="63" height="63" fill="url(#pattern0_8007_1908)" />
                    <defs>
                        <pattern id="pattern0_8007_1908" patternContentUnits="objectBoundingBox" width="1"
                            height="1">
                            <use xlink:href="#image0_8007_1908" transform="scale(0.00195312)" />
                        </pattern>
                        <image id="image0_8007_1908" width="512" height="512"
                            xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAgAAAAIACAYAAAD0eNT6AAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAAOxAAADsQBlSsOGwAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAACAASURBVHic7d15fFx1vf/x9+fMJE0yk3SjrApFQYViRUIzCS0Y2SuUpXWSIoJFsderV6/L9er1+oO6Xr3odRcFFxShTQZaNtnFspRsRARvQdwoIAKFrrOlycz5/P4oeindsszM58z3vJ9/+UCavGgy8/3M92wAEREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREb1MrAOIaOw0mYxkni1Mh187XdWfHlHZB9Dp6sk+8DEVgkkKaQAAgTaKIAqFKDDl5S9RCyD28v/OAhje/u9iMwSqioJC0i//+RwU2wBsFMFLgGwowt8g4m2AN7whflB0g6RSxQr/FRDRBHEAIAoYnX1BLDMpN9OT6KE+/JkiMlOAmT5woED2AXQfAFOtO19lI4CXFNjgAX9TYJ2qrvPgrfO18GTcH35SBm/OWUcS0f/hAEBkQGdfEMvHhmapylsUOAw+ZkIwE4pDIZhh3Vcm6wGsg2IdgCfFkz+J+I/WZ+vWyqNXZ43biEKHAwBRmWXnLj4QRb9ZgSOhMgvQZgBvAuBZtwXIcxAdhC9rAXlMtTAYH3jz44JlvnUYkas4ABCV0NCcRa8reN5cUa9NxT8GkKPwf8faaQwEyCh0raj3GxV9MKK6pr4/9aR1F5ErOAAQjZO2t0cz2elv9DxvrsKbB+AEQA+x7nLc8xB9CJAHfNU1jdMyA3Lbbduso4iqEQcAolHS9iV12Xz+BBV9m/iYC8EcAA3WXSGXg2JABfcL9L7YtMx9HAiIRocDANEe5FuSh/qCUyBysipOB9Bo3UR7lAewBoK7FXJTY2/X49ZBREHFAYDoFbR9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RERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERNXo/wOPsq/zCL0uMgAAAABJRU5ErkJggg==" />
                    </defs>
                </svg>
            </div>
            <!-- 9 -->
            <div class="icon9">
                <svg width="120" height="120" viewBox="0 0 164 164" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M80.0953 89.311V74.3713L89.4326 81.3432L80.0953 89.311Z" fill="#FFC400" stroke="#FFC400"
                        stroke-width="1.59303" />
                    <path
                        d="M81.8845 17.965C80.9134 17.965 80.0071 17.795 79.1655 17.4552C78.3401 17.0991 77.636 16.6055 77.0534 15.9743C76.4707 15.3431 76.058 14.5905 75.8153 13.7165L78.6071 13.0367C78.8661 13.7812 79.2788 14.3558 79.8452 14.7604C80.4117 15.165 81.0995 15.3673 81.9088 15.3673C82.4914 15.3673 83.0093 15.254 83.4625 15.0275C83.9157 14.8009 84.2717 14.4934 84.5307 14.1049C84.8058 13.7165 84.9434 13.2714 84.9434 12.7697C84.9434 12.1547 84.7168 11.6449 84.2637 11.2402C83.8267 10.8194 83.1307 10.5038 82.1758 10.2934L81.2776 10.0992C79.562 9.72698 78.2915 9.11196 77.4661 8.25418C76.6569 7.39639 76.2523 6.35248 76.2523 5.12244C76.2523 4.37795 76.3979 3.69819 76.6892 3.08318C76.9806 2.45198 77.3852 1.90979 77.9031 1.45662C78.421 0.987264 79.0279 0.631202 79.7239 0.388431C80.4198 0.129477 81.1724 0 81.9816 0C82.9041 0 83.7538 0.169939 84.5307 0.509816C85.3076 0.849694 85.9711 1.33523 86.5214 1.96644C87.0717 2.58145 87.4601 3.31785 87.6867 4.17564L84.9191 4.8554C84.6602 4.12709 84.2717 3.56872 83.7538 3.18028C83.2359 2.79185 82.6209 2.59764 81.9088 2.59764C81.3909 2.59764 80.9296 2.70284 80.525 2.91324C80.1366 3.10745 79.821 3.38259 79.5782 3.73866C79.3516 4.07853 79.2383 4.46697 79.2383 4.90395C79.2383 5.53515 79.473 6.03688 79.9424 6.40912C80.4117 6.78137 81.1319 7.08079 82.103 7.30737L83.0013 7.50159C86.3029 8.24608 87.9538 9.9212 87.9538 12.5269C87.9538 13.32 87.8 14.0564 87.4925 14.7361C87.2012 15.3997 86.7804 15.9743 86.2301 16.4598C85.6798 16.9292 85.0324 17.3014 84.2879 17.5765C83.5596 17.8355 82.7585 17.965 81.8845 17.965Z"
                        fill="#FFC400" />
                    <path
                        d="M102.315 19.1206L108.911 3.19599L118.555 7.19087L117.58 9.54591L110.627 6.66589L108.899 10.8377L115.179 13.439L114.204 15.794L107.923 13.1927L105.982 17.8804L113.159 20.8533L112.184 23.2084L102.315 19.1206Z"
                        fill="#FFC400" />
                    <path
                        d="M124.769 31.6834L136.957 19.4952L144.338 26.8768L142.536 28.6792L137.214 23.3576L134.021 26.5506L138.828 31.3572L137.025 33.1597L132.219 28.3531L128.631 31.9409L134.124 37.4341L132.322 39.2366L124.769 31.6834Z"
                        fill="#FFC400" />
                    <path
                        d="M146.203 74.6622H163.44V77.624H156.448V86.0481H163.44V89.0099H146.203V86.0481H153.802V77.624H146.203V74.6622Z"
                        fill="#FFC400" />
                    <path
                        d="M142.073 107.23C142.457 106.303 142.954 105.484 143.564 104.773C144.167 104.077 144.855 103.495 145.627 103.026C146.408 102.579 147.242 102.258 148.128 102.065C149.014 101.871 149.939 101.816 150.902 101.9C151.86 101.999 152.825 102.25 153.797 102.652C154.769 103.055 155.628 103.56 156.375 104.167C157.116 104.789 157.731 105.482 158.221 106.246C158.725 107.015 159.092 107.842 159.322 108.725C159.552 109.609 159.634 110.51 159.569 111.429C159.497 112.363 159.269 113.293 158.885 114.22C158.501 115.147 158.008 115.959 157.404 116.655C156.794 117.366 156.099 117.945 155.318 118.392C154.546 118.86 153.717 119.191 152.831 119.385C151.945 119.579 151.023 119.626 150.065 119.527C149.108 119.428 148.143 119.178 147.171 118.775C146.199 118.372 145.343 117.86 144.602 117.238C143.855 116.631 143.229 115.942 142.725 115.173C142.235 114.409 141.875 113.586 141.646 112.702C141.41 111.834 141.327 110.933 141.399 109.999C141.464 109.08 141.689 108.157 142.073 107.23ZM144.585 108.27C144.269 109.033 144.123 109.787 144.147 110.533C144.18 111.3 144.362 112.023 144.693 112.703C145.025 113.384 145.497 114 146.109 114.551C146.73 115.124 147.467 115.587 148.319 115.94C149.171 116.293 150.012 116.483 150.841 116.511C151.679 116.561 152.456 116.462 153.171 116.215C153.887 115.969 154.52 115.582 155.07 115.057C155.629 114.553 156.067 113.92 156.383 113.157C156.699 112.395 156.84 111.63 156.807 110.863C156.783 110.117 156.606 109.404 156.274 108.724C155.943 108.044 155.467 107.417 154.846 106.845C154.233 106.293 153.501 105.841 152.649 105.488C151.796 105.135 150.951 104.934 150.113 104.884C149.284 104.856 148.512 104.965 147.796 105.212C147.081 105.459 146.444 105.834 145.884 106.339C145.334 106.864 144.901 107.508 144.585 108.27Z"
                        fill="#FFC400" />
                    <path
                        d="M132.017 149.125L123.434 133.332L125.562 131.204L137.39 137.916L130.678 126.088L132.824 123.942L148.617 132.525L146.385 134.757L134.472 127.856L141.304 139.838L139.278 141.864L127.279 135.049L134.197 146.945L132.017 149.125Z"
                        fill="#FFC400" />
                    <path d="M83.4403 146.082V163.319H80.4785V146.082H83.4403Z" fill="#FFC400" />
                    <path
                        d="M58.1755 143.139L52.592 156.619L57.2348 158.542L56.2221 160.987L44.2002 156.007L45.2128 153.563L49.8556 155.486L55.4392 142.006L58.1755 143.139Z"
                        fill="#FFC400" />
                    <path
                        d="M0.646369 102.338L18.522 100.452L19.674 103.233L8.94656 111.592L22.4425 109.917L23.6038 112.721L9.63019 124.027L8.42243 121.111L19.3571 112.745L5.67248 114.472L4.57621 111.825L15.4645 103.348L1.82625 105.186L0.646369 102.338Z"
                        fill="#FFC400" />
                    <path
                        d="M18.2077 81.8362C18.2077 82.8397 18.0621 83.7865 17.7708 84.6766C17.4794 85.5506 17.0667 86.3518 16.5326 87.0801C15.9823 87.7922 15.335 88.4072 14.5905 88.9251C13.846 89.443 13.0125 89.8476 12.0899 90.139C11.1674 90.4141 10.1802 90.5517 9.12815 90.5517C8.07614 90.5517 7.08888 90.4141 6.16635 90.139C5.24383 89.8476 4.41032 89.443 3.66582 88.9251C2.90515 88.4072 2.24967 87.7841 1.69939 87.0558C1.14911 86.3275 0.72831 85.5263 0.436986 84.6524C0.145662 83.7622 0 82.8154 0 81.812C0 80.8085 0.145662 79.8698 0.436986 78.9958C0.72831 78.1057 1.14911 77.3045 1.69939 76.5924C2.23348 75.8641 2.87278 75.241 3.61727 74.7231C4.36176 74.2052 5.19528 73.8086 6.1178 73.5335C7.04033 73.2584 8.02759 73.1208 9.07959 73.1208C10.1316 73.1208 11.1189 73.2665 12.0414 73.5578C12.9639 73.8329 13.8055 74.2295 14.5662 74.7474C15.3107 75.2653 15.9581 75.8884 16.5084 76.6167C17.0586 77.3288 17.4794 78.13 17.7708 79.0201C18.0621 79.8941 18.2077 80.8328 18.2077 81.8362ZM15.4887 81.8362C15.4887 81.0108 15.335 80.2582 15.0275 79.5785C14.7038 78.8825 14.2587 78.2837 13.6922 77.782C13.1258 77.2803 12.4541 76.8918 11.6772 76.6167C10.8842 76.3254 10.0264 76.1797 9.10387 76.1797C8.18134 76.1797 7.33165 76.3254 6.55479 76.6167C5.76174 76.8918 5.08198 77.2803 4.51552 77.782C3.94906 78.2837 3.51207 78.8825 3.20456 79.5785C2.88087 80.2582 2.71902 81.0108 2.71902 81.8362C2.71902 82.6617 2.88087 83.4223 3.20456 84.1183C3.51207 84.798 3.94906 85.3888 4.51552 85.8905C5.08198 86.3922 5.76174 86.7887 6.55479 87.0801C7.33165 87.3552 8.18134 87.4928 9.10387 87.4928C10.0264 87.4928 10.8842 87.3552 11.6772 87.0801C12.4541 86.7887 13.1258 86.3922 13.6922 85.8905C14.2587 85.3888 14.7038 84.798 15.0275 84.1183C15.335 83.4223 15.4887 82.6617 15.4887 81.8362Z"
                        fill="#FFC400" />
                    <path
                        d="M19.1847 61.6346L3.26006 55.0384L5.24821 50.2386C5.77466 48.9676 6.42866 47.9597 7.21019 47.2148C7.99792 46.455 8.86779 45.9832 9.81981 45.7994C10.7718 45.6156 11.7637 45.7374 12.7954 46.1648C13.4384 46.4311 13.9944 46.8016 14.4636 47.2762C14.9239 47.7296 15.2886 48.2661 15.5575 48.8855C15.8327 49.49 15.9884 50.1501 16.0248 50.8659L24.0621 49.8594L22.8079 52.8873L15.7484 53.5631C15.6953 53.7338 15.6328 53.9269 15.561 54.1424C15.4805 54.3368 15.3969 54.5387 15.3102 54.748C15.0934 55.2714 14.7903 55.8553 14.4007 56.4997L20.2995 58.9431L19.1847 61.6346ZM6.75239 53.3317L12.0232 55.515C12.2131 55.2257 12.3911 54.9228 12.5573 54.6062C12.7147 54.2685 12.8615 53.9352 12.9978 53.6062C13.4561 52.4997 13.573 51.5409 13.3484 50.7296C13.1239 49.9183 12.5855 49.3362 11.7332 48.9832C10.8809 48.6301 10.0916 48.6536 9.36536 49.0535C8.63912 49.4534 8.05304 50.1916 7.6071 51.2682L6.75239 53.3317Z"
                        fill="#FFC400" />
                    <path
                        d="M31.1987 39.6422L19.0106 27.4541L21.1049 25.3598L26.5466 30.8015L26.1003 20.3643L28.6066 17.858L29.0014 28.8961L41.4127 29.4282L38.6318 32.2092L27.3363 31.5912L33.293 37.5479L31.1987 39.6422Z"
                        fill="#FFC400" />
                    <path
                        d="M56.8754 21.4773C55.9782 21.8489 55.0758 22.0388 54.1682 22.0468C53.2694 22.0337 52.43 21.8471 51.6502 21.4869C50.8703 21.1267 50.2011 20.5894 49.6423 19.8748L51.9615 18.1784C52.4857 18.7671 53.0868 19.14 53.765 19.2971C54.4432 19.4541 55.1561 19.3778 55.9037 19.0681C56.442 18.8451 56.8772 18.5423 57.2091 18.1595C57.5411 17.7768 57.7524 17.3564 57.843 16.8984C57.9485 16.4343 57.9053 15.9704 57.7133 15.5069C57.4779 14.9387 57.0735 14.5544 56.5 14.354C55.9352 14.1325 55.1715 14.1072 54.2088 14.2782L53.3046 14.4426C51.5771 14.7552 50.168 14.6732 49.0771 14.1965C48.0012 13.7137 47.2279 12.9041 46.7572 11.7677C46.4723 11.0799 46.3468 10.3961 46.3806 9.71646C46.4082 9.02182 46.5745 8.36606 46.8796 7.74919C47.1784 7.11737 47.6029 6.55615 48.153 6.06554C48.6968 5.55997 49.3426 5.15234 50.0902 4.84266C50.9425 4.48963 51.7926 4.32147 52.6403 4.33818C53.4881 4.3549 54.287 4.54954 55.037 4.92211C55.7807 5.27973 56.4214 5.81143 56.959 6.51721L54.6622 8.20433C54.1442 7.63056 53.5717 7.26333 52.9446 7.10267C52.3174 6.942 51.6749 6.99792 51.017 7.27044C50.5385 7.46864 50.1526 7.74235 49.8593 8.09157C49.5748 8.41965 49.3885 8.79462 49.3005 9.21648C49.2212 9.6172 49.2652 10.0194 49.4324 10.4231C49.6739 11.0063 50.0828 11.38 50.6588 11.5443C51.2349 11.7086 52.0149 11.7096 52.9988 11.5473L53.903 11.383C57.2382 10.8074 59.4044 11.7232 60.4016 14.1306C60.7051 14.8633 60.8448 15.6025 60.8209 16.3482C60.8057 17.0727 60.6368 17.7646 60.3142 18.4237C59.9854 19.0679 59.5297 19.6596 58.9472 20.1987C58.3734 20.7166 57.6828 21.1428 56.8754 21.4773Z"
                        fill="#FFC400" />
                    <circle cx="109.807" cy="151.638" r="3.73492" fill="#FFC400" />
                    <circle cx="29.1324" cy="136.698" r="3.73492" fill="#FFC400" />
                    <circle cx="148.65" cy="50.0478" r="3.73492" fill="#FFC400" />
                </svg>
            </div>
        </div>
    </header>
    <form id="registrationForm" action="{{ route('register') }}" method="post">
        @csrf
        <input type="hidden" name="plan_id" id="plan_id" value=""> <!-- Hidden field for selected plan ID -->
        <div class="bg-[linear-gradient(45deg,#FFC400,#E8B200)] py-[40px] md:px-[80px]">
            <div class="container mx-auto p-4 text-center">
                <h1
                    class="bn-headings leading-[60px] text-5xl font-[800] text-[#3A3A3A] mb-2 2xl:text-[88px] 2xl:leading-[90px] 2xl:font-extrabold CabinetGrotesk-800">
                    Sign Up
                </h1>
                <p class="bn-para text-lg text-[#3A3A3A] 2xl:text-[24px] 2xl:leading-[32.9px] 2xl:mt-6">
                    Free 7-Day Trial
                </p>
                <p class="bn-para text-sm text-[#3A3A3A] 2xl:text-[20px] 2xl:leading-[27.42px]">
                    (Cancel At Any Time By Replying "Unsubscribe" To The Messages)
                </p>

                <!-- Plan Selection -->
                <div class="flex flex-col md:flex-row justify-center gap-[20px] my-8 2xl:gap-[30px]">
                    @foreach ($plans as $plan)
                        <div
                            class="sf-pro-regular bg-white rounded-lg p-6 shadow-md mb-4 md:mb-0 md:w-1/4 md:text-left chk-para 2xl:p-12 2xl:w-[410px] 2xl:h-[281px]">
                            <h2 class="sf-pro-regular text-4xl font-bold text-[#3A3A3A] xl:leading-[71px] 2xl:text-[60px]">
                                ${{ number_format($plan->price, 2) }}
                            </h2>
                            <p
                                class="sf-pro-regular text-sm text-[#3A3A3A] xl:leading-[23px] 2xl:text-[20px] 2xl:mt-6 font-semibold">
                                @if ($plan->slug == 'basic-plan')
                                    One text a week<br />Can select up to 2 categories.
                                @elseif($plan->slug == 'standard-plan')
                                    Three texts a week<br />Can select up to 8 Categories.
                                @elseif($plan->slug == 'premium-plan')
                                    Text Daily<br />Select any categories
                                @endif
                            </p>
                            <button type="button"
                                class="bg-[#FFC400] text-[#3A3A3A] font-semibold py-2 px-4 rounded mt-4 w-full 2xl:mt-6 select-plan"
                                data-plan-id="{{ $plan->id }}"
                                data-max-categories="{{ $plan->slug == 'basic-plan' ? 2 : ($plan->slug == 'standard-plan' ? 8 : 'unlimited') }}">
                                Select
                            </button>
                        </div>
                    @endforeach
                </div>

                <!-- Category Selection -->
                <div>
                    <h1
                        class="bn-headings text-4xl text-[#3A3A3A] font-extrabold mt-9 mb-12 2xl:mb-14 2xl:text-[60px] 2xl:font-extrabold 2xl:leading-[90px] CabinetGrotesk-800">
                        "Select Daily Messages"
                    </h1>
                    <div
                        class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 2xl:grid-cols-5 gap-4 text-center inter text-[#3A3A3A]">
                        @foreach ($categories as $category)
                            <label class="flex items-center space-x-2">
                                <input type="checkbox" name="categories[]" value="{{ $category->id }}"
                                    class="form-checkbox h-5 w-5 text-gray-800 category-checkbox" disabled>
                                <span class="text-sm md:text-lg font-medium 2xl:text-[25px]">{{ $category->name }}</span>
                            </label>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="max-w-2xl w-[90%] md:w-full mx-6 md:mx-auto mt-[41px] sf-pro-regular font-normal">
                <div class="flex flex-col md:flex-row md:space-x-4 mb-4">
                    <div class="w-full md:w-1/2">
                        <label for="first_name" class="block text-lg font-medium mb-1">First Name</label>
                        <input type="text" name="first_name" id="firstName" placeholder="John"
                            class="w-full px-4 py-[10px] text-[#8D8D8D] rounded-lg focus:ring-2 focus:ring-[#8B89D9]"
                            required>
                    </div>
                    <div class="w-full md:w-1/2">
                        <label for="last_name" class="block text-lg font-medium mb-1">Last Name</label>
                        <input type="text" name="last_name" id="lastName" placeholder="Doe"
                            class="w-full px-4 py-[10px] text-[#8D8D8D] rounded-lg focus:ring-2 focus:ring-[#8B89D9]"
                            required>
                    </div>
                </div>
                <div class="flex flex-col md:flex-row md:space-x-4 mb-4">
                    <div class="w-full md:w-1/2">
                        <label for="email" class="block text-lg font-medium mb-1">Email Address</label>
                        <input type="email" name="email" id="email" placeholder="Name@gmail.com"
                            class="w-full px-4 py-[10px] text-[#8D8D8D] rounded-lg focus:ring-2 focus:ring-[#8B89D9]"
                            required>
                    </div>
                    <div class="w-full md:w-1/2">
                        <label for="phone" class="block text-lg font-medium mb-1">Phone Number</label>
                        <div class="flex items-center space-x-2">
                            <div class="flex items-center border border-gray-300 rounded-lg overflow-hidden">
                                {{-- <select id="countryCode" class="bg-white px-3 py-2 text-sm border-r">
                                    @foreach ($formattedCountries as $country)
                                        <option value="{{ $country['code'] }}" data-flag="{{ $country['flag'] }}">
                                            {{ $country['flag'] }} {{ $country['code'] }}
                                        </option>
                                    @endforeach
                                </select> --}}

                                <select id="countryCode" name="country_code" class="bg-white py-2 text-sm border-r"></select>
                            </div>
                            <input id="phone" name="phone_no" type="text" placeholder="1234567890"
                                class="flex-1 px-3 py-2 text-[#747474] bg-white text-sm rounded-lg focus:ring-2 focus:ring-[#8B89D9]">
                        </div>
                    </div>
                </div>
                <div class="flex flex-col md:flex-row md:space-x-4 mb-4">
                    <div class="w-full md:w-1/2">
                        <label for="password" class="block text-lg font-medium mb-1">Password</label>
                        <input type="password" name="password" id="password" placeholder="********"
                            class="w-full px-4 py-[10px] text-[#8D8D8D] rounded-lg focus:ring-2 focus:ring-[#8B89D9]"
                            required>
                    </div>
                    <div class="w-full md:w-1/2">
                        <label for="confirm_password" class="block text-lg font-medium mb-1">Confirm Password</label>
                        <input type="password" name="password_confirmation" id="confirmPassword" placeholder="********"
                            class="w-full px-4 py-[10px] text-[#8D8D8D] rounded-lg focus:ring-2 focus:ring-[#8B89D9]"
                            required>
                    </div>
                </div>
                <div class="flex justify-center">
                    <button type="button"
                        class="bg-gray-800 text-white py-2 px-4 font-bold rounded-lg w-full md:w-1/2 lg:w-1/3 mx-auto mt-3 2xl:text-xl 2xl:py-3">
                        Sign Up
                    </button>
                </div>
            </div>
        </div>
    </form>

    <div class="bg-white">
        <div class="flex flex-col items-center justify-center mt-[60px] mb-[20px]">
            <h1
                class="cabinet-grotesk font-extrabold text-center text-3xl md:text-4xl text-[#3A3A3A] 2xl:text-[50px] 2xl:font-extrabold CabinetGrotesk-800">
                Our Happy Customers
            </h1>
            <span
                class="sf-pro-regular text-lg font-[400] md:text-xl md:mt-1 text-[#3A3A3A] 2xl:text-[25px] 2xl:font-medium 2xl:mt-4">Verified
                by Google</span>
        </div>
        <!-- cards -->
        <div class="bg-white manrope">
            <div class="slider h-25 overflow-hidden relative w-auto">
                <div class="slide-track flex w-[calc(300px*14)]">

                    <div
                        class="carousel-focus flex items-center flex-col relative bg-[#FFC400] mx-3 2xl:pb-10 my-10 px-6 py-3 rounded-3xl shadow-xl max-w-[444px]">
                        <div class="bg-[linear-gradient(45deg,#FFC400,#E8B200)] rounded-full p-2 shadow-lg -mt-9">
                            <svg width="34" height="34" viewBox="0 0 64 64" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M29.8601 7.08586C30.5337 5.01291 33.4663 5.01292 34.1399 7.08587L38.567 20.7113C38.8683 21.6383 39.7322 22.266 40.7069 22.266H55.0335C57.2131 22.266 58.1194 25.0551 56.356 26.3363L44.7656 34.7572C43.977 35.3302 43.647 36.3457 43.9482 37.2728L48.3754 50.8982C49.0489 52.9711 46.6763 54.6949 44.913 53.4137L33.3225 44.9928C32.5339 44.4198 31.4661 44.4198 30.6775 44.9928L19.087 53.4137C17.3237 54.6949 14.9511 52.9711 15.6246 50.8982L20.0518 37.2728C20.353 36.3457 20.023 35.3302 19.2344 34.7572L7.64399 26.3363C5.88063 25.0551 6.78688 22.266 8.96651 22.266H23.2931C24.2678 22.266 25.1317 21.6383 25.433 20.7113L29.8601 7.08586Z"
                                    fill="#3A3A3A" />
                            </svg>
                        </div>

                        <div class="text-center mt-4">
                            <span class="text-[#3A3A3A] font-bold text-xl mb-3 2xl:text-2xl 2xl:font-extrabold">Garry
                                Jerde</span>
                            <p class="text-[#3A3A3A] text-[10px]">
                                Customer Integration Representative
                            </p>
                            <p class="mt-6 text-[#3A3A3A] text-center text-xs 2xl:font-medium">
                                Dolorem laborum necessitatibus quas quia. Quas voluptas optio
                                asperiores officiis autem minima et delectus. Quasi sunt
                                occaecati aut enim itaque. Incidunt aut nesciunt.
                            </p>
                        </div>
                    </div>

                    <!--check 2 -->

                    <div
                        class="carousel-focus flex items-center flex-col relative bg-[#FFC400] mx-3 my-10 px-4 py-3 rounded-3xl shadow-xl max-w-[444px]">
                        <div class="bg-[linear-gradient(45deg,#FFC400,#E8B200)] rounded-full p-2 shadow-lg -mt-9">
                            <svg width="34" height="34" viewBox="0 0 64 64" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M29.8601 7.08586C30.5337 5.01291 33.4663 5.01292 34.1399 7.08587L38.567 20.7113C38.8683 21.6383 39.7322 22.266 40.7069 22.266H55.0335C57.2131 22.266 58.1194 25.0551 56.356 26.3363L44.7656 34.7572C43.977 35.3302 43.647 36.3457 43.9482 37.2728L48.3754 50.8982C49.0489 52.9711 46.6763 54.6949 44.913 53.4137L33.3225 44.9928C32.5339 44.4198 31.4661 44.4198 30.6775 44.9928L19.087 53.4137C17.3237 54.6949 14.9511 52.9711 15.6246 50.8982L20.0518 37.2728C20.353 36.3457 20.023 35.3302 19.2344 34.7572L7.64399 26.3363C5.88063 25.0551 6.78688 22.266 8.96651 22.266H23.2931C24.2678 22.266 25.1317 21.6383 25.433 20.7113L29.8601 7.08586Z"
                                    fill="#3A3A3A" />
                            </svg>
                        </div>

                        <div class="text-center mt-4">
                            <span class="text-[#3A3A3A] font-bold text-xl mb-3 2xl:text-2xl 2xl:font-extrabold">John
                                Doe</span>
                            <p class="text-[#3A3A3A] text-[10px]">Sales Manager</p>
                            <p class="mt-6 text-[#3A3A3A] text-center text-xs 2xl:font-medium">
                                Consectetur adipiscing elit. Dolorum magnam earum aut libero
                                quaerat. Ipsam necessitatibus error asperiores ab amet.
                                Cupiditate molestias maiores.
                            </p>
                        </div>
                    </div>

                    <!--check 3 -->
                    <div
                        class="carousel-focus flex items-center flex-col relative bg-[#FFC400] mx-3 my-10 px-4 py-3 rounded-3xl shadow-xl max-w-[444px]">
                        <div class="bg-[linear-gradient(45deg,#FFC400,#E8B200)] rounded-full p-2 shadow-lg -mt-9">
                            <svg width="34" height="34" viewBox="0 0 64 64" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M29.8601 7.08586C30.5337 5.01291 33.4663 5.01292 34.1399 7.08587L38.567 20.7113C38.8683 21.6383 39.7322 22.266 40.7069 22.266H55.0335C57.2131 22.266 58.1194 25.0551 56.356 26.3363L44.7656 34.7572C43.977 35.3302 43.647 36.3457 43.9482 37.2728L48.3754 50.8982C49.0489 52.9711 46.6763 54.6949 44.913 53.4137L33.3225 44.9928C32.5339 44.4198 31.4661 44.4198 30.6775 44.9928L19.087 53.4137C17.3237 54.6949 14.9511 52.9711 15.6246 50.8982L20.0518 37.2728C20.353 36.3457 20.023 35.3302 19.2344 34.7572L7.64399 26.3363C5.88063 25.0551 6.78688 22.266 8.96651 22.266H23.2931C24.2678 22.266 25.1317 21.6383 25.433 20.7113L29.8601 7.08586Z"
                                    fill="#3A3A3A" />
                            </svg>
                        </div>

                        <div class="text-center mt-4">
                            <span class="text-[#3A3A3A] font-bold text-xl mb-3 2xl:text-2xl 2xl:font-extrabold">Jane
                                Smith</span>
                            <p class="text-[#3A3A3A] text-[10px]">Marketing Specialist</p>
                            <p class="mt-6 text-[#3A3A3A] text-center text-xs 2xl:font-medium">
                                Voluptatem molestias dicta magnam ut. Nostrum asperiores
                                repellendus ullam amet non. Ratione velit dolore officiis.
                            </p>
                        </div>
                    </div>

                    <!--check 4 -->
                    <div
                        class="carousel-focus flex items-center flex-col relative bg-[#FFC400] mx-3 my-10 px-4 py-3 rounded-3xl shadow-xl max-w-[444px]">
                        <div class="bg-[linear-gradient(45deg,#FFC400,#E8B200)] rounded-full p-2 shadow-lg -mt-9">
                            <svg width="34" height="34" viewBox="0 0 64 64" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M29.8601 7.08586C30.5337 5.01291 33.4663 5.01292 34.1399 7.08587L38.567 20.7113C38.8683 21.6383 39.7322 22.266 40.7069 22.266H55.0335C57.2131 22.266 58.1194 25.0551 56.356 26.3363L44.7656 34.7572C43.977 35.3302 43.647 36.3457 43.9482 37.2728L48.3754 50.8982C49.0489 52.9711 46.6763 54.6949 44.913 53.4137L33.3225 44.9928C32.5339 44.4198 31.4661 44.4198 30.6775 44.9928L19.087 53.4137C17.3237 54.6949 14.9511 52.9711 15.6246 50.8982L20.0518 37.2728C20.353 36.3457 20.023 35.3302 19.2344 34.7572L7.64399 26.3363C5.88063 25.0551 6.78688 22.266 8.96651 22.266H23.2931C24.2678 22.266 25.1317 21.6383 25.433 20.7113L29.8601 7.08586Z"
                                    fill="#3A3A3A" />
                            </svg>
                        </div>

                        <div class="text-center mt-4">
                            <span class="text-[#3A3A3A] font-bold text-xl mb-3 2xl:text-2xl 2xl:font-extrabold">Alice
                                Johnson</span>
                            <p class="text-[#3A3A3A] text-[10px]">Product Designer</p>
                            <p class="mt-6 text-[#3A3A3A] text-center text-xs 2xl:font-medium">
                                Architecto doloribus voluptatem vel consequatur. Ut atque
                                vitae natus amet ducimus. Quibusdam est quia voluptas.
                            </p>
                        </div>
                    </div>

                    <!--check 5 -->
                    <div
                        class="carousel-focus flex items-center flex-col relative bg-[#FFC400] mx-3 my-10 px-4 py-3 rounded-3xl shadow-xl max-w-[444px]">
                        <div class="bg-[linear-gradient(45deg,#FFC400,#E8B200)] rounded-full p-2 shadow-lg -mt-9">
                            <svg width="34" height="34" viewBox="0 0 64 64" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M29.8601 7.08586C30.5337 5.01291 33.4663 5.01292 34.1399 7.08587L38.567 20.7113C38.8683 21.6383 39.7322 22.266 40.7069 22.266H55.0335C57.2131 22.266 58.1194 25.0551 56.356 26.3363L44.7656 34.7572C43.977 35.3302 43.647 36.3457 43.9482 37.2728L48.3754 50.8982C49.0489 52.9711 46.6763 54.6949 44.913 53.4137L33.3225 44.9928C32.5339 44.4198 31.4661 44.4198 30.6775 44.9928L19.087 53.4137C17.3237 54.6949 14.9511 52.9711 15.6246 50.8982L20.0518 37.2728C20.353 36.3457 20.023 35.3302 19.2344 34.7572L7.64399 26.3363C5.88063 25.0551 6.78688 22.266 8.96651 22.266H23.2931C24.2678 22.266 25.1317 21.6383 25.433 20.7113L29.8601 7.08586Z"
                                    fill="#3A3A3A" />
                            </svg>
                        </div>

                        <div class="text-center mt-4">
                            <span class="text-[#3A3A3A] font-bold text-xl mb-3 2xl:text-2xl 2xl:font-extrabold">David
                                Brown</span>
                            <p class="text-[#3A3A3A] text-[10px]">Software Engineer</p>
                            <p class="mt-6 text-[#3A3A3A] text-center text-xs 2xl:font-medium">
                                Deserunt error necessitatibus et iusto. Quas maiores quos nemo
                                omnis. Animi reiciendis quae natus.
                            </p>
                        </div>
                    </div>
                    <!-- Duplicate slides for seamless looping -->
                    <!--check 1 -->
                    <div
                        class="carousel-focus flex items-center flex-col relative bg-[#FFC400] mx-3 my-10 px-4 py-3 rounded-3xl shadow-xl max-w-[444px]">
                        <div class="bg-[linear-gradient(45deg,#FFC400,#E8B200)] rounded-full p-2 shadow-lg -mt-9">
                            <svg width="34" height="34" viewBox="0 0 64 64" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M29.8601 7.08586C30.5337 5.01291 33.4663 5.01292 34.1399 7.08587L38.567 20.7113C38.8683 21.6383 39.7322 22.266 40.7069 22.266H55.0335C57.2131 22.266 58.1194 25.0551 56.356 26.3363L44.7656 34.7572C43.977 35.3302 43.647 36.3457 43.9482 37.2728L48.3754 50.8982C49.0489 52.9711 46.6763 54.6949 44.913 53.4137L33.3225 44.9928C32.5339 44.4198 31.4661 44.4198 30.6775 44.9928L19.087 53.4137C17.3237 54.6949 14.9511 52.9711 15.6246 50.8982L20.0518 37.2728C20.353 36.3457 20.023 35.3302 19.2344 34.7572L7.64399 26.3363C5.88063 25.0551 6.78688 22.266 8.96651 22.266H23.2931C24.2678 22.266 25.1317 21.6383 25.433 20.7113L29.8601 7.08586Z"
                                    fill="#3A3A3A" />
                            </svg>
                        </div>

                        <div class="text-center mt-4">
                            <span class="text-[#3A3A3A] font-bold text-xl mb-3 2xl:text-2xl 2xl:font-extrabold">Garry
                                Jerde</span>
                            <p class="text-[#3A3A3A] text-[10px]">
                                Customer Integration Representative
                            </p>
                            <p class="mt-6 text-[#3A3A3A] text-center text-xs 2xl:font-medium">
                                Dolorem laborum necessitatibus quas quia. Quas voluptas optio
                                asperiores officiis autem minima et delectus. Quasi sunt
                                occaecati aut enim itaque. Incidunt aut nesciunt.
                            </p>
                        </div>
                    </div>

                    <!--check 2 -->

                    <div
                        class="carousel-focus flex items-center flex-col relative bg-[#FFC400] mx-3 my-10 px-4 py-3 rounded-3xl shadow-xl max-w-[444px]">
                        <div class="bg-[linear-gradient(45deg,#FFC400,#E8B200)] rounded-full p-2 shadow-lg -mt-9">
                            <svg width="34" height="34" viewBox="0 0 64 64" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M29.8601 7.08586C30.5337 5.01291 33.4663 5.01292 34.1399 7.08587L38.567 20.7113C38.8683 21.6383 39.7322 22.266 40.7069 22.266H55.0335C57.2131 22.266 58.1194 25.0551 56.356 26.3363L44.7656 34.7572C43.977 35.3302 43.647 36.3457 43.9482 37.2728L48.3754 50.8982C49.0489 52.9711 46.6763 54.6949 44.913 53.4137L33.3225 44.9928C32.5339 44.4198 31.4661 44.4198 30.6775 44.9928L19.087 53.4137C17.3237 54.6949 14.9511 52.9711 15.6246 50.8982L20.0518 37.2728C20.353 36.3457 20.023 35.3302 19.2344 34.7572L7.64399 26.3363C5.88063 25.0551 6.78688 22.266 8.96651 22.266H23.2931C24.2678 22.266 25.1317 21.6383 25.433 20.7113L29.8601 7.08586Z"
                                    fill="#3A3A3A" />
                            </svg>
                        </div>

                        <div class="text-center mt-4">
                            <span class="text-[#3A3A3A] font-bold text-xl mb-3 2xl:text-2xl 2xl:font-extrabold">John
                                Doe</span>
                            <p class="text-[#3A3A3A] text-[10px]">Sales Manager</p>
                            <p class="mt-6 text-[#3A3A3A] text-center text-xs 2xl:font-medium">
                                Consectetur adipiscing elit. Dolorum magnam earum aut libero
                                quaerat. Ipsam necessitatibus error asperiores ab amet.
                                Cupiditate molestias maiores.
                            </p>
                        </div>
                    </div>

                    <!--check 3 -->
                    <div
                        class="carousel-focus flex items-center flex-col relative bg-[#FFC400] mx-3 my-10 px-4 py-3 rounded-3xl shadow-xl max-w-[444px]">
                        <div class="bg-[linear-gradient(45deg,#FFC400,#E8B200)] rounded-full p-2 shadow-lg -mt-9">
                            <svg width="34" height="34" viewBox="0 0 64 64" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M29.8601 7.08586C30.5337 5.01291 33.4663 5.01292 34.1399 7.08587L38.567 20.7113C38.8683 21.6383 39.7322 22.266 40.7069 22.266H55.0335C57.2131 22.266 58.1194 25.0551 56.356 26.3363L44.7656 34.7572C43.977 35.3302 43.647 36.3457 43.9482 37.2728L48.3754 50.8982C49.0489 52.9711 46.6763 54.6949 44.913 53.4137L33.3225 44.9928C32.5339 44.4198 31.4661 44.4198 30.6775 44.9928L19.087 53.4137C17.3237 54.6949 14.9511 52.9711 15.6246 50.8982L20.0518 37.2728C20.353 36.3457 20.023 35.3302 19.2344 34.7572L7.64399 26.3363C5.88063 25.0551 6.78688 22.266 8.96651 22.266H23.2931C24.2678 22.266 25.1317 21.6383 25.433 20.7113L29.8601 7.08586Z"
                                    fill="#3A3A3A" />
                            </svg>
                        </div>

                        <div class="text-center mt-4">
                            <span class="text-[#3A3A3A] font-bold text-xl mb-3 2xl:text-2xl 2xl:font-extrabold">Jane
                                Smith</span>
                            <p class="text-[#3A3A3A] text-[10px]">Marketing Specialist</p>
                            <p class="mt-6 text-[#3A3A3A] text-center text-xs 2xl:font-medium">
                                Voluptatem molestias dicta magnam ut. Nostrum asperiores
                                repellendus ullam amet non. Ratione velit dolore officiis.
                            </p>
                        </div>
                    </div>

                    <!--check 4 -->
                    <div
                        class="carousel-focus flex items-center flex-col relative bg-[#FFC400] mx-3 my-10 px-4 py-3 rounded-3xl shadow-xl max-w-[444px]">
                        <div class="bg-[linear-gradient(45deg,#FFC400,#E8B200)] rounded-full p-2 shadow-lg -mt-9">
                            <svg width="34" height="34" viewBox="0 0 64 64" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M29.8601 7.08586C30.5337 5.01291 33.4663 5.01292 34.1399 7.08587L38.567 20.7113C38.8683 21.6383 39.7322 22.266 40.7069 22.266H55.0335C57.2131 22.266 58.1194 25.0551 56.356 26.3363L44.7656 34.7572C43.977 35.3302 43.647 36.3457 43.9482 37.2728L48.3754 50.8982C49.0489 52.9711 46.6763 54.6949 44.913 53.4137L33.3225 44.9928C32.5339 44.4198 31.4661 44.4198 30.6775 44.9928L19.087 53.4137C17.3237 54.6949 14.9511 52.9711 15.6246 50.8982L20.0518 37.2728C20.353 36.3457 20.023 35.3302 19.2344 34.7572L7.64399 26.3363C5.88063 25.0551 6.78688 22.266 8.96651 22.266H23.2931C24.2678 22.266 25.1317 21.6383 25.433 20.7113L29.8601 7.08586Z"
                                    fill="#3A3A3A" />
                            </svg>
                        </div>

                        <div class="text-center mt-4">
                            <span class="text-[#3A3A3A] font-bold text-xl mb-3 2xl:text-2xl 2xl:font-extrabold">Alice
                                Johnson</span>
                            <p class="text-[#3A3A3A] text-[10px]">Product Designer</p>
                            <p class="mt-6 text-[#3A3A3A] text-center text-xs 2xl:font-medium">
                                Architecto doloribus voluptatem vel consequatur. Ut atque
                                vitae natus amet ducimus. Quibusdam est quia voluptas.
                            </p>
                        </div>
                    </div>

                    <!--check 5 -->
                    <div
                        class="carousel-focus flex items-center flex-col relative bg-[#FFC400] mx-3 my-10 px-4 py-3 rounded-3xl shadow-xl max-w-[444px]">
                        <div class="bg-[linear-gradient(45deg,#FFC400,#E8B200)] rounded-full p-2 shadow-lg -mt-9">
                            <svg width="34" height="34" viewBox="0 0 64 64" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M29.8601 7.08586C30.5337 5.01291 33.4663 5.01292 34.1399 7.08587L38.567 20.7113C38.8683 21.6383 39.7322 22.266 40.7069 22.266H55.0335C57.2131 22.266 58.1194 25.0551 56.356 26.3363L44.7656 34.7572C43.977 35.3302 43.647 36.3457 43.9482 37.2728L48.3754 50.8982C49.0489 52.9711 46.6763 54.6949 44.913 53.4137L33.3225 44.9928C32.5339 44.4198 31.4661 44.4198 30.6775 44.9928L19.087 53.4137C17.3237 54.6949 14.9511 52.9711 15.6246 50.8982L20.0518 37.2728C20.353 36.3457 20.023 35.3302 19.2344 34.7572L7.64399 26.3363C5.88063 25.0551 6.78688 22.266 8.96651 22.266H23.2931C24.2678 22.266 25.1317 21.6383 25.433 20.7113L29.8601 7.08586Z"
                                    fill="#3A3A3A" />
                            </svg>
                        </div>

                        <div class="text-center mt-4">
                            <span class="text-[#3A3A3A] font-bold text-xl mb-3 2xl:text-2xl 2xl:font-extrabold">David
                                Brown</span>
                            <p class="text-[#3A3A3A] text-[10px]">Software Engineer</p>
                            <p class="mt-6 text-[#3A3A3A] text-center text-xs 2xl:font-medium">
                                Deserunt error necessitatibus et iusto. Quas maiores quos nemo
                                omnis. Animi reiciendis quae natus.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="FAQ" class="bg-white text-[#3A3A3A]">
        <div class="container mx-auto px-4 py-8 w-full md:w-3/5">
            <h1 class="cabinet-grotesk text-3xl text-[#3A3A3A] font-medium text-center mb-8 2xl:text-[50px]">
                Frequently Asked Questions
            </h1>
            <div class="space-y-4">
                <div class="faq-item bn-para">
                    <div class="flex justify-between items-center bg-[#FAFAFA] p-4 rounded-full cursor-pointer">
                        <span class="2xl:text-[20px] text-[14px] md:text-[16px]">Why text messages?</span>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="answer bg-[#FAFAFA] p-4 rounded-xl mt-2">
                        <p class="text-[14px] md:text-[16px]">
                            "Take a moment each day for peace and reflection. It can ease
                            your mind, reduce stress, and help you focus on what truly
                            matters."
                        </p>
                    </div>
                </div>
                <div class="faq-item bn-para">
                    <div class="flex justify-between items-center bg-[#FAFAFA] p-4 rounded-full cursor-pointer">
                        <span class="2xl:text-[20px] text-[14px] md:text-[16px]">Why should I use Yours Truly Texts?</span>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="answer bg-[#FAFAFA] p-4 rounded-xl mt-2">
                        <p class="text-[14px] md:text-[16px]">
                            Yours Truly Texts offers reliable and secure messaging services
                            tailored to your needs.
                        </p>
                    </div>
                </div>
                <div class="faq-item bn-para">
                    <div class="flex justify-between items-center bg-[#FAFAFA] p-4 rounded-full cursor-pointer">
                        <span class="2xl:text-[20px] text-[14px] md:text-[16px]">Will you have access to my full credit
                            card information?</span>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="answer bg-[#FAFAFA] p-4 rounded-xl mt-2">
                        <p class="text-[14px] md:text-[16px]">
                            "No. All payments are securely processed via Stripe.com (which
                            handles payments for companies such as Lyft, Zoom, Instacart,
                            and more). Our Stripe records only contain limited information
                            (e.g. last four digits, zip, etc.), but we can’t see your full
                            credit card number or information."
                        </p>
                    </div>
                </div>
                <div class="faq-item bn-para">
                    <div class="flex justify-between items-center bg-[#FAFAFA] p-4 rounded-full cursor-pointer">
                        <span class="text-[14px] md:text-[16px] 2xl:text-[20px]">How can I update my subscription and
                            billing
                            informations?</span>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="answer bg-[#FAFAFA] p-4 rounded-xl mt-2">
                        <p class="text-[14px] md:text-[16px]">
                            "You can securely manage your subscription options, billing
                            information and categorie selection in the member login portal.
                            "
                        </p>
                    </div>
                </div>
                <div class="faq-item bn-para">
                    <div class="flex justify-between items-center bg-[#FAFAFA] p-4 rounded-full cursor-pointer">
                        <span class="text-[14px] md:text-[16px] 2xl:text-[20px]">How do I cancel my subscription?</span>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="answer bg-[#FAFAFA] p-4 rounded-xl mt-2">
                        <p class="text-[14px] md:text-[16px]">
                            "Simply text back ‘unsubscribe’ in reply to any text, SMS, or
                            MMS to cancel your subscription."
                        </p>
                    </div>
                </div>
                <div class="faq-item bn-para">
                    <div class="flex justify-between items-center bg-[#FAFAFA] p-4 rounded-full cursor-pointer">
                        <span class="text-[14px] md:text-[16px] 2xl:text-[20px]">How can I share questions or feedback for
                            Yours Truly
                            Texts?</span>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="answer bg-[#FAFAFA] p-4 rounded-xl mt-2">
                        <p class="text-[14px] md:text-[16px]">
                            <!-- You can share your questions or feedback through our contact
                                                                form or customer support email. -->
                            "Please email us"
                        </p>
                    </div>
                </div>
            </div>
            <div class="text-center mt-8">
                <button
                    class="inter border-[2px] border-gray-100 text-gray-800 py-2 px-4 rounded-full text-[14px] md:text-[16px]">
                    See more
                </button>
            </div>
        </div>
        <!-- ============= -->
        <footer class="bg-white py-8 mt-16 md:px-[100px] bn-para text-[#3A3A3A]">
            <div class="container mx-auto px-4">
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <div class="flex flex-row md:flex-col space-x-6 md:space-x-2 mb-4 md:mb-0">
                        <div class="ml-6 mb-4">
                            <svg width="52" height="52" viewBox="0 0 88 87" fill="none"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <mask id="mask0_8007_2079" style="mask-type: alpha" maskUnits="userSpaceOnUse" x="0"
                                    y="0" width="88" height="87">
                                    <rect width="87.4065" height="87" fill="url(#pattern0_8007_2079)" />
                                </mask>
                                <g mask="url(#mask0_8007_2079)">
                                    <rect x="0.202316" width="87" height="87"
                                        fill="url(#paint0_linear_8007_2079)" />
                                </g>
                                <defs>
                                    <pattern id="pattern0_8007_2079" patternContentUnits="objectBoundingBox"
                                        width="1" height="1">
                                        <use xlink:href="#image0_8007_2079"
                                            transform="matrix(0.00070155 0 0 0.000704829 -0.548837 -0.456075)" />
                                    </pattern>
                                    <linearGradient id="paint0_linear_8007_2079" x1="43.7023" y1="0"
                                        x2="43.7023" y2="87" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#FFC400" />
                                        <stop offset="1" stop-color="#E8B200" />
                                    </linearGradient>
                                    <image id="image0_8007_2079" width="3000" height="2640"
                                        xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAC7gAAApQCAYAAAAtdWciAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAA6qJJREFUeNrs2jERAAAMhLDe+xddGwyJBGZ2AAAAAAAAAAAAAAAQMAkAAAAAAAAAAAAAACgwuAMAAAAAAAAAAAAAkGBwBwAAAAAAAAAAAAAgweAOAAAAAAAAAAAAAECCwR0AAAAAAAAAAAAAgASDOwAAAAAAAAAAAAAACQZ3AAAAAAAAAAAAAAASDO4AAAAAAAAAAAAAACQY3AEAAAAAAAAAAAAASDC4AwAAAAAAAAAAAACQYHAHAAAAAAAAAAAAACDB4A4AAAAAAAAAAAAAQILBHQAAAAAAAAAAAACABIM7AAAAAAAAAAAAAAAJBncAAAAAAAAAAAAAABIM7gAAAAAAAAAAAAAAJBjcAQAAAAAAAAAAAABIMLgDAAAAAAAAAAAAAJBgcAcAAAAAAAAAAAAAIMHgDgAAAAAAAAAAAABAgsEdAAAAAAAAAAAAAIAEgzsAAAAAAAAAAAAAAAkGdwAAAAAAAAAAAAAAEgzuAAAAAAAAAAAAAAAkGNwBAAAAAAAAAAAAAEgwuAMAAAAAAAAAAAAAkGBwBwAAAAAAAAAAAAAgweAOAAAAAAAAAAAAAECCwR0AAAAAAAAAAAAAgASDOwAAAAAAAAAAAAAACQZ3AAAAAAAAAAAAAAASDO4AAAAAAAAAAAAAACQY3AEAAAAAAAAAAAAASDC4AwAAAAAAAAAAAACQYHAHAAAAAAAAAAAAACDB4A4AAAAAAAAAAAAAQILBHQAAAAAAAAAAAACABIM7AAAAAAAAAAAAAAAJBncAAAAAAAAAAAAAABIM7gAAAAAAAAAAAAAAJBjcAQAAAAAAAAAAAABIMLgDAAAAAAAAAAAAAJBgcAcAAAAAAAAAAAAAIMHgDgAAAAAAAAAAAABAgsEdAAAAAAAAAAAAAIAEgzsAAAAAAAAAAAAAAAkGdwAAAAAAAAAAAAAAEgzuAAAAAAAAAAAAAAAkGNwBAAAAAAAAAAAAAEgwuAMAAAAAAAAAAAAAkGBwBwAAAAAAAAAAAAAgweAOAAAAAAAAAAAAAECCwR0AAAAAAAAAAAAAgASDOwAAAAAAAAAAAAAACQZ3AAAAAAAAAAAAAAASDO4AAAAAAAAAAAAAACQY3AEAAAAAAAAAAAAASDC4AwAAAAAAAAAAAACQYHAHAAAAAAAAAAAAACDB4A4AAAAAAAAAAAAAQILBHQAAAAAAAAAAAACABIM7AAAAAAAAAAAAAAAJBncAAAAAAAAAAAAAABIM7gAAAAAAAAAAAAAAJBjcAQAAAAAAAAAAAABIMLgDAAAAAAAAAAAAAJBgcAcAAAAAAAAAAAAAIMHgDgAAAAAAAAAAAABAgsEdAAAAAAAAAAAAAIAEgzsAAAAAAAAAAAAAAAkGdwAAAAAAAAAAAAAAEgzuAAAAAAAAAAAAAAAkGNwBAAAAAAAAAAAAAEgwuAMAAAAAAAAAAAAAkGBwBwAAAAAAAAAAAAAgweAOAAAAAAAAAAAAAECCwR0AAAAAAAAAAAAAgASDOwAAAAAAAAAAAAAACQZ3AAAAAAAAAAAAAAASDO4AAAAAAAAAAAAAACQY3AEAAAAAAAAAAAAASDC4AwAAAAAAAAAAAACQYHAHAAAAAAAAAAAAACDB4A4AAAAAAAAAAAAAQILBHQAAAAAAAAAAAACABIM7AAAAAAAAAAAAAAAJBncAAAAAAAAAAAAAABIM7gAAAAAAAAAAAAAAJBjcAQAAAAAAAAAAAABIMLgDAAAAAAAAAAAAAJBgcAcAAAAAAAAAAAAAIMHgDgAAAAAAAAAAAABAgsEdAAAAAAAAAAAAAIAEgzsAAAAAAAAAAAAAAAkGdwAAAAAAAAAAAAAAEgzuAAAAAAAAAAAAAAAkGNwBAAAAAAAAAAAAAEgwuAMAAAAAAAAAAAAAkGBwBwAAAAAAAAAAAAAgweAOAAAAAAAAAAAAAECCwR0AAAAAAAAAAAAAgASDOwAAAAAAAAAAAAAACQZ3AAAAAAAAAAAAAAASDO4AAAAAAAAAAAAAACQY3AEAAAAAAAAAAAAASDC4AwAAAAAAAAAAAACQYHAHAAAAAAAAAAAAACDB4A4AAAAAAAAAAAAAQILBHQAAAAAAAAAAAACABIM7AAAAAAAAAAAAAAAJBncAAAAAAAAAAAAAABIM7gAAAAAAAAAAAAAAJBjcAQAAAAAAAAAAAABIMLgDAAAAAAAAAAAAAJBgcAcAAAAAAAAAAAAAIMHgDgAAAAAAAAAAAABAgsEdAAAAAAAAAAAAAIAEgzsAAAAAAAAAAAAAAAkGdwAAAAAAAAAAAAAAEgzuAAAAAAAAAAAAAAAkGNwBAAAAAAAAAAAAAEgwuAMAAAAAAAAAAAAAkGBwBwAAAAAAAAAAAAAgweAOAAAAAAAAAAAAAECCwR0AAAAAAAAAAAAAgASDOwAAAAAAAAAAAAAACQZ3AAAAAAAAAAAAAAASDO4AAAAAAAAAAAAAACQY3AEAAAAAAAAAAAAASDC4AwAAAAAAAAAAAACQYHAHAAAAAAAAAAAAACDB4A4AAAAAAAAAAAAAQILBHQAAAAAAAAAAAACABIM7AAAAAAAAAAAAAAAJBncAAAAAAAAAAAAAABIM7gAAAAAAAAAAAAAAJBjcAQAAAAAAAAAAAABIMLgDAAAAAAAAAAAAAJBgcAcAAAAAAAAAAAAAIMHgDgAAAAAAAAAAAABAgsEdAAAAAAAAAAAAAIAEgzsAAAAAAAAAAAAAAAkGdwAAAAAAAAAAAAAAEgzuAAAAAAAAAAAAAAAkGNwBAAAAAAAAAAAAAEgwuAMAAAAAAAAAAAAAkGBwBwAAAAAAAAAAAAAgweAOAAAAAAAAAAAAAECCwR0AAAAAAAAAAAAAgASDOwAAAAAAAAAAAAAACQZ3AAAAAAAAAAAAAAASDO4AAAAAAAAAAAAAACQY3AEAAAAAAAAAAAAASDC4AwAAAAAAAAAAAACQYHAHAAAAAAAAAAAAACDB4A4AAAAAAAAAAAAAQILBHQAAAAAAAAAAAACABIM7AAAAAAAAAAAAAAAJBncAAAAAAAAAAAAAABIM7gAAAAAAAAAAAAAAJBjcAQAAAAAAAAAAAABIMLgDAAAAAAAAAAAAAJBgcAcAAAAAAAAAAAAAIMHgDgAAAAAAAAAAAABAgsEdAAAAAAAAAAAAAIAEgzsAAAAAAAAAAAAAAAkGdwAAAAAAAAAAAAAAEgzuAAAAAAAAAAAAAAAkGNwBAAAAAAAAAAAAAEgwuAMAAAAAAAAAAAAAkGBwBwAAAAAAAAAAAAAgweAOAAAAAAAAAAAAAECCwR0AAAAAAAAAAAAAgASDOwAAAAAAAAAAAAAACQZ3AAAAAAAAAAAAAAASDO4AAAAAAAAAAAAAACQY3AEAAAAAAAAAAAAASDC4AwAAAAAAAAAAAACQYHAHAAAAAAAAAAAAACDB4A4AAAAAAAAAAAAAQILBHQAAAAAAAAAAAACABIM7AAAAAAAAAAAAAAAJBncAAAAAAAAAAAAAABIM7gAAAAAAAAAAAAAAJBjcAQAAAAAAAAAAAABIMLgDAAAAAAAAAAAAAJBgcAcAAAAAAAAAAAAAIMHgDgAAAAAAAAAAAABAgsEdAAAAAAAAAAAAAIAEgzsAAAAAAAAAAAAAAAkGdwAAAAAAAAAAAAAAEgzuAAAAAAAAAAAAAAAkGNwBAAAAAAAAAAAAAEgwuAMAAAAAAAAAAAAAkGBwBwAAAAAAAAAAAAAgweAOAAAAAAAAAAAAAECCwR0AAAAAAAAAAAAAgASDOwAAAAAAAAAAAAAACQZ3AAAAAAAAAAAAAAASDO4AAAAAAAAAAAAAACQY3AEAAAAAAAAAAAAASDC4AwAAAAAAAAAAAACQYHAHAAAAAAAAAAAAACDB4A4AAAAAAAAAAAAAQILBHQAAAAAAAAAAAACABIM7AAAAAAAAAAAAAAAJBncAAAAAAAAAAAAAABIM7gAAAAAAAAAAAAAAJBjcAQAAAAAAAAAAAABIMLgDAAAAAAAAAAAAAJBgcAcAAAAAAAAAAAAAIMHgDgAAAAAAAAAAAABAgsEdAAAAAAAAAAAAAIAEgzsAAAAAAAAAAAAAAAkGdwAAAAAAAAAAAAAAEgzuAAAAAAAAAAAAAAAkGNwBAAAAAAAAAAAAAEgwuAMAAAAAAAAAAAAAkGBwBwAAAAAAAAAAAAAgweAOAAAAAAAAAAAAAECCwR0AAAAAAAAAAAAAgASDOwAAAAAAAAAAAAAACQZ3AAAAAAAAAAAAAAASDO4AAAAAAAAAAAAAACQY3AEAAAAAAAAAAAAASDC4AwAAAAAAAAAAAACQYHAHAAAAAAAAAAAAACDB4A4AAAAAAAAAAAAAQILBHQAAAAAAAAAAAACABIM7AAAAAAAAAAAAAAAJBncAAAAAAAAAAAAAABIM7gAAAAAAAAAAAAAAJBjcAQAAAAAAAAAAAABIMLgDAAAAAAAAAAAAAJBgcAcAAAAAAAAAAAAAIMHgDgAAAAAAAAAAAABAgsEdAAAAAAAAAAAAAIAEgzsAAAAAAAAAAAAAAAkGdwAAAAAAAAAAAAAAEgzuAAAAAAAAAAAAAAAkGNwBAAAAAAAAAAAAAEgwuAMAAAAAAAAAAAAAkGBwBwAAAAAAAAAAAAAgweAOAAAAAAAAAAAAAECCwR0AAAAAAAAAAAAAgASDOwAAAAAAAAAAAAAACQZ3AAAAAAAAAAAAAAASDO4AAAAAAAAAAAAAACQY3AEAAAAAAAAAAAAASDC4AwAAAAAAAAAAAACQYHAHAAAAAAAAAAAAACDB4A4AAAAAAAAAAAAAQILBHQAAAAAAAAAAAACABIM7AAAAAAAAAAAAAAAJBncAAAAAAAAAAAAAABIM7gAAAAAAAAAAAAAAJBjcAQAAAAAAAAAAAABIMLgDAAAAAAAAAAAAAJBgcAcAAAAAAAAAAAAAIMHgDgAAAAAAAAAAAABAgsEdAAAAAAAAAAAAAIAEgzsAAAAAAAAAAAAAAAkGdwAAAAAAAAAAAAAAEgzuAAAAAAAAAAAAAAAkGNwBAAAAAAAAAAAAAEgwuAMAAAAAAAAAAAAAkGBwBwAAAAAAAAAAAAAgweAOAAAAAAAAAAAAAECCwR0AAAAAAAAAAAAAgASDOwAAAAAAAAAAAAAACQZ3AAAAAAAAAAAAAAASDO4AAAAAAAAAAAAAACQY3AEAAAAAAAAAAAAASDC4AwAAAAAAAAAAAACQYHAHAAAAAAAAAAAAACDB4A4AAAAAAAAAAAAAQILBHQAAAAAAAAAAAACABIM7AAAAAAAAAAAAAAAJBncAAAAAAAAAAAAAABIM7gAAAAAAAAAAAAAAJBjcAQAAAAAAAAAAAABIMLgDAAAAAAAAAAAAAJBgcAcAAAAAAAAAAAAAIMHgDgAAAAAAAAAAAABAgsEdAAAAAAAAAAAAAIAEgzsAAAAAAAAAAAAAAAkGdwAAAAAAAAAAAAAAEgzuAAAAAAAAAAAAAAAkGNwBAAAAAAAAAAAAAEgwuAMAAAAAAAAAAAAAkGBwBwAAAAAAAAAAAAAgweAOAAAAAAAAAAAAAECCwR0AAAAAAAAAAAAAgASDOwAAAAAAAAAAAAAACQZ3AAAAAAAAAAAAAAASDO4AAAAAAAAAAAAAACQY3AEAAAAAAAAAAAAASDC4AwAAAAAAAAAAAACQYHAHAAAAAAAAAAAAACDB4A4AAAAAAAAAAAAAQILBHQAAAAAAAAAAAACABIM7AAAAAAAAAAAAAAAJBncAAAAAAAAAAAAAABIM7gAAAAAAAAAAAAAAJBjcAQAAAAAAAAAAAABIMLgDAAAAAAAAAAAAAJBgcAcAAAAAAAAAAAAAIMHgDgAAAAAAAAAAAABAgsEdAAAAAAAAAAAAAIAEgzsAAAAAAAAAAAAAAAkGdwAAAAAAAAAAAAAAEgzuAAAAAAAAAAAAAAAkGNwBAAAAAAAAAAAAAEgwuAMAAAAAAAAAAAAAkGBwBwAAAAAAAAAAAAAgweAOAAAAAAAAAAAAAECCwR0AAAAAAAAAAAAAgASDOwAAAAAAAAAAAAAACQZ3AAAAAAAAAAAAAAASDO4AAAAAAAAAAAAAACQY3AEAAAAAAAAAAAAASDC4AwAAAAAAAAAAAACQYHAHAAAAAAAAAAAAACDB4A4AAAAAAAAAAAAAQILBHQAAAAAAAAAAAACABIM7AAAAAAAAAAAAAAAJBncAAAAAAAAAAAAAABIM7gAAAAAAAAAAAAAAJBjcAQAAAAAAAAAAAABIMLgDAAAAAAAAAAAAAJBgcAcAAAAAAAAAAAAAIMHgDgAAAAAAAAAAAABAgsEdAAAAAAAAAAAAAIAEgzsAAAAAAAAAAAAAAAkGdwAAAAAAAAAAAAAAEgzuAAAAAAAAAAAAAAAkGNwBAAAAAAAAAAAAAEgwuAMAAAAAAAAAAAAAkGBwBwAAAAAAAAAAAAAgweAOAAAAAAAAAAAAAECCwR0AAAAAAAAAAAAAgASDOwAAAAAAAAAAAAAACQZ3AAAAAAAAAAAAAAASDO4AAAAAAAAAAAAAACQY3AEAAAAAAAAAAAAASDC4AwAAAAAAAAAAAACQYHAHAAAAAAAAAAAAACDB4A4AAAAAADy7diwAAAAAMMjfeho7iiMAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABY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AAAAAAAAACII3AEAAAAAAAAAAAAAiCBwBwAAAAAAAAAAAAAggsAdAAAAAAAAAAAAAIAIAncAAAAAAAAAAAAAACII3AEAAAAAAAAAAAAAiCBwBwAAAAAAAAAAAAAggsAdAAAAAAAAAAAAAIAIAncAAAAAAAAAAAAAACII3AEAAAAAAAAAAAAAiCBwBwAAAAAAAAAAAAAggsAdAAAAAAAAAAAAAIAIAncAAAAAAAAAAAAAACII3AEAAAAAAAAAAAAAiCBwBwAAAAAAAAAAAAAggsAdAAAAAAAAAAAAAIAIAncAAAAAAAAAAAAAACII3AEAAAAAAAAAAAAAiCBwBwAAAAAAAAAAAAAggsAdAAAAAAAAAAAAAIAIAncAAAAAAAAAAAAAACII3AEAAAAAAAAAAAAAiCBwBwAAAAAAAAAAAAAggsAdAAAAAAAAAAAAAIAIAncAAAAAAAAAAAAAACII3AEAAAAAAAAAAAAAiCBwBwAAAAAAAAAAAAAggsAdAAAAAAAAAAAAAIAIAncAAAAAAAAAAAAAACII3AEAAAAAAAAAAAAAiCBwBwAAAAAAAAAAAAAggsAdAAAAAAAAAAAAAIAIAncAAAAAAAAAAAAAACII3AEAAAAAAAAAAAAAiCBwBwAAAAAAAAAAAAAggsAdAAAAAAAAAAAAAIAIAncAAAAAAAAAAAAAACII3AEAAAAAAAAAAAAAiCBwBwAAAAAAAAAAAAAggsAdAAAAAAAAAAAAAIAIAncAAAAAAAAAAAAAACII3AEAAAAAAAAAAAAAiCBwBwAAAAAAAAAAAAAggsAdAAAAAAAAAAAAAIAIAncAAAAAAAAAAAAAACII3AEAAAAAAAAAAAAAiCBwBwAAAAAAAAAAAAAggsAdAAAAAAAAAAAAAIAIAncAAAAAAAAAAAAAACII3AEAAAAAAAAAAAAAiCBwBwAAAAAAAAAAAAAggsAdAAAAAAAAAAAAAIAIAncAAAAAAAAAAAAAACII3AEAAAAAAAAAAAAAiCBwBwAAAAAAAAAAAAAggsAdAAAAAAAAAAAAAIAIAncAAAAAAAAAAAAAACII3AEAAAAAAAAAAAAAiCBwBwAAAAAAAAAAAAAggsAdAAAAAAAAAAAAAIAIAncAAAAAAAAAAAAAACII3AEAAAAAAAAAAAAAiCBwBwAAAAAAAAAAAAAggsAdAAAAAAAAAAAAAIAIAncAAAAAAAAAAAAAACII3AEAAAAAAAAAAAAAiCBwBwAAAAAAAAAAAAAggsAdAAAAAAAAAAAAAIAIAncAAAAAAAAAAAAAACII3AEAAAAAAAAAAAAAiCBwBwAAAAAAAAAAAAAggsAdAAAAAAAAAAAAAIAIAncAAAAAAAAAAAAAACII3AEAAAAAAAAAAAAAiCBwBwAAAAAAAAAAAAAggsAdAAAAAAAAAAAAAIAIAncAAAAAAAAAAAAAACII3AEAAAAAAAAAAAAAiCBwBwAAAAAAAAAAAAAggsAdAAAAAAAAAAAAAIAIAncAAAAAAAAAAAAAACII3AEAAAAAAAAAAAAAiPBFAHbtWAAAAABgkL/1NHYUR4I7AAAAAAAAAAAAAAALgjsAAAAAAAAAAAAAAAuCOwAAAAAAAAAAAAAAC4I7AAAAAAAAAAAAAAALgjsAAAAAAAAAAAAAAAuCOwAAAAAAAAAAAAAAC4I7AAAAAAAAAAAAAAALgjsAAAAAAAAAAAAAAAuCOwAAAAAAAAAAAAAAC4I7AAAAAAAAAAAAAAALgjsAAAAAAAAAAAAAAAuCOwAAAAAAAAAAAAAAC4I7AAAAAAAAAAAAAAALgjsAAAAAAAAAAAAAAAuCOwAAAAAAAAAAAAAAC4I7AAAAAAAAAAAAAAALgjsAAAAAAAAAAAAAAAuCOwAAAAAAAAAAAAAAC4I7AAAAAAAAAAAAAAALgjsAAAAAAAAAAAAAAAuCOwAAAAAAAAAAAAAAC4I7AAAAAAAAAAAAAAALgjsAAAAAAAAAAAAAAAuCOwAAAAAAAAAAAAAAC4I7AAAAAAAAAAAAAAALgjsAAAAAAAAAAAAAAAuCOwAAAAAAAAAAAAAAC4I7AAAAAAAAAAAAAAALgjsAAAAAAAAAAAAAAAuCOwAAAAAAAAAAAAAAC4I7AAAAAAAAAAAAAAALgjsAAAAAAAAAAAAAAAuCOwAAAAAAAAAAAAAAC4I7AAAAAAAAAAAAAAALgjsAAAAAAAAAAAAAAAuCOwAAAAAAAAAAAAAAC4I7AAAAAAAAAAAAAAALgjsAAAAAAAAAAAAAAAuCOwAAAAAAAAAAAAAAC4I7AAAAAAAAAAAAAAALgjsAAAAAAAAAAAAAAAuCOwAAAAAAAAAAAAAAC4I7AAAAAAAAAAAAAAALgjsAAAAAAAAAAAAAAAuCOwAAAAAAAAAAAAAAC4I7AAAAAAAAAAAAAAALgjsAAAAAAAAAAAAAAAuCOwAAAAAAAAAAAAAAC4I7AAAAAAAAAAAAAAALgjsAAAAAAAAAAAAAAAuCOwAAAAAAAAAAAAAAC4I7AAAAAAAAAAAAAAALgjsAAAAAAAAAAAAAAAuCOwAAAAAAAAAAAAAAC4I7AAAAAAAAAAAAAAALgjsAAAAAAAAAAAAAAAuCOwAAAAAAAAAAAAAAC4I7AAAAAAAAAAAAAAALgjsAAAAAAAAAAAAAAAuCOwAAAAAAAAAAAAAAC4I7AAAAAAAAAAAAAAALgjsAAAAAAAAAAAAAAAuCOwAAAAAAAAAAAAAAC4I7AAAAAAAAAAAAAAALgjsAAAAAAAAAAAAAAAuCOwAAAAAAAAAAAAAAC4I7AAAAAAAAAAAAAAALgjsAAAAAAAAAAAAAAAuCOwAAAAAAAAAAAAAAC4I7AAAAAAAAAAAAAAALgjsAAAAAAAAAAAAAAAuCOwAAAAAAAAAAAAAAC4I7AAAAAAAAAAAAAAALgjsAAAAAAAAAAAAAAAuCOwAAAAAAAAAAAAAAC4I7AAAAAAAAAAAAAAALgjsAAAAAAAAAAAAAAAuCOwAAAAAAAAAAAAAAC4I7AAAAAAAAAAAAAAALgjsAAAAAAAAAAAAAAAuCOwAAAAAAAAAAAAAAC4I7AAAAAAAAAAAAAAALgjsAAAAAAAAAAAAAAAuCOwAAAAAAAAAAAAAAC4I7AAAAAAAAAAAAAAALgjsAAAAAAAAAAAAAAAuCOwAAAAAAAAAAAAAAC4I7AAAAAAAAAAAAAAALgjsAAAAAAAAAAAAAAAuCOwAAAAAAAAAAAAAAC4I7AAAAAAAAAAAAAAALgjsAAAAAAAAAAAAAAAuCOwAAAAAAAAAAAAAAC4I7AAAAAAAAAAAAAAALgjsAAAAAAAAAAAAAAAuCOwAAAAAAAAAAAAAAC4I7AAAAAAAAAAAAAAALgjsAAAAAAAAAAAAAAAuCOwAAAAAAAAAAAAAAC4I7AAAAAAAAAAAAAAALgjsAAAAAAAAAAAAAAAuCOwAAAAAAAAAAAAAAC4I7AAAAAAAAAAAAAAALgjsAAAAAAAAAAAAAAAuCOwAAAAAAAAAAAAAAC4I7AAAAAAAAAAAAAAALgjsAAAAAAAAAAAAAAAuCOwAAAAAAAAAAAAAAC4I7AAAAAAAAAAAAAAALgjsAAAAAAAAAAAAAAAuCOwAAAAAAAAAAAAAAC4I7AAAAAAAAAAAAAAALgjsAAAAAAAAAAAAAAAuCOwAAAAAAAAAAAAAAC4I7AAAAAAAAAAAAAAALgjsAAAAAAAAAAAAAAAuCOwAAAAAAAAAAAAAAC4I7AAAAAAAAAAAAAAALgjsAAAAAAAAAAAAAAAuCOwAAAAAAAAAAAAAAC4I7AAAAAAAAAAAAAAALgjsAAAAAAAAAAAAAAAuCOwAAAAAAAAAAAAAAC4I7AAAAAAAAAAAAAAALgjsAAAAAAAAAAAAAAAuCOwAAAAAAAAAAAAAAC4I7AAAAAAAAAAAAAAALgjsAAAAAAAAAAAAAAAuCOwAAAAAAAAAAAAAAC4I7AAAAAAAAAAAAAAALgjsAAAAAAAAAAAAAAAuCOwAAAAAAAAAAAAAAC4I7AAAAAAAAAAAAAAALgjsAAAAAAAAAAAAAAAuCOwAAAAAAAAAAAAAAC4I7AAAAAAAAAAAAAAALgjsAAAAAAAAAAAAAAAuCOwAAAAAAAAAAAAAAC4I7AAAAAAAAAAAAAAALgjsAAAAAAAAAAAAAAAuCOwAAAAAAAAAAAAAAC4I7AAAAAAAAAAAAAAALgjsAAAAAAAAAAAAAAAuCOwAAAAAAAAAAAAAAC4I7AAAAAAAAAAAAAAALgjsAAAAAAAAAAAAAAAuCOwAAAAAAAAAAAAAAC4I7AAAAAAAAAAAAAAALgjsAAAAAAAAAAAAAAAuCOwAAAAAAAAAAAAAAC4I7AAAAAAAAAAAAAAALgjsAAAAAAAAAAAAAAAuCOwAAAAAAAAAAAAAAC4I7AAAAAAAAAAAAAAALgjsAAAAAAAAAAAAAAAuCOwAAAAAAAAAAAAAAC4I7AAAAAAAAAAAAAAALgjsAAAAAAAAAAAAAAAuCOwAAAAAAAAAAAAAAC4I7AAAAAAAAAAAAAAALgjsAAAAAAAAAAAAAAAuCOwAAAAAAAAAAAAAAC4I7AAAAAAAAAAAAAAALgjsAAAAAAAAAAAAAAAuCOwAAAAAAAAAAAAAAC4I7AAAAAAAAAAAAAAALgjsAAAAAAAAAAAAAAAuCOwAAAAAAAAAAAAAAC4I7AAAAAAAAAAAAAAALgjsAAAAAAAAAAAAAAAuCOwAAAAAAAAAAAAAAC4I7AAAAAAAAAAAAAAALgjsAAAAAAAAAAAAAAAuCOwAAAAAAAAAAAAAAC4I7AAAAAAAAAAAAAAALgjsAAAAAAAAAAAAAAAuCOwAAAAAAAAAAAAAAC4I7AAAAAAAAAAAAAAALgjsAAAAAAAAAAAAAAAuCOwAAAAAAAAAAAAAAC4I7AAAAAAAAAAAAAAALgjsAAAAAAAAAAAAAAAuCOwAAAAAAAAAAAAAAC4I7AAAAAAAAAAAAAAALgjsAAAAAAAAAAAAAAAuCOwAAAAAAAAAAAAAAC4I7AAAAAAAAAAAAAAALgjsAAAAAAAAAAAAAAAuCOwAAAAAAAAAAAAAAC4I7AAAAAAAAAAAAAAALgjsAAAAAAAAAAAAAAAuCOwAAAAAAAAAAAAAAC4I7AAAAAAAAAAAAAAALgjsAAAAAAAAAAAAAAAuCOwAAAAAAAAAAAAAAC4I7AAAAAAAAAAAAAAALgjsAAAAAAAAAAAAAAAuCOwAAAAAAAAAAAAAAC4I7AAAAAAAAAAAAAAALgjsAAAAAAAAAAAAAAAuCOwAAAAAAAAAAAAAAC4I7AAAAAAAAAAAAAAALgjsAAAAAAAAAAAAAAAuCOwAAAAAAAAAAAAAAC4I7AAAAAAAAAAAAAAALgjsAAAAAAAAAAAAAAAuCOwAAAAAAAAAAAAAAC4I7AAAAAAAAAAAAAAALgjsAAAAAAAAAAAAAAAuCOwAAAAAAAAAAAAAAC4I7AAAAAAAAAAAAAAALgjsAAAAAAAAAAAAAAAuCOwAAAAAAAAAAAAAAC4I7AAAAAAAAAAAAAAALgjsAAAAAAAAAAAAAAAuCOwAAAAAAAAAAAAAAC4I7AAAAAAAAAAAAAAALgjsAAAAAAAAAAAAAAAuCOwAAAAAAAAAAAAAAC4I7AAAAAAAAAAAAAAALgjsAAAAAAAAAAAAAAAuCOwAAAAAAAAAAAAAAC4I7AAAAAAAAAAAAAAALgjsAAAAAAAAAAAAAAAuCOwAAAAAAAAAAAAAAC4I7AAAAAAAAAAAAAAALgjsAAAAAAAAAAAAAAAuCOwAAAAAAAAAAAAAAC4I7AAAAAAAAAAAAAAALgjsAAAAAAAAAAAAAAAuCOwAAAAAAAAAAAAAAC4I7AAAAAAAAAAAAAAALgjsAAAAAAAAAAAAAAAuCOwAAAAAAAAAAAAAAC4I7AAAAAAAAAAAAAAALgjsAAAAAAAAAAAAAAAuCOwAAAAAAAAAAAAAAC4I7AAAAAAAAAAAAAAALgjsAAAAAAAAAAAAAAAuCOwAAAAAAAAAAAAAAC4I7AAAAAAAAAAAAAAALgjsAAAAAAAAAAAAAAAuCOwAAAAAAAAAAAAAAC4I7AAAAAAAAAAAAAAALgjsAAAAAAAAAAAAAAAuCOwAAAAAAAAAAAAAAC4I7AAAAAAAAAAAAAAALgjsAAAAAAAAAAAAAAAuCOwAAAAAAAAAAAAAAC4I7AAAAAAAAAAAAAAALgjsAAAAAAAAAAAAAAAuCOwAAAAAAAAAAAAAAC4I7AAAAAAAAAAAAAAALgjsAAAAAAAAAAAAAAAuCOwAAAAAAAAAAAAAAC4I7AAAAAAAAAAAAAAALgjsAAAAAAAAAAAAAAAuCOwAAAAAAAAAAAAAAC4I7AAAAAAAAAAAAAAALgjsAAAAAAAAAAAAAAAuCOwAAAAAAAAAAAAAAC4I7AAAAAAAAAAAAAAALgjsAAAAAAAAAAAAAAAuCOwAAAAAAAAAAAAAAC4I7AAAAAAAAAAAAAAALgjsAAAAAAAAAAAAAAAuCOwAAAAAAAAAAAAAAC4I7AAAAAAAAAAAAAAALgjsAAAAAAAAAAAAAAAuCOwAAAAAAAAAAAAAAC4I7AAAAAAAAAAAAAAALgjsAAAAAAAAAAAAAAAuCOwAAAAAAAAAAAAAAC4I7AAAAAAAAAAAAAAALgjsAAAAAAAAAAAAAAAuCOwAAAAAAAAAAAAAAC4I7AAAAAAAAAAAAAAALgjsAAAAAAAAAAAAAAAuCOwAAAAAAAAAAAAAAC4I7AAAAAAAAAAAAAAALgjsAAAAAAAAAAAAAAAuCOwAAAAAAAAAAAAAAC4I7AAAAAAAAAAAAAAALgjsAAAAAAAAAAAAAAAuCOwAAAAAAAAAAAAAAC4I7AAAAAAAAAAAAAAALgjsAAAAAAAAAAAAAAAuCOwAAAAAAAAAAAAAAC4I7AAAAAAAAAAAAAAALgjsAAAAAAAAAAAAAAAuCOwAAAAAAAAAAAAAAC4I7AAAAAAAAAAAAAAALgjsAAAAAAAAAAAAAAAuCOwAAAAAAAAAAAAAAC4I7AAAAAAAAAAAAAAALgjsAAAAAAAAAAAAAAAuCOwAAAAAAAAAAAAAAC4I7AAAAAAAAAAAAAAALgjsAAAAAAAAAAAAAAAuCOwAAAAAAAAAAAAAAC4I7AAAAAAAAAAAAAAALgjsAAAAAAAAAAAAAAAuCOwAAAAAAAAAAAAAAC4I7AAAAAAAAAAAAAAALgjsAAAAAAAAAAAAAAAuCOwAAAAAAAAAAAAAAC4I7AAAAAAAAAAAAAAALgjsAAAAAAAAAAAAAAAuCOwAAAAAAAAAAAAAAC4I7AAAAAAAAAAAAAAALgjsAAAAAAAAAAAAAAAuCOwAAAAAAAAAAAAAAC4I7AAAAAAAAAAAAAAALgjsAAAAAAAAAAAAAAAuCOwAAAAAAAAAAAAAAC4I7AAAAAAAAAAAAAAALgjsAAAAAAAAAAAAAAAuCOwAAAAAAAAAAAAAAC4I7AAAAAAAAAAAAAAALgjsAAAAAAAAAAAAAAAuCOwAAAAAAAAAAAAAAC4I7AAAAAAAAAAAAAAALgjsAAAAAAAAAAAAAAAuCOwAAAAAAAAAAAAAAC4I7AAAAAAAAAAAAAAALgjsAAAAAAAAAAAAAAAuCOwAAAAAAAAAAAAAAC4I7AAAAAAAAAAAAAAALgjsAAAAAAAAAAAAAAAuCOwAAAAAAAAAAAAAAC4I7AAAAAAAAAAAAAAALgjsAAAAAAAAAAAAAAAuCOwAAAAAAAAAAAAAAC4I7AAAAAAAAAAAAAAALgjsAAAAAAAAAAAAAAAuCOwAAAAAAAAAAAAAAC4I7AAAAAAAAAAAAAAALgjsAAAAAAAAAAAAAAAuCOwAAAAAAAAAAAAAAC4I7AAAAAAAAAAAAAAALgjsAAAAAAAAAAAAAAAuCOwAAAAAAAAAAAAAAC4I7AAAAAAAAAAAAAAALgjsAAAAAAAAAAAAAAAuCOwAAAAAAAAAAAAAAC4I7AAAAAAAAAAAAAAALgjsAAAAAAAAAAAAAAAuCOwAAAAAAAAAAAAAAC4I7AAAAAAAA1K4dCwAAAAAM8reexo7iCAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWBDcAQAAAAAAAAAAAABYENwBAAAAAAAAAAAAAFgQ3AEAAAAAAAAAAAAAWAjUz8kp6TRQ6wAAAABJRU5ErkJggg==" />
                                </defs>
                            </svg>
                        </div>
                        <div>
                            <div class="flex items-center gap-2">
                                <svg width="30" height="30" viewBox="0 0 31 32" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M21.6388 4.5874C23.3519 4.5874 24.9997 5.26443 26.212 6.47926C27.4255 7.69153 28.1039 9.32663 28.1039 11.0384V21.13C28.1039 24.694 25.2041 27.5809 21.6388 27.5809H9.01921C5.45393 27.5809 2.55547 24.694 2.55547 21.13V11.0384C2.55547 7.47437 5.44116 4.5874 9.01921 4.5874H21.6388ZM23.0836 11.23C22.8153 11.2159 22.5599 11.3066 22.367 11.4855L16.6071 16.0842C15.8662 16.6986 14.8046 16.6986 14.0522 16.0842L8.30385 11.4855C7.90658 11.1917 7.35729 11.23 7.02643 11.5749C6.68153 11.9198 6.64321 12.4691 6.93574 12.8523L7.10308 13.0184L12.9153 17.5532C13.6307 18.1153 14.4981 18.4219 15.4063 18.4219C16.312 18.4219 17.1947 18.1153 17.9088 17.5532L23.6712 12.9417L23.7734 12.8395C24.0787 12.4691 24.0787 11.9326 23.7593 11.5621C23.5818 11.3718 23.3378 11.2555 23.0836 11.23Z"
                                        fill="#FFC400" />
                                </svg>
                                <p class="text-[#3A3A3A] 2xl:text-[20.44px] text-[14px] md:text-[16px]">
                                    Help@Nur.Com
                                </p>
                            </div>
                            <div class="flex items-center gap-2">
                                <svg width="30" height="30" viewBox="0 0 31 32" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M14.7309 16.5583C19.8266 21.6526 20.9826 15.759 24.2271 19.0012C27.355 22.1283 29.1528 22.7548 25.1897 26.7167C24.6933 27.1157 21.5393 31.9152 10.4552 20.8341C-0.630384 9.75167 4.16641 6.59446 4.56545 6.09819C8.53809 2.12528 9.15381 3.93352 12.2817 7.06057C15.5262 10.3041 9.63513 11.4639 14.7309 16.5583Z"
                                        fill="#FFC400" />
                                </svg>
                                <p class="text-[#3A3A3A] 2xl:text-[20.44px] text-[14px] md:text-[16px]">
                                    +1 234 456 678 89
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--  -->

                    <div class="flex gap-[100px] mb-4 md:mb-0">
                        <div>
                            <h3 class="font-semibold text-[#3A3A3A] text-[25px] mb-2 2xl:text-[35.77px]">
                                Links
                            </h3>
                            <ul class="mb-1 md:space-y-2">
                                <li>
                                    <a class="text-[#3A3A3A] 2xl:text-[20.44px] text-[14px] md:text-[16px]"
                                        href="#">Home</a>
                                </li>
                                <li>
                                    <a class="text-[#3A3A3A] 2xl:text-[20.44px] text-[14px] md:text-[16px]"
                                        href="#">About Us</a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <h3 class="font-semibold text-[#3A3A3A] text-[25px] mb-2 2xl:text-[35.77px]">
                                Legal
                            </h3>
                            <ul class="mb-1 md:space-y-2">
                                <li>
                                    <a class="text-[#3A3A3A] 2xl:text-[20.44px] text-[14px] md:text-[16px]"
                                        href="#">Terms Of Use</a>
                                </li>
                                <li>
                                    <a class="text-[#3A3A3A] 2xl:text-[20.44px] text-[14px] md:text-[16px]"
                                        href="#">Privacy Policy</a>
                                </li>
                                <li>
                                    <a class="text-[#3A3A3A] 2xl:text-[20.44px] text-[14px] md:text-[16px]"
                                        href="#">Cookie Policy</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="items-center text-start flex flex-col">
                        <h3 class="font-semibold text-[#3A3A3A] mb-0 md:mb-2 text-[25px] 2xl:text-[35.77px]">
                            Newsletter
                        </h3>
                        <p class="text-[#3A3A3A] mb-4 text-sm 2xl:text-[20.44px] text-[14px] md:text-[16px]">
                            Stay Up To Date
                        </p>
                        <div class="flex items-center space-x-2">
                            <input
                                class="py-2 px-4 pr-[120px] text-[14px] rounded-full border border-gray-300 manrope w-full relative 2xl:text-[20.44px] 2xl:py-4"
                                placeholder="Your email" type="email" />
                            <button
                                class="bg-[#FFC400] text-[#3A3A3A] text-[12px] font-bold py-[7px] px-[14px] rounded-full absolute manrope right-[44px] md:right-[120px] 2xl:right-[220px] 2xl:font-extrabold 2xl:text-[17.88px]"
                                onclick="window.location.href='404-subscribe.html';">
                                Subscribe
                            </button>
                        </div>
                    </div>
                </div>
                <!--  -->
                <div class="mt-4">
                    <hr />
                </div>
                <!--  -->
                <div class="text-center text-[9px] md:text-[12px] mt-2 sm:mt-6 text-[#3A3A3A]">
                    <p class="2xl:text-[20.44px]">
                        Copyright 2025 Inc. All Rights Reserved
                    </p>
                </div>
            </div>
        </footer>
    </div>
@endsection
@push('scripts')
    <script>
    fetch("https://restcountries.com/v3.1/all")
        .then(response => response.json())
        .then(data => {
            let countrySelect = document.getElementById("countryCode");

            data.forEach(country => {
                if (country.idd && country.idd.root && country.cca2) {
                    let dialCode = country.idd.root + (country.idd.suffixes ? country.idd.suffixes[0] : "");

                    let flagEmoji = [...country.cca2.toUpperCase()]
                        .map(char => String.fromCodePoint(127397 + char.charCodeAt(0)))
                        .join('');

                    let option = document.createElement("option");
                    option.value = dialCode;
                    option.textContent = `${flagEmoji} ${dialCode}`;

                    countrySelect.appendChild(option);
                }
            });
        })
        .catch(error => console.error("Error fetching country data:", error));


        document.querySelectorAll(".faq-item").forEach((item) => {
            item.addEventListener("click", () => {
                const answer = item.querySelector(".answer");
                const icon = item.querySelector(".fas");
                if (answer.style.display === "none" || answer.style.display === "") {
                    answer.style.display = "block";
                    icon.classList.remove("fa-plus");
                    icon.classList.add("fa-minus");
                } else {
                    answer.style.display = "none";
                    icon.classList.remove("fa-minus");
                    icon.classList.add("fa-plus");
                }
            });
        });

        document.getElementById("countryCode").addEventListener("change", function() {
            const selectedOption = this.options[this.selectedIndex];
            console.log("Selected country code:", selectedOption.value);
        });

        $(document).ready(function() {
            let maxCategories = 0;

            $('.select-plan').on('click', function() {
                const planId = $(this).data('plan-id');
                maxCategories = $(this).data('max-categories');

                if (maxCategories === 'unlimited') {
                    maxCategories = Infinity;
                }

                $('#plan_id').val(planId);

                $('.category-checkbox').prop('disabled', false).prop('checked', false);
            });

            $('.category-checkbox').on('change', function() {
                const checkedCount = $('.category-checkbox:checked').length;

                if (checkedCount > maxCategories) {
                    toastr.error(`You can select up to ${maxCategories} categories for this plan.`,
                        'Success');
                    $(this).prop('checked', false);
                }
            });

            $('#registrationForm').on('submit', function(e) {
                showLoader();
                this.disabled = true;

                e.preventDefault();

                const formData = $(this).serialize();

                $.ajax({
                    url: $(this).attr('action'),
                    type: 'POST',
                    data: formData,
                    success: function(response) {
                        if (response.success) {
                            toastr.success('Registration successful!', 'Success');
                            window.location.href = response
                                .redirect_url;
                        } else {
                            hideLoader();
                            this.disabled = false;
                            toastr.error('Registration failed. Please check your inputs.',
                                'Error');
                        }
                    },
                    error: function(xhr) {
                        hideLoader();
                        this.disabled = false;
                        toastr.error('An error occurred. Please try again.', 'Error');
                    }
                });
            });
        });
    </script>
@endpush
