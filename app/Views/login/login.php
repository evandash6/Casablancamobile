<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>
            CASA BLANCA
        </title>
        <meta name="description" content="Blank">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
        <!-- Call App Mode on ios devices -->
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <!-- Remove Tap Highlight on Windows Phone IE -->
        <meta name="msapplication-tap-highlight" content="no">
        <!-- base css -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
        <link rel="stylesheet" media="screen, print" href="<?=base_url()?>/frontend/css/login.css">  
        <link rel="stylesheet" media="screen, print" href="<?=base_url()?>/frontend/css/login2.css">  
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- Place favicon.ico in the root directory -->
        <link rel="icon" type="image/png" sizes="32x32" href="<?=base_url()?>/favicon.ico">
    </head>
<body class="bg-dark">
<section class="login-clean" style="max-height: 100%;min-height: 100%;background: linear-gradient(-39deg, rgb(0,91,157) 45%, var(--white));border-bottom-style: none;min-width: 100%;max-width: 100%;">
        <form method="post" style="max-width: 100%;min-width: 100%;background: rgba(255,255,255,0);margin-top: 10%;">
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><img style="text-align: justify;width: auto;max-width: 100%;border-radius: 47px;" src="<?=base_url()?>/frontend/img/logo%20marca.png"></div>
            <div class="form-group">
                <div class="container" style="margin-top: 40px;">
                    <div class="form-row" style="border-bottom-style: solid;border-bottom-color: #ffffff;">
                        <div class="col-1 col-md-6 align-self-center" style="text-align: center;"><i class="fa fa-user" style="font-size: 25px;color: rgba(231,231,231,0.72);width: 20px;"></i></div>
                        <div class="col-11 col-md-6"><input class="form-control frm" type="email" name="email" placeholder="Email" style="color: rgb(210,209,209);background: rgba(247,249,252,0);border-bottom-color: rgba(255,255,255,0);" autocomplete="off"></div>
                    </div>
                    <div class="form-row" style="border-bottom-style: solid;border-bottom-color: #ffffff;margin-top: 1rem;">
                        <div class="col-1 col-md-6 align-self-center" style="text-align: center;"><i class="fa fa-key" style="font-size: 25px;color: rgba(231,231,231,0.72);width: 20px;"></i></div>
                        <div class="col-11 col-md-6"><input class="form-control frm" type="password" name="password" placeholder="Contraseña" style="background: rgba(247,249,252,0);color: rgb(255,255,255);border-bottom-style: none;"></div>
                    </div>
                </div>
            </div>
            <div class="form-group"><button class="btn btn-primary btn-block" onclick="location.href='<?=base_url()?>/administracion/'" type="button" style="color: #f7f9fc;background: rgb(74,158,75);border-bottom-style: none;border-bottom-color: var(--green);">Inicio</button></div><a class="forgot" href="#" style="color: rgb(255,255,255);">¿Olvidaste tú usuario o contraseña?</a>
        </form>
    </section>
</body>
<script>
   
</script>