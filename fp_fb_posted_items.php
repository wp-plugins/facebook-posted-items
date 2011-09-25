<?php
/*
Plugin Name: Facebook Posted Items
Plugin URI: http://www.fepe55.com.ar/blog/facebook-posted-items/
Description: Goes all the way to Facebook and fetches the posted items to show them to you.
Version: 0.4
Author: Fepe
Author URI: http://www.fepe55.com.ar/blog/
*/

/*
Version History
0.4 - 2011.09.25 - Changed the RegEx by MAN's suggestion.
0.4b - 2010.01.06 - Changed fetch_rss (deprecated) to fetch_feed.
0.3 - 2008.12.14 - Corrected the charset.
0.2 - 2008.12.11 - Changed explode to RegEx thanks to NeoEGM
0.1 - 2008.12.10 - The plugin was born. Using explode.
*/

/*
Possible TODOs
- Do something with the description
- Make a page with all the items, not only as a list
*/


function fb_posted_items ($url="", $numitems=5, $before_list="<ul>",$after_list="</ul>",$before_item="<li>",$after_item="</li>"){

// Get RSS Feed(s)
include_once(ABSPATH . WPINC . '/rss.php');
$rss = fetch_feed($url); // Fetches the RSS
$maxitems = $rss->get_item_quantity($numitems); 
$items = $rss->get_items(0, $maxitems);

echo $before_list;
 if (empty($items))
	echo '<li>No items</li>';
else
	foreach ( $items as $item ) : 

preg_match('/a href="([^"]*)/', $item->get_description(), $item_url);
preg_match('/span class="story_comment">(.*)<\/span></', $item->get_description(), $item_comment); // FB keeps changing, so for now this won't work
preg_match('/div class="summary">(.*)<\/div><\/div><\/div><\/div><div class="story_comment_quote">/',$item->get_description, $item_description); // FB keeps changing, so for now this won't work

$item_url[1] = htmlentities($item_url[1]);
$item_description[1] = htmlentities(strip_tags ($item_description[1]),ENT_QUOTES,"UTF-8"); // The description of the item. Saved for future use :p
$item_comment[1] = htmlentities(strip_tags ($item_comment[1]),ENT_QUOTES,"UTF-8"); // Your comment on the item

echo $before_item;?><a rel="nofollow" href="<?=$item_url[1]; ?>"><?=$item->get_title(); ?></a><?=$after_item;?>
<?php endforeach; ?>

<?php echo $after_list;
}

function fb_posted_items_url ($url="", $numitems=5){

// Get RSS Feed(s)
include_once(ABSPATH . WPINC . '/rss.php');
$rss = fetch_rss($url); // Fetches the RSS
$maxitems = $numitems; // Number of items to be fetched
$items = array_slice($rss->items, 0, $maxitems);

foreach ( $items as $item ) : 

preg_match('/a href="(.*)" title=/', $item['description'], $item_url);

$item_url[1] = htmlentities($item_url[1]);
echo "[youtube]".$item_url[1]."[/youtube]";?>

<?php endforeach;

}

?>

