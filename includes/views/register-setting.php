<?php 

    $options = 'Option';

    //if setting doesnot exist
    if( !get_option( 'ss_share_settings' ) ){
        add_option( 'ss_share_settings', $options );  
    }
  

    //
    add_settings_section(
        'ss_setting_section',

        __( ' Plugin Setting Section ', 'ss-bar' ),

        array($this, 'ss_setting_section_callback'),

        'ss-share'
    );

    add_settings_field( 
        
        'SS_Selection',                     
        
        __( 'Select your design', 'ss-bar' ),                        
        
        array($this, 'ss_setting_design_callback'),    
        
        'ss-share',  
        
        'ss_setting_section'          
    );

    add_settings_field( 
        
        'SS_Facebook',                     
        
        __( 'Facebook', 'ss-bar' ),                        
        
        array($this, 'ss_setting_facebook_callback'),    
        
        'ss-share',  
        
        'ss_setting_section'          
    );

    add_settings_field( 
        
        'SS_Twitter',                     
        
        __( 'Twitter', 'ss-bar' ),                        
        
        array($this, 'ss_setting_twitter_callback'),    
        
        'ss-share',  
        
        'ss_setting_section'          
    );

    add_settings_field( 
        
        'SS_Instagram',                     
        
        __( 'Instagram', 'ss-bar' ),                        
        
        array($this, 'ss_setting_instagram_callback'),    
        
        'ss-share',  
        
        'ss_setting_section'          
    );

    add_settings_field( 
        
        'SS_LinkedIn',                     
        
        __( 'Linkedin', 'ss-bar' ),                        
        
        array($this, 'ss_setting_linkedin_callback'),    
        
        'ss-share',  
        
        'ss_setting_section'          
    );

    add_settings_field( 
        
        'SS_GitHub',                     
        
        __( 'GitHub', 'ss-bar' ),                        
        
        array($this, 'ss_setting_github_callback'),    
        
        'ss-share',  
        
        'ss_setting_section'          
    );

    add_settings_field( 
        
        'SS_Codepen',                     
        
        __( 'Codepen', 'ss-bar' ),                        
        
        array($this, 'ss_setting_codepen_callback'),    
        
        'ss-share',  
        
        'ss_setting_section'          
    );

    register_setting(
        'ss_share_settings',
        'ss_share_settings'
    );