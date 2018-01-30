<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package So_Lunch
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
 <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <!-- <meta http-equiv="refresh" content="5; url=http://nimishprabhu.com/"> -->

  <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Pacifico" rel="stylesheet"> 

  <link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('stylesheet_directory'); ?>/img/favicon.png" /> 
    <title>So Lunch</title>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/style.css">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<!-- https://static.pexels.com/photos/326278/pexels-photo-326278.jpeg
https://static.pexels.com/photos/76093/pexels-photo-76093.jpeg
https://static.pexels.com/photos/5317/food-salad-restaurant-person.jpg
4NamcIqbjBZf -->

            <nav style="z-index:1 ; position: absolute; top: 0px; background-color: #ffffff00; box-shadow :0 2px 2px 0 rgba(0, 0, 0, 0), 0 1px 5px 0 rgba(0, 0, 0, 0), 0 3px 1px -2px rgba(0, 0, 0, 0); border-bottom: 2px solid;">
              <div class="nav-wrapper">
                <div class="row">
                    <ul id="" class="right hide-on-med-and-down" style="font-family: 'Muli', sans-serif; z-index: 999;">
                     <li style="background-color: #ffffff; height: 100px; width: 100px;position: relative;left: 90px;
          margin-right: 150px; z-index: 9; border-radius: 50%;
          top: 12px;"> <a href="http://ekolok4.epizy.com/wp/"><img style="width: 158%!important;
    position: relative;
    right: 18px;
    bottom: 11px;" src="<?php bloginfo('stylesheet_directory'); ?>/img/SO-LUNCH-EMBLEME-01.png" class="logo"></a></li>
                      <!-- <li><a href="http://localhost/wordpress-so/index.php/index/">Accueil</a></li>
                      <li><a href="http://localhost/wordpress-so/index.php/notre-concept/">Notre Concept</a></li>
                      <li><a href="http://localhost/wordpress-so/index.php/nos-engagements/">Nos Engagements</a></li>
                      <li><a href="http://localhost/wordpress-so/index.php/blog/">Blog/</a></li>
                      <li><a href="http://localhost/wordpress-so/index.php/jobs/">Jobs</a></li>
                      <li><a class="waves-effect waves-light modal-trigger" href="#modal1">Contact</a></li> -->   


                     <div style="position: relative; height: 90px; display: inline-block; float: right;"> 
                           <?php 
                                
                                wp_nav_menu( array(
                                  'theme_locaion' => 'primary',
                                  ));
                           ?>   
                     </div> 

                    </ul>
                    <ul id="" class="right hide-on-med-and-down " style="float: right!important; font-family: 'Muli', sans-serif;">
                      <div class="commander-en-ligne">
                      <!-- https://solunch.fr/commander-en-ligne/ -->
                          <li><a href="http://localhost/wordpress-so/index.php/commander-en-ligne/"><span style="border: 2px solid #abd3a7; padding: 8px;">Commander en ligne</span></a></li> 
                         <!-- <li><a href="https://solunch.fr/commander-en-ligne/"><span style="border: 2px solid #abd3a7; padding: 8px;">Commander en ligne</span></a></li> -->
                      </div>   
                    </ul>
                </div>  
              </div>
            </nav> 

            <!-- menu mobile -->

            <div  class="hide-on-large-only" style=" position: absolute; top: 0px; z-index: 777; width:100%; ">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/img/SO-LUNCH-EMBLEME-01.png" style="    width: 109px;
          margin-right: auto;
          margin-left: auto;
          border-radius: 50%;
          display: block;
          padding: 4px;
          background-color: #ffffff;" >
         </div>  

          <div id="sidebar" class="hide-on-large-only">
        <ul>
         
         <div style=" margin-right: auto; margin-left: auto;">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/img/SO-LUNCH-EMBLEME-01.png" style="width: 77%; margin-right: auto; margin-left: auto; display: block;" >
         </div>  

          <li class="text-menu"><a href="http://localhost/wordpress-so/">Accueil</a></li>
          <div class="divider"></div>
          <li class="text-menu"><a href="http://localhost/wordpress-so/index.php/notre-concept/">Notre concept</a></li>
          <div class="divider"></div>
          <li class="text-menu"><a href="http://localhost/wordpress-so/index.php/nos-engagements/">Nos engagements</a></li>
          <div class="divider"></div>
          <li class="text-menu"><a href="http://localhost/wordpress-so/index.php/blog/">Blog/</a></li>
          <div class="divider"></div>
          <li class="text-menu"><a href="http://localhost/wordpress-so/index.php/contact/">Contact</a></li>
          <div class="divider"></div>
          <li class="text-menu"><a href="http://localhost/wordpress-so/index.php/jobs/">Jobs</a></li>
          <div class="divider"></div>
          <li class="text-menu" ><a href="http://localhost/wordpress-so/index.php/commander-en-ligne/">Commander en ligne</a></li>
          <div class="divider"></div>
        </ul>
        
            <div id="toggle">
              <span></span>
              <span></span>
              <span></span>
            </div>  
      </div>
<style>

.hide-on-med-and-down {
    float: left!important;
    margin-left: -21px;
}

  #sidebar{
  width:200px;
  height:100%;
      background-color: #ffffff;
  position:fixed;
  top:10px;
  left:-200px;
  transition:linear .4s left;
  z-index: 999;
}
#sidebar.active{
  left:0px;
  transition:linear .4s left;
}
ul{
  list-style:none; 
}

.text-menu, a{
  color: black;
  text-align: center;
  font-family: 'Muli', sans-serif;"
}

.text-menu{
  text-decoration:none;
  display:block;
  width:180px;
  padding:10px;
  font-size:18px;
  font-family:"verdana",open sans;
 
}
.text-menu:hover{
  background-color:#abd3a7;
}
#toggle{
  width:20px;
  height:20px;
  background-color: #ffffff00;
  position:absolute;

  top:0px;
  left:205px;
  cursor:pointer;
  margin:10px;
}
#toggle span{
  height:3px;
  background:black;
  display:block;
  margin-bottom:5px;
}
</style>

   <!--  <div style="background-color: red!important; height: 45px; width: 100%; position: absolute; ">
      <a href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js" style="position: absolute; top: 250px;transform: translate(-50%); left: 50%; position: absolute;">kkkk</a>
    </div>   -->

    <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <!-- Compiled and minified JavaScript -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
<script>
    $(document).ready(function(){
      $('#toggle').click(function(){
        $('#sidebar').toggleClass('active');
      });
    });
    </script>
  
 