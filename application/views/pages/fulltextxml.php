<?php
//print_r($fulltext_info[0]);exit;
echo '<?xml version="1.0" encoding="UTF-8"?>';
echo '<ArticleSet>';
	echo '<Article>';
		echo '<Journal>';
			echo '<PublisherName>Open Science Publications</PublisherName>';
			echo "<JournalTitle>".$fulltext_info[0]['journal_name']."</JournalTitle>";
			echo "<Volume>".$fulltext_info[0]['volume']."</Volume>";
			echo "<Issue>".$fulltext_info[0]['issue']."</Issue>";
			echo "<Issn>".$fulltext_info[0]['issn_number']."</Issn>";
			echo "<IssueTopic>".$fulltext_info[0]['journal_name'].
			"</IssueTopic>";
			echo "<IssueLanguage>English</IssueLanguage>";
			echo "<Season>".$fulltext_info[0]['season']."</Season>";
			echo "<SpecialIssue>";
				
				if($fulltext_info[0]['special_issue'] == "1") {
					echo 'Yes';
				} else {
					echo 'No';
				}
				

			echo "</SpecialIssue>";
            //if(var_dump(checkdate(2,29,2003));)
			echo "<SupplementaryIssue>";
			if($fulltext_info[0]['suplementary_issue'] == "1") {echo 'Yes';} else {echo 'No';} 
			echo "</SupplementaryIssue>";
			echo "<IssueOA>";
			if($fulltext_info[0]['issue_qa'] == "1") {echo 'Yes';} else {echo 'No';}
			echo "</IssueOA>";
			echo "<SubmissionDate>";
				//print_r($fulltext_info[0]['submitted_date']);exit;
				$submitted_date = date_create($fulltext_info[0]['submitted_date']);					
				
				echo "<Year>".date_format($submitted_date,'Y')."</Year>";
				echo "<Month>".date_format($submitted_date,'m')."</Month>";
				echo "<Day>".date_format($submitted_date,'d')."</Day>";
			echo "</SubmissionDate>";
			echo "<AcceptedDate>";
				
				$accepted_date = date_create($fulltext_info[0]['accepted_date']);				
				echo "<Year>".date_format($accepted_date,'Y')."</Year>";
				echo "<Month>".date_format($accepted_date,'m')."</Month>";
				echo "<Day>".date_format($accepted_date,'d')."</Day>";
			echo "</AcceptedDate>";
			echo "<PubDate>";
				
				$published_date = date_create($fulltext_info[0]['published_date']);					
				
						echo "<Year>".date_format($published_date,'Y')."</Year>";
				echo "<Month>".date_format($published_date,'m')."</Month>";
				echo "<Day>".date_format($published_date,'d')."</Day>";
			echo "</PubDate>";
		echo "</Journal>";
		echo "<ArticleType>Research Article</ArticleType>";
		echo "<ArticleTitle>".htmlspecialchars($fulltext_info[0]['post_browser_title'])."</ArticleTitle>";		
		echo "<ArticleLanguage>English</ArticleLanguage>";
		echo "<FirstPage>".$fulltext_info[0]['first_page']."</FirstPage>";
		echo "<LastPage>".$fulltext_info[0]['last_page']."</LastPage>";
		echo "<URLs>";
		echo "<AbstractLanguage>English</AbstractLanguage>";
		

        echo "<Fulltext>".base_url()."fulltextarticles/".$fulltext_info[0]['post_title'].".html</Fulltext>";
         echo "<pdf>".base_url()."fulltextarticles/".$fulltext_info[0]['post_title'].".pdf</pdf>";
        echo "</URLs>";
        echo "<FulltextLanguage>English</FulltextLanguage>";
        //print_r(json_decode($fulltext_info[0]['post_content']));
		if($fulltext_info[0]['json_format'] == 1) {
		    
		   foreach (json_decode($fulltext_info[0]['post_content']) as $key => $value) { 
		       	if($value->label && $value->label =='Title') {
		       		$temp = 0;	
		       		echo "<AuthorList>";
		       	    foreach ($value->tags as $k1 => $v1) { 	
		       	    	       	        
		       	        if($v1->name == 'authors') {			       	        
		       	        			       	        				       	        	  
								echo '<Author>';
								
								if(isset($v1->child_tag[0]->value)) {
					                echo '<FirstName>'.$v1->child_tag[0]->value.'</FirstName>';			   
								}
								if(isset($v1->child_tag[1]->value)) {
					                echo '<LastName>'.$v1->child_tag[1]->value.'</LastName>';		   
								}
								if(isset($v1->child_tag[2]->value)) {
					                	echo '<AuthorLanguage>'.$v1->child_tag[2]->value.'</AuthorLanguage>';		   
								}
								if(isset($v1->child_tag[3]->value)) {
					              echo '<Affiliation>'.$v1->child_tag[3]->value.'</Affiliation>';		   
								}
									
								if(isset($v1->child_tag[4]->value)) {
					              echo '<Country>'.$v1->child_tag[4]->value.'</Country>';		   
								}
								if(isset($v1->child_tag[5]->value)) {
					              echo '<AuthorEmails>'.$v1->child_tag[5]->value.'</AuthorEmails>';	   
								}
								if(isset($v1->child_tag[6]->value)) {
					              	echo '<CorrespondingAuthor>'.$v1->child_tag[6]->value.'</CorrespondingAuthor>';	   
								}										   															
								
								echo '</Author>';									       	        		       	        			       	       
		       	        }
		       	        
		       	             
		       	    }
		       	    echo "</AuthorList>";
		 
		       	}
		
		
			if($value->label && $value->label !=='Title') {				
				$temp = str_replace(' ', '_', $value->label);
				echo "<$temp>";
				foreach ($value->tags as $k1 => $v1) {                        					
					if($v1->name == 'paragraph_with_inline_heading') {                                            
						echo '<p>';
						echo '<strong>'.htmlspecialchars($v1->child_tag[0]->value).': </strong>';                
						echo htmlspecialchars($v1->value);
						echo '</p>';                      
					}
					if($v1->name == 'paragraph_without_heading') {                                            
						echo '<p>';                  
						echo htmlspecialchars($v1->value);
						echo '</p>';                      
					}
					if($v1->name == 'paragraph_with_block_heading') {                                            
						echo '<p>';
						echo '<strong>'.htmlspecialchars($v1->child_tag[0]->value).': </strong>';                
						echo htmlspecialchars($v1->value);
						echo '</p>';        
					}
					if($v1->name == 'figure_info_box') {
						echo '<p>';            
						echo '<a target="_blank" href="'.htmlspecialchars($v1->child_tag[0]->value).'">'.htmlspecialchars($v1->value).'</a>
						
						</p>';
					}

					if($v1->name == 'reference_links') {                
						$html = htmlspecialchars($v1->value);
						echo '<p>';
						// if($value->label == 'References') {
						// 	echo ($k1 + 1).'.  ';
						// }
						if($v1->child_tag[0]->value) {
							echo '<a href="'.htmlspecialchars($v1->child_tag[0]->value).'">'.$html.'</a>';
						} else {
							echo $html;
						}						
						echo '</p>';
					}

				}
				echo "</$temp>";
			}               	

		} 
		}
		
		

	echo "</Article>";
echo "</ArticleSet>";
?>