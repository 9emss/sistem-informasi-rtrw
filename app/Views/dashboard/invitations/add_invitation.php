<?= $this->extend('dashboard/template/index'); ?>
<?= $this->section('content'); ?>

<div class="row">
    <div class="col-12">
        <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                    <h6 class="text-white text-capitalize ps-3">Add Invitations</h6>
                </div>
            </div>
            <div class="card-body px-0 pb-2">


                <div class="p-4">
                    <form action="<?= base_url() ?>/invitation/create" method="POST" enctype="multipart/form-data">
                        <?= csrf_field(); ?>

                        <input type="hidden" class="form-control" name="invitation" value="<?= $numbInv ?>">

                        <div class="input-group input-group-outline mb-4">
                            <label class="form-label">Creator Id</label>
                            <input type="text" class="form-control" name="c_id" value="<?= user()->id ?>">
                        </div>

                        <button type="submit" class="btn btn-info">Info</button>

                    </form>
                </div>


            </div>
        </div>
    </div>
</div>
<!-- 
    #TODO BUAT DATATABLES
 -->
<?= $this->endSection(); ?>