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
            <li><a href="<?= base_url() ?>">Vistas</a></li>
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
                                    <?php foreach ($columns as $column) { ?>
                                        <th><?= $column->COLUMN_NAME ?></th>
                                    <?php } ?>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($datos as $dato) { ?>
                                    <tr>
                                        <td><?= $dato->usrGuid ?></td>
                                        <td><?= $dato->sAMAccountName ?></td>
                                        <td><?= $dato->employeeID ?></td>
                                        <td><?= $dato->givenName ?></td>
                                        <td><?= $dato->sn ?></td>
                                        <td><?= $dato->name ?></td>
                                        <td><?= $dato->displayName ?></td>
                                        <td><?= $dato->extensionAttribute1 ?></td>
                                        <td><?= $dato->PersonalTitle ?></td>
                                        <td><?= $dato->title ?></td>
                                        <td><?= $dato->userAccountControl ?></td>
                                        <td><?= $dato->company ?></td>
                                        <td><?= $dato->department ?></td>
                                        <td><?= $dato->physicalDeliveryOfficeName ?></td>
                                        <td><?= $dato->facsimileTelephoneNumber ?></td>
                                        <td><?= $dato->extensionAttribute2 ?></td>
                                        <td><?= $dato->extensionAttribute3 ?></td>
                                        <td><?= $dato->extensionAttribute4 ?></td>
                                        <td><?= $dato->extensionAttribute5 ?></td>
                                        <td><?= $dato->extensionAttribute6 ?></td>
                                        <td><?= $dato->extensionAttribute8 ?></td>
                                        <td><?= $dato->extensionAttribute9 ?></td>
                                        <td><?= $dato->extensionAttribute10 ?></td>
                                        <td><?= $dato->mobile ?></td>
                                        <td><?= $dato->CN ?></td>
                                        <td><?= $dato->email ?></td>
                                        <td><?= $dato->extensionAttribute7 ?></td>
                                        <td><?= $dato->distinguishedName ?></td>
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