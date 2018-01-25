<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package So_Lunch
 */

?>       


  <!-- Modal Structure -->
  <div id="modal1" class="modal">
    <div class="modal-content">
      <h4 style="font-family: 'Muli', sans-serif; text-align: center;"><?php the_title();?></h4>
      <p style="color: red;">     </p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Fermer</a>
    </div>
  </div>






</section>
 <footer style="background-color: #abd3a8;
    z-index: 999;
    bottom: 0;
    position: fixed;
    width: 100%;
    height: 45px;"> 
            
                <div class="row" style="margin-bottom: 0px; height: 100%;">
                  <div class="col s12 m12 l4 hide-on-med-and-down" style="height: 100%;">
      
                  </div>
                  <div class="col s12 m12 l4" style="height: 100%;">
                     <h6 style="text-align: center; position: relative; top: 7px; color: #fff;font-family: 'Muli', sans-serif;  "> © Copyright all rights reserveds - <a class="modal-trigger"  href="#modal1" style="color: #fff; font-family: 'Muli', sans-serif;">Mention Légales</a></h6>
                  </div>
                  <div class="col s12 m12 l4" style="height: 100%;">
                    <div style=" margin-right: auto; margin-left: auto; width: 285px;margin-right: auto; margin-left: auto;  width: 285px;position: relative;top: 6px;">
                      <div style=" width: 42%; margin-right: auto; margin-left: auto;">
                         <a href="https://www.facebook.com/solunchdijon/" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/facebook.png" class="img-social" style="margin-right: 7px; position: relative;  top: 1px!important;
                           width: 32px!important;"></a>
                         <!-- <a href="#" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/twitter.png" class="img-social"  style="margin-right: 7px; position: relative; top: 1px!important;
    width: 32px!important;"></a> -->
                         <!-- <a href="#" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/pinterest.png" class="img-social" style="margin-right: 7px;position: relative; top: 1px!important;
    width: 32px!important;"></a> -->
                         <a href="https://www.instagram.com/solunchdijon/" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/instagram.png" class="img-social" style=" margin-right: 7px; position: relative; top: 1px!important;
    width: 32px!important;"></a>
     <!--                     <a href="#" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/google+.png" class="img-social" style="margin-right: 7px;position: relative; top: 1px!important;
    width: 32px!important;"></a> -->
                         <a href="#" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/youtube.png" class="img-social" style="position: relative; top: 1px!important;
                          width: 32px!important;"></a>
                      </div>    
                    </div>   
                  </div>
                </div>

                <div class="z-depth-4 globale-instagram" style=" height: 200px; background-color: rgba(255, 255, 255, 0.44); position: relative; bottom: 245px; overflow-y: auto; direction: horizontal; width: 100%;">

                    <h5  class="suivez-nous" style=" color: #ffffff;
                       font-family: 'Muli', sans-serif; position: absolute; transform: translate(-50%); left: 50%; bottom: 160px; width: 179px; font-size: 13px; border: 2px solid; padding: 7px;">Suivez-nous sur Instagram</h5>
                  
                    <!-- Card loop -->       
                              <div style="height: 12px; width: 100%;">
                                <div style="display: flex; flex-direction: row; flex-wrap: wrap; justify-content: center;">
                                  <?php $args = array('post_per_page' => -1,
                                   'post_type' => 'instagram',);
                                  $query = new WP_Query($args); 
                                  while (  $query -> have_posts() ) : $query -> the_post(); ?>
                                      <!-- <figure class="snip1313">
                                      <img class="materialboxed"  src="<?php the_post_thumbnail('small-thumbnails');?>" style="width: 100%;"> 
                                       <div class="image"><img style="height: 100%; src="<?php the_post_thumbnail('small-thumbnails');?>"></div><span class="read-more" >
                                       <?php the_title();?> <i class="ion-android-arrow-forward"></i></span><a href="https://www.instagram.com/solunchdijon/" target="_blank"></a>
                                      </figure> -->

                                      <a  href="https://www.instagram.com/solunchdijon/"><span style="     position: absolute;
    color: white;
    float: right;
    bottom: 17px;" class=""><?php the_title();?></span><img style="margin-top: 40px; margin-top: 40px;
    height: 155px;" alt="<?php the_title();?>"  width="210" src="<?php the_post_thumbnail('small-thumbnails');?>"></a>
                                      
                                  <?php endwhile;?>
                                </div>  
                              </div>  
                  </div>    
</footer> 


<!-- 
        <div class="row #00b0ff light-blue accent-3">
          <div class="col s12 m12 l4 #ff5252 red accent-2">
             gfn
          </div>
          <div class="col s12 m12 l4 #5c6bc0 indigo lighten-1">
             <h6> ©  Copyright all rights reserveds - Mention Légales</h6>
          </div>
          <div class="col s12 m12 l4 #b2dfdb teal lighten-4">
             g
          </div>
        </div>  -->


<style>

im

@media screen and (max-width: 992px) {
.globale-instagram {
  position: absolute!important;
  bottom: 45px!important;
}

}

.slides{
  height: 100vh!important;
}

.caption{
  transform: translate(-50%, -40%)!important; top:40%!important; left: 50%!important; position: absolute!important;
}
</style>

 <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <!-- Compiled and minified JavaScript -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

       <script type="text/javaScript" >         
           $(document).ready(function(){
              $('.slider').slider();
           });     
       </script>


       <script type="text/javaScript" > 
           $(document).ready(function(){
              $(".side-nav").sideNav();
           });
           
            $(document).ready(function(){
    // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();
  });
        
       </script>

<?php wp_footer(); ?>

</body>
</html>













