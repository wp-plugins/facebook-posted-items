AUTOR
Fepe - http://www.fepe55.com.ar/blog/


CARACTERÍSTICAS
Este plugin recupera los elementos publicados en Facebook y los muestra en una lista con sus correspondientes links y comentarios.

Facebook cambia constantemente las URL, pero por ahora se pueden conseguir siguiendo los pasos de este sitio: http://www.kristi-barrow.com/facebook-rss-feeds-what-is-available/


INSTALACIÓN
Poner el archivo "fp_fb_posted_items.php" en ~/wp-content/plugins/
En el panel de administración de Wordpress, ir a Plugins y activarlo.


USO
Edita los archivos de tu plantilla ingresando el siguiente código donde quieras la lista de los elementos publicados (un buen ejemplo sería en la barra lateral -sidebar.php-), cambiando "http://url-elementos-publicados" con la URL que quieras (Si no sabes de dónde sacarlo, ver CARACTERÍSTICAS)

<?php if (function_exists("fb_posted_items")) : ?>
<h2>Elementos Publicados En Facebook</h2>
<?php fb_posted_items ("http://url-elementos-publicados"); ?>
<?php endif; ?>


PARÁMETROS
-> $url - La URL del feed (requerido)
-> $numitems - Por defecto 5 (opcional)
-> $before_list - Por defecto "<ul>" (opcional)
-> $after_list - Por defecto "</ul>" (opcional)
-> $before_item - Por defecto "<li>" (opcional)
-> $after_item - Por defecto "</li>" (opcional)


VERSIONES PREVIAS
-> 0.4.1 - 2011.09.28 - Pequeño bug solucionado.
-> 0.4 - 2011.09.25 - Modificación en la RegEx (gracias a MAN por la sugerencia).
-> 0.4b - 2010.01.06 - Reemplazo de fetch_rss (deprecated) por fetch_feed.
-> 0.3 - 2008.12.14 - Arreglo en un problema del charset en la descripción.
-> 0.2 - 2008.12.11 - Cambio de 'explode' por 'RegEx' gracias a NeoEGM.
-> 0.1 - 2008.12.10 - Nacimiento del plugin. Usando 'explode'.


POSIBLES COSAS PARA HACER
-> Usar la descripción para algo.
-> Hacer una página con todos los items, no sólo una lista.


AGRADECIMIENTOS:
-> NeoEGM - http://www.neoegm.com/
-> Pato - http://www.dejamedejoder.com.ar/


MÁS INFO
http://www.fepe55.com.ar/blog/facebook-posted-items/
