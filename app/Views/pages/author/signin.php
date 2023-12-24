<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Codeigniter Login with Email/Password Example</title>
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
        margin-top: 30px;
        border: 3px;
        padding: 10px
       
        }
    </style>
  </head>
  <body>
  <div class="bg-img">
    <div class="container center">
        <div class="row justify-content-md-center">
            <div class="col-5">
                
                <h2 class="text-center" style="color:white;">Login in</h2>
                <?php if(session()->getFlashdata('msg')):?>
                    <div class="alert alert-warning">
                       <?= session()->getFlashdata('msg') ?>
                    </div>
                <?php endif;?>
              
                <form action="<?php echo base_url(); ?>/Login/loginAuth" method="post">
                    <div class="form-group mb-3">
                        <input type="email" name="email" placeholder="Email" value="<?= set_value('email') ?>" class="form-control" >
                    </div>
                    <div class="form-group mb-3">
                        <input type="password" name="password" placeholder="Password" class="form-control" >
                    </div>
                    
                    <div class="d-grid">
                         <button type="submit" class="btn btn-success">Login</button>
                    </div> 
                    <div class="d-grid">
                         <a  class="btn btn-info" href="<?php echo site_url(); ?>/signup"
								><i class="dw dw-logout"></i>New member? Register here.</a>
                    </div>      
                </form>
                
            </div>
              
        </div>
    </div>
    </div>
  </body>
</html>

