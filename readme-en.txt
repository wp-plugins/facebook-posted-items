AUTHOR
Fepe - http://www.fepe55.com.ar/blog/


FEATURES
This plugin fetches posted items from Facebook and displays them in an unordered list with proper links and comments.

If you don't know how to get the proper URL, go to Facebook, and then to "Posted Items" on the right sidebar. Then, depending on which feed you want, do one of the following:
- To display your friends posted items: click on "My Friends' Posted Items" on the right, under "Subscribe to Posted Items" and copy that URL.
- To display your posted item: click on "My Posted Items" on the top of the page and then click on "My Posted Items" on the right, under "Subscribe to Posted Items" and copy that URL.

"My Friend's Posted Items" should look like this: "http://www.facebook.com/feeds/share_friends_posts.php?id=(some-numbers)&key=(some-code)&format=rss20"
"My Posted Items" should look like this: "http://www.facebook.com/feeds/share_posts.php?id=(some-numbers)&viewer=(some-numbers)&key=(some-code)&format=rss20"


INSTALLATION
Put the file "fp_fb_posted_items.php" on ~/wp-content/plugins/
On WordPress Admin Panel go to Plugins and activate.


USAGE
Edit your theme files placing the following code where you want it (sidebar.php maybe a good place), changing "http://posted-items-url" with the URL you want (check FEATURES if you don't know how to get it)

<?php if (function_exists("fb_posted_items")) : ?>
<h2>Facebook Posted Items</h2>
<?php fb_posted_items ("http://posted-items-url"); ?>
<?php endif; ?>


PARAMETERS
-> $url - The feed URL (required)
-> $numitems - Default to 5 (optional)
-> $before_list - Default to "<ul>" (optional)
-> $after_list - Default to "</ul>" (optional)
-> $before_item - Default to "<li>" (optional)
-> $after_item - Default to "</li>" (optional)


VERSION HISTORY
-> 0.2 - 2008.12.11 - Changed explode to RegEx thanks to NeoEGM
-> 0.1 - 2008.12.10 - The plugin was born. Using explode.


POSSIBLE TODOs
-> Do something with the description.
-> Make a page with all the items, not only as a list.


THANKS TO:
-> NeoEGM - http://www.neoegm.com/
-> Pato - http://www.dejamedejoder.com.ar/


MORE INFO
http://www.fepe55.com.ar/blog/facebook-posted-items/