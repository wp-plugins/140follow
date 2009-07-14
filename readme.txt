=== Plugin Name ===
Contributors: NetReview
Donate link: http://netreview.de
Tags: comments, dofollow, nofollow, nofollow free, 140
Requires at least: 2.0.2
Tested up to: 2.8.1
Stable tag: 1.1

140follow removes NOFOLLOW from author link if the comment has more than 140 characters

== Description ==
140follow removes NOFOLLOW from author link if the comment has more than 140 characters
NOFOLLOW also can be added to single comments if you da "dontfollow" to the end of the author link.

Das Plugin ersetzt rel="external nofollow" durch rel="external" aus dem Autor-Link, wenn der Kommentar mehr als 140 Zeichen besitzt. Einzelnen Kommentaren kann das NOFOLLOW-tag wieder hinzugefügt werden, wenn einfach "dontfollow" (Danke an Oliver Bockelmann) zum Link hinzugefügt wird. 


== Installation ==
English
 - Upload 140follow to the '/wp-content/plugins/' directory
 - Go to your used theme directory and open 'comments.php'
 - find <form action="<?php echo get_option('siteurl'); ?> ...
 - add this to the end of this line (before ">"):
    name="commentform"
 - find <p><textarea name="comment" id="comment" ...
 - after this line add this new line:
    <p><script>displaylimit("document.commentform.comment",140)</script></p>
 - Activate the plugin through the 'Plugins' menu in WordPress

Deutsch 
 - 140follow ins '/wp-content/plugins/' hochladen
 - Öffne die Datei comments.php aus deinem Theme-Verzeichnis
 - Suche nach <form action="<?php echo get_option('siteurl'); ?> ...
 - Ans Ende der Zeile, also vor dem ">" folgendes einfügen:
    name="commentform"
 - Suche nach <p><textarea name="comment" id="comment" ...
 - Nach dieser Zeile, eine neue Zeile mit folgendem Inhalt hinzufügen:
    <p><script>displaylimit("document.commentform.comment",140)</script></p>
 - Aktiviere das Plugin

== Frequently Asked Questions ==
http://netreview.de/wordpress/wordpress-plugin-140follow-fur-alle/

== Screenshots ==
http://netreview.de/wordpress/wordpress-plugin-140follow-fur-alle/