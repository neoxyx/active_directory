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
            <li><a href="#">Tablas</a></li>
            <li class="active"><?= $subtitle ?></li>
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
                        <table id="example1" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>NÚMERO CASO</th>
                                    <th>NOMBRE DEL CASO</th>
                                    <th>NÚMERO RADICADO</th>
                                    <th>CANAL DE DENUNCIA</th>
                                    <th>PQRSDF</th>
                                    <th>CORREO ANTICORRUPCIÓN</th>
                                    <th>LINEA DEL HONOR</th>
                                    <th>HALLAZGOS</th>
                                    <th>ORDEN SUPERIOR</th>
                                    <th>ENTES DE CONTROL EXTERNOS</th>
                                    <th>DENUNCIA ORAL O ESCRITA</th>
                                    <th>CANTIDAD DENUNCIAS ALLEGADAS</th>
                                    <th>MES QUE LLEGA A OFINT</th>
                                    <th>AÑO QUE LLEGA A OFINT</th>
                                    <th>ESCENARIO DE POSIBLE HECHO DE CORRUPCION</th>
                                    <th>PROCESO</th>
                                    <th>COMANDO</th>
                                    <th>UNIDADES AÉREAS</th>
                                    <th>FECHA INICIO DE GESTIÓN</th>
                                    <th>PLAZO DE GESTION</th>
                                    <th>ESTADO DEL REQUERIMIENTO</th>
                                    <th>ACTIVIDADES SEGUIMIENTO</th>
                                    <th>INSPECCIÓN POR ASPECTOS CRÍTICOS</th>
                                    <th>FECHA INICIO INSPECCIÓN POR ASPECTOS CRÍTICOS</th>
                                    <th>No DE DIÁS INSPECCIÓN POR ASPECTOS CRÍTICOS</th>
                                    <th>CATEGORÍA OFICIAL IMPLICADO</th>
                                    <th>CATEGORÍA SUB OFICIAL IMPLICADO</th>
                                    <th>CATEGORÍA PERSONAL NO UNIFORMADO</th>
                                    <th>FECHA DE CIERRE</th>
                                    <th>MOTIVO DE CIERRE</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($denuncias as $dato) { ?>
                                    <tr>
                                        <td><?= $dato->Id ?></td>
                                        <td><?= $dato->NombreCaso ?></td>
                                        <td><?= $dato->Radicado ?></td>
                                        <td><?= $dato->Radicado ?></td>
                                        <td><?= $dato->PQRSDF ?></td>
                                        <td><?= $dato->CorreoAnticorrupcion ?></td>
                                        <td><?= $dato->LineaHonor ?></td>
                                        <td><?= $dato->Hallazgos ?></td>
                                        <td><?= $dato->OrdenSuperior ?></td>
                                        <td><?= $dato->EntesControlExterno ?></td>
                                        <td><?= $dato->DenunciaOralEscrita ?></td>
                                        <td><?= $dato->PQRSDF + $dato->CorreoAnticorrupcion + $dato->LineaHonor + $dato->Hallazgos + $dato->OrdenSuperior + $dato->EntesControlExterno + $dato->DenunciaOralEscrita ?></td>
                                        <td><?= $dato->MesLlegaOFINT ?></td>
                                        <td><?= $dato->AnioLlegaOFINT ?></td>
                                        <td><?= $dato->Escenario ?></td>
                                        <td><?= $dato->Proceso ?></td>
                                        <td><?= $dato->Comando ?></td>
                                        <td><?= $dato->UnidadAerea ?></td>
                                        <td><?= $dato->FechaInicioGestion ?></td>
                                        <td><?php $date = date($dato->FechaInicioGestion);
                                            echo date("Y-m-d", strtotime($date . "+ 20 days")); ?></td>
                                        <td><?= $dato->Estado ?></td>
                                        <td>Actividades</td>
                                        <td><?= $dato->InspeccionAspectosCriticos ?></td>
                                        <td><?= $dato->FechaInicioInspeccionAspectosCriticos ?></td>
                                        <td><?= $dato->DiasDeInspeccionAspectosCriticos ?></td>
                                        <td><?= $dato->CategoriaOficial ?></td>
                                        <td><?= $dato->CategoriaSuboficial ?></td>
                                        <td><?= $dato->CategoriaNoUniformado ?></td>
                                        <td>Fecha Cierre</td>
                                        <td>Motivo Cierre</td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
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