<?php

/////
// HOW TO USE:
// https://github.com/bainternet/My-Meta-Box/blob/master/class-usage-demo.php
/////

add_action( 'admin_init', 'tppdb_profile_meta_boxes' );


function tppdb_profile_meta_boxes() {

  $prefix = 'tppdb_';
  /* 
   * General Meta box for general / personal information
   */
  $profiles_general_config = array(
    'id'             => 'tppdb_profile_general',          // meta box id, unique per meta box
    'title'          => 'Profile Information',          // meta box title
    'pages'          => array('tpp_profiles'),      // post types, accept custom post types as well, default is array('post'); optional
    'context'        => 'normal',            // where the meta box appear: normal (default), advanced, side; optional
    'priority'       => 'high',            // order of meta box: high (default), low; optional
    'fields'         => array(),            // list of meta fields (can be added by field arrays)
    'local_images'   => false,          // Use local or hosted images (meta box images for add/remove)
    'use_with_theme' => false          //change path if used with theme set to true, false for a plugin or anything else for a custom path(default false).
  );
  
  
  /*
   * Initiate your meta box
   */
  $profile_general =  new AT_Meta_Box($profiles_general_config);
  
  $profile_general->addDate($prefix.'dob',array('name'=> 'Date of Birth '));

  $profile_general->addText($prefix.'city',array('name'=> 'City of Birth '));
  
  $profile_general->addText($prefix.'state',array('name'=> 'State of Birth '));

  $profile_general->addText($prefix.'country',array('name'=> 'Country of Birth '));


  $profile_general->Finish();

  /* 
   * Social Media Meta box for contact information
   */
  $profiles_social_config = array(
    'id'             => 'tppdb_profile_social',          // meta box id, unique per meta box
    'title'          => 'Social Media & Marketing',          // meta box title
    'pages'          => array('tpp_profiles'),      // post types, accept custom post types as well, default is array('post'); optional
    'context'        => 'normal',            // where the meta box appear: normal (default), advanced, side; optional
    'priority'       => 'high',            // order of meta box: high (default), low; optional
    'fields'         => array(),            // list of meta fields (can be added by field arrays)
    'local_images'   => false,          // Use local or hosted images (meta box images for add/remove)
    'use_with_theme' => false          //change path if used with theme set to true, false for a plugin or anything else for a custom path(default false).
  );
  
  
  /*
   * Initiate your meta box
   */
  $profile_social =  new AT_Meta_Box($profiles_social_config);


  $profile_social->addText($prefix.'facebook',array('name'=> 'Facebook '));
  
  $profile_social->addText($prefix.'twitter',array('name'=> 'Twitter '));

  $profile_social->addText($prefix.'instagram',array('name'=> 'Instagram '));

  $profile_social->addText($prefix.'website',array('name'=> 'Website '));


  $profile_social->Finish();


  /* 
   * Contact Meta box for contact information
   * This is somewhat FUTURE functionality. It won't be shown initially
   */
  $profiles_contact_config = array(
    'id'             => 'tppdb_profile_contact',          // meta box id, unique per meta box
    'title'          => 'Office Contact Information',          // meta box title
    'pages'          => array('tpp_profiles'),      // post types, accept custom post types as well, default is array('post'); optional
    'context'        => 'normal',            // where the meta box appear: normal (default), advanced, side; optional
    'priority'       => 'high',            // order of meta box: high (default), low; optional
    'fields'         => array(),            // list of meta fields (can be added by field arrays)
    'local_images'   => false,          // Use local or hosted images (meta box images for add/remove)
    'use_with_theme' => false          //change path if used with theme set to true, false for a plugin or anything else for a custom path(default false).
  );
  
  
  /*
   * Initiate your meta box
   */
  $profile_contact =  new AT_Meta_Box($profiles_contact_config);


  $profile_contact->addText($prefix.'email_address',array('name'=> 'Email Address '));
  
  $profile_contact->addText($prefix.'email_contact',array('name'=> 'Email Contact '));

  // $profile_contact->addText($prefix.'country',array('name'=> 'Country of Birth '));


  $profile_contact->Finish();

}

