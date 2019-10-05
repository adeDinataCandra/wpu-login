$('.form-check-input').on('click', function () {
    const menuId = $(this).data('menu');
    const roleId = $(this).data('role');

    $.ajax({
        url: "<?= base_url('admin/changeAccess') ?>",
        type: 'post',
        data: {
            menuId: menuId,
            roleId: roleId
        },
        success: function () {
            document.location.href = "<?= base_url('admin/roleAccess/'); ?>" + roleId
        }
    });
});