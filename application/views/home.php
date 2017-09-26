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
	<script src="<?php echo base_url(); ?>https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style>
	#inquiry
	{
		cursor:pointer;
	}
	</style>
    <style type="text/css">
        .form-style-5{
            max-width: 100%px;
            padding: 50px 50px;
            background: #f4f7f8;
            margin: 10px auto;
            padding: 20px;
            background: #f4f7f8;
            border-radius: 10px;
        font-family: Georgia, "Times New Roman", Times, serif;
            }
        .form-style-5 fieldset{
            border: none;
            }
        .form-style-5 legend {
            font-size: 1.4em;
            margin-bottom: 10px;
            }
        .form-style-5 label {
            display: block;
            margin-bottom: 10px;
            }
        .form-style-5 input[type="text"],
        .form-style-5 input[type="date"],
        .form-style-5 input[type="datetime"],
        .form-style-5 input[type="email"],
        .form-style-5 input[type="number"],
        .form-style-5 input[type="search"],
        .form-style-5 input[type="time"],
        .form-style-5 input[type="url"],
        .form-style-5 textarea,
        .form-style-5 select {
    font-family: Georgia, "Times New Roman", Times, serif;
    background: rgba(255,255,255,.1);
    border: none;
    border-radius: 10px;
    font-size: 18px;
    margin: 8px;
    outline: 0;
    padding: 9px;
    width: 45%;
    box-sizing: border-box; 
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box; 
    background-color: #e8eeef;
    color:#8a97a0;
    -webkit-box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
    box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
    margin-bottom: 30px;
    
}
.form-style-5 input[type="text"]:focus,
.form-style-5 input[type="date"]:focus,
.form-style-5 input[type="datetime"]:focus,
.form-style-5 input[type="email"]:focus,
.form-style-5 input[type="number"]:focus,
.form-style-5 input[type="search"]:focus,
.form-style-5 input[type="time"]:focus,
.form-style-5 input[type="url"]:focus,
.form-style-5 textarea:focus,
.form-style-5 select:focus{
    background: #d2d9dd;
}
.form-style-5 select{
    -webkit-appearance: menulist-button;
    height:35px;
}
.form-style-5 .number {
    background: #1abc9c;
    color: #fff;
    height: 30px;
    width: 30px;
    display: inline-block;
    font-size: 0.8em;
    margin-right: 4px;
    line-height: 30px;
    text-align: center;
    text-shadow: 0 1px 0 rgba(255,255,255,0.2);
    border-radius: 15px 15px 15px 0px;
}

.form-style-5 input[type="submit"],
.form-style-5 input[type="button"]
{
    position: relative;
    display: block;
    padding: 19px 39px 18px 39px;
    color: #FFF;
    margin: 0 auto;
    background: #1abc9c;
    font-size: 18px;
    text-align: center;
    font-style: normal;
    width: 100%;
    border: 1px solid #16a085;
    border-width: 1px 1px 3px;
    margin-bottom: 10px;
}
.form-style-5 input[type="submit"]:hover,
.form-style-5 input[type="button"]:hover
{
    background: #109177;
}
#field3, #field4 {
    max-width: 100%;
}
}

</style>
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
                             <p class="navbar-text" id= "inquiry" href="#myModal" data-toggle="modal" data-target="#myBtn">Inquiry</p>
                        </li> 
					
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

<div class="modal fade" id="myBtn">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
        <h1>Inquire</h1>
        </div>
        <div class="modal-body">


        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
        </div>
        <!-- /.row -->
        <div class="form-style-5">

<form method="post" action="/Thesis-aj/index.php/Welcome/connect">
<fieldset>
<legend><span class="number">1</span> Customers Information</legend>
        <div class="row">
            <div class="col-md-6">
            <input type="text" name="first_name" placeholder="First Name" style="width:100%; margin-bottom: -30px;"> 
            </div>
            <div class="col-md-6">
            <input type="text" name="last_name" placeholder="Last Name" style="width:100%; margin-bottom: -30px;">
            </div>
        </div>
        <div class="row">
   <div class="col-md-12">
       <input type="email" name="email" placeholder="Your Email *" style="width:100%; margin-bottom: -30px;">
   </div>
   <div class="col-md-12">
       <textarea name="company" placeholder="Company" style="width:100%; height: 50px; margin-bottom: -20px;"></textarea>
   </div>
 </div>

<label for="job">Services:</label>
<select id="job" name="services" style="width:100%; height: 50px;">
<optgroup label="Indoors">
  <option value="fishkeeping">Bakal</option>
  <option value="reading">bote</option>
  <option value="boxing">plastic</option>
  <option value="debate">yero</option>
  <option value="gaming">sirang applaiances</option>
  <option value="snooker">sirang relo</option>
  <option value="other_indoor">Other</option>
</optgroup>
<optgroup label="Outdoors">
  <option value="football">battery</option>
  <option value="swimming">oil</option>
  <option value="fishing">titangel</option>
  <option value="climbing">resistor</option>
  <option value="cycling">mothermo</option>
  <option value="other_outdoor">Other</option>
</optgroup>
</select>      
</fieldset>
<fieldset>
<legend><span class="number">2</span> Additional Info</legend>
<textarea name="add_info" placeholder="About Your School"  style="width:100%; height: 50px;"></textarea>
</fieldset>
<input type="submit" name= "submit" value="Add" />
</form>
</div>
        <div class="modal-footer">

        </div>
      </div>
    </div>
</div>

</div>

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
                <div class="fill" style="background-image:url('<?php echo base_url(); ?>images/banner-skyscraper.jpg');"></div>
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
                <p>Contacts</p>
                <ul>
                    <li><strong>TDY Enterprises Inc.</strong>
                    </li>
                    <p><i class="fa fa-phone"></i> 
                    <abbr title="Phone">P</abbr>: (02) 418-45-27</p>
                <p><i class="fa fa-phone"></i>
                    <abbr title="Phone">P</abbr>: (02) 417-71-79 </p>
                     <p>
                    Lot 424A-2- A West Los Angeles street corner<br>Riverside street, California
Village, Brgy. San Bartolome,<br>Novaliches, Quezon City

                </p>
                </ul>
               
            </div>
            <div class="col-md-6">
                <img class="img-responsive" src="<?php echo base_url(); ?>images/Logo.png" width="450px" height="450px" alt="">
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Call to Action Section -->
        <div class="well">
            <div class="row">
                <div class="col-md-8">
                    <p>Download our copany Profile Here:
                    </p>
                </div>
                <div class="col-md-4">
                    <a class="btn btn-lg btn-default btn-block" href="#">Download</a>
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
	
	
	<script>
	$(document).ready(function(){
    $("#myBtn").click(function(){
        $("#myModal").modal();
		});
    






	});
	</script>

</body>

</html>
