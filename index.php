<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package So_Lunch
 */
?>



<?php get_header(); ?>

    <div class="slider" style="position: relative;bottom: 65px; z-index: -7;">
    <ul class="slides">
      <li>
        <img src="<?php echo slider_title_pour_index_get_meta( 'slider_title_pour_index_url_slider2' ); ?>" alt="<?php echo seo_pour_index_get_meta( 'seo_pour_index_name_slider_2' ); ?>"> <!-- random image -->
        <div class="caption center-align">
          <h3 style="font-family: 'Muli', sans-serif"><?php echo slider_title_pour_index_get_meta( 'slider_title_pour_index_great_title_slider2' ); ?></h3>
          <h5 style="font-family: 'Muli', sans-serif" class="light grey-text text-lighten-3"><?php echo slider_title_pour_index_get_meta( 'slider_title_pour_index_small_title_slider2' ); ?></h5>
        </div>
      </li>
      <li>
       
        <img src="<?php echo slider_title_pour_index_get_meta( 'slider_title_pour_index_url_slider1' ); ?>" alt="<?php echo seo_pour_index_get_meta( 'seo_pour_index_name_slider_1' ); ?>">
         <!-- random image -->
        <div class="caption center-align">
          <h3 style="font-family: 'Muli', sans-serif;"><?php echo slider_title_pour_index_get_meta( 'slider_title_pour_index_great_title_slider1' ); ?></h3>
          <h5 style="font-family: 'Muli', sans-serif;" class="light grey-text text-lighten-3"><?php echo slider_title_pour_index_get_meta( 'slider_title_pour_index_small_title_slider1' ); ?></h5>
        </div>
      </li>
      <li>
        <img src="<?php echo slider_title_pour_index_get_meta( 'slider_title_pour_index_url_slider3' ); ?>" alt="<?php echo seo_pour_index_get_meta( 'seo_pour_index_name_slider_3' ); ?>"> <!-- random image -->
        <div class="caption center-align">
          <h3 style="font-family: 'Muli', sans-serif;"><?php echo slider_title_pour_index_get_meta( 'slider_title_pour_index_great_title_slider3'); ?></h3>
          <h5 style="font-family: 'Muli', sans-serif;" class="light grey-text text-lighten-3"><?php echo slider_title_pour_index_get_meta( 'slider_title_pour_index_small_title_slider3' ); ?></h5>
        </div>
      </li>  
    </ul>
  </div>
  </div>


     

<style>

@media screen and (max-width: 1303px) {
  .suivez-nous {
    width: 253px!important;
}
}


.snip1313 {
  font-family: 'Raleway', Arial, sans-serif;
  position: relative;
  float: left;
  overflow: hidden;
  margin: 10px 1%;
  min-width: 180px;
  max-width: 180px;
  width: 100%;
  background: #abd3a7;
  text-align: left;
  top: 40px;
      height: 140px;
  color: #000000;
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.15);
  font-size: 16px;
}

.snip1313 * {
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  -webkit-transition: all 0.3s ease-out;
  transition: all 0.3s ease-out;
}
.snip1313 > img,
.snip1313 .image img {
  -webkit-transform: scale(1.05);
  transform: scale(1.05);
  max-width: 100%;
}
.snip1313 > img {
  vertical-align: top;
  position: relative;
  -webkit-filter: blur(5px);
  filter: blur(5px);
  opacity: 0.7;
}
.snip1313 .image {
  position: absolute;
  top: 0;
  bottom: 0;
  right: 0;
  left: 0;
  overflow: hidden;
  -webkit-transition-delay: 0.2s;
  transition-delay: 0.2s;
  box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.1), 0px 1px 0 rgba(255, 255, 255, 0.2);
}
.snip1313 .image img {
  position: absolute;
  top: 0;
  left: 0;
}
.snip1313 .read-more {
  display: block;
  opacity: 0;
  -webkit-transform: translateX(-20px);
  transform: translateX(-20px);
  line-height: 48px;
  background-color: #abd3a799;
  width: 100%;
  font-size: 12px;
  text-transform: uppercase;
  letter-spacing: 1px;
  padding: 0 15px;
  color: #ffffff;
  font-family: 'Muli', sans-serif;
  right: 0;
  bottom: 0;
  font-weight: 500;
  position: absolute;
  -webkit-transition-delay: 0s;
  transition-delay: 0s;
}
.snip1313 a {
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  position: absolute;
  z-index: 1;
}
.snip1313:hover .read-more,
.snip1313.hover .read-more {
  opacity: 1;
  -webkit-transform: translateX(0px);
  transform: translateX(0px);
  -webkit-transition-delay: 0.2s;
  transition-delay: 0.2s;
}
.snip1313:hover .image,
.snip1313.hover .image {
  bottom: 50px;
  -webkit-transition-delay: 0s;
  transition-delay: 0s;
}

  

  
h3, h5{
  font-family: 'Muli', sans-serif;
}
</style>

<!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <!-- Compiled and minified JavaScript -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

<script>
   $(document).ready(function(){
    $('.materialboxed').materialbox();
  });
</script>



<?php get_footer(); ?>
   