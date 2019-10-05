<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-lg-7">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="col-lg">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 ">Change Your Password For ?</h1>
                                <h4 class="mb-4"> <?= $this->session->userdata('reset_email'); ?>
                            </div>

                            <?= $this->session->flashdata('message'); ?>

                            <form class="user" method="post" action="<?= base_url('auth/changePassword'); ?> ">
                                <div class="form-group">
                                    <input type="password" name="password1" class="form-control form-control-user" id="password1" aria-describedby="emailHelp" placeholder="Enter New Password...">

                                    <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password2" class="form-control form-control-user" id="password2" aria-describedby="emailHelp" placeholder="Repeat Password...">

                                    <?= form_error('password2', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>

                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Change Password
                                </button>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="<?= base_url('auth'); ?>">Back to login</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

</div>

<script>
    $(document).ready(function() {
        $('.checkbox').click(function() {
            if ($(this).is(':checked')) {
                $('.password-login').attr('type', 'text');
            } else {
                $('.password-login').attr('type', 'password');
            }
        });
    });
</script>