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
            <li><a href="<?= site_url(); ?>index.php/admin/adf/adf">Administrar ADF</a></li>
            <li class="active"><a href="<?= site_url(); ?>index.php/admin/adf/addADF">Agregar ADF</a></li>
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
                        <div class="row">
                            <div class="col-xs-12 col-md-10 well">
                                usrGuid : <?= $ADF[0]->usrGuid ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-10 well">
                                sAMAccountName : <?= $ADF[0]->sAMAccountName ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-10 well">
                                employeeID : <?= $ADF[0]->employeeID ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-10 well">
                                givenName : <?= $ADF[0]->givenName ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-10 well">
                                sn : <?= $ADF[0]->sn ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-10 well">
                                name : <?= $ADF[0]->name ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-10 well">
                                displayName : <?= $ADF[0]->displayName ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-10 well">
                                extensionAttribute1 : <?= $ADF[0]->extensionAttribute1 ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-10 well">
                                PersonalTitle : <?= $ADF[0]->PersonalTitle ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-10 well">
                                title : <?= $ADF[0]->title ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-10 well">
                                userAccountControl : <?= $ADF[0]->userAccountControl ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-10 well">
                                company : <?= $ADF[0]->company ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-10 well">
                                department : <?= $ADF[0]->department ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-10 well">
                                physicalDeliveryOfficeName : <?= $ADF[0]->physicalDeliveryOfficeName ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-10 well">
                                facsimileTelephoneNumber : <?= $ADF[0]->facsimileTelephoneNumber ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-10 well">
                                extensionAttribute2 : <?= $ADF[0]->extensionAttribute2 ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-10 well">
                                extensionAttribute3 : <?= $ADF[0]->extensionAttribute3 ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-10 well">
                                extensionAttribute4 : <?= $ADF[0]->extensionAttribute4 ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-10 well">
                                extensionAttribute6 : <?= $ADF[0]->extensionAttribute6 ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-10 well">
                                extensionAttribute8 : <?= $ADF[0]->extensionAttribute8 ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-10 well">
                                extensionAttribute9 : <?= $ADF[0]->extensionAttribute9 ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-10 well">
                                extensionAttribute10 : <?= $ADF[0]->extensionAttribute10 ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-10 well">
                                mobile : <?= $ADF[0]->mobile ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-10 well">
                                CV : <?= $ADF[0]->CV ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-10 well">
                                email : <?= $ADF[0]->email ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-10 well">
                                extensionAttribute7 : <?= $ADF[0]->extensionAttribute7 ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-10 well">
                                distinguishedName : <?= $ADF[0]->distinguishedName ?>
                            </div>
                        </div>
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