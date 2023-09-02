
<!-- DataTables  & Plugins -->
<script src="{{ asset('/') }}admin/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{ asset('/') }}admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{ asset('/') }}admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{ asset('/') }}admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="{{ asset('/') }}admin/custom/sweet-alert/sweetalert2.all.min.js"></script>

<script>
    $(document).on("click", ".delete-btn", function(){
        event.preventDefault(); // prevent form submit
        var form = event.target.form; // storing the form
        var _that= $(this);
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.value) {
                return _that.closest('.delete-form').submit();
            }
        })

    });

</script>
@if (session()->has('success'))
    <script>
        Swal.fire({
            type: 'success',
            text: '{{ session('success') }}',
            showConfirmButton: false,
            timer: 1600
        })
    </script>
@endif

<script>
    $(function () {
        $('#my-table').DataTable({
            "responsive": true,
            "autoWidth": false,
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": true,
        });
    });
</script>
