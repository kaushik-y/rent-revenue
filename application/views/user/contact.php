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
                <h1 class="title">Contact Us</h1>
                <p class="desc">Got a question? We'll give you straight answer</p> 
            </div>
        </div>  
        <div class="px-3">  
            <div class="theme-container"> 
                <div class="mdc-card main-content-header mb-5"> 
                    <div class="row around-xs">
                        <div class="col-xs-12 col-sm-4">
                            <div class="column center-xs middle-xs text-center">
                                <i class="material-icons mat-icon-lg primary-color">home</i>
                                <h3 class="primary-color py-1">ADDRESS :</h3>
                                <span class="text-muted fw-500">206 Ajamal Dham Society SimadaGaam Surat 395010</span>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <div class="column center-xs middle-xs text-center">
                                <i class="material-icons mat-icon-lg primary-color">call</i>
                                <h3 class="primary-color py-1">PHONES :</h3>
                                <span class="text-muted fw-500">9978863552</span>
                                <span class="text-muted fw-500">8758361880-9265181662</span>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <div class="column center-xs middle-xs text-center">
                                <i class="material-icons mat-icon-lg primary-color">mail_outline</i>
                                <h3 class="primary-color py-1">E-MAIL :</h3>
                                <span class="text-muted fw-500">rentrevenue@gamil.com</span>
                                <span class="text-muted fw-500">info@rentrevenue.com</span>
                            </div>
                        </div> 
                        <div class="col-xs-12 mt-3 px-3 p-relative">
                            <div class="divider w-100"></div>
                        </div> 
                        <h3 class="w-100 text-center py-3">CONTACT US</h3> 
						<?php
								if($this->session->flashdata("msg"))
								{?>
								<div class="alert alert-danger fade show" role="alert"><h5>Massage!</h5>
                                    <p class="mb-0"><?php echo $this->session->flashdata("msg"); ?></p></div>
							<?php	}
								?>
								
				<?php
				if(!$this->session->userdata("isloginuser"))
				{
				?>
                       <form  id="form1" enctype="multipart/form-data" class="row" method="post" action="<?php echo base_url(); ?>index.php/user/ContactController/insertdata">
					   
					                 
                            <div class="col-xs-12 col-sm-12 col-md-4 p-2">  
                                <div class="mdc-text-field mdc-text-field--outlined w-100 custom-field my-2" id="txtname">
                                     <input class="mdc-text-field__input" type="text"  name="txtname">
                                    <div class="mdc-notched-outline">
                                        <div class="mdc-notched-outline__leading"></div>
                                        <div class="mdc-notched-outline__notch">
                                            <label class="mdc-floating-label">Name</label>
                                        </div>
                                        <div class="mdc-notched-outline__trailing"></div>
                                    </div>
                                </div> 
                            </div> 
 
                            <div class="col-xs-12 col-sm-12 col-md-4 p-2">  
                                <div class="mdc-text-field mdc-text-field--outlined w-100 custom-field my-2" id="txtemail">
                                    <input class="mdc-text-field__input" type="email"  name="txtemail">
                                    <div class="mdc-notched-outline">
                                        <div class="mdc-notched-outline__leading"></div>
                                        <div class="mdc-notched-outline__notch">
                                            <label class="mdc-floating-label">Email</label>
                                        </div>
                                        <div class="mdc-notched-outline__trailing"></div>
                                    </div>
                                </div> 
                            </div>  
                            <div class="col-xs-12 col-sm-12 col-md-4 p-2">  
                                <div class="mdc-text-field mdc-text-field--outlined w-100 custom-field my-2" id="txtphone">
                                     <input class="mdc-text-field__input" type="text" name="txtphone">
                                    <div class="mdc-notched-outline">
                                        <div class="mdc-notched-outline__leading"></div>
                                        <div class="mdc-notched-outline__notch">
                                            <label class="mdc-floating-label">Phone</label>
                                        </div>
                                        <div class="mdc-notched-outline__trailing"></div>
                                    </div>
                                </div> 
                            </div>  
                            <div class="col-xs-12 p-2">  
                                <div class="mdc-text-field mdc-text-field--outlined mdc-text-field--textarea w-100 custom-field my-2" id="txtmessage">
                                   <textarea class="mdc-text-field__input"   name="txtmessage"rows="5"></textarea>
                                    <div class="mdc-notched-outline mdc-notched-outline--upgraded">
                                        <div class="mdc-notched-outline__leading"></div>
                                        <div class="mdc-notched-outline__notch">
                                            <label class="mdc-floating-label">Message</label>
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
                           <?php } else { ?>	
                        <form   enctype="multipart/form-data" class="row" method="post" action="<?php echo base_url(); ?>index.php/user/ContactController/insertdata">
                                 <div class="col-xs-12 p-2">  
                                <div class="mdc-text-field mdc-text-field--outlined mdc-text-field--textarea w-100 custom-field my-2" id="txtmessage">
                                   <textarea class="mdc-text-field__input"   name="txtmessage"rows="5"cols="15" ></textarea>
                                    <div class="mdc-notched-outline mdc-notched-outline--upgraded">
                                        <div class="mdc-notched-outline__leading"></div>
                                        <div class="mdc-notched-outline__notch">
                                            <label class="mdc-floating-label">Message</label>
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
                        <?php } ?>						
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
					
							var name=$('#txtname').val();
							var email=$('#txtemail').val();
							var contact=$('#txtphone').val();
							var feedback=$('#txtmessage').val();
							
							
							//alert("Day rent : "+fullrent);
							
							if(name=="")
							{
								alert("Please Enter name");
							}
							else if(email=="")
							{
								alert("Please Enter email");
							}
							else if(contact=="")
							{
								alert("Please Enter phone");
							}
							else if(feedback=="")
							{
								alert("Please Enter message");
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
			txtname:
			{
				required:true,
				alpha:true
			},
			txtphone:
			{
				required:true,
				minlength:10,
				maxlength:10,
				number:true
				
			},
			txtemail:
			{
				required:true
				
			},
			txtmessage:
			{
				required:true
				
			}
		},
		messages:
		{
			txtname:
			{
				required:"Please Enter name",
				alpha:"Only Alphabate allowed"
			},
			txtphone:
			{
				required:"Pelase enter phonenumber",
				maxlength:"enter valid contact",
				minlength:"enter valid contact",
				number:"enter only number"
				
			},
			txtemail:
			{
				required:"Please Enter email"
			
			},
			txtmessage:
			{
				required:"Please Enter message"
			
			}
			
		}
		
	});

});	

</script>
<!-- Mirrored from www.housekey-html.themeseason.com/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Mar 2020 07:49:22 GMT -->
</html>