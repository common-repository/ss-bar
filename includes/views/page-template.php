<section >
    <?php 
    
    if(!empty( $all_options['SS_Selection'] )){

      if( $all_options['SS_Selection'] == "Default" || $all_options['SS_Selection'] == "Left" ){

        include( SSBR_PATH . 'includes/views/designs/default.php');

      }elseif( $all_options['SS_Selection'] == "Right" ){

        include( SSBR_PATH . 'includes/views/designs/design1.php');

      }elseif( $all_options['SS_Selection'] == "BOTH" ){

        include( SSBR_PATH . 'includes/views/designs/design2.php');

      }
    
    }else{

      include( SSBR_PATH . 'includes/views/designs/default.php');
    
    }

 ?>
 
</section>