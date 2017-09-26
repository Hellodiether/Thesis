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

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Products
                    <small></small>
                </h1>
                <ol class="breadcrumb">
                     <li><a href="<a href="<?php echo site_url('welcome/home') ?>">Home</a>
                    </li>
                    <li class="active">Products</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Projects Row -->
        <div class="row">
            <div class="col-md-4 img-portfolio">
             
                    <img class="img-responsive img-hover" src="<?php echo base_url(); ?>images/conveyor-rollers.jpg" alt="Conveyor Rollers">
                </a>
                <h3>
                    <p>Conveyor Rollers</p>
                </h3>
          <!--  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>-->
            </div>
            <div class="col-md-4 img-portfolio">
             
                    <img class="img-responsive img-hover" src="<?php echo base_url(); ?>images/conveyors-pulleys.jpg" alt="Pulley">
                </a>
                <h3>
                    <p>Conveyor Pulley</p>
                </h3>
                <!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>-->
            </div>
            <div class="col-md-4 img-portfolio">

                    <img class="img-responsive img-hover" src="<?php echo base_url(); ?>images/cylinder-mould.jpg" alt="Cylinder Mould">
                </a>
                <h3>
                    <p>Cylinder Mould</p>
                </h3>
               <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p> -->
            </div>
        </div>
        <!-- /.row -->

        <!-- Projects Row -->
        <div class="row">
            <div class="col-md-4 img-portfolio">
                
                    <img class="img-responsive img-hover" src="<?php echo base_url(); ?>images/beam-mould.jpg" alt="">
                </a>
                <h3>
                    <p>Beam Mould</p>
                </h3>
              <!--  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p> -->
            </div>
            <div class="col-md-4 img-portfolio">
                <a href="#">
                    <img class="img-responsive img-hover" src="<?php echo base_url(); ?>images/slump-cone.jpg" alt="">
                </a>
                <h3>
                    <p>Slump Cone</p>
                </h3>
               <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p> -->
            </div>
            <div class="col-md-4 img-portfolio">
             
                    <img class="img-responsive img-hover" src="<?php echo base_url(); ?>images/conveyors-pulleys2.jpg" alt="">
                </a>
                <h3>
                    <p>Belt Conveyor Pulley</p>
                </h3>
              <!--  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p> -->
            </div>
        </div>

        <!-- Projects Row -->
        <div class="row">
            <div class="col-md-4 img-portfolio">
              
                    <img class="img-responsive img-hover" src="<?php echo base_url(); ?>images/selfalign-frames.jpg" alt="">
                </a>
                <h3>
                    <p>Self Aligning Frames</p>
                </h3>
              <!--  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p> -->
            </div>
            <div class="col-md-4 img-portfolio">
                <a href="">
                    <img class="img-responsive img-hover" src="<?php echo base_url(); ?>images/conveyorroller-frame.jpg" alt="">
                </a>
                <h3>
                    <a href="">Conveyor Roller Frame</a>
                </h3>
               <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p> -->
            </div>
            <div class="col-md-4 img-portfolio">
                <a href="">
                    <img class="img-responsive img-hover" src="<?php echo base_url(); ?>images/anchor-bolts.jpg" alt="">
                </a>
                <h3>
                    <a href="">Anchor Bolt</a>
                </h3>
                <p></p>
            </div>
        </div>
        <div class="row">
        <div class="col-md-4 img-portfolio">
                <a href="">
                    <img class="img-responsive img-hover"  src="<?php echo base_url(); ?>images/stud-bolts.jpg" alt="Mountains">
             </a>
              <h3>
                    <a href="">Stud Bolts</a>
                </h3>
                <p></p>
             </div>
    </div>
 
     
        <!-- /.row -->

        <hr>


        <!-- Pagination -->
    
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; TDY Enterprises Inc.</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>

</body>

</html>
