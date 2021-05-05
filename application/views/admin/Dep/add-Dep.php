<?php $this->load->view('templates/header') ?>
<?php $this->load->view('templates/aside') ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <?= $subtitle ?>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?= site_url(); ?>index.php/admin/SAMAFULLController/manageSAMAFULL">Administrar Dep</a></li>
            <li class="active"><a href="<?= site_url(); ?>index.php/admin/SAMAFULLController/addSAMAFULL">Agregar Dep</a></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title"><?= $subtitle ?></h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body" style="overflow-x: auto;">
                        <h2>Add SAMAFULL</h2>
                        <form role="form" method="post" action="<?php echo site_url() ?>index.php/admin/SAMAFULLController/addSAMAFULLPost">
                            <div class="form-group">
                                <label for="UsrGuid">UsrGuid:</label>
                                <input type="text" class="form-control" id="UsrGuid" name="UsrGuid">
                            </div>
                            <div class="form-group">
                                <label for="DIRECTORIO">DIRECTORIO:</label>
                                <input type="text" class="form-control" id="DIRECTORIO" name="DIRECTORIO">
                            </div>
                            <div class="form-group">
                                <label for="CONSECUTIVO">CONSECUTIVO:</label>
                                <input type="text" class="form-control" id="CONSECUTIVO" name="CONSECUTIVO">
                            </div>
                            <div class="form-group">
                                <label for="UNDE_CONSECUTIVO_LABORANDO">UNDE_CONSECUTIVO_LABORANDO:</label>
                                <input type="text" class="form-control" id="UNDE_CONSECUTIVO_LABORANDO" name="UNDE_CONSECUTIVO_LABORANDO">
                            </div>
                            <div class="form-group">
                                <label for="TIPO_IDENTIFICACION">TIPO_IDENTIFICACION:</label>
                                <input type="text" class="form-control" id="TIPO_IDENTIFICACION" name="TIPO_IDENTIFICACION">
                            </div>
                            <div class="form-group">
                                <label for="IDENTIFICACION">IDENTIFICACION:</label>
                                <input type="text" class="form-control" id="IDENTIFICACION" name="IDENTIFICACION">
                            </div>
                            <div class="form-group">
                                <label for="LUGAR_EXPEDICION">LUGAR_EXPEDICION:</label>
                                <input type="text" class="form-control" id="LUGAR_EXPEDICION" name="LUGAR_EXPEDICION">
                            </div>
                            <div class="form-group">
                                <label for="CODIGO_MILITAR">CODIGO_MILITAR:</label>
                                <input type="text" class="form-control" id="CODIGO_MILITAR" name="CODIGO_MILITAR">
                            </div>
                            <div class="form-group">
                                <label for="NOMBRES">NOMBRES:</label>
                                <input type="text" class="form-control" id="NOMBRES" name="NOMBRES">
                            </div>
                            <div class="form-group">
                                <label for="APELLIDOS">APELLIDOS:</label>
                                <input type="text" class="form-control" id="APELLIDOS" name="APELLIDOS">
                            </div>
                            <div class="form-group">
                                <label for="sAMAccountname">SAMAccountname:</label>
                                <input type="text" class="form-control" id="sAMAccountname" name="sAMAccountname">
                            </div>
                            <div class="form-group">
                                <label for="sAMAccountname1">SAMAccountname1:</label>
                                <input type="text" class="form-control" id="sAMAccountname1" name="sAMAccountname1">
                            </div>
                            <div class="form-group">
                                <label for="sAMAccountname2">SAMAccountname2:</label>
                                <input type="text" class="form-control" id="sAMAccountname2" name="sAMAccountname2">
                            </div>
                            <div class="form-group">
                                <label for="userPrincipalName">UserPrincipalName:</label>
                                <input type="text" class="form-control" id="userPrincipalName" name="userPrincipalName">
                            </div>
                            <div class="form-group">
                                <label for="userPrincipalName1">UserPrincipalName1:</label>
                                <input type="text" class="form-control" id="userPrincipalName1" name="userPrincipalName1">
                            </div>
                            <div class="form-group">
                                <label for="userPrincipalName2">UserPrincipalName2:</label>
                                <input type="text" class="form-control" id="userPrincipalName2" name="userPrincipalName2">
                            </div>
                            <div class="form-group">
                                <label for="NAME">NAME:</label>
                                <input type="text" class="form-control" id="NAME" name="NAME">
                            </div>
                            <div class="form-group">
                                <label for="N">N:</label>
                                <input type="text" class="form-control" id="N" name="N">
                            </div>
                            <div class="form-group">
                                <label for="displayName">DisplayName:</label>
                                <input type="text" class="form-control" id="displayName" name="displayName">
                            </div>
                            <div class="form-group">
                                <label for="SEXO">SEXO:</label>
                                <input type="text" class="form-control" id="SEXO" name="SEXO">
                            </div>
                            <div class="form-group">
                                <label for="GRAD_ALFABETICO">GRAD_ALFABETICO:</label>
                                <input type="text" class="form-control" id="GRAD_ALFABETICO" name="GRAD_ALFABETICO">
                            </div>
                            <div class="form-group">
                                <label for="DESCGRADO">DESCGRADO:</label>
                                <input type="text" class="form-control" id="DESCGRADO" name="DESCGRADO">
                            </div>
                            <div class="form-group">
                                <label for="title">Title:</label>
                                <input type="text" class="form-control" id="title" name="title">
                            </div>
                            <div class="form-group">
                                <label for="ESPECIALIDAD">ESPECIALIDAD:</label>
                                <input type="text" class="form-control" id="ESPECIALIDAD" name="ESPECIALIDAD">
                            </div>
                            <div class="form-group">
                                <label for="company">Company:</label>
                                <input type="text" class="form-control" id="company" name="company">
                            </div>
                            <div class="form-group">
                                <label for="DESCDEPENDE">DESCDEPENDE:</label>
                                <input type="text" class="form-control" id="DESCDEPENDE" name="DESCDEPENDE">
                            </div>
                            <div class="form-group">
                                <label for="department">Department:</label>
                                <input type="text" class="form-control" id="department" name="department">
                            </div>
                            <div class="form-group">
                                <label for="extensionAttribute2">ExtensionAttribute2:</label>
                                <input type="text" class="form-control" id="extensionAttribute2" name="extensionAttribute2">
                            </div>
                            <div class="form-group">
                                <label for="extensionAttribute3">ExtensionAttribute3:</label>
                                <input type="text" class="form-control" id="extensionAttribute3" name="extensionAttribute3">
                            </div>
                            <div class="form-group">
                                <label for="EMAIL">EMAIL:</label>
                                <input type="text" class="form-control" id="EMAIL" name="EMAIL">
                            </div>
                            <div class="form-group">
                                <label for="DIRECCION">DIRECCION:</label>
                                <input type="text" class="form-control" id="DIRECCION" name="DIRECCION">
                            </div>
                            <div class="form-group">
                                <label for="CIUDAD">CIUDAD:</label>
                                <input type="text" class="form-control" id="CIUDAD" name="CIUDAD">
                            </div>
                            <div class="form-group">
                                <label for="PAIS">PAIS:</label>
                                <input type="text" class="form-control" id="PAIS" name="PAIS">
                            </div>
                            <div class="form-group">
                                <label for="CELULAR">CELULAR:</label>
                                <input type="text" class="form-control" id="CELULAR" name="CELULAR">
                            </div>
                            <div class="form-group">
                                <label for="UNIDAD_ACTUAL">UNIDAD_ACTUAL:</label>
                                <input type="text" class="form-control" id="UNIDAD_ACTUAL" name="UNIDAD_ACTUAL">
                            </div>
                            <div class="form-group">
                                <label for="FECHA_NACIMIENTO">FECHA_NACIMIENTO:</label>
                                <input type="text" class="form-control" id="FECHA_NACIMIENTO" name="FECHA_NACIMIENTO">
                            </div>
                            <div class="form-group">
                                <label for="GRUPO_SANGUINEO">GRUPO_SANGUINEO:</label>
                                <input type="text" class="form-control" id="GRUPO_SANGUINEO" name="GRUPO_SANGUINEO">
                            </div>
                            <div class="form-group">
                                <label for="FACTOR_RH">FACTOR_RH:</label>
                                <input type="text" class="form-control" id="FACTOR_RH" name="FACTOR_RH">
                            </div>
                            <div class="form-group">
                                <label for="TIPO_EMPLEADO">TIPO_EMPLEADO:</label>
                                <input type="text" class="form-control" id="TIPO_EMPLEADO" name="TIPO_EMPLEADO">
                            </div>
                            <div class="form-group">
                                <label for="HOJA_VIDA">HOJA_VIDA:</label>
                                <input type="text" class="form-control" id="HOJA_VIDA" name="HOJA_VIDA">
                            </div>
                            <div class="form-group">
                                <label for="NUMERO_CURSO">NUMERO_CURSO:</label>
                                <input type="text" class="form-control" id="NUMERO_CURSO" name="NUMERO_CURSO">
                            </div>
                            <div class="form-group">
                                <label for="UBICACION_ESCALAFON">UBICACION_ESCALAFON:</label>
                                <input type="text" class="form-control" id="UBICACION_ESCALAFON" name="UBICACION_ESCALAFON">
                            </div>
                            <div class="form-group">
                                <label for="FECHA_ULT_TRASL">FECHA_ULT_TRASL:</label>
                                <input type="text" class="form-control" id="FECHA_ULT_TRASL" name="FECHA_ULT_TRASL">
                            </div>
                            <div class="form-group">
                                <label for="FECHA_ULT_ASCENSO">FECHA_ULT_ASCENSO:</label>
                                <input type="text" class="form-control" id="FECHA_ULT_ASCENSO" name="FECHA_ULT_ASCENSO">
                            </div>
                            <div class="form-group">
                                <label for="EMAIL_INSTITUCIONAL">EMAIL_INSTITUCIONAL:</label>
                                <input type="text" class="form-control" id="EMAIL_INSTITUCIONAL" name="EMAIL_INSTITUCIONAL">
                            </div>
                            <div class="form-group">
                                <label for="Duration">Duration:</label>
                                <input type="text" class="form-control" id="Duration" name="Duration">
                            </div>
                            <div class="form-group">
                                <label for="Estado">Estado:</label>
                                <input type="text" class="form-control" id="Estado" name="Estado">
                            </div>
                            <div class="form-group">
                                <label for="GRNumerico">GRNumerico:</label>
                                <input type="text" class="form-control" id="GRNumerico" name="GRNumerico">
                            </div>
                            <div class="form-group">
                                <label for="Antiguedad">Antiguedad:</label>
                                <input type="text" class="form-control" id="Antiguedad" name="Antiguedad">
                            </div>
                            <div class="form-group">
                                <label for="GRUPO_GRADO">GRUPO_GRADO:</label>
                                <input type="text" class="form-control" id="GRUPO_GRADO" name="GRUPO_GRADO">
                            </div>
                            <div class="form-group">
                                <label for="GRUPO_CARGO">GRUPO_CARGO:</label>
                                <input type="text" class="form-control" id="GRUPO_CARGO" name="GRUPO_CARGO">
                            </div>
                            <div class="form-group">
                                <label for="GRUPO_FUNCIONAL">GRUPO_FUNCIONAL:</label>
                                <input type="text" class="form-control" id="GRUPO_FUNCIONAL" name="GRUPO_FUNCIONAL">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php $this->load->view('templates/footer') ?>
<?php $this->load->view('templates/controlsidebar') ?>