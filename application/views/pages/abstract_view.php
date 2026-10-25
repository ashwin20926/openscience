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
.fulltext-article-wrap .para-text {
    line-height: 24px;
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
.buttons-wrap {
    margin-top: 20px;
}  
.buttons-wrap a {
    background-color: #70b117;
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
           $pdfUrl = base_url().'wp-content/uploads/'.$fulltext_info[0]['post_title'].'.pdf';
        $fullTextUrl = base_url().'fulltextarticles/'.$fulltext_info[0]['post_title'].'.html';
        echo '<div id="content-right">';
        echo '<div class="fulltext-main-part">';
 foreach (json_decode($fulltext_info[0]['post_content']) as $key => $value) {
          if($value->label == 'Abstract') {            
            echo '<h2 class="info-main-heading">'.$value->label.'</h2>';
          }
          $li = true;
          $buttonDisplayed = false;
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
            if($value->label === 'Abstract' || $value->label === 'Title') {
              if ($v1->name == 'paragraph_with_inline_heading') {                                            
                echo '<div class="para-text">';
                echo '<strong>'.$v1->child_tag[0]->value.': </strong>';                
                echo $v1->value;
                echo '</div>';                      
              }
              if ($v1->name == 'paragraph_without_heading') {                                            
                echo '<div class="para-text">';                  
                echo $v1->value;
                echo '</div>';                      
              }
              if ($v1->name == 'paragraph_with_block_heading') {                                            
                echo '<div class="para-text">';
                echo '<div><strong>'.$v1->child_tag[0]->value.': </strong></div>';                
                echo $v1->value;
                echo '</div>';        
              }
            }  
            
          }
            if($value->label == 'Abstract' && $buttonDisplayed == false) {
                 $buttonDisplayed = true;
                 echo '<div class="row buttons-wrap" style="margin-top: 20px">';
                echo '<div class="col-sm-6"><a  href="'.$fullTextUrl.'"><button style="background-color: #70b117;" type="button" class="btn btn-primary btn-lg btn-block">Full Text</button></a></div>';
                echo '<div class="col-sm-6"><a href="'.$pdfUrl.'" download><button style="background-color: #70b117;" type="button" class="btn btn-primary btn-lg btn-block">Download PDF</button></a></div>';
                echo '</div>';
              }
          echo '</div>';
        }
       
        echo '</div>';
        echo '</div>';
            
          ?>
      </div>
    </div>
  </div> 
</section>
