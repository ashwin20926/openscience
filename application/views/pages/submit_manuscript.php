<section style="background-color: transparent!important;">
			<div class="InnerbanerBG" style="margin-bottom:0px; background-image: url(<?php echo base_url(); ?>public/images/SubjectmanuscriptInner01.jpg);"> 
				<h1 class="uppercase" style="font-weight: 400; text-align:center; color:#fff;"> Submit Manuscript </h1>  
			</div> 
        </section> 

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap"> 
				 <div class="container clearfix"> 
					<div class="paddingBoth-lg topmargin-sm">
						 <div class="contact-widget bottommargin-lg">

							<div class="contact-form-result"></div>
							<div class="col-md-12">
								<p class="text-muted"><strong>*</strong> These fields are required.  </p>
							</div>

							<form id="submit_manuscript_form" name="form" method="post" enctype="multipart/form-data">

								

								<div class="col_half">
									<label for="sm_first_name"> First Name <small>*</small></label>
									<input type="text" id="sm_first_name" name="sm_first_name" value="" class="sm-form-control" />
								</div>
								
								<div class="col_half col_last">
									<label for="sm_last_name"> Last Name <small>*</small></label>
									<input type="text" id="sm_last_name" name="sm_last_name" value="" class="sm-form-control" />
								</div>

								<div class="col_half">
									<label for="sm_email"> Email <small>*</small></label>
									<input type="email" id="sm_email" name="sm_email" value="" class="email sm-form-control" />
								</div>

								<div class="col_half col_last">
									<label for="sm_phone">Phone <small>*</small> </label>
									<input type="text" id="sm_phone" name="sm_phone"  pattern= "[0-9]" value="" class=" sm-form-control" />
								</div>
								<div class="col_half">
									<label for="sm_phone">Tel No <small>*</small> </label>
									<input type="text" id="sm_telno" name="sm_telno"  pattern= "[0-9]" value="" class=" sm-form-control" />
								</div>
								
								<div class="col_half col_last">
									<label for="sm_country"> Country <small>*</small> </label>
									<input type="text" id="sm_country" name="sm_country" value="" class="sm-form-control" />
								</div>
								
								<div class="col_half">
									<label for="sm_state"> State <small>*</small> </label>
									<input type="text" id="sm_state" name="sm_state" value="" class="sm-form-control" />
								</div>

								

								<div class="col_half col_last">
									<label for="sm_journal"> Select Journal <small>*</small> </label>
									<?php //print_r($journals); ?>
									<select id="sm_journal" name="sm_journal" class="sm-form-control">
										<option value="">-- Select One --</option>
										<?php 
										foreach($journals as $value) {
										    
										    echo ' <option value="'.$value['journal_name'].'">'.$value['journal_name'].'</option>';
										}
										?>
									</select>
									<!--<select id="sm_journal" name="sm_journal" class="sm-form-control">
										<option value="">-- Select One --</option>
										 <option value="Indian Journal of Applied Radiology">Indian Journal of Applied Radiology</option>
										 <option value="Indian Journal of Nutrition">Indian Journal of Nutrition</option>
										 <option value="Indian Journal of Ocular Biology">Indian Journal of Ocular Biology</option>
										 <option value="Indian Journal of Cardio Biology &amp; Clinical Sciences">Indian Journal of Cardio Biology &amp; Clinical Sciences</option>
										 <option value="Journal of Cancer Research and Molecular Medicine">Journal of Cancer Research and Molecular Medicine</option>
										 <option value="Journal of Immunology and Vaccine Technology">Journal of Immunology and Vaccine Technology</option>
										 <option value="Journal of Enzymology and Metabolism">Journal of Enzymology and Metabolism</option>
										 <option value="Journal of chemistry &amp; Applied Biochemistry">Journal of chemistry &amp; Applied Biochemistry</option>
										 <option value="Journal of Plant Science and Research">Journal of Plant Science and Research</option>
										 <option value="Journal of Cell Science &amp; Molecular Biology">Journal of Cell Science &amp; Molecular Biology</option>
										 <option value="Environmental and Social Sciences">Environmental and Social Sciences</option> 
									</select> --->
								</div>
        <div class="clear"></div>
								<div class="col_half">
									<label for="sm_article"> Article <small>*</small> </label>
									<input type="text" id="sm_article" name="sm_article" value="" class="sm-form-control" />
								</div>

								
								
								<div class="col_half col_last">
									<label for="sm_author"> Corresponding Author  </label>
									<input type="text" id="sm_author" name="sm_author" value="" class="sm-form-control" />
								</div>
<div class="clear"></div>
								<div class="col_half">
									<label for="sm_file">Upload File <small>*</small></label>
									<div class="form-group file-upload-group">
										<div class="file-upload-box">
										<input type="file" id="sm_file" name="sm_file" value="" class="sm-form-control" rel="0"/>
									</div>
									</div>
									<p>Allowed file types are <b>DOCX, PDF, TAR, ZIP, RAR.</b> Max file size 25MB.
									Note: If you have more than one file, we request you to make it as zip or rar and upload it.</p>
									<div class="upload-box"></div>
								</div>
 
								<div class="col_full hidden">
									<input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />
								</div>

								<div class="col_full submit-btn-col">
									
									<input type="submit" class="button button-3d sm_submit_btn nomargin" name="submit" value="Submit" />

									<div class="server-msg"><div class="alert" role="alert"></div></div>

								</div>

							</form>

						</div>	
					</div>
				 </div> 
			</div> 

		</section><!-- #content end -->
		