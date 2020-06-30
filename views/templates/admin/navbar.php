    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="<?php echo url. 'dashboard';?>">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Alumni">
          <a class="nav-link" href="<?php echo url. 'alumni'; ?>">
            <i class="fa fa-fw fa-graduation-cap"></i>
            <span class="nav-link-text">Alumni</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-file-text"></i>
            <span class="nav-link-text">Kuisioner</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
            <li>
              <a href="<?php echo url.'kuisioner'?>">Kuisioner</a>
            </li>
            <li>
              <a href="<?php echo url.'pertanyaan'?>">Pertanyaan</a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Berita">
          <a class="nav-link" href="<?php echo url. 'berita';?>">
            <i class="fa fa-fw fa-newspaper-o"></i>
            <span class="nav-link-text">Berita</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Berita">
          <a class="nav-link" href="<?php echo url.'pengumuman';?>">
            <i class="fa fa-bullhorn"></i>
            <span class="nav-link-text">Pengumuman</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Lowongan Kerja">
          <a class="nav-link" href="<?php echo url.'lowongan'?>">
            <i class="fa fa-fw fa-briefcase"></i>
            <span class="nav-link-text">Lowongan Pekerjaan</span>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <div class="nav-link">
            <i class="fa fa-fw fa-user-o"></i>
            <?php
            $username = Engine\Auth::logged('username');
            $admin    = new app\models\Admin;
            echo $admin->get_name($username)->nama;
            ?>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
          <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="content-wrapper" style="background-color: #dfe3ea">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <!-- content-->