<section class="InnerbanerBGWrap">
    <div class="InnerbanerBG"> 
        <h1><?php echo $p_info[0]['journal_name']; ?> </h1>  
    </div> 
</section>
<section id="content" style="margin-bottom: 0px;">

			<div class="content-wrap"> 
				<div class="container clearfix topmargin-sm">

                    <!-- Post Content
                    ============================================= -->
                    <div class="postcontent nobottommargin col_last clearfix eb-page-wrap">  
					<h3> <?php echo $p_info[0]['post_name']; ?></h3> 
                    <?php 
                        //print_r($get_archive_info);
                        if(!empty($p_info[0]['post_type']) && isset($p_info[0]['post_type'])) {
                            foreach ($p_info as $key => $value) {
                                echo '<div class="media"> <div class="media-left pull-left">';
if(isset($value['eb_member_photo']) && !empty($value['eb_member_photo'])) {
echo '<img alt="'.$value['eb_member_name'].'" class="media-object" src="'.base_url().'wp-content/uploads/'.$value['eb_member_photo'].'" width="100" height="100">';
} else {
echo '<img alt="'.$value['eb_member_name'].'" class="media-object" src="'.base_url().'wp-content/uploads/awaiting-image.jpg" width="100" height="100">';
}

echo '</div> <div class="media-body"> <h4 class="media-heading">'.$value['eb_member_name'].'</h4>'.$value['eb_member_desc'].'</div> </div>';
                            }
                        } else {
                            echo $p_info[0]['post_content'];
                        }
                    ?>
					
                    </div><!-- .postcontent end -->

                    <!-- Sidebar
                    ============================================= -->
                    <div class="sidebar nobottommargin clearfix">
                        <div class="sidebar-widgets-wrap">  

                            <div class="widget widget_links clearfix"> 
                                <?php                                     
                                    if(!empty($p_info[0]['issn_number']) && isset($p_info[0]['issn_number'])) {
                                    echo '<div class="fancy-title title-center">
    									<h3 class="issno"> [ISSN: - '.$p_info[0]['issn_number'].']  </h3> 	
    								</div>';
                                        
                                    };
                                ?>
                                <ul class="JournalListMenu">                                    
                                    <?php 
                                        foreach ($links_info as $key => $value) {
                                            echo '<li><a href="'.base_url().''.$value['journal_url_slug'].'/'.$value['post_slug'].'">
                                            <div class="'.((strpos($this->uri->segment(2), $value['post_slug']) !== false)?'active':'').'">'.$value['post_name'].'</div></a></li>';
                                        }
                                    ?>
                                    
									 
                                </ul> 
                            </div> 
                            <div class="widget clearfix">
								<div class="ConfRespons">
									 <img src="<?php echo base_url(); ?>wp-content/uploads/<?php echo $p_info[0]['journal_image']; ?>" alt="Image" style="width:90%; padding-top:5px;">  
								</div>
                            </div>                             
                        </div>
                    </div><!-- .sidebar end -->

                </div>
			</div> 

		</section>