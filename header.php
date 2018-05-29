<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes('xhtml'); ?>>
<head>
<meta name="viewport" content="width-device-width">
<meta charset="ISO-8859-1">
<link rel="stylesheet" href="style.css" >
<link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(). '/style.css' ?>">
<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/bootstrap.min.css" >
<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/bootstrap-theme.min.css" >
<!--script src="js/bootstrap.min.js" -->
 <style>
html { 
  background: url(back.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
  </style>
<?php wp_head(); ?>
</head>
<body class="body-page" <?php body_class(); ?> >
<div class="container">
<div class="container theme-page " >
<div class="logo">
	<a class="anchor" href="<?php echo home_url(); ?>"><h2> <?php bloginfo('name'); ?>  </h2></a>
</div>
<p><?php bloginfo('description'); ?></p> 
<div class="navigationarea">
	 <nav class="navbar navbar-default" role="navigation" style="margin-left:-15px; margin-right:-15px; color:green;  border-bottom:2px solid #70F06C;">
	  <div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </button>
		  <!--a class="navbar-brand" href="#">
					<?php //get_search_form(); ?>
				</a-->
			</div>
		 <ul class="nav navbar-nav navbar-right">	
				<?php
				wp_nav_menu( array(
					'menu'              => 'primary',
					'theme_location'    => 'primary',
					'depth'             => 2,
					'container'         => 'div',
					'container_class'   => 'collapse navbar-collapse navfont',
			'container_id'      => 'bs-example-navbar-collapse-1',
					'menu_class'        => 'nav navbar-nav',
					'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
					'walker'            => new wp_bootstrap_navwalker())
				);
			?>
    </ul>
		</div>
	</nav>
</div>
<!--End of navigation bar-->




  
