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
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Forms</a></li>
            <li class="active"><?= $subtitle ?></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- right column -->
            <div class="col-md-4">
                <!-- general form elements disabled -->
                <div class="box box-warning">
                    <div class="box-header with-border">
                        <h3 class="box-title"><?= $titleform ?></h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <form role="form" id="frmCaso" method="POST">
                            <div class="form-group">
                                <label>NOMBRE DEL CASO:</label>
                                <input type="text" class="form-control" name="nombrecaso" placeholder="Nombre del caso">
                            </div>
                            <div class="form-group">
                                <label>NÚMERO RADICADO:</label>
                                <input type="text" class="form-control" name="numcaso" placeholder="Número radicado">
                            </div>
                            <div class="form-group">
                                <label>MES QUE LLEGA A OFINT:</label>
                                <select class="form-control" name="mes">
                                    <option>ENERO</option>
                                    <option>FEBRERO</option>
                                    <option>MARZO</option>
                                    <option>ABRIL</option>
                                    <option>MAYO</option>
                                    <option>JUNIO</option>
                                    <option>JULIO</option>
                                    <option>AGOSTO</option>
                                    <option>SEPTIEMBRE</option>
                                    <option>OCTUBRE</option>
                                    <option>NOVIEMBRE</option>
                                    <option>DICIEMBRE</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>AÑO QUE LLEGA A OFINT</label>
                                <input type="number" class="form-control" name="anio" min="2000">
                            </div>
                            <div class="form-group">
                                <label>ESCENARIO DE POSIBLE HECHO DE CORRUPCION</label>
                                <select class="form-control" name="escenario">
                                    <?php foreach ($escenarios as $row) { ?>
                                        <option value="<?= $row->Id ?>"><?= $row->Escenario ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>PROCESO</label>
                                <select class="form-control" name="proceso">
                                    <?php foreach ($procesos as $row) { ?>
                                        <option value="<?= $row->Id ?>"><?= $row->Proceso ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>COMANDO</label>
                                <select class="form-control" name="comando">
                                    <?php foreach ($comandos as $row) { ?>
                                        <option value="<?= $row->Id ?>"><?= $row->Comando ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>UNIDADES AÉREAS</label>
                                <select class="form-control" name="unidad">
                                    <?php foreach ($unidades as $row) { ?>
                                        <option value="<?= $row->Id ?>"><?= $row->UnidadAerea ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>CATEGORÍA OFICIAL IMPLICADO</label>
                                <select class="form-control" name="catOficial">
                                    <?php foreach ($catOfi as $row) { ?>
                                        <option value="<?= $row->Id ?>"><?= $row->Categoria ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>CATEGORÍA SUB OFICIAL IMPLICADO</label>
                                <select class="form-control" name="catSubOficial">
                                    <?php foreach ($catSubOfi as $row) { ?>
                                        <option value="<?= $row->Id ?>"><?= $row->Categoria ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>CATEGORÍA PERSONAL NO UNIFORMADO</label>
                                <select class="form-control" name="catNoUni">
                                    <?php foreach ($catNoUni as $row) { ?>
                                        <option value="<?= $row->Id ?>"><?= $row->Categoria ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>FECHA INICIO GESTIÓN:</label>
                                <input type="date" class="form-control" name="fechaini">
                            </div>
                            <div class="form-group">
                                <label>
                                    <input type="checkbox" class="flat-red" id="anonimo" name="anonimo">
                                    ÁNONIMO
                                </label>&nbsp;&nbsp;
                                <label>
                                    <input type="checkbox" class="flat-red" id="inspAspCrit" name="inspAspCrit">
                                    INSPECCIÓN ASPECTOS CRITICOS
                                </label>
                            </div>
                            <div class="form-group">
                                <label>FECHA INICIO INSPECCIÓN ASPECTOS CRITICOS:</label>
                                <input type="date" class="form-control" name="fechaInspAspCrit">
                            </div>
                            <div class="form-group">
                                <label>DÍAS INSPECCIÓN ASPECTOS CRITICOS:</label>
                                <input type="number" class="form-control" name="diasInspAspCrit">
                            </div>
                            <!-- /.form group -->
                            <div class="form-group">
                                <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal" data-backdrop="static" data-keyboard="false" onclick="crearCaso()">Registrar</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!--/.col (right) -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form role="form" id="frmDenuncia" method="POST">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Canales de denuncia</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Seleccionar canal ó canales</label>
                        <input type="text" id="idCaso" name="idCaso">
                        <select name="canal" id="canal" name="canal[]" class="form-control" multiple required>
                            <?php foreach ($canales as $row) { ?>
                                <option value="<?= $row->Id ?>"><?= $row->Canal ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Registrar</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /.Modal -->
<?php $this->load->view('templates/footer') ?>
<?php $this->load->view('templates/controlsidebar') ?>