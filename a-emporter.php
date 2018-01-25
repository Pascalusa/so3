<?php 

// Si envoyé, analyser les données du formulaire et les stockers dans les variables.
if(isset($_POST['submit'])) {

$name = htmlspecialchars($_POST['Nom_du_client']);
$mail = htmlspecialchars($_POST['E-mail_du_client']);
$date = htmlspecialchars($_POST['Date']);
$horaire = htmlspecialchars($_POST['Tranche_horaire']);
$bases = htmlspecialchars($_POST['Base']);
$veggies = htmlspecialchars($_POST['Veggies']);
$proteines = htmlspecialchars($_POST['Proteines']);
$graine = htmlspecialchars($_POST['graines']);
$plus = htmlspecialchars($_POST['Lesplus']);
$boisson = htmlspecialchars($_POST['boisson&smoothie']);
$dessert = htmlspecialchars($_POST['Desserts']);

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
                  Bases : $bases  
                  -----------------------
                  Véggies : $veggies 
                  -----------------------
                  Proteines : $proteines 
                  -----------------------
                  Graines et noix : $graine 
                  -----------------------
                  Les plus : $plus 
                  -----------------------
                  Assaisonnements-Boissons&Smoothie : $boisson 
                  -----------------------
                  Les desserts : $dessert" ,
'post_type' => "reservation",
'post_status' => "publish"
  );
wp_insert_post($location_post);
}

?>


<div class="globale-title1" style="  
">
    <img src="<?php bloginfo('stylesheet_directory'); ?>/img/solunch-food.png" style="width: 150px;
    border-bottom: 2px solid;
    position: absolute;
    bottom: -32px;
    transform: translate(-50%);
    left: 50%;"> 
</div>    

<form action="<?php echo the_permalink();?>" method="post" style="position: relative;top: 90px;">
  <!-- <ul id="slide-out" class="side-nav " style="width: 90%; z-index: 1000;">
    <li><div class="user-view">
      <a href="#!user" style="transform: translate(-50%); left: 50%;  position: absolute; "><img class="circle " src="<?php bloginfo('stylesheet_directory'); ?>/img/SO-LUNCH-EMBLEME-01.png"></a>
      </div>
    </li>
    <div class="row form-input" style="transform: translate(-50%); left: 50%;  position: absolute;  z-index: 99; width: 45%; top:190px">
              <input type="hidden" name="Réservation client"/>
              <div class="input-field col s12 m12 l12 ">
                <input  id="first_name" type="text" name="Nom_du_client" class="validate" style="border-bottom: 2px solid #ffffff!important;">
                <label for="first_name" data-error="wrong" data-success="right" style="font-family: 'Josefin Sans', sans-serif;">Nom</label>
              </div>
            
              <div class="input-field col s12 m12 l12 ">
                <input id="email" type="email" name="E-mail_du_client" class="validate" style="border-bottom: 2px solid #ffffff!important;">
                <label style="font-family: 'Josefin Sans', sans-serif;" for="email" data-error="wrong" data-success="right">E-mail</label>
              </div>

              <div class="input-field col s12 m12 l6 ">
                <input style="border-bottom: 2px solid #ffffff!important;" id="Date" type="text" class="datepicker" name="Date" placeholder="Sélectionner une date" class="datepicker">
                <label for="Date" data-error="wrong" data-success="right"></label>
              </div>

              <div class="input-field col s12 m12 l6 ">
                <input type="text" name="Tranche_horaire" id="time" placeholder="Sélectionner une tranche horaire" class="timepicker" style="border-bottom: 2px solid #ffffff!important;">
                <label for="time" data-error="wrong" data-success="right"></label>
              </div>

        <div class="col s12 l12 " style="top: 25px; ">
           <input style="border: 2px solid; background-color: #ffffff54!important; font-weight: 800!important;" type="submit" name="submit" class="btn" target="_blank" placeholder="Valider" style="font-family: 'Josefin Sans', sans-serif; transform: translate(-50%); left: 50%;  position: absolute;">
        </div>
      </div>

      <div class="modal-footer" style="position: absolute; top: 0px; ">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Fermer</a></div>
  </ul> -->

  <!-- Modal Structure -->
          <div id="modal11" class="modal">
            <div class="modal-content" style="margin-top: 45px;">
                      <div class="row" style="    width: 70%;" >
                        <div class="col s12  m12 l4 ">                  
                           <a onclick="toggleByClass('soja')" class="collection-item" style="top: 150px; padding: 7px 25px; border: 2px solid; background-color: #ffffff54!important; font-weight: 800!important;     border-radius: 20px; margin-right: auto; margin-left: auto; display: block;">SOJA</a>
                        </div>
                        <div class="col s12 m12 l4">              
                           <a onclick="toggleByClass('gluten')" class="collection-item" style="top: 150px; padding: 7px 25px; border: 2px solid; background-color: #ffffff54!important; font-weight: 800!important; border-radius: 20px; margin-right: auto; margin-left: auto; display: block;">GLUTEN</a>
                        </div>
                        <div class="col s12 m12 l4 ">
                             <a onclick="toggleByClass('produits-laitiers')" class="collection-item" style="border-radius: 20px; top: 150px; padding: 7px 25px; border: 2px solid; background-color: #ffffff54!important; font-weight: 800!important; margin-right: auto; margin-left: auto; display: block;">Produit Laitiers</a> 
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
                       <a class="modal-action modal-close" style="position: relative; float: right; bottom: 204px;
                    padding-right: 20px;"><span style="font-size: 1.5em;">X</span></a>
          </div>


              <!-- Modal Structure -->
              <div id="modal10" class="modal bottom-sheet" style="background-color: #777d76e0!important;">
                <div class="modal-content">

                      <div class="row" style="position: relative;top: 35px;">
                        <div class="col s12 l4">
                          
                          <input  id="first_name" placeholder="Nom" type="text" name="Nom_du_client" class="validate" style="border-bottom: 2px solid #000!important;">
                         
                        </div>
                        <div class="col s12 l4">
                          
                          <input id="email" type="email" name="E-mail_du_client" class="validate" style="border-bottom: 2px solid #000!important;" placeholder="Email">

                        </div>
                        <div class="col s12 l2 ">

                             <input style="border-bottom: 2px solid #000!important;" id="Date" type="text" class="validate" name="Date" placeholder="Date de récupération de votre menu">

                             <!-- <input style="border-bottom: 2px solid #000!important;" id="Date" type="text" class="datepicker" name="Date" placeholder="Sélectionner une date" class="datepicker"> -->


                        </div>
                        <div class="col s12 l2 ">
                          
                          <input type="text" name="Tranche_horaire" id="time" placeholder="Heure de récupération de votre menu" class="validate" style="border-bottom: 2px solid #000!important;">
                         <!--  <input type="text" name="Tranche_horaire" id="time" placeholder="Sélectionner une tranche horaire" class="timepicker" style="border-bottom: 2px solid #000!important;"> -->
                        </div>
                        <!-- fermeture modale -->
                        <a class="modal-action modal-close" style="position: relative;float: right; bottom: 125px;"><span style="font-size: 1.5em;">X</span></a>
                      </div>
                      <!-- buton valider -->
                            <div class="col s12 l12 " style="top: 25px; ">
                       <input style="border: 2px solid; background-color: #80a27be0!important;font-weight: 800!important; margin-left: auto; display: block;
                         margin-right: auto;" type="submit" name="submit" class="btn" target="_blank" placeholder="Valider" style="font-family: 'Josefin Sans', sans-serif; transform: translate(-50%); left: 50%;  position: absolute;">
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

                    <a class="waves-effect modal-trigger" href="#modal11" style="    background-color: rgba(171, 211, 166, 0); padding: 7px 42px;z-index: 999;
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
    height: 500px!important;
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
                    <a href="#g0" data-position="top" data-delay="50" data-tooltip='<?php  echo get_cat_name(12);?>' class="tooltipped"><!-- <h6 style="text-align: center;">base</h6> -->
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/img/check.png" style="width: 45px; top: 14px; position: relative;" ></a>
                  </div>

                  <div class=" col s12 l2" style="background-color: #abd3a7; height: 70px; width: 70px; border-radius: 80%; margin-right: 35px;">
                    <a href="#g1" data-position="top" data-delay="50" data-tooltip='<?php  echo get_cat_name(3);?>' class="tooltipped"><!-- <h6 style="text-align: center;">Les Veggies</h6> -->
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/img/check.png" style="width: 45px; top: 14px; position: relative;" ></a>
                  </div>
                  <div class="tab col  s12 l2" style="background-color: #abd3a7; height: 70px; width: 70px; border-radius: 80%; margin-right: 35px;">
                    <a href="#g2" data-position="top" data-delay="50" data-tooltip='<?php  echo get_cat_name(1);?>' class="tooltipped" >
                    <!-- proteine -->
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/img/check.png" style="width: 45px;top: 15px;position: relative;right: 10px;"></a>
                  </div>
                  <div class=" col s12 l2" style="background-color: #abd3a7;  height: 70px; width: 70px; border-radius: 80%; margin-right: 35px;">
                    <a href="#g3" data-position="top" data-delay="50" data-tooltip='<?php  echo get_cat_name(8);?>' class="tooltipped"><!-- <h6 style="text-align: center;">Les graines et les Noix</h6> -->
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/img/check.png" style="width: 45px; top: 14px; position: relative;"></a>
                  </div>
                  <div class=" col s12 l2" style="background-color: #abd3a7; height: 70px; width: 70px; border-radius: 80%; margin-right: 35px;">
                    <a href="#g4"  data-position="top" data-delay="50" data-tooltip='<?php  echo get_cat_name(9);?>' class="tooltipped" ><!-- <h6 style="text-align: center;">Les plus</h6> -->
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/img/check.png" style="width: 45px; top: 14px; position: relative;"></a>
                  </div>
                  <div class=" col s12 l2" style="background-color: #abd3a7; height: 70px; width: 70px; border-radius: 80%; margin-right: 35px;">
                    <a href="#g5" data-position="top" data-delay="50" data-tooltip='<?php  echo get_cat_name(10);?>' class="tooltipped"><!-- <h6 style="text-align: center;">Les Assaisonnements  <span style="position: relative; top: 25px;
                    right: 145px;">Boissons & Smooties</span></h6>  -->
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/img/check.png" style="width: 45px; top: 14px; position: relative;" ></a>
                  </div>
                  <div class="col s12 l2" style="background-color: #abd3a7; height: 70px; width: 70px; border-radius: 80%; margin-right: 35px;">
                    <a href="#g6" data-position="top" data-delay="50" data-tooltip='<?php  echo get_cat_name(11);?>' class="tooltipped"><!-- <h6 style="text-align: center;">Desserts</h6> -->
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
                  text-align: center;"><a href="#g0"><?php  echo get_cat_name(9);?></a></li>
                  <!-- veggies -->
                  <li class="z-depth-3 col s12" style="background-color: white; padding: 25px;
                  text-align: center;"><a href="#g1"><?php  echo get_cat_name(1);?></a></li>
                  <div class="divider"></div>
                  <!-- proteine -->
                  <li  class="z-depth-3 col s12" style="background-color: white; padding: 25px;
                  text-align: center;"><a href="#g2"><?php  echo get_cat_name(2);?></a></li>
                  <div class="divider"></div>
                  <!-- graines -->
                  <li  class="z-depth-3 col s12" style="background-color: white; padding: 25px;
                  text-align: center;"><a href="#g3"><?php  echo get_cat_name(3);?></a></li>
                  <div class="divider"></div>
                  <!-- pluss -->
                  <li  class="z-depth-3 col s12" style="background-color: white; padding: 25px;
                  text-align: center;"><a href="#g4"><?php  echo get_cat_name(4);?></a></li>
                  <div class="divider"></div>
                  <!-- boisson smoothie -->
                  <li  class="z-depth-3 col s12" style="background-color: white; padding: 25px;
                  text-align: center;"><a href="#g5"><?php  echo get_cat_name(5);?></a></li>
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

      


 


    </div>
    <div class="first-tab2" style="position: relative; border: 2px solid white; top: 292px;">
      <div id="g0" class="col s12">
         <?php
   // <!-- debut loop base -->
                       $args = array('post_per_page' => -1,
                         'post_type' => 'commande_en_lignes', 'cat' => 12,);
                        $category = new WP_Query($args);
                        while (  $category -> have_posts() ) : $category -> the_post(); ?>
                             <!-- debut card -->
                              <div class="col s12 m12 l3">
                                 <div class="card <?php echo restriction_get_meta( 'restriction_soja' );?> <?php echo restriction_get_meta( 'restriction_gluten' );?> <?php echo restriction_get_meta( 'restriction_produits_laitiers' );?> <?php echo restriction_get_meta( 'restriction_poisson' );?> <?php echo restriction_get_meta( 'restriction_viande' );?>">
                                    <div class="card">
                                      <div class="card-image">
                                        <div class="img_livraison">
                                              <img  style="height: 100%;" alt="<?php the_title();?>"  src="<?php the_post_thumbnail('medium-thumbnails');?>">
                                               <!-- <?php echo image_box_get_meta( 'image_box_url_image' );?>   -->
                                            </div>
                                        <h5 class="card-title" style="font-family: 'Muli', sans-serif;"><?php the_title();?></h5>
                                      </div>
                                      <div class="card-content" style="font-family: 'Josefin Sans', sans-serif;">
                                        <p><?php the_excerpt(); ?></p>
                                      </div>
                                      <div class="card-action" style="padding-bottom: 10px;">
                                        <div class="switch" style="width: 140px; margin-right: auto; margin-left: auto;">
                                        <label style="font-family: 'Josefin Sans', sans-serif;">
                                          0 €
                                          <input type="checkbox" name="Base" value="<?php the_title();?>">
                                          <span class="lever"></span>
                                          <?php echo prix_pour_la_page_reservation_et_livraison_get_meta( 'prix_pour_la_page_reservation_et_livraison_prix_2_normal_' ); ?>€
                                        </label>
                                     </div>
                              </div>        


                                      </div>
                                    </div> 
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
                              <div class="col s12 m12 l3">
                                 <div class="card <?php echo restriction_get_meta( 'restriction_soja' );?> <?php echo restriction_get_meta( 'restriction_gluten' );?> <?php echo restriction_get_meta( 'restriction_produits_laitiers' );?> <?php echo restriction_get_meta( 'restriction_poisson' );?> <?php echo restriction_get_meta( 'restriction_viande' );?>">
                                    <div class="card">
                                      <div class="card-image">
                                        <div class="img_livraison">
                                              <img  style="height: 100%;" alt="<?php the_title();?>"  src="<?php the_post_thumbnail('medium-thumbnails');?>">
                                               <!-- <?php echo image_box_get_meta( 'image_box_url_image' );?>   -->
                                            </div>
                                        <h5 class="card-title" style="font-family: 'Muli', sans-serif;"><?php the_title();?></h5>
                                      </div>
                                      <div class="card-content" style="font-family: 'Josefin Sans', sans-serif;">
                                        <p><?php the_excerpt(); ?></p>
                                      </div>
                                      <div class="card-action" style="padding-bottom: 10px;">
                                        <div class="switch" style="width: 140px; margin-right: auto; margin-left: auto;">
                                        <label style="font-family: 'Josefin Sans', sans-serif;">
                                          0 €
                                          <input type="checkbox" name="Veggies" value="<?php the_title();?>">
                                          <span class="lever"></span>
                                          <?php echo prix_pour_la_page_reservation_et_livraison_get_meta( 'prix_pour_la_page_reservation_et_livraison_prix_2_normal_' ); ?>€
                                        </label>
                                     </div>
                              </div>        


                                      </div>
                                    </div> 
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
                         'post_type' => 'commande_en_lignes', 'cat' => 1,);
                        $category = new WP_Query($args);
                        while (  $category -> have_posts() ) : $category -> the_post(); ?>
                             <!-- debut card -->
                              <div class="col s12 m12 l3">
                                <div class="card <?php echo restriction_get_meta( 'restriction_soja' );?> <?php echo restriction_get_meta( 'restriction_gluten' );?> <?php echo restriction_get_meta( 'restriction_produits_laitiers' );?> <?php echo restriction_get_meta( 'restriction_poisson' );?> <?php echo restriction_get_meta( 'restriction_viande' );?>">
                                      <div class="card">
                                          <div class="card-image">
                                            <div class="img_livraison">
                                              <img style="height: 100%;" alt="<?php the_title();?>" src="<?php the_post_thumbnail('medium-thumbnails');?>">
                                               
                                            </div>   
                                              <h5 class="card-title" style="font-family: 'Muli', sans-serif;"><?php the_title();?></h5>
                                          </div>
                                        <div class="card-content" style="font-family: 'Josefin Sans', sans-serif;">
                                          <p><?php the_excerpt(); ?></p>
                                        </div>
                                        <div class="card-action" style="padding-bottom: 10px;">
                
                                                  <div class="switch" style="width: 140px; margin-right: auto; margin-left: auto;">
                                                    <label style="font-family: 'Josefin Sans', sans-serif;">
                                                      0 €
                                                      <input type="checkbox" name="Proteines" value="<?php the_title();?>">
                                                      <span class="lever"></span>
                                                      <?php echo prix_pour_la_page_reservation_et_livraison_get_meta( 'prix_pour_la_page_reservation_et_livraison_prix_2_normal_' ); ?>€
                                                    </label>
                                                  </div>                                 
                                        </div>
                                      </div> 
                                </div>       
                              </div>   
                             <!-- fin Card --> 
                        <?php endwhile;?>  
                      <!-- debut loop -->
        </div>        
      </div>

      <div id="g3" class="col s12">
        <div class="row">
          <!-- debut loop graineset noix-->
           <?php
                       $args = array('post_per_page' => -1,
                         'post_type' => 'commande_en_lignes', 'cat' => 8,);
                        $category = new WP_Query($args);
                        while (  $category -> have_posts() ) : $category -> the_post(); ?>
                             <!-- debut card -->
                              <div class="col s12 m12 l3">
                                <div>
                                    <div class="card">
                                      <div class="card-image">
                                        <div class="img_livraison">
                                              <img style="height: 100%;" alt="<?php the_title();?>" class="materialboxed" src="<?php the_post_thumbnail('medium-thumbnails');?>">
                                             
                                        </div>
                                        <h5 class="card-title" style="font-family: 'Muli', sans-serif;"><?php the_title();?></h5>
                                      </div>
                                      <div class="card-content" style="font-family: 'Josefin Sans', sans-serif;">
                                        <p><?php the_excerpt(); ?></p>
                                      </div>
                                      <div class="card-action" style="padding-bottom: 10px;">

                                        <div class="switch" style="width: 140px; margin-right: auto; margin-left: auto;">
                                         <label style="font-family: 'Josefin Sans', sans-serif;">
                                          0 €
                                          <input type="checkbox" name="graines" value="<?php the_title();?>">
                                          <span class="lever"></span>
                                          <?php echo prix_pour_la_page_reservation_et_livraison_get_meta( 'prix_pour_la_page_reservation_et_livraison_prix_2_normal_' ); ?>€
                                         </label>
                                        </div>


                                       <!--  <p style="margin-left: auto;margin-right: auto; width: 180px;">
                                         <input name="réservation-graines-noix-3" type="checkbox" value="reservation3" id="<?php the_title();?>" />                         
                                         <label for="<?php the_title();?>"><i class="material-icons" style="font-size: 22px!important; color: #000000!important;">local_grocery_store</i> <span style="position: relative;
                                           bottom: 7px;"><?php echo prix_pour_la_page_reservation_et_livraison_get_meta( 'prix_pour_la_page_reservation_et_livraison_prix_2_normal_' ); ?>€</span></label>   
                                        </p>  -->
                                      </div>
                                    </div> 
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
                         'post_type' => 'commande_en_lignes', 'cat' => 9,);
                        $category = new WP_Query($args);
                        while (  $category -> have_posts() ) : $category -> the_post(); ?>
                             <!-- debut card -->
                              <div class="col s12 m12 l3">
                                <div class="card <?php echo restriction_get_meta( 'restriction_soja' );?> <?php echo restriction_get_meta( 'restriction_gluten' );?> <?php echo restriction_get_meta( 'restriction_produits_laitiers' );?> <?php echo restriction_get_meta( 'restriction_poisson' );?> <?php echo restriction_get_meta( 'restriction_viande' );?>">
                                      <div class="card">
                                          <div class="card-image">
                                            <div class="img_livraison">
                                              <img style="height: 100%;" alt="<?php the_title();?>" src="<?php the_post_thumbnail('medium-thumbnails');?>">
                                               
                                            </div>   
                                              <h5 class="card-title" style="font-family: 'Muli', sans-serif;"><?php the_title();?></h5>
                                          </div>
                                        <div class="card-content" style="font-family: 'Josefin Sans', sans-serif;">
                                          <p><?php the_excerpt(); ?></p>
                                        </div>
                                        <div class="card-action" style="padding-bottom: 10px;">
                
                                                  <div class="switch" style="width: 140px; margin-right: auto; margin-left: auto;">
                                                    <label style="font-family: 'Josefin Sans', sans-serif;">
                                                      0 €
                                                      <input type="checkbox" name="Lesplus" value="<?php the_title();?>">
                                                      <span class="lever"></span>
                                                      <?php echo prix_pour_la_page_reservation_et_livraison_get_meta( 'prix_pour_la_page_reservation_et_livraison_prix_2_normal_' ); ?>€
                                                    </label>
                                                  </div>                                 
                                        </div>
                                      </div> 
                                </div>       
                              </div>   
                             <!-- fin Card --> 
                        <?php endwhile;?>  
                      <!-- debut loop -->
        </div>        
      </div>


      <div id="g5" class="col s12">
        <div class="row">
          <?php

   // <!-- debut loop a. et boissons smoothies-->
                       $args = array('post_per_page' => -1,
                         'post_type' => 'commande_en_lignes', 'cat' => 10,);
                        $category = new WP_Query($args);
                        while (  $category -> have_posts() ) : $category -> the_post(); ?>
                             <!-- debut card -->
                              <div class="col s12 m12 l3">
                                <div>
                                    <div class="card">
                                      <div class="card-image">
                                        <div class="img_livraison">
                                              <img style="height: 100%;" alt="<?php the_title();?>" src="<?php the_post_thumbnail('medium-thumbnails');?>">
                                               <!-- <?php echo image_box_get_meta( 'image_box_url_image' );?>   -->
                                            </div>
                                        <h5 class="card-title" style="font-family: 'Muli', sans-serif;"><?php the_title();?></h5>
                                      </div>
                                      <div class="card-content" style="font-family: 'Josefin Sans', sans-serif;">
                                        <p><?php the_excerpt(); ?></p>
                                      </div>
                                      <div class="card-action" style="padding-bottom: 10px;">

                                        <div class="switch" style="width: 140px; margin-right: auto; margin-left: auto;">
                                         <label style="font-family: 'Josefin Sans', sans-serif;">
                                          0 €
                                          <input type="checkbox" name="boisson&smoothie" value="<?php the_title();?>">
                                          <span class="lever"></span>
                                          <?php echo prix_pour_la_page_reservation_et_livraison_get_meta( 'prix_pour_la_page_reservation_et_livraison_prix_2_normal_' ); ?>€
                                         </label>
                                        </div>

                                      </div>
                                    </div> 
                                </div>    
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
                         'post_type' => 'commande_en_lignes', 'cat' => 11,);
                        $category = new WP_Query($args);
                        while (  $category -> have_posts() ) : $category -> the_post(); ?>
                             <!-- debut card -->
                              <div class="col s12 m12 l3">
                                <div>
                                    <div class="card">
                                      <div class="card-image">
                                        <div class="img_livraison">
                                              <img style="height: 100%;" alt="<?php the_title();?>" class="materialboxed" src="<?php the_post_thumbnail('medium-thumbnails');?>">
                                              
                                            </div>
                                        <h5 class="card-title" style="font-family: 'Muli', sans-serif;"><?php the_title();?></h5>
                                      </div>
                                      <div class="card-content" style="font-family: 'Josefin Sans', sans-serif;">
                                        <p><?php the_excerpt(); ?></p>
                                      </div>
                                      <div class="card-action" style="padding-bottom: 10px;">

                                        <div class="switch" style="width: 140px; margin-right: auto; margin-left: auto;">
                                         <label style="font-family: 'Josefin Sans', sans-serif;">
                                          0 €
                                          <input type="checkbox" name="Desserts" value="<?php the_title();?>">
                                          <span class="lever"></span>
                                          <?php echo prix_pour_la_page_reservation_et_livraison_get_meta( 'prix_pour_la_page_reservation_et_livraison_prix_2_normal_' ); ?>€
                                         </label>
                                        </div>


                                       <!--  <p style="margin-left: auto;margin-right: auto; width: 180px;">
                                         <input name="réservation-graines-noix-3" type="checkbox" value="reservation3" id="<?php the_title();?>" />                         
                                         <label for="<?php the_title();?>"><i class="material-icons" style="font-size: 22px!important; color: #000000!important;">local_grocery_store</i> <span style="position: relative;
                                           bottom: 7px;"><?php echo prix_pour_la_page_reservation_et_livraison_get_meta( 'prix_pour_la_page_reservation_et_livraison_prix_2_normal_' ); ?>€</span></label>   
                                        </p>  -->
                                      </div>
                                    </div> 
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
.modal{
  background-color: #abd3a6;
}

.modal.bottom-sheet{
background-color: #80a27be0!important;}
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

/*.side-nav{
 background-image: url(<?php bloginfo('stylesheet_directory'); ?>/img/background-1.png);
 
}*/


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

/*.side-nav {
  background: url(<?php bloginfo('stylesheet_directory'); ?>/img/pexels-photo-616404.jpg)!important; background-repeat: no-repeat; background-position:center center; background-size: cover;
}*/

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

#tab2{
height: 450px!important;
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
<script>

</script>


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