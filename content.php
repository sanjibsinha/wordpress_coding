<?php

if(have_posts(  )): while(have_posts(  )): the_post(  ); ?>

<h1>
        <?php the_title(); ?>
</h1>
<p>
          
          Posted by 
    <?php the_author_posts_link(); ?>
    on
    <?php the_time( 'd.m.y' ) ?>
    in
    <?php echo get_the_category_list(', '); ?>
</p>
<p class="container">
	<?php
if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
the_post_thumbnail( 'full' );
}
?>
</p>	
<article class="blog-post">
      <?php the_content( ); ?>
</article> 


<?php
endwhile; else: endif;
?>