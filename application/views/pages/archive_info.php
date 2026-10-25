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
    <div class="postcontent nobottommargin col_last clearfix">  
        <h3> <?php echo $p_info[0]['post_name']; ?></h3> 
        <?php if(isset($articles_info[0]) && !empty($articles_info[0])) { ?>
            <span class="rss-button"><a target="_blank" href="<?php echo base_url(); ?>feed/?journal=<?php echo $articles_info[0]['journal_url_slug']; ?>&type=<?php echo $articles_info[0]['archive_in']; ?>">Rss Feed&nbsp;<img src="<?php echo base_url(); ?>public/images/rss.png" alt="Rss Feed"></a></span>
        <?php } ?>
        <?php 
//print_r($articles_info);
        if(!empty($articles_info) && isset($articles_info)) {
            $name_flag = true;
            $article_array = array(); 
            $year_arr = array();
            $article_data = [];                       
            foreach ($articles_info as $key => $value) {
                $article_array[$value['volume_name']][] = $value;
                array_push($year_arr, $value['archive_year']);
                $article_data[$value['archive_year']][$value['archive_volume']][] = $value;                          
            }

            foreach ($article_array as $key => $value) {
                foreach ($value as $k => $v) {                                    
                    if($v['archive_in'] === '1' || $v['archive_in'] === '2') {
                        if($name_flag) {
                            echo '<div style="text-transform:capitalize;font-size:15px;font-weight:bold;margin-bottom:10px"><b>'.$key.'</b></div>';
                        }
                        echo '<div class="promo promo-light bottommargin-sm">';
                        if($v['article_type']) {
                            if($v['article_type'] == 1) {
                                $v['article_type'] = 'Review Article';
                            } else if($v['article_type'] == 2) {
                                $v['article_type'] = 'Research Article';
                            } else if($v['article_type'] == 3) {
                                $v['article_type'] = 'Supplementary Information';
                            } else if($v['article_type'] == 3) {
                                $v['article_type'] = 'Supplementary Information';
                            } else if($v['article_type'] == 4) {
                                $v['article_type'] = 'Case Report';
                            } else if($v['article_type'] == 5) {
                                $v['article_type'] = 'Editorial';
                            } else if($v['article_type'] == 6) {
                                $v['article_type'] = 'Short Communication';
                            } else if($v['article_type'] == 7) {
                                $v['article_type'] = 'Letter to Editor';
                            } else if($v['article_type'] == 8) {
                                $v['article_type'] = 'Clinical Images';
                            } else if($v['article_type'] == 9) {
                                $v['article_type'] = 'Images Section';
                            } else if($v['article_type'] == 10) {
                                $v['article_type'] = 'Pictorial Essay';
                            } else if($v['article_type'] == 11) {
                                $v['article_type'] = 'Commentary';
                            } else if($v['article_type'] == 12) {
                                $v['article_type'] = 'Case Series';
                            }
                            echo '<h4 class="Article"> <i class="icon-double-angle-right"></i>'.$v['article_type'].'</h4>';
                        }
                        echo '<div class="ArticleHead">';
                        if($v['archive_desc']) {                                            
                            echo html_entity_decode($v['archive_desc'], ENT_QUOTES, "UTF-8");
                        }
                        if((isset($v['article_link']) && !empty($v['article_link'])) && (isset($v['article_title']) && !empty($v['article_title']))) {
                            echo '<ul class="iconlist"><li><a href="'.$v['article_link'].'"> <i class="icon-caret-right"></i>'.$v['article_title'].'</a></li></ul>'; 
                        }
                        if($v['article_authors']) {
                            echo '<p class="ArticleCont"> <b> Corresponding Author :</b>'.$v['article_authors'].'</p>'; 
                        }

                       
                        if((isset($v['archive_fulltext']) && !empty($v['archive_fulltext'])) && (isset($v['article_link']) && !empty($v['article_link']))) {
                            echo '<div class="btn-wrapper">';
                            if ($v['json_format'] === '1') {
                               echo '<p class="pdf_para"><a target="_blank" href="'.base_url().'abstract/'.$v['post_browser_title_slug'].'" target="_blank" class="icon-pdf">Abstract</a> </p>';
                            }
                            echo '<p class="full_text_para"><a target="_blank" href="'.base_url().'fulltextarticles/'.$v['archive_fulltext'].'" target="_blank" class="icon-fulltext">Full Text</a></p>';
                            echo '<p class="pdf_para"><a target="_blank" href="'.base_url().'wp-content/uploads/'.$v['archive_pdf'].'" target="_blank" class="icon-pdf"> PDF</a> </p>';
                           // echo '<p class="full_text_para"><a target="_blank" href="'.base_url().'fulltextarticles/xml/'.$v['archive_fulltext'].'" target="_blank" class="icon-fulltext">XML </a></p>';
                            echo '</div>';
                        }
                        if(isset($v['supli_pdf']) && !empty($v['supli_pdf'])) {
                            echo '<div class="btn-wrapper">';
                            echo '<p class="pdf_para"><a target="_blank" href="'.base_url().'wp-content/uploads/'.$v['supli_pdf'].'" target="_blank" class="icon-pdf"> S Pdf</a> </p>';
                            echo '</div>';
                        }


                        if($v['id'] == '357') {
                            echo '<div class="btn-wrapper">';
                            $extraspdfs = array("Supplementary file 1_PHF incentives", "Supplementary file 2_Cooking comp judges checklist", "Supplementary file 3_Clean Home judging checklist", "Supplementary file 4 - 100 Rupees a day handbook","Supplementary file 5_Sample survey","Supplementary file 6_Sample questionnaire","Supplementary file 7_Focus group discussion");                                 

                            foreach ($extraspdfs as $k => $v) {
                                echo '<p class="pdf_para"><a target="_blank" href="'.base_url().'wp-content/uploads/'.$v.'.pdf" class="icon-pdf"> S Pdf '.($k + 1).'</a> </p>';
                            }

                            echo '</div>';
                        }
                        echo '</div>';
                        echo '</div>';
                    }                                     
                    $name_flag = false;
                }
            }
            if(strpos($this->uri->segment(2), 'archive') !== false) {
                $loop_flag = true;
                echo '<div class="tabs tabs-bordered clearfix ui-tabs ui-widget ui-widget-content ui-corner-all" id="tab-2">';
                echo '<ul class="tab-nav clearfix ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all" role="tablist">';
                foreach ($article_data as $key => $value) {
                    if($loop_flag) {
                        echo '<li class="ui-state-default ui-corner-top ui-tabs-active ui-state-active"     role="tab" tabindex="0" aria-controls="'.$key.'" aria-labelledby="'.$key.'-tab" aria-selected="true" aria-expanded="true"><a href="#'.$key.'" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="'.$key.'-tab">'.$key.'</a></li>';
                    } else {
                        echo '<li class="ui-state-default ui-corner-top"     role="tab" tabindex="0" aria-controls="'.$key.'" aria-labelledby="'.$key.'-tab" aria-selected="true" aria-expanded="true"><a href="#'.$key.'" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="'.$key.'-tab">'.$key.'</a></li>';
                    }
                    $loop_flag = false;
                }
                echo '</ul>';
                echo '<div class="tab-container">';
                $volume_name_flag = true;
                foreach ($article_data as $key => $value) {

                    echo '<div class="tab-content clearfix ui-tabs-panel ui-widget-content ui-corner-bottom" id="'.$key.'" aria-labelledby="ui-id-1" role="tabpanel" aria-hidden="false" style="display: block;">';
                    $i = 0;
                    foreach ($value as $k => $v) {
                        echo '<div class="toggle toggle-bg">';
//if($volume_name_flag) {
                        echo '<div class="togglet"><i class="toggle-closed icon-ok-circle"></i><i class="toggle-open icon-remove-circle"></i>'.$v[$i]['volume_name'].'</div>';
//}
                        echo '<div class="togglec">';
                        foreach ($v as $a => $b) {                                                                                                         
                            echo '<div class="promo promo-light bottommargin-sm">';
                            if($b['article_type'] == 1) {
                                $b['article_type'] = 'Review Article';
                            } else if($b['article_type'] == 2) {
                                $b['article_type'] = 'Research Article';
                            } else if($b['article_type'] == 3) {
                                $b['article_type'] = 'Supplementary Information';
                            } else if($b['article_type'] == 3) {
                                $b['article_type'] = 'Supplementary Information';
                            } else if($b['article_type'] == 4) {
                                $b['article_type'] = 'Case Report';
                            } else if($b['article_type'] == 5) {
                                $b['article_type'] = 'Editorial';
                            } else if($b['article_type'] == 6) {
                                $b['article_type'] = 'Short Communication';
                            } else if($b['article_type'] == 7) {
                                $b['article_type'] = 'Letter to Editor';
                            } else if($b['article_type'] == 8) {
                                $b['article_type'] = 'Clinical Images';
                            } else if($b['article_type'] == 9) {
                                $b['article_type'] = 'Images Section';
                            } else if($b['article_type'] == 10) {
                                $b['article_type'] = 'Pictorial Essay';
                            } else if($b['article_type'] == 11) {
                                $b['article_type'] = 'Commentary';
                            } else if($b['article_type'] == 12) {
                                $b['article_type'] = 'Case Series';
                            }

                            echo '<h4 class="Article"> <i class="icon-double-angle-right"></i> '.$b['article_type'].' </h4>';

                            echo '<div class="ArticleHead">';
                            if((isset($b['article_link']) && !empty($b['article_link'])) && (isset($b['article_title']) && !empty($b['article_title']))) {
                                echo '<ul class="iconlist"> 
                                <li><a target="_blank" href="'.$b['article_link'].'"> <i class="icon-caret-right"></i>'.$b['article_title'].'</a> </li>
                                </ul>';
                            }
                            if($b['article_authors']) {
                                echo '<p class="ArticleCont"> <b> Corresponding Author: </b>'.$b['article_authors'].'</p>';
                            }
                            echo '<div class="btn-wrapper">';
                            if((isset($b['archive_fulltext']) && !empty($b['archive_fulltext'])) && (isset($b['article_link']) && !empty($b['article_link']))) {                                               
                                   if ($b['json_format'] === '1') {
                               echo '<p class="pdf_para"><a target="_blank" href="'.base_url().'abstract/'.$b['post_browser_title_slug'].'" target="_blank" class="icon-pdf">Abstract</a> </p>';
                            }
                                echo '<p class="full_text_para"><a href="'.base_url().'fulltextarticles/'.$b['archive_fulltext'].'" target="_blank" class="icon-fulltext">Full Text</a></p><p class="pdf_para"><a href="'.$b['article_link'].'" target="_blank" class="icon-pdf"> PDF</a> </p>';
                               // <p class="full_text_para"><a target="_blank" href="'.base_url().'fulltextarticles/xml/'.$b['archive_fulltext'].'" target="_blank" class="icon-fulltext">XML </a></p>';                                                                        

                            }
                            if(isset($b['supli_pdf']) && !empty($b['supli_pdf'])) {
                                echo '<p class="pdf_para"><a target="_blank" href="'.base_url().'wp-content/uploads/'.$b['supli_pdf'].'" target="_blank" class="icon-pdf"> S Pdf</a> </p>';
                            }
                            echo '</div>'; 
                            if($b['id'] == 187) {
                                echo '<div class="videos-wrap">';
                                echo '<div class="videos-heading"><strong>Suplimentary Videos</strong></div>';
                                echo '<video height="200" controls="">';
                                echo '<source src="'.base_url().'wp-content/uploads/Video_1.mp4" type="video/mp4">';
                                echo '</video>';
                                echo '<video height="200" controls="">';
                                echo '<source src="'.base_url().'wp-content/uploads/Video_2.mp4" type="video/mp4">';
                                echo '</video>';
                                echo '<video height="200" controls="">';
                                echo '<source src="'.base_url().'wp-content/uploads/Video_3.mp4" type="video/mp4">';
                                echo '</video>';
                                echo '<video height="200" controls="">';
                                echo '<source src="'.base_url().'wp-content/uploads/Video_4.mp4" type="video/mp4">';
                                echo '</video>';
                                echo '<video height="200" controls="">';
                                echo '<source src="'.base_url().'wp-content/uploads/Video_5.mp4" type="video/mp4">';
                                echo '</video>';
                                echo '</div>';
                            }             else if($b['id'] == '339') {
                                echo '<div class="btn-wrapper">';
                                $extraspdfs = array("S1 - Girls_growth_chart", "S2 - Boys_growth_chart", "S3 - Feasibility_questionnaire_on_nutrition_program", "S4 - Nutrition_Community_Project_Plan","S5 - Trainers_Manual_docx","S6 - Recipes_for_cooking_demonstrations","S7 - Malt_Drink_Recommendations","S8 - Improving_nutritonal_quality_of_meal_program","S9 - Improving_protein_quality_of_meals","S10 - Photo1_Schoolchildren_taking_their_school_lunch_EW","S11 - Photo2_SIF_volunteers_and_PHF_staff_at_home_visit_EW","S12 - Illustration_1_Nutrition_for_the_Parikrma_Soul","S13 - Illustration_2_Eating_for_a_Healthier_Tomorrow");                                 

                                foreach ($extraspdfs as $k => $v) {
                                    echo '<p class="pdf_para"><a target="_blank" href="'.base_url().'wp-content/uploads/'.$v.'.pdf" class="icon-pdf"> S Pdf '.($k + 1).'</a> </p>';
                                }

                                echo '</div>';
                            }     
                            echo '</div>'; 
                            echo '</div>'; 
                        }
                        echo '</div>';
                        echo '</div>';
                    }
                    echo '</div>';
                    $volume_name_flag = false;
                }
                echo '</div>';
                echo '</div>';
            }
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
                        echo '<li><a href="'.base_url().''.$value['journal_url_slug'].'/'.$value['post_slug'].'"><div>'.$value['post_name'].'</div></a></li>';
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