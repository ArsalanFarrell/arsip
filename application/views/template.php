<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>E-Arsip</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
   <!-- Icon Web -->
  <link rel="icon" href="<?= base_url('assets/images/.png') ?>" type="image/x-icon">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  
  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/bf9156d7b2.js" crossorigin="anonymous"></script>
  <!-- <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/font-awesome/css/font-awesome.min.css"> -->
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url()?>assets/dist/css/AdminLTE.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?=base_url()?>assets/dist/css/skins/_all-skins.min.css">
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <!-- Data Tables -->
  <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.css">
</head>
<body class="hold-transition skin-red sidebar-mini <?=$this->uri->segment(1) == 'sale'? 'sidebar-collapse' : null?>">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?=site_url('dashboard');?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>Arsip</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><i class="fa fa-file-archive"></i> Arsip</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>


      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
         
          <!-- Custom Navbar Disini -->
          <!-- <li class="user-header pull-left" style="font-size: 100%; font-weight: bold; font-style: italic;"><a href="#">Sistem Informasi Arsip</a></li> -->
         

          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?=base_url()?>assets/images/farrell.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs"><?=ucfirst($this->fungsi->user_login()->username)?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?=base_url()?>assets/images/farrell.jpg" class="img-circle" alt="User Image">

                <p>
                  <?=ucfirst($this->fungsi->user_login()->name)?>
                  <small><?=ucfirst($this->fungsi->user_login()->address)?>, 2022</small>
                </p>
              </li>
              
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="<?=site_url('auth/logout')?>" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
         
        </ul>
      </div>
    </nav>
  </header>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?=base_url()?>assets/images/farrell.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?=ucfirst($this->fungsi->user_login()->username)?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Daftar Menu</li>
        <li <?=$this->uri->segment(1) == 'dashboard' || $this->uri->segment(1) == ''?'class="active"' : '' ?>>
          <!-- <a href="<?=site_url('dashboard');?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a> -->
        </li>
        <li <?=$this->uri->segment(1) == 'kategori' ?'class="active"' : '' ?>>
          <a href="<?=site_url('kategori');?>">
            <i class="fa fa-archive"></i> <span>Kategori</span>
          </a>
        </li>
        <!-- <li <?=$this->uri->segment(1) == 'jabatan' ?'class="active"' : '' ?>>
          <a href="<?=site_url('jabatan');?>">
            <i class="fa fa-building"></i> <span>Jabatan</span>
          </a>
        </li>  -->
       <li <?=$this->uri->segment(1) == 'arsip' ?'class="active"' : '' ?>>
          <a href="<?=site_url('arsip');?>">
            <i class="fa fa-file-archive"></i> <span>Arsip</span>
          </a>
        </li> 

        <?php if ($this->fungsi->user_login()->level  == 1) {?>
        
        <li><a href="<?=site_url('user');?>"><i class="fa fa-user"></i> <span>About</span></a></li>
        <?php }?>
        <li><a href="<?=site_url('auth/logout');?>"><i class="fa fa-sign-out"></i> <span>Logout</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->

  <!-- jQuery 3 -->
<script src="<?=base_url()?>assets/bower_components/jquery/dist/jquery.min.js"></script>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
    <?php echo $contents ?>

       <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <strong>Copyright &copy; 2022 <a href="#">Farrell</a>.</strong> All rights
    reserved.
  </footer>

 </div>
<!-- ./wrapper -->


<!-- Bootstrap 3.3.7 -->
<script src="<?=base_url()?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?=base_url()?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- AdminLTE App -->
<script src="<?=base_url()?>assets/dist/js/adminlte.min.js"></script>

<!-- Data table -->
<script src="<?=base_url()?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?=base_url()?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<script>
  // $(document).ready(function(){
  //   $('#table1').DataTable()
  // })

  var table = $('#table1').DataTable({
    lengthChange: false,
    initComplete : function() {
        var input = $('.dataTables_filter input').unbind(),
            self = this.api(),
            $searchButton = $('<button>')
                       .text('search')
                       .click(function() {
                          self.search(input.val()).draw();
                       }),
            $clearButton = $('<button>')
                       .text('clear')
                       .click(function() {
                          input.val('');
                          $searchButton.click(); 
                       })         
        $('.dataTables_filter').append($searchButton, $clearButton);
    }            
})  
</script>

<!-- Sidebarmenu -->
<script>
  $(document).ready(function () {
    $('.sidebar-menu').tree()
  })
</script>
</body>
</html>
