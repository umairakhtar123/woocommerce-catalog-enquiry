<?php
class WC_Woocommerce_Catalog_Enquiry_Settings_Button {
  /**
   * Holds the values to be used in the fields callbacks
   */
  private $options;  
  private $tab;  
  
  
  

  /**
   * Start up
   */
  public function __construct($tab) {
    $this->tab = $tab;   
    $this->options = get_option( "dc_{$this->tab}_settings_name" );
    $this->settings_page_init();	
  }
  
  
 
  
  
  

  
  

  
  
  /**
   * Register and add settings
   */
  public function settings_page_init() {
    global $WC_Woocommerce_Catalog_Enquiry;  
     
    $settings_tab_options = array("tab" => "{$this->tab}",
                                  "ref" => &$this,
                                  "sections" => array(
                                                      "button_settings_section" => array("title" =>  __('Woocommerce Catalog Enquiry Button Settings', $WC_Woocommerce_Catalog_Enquiry->text_domain), // Section one
                                                                                         "fields" => array("is_button" => array('title' => __('Your own button style', $WC_Woocommerce_Catalog_Enquiry->text_domain), 'type' => 'checkbox', 'id' => 'is_button', 'label_for' => 'is_button', 'name' => 'is_button', 'desc' => __('Enable the custom design for enquiry button',  $WC_Woocommerce_Catalog_Enquiry->text_domain), 'value' => 'Enable'),
                                                                                         	 								"button_text" => array('title' => __('Custom button label', $WC_Woocommerce_Catalog_Enquiry->text_domain), 'type' => 'text', 'id' => 'button_text', 'name' => 'button_text', 'hints' => __('Give your custom button Text', $WC_Woocommerce_Catalog_Enquiry->text_domain)),	
                                                                                         	 								"button_text_color" => array('title' => __('Choose Button Text Color', $WC_Woocommerce_Catalog_Enquiry->text_domain), 'type' => 'colorpicker', 'id' => 'button_text_color', 'label_for' => 'button_text_color', 'name' => 'button_text_color', 'default' => '#000000', 'hints' => __('Choose your button text color here.', $WC_Woocommerce_Catalog_Enquiry->text_domain), 'desc' => __('This is button text color will be appear in the custom button .', $WC_Woocommerce_Catalog_Enquiry->text_domain)),
																																																					"button_background_color" => array('title' => __('Choose Button Background Color', $WC_Woocommerce_Catalog_Enquiry->text_domain), 'type' => 'colorpicker', 'id' => 'button_background_color', 'label_for' => 'button_background_color', 'name' => 'button_background_color', 'default' => '#999999', 'hints' => __('Choose your button background color here.', $WC_Woocommerce_Catalog_Enquiry->text_domain), 'desc' => __('This is button background color will be appear in the custom button .', $WC_Woocommerce_Catalog_Enquiry->text_domain)),
																																																					"button_text_color_hover" => array('title' => __('Choose Button Text Color Hover', $WC_Woocommerce_Catalog_Enquiry->text_domain), 'type' => 'colorpicker', 'id' => 'button_text_color_hover', 'label_for' => 'button_text_color_hover', 'name' => 'button_text_color_hover', 'default' => '#ffffff', 'hints' => __('Choose your button text color on hover here.', $WC_Woocommerce_Catalog_Enquiry->text_domain), 'desc' => __('This is button text color on hover will be appear in the custom button .', $WC_Woocommerce_Catalog_Enquiry->text_domain)),
																																																					"button_background_color_hover" => array('title' => __('Choose Button background Color Hover', $WC_Woocommerce_Catalog_Enquiry->text_domain), 'type' => 'colorpicker', 'id' => 'button_background_color_hover', 'label_for' => 'button_background_color_hover', 'name' => 'button_background_color_hover', 'default' => '#000000', 'hints' => __('Choose your button background color on hover here.', $WC_Woocommerce_Catalog_Enquiry->text_domain), 'desc' => __('This is button background color on hover will be appear in the custom button .', $WC_Woocommerce_Catalog_Enquiry->text_domain)),
																																																					"button_width" => array('title' => __('Custom button Width', $WC_Woocommerce_Catalog_Enquiry->text_domain), 'type' => 'text', 'id' => 'button_width', 'name' => 'button_width', 'hints' => __('Give your custom button Width in px', $WC_Woocommerce_Catalog_Enquiry->text_domain)),
																																																					"button_height" => array('title' => __('Custom button Height', $WC_Woocommerce_Catalog_Enquiry->text_domain), 'type' => 'text', 'id' => 'button_height', 'name' => 'button_height', 'hints' => __('Give your custom button Height', $WC_Woocommerce_Catalog_Enquiry->text_domain)),
																																																					"button_padding" => array('title' => __('Custom button Padding', $WC_Woocommerce_Catalog_Enquiry->text_domain), 'type' => 'text', 'id' => 'button_padding', 'name' => 'button_padding', 'hints' => __('Give your custom button Padding', $WC_Woocommerce_Catalog_Enquiry->text_domain)),
																																																					"button_border_size" => array('title' => __('Custom button Border', $WC_Woocommerce_Catalog_Enquiry->text_domain), 'type' => 'text', 'id' => 'button_border_size', 'name' => 'button_border_size', 'hints' => __('Give your custom button border size', $WC_Woocommerce_Catalog_Enquiry->text_domain)),
																																																					"button_fornt_size" => array('title' => __('Custom button Font size', $WC_Woocommerce_Catalog_Enquiry->text_domain), 'type' => 'text', 'id' => 'button_fornt_size', 'name' => 'button_fornt_size', 'hints' => __('Give your custom button Font Size', $WC_Woocommerce_Catalog_Enquiry->text_domain)),
																																																					"button_border_redius" => array('title' => __('Custom button border redius', $WC_Woocommerce_Catalog_Enquiry->text_domain), 'type' => 'text', 'id' => 'button_border_redius', 'name' => 'button_border_redius', 'hints' => __('Give your custom button border redius', $WC_Woocommerce_Catalog_Enquiry->text_domain)),
																																																					"button_border_color" => array('title' => __('Choose Button Border Color', $WC_Woocommerce_Catalog_Enquiry->text_domain), 'type' => 'colorpicker', 'id' => 'button_border_color', 'label_for' => 'button_border_color', 'name' => 'button_border_color', 'default' => '#333333', 'hints' => __('Choose your button border color.', $WC_Woocommerce_Catalog_Enquiry->text_domain), 'desc' => __('This is button border color which will be appear in the custom button .', $WC_Woocommerce_Catalog_Enquiry->text_domain)),
																																																					"button_margin_top" => array('title' => __('Custom button margin top', $WC_Woocommerce_Catalog_Enquiry->text_domain), 'type' => 'text', 'id' => 'button_margin_top', 'name' => 'button_margin_top', 'hints' => __('Give your custom button top margin', $WC_Woocommerce_Catalog_Enquiry->text_domain)),
																																																					"button_margin_bottom" => array('title' => __('Custom button margin bottom', $WC_Woocommerce_Catalog_Enquiry->text_domain), 'type' => 'text', 'id' => 'button_margin_bottom', 'name' => 'button_margin_bottom', 'hints' => __('Give your custom button bottom margin', $WC_Woocommerce_Catalog_Enquiry->text_domain)) 
                                                                                                                                                                                                          
                                                                                                          
                                                                                                          )
                                                                                         ) 
                                                      
                                                      )
                                  );
    
    $WC_Woocommerce_Catalog_Enquiry->admin->settings->settings_field_init(apply_filters("settings_{$this->tab}_tab_options", $settings_tab_options));
  }

  /**
   * Sanitize each setting field as needed
   *
   * @param array $input Contains all settings fields as array keys
   */
  public function dc_wc_Woocommerce_Catalog_Enquiry_button_settings_sanitize( $input ) {
    global $WC_Woocommerce_Catalog_Enquiry;
    $new_input = array();   
    $hasError = false;
    if( isset( $input['is_button'] ) )
      $new_input['is_button'] = sanitize_text_field($input['is_button']);
    if( isset( $input['button_text'] ) )
      $new_input['button_text'] = sanitize_text_field( $input['button_text'] );
    
    if( isset( $input['button_text_color'] ) )
      $new_input['button_text_color'] = sanitize_text_field( $input['button_text_color'] );
    
    if( isset( $input['button_background_color'] ) )
      $new_input['button_background_color'] = ( $input['button_background_color'] );
    
    if( isset( $input['button_text_color_hover'] ) )
      $new_input['button_text_color_hover'] = sanitize_text_field( $input['button_text_color_hover'] );
    
    if( isset( $input['button_background_color_hover'] ) )
      $new_input['button_background_color_hover'] = sanitize_text_field( $input['button_background_color_hover'] );
      
    
    
    if( isset( $input['button_width'] ) && absint( $input['button_width'] ) != 0 ) {
      $new_input['button_width'] = absint( $input['button_width'] );
    } else {
    	      
    }
    
    if( isset( $input['button_height'] ) && absint($input['button_height']) != 0 ) {
      $new_input['button_height'] = absint( $input['button_height'] );
    } else {
    	   	
    }
    
    if( isset( $input['button_padding'] ) && absint($input['button_padding']) != 0 ) {
      $new_input['button_padding'] = absint( $input['button_padding'] );
    } else {
    	 
         	
    }
    
    if( isset( $input['button_border_size'] ) && absint($input['button_border_size']) != 0 ) {
      $new_input['button_border_size'] = absint( $input['button_border_size'] );
    } else {
    	    	
    }
    
    
    
    
    
    if( isset( $input['button_fornt_size'] ) && absint($input['button_fornt_size']) != 0 ) {
      $new_input['button_fornt_size'] = absint( $input['button_fornt_size'] );
    } else {
    	    	
    }
    
    if( isset( $input['button_border_redius'] ) && absint($input['button_border_redius']) != 0 ) {
      $new_input['button_border_redius'] = absint( $input['button_border_redius'] );
    } else {
    	    	
    }
      
    
    if( isset( $input['button_border_color'] ) )
      $new_input['button_border_color'] = sanitize_text_field( $input['button_border_color'] );
    
    if( isset( $input['button_margin_top'] ) &&  absint($input['button_margin_top']) != 0 ) {
      $new_input['button_margin_top'] = absint( $input['button_margin_top'] );
    } else {
        	
    }
    
    if( isset( $input['button_margin_bottom'] ) && absint($input['button_margin_bottom']) != 0 ) {
      $new_input['button_margin_bottom'] = absint( $input['button_margin_bottom'] );
    }else {
    	    	
    }
    
    
    
    
    
    if(!$hasError) {
      add_settings_error(
        "dc_{$this->tab}_settings_name",
        esc_attr( "dc_{$this->tab}_settings_admin_updated" ),
        __('Enquiry Button settings updated', $WC_Woocommerce_Catalog_Enquiry->text_domain),
        'updated'
      );
    }

    return $new_input;
  }

  /** 
   * Print the Section text
   */
  public function button_settings_section_info() {
    global $WC_Woocommerce_Catalog_Enquiry;
    _e('Configure the Enquiry Button', $WC_Woocommerce_Catalog_Enquiry->text_domain);
  }
  
 
  
}