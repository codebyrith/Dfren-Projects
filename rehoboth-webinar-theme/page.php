<?php
/**
 * The template for displaying all pages
 *
 * @package Rehoboth_Webinar
 */

get_header();
?>

<main class="max-w-4xl mx-auto py-16 px-4 sm:px-6 min-h-[60vh]">
  <?php
  if (have_posts()) :
    while (have_posts()) : the_post();
  ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <h1 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mb-6"><?php the_title(); ?></h1>
      <div class="prose prose-slate max-w-none text-stone-700 leading-relaxed text-base">
        <?php the_content(); ?>
      </div>
    </article>
  <?php
    endwhile;
  endif;
  ?>
</main>

<?php
get_footer();
