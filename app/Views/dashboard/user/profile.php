<?= $this->extend('dashboard/template/index'); ?>

<?= $this->section('content'); ?>

<div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('https://images.unsplash.com/photo-1531512073830-ba890ca4eba2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80');">
    <span class="mask  bg-gradient-primary  opacity-6"></span>
</div>
<div class="card card-body mx-1 mx-md-4 mt-n6">

    <div class="row">
        <div class="row mt-3">
            <div class="col-12 col-md-4 col-xl-4 position-relative">

                <!-- Page Heading -->
                <div class="card card-plain h-100 shadow-lg">
                    <div class="card-header">
                        <h1 class="h3 mb-4"><?= ($user['role'] != 'developer') ? 'Detail Warga' : 'Detail Pengurus' ?></h1>
                    </div>
                    <div class="card-body text-center">
                        <div class="account-settings">
                            <div class="sirt-profile">
                                <div class="sirt-avatar">
                                    <img src="<?= base_url('/assets/img/' . $user['avatar']); ?>" alt="<?= $user['fullname'] ?>">
                                </div>
                                <h5 class="user-name"><?= $user['fullname'] ?></h5>
                                <p class="user-email"><?= $user['email'] ?></p>
                            </div>
                            <div class="about">
                                <?php if ($user['role'] === 'developer') : ?>
                                    <h5><?= 'Developer' ?></h5>
                                <?php elseif ($user['role'] === 'admin') : ?>
                                    <h5><?= 'Pengurus' ?></h5>
                                <?php else : ?>
                                    <h5><?= 'Warga' ?></h5>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-xl-8 mt-xl-4 mt-4">
                <div class="card card-plain h-100 shadow-lg">
                    <div class="card-body px-4 pt-2">
                        <div class="row gutters">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <h6 class="mb-2 text-primary">Detail Warga</h6>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="fullName">NIK</label>
                                    <input type="text" class="form-control" value="<?= $user['nik'] ?>" disabled>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="fullName">Email</label>
                                    <input type="text" class="form-control" value="<?= $user['email'] ?>" disabled>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="fullName">Nama Lengkap</label>
                                    <input type="text" class="form-control" value="<?= $user['fullname'] ?>" disabled>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="fullName">No Tlp/HP</label>
                                    <input type="text" class="form-control" value="<?= $user['phone'] ?>" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="row gutters">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <h6 class="mt-3 mb-2 text-primary">Alamat</h6>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="fullName">Jalan</label>
                                    <input type="text" class="form-control" value="<?= $user['address'] ?>" disabled>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="fullName">Provinsi</label>
                                    <input type="text" class="form-control" value="<?= $user['province'] ?>" disabled>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="fullName">Kota</label>
                                    <input type="text" class="form-control" value="<?= $user['city'] ?>" disabled>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="fullName">Kode Pos</label>
                                    <input type="text" class="form-control" value="<?= $user['zip'] ?>" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="row gutters">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="d-flex justify-content-end mt-3">
                                    <button onclick="window.location = '<?= base_url('warga/edit-profile/' . $user['username']); ?>'" style="width: 80px;" class="btn btn-info">Edit</button>
                                    <button type="button" onclick="ConfirmDelete()" class="btn btn-danger" <?= ($user['role'] !== 'developer') ? 'hidden' : '' ?>>Hapus Data Warga</button>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>


</div>

<?= $this->endSection(); ?>