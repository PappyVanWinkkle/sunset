<?php 
  /*=================
    @package sunset theme
    ADMIN PAGE 
  ================= */
  
  function set_admin_page() {
      add_menu_page('Sunset_Theme_Options', 'Sunset', 'manage_options', 'sunset_theme_create_page', 'paulchabz_sunset');
  }
  
  function sunset_theme_create_page() {
      // generates the admin panel code here 
  }
  

?>