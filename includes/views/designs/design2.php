  <ul class="float ssleft">
   
   <?php $all_options = get_option('ss_share_settings'); ?>
   	
   	<?php if ( !empty( $all_options['SS_Facebook'] ) ) {?>
    	<li> <a href="<?php echo(esc_url($all_options['SS_Facebook']))?>"><i class="fa fa-facebook"></i><span>Facebook</span></a></li>
    <?php } ?>

    <?php if ( !empty( $all_options['SS_Twitter'] ) ) {?>
    	<li> <a href="<?php echo(esc_url($all_options['SS_Twitter']))?>"><i class="fa fa-twitter"></i><span>Twitter</span></a></li>
    <?php } ?>

    <?php if ( !empty( $all_options['SS_Instagram'] ) ) {?>
    	<li> <a href="<?php echo(esc_url($all_options['SS_Instagram']))?>"><i class="fa fa-instagram"></i><span>Instagram</span></a></li>
    <?php } ?>

    <?php if ( !empty( $all_options['SS_Linkedin'] ) ) {?>
    	<li> <a href="<?php echo(esc_url($all_options['SS_Linkedin']))?>"><i class="fa fa-linkedin"></i><span>Linkedin</span></a></li>
    <?php } ?>

    <?php if ( !empty( $all_options['SS_GitHub'] ) ) {?>
    	<li> <a href="<?php echo(esc_url($all_options['SS_GitHub']))?>"><i class="fa fa-github"></i><span>GitHub</span></a></li>
    <?php } ?>

    <?php if ( !empty( $all_options['SS_Codepen'] ) ) {?>
      <li><a href="<?php echo(esc_url($all_options['SS_Codepen']))?>"><i class="fa fa-codepen"></i><span>Codepen</span></a></li>
    <?php } ?>
  </ul>

  <ul class="float ssright">
    
    <?php $all_options = get_option('ss_share_settings'); ?>
    
    <?php if ( !empty( $all_options['SS_Facebook'] ) ) {?>
      <li> <a href="<?php echo(esc_url($all_options['SS_Facebook']))?>"><i class="fa fa-facebook"></i><span>Facebook</span></a></li>
    <?php } ?>

    <?php if ( !empty( $all_options['SS_Twitter'] ) ) {?>
      <li> <a href="<?php echo(esc_url($all_options['SS_Twitter']))?>"><i class="fa fa-twitter"></i><span>Twitter</span></a></li>
    <?php } ?>

    <?php if ( !empty( $all_options['SS_Instagram'] ) ) {?>
      <li> <a href="<?php echo(esc_url($all_options['SS_Instagram']))?>"><i class="fa fa-instagram"></i><span>Instagram</span></a></li>
    <?php } ?>

    <?php if ( !empty( $all_options['SS_Linkedin'] ) ) {?>
      <li> <a href="<?php echo(esc_url($all_options['SS_Linkedin']))?>"><i class="fa fa-linkedin"></i><span>Linkedin</span></a></li>
    <?php } ?>

    <?php if ( !empty( $all_options['SS_GitHub'] ) ) {?>
      <li> <a href="<?php echo(esc_url($all_options['SS_GitHub']))?>"><i class="fa fa-github"></i><span>GitHub</span></a></li>
    <?php } ?>

    <?php if ( !empty( $all_options['SS_Codepen'] ) ) {?>
      <li><a href="<?php echo(esc_url($all_options['SS_Codepen']))?>"><i class="fa fa-codepen"></i><span>Codepen</span></a></li>
    <?php } ?>

  </ul>