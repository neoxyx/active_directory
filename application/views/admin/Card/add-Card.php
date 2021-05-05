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
            <li><a href="<?= site_url(); ?>index.php/admin/ManageCard/manageCards">Administrar Tarjetas de Manejo </a></li>
            <li class="active"><a href="<?= site_url(); ?>index.php/admin/ManageCard/addCard">Agregar Tarjeta</a></li>
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
                        <form role="form" method="post" action="<?php echo site_url() ?>index.php/admin/ManageCard/addCardPost">
                            <div class="form-group">
                                <label for="CEDULA">CEDULA:</label>
                                <input type="text" class="form-control" id="CEDULA" name="CEDULA">
                            </div>
                            <div class="form-group">
                                <label for="GRADO">GRADO:</label>
                                <input type="text" class="form-control" id="GRADO" name="GRADO">
                            </div>
                            <div class="form-group">
                                <label for="NOMBRE">NOMBRE:</label>
                                <input type="text" class="form-control" id="NOMBRE" name="NOMBRE">
                            </div>
                            <div class="form-group">
                                <label for="ORIGEN">ORIGEN:</label>
                                <input type="text" class="form-control" id="ORIGEN" name="ORIGEN">
                            </div>
                            <div class="form-group">
                                <label for="CODIGO_MILITAR">CODIGO_MILITAR:</label>
                                <input type="text" class="form-control" id="CODIGO_MILITAR" name="CODIGO_MILITAR">
                            </div>
                            <div class="form-group">
                                <label for="NIVEL_DE_CLASIFICACION">NIVEL_DE_CLASIFICACION:</label>
                                <input type="text" class="form-control" id="NIVEL_DE_CLASIFICACION" name="NIVEL_DE_CLASIFICACION">
                            </div>
                            <div class="form-group">
                                <label for="CARGO">CARGO:</label>
                                <input type="text" class="form-control" id="CARGO" name="CARGO">
                            </div>
                            <div class="form-group">
                                <label for="JEFATURA_O_GRUPO">JEFATURA_O_GRUPO:</label>
                                <input type="text" class="form-control" id="JEFATURA_O_GRUPO" name="JEFATURA_O_GRUPO">
                            </div>
                            <div class="form-group">
                                <label for="JEFATURA_O_GRUPO_SIGLA">JEFATURA_O_GRUPO_SIGLA:</label>
                                <input type="text" class="form-control" id="JEFATURA_O_GRUPO_SIGLA" name="JEFATURA_O_GRUPO_SIGLA">
                            </div>
                            <div class="form-group">
                                <label for="COMANDANTE_QUE_AUTORIZA">COMANDANTE_QUE_AUTORIZA:</label>
                                <input type="text" class="form-control" id="COMANDANTE_QUE_AUTORIZA" name="COMANDANTE_QUE_AUTORIZA">
                            </div>
                            <div class="form-group">
                                <label for="CARGO_DE_COMANDANTE">CARGO_DE_COMANDANTE:</label>
                                <input type="text" class="form-control" id="CARGO_DE_COMANDANTE" name="CARGO_DE_COMANDANTE">
                            </div>
                            <div class="form-group">
                                <label for="PROMESA_DE_RESERVA">PROMESA_DE_RESERVA:</label>
                                <input type="text" class="form-control" id="PROMESA_DE_RESERVA" name="PROMESA_DE_RESERVA">
                            </div>
                            <div class="form-group">
                                <label for="Estado">Estado:</label>
                                <input type="text" class="form-control" id="Estado" name="Estado">
                            </div>
                            <button type="submit" class="btn btn-primary">Guardar</button>
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