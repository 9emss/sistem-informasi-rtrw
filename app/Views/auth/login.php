<?= $this->extend('auth/templates/index'); ?>

<?= $this->section('auth'); ?>

<div class="page-header align-items-start min-vh-100" style="background-image: url('https://images.unsplash.com/photo-1497294815431-9365093b7331?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&w=1950&q=80'); width: auto;">
    <span class="mask bg-gradient-dark opacity-6"></span>
    <div class="container my-auto">
        <div class="row">
            <div class="col-lg-4 col-md-8 col-12 mx-auto">
                <div class="card z-index-0 fadeIn3 fadeInBottom">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                            <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Sign in</h4>
                            <div class="row mt-3">
                                <div class="col-2 text-center ms-auto">
                                    <a class="btn btn-link px-3" href="javascript:;">
                                        <i class="fa fa-facebook text-white text-lg"></i>
                                    </a>
                                </div>
                                <!-- <div class="col-2 text-center px-1">
                                    <a class="btn btn-link px-3" href="javascript:;">
                                        <i class="fa fa-github text-white text-lg"></i>
                                    </a>
                                </div> -->
                                <div class="col-2 text-center me-auto">
                                    <a class="btn btn-link px-3" href="<?= route_to('gauth') ?>">
                                        <i class="fa fa-google text-white text-lg"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <?= view('Myth\Auth\Views\_message_block') ?>
                        <form action="<?= route_to('login') ?>" method="post" role="form" class="text-start">
                            <?= csrf_field() ?>

                            <?php if ($config->validFields === ['email']) : ?>
                                <div class="input-group input-group-outline <?php if (session('errors.login')) : ?>is-invalid<?php endif ?> my-3">
                                    <label class="form-label" for="login"><?= lang('Auth.email') ?></label>
                                    <input type="email" class="form-control" name="login" autocomplete="off">
                                    <div class=" invalid-feedback">
                                        <?= session('errors.login') ?>
                                    </div>
                                </div>
                            <?php else : ?>
                                <div class="input-group input-group-outline <?php if (session('errors.login')) : ?>is-invalid<?php endif ?> my-3">
                                    <label class="form-label" for="login"><?= lang('Auth.emailOrUsername') ?></label>
                                    <input type="text" class="form-control" name="login" autocomplete="off">
                                    <div class=" invalid-feedback">
                                        <?= session('errors.login') ?>
                                    </div>
                                </div>
                            <?php endif; ?>

                            <div class="input-group input-group-outline <?php if (session('errors.password')) : ?>is-invalid<?php endif ?> mb-3">
                                <label class="form-label" for="password"><?= lang('Auth.password') ?></label>
                                <input type="password" name="password" class="form-control" autocomplete="off">
                                <div class="invalid-feedback">
                                    <?= session('errors.password') ?>
                                </div>
                            </div>

                            <?php if ($config->allowRemembering) : ?>
                                <div class="form-check form-switch d-flex align-items-center mb-3">
                                    <input class="form-check-input" <?php if (old('remember')) : ?> checked <?php endif ?> type="checkbox" name="remember" id="rememberMe">
                                    <label class="form-check-label mb-0 ms-2" for="rememberMe"><?= lang('Auth.rememberMe') ?></label>
                                </div>
                            <?php endif; ?>

                            <div class="text-center">
                                <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2"><?= lang('Auth.loginAction') ?></button>
                            </div>

                            <?php if ($config->allowRegistration) : ?>
                                <p class="mt-4 text-sm text-center">
                                    Don't have an account?
                                    <a href="<?= route_to('register') ?>" class="text-primary text-gradient font-weight-bold">Sign up</a>
                                </p>
                            <?php endif; ?>

                            <?php if ($config->activeResetter) : ?>
                                <p class="mt-4 text-sm text-center">
                                    <?= lang('Auth.forgotYourPassword') ?>
                                    <a href="<?= route_to('forgot') ?>" class="text-primary text-gradient font-weight-bold">Click Here</a>
                                </p>
                            <?php endif; ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer position-absolute bottom-2 py-2 w-100">
        <div class="container">
            <div class="row align-items-center justify-content-lg-between">
                <div class="col-12 col-md-6 my-auto">
                    <div class="copyright text-center text-sm text-white text-lg-start">
                        © <script>
                            document.write(new Date().getFullYear())
                        </script>,
                        made with <i class="fa fa-heart" aria-hidden="true"></i> by
                        <a href="https://www.creative-tim.com" class="font-weight-bold text-white" target="_blank">Creative Tim</a>
                        for a better web.
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                        <li class="nav-item">
                            <a href="https://www.creative-tim.com" class="nav-link text-white" target="_blank">Creative Tim</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://www.creative-tim.com/presentation" class="nav-link text-white" target="_blank">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://www.creative-tim.com/blog" class="nav-link text-white" target="_blank">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-white" target="_blank">License</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</div>

<?= $this->endSection(); ?>