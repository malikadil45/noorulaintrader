<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="public/index3.html" class="brand-link">
    <img src="<?php echo base_url() ?>public/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
      class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Noor UL Ain Trader's</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="<?php echo base_url() ?>public/dist/img/user2-160x160.jpg" class="img-circle elevation-2"
          alt="User Image">
      </div>
      <div class="info">

        <a href="#" class="d-block">Hello,
          <?php $session = \Config\Services::session();
          echo $name = $session->get('name'); ?>
        </a>
      </div>
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
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
        <li class="nav-item">
          <a href="<?php echo base_url() ?>" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Dashboard</p>
          </a>
        </li>
        <li class="nav-item  <?php if ($breadcrumb == "Member List's") { ?> menu-open <?php } ?>">
          <a href="#" class="nav-link <?php if ($breadcrumb == "Member List's") { ?> active <?php } ?>">
            <i class="nav-icon fas fa-table"></i>
            <p>
              Product
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?php echo base_url('addnewproduct') ?>"
                class="nav-link <?php if ($breadcrumb == "Member List's") { ?> active <?php } ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>
                  Add New Product
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url('productlists') ?>"
                class="nav-link <?php if ($breadcrumb == "Member List's") { ?> active <?php } ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>
                  Product Lists
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url('productpricelists') ?>"
                class="nav-link <?php if ($breadcrumb == "Member List's") { ?> active <?php } ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>
                  Price Reset
                </p>
              </a>
            </li>
            <!-- <li class="nav-item">
              <a href="<?php // echo base_url('productprice') ?>"
                class="nav-link <?php // if ($breadcrumb == "Member List's") { ?> active <?php // } ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>
                  Product Price
                </p>
              </a>
            </li> -->
          </ul>
        </li>
        <li class="nav-item  <?php if ($breadcrumb == "Member List's") { ?> menu-open <?php } ?>">
          <a href="#" class="nav-link <?php if ($breadcrumb == "Member List's") { ?> active <?php } ?>">
            <i class="nav-icon fas fa-table"></i>
            <p>
              Order
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?php echo base_url('addneworder') ?>"
                class="nav-link <?php if ($breadcrumb == "Member List's") { ?> active <?php } ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>
                  Add New Orders
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url('orderlists') ?>"
                class="nav-link <?php if ($breadcrumb == "Shopkeeper List's") { ?> active <?php } ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>
                  Order's List
                </p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item  <?php if ($breadcrumb == "Member List's") { ?> menu-open <?php } ?>">
          <a href="#" class="nav-link <?php if ($breadcrumb == "Member List's") { ?> active <?php } ?>">
            <i class="nav-icon fas fa-table"></i>
            <p>
              Shopkeeper
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?php echo base_url('addnewshopkeeper') ?>"
                class="nav-link <?php if ($breadcrumb == "Member List's") { ?> active <?php } ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>
                  Add New Shopkeeper
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url('shopkeeperlists') ?>"
                class="nav-link <?php if ($breadcrumb == "Shopkeeper List's") { ?> active <?php } ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>
                  Shopkeeper Lists
                </p>
              </a>
            </li>
          </ul>
        </li>
        <!-- <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon far fa-image"></i>
            <p>
              Gallery
            </p>
          </a>
        </li> -->
        <!-- <li class="nav-item <?php if ($breadcrumb == "County & City") { ?> menu-open <?php } ?>">
          <a href="#" class="nav-link <?php if ($breadcrumb == "County & City") { ?> active <?php } ?>">
            <i class="nav-icon fas fa-book"></i>
            <p>
              Pages
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?php echo base_url('countrycitylists'); ?>"
                class="nav-link <?php if ($breadcrumb == 'County & City') { ?> active <?php } ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>County & City</p>
              </a>
            </li>
          </ul>
        </li> -->
        <li class="nav-item">
          <a href="" class="nav-link">
            <i class="nav-icon far fa-image"></i>
            <p>
              Report's
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?php echo base_url('logout') ?>" class="nav-link">
            <i class="nav-icon far fa-image"></i>
            <p>
              Logout
            </p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>