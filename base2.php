<div class="row">                  
              <div style="    width: 126px; margin-left: auto; margin-right: auto; border-bottom: 4px dashed white; padding: 9px;">
                <h5 style="color:#ffffff; text-align:center;"><?php  echo get_cat_name(3);?></h5>
                    <div class="switch">
                      <label style="color:#ffffff">
                        Off
                        <input  onclick="showprice('<?php  echo get_cat_name(3);?>');" type="checkbox">
                        <span class="lever"></span>
                        On
                      </label>
                    </div>
              </div>  
          <div class="col s12 <?php  echo get_cat_name(3);?> animated tdPlopIn" style=" background-color: rgba(253, 253, 253, 0.45); border: 2px solid white; display: none;">
                              <?php
                                 $args = array('post_per_page' => -1,
                                   'post_type' => 'commande_en_lignes', 'cat' => 3,);
                                  $category = new WP_Query($args);
                                  while (  $category -> have_posts() ) : $category -> the_post(); ?>
                                      <!-- debut card -->
                                   <div class="col s12 m6 l2 <?php echo restriction_get_meta( 'restriction_soja' );?> <?php echo restriction_get_meta( 'restriction_gluten' );?> <?php echo restriction_get_meta( 'restriction_produits_laitiers' );?>
                                                    <?php echo restriction_get_meta( 'restriction_poisson' );?> <?php echo restriction_get_meta( 'restriction_viande' );?>" style="background-color:;padding-top: 50px; padding-bottom: 25px;">
                                                   <p style="position: relative; top: -5px; text-align: center;"><?php the_title();?></p> 
                                     <div style="padding-left: 12px; background-color: ; z-index:999; width: 117px; margin-left: auto; margin-right: auto;" class=" circle-photo">
                                               <div data-position="top" data-delay="50" data-tooltip='<?php the_title();?>' class="tooltipped circle-cat"  class=" z-depth-3" style="  border: 4px solid white; background-color: green; height: 100px; width: 100px; border-radius: 50%; overflow:hidden;"><img style="width: 100px;
                                                  height: 100px;"<?php the_post_thumbnail('medium-thumbnails'); ?>>
                                               </div> 
                                           </div>                                   
                                                <div class="row" style="height:45px; position: relative; top: 12px;">
                                                      <div style="background-color:#ffffff; width: 45px; margin-right: auto; padding: 1px; border-radius: 29px; margin-left: auto; border: 2px solid white; position: relative; top: 16px;"><p style=" font-weight: 600; text-align: center; position: relative; bottom: 5px;"><?php echo prix_pour_la_page_reservation_et_livraison_get_meta( 'prix_pour_la_page_reservation_et_livraison_prix_2_normal_' ); ?>€</p></div>

                                                  <div class="col s6 m6 l6 " style="border: 2px solid white; background-color: #abd3a6; border-radius: 14px; ">
                                                      <a href="" class="snipcart-add-item" data-item-id="<?php the_ID();?>" data-item-url="<?php bloginfo('url'); ?>/commander-en-ligne/" data-item-description="<?php the_excerpt(); ?>" 
                                                         data-item-price="0" data-item-name="lunch bowl - <?php  echo get_cat_name(3);?> : <?php the_title();?>" style="margin-right: auto; margin-left: auto; display: block;">
                                                        <i class="large material-icons" style="font-size: 2rem!important; padding: 6px; margin-right: -6px;">favorite</i></a>
                                                  </div> 
                                                  <div class="col s6 m6 l6 " style="border: 2px solid white; border-radius: 14px; ">
                                                      <a href="#" class="snipcart-checkout" style="margin-right: auto; margin-left: auto; display: block;">
                                                        <i class="large material-icons" style="font-size: 2rem!important; padding: 6px;">clear</i> </a>
                                                  </div>
                                                </div>
                                    </div>  
                                    <!-- fin Card -->
                                  <?php endwhile;?>  
            </div>
     </div> 
