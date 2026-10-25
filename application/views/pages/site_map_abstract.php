<?php 
$dt = new DateTime('now', new DateTimeZone('UTC'));
foreach ($site_map_abstract as $key => $value) {	
    echo '<url>';
    echo '<loc>https://opensciencepublications.com/abstract/' . $value['post_browser_title_slug'] . '</loc>';
    echo '<lastmod>' . $dt->format('c') . '</lastmod>';
    echo '<priority>0.52</priority>';
    echo '</url>';
}
?>