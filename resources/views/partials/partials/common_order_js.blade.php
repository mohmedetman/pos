<script>
    $(document).on("click", ".add-product-btn", function(){
        alter('sgsdg');
        event.preventDefault(); // prevent form submit
        var form = event.target.form; // storing the form
        var _that= $(this);
        // Swal.fire({
        //     title: 'Are you sure?',
        //     text: "You won't be able to revert this!",
        //     type: 'warning',
        //     showCancelButton: true,
        //     confirmButtonColor: '#d33',
        //     cancelButtonColor: '#3085d6',
        //     confirmButtonText: 'Yes, delete it!'
        // }).then((result) => {
        //     if (result.value) {
        //         return _that.closest('.delete-form').submit();
        //     }
        // })

    });

</script>