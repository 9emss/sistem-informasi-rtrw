<?= $this->extend('auth/templates/index'); ?>

<?= $this->section('auth'); ?>

<section>
    <div class="page-header min-vh-100">
        <div class="container">
            <div class="row">
                <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 start-0 text-center justify-content-center flex-column">
                    <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center" style="background-image: url('<?= base_url() ?>/assets/dashboard/img/illustrations/illustration-signup.jpg'); background-size: cover;">
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column ms-auto me-auto ms-lg-auto me-lg-5">
                    <div class="card card-plain">
                        <div class="card-header">
                            <h4 class="font-weight-bolder">Sign Up</h4>
                            <p class="mb-0">Enter your email and password to register</p>
                            <?= view('Myth\Auth\Views\_message_block') ?>
                        </div>
                        <div class="card-body">
                            <form action="<?= route_to('register') ?>" method="post" role="form">
                                <?= csrf_field() ?>
                                <input type="hidden" name="avatar" value="default.png">

                                <!-- Field Nik -->
                                <div class="input-group input-group-outline <?php if (session('errors.nik')) : ?>is-invalid<?php endif ?> mb-3">
                                    <label class="form-label" for="nik"><?= lang('Auth.nik') ?></label>
                                    <input type="text" class="form-control" name="nik" value="<?= old('nik') ?>">
                                </div>
                                <!-- End of Field -->

                                <!-- Field Fullname -->
                                <div class="input-group input-group-outline <?php if (session('errors.fullname')) : ?>is-invalid<?php endif ?> mb-3">
                                    <label class="form-label" for="fullname"><?= lang('Auth.fullname') ?></label>
                                    <input type="text" class="form-control" name="fullname" value="<?= old('fullname') ?>">
                                </div>
                                <!-- End of Field -->

                                <!-- Field Email -->
                                <small id="emailHelp" class="form-text text-muted"><?= lang('Auth.weNeverShare') ?></small>
                                <div class="input-group input-group-outline <?php if (session('errors.email')) : ?>is-invalid<?php endif ?> mb-3">
                                    <label class="form-label" for="email"><?= lang('Auth.email') ?></label>
                                    <input type="email" class="form-control" name="email" aria-describedby="emailHelp" value="<?= old('email') ?>">
                                </div>
                                <!-- End of Field -->

                                <!-- Field Username -->
                                <div class="input-group input-group-outline <?php if (session('errors.username')) : ?>is-invalid<?php endif ?> mb-3">
                                    <label class="form-label" for="username"><?= lang('Auth.username') ?></label>
                                    <input type="text" class="form-control" name="username" value="<?= old('username') ?>">
                                </div>
                                <!-- End of Field -->

                                <!-- Field Phone -->
                                <div class="input-group input-group-outline <?php if (session('errors.phone')) : ?>is-invalid<?php endif ?> mb-3">
                                    <label class="form-label" for="phone"><?= lang('Auth.phone') ?></label>
                                    <input type="text" class="form-control" name="phone" value="<?= old('phone') ?>">
                                </div>
                                <!-- End of Field -->

                                <!-- Field Password -->
                                <div class="input-group input-group-outline <?php if (session('errors.password')) : ?>is-invalid<?php endif ?> mb-3">
                                    <label class="form-label" for="password"><?= lang('Auth.password') ?></label>
                                    <input type="password" class="form-control" name="password" autocomplete="off">
                                </div>
                                <!-- End of Field -->

                                <!-- Field Confirm Password -->
                                <div class="input-group input-group-outline <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?> mb-3">
                                    <label class="form-label" for="pass_confirm"><?= lang('Auth.repeatPassword') ?></label>
                                    <input type="password" class="form-control" name="pass_confirm" autocomplete="off">
                                </div>
                                <!-- End of Field -->

                                <!-- Field Address -->
                                <div class="input-group input-group-outline <?php if (session('errors.address')) : ?>is-invalid<?php endif ?> mb-3">
                                    <label class="form-label" for="address"><?= lang('Auth.address') ?></label>
                                    <input type="text" class="form-control" name="address" value="<?= old('address') ?>">
                                </div>
                                <!-- End of Field -->

                                <!-- Field Zip Code -->
                                <div class="input-group input-group-outline <?php if (session('errors.zip_code')) : ?>is-invalid<?php endif ?> mb-3">
                                    <label class="form-label" for="zip_code"><?= lang('Auth.zip_code') ?></label>
                                    <input type="text" class="form-control" name="zip_code" value="<?= old('zip_code') ?>">
                                </div>
                                <!-- End of Field -->

                                <!-- <div class="form-check form-check-info text-start ps-0">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                                    <label class="form-check-label" for="flexCheckDefault">
                                        I agree the <a href="javascript:;" class="text-dark font-weight-bolder">Terms and Conditions</a>
                                    </label>
                                </div> -->
                                <div class="text-center">
                                    <button type="submit" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0"><?= lang('Auth.register') ?></button>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer text-center pt-0 px-lg-2 px-1">
                            <p class="mb-2 text-sm mx-auto">
                                Already have an account?
                                <a href="<?= route_to('login') ?>" class="text-primary text-gradient font-weight-bold">Sign in</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection(); ?>