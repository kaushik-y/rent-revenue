<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.housekey-html.themeseason.com/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Mar 2020 07:49:21 GMT -->
<head>
     <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>registeruser</title> 
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
    
    <main>   
    <div class="px-3">  
        <div class="theme-container">  
            <div class="row center-xs middle-xs my-5"> 
                <div class="mdc-card p-3 p-relative mw-500px">
					<div class="column center-xs middle-xs text-center">  
						<h1 class="uppercase">Register User</h1>
						<a href="login.html" class="mdc-button mdc-ripple-surface mdc-ripple-surface--accent accent-color normal w-100">
							Already have an account? Sign in!
						</a>  
					</div>
							<?php
								if($this->session->flashdata("msg"))
								{?>
								<div class="alert alert-danger fade show" role="alert"><h5>Massage!</h5>
                                    <p class="mb-0"><?php echo $this->session->flashdata("msg"); ?></p></div>
							<?php	}
								?>
					<form  enctype="multipart/form-data" method="post" action="<?php echo base_url(); ?>index.php/user/RegisterController/registeruser">
						<div class="mdc-text-field mdc-text-field--outlined mdc-text-field--with-leading-icon w-100 mt-3 custom-field ">
							<i class="material-icons mdc-text-field__icon text-muted">person</i>
							<input class="mdc-text-field__input" name="txtname" id="txtname" type="text">
							<div class="mdc-notched-outline">
								<div class="mdc-notched-outline__leading"></div>
								<div class="mdc-notched-outline__notch">
									<label class="mdc-floating-label">Username</label>
								</div>
								<div class="mdc-notched-outline__trailing"></div>
							</div>
						</div>
							
						<div class="mdc-text-field mdc-text-field--outlined mdc-text-field--with-leading-icon w-100 mt-3 custom-field ">
							<i class="material-icons mdc-text-field__icon text-muted">phone</i>
							<input class="mdc-text-field__input" name="txtcontact" id="txtcontact" type="text">
							<div class="mdc-notched-outline">
								<div class="mdc-notched-outline__leading"></div>
								<div class="mdc-notched-outline__notch">
									<label class="mdc-floating-label">Contact</label>
								</div>
								<div class="mdc-notched-outline__trailing"></div>
							</div>
						</div>							
						<div class="mdc-text-field mdc-text-field--outlined mdc-text-field--with-leading-icon w-100 mt-3 custom-field ">
							<i class="material-icons mdc-text-field__icon text-muted">email</i>
							<input class="mdc-text-field__input" name="txtemail" id="txtemail" type="email">
							<div class="mdc-notched-outline">
								<div class="mdc-notched-outline__leading"></div>
								<div class="mdc-notched-outline__notch">
									<label class="mdc-floating-label">Email</label>
								</div>
								<div class="mdc-notched-outline__trailing"></div>
							</div>
						</div>  
						<div class="mdc-text-field mdc-text-field--outlined mdc-text-field--with-leading-icon mdc-text-field--with-trailing-icon w-100 custom-field mt-3">
							<i class="material-icons mdc-text-field__icon text-muted">lock</i>
							<i class="material-icons mdc-text-field__icon text-muted password-toggle" tabindex="1">visibility_off</i>
							<input class="mdc-text-field__input" name="txtpassword" id="txtpassword" type="password">
							<div class="mdc-notched-outline">
								<div class="mdc-notched-outline__leading"></div>
								<div class="mdc-notched-outline__notch">
									<label class="mdc-floating-label">Password</label>
								</div>
								<div class="mdc-notched-outline__trailing"></div>
							</div>
						</div> 
						
						<div class="mdc-text-field mdc-text-field--outlined mdc-text-field--with-leading-icon w-100 mt-3 custom-field ">
							<i class="material-icons mdc-text-field__icon text-muted">location_on</i>
							<input class="mdc-text-field__input" name="txtaddress" id="txtaddress" type="text">
							<div class="mdc-notched-outline">
								<div class="mdc-notched-outline__leading"></div>
								<div class="mdc-notched-outline__notch">
									<label class="mdc-floating-label">Address</label>
								</div>
								<div class="mdc-notched-outline__trailing"></div>
							</div>
						</div>	
						<div class="mdc-text-field mdc-text-field--outlined mdc-text-field--with-leading-icon w-100 mt-3">
							<select style=" border-radius:4px;color:#858484;height: 44px;width: 200002px;" type="text" id="txtcity" name="txtcity">
								  <div class="mdc-select__anchor">
                                                <i class="mdc-select__dropdown-icon"></i>
                                                <div class="mdc-select__selected-text" ></div>
                                                <div class="mdc-notched-outline">
                                                    <div class="mdc-notched-outline__leading"></div>
                                                    <div class="mdc-notched-outline__notch">
                                                        <label >Registration Type</label>
                                                    </div>
                                                    <div class="mdc-notched-outline__trailing"></div>
												</div>
												</div>
								
								<?php
								foreach($citydata as $item)
								{
								?>
								<option value="<?php echo $item->cityid; ?>"><?php echo $item->cityname; ?></option>
								<?php } ?>
							</select>
										
                        </div> 
						
						
						<div class="mdc-text-field mdc-text-field--outlined  mdc-text-field--with-leading-icon w-100 mt-2 custom-field ">
							<i class="material-icons mdc-text-field__icon text-muted">image</i>
							<input class="mdc-text-field__input" name="txtuserphoto" id="txtuserphoto" type="file">
							<div class="mdc-notched-outline">
								<div class="mdc-notched-outline__leading"></div>
								<div class="mdc-notched-outline__notch">
									<label class="mdc-floating-label">User Profile</label>
								</div>
								<div class="mdc-notched-outline__trailing"></div>
							</div>
						</div>
						
						
						<div class="mdc-text-field mdc-text-field--outlined  mdc-text-field--with-leading-icon w-100 mt-3 custom-field ">
							<i class="material-icons mdc-text-field__icon text-muted">dialpad</i>
							<input class="mdc-text-field__input" name="txtnumber" id="txtnumber" type="text">
							<div class="mdc-notched-outline">
								<div class="mdc-notched-outline__leading"></div>
								<div class="mdc-notched-outline__notch">
									<label class="mdc-floating-label">Adhaar Number</label>
								</div>
								<div class="mdc-notched-outline__trailing"></div>
							</div>
						</div>
						<div class="mdc-text-field mdc-text-field--outlined  mdc-text-field--with-leading-icon w-100 mt-3 custom-field ">
							<i class="material-icons mdc-text-field__icon text-muted">image</i>
							<input class="mdc-text-field__input" name="txtadhaarphoto" id="txtadhaarphoto" type="file">
							<div class="mdc-notched-outline">
								<div class="mdc-notched-outline__leading"></div>
								<div class="mdc-notched-outline__notch">
									<label class="mdc-floating-label">Adhaar Photo</label>
								</div>
								<div class="mdc-notched-outline__trailing"></div>
							</div>
						</div>
						<div class="mdc-text-field mdc-text-field--outlined  mdc-text-field--with-leading-icon w-100 mt-3 custom-field ">
						<label for="mdc-floating-label" class="col-sm-2 col-form-label"><center>Gender</center></label>
						   <div class="form-check">
									<input type="radio" name="txtgender" class="form-check-input  ml-2" value="male" checked="">
									<label class="form-check-label  ml-4 "  for="exampleRadios1">
									   <h6>Male</h6>
									</label>
								</div>
							  <div class="form-check ml-2">
									<input type="radio" name="txtgender" class="form-check-input  ml-8 " value="female" checked="">
									<label class="form-check-label  ml-10" for="exampleRadios1">
									   <h6>Female</h6>
									</label>
								</div>
						</div>
						
						<div class="text-center mt-2"> 
							<button class="mdc-button mdc-button--raised bg-accent" type="submit" name="btnsubmit" id="btnsubmit">
								<span class="mdc-button__ripple"></span>
								<span class="mdc-button__label">Create an Account</span> 
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
	   <script src="<?php echo base_url(); ?>client/js/libs/dropzone.js"></script>  
    <script src="<?php echo base_url(); ?>client/js/scripts.js"></script>
      <script src="<?php echo base_url(); ?>client/js/libs/js.js" async defer></script>
</body>
<!-- Mirrored from www.housekey-html.themeseason.com/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Mar 2020 07:49:21 GMT -->
</html>