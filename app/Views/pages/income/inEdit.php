<?= $this->extend('backend/nav') ?>
<?= $this->section('content') ?>
<!----------------------------- Start Content ------------------------------->

<div class="col-lg-11 float-left p-3 3 mx-5 ">
            <div class="card justify-content-center">
                <div class="card-header text-center">
                    <strong class="card-title">Add Income</strong>
                </div>
                <div class="card-body card-block">
                <form action="<?= base_url(); ?>in/update/<?= $inData['in_id'] ?>" method="POST" enctype="multipart1/form-data" class="form-horizontal">
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="inamount" class=" form-control-label">Enter Amount:</label></div>
                            <div class="col-12 col-md-9"><input type="text" value ="<?= $inData['in_amount'] ?>" id="inamount" name="in_amount" placeholder="enter your amount" class="form-control"></div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="indate" class=" form-control-label">Date :</label></div> 
                            <div class="col-12 col-md-9"><input type="date" id="indate" value ="<?= $inData['date'] ?>" name="date" placeholder="12/12/1/2022" class="form-control"></div>
                        </div>
                         <div class="row form-group">
                            <div class="col col-md-3"><label for="incategory" class=" form-control-label">Income Category :</label></div>
                            <select name="in_category" id="select" class="form-control">
                                    <option value="0">Please select a category</option>
                                        <?php foreach ($fixdcategory as $row) :?>
                                            <option value="<?= $row['inc_id']?>" <?= $row['inc_id'] == $inData['in_category'] ? 'selected' : '' ?>><?= $row['inc_name']?></option>
                                        <?php endforeach?>
                            </select>
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