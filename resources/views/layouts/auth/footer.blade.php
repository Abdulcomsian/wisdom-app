</div>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
    $(document).ready(function() {
        $('#myTable').DataTable({
            responsive: true
        });

        console.log("Toastr Loaded:", typeof toastr !== 'undefined');

        toastr.options = {
            "closeButton": true,
            "progressBar": true
        };

        @if (Session::has('success'))
            console.log("Success Message: {{ session('success') }}");
            toastr.success("{{ session('success') }}");
        @endif

        @if (Session::has('error'))
            console.log("Error Message: {{ session('error') }}");
            toastr.error("{{ session('error') }}");
        @endif

        @if (Session::has('info'))
            console.log("Info Message: {{ session('info') }}");
            toastr.info("{{ session('info') }}");
        @endif

        @if (Session::has('warning'))
            console.log("Warning Message: {{ session('warning') }}");
            toastr.warning("{{ session('warning') }}");
        @endif
    });
</script>

@isset($scripts)
    {{ $scripts }}
@endisset

</body>

</html>
