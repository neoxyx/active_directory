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
                        <h2>Actualizar ADF</h2>
                        <form role="form" method="post" action="<?= site_url() ?>index.php/admin/adf/editADFPost">
                            <div class="form-group">
                                <label for="usrGuid">UsrGuid:</label>
                                <input type="text" value="<?= $ADF[0]->usrGuid ?>" class="form-control" id="usrGuid" name="usrGuid">
                            </div>
                            <div class="form-group">
                                <label for="sAMAccountName">SAMAccountName:</label>
                                <input type="text" value="<?= $ADF[0]->sAMAccountName ?>" class="form-control" id="sAMAccountName" name="sAMAccountName">
                            </div>
                            <div class="form-group">
                                <label for="employeeID">EmployeeID:</label>
                                <input type="text" class="form-control" value="<?= $ADF[0]->employeeID ?>" id="employeeID" name="employeeID">
                            </div>
                            <div class="form-group">
                                <label for="givenName">GivenName:</label>
                                <input type="text" class="form-control" value="<?= $ADF[0]->givenName ?>" id="givenName" name="givenName">
                            </div>
                            <div class="form-group">
                                <label for="sn">Sn:</label>
                                <input type="text" class="form-control" value="<?= $ADF[0]->sn ?>" id="sn" name="sn">
                            </div>
                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" class="form-control" value="<?= $ADF[0]->name ?>" id="name" name="name">
                            </div>
                            <div class="form-group">
                                <label for="displayName">DisplayName:</label>
                                <input type="text" class="form-control" value="<?= $ADF[0]->displayName ?>" id="displayName" name="displayName">
                            </div>
                            <div class="form-group">
                                <label for="extensionAttribute1">ExtensionAttribute1:</label>
                                <input type="text" class="form-control" value="<?= $ADF[0]->extensionAttribute1 ?>" id="extensionAttribute1" name="extensionAttribute1">
                            </div>
                            <div class="form-group">
                                <label for="PersonalTitle">PersonalTitle:</label>
                                <input type="text" class="form-control" value="<?= $ADF[0]->PersonalTitle ?>" id="PersonalTitle" name="PersonalTitle">
                            </div>
                            <div class="form-group">
                                <label for="title">Title:</label>
                                <input type="text" class="form-control" value="<?= $ADF[0]->title ?>" id="title" name="title">
                            </div>
                            <div class="form-group">
                                <label for="userAccountControl">UserAccountControl:</label>
                                <input type="text" class="form-control" value="<?= $ADF[0]->userAccountControl ?>" id="userAccountControl" name="userAccountControl">
                            </div>
                            <div class="form-group">
                                <label for="company">Company:</label>
                                <input type="text" class="form-control" value="<?= $ADF[0]->company ?>" id="company" name="company">
                            </div>
                            <div class="form-group">
                                <label for="department">Department:</label>
                                <input type="text" class="form-control" value="<?= $ADF[0]->department ?>" id="department" name="department">
                            </div>
                            <div class="form-group">
                                <label for="physicalDeliveryOfficeName">PhysicalDeliveryOfficeName:</label>
                                <input type="text" class="form-control" value="<?= $ADF[0]->physicalDeliveryOfficeName ?>" id="physicalDeliveryOfficeName" name="physicalDeliveryOfficeName">
                            </div>
                            <div class="form-group">
                                <label for="facsimileTelephoneNumber">FacsimileTelephoneNumber:</label>
                                <input type="text" class="form-control" value="<?= $ADF[0]->facsimileTelephoneNumber ?>" id="facsimileTelephoneNumber" name="facsimileTelephoneNumber">
                            </div>
                            <div class="form-group">
                                <label for="extensionAttribute2">ExtensionAttribute2:</label>
                                <input type="text" class="form-control" value="<?= $ADF[0]->extensionAttribute2 ?>" id="extensionAttribute2" name="extensionAttribute2">
                            </div>
                            <div class="form-group">
                                <label for="extensionAttribute3">ExtensionAttribute3:</label>
                                <input type="text" class="form-control" value="<?= $ADF[0]->extensionAttribute3 ?>" id="extensionAttribute3" name="extensionAttribute3">
                            </div>
                            <div class="form-group">
                                <label for="extensionAttribute4">ExtensionAttribute4:</label>
                                <input type="text" class="form-control" value="<?= $ADF[0]->extensionAttribute4 ?>" id="extensionAttribute4" name="extensionAttribute4">
                            </div>
                            <div class="form-group">
                                <label for="extensionAttribute6">ExtensionAttribute6:</label>
                                <input type="text" class="form-control" value="<?= $ADF[0]->extensionAttribute6 ?>" id="extensionAttribute6" name="extensionAttribute6">
                            </div>
                            <div class="form-group">
                                <label for="extensionAttribute8">ExtensionAttribute8:</label>
                                <input type="text" class="form-control" value="<?= $ADF[0]->extensionAttribute8 ?>" id="extensionAttribute8" name="extensionAttribute8">
                            </div>
                            <div class="form-group">
                                <label for="extensionAttribute9">ExtensionAttribute9:</label>
                                <input type="text" class="form-control" value="<?= $ADF[0]->extensionAttribute9 ?>" id="extensionAttribute9" name="extensionAttribute9">
                            </div>
                            <div class="form-group">
                                <label for="extensionAttribute10">ExtensionAttribute10:</label>
                                <input type="text" class="form-control" value="<?= $ADF[0]->extensionAttribute10 ?>" id="extensionAttribute10" name="extensionAttribute10">
                            </div>
                            <div class="form-group">
                                <label for="mobile">Mobile:</label>
                                <input type="text" class="form-control" value="<?= $ADF[0]->mobile ?>" id="mobile" name="mobile">
                            </div>
                            <div class="form-group">
                                <label for="CN">CN:</label>
                                <input type="text" class="form-control" value="<?= $ADF[0]->CN ?>" id="CN" name="CN">
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="text" class="form-control" value="<?= $ADF[0]->email ?>" id="email" name="email">
                            </div>
                            <div class="form-group">
                                <label for="extensionAttribute7">ExtensionAttribute7:</label>
                                <input type="text" class="form-control" value="<?= $ADF[0]->extensionAttribute7 ?>" id="extensionAttribute7" name="extensionAttribute7">
                            </div>
                            <div class="form-group">
                                <label for="distinguishedName">DistinguishedName:</label>
                                <input type="text" class="form-control" value="<?= $ADF[0]->distinguishedName ?>" id="distinguishedName" name="distinguishedName">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
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