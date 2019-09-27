<nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <img src="<?php echo base_url('assets/img/logo.png') ?>" width="52" height="28">
    </button>

    <a class="navbar-brand mr-1" href="<?php echo site_url('admin') ?>"><?php echo SITE_NAME ?></a>

    
    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
     
     
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <img src="<?php echo base_url('assets/img/'.$this->session->foto) ?>" class="rounded-circle" alt="Admin" width="50" height="30"> <?php echo  $this->session->nama; ?> <i class='fas fa-angle-down' style="margin-right: 10px; margin-left: 10px;"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="#">Account Setting</a>
          <a class="dropdown-item" href="<?php echo base_url('admin/logout') ?>" data-toggle="modal" data-target="#logoutModal">Logout</a>
        </div>
      </li>
    </ul>

  </nav>