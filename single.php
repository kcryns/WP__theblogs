<?php get_header(); ?>


<div class="maincontent">
    <div class="theContent">
        <div class="container">
            <h1><span><?php the_title(); ?></span></h1>
        <div class="container_content">

            <div class="img">
                <?php echo get_the_post_thumbnail(); ?>
            </div>


            <div class="container_text">
                <small><?php echo get_the_date(); ?></small>
                <p><?php the_content(); ?></p>
            </div>
        </div>
        </div>
    </div>

</div>

<?php get_footer(); ?>

