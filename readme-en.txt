AUTHOR
Fepe - http://www.fepe55.com.ar/blog/


FEATURES
This plugin fetches posted items from Facebook and displays them in an unordered list with proper links and comments.

Facebook keeps on changing the URL for the feeds, but for now you can find the one you want following the steps on this website: http://www.kristi-barrow.com/facebook-rss-feeds-what-is-available/


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
-> 0.4.1 - 2011.09.28 - Fixed a minor bug
-> 0.4 - 2011.09.25 - Changed the RegEx (thanks to MAN for the suggestion)
-> 0.4b - 2010.01.06 - Changed fetch_rss (deprecated) to fetch_feed.
-> 0.3 - 2008.12.14 - Corrected the charset.
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
