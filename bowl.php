 <?php 
                        // https://www.youtube.com/watch?v=BYNLXZyn9NU  the_title();
                        $aujourdhui = date( ' d / m / Y' );
                        $demain = date( ' d / m / Y', time()+(24*3600) );
                        $jour2 = date( ' d / m / Y', time()+(48*3600) );
                        $jour3 = date( ' d / m / Y', time()+(72*3600) );
                        $jour4 = date( ' d / m / Y ', time()+(96*3600) );
                        $jour5 = date( ' d / m / Y ', time()+(120*3600) );
                        $jour6 = date( ' d / m / Y ', time()+(144*3600) );
                          $var = "9";              
 ?>
 
<div style="background-color: rgb(153, 182, 185);    padding-bottom: 4px; position: relative; bottom: 10px;">
   <h5 style="text-align: center; position: relative; z-index: 9; background-color: rgb(153, 182, 185); width: 333px; margin-left: auto; margin-right: auto; margin-bottom: 119px;
    top: 74px;">Composez votre Lunch Bowl</h5> 
  
  <button class="snipcart-add-item btn" data-item-id="<?php the_ID();?>" data-item-url="<?php bloginfo('url'); ?>/commander-en-ligne/" data-item-price="9.90" data-item-name="<?php the_title();?>" style="margin-left: auto;
    margin-right: auto; display: block; margin-bottom: 20px; background-color: #fcfffc63; color: black; border-radius: 50px;">Valider</button>
  
  <h6 style="text-align: center; margin-bottom: 35px;"> * Choisissez 1 ingrédient parmi les 3 catégories </h6>
  
  <div style="background-color: black; height: 3px; position: absolute; top: 86px; width: 393px; transform: translate(-50%); left: 50%;"></div>
    <div class="row">                  
          <h5 onclick="showprice('cat1');" style=" font-weight: 700; text-align: center; border: 2px dotted; padding: 7px; width: 129px; margin-right: auto;margin-left: auto;"><?php  echo get_cat_name(12);?></h5>
          
          <div class="col s12 cat1" style="background-color:; display: none;">
                              <?php
                                 $args = array('post_per_page' => -1,
                                   'post_type' => 'commande_en_lignes', 'cat' => 12,);
                                  $category = new WP_Query($args);
                                  while (  $category -> have_posts() ) : $category -> the_post(); ?>
                                      <!-- debut card -->
                                   <div class="col s12 m6 l2 <?php echo restriction_get_meta( 'restriction_soja' );?> <?php echo restriction_get_meta( 'restriction_gluten' );?> <?php echo restriction_get_meta( 'restriction_produits_laitiers' );?>
                                                    <?php echo restriction_get_meta( 'restriction_poisson' );?> <?php echo restriction_get_meta( 'restriction_viande' );?>" style="background-color:;padding-top: 50px; padding-bottom: 25px;">
                                          <div style="padding-left: 12px; background-color: ; z-index:999; width: 117px; margin-left: auto; margin-right: auto;" class=" circle-photo">
                                               <div data-position="top" data-delay="50" data-tooltip='<?php the_title();?>' class="tooltipped circle-cat"  class=" z-depth-3" style="  border: 4px solid white; background-color: green; height: 100px; width: 100px; border-radius: 50%; overflow:hidden;"><img style="width: 100px;
                                                  height: 100px;"<?php the_post_thumbnail('medium-thumbnails'); ?>>
                                               </div> 
                                           </div>                                   
                                                <div class="row" style="height:45px; position: relative; top: 12px;">
                                                      <div style="background-color:#ffffff; width: 45px; margin-right: auto; padding: 1px; border-radius: 29px; margin-left: auto; border: 2px solid white; position: relative; top: 16px;"><p style=" font-weight: 600; text-align: center; position: relative; bottom: 5px;"><?php echo prix_pour_la_page_reservation_et_livraison_get_meta( 'prix_pour_la_page_reservation_et_livraison_prix_2_normal_' ); ?>€</p></div>

                                                  <div class="col s6 m6 l6 " style="border: 2px solid white; background-color: #abd3a6; border-radius: 14px; ">
                                                      <a href="" class="snipcart-add-item" data-item-id="<?php the_ID();?>" data-item-url="<?php bloginfo('url'); ?>/commander-en-ligne/" data-item-description="<?php the_excerpt(); ?>" 
                                                         data-item-price="0" data-item-name="<?php the_title();?>" style="margin-right: auto; margin-left: auto; display: block;">
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


         <div class="row">        
           <h5 onclick="showprice('cat2');" style=" font-weight: 700;text-align: center; border: 2px dotted; padding: 7px;width: 129px; margin-right: auto; margin-left: auto;"><?php  echo get_cat_name(3);?></h5>
          <div class="col s12 cat2" style="background-color:; display: none;">
                              <?php
                                 $args = array('post_per_page' => -1,
                                   'post_type' => 'commande_en_lignes', 'cat' => 3,);
                                  $category = new WP_Query($args);
                                  while (  $category -> have_posts() ) : $category -> the_post(); ?>
                                      <!-- debut card -->
                                   <div class="col s12 m6 l2 <?php echo restriction_get_meta( 'restriction_soja' );?> <?php echo restriction_get_meta( 'restriction_gluten' );?> <?php echo restriction_get_meta( 'restriction_produits_laitiers' );?>
                                                    <?php echo restriction_get_meta( 'restriction_poisson' );?> <?php echo restriction_get_meta( 'restriction_viande' );?>" style="background-color:;padding-top: 50px; padding-bottom: 25px;">
                                          <div style="padding-left: 12px; background-color: ; z-index:999; width: 117px; margin-left: auto; margin-right: auto;" class=" circle-photo">
                                               <div data-position="top" data-delay="50" data-tooltip='<?php the_title();?>' class="tooltipped circle-cat"  class=" z-depth-3" style="  border: 4px solid white; background-color: green; height: 100px; width: 100px; border-radius: 50%; overflow:hidden;"><img style="width: 100px;
                                                  height: 100px;"<?php the_post_thumbnail('medium-thumbnails'); ?>>
                                               </div> 
                                           </div>                                   
                                                <div class="row" style="height:45px; position: relative; top: 12px;">
                                                      <div style="background-color:#ffffff; width: 45px; margin-right: auto; padding: 1px; border-radius: 29px; margin-left: auto; border: 2px solid white; position: relative; top: 16px;"><p style=" font-weight: 600; text-align: center; position: relative; bottom: 5px;"><?php echo prix_pour_la_page_reservation_et_livraison_get_meta( 'prix_pour_la_page_reservation_et_livraison_prix_2_normal_' ); ?>€</p></div>

                                                  <div class="col s6 m6 l6 " style="border: 2px solid white; background-color: #abd3a6; border-radius: 14px; ">
                                                      <a href="" class="snipcart-add-item" data-item-id="<?php the_ID();?>" data-item-url="<?php bloginfo('url'); ?>/commander-en-ligne/" data-item-description="<?php the_excerpt(); ?>" 
                                                         data-item-price="<?php echo prix_pour_la_page_reservation_et_livraison_get_meta( 'prix_pour_la_page_reservation_et_livraison_prix_2_normal_' ); ?>" data-item-name="<?php the_title();?>" style="margin-right: auto; margin-left: auto; display: block;">
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
      
      
          <div class="row">               
            <h5 onclick="showprice('cat3');" style=" font-weight: 700; text-align: center; border: 2px dotted; padding: 7px; width: 129px; margin-right: auto; margin-left: auto;"><?php  echo get_cat_name(1);?></h5>
            <div class="col s12 cat3" style="background-color:; display: none;">
                              <?php
                                 $args = array('post_per_page' => -1,
                                   'post_type' => 'commande_en_lignes', 'cat' => 1,);
                                  $category = new WP_Query($args);
                                  while (  $category -> have_posts() ) : $category -> the_post(); ?>
                                      <!-- debut card -->
                                   <div class="col s12 m6 l2 <?php echo restriction_get_meta( 'restriction_soja' );?> <?php echo restriction_get_meta( 'restriction_gluten' );?> <?php echo restriction_get_meta( 'restriction_produits_laitiers' );?>
                                                    <?php echo restriction_get_meta( 'restriction_poisson' );?> <?php echo restriction_get_meta( 'restriction_viande' );?>" style="background-color:;padding-top: 50px; padding-bottom: 25px;">
                                          <div style="padding-left: 12px; background-color: ; z-index:999; width: 117px; margin-left: auto; margin-right: auto;" class=" circle-photo">
                                               <div data-position="top" data-delay="50" data-tooltip='<?php the_title();?>' class="tooltipped circle-cat"  class=" z-depth-3" style="  border: 4px solid white; background-color: green; height: 100px; width: 100px; border-radius: 50%; overflow:hidden;"><img style="width: 100px;
                                                  height: 100px;"<?php the_post_thumbnail('medium-thumbnails'); ?>>
                                               </div> 
                                           </div>                                   
                                                <div class="row" style="height:45px; position: relative; top: 12px;">
                                                      <div style="background-color:#ffffff; width: 45px; margin-right: auto; padding: 1px; border-radius: 29px; margin-left: auto; border: 2px solid white; position: relative; top: 16px;"><p style=" font-weight: 600; text-align: center; position: relative; bottom: 5px;"><?php echo prix_pour_la_page_reservation_et_livraison_get_meta( 'prix_pour_la_page_reservation_et_livraison_prix_2_normal_' ); ?>€</p></div>

                                                  <div class="col s6 m6 l6 " style="border: 2px solid white; background-color: #abd3a6; border-radius: 14px; ">
                                                      <a href="" class="snipcart-add-item" data-item-id="<?php the_ID();?>" data-item-url="<?php bloginfo('url'); ?>/commander-en-ligne/" data-item-description="<?php the_excerpt(); ?>" 
                                                         data-item-price="<?php echo prix_pour_la_page_reservation_et_livraison_get_meta( 'prix_pour_la_page_reservation_et_livraison_prix_2_normal_' ); ?>" data-item-name="<?php the_title();?>" style="margin-right: auto; margin-left: auto; display: block;">
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
 
  <p style=" width: 45px; font-size: 1em; text-align: center; margin-left: auto; margin-right: auto; position: relative; top: -4px;"><i class="material-icons" style="font-size: 26px!important;">expand_less</i>Ou<i class="material-icons" style="font-size: 26px!important;">expand_more</i></p>
      
       <div class="row">                  
         <h5 onclick="showprice('cat4');" style=" font-weight: 700; text-align: center; border: 2px dotted; padding: 7px; width: 129px; margin-right: auto; margin-left: auto;"><?php  echo get_cat_name(8);?></h5>
            <div class="col s12 cat4" style="background-color:; display: none;">
                              <?php
                                 $args = array('post_per_page' => -1,
                                   'post_type' => 'commande_en_lignes', 'cat' => 8,);
                                  $category = new WP_Query($args);
                                  while (  $category -> have_posts() ) : $category -> the_post(); ?>
                                      <!-- debut card -->
                                   <div class="col s12 m6 l2 <?php echo restriction_get_meta( 'restriction_soja' );?> <?php echo restriction_get_meta( 'restriction_gluten' );?> <?php echo restriction_get_meta( 'restriction_produits_laitiers' );?>
                                                    <?php echo restriction_get_meta( 'restriction_poisson' );?> <?php echo restriction_get_meta( 'restriction_viande' );?>" style="background-color:;padding-top: 50px; padding-bottom: 25px;">
                                          <div style="padding-left: 12px; background-color: ; z-index:999; width: 117px; margin-left: auto; margin-right: auto;" class=" circle-photo">
                                               <div data-position="top" data-delay="50" data-tooltip='<?php the_title();?>' class="tooltipped circle-cat"  class=" z-depth-3" style="  border: 4px solid white; background-color: green; height: 100px; width: 100px; border-radius: 50%; overflow:hidden;"><img style="width: 100px;
                                                  height: 100px;"<?php the_post_thumbnail('medium-thumbnails'); ?>>
                                               </div> 
                                           </div>                                   
                                                <div class="row" style="height:45px; position: relative; top: 12px;">
                                                      <div style="background-color:#ffffff; width: 45px; margin-right: auto; padding: 1px; border-radius: 29px; margin-left: auto; border: 2px solid white; position: relative; top: 16px;"><p style=" font-weight: 600; text-align: center; position: relative; bottom: 5px;"><?php echo prix_pour_la_page_reservation_et_livraison_get_meta( 'prix_pour_la_page_reservation_et_livraison_prix_2_normal_' ); ?>€</p></div>

                                                  <div class="col s6 m6 l6 " style="border: 2px solid white; background-color: #abd3a6; border-radius: 14px; ">
                                                      <a href="" class="snipcart-add-item" data-item-id="<?php the_ID();?>" data-item-url="<?php bloginfo('url'); ?>/commander-en-ligne/" data-item-description="<?php the_excerpt(); ?>" 
                                                         data-item-price="<?php echo prix_pour_la_page_reservation_et_livraison_get_meta( 'prix_pour_la_page_reservation_et_livraison_prix_2_normal_' ); ?>" data-item-name="<?php the_title();?>" style="margin-right: auto; margin-left: auto; display: block;">
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
</div>  



