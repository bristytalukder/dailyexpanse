<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Codeigniter Auth User Registration Example</title>
    <style>
        .bg-img {
        /* The image used */
        background-image: url("login4.jpeg");

        min-height: 380px;

        /* Center and scale the image nicely */
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        position: relative;
        height: 100%;
        width: 50%;
        margin: auto;
        margin-top: 25px;
        border: 3px;
        padding: 10px
        margin: ;
        }
    </style>
</head>
<body>
<div class="bg-img">
    <div class="container mt-5">
        <div class="row justify-content-md-center">
            <div class="col-5">
                <h2 class="text-center" style="color:white;">Register User</h2>
                <?php if(isset($validation)):?>
                <div class="alert alert-warning">
                   <?= $validation->listErrors() ?>
                </div>
                <?php endif;?>
                <form action="<?php echo base_url(); ?>/Register/store" method="post">
                    <div class="form-group mb-3">
                        <input type="text" name="name" placeholder="Name" value="<?= set_value('name') ?>" class="form-control" >
                    </div>
                    <div class="form-group mb-3">
                        <input type="email" name="email" placeholder="Email" value="<?= set_value('email') ?>" class="form-control" >
                    </div>
                    <div class="form-group mb-3">
                        <input type="password" name="password" placeholder="Password" class="form-control" >
                    </div>
                    <div class="form-group mb-3">
                        <input type="password" name="confirmpassword" placeholder="Confirm Password" class="form-control" >
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-dark">Signup</button>
                    </div>
                    <div class="d-grid">
                         <a  class="btn btn-info" href="<?php echo site_url(); ?>/signin"
								><i class="dw dw-logout"></i>Already member? Login here</a
							>
                    </div> 
                </form>
            </div>
        </div>
    </div>
    </div>
</body>
</html>