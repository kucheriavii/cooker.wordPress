<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php bloginfo('name');?></title>
        <meta name="description" content="none">
        <meta name="viewport" content="width=device-width, initial-scale=0.4">

        <!--  чорнове підключення тем -->
        <link href="<?php echo  get_template_directory_uri(); ?>/styles/normalize.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo  get_template_directory_uri(); ?>/styles/main.css" rel="stylesheet" type="text/css" />
        <!--переробити з реєстрацією-->
        <script src="<?php echo  get_template_directory_uri(); ?>/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="<?php echo  get_template_directory_uri(); ?>/js/main.js"></script>

    </head>
    <body>
        <!--[if lt IE 9]>
            <p class="browserupgrade">Ви використовуєте <strong>застарілий </strong> браузер. Будь-ласка <a href="http://browsehappy.com/">встановіть нову версію для коректної роботи.</a> З повагою, керівник проекту KOtsyle</p>
        <![endif]-->
        <!-- Початок основного макету -->
        <div class="wraper">
            <div class="header">
                <div class="title-slider"></div>
                <div class="siteName">
                    <h1><a href="index.php" title="Перейти на главную"><?php bloginfo('name'); ?></a></h1>
                
                    <p><?php bloginfo('description'); ?></p>
                    <div class="reg"><ul>
                        <li><?php wp_register()?></li>
                        <li><?php wp_loginout() ?></li>
                    </ul></div>
                </div>
                <?php 
                    if (!function_exists('dynamic_sidebar') || dynamic_sidebar(2)):endif;
                 ?>


            <!--<ul class="menu">
                    <li class="events"><a href="">Events</a></li>
                    <li class="places"><a href="">Куда пойти?</a></li>
                    <li class="people"><a href="">People and food</a></li>
                    <li class="food"><a href="">Кухня от шефа</a></li>
                    <li class="myCook"><a href="">MyRecipes</a></li>
                    <li class="notes"><a href="">Вкусные нюансы</a></li>
                </ul> -->
                <?php 
                    if(function_exists('wp_nav_menu'))
                        wp_nav_menu(
                                array(
                                    'theme_location' => 'custom-menu',
                                    'fallback_cb' => 'custom_menu',
                                    'container' => 'ul',
                                    'menu_id' => 'nav',
                                    'menu_class' => 'menu'
                                    )
                            );
                    else custom_menu();
                 ?>
            </div>
            <div class="aboutUs">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni sequi adipisci eum mollitia ad saepe soluta repudiandae accusamus sit, nobis odit omnis impedit co mm odi explicabo nihil, nemo eos quisquam architecto!</p>
            </div>