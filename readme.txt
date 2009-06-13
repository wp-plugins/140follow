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