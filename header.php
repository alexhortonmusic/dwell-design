<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<script src="https://use.fontawesome.com/022879ddbb.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400" rel="stylesheet">
	<!-- [if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif] -->
	<?php wp_head(); ?>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

</head>
<body>
  <div class="wrapper">
    <nav>
    	<div class='logo'>
    		<img alt="Dwell Music City Logo and Village Real Estate Logo" src="<?php echo get_template_directory_uri(); ?>/assets/logo-broker-1.png" />
    	</div>
    	<div class='rightNav'>
    		<div class='rightNavWrap'>
	    		<div class='navContact'>
	    			<i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i>
	    			<i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i>
	    			<i class="fa fa-pinterest-square fa-2x" aria-hidden="true"></i>
	    			<i class="fa fa-linkedin-square fa-2x" aria-hidden="true"></i>
	    		</div>
	    		<div class='navLinks'>
	  				<p>About</p>
	  				<p>Search Homes</p>
	  				<p>Communities</p>
	  				<p>Buyers and Sellers</p>
	  				<p>New Homes</p>
	  				<p>Blog</p>
	  				<p>Contact</p>
	    		</div>
    		</div>
    	</div>
    </nav>
