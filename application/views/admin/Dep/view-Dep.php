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
            <li><a href="<?= site_url(); ?>index.php/admin/DepController/manageDep">Administrar Dep</a></li>
            <li class="active"><a href="<?= site_url(); ?>index.php/admin/DepController/addDep">Agregar Dep</a></li>
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
                                CONSECUTIVO : <?php echo $Dep[0]->CONSECUTIVO ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-10 well">
                                SIGLA : <?php echo $Dep[0]->SIGLA ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-10 well">
                                DESCRIPCION_DEPENDENCIA : <?php echo $Dep[0]->DESCRIPCION_DEPENDENCIA ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-10 well">
                                INDICATIVO_MICROONDAS : <?php echo $Dep[0]->INDICATIVO_MICROONDAS ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-10 well">
                                NIVEL_JERARQUICO : <?php echo $Dep[0]->NIVEL_JERARQUICO ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-10 well">
                                NIVEL_ORGANIZACIONAL : <?php echo $Dep[0]->NIVEL_ORGANIZACIONAL ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-10 well">
                                NIVEL_FUNCIONAL : <?php echo $Dep[0]->NIVEL_FUNCIONAL ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-10 well">
                                SIGLA2 : <?php echo $Dep[0]->SIGLA2 ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-10 well">
                                SIGLA3 : <?php echo $Dep[0]->SIGLA3 ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-10 well">
                                SIGLA4 : <?php echo $Dep[0]->SIGLA4 ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-10 well">
                                SIGLA5 : <?php echo $Dep[0]->SIGLA5 ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-10 well">
                                SIGLA6 : <?php echo $Dep[0]->SIGLA6 ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-10 well">
                                SIGLA7 : <?php echo $Dep[0]->SIGLA7 ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-10 well">
                                SIGLA8 : <?php echo $Dep[0]->SIGLA8 ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-10 well">
                                SIGLA9 : <?php echo $Dep[0]->SIGLA9 ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-10 well">
                                SIGLA10 : <?php echo $Dep[0]->SIGLA10 ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-10 well">
                                SIGLA11 : <?php echo $Dep[0]->SIGLA11 ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-10 well">
                                SIGLA12 : <?php echo $Dep[0]->SIGLA12 ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-10 well">
                                SIGLA13 : <?php echo $Dep[0]->SIGLA13 ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-10 well">
                                OU_dependencia : <?php echo $Dep[0]->OU_dependencia ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-10 well">
                                Manager : <?php echo $Dep[0]->Manager ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-10 well">
                                UNDE_CONSECUTIVO : <?php echo $Dep[0]->UNDE_CONSECUTIVO ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-10 well">
                                LATITUD : <?php echo $Dep[0]->LATITUD ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-10 well">
                                LONGITUD : <?php echo $Dep[0]->LONGITUD ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-10 well">
                                CODIGO_TOE : <?php echo $Dep[0]->CODIGO_TOE ?>
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