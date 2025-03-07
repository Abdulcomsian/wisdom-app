@extends('layouts.user.app')
@section('title', 'Dashboard')
@section('header', 'Dashboard')
@section('content')
    <div id="sign-up" class="py-[40px] w-full">
        <form id="subscriptionForm" action="{{ route('user.manage_subscriptions.store') }}" method="post">
            @csrf
        <input type="hidden" name="plan_id" id="plan_id" value="">
        <div class="container mx-auto p-4 text-center">
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

                <div class="p-4 text-center">
                    <h1
                        class="cabinet-grotesk-800 text-4xl text-[#3A3A3A] font-extrabold mt-9 mb-12 2xl:mb-14 2xl:text-[60px] 2xl:font-extrabold 2xl:leading-[90px]">
                        "Select Daily Messages"
                    </h1>

                    <div
                        class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 2xl:grid-cols-5 gap-4  inter text-[#3A3A3A] md:pl-12">
                        @foreach ($categories as $category)
                            <label class="flex items-center space-x-2">
                                <input type="checkbox" name="categories[]" value="{{ $category->id }}"
                                    class="form-checkbox h-5 w-5 text-gray-800 category-checkbox" disabled>
                                <span class="text-sm md:text-lg font-medium 2xl:text-[25px]">{{ $category->name }}</span>
                            </label>
                        @endforeach
                    </div>
                </div>
                <form class=" max-w-sm  mx-auto mt-[41px] sf-pro-regular font-normal">
                    <div>
                        <button
                            class="bg-gray-800 text-white py-2 px-4 font-bold w-1/3 rounded-lg mt-3 2xl:text-xl 2xl:py-3">
                            Update
                        </button>
                    </div>
                </form>
            </div>
    </div>

    @push('page-script')
        <script>
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
                        'Error');
                        $(this).prop('checked', false);
                    }
                });

                $('#subscriptionForm').on('submit', function(e) {
                    e.preventDefault();
                    showLoader(); // Ensure showLoader() function is defined somewhere

                    const formData = $(this).serialize();
                    $.ajax({
                        url: $(this).attr('action'),
                        type: 'POST',
                        data: formData,
                        dataType: 'json',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr(
                                'content') // Ensure CSRF token is included
                        },
                        success: function(response) {
                            hideLoader(); // Ensure hideLoader() function is defined somewhere
                            if (response.success) {
                                toastr.success('Subscription updated successfully!', 'Success');
                                setTimeout(function() {
                                    window.location.href = response
                                    .redirect_url; // Redirect if applicable
                                }, 1500);
                            } else {
                                toastr.error(response.message ||
                                    'Something went wrong. Please try again.', 'Error');
                            }
                        },
                        error: function(xhr) {
                            hideLoader();
                            let errorMessage = 'An error occurred. Please try again.';
                            if (xhr.responseJSON && xhr.responseJSON.message) {
                                errorMessage = xhr.responseJSON.message;
                            }
                            toastr.error(errorMessage, 'Error');
                        }
                    });
                });
            });
        </script>
    @endpush
@endsection
