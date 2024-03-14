<?php require "../../../ligacao.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Interface</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Ekko Lightbox -->
  <link rel="stylesheet" href="../plugins/ekko-lightbox/ekko-lightbox.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../../../template/tempAdmin/index.php" class="nav-link">Ínicio</a>
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

    
      
      <!-- Notifications Dropdown Menu -->
      
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
    <a href="../../../template/tempAdmin/index.php" class="brand-link">
      <img src="/template/tempAdmin/dist/img/esmLogo.png" alt="AdminLTE Logo" style="opacity: .8">
      <span class="brand-text font-weight-light"></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/template/tempAdmin/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
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

               <li class="nav-item">
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
                <a href="../../admin/gerirPlayerLayout1.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Media local</p>
                </a>
              </li>
              </ul>
          </li>

          <li class="nav-item">
            <a href="../../../admin/gerirVideosPlaylist.php" class="nav-link">
              <i class="fas fa-film"></i>
              <p>
                 Gerir Videos Playlist
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="../../../admin/gerirListaTVs.php" class="nav-link">
              <i class="fas fa-tv"></i>
              <p>
                 Lista de TVs
              </p>
            </a>
          </li>

          
            
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../../template/tempAdmin/index.html" class="nav-link">

                </a>
              </li>
              
            </ul>
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
                <a href="../../../admin/gerirLayouts.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Criar Layout</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../../../admin/gerirPlayerLayout1.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lista de Esquemas</p>
                </a>
              </li>
              
            </ul>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="tbTitle">DataTables</h1>
          </div>
         
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card card-primary">
              <div class="card-header">
                <h4 class="card-title">Televisões</h4>
                
              </div>
              <div class="card-body">
                
                  <div class="mb-2">
                    <div class="float-right"> 
                      <div class="btn-group">
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Tabela -->
                <table class="table table-bordered">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Localização</th>
            <th>Layout</th>
            <th>Playlist</th>
            <th>Ações</th>
        </tr>
    </thead>

    <tbody>
        <?php
        $sql = "SELECT listaTVs.id, `local`, `resX`, `resY`, `layout` , 
                        layouts.nome, GROUP_CONCAT( grupoID) as grupos, GROUP_CONCAT(grupos.nome) as nomeGrupos
                FROM `listaTVs` 
                LEFT JOIN layouts ON listaTVs.layout=layouts.id
                LEFT JOIN layoutSchema ON layouts.id=layoutSchema.idLayout
                LEFT JOIN grupos ON layoutSchema.grupoID=grupos.id
                GROUP BY listaTVs.id;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
        ?>
        <tr>
            <td>TV</td>
            <td><?=$row["local"];?></td>
            <td><?=$row["nome"];?></td>
            <td><?=$row["nomeGrupos"];?></td>
            <td>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editarModal<?=$row["id"];?>">
                    Editar
                </button>
            </td>
        </tr>

        <!-- Modal de Edição -->
        <div class="modal fade" id="editarModal<?=$row["id"];?>" tabindex="-1" role="dialog" aria-labelledby="editarModalLabel<?=$row["id"];?>">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editarModalLabel<?=$row["id"];?>">Editar TV</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- Formulário de Edição -->
                        <form method="post" action="editar_tv.php">
                            <input type="hidden" name="tv_id" value="<?=$row["id"];?>">
                            <!-- Adicione os campos que deseja editar aqui -->
                            <div class="form-group">
                                <label for="local<?=$row["id"];?>">Localização</label>
                                <input type="text" class="form-control" id="local<?=$row["id"];?>" name="localizacao" value="<?=$row["local"];?>">
                            </div>
                            <!-- Adicione mais campos conforme necessário -->

                            <button type="submit" class="btn btn-primary">Salvar Alterações</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php
            }
        }
        ?>
    </tbody>
</table>
              </div>
            </div>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
   <footer class="main-footer">
    <strong>Rafael Cerqueira, Rui Neiva, Tiago Faria &copy; 2023-2024 <a href="">ESM</a>.</strong>
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> Alpha 1.0  
    </div>
  </footer>      
    </div>
  <!-- /.content-wrapper -->
    

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>

<!-- ./wrapper -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Ekko Lightbox -->
<script src="../plugins/ekko-lightbox/ekko-lightbox.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- Filterizr-->
<script src="../plugins/filterizr/jquery.filterizr.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
      event.preventDefault();
      $(this).ekkoLightbox({
        alwaysShowClose: true
      });
    });

    $('.filter-container').filterizr({gutterPixels: 3});
    $('.btn[data-filter]').on('click', function() {
      $('.btn[data-filter]').removeClass('active');
      $(this).addClass('active');
    });
  })
</script>
</body>
</html>
