<?php $session_data = $this->session->userdata('datos_usuario'); ?>
<?php $nombre = $session_data['nombre_completo']; ?>

<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?= base_url() ?>assets/img/logo.png" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?= $nombre ?></p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
          <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
          </button>
        </span>
      </div>
    </form>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
      <li class="header">MENÚ DE NAVEGACIÓN</li>
      <li class="active treeview">
        <a href="<?= base_url() ?>index.php/admin/Home">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>
        <!--<ul class="treeview-menu">
            <li class="active"><a href="index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
            <li><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
          </ul>-->
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-laptop"></i> <span>Administración</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?= base_url() ?>index.php/admin/Adf/adf"><i class="fa fa-circle-o"></i>ADF</a></li>
        </ul>
        <ul class="treeview-menu">
          <li><a href="<?= base_url() ?>index.php/admin/SAMAFULLController/manageSAMAFULL"><i class="fa fa-circle-o"></i>SAMAFULL</a></li>
        </ul>
        <ul class="treeview-menu">
          <li><a href="<?= base_url() ?>index.php/admin/Management/siath"><i class="fa fa-circle-o"></i>SIATH</a></li>
        </ul>
        <ul class="treeview-menu">
          <li><a href="<?= base_url() ?>index.php/admin/Management/t_maquina"><i class="fa fa-circle-o"></i>Tipos de Maquina</a></li>
        </ul>
        <ul class="treeview-menu">
          <li><a href="<?= base_url() ?>index.php/admin/Management/t_tarjetas"><i class="fa fa-circle-o"></i>Tab Tarjetas</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-eye"></i> <span>Reportes</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?= base_url() ?>index.php/admin/Views/cargos"><i class="fa fa-circle-o"></i>Cargos</a></li>
        </ul>
        <ul class="treeview-menu">
          <li><a href="<?= base_url() ?>index.php/admin/Views/cargos_siath"><i class="fa fa-circle-o"></i>Cargos SIATH</a></li>
        </ul>
        <ul class="treeview-menu">
          <li><a href="<?= base_url() ?>index.php/admin/Views/dgsm"><i class="fa fa-circle-o"></i>DGSM</a></li>
        </ul>
        <ul class="treeview-menu">
          <li><a href="<?= base_url() ?>index.php/admin/Views/empleados"><i class="fa fa-circle-o"></i>Empleados</a></li>
        </ul>
        <ul class="treeview-menu">
          <li><a href="<?= base_url() ?>index.php/admin/Views/external"><i class="fa fa-circle-o"></i>Externos</a></li>
        </ul>
        <ul class="treeview-menu">
          <li><a href="<?= base_url() ?>index.php/admin/Views/gen_t_manejo"><i class="fa fa-circle-o"></i>T. Manejo</a></li>
        </ul>
        <ul class="treeview-menu">
          <li><a href="<?= base_url() ?>index.php/admin/Views/lst_usr_admin"><i class="fa fa-circle-o"></i>Usuarios Admin</a></li>
        </ul>
        <ul class="treeview-menu">
          <li><a href="<?= base_url() ?>index.php/admin/Views/manejo_cargos"><i class="fa fa-circle-o"></i>Manejo Cargos</a></li>
        </ul>
        <ul class="treeview-menu">
          <li><a href="<?= base_url() ?>index.php/admin/Views/novedades"><i class="fa fa-circle-o"></i>Novedades</a></li>
        </ul>
        <ul class="treeview-menu">
          <li><a href="<?= base_url() ?>index.php/admin/Views/siath"><i class="fa fa-circle-o"></i>SIATH</a></li>
        </ul>
        <ul class="treeview-menu">
          <li><a href="<?= base_url() ?>index.php/admin/Views/t_manejo"><i class="fa fa-circle-o"></i>T. Manejo</a></li>
        </ul>
        <ul class="treeview-menu">
          <li><a href="<?= base_url() ?>index.php/admin/Views/t_manejo_vencidas"><i class="fa fa-circle-o"></i>T. Manejo Vencidas</a></li>
        </ul>
        <ul class="treeview-menu">
          <li><a href="<?= base_url() ?>index.php/admin/Views/tab_t_activas"><i class="fa fa-circle-o"></i>Tab. Tarjetas Vencidas</a></li>
        </ul>
        <ul class="treeview-menu">
          <li><a href="<?= base_url() ?>index.php/admin/Views/sev"><i class="fa fa-circle-o"></i>SEV</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-windows"></i> <span>Office 365</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?= base_url() ?>index.php/admin/Office365"><i class="fa fa-circle-o"></i> Usuarios</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="<?= base_url() ?>index.php/admin/Office365">
          <i class="fa fa-exchange"></i> <span>Movimiento Equipos</span>
        </a>
      </li>
      <li class="treeview">
        <a href="<?= base_url() ?>index.php/admin/ManageCard">
          <i class="fa fa-cc"></i> <span>Tarjetas de Manejo</span>
        </a>
      </li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>