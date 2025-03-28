@extends('layouts.user.app')
@section('title', 'Dashboard')
@section('header', 'Dashboard')
@section('content')
<div class="flex-1 text-center p-6 lg:p-32 lg:px-[250px]">
    <div id="subscription-card" class="bg-white py-6 rounded-lg shadow-lg">
        <h2 class="text-2xl font-bold mb-4">
            {{ auth()->user()->subscription ? 'Unsubscribe' : 'Subscribe' }}
        </h2>
        <p class="mb-4">
            {{ auth()->user()->subscription ? 'Are you sure you want to unsubscribe from the plan?' : 'Subscribe to access premium features.' }}
        </p>
        <div class="flex space-x-4 text-center items-center justify-center">
            @if (auth()->user()->subscription)
                <!-- Unsubscribe Button -->
                <button id="openUnsubscribeModal" class="bg-[#F3C941] text-white px-4 py-2 rounded hover:bg-red-600">
                    Unsubscribe
                </button>
            @else
                <!-- Subscribe Button -->
                <a href="{{ route('user.manage_subscriptions.index') }}" class="bg-[#3A3A3A] text-white px-4 py-2 rounded hover:bg-green-600">
                    Subscribe
                </a>
            @endif
        </div>
    </div>
</div>

    <!-- Unsubscribe Confirmation Modal -->
    <div id="unsubscribeModal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center">
        <div class="bg-white p-6 rounded-lg shadow-lg text-center max-w-sm">
            <h2 class="text-2xl font-bold mb-4">Confirm Unsubscription</h2>
            <p class="mb-4">Are you sure you want to unsubscribe?</p>
            <div class="flex space-x-4 justify-center">
                <button id="confirmUnsubscribe" class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700">
                    Yes, Unsubscribe
                </button>
                <button id="closeModal" type="button" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">
                    Cancel
                </button>
            </div>
        </div>
    </div>
@endsection

@push('page-script')
    <script>
        $(document).ready(function() {
            // Open modal
            $('#openUnsubscribeModal').on('click', function() {
                $('#unsubscribeModal').removeClass('hidden').addClass('flex'); // Ensure it is visible
            });

            // Close modal on cancel
            $(document).on('click', '#closeModal', function() {
                $('#unsubscribeModal').addClass('hidden').removeClass('flex');
            });

            // Close modal when clicking outside the modal box
            $('#unsubscribeModal').on('click', function(e) {
                if ($(e.target).is('#unsubscribeModal')) {
                    $(this).addClass('hidden').removeClass('flex');
                }
            });

            // Confirm Unsubscribe
            $('#confirmUnsubscribe').on('click', function() {
                showLoader(); // Show loader if you have one

                $.ajax({
                    url: "{{ route('user.unsubscribe.destroy') }}", // Replace with actual route
                    type: 'DELETE',
                    data: {
                        _token: "{{ csrf_token() }}"
                    },
                    success: function(response) {
                        hideLoader(); // Hide loader if you have one
                        toastr.success('You have successfully unsubscribed.', 'Success');
                        $('#unsubscribeModal').addClass('hidden').removeClass('flex');
                        setTimeout(() => {
                            window.location.href =
                                "{{ route('auth') }}"; // Redirect after success
                        }, 1500);
                    },
                    error: function(xhr) {
                        hideLoader();
                        toastr.error('Something went wrong. Please try again.', 'Error');
                    }
                });
            });
        });
    </script>
@endpush
