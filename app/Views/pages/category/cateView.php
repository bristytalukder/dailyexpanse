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
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr class="text-center">
                                            <th>ID</th>
                                            <th>Category Name</th>
                                           
                                            <th colspan='2' >Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if($viewC) :?>
                                            <?php foreach ($viewC as $row) :?>
                                                <tr>
                                                    <td><?= $row['cate_id'] ?></td>
                                                    <td><?= $row['cate_name'] ?></td>
                                                   
                                                    <td class="text-center"><a href="category/edit/<?= $row['cate_id'] ?>" class='btn btn-info'><i class="fa fa-pencil"></i></a></td>
                                                    <td><a href="category/delete/<?= $row['cate_id'] ?>" class='btn btn-danger'><i class="fa fa-trash"></i></a></td>
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