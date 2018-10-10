<!-- carrosel -->
<div class="carousel container">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <?php

      $args =array(
        'post_type' => 'carousel',
        'post_status' => 'publish',
        'posts_per_page' => 10
      );
      $query = new WP_Query($args);
        $cont= 1; if ($query->have_posts()) :
          while ($query->have_posts()) :
              $query->the_post();
              $meta = get_post_meta(get_the_id());
       ?>
              <div class="item <?php if($cont == 1) echo "active";?>">
                <img class="imagem-carousel" src="<?php echo the_post_thumbnail_url('thumb-slide');?>">
                <div class="carousel-caption">
                  <h3><?php the_title(); ?></h3>
                  <p><?php echo $meta['descricao'][0]; ?></p>
              </div>
              </div>
          <?php $cont ++; endwhile; ?>
        <?php endif; ?>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="fas fa-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="fas fa-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
