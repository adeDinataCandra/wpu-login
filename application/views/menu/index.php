<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>



    <div class="row">
        <div class="col-lg-6">
            <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '
        </div>'); ?>

            <?= $this->session->flashdata('message'); ?>

            <a href="" class="btn btn-primary mb-3 tombolTambahData" data-toggle="modal" data-target="#formModal">Add New Menu</a>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Menu</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody id="show_data">
                    <?php $i = 1;  ?>
                    <?php foreach ($menu as $m) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $m['menu']; ?></td>
                            <td>
                                <a class="badge badge-pill badge-success tampilModalUbah" data-toggle="modal" data-target="#formModal" href="<?= base_url('menu/update/') . $m['id']; ?>" data-id="<?= $m['id']; ?>"><i class="far fa-edit"></i></a>
                                <a class="badge badge-pill badge-danger" href="<?= base_url('menu/delete/') . $m['id']; ?>" onclick="return confirm('yakin ?'); "><i class="fas fa-trash-alt"></i></a> </td>
                        </tr>
                        <?php $i++ ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div> <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
</div>

<!-- Modal -->
<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button> -->

<!-- MODAL ADD -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formModalLabel">Tambah Menu</h5>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('menu'); ?>" method="post">
                    <input type="hidden" name="id" id="id">
                    <div class="form-group">
                        <label class="control-label col-xs-3">Menu</label>
                        <div class="col-xs-9">
                            <input name="menu" id="menu" class="form-control" type="text" placeholder="Menu" style="width:335px;" required>
                        </div>
                    </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                <button type="submit" class="btn btn-info" id="btn_simpan">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!--END MODAL ADD-->

<script>
    $(function() {
        $('.tombolTambahData').on('click', function() {
            $('#formModalLabel').html('Add Menu');
            $('.modal-footer button[type=submit]').html('add menu');
        });
        $('.tampilModalUbah').on('click', function() {
            $('#formModalLabel').html('Update Menu');
            $('.modal-footer button[type=submit]').html('Update menu');
            $('.modal-body form').attr('action', '<?= base_url('menu/ubah'); ?>');

            const id = $(this).data('id');

            $.ajax({
                url: "<?= base_url('menu/detailMenu') ?>",
                data: {
                    id: id
                },
                method: 'post',
                dataType: 'json',
                success: function(data) {
                    $('#menu').val(data.menu);
                    $('#id').val(data.id);
                }


            })
        });
    });
</script>