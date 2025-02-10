<x-auth-layout pageTitle="Manage Quotes">
    <x-front.card>
        <div class="d-flex justify-content-between align-items-center mb-3">
        </div>

        <!-- Category Selection Form -->
        <form action="{{ route('quotes.store.custom', $data->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="quote_type" class="form-label">Select Quote Type</label>
                <select id="quote_type" name="quote_type" class="form-control select2">
                    <option value="">-- Select --</option>
                    <option value="custom">Custom</option>
                    <option value="ai">AI Only</option>
                    <option value="both">Custom + AI</option>
                </select>
            </div>

            <!-- Custom Quote Input (Hidden by Default) -->
            <div class="mb-3" id="custom_quote_div" style="display: none;">
                <label for="custom_quote" class="form-label">Enter Custom Quote</label>
                <textarea id="custom_quote" name="custom_quote" class="form-control" rows="3"></textarea>
            </div>

            <!-- Excel Import (Hidden by Default) -->
            <div class="mb-3" id="excel_import_div" style="display: none;">
                <label for="excel_file" class="form-label">Import Excel File</label>
                <input type="file" name="custom_excel" id="excel_file" class="form-control" accept=".xlsx, .xls">
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-success" id="submitBtn" style="display: none;">Save</button>
        </form>
    </x-front.card>

    <div class="modal fade bs-delete-modal-center" tabindex="-1" aria-labelledby="mySmallModalLabel" aria-hidden="true"
        style="display: none;">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <form id="deleteCategoryForm" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('DELETE')
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                            id="NotificationModalbtn-close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mt-2 text-center">
                            <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop"
                                colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>
                            <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                                <h4>Are you sure ?</h4>
                                <p class="text-muted mx-4 mb-0">Are you sure you want to delete this listing?</p>
                            </div>
                        </div>
                        <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                            <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn w-sm"
                                style="background-color: #e30b0b !important;color:#fff;" id="delete-notification">Yes,
                                Delete It!</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-auth-layout>

<script>
    $(document).on("click", ".del-cat", function() {
        let id = $(this).attr("data-id");
        $("#categoryId").val(id);
        let form = $("#deleteCategoryForm");

        form.attr("action", "{{ route('categories.destroy', ':id') }}".replace(':id', id));
        $(".bs-delete-modal-center").modal("show");
    });

    $(document).ready(function() {
        $('.select2').select2(); // Enhance dropdown

        $('#quote_type').change(function() {
            let selected = $(this).val();

            // Show input and Excel upload if "Custom" or "Custom + AI" is selected
            if (selected === "custom" || selected === "both") {
                $("#custom_quote_div, #excel_import_div").show();
                $('#submitBtn').show();
            } else {
                $("#custom_quote_div, #excel_import_div").hide();
                $('#submitBtn').hide();
            }

            // If "AI Only" is selected, trigger AJAX request
            if (selected === "ai") {
                saveAIQuote();
            }
        });

        // AJAX Function to Save AI Quote
        function saveAIQuote() {
            $.ajax({
                url: "{{ route('categories.update.source') }}", // Adjust route
                type: "POST",
                data: {
                    _token: "{{ csrf_token() }}",
                    category_id: "{{ $data->id }}"
                },
                success: function(response) {
                    toastr.success("AI-generated quote saved successfully!");
                    $('#quote_type').val('').trigger('change');
                    location.reload();
                },
                error: function(xhr) {
                    toastr.error("Error saving AI-generated quote.");
                }
            });
        }
    });
</script>
