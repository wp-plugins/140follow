<?php
/* 
Plugin Name:  140follow
Plugin URI:   http://netreview.de/wordpress/wordpress-plugin-140follow-fur-alle/
Description:  Das Plugin ersetzt rel="external nofollow" durch rel="external" aus dem Autor-Link, wenn das Kommentar mehr als 140 Zeichen besitzt.
Version:      1.0
Author:       Daniel B.
Author URI:   http://netreview.de
*/

/*
 * Installatiion: 
 * Um das Theme nicht unnötig mit JavaScript zu belasten, habe ich auf das automatische
 * Hinzufügen des Codes in der comments.php verzichtet. Dies kann jeder sehr einfach 
 * selber machen:
 * 
 * 1. Öffne die Datei comments.php aus deinem Theme-Verzeichnis
 * 2. Suche nach <form action="<?php echo get_option('siteurl'); ?> ...
 * 3. Ans Ende der Zeile, also vor dem ">" folgendes einfügen:
 *    name="commentform"
 * 4. Suche nach <p><textarea name="comment" id="comment" ...
 * 5. Nach dieser Zeile, eine neue Zeile mit folgendem Inhalt hinzufügen:
 *    <p><script>displaylimit("document.commentform.comment",140)</script></p>
 * 
 * ENJOY!
*/

if ( ! defined( 'WP_PLUGIN_URL' ) )
      define( 'WP_PLUGIN_URL', WP_CONTENT_URL.'/plugins' );

function wp_140follow_js() {
  echo "\n".'<!-- BEGIN Plugin: 140follow -->'."\n";
  echo '<script src="'.WP_PLUGIN_URL.'/140follow/140follow.js" type="text/javascript"></script>';
  echo "\n".'<!-- END   Plugin: 140follow -->'."\n";
}

function wp_140follow_make_dofollow($ret) {
  global $comment;
  
  if (eregi('dontfollow', $ret)) {
    $ret = preg_replace("/\/dontfollow'/","' ",  $ret); 
    $ret = preg_replace("/\/dontfollow\"/","\" ",$ret);
  } 
  else {    
    $chars = strlen($comment->comment_content);    
    
    if ($chars >= 140) {    
      $ret = preg_replace("/ rel='external nofollow'/"," rel='external'",$ret); 
    }
  }
  
  return $ret; 
} 

/**** HOOKS ****/
add_action('wp_head', 'wp_140follow_js');
add_filter('get_comment_author_link', 'wp_140follow_make_dofollow'); 

?>