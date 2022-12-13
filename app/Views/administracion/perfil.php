<main class="page">
    <section class="clean-block features" style="height: 87px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="text-info" style="margin-top: 15px;">Mi Perfil</h2>
                </div>
            </div>
        </div>
        <div class="container" style="height: 90vh;"></div>
    </section>
</main>
<div class="container">
        <div class="row" style="margin-bottom: 13px;">
            <div class="col-md-12 text-center align-self-baseline" style="opacity: 1;"><img class="border rounded-circle shadow" src="<?=base_url()?>/frontend/img/user_ico.png" style="max-width: 60%;opacity: 0.45;"><i class="fa fa-pencil-square-o" style="font-size: 30px;color: var(--cyan);"></i></div>
            <div class="col-md-12 text-center" style="margin-top: 14px;text-align: right;font-size: 20px;"><button class="btn btn-primary btn-lg btx_qr" type="button" style="background: var(--orange);border-style: none;border-color: rgb(255, 255, 255);border-top-color: rgb(255,;border-right-color: 255,;border-bottom-style: none;border-bottom-color: 255);border-left-color: 255,;">QR</button><span style="margin-left: 20px;"># Socio: <strong><?=$resultado['No_Socio']?></strong></span></div>
        </div>
</div>
<div class="container">
        <div class="row" style="margin-top: 20px;">
            <div class="col-md-12" style="background: var(--success);padding-top: 5px;padding-bottom: 5px;"><span style="font-size: 20px;color: var(--light);">Datos Generales</span></div>
        </div>
</div>
<div class="container">
        <div class="row">
            <div class="col-md-6"><label class="col-form-label" style="color: var(--info);">Nombre Completo</label></div>
            <div class="col-md-6"><input class="form-control-plaintext" type="text" value="<?=$resultado['Nombre_Completo']?>" readonly="" style="border-bottom-style: solid;border-bottom-color: rgba(108,117,125,0.39);"></div>
        </div>
        <div class="row" style="margin-top: 15px;">
            <div class="col-6 col-md-6"><label class="col-form-label" style="color: var(--info);">Fecha de Nac</label></div>
            <div class="col-6 col-md-6"><label class="col-form-label" style="color: var(--info);">Fecha de Ingreso</label></div>
            <div class="col-6 col-md-6"><input class="form-control-plaintext" type="text" value="<?=$resultado['Fecha_Nacimiento']?>" readonly="" style="border-bottom-style: solid;border-bottom-color: rgba(108,117,125,0.39);"></div>
            <div class="col-6 col-md-6"><input class="form-control-plaintext" type="text" value="<?=$resultado['Fecha_Ingreso']?>" readonly="" style="border-bottom-style: solid;border-bottom-color: rgba(108,117,125,0.39);"></div>
        </div>
        <div class="row" style="margin-top: 15px;">
            <div class="col-md-6"><label class="col-form-label" style="color: var(--info);">Telefono Celular</label></div>
            <div class="col-md-6"><input class="form-control-plaintext" type="text" value="<?=$resultado['C_Celular']?>" readonly="" style="border-bottom-style: solid;border-bottom-color: rgba(108,117,125,0.39);padding-top: px;"></div>
        </div>
        <div class="row" style="margin-top: 15px;">
            <div class="col-md-6"><label class="col-form-label" style="color: var(--info);">Email Personal</label></div>
            <div class="col-md-6"><input class="form-control-plaintext" type="text" value="<?=$resultado['email']?>" readonly="" style="border-bottom-style: solid;border-bottom-color: rgba(108,117,125,0.39);"></div>
        </div>
        <div class="row" style="margin-top: 15px;">
            <div class="col-md-6"><label class="col-form-label" style="color: var(--info);">Ciudad</label></div>
            <div class="col-md-6"><input class="form-control-plaintext" type="text" value="<?=$resultado['C_Ciudad']?>" readonly="" style="border-bottom-style: solid;border-bottom-color: rgba(108,117,125,0.39);"></div>
        </div>
        <div class="row" style="margin-top: 15px;">
            <div class="col-md-6"><label class="col-form-label" style="color: var(--info);">Colonia</label></div>
            <div class="col-md-6"><input class="form-control-plaintext" type="text" value="<?=$resultado['C_Colonia']?>" readonly="" style="border-bottom-style: solid;border-bottom-color: rgba(108,117,125,0.39);"></div>
        </div>
        <div class="row" style="margin-top: 15px;">
            <div class="col-md-6"><label class="col-form-label" style="color: var(--info);">Asesor de Ventas Asignado</label></div>
            <div class="col-md-6"><input class="form-control-plaintext" type="text" value="<?=$resultado['Asesor']?>" readonly="" style="border-bottom-style: solid;border-bottom-color: rgba(108,117,125,0.39);"></div>
        </div>
        <div class="row" style="margin-top: 20px;">
            <div class="col-md-12" style="background: var(--success);padding-top: 5px;padding-bottom: 5px;"><span style="font-size: 20px;color: var(--light);">Memebresia</span></div>
        </div>
        <div class="row" style="margin-top: 15px;">
            <div class="col-6 col-md-6"><label class="col-form-label" style="color: var(--info);">Memebresia</label></div>
            <div class="col-6 col-md-6"><label class="col-form-label" style="color: var(--info);"># de Integrante</label></div>
            <div class="col-6 col-md-6"><input class="form-control-plaintext" type="text" value="<?=$resultado['Membresia']?>" readonly="" style="border-bottom-style: solid;border-bottom-color: rgba(108,117,125,0.39);"></div>
            <div class="col-6 col-md-6"><input class="form-control-plaintext" type="text" value="<?=$resultado['Numero_Integrante']?>" readonly="" style="border-bottom-style: solid;border-bottom-color: rgba(108,117,125,0.39);"></div>
        </div>
</div>

<script>
    $('body').on('click','.btx_qr',function(){
        alert('Nº Socio: <br> <b><?=$resultado['No_Socio']?></b>','<div class="row"><div class="col-md-12 text-center"><?=$qr?></div></div>')
    })
</script>