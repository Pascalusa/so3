<?php
/*
Template Name: Blog elementor
*/
/**
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * 
 */
?>
<?php get_header(); ?>

  <div id="primary" class="content-area" style="position: relative; bottom: 5px;">
    <main id="main" class="site-main">

      	

      <?php
      while ( have_posts() ) : the_post();
        get_template_part( 'template-parts/concept', 'page-engagements' );
      endwhile; // End of the loop.
      ?>

      <div class="row" style=" width: 50%; margin-bottom: 55px;">
                          
              	        <!-- Card loop --> 
              	            <?php $args = array('post_per_page' => -1,
                                 'post_type' => 'post',);
                                $query = new WP_Query($args); 
                                while (  $query -> have_posts() ) : $query -> the_post(); ?>
              				    <div class="col s12 m12 l6">
              				      <div class="card">
                                   <div style="background-color: #ffffff; width: 100%; height: 45px; position: absolute; z-index: 77;">
                                  <!--  <div class="fb-share-button" data-href="https://solunch.fr" data-layout="button" data-size="large" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fsolunch.fr%2F&amp;src=sdkpreparse">Partager</a></div> -->
                                   <div style="position: absolute; top: 8px; transform: translate(-50%); left: 50%;" class="fb-like" data-href="https://solunch.fr" data-layout="button_count" data-action="like" data-size="large" data-show-faces="true" data-share="true"></div>
                                   </div>
              				        <div class="card-image">
              				           <img alt="<?php the_title();?>" style="height: 230px;" class="materialboxed" src="<?php the_post_thumbnail('small-thumbnails');?>"> 
              				           <!-- <?php echo image_box_get_meta( 'image_box_url_image' );?>   -->
              				          <span style="    font-size: 1.2em; font-family: 'Muli', sans-serif;" class="card-title"><?php the_title();?></span>
              				          <a style="background-color: #abd3a7!important;" href="<?php the_permalink(); ?>"  target="_blank" class=" modal-trigger btn-floating halfway-fab waves-effect waves-light red pulse"><i class="material-icons">add</i></a>
              				        </div>
              				        <div class="card-content" style="font-family: 'Josefin Sans', sans-serif;">
              				          <p><?php the_excerpt(); ?></p>
              				        </div>
              				      </div>
              				    </div>
                              <?php endwhile;?>
                          <!-- Fin Card loop --> 

                      </div>
                  </div> 

    </main><!-- #main -->
  </div><!-- #primary -->

<?php get_template_part( 'footer-for-page' );?>

<style>


@media screen and (max-width: 400px) {
 .row {
  width: 100%!important;
}
}
</style>
