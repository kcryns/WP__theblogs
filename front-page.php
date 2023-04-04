<?php

/**
 * template name: Home
 */

?>

<?php get_header(); ?>

    <section class="banner">
      <div class="container">
        <div class="banner__wrapper">
          <h1><?php echo get_field('banner_title'); ?></h1>
          <div class="banner__grid">
            <div class="banner__main">

            <?php

            $args = array(
                'post_type' => 'blogPost',
                'posts_per_page' => 1,

            );

            $newQuery = new WP_Query($args)

            ?>

            <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post();?>

              <article class="banner__story">
              <?php echo get_the_post_thumbnail(); ?>
                <div class="banner__story__content">
                  <small><?php echo get_the_date('M-d-Y'); ?></small>
                  <h2>Malesuada Fames Ac Ante Ipsum Primis In Faucibus</h2>
                  <p>
                    <?php echo get_the_excerpt()?>
                  </p>
                  <a href="#">Read More...</a>
                </div>
              </article>

            
              <?php 
                
            endwhile;
                else:
                    echo "no available post";
                endif;
                wp_reset_postdata();
                
                ?>

            </div>

            <div class="banner__sidebar">

            <?php

                $args = array(
                    'post_type' => 'blogPost',
                    'posts_per_page' => 4,
                    'offset'         => 1,

                );

                $newQuery = new WP_Query($args)

            ?>

                <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post();?>

            <div class="card__sm">
                <?php echo get_the_post_thumbnail(); ?>
                <div class="card__sm__content">
                  <small> <?php echo get_the_date('M-d-Y'); ?></small>
                  <h3><?php the_title();?></h3>
                  <a href="#">Read More...</a>
                </div>
              </div>

                <?php 
                
            endwhile;
                else:
                    echo "no available post";
                endif;
                wp_reset_postdata();
                
                ?>

            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="latest">
      <div class="container">
        <h2><?php echo get_field('latest_title'); ?></h2>
        <div class="latest__wrapper">

        <?php

        $args = array(
            'post_type' => 'latestPost',
            'posts_per_page' => -1,

        );

        $newQuery = new WP_Query($args)

        ?>

        <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post();?>

          <div class="card__md">
          <?php echo get_the_post_thumbnail(); ?>
            <div class="card__md__content">
              <ul>
                <li><small><?php echo get_the_date('M-d-Y'); ?></small></li>
                <li>
                    
                <?php 
                $post_tags = get_the_tags();

                if($post_tags){

                    foreach($post_tags as $tag){

               
                ?>
                
                <small><?php echo $tag->name ?></small>
            
                <?php
                
                        }
                    }

                ?>
            
            </li>
              </ul>
              <h3>
              <?php the_title();?>
              </h3>

              <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                Corporis voluptates debitis qui praesentium hic deleniti eos
                sequi adipisci accusamus dolorem.
                
              </p>
              <a href="#">Read More...</a>
            </div>
          </div>

          <?php 
                
            endwhile;
                else:
                    echo "no available post";
                endif;
                wp_reset_postdata();
                
                ?>

        </div>
      </div>
    </section>

    <section class="feature">
      <div class="feature__content">
        <h2><?php echo get_field('feature_title'); ?></h2>
        <h3 class="block__header">
        <?php echo get_field('h3-text'); ?>
        </h3>
        <p>
        <?php echo get_field('p-text'); ?>
        </p>
      </div>

      <div class="container">
        <div class="feature__img">
                <?php
                $image = get_field('img');
                if(!empty($image)):
                ?>

                <img src="<?php echo esc_url($image['url']) ?>" alt="">

                <?php endif; ?>
        </div>
      </div>

      <div class="container">
        <div class="feature__wrapper">
          <div class="feature__main">

          <?php

            $args = array(
                'post_type' => 'featurePost',
                'posts_per_page' => 3,

            );

            $newQuery = new WP_Query($args)

            ?>

            <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post();?>

            <article class="card__lg">
            <?php echo get_the_post_thumbnail(); ?>
              <div class="card__lg__content">
                <small><?php echo get_the_date('M-d-Y'); ?></small>
                <h3>
                <?php the_title();?>
                </h3>
                <p>
                <?php echo get_the_excerpt()?>
                </p>
                <a href="#">Read More...</a>
              </div>
            </article>

            <?php 
                
            endwhile;
                else:
                    echo "no available post";
                endif;
                wp_reset_postdata();
                
                ?>

          </div>
          <div class="feature__sidebar">
          <?php

            $args = array(
                'post_type' => 'featurePost',
                'posts_per_page' => 2,
                'offset' => 3,

            );

            $newQuery = new WP_Query($args)

            ?>

            <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post();?>
            <div class="card__mini">
              <small><?php echo get_the_date('M-d-Y'); ?></small>
              <h4>
              <?php the_title();?>
              </h4>
              <a href="#">Read More ...</a>
            </div>
            <?php 
                
            endwhile;
                else:
                    echo "no available post";
                endif;
                wp_reset_postdata();
                
                ?>
          </div>
        </div>
      </div>
    </section>

<?php get_footer(); ?>