 <!-- Sidebar --> 
    <ul class="sidebar navbar-nav">
      <li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo base_url('admin') ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo base_url('admin/post') ?>">
          <i class='fas fa-pen'></i>
          <span>Post</span>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Pages</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <a class="dropdown-item" href="<?php echo base_url('admin/member') ?>">User dan Member</a>
          <a class="dropdown-item" href="<?php echo base_url('admin/donasi') ?>">Donatur dan Donasi</a>
          <a class="dropdown-item" href="<?php echo base_url('admin/kampanye') ?>">Penggalang Dana dan <br> Kampanye</a>
        </div>
      </li>
      <li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo base_url('admin/admin') ?>">
          <i class='fas fa-user'></i>
          <span>Kelola Admin</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('admin/logout') ?>">
          <i class='fas fa-sign-out-alt'></i>
          <span>Keluar</span></a>
      </li>
    </ul>