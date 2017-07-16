<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Latest compiled and minified CSS -->
  <title>Cheap Baking Mats - Buy Now</title>


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


  <!-- Fonts -->

  <!-- Styles -->
  <style>
  /*
  * Start Bootstrap - Business Frontpage (http://startbootstrap.com/)
  * Copyright 2013-2016 Start Bootstrap
  * Licensed under MIT (https://github.com/BlackrockDigital/startbootstrap/blob/gh-pages/LICENSE)
  */

  body {
    padding-top: 50px; /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
  }

  /* Header Image Background - Change the URL below to your image path (example: ../images/background.jpg) */

  .navbar{
    color: #ff073d;
    background-color: #ff073d;
  }

  .navbar-brand{
    color: white;
  }
  a{
    color:white;
  }

  .business-header {
    background: url(../img/cakes.jpg) no-repeat center center fixed;
    -webkit-background-size:cover;
    -moz-background-size: cover;
    background-size: cover;
    -o-background-size: cover;
    background-position:bottom;
  }

  /* Customize the text color and shadow color and to optimize text legibility. */

  h2{
    font-family: 'Arima Madurai', cursive;
  }

  .tagline {
    color: #FFF;
    margin-top: 100px;
    font-size: 60px;
    padding: 20px;
    font-family: 'Arima Madurai', cursive;
    font-weight: 900;
    background-color: rgba(255,7,61,.8);


  }

  .img-center {
    margin: 0 auto;
  }

  footer {
    margin: 50px 0;
  }

  /* Content */
  .content {
    padding-top: 30px;
  }

  /* Testimonials */
  .testimonials blockquote {
    background: #f8f8f8 none repeat scroll 0 0;
    border: medium none;
    color: #666;
    display: block;
    font-size: 14px;
    line-height: 20px;
    padding: 15px;
    position: relative;
  }
  .testimonials blockquote::before {
    width: 0;
    height: 0;
    right: 0;
    bottom: 0;
    display: block;
    position: absolute;
    border-bottom: 20px solid #fff;
    border-right: 0 solid transparent;
    border-left: 15px solid transparent;
    border-left-style: inset; /*FF fixes*/
    border-bottom-style: inset; /*FF fixes*/
  }
  .testimonials blockquote::after {
    width: 0;
    height: 0;
    right: 0;
    bottom: 0;
    display: block;
    position: absolute;
    border-style: solid;
    border-width: 20px 20px 0 0;
    border-color: #e63f0c transparent transparent transparent;
  }
  .testimonials .carousel-info img {
    border: 1px solid #f5f5f5;
    border-radius: 150px !important;
    height: 75px;
    padding: 3px;
    width: 75px;
  }
  .testimonials .carousel-info {
    overflow: hidden;
  }
  .testimonials .carousel-info img {
    margin-right: 15px;
  }
  .testimonials .carousel-info span {
    display: block;
  }
  .testimonials span.testimonials-name {
    color: #e6400c;
    font-size: 16px;
    font-weight: 300;
    margin: 23px 0 7px;
  }
  .testimonials span.testimonials-post {
    color: #656565;
    font-size: 12px;
  }
  .priceWhite {
    background-color: white !important;

  }

  /* pricing table */

  .panel-pricing {
    -moz-transition: all .3s ease;
    -o-transition: all .3s ease;
    -webkit-transition: all .3s ease;
  }
  .panel-pricing:hover {
    box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.2);
  }
  .panel-pricing .panel-heading {
    padding: 20px 10px;
  }
  .panel-pricing .panel-heading .fa {
    margin-top: 10px;
    font-size: 58px;
  }
  .panel-pricing .list-group-item {
    color: #777777;
    /*  border-bottom: 1px solid rgba(250, 250, 250, 0.5);*/
  }
  .panel-pricing .list-group-item:last-child {
    border-bottom-right-radius: 0px;
    border-bottom-left-radius: 0px;
  }
  .panel-pricing .list-group-item:first-child {
    border-top-right-radius: 0px;
    border-top-left-radius: 0px;
  }
  .panel-pricing .panel-body {
    background-color: #f0f0f0;
    font-size: 40px;
    color: #777777;
    padding: 20px;
    margin: 0px;
  }

  .fromTop{
    margin-top: 100px;
    padding-bottom: 100px;
  }
  .oldPrice{
    text-decoration: line-through;
    font-size: 16px;
    color:#777777;
  }
  .oldPriceP2{
    font-size: 16px;
    color: #777777;
  }
  .oldPriceP{
    font-size: 16px;
    color: #ff073d;
  }
  .newPrice{
    font: 24px;
    color: #ff073d;
  }

  .center{
    text-align: center;
  }
  .topText{
    font-size: 14px !important;
    background-color:#ff073d !important;
    color: white !important;
  }

  .btn-danger{
    background-color:#ff073d !important;
    color: white !important;
  }

  .footer-bold{
    background-color: red;
  }

  .foooter{
    text-align: center;
    padding-top: 100px;
  }

  .App {
    text-align: center;
  }


  .Purchase{
    padding: 50px;
  }

  .nav-buy{
    padding-top: 10px;
  }
  .foooter{
    color:black;
  }


  </style>
</head>
<body>



<h1>Congratulations</h1>

<h3>You have sucessfully purchases your new baking mats</h3>

<h3>Keep an eye on the post.</h3>

    

            </body>


            </html>
