<?php $this->load->view('templates/header') ?>
<?php $this->load->view('templates/aside') ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Dashboard
      <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?= base_url() ?>"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
          <div class="inner">
            <h3>0</h3>

            <p>ADF</p>
          </div>
          <div class="icon">
            <i class="ion ion-person"></i>
          </div>
          <a href="<?= base_url() ?>index.php/admin/Adf/adf" class="small-box-footer">Ver <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <!-- .col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-red">
          <div class="inner">
            <h3>0</h3>

            <p>SAMAFULL</p>
          </div>
          <div class="icon">
            <i class="ion ion-card"></i>
          </div>
          <a href="<?= base_url() ?>index.php/admin/SAMAFULLController/manageSAMAFULL" class="small-box-footer">Ver <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow">
          <div class="inner">
            <h3>0</h3>

            <p>SIATH</p>
          </div>
          <div class="icon">
            <i class="ion ion-card"></i>
          </div>
          <a href="#" class="small-box-footer">Ver <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
          <div class="inner">
            <h3>0</h3>

            <p>Tipos de Maquina</p>
          </div>
          <div class="icon">
            <i class="ion ion-card"></i>
          </div>
          <a href="#" class="small-box-footer">Ver <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
          <div class="inner">
            <h3>0</h3>

            <p>Tab Tarjetas</p>
          </div>
          <div class="icon">
            <i class="ion ion-card"></i>
          </div>
          <a href="<?= base_url() ?>index.php/admin/ManageCard" class="small-box-footer">Ver <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow">
          <div class="inner">
            <h3>0</h3>

            <p>Reportes</p>
          </div>
          <div class="icon">
            <i class="ion ion-card"></i>
          </div>
          <a href="#" class="small-box-footer">Ver <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
          <div class="inner">
            <h3>0</h3>

            <p>Office 365</p>
          </div>
          <div class="icon">
            <i class="ion ion-card"></i>
          </div>
          <a href="<?= base_url() ?>index.php/admin/DepController/manageDep" class="small-box-footer">Ver <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-red">
          <div class="inner">
            <h3>0</h3>

            <p>Tarjetas de Manejo</p>
          </div>
          <div class="icon">
            <i class="ion ion-card"></i>
          </div>
          <a href="<?= base_url() ?>index.php/admin/ManageCard" class="small-box-footer">Ver <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
          <div class="inner">
            <h3>0</h3>

            <p>Movimiento Equipos</p>
          </div>
          <div class="icon">
            <i class="ion ion-card"></i>
          </div>
          <a href="<?= base_url() ?>index.php/admin/ManageCard" class="small-box-footer">Ver <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
    </div>
    <!-- /.row -->

</div>
<!-- /.row (main row) -->

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php $this->load->view('templates/footer') ?>
<?php $this->load->view('templates/controlsidebar') ?>