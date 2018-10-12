<?php get_header(); ?>
<!-- CONTENT -->
<section id="content" class="container">

    <div class="specials" style="width: fit-content; text-align: center;">
        <?php 
            if(have_posts()):
                while(have_posts()):
                    the_post();
                    $price = get_post_meta(get_the_ID(), 'precio-normal', true);
                    $tags = get_the_tags();
        ?>
        <div class="box1 small">
            <h4><?php the_title(); ?></h4>
            <div class="header-box">
                <div class="img-box" style="background-image: url('<?php the_post_thumbnail_url(); ?>');"></div>
            </div>
            <div class="body-box">
                <h1>COP $<?php echo $price; ?>  </h1>
                <p>POR PERSONA</p>
                <br>
                <b class="details">
                   <a href="<?php the_permalink()?>" class="details">VER DETALLES</a> 
                </b>
            </div>
        </div>
        <?php 
                endwhile;
            endif;
        ?>



    </div>
</section>
<?php get_footer(); ?>