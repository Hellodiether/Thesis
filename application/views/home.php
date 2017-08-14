<?php
defined ('BASEPATH') OR exit ('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>TDY Enterprises Inc.</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url(); ?>font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
             
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                         <a href="<?php echo site_url('welcome') ?>"> <img src="<?php echo base_url(); ?>images/Logo.png" width="50px" height="52px"> </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav navbar-right">
                     <li>
                        <a href="<?php echo site_url('welcome/home') ?>">Home</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('welcome/about') ?>">About</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('welcome/contact') ?>">Contact</a>
                    </li>
                        <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Offers<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="<?php echo site_url('welcome/products') ?>">Products</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('welcome/services') ?>">Services</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('welcome/project') ?>">Projects</a>
                            </li>
                            </ul>
                        <li>
                            <a href="<?php echo site_url('welcome/inquiry') ?>">Inquire</a>                   
                        </li>
                        
                                </ul>

            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('<?php echo base_url(); ?>images/Building-Owner-Banner.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Loyalty</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('<?php echo base_url(); ?>images/banner-10.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Integrity</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('<?php echo base_url(); ?>imager/banner-skyscraper.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Customer Excellence</h2>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>

    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Welcome to TDY Enterprises Inc.
                </h1>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-check"></i> About Us</h4>
                    </div>
                    <div class="panel-body">
                        <p>We are an established company with excellent track record for providing customer satisfaction. We give high priority on the quality of the products and services provided to our customers. We believe that while it is important to make the customers happy...</p>
                        <a href="about.html" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-gift"></i> Mission</h4>
                    </div>
                    <div class="panel-body">
                        <p>TDY ENTERPRISE INC lays its commitment in rendering quality products and services partnering with our employees’ devotions and skills. It aims to achieve a sustainable level of solidarity, stability and growth.</p>
                       
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-compass"></i> Vision</h4>
                    </div>
                    <div class="panel-body">
                        <p>To be one of the reputable leading companies in steel fabrication and manufacturing with service excellence, striving for innovation, and promoting quality of life. </p>
            
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Section -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Manufactured Products</h2>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="404.html">
                    <img class="img-responsive img-portfolio img-hover" src="<?php echo base_url(); ?>images/conveyor-rollers.jpg" alt="Conveyor Rollers">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="404.html">
                    <img class="img-responsive img-portfolio img-hover" src="<?php echo base_url(); ?>images/conveyorroller-frame.jpg" alt="Conveyor Frame">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="404.html">
                    <img class="img-responsive img-portfolio img-hover" src="<?php echo base_url(); ?>images/conveyors-pulleys.jpg" alt="Pulley">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="404.html">
                    <img class="img-responsive img-portfolio img-hover" src="<?php echo base_url(); ?>images/selfalign-frames.jpg" alt="Self Aligning Frames">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="404.html">
                    <img class="img-responsive img-portfolio img-hover" src="<?php echo base_url(); ?>images/beam-mould.jpg" alt="Beam Mould">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="404.html">
                    <img class="img-responsive img-portfolio img-hover" src="<?php echo base_url(); ?>images/cylinder-mould.jpg" alt="Cylinder Mould">
                </a>
            </div>
        </div>
        <!-- /.row -->

        <!-- Features Section -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Modern Business Features</h2>
            </div>
            <div class="col-md-6">
                <p>The Modern Business template by Start Bootstrap includes:</p>
                <ul>
                    <li><strong>Bootstrap v3.3.7</strong>
                    </li>
                    <li>jQuery v1.11.1</li>
                    <li>Font Awesome v4.2.0</li>
                    <li>Working PHP contact form with validation</li>
                    <li>Unstyled page elements for easy customization</li>
                    <li>17 HTML pages</li>
                </ul>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, omnis doloremque non cum id reprehenderit, quisquam totam aspernatur tempora minima unde aliquid ea culpa sunt. Reiciendis quia dolorum ducimus unde.</p>
            </div>
            <div class="col-md-6">
                <img class="img-responsive" src="<?php echo base_url(); ?>images/Logo.png" width="450px" height="450ppx" alt="">
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Call to Action Section -->
        <div class="well">
            <div class="row">
                <div class="col-md-8">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, expedita, saepe, vero rerum deleniti beatae veniam harum neque nemo praesentium cum alias asperiores commodi.</p>
                </div>
                <div class="col-md-4">
                    <a class="btn btn-lg btn-default btn-block" href="#">Call to Action</a>
                </div>
            </div>
        </div>

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; TDY Enterprises Inc.n</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
