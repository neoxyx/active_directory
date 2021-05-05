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
            <li><a href="<?= site_url(); ?>index.php/admin/DGSM/DGSM">Administrar DGSM</a></li>
            <li class="active"><a href="<?= site_url(); ?>index.php/admin/DGSM/addDGSM">Agregar DGSM</a></li>
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
                                IDENTIFICACION : <?= $DGSM[0]->IDENTIFICACION ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-10 well">
                                NOMBRES : <?= $DGSM[0]->NOMBRES ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-10 well">
                                APELLIDOS : <?= $DGSM[0]->APELLIDOS ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-10 well">
                                SEXO : <?= $DGSM[0]->SEXO ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-10 well">
                                TITULO : <?= $DGSM[0]->TITULO ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-10 well">
                                CARGO : <?= $DGSM[0]->CARGO ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-10 well">
                                ESPECIALIDAD : <?= $DGSM[0]->ESPECIALIDAD ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-10 well">
                                UNIDAD : <?= $DGSM[0]->UNIDAD ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-10 well">
                                DISPENSARIO : <?= $DGSM[0]->DISPENSARIO ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-10 well">
                                DEPENDENCIA_LABORAL : <?= $DGSM[0]->DEPENDENCIA_LABORAL ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-10 well">
                                TELEFONO_OFICINA : <?= $DGSM[0]->TELEFONO_OFICINA ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-10 well">
                                EMAIL_PERSONAL : <?= $DGSM[0]->EMAIL_PERSONAL ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-10 well">
                                DIRECCION_PERSONAL : <?= $DGSM[0]->DIRECCION_PERSONAL ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-10 well">
                                CIUDAD_RESIDENCIA : <?= $DGSM[0]->CIUDAD_RESIDENCIA ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-10 well">
                                CELULAR : <?= $DGSM[0]->CELULAR ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-10 well">
                                USUARIO_DE_RED_JEFE_INMEDIATO : <?= $DGSM[0]->USUARIO_DE_RED_JEFE_INMEDIATO ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-10 well">
                                FECHA_DE_VIGENCIA : <?= $DGSM[0]->FECHA_DE_VIGENCIA ?>
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