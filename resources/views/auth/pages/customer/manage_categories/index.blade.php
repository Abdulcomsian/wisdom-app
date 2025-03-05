@extends('layouts.user.app')
@section('title', 'Dashboard')
@section('header', 'Dashboard')
@section('content')
    <div id="" class="py-[40px] w-full">
        <div class="p-4 text-center">
            <div class="">
                <h1
                    class="cabinet-grotesk-800 text-4xl text-[#3A3A3A] font-extrabold mt-9 mb-12 2xl:mb-14 2xl:text-[60px] 2xl:font-extrabold 2xl:leading-[90px]">
                    "Select Daily Messages"
                </h1>
                <div
                    class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 2xl:grid-cols-5 gap-4 text-center inter text-[#3A3A3A] md:pl-12">
                    <label class="flex items-center space-x-2">
                        <input type="checkbox" checked class="form-checkbox h-5 w-5 text-gray-800" />
                        <span class="text-sm lg:text-lg font-medium 2xl:text-[25px]">Inspiration</span>
                    </label>
                    <label class="flex items-center space-x-2">
                        <input type="checkbox" class="form-checkbox h-5 w-5 text-gray-800" />
                        <span class="text-sm md:text-lg font-medium 2xl:text-[25px]">Motivation</span>
                    </label>
                    <label class="flex items-center space-x-2">
                        <input type="checkbox" class="form-checkbox h-5 w-5 text-gray-800" />
                        <span class="text-sm md:text-lg font-medium 2xl:text-[25px]">Gratitude</span>
                    </label>
                    <label class="flex items-center space-x-2">
                        <input type="checkbox" class="form-checkbox h-5 w-5 text-gray-800" />
                        <span class="text-sm md:text-lg font-medium 2xl:text-[25px]">Mindfulness</span>
                    </label>
                    <label class="flex items-center space-x-2">
                        <input type="checkbox" checked class="form-checkbox h-5 w-5 text-gray-800" />
                        <span class="text-sm md:text-lg font-medium 2xl:text-[25px]">Self-Care</span>
                    </label>
                    <label class="flex items-center space-x-2">
                        <input type="checkbox" class="form-checkbox h-5 w-5 text-gray-800" />
                        <span class="text-sm md:text-lg font-medium 2xl:text-[25px]">Wisdom</span>
                    </label>
                    <label class="flex items-center space-x-2">
                        <input type="checkbox" checked class="form-checkbox h-5 w-5 text-gray-800" />
                        <span class="text-sm md:text-lg font-medium 2xl:text-[25px]">Encouragement</span>
                    </label>
                    <label class="flex items-center space-x-2">
                        <input type="checkbox" checked class="form-checkbox h-5 w-5 text-gray-800" />
                        <span class="text-sm md:text-lg font-medium 2xl:text-[25px]">Happiness</span>
                    </label>
                    <label class="flex items-center space-x-2">
                        <input type="checkbox" class="form-checkbox h-5 w-5 text-gray-800" />
                        <span class="text-sm md:text-lg font-medium 2xl:text-[25px]">Affirmations</span>
                    </label>
                    <label class="flex items-center space-x-2">
                        <input type="checkbox" checked class="form-checkbox h-5 w-5 text-gray-800" />
                        <span class="text-sm md:text-lg font-medium 2xl:text-[25px]">Philosophical</span>
                    </label>
                    <label class="flex items-center space-x-2">
                        <input type="checkbox" class="form-checkbox h-5 w-5 text-gray-800" />
                        <span class="text-sm md:text-lg font-medium 2xl:text-[25px]">Funny quotes</span>
                    </label>
                    <label class="flex items-center space-x-2">
                        <input type="checkbox" class="form-checkbox h-5 w-5 text-gray-800" />
                        <span class="text-sm md:text-lg font-medium 2xl:text-[25px]">Fun facts</span>
                    </label>
                    <label class="flex items-center space-x-2">
                        <input type="checkbox" class="form-checkbox h-5 w-5 text-gray-800" />
                        <span class="text-sm md:text-lg font-medium 2xl:text-[25px]">Relationship help</span>
                    </label>
                    <label class="flex items-center space-x-2">
                        <input type="checkbox" class="form-checkbox h-5 w-5 text-gray-800" />
                        <span class="text-sm md:text-lg font-medium 2xl:text-[25px]">Just saying hi</span>
                    </label>
                    <label class="flex items-center space-x-2">
                        <input type="checkbox" class="form-checkbox h-5 w-5 text-gray-800" />
                        <span class="text-sm md:text-lg font-medium 2xl:text-[25px]">Emotional support</span>
                    </label>
                </div>
            </div>
        </div>
        <form class="max-w-sm md:w-full mx-6 md:mx-auto mt-[41px] sf-pro-regular font-normal">
            <div>
                <button class="bg-gray-800 text-white py-2 px-4 font-bold rounded-lg w-full mt-3 2xl:text-xl 2xl:py-3">
                    Update
                </button>
            </div>
        </form>
    </div>
@endsection
