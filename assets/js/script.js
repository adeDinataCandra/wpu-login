$(function () {

    $('.tombolTambahData').on('click', function () {

        $('#formModalLabel').html('Add Menu');
        $('.modal-footer button[type=submit]').html('Add Menu');

    });

    $('.tampilModalUbah').on('click', function () {

        $('#formModalLabel').html('Edit Menu');
        $('.modal-footer button[type=submit]').html('Edit Menu');

        const id = $(this).data('id');

        $.ajax({

            url: "<?= base_url('menu/detailMenu')?>",
            data: { id: id },
            method: "post",
            dataType: "json",
            success: function (data) {
                // $('#nama').val(data.nama);
                $('#menu').val(data.menu);

            }

        });

    });

});
