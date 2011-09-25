=== Plugin Name ===
Contributors: fepe55
Donate link: http://www.fepe55.com.ar/blog/faq/#donaciones
Tags: Facebook, Posted Items
Requires at least: 2.0.2
Tested up to: 3.2.1
Stable tag: 0.4

This plugin fetches posted items from Facebook and displays them in an unordered list with proper links and comments.

== Description ==

This plugin fetches posted items from Facebook and displays them in an unordered list with proper links and comments.

Facebook keeps on changing the URL for the feeds, but for now you can find the one you want following the steps on this website: http://www.kristi-barrow.com/facebook-rss-feeds-what-is-available/

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
