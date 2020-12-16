<?php get_header(); ?>
<?php if(have_posts()): the_post(); ?>
<article <?php post_class( 'article__content' ); ?>>
<div class="article__wrapper">
  <div class="article__info">

    <span class="article__date">
      <i class="far fa-clock"></i>
      <time
      datetime="<?php echo get_the_date( 'Y-m-d' ); ?>">
      <?php echo get_the_date(); ?>
      </time>
    </span>
    <!--著者を取得-->
    <span class="article__author">
      <i class="fas fa-user"></i><?php the_author(); ?>
    </span>
  </div>
  <!--タイトル-->
  <h1 class="article__ttl"><?php the_title(); ?></h1>
  <!--アイキャッチ取得-->
  <div class="article__img">
    <?php if( has_post_thumbnail() ): ?>
      <?php the_post_thumbnail( 'large' ); ?>
    <?php endif; ?>
  </div>
  <!--本文取得-->
  <?php the_content(); ?>
  <!--タグ-->
  <!-- <div class="article__tag">
    <?php the_tags('<ul><li>タグ： </li><li>','</li><li>','</li></ul>'
  ); ?> -->
  </div>
</div>
</article>
<?php endif; ?>
<?php get_footer(); ?>
