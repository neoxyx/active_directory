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
            <li><a href="<?= site_url(); ?>index.php/admin/SAMAFULLController/manageSAMAFULL">Administrar SAMAFULL</a></li>
            <li class="active"><a href="<?= site_url(); ?>index.php/admin/SAMAFULLController/addSAMAFULL">Agregar SAMAFULL</a></li>
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
                        <div class="row">
                            <div class="col-xs-12 col-md-10 well">
                                UsrGuid : <?php echo $SAMAFULL[0]->UsrGuid ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-10 well">
                                DIRECTORIO : <?php echo $SAMAFULL[0]->DIRECTORIO ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-10 well">
                                CONSECUTIVO : <?php echo $SAMAFULL[0]->CONSECUTIVO ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-10 well">
                                UNDE_CONSECUTIVO_LABORANDO : <?php echo $SAMAFULL[0]->UNDE_CONSECUTIVO_LABORANDO ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-10 well">
                                TIPO_IDENTIFICACION : <?php echo $SAMAFULL[0]->TIPO_IDENTIFICACION ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-10 well">
                                IDENTIFICACION : <?php echo $SAMAFULL[0]->IDENTIFICACION ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-10 well">
                                LUGAR_EXPEDICION : <?php echo $SAMAFULL[0]->LUGAR_EXPEDICION ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-10 well">
                                CODIGO_MILITAR : <?php echo $SAMAFULL[0]->CODIGO_MILITAR ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-10 well">
                                NOMBRES : <?php echo $SAMAFULL[0]->NOMBRES ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-10 well">
                                APELLIDOS : <?php echo $SAMAFULL[0]->APELLIDOS ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-10 well">
                                sAMAccountname : <?php echo $SAMAFULL[0]->sAMAccountname ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-10 well">
                                sAMAccountname1 : <?php echo $SAMAFULL[0]->sAMAccountname1 ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-10 well">
                                sAMAccountname2 : <?php echo $SAMAFULL[0]->sAMAccountname2 ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-10 well">
                                userPrincipalName : <?php echo $SAMAFULL[0]->userPrincipalName ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-10 well">
                                userPrincipalName1 : <?php echo $SAMAFULL[0]->userPrincipalName1 ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-10 well">
                                userPrincipalName2 : <?php echo $SAMAFULL[0]->userPrincipalName2 ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-10 well">
                                NAME : <?php echo $SAMAFULL[0]->NAME ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-10 well">
                                N : <?php echo $SAMAFULL[0]->N ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-10 well">
                                displayName : <?php echo $SAMAFULL[0]->displayName ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-10 well">
                                SEXO : <?php echo $SAMAFULL[0]->SEXO ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-10 well">
                                GRAD_ALFABETICO : <?php echo $SAMAFULL[0]->GRAD_ALFABETICO ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-10 well">
                                DESCGRADO : <?php echo $SAMAFULL[0]->DESCGRADO ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-10 well">
                                title : <?php echo $SAMAFULL[0]->title ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-10 well">
                                ESPECIALIDAD : <?php echo $SAMAFULL[0]->ESPECIALIDAD ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-10 well">
                                company : <?php echo $SAMAFULL[0]->company ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-10 well">
                                DESCDEPENDE : <?php echo $SAMAFULL[0]->DESCDEPENDE ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-10 well">
                                department : <?php echo $SAMAFULL[0]->department ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-10 well">
                                extensionAttribute2 : <?php echo $SAMAFULL[0]->extensionAttribute2 ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-10 well">
                                extensionAttribute3 : <?php echo $SAMAFULL[0]->extensionAttribute3 ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-10 well">
                                EMAIL : <?php echo $SAMAFULL[0]->EMAIL ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-10 well">
                                DIRECCION : <?php echo $SAMAFULL[0]->DIRECCION ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-10 well">
                                CIUDAD : <?php echo $SAMAFULL[0]->CIUDAD ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-10 well">
                                PAIS : <?php echo $SAMAFULL[0]->PAIS ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-10 well">
                                CELULAR : <?php echo $SAMAFULL[0]->CELULAR ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-10 well">
                                UNIDAD_ACTUAL : <?php echo $SAMAFULL[0]->UNIDAD_ACTUAL ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-10 well">
                                FECHA_NACIMIENTO : <?php echo $SAMAFULL[0]->FECHA_NACIMIENTO ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-10 well">
                                GRUPO_SANGUINEO : <?php echo $SAMAFULL[0]->GRUPO_SANGUINEO ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-10 well">
                                FACTOR_RH : <?php echo $SAMAFULL[0]->FACTOR_RH ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-10 well">
                                TIPO_EMPLEADO : <?php echo $SAMAFULL[0]->TIPO_EMPLEADO ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-10 well">
                                HOJA_VIDA : <?php echo $SAMAFULL[0]->HOJA_VIDA ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-10 well">
                                NUMERO_CURSO : <?php echo $SAMAFULL[0]->NUMERO_CURSO ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-10 well">
                                UBICACION_ESCALAFON : <?php echo $SAMAFULL[0]->UBICACION_ESCALAFON ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-10 well">
                                FECHA_ULT_TRASL : <?php echo $SAMAFULL[0]->FECHA_ULT_TRASL ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-10 well">
                                FECHA_ULT_ASCENSO : <?php echo $SAMAFULL[0]->FECHA_ULT_ASCENSO ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-10 well">
                                EMAIL_INSTITUCIONAL : <?php echo $SAMAFULL[0]->EMAIL_INSTITUCIONAL ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-10 well">
                                Duration : <?php echo $SAMAFULL[0]->Duration ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-10 well">
                                Estado : <?php echo $SAMAFULL[0]->Estado ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-10 well">
                                GRNumerico : <?php echo $SAMAFULL[0]->GRNumerico ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-10 well">
                                Antiguedad : <?php echo $SAMAFULL[0]->Antiguedad ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-10 well">
                                GRUPO_GRADO : <?php echo $SAMAFULL[0]->GRUPO_GRADO ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-10 well">
                                GRUPO_CARGO : <?php echo $SAMAFULL[0]->GRUPO_CARGO ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-10 well">
                                GRUPO_FUNCIONAL : <?php echo $SAMAFULL[0]->GRUPO_FUNCIONAL ?>
                            </div>
                        </div>
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