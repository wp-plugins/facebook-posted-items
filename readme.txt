=== Plugin Name ===
Contributors: fepe55
Donate link: http://www.fepe55.com.ar/blog/faq/#donaciones
Tags: Facebook, Posted Items
Requires at least: 2.0.2
Tested up to: 2.7
Stable tag: 0.3

This plugin fetches posted items from Facebook and displays them in an unordered list with proper links and comments.

== Description ==

This plugin fetches posted items from Facebook and displays them in an unordered list with proper links and comments.

If you don't know how to get the proper URL, go to Facebook, and then to "Posted Items" on the right sidebar. Then, depending on which feed you want, do one of the following:<br />
- To display your friends posted items: click on "My Friends' Posted Items" on the right, under "Subscribe to Posted Items" and copy that URL.<br />
- To display your posted item: click on "My Posted Items" on the top of the page and then click on "My Posted Items" on the right, under "Subscribe to Posted Items" and copy that URL.

"My Friend's Posted Items" should look like this: `http://www.facebook.com/feeds/share_friends_posts.php?id=(some-numbers)&key=(some-code)&format=rss20`<br />
"My Posted Items" should look like this: `http://www.facebook.com/feeds/share_posts.php?id=(some-numbers)&viewer=(some-numbers)&key=(some-code)&format=rss20`

== Installation ==

Put the file `fp_fb_posted_items.php` on `~/wp-content/plugins/`
On WordPress Admin Panel go to Plugins and activate.

**USAGE**<br />
Edit your theme files placing the following code where you want it (sidebar.php maybe a good place), changing "http://posted-items-url" with the URL you want (check the Description if you don't know how to get it)

`<?php if (function_exists("fb_posted_items")) : ?>`
`<h2>Facebook Posted Items</h2>`
`<?php fb_posted_items ("http://posted-items-url"); ?>`
`<?php endif; ?>`

Parameters:<br />
-> `$url` - The feed URL (required)<br />
-> `$numitems` - Default to 5 (optional)<br />
-> `$before_list` - Default to `<ul>` (optional)<br />
-> `$after_list` - Default to `</ul>` (optional)<br />
-> `$before_item` - Default to `<li>` (optional)<br />
-> `$after_item` - Default to `</li>` (optional)