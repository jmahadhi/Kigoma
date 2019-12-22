<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>eLoan</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="/css/app.css">

  </head>
  <body class="hold-transition sidebar-mini">
    <div class="wrapper"  id="app">

      <!-- Navbar -->
      <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
          </li>
        
        </ul>

        <!-- SEARCH FORM -->
        <form class="form-inline ml-3">
          <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-navbar" type="submit">
                <i class="fas fa-search"></i>
              </button>
            </div>
          </div>
        </form>

        <!-- Nav Item - User Information -->
        <div class="nav-item dropdown no-arrow  ml-auto">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" 
              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="mr-2 d-none d-lg-inline text-gray-600 small">
             {{ Auth::user()->name }}
            </span>
            <img class="image" src="./img/user_profile.png" style="width: 30px" style="height:30px">
          </a>
          <!-- Dropdown - User Information -->
          <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
            <router-link class="dropdown-item" :to="{path: '/profile'}">
              <i class="nav-icon fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
              Profile
            </router-link>
            <a class="dropdown-item" href="#">
              <i class="nav-icon fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
              Settings
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item"  href="{{ route('logout') }}"
               data-toggle="modal" data-target="#logoutModal" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    <i class=" nav-icon fas fa-power-off"></i> {{ __('Logout') }}
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                </form>
            </a>
          </div>
        </div>
      
      </nav>
      <!-- /.navbar -->

      <!-- Main Sidebar Container -->
      <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="index.html" class="brand-link">
          <img src="./img/logo.gif" alt="Coat of Arm Logo" class="brand-image img-circle elevation-3"
              style="opacity: .5">
          <span class="brand-text font-weight-light">eLoan System</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          
          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <!-- Add icons to the links using the .nav-icon class
                  with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <router-link to="/dashboard" class="nav-link">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>DashBoard</p>
                    </router-link>
                </li>
                <li class="nav-item has-treeview menu-close">
                    <a href="#" class="nav-link">
                      <i class="nav-icon fas fa-cogs"></i>
                        <p>
                            System Setting
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-stream"></i>
                            <p>Organisation Level</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-sort-amount-down-alt"></i>
                            <p>Organisation Unit</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-hourglass-half"></i>
                            <p>Financial Year</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-clock"></i>
                            <p>Quarter</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview menu-close">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-users-cog"></i>
                        <p>
                            User Management
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                            <i class="nav-icon fab fa-r-project"></i>
                            <p>Manager Roles</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <router-link to="/users" class="nav-link">
                              <i class="nav-icon fas fa-user-plus"></i>
                              <p>Create Use</p>
                            </router-link>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview menu-close">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p> Group Management
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-layer-group"></i>
                                <p>Register Group</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class=" nav-icon fas fa-list-ol"></i>
                                <p>Group List</p>
                            </a>
                        </li>
                    </ul>
                </li>
              <li class="nav-item has-treeview menu-close">
                <a href="#" class="nav-link">
                <i class="nav-icon fab fa-monero"></i>
                    <p> Funds Management
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                      <a href="#" class="nav-link">
                      <i class="nav-icon fas fa-donate"></i>
                          <p>Funds Receivable</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="#" class="nav-link">
                      <i class="nav-icon fas fa-dollar-sign"></i>
                          <p>Funds Source Status</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-list-alt"></i>
                          <p>Funds Source Listing</p>
                      </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item has-treeview menu-close">
                <a href="#" class="nav-link">
                <i class="nav-icon fas fa-hand-holding-usd"></i>
                    <p> Loans
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tools"></i>
                            <p>Manage Loans</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-coins"></i>
                            <p>Disburse Loans</p>
                        </a>
                    </li>
                </ul>
              </li>
              <li class="nav-item has-treeview menu-close">
                <a href="#" class="nav-link">
                <i class="nav-icon fas fa-comments-dollar"></i>
                    <p> Retirements
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                      <a href="#" class="nav-link">
                      <i class="nav-icon fas fa-plus-circle"></i>
                          <p>Add Retirements</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="#" class="nav-link">
                      <i class="nav-icon fas fa-boxes"></i>
                          <p>Retirement Status</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="#" class="nav-link">
                      <i class="nav-icon fas fa-shopping-basket"></i>
                          <p>Manage Retirements</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="#" class="nav-link">
                      <i class="nav-icon fas fa-object-group"></i>
                          <p>Retirement By Group Type</p>
                      </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item has-treeview menu-close">
                <a href="#" class="nav-link">
                <i class="nav-icon fas fa-folder-open"></i>
                    <p> Report
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-calendar-day"></i>
                            <p>Quartely Report</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-recycle"></i>
                            <p>Retired and Disburse Report</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-book-open"></i>
                            <p>CashBook Report</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-calendar-alt"></i>
                            <p>Quartely CashBook Report</p>
                        </a>
                    </li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <i class="nav-icon fas fa-question-circle"></i>
                    <p>Help</p>
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    <i class=" nav-icon fas fa-power-off red"></i>
                    <p> {{ __('Logout') }}</p>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                </form>
              </li>
            </ul>
          </nav>
          <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
       
        <!-- Main content -->
        <div class="content">
          <div class="container-fluid">
           <router-view></router-view>
          </div>
        </div><!-- /.container-fluid -->
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->

       <!-- Main Footer -->
      <footer class="main-footer">
        <!-- To the right -->
        <div class="float-right d-none d-sm-inline">
          Any System you want
        </div>
        <div class="text-center">
            <strong>Copyright &copy; 2019 <a href="#">MaHaDHi- (+255 714 708 087)</a>.</strong> All rights reserved.
        </div>
      </footer>
      </div>
    <!-- ./wrapper -->
    <script src="/js/app.js"></script>
  </body>
</html>
