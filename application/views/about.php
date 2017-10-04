<?php
defined ('BASEPATH') OR exit ('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">

<head>

      <!-- Select2 -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>dist/select2/dist/css/select2.min.css">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>TDY Enterprises Inc.</title>

    

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet">


    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?><?php echo base_url(); ?>css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url(); ?>font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/iCheck/all.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>dist/css/skins/_all-skins.min.css">

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
                        <a href="<?php echo site_url('welcome') ?>">Home</a>
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
                         </li>
                            <li>
                             <p class="navbar-text" id= "inquiry" href="#myModal" data-toggle="modal" data-target="#myBtn">Inquiry</p>
                        </li> 
                     </ul>
                    
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

<label for="job">Products:</label>
<div class="form-group">
                <select class="form-control select2" name="services" multiple="multiple" data-placeholder="Select a State"
                        style="width: 100%;">
                  <option>Alabama</option>
                  <option>Alaska</option>
                  <option>California</option>
                  <option>Delaware</option>
                  <option>Tennessee</option>
                  <option>Texas</option>
                  <option>Washington</option>
                </select>
              </div>   
</fieldset>
<fieldset>
<legend><span class="number">2</span> Additional Info</legend>
<textarea name="add_info" placeholder="About Your School"  style="width:100%; height: 50px;"></textarea>
</fieldset>
<input type="submit" value="Add" />
</form>
</div>
        <div class="modal-footer">

        </div>
      </div>
    </div>
</div>

</div>
</br></br>
    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">About
                    <small></small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="<?php echo site_url('welcome') ?>">Home</a>
                    </li>
                    <li class="active">About</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Intro Content -->
        <div class="row">
            <div class="col-md-6">
                <img class="img-responsive" src="<?php echo base_url(); ?>images/Logo.png" width="450px" height="450px" alt="">
            </div>
            <div class="col-md-6">
                <h2>About TDY Enterprises Inc.</h2>
                <p>TDY ENTERPRISE INC formerly TDY ENTERPRISES began operation on December27, 1990 making conveyors, rollers, concrete moulds and equipment used in concrete batching and aggregate crushing plants. These products became the bread and butter of the company with quality molded through years of experience. 
                With growing knowledge about Steel Fabrication and investments in machineries and equipment, the company also ventured into different varieties of steel fabrication, machining and erection and can comply with complex specifications of the clients. </p>
                <p>We are an established company with excellent track record for providing customer satisfaction. We give high priority on the quality of the products and services provided to our customers.</p>
                <p>We have skilled manpower to ensure superior products and services, and excellent staff who can provide reliable information and up-to-date market trends that will suit your business requirements. </p>
            </div>
        </div>
        <!-- /.row -->

        <!-- Team Members -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Our Team</h2>
            </div>
            <div class="col-md-4 text-center">
                <div class="thumbnail">
                    <img class="img-responsive" src="<?php echo base_url(); ?>images/aj.jpg" alt="">
                    <div class="caption">
                        <h3>Aaron James Alcantara<br>
                            <small>Leader</small>
                        </h3>
                        <p>A 4th year IS student hoping to pass this year.</p>
                        <ul class="list-inline">
                            <li><a href="#"><i class="fa fa-2x fa-facebook-square"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-2x fa-linkedin-square"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-2x fa-twitter-square"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="thumbnail">
                    <img class="img-responsive" src="<?php echo base_url(); ?>http://placehold.it/750x450" alt="">
                    <div class="caption">
                        <h3>Khrismar Salinas<br>
                            <small>Documentation staff</small>
                        </h3>
                        <p>A 4th year IS student hoping to pass this year.</p>
                        <ul class="list-inline">
                            <li><a href="#"><i class="fa fa-2x fa-facebook-square"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-2x fa-linkedin-square"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-2x fa-twitter-square"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="thumbnail">
                    <img class="img-responsive" src="<?php echo base_url(); ?>http://placehold.it/750x450" alt="">
                    <div class="caption">
                        <h3>Diether Francia<br>
                            <small>Model</small>
                        </h3>
                        <p>A 4th year IS student hoping to pass this year.</p>
                        <ul class="list-inline">
                            <li><a href="#"><i class="fa fa-2x fa-facebook-square"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-2x fa-linkedin-square"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-2x fa-twitter-square"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
          
        </div>
        <!-- /.row -->

        <!-- Our Customers -->
        
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

    <!-- Contact Form JavaScript -->
    <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
    <script src="<?php echo base_url(); ?>plugins/iCheck/icheck.min.js"></script>
    <script src="<?php echo base_url(); ?>js/jqBootstrapValidation.js"></script>
    <script src="<?php echo base_url(); ?>js/contact_me.js"></script>
    <script src="<?php echo base_url(); ?>dist/select2/dist/js/select2.full.min.js"></script>
    <script src="<?php echo base_url(); ?>plugins/iCheck/icheck.min.js"></script>

<script>
    $('.select2').select2()
</script>
</body>

</html>
