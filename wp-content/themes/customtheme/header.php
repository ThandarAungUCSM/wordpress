<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
</head>
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
<link rel="stylesheet" href="<?php bloginfo('template_url');?>/assets/css/bootstrap.min.css">
<script src="<?php bloginfo('template_url');?>/assets/js/jquery.min.js"></script>
<script src="<?php bloginfo('template_url');?>/assets/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="<?php bloginfo('template_url');?>/style.css">
<body>
    <div class="container-fluid">
        <div class="navbar-fixed-top">
            <div class="row topbarbg">
                <div class="col-md-4 col-sm-4 col-xs-2">
                </div>
                <div class="col-md-8 col-sm-8 col-xs-10 topleftcss">
                    <span><a href="#" class="menuitemcolor"><strong>?</strong> FAQS</a></span>
                    <span>|</span>
                    <span><a href="#" class="menuitemcolor"><strong>$</strong> USD</a></span>
                    <span>|</span>
                    <a href="#" class="menuitemcolor">
                        <img src="<?php bloginfo('template_url');?>/assets/images/topimages/usa-2.jpg" alt="EN" class="topimgen">
                        <span>EN</span></a>
                    <span>|</span>
                    <a href="#" class="menuitemcolor" data-toggle="modal" data-target="#myModal">
                        <img src="<?php bloginfo('template_url');?>/assets/images/topimages/humandl2.png" alt="ACCOUNT" class="topimgaccount">
                        <span>ACCOUNT</span></a>
                    <!-- <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button> -->



                </div>
            </div>
            <div class="row">
                <nav class="navbar navbar-inverse navbarcss">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle iconbarcss" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only"> Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <img src="<?php bloginfo('template_url');?>/assets/images/Avon Logo _ (Final) 2.png" alt="Avon Logo" class="updatelogocss">
                        
                    </div>
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navulcss navbarnavcss">
                            <li><a href="#">Tours</a></li>
                            <li class="active"><a href="#">Hotels</a></li>
                            <li><a href="#">Transports</a></li>
                            <li><a href="#">Things to do</a></li>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Contact us</a></li>
                        </ul>
                    </div>    
                </nav>
            </div>
        </div>

        
<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content modalcontent">
            <!-- <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Modal Header</h4>
            </div> -->
            <!-- <div class="modal-body"> -->
            <!-- <div class="row"> -->
                <div class="col-md-8 col-sm-8 col-xs-6 signupcss">
                    <input type="text" class="form-control signupcss1" id="name" placeholder="Your Name" name="name">
                    <input type="email" class="form-control signupcss" id="email" placeholder="Your Email" name="email">
                    <input type="password" class="form-control signupcss" id="pwd" placeholder="Password" name="pwd">
                    <input type="password" class="form-control signupcss" id="pwd" placeholder="Confirm Password" name="pwd">
                    <button type="button" class="btn btn-default signupbtn">Sign Up</button>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-6 logincss">
                    <p class="logintitle">Login</p>
                    <!-- <label class="loginemailcss" > -->
                        <input type="email" placeholder="Email" name="email" class="form-control loginemailcss" required>
                    <!-- </label> -->
                    <!-- <label class="loginpwdcss"> -->
                        <input type="password" placeholder="Password" name="psw" class="form-control loginpwdcss" required>
                    <!-- </label> -->
                    <label class="loginforgotcss">
                        <!-- <input type="checkbox" checked="checked" name="remember"> Remember me -->
                        Forgot password?
                    </label>
                    <button type="submit" class="loginbtn">Login</button>
                </div>
            <!-- </div> -->
            <!-- </div> -->
            <!-- <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div> -->
        </div>
    </div>
</div>

