<?php
//--------------------------------
 // regarder dans un autre theme pour voire twentiy..par exemple
  

if( !defined('ABSPATH') ) die( 'Merci de ne pas changer cette page directement.' );
//wp_clear_scheduled_hook('backup_website_daily_event');
// On crée la planification de notre tâche quotidienne
add_action( 'wp', 'backup_website_daily_scheduled');
function backup_website_daily_scheduled() {
  
    if( !wp_next_scheduled('backup_website_daily_event') ) {
      wp_schedule_event( time(), 'daily', 'backup_website_daily_event' );
    }
}

add_action( 'backup_website_daily_event', 'do_backup_website' );
function do_backup_website() {
  
$backup_file = 'website-' . date('d-m-Y-G-i-s') ; // nom de larchive du backup
  $backup_dir = 'backup-website'; // nom du dossier ou sera stocker les backup
    $htaccess_file = $backup_dir . '/.htaccess'; // chemin ver le fichier htacess
      $backup_max_life = 604800; // temps maximu de fichier d'un backup-tem en seconde'
  
  if(!is_dir( $backup_dir)) mkdir($backup_dir);
  
}


?>