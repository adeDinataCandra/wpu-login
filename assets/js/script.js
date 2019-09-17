$(function () {

    $('.tombolTambahData').on('click', function () {

        $('#formModalLabel').html('Add Menu');
        $('.modal-footer button[type=submit]').html('Add Menu');

    });

    $('.tampilModalUbah').on('click', function () {

        $('#formModalLabel').html('Update Menu');
        $('.modal-footer button[type=submit]').html('Update Menu');

        const id = $(this).data('id');

        $.ajax({

            url: '<?= base_',
            data: { id: id },
            method: 'post',
            dataType: 'json',
            success: function (data) {
                $('#menu').val(data.menu);

            }


        });

    });

});