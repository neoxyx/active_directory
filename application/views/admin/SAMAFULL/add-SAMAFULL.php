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
                        <h2>Agregar Dep</h2>
                        <form role="form" method="post" action="<?php echo site_url() ?>index.php/admin/DepController/addDepPost">
                            <div class="form-group">
                                <label for="CONSECUTIVO">CONSECUTIVO:</label>
                                <input type="text" class="form-control" id="CONSECUTIVO" name="CONSECUTIVO">
                            </div>
                            <div class="form-group">
                                <label for="SIGLA">SIGLA:</label>
                                <input type="text" class="form-control" id="SIGLA" name="SIGLA">
                            </div>
                            <div class="form-group">
                                <label for="DESCRIPCION_DEPENDENCIA">DESCRIPCION_DEPENDENCIA:</label>
                                <input type="text" class="form-control" id="DESCRIPCION_DEPENDENCIA" name="DESCRIPCION_DEPENDENCIA">
                            </div>
                            <div class="form-group">
                                <label for="INDICATIVO_MICROONDAS">INDICATIVO_MICROONDAS:</label>
                                <input type="text" class="form-control" id="INDICATIVO_MICROONDAS" name="INDICATIVO_MICROONDAS">
                            </div>
                            <div class="form-group">
                                <label for="NIVEL_JERARQUICO">NIVEL_JERARQUICO:</label>
                                <input type="text" class="form-control" id="NIVEL_JERARQUICO" name="NIVEL_JERARQUICO">
                            </div>
                            <div class="form-group">
                                <label for="NIVEL_ORGANIZACIONAL">NIVEL_ORGANIZACIONAL:</label>
                                <input type="text" class="form-control" id="NIVEL_ORGANIZACIONAL" name="NIVEL_ORGANIZACIONAL">
                            </div>
                            <div class="form-group">
                                <label for="NIVEL_FUNCIONAL">NIVEL_FUNCIONAL:</label>
                                <input type="text" class="form-control" id="NIVEL_FUNCIONAL" name="NIVEL_FUNCIONAL">
                            </div>
                            <div class="form-group">
                                <label for="SIGLA2">SIGLA2:</label>
                                <input type="text" class="form-control" id="SIGLA2" name="SIGLA2">
                            </div>
                            <div class="form-group">
                                <label for="SIGLA3">SIGLA3:</label>
                                <input type="text" class="form-control" id="SIGLA3" name="SIGLA3">
                            </div>
                            <div class="form-group">
                                <label for="SIGLA4">SIGLA4:</label>
                                <input type="text" class="form-control" id="SIGLA4" name="SIGLA4">
                            </div>
                            <div class="form-group">
                                <label for="SIGLA5">SIGLA5:</label>
                                <input type="text" class="form-control" id="SIGLA5" name="SIGLA5">
                            </div>
                            <div class="form-group">
                                <label for="SIGLA6">SIGLA6:</label>
                                <input type="text" class="form-control" id="SIGLA6" name="SIGLA6">
                            </div>
                            <div class="form-group">
                                <label for="SIGLA7">SIGLA7:</label>
                                <input type="text" class="form-control" id="SIGLA7" name="SIGLA7">
                            </div>
                            <div class="form-group">
                                <label for="SIGLA8">SIGLA8:</label>
                                <input type="text" class="form-control" id="SIGLA8" name="SIGLA8">
                            </div>
                            <div class="form-group">
                                <label for="SIGLA9">SIGLA9:</label>
                                <input type="text" class="form-control" id="SIGLA9" name="SIGLA9">
                            </div>
                            <div class="form-group">
                                <label for="SIGLA10">SIGLA10:</label>
                                <input type="text" class="form-control" id="SIGLA10" name="SIGLA10">
                            </div>
                            <div class="form-group">
                                <label for="SIGLA11">SIGLA11:</label>
                                <input type="text" class="form-control" id="SIGLA11" name="SIGLA11">
                            </div>
                            <div class="form-group">
                                <label for="SIGLA12">SIGLA12:</label>
                                <input type="text" class="form-control" id="SIGLA12" name="SIGLA12">
                            </div>
                            <div class="form-group">
                                <label for="SIGLA13">SIGLA13:</label>
                                <input type="text" class="form-control" id="SIGLA13" name="SIGLA13">
                            </div>
                            <div class="form-group">
                                <label for="OU_dependencia">OU_dependencia:</label>
                                <input type="text" class="form-control" id="OU_dependencia" name="OU_dependencia">
                            </div>
                            <div class="form-group">
                                <label for="Manager">Manager:</label>
                                <input type="text" class="form-control" id="Manager" name="Manager">
                            </div>
                            <div class="form-group">
                                <label for="UNDE_CONSECUTIVO">UNDE_CONSECUTIVO:</label>
                                <input type="text" class="form-control" id="UNDE_CONSECUTIVO" name="UNDE_CONSECUTIVO">
                            </div>
                            <div class="form-group">
                                <label for="LATITUD">LATITUD:</label>
                                <input type="text" class="form-control" id="LATITUD" name="LATITUD">
                            </div>
                            <div class="form-group">
                                <label for="LONGITUD">LONGITUD:</label>
                                <input type="text" class="form-control" id="LONGITUD" name="LONGITUD">
                            </div>
                            <div class="form-group">
                                <label for="CODIGO_TOE">CODIGO_TOE:</label>
                                <input type="text" class="form-control" id="CODIGO_TOE" name="CODIGO_TOE">
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