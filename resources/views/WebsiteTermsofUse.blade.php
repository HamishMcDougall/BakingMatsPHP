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

<p>
Welcome to our website. If you continue to browse and use this website, you are agreeing to comply with and be bound by the following terms and conditions of use, which together with our privacy policy govern cheapbakingmats.com’s relationship with you in relation to this website. If you disagree with any part of these terms and conditions, please do not use our website.
</p><p>
The term ‘cheapbakingmats.com’ or ‘us’ or ‘we’ refers to the owner of the website. Our ACN is 622452448 PTY LTD The term ‘you’ refers to the user or viewer of our website.
</p><p>
The use of this website is subject to the following terms of use:
</p><p>
The content of the pages of this website is for your general information and use only. It is subject to change without notice.
Neither we nor any third parties provide any warranty or guarantee as to the accuracy, timeliness, performance, completeness or suitability of the information and materials found or offered on this website for any particular purpose. You acknowledge that such information and materials may contain inaccuracies or errors and we expressly exclude liability for any such inaccuracies or errors to the fullest extent permitted by law.
Your use of any information or materials on this website is entirely at your own risk, for which we shall not be liable. It shall be your own responsibility to ensure that any products, services or information available through this website meet your specific requirements.
This website contains material which is owned by or licensed to us. This material includes, but is not limited to, the design, layout, look, appearance and graphics. Reproduction is prohibited other than in accordance with the copyright notice, which forms part of these terms and conditions.
All trademarks reproduced in this website, which are not the property of, or licensed to the operator, are acknowledged on the website.
Unauthorised use of this website may give rise to a claim for damages and/or be a criminal offence.
From time to time, this website may also include links to other websites. These links are provided for your convenience to provide further information. They do not signify that we endorse the website(s). We have no responsibility for the content of the linked website(s).
Your use of this website and any dispute arising out of such use of the website is subject to the laws of Australia.
</p>

<p>
Pricing Policy</p><p>
All prices listed on cheapbakingmats.com are inclusive of Australian GST. International orders are not subject to Australian GST.
All prices displayed on cheapbakingmats.com are in Australian Dollars.
Discount coupons may be offered from time to time. These are not redeemable for cash.
Some discount offers may not be redeemable with other discount offers.
</p>


            </body>


            </html>
