<x-auth-layout pageTitle="All testimonials">

    <x-front.card>
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h4 class="mb-0"></h4>
            <button class="btn btn-primary" onclick="openModal()">
                <i class="fa fa-plus"></i> Create
            </button>
        </div>
        <table id="myTable" class="table table-hover border">
            <thead>
                <tr>
                    <th>SR#</th>
                    <th>Name</th>
                    <th>Role</th>
                    <th>Review</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->role }}</td>
                        <td>{{ $item->review }}</td>
                        <td>
                            <button class="btn btn-sm btn-outline-warning"
                                onclick="openModal('{{ $item->id }}', '{{ $item->name }}','{{ $item->role }}','{{ $item->review }}')">
                                <i class="fa fa-edit"></i>
                            </button>

                            <button class="del-testimonial btn btn-sm btn-outline-danger" data-id="{{ $item->id }}">
                                <i class="fa fa-trash"></i>
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </x-front.card>

    <!-- Modal for Create & Edit -->
    <div class="modal fade" id="testimonialModal" tabindex="-1" aria-labelledby="testimonialLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle">Create Testimonial</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="testimonialForm" action="{{ route('testimonials.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="_method" id="_method" value="POST">
                    <input type="hidden" id="testimonial_id" name="id">

                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="testimonialName" class="form-label">Name</label>
                            <input type="text" class="form-control" id="testimonialName" name="name" required>
                        </div>

                        <div class="mb-3">
                            <label for="testimonialName" class="form-label">Role</label>
                            <input type="text" class="form-control" id="testimonialRole" name="role" required>
                        </div>

                        <div class="mb-3">
                            <label for="testimonialName" class="form-label">Review</label>
                            <textarea name="review" id="testimonialReview" cols="60" rows="5"></textarea>
                        </div>

                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade bs-delete-modal-center" tabindex="-1" aria-labelledby="mySmallModalLabel" aria-hidden="true"
        style="display: none;">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <form id="deleteTestimonialForm" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('DELETE')
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                            id="NotificationModalbtn-close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mt-2 text-center">
                            <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop"
                                colors="primary:#f7b84b,secondary:#f06548"
                                style="width:100px;height:100px"></lord-icon>
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
    function openModal(id = null, name = null, role = null, review = null) {
        if (id) {
            // Edit Mode
            document.getElementById('modalTitle').innerText = 'Edit Testimonial';
            document.getElementById('testimonialForm').action = "{{ route('testimonials.update', ':id') }}".replace(':id',
                id);
            document.getElementById('testimonial_id').value = id;
            document.getElementById('testimonialName').value = name;
            document.getElementById('testimonialRole').value = role;
            document.getElementById('testimonialReview').value = review;
            document.getElementById('_method').value = 'PUT';
        } else {
            // Create Mode
            document.getElementById('modalTitle').innerText = 'Create testimonial';
            document.getElementById('testimonialForm').action = "{{ route('testimonials.store') }}";
            document.getElementById('testimonial_id').value = '';
            document.getElementById('testimonialName').value = '';
            document.getElementById('testimonialRole').value = '';
            document.getElementById('testimonialReview').value = '';
            document.getElementById('_method').value = 'POST';
        }

        var testimonialModal = new bootstrap.Modal(document.getElementById('testimonialModal'));
        testimonialModal.show();
    }

    $(document).on("click", ".del-testimonial", function() {
        let id = $(this).attr("data-id");
        $("#testimonialId").val(id);
        let form = $("#deleteTestimonialForm");

        // Update the form action dynamically
        form.attr("action", "{{ route('testimonials.destroy', ':id') }}".replace(':id', id));
        $(".bs-delete-modal-center").modal("show");
    });
</script>
