<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <!-- Title here -->
    <title><?php echo ucfirst($is_active); ?> | Bridge 2 Business</title>
    <!-- Description, Keywords and Author -->
    <meta name="description" content="Your description">
    <meta name="keywords" content="Your,Keywords">
    <meta name="author" content="ResponsiveWebInc">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Styles -->
    <!-- Bootstrap CSS -->
    <link href="public/css/bootstrap.css" rel="stylesheet">
    <!-- Pretty Photo CSS -->
    <link href="public/css/prettyPhoto.css" rel="stylesheet">
    <!-- Parallax slider -->
    <link rel="stylesheet" href="public/css/slider.css">
    <!-- Flexslider -->
    <link rel="stylesheet" href="public/css/flexslider.css">
    <!-- Font awesome CSS -->
    <link href="public/css/font-awesome.min.css" rel="stylesheet">    
    <!-- Custom CSS -->
    <link href="public/css/style.css" rel="stylesheet">
    <!-- Colors - Orange, Purple, Light Blue (lblue), Red, Green and Blue -->
    <link href="public/css/lblue.css" rel="stylesheet">
    
    <!-- Favicon -->
    
  </head>
  
  <body>

<!-- Header Starts -->
<header>
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-12">
        <div class="logo">
        <h1>
            <a href="#">
                <img src="public/images/logo.jpg" alt="">      
            </a>
        </h1>
          <!-- <div class="hmeta">business prospective</div> -->
        </div>
      </div>
      <div class="col-md-6  col-sm-12 text-right ">
      <h1 class="hidden-sm hidden-xs">&nbsp;</h1>
        <p>Call Us: +919036705574</p>
        <p>Support Hours: 10am to 7pm</p>
           <!--  <form class="form-inline" role="form">
              <div class="form-group">
                <input type="text" class="form-control" id="search" placeholder="Type Something...">
              </div>
              <button type="submit" class="btn btn-default">Search</button>
            </form> -->
        
      </div>
    </div>
  </div>
</header>

<!-- Navigation bar starts -->

            <div class="navbar bs-docs-nav" role="banner">
              <div class="container">
               <div class="navbar-header">
                 <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
                     <span class="sr-only">Toggle navigation</span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                 </button>
               </div>
               
                  <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
                    <ul class="nav navbar-nav">
            <li <?php echo ($is_active == 'home')? 'class="active"' :'' ?>>
                         <a href="/" class="">Home </a>
                      </li> 
                      <!-- Refer Bootstrap navbar doc -->
                      <!-- <li class="dropdown">
                         <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages #1 <b class="caret"></b></a>
                         <ul class="dropdown-menu">
                           <li><a href="#">Landing Page</a></li>
                           <li><a href="#">Pricing Table</a></li>
                           <li><a href="#">Service</a></li>
                           <li><a href="#">Support</a></li>
                           <li><a href="#">Sitemap</a></li>
                           <li><a href="#">Timeline</a></li>
                         </ul>
                      </li>      -->              
                     
                    <li <?php echo ($is_active == 'service')? 'class="active dropdown"' :'class="dropdown"' ?>>
                        <a href="service.php" class="dropdown-toggle" data-toggle="dropdown">Service <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="service.php#account-reactivation">Account Reactivation</a>
                                <a href="service.php#suspension-prevention">Suspension Prevention</a>
                                <a href="service.php#listing-cataloguing">Listing Cataloguing</a>
                                <a href="service.php#launch">Launch</a>
                            </li>
                        </ul>
                    </li>
                    <!-- <li <?php echo ($is_active == 'product')? 'class="active"' :'' ?>><a href="#">Product</a></li> -->
                    <li <?php echo ($is_active == 'seller_testimonial')? 'class="active"' :'' ?>><a href="#">Seller Testimonial</a></li>
                    <li <?php echo ($is_active == 'about')? 'class="active dropdown"' :'class="dropdown"' ?>>
                        <a href="aboutus.php" class="dropdown-toggle" data-toggle="dropdown">About Us <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="aboutus.php#our-vision">Our Vision</a></li>
                            <li><a href="aboutus.php#our-team">Our Team</a></li>
                        </ul>
                    </li>
                    <li <?php echo ($is_active == 'contact')? 'class="active"' :'' ?>><a href="contact.php">Contact Us</a></li>
                    </ul>
                  </nav>
                 </div>
              </div>
