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
                        <a class="btn btn-success active" href="<?php echo site_url() ?>index.php/admin/ManageCard/addManageLoads" role="button">Nuevo</a>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body" style="overflow-x: auto;">
                        <?php if ($this->session->flashdata('success')) { ?>
                            <div class="alert alert-success">
                                <strong><span class="glyphicon glyphicon-ok"></span> <?php echo $this->session->flashdata('success'); ?></strong>
                            </div>
                        <?php } ?>

                        <?php if (!empty($Loads)) { ?>
                            <table class="table table-striped" id="example1">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>COD_CARGO</th>
                                        <th>CARGO_AUTORIZADO</th>
                                        <th>LEY_1712</th>
                                        <th>LEY_1621</th>
                                        <th>COD_CARGO_AUTORIZA</th>
                                        <th>CARGO_QUE_AUTORIZA</th>
                                        <th>ACCIONES</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1;
                                    foreach ($Loads as $Load) { ?>
                                        <tr>
                                            <td> <?php echo $i; ?> </td>
                                            <td> <?php echo $Load->COD_CARGO ?> </td>
                                            <td> <?php echo $Load->CARGO_AUTORIZADO ?> </td>
                                            <td> <?php echo $Load->LEY_1712 ?> </td>
                                            <td> <?php echo $Load->LEY_1621 ?> </td>
                                            <td> <?php echo $Load->COD_CARGO_AUTORIZA ?> </td>
                                            <td> <?php echo $Load->CARGO_QUE_AUTORIZA ?> </td>
                                            <td>
                                                <a class="btn btn-primary active" role="button" href="<?php echo site_url() ?>index.php/admin/ManageCard/editManageLoads/<?php echo $Load->COD_CARGO ?>/<?php echo $Load->COD_CARGO_AUTORIZA ?>">Editar</a>
                                                <a class="btn btn-danger active" role="button" href="<?php echo site_url() ?>index.php/admin/ManageCard/deleteManageLoads/<?php echo $Load->COD_CARGO ?>/<?php echo $Load->COD_CARGO_AUTORIZA ?>" onclick="return confirm('Estas seguro de eliminar el registro?')">Eliminar</a>
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