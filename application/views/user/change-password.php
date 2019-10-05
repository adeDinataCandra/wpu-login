<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-6">
            <?= $this->session->flashdata('message'); ?>
            <form action="<?= base_url('user/changePassword'); ?>" method="post">
                <div class="form-group">
                    <label for="current_password">Current Password</label>
                    <input type="password" class="form-control current_password" name="current_password" id="current_password" aria-describedby="emailHelp">
                    <input type="checkbox" class="form-checkbox1"> Show password
                    <?= form_error('current_password', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="new_password">New Password</label>
                    <input type="password" class="form-control new_password" name="new_password" id="new_password" aria-describedby="emailHelp">
                    <input type="checkbox" class="form-checkbox2"> Show password
                    <?= form_error('new_password', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="new_password2">Repeat Password 2</label>
                    <input type="password" class="form-control new_password2" name="new_password2" id="new_password2" aria-describedby="emailHelp">
                    <input type="checkbox" class="form-checkbox3"> Show password
                    <?= form_error('new_password2', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Change Pasword</button>
                </div>
            </form>
        </div>
    </div>


    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
</div>

<script>
    $(document).ready(function() {
        $('.form-checkbox1').click(function() {
            if ($(this).is(':checked')) {
                $('.current_password').attr('type', 'text');
            } else {
                $('.current_password').attr('type', 'password');
            }
        });

        $('.form-checkbox2').click(function() {
            if ($(this).is(':checked')) {
                $('.new_password').attr('type', 'text');
            } else {
                $('.new_password').attr('type', 'password');
            }
        });

        $('.form-checkbox3').click(function() {
            if ($(this).is(':checked')) {
                $('.new_password2').attr('type', 'text');
            } else {
                $('.new_password2').attr('type', 'password');
            }
        });
    });
</script>