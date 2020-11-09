<?php get_header(); ?>
<div class="container">
<main class="article__wrapper">
<?php while (have_posts()): the_post(); ?>
<h2 class="hide-fix-ttl"><?php the_title(); ?></h2>
<?php the_content(); ?>
<?php endwhile; ?>
</main>
<?php get_footer(); ?>