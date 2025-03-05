@extends('layouts.user.app')
@section('title', 'Dashboard')
@section('header', 'Dashboard')
@section('content')
    <div class="flex-1 text-center p-6 lg:p-32 lg:px-[250px]">
        <div id="unsubscribe-card" class="bg-white py-6 rounded-lg shadow-lg">
            <h2 class="text-2xl font-bold mb-4">Unsubscribe</h2>
            <p class="mb-4">Are you sure you want to unsubscribe from the plan?</p>
            <div class="flex space-x-4 text-center items-center justify-center">
                <!-- Button to Open Modal -->
                <button id="openUnsubscribeModal" class="bg-[#F3C941] text-white px-4 py-2 rounded hover:bg-red-600">
                    Unsubscribe
                </button>
                <button class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">
                    <a href="dashboard.html">Cancel</a>
                </button>
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
                <button id="closeModal" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">
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
            $('#unsubscribeModal').removeClass('hidden');
        });

        // Close modal
        $('#closeModal').on('click', function() {
            $('#unsubscribeModal').addClass('hidden');
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
                    $('#unsubscribeModal').addClass('hidden');
                    setTimeout(() => {
                        window.location.href = "{{ route('auth') }}"; // Redirect after success
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
