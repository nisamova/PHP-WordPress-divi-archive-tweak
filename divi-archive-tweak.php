/*
 Template name: Divi Custom Archive Code 
 * /

<?php get_header(); ?>
 
 <div id="main-content"><!--DIVI Wrapper keep it-->
 <div class="container"><!-- DIVI element keep it-->
<h1><?php the_archive_title()?><h1>
	 
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div>
	<?php the_title(); ?>
	<?php the_post_thumbnail(array (400, 250), array('class' => 'alignleft')); ?></div> 
    <a href="<?php the_permalink(); ?>"><?php the_title() ;?></a>
	<p><?php the_excerpt(); ?></p>
	<?php endwhile; else: ?>
	
<p> No posts found to list</p>
<?php endif; ?>

 </div>
 </div> <!-- #main-content -->
  
 <?php get_footer(); ?>