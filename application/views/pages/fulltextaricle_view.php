<style type="text/css">
  .fulltext-article-wrap {overflow: hidden;}
  .fulltext-article-wrap h1,.fulltext-article-wrap h2,.fulltext-article-wrap h3 {
    margin: 0;
    padding: 0;
    color: #000;
  } 
  .fulltext-article-wrap ol li {
    padding-bottom: 10px;
    margin: 0 0 0 35px;
  }
  .fulltext-article-wrap h2 {font-size: 20px;}
  .fulltext-article-wrap hr {
    margin: 0;
    padding: 0;
  }
  .fulltext-article-wrap #content-left {
    float: left;
    width: 170px;   
    padding: 0;
  }
  .fulltext-article-wrap #content-right {
    float: right;
    width: calc(100% - 185px);
    border: 1px solid #efdfdf;
    padding: 15px;
  }
  #content p {
    font-size: 13px;
    line-height: 180%;
    text-align: justify;
    color: #222;
    font-family: Verdana,Helvetica,sans-serif;
    margin: 0;
  }
  .fulltext-article-wrap h1.heading {
    font-size: 16px;
    color: #000;
    padding-top: 10px;
    text-align: center;
    font-family: Verdana,Helvetica,sans-serif;
  }
  .fulltext-article-wrap h2.sub-heading {
    font-size: 12px;
    color: #8c8c8c;
    padding-left: 10px;
    text-align: center;
    margin-bottom: 15px;
    font-family: Verdana,Helvetica,sans-serif;
}
#figure{border:1px solid #ccc;min-height:120px;background:#ccc;}
#fig-left{width:120px;float:left;padding-left:10px;padding-top:5px;}
#fig-right {width:720px;}
#content-left {
    width: 150px;
    float: left;
    margin-top: 0;
    //position: fixed;
    padding-left: 30px;
    padding-right: 30px;
}
.nav-bar {
    border: 1px solid #ccc;
    background: #ffffff;
    border-radius: 0;
    border: 1px solid #ddd;
    box-shadow: 0 1px 4px rgba(0, 0, 0, 0.067);
}
.nav-bar ul {
    margin-left: 20px;
    padding: 0px;
    margin: 0;
}
.nav-bar ul li a {
    font-size: 13px;
    font-weight: 600;
    display: block;
    text-align:center;
    padding: 8px;
    color:#000;
}
.nav-bar ul li a:hover {background: #eee;}
.nav-bar ul li {list-style:none;border-top: 1px solid #ddd;}
.nav-bar ul li:first-child {border-top: 0 none;}

.fulltext-main-part {line-height:28px;}
   .fulltext-main-part .small-title {margin-bottom:20px;}
   .fulltext-main-part h1,.fulltext-main-part h2,.fulltext-main-part h3{margin: 0;padding: 0 0 20px 0;}
   .fulltext-main-part .para-text{padding-bottom: 20px;}
   .fulltext-main-part .info-main-heading {font-size: 20px;margin:0 0 10px 0;padding:0;font-weight:bold;}
   .fulltext-main-part .info-sub-heading {
    font-size: 18px;
    margin: 0;
    padding: 0 0 10px 0;
   }
   .fulltext-main-part .para-text ul {margin-left:20px;}
   .fulltext-main-part .para-text ul li {list-style-type: disc !important;}
   .fulltext-main-part .f-info-box {border-bottom: 1px solid #ccc;margin-bottom:20px;}
   .fulltext-main-part .f-info-box:last-child {border-bottom:0 none;}
   .fulltext-main-part .figure-info-box {
    background-color: #cccccc;
    padding: 15px;
    margin: 0 0 20px 0;
    overflow:hidden;
    }
    .fulltext-main-part .figure-box {
    text-align: center;
    background: #ccc;
    margin: 20px 0;
    padding: 20px;
  }
  
   .fulltext-main-part .figure-info-box img {
    float: left;
    margin: 7px 10px 5px 0;
    display: inline-block;
    }
   .fulltext-main-part .article-main-part ul li {margin-bottom:10px;}
   .fulltext-main-part hr {padding:0;margin:20px 0;}
   .fulltext-main-part #references-info ol {list-style-type:decimal;margin:0 0 10px 15px;}
   .fulltext-main-part #references-info ol li {margin-bottom:5px;}
   @media screen and (max-width: 1200px) {
  .fulltext-article-wrap #content-left {
      width: 100%;
      margin: 0 0 20px;
  }
  #content-left .nav-tabs {
      width:100%;
      margin-top: 10px;
      margin-bottom: 10px;
  }
  #content-right {
      width: 100% !important;
  }
  #colophon .container {
      width: 100% !important;
  }
  #colophon #footer-top {
      height: auto;
  }
  a.download-pdf-btn {
      top: -25px;
      right:0;
  }

  
</style>
<section class="InnerbanerBGWrap">
  <div class="InnerbanerBG"> 
    <h1><?php echo $fulltext_info[0]['journal_name']; ?> </h1>  
  </div> 
</section>
<section id="content" style="margin-bottom: 0px;">
  <div class="content-wrap fulltext-page"> 
    <div class="container clearfix topmargin-sm">
      <div class="fulltext-article-wrap">
          <?php 
          if($fulltext_info[0]['json_format'] == 0) {
              echo stripslashes($fulltext_info[0]['post_content']);
          } else {
              echo '<div id="content-left">';
              echo '<div id="myScrollspy" class="nav-bar">';
        echo '<ul id="myNav" class="nav nav-tabs nav-stacked affix-top">';
          foreach (json_decode($fulltext_info[0]['post_content']) as $key => $value) {
            //print_r($value);
            //if(strtolower($value->label) !== 'citation') {
            echo '<li><a href="#'.str_replace(" ", "-", $value->label).'-info">'.$value->label.'</a></li>';
           // }
          } 
        echo '</ul>';
        echo '</div>';
        echo '</div>';
        echo '<div id="content-right">';
        echo '<div class="fulltext-main-part">';
        foreach (json_decode($fulltext_info[0]['post_content']) as $key => $value) {          
            
          
          //print_r($value->tags);
          
          //print_r($value);
         // if(strtolower($value->label) !== 'citation') {
          echo '<div id="'.str_replace(" ", "-", $value->label).'-info" class="f-info-box">';
          if($value->name !== 'title') {            
            echo '<h2 class="info-main-heading">'.$value->label.'</h2>';
          }
          $li = true;
          foreach ($value->tags as $k1 => $v1) {                        
              if($v1->name == 'article_type') {
            echo '<div class="small-title"><strong>'.$v1->value.'</strong></div>';            
          }
            if($v1->name == 'main_heading') {
                echo '<h1 class="heading"><strong>'.$v1->value.'</strong></h1>';
            }
            if($v1->name == 'author') {              
              echo '<h2 class="sub-heading">'.$v1->value.'</sup></h2>';
            }
            if($v1->name == 'paragraph_with_inline_heading') {                                            
                  echo '<div class="para-text">';
                  echo '<strong>'.$v1->child_tag[0]->value.': </strong>';                
                  echo $v1->value;
                  echo '</div>';                      
            }
            if($v1->name == 'paragraph_without_heading') {                                            
                  echo '<div class="para-text">';                  
                  echo $v1->value;
                  echo '</div>';                      
            }
            if($v1->name == 'paragraph_with_block_heading') {                                            
                  echo '<div class="para-text">';
                  echo '<div><strong>'.$v1->child_tag[0]->value.': </strong></div>';                
                  echo $v1->value;
                  echo '</div>';        
            }
            if($v1->name == 'figure_info_box') {
            echo '<div class="figure-info-box para-text"><div>';            
            echo '<a target="_blank" href="'.$v1->child_tag[0]->value.'" alt="" height="100"><img class="figure-img" src="'.$v1->child_tag[0]->value.'" alt="JAP-2330-2178-05-0039-fig1" height="100"></a></div>
              '.$v1->value.'
            </div>';
            }
            if($v1->name == 'figure_box') {
            echo '<div class="figure-box"><div>';            
            echo '<a target="_blank" href="'.$v1->value.'"><img class="figure-img" src="'.$v1->value.'" alt=""></a></div>
            </div>';
            }
            if($v1->name == 'reference_links') {                
                
                echo '<div id="ref'.$key.'">';
                if($value->label == 'References') {
                    echo ($k1 + 1).'.  ';
                }
                echo '<a href="'.$v1->child_tag[0]->value.'">'.$v1->value.'</a>';
                echo '</div>';
                
                
            }
            
          }
          echo '</div>';
              // }     
        }
        if(strtolower($value->label) == 'citation') {
            
            //print_r($value->tags->value);
            echo '<div id="myModal" class="modal fade"><div class="modal-dialog"><div class="modal-content"><div class="modal-header">×<span class="sr-only">Close</span><h4 id="myModalLabel" class="modal-title">Get Citation</h4></div><div class="modal-body">'.$value->tags[0]->value.'</div></div></div></div>';
        }
        echo '</div>';
        echo '</div>';
          }
            
          ?>
      </div>
    </div>
  </div> 
</section>
