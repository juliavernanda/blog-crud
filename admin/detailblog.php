<!DOCTYPE html>
<html>
<head>
<?php include("includes/head.php") ?> 
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
<?php include("includes/header.php") ?>

  <?php include("includes/sidebar.php") ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-user-tie"></i> Detail Data Blog</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="blog.php">Data Blog</a></li>
              <li class="breadcrumb-item active">Detail Data Blog</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
            <div class="card">
              <div class="card-header">
                <div class="card-tools">
                  <a href="blog.php" class="btn btn-sm btn-warning float-right">
                  <i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                    <tbody>  
                      <tr>
                        <td><strong>Cover Blog<strong></td>
                        <td><img src="../img/blog.jpg" class="img-fluid" width="200px;"></td>
                      </tr>               
                      <tr>
                        <td width="20%"><strong>Tanggal<strong></td>
                        <td width="80%">24-2-2021</td>
                      </tr>              
                      <tr>
                        <td width="20%"><strong>Kategori Blog<strong></td>
                        <td width="80%">Teknologi</td>
                      </tr>                 
                      <tr>
                        <td width="20%"><strong>Judul<strong></td>
                        <td width="80%">Teknologi Terkini</td>
                      </tr> 
                      <tr>
                        <td width="20%"><strong>Penulis<strong></td>
                        <td width="80%">Julia Vernanda Waghe</td>
                      </tr>
                      <tr>
                        <td><strong>Tag<strong></td>
                        <td>
                          <ul>
                            <li>PHP</li>
                            <li>MySQL</li>
                          </ul>
                        </td>
                      </tr>
                      <tr>
                        <td width="20%"><strong>Isi<strong></td>
                        <td width="80%">Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                        when an unknown printer took a galley of type and scrambled it to make a type 
                        specimen book. It has survived not only five centuries, but also the leap into 
                        electronic typesetting, remaining essentially unchanged. It was popularised in the
                         1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more
                          recently with desktop publishing software like Aldus PageMaker including versions
                           of Lorem Ipsum.</td>
                      </tr>
                    </tbody>
                  </table>  
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">&nbsp;</div>
            </div>
            <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include("includes/footer.php") ?>

</div>
<!-- ./wrapper -->

<?php include("includes/script.php") ?>
</body>
</html>
