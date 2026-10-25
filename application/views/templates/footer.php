		<!-- Footer
		============================================= -->
		<footer id="footer" class="dark">

			<div class="container">

				<!-- Footer Widgets
				============================================= -->
				<div class="footer-widgets-wrap clearfix">

					<div class="col_two_third">

						<div class="widget clearfix">

						 

							<div class="clearfix" style="padding: 10px 0; background: url('images/world-map.png') no-repeat center center;">
								<div class="col_two_fifth" style="margin-right:120px;">
									<address class="nobottommargin">
										<abbr title="Address" style="display: inline-block;margin-bottom: 7px;"><strong> Contact :</strong></abbr><br>
										Open Science Publications <br>
										Flat No 301, Block-B <br>
                                                                                SVs Guru Krupa Heights <br>
Vinayak Nagar,<br>
Manikonda <br>
Pin-500089 <br>
										Hyderabad,INDIA <br>										
<abbr title="Phone Number"><strong>Phone:</strong></abbr>  +91-9177734525 <br> 
									<abbr title="Email Address"><strong>Email:</strong></abbr> info@opensciencepublications.com
									</address>
								</div>
								<div class="col_two_fifth col_last">
									<strong>Indexed In</strong><br>

Google Scholar<br>
J-Gate<br>

DRJI<br>
ICJME<br>
ROAD<br>
Journal Seek<br>
Index Copernicus<br>
EZB<br>
								</div>
							</div>

							<a href="#" class="social-icon si-small si-rounded topmargin-sm si-facebook">
								<i class="icon-facebook"></i>
								<i class="icon-facebook"></i>
							</a>

							<a href="#" class="social-icon si-small si-rounded topmargin-sm si-twitter">
								<i class="icon-twitter"></i>
								<i class="icon-twitter"></i>
							</a>
							
							<a href="#" class="social-icon si-small si-rounded topmargin-sm si-linkedin">
								<i class="icon-linkedin"></i>
								<i class="icon-linkedin"></i>
							</a>

							<a href="#" class="social-icon si-small si-rounded topmargin-sm si-rss">
								<i class="icon-rss"></i>
								<i class="icon-rss"></i>
							</a>

							<a href="#" class="social-icon si-small si-rounded topmargin-sm si-blogger">
								<i class="icon-blogger"></i>
								<i class="icon-blogger"></i>
							</a>

							  
						</div>

					</div>

					<div class="col_one_third col_last">

						<div class="widget widget_links clearfix">

								<h4> Company </h4>

								<ul class="footer-page-link">
									<li><a href="http://opensciencepublications.com/about_us"> About Us </a></li>
									<li><a href="http://opensciencepublications.com/policies"> Policies </a></li>
									<li><a href="http://opensciencepublications.com/membership"> Membership </a></li>
									 
								</ul>

							</div>

					</div> 

				</div><!-- .footer-widgets-wrap end -->

			</div>

			<!-- Copyrights
			============================================= -->
			<div id="copyrights">

				<div class="container clearfix">

					<div class="col_full">
						Copyrights &copy; 2013 All Rights Reserved by Open Science Publications.<br> 
					</div> 
					
					<div class="col_full">
						<p style="margin-top:-30px;">Open Science Publications is an Open Access Publisher &amp; 
					all published content, except where otherwise noted, is licensed under a Creative Commons</p>
					<p style="margin-top:-25px;">
						This work is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by/3.0/deed.en_US">Creative Commons Attribution 3.0 Unported License</a>. <br>	<a rel="license" href="http://creativecommons.org/licenses/by/3.0/deed.en_US"><img alt="Creative Commons License" style="border-width:0" src="http://i.creativecommons.org/l/by/3.0/88x31.png"></a>				
											
						</p>
					</div> 

				</div>

			</div><!-- #copyrights end -->

		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>


	<!-- External JavaScripts
	============================================= -->
	<script type="text/javascript" src="<?php echo base_url(); ?>public/js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>public/js/plugins.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="<?php echo base_url(); ?>public/js/functions.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>public/js/jquery.bootpag.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			if(window.location.host == 'opensciencepublications.com') {
    window.location = 'http://www.opensciencepublications.com';
}
if($('.sitation-link').length == 0) {
$('#content-left').find('.nav-bar ul').append('<li class="sitation-link"><a href="#" data-toggle="modal" data-target="#myModal">Citation</a></li>');
}
$('.modal-header').on('click', function(){
$('#myModal').modal('hide');
});
setTimeout(function(){
			$("#latest-journals").load("<?php echo base_url(); ?>get_home_page_journals/"); 
}, 500);

			$(".pagination").bootpag({
				total: 16,
				page: 1,
				maxVisible: 4,
				leaps: false 
			}).on("page", function(e, num){
				e.preventDefault();
				$("#latest-journals").prepend('<div class="loading-indication"></div>');		
				$("#latest-journals").load("<?php echo base_url(); ?>get_home_page_journals/", {'page':num});
			});

			$("#latest-articles-openscience").load("<?php echo base_url(); ?>get_journal_latest_articles/"); 

			
			$(".latest-article-pagination.pagination").bootpag({
				total: 70,
				page: 1,
				maxVisible: 5,
				leaps: false,
				next: 'Next'  
			}).on("page", function(e, num){
				e.preventDefault();
				$("#latest-articles-openscience").prepend('<div class="loading-indication"></div>');		
				$("#latest-articles-openscience").load("<?php echo base_url(); ?>get_journal_latest_articles/", {'page':num});
			});

			// submit manuscript form validations
			$('#submit_manuscript_form').find("input[type=file]").on('change',function() {
		      var file_id =$(this).attr('id');
		      var rel_id = $(this).attr('rel');                       ;
		      var data = new FormData($('#submit_manuscript_form')[0]);     
		      $.ajax({
		        type:"POST",
		        url:"<?php echo base_url('upload_files');?>",
		        data:data,
		        mimeType: "multipart/form-data",
		        contentType: false,
		        cache: false,
		        processData: false,
		        dataType:"json",
				beforeSend: function (){
					$('.sm_submit_btn').addClass('disabled');
					$('.file-upload-group').addClass('uploading');
	            },
		         success:function(temp) {
					$('.sm_submit_btn').removeClass('disabled');
					$('.file-upload-group').removeClass('uploading');
		         	$('#submit_manuscript_form').find('.upload-box').find('.temp_file_upload').remove();
		            $('#submit_manuscript_form').find('.upload-box').append('<input class="temp_file_upload" type="hidden" name="temp_file_upload" value="'+temp[0].upload_data.file_name+'">');	          
		         }
		      });     
		    });

			$("#submit_manuscript_form").validate({
				rules: {
					sm_first_name: "required",
					sm_email: {
						required: true,
						email: true
					},
					sm_phone:{
						number: true,
						required: true,
					},
					sm_country:"required",
					sm_journal:"required",
					sm_file: "required",
				},
				messages: {
					sm_first_name: "Please enter your Firstname",
					sm_email: "Please enter a valid Email Address",
					sm_phone: "Please enter a valid Phone Number"

				},
				submitHandler: function(form) {					
				if(!$('.sm_submit_btn').hasClass('disabled')) {					
					var data = new FormData($('#submit_manuscript_form')[0]);
				    $.ajax({
				      type:"POST",
				      url:"<?php echo base_url('save_submit_manuscript_info');?>",
				      data:data,
				      mimeType: "multipart/form-data",
				      contentType: false,
				      cache: false,
				      processData: false,
					  beforeSend: function (){
						$('.submit-btn-col').addClass('uploading');
					  },
				      success:function(temp)
				      {        
						$('.submit-btn-col').removeClass('uploading');
				        var ser_obj = JSON.parse(temp);
				        if(temp.status) {
				          $('.server-msg').find('.alert').addClass('alert-'+ser_obj.status).html(ser_obj.message).show();
				        } else {
				          $('.server-msg').find('.alert').addClass('alert-'+ser_obj.status).html(ser_obj.message).show();
				        }
				        setTimeout(function(){
				         $('.server-msg').find('.alert').fadeOut(2000); 
				          $('#submit_manuscript_form').trigger('reset');         
				        },2000);
				      }
				    });
				}
				}
			});


			$("#user_contact_form").validate({
				rules: {
					first_name: "required",
					last_name: "required",
					email: {
						required: true,
						email: true
					},
					phone:{
						number: true,
						required: true,
					},
					message:"required",
				},
				messages: {
					first_name: "Please enter your Firstname",
					last_name: "Please enter your Lastname",
					email: "Please enter a valid Email Address",
					phone: "Please enter a valid Phone Number"

				},
				submitHandler: function(form) {					
					if(!$('.sm_submit_btn').hasClass('disabled')) {					
						var data = new FormData($('#user_contact_form')[0]);
					    $.ajax({
					      type:"POST",
					      url:"<?php echo base_url('save_user_contact_info');?>",
					      data:data,
					      mimeType: "multipart/form-data",
					      contentType: false,
					      cache: false,
					      processData: false,
						  beforeSend: function (){
							$('.submit-btn-col').addClass('uploading');
						  },
					      success:function(temp)
					      {        
							$('.submit-btn-col').removeClass('uploading');
					        var ser_obj = JSON.parse(temp);
					        if(temp.status) {
					          $('.server-msg').find('.alert').addClass('alert-'+ser_obj.status).html(ser_obj.message).show();
					        } else {
					          $('.server-msg').find('.alert').addClass('alert-'+ser_obj.status).html(ser_obj.message).show();
					        }
					        setTimeout(function(){
					         $('.server-msg').find('.alert').fadeOut(2000); 
					          $('#user_contact_form').trigger('reset');         
					        },2000);
					      }
					    });
					}
				}
			});

		});
	</script>

<!--Start of Zendesk Chat Script-->
<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
$.src="https://v2.zopim.com/?5dIHIyPbn2vNA0gfQ7z01QDM3ztDUZ86";z.t=+new Date;$.
type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
</script>
<!--End of Zendesk Chat Script-->
</body>
</html>