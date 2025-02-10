<x-auth-layout pageTitle="All Categories">
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
                    <th>Slug</th>
                    <th>Source</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data['all'] as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->slug }}</td>
                        <td>
                            @if($item->source == 'custom')
                                <span class="badge bg-primary">Custom</span>
                            @elseif($item->source == 'ai')
                                <span class="badge bg-success">AI Only</span>
                            @elseif($item->source == 'both')
                                <span class="badge bg-warning text-dark">Custom + AI</span>
                            @else
                                <span class="badge bg-secondary">Unknown</span>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('categories.show', $item->id) }}"
                                title="View Details" class="btn btn-sm btn-outline-info">
                                <i class="fa fa-eye"></i>
                            </a>

                            <button class="btn btn-sm btn-outline-warning"
                                onclick="openModal('{{ $item->id }}', '{{ $item->name }}')">
                                <i class="fa fa-edit"></i>
                            </button>

                            <button class="del-cat btn btn-sm btn-outline-danger" data-id="{{ $item->id }}">
                                <i class="fa fa-trash"></i>
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </x-front.card>

    <!-- Modal for Create & Edit -->
    <div class="modal fade" id="categoryModal" tabindex="-1" aria-labelledby="categoryLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle">Create Category</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="categoryForm" action="{{ route('categories.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="_method" id="_method" value="POST">
                    <input type="hidden" id="category_id" name="id">

                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="categoryName" class="form-label">Name</label>
                            <input type="text" class="form-control" id="categoryName" name="name" required>
                        </div>

                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal for Viewing Category -->
    <div class="modal fade" id="viewCategoryModal" tabindex="-1" aria-labelledby="viewCategoryLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="viewCategoryTitle">View Category</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label fw-bold">Name:</label>
                        <p id="viewCategoryName"></p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Slug:</label>
                        <p id="viewCategorySlug"></p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

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
    function openModal(id = null, name = null) {
        if (id) {
            // Edit Mode
            document.getElementById('modalTitle').innerText = 'Edit Category';
            document.getElementById('categoryForm').action = "{{ route('categories.update', ':id') }}".replace(':id',
                id);
            document.getElementById('category_id').value = id;
            document.getElementById('categoryName').value = name;
            document.getElementById('_method').value = 'PUT';
        } else {
            // Create Mode
            document.getElementById('modalTitle').innerText = 'Create Category';
            document.getElementById('categoryForm').action = "{{ route('categories.store') }}";
            document.getElementById('category_id').value = '';
            document.getElementById('categoryName').value = '';
            document.getElementById('_method').value = 'POST';
        }

        var categoryModal = new bootstrap.Modal(document.getElementById('categoryModal'));
        categoryModal.show();
    }

    function openViewModal(id = null, name = null, slug = null) {
        document.getElementById('viewCategoryName').innerText = name;
        document.getElementById('viewCategorySlug').innerText = slug;

        var viewModal = new bootstrap.Modal(document.getElementById('viewCategoryModal'));
        viewModal.show();
    }

    $(document).on("click", ".del-cat", function() {
        let id = $(this).attr("data-id");
        $("#categoryId").val(id);
        let form = $("#deleteCategoryForm");

        // Update the form action dynamically
        form.attr("action", "{{ route('categories.destroy', ':id') }}".replace(':id', id));
        $(".bs-delete-modal-center").modal("show");
    });
</script>
