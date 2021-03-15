<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.housekey-html.themeseason.com/profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Mar 2020 07:49:36 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>changepassword</title> 
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
                <p class="spinner-text">Rent Revenue</p> 
            </div>
        </div>
    </div> 
    <?php $this->load->view('user/include/header'); ?>
    
    <div class="mdc-drawer-scrim sidenav-scrim"></div>  
   
    <main>   
        <div class="px-3">  
            <div class="theme-container">   
                <div class="page-drawer-container mt-3">
                    <?php $this->load->view('user/include/profile'); ?>  
                    <div class="mdc-drawer-scrim page-sidenav-scrim"></div>  
                   
				   
					<div class="col-xs-12 col-md-8 px-6">
						<h2 class="text-muted text-center fw-600 mb-3">Password change</h2>
						<form action="<?php echo base_url(); ?>index.php/user/ChangepasswordController/changepass" method="post">  
							<div class="mdc-text-field mdc-text-field--outlined w-100 custom-field my-2">
								<input class="mdc-text-field__input" type="password" id="txtcurrent" name="txtcurrent">
								<div class="mdc-notched-outline">
									<div class="mdc-notched-outline__leading"></div>
									<div class="mdc-notched-outline__notch">
										<label class="mdc-floating-label">Current Password</label>
									</div>
									<div class="mdc-notched-outline__trailing"></div>
								</div>
							</div> 
							<div class="mdc-text-field mdc-text-field--outlined w-100 custom-field my-2">
								<input class="mdc-text-field__input" type="password" id="txtnew" name="txtnew">
								<div class="mdc-notched-outline">
									<div class="mdc-notched-outline__leading"></div>
									<div class="mdc-notched-outline__notch">
										<label class="mdc-floating-label">New Password</label>
									</div>
									<div class="mdc-notched-outline__trailing"></div>
								</div>
							</div> 
							<div class="mdc-text-field mdc-text-field--outlined w-100 custom-field my-2">
								<input class="mdc-text-field__input" type="password" id="txtconfirm" name="txtconfirm">
								<div class="mdc-notched-outline">
									<div class="mdc-notched-outline__leading"></div>
									<div class="mdc-notched-outline__notch">
										<label class="mdc-floating-label">Confirm New Password</label>
									</div>
									<div class="mdc-notched-outline__trailing"></div>
								</div>
							</div>  
							<div class="row around-xs middle-xs p-2 mb-3"> 
								<button class="mdc-button mdc-button--raised" type="submit" id="btnsubmit" name="btnsubmit">
									<span class="mdc-button__ripple"></span>
									<span class="mdc-button__label">Change password</span> 
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
      <script src="<?php echo base_url(); ?>client/js/libs/js.js" async defer></script>
</body>

<!-- Mirrored from www.housekey-html.themeseason.com/profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Mar 2020 07:49:36 GMT -->
</html>