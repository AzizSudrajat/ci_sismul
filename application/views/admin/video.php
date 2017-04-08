<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url(); ?>assets/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="<?php echo base_url(); ?>assets/dist/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>assets/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php echo base_url(); ?>assets/bower_components/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url(); ?>assets/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script>
        $(document).ready(function() {
        $('#dataTables-example').dataTable();
        });

        $(document).ready(function() {
        $('#dataTables-example-2').dataTable();
        });
        </script>

        <script language="javascript">
        function checkMe() {
            if (confirm("Apakah anda yakin ingin menghapus ?")) {
                alert("Data Berhasil Dihapus");
                return true;
            } else {
                alert("Data Gagal Dihapus");
                return false;
            }
        }
        </script>
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="welcome.html">SB Admin v2.0</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="<?php echo base_url(); ?>admin/welcome/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                   <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="<?php echo base_url(); ?>admin/welcome/index"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>admin/welcome/gambar"><i class="fa fa-table fa-fw"></i> Lihat Gambar</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>admin/welcome/musik"><i class="fa fa-edit fa-fw"></i> Lihat Musik</a>
                        </li>
                         <li>
                            <a href="<?php echo base_url(); ?>admin/welcome/video"><i class="fa fa-comments fa-fw"></i> Lihat Video</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
        <div class ="container-fluid">


    <div class="tabel">
            <form method="post" action="<?php echo base_url();?>admin/welcome/tambahvideo">
                <div>
                <br>
                <input type="submit" class="btn btn-primary" value="Tambah video"/>
                </div>
            </form>

                <div class="col-md-6" style="margin-top:30px">
                  <?php
                  	if($record->num_rows() == 0){
                  	echo "<center><strong>Tidak Ada Data Tersedia</strong></center>";
                  	} else {
                  ?>
                </div>


    <div  style="margin-top:30px">
    <table border="1" class="table table-striped table-bordered table-hover" id="dataTables-example">
      <thead><tr>
        <th width ="1%">No</th>
        <th>Nama video</th>
        <th>Deskripsi video</th>
        <th>video</th>
        <th width="10%">Action</th>
      </tr></thead>
      <?php $no=1; foreach($record->result_array() as $list){?>
        <tr>
            <td><?php echo $no;?></td>
            <td><?php echo $list['nama_video'];?></td>
            <td><?php echo $list['deskripsi_video'];?></td>
            <td><?php echo $list['video'];?></td>
            <td><a href="<?php echo base_url();?>admin/welcome/editvideo/<?php echo $list['id'];?>"class="btn btn-sm btn-default"><span class="glyphicon glyphicon-wrench"></span></a>
            <a href="<?php echo base_url();?>admin/welcome/do_hapus_video/<?php echo $list['id'];?>" onClick="return checkMe()" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-trash"></span></a>
            </td>
        <?php $no++ ; } }?>
        </tr>



    </table>
    </div>


        </div>

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>assets/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url(); ?>assets/bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="<?php echo base_url(); ?>assets/bower_components/raphael/raphael-min.js"></script>
    <script src="<?php echo base_url(); ?>assets/bower_components/morrisjs/morris.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url(); ?>assets/dist/js/sb-admin-2.js"></script>

</body>

</html>
