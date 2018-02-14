<?php 

// Si envoyé, analyser les données du formulaire et les stockers dans les variables.
if(isset($_POST['submit'])) {

$name = htmlspecialchars($_POST['Nom_du_client']);
$mail = htmlspecialchars($_POST['E-mail_du_client']);
$date = htmlspecialchars($_POST['Date']);
$horaire = htmlspecialchars($_POST['Tranche_horaire']);
$menu = htmlspecialchars($_POST['menu']);

// Mosaik Créer un fichier de type 'contact'
$location_post = array(
'post_title' =>  "$name || $mail",
'post_content' => "  Nom du client :  $name 
                  -----------------------
                  Email du client : $mail  
                  -----------------------
                  Date : $date
                  -----------------------
                  Tranche horaire : $horaire 
                  -----------------------
                  Menu : $menu " ,
'post_type' => "reservation",
'post_status' => "publish"
  );
wp_insert_post($location_post);
}

?>

<div class="globale-title1" style=" top: 120px; position: relative;  ">
    <img src="<?php bloginfo('stylesheet_directory'); ?>/img/hot-soup-bowl2.png" style="width: 85px;
       
    position: absolute;
    top: -5px;
    transform: translate(-50%);
    left: 50%;"> 
</div>    

<form action="https://formspree.io/pascal.webdesigner@gmail.com" method="POST" style="position: relative;top: 90px;">
  
  <!-- Modal Structure -->
          <div id="modal11" class="modal">
            <div class="modal-content" style="margin-top: 45px;">
                      <div class="row" >
                        <div class="col s12  m12 l4 ">                  
                           <a onclick="toggleByClass('soja')" class="collection-item" style="top: 150px; padding: 7px 25px; border: 2px solid; background-color: #ffffff54!important; font-weight: 800!important;     border-radius: 20px; margin-right: auto; margin-left: auto; display: block;">SOJA</a>
                        </div>
                        <div class="col s12 m12 l4">              
                           <a onclick="toggleByClass('gluten')" class="collection-item" style="top: 150px; padding: 7px 25px; border: 2px solid; background-color: #ffffff54!important; font-weight: 800!important; border-radius: 20px; margin-right: auto; margin-left: auto; display: block;">GLUTEN</a>
                        </div>
                        <div class="col s12 m12 l4 ">
                             <a onclick="toggleByClass('produits-laitiers')" class="collection-item" style="border-radius: 20px; top: 150px; padding: 7px 25px; border: 2px solid; background-color: #ffffff54!important; font-weight: 800!important; margin-right: auto; margin-left: auto; display: block;">PRODUIT LAITIERS</a> 
                        </div>
                      </div>

                      <!-- Suite bouton -->

                      <div class="row" style="width: 70%;" >
                          <div class="col s12  m12 l4">
                              <a onclick="toggleByClass('poisson')" class="collection-item" style="top: 150px; padding: 7px 25px;border-radius: 20px; border: 2px solid; background-color: #ffffff54!important; font-weight: 800!important; margin-right: auto; margin-left: auto; display: block;">POISSON</a>
                          </div>
                          <div class="col s12 m12 l4">
                               <a onclick="toggleByClass('viande')" class="collection-item" style="top: 150px; padding: 7px 25px;  border-radius: 20px; border: 2px solid; background-color: #ffffff54!important; font-weight: 800!important; margin-right: auto; margin-left: auto; display: block;">VIANDE</a>
                          </div>
                      </div>
            </div>
                      <!--Button Close-->
                       <a class="modal-action modal-close" style="position: relative; float: right; bottom: 204px;
                    padding-right: 20px;"><span style="font-size: 1.5em; color:#000;">X</span></a>
          </div>

              <!-- Modal Structure -->
              <div id="modal10" class="modal modale modal-trigger" style="background-color: #4ab794e0!important; border-radius: 45px!important;">
                
                <!-- fermeture modale -->
                <a class="modal-action modal-close" style="position: absolute; right: 0px;top: 3%; margin-right: 32px; z-index: 99;"><span style="font-size: 1.5em; color:#fff;">X</span></a>
                

                  <img src="<?php bloginfo('stylesheet_directory'); ?>/img/SO-LUNCH-EMBLEME-01.png" style="height: 107px; width: 107px; position: absolute; z-index: 99;transform: translate(-50%); left: 50%;
                      background-color: white; border-radius: 35px; top: 52px; border-bottom: 5px solid;">

                <div class="modal-content" style="position: relative; bottom: 20px; height: 127px; background-color: #1f866996;">
                      <div class="row" style=" position: relative; top: 140px;">
                        <div class=" input-field col s12">
                          
                          <input  id="first_name" type="text" name="Nom_du_client" class="validate" style="border-bottom: 2px solid #000!important;">
                          <label for="first_name">Nom</label>
                         
                        </div>
                        <div class=" input-field col s12">
                          
                          <input id="email" type="email" name="E-mail_du_client" class="validate" style="border-bottom: 2px solid #000!important;">
                          <label for="email">E-mail</label>

                        </div>
                        <?php 
                        // https://www.youtube.com/watch?v=BYNLXZyn9NU
                        $aujourdhui = date( ' d / m / Y' );
                        $demain = date( ' d / m / Y', time()+(24*3600) );
                        $jour2 = date( ' d / m / Y', time()+(48*3600) );
                        $jour3 = date( ' d / m / Y', time()+(72*3600) );
                        $jour4 = date( ' d / m / Y ', time()+(96*3600) );
                        $jour5 = date( ' d / m / Y ', time()+(120*3600) );
                        $jour6 = date( ' d / m / Y ', time()+(144*3600) );
                        
                        ?>
                        <div class="col s12 m12 l6">     
                          <div class="input-field col s12">
                            <select  id="jour" name="jour">
                              <option value="<?php echo $aujourdhui;?>">Aujourd'hui</option>
                              <option value="<?php echo $demain;?>">Demain</option>
                              <option value="<?php echo $jour2;?>"><?php echo $jour2;?></option>
                              <option value="<?php echo $jour3;?>"><?php echo $jour3;?></option>
                              <option value="<?php echo $jour4;?>"><?php echo $jour4;?></option>
                              <option value="<?php echo $jour5;?>"><?php echo $jour5;?></option>
                            </select>
                            <label>Jours <span style="color:red;">(Fermé le Dimanche et jours fériés) <span></label>
                          </div>
                       </div>
                        
                        <div class="col s12 m12 l6">   
                          <div class="input-field col s12">
                            <select id="heure" name="heure">
                              <option value="12_30">12:30 - 12:45</option>
                              <option value="12_45">12:45 - 13:00</option>
                              <option value="13_00">13:00 - 13:15</option>
                              <option value="13_15">13:15 - 13:30</option>
                              <option value="13_30">13:30 - 13:45</option>
                              <option value="13_45">13:45 - 14:00</option>
                              <option value="14_00">14:00 - 14:15</option>
                              <option value="14_15">14:15 - 14:30</option>
                              <option value="14_30">14:30 - 14:45</option>
                              <option value="14_45">14:45 - 15:00</option>
                              <option value="15_00">15:00 - 15:15</option>
                              <option value="15_15">15:15 - 15:30</option>
                              <option value="15_30">15:30 - 15:45</option>
                              <option value="18_00">18:00 - 18:15</option>
                              <option value="18_15">18:15 - 18:30</option>
                              <option value="18_30">18:30 - 18:45</option>
                              <option value="18_45">18:45 - 19:00</option>
                              <option value="19_00">19:00 - 19:15</option>
                            </select>
                            <label>Horaires</label>
                          </div>
                        </div>  
                            
                        <div class="col s12 m12 l6">
                            <div class="input-field col s12">
                              <select id="point d'enlèvement" name="point d'enlèvement">
                                <option value="So Lunch restaurant">So Lunch restaurant</option>
                              </select>
                              <label>-- Point d'enlèvement --</label>
                            </div>
                        </div>
                        
                      </div>
                      <!-- buton valider -->
                       <div class="col s12 l12 " style="top: 130px;
    position: relative;">
                         <input style="border: 2px solid; font-weight: 800!important; margin-left: auto; display: block; background-color: #7bb6a4;
                         margin-right: auto;" type="submit" class="btn" value="Valider" target="_blank" style="font-family: 'Josefin Sans', sans-serif; transform: translate(-50%); left: 50%;  position: absolute;">
                         <input type="hidden" name="_next" value="//site.io/thanks.html" />
                         <input type="hidden" name="_subject" value="Nouvelle réservation client!"/>
                         <input type="hidden" name="_cc" value="" />
                         <input type="hidden" name="_cc" value="another@email.com,yetanother@email.com" />
                         <input type="text" name="_gotcha" style="display:none" />
                    </div>
                </div>
              </div> 
              <!-- fin modale -->
              <div>

                  <div class="row" style="width: 300px;position: relative; top: 152px;z-index: 1000;">
                    <div class="col s12 l6">
                      
                    <a class="modal-trigger" href="#modal10" style="top: 150px; padding: 7px 25px; border: 2px solid; background-color: #ffffff54!important; font-weight: 800!important; margin-right: auto; margin-left: auto; display: block;">RÉSERVER</a> 

                    </div>
                    <div class="col s12 l6">  

                    <a data-position="top" data-delay="50" data-tooltip='Indiquez vos restrictions alimentaires'  class="waves-effect modal-trigger tooltipped" href="#modal11" style="    background-color: rgba(171, 211, 166, 0); padding: 7px 42px;z-index: 999;
                      border: 2px solid white; color: #fff;">DIET</a>

                    <!-- restriction transform: translate(-50%); position: absolute; left: 50%;-->
                    <!-- <a style="background-color: rgba(171, 211, 166, 0); z-index: 999;  margin-right: auto; margin-left: auto; display: block; border: 2px solid;" class='dropdown-button restriction btn' href='#' data-activates='dropdown1'><span style=" margin-right: 45px;">Diet<span><i style="font-size: 1.9rem!important; position: absolute; bottom: -3px; right: 7px;" class="large material-icons">arrow_drop_down</i> --><!-- <i class="large material-icons" style="    font-size: 2.4rem!important;">visibility_off</i> --><!-- </a> -->
                </div>    

                    </div>
                  </div>
                    
      <div class="row global-tab" style="position: relative; top: 55px;">
             
    <div class="global-tab-mobile" style="    position: relative;
    bottom: 155px;">

      <ul class="tabs " id="tab2" style="overflow: hidden;
    height: 500pximportant;
    transform: translate(-50%)!important;
    left: 50%!important;
    position: absolute!important;
    width: 100%;
    top: 215px!important;">

        <div class="row hide-on-med-and-down" style="width: 100%; height: 400px!important;">
              <div class=" col s12 m12 l10" style="transform: translate(-50%)!important; left: 50%!important; position: absolute!important;">
                <div class="global-tab2" style="transform: translate(-50%)!important;
    left: 50%!important;
    position: absolute!important;
    width: 787px;
    padding-left: 45px;
    top: 96px;">
   
                  <div class=" col s12 l2" style="background-color: #abd3a7; height: 70px; width: 70px; border-radius: 80%; margin-right: 35px;">
                    <a href="#g0" data-position="top" data-delay="50" data-tooltip='<?php  echo get_cat_name(1);?>' class="tooltipped"><!-- <h6 style="text-align: center;">base</h6> -->
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/img/check.png" style="width: 45px; top: 14px; position: relative;" ></a>
                  </div>

                  <div class=" col s12 l2" style="background-color: #abd3a7; height: 70px; width: 70px; border-radius: 80%; margin-right: 35px;">
                    <a href="#g1" data-position="top" data-delay="50" data-tooltip='<?php  echo get_cat_name(3);?>' class="tooltipped"><!-- <h6 style="text-align: center;">Les Veggies</h6> -->
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/img/check.png" style="width: 45px; top: 14px; position: relative;" ></a>
                  </div>
                  <div class="tab col  s12 l2" style="background-color: #abd3a7; height: 70px; width: 70px; border-radius: 80%; margin-right: 35px;">
                    <a href="#g2" data-position="top" data-delay="50" data-tooltip='<?php  echo get_cat_name(4);?>' class="tooltipped" >
                    <!-- proteine -->
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/img/check.png" style="width: 45px;top: 15px;position: relative;right: 10px;"></a>
                  </div>
                  <div class=" col s12 l2" style="background-color: #abd3a7;  height: 70px; width: 70px; border-radius: 80%; margin-right: 35px;">
                    <a href="#g3" data-position="top" data-delay="50" data-tooltip='<?php  echo get_cat_name(5);?>' class="tooltipped"><!-- <h6 style="text-align: center;">Les graines et les Noix</h6> -->
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/img/check.png" style="width: 45px; top: 14px; position: relative;"></a>
                  </div>
                  <div class=" col s12 l2" style="background-color: #abd3a7; height: 70px; width: 70px; border-radius: 80%; margin-right: 35px;">
                    <a href="#g4"  data-position="top" data-delay="50" data-tooltip='<?php  echo get_cat_name(6);?>' class="tooltipped" ><!-- <h6 style="text-align: center;">Les plus</h6> -->
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/img/check.png" style="width: 45px; top: 14px; position: relative;"></a>
                  </div>
                  <div class=" col s12 l2" style="background-color: #abd3a7; height: 70px; width: 70px; border-radius: 80%; margin-right: 35px;">
                    <a href="#g5" data-position="top" data-delay="50" data-tooltip='<?php  echo get_cat_name(7);?>' class="tooltipped"><!-- <h6 style="text-align: center;">Les Assaisonnements  <span style="position: relative; top: 25px;
                    right: 145px;">Boissons & Smooties</span></h6>  -->
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/img/check.png" style="width: 45px; top: 14px; position: relative;" ></a>
                  </div>
                  <div class="col s12 l2" style="background-color: #abd3a7; height: 70px; width: 70px; border-radius: 80%; margin-right: 35px;">
                    <a href="#g6" data-position="top" data-delay="50" data-tooltip='<?php  echo get_cat_name(8);?>' class="tooltipped"><!-- <h6 style="text-align: center;">Desserts</h6> -->
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/img/check.png" style="width: 45px; top: 14px; position: relative;"></a>
                  </div>
              </div>     
            </div>     
          </div>
        


         <!-- Version mobile -->
          <div class="row hide-on-large-only reservation-emporter" style="width: 100%; height: 400px!important; ">

              <div>
                <ul class="row emporter-mobile" style="">
                <!-- base -->
                  <li class="z-depth-3 col s12" style="background-color: white; padding: 25px;
                  text-align: center;"><a href="#g0"><?php  echo get_cat_name(1);?></a></li>
                  <!-- veggies -->
                  <li class="z-depth-3 col s12" style="background-color: white; padding: 25px;
                  text-align: center;"><a href="#g1"><?php  echo get_cat_name(2);?></a></li>
                  <div class="divider"></div>
                  <!-- proteine -->
                  <li  class="z-depth-3 col s12" style="background-color: white; padding: 25px;
                  text-align: center;"><a href="#g2"><?php  echo get_cat_name(3);?></a></li>
                  <div class="divider"></div>
                  <!-- graines -->
                  <li  class="z-depth-3 col s12" style="background-color: white; padding: 25px;
                  text-align: center;"><a href="#g3"><?php  echo get_cat_name(4);?></a></li>
                  <div class="divider"></div>
                  <!-- pluss -->
                  <li  class="z-depth-3 col s12" style="background-color: white; padding: 25px;
                  text-align: center;"><a href="#g4"><?php  echo get_cat_name(5);?></a></li>
                  <div class="divider"></div>
                  <!-- boisson smoothie -->
                  <li  class="z-depth-3 col s12" style="background-color: white; padding: 25px;
                  text-align: center;"><a href="#g5"><?php  echo get_cat_name(6);?></a></li>
                  <div class="divider"></div>
                  <!-- dessert -->
                 <li  class="z-depth-3 col s12" style="background-color: white; padding: 25px;
                  text-align: center;"><a href="#g5"><?php  echo get_cat_name(7);?></a></li>
                </ul>
              </div> 
                          
          </div>

          <div class="row first-tab hide-on-large-only">
              <li class="tab col  l2"><a class="active" href="#g0">hdh</a></li>
              <li class="tab col  l2"><a href="#g1">hdh</a></li>
              <li class="tab col  l2"><a href="#g2">Test 2</a></li>
              <li class="tab col l2"><a href="#g3">Test3</a></li>
              <li class="tab col l2"><a href="#g4">Test 4</a></li>
              <li class="tab col  l2"><a href="#g5">Test5</a></li>
              <li class="tab col l2"><a href="#g6">Test 6</a></li>
          </div>    
      </ul>

     <!--  <ul class="collection dropdown-content1" id='dropdown1'>
          <li onclick="toggleByClass('soja')" class="collection-item">Soja</li>
          <li onclick="toggleByClass('gluten')" class="collection-item">Gluten</li>
          <li onclick="toggleByClass('produits-laitiers')" class="collection-item">Produit Laitiers</li>
          <li onclick="toggleByClass('poisson')" class="collection-item">Poisson</li>
          <li onclick="toggleByClass('viande')" class="collection-item">Viande</li>
      </ul> -->
      
 
     <!--    Snipped de prix      -->
     <div class="globale-snipped-price" style=" top: 420px;position: relative;"> 
         <!-- base -->
          <?php
                 $args = array('post_per_page' => -1,
                   'post_type' => 'commande_en_lignes', 'cat' => 1,);
                  $category = new WP_Query($args);
                  while (  $category -> have_posts() ) : $category -> the_post(); ?>  

                        <div id="<?php the_title();?>" style="display: none; background-color: #FFF;" class="chip" >
                          <?php the_post_thumbnail('medium-thumbnails'); ?>
                          <span style=" font-family: 'Muli', sans-serif;"><span style="display:none;"><?php the_title();?></span> 
                            <?php echo prix_pour_la_page_reservation_et_livraison_get_meta( 'prix_pour_la_page_reservation_et_livraison_title' ); ?> : <?php echo prix_pour_la_page_reservation_et_livraison_get_meta( 'prix_pour_la_page_reservation_et_livraison_prix_2_normal_' ); ?>€</span > 
                        </div> 

           <?php endwhile;?> 
      
         <!-- veggies -->
          <?php
                 $args = array('post_per_page' => -1,
                   'post_type' => 'commande_en_lignes', 'cat' => 3,);
                  $category = new WP_Query($args);
                  while (  $category -> have_posts() ) : $category -> the_post(); ?>  

                        <div  id="veggies-<?php the_title();?>" style="display: none; background-color: #FFF;" class="chip">
                          <?php the_post_thumbnail('medium-thumbnails'); ?>
                          <span  style=" font-family: 'Muli', sans-serif;"><span style="display:none;"><?php the_title();?></span> 
                            <?php echo prix_pour_la_page_reservation_et_livraison_get_meta( 'prix_pour_la_page_reservation_et_livraison_title' ); ?> : <?php echo prix_pour_la_page_reservation_et_livraison_get_meta( 'prix_pour_la_page_reservation_et_livraison_prix_2_normal_' ); ?>€</span >  
                        </div> 

           <?php endwhile;?> 
      
      <!-- proteine -->
         <?php
                 $args = array('post_per_page' => -1,
                   'post_type' => 'commande_en_lignes', 'cat' => 4,);
                  $category = new WP_Query($args);
                  while (  $category -> have_posts() ) : $category -> the_post(); ?>  

                        <div  id="proteine-<?php the_title();?>" style="display: none; background-color: #FFF;" class="chip">
                          <?php the_post_thumbnail('medium-thumbnails'); ?>
                          <span  style=" font-family: 'Muli', sans-serif;"><span style="display:none;"><?php the_title();?></span> 
                            <?php echo prix_pour_la_page_reservation_et_livraison_get_meta( 'prix_pour_la_page_reservation_et_livraison_title' ); ?> : <?php echo prix_pour_la_page_reservation_et_livraison_get_meta( 'prix_pour_la_page_reservation_et_livraison_prix_2_normal_' ); ?>€</span > 
                        </div> 

           <?php endwhile;?> 
      
      <!-- grainesetnoix -->
         <?php
                 $args = array('post_per_page' => -1,
                   'post_type' => 'commande_en_lignes', 'cat' => 5,);
                  $category = new WP_Query($args);
                  while (  $category -> have_posts() ) : $category -> the_post(); ?>  

                        <div  id="grainesetnoix-<?php the_title();?>" style="display: none; background-color: #FFF;" class="chip">
                          <?php the_post_thumbnail('medium-thumbnails'); ?>
                           <span  style=" font-family: 'Muli', sans-serif;"><span style="display:none;"><?php the_title();?></span> 
                            <?php echo prix_pour_la_page_reservation_et_livraison_get_meta( 'prix_pour_la_page_reservation_et_livraison_title' ); ?> : <?php echo prix_pour_la_page_reservation_et_livraison_get_meta( 'prix_pour_la_page_reservation_et_livraison_prix_2_normal_' ); ?>€</span> 
                        </div> 

           <?php endwhile;?>
      
      <!-- plus -->
         <?php
                 $args = array('post_per_page' => -1,
                   'post_type' => 'commande_en_lignes', 'cat' => 6,);
                  $category = new WP_Query($args);
                  while (  $category -> have_posts() ) : $category -> the_post(); ?>  

                        <div  id="plus-<?php the_title();?>" style="display: none; background-color: #FFF;" class="chip">
                          <?php the_post_thumbnail('medium-thumbnails'); ?>
                           <span  style=" font-family: 'Muli', sans-serif;"><span style="display:none;"><?php the_title();?></span> 
                            <?php echo prix_pour_la_page_reservation_et_livraison_get_meta( 'prix_pour_la_page_reservation_et_livraison_title' ); ?> : <?php echo prix_pour_la_page_reservation_et_livraison_get_meta( 'prix_pour_la_page_reservation_et_livraison_prix_2_normal_' ); ?>€</span > 
                        </div> 

           <?php endwhile;?>
      
       <!-- boissons-smoothies -->
        <?php
                 $args = array('post_per_page' => -1,
                   'post_type' => 'commande_en_lignes', 'cat' => 7,);
                  $category = new WP_Query($args);
                  while (  $category -> have_posts() ) : $category -> the_post(); ?>  

                        <div  id="boissons-smoothies-<?php the_title();?>" style="display: none; background-color: #FFF;" class="chip">
                          <?php the_post_thumbnail('medium-thumbnails'); ?>
                          <span style="font-family: 'Muli', sans-serif;"><span style="display:none;"><?php the_title();?></span> 
                            <?php echo prix_pour_la_page_reservation_et_livraison_get_meta( 'prix_pour_la_page_reservation_et_livraison_title' ); ?> : <?php echo prix_pour_la_page_reservation_et_livraison_get_meta( 'prix_pour_la_page_reservation_et_livraison_prix_2_normal_' ); ?>€</h5>  
                        </div> 

           <?php endwhile;?>
      
      <!-- dessert -->
      <?php
                 $args = array('post_per_page' => -1,
                   'post_type' => 'commande_en_lignes', 'cat' => 8,);
                  $category = new WP_Query($args);
                  while (  $category -> have_posts() ) : $category -> the_post(); ?>  

                        <div  id="dessert-<?php the_title();?>" style="display: none; background-color: #FFF;" class="chip">
                          <?php the_post_thumbnail('medium-thumbnails'); ?>
                           <span style=" font-family: 'Muli', sans-serif;"><span style="display:none;"><?php the_title();?></span> 
                            <?php echo prix_pour_la_page_reservation_et_livraison_get_meta( 'prix_pour_la_page_reservation_et_livraison_title' ); ?> : <?php echo prix_pour_la_page_reservation_et_livraison_get_meta( 'prix_pour_la_page_reservation_et_livraison_prix_2_normal_' ); ?>€</h5>   
                        </div> 

           <?php endwhile;?>
      
      </div>
      
       


    </div>
    <div class="first-tab2" style="position: relative; border: 2px solid white; top: 292px;">
      <div id="g0" class="col s12">
         <?php
   // <!-- debut loop base -->
                       $args = array('post_per_page' => -1,
                         'post_type' => 'commande_en_lignes', 'cat' => 1,);
                        $category = new WP_Query($args);
                        while (  $category -> have_posts() ) : $category -> the_post(); ?>
                         <!-- debut card -->
                          <div class="col s12 m4 l2" style="background-color:;padding-top: 50px; padding-bottom: 25px; border-bottom: 2px dotted #fff; border-right: 2px dotted #fff;">
                                <div style="background-color: ; z-index:999; width: 117px; margin-left: auto; margin-right: auto;" class=" circle-photo <?php echo restriction_get_meta( 'restriction_soja' );?> <?php echo restriction_get_meta( 'restriction_gluten' );?> <?php echo restriction_get_meta( 'restriction_produits_laitiers' );?>
                                          <?php echo restriction_get_meta( 'restriction_poisson' );?> <?php echo restriction_get_meta( 'restriction_viande' );?>">
                                     <div data-position="top" data-delay="50" data-tooltip='<?php echo prix_pour_la_page_reservation_et_livraison_get_meta( 'prix_pour_la_page_reservation_et_livraison_title' ); ?>' class="tooltipped"  class=" z-depth-3" style="    border: 4px solid white; background-color: green; height: 100px; width: 100px; border-radius: 50%; overflow:hidden;"><img style="width: 100px;
                                          height: 100px;"<?php the_post_thumbnail('medium-thumbnails'); ?> 
                                     </div> 
                                     <div class="switch" style="width: 140px; margin-right: auto; margin-left: auto; margin-top: 17px; margin-left: 4px;">
                                              <label style="font-family: 'Josefin Sans', sans-serif; color: white;">
                                                0 €
                                                <input class="<?php the_title();?>" type="checkbox" name="menu[]" value="<?php echo prix_pour_la_page_reservation_et_livraison_get_meta( 'prix_pour_la_page_reservation_et_livraison_title' ); ?>">
                                                <span class="lever"></span>
                                                <?php echo prix_pour_la_page_reservation_et_livraison_get_meta( 'prix_pour_la_page_reservation_et_livraison_prix_2_normal_' ); ?>€
                                              </label>
                                     </div>
                                 </div>    
                                  <div id="<?php the_title();?>" style="display: none;"><?php the_title();?></div>
                                     <script>
                                            $(".<?php the_title();?>").click(function() {
                                            $(this).toggleClass("on");
                                            $("#<?php the_title();?>").slideToggle();
                                          });
                                    </script>

                          </div>   
                          <!-- fin Card --> 
                        <?php endwhile;?>  
                      <!-- debut loop -->  
      </div>

      <div id="g1" class="col s12">
         <?php
   // <!-- debut loop veggies -->
                       $args = array('post_per_page' => -1,
                         'post_type' => 'commande_en_lignes', 'cat' => 3,);
                        $category = new WP_Query($args);
                        while (  $category -> have_posts() ) : $category -> the_post(); ?>
                            <!-- debut card -->
                          <div class="col s12 m4 l2" style="background-color:;padding-top: 50px; padding-bottom: 25px; border-bottom: 2px dotted #fff; border-right: 2px dotted #fff;">
                                <div style="background-color: ; z-index:999; width: 117px; margin-left: auto; margin-right: auto;" class=" circle-photo <?php echo restriction_get_meta( 'restriction_soja' );?> <?php echo restriction_get_meta( 'restriction_gluten' );?> <?php echo restriction_get_meta( 'restriction_produits_laitiers' );?>
                                          <?php echo restriction_get_meta( 'restriction_poisson' );?> <?php echo restriction_get_meta( 'restriction_viande' );?>">
                                     <div data-position="top" data-delay="50" data-tooltip='<?php echo prix_pour_la_page_reservation_et_livraison_get_meta( 'prix_pour_la_page_reservation_et_livraison_title' ); ?>' class="tooltipped"  class=" z-depth-3" style="    border: 4px solid white; background-color: green; height: 100px; width: 100px; border-radius: 50%; overflow:hidden;"><img style="width: 100px;
                                          height: 100px;"<?php the_post_thumbnail('medium-thumbnails'); ?> 
                                     </div> 
                                     <div class="switch" style="width: 140px; margin-right: auto; margin-left: auto; margin-top: 17px; margin-left: 4px;">
                                              <label style="font-family: 'Josefin Sans', sans-serif; color: white;">
                                                0 €
                                                <input class="veggies-<?php the_title();?>" type="checkbox" name="menu[]" value="<?php echo prix_pour_la_page_reservation_et_livraison_get_meta( 'prix_pour_la_page_reservation_et_livraison_title' ); ?>">
                                                <span class="lever"></span>
                                                <?php echo prix_pour_la_page_reservation_et_livraison_get_meta( 'prix_pour_la_page_reservation_et_livraison_prix_2_normal_' ); ?>€
                                              </label>
                                     </div>
                                 </div>     
                                  
                                
                                     <script>
                                            $(".veggies-<?php the_title();?>").click(function() {
                                            $(this).toggleClass("on");
                                            $("#veggies-<?php the_title();?>").slideToggle();
                                          });
                                    </script>
                          </div>   
                          <!-- fin Card -->
                        <?php endwhile;?>  
                      <!-- debut loop -->  
      </div>

      <div id="g2" class="col s12">
        <div class="row">
         <!-- debut loop proteine -->
           <?php
                       $args = array('post_per_page' => -1,
                         'post_type' => 'commande_en_lignes', 'cat' => 4,);
                        $category = new WP_Query($args);
                        while (  $category -> have_posts() ) : $category -> the_post(); ?>
                            <!-- debut card -->
                          <div class="col s12 m4 l2" style="background-color:;padding-top: 50px; padding-bottom: 25px; border-bottom: 2px dotted #fff; border-right: 2px dotted #fff;">
                                <div style="background-color: ; z-index:999; width: 117px; margin-left: auto; margin-right: auto;" class=" circle-photo <?php echo restriction_get_meta( 'restriction_soja' );?> <?php echo restriction_get_meta( 'restriction_gluten' );?> <?php echo restriction_get_meta( 'restriction_produits_laitiers' );?>
                                          <?php echo restriction_get_meta( 'restriction_poisson' );?> <?php echo restriction_get_meta( 'restriction_viande' );?>">
                                     <div data-position="top" data-delay="50" data-tooltip='<?php echo prix_pour_la_page_reservation_et_livraison_get_meta( 'prix_pour_la_page_reservation_et_livraison_title' ); ?>' class="tooltipped"  class=" z-depth-3" style="    border: 4px solid white; background-color: green; height: 100px; width: 100px; border-radius: 50%; overflow:hidden;"><img style="width: 100px;
                                          height: 100px;"<?php the_post_thumbnail('medium-thumbnails'); ?> 
                                     </div> 
                                     <div class="switch" style="width: 140px; margin-right: auto; margin-left: auto; margin-top: 17px; margin-left: 4px;">
                                              <label style="font-family: 'Josefin Sans', sans-serif; color: white;">
                                                0 €
                                                <input class="proteine-<?php the_title();?>" type="checkbox" name="menu[]" value="<?php echo prix_pour_la_page_reservation_et_livraison_get_meta( 'prix_pour_la_page_reservation_et_livraison_title' ); ?>">
                                                <span class="lever"></span>
                                                <?php echo prix_pour_la_page_reservation_et_livraison_get_meta( 'prix_pour_la_page_reservation_et_livraison_prix_2_normal_' ); ?>€
                                              </label>
                                     </div>
                                 </div>       
                                  
                                  <script>
                                            $(".proteine-<?php the_title();?>").click(function() {
                                            $(this).toggleClass("on");
                                            $("#proteine-<?php the_title();?>").slideToggle();
                                          });
                                    </script>
                          </div>   
                          <!-- fin Card --> 
                        <?php endwhile;?>  
                      <!-- debut loop -->
        </div>        
      </div>

      <div id="g3" class="col s12">
        <div class="row">
          <!-- debut loop grainesetnoix-->
           <?php
                       $args = array('post_per_page' => -1,
                         'post_type' => 'commande_en_lignes', 'cat' => 5,);
                        $category = new WP_Query($args);
                        while (  $category -> have_posts() ) : $category -> the_post(); ?>
                             <!-- debut card -->
                          <div class="col s12 m4 l2" style="background-color:;padding-top: 50px; padding-bottom: 25px; border-bottom: 2px dotted #fff; border-right: 2px dotted #fff;">
                                <div style="background-color: ; z-index:999; width: 117px; margin-left: auto; margin-right: auto;" class=" circle-photo <?php echo restriction_get_meta( 'restriction_soja' );?> <?php echo restriction_get_meta( 'restriction_gluten' );?> <?php echo restriction_get_meta( 'restriction_produits_laitiers' );?>
                                          <?php echo restriction_get_meta( 'restriction_poisson' );?> <?php echo restriction_get_meta( 'restriction_viande' );?>">
                                     <div data-position="top" data-delay="50" data-tooltip='<?php echo prix_pour_la_page_reservation_et_livraison_get_meta( 'prix_pour_la_page_reservation_et_livraison_title' ); ?>' class="tooltipped"  class=" z-depth-3" style="    border: 4px solid white; background-color: green; height: 100px; width: 100px; border-radius: 50%; overflow:hidden;"><img style="width: 100px;
                                          height: 100px;"<?php the_post_thumbnail('medium-thumbnails'); ?> 
                                     </div> 
                                     <div class="switch" style="width: 140px; margin-right: auto; margin-left: auto; margin-top: 17px; margin-left: 4px;">
                                              <label style="font-family: 'Josefin Sans', sans-serif; color: white;">
                                                0 €
                                                <input class="grainesetnoix-<?php the_title();?>" type="checkbox" name="menu[]" value="<?php echo prix_pour_la_page_reservation_et_livraison_get_meta( 'prix_pour_la_page_reservation_et_livraison_title' ); ?>">
                                                <span class="lever"></span>
                                                <?php echo prix_pour_la_page_reservation_et_livraison_get_meta( 'prix_pour_la_page_reservation_et_livraison_prix_2_normal_' ); ?>€
                                              </label>
                                     </div>
                                       
                                       <script>
                                            $(".grainesetnoix-<?php the_title();?>").click(function() {
                                            $(this).toggleClass("on");
                                            $("#grainesetnoix-<?php the_title();?>").slideToggle();
                                          });
                                    </script>
                                 </div>             
                          </div>   
                          <!-- fin Card --> 
                        <?php endwhile;?>  
                      <!-- debut loop -->        
        </div>
      </div>  


      <div id="g4" class="col s12">
        <div class="row">
           <!-- debut loop les plus -->
           <?php
                       $args = array('post_per_page' => -1,
                         'post_type' => 'commande_en_lignes', 'cat' => 6,);
                        $category = new WP_Query($args);
                        while (  $category -> have_posts() ) : $category -> the_post(); ?>
                            <!-- debut card -->
                          <div class="col s12 m4 l2" style="background-color:;padding-top: 50px; padding-bottom: 25px; border-bottom: 2px dotted #fff; border-right: 2px dotted #fff;">
                                <div style="background-color: ; z-index:999; width: 117px; margin-left: auto; margin-right: auto;" class=" circle-photo <?php echo restriction_get_meta( 'restriction_soja' );?> <?php echo restriction_get_meta( 'restriction_gluten' );?> <?php echo restriction_get_meta( 'restriction_produits_laitiers' );?>
                                          <?php echo restriction_get_meta( 'restriction_poisson' );?> <?php echo restriction_get_meta( 'restriction_viande' );?>">
                                     <div data-position="top" data-delay="50" data-tooltip='<?php echo prix_pour_la_page_reservation_et_livraison_get_meta( 'prix_pour_la_page_reservation_et_livraison_title' ); ?>' class="tooltipped"  class=" z-depth-3" style="    border: 4px solid white; background-color: green; height: 100px; width: 100px; border-radius: 50%; overflow:hidden;"><img style="width: 100px;
                                          height: 100px;"<?php the_post_thumbnail('medium-thumbnails'); ?> 
                                     </div> 
                                     <div class="switch" style="width: 140px; margin-right: auto; margin-left: auto; margin-top: 17px; margin-left: 4px;">
                                              <label style="font-family: 'Josefin Sans', sans-serif; color: white;">
                                                0 €
                                                <input class="plus-<?php the_title();?>" type="checkbox" name="menu[]" value="<?php echo prix_pour_la_page_reservation_et_livraison_get_meta( 'prix_pour_la_page_reservation_et_livraison_title' ); ?>">
                                                <span class="lever"></span>
                                                <?php echo prix_pour_la_page_reservation_et_livraison_get_meta( 'prix_pour_la_page_reservation_et_livraison_prix_2_normal_' ); ?>€
                                              </label>
                                     </div>
                                 </div> 
                                  
                                    <script>
                                            $(".plus-<?php the_title();?>").click(function() {
                                            $(this).toggleClass("on");
                                            $("#plus-<?php the_title();?>").slideToggle();
                                          });
                                    </script>
                          </div>   
                          <!-- fin Card --> 
                        <?php endwhile;?>  
                      <!-- debut loop -->
        </div>        
      </div>


      <div id="g5" class="col s12">
        <div class="row">
          <?php

   // <!-- debut loop a. et boissons-smoothies-->
                       $args = array('post_per_page' => -1,
                         'post_type' => 'commande_en_lignes', 'cat' => 7,);
                        $category = new WP_Query($args);
                        while (  $category -> have_posts() ) : $category -> the_post(); ?>
                             <!-- debut card -->
                          <div class="col s12 m4 l2" style="background-color:;padding-top: 50px; padding-bottom: 25px; border-bottom: 2px dotted #fff; border-right: 2px dotted #fff;">
                                <div style="background-color: ; z-index:999; width: 117px; margin-left: auto; margin-right: auto;" class=" circle-photo <?php echo restriction_get_meta( 'restriction_soja' );?> <?php echo restriction_get_meta( 'restriction_gluten' );?> <?php echo restriction_get_meta( 'restriction_produits_laitiers' );?>
                                          <?php echo restriction_get_meta( 'restriction_poisson' );?> <?php echo restriction_get_meta( 'restriction_viande' );?>">
                                     <div data-position="top" data-delay="50" data-tooltip='<?php echo prix_pour_la_page_reservation_et_livraison_get_meta( 'prix_pour_la_page_reservation_et_livraison_title' ); ?>' class="tooltipped"  class=" z-depth-3" style="    border: 4px solid white; background-color: green; height: 100px; width: 100px; border-radius: 50%; overflow:hidden;"><img style="width: 100px;
                                          height: 100px;"<?php the_post_thumbnail('medium-thumbnails'); ?> 
                                     </div> 
                                     <div class="switch" style="width: 140px; margin-right: auto; margin-left: auto; margin-top: 17px; margin-left: 4px;">
                                              <label style="font-family: 'Josefin Sans', sans-serif; color: white;">
                                                0 €
                                                <input class="boissons-smoothies-<?php the_title();?>" type="checkbox" name="menu[]" value="<?php echo prix_pour_la_page_reservation_et_livraison_get_meta( 'prix_pour_la_page_reservation_et_livraison_title' ); ?>">
                                                <span class="lever"></span>
                                                <?php echo prix_pour_la_page_reservation_et_livraison_get_meta( 'prix_pour_la_page_reservation_et_livraison_prix_2_normal_' ); ?>€
                                              </label>
                                     </div>
                                 </div>      
                                  
                                    <script>
                                            $(".boissons-smoothies-<?php the_title();?>").click(function() {
                                            $(this).toggleClass("on");
                                            $("#boissons-smoothies-<?php the_title();?>").slideToggle();
                                          });
                                    </script>
                          </div>   
                          <!-- fin Card --> 
                        <?php endwhile;?>  
                      <!-- debut loop -->

        </div>   
      </div>

      <div id="g6" class="col s12">  
        <div class="row">
         <?php

   // <!-- debut loop Dessert -->
                       $args = array('post_per_page' => -1,
                         'post_type' => 'commande_en_lignes', 'cat' => 8,);
                        $category = new WP_Query($args);
                        while (  $category -> have_posts() ) : $category -> the_post(); ?>
                            <!-- debut card -->
                          <div class="col s12 m4 l2" style="background-color:;padding-top: 50px; padding-bottom: 25px; border-bottom: 2px dotted #fff; border-right: 2px dotted #fff;">
                                <div style="background-color: ; z-index:999; width: 117px; margin-left: auto; margin-right: auto;" class=" circle-photo <?php echo restriction_get_meta( 'restriction_soja' );?> <?php echo restriction_get_meta( 'restriction_gluten' );?> <?php echo restriction_get_meta( 'restriction_produits_laitiers' );?>
                                          <?php echo restriction_get_meta( 'restriction_poisson' );?> <?php echo restriction_get_meta( 'restriction_viande' );?>">
                                     <div data-position="top" data-delay="50" data-tooltip='<?php echo prix_pour_la_page_reservation_et_livraison_get_meta( 'prix_pour_la_page_reservation_et_livraison_title' ); ?>' class="tooltipped"  class=" z-depth-3" style="    border: 4px solid white; background-color: green; height: 100px; width: 100px; border-radius: 50%; overflow:hidden;"><img style="width: 100px;
                                          height: 100px;"<?php the_post_thumbnail('medium-thumbnails'); ?> 
                                     </div> 
                                     <div class="switch" style="width: 140px; margin-right: auto; margin-left: auto; margin-top: 17px; margin-left: 4px;">
                                              <label style="font-family: 'Josefin Sans', sans-serif; color: white;">
                                                0 €
                                                <input class="dessert-<?php the_title();?>" type="checkbox" name="menu[]" value="<?php echo prix_pour_la_page_reservation_et_livraison_get_meta( 'prix_pour_la_page_reservation_et_livraison_title' ); ?>">
                                                <span class="lever"></span>
                                                <?php echo prix_pour_la_page_reservation_et_livraison_get_meta( 'prix_pour_la_page_reservation_et_livraison_prix_2_normal_' ); ?>€
                                              </label>
                                     </div>
                                       
                                       <script>
                                            $(".dessert-<?php the_title();?>").click(function() {
                                            $(this).toggleClass("on");
                                            $("#dessert-<?php the_title();?>").slideToggle();
                                          });
                                    </script>
                                 </div>             
                          </div>   
                          <!-- fin Card --> 
                        <?php endwhile;?>  
                      <!-- debut loop -->
        </div>   
      </div>
    </div>  
  </div>

</form>  

    <style> 

.switch label input[type=checkbox]:checked+.lever:after {
    background-color: #abd3a6!important;
}  
      .switch label input[type=checkbox]:checked+.lever {
    background-color: #ffffff!important;
        }
      
.circle-photo   {
  margin-left: 9px;
}
     
.modale{
  background-color: ;
  border-radius: 45px;
  width: 708px;
  height: 100%;
}
 

      
 @media screen and (max-width: 600px) {
  .modale{
    width: 100%!important;
}
}       

.button-collapse{
      margin-left: auto;
    margin-right: auto;
    display: block;
    width: 150px;
    position: relative;
    top: 246px;
    z-index: 99;
}

.side-nav .user-view .circle, .side-nav .userView .circle {
    height: 150px;
    width: 150px;
}

.globale-title1{
  position: relative;
  top: 135px;
}


.picker--opened .picker__holder{
      background: rgba(0, 0, 0, 0);
}

.picker__holder {
    width: 100%;
    overflow-y: visible;
    }

    .picker__wrap {
    position: relative;
    bottom: -90px;
}    

      

      @media screen and (max-width: 992px) {
  .global-tab{
    position: relative!important;
    margin-top: 45px!important;
}
        
  .globale-snipped-price {
    top: 800px!important;
}
            

.global-tab-mobile {
      position: relative;
    bottom: 222px;
}

.tabs{
  height: 300px!important;
  top: -90px!important;
  z-index: 10!important;
}
        
        

.dropdown {
  margin-right: auto;
  transform: translate(-50%); left: 50%; position: absolute;
  z-index: 999;
}

.dd-menu {
  z-index: 999!important;
}

.first-tab{
  display: none!important;
}
.first-tab2{
  position: relative!important;
    top:559px!important;

}
.form-input{
  width: 100%!important;
}

#dropdown-button{
  position: relative!important;
  top: 0px!important;
}

}

input[type=email]:not(.browser-default) {
    border-bottom: 1px solid #9e9e9e!important;
}
      /*  -----modeal----*/
.modalDialog {
    background: rgba(0, 0, 0, 0)!important;
}

.input-field label {
    color: #000000;
}

.tabs {
    background-color: rgba(255, 255, 255, 0);
}


.side-nav {
  background-color:#73a1a9;
}

.modalDialog > div {
    background: -webkit-linear-gradient(bottom, rgba(255, 255, 255, 0.35) 25%, rgba(255, 255, 255, 0.35) 63%)!important;
    background: -o-linear-gradient(bottom, rgba(255, 255, 255, 0.35) 25%, rgba(255, 255, 255, 0.35) 63%)!important;
    background: -moz-linear-gradient(bottom, rgba(255, 255, 255, 0.35) 25%, rgba(255, 255, 255, 0.35) 63%)!important;
    background: -webkit-linear-gradient(bottom, rgba(255, 255, 255, 0.35) 25%, rgba(255, 255, 255, 0.35) 63%)!important;
}

@media screen and (max-width: 992px) {
  .global-tab2{
  width: 250px!important;
  padding-left: 35px!important;
}
  
.first-tab2 {
    position: relative!important;
    top: 757px!important;
}
 
.tab{
height: 600px!important;
}                                                       
                                                        

#tab2{
height: 496px!important;
}
}
/*#reservation {
  position: relative!important;
  top: 45px!important;
}*/

@media screen and (max-width: 400px) {
  h4 {
    font-size: 1.8em!important;
}

}

.globale-title1{
   position: relative;
   top:  198px;
}
}
    </style>

 <?php
get_template_part( 'footer-for-page' );?>

     <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <!-- Compiled and minified JavaScript -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
<!--         <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.js"></script>
<script>
    (function($){
        $(window).on("load",function(){
            $(" .modal-trigger").mCustomScrollbar({
              theme: 'rounded-dark'
            });
        });
    })(jQuery);
</script>
 -->

<script>
        $(document).ready(function(){
           $(".button-collapse").sideNav();
             $('.datepicker').pickadate({
                selectMonths: true, // Creates a dropdown to control month
                selectYears: 15, // Creates a dropdown of 15 years to control year,
                today: 'Today',
                clear: 'Clear',
                close: 'Ok',
                closeOnSelect: false // Close upon selecting a date,
              });
              $('.timepicker').pickatime({
                default: 'now', // Set default time: 'now', '1:30AM', '16:30'
                fromnow: 0,       // set default time to * milliseconds from now (using with default = 'now')
                twelvehour: false, // Use AM/PM or 24-hour format
                donetext: 'OK', // text for done-button
                cleartext: 'Clear', // text for clear-button
                canceltext: 'Cancel', // Text for cancel-button
                autoclose: false, // automatic close timepicker
                ampmclickable: true, // make AM PM clickable
                aftershow: function(){} //Function for after opening timepicker
              });
        });
  
         $(document).ready(function() {
           $('select').material_select();
         });

</script>

<script>
  $(document).ready(function(){
    $('#modal11').modal();
    $('#modal10').modal();
  });
</script>
        
     
<script>         
function toggleByClass(className) {
     $("."+className).toggle();
}
</script>