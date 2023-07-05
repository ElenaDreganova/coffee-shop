<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>


<header>
            <h1 class="site-heading text-center text-faded d-none d-lg-block">
                <span class="site-heading-upper text-primary mb-3">з любов'ю до вас</span>
                <span class="site-heading-lower">Кав'ярня ол-оле</span>
            </h1>
</header>
 <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <?php
            $nav_menu = wp_nav_menu(array(

              'theme_location' => 'header_nav',
                'container' => false,
                'menu_class' => 'navbar-nav mx-auto',
                'menu_id' => '',
                'container_class' => 'nav-item px-lg-4',
                'depth' => 1,
                'after' => ' ',
                                    
            ));
        ?>
        </div>
 
    </div>
</nav>
                
