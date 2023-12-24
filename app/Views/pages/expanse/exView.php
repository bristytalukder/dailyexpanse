<?= $this->extend('backend/nav') ?>
<?= $this->section('content') ?>
<!----------------------------- Start Content ------------------------------->
<div class="content">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Category List View</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered text-center">
                                    <thead>
                                        <tr class="text-center">
                                            <th>ID</th>
                                            <th>Amount</th>
                                            <th>Date</th>
                                            <th>Category Name</th>
                                            <th colspan='2' >Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if($ExView) :?>
                                            <?php foreach ($ExView as $row) :?>
                                                <tr>
                                                    <td><?= $row['ex_id'] ?></td>
                                                    <td><?= $row['ex_amount'] ?></td>
                                                    <td><?= $row['date'] ?></td>
                                                    <td><?= $row['cate_name'] ?></td>
                                                    <td class="text-center"><a href="<?= base_url() ?>exView/edit/<?= $row['ex_id'] ?>" class='btn btn-info'><i class="fa fa-pencil"></i></a></td>
                                                    <td><a href="<?= base_url() ?>ex/delete/<?= $row['ex_id'] ?>" class='btn btn-danger'><i class="fa fa-trash"></i></a></td>
                                                </tr>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
<!----------------------------- End Content ------------------------------->
<?= $this->include('backend/footer') ?>
<?= $this->endSection('content') ?>