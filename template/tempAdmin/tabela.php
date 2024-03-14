<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>TVs</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
  
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/template/tempAdmin/plugins/fontawesome-free/css/all.min.css">
  <!-- fullCalendar -->
  <link rel="stylesheet" href="/template/tempAdmin/plugins/fullcalendar/main.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/template/tempAdmin/dist/css/adminlte.min.css">
  <style>
    .buttons .btn{
    border: 0px !important;
    }
    
    .btn-info {
    color: #17a2b8;
    background-color: #17a2b800;
    border-color: #17a2b8;
    box-shadow: none;
}


  </style>
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
        <a href="../template/tempAdmin/index.php" class="nav-link">Ínicio</a>
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
    <a href="../template/tempAdmin/index.php" class="brand-link">
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
                <a href="../template/tempAdmin/upload.php" class="nav-link">
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

          
            
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../template/tempAdmin/index.html" class="nav-link">

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
                <a href="../../admin/gerirLayouts.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Criar Layout</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../../admin/gerirPlayerLayout1.php" class="nav-link">
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
            <!-- /.card -->

            <div class="card">
              
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr class="titleTable">
                    <th>Rendering engine</th>
                    <th>
                        <button type="button" class="btn btn-info" id="bnew" data-bs-toggle="modal" data-bs-target="#frmIU" data-do="i"><i class="fas fa-plus"></i></button>
                        <button type="button" class="btn btn-info" id="bcsv" data-bs-toggle="modal" data-bs-target="#frmCSV" data-do="c"><i class="fas fa-file-import"></i></button>    
                    </th>
                  </tr>
                  </thead>
                  <tbody id="bodyTable">
                  <tr>
                    <td>Trident</td>
                    <td>
                    <a href='' title='ver' class="bsee"><button type="button" class="btn btn-outline-info" data-do="e"><i class="fas fa-eye"></i></button></a>
                    <button type="button" class="btn btn-outline-info bedit" data-bs-toggle="modal" data-bs-target="#frmIU" data-do="e"><i class="fas fa-edit"></i></button>
                    <button type="button" class="btn btn-outline-info bdel" data-bs-toggle="modal" data-bs-target="#frmD" data-do="d"><i class="fas fa-trash"></i></button>
                    </td>
                  </tr>

                  
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Rafael Cerqueira, Rui Neiva, Tiago Faria &copy; 2023-2024 <a href="">ESM</a>.</strong>
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> Alpha 1.0
    </div>
  </footer>       

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
  <!-- The Modal Inserir ou Actualizar-->
  <div class="modal" id="frmIU">
    <div class="modal-dialog">
      <div class="modal-content">
        <form action="" method="post">
          <input type="hidden" id="do" name="do" value="ci">
        
          <!-- Modal Header -->
          <div class="modal-header">
            <h1 class="modal-title" id="frmIOTitulo">Add/Update</h1>
            <button type="button" class="close" data-bs-dismiss="modal">×</button>
          </div>
          <!-- Modal body -->
          <div class="modal-body">
            <h3 class="tbTitle">Some text to enable scrolling..</h3>
            <div class="row">
              <div class="col-sm-12" id="frmIOH3">
                <div class="text">
                  <div class="form-group">
                    <label id="textL">Text input:</label>
                    <input type="text" class="form-control required" id="txtTarefa" value="">
                  </div>
                </div>
                <div class="password">
                  <div class="form-group">
                    <label id="passL">Pass input:</label>
                    <input type="password" class="form-control required" id="passN" value="">
                  </div>
                </div>
                <div class="select">
                  <div class="form-group">
                    <label id="selectL">List:</label>
                    <select class="form-select" id="selectLst">
                        <option value="icon-atom"  >ÁtomoXXX [icon-atom]</option>
                      </select>
                  </div>
                </div>
                <div class="date">
                  <div class="form-group">
                    <label id="dataL">Date:</label>
                    <input type="date" class="form-control required" name="txtData" id="txtData" value="txtData">
                  </div>
                </div>
                <div class="textArea">
                  <div class="form-group">
                    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.css" rel="stylesheet">
                    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.js"></script>
                    <label id="textAreaL">Text area:</label>
                    <textarea id="textAreaN">...</textarea>

                  </div>
                </div>
                <div class="check">
                  <div class="form-group">
                    <div class="checkbox">
                      <label>
                          <input type="checkbox" id="checkN" checked>checkbox sample<br>
                        </label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Modal footer -->
          <div class="modal-footer">
            <div class="form-group">
              <p id="teste"></p>
              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
              <button class="btn btn-primary" aria-hidden="true" type="submit">Save</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- The Modal delete-->
  <div class="modal fade" id="frmD">
    <div class="modal-dialog">
      <form action="" method="post">
        <input type="hidden" name="do" value="cd">
        <input type="hidden" id="deleteKey" name="id" value="">
        <div class="modal-content">
          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Confirmation</h4>
            <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
          </div>
          <!-- Modal body -->
          <div class="modal-body" id="perguntaT">
            <p>Do you want delete the record?</p>
            <p id="delId"></p>
            <p id="delText"></p>
          </div>
          <!-- Modal footer -->
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Yes</button>
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">No</button>
          </div>
        </div>
      </form>
    </div>
  </div>

  <!-- The Modal import-->
  <div class="modal" id="frmCSV">
    <div class="modal-dialog">
      <div class="modal-content">
        <form action="" method="post">
          <input type="hidden" name="do" value="csv">
          <!-- Modal Header -->
          <div class="modal-header">
            <h1 class="modal-title" id="frmITitulo">Import</h1>
            <button type="button" class="close" data-bs-dismiss="modal">×</button>
          </div>
          <!-- Modal body -->
          <div class="modal-body">
            <h3 class="tbTitle">Table Title</h3>
            <p> The fields must be imported on this order: <code id="importLst">First,Secund,Third,Last</code></p>
            <p> You may add a <code>,</code> on the end of the line</p>
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  <label for="comment">Lines to be added:</label>
                  <textarea class="form-control" rows="10" id="txtCSV" name="txtCSV"></textarea>
                </div>
              </div>
              <div class="col-sm-12">
                <div class="form-group">
                  <input type="checkbox" id="doUpdate" name="doUpdate" >
                  <label for="comment">Se existe o registo actualiza-o:</label>
                  
                </div>
              </div>
            </div>
          </div>
          <!-- Modal footer -->
          <div class="modal-footer">
            <div class="form-group">
              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
              <button class="btn btn-primary" aria-hidden="true" type="submit">Import</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

<!-- jQuery -->
<script src="/template/tempAdmin/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<!-- DataTables  & Plugins -->
<script src="/template/tempAdmin/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/template/tempAdmin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="/template/tempAdmin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="/template/tempAdmin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="/template/tempAdmin/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="/template/tempAdmin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="/template/tempAdmin/plugins/jszip/jszip.min.js"></script>
<script src="/template/tempAdmin/plugins/pdfmake/pdfmake.min.js"></script>
<script src="/template/tempAdmin/plugins/pdfmake/vfs_fonts.js"></script>
<script src="/template/tempAdmin/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="/template/tempAdmin/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="/template/tempAdmin/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="/template/tempAdmin/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/template/tempAdmin/dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
  <script id="textAreaS">
    //caixa de mensagens
    $(document).ready(function() {
      $('#textAreaN').summernote();
    });
  </script>
</body>
</html>
