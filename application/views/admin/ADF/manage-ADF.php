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
            <li><a href="<?= base_url() ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="<?= base_url() ?>">Tablas</a></li>
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
                        <?php if ($this->session->flashdata('success')) { ?>
                            <div class="alert alert-success">
                                <strong><span class="glyphicon glyphicon-ok"></span> <?= $this->session->flashdata('success'); ?></strong>
                            </div>
                        <?php } ?>

                        <?php if (!empty($ADFs)) { ?>
                            <table id="example1" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>ID</th>
                                        <th>Nombre</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1;
                                    foreach ($ADFs as $ADF) { ?>
                                        <tr>
                                            <td> <?= $i; ?> </td>
                                            <td> <a href="<?= site_url() ?>index.php/admin/Adf/viewADF/<?= $ADF->employeeID ?>"> <?= $ADF->employeeID ?> </a> </td>
                                            <td> <a href="<?= site_url() ?>index.php/admin/Adf/viewADF/<?= $ADF->employeeID ?>"> <?= $ADF->name ?> </a> </td>
                                            <td>
                                                <a href="<?= site_url() ?>index.php/admin/Adf/editADF/<?= $ADF->employeeID ?>">Edit</a>
                                                <a href="<?= site_url() ?>index.php/admin/Adf/deleteADF/<?= $ADF->employeeID ?>" onclick="return confirm('Estas seguro de eliminar el registro?')">Delete</a>
                                            </td>

                                        </tr>
                                    <?php $i++;
                                    } ?>
                                </tbody>
                            </table>
                        <?php } else { ?>
                            <div class="alert alert-info" role="alert">
                                <strong>No ADFs Found!</strong>
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