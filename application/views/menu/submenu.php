<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>



    <div class="row">
        <div class="col-lg">
            <?php if (validation_errors()) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
            <?php endif; ?>

            <?= $this->session->flashdata('message'); ?>

            <a href="" class="btn btn-primary mb-3 tombolTambahData" data-toggle="modal" data-target="#newSubMenuModal">Add New Submenu</a>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Menu</th>
                        <th scope="col">Title</th>
                        <th scope="col">url</th>
                        <th scope="col">Icon</th>
                        <th scope="col">Acive</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1;  ?>
                    <?php foreach ($SubMenu as $sm) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $sm['menu']; ?></td>
                            <td><?= $sm['title']; ?></td>
                            <td><?= $sm['url']; ?></td>
                            <td><?= $sm['icon']; ?></td>
                            <td><?= $sm['is_active']; ?></td>
                            <td>
                                <a class="badge badge-pill badge-success modalUbah" data-toggle="modal" data-target="#newSubMenuModal" href="<?= base_url('menu/subMenu/') . $sm['id']; ?>" data-id="<?= $sm['id']; ?>"><i class="far fa-edit"></i></a>
                                <a class="badge badge-pill badge-danger" href="<?= base_url('menu/deleteSubMenu/') . $sm['id']; ?>" onclick="return confirm('yakin ?'); "><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                        <?php $i++ ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
</div>

<!-- Modal -->
<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button> -->

<!-- Modal -->
<div class="modal fade" id="newSubMenuModal" tabindex="-1" role="dialog" aria-labelledby="newSubMenuModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formModalLabel">Add New Submenu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('menu/submenu'); ?>" method="post">
                    <input type="hidden" name="id" id="id">
                    <div class="form-group">
                        <select name="menu_id" id="menu_id" class="form-control">
                            <option value="">Select Menu</option>
                            <?php foreach ($menu as $m) : ?>
                                <option value="<?= $m['id']; ?>"><?= $m['menu']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="title" name="title" placeholder="Submenu title">
                    </div>


                    <div class="form-group">
                        <input type="text" name="url" id="url" class="form-control" placeholder="Submenu url">
                    </div>
                    <div class="form-group">
                        <input type="text" name="icon" id="icon" class="form-control" placeholder="Submenu icon">
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" name="is_active" id="is_active" checked>
                            <label class="form-check-label" for="defaultCheck1">
                                Is Active ?
                            </label>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Add</button>
            </div>
            </form>
        </div>
    </div>
</div>

<script>
    $(function() {
        $('.tombolTambahData').on('click', function() {
            $('#formModalLabel').html('Add Submenu');
            $('.modal-footer button[type=submit]').html('Add Submenu');
        });
        $('.modalUbah').on('click', function() {
            $('#formModalLabel').html('Update Submenu');
            $('.modal-footer button[type=submit]').html('Update Submenu');
            $('.modal-body form').attr('action', '<?= base_url('menu/updateSubMenu'); ?>');

            const id = $(this).data('id');

            $.ajax({
                url: "<?= base_url('menu/detailSubMenu') ?>",
                data: {
                    id: id
                },
                method: 'post',
                dataType: 'json',
                success: function(data) {
                    $('#title').val(data.title);
                    $('#menu_id').val(data.menu_id);
                    $('#url').val(data.url);
                    $('#icon').val(data.icon);
                    $('#id').val(data.id);

                }


            })
        });
    });
</script>