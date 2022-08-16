<?= $this->section('aside') ?>
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <!-- <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
      <span class="brand-text font-weight-light">Sayge Perú</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <!-- <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"> -->
        </div>
        <div class="info">
          <a href="#" class="d-block"><?= $_SESSION['name'] ?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Buscar en menú" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <?php foreach($menu as $key => $firstMenu): ?>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-circle"></i>
                <p>
                  <?= $firstMenu[0]['name'] ?>
                  <?php if(!empty($firstMenu[0]['submenu']) && count($firstMenu[0]['submenu'])){ ?>
                    <i class="right fas fa-angle-left"></i>
                  <?php } ?>
                </p>
              </a>
              <?php if(!empty($firstMenu[0]['submenu']) && count($firstMenu[0]['submenu'])){ ?>
              <ul class="nav nav-treeview">
                <?php foreach($firstMenu[0]['submenu'] as $key2 => $secondMenu): ?>
                  <li class="nav-item">
                    <a href="#" class="ml-2 nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>
                        <?= $secondMenu['nombreopcionmenu'] ?>
                        <?php if(!empty($secondMenu['thirdmenu']) && count($secondMenu['thirdmenu'])){ ?>
                          <i class="right fas fa-angle-left"></i>
                        <?php } ?>
                      </p>
                    </a>
                    <?php if(!empty($secondMenu['thirdmenu']) && count($secondMenu['thirdmenu'])){ ?>
                      <ul class="nav nav-treeview">
                      <?php foreach($secondMenu['thirdmenu'] as $key3 => $thirdMenu): ?>
                        <li class="nav-item">
                          <a href="#" class="ml-4 nav-link">
                            <i class="far fa-dot-circle nav-icon"></i>
                            <p><?= $thirdMenu['nombreopcionmenu'] ?></p>
                          </a>
                        </li>
                      <?php endforeach ?>
                      </ul>
                    <?php } ?>
                  </li>
                  
                <?php endforeach ?>
              </ul>
            <?php } ?>
            </li>
          <?php  endforeach ?>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
<?= $this->endSection() ?>