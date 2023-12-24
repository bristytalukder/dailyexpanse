<?= $this->extend('backend/nav') ?>
<?= $this->section('content') ?>
<!----------------------------- Start Content ------------------------------->
<!----------------------- Start content ------------------------------------>
<div class="col-lg-11 float-left p-3 3 mx-5 ">
            <div class="card justify-content-center">
                <div class="card-header">
                    <strong>Edit Deposite Information</strong>
                </div>
                <div class="card-body card-block">
                <form action="<?= base_url(); ?>category/update/<?= $category['cate_id'] ?>" method="POST" enctype="multipart/form-data" class="form-horizontal">
                    <div class="col-12 col-md-9"><input type="hidden" id="text-input" name="_method" value="PUT" class="form-control"></div>        
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label" >Category Name :</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="cate_name" value="<?= $category['cate_name'] ?>" class="form-control"></div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary btn-sm">
                                    <i class="fa fa-dot-circle-o"></i> <strong>Update</strong>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

<!----------------------------- End Content ------------------------------->
<?= $this->include('backend/footer') ?>
<?= $this->endSection('content') ?>