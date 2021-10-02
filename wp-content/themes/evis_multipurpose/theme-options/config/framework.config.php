<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK SETTINGS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$settings           = array(
  'menu_title'      => 'Evis Theme',
  'menu_type'       => 'menu', // menu, submenu, options, theme, etc.
  'menu_slug'       => 'cs-framework',
  'ajax_save'       => false,
  'show_reset_all'  => false,
  'framework_title' => 'Evis Multipurpose',
);

// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options        = array();
// ----------------------------------------
// Home Section -
// ----------------------------------------
$options[]      = array(
  'name'        => 'home',
  'title'       => 'Home',
  'icon'        => 'fa fa-home',
  'fields'      => array(

    array(
      'id'      => 'siteTitle',
      'type'    => 'text',
      'title'   => 'Site Title',
    ),
      
    array(
      'id'      => 'siteDescription',
      'type'    => 'textarea',
      'title'   => 'Site Description',
    ),

    array(
      'id'      => 'backgroundImage',
      'type'    => 'upload',
      'title'   => 'Background',
    ),
      
    array(
      'id'      => 'branchNumbers',
      'type'    => 'text',
      'title'   => 'Branch Numbers',
    ),
      
    array(
      'id'      => 'memberNumbers',
      'type'    => 'text',
      'title'   => 'Member Numbers',
    ),
      
    array(
      'id'      => 'projectNumbers',
      'type'    => 'text',
      'title'   => 'Project Numbers',
    ),
      
    array(
      'id'      => 'customerNumbers',
      'type'    => 'text',
      'title'   => 'Customer Numbers',
    ),
  ),
);
// ----------------------------------------
// About Us -
// ----------------------------------------
$options[]      = array(
  'name'        => 'about-us',
  'title'       => 'About Us',
  'icon'        => 'fa fa-bookmark',
  'fields'      => array(

    array(
      'id'      => 'aboutTitle',
      'type'    => 'text',
      'title'   => 'Title',
    ),
      
    array(
      'id'      => 'aboutSubTitle',
      'type'    => 'textarea',
      'title'   => 'Subtitle',
    ),

    array(
      'id'      => 'aboutDescription',
      'type'    => 'textarea',
      'title'   => 'Description',
    ),
      
    array(
      'id'      => 'aboutImage',
      'type'    => 'upload',
      'title'   => 'Image',
    ),
  ),
);
// ----------------------------------------
// Contact Us -
// ----------------------------------------
$options[]      = array(
  'name'        => 'contact-us',
  'title'       => 'Contact Us',
  'icon'        => 'fa fa-address-book',
  'fields'      => array(

    array(
      'id'      => 'contactForm',
      'type'    => 'text',
      'title'   => 'Contact Form Email Send To',
    ),
      
    array(
      'id'      => 'physicalAddress',
      'type'    => 'textarea',
      'title'   => 'Physical Address',
    ),
      
    array(
      'id'      => 'emailAddress',
      'type'    => 'text',
      'title'   => 'Email Address',
    ),
      
    array(
      'id'      => 'mobileNumber',
      'type'    => 'text',
      'title'   => 'Mobile Number',
    ),
    
    array(
      'id'      => 'facebookLink',
      'type'    => 'textarea',
      'title'   => 'Facebook Link',
    ),
    
    array(
      'id'      => 'twitterLink',
      'type'    => 'textarea',
      'title'   => 'Twitter Link',
    ),
    
    array(
      'id'      => 'copyrightName',
      'type'    => 'text',
      'title'   => 'Copyright Name',
    ),
  ),
);
CSFramework::instance( $settings, $options );