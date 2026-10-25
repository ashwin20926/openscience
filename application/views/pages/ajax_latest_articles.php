<div class="clearfix bottommargin-lg topmargin common-height LatestArticles"> 
	<?php 
		foreach ($latest_articles as $key => $value) {
			echo '<div class="col-lg-6 bottommargin" style="height: 88px;">   
				<div class="feature-box fbox-large fbox-rounded fbox-effect">
					<div class="fbox-icon">
<!---						<img src="http://www.opensciencepublications.com/wp-content/uploads/not-found.png"> --->
<img src="'.base_url().'/wp-content/uploads/'.$value['article_image'].'" alt="'.$value['article_image'].'" />

					</div>
					<p> <a href="'.$value['pdf_link'].'">'.$value['article_name'].'</a> </p>
					<div class="row">

							<div class="col-md-5">'.$value['author_name'].'</div>';
if((isset($value['post_slug']) && !empty($value['post_slug'])) && (isset($value['journal_url_slug']) && !empty($value['journal_url_slug']))) {
echo '<div class="col-md-7 text-right" style="font-size:13px"><a href="'.base_url().''.$value['journal_url_slug'].'/'.$value['post_slug'].'">'.$value['journal_name'].'</a> </div>';
}
							
					echo '</div>		
				</div> 
			</div>';		
		}
	?>	 																		
</div> <!-- /.row-->