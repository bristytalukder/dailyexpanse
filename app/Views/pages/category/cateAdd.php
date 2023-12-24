<?= $this->extend('backend/nav') ?>
<?= $this->section('content') ?>
<!----------------------------- Start Content ------------------------------->
<div class="col-lg-11 float-left p-3 3 mx-5 ">
            <div class="card justify-content-center">
                <div class="card-header text-center">
                    <strong>Add Your Expanse Category</strong>
                </div>
                <div class="card-body card-block">
                    <form action="cateAdd" method="POST" enctype="multipart/form-data" class="form-horizontal">
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Category Name :</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="cate_name" placeholder="enter category name" class="form-control"></div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary btn-sm">
                                    <i class="fa fa-dot-circle-o"></i> <strong>Submit</strong>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
<!----------------------------- End Content ------------------------------->
<?= $this->include('backend/footer') ?>
<?= $this->endSection('content') ?>