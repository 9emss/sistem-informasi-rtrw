<?= $this->extend('dashboard/template/index'); ?>

<?= $this->section('content'); ?>

<script src="https://code.jquery.com/jquery-3.6.1.slim.min.js" integrity="sha256-w8CvhFs7iHNVUtnSP0YKEg00p9Ih13rlL9zGqvLdePA=" crossorigin="anonymous"></script>

<div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('https://images.unsplash.com/photo-1531512073830-ba890ca4eba2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80');">
    <span class="mask  bg-gradient-primary  opacity-6"></span>
</div>
<div class="card mx-1 mx-md-4 mt-n6">

    <div class="card-body px-4 pt-2">

        <form action="<?= base_url() ?>/warga/update-profile/<?= $user['username'] ?>" method="post" enctype="multipart/form-data">
            <?= csrf_field() ?>
            <input type="hidden" name="gambarLama" value="<?= $user['avatar']; ?>">

            <div class="row gutters">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <h6 class="mb-2 text-primary">Detail Warga</h6>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="input-group input-group-outline mt-4 is-filled bg-light">
                        <label for="fullName" class="form-label">NIK</label>
                        <input type="text" class="form-control" value="<?= $user['nik'] ?>" name="nik" placeholder="<?= $user['nik'] ?>" disabled>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="input-group input-group-outline mt-4 is-filled bg-light">
                        <label for="fullName" class="form-label">Email</label>
                        <input type="text" class="form-control" value="<?= $user['email'] ?>" name="email" placeholder="<?= $user['email'] ?>" disabled>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="input-group input-group-outline mt-4 is-filled">
                        <label for="fullName" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" value="<?= $user['fullname'] ?>" name="fullname" placeholder="<?= $user['fullname'] ?>">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="input-group input-group-outline mt-4 is-filled">
                        <label for="fullName" class="form-label">No Tlp/HP</label>
                        <input type="text" class="form-control" value="<?= $user['phone'] ?>" name="phone" placeholder="<?= $user['phone'] ?>">
                    </div>
                </div>
            </div>
            <div class="row gutters">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <h6 class="mt-3 mb-2 text-primary">Alamat</h6>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="input-group input-group-outline mt-4 is-filled">
                        <label for="fullName" class="form-label">Jalan</label>
                        <input type="text" class="form-control" value="<?= $user['address'] ?>" name="address" placeholder="<?= $user['address'] ?>">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="input-group input-group-outline mt-4 is-filled">
                        <label for="fullName" class="form-label">Provinsi</label>
                        <select name="province" id="province" class="form-control">
                            <option value="<?= $user['provinceId'] ?>"><?= $user['province'] ?></option>
                            <?php


                            if (!$province) {
                                printf("Errormessage: %s\n", $db->error);
                            }

                            foreach ($province as $prov) {  ?>
                                <option value="<?= $prov->id; ?>"><?= $prov->name; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="input-group input-group-outline mt-4 is-filled">
                        <label for="fullName" class="form-label">Kota</label>
                        <select name="city" id="city" class="form-control">
                            <option value="<?= $user['cityId'] ?>"><?= $user['city'] ?></option>
                        </select>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="input-group input-group-outline mt-4 is-filled">
                        <label for="fullName" class="form-label">Kode Pos</label>
                        <input type="text" class="form-control" value="<?= $user['zip'] ?>" name="zip" placeholder="<?= $user['zip'] ?>">
                    </div>
                </div>
            </div>
            <div class="input-group col-lg-2 mt-3">
                <div class="col-sm-1">
                    <img src="<?= base_url() ?>/assets/img/<?= $user['avatar']; ?>" class="img-thumb img-priview" alt="" id="img">
                </div>
                <div class="form-check mt-4">
                    <div class="input-group input-group-outline">
                        <label class="btn btn-primary s-t">
                            Browse <input type="file" name="foto" style="display: none;" id="foto" multiple>
                        </label>
                        <input type="text" class="form-file-input s-h ?= ($validation->hasError('foto')) ? 'is-invalid' : ''; ?>" id="inputBox" value="<?= $user['avatar'] ?>" readonly>
                        <div id=" fotoFeedback" class="invalid-feedback">
                            <?= $validation->getError('foto'); ?>
                        </div>


                        <!-- <input type="file" class=" ?= ($validation->hasError('foto')) ? 'is-invalid' : ''; ?>" id="foto" name="foto" title=" " onchange="priviewImg()">
                        <label class="input-group-text" for="foto" name="asd">?= $user['avatar']; ?></label>
                        <div id=" fotoFeedback" class="invalid-feedback">
                            ?= $validation->getError('foto'); ?>
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="row gutters">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="d-flex justify-content-end mt-3">
                        <button type="submit" class="btn btn-primary">Edit</button>
                        <button type="button" onclick="ConfirmDelete()" class="btn btn-danger" <?= ($user['role'] !== 'developer') ? 'hidden' : '' ?>>Hapus Data Warga</button>
                    </div>
                </div>
            </div>

        </form>

    </div>

</div>

<script>
    function redirect(url) {
        location.href = url
    }

    const fileInput = document.getElementById('foto');

    fileInput.onchange = () => {
        const selectedFile = fileInput.files[0];

        document.getElementById('inputBox').value = selectedFile.name;

        const fileCover = new FileReader()
        fileCover.readAsDataURL(fileInput.files[0])

        fileCover.onload = (e) => {
            document.getElementById('img').src = e.target.result
        }
    }


    $('#province').change(function() {
        var province_id = $('#province').val()

        $.ajax({
            url: "<?= base_url('user/regencies/') ?>",
            method: 'POST',
            data: {
                province_id: province_id
            },
            async: false,
            dataType: 'json',
            success: function(data) {
                var html = ''

                for (var i = 0; i < data.length; i++) {
                    html += '<option value=' + data[i].id + '>' + data[i].name + '</option>'
                }

                $('#city').html(html)
            }
        })
    })



    // function priviewImg() {
    //     const cover = document.querySelector('#foto')
    //     const coverLabel = document.querySelector('.input-group-text')
    //     const imgPriview = document.querySelector('.img-priview')

    //     coverLabel.textContent = cover.files[0].name

    //     const fileCover = new FileReader()
    //     fileCover.readAsDataURL(cover.files[0])

    //     fileCover.onload = (e) => {
    //         imgPriview.src = e.target.result
    //     }
    // }
</script>

<?= $this->endSection(); ?>