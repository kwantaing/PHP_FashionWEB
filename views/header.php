<?php 
    if(!isset($_SESSION)) {
      session_start();
    }
    // echo var_dump($_SESSION);
  
?>
<!DOCTYPE html>
<html>
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title><?php echo Page::$title; ?></title>


		<meta name="keywords" content="HTML5 Template" />
		<meta name="description" content="Porto - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Favicon -->
		<link rel="shortcut icon" href="content/img/favicon.ico" type="image/x-icon" />
		<link rel="apple-touch-icon" href="content/img/apple-touch-icon.png">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light%7CPlayfair+Display:400" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/fontawesome-free/css/all.min.css">
		<link rel="stylesheet" href="vendor/animate/animate.min.css">
		<link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.min.css">
		<link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.min.css">
		<link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.min.css">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="content/css/theme.css">
		<link rel="stylesheet" href="content/css/theme-elements.css">
		<link rel="stylesheet" href="content/css/theme-blog.css">
		<link rel="stylesheet" href="content/css/theme-shop.css">

		<!-- Current Page CSS -->
		<link rel="stylesheet" href="vendor/rs-plugin/css/settings.css">
		<link rel="stylesheet" href="vendor/rs-plugin/css/layers.css">
		<link rel="stylesheet" href="vendor/rs-plugin/css/navigation.css">

		<!-- Demo CSS -->


		<!-- Skin CSS -->
		<link rel="stylesheet" href="content/css/skins/skin-corporate-5.css">

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="content/css/custom.css">

		<!-- Head Libs -->
		<script src="vendor/modernizr/modernizr.min.js"></script>

	</head>
  <!--Navigation Bar Code -->
  <header id="header" class="header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 120, 'stickyHeaderContainerHeight': 70}">
    <div class="header-body border-top-0">
      <div class="header-container container">
        <div class="header-row">
          <div class="header-column">
            <div class="header-row">
              <div class="header-logo">
                <a href="index.php">
                    <!--<img alt="Porto" width="100" height="48" data-sticky-width="82" data-sticky-height="40" src="content/img/logo-corporate-5.png">-->
                    <img alt="Porto" width="200" height="80" data-sticky-width="200" data-sticky-height="60" src="content/img/header-final.png">

                </a>
              </div>
            </div>
          </div>
          <div class="header-column justify-content-end">
            <div class="header-row">
              <div class="header-nav header-nav-stripe order-2 order-lg-1">
                <div class="header-nav-main header-nav-main-square header-nav-main-effect-1 header-nav-main-sub-effect-1">
                  <nav class="collapse">
                    <ul class="nav nav-pills" id="mainNav">
                      <li class="dropdown">
                        <a class="dropdown-item dropdown-toggle" href="index.php">
                          Home
                        </a>
                      </li>
                        <li class="dropdown">
                        <a class="dropdown-item dropdown-toggle" href="?ctlr=home&amp;action=aboutUs">
                          About Us
                        </a>
                      </li>
                      <li class="dropdown">
                        <a class="dropdown-item dropdown-toggle" href="#">
                          Explore
                        </a>
                        <ul class="dropdown-menu">
                          <li class="dropdown-submenu">
                            <a class="dropdown-item" href="?ctlr=home&amp;action=featured">Featured posts</a>
                          </li>
                          <li class="dropdown-submenu">
                            <a class="dropdown-item" href="?ctlr=post&amp;action=newPost">Make a new post</a>
                          </li>
                        </ul>
                      </li>
                      <?php 
                          if(isset($_SESSION['userName']) and isset($_SESSION['email'])){
                            if($_SESSION['userName']!= null || $_SESSION['email'] != null) {
                              echo '  
                              <li class="dropdown">
                                <a class="dropdown-item dropdown-toggle" href="?ctlr=home&amp;action=aboutMe">
                                Account
                                </a>
                                <ul class="dropdown-menu">
                                  <li class="dropdown-submenu">   
                                    <a class="dropdown-item" href="?ctlr=home&amp;action=aboutMe">Account profile</a>
                                  </li>
                                  <li class="dropdown-submenu">   
                                    <a class="dropdown-item" href="?ctlr=user&amp;action=logout">Log out</a>
                                  </li>
                                </ul>
                              </li>';
                            }else {
                              echo ' 
                            <li class="dropdown">
                              <a class="dropdown-item dropdown-toggle" href="?ctlr=user&amp;action=login">
                                Login
                              </a>
                            </li>
                              <li class="dropdown">
                              <a class="dropdown-item dropdown-toggle" href="?ctlr=user&amp;action=register">
                                Register
                              </a>
                            </li>'
                            ;
                            }
                         }else {
                          echo '
                        <li class="dropdown">
                          <a class="dropdown-item dropdown-toggle" href="?ctlr=user&amp;action=login">
                            Login
                          </a>
                        </li>
                          <li class="dropdown">
                          <a class="dropdown-item dropdown-toggle" href="?ctlr=user&amp;action=register">
                            Register
                          </a>
                        </li>
                        ';
                        } ?>

                    </ul>
                  </nav>
                </div>
                <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
                  <i class="fas fa-bars"></i>
                </button>
              </div>
              <div class="header-nav-features header-nav-features-no-border header-nav-features-lg-show-border order-1 order-lg-2">
                <div class="header-nav-feature header-nav-features-search d-inline-flex">
                  <a href="#" class="header-nav-features-toggle" data-focus="headerSearch"><i class="fas fa-search header-nav-top-icon"></i></a>
                  <div class="header-nav-features-dropdown" id="headerTopSearchDropdown">
                    <form role="search" action="page-search-results.html" method="get">
                      <div class="simple-search input-group">
                        <input class="form-control text-1" id="headerSearch" name="q" type="search" value="" placeholder="Search...">
                        <span class="input-group-append">
                          <button class="btn" type="submit">
                            <i class="fa fa-search header-nav-top-icon"></i>
                          </button>
                        </span>
                      </div>
                    </form>
                  </div>
                </div>
              <!-- <div class="header-nav-feature header-nav-features-cart d-inline-flex ml-2">

                  <div class="header-nav-features-dropdown" id="headerTopCartDropdown">
                    <ol class="mini-products-list">
                      <li class="item">
                        <a href="#" title="Camera X1000" class="product-image"><img src="img/products/product-1.jpg" alt="Camera X1000"></a>
                        <div class="product-details">
                          <p class="product-name">
                            <a href="#">Camera X1000 </a>
                          </p>
                          <p class="qty-price">
                             1X <span class="price">$890</span>
                          </p>
                          <a href="#" title="Remove This Item" class="btn-remove"><i class="fas fa-times"></i></a>
                        </div>
                      </li>
                    </ol>
                    <div class="totals">
                      <span class="label">Total:</span>
                      <span class="price-total"><span class="price">$890</span></span>
                    </div>
                    <div class="actions">
                      <a class="btn btn-dark" href="#">View Cart</a>
                      <a class="btn btn-primary" href="#">Checkout</a>
                    </div>
                  </div>
                </div> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
