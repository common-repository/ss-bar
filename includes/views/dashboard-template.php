<?php
defined( 'ABSPATH' ) or die( 'No script kiddies please!!' );
?>

<div class="wrap">
    
    <h2>Social Side Bar</h2>

    <form method="POST" action="options.php">
        
        <?php settings_fields( 'ss_share_settings' ); ?>

        <?php do_settings_sections( 'ss-share' ); ?>

        <?php submit_button(); ?>

    
    </form>

</div>