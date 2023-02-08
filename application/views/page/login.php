<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Template 2</title>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/Login-screen.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/Navigation-with-Search.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/styles.css">
</head>

<body>
    <div id="login-one" class="login-one">
        <form class="login-one-form" method="post" action="login/login">
            <div class="col">
                <div class="login-one-ico"><i class="fa fa-unlock-alt" id="lockico"></i></div>
                <div class="form-group mb-3">
                    <div>
                        <h3 id="heading">Log in</h3>
                    </div><input class="form-control" type="text" id="input-1" placeholder="Email" style="margin-top: 5%;" name="email"><input class="form-control" type="password" id="input-2" placeholder="Password" style="margin-top: 5%;" name="mdp"><button class="btn btn-primary" id="button" style="background-color: #007ac9;width: 80%;" type="submit">Log in</button>
                </div>
            </div><a class="text-center d-xl-flex justify-content-xl-center align-items-xl-center" href="<?php echo base_url();?>login/inscription">Inscription</a>
        </form>
    </div>
    <script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>