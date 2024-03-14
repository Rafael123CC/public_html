<!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php" class="nav-link">Ínicio</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

     
      
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
     
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar bg-light elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="dist/img/esmLogo.png" alt="AdminLTE Logo" style="opacity: .8">
      <span class="brand-text font-weight-light"></span>
      <br>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin</a>
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
          <li class="nav-item menu-open">

          <li class="nav-item">
            <a href="../../admin/gerirPlaylist.php" class="nav-link">
              <i class="fas fa-list-ul"></i>
              <p>
                Playlists

              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                 Media
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../../admin/gerirMedias.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Media link</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="upload.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Media local</p>
                </a>
              </li>
              </ul>
          </li>

          <li class="nav-item">
            <a href="../../admin/gerirLive.php" class="nav-link">
              <i class="fas fa-broadcast-tower"></i>
              <p>
                Live Stream
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="../../admin/gerirVideosPlaylist.php" class="nav-link">
              <i class="fas fa-film"></i>
              <p>
                Gerir Videos Playlist
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="../../admin/gerirListaTVs.php" class="nav-link">
              <i class="fas fa-tv"></i>
              <p>
                Lista de TVs
              </p>
            </a>
          </li>


          <li class="nav-item">
            <a href="https://tv.alunos.esmonserrate.org/layout/layout1/" class="nav-link">
              <i class="fas fa-tv"></i>
              <p>
                Visualização
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Layout Options
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../../admin/gerirLayouts.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Criar Layout</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../../admin/gerirPlayerLayout1.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lista de Players</p>
                </a>
              </li>
              
            

            </ul>
          </li>

         
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
