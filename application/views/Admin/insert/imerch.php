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
    <link href="<?php echo base_url(); ?>bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url(); ?>bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="<?php echo base_url(); ?>dist/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php echo base_url(); ?>bower_components/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url(); ?>bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

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
                <a class="navbar-brand" href="index.html">SB Admin v2.0</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
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
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>index.php/welcome/admin"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-edit fa-fw"></i>View Data<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Merchendise <span class="fa arrow"></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="<?php echo base_url(); ?>index.php/welcome/vtshirt">TShirt</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url(); ?>index.php/welcome/vworkshirt">WorkShirt</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url(); ?>index.php/welcome/vvest">Vest</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url(); ?>index.php/welcome/vpants">Pants</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-third-level -->
                                </li>
                                <li>
                                    <a href="#">Accesories<span class="fa arrow"></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="<?php echo base_url(); ?>index.php/welcome/vhelm">Helmet</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url(); ?>index.php/welcome/vcaps">Caps</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-third-level -->
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>index.php/welcome/vmotorcycle">Motorcycle</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li class="active">
                            <a href="#"><i class="fa fa-edit fa-fw"></i>Insert Form<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level collapse in" aria-expanded="true">
                                <li>
                                    <a href="<?php echo base_url(); ?>index.php/welcome/imerch">Merchendise</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>index.php/welcome/iacc">Accesories</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>index.php/welcome/imtrc">Motorcycle</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Insert Merchendise</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Insert Form Merchendise
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" action="<?php echo base_URL(); ?>index.php/welcome/addmerch" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Input Gambar Merch</label>
                                            <input type="file" name="gambar" required>
                                            <p class="help-block">MAX 10000 x 10000 px</p>
                                        </div>
                                        <div class="form-group">
                                            <label>Merchendise</label>
                                            <select class="form-control" name="merch">
                                                <option value="tshirt">T-SHIRT</option>
                                                <option value="workshirt">WORKSHIRT</option>
                                                <option value="vest">VEST</option>
                                                <option value="pants">PANTS</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Merch</label>
                                            <input class="form-control" placeholder="Nama Merch" name="nama">
                                        </div>
                                        <div class="form-group">
                                            <label>Model Merch</label>
                                            <input class="form-control" placeholder="Model Merch" name="model">
                                        </div>
                                        <div class="form-group">
                                            <label>Warna Merch</label>
                                            <input class="form-control" placeholder="Warna Merch" name="warna">
                                        </div>
                                        <div class="form-group">
                                            <label>Bahan Merch</label>
                                            <input class="form-control" placeholder="Bahan Merch" name="bahan">
                                        </div>
                                        <div class="form-group">
                                            <label>Harga Merch</label>
                                            <input class="form-control" placeholder="Harga Merch" name="harga">
                                        </div>
                                        <div class="form-group">
                                            <label>Keterangan</label>
                                            <textarea class="form-control" rows="3"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-default">Submit Button</button>
                                        <button type="reset" class="btn btn-default">Reset Button</button>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url(); ?>bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url(); ?>dist/js/sb-admin-2.js"></script>

</body>

</html>
