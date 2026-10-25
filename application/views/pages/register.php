<section style="background-color: transparent!important;">
			<div class="InnerbanerBG" style="margin-bottom:0px; background-image: url(<?php echo base_url(); ?>public/images/SubjectmanuscriptInner01.jpg);"> 
				<h1 class="uppercase" style="font-weight: 400; text-align:center; color:#fff;">Register</h1>  
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

							<form id="user_register_form" name="form" method="post" enctype="multipart/form-data">

								

								<div class="col_half">
									<label for="sm_first_name"> Your Name <small>*</small></label>
									<input type="text" id="rg_first_name" name="rg_first_name" value="" class="sm-form-control" />
								</div>
																

								<div class="col_half">
									<label for="sm_email"> Your Email <small>*</small></label>
									<input type="email" id="rg_email" name="rg_email" value="" class="email sm-form-control" />
								</div>

								<div class="col_half">
									<label for="sm_phone">Receive email alerts for all new published articles </label><br/>
									<label class="radio-inline"><input type="radio" name="all_pub">Yes</label>
									<label class="radio-inline"><input type="radio" name="all_pub">No</label>
								</div>
								
								<div class="col_half">
									<label for="sm_phone">Receive Monthly updates of articles published in the journal </label>
									<label class="radio-inline"><input type="radio" name="rg_m_pub">Yes</label>
									<label class="radio-inline"><input type="radio" name="rg_m_pub">No</label>
								</div>							

								<div class="clear"></div>

								<div class="col_half">
									<label for="sm_journal"> Select Journal</label>
									<select multiple id="rg_journal" name="rg_journal" class="rg-form-control">
									  <option value="">Select Options</option>
									  <?php 
									  	foreach ($j_info as $key => $value) {
									  		echo '<option value="'.$value['id'].'">'.$value['journal_name'].'</option>';	
									  	}
									  ?>
									</select>									
								</div>

								<div class="clear"></div>								

								<div class="col_full submit-btn-col">
									<input type="submit" class="button button-3d rg_submit_btn nomargin" name="submit" value="Submit" />
									<div class="server-msg"><div class="alert" role="alert"></div></div>
								</div>

							</form>

						</div>	
					</div>
				 </div> 
			</div> 

		</section><!-- #content end -->
		