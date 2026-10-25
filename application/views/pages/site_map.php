<?php 
$dt = new DateTime('now', new DateTimeZone('UTC'));

foreach ($site_map as $key => $value) {	
    echo '<url>';
    echo '<loc>https://opensciencepublications.com/fulltextarticles/'.$value['post_title'].'.html</loc>';
    echo '<lastmod>' . $dt->format('c') . '</lastmod>';
    echo '<priority>0.52</priority>';
    echo '</url>';
}
?>