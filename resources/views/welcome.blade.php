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






      <div>
        <nav class="navbar navbar-fixed-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><span class="navbar-brand">Cheap Silicone Baking Mats</span></div>
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav pull-right">
                  <li>
                    <div class="nav-buy">
                      <div>

                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        </div>
        <div>
          <header class="business-header">
            <div class="container">
              <div class="row">
                <div class="col-md-8">
                  <h1 class="tagline"> Your baking will change forever when you use these non-stick baking mats.</h1></div>
                  <div class="col-md-4 text-center fromTop">
                    <div class="panel  panel-pricing">
                      <div class="panel-body text-center topText"><strong> Features</strong>

                      </div>
                      <ul class="list-group text-center">
                        <li class="list-group-item"><i class="fa fa-check"></i>
                          Non-stick

                        </li>
                        <li class="list-group-item"><i class="fa fa-check"></i>
                          Easy-to-clean

                        </li>
                        <li class="list-group-item"><i class="fa fa-check"></i>
                          Durable

                        </li>
                        <li class="list-group-item"><i class="fa fa-check"></i>
                          Free Postage

                          <br>
                        anywhere in Australia

                        </li>
                      </ul>
                      <div class="panel-body priceWhite text-center">
                        <p class="oldPriceP2">
                        Was
                      <span class="oldPrice">$19.99</span></p><span class="oldPriceP">Now </span>

                      <span class="newPrice"><strong>$9.95</strong></span></div>
                          <div class="panel-footer">
                            <div>


                                <form action="/purchases" method="POST">

                                  {{ csrf_field() }}

                                  <script
                                  src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                                  data-key="{{  config('services.stripe.key') }}"
                                  data-amount="999"
                                  data-name="Cheapbakingmats"
                                  data-description="1 set of baking mats"
                                  data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                                  data-locale="auto"
                                   data-shippingAddress="true"
                                  data-currency="aud">
                                  </script>
                                  </form>



                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </header>
                <div class="container">
                  <hr>
                  <div class="row">
                    <div class="col-sm-12">
                      <h2 class="center">Upgrade the way you think about baking with the latest technology.</h2></div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-4"><img class="img-circle img-responsive img-center" src="img/image1.jpg" alt="">
                        <h2>High Quality</h2>
                        <p>Made of premium quality non-toxic materials passed strict FDA approved tests. No oil or fat is required for baking which reduces intake of cholesterol, saturated fat and cancerogenic substances produced by cooking oils subjected to high temperatures.</p>
                      </div>
                      <div class="col-sm-4"><img class="img-circle img-responsive img-center" src="img/image2.jpg" alt="">
                        <h2>Non-stick and Easy-to-clean</h2>
                        <p>No more scrubbing! Even burnt sugar and fat falls off on itson. Just rinse the mat in warm soapy water to clean it. You can also wash it in your dishwasher. Repeated multiple uses and washing cycles do not affect non-stick properties of the mat. After every use and cleanup, it will be just like new again.</p>
                      </div>
                      <div class="col-sm-4"><img class="img-circle img-responsive img-center" src="img/image3.jpg" alt="">
                        <h2>Durable and Long Lasting:</h2>
                        <p>It's flexible yet tear resistant, and designed to withstand thousands of uses under extreme conditions of bitter cold and intense heat</p>
                      </div>
                    </div>
                    <hr>
                    <div class="container content">
                      <div class="row">
                        <div class="col-md-6 ">
                          <div class="testimonials">
                            <div class="active item">
                              <blockquote>
                                <p>This baking mat has changed the way I bake. It's such a pleasure to bake with the kids and so easy to clean up afterwards</p>
                              </blockquote>
                              <div class="carousel-info"><img alt="" src="img/woman1.jpg" class="pull-left">
                                <div class="pull-left"><span class="testimonials-name">Susan Smith</span><span class="testimonials-post">Mother of 2 boys</span></div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6 ">
                          <div class="testimonials">
                            <div class="active item">
                              <blockquote>
                                <p>I was pleased with the quick delivery. This product has been a pleasure to bake with. Myself and my children love this product</p>
                              </blockquote>
                              <div class="carousel-info"><img alt="" src="img/woman2.jpg" class="pull-left">
                                <div class="pull-left"><span class="testimonials-name">Linda Jones</span><span class="testimonials-post">Mother of 3 girls</span></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <hr>
                    <div class="container content">
                      <div class="row">
                        <div class="col-md-2 ">
                          <h4>Specifications</h4></div>
                          <div class="col-md-10 "><img src="img/specs.jpg" width="80%" alt="">
                            <p>Width 40 cm </p>
                            <p>Height 60 cm </p>
                            <p>Tempreatures up to 120°C and under</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-12 foooter">
                        <p>Copyright © Silicone Baking Mats</p>
                      </div>
                    </div>
                  </div>


            </body>


            </html>
