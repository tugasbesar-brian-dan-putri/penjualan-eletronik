$(function () {
    $("#table-produk").DataTable({
        responsive: true,
        autoWidth: false,
        processing: true,
        serverSide: true,
        ajax: {
            url: `${APP_URL}/produk`
        }, columns: [
            { data: "DT_RowIndex", name: "DT_RowIndex", className: "text-center", width: "4%", },
            { data: "gambar", name: "gambar", width: "10%" },
            { data: "kategori.nama", name: "kategori.nama", },
            { data: "nama", name: "nama", },
            { data: "harga", name: "harga", },
            { data: "stok", name: "stok", },
            { data: "action", name: "action", className: "text-center", orderable: false, searchable: false, }
        ]
    });

    $("#table-produk").on("click", ".btn-delete-produk", function () {
        var id = $(this).data('id');
        $("#form-delete-produk").on("submit", function (e) {
            var url = APP_URL + "/produk/" + id
            var form = $(this);
            $.ajax({
                url: url,
                type: "DELETE",
                data: form.serialize(),
                success: function (res) {
                    $("#deleteProdukModal").modal("hide");
                    $("#table-produk").DataTable().ajax.reload();
                },
                error: (e, x, settings, exception) => {
                },
            });
            e.preventDefault();
        });
    });

})
