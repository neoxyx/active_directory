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
            <li><a href="<?= site_url(); ?>index.php/admin/ManageCard/manageLoads">Administrar Manejo Cargos</a></li>
            <li class="active"><a href="<?= site_url(); ?>index.php/admin/ManageCard/addLoads">Agregar Manejo Cargo</a></li>
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
                        <form role="form" method="post" action="<?php echo site_url() ?>index.php/admin/ManageCard/addManageLoadsPost">
                            <div class="form-group">
                                <label for="COD_CARGO">CARGO AUTORIZADO:</label>
                                <select class="form-control" id="COD_CARGO" name="COD_CARGO">
                                    <?php foreach ($GroupsLoads as $group) { ?>
                                        <option value="<?= $group->CARGO ?>"><?= $group->DESCRIPCION . ' COD: ' . $group->CARGO ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="LEY_1712">Clasificada Ley 1712:</label>
                                <select class="form-control" id="LEY_1712" name="LEY_1712">
                                    <option value="PUBLICO">PUBLICO</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="COD_CARGO_AUTORIZA">CARGO QUE AUTORIZA:</label>
                                <select class="form-control" id="COD_CARGO_AUTORIZA" name="COD_CARGO_AUTORIZA">
                                    <?php foreach ($GroupsLoads as $group) { ?>
                                        <option value="<?= $group->CARGO ?>"><?= $group->DESCRIPCION . ' COD:' . $group->CARGO ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="LEY_1621">Clasificada Ley 1621:</label>
                                <select class="form-control" id="LEY_1621" name="LEY_1621">
                                    <option value="RESTRINGIDO">RESTRINGIDO</option>
                                    <option value="CONFIDENCIAL">CONFIDENCIAL</option>
                                    <option value="ULTRASECRETO">ULTRASECRETO</option>
                                    <option value="SECRETO">SECRETO</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Guardar</button>
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