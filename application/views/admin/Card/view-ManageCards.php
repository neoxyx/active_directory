<?php $this->load->view('templates/header') ?>
<?php $this->load->view('templates/aside') ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <?= $title ?>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?= base_url() ?>index.php/admin/Home"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="<?= base_url() ?>index.php/admin/ManageCard">Tarjetas de Manejo</a></li>
            <li class="active"><?= $subtitle ?></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title"><?= $subtitle ?></h3><br><br>
                        <a class="btn btn-success active" href="<?= site_url() ?>index.php/admin/ManageCard/addCard" role="button">Nueva</a>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body" style="overflow-x: auto;">
                        <?php if ($this->session->flashdata('success')) { ?>
                            <div class="alert alert-success">
                                <strong><span class="glyphicon glyphicon-ok"></span> <?= $this->session->flashdata('success'); ?></strong>
                            </div>
                        <?php } ?>

                        <?php if (!empty($Cards)) { ?>
                            <table class="table table-striped" id="example1">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Tarjeta No.</th>
                                        <th>Fecha</th>
                                        <th>Grado</th>
                                        <th>Nombre Completo</th>
                                        <th>Cédula</th>
                                        <th>Lugar de Expedición</th>
                                        <th>Nivel de Clasificación</th>
                                        <th>Cargo</th>
                                        <th>Jefatura o Grupo</th>
                                        <th>Quién Autoriza</th>
                                        <th>ACCIONES</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1;
                                    foreach ($Cards as $Card) { ?>
                                        <tr>
                                            <td> <?= $i; ?> </td>
                                            <td> <?= $Card->tarjeta ?> </td>
                                            <td> <?= $Card->FECHA ?> </td>
                                            <td> <?= $Card->GRADO ?> </td>
                                            <td> <?= $Card->NOMBRE ?> </td>
                                            <td> <?= $Card->CEDULA ?> </td>
                                            <td> <?= $Card->ORIGEN ?> </td>
                                            <td><?= $Card->NIVEL_DE_CLASIFICACION ?></td>
                                            <td><?= $Card->CARGO ?></td>
                                            <td><?= $Card->JEFATURA_O_GRUPO ?></td>
                                            <td><?= $Card->COMANDANTE_QUE_AUTORIZA ?></td>
                                            <td>
                                                <a class="btn btn-warning active" href="<?= site_url() ?>index.php/admin/ManageCard/deactivatedCard/<?= $Card->tarjeta ?>" role="button" onclick="return confirm('Estas seguro de desactivar la tarjeta?')">Desactivar</a><br>
                                            </td>
                                        </tr>
                                    <?php $i++;
                                    } ?>
                                </tbody>
                            </table>
                        <?php } else { ?>
                            <div class="alert alert-info" role="alert">
                                <strong>No Deps Found!</strong>
                            </div>
                        <?php } ?>

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