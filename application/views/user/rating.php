<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.housekey-html.themeseason.com/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Mar 2020 07:49:21 GMT -->
<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>contact</title> 
    <link rel="icon" type="image/x-icon" href="<?php echo base_url(); ?>client/assets/favicon.ico">
    <link rel="stylesheet" href="<?php echo base_url(); ?>client/icon/css.css">  
    <link rel="stylesheet" href="<?php echo base_url(); ?>client/icon/icon.css">  
    <link rel="stylesheet" href="<?php echo base_url(); ?>client/css/libs/swiper.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>client/css/libs/dropzone.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>client/css/libs/material-components-web.min.css">  
    <link rel="stylesheet" href="<?php echo base_url(); ?>client/style.css"> 
    <link rel="stylesheet" href="<?php echo base_url(); ?>client/css/skins/blue.css">  
    <link rel="stylesheet" href="<?php echo base_url(); ?>client/css/responsive.css"> 
</head>
<body class="mdc-theme--background"> 
    <div class="spinner-wrapper" id="preloader">
        <div class="spinner-container">
            <div class="spinner-outer">
                <div class="spinner">
                    <div class="left mask">
                        <div class="plane"></div>  
                    </div>            
                    <div class="top mask">
                        <div class="plane"></div>
                    </div>
                    <div class="right mask">
                        <div class="plane"></div>  
                    </div>            
                    <div class="triangle">
                        <div class="triangle-plane"></div> 
                    </div>
                    <div class="top-left mask">
                        <div class="plane"></div>
                    </div>
                    <div class="top-right mask">
                        <div class="plane"></div>
                    </div>            
                </div>
                <p class="spinner-text">RentRevenue</p> 
            </div>
        </div>
    </div> 
    
<?php $this->load->view('user/include/header'); ?>  
    <main class="content-offset-to-top"> 
        <div class="header-image-wrapper">
            <div class="bg" style="background-image: url('<?php echo base_url(); ?>client/assets/images/others/contact.jpg');"></div>
            <div class="mask"></div>            
            <div class="header-image-content offset-bottom">
                <h1 class="title">RatingReview</h1>
               
            </div>
        </div>  
        <div class="px-3">  
            <div class="theme-container"> 
                <div class="mdc-card main-content-header mb-5"> 
                    <div class="row around-xs">
                       
                        
                        
                        <h3 class="w-100 text-center py-3">RatingReview</h3> 
						<?php
								if($this->session->flashdata("msg"))
								{?>
								<div class="alert alert-danger fade show" role="alert"><h5>Massage!</h5>
                                    <p class="mb-0"><?php echo $this->session->flashdata("msg"); ?></p></div>
							<?php	}
								?>
								
                      <form id="form1" enctype="multipart/form-data" class="row" method="post" action="<?php echo base_url(); ?>index.php/user/RatingController/insertdata/<?php  echo $id;?>/<?php  echo $bid;?>">
                            <div class="col-xs-12 col-sm-12 col-md-12 p-2">  
                                <div class="mdc-text-field mdc-text-field--outlined w-100 custom-field my-2">
                                     <input class="mdc-text-field__input" type="text" id="txtrating" name="txtrating">
                                    <div class="mdc-notched-outline">
                                        <div class="mdc-notched-outline__leading"></div>
                                        <div class="mdc-notched-outline__notch">
                                            <label class="mdc-floating-label">rating</label>
                                        </div>
                                        <div class="mdc-notched-outline__trailing"></div>
                                    </div>
                                </div> 
                            </div> 
 
                           
                          
                            <div class="col-xs-12 p-2">  
                                <div class="mdc-text-field mdc-text-field--outlined mdc-text-field--textarea w-100 custom-field my-2">
                                   <textarea class="mdc-text-field__input"  id="txtrevire" name="txtreview"rows="5"></textarea>
                                    <div class="mdc-notched-outline mdc-notched-outline--upgraded">
                                        <div class="mdc-notched-outline__leading"></div>
                                        <div class="mdc-notched-outline__notch">
                                            <label class="mdc-floating-label">Review Text</label>
                                        </div>
                                        <div class="mdc-notched-outline__trailing"></div>
                                    </div>
                                </div>
                            </div>   
                            <div class="col-xs-12 w-100 py-3 text-center">
                                <button class="mdc-button mdc-button--raised" type="submit" >
                                    <span class="mdc-button__ripple"></span> 
                                    <span class="mdc-button__label">Submit</span> 
                                </button>   
                            </div> 
                        </form>  
                    </div> 
                    
                </div>
            </div>  
        </div>  
    </main>
<?php $this->load->view('user/include/footer'); ?>	
    <div id="back-to-top"><i class="material-icons">arrow_upward</i></div>
    <script src="<?php echo base_url(); ?>client/js/libs/jquery.min.js"></script> 
    <script src="<?php echo base_url(); ?>client/js/libs/material-components-web.min.js"></script> 
    <script src="<?php echo base_url(); ?>client/js/libs/swiper.min.js"></script> 
    <script src="<?php echo base_url(); ?>client/js/scripts.js"></script>  
   <script src="<?php echo base_url(); ?>client/js/libs/dropzone.js"></script>  
    <script src="<?php echo base_url(); ?>client/js/libs/js.js"></script>
	<script src="<?php echo base_url(); ?>public/js/jquery.validate.min.js"></script> 
	<script src="<?php echo base_url(); ?>public/js/additional-methods.min.js"></script> 
	
	
</body>
<script>
$(document).ready(function(){
	
	
	
	 $.validator.addMethod("alpha", function(value, element) {
    return this.optional(element) || value == value.match(/^[a-zA-Z\s]+$/);
 });
        const tabBars = Array.from(document.querySelectorAll('.mdc-tab-bar'));  
       if(tabBars.length){
		var validator = $("#form1").validate();
        tabBars.forEach((bar) => { 
            const tabBar = new mdc.tabBar.MDCTabBar(bar); 
            var contents = bar.parentElement.querySelectorAll('.tab-content'); 
            tabBar.listen('MDCTabBar:activated', function(event) { 
                bar.parentElement.querySelector('.tab-content--active').classList.remove('tab-content--active'); 
                contents[event.detail.index].classList.add('tab-content--active');
            }); 
            contents.forEach((content, index) => {
                const next = content.querySelector('.next-tab');
                const prev = content.querySelector('.prev-tab');
                if(next){
                    next.addEventListener('click', () => { 
					
							var ranting=$('#txtrating').val();
							var reviewtext=$('#txtreview').val();
						
							if(ranting=="")
							{
								alert("Please Enter rating");
							}
							else if(reviewtext=="")
							{
								alert("Please Enter reviewtext");
							}
							else		
							{
								tabBar.activateTab(index+1);
							}	
						});
				
                }
                if(prev){
                    prev.addEventListener('click', () => {   
                        tabBar.activateTab(index-1);
                    });
                } 
            });
			
			
			
        });
		
    };
	
	$('.next-tab').click(function(){
		
	});
	
	$('#form1').validate({
		rules:
		{
			txtreview:
			{
				required:true,
				alpha:true
			},
			txtrating:
			{
				required:true,
				maxlength:1,
				number:true
				
			}
			
		},
		messages:
		{
			txtreview:
			{
				required:"Please Enter review",
				alpha:"Only Alphabate allowed"
			},
			txtrating:
			{
				required:"Pelase enter Rating",
				maxlength:"enter rating out of 10",
				number:"enter only number"
				
			}
			
		}
		
	});

});	

</script>
<!-- Mirrored from www.housekey-html.themeseason.com/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Mar 2020 07:49:22 GMT -->
</html>