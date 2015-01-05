<html>
<head>
<title>Theme de base</title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>
<body>
<div id="wrapper">
<div id="header">
<h1>HEADER</h1>
<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
</div>