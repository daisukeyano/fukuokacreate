
<?php get_header(); ?>
<section>
<h2 class="content__ttl qa__ttl"><span class="jpn">福岡ウェブサービスの思い</span></h2>
<ul class="blog__area">
<?php
  $args = array(
    'posts_per_page' => 10 // 表示件数の指定
  );
  $posts = get_posts( $args );
  foreach ( $posts as $post ): // ループの開始
  setup_postdata( $post ); // 記事データの取得
?>
  <li class="blog__list">
    <div class="blog__thum"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a></div>
    <p class="blog__ttl"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
  </li>
<?php
  endforeach; // ループの終了
  wp_reset_postdata(); // 直前のクエリを復元する
?>
</ul>
</section>
<!------------- MAIN ------------>
<?php get_footer(); ?>


