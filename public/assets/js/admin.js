$(document).ready(function () {
    $('.delete-btn').click(function () {
        var id = $(this).data('id');
        var url = '{{ route("products.destroy", ":id") }}';
        url = url.replace(':id', id);
        $('#deleteForm').attr('action', url);
        $('#deleteModal').modal('show');
    });
});