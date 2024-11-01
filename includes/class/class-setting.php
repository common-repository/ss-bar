<?php 
	if(!class_exists('SSB_Settings')){
		/**
		 * 
		 */
		class SSB_Settings 
		{
			
			function __construct()
			{
				add_action( 'admin_init', array($this, 'ss_share_settings') );
			}

			function ss_share_settings(){

            	include( SSBR_PATH . 'includes/views/register-setting.php');

        	}

			// Type Callback
	        function ss_setting_facebook_callback() {
	            

	            $options = get_option( 'ss_share_settings' );
	            $url = '';

	            if( isset( $options['SS_Facebook'] ) ) {
	                $url = esc_url( $options['SS_Facebook'] );
	            } // end if
	            
	            // Render the output
	            echo '<input type="text" id="SS_facebook" name="ss_share_settings[SS_Facebook]" value="' . $url . '" />';

	            
	        }

        // Type Callback
        function ss_setting_twitter_callback() {
            

            $options = get_option( 'ss_share_settings' );
            $url = '';

            if( isset( $options['SS_Twitter'] ) ) {
                $url = esc_url( $options['SS_Twitter'] );
            } // end if
            
            // Render the output
            echo '<input type="text" id="SS_Twitter" name="ss_share_settings[SS_Twitter]" value="' . $url . '" />';

            
        }
        // Type Callback
        function ss_setting_linkedin_callback() {
            

            $options = get_option( 'ss_share_settings' );
            $url = '';

            if( isset( $options['SS_Linkedin'] ) ) {
                $url = esc_url( $options['SS_Linkedin'] );
            } // end if
            
            // Render the output
            echo '<input type="text" id="SS_Linkedin" name="ss_share_settings[SS_Linkedin]" value="' . $url . '" />';

            
	        }
	        // Type Callback
	        function ss_setting_instagram_callback() {
	            

	            $options = get_option( 'ss_share_settings' );
	            $url = '';

	            if( isset( $options['SS_Instagram'] ) ) {
	                $url = esc_url( $options['SS_Instagram'] );
	            } // end if
	            
	            // Render the output
	            echo '<input type="text" id="SS_Instagram" name="ss_share_settings[SS_Instagram]" value="' . $url . '" />';

	            
	        }
	        // Type Callback
	        function ss_setting_github_callback() {
	            

	            $options = get_option( 'ss_share_settings' );
	            $url = '';

	            if( isset( $options['SS_GitHub'] ) ) {
	                $url = esc_url( $options['SS_GitHub'] );
	            } // end if
	            
	            // Render the output
	            echo '<input type="text" id="SS_GitHub" name="ss_share_settings[SS_GitHub]" value="' . $url . '" />';

	            
	        }

	        function ss_setting_codepen_callback() {
	            

	            $options = get_option( 'ss_share_settings' );
	            $url = '';

	            if( isset( $options['SS_Codepen'] ) ) {
	                $url = esc_url( $options['SS_Codepen'] );
	            } // end if
	            
	            // Render the output
	            echo '<input type="text" id="SS_Codepen" name="ss_share_settings[SS_Codepen]" value="' . $url . '" />';

	            
	        }

	        function ss_setting_section_callback() {
	            
	            echo '<p>';
	            _e( 'Enter your social links here.', 'ss-bar' );
	            echo '</p>';
	        }

	    	/*
	    	* Version 2.0.0
	    	* Select form multiple design
	    	*/    
	        function ss_setting_design_callback() {

	        	$options = get_option( 'ss_share_settings' );
	            $all_options = '';

	            if( isset( $options['SS_Selection'] ) ) {
	                $all_options = esc_html( $options['SS_Selection'] );
	            } // end if
	         
	            $all_designs = array(   'Default' => 'Default', 
	            						'Left' => 'On left side', 
	            						'Right' => 'On Right Side',
	            						'BOTH' => 'On Both Side' );

	         	$display_options = '<select name="ss_share_settings[SS_Selection]">	';

	         	foreach ($all_designs as $deigns => $values ) {
	         		
	         		if($all_options == $deigns ){ 
	         			$selected = "selected";
	         		}else{
	         			$selected ="";
	         		}

	         		$display_options .= '<option value="' . esc_html($deigns) .'" selected = "'. $selected .'">'. esc_html($values) .'</option>';
	         	}

	         	$display_options .= '</select>';

	         	echo $display_options;

	        }


		}

		new SSB_Settings();
	}