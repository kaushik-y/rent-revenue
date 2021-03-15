<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.housekey-html.themeseason.com/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Mar 2020 07:49:21 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title> 
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
                            <h1 class="uppercase">Sign In AGENT</h1>
                            <a href="register.html" class="mdc-button mdc-ripple-surface mdc-ripple-surface--accent accent-color normal w-100">
                                Don't have an account? Sign up now!
                            </a>  
                        </div>
						<?php
								if($this->session->flashdata("msg"))
								{ ?>
								<div class="alert alert-danger fade show" role="alert"><h5>Error!</h5>
                                    <p class="mb-0"><?php echo $this->session->flashdata("msg"); ?></p></div>
							<?php	}
								?>
                        <form id="form1" method="post" action="<?php echo base_url(); ?>index.php/user/LoginController/checkloginagent">
                            <div class="mdc-text-field mdc-text-field--outlined mdc-text-field--with-leading-icon w-100 mt-3 custom-field ">
                                <i class="material-icons mdc-text-field__icon text-muted">person</i>
                                <input class="mdc-text-field__input" name="txtemail" type="email" id="txtemail">
                                <div class="mdc-notched-outline">
                                    <div class="mdc-notched-outline__leading"></div>
                                    <div class="mdc-notched-outline__notch">
                                        <label class="mdc-floating-label">Email</label>
                                    </div>
                                    <div class="mdc-notched-outline__trailing"></div>
                                </div>
                            </div>  
                            <div class="mdc-text-field mdc-text-field--outlined mdc-text-field--with-leading-icon mdc-text-field--with-trailing-icon w-100 custom-field mt-4 custom-field">
                                <i class="material-icons mdc-text-field__icon text-muted">lock</i>
                                <i class="material-icons mdc-text-field__icon text-muted" tabindex="1" id="password-toggle">visibility_off</i>
                                <input class="mdc-text-field__input" type="password" name="txtpassword" id="txtpassword">
                                <div class="mdc-notched-outline">
                                    <div class="mdc-notched-outline__leading"></div>
                                    <div class="mdc-notched-outline__notch">
                                        <label class="mdc-floating-label">Password</label>
                                    </div>
                                    <div class="mdc-notched-outline__trailing"></div>
                                </div>
                            </div> 
                            
                            <div class="text-center mt-2"> 
                                <button class="mdc-button mdc-button--raised bg-accent" type="submit" id="btnsubmit" name="btnsubmit">
                                    <span class="mdc-button__ripple"></span>
                                    <span class="mdc-button__label">Sign to My Account</span> 
                                </button>
                            </div>  
                             
                             
                                
                        </form>
                        <div class="row end-xs middle-xs"> 
                            <a href="#" class="mdc-button normal">
                                <span class="mdc-button__ripple"></span>
                                <i class="material-icons mdc-button__icon">vpn_key</i>
                                <span class="mdc-button__label">Forgot Password</span> 
                            </a>  
                        </div>
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

<!-- Mirrored from www.housekey-html.themeseason.com/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Mar 2020 07:49:21 GMT -->
</html>