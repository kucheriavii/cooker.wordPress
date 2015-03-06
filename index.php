
          <?php get_header(); ?>
            <div class="content-box">
                <?php if (have_posts()) : ?>
                <?php while (have_posts()):the_post();?>
                <div class="article">
                    <a class="mainLink" href="<?php the_permalink() ?>">
                    <div class="postImg">
                        <?php
                            if(function_exists('add_theme_support'))
                                the_post_thumbnail();
                        ?>
                    </div>
                    <h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
                    </a>
                </div>
                <?php endwhile;?>
                    <div class="posts_navigation">
                        <?php 
                            if(function_exists('wp_pagenavi')){
                                wp_pagenavi();
                            }
                         ?>
                    </div>
                <?php else : ?>
                <?php endif; ?>
         <?php get_footer() ?>
            </div>     
       <!--Кінць основного макету -->

        <script>window.jQuery || document.write('<script src="<?php echo  get_template_directory_uri();?>/js/vendor/jquery-1.11.2.min.js"><\/script>')</script>


        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>