<?php 
                        // https://www.youtube.com/watch?v=BYNLXZyn9NU  the_title();
                        $aujourdhui = date( ' d / m / Y' );
                        $demain = date( ' d / m / Y', time()+(24*3600) );
                        $jour2 = date( ' d / m / Y', time()+(48*3600) );
                        $jour3 = date( ' d / m / Y', time()+(72*3600) );
                        $jour4 = date( ' d / m / Y ', time()+(96*3600) );
                        $jour5 = date( ' d / m / Y ', time()+(120*3600) );
                        $jour6 = date( ' d / m / Y ', time()+(144*3600) );
       
 ?>
                                <div class="row" style="position: relative; top: 89px;">
                                           
                                    <div style=" width: 127px; margin-left: auto; margin-right: auto; position: relative; bottom: 8px;">
                                                      <a href="#openModal" class="btn" style="margin-left: auto; margin-right: auto; display: block; margin-bottom: 20px; background-color: #fcfffc63; color: rgb(255, 255, 255); border-radius: 50px;"><i style="font-size: 2rem!important;" class="material-icons">arrow_forward</i></a>
                                             
                                         
                                                         <button class="snipcart-add-item btn" data-item-id="7.7" data-item-url="<?php bloginfo('url'); ?>/commander-en-ligne/" data-item-price="9.90" data-item-name="Total lunch bowl" style="margin-left: auto;
                                                          margin-right: auto; display: block; margin-bottom: 20px; background-color: #fcfffc63; color: rgb(255, 255, 255); border-radius: 50px;"  data-item-custom1-name="Jours (Fermé le Dimanche et jours fériés)"
                                                        data-item-custom1-options="<?php echo $aujourdhui; ?>| <?php echo $demain; ?>| <?php echo $jour2; ?>| <?php echo $jour3; ?>|<?php echo $jour4; ?>| <?php echo $jour5; ?>| <?php echo $jour6; ?>" data-item-custom2-name="Horaires"
                                                        data-item-custom2-options="12:30 - 12:45| 12:45 - 13:00| 13:00 - 13:15| 13:15 - 13:30 |13:30 - 13:45 |13:45 - 14:00|14:15 - 14:30|14:30 - 14:45|14:45 - 15:00|15:00 - 15:15|15:15 - 15:30|15:30 - 15:45|18:00 - 18:15|18:15 - 18:30|18:30 - 18:45|18:45 - 19:00|19:00 - 19:15">Valider</button>  
                                     </div>
                                                        <h6 style="text-align: center; margin-bottom: 35px;"> * Choisissez 1 ingrédient parmi les catégories </h6>
                                                                     <div class="hide-on-med-and-down" style="position: absolute; height: 4px; width: 100%; background-color: white;"></div>
                                  
                                  
                                  
                                    <div class="col s12 m3 l3">
                                        <div style=" width: 126px; margin-left: auto; margin-right: auto; border-bottom: 4px dashed white; padding: 9px;">
                                          <h5 style="color:#ffffff; text-align:center;"><?php  echo get_cat_name(12);?></h5>
                                              <div class="switch">
                                                <label style="color:#ffffff">
                                                  Off 
                                                  <input  onclick="showprice('<?php  echo get_cat_name(12);?>');" type="checkbox">
                                                  <span class="lever"></span>
                                                  On
                                                </label>
                                              </div>
                                        </div>
                                   </div>
                                  
                                   <div class="col s12 m3 l3">
                                        <div style=" width: 126px; margin-left: auto; margin-right: auto; border-bottom: 4px dashed white; padding: 9px;">
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
                                   </div>
                                  
                                  <div class="col s12 m3 l3">
                                        <div style=" width: 126px; margin-left: auto; margin-right: auto; border-bottom: 4px dashed white; padding: 9px;">
                                          <h5 style="color:#ffffff; text-align:center;"><?php  echo get_cat_name(1);?></h5>
                                              <div class="switch">
                                                <label style="color:#ffffff">
                                                  Off
                                                  <input  onclick="showprice('<?php  echo get_cat_name(1);?>');" type="checkbox">
                                                  <span class="lever"></span>
                                                  On
                                                </label>
                                              </div>
                                        </div>
                                   </div>
                                  
                                  <div class="col s12 m3 l3">
                                        <div style=" width: 126px; margin-left: auto; margin-right: auto; border-bottom: 4px dashed white; padding: 9px;">
                                          <h5 style="color:#ffffff; text-align:center;"><?php  echo get_cat_name(8);?></h5>
                                              <div class="switch">
                                                <label style="color:#ffffff">
                                                  Off
                                                  <input  onclick="showprice('<?php  echo get_cat_name(8);?>');" type="checkbox">
                                                  <span class="lever"></span>
                                                  On
                                                </label>
                                              </div>
                                        </div>
                                   </div>
                                  
                                  <div class="col s12 m3 l3">
                                        <div style=" width: 126px; margin-left: auto; margin-right: auto; border-bottom: 4px dashed white; padding: 9px;">
                                          <h5 style="color:#ffffff; text-align:center;"><?php  echo get_cat_name(9);?></h5>
                                              <div class="switch">
                                                <label style="color:#ffffff">
                                                  Off
                                                  <input  onclick="showprice('<?php  echo get_cat_name(9);?>');" type="checkbox">
                                                  <span class="lever"></span>
                                                  On
                                                </label>
                                              </div>
                                        </div>
                                   </div>
                                  
                                  <div class="col s12 m3 l3">
                                        <div style=" width: 126px; margin-left: auto; margin-right: auto; border-bottom: 4px dashed white; padding: 9px;">
                                          <h5 style="color:#ffffff; text-align:center;"><?php  echo get_cat_name(10);?></h5>
                                              <div class="switch">
                                                <label style="color:#ffffff">
                                                  Off
                                                  <input  onclick="showprice('<?php  echo get_cat_name(10);?>');" type="checkbox">
                                                  <span class="lever"></span>
                                                  On
                                                </label>
                                              </div>
                                        </div>
                                   </div>
                                  
                                  <div class="col s12 m3 l3">
                                        <div style=" width: 126px; margin-left: auto; margin-right: auto; border-bottom: 4px dashed white; padding: 9px;">
                                          <h5 style="color:#ffffff; text-align:center;"><?php  echo get_cat_name(11);?></h5>
                                              <div class="switch">
                                                <label style="color:#ffffff">
                                                  Off
                                                  <input  onclick="showprice('<?php  echo get_cat_name(11);?>');" type="checkbox">
                                                  <span class="lever"></span>
                                                  On
                                                </label>
                                              </div>
                                        </div>
                                   </div>
                                  
                                  <div class="col s12 m3 l3">
                                        <div style=" width: 126px; margin-left: auto; margin-right: auto; border-bottom: 4px dashed white; padding: 9px;">
                                          <h5 style="color:#ffffff; text-align:center;"><?php  echo get_cat_name(29);?></h5>
                                              <div class="switch">
                                                <label style="color:#ffffff">
                                                  Off
                                                  <input  onclick="showprice('<?php  echo get_cat_name(29);?>');" type="checkbox">
                                                  <span class="lever"></span>
                                                  On
                                                </label>
                                              </div>
                                        </div>
                                   </div>
                               </div>    

<!--         Categorie          -->

       <div class="row" style="position: relative; top: 78px;">                 
                   <div class="col s12 m12 l12 <?php  echo get_cat_name(12);?> animated tdPlopIn" style=" margin-bottom: 25px; background-color: rgba(253, 253, 253, 0.45); border: 2px solid white; display: none;">
                              <?php
                                 $args = array('post_per_page' => -1,
                                   'post_type' => 'commande_en_lignes', 'cat' => 12,);
                                  $category = new WP_Query($args);
                                  while (  $category -> have_posts() ) : $category -> the_post(); ?>
                                      <!-- debut card -->
                                   <div class="col s12 m6 l2 <?php echo restriction_get_meta( 'restriction_soja' );?> <?php echo restriction_get_meta( 'restriction_gluten' );?> <?php echo restriction_get_meta( 'restriction_produits_laitiers' );?>
                                                    <?php echo restriction_get_meta( 'restriction_poisson' );?> <?php echo restriction_get_meta( 'restriction_viande' );?>" style="background-color:;padding-top: 50px; padding-bottom: 25px;">
                                                   <p style="position: relative; top: -5px; text-align: center;"><?php the_title();?></p> 
                                     <div style="padding-left: 12px; background-color: ; z-index:999; width: 117px; margin-left: auto; margin-right: auto;" class=" circle-photo">
                                               <div class="z-depth-2" data-position="top" data-delay="50" data-tooltip='<?php the_title();?>' class="tooltipped circle-cat"  class=" z-depth-3" style="  border: 4px solid white; background-color: green; height: 100px; width: 100px; border-radius: 50%; overflow:hidden;"><img style="width: 100px;
                                                  height: 100px;"<?php the_post_thumbnail('medium-thumbnails'); ?>>
                                               </div> 
                                           </div>                                   
                                                <div class="row" style="height:45px; position: relative; top: 12px;">
                                                      <div style="background-color:#ffffff; height: 45px; width: 45px; height: 45px; margin-right: auto; padding: 1px; border-radius: 29px; margin-left: auto; border: 2px solid white; position: relative; top: 16px;"><p style=" font-weight: 600; text-align: center; position: relative; bottom: 5px;"><?php echo prix_pour_la_page_reservation_et_livraison_get_meta( 'prix_pour_la_page_reservation_et_livraison_prix_2_normal_' ); ?>€</p></div>

                                                  <div class="col s6 m6 l6 " style="border: 2px solid white; background-color: #abd3a6; border-radius: 14px; ">
                                                      <a href="" class="snipcart-add-item" data-item-id="<?php the_ID();?>" data-item-url="<?php bloginfo('url'); ?>/commander-en-ligne/" data-item-description="<?php the_excerpt(); ?>" 
                                                         data-item-price="0" data-item-name="lunch bowl - <?php  echo get_cat_name(12);?> : <?php the_title();?>" style="margin-right: auto; margin-left: auto; display: block;">
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
         
<!--         Categorie          -->
                                
                   <div class="col s12 l12 <?php  echo get_cat_name(3);?> animated tdPlopIn" style=" margin-bottom: 25px; background-color: rgba(253, 253, 253, 0.45); border: 2px solid white; display: none;">
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
                                               <div class="z-depth-2" data-position="top" data-delay="50" data-tooltip='<?php the_title();?>' class="tooltipped circle-cat"  class=" z-depth-3" style="  border: 4px solid white; background-color: green; height: 100px; width: 100px; border-radius: 50%; overflow:hidden;"><img style="width: 100px;
                                                  height: 100px;"<?php the_post_thumbnail('medium-thumbnails'); ?>>
                                               </div> 
                                           </div>                                   
                                                <div class="row" style="height:45px; position: relative; top: 12px;">
                                                      <div style="background-color:#ffffff;     height: 45px; width: 45px; margin-right: auto; padding: 1px; border-radius: 29px; margin-left: auto; border: 2px solid white; position: relative; top: 16px;"><p style=" font-weight: 600; text-align: center; position: relative; bottom: 5px;"><?php echo prix_pour_la_page_reservation_et_livraison_get_meta( 'prix_pour_la_page_reservation_et_livraison_prix_2_normal_' ); ?>€</p></div>

                                                  <div class="col s6 m6 l6 " style="border: 2px solid white; background-color: #abd3a6; border-radius: 14px; ">
                                                      <a href="" class="snipcart-add-item" data-item-id="<?php the_ID();?>" data-item-url="<?php bloginfo('url'); ?>/commander-en-ligne/" data-item-description="<?php the_excerpt(); ?>" 
                                                         data-item-price="0" data-item-name="lunch bowl - <?php  echo get_cat_name(12);?> : <?php the_title();?>" style="margin-right: auto; margin-left: auto; display: block;">
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
                  
                   <div class="col s12 l12 <?php  echo get_cat_name(1);?> animated tdPlopIn" style=" margin-bottom: 25px; background-color: rgba(253, 253, 253, 0.45); border: 2px solid white; display: none;">
                              <?php
                                 $args = array('post_per_page' => -1,
                                   'post_type' => 'commande_en_lignes', 'cat' => 1,);
                                  $category = new WP_Query($args);
                                  while (  $category -> have_posts() ) : $category -> the_post(); ?>
                                      <!-- debut card -->
                                   <div class="col s12 m6 l2 <?php echo restriction_get_meta( 'restriction_soja' );?> <?php echo restriction_get_meta( 'restriction_gluten' );?> <?php echo restriction_get_meta( 'restriction_produits_laitiers' );?>
                                                    <?php echo restriction_get_meta( 'restriction_poisson' );?> <?php echo restriction_get_meta( 'restriction_viande' );?>" style="background-color:;padding-top: 50px; padding-bottom: 25px;">
                                                   <p style="position: relative; top: -5px; text-align: center;"><?php the_title();?></p> 
                                     <div style="padding-left: 12px; background-color: ; z-index:999; width: 117px; margin-left: auto; margin-right: auto;" class=" circle-photo">
                                               <div class="z-depth-2" data-position="top" data-delay="50" data-tooltip='<?php the_title();?>' class="tooltipped circle-cat"  class=" z-depth-3" style="  border: 4px solid white; background-color: green; height: 100px; width: 100px; border-radius: 50%; overflow:hidden;"><img style="width: 100px;
                                                  height: 100px;"<?php the_post_thumbnail('medium-thumbnails'); ?>>
                                               </div> 
                                           </div>                                   
                                                <div class="row" style="height:45px; position: relative; top: 12px;">
                                                      <div style="background-color:#ffffff;     height: 45px; width: 45px; margin-right: auto; padding: 1px; border-radius: 29px; margin-left: auto; border: 2px solid white; position: relative; top: 16px;"><p style=" font-weight: 600; text-align: center; position: relative; bottom: 5px;"><?php echo prix_pour_la_page_reservation_et_livraison_get_meta( 'prix_pour_la_page_reservation_et_livraison_prix_2_normal_' ); ?>€</p></div>

                                                  <div class="col s6 m6 l6 " style="border: 2px solid white; background-color: #abd3a6; border-radius: 14px; ">
                                                      <a href="" class="snipcart-add-item" data-item-id="<?php the_ID();?>" data-item-url="<?php bloginfo('url'); ?>/commander-en-ligne/" data-item-description="<?php the_excerpt(); ?>" 
                                                         data-item-price="0" data-item-name="lunch bowl - <?php  echo get_cat_name(12);?> : <?php the_title();?>" style="margin-right: auto; margin-left: auto; display: block;">
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
            
                   <div class="col s12 l12 <?php  echo get_cat_name(8);?> animated tdPlopIn" style=" margin-bottom: 25px; background-color: rgba(253, 253, 253, 0.45); border: 2px solid white; display: none;">
                              <?php
                                 $args = array('post_per_page' => -1,
                                   'post_type' => 'commande_en_lignes', 'cat' => 8,);
                                  $category = new WP_Query($args);
                                  while (  $category -> have_posts() ) : $category -> the_post(); ?>
                                      <!-- debut card -->
                                   <div class="col s12 m6 l2 <?php echo restriction_get_meta( 'restriction_soja' );?> <?php echo restriction_get_meta( 'restriction_gluten' );?> <?php echo restriction_get_meta( 'restriction_produits_laitiers' );?>
                                                    <?php echo restriction_get_meta( 'restriction_poisson' );?> <?php echo restriction_get_meta( 'restriction_viande' );?>" style="background-color:;padding-top: 50px; padding-bottom: 25px;">
                                                   <p style="position: relative; top: -5px; text-align: center;"><?php the_title();?></p> 
                                     <div style="padding-left: 12px; background-color: ; z-index:999; width: 117px; margin-left: auto; margin-right: auto;" class=" circle-photo">
                                               <div class="z-depth-2" data-position="top" data-delay="50" data-tooltip='<?php the_title();?>' class="tooltipped circle-cat"  class=" z-depth-3" style="  border: 4px solid white; background-color: green; height: 100px; width: 100px; border-radius: 50%; overflow:hidden;"><img style="width: 100px;
                                                  height: 100px;"<?php the_post_thumbnail('medium-thumbnails'); ?>>
                                               </div> 
                                           </div>                                   
                                                <div class="row" style="height:45px; position: relative; top: 12px;">
                                                      <div style="background-color:#ffffff;     height: 45px; width: 45px; margin-right: auto; padding: 1px; border-radius: 29px; margin-left: auto; border: 2px solid white; position: relative; top: 16px;"><p style=" font-weight: 600; text-align: center; position: relative; bottom: 5px;"><?php echo prix_pour_la_page_reservation_et_livraison_get_meta( 'prix_pour_la_page_reservation_et_livraison_prix_2_normal_' ); ?>€</p></div>

                                                  <div class="col s6 m6 l6 " style="border: 2px solid white; background-color: #abd3a6; border-radius: 14px; ">
                                                      <a href="" class="snipcart-add-item" data-item-id="<?php the_ID();?>" data-item-url="<?php bloginfo('url'); ?>/commander-en-ligne/" data-item-description="<?php the_excerpt(); ?>" 
                                                         data-item-price="0" data-item-name="lunch bowl - <?php  echo get_cat_name(12);?> : <?php the_title();?>" style="margin-right: auto; margin-left: auto; display: block;">
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
         
                   <div class="col s12 l12 <?php  echo get_cat_name(9);?> animated tdPlopIn" style=" margin-bottom: 25px; background-color: rgba(253, 253, 253, 0.45); border: 2px solid white; display: none;">
                              <?php
                                 $args = array('post_per_page' => -1,
                                   'post_type' => 'commande_en_lignes', 'cat' => 9,);
                                  $category = new WP_Query($args);
                                  while (  $category -> have_posts() ) : $category -> the_post(); ?>
                                      <!-- debut card -->
                                   <div class="col s12 m6 l2 <?php echo restriction_get_meta( 'restriction_soja' );?> <?php echo restriction_get_meta( 'restriction_gluten' );?> <?php echo restriction_get_meta( 'restriction_produits_laitiers' );?>
                                                    <?php echo restriction_get_meta( 'restriction_poisson' );?> <?php echo restriction_get_meta( 'restriction_viande' );?>" style="background-color:;padding-top: 50px; padding-bottom: 25px;">
                                                   <p style="position: relative; top: -5px; text-align: center;"><?php the_title();?></p> 
                                     <div style="padding-left: 12px; background-color: ; z-index:999; width: 117px; margin-left: auto; margin-right: auto;" class=" circle-photo">
                                               <div class="z-depth-2" data-position="top" data-delay="50" data-tooltip='<?php the_title();?>' class="tooltipped circle-cat"  class=" z-depth-3" style="  border: 4px solid white; background-color: green; height: 100px; width: 100px; border-radius: 50%; overflow:hidden;"><img style="width: 100px;
                                                  height: 100px;"<?php the_post_thumbnail('medium-thumbnails'); ?>>
                                               </div> 
                                           </div>                                   
                                                <div class="row" style="height:45px; position: relative; top: 12px;">
                                                      <div style="background-color:#ffffff;     height: 45px; width: 45px; margin-right: auto; padding: 1px; border-radius: 29px; margin-left: auto; border: 2px solid white; position: relative; top: 16px;"><p style=" font-weight: 600; text-align: center; position: relative; bottom: 5px;"><?php echo prix_pour_la_page_reservation_et_livraison_get_meta( 'prix_pour_la_page_reservation_et_livraison_prix_2_normal_' ); ?>€</p></div>

                                                  <div class="col s6 m6 l6 " style="border: 2px solid white; background-color: #abd3a6; border-radius: 14px; ">
                                                      <a href="" class="snipcart-add-item" data-item-id="<?php the_ID();?>" data-item-url="<?php bloginfo('url'); ?>/commander-en-ligne/" data-item-description="<?php the_excerpt(); ?>" 
                                                         data-item-price="0" data-item-name="lunch bowl - <?php  echo get_cat_name(12);?> : <?php the_title();?>" style="margin-right: auto; margin-left: auto; display: block;">
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
         
                  <div class="col s12 l12 <?php  echo get_cat_name(10);?> animated tdPlopIn" style=" margin-bottom: 25px; background-color: rgba(253, 253, 253, 0.45); border: 2px solid white; display: none;">
                              <?php
                                 $args = array('post_per_page' => -1,
                                   'post_type' => 'commande_en_lignes', 'cat' => 10,);
                                  $category = new WP_Query($args);
                                  while (  $category -> have_posts() ) : $category -> the_post(); ?>
                                      <!-- debut card -->
                                   <div class="col s12 m6 l2 <?php echo restriction_get_meta( 'restriction_soja' );?> <?php echo restriction_get_meta( 'restriction_gluten' );?> <?php echo restriction_get_meta( 'restriction_produits_laitiers' );?>
                                                    <?php echo restriction_get_meta( 'restriction_poisson' );?> <?php echo restriction_get_meta( 'restriction_viande' );?>" style="background-color:;padding-top: 50px; padding-bottom: 25px;">
                                                   <p style="position: relative; top: -5px; text-align: center;"><?php the_title();?></p> 
                                     <div style="padding-left: 12px; background-color: ; z-index:999; width: 117px; margin-left: auto; margin-right: auto;" class=" circle-photo">
                                               <div class="z-depth-2" data-position="top" data-delay="50" data-tooltip='<?php the_title();?>' class="tooltipped circle-cat"  class=" z-depth-3" style="  border: 4px solid white; background-color: green; height: 100px; width: 100px; border-radius: 50%; overflow:hidden;"><img style="width: 100px;
                                                  height: 100px;"<?php the_post_thumbnail('medium-thumbnails'); ?>>
                                               </div> 
                                           </div>                                   
                                                <div class="row" style="height:45px; position: relative; top: 12px;">
                                                      <div style="background-color:#ffffff;     height: 45px; width: 45px; margin-right: auto; padding: 1px; border-radius: 29px; margin-left: auto; border: 2px solid white; position: relative; top: 16px;"><p style=" font-weight: 600; text-align: center; position: relative; bottom: 5px;"><?php echo prix_pour_la_page_reservation_et_livraison_get_meta( 'prix_pour_la_page_reservation_et_livraison_prix_2_normal_' ); ?>€</p></div>

                                                  <div class="col s6 m6 l6 " style="border: 2px solid white; background-color: #abd3a6; border-radius: 14px; ">
                                                      <a href="" class="snipcart-add-item" data-item-id="<?php the_ID();?>" data-item-url="<?php bloginfo('url'); ?>/commander-en-ligne/" data-item-description="<?php the_excerpt(); ?>" 
                                                         data-item-price="0" data-item-name="lunch bowl - <?php  echo get_cat_name(12);?> : <?php the_title();?>" style="margin-right: auto; margin-left: auto; display: block;">
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
         
                
                  <div class="col s12 l12 <?php  echo get_cat_name(11);?> animated tdPlopIn" style=" margin-bottom: 25px; background-color: rgba(253, 253, 253, 0.45); border: 2px solid white; display: none;">
                              <?php
                                 $args = array('post_per_page' => -1,
                                   'post_type' => 'commande_en_lignes', 'cat' => 11,);
                                  $category = new WP_Query($args);
                                  while (  $category -> have_posts() ) : $category -> the_post(); ?>
                                      <!-- debut card -->
                                   <div class="col s12 m6 l2 <?php echo restriction_get_meta( 'restriction_soja' );?> <?php echo restriction_get_meta( 'restriction_gluten' );?> <?php echo restriction_get_meta( 'restriction_produits_laitiers' );?>
                                                    <?php echo restriction_get_meta( 'restriction_poisson' );?> <?php echo restriction_get_meta( 'restriction_viande' );?>" style="background-color:;padding-top: 50px; padding-bottom: 25px;">
                                                   <p style="position: relative; top: -5px; text-align: center;"><?php the_title();?></p> 
                                     <div style="padding-left: 12px; background-color: ; z-index:999; width: 117px; margin-left: auto; margin-right: auto;" class=" circle-photo">
                                               <div class="z-depth-2" data-position="top" data-delay="50" data-tooltip='<?php the_title();?>' class="tooltipped circle-cat"  class=" z-depth-3" style="  border: 4px solid white; background-color: green; height: 100px; width: 100px; border-radius: 50%; overflow:hidden;"><img style="width: 100px;
                                                  height: 100px;"<?php the_post_thumbnail('medium-thumbnails'); ?>>
                                               </div> 
                                           </div>                                   
                                                <div class="row" style="height:45px; position: relative; top: 12px;">
                                                      <div style="background-color:#ffffff;     height: 45px; width: 45px; margin-right: auto; padding: 1px; border-radius: 29px; margin-left: auto; border: 2px solid white; position: relative; top: 16px;"><p style=" font-weight: 600; text-align: center; position: relative; bottom: 5px;"><?php echo prix_pour_la_page_reservation_et_livraison_get_meta( 'prix_pour_la_page_reservation_et_livraison_prix_2_normal_' ); ?>€</p></div>

                                                  <div class="col s6 m6 l6 " style="border: 2px solid white; background-color: #abd3a6; border-radius: 14px; ">
                                                      <a href="" class="snipcart-add-item" data-item-id="<?php the_ID();?>" data-item-url="<?php bloginfo('url'); ?>/commander-en-ligne/" data-item-description="<?php the_excerpt(); ?>" 
                                                         data-item-price="0" data-item-name="lunch bowl - <?php  echo get_cat_name(12);?> : <?php the_title();?>" style="margin-right: auto; margin-left: auto; display: block;">
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
         
                   <div class="col s12 l12 <?php  echo get_cat_name(29);?> animated tdPlopIn" style=" margin-bottom: 25px; background-color: rgba(253, 253, 253, 0.45); border: 2px solid white; display: none;">
                              <?php
                                 $args = array('post_per_page' => -1,
                                   'post_type' => 'commande_en_lignes', 'cat' => 29,);
                                  $category = new WP_Query($args);
                                  while (  $category -> have_posts() ) : $category -> the_post(); ?>
                                      <!-- debut card -->
                                   <div class="col s12 m6 l2 <?php echo restriction_get_meta( 'restriction_soja' );?> <?php echo restriction_get_meta( 'restriction_gluten' );?> <?php echo restriction_get_meta( 'restriction_produits_laitiers' );?>
                                                    <?php echo restriction_get_meta( 'restriction_poisson' );?> <?php echo restriction_get_meta( 'restriction_viande' );?>" style="background-color:;padding-top: 50px; padding-bottom: 25px;">
                                                   <p style="position: relative; top: -5px; text-align: center;"><?php the_title();?></p> 
                                     <div style="padding-left: 12px; background-color: ; z-index:999; width: 117px; margin-left: auto; margin-right: auto;" class=" circle-photo">
                                               <div  class="z-depth-2" data-position="top" data-delay="50" data-tooltip='<?php the_title();?>' class="tooltipped circle-cat"  class=" z-depth-3" style="  border: 4px solid white; background-color: green; height: 100px; width: 100px; border-radius: 50%; overflow:hidden;"><img style="width: 100px;
                                                  height: 100px;"<?php the_post_thumbnail('medium-thumbnails'); ?>>
                                               </div> 
                                           </div>                                   
                                                <div class="row" style="height:45px; position: relative; top: 12px;">
                                                      <div style="background-color:#ffffff;     height: 45px; width: 45px; margin-right: auto; padding: 1px; border-radius: 29px; margin-left: auto; border: 2px solid white; position: relative; top: 16px;"><p style=" font-weight: 600; text-align: center; position: relative; bottom: 5px;"><?php echo prix_pour_la_page_reservation_et_livraison_get_meta( 'prix_pour_la_page_reservation_et_livraison_prix_2_normal_' ); ?>€</p></div>

                                                  <div class="col s6 m6 l6 " style="border: 2px solid white; background-color: #abd3a6; border-radius: 14px; ">
                                                      <a href="" class="snipcart-add-item" data-item-id="<?php the_ID();?>" data-item-url="<?php bloginfo('url'); ?>/commander-en-ligne/" data-item-description="<?php the_excerpt(); ?>" 
                                                         data-item-price="0" data-item-name="lunch bowl - <?php  echo get_cat_name(12);?> : <?php the_title();?>" style="margin-right: auto; margin-left: auto; display: block;">
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