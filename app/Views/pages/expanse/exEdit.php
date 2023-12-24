<?= $this->extend('backend/nav') ?>
<?= $this->section('content') ?>
<!----------------------------- Start Content ------------------------------->

<div class="col-lg-11 float-left p-3 3 mx-5 ">
            <div class="card justify-content-center">
                <div class="card-header text-center">
                    <strong class="card-title">Add Daily Expanse</strong>
                </div>
                <div class="card-body card-block">
                <form action="<?= base_url(); ?>ex/update/<?= $exData['ex_id'] ?>" method="POST" enctype="multipart/form-data" class="form-horizontal">
                    <div class="col-12 col-md-9"><input type="hidden" id="text-input" name="_method" value="PUT" class="form-control"></div>        
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="eamount" class=" form-control-label">Enter Amount:</label></div>
                            <div class="col-12 col-md-9"><input type="text" value ="<?= $exData['ex_amount']?>" id="eamount" name="ex_amount" placeholder="enter your amount" class="form-control"></div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="edate" class=" form-control-label">Date :</label></div> 
                            <div class="col-12 col-md-9"><input type="date" id="edate" value ="<?= $exData['date']?>" name="date" placeholder="12/12/1/2022" class="form-control"></div>
                        </div>
                         <div class="row form-group">
                            <div class="col col-md-3"><label for="edate" class=" form-control-label">Expanse Category :</label></div>
                            <select class="form-select" name="category" id="">
                                    <option selected>open this select menu</option>
                                    <?php foreach($category as $row) : ?>
                                    <option value="<?=$row['cate_id'] ?>" <?= $row['cate_id'] == $exData['category'] ? 'selected' : '' ?>><?=$row['cate_name'] ?></option>
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