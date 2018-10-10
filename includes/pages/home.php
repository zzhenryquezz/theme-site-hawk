<!-- carrosel -->
<?php
include get_template_directory()."/includes/organisms/carousel.php";
?>

<!-- Resumo de posts - miniartigos -->
<div class="conteudo col-lg-8">
  <?php
   if(have_posts()) :
    while (have_posts()) : the_post();?>

      <div class="mini-artigos col-lg-6">

        <a href="<?php the_permalink(); ?>"><img class="thumb-inicial"src="<?php the_post_thumbnail_url('thumb-home');?>"<a>

          <h1><a href="<?php the_permalink();?> "><?php the_title() ?> </h1></a>

          <?php the_excerpt(); ?>

          <a href="<?php the_permalink(); ?>">Leia Mais</a>
      </div>
  <?php endwhile;?>
  <?php else : ?>
    <p>Sem Posts</p>
  <?php endif; ?>
</div>

<?php get_sidebar();?>
