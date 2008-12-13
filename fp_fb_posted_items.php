<?php
/*
Plugin Name: Facebook Posted Items
Plugin URI: http://www.fepe55.com.ar/blog/facebook-posted-items/
Description: Goes all the way to Facebook and fetches the posted items to show them to you.
Version: 0.2
Author: Fepe
Author URI: http://www.fepe55.com.ar/blog/
*/

/*
Version History
0.2 - 2008.12.11 - Changed explode to RegEx thanks to NeoEGM
0.1 - 2008.12.11 - The plugin was born. Using explode.
*/

/*
Possible TODOs
- Do something with the description
- Make a page with all the items, not only as a list
*/


function fb_posted_items ($url="", $numitems=5, $before_list="<ul>",$after_list="</ul>",$before_item="<li>",$after_item="</li>"){

// Get RSS Feed(s)
include_once(ABSPATH . WPINC . '/rss.php');
$rss = fetch_rss($url); // Fetches the RSS
$maxitems = $numitems; // Number of items to be fetched
$items = array_slice($rss->items, 0, $maxitems);

echo $before_list;
 if (empty($items))
	echo '<li>No items</li>';
else
	foreach ( $items as $item ) : 

preg_match('/a href="(.*)" title=/', $item['description'], $item_url);
preg_match('/span class="story_comment_back_quote">(.*)<\/span></',$item['description'], $item_comment);
preg_match('/div class="summary">(.*)<\/div><\/div><\/div><\/div><div class="story_comment_quote">/',$item['description'], $item_description);

$item_url[1] = htmlentities($item_url[1]);
$item_description[1] = strip_tags ($item_description[1]); // The description of the item. Saved for future use :p
$item_comment[1] = strip_tags ($item_comment[1]); // Your comment on the item


echo $before_item;?><a rel="nofollow" href="<?=$item_url[1]; ?>" title="<?=$item_comment[1]; ?>"><?=$item['title']; ?></a><?=$after_item;?>
<?php endforeach; ?>

<?php echo $after_list;
}
?>
