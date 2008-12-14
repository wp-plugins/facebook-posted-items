AUTOR
Fepe - http://www.fepe55.com.ar/blog/


CARACTER�STICAS
Este plugin recupera los elementos publicados en Facebook y los muestra en una lista con sus correspondientes links y comentarios.

Si no sabes donde conseguir la URL (direcci�n web) que se necesita, ve a Facebook, luego a "Elementos Publicados" en la barra lateral derecha. Luego, dependiendo de lo que quieras mostrar, haz uno de los siguientes:
- Para mostrar los elementos publicados por tus amigos: Haz click en "Elementos publicados por mis amigos" sobre la derecha, debajo de "Suscr�bete a Art�culos Publicados", y copia esa direcci�n.
- Para mostrar tus elementos publicados: Haz click en "Mis elementos publicados" en la parte superior de la pantalla y luego haz click en "Mis elementos publicados" sobre la derecha, debajo de "Suscr�bete a Art�culos Publicados", y copia esa direcci�n.

"Elementos publicados por mis amigos" deber�a verse as�: "http://www.facebook.com/feeds/share_friends_posts.php?id=(algunos-numeros)&key=(un-codigo)&format=rss20"
"Mis elementos publicados" deber�a verse as�: "http://www.facebook.com/feeds/share_posts.php?id=(algunos-numeros)&viewer=(algunos-numeros)&key=(un-codigo)&format=rss20"


INSTALACI�N
Poner el archivo "fp_fb_posted_items.php" en ~/wp-content/plugins/
En el panel de administraci�n de Wordpress, ir a Plugins y activarlo.


USO
Edita los archivos de tu plantilla ingresando el siguiente c�digo donde quieras la lista de los elementos publicados (un buen ejemplo ser�a en la barra lateral -sidebar.php-), cambiando "http://url-elementos-publicados" con la URL que quieras (Si no sabes de d�nde sacarlo, ver CARACTER�STICAS)

<?php if (function_exists("fb_posted_items")) : ?>
<h2>Elementos Publicados En Facebook</h2>
<?php fb_posted_items ("http://url-elementos-publicados"); ?>
<?php endif; ?>


PAR�METROS
-> $url - La URL del feed (requerido)
-> $numitems - Por defecto 5 (opcional)
-> $before_list - Por defecto "<ul>" (opcional)
-> $after_list - Por defecto "</ul>" (opcional)
-> $before_item - Por defecto "<li>" (opcional)
-> $after_item - Por defecto "</li>" (opcional)


VERSIONES PREVIAS
-> 0.3 - 2008.12.14 - Arregl� un problema del charset en la descripci�n.
-> 0.2 - 2008.12.11 - Cambi� 'explode' por 'RegEx' gracias a NeoEGM.
-> 0.1 - 2008.12.10 - Nacimiento del plugin. Usando 'explode'.


POSIBLES COSAS PARA HACER
-> Usar la descripci�n para algo.
-> Hacer una p�gina con todos los items, no s�lo una lista.


AGRADECIMIENTOS:
-> NeoEGM - http://www.neoegm.com/
-> Pato - http://www.dejamedejoder.com.ar/


M�S INFO
http://www.fepe55.com.ar/blog/facebook-posted-items/