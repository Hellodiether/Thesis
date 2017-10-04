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
    <!-- Page Content -->
    <div class="container">
</br></br>
        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Services
                    
                </h1>
                <ol class="breadcrumb">
                     <li><a href="<a href="<?php echo site_url('welcome') ?>">Home</a>
                    <li class="active">Services</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Image Header -->
        <div class="row">
            <div class="col-lg-12">
              <center><img class="img-responsive" src="<?php echo base_url(); ?>images/servbanner.jpg" alt="Superman"></center>
            </div>
        </div>
        <!-- /.row -->

        <!-- Service Panels -->
        <!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Services Panels</h2>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <span class="fa-stack fa-5x">
                              <i class="fa fa-circle fa-stack-2x text-primary"></i>
                              <i class="fa fa-support fa-stack-1x fa-inverse"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <h4>Metal Craft</h4>
                        <p>Specialized Structural Fabrications (i.e. Canopy, Railings, Fence, etc) Moulds, Casting, Form Works, Metal Framing</p>
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <span class="fa-stack fa-5x">
                              <i class="fa fa-circle fa-stack-2x text-primary"></i>
                              <i class="fa fa-wrench fa-stack-1x fa-inverse"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <h4>Machine Parts</h4>
                        <p>Casting, Forging,</br> Machinery Repair</br></br></br></p>
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <span class="fa-stack fa-5x">
                              <i class="fa fa-circle fa-stack-2x text-primary"></i>
                              <i class="fa fa-cogs fa-stack-1x fa-inverse"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <h4>Conveying Systems</h4>
                        <p>Conveyor Rollers, Pulleys, Idlers,  Roller Frames, Adjusting Rods,  
     Sampling Cylinder, Beam Mould, Slump Cone </p>
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <span class="fa-stack fa-5x">
                              <i class="fa fa-circle fa-stack-2x text-primary"></i>
                              <i class="fa fa-database fa-stack-1x fa-inverse"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <h4>Metal Treatment </h4>
                        <p> Hot Dipped Galvanized, Electro Galvanized, Tentanized Plating, 
   Tentanized Chrome Plating, etc. </br></br></p>
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Service Tabs -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Service Tabs</h2>
            </div>
            <div class="col-lg-12">

                <ul id="myTab" class="nav nav-tabs nav-justified">
                    <li class="active"><a href="#service-one" data-toggle="tab"><i class="fa fa-support"></i> Metal Craft</a>
                    </li>
                    <li class=""><a href="#service-two" data-toggle="tab"><i class="fa fa-wrench"></i>Machine Parts</a>
                    </li>
                    <li class=""><a href="#service-three" data-toggle="tab"><i class="fa fa-cogs"></i> Conveying Systems</a>
                    </li>
                    <li class=""><a href="#service-four" data-toggle="tab"><i class="fa fa-database"></i> Metal Treatment</a>
                    </li>
                </ul>

                <div id="myTabContent" class="tab-content">
                    <div class="tab-pane fade active in" id="service-one">
                        <h4>Metal Craft</h4>
                        <p>Metal fabrication is the building of metal structures by cutting, bending, and assembling processes.
                        It is a value added process that involves the creation of machines, parts, and structures from various raw materials.</p>
                        <p>Metal studs come in the same dimensions as lumber.  The system consists of two main components, the track and the stud.</p>
                        <p>'Mould' is to form or shape. Moulding is the process of forming something or the formed piece itself, as in architectural moulding.</p>
                    </div>
                    <div class="tab-pane fade" id="service-two">
                        <h4>Machine Parts</h4>
                        <p>Forging and casting are manufacturing processes which involves metal. It is hard to make equipments or materials with metal, since they are very hard and difficult to work with them. However, the two methods, casting and forging, are easy and very old methods, which are in use for shaping metals and making specific shapes. Both are very old processes known for metalworking.</p>
                        <p>Machinery repairs make replacement parts for a ship’s engine auxiliary equipment, such as evaporators, air compressors and pumps. The repair of deck equipment, including winches and hoists, condensers and heat exchange devices are completed by machinist.   </p>
                    </div>
                    <div class="tab-pane fade" id="service-three">
                        <h4>Conveying Systems</h4>
                        <p>A conveyor system is a common piece of mechanical handling equipment that moves materials from one location to another. Conveyors are especially useful in applications involving the transportation of heavy or bulky materials. Conveyor systems allow quick and efficient transportation for a wide variety of materials, which make them very popular in the material handling and packaging industries.</p>
                    </div>
                    <div class="tab-pane fade" id="service-four">
                        <h4>Metal Treatment</h4>
                        <p>Chrome plating (less commonly chromium plating), often referred to simply as chrome, is a technique of electroplating a thin layer of chromium onto a metal object.</p>
                        <p>Galvanization (or galvanizing as it is most commonly called in that industry) is the process of applying a protective zinc coating to steel or iron, to prevent rusting. The most common method is hot-dip galvanizing, in which parts are submerged in a bath of molten zinc. </p>
                    
                    </div>
                </div>

            </div>
        </div>

        <!-- Service List -->
        <!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
      
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
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
