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
                                <h1 class="h4 text-gray-900 mb-4">Login Page!</h1>
                            </div>

                            <?= $this->session->flashdata('message'); ?>

                            <form class="user" method="post" action"">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address..." value="<?= set_value('email'); ?>">
                                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control password-login form-control-user" id="exampleInputPassword" placeholder="Password">
                                    <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input checkbox" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Show Password</label>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Login
                                </button>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="<?= base_url('auth/forgotPassword'); ?>">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="<?= base_url('auth/registration'); ?>">Create an Account!</a>
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