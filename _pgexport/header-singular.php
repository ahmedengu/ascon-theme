<!doctype html> 
<html style="height:100%;" <?php language_attributes(); ?>>
    <head> 
        <meta charset="<?php bloginfo( 'charset' ); ?>"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="keywords" content="pinegrow, blocks, bootstrap" />
        <meta name="description" content="My new website" />
        <link rel="shortcut icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/ico/favicon.png"> 
        <!-- Core CSS -->                  
        <!-- Style Library -->         
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->         
        <!--[if lt IE 9]>
      <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5shiv.js"></script>
      <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/respond.min.js"></script>
    <![endif]-->         
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <?php wp_head(); ?>
    </head>     
    <body data-spy="scroll" data-target="nav" class="soft-scroll">
        <header id="header-3" class="soft-scroll header-3">
            <nav>
                <div class="container">
                    <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2">
                        <nav class="pull">
                            <?php wp_nav_menu( array(
                                    'menu' => 'primary',
                                    'menu_class' => 'top-nav',
                                    'container' => '',
                                    'depth' => '1'
                            ) ); ?>
                        </nav>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </nav>
            <!-- /.nav -->
            <?php $image_attributes = wp_get_attachment_image_src( get_theme_mod( 'blocks_header_3_bck' ), 'large' ); ?>
            <section class="hero" style="<?php if($image_attributes) echo 'background-image:url(\''.$image_attributes[0].'\')' ?>">
                <div class="container">
                    <div class="brand">
                        <a href="<?php echo esc_url( home_url() ); ?>"><?php echo wp_get_attachment_image( get_theme_mod( 'blocks_header_3_logo' ), 'large', null, array(
                                    'class' => 'brand-img img-responsive'
                            ) ) ?></a>
                    </div>
                    <div class="navicon">
                        <a id="nav-toggle" class="nav-slide-btn" href="#"><span></span></a>
                    </div>
                    <div class="col-md-8 col-md-offset-2 text-center">
                        <div class="editContent">
                            <h1><?php echo get_theme_mod( 'blocks_header_3_title', __( 'Pinegrow Blocks', 'ascontheme' ) ); ?></h1>
                        </div>
                        <div class="editContent">
                            <p class="lead"><?php echo get_theme_mod( 'blocks_header_3_text', __( 'Lots of easy to use component blocks for fast Bootstrap site development', 'ascontheme' ) ); ?></p>
                        </div>
                    </div>
                    <div class="col-md-6 col-md-offset-3 text-center">
                        <div class="col-md-6">
                            <a href="<?php echo esc_url( get_theme_mod( 'blocks_header_3_button1_url' ) ); ?>" class="btn btn-info btn-block"><?php echo get_theme_mod( 'blocks_header_3_button1_label', __( 'Find out more', 'ascontheme' ) ); ?></a>
                        </div>
                        <div class="col-md-6">
                            <a href="<?php echo esc_url( get_theme_mod( 'blocks_header_3_button2_url' ) ); ?>" class="btn btn-danger btn-block"><?php echo get_theme_mod( 'blocks_header_3_button2_label', __( 'Buy here', 'ascontheme' ) ); ?></a>
                        </div>
                    </div>
                </div>
            </section>
        </header>
        <section id="content-3-7" class="content-block content-3-7">
            <div class="container">
                <div class="col-sm-12">
                    <div class="underlined-title">
                        <h1><?php the_title(); ?></h1>
                        <hr>
                        <?php the_meta(); ?>
                    </div>
                    <?php the_content(); ?>
                </div>
            </div>
        </section>
        <div>