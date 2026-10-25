<?php 
$dt = new DateTime('now', new DateTimeZone('UTC'));

foreach ($site_map_pdf as $key => $value) {	
    echo '<url>';
    echo '<loc>'.$value['article_link'].'</loc>';
    echo '<lastmod>' . $dt->format('c') . '</lastmod>';
    echo '<priority>0.53</priority>';
    echo '</url>';
}

?>