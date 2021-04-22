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
            <div class="col-md-8">
                <!-- general form elements disabled -->
                <div class="box box-warning">
                    <div class="box-header with-border">
                        <h3 class="box-title"><?= $titleform ?></h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <form role="form">
                            <div class="form-group">
                                <label>NOMBRE DEL CASO:</label>
                                <input type="text" class="form-control" placeholder="Nombre del caso">
                            </div>
                            <div class="form-group">
                                <label>NÚMERO RADICADO:</label>
                                <input type="text" class="form-control" placeholder="Número radicado">
                            </div>
                            <!-- select -->
                            <div class="form-group">
                                <label>CANAL DE DENUNCIA:</label>
                                <select class="form-control">
                                    <option>PQRSDF</option>
                                    <option>CORREO ANTICORRUPCIÓN</option>
                                    <option>LINEA DE HONOR</option>
                                    <option>HALLAZGO</option>
                                    <option>ORDÉN SUPERIOR</option>
                                    <option>ENTES DE CONTROL INTERNO</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>PQRSDF:</label>
                                <input type="number" class="form-control" placeholder="PQRSDF">
                            </div>
                            <div class="form-group">
                                <label>CORREO ANTICORRUPCIÓN:</label>
                                <input type="number" class="form-control" placeholder="CORREO ANTICORRUPCIÓN">
                            </div>
                            <div class="form-group">
                                <label>LINEA DEL HONOR:</label>
                                <input type="number" class="form-control" placeholder="LINEA DEL HONOR">
                            </div>
                            <div class="form-group">
                                <label>HALLAZGOS:</label>
                                <input type="number" class="form-control" placeholder="HALLAZGOS">
                            </div>
                            <div class="form-group">
                                <label>ORDEN SUPERIOR:</label>
                                <input type="number" class="form-control" placeholder="ORDEN SUPERIOR">
                            </div>
                            <div class="form-group">
                                <label>ENTES DE CONTROL EXTERNOS:</label>
                                <input type="number" class="form-control" placeholder="ENTES DE CONTROL EXTERNOS">
                            </div>
                            <div class="form-group">
                                <label>DENUNCIA ORAL O ESCRITA:</label>
                                <input type="number" class="form-control" placeholder="DENUNCIA ORAL O ESCRITA">
                            </div>
                            <div class="form-group">
                                <label>MES QUE LLEGA A OFINT:</label>
                                <select class="form-control">
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
                                <input type="number" class="form-control" min="2000">
                            </div>
                            <div class="form-group">
                                <label>ESCENARIO DE POSIBLE HECHO DE CORRUPCION</label>
                                <select class="form-control">
                                    <option>CONTRATACIÓN</option>
                                    <option>OPERACIONAL</option>
                                    <option>FINANCIERO</option>
                                    <option>INFORMACIÓN Y COMUNICACIÓN</option>
                                    <option>INVESTIGACIÓN Y SANCIÓN</option>
                                    <option>LOGÍSTICO</option>
                                    <option>PERSONAL</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>PROCESO</label>
                                <select class="form-control">
                                    <option>DIRECCIONAMIENTO ESTRATÉGICO</option>
                                    <option>OPERACIONES AÉREAS</option>
                                    <option>GESTIÓN HUMANA</option>
                                    <option>GESTIÓN APOYO</option>
                                    <option>INSPECCIÓN Y CONTROL</option>
                                    <option>GESTION ADMINISTRATIVA</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>COMANDO</label>
                                <select class="form-control">
                                    <option>COFAC-IGEFA</option>
                                    <option>COFAC-AYUGE</option>
                                    <option>COFAC-AAAES</option>
                                    <option>COFAC-OCOE</option>
                                    <option>COFAC-OFASI</option>
                                    <option>COFAC-OINCO</option>
                                    <option>JEMFA-SEMEP</option>
                                    <option>JEMFA-DEAJU</option>
                                    <option>JEMFA-OINSE</option>
                                    <option>COAES</option>
                                    <option>CODAF</option>
                                    <option>CODEH</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>UNIDADES AÉREAS</label>
                                <select class="form-control">
                                    <option>CACOM 1</option>
                                    <option>CACOM 2</option>
                                    <option>CACOM 3</option>
                                    <option>CACOM 4</option>
                                    <option>CACOM 5</option>
                                    <option>CACOM 6</option>
                                    <option>CACOM 7</option>
                                    <option>GAORI</option>
                                    <option>GAAMA</option>
                                    <option>GACAS</option>
                                    <option>GACAR</option>
                                    <option>CATAM</option>
                                    <option>CAMAN</option>
                                    <option>EMAVI</option>
                                    <option>ESUFA</option>
                                    <option>EPFAC</option>
                                    <option>FTA</option>
                                    <option>GROEA</option>
                                    <option>BACOF</option>
                                </select>
                            </div>
                            <div class="form-group has-warning">
                                <label class="control-label" for="inputWarning"><i class="fa fa-bell-o"></i> Estado del requerimiento</label>
                                <input type="text" class="form-control" id="inputWarning" placeholder="Estado ...">
                            </div>
                            <div class="form-group">
                                <label>CATEGORÍA OFICIAL IMPLICADO</label>
                                <select name="" id="" class="form-control">
                                    <option value="SI">OFICIAL INSIGNEA</option>
                                    <option value="NO" selected>CORONEL</option>
                                    <option value="NO">TENIENTE CORONEL</option>
                                    <option value="NO">MAYOR</option>
                                    <option value="NO">CAPITÁN</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>CATEGORÍA SUB OFICIAL IMPLICADO</label>
                                <select name="" id="" class="form-control">
                                    <option value="SI">TÉCNICO JEFE DE COMANDO</option>
                                    <option value="NO" selected>TÉCNICO JEFE</option>
                                    <option value="NO">TÉCNICO SUBJEFE</option>
                                    <option value="NO">TÉCNICO PRIMERO</option>
                                    <option value="NO">TÉCNICO SEGUNDO</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>CATEGORÍA PERSONAL NO UNIFORMADO</label>
                                <select name="" id="" class="form-control">
                                    <option value="SI">PROFESIONAL</option>
                                    <option value="NO" selected>TÉCNICO</option>
                                    <option value="NO">ASISTENCIAL</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success btn-lg">Registrar</button>
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
<?php $this->load->view('templates/footer') ?>
<?php $this->load->view('templates/controlsidebar') ?>