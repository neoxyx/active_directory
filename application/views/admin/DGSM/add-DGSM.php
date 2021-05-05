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
                        <h2>Agregar DGSM</h2>
                        <form role="form" method="post" action="<?= site_url() ?>index.php/admin/DGSM/addDGSMPost">
                            <div class="form-group">
                                <label for="IDENTIFICACION">IDENTIFICACION:</label>
                                <input type="text" class="form-control" id="IDENTIFICACION" name="IDENTIFICACION">
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
                                <label for="SEXO">SEXO:</label>
                                <input type="text" class="form-control" id="SEXO" name="SEXO">
                            </div>
                            <div class="form-group">
                                <label for="TITULO">TITULO:</label>
                                <input type="text" class="form-control" id="TITULO" name="TITULO">
                            </div>
                            <div class="form-group">
                                <label for="CARGO">CARGO:</label>
                                <input type="text" class="form-control" id="CARGO" name="CARGO">
                            </div>
                            <div class="form-group">
                                <label for="ESPECIALIDAD">ESPECIALIDAD:</label>
                                <input type="text" class="form-control" id="ESPECIALIDAD" name="ESPECIALIDAD">
                            </div>
                            <div class="form-group">
                                <label for="UNIDAD">UNIDAD:</label>
                                <input type="text" class="form-control" id="UNIDAD" name="UNIDAD">
                            </div>
                            <div class="form-group">
                                <label for="DISPENSARIO">DISPENSARIO:</label>
                                <input type="text" class="form-control" id="DISPENSARIO" name="DISPENSARIO">
                            </div>
                            <div class="form-group">
                                <label for="DEPENDENCIA_LABORAL">DEPENDENCIA_LABORAL:</label>
                                <input type="text" class="form-control" id="DEPENDENCIA_LABORAL" name="DEPENDENCIA_LABORAL">
                            </div>
                            <div class="form-group">
                                <label for="TELEFONO_OFICINA">TELEFONO_OFICINA:</label>
                                <input type="text" class="form-control" id="TELEFONO_OFICINA" name="TELEFONO_OFICINA">
                            </div>
                            <div class="form-group">
                                <label for="EMAIL_PERSONAL">EMAIL_PERSONAL:</label>
                                <input type="text" class="form-control" id="EMAIL_PERSONAL" name="EMAIL_PERSONAL">
                            </div>
                            <div class="form-group">
                                <label for="DIRECCION_PERSONAL">DIRECCION_PERSONAL:</label>
                                <input type="text" class="form-control" id="DIRECCION_PERSONAL" name="DIRECCION_PERSONAL">
                            </div>
                            <div class="form-group">
                                <label for="CIUDAD_RESIDENCIA">CIUDAD_RESIDENCIA:</label>
                                <input type="text" class="form-control" id="CIUDAD_RESIDENCIA" name="CIUDAD_RESIDENCIA">
                            </div>
                            <div class="form-group">
                                <label for="CELULAR">CELULAR:</label>
                                <input type="text" class="form-control" id="CELULAR" name="CELULAR">
                            </div>
                            <div class="form-group">
                                <label for="USUARIO_DE_RED_JEFE_INMEDIATO">USUARIO_DE_RED_JEFE_INMEDIATO:</label>
                                <input type="text" class="form-control" id="USUARIO_DE_RED_JEFE_INMEDIATO" name="USUARIO_DE_RED_JEFE_INMEDIATO">
                            </div>
                            <div class="form-group">
                                <label for="FECHA_DE_VIGENCIA">FECHA_DE_VIGENCIA:</label>
                                <input type="text" class="form-control" id="FECHA_DE_VIGENCIA" name="FECHA_DE_VIGENCIA">
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