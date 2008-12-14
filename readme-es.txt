AUTOR
Fepe - http://www.fepe55.com.ar/blog/


CARACTERÍSTICAS
Este plugin recupera los elementos publicados en Facebook y los muestra en una lista con sus correspondientes links y comentarios.

Si no sabes donde conseguir la URL (dirección web) que se necesita, ve a Facebook, luego a "Elementos Publicados" en la barra lateral derecha. Luego, dependiendo de lo que quieras mostrar, haz uno de los siguientes:
- Para mostrar los elementos publicados por tus amigos: Haz click en "Elementos publicados por mis amigos" sobre la derecha, debajo de "Suscríbete a Artículos Publicados", y copia esa dirección.
- Para mostrar tus elementos publicados: Haz click en "Mis elementos publicados" en la parte superior de la pantalla y luego haz click en "Mis elementos publicados" sobre la derecha, debajo de "Suscríbete a Artículos Publicados", y copia esa dirección.

"Elementos publicados por mis amigos" debería verse así: "http://www.facebook.com/feeds/share_friends_posts.php?id=(algunos-numeros)&key=(un-codigo)&format=rss20"
"Mis elementos publicados" debería verse así: "http://www.facebook.com/feeds/share_posts.php?id=(algunos-numeros)&viewer=(algunos-numeros)&key=(un-codigo)&format=rss20"


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
-> 0.3 - 2008.12.14 - Arreglé un problema del charset en la descripción.
-> 0.2 - 2008.12.11 - Cambié 'explode' por 'RegEx' gracias a NeoEGM.
-> 0.1 - 2008.12.10 - Nacimiento del plugin. Usando 'explode'.


POSIBLES COSAS PARA HACER
-> Usar la descripción para algo.
-> Hacer una página con todos los items, no sólo una lista.


AGRADECIMIENTOS:
-> NeoEGM - http://www.neoegm.com/
-> Pato - http://www.dejamedejoder.com.ar/


MÁS INFO
http://www.fepe55.com.ar/blog/facebook-posted-items/