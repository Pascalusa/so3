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


<div style="background-color:;    padding-bottom: 4px; position: relative; bottom: 10px;">
   <h5 class="Lunch-Bowl" style="text-align: center; position: relative; z-index: 9; width: 333px; margin-left: auto; margin-right: auto; margin-bottom: 119px;
    top: 74px; color: #ffffff;">Compose ta Lunch Bowl  </h5> 
  
   <div class="snipcart-summary " id="" style="position: absolute; transform: translate(-50%); left: 50%; font-weight: 600; color: black;
                                       border-radius: 50px; background-color: white; z-index: 9; padding: 14px;">
  
            Prix Total: <span class="snipcart-total-price"></span> 
   </div>
  
    <?php get_template_part( 'base');?> 

</div>  


 <style> 
   
   @media screen and (max-width: 992px) {
          .Lunch-Bowl{
              width: 183px!important;
           }
   }
      
 </style>
