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
                                        <td><?= $dato->IDENTIFICACION ?></td>
                                        <td><?= $dato->NOMBRES ?></td>
                                        <td><?= $dato->APELLIDOS ?></td>
                                        <td><?= $dato->SEXO ?></td>
                                        <td><?= $dato->TITULO ?></td>
                                        <td><?= $dato->CARGO ?></td>
                                        <td><?= $dato->ESPECIALIDAD ?></td>
                                        <td><?= $dato->UNIDAD ?></td>
                                        <td><?= $dato->DISPENSARIO ?></td>
                                        <td><?= $dato->DEPENDENCIA_LABORAL ?></td>
                                        <td><?= $dato->TELEFONO_OFICINA ?></td>
                                        <td><?= $dato->EMAIL_PERSONAL ?></td>
                                        <td><?= $dato->DIRECCION_PERSONAL ?></td>
                                        <td><?= $dato->CIUDAD_RESIDENCIA ?></td>
                                        <td><?= $dato->CELULAR ?></td>
                                        <td><?= $dato->USUARIO_DE_RED_JEFE_INMEDIATO ?></td>                                        
                                        <td><?= $dato->FECHA_DE_VIGENCIA ?></td>
                                        <td><?= $dato->sAMAccountName ?></td>
                                        <td><?= $dato->sAMAccountName1 ?></td>
                                        <td><?= $dato->sAMAccountName2 ?></td>
                                        <td><?= $dato->userPrincipalName ?></td>
                                        <td><?= $dato->userPrincipalName1 ?></td>
                                        <td><?= $dato->userPrincipalName2 ?></td>
                                        <td><?= $dato->NAME ?></td>
                                        <td><?= $dato->displayName ?></td>
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