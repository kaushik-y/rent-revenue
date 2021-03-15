<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.housekey-html.themeseason.com/profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Mar 2020 07:49:36 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>myprofile</title> 
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
                    <div class="page-sidenav-content"> 
                        <div class="row mdc-card between-xs middle-xs w-100 p-2 mdc-elevation--z1 text-muted d-md-none d-lg-none d-xl-none mb-3">
                            <button id="page-sidenav-toggle" class="mdc-icon-button material-icons">more_vert</button> 
                            <h3 class="fw-500">My Account</h3>
                        </div> 
                        <div class="mdc-card p-3 row mb-2">
                            <div class="col-xs-12 col-md-10 px-6">
                                <h2 class="text-muted text-center fw-600 mb-3">Account details</h2>
								<?php
								if($this->session->flashdata("msg"))
								{?>
								<div class="alert alert-success fade show" role="alert"><h5>Massage!</h5>
                                    <p class="mb-0"><?php echo $this->session->flashdata("msg"); ?></p></div>
							<?php	}
								?>
								
								<?php
								foreach($Profiledata as $item)
								{
								?>
                                 <form  id="form1" class="" enctype="multipart/form-data" method="post" action="<?php echo base_url(); ?>index.php/user/MyProfileController/updatedata/<?php echo $item->userid; ?>">
                                    <div class="mdc-text-field mdc-text-field--outlined w-100 custom-field my-2">
                                        <input value="<?php echo $item->name; ?>" class="mdc-text-field__input" type="text" id="txtname" name="txtname">
                                        <div class="mdc-notched-outline">
                                            <div class="mdc-notched-outline__leading"></div>
                                            <div class="mdc-notched-outline__notch">
                                                <label class="mdc-floating-label">Name</label>
                                            </div>
                                            <div class="mdc-notched-outline__trailing"></div>
                                        </div>
                                    </div> 
                                    <div class="mdc-text-field mdc-text-field--outlined w-100 custom-field my-2">
                                        <input value="<?php echo $item->email; ?>" class="mdc-text-field__input" type="email" id="txtemail" name="txtemail">
                                        <div class="mdc-notched-outline">
                                            <div class="mdc-notched-outline__leading"></div>
                                            <div class="mdc-notched-outline__notch">
                                                <label class="mdc-floating-label">Email</label>
                                            </div>
                                            <div class="mdc-notched-outline__trailing"></div>
                                        </div>
                                    </div> 
                                    <div class="mdc-text-field mdc-text-field--outlined w-100 custom-field my-2">
                                        <input value="<?php echo $item->contact; ?>" class="mdc-text-field__input" type="text" id="txtphone" name="txtphone"><input class="mdc-text-field__input">
                                        <div class="mdc-notched-outline">
                                            <div class="mdc-notched-outline__leading"></div>
                                            <div class="mdc-notched-outline__notch">
                                                <label class="mdc-floating-label">Phone</label>
                                            </div>
                                            <div class="mdc-notched-outline__trailing"></div>
                                        </div>
                                    </div>  
                                    <div class="my-2 col-xs-6 p-0">  
                                        <label class="text-muted">User Profile</label> 
                                        
                                    </div> 
									<div class="mdc-text-field mdc-text-field--outlined">
                                            <input class="mdc-text-field__input" type="file" id="txtuser" name="txtuser"  multiple="multiple">
											<img src="<?php echo base_url(); ?>uploads/userprofile/<?php echo $item->userphoto;?>" width="50" height="50"/>
                                            <div class="mdc-notched-outline">
                                                <div class="mdc-notched-outline__leading"></div>
                                                <div class="mdc-notched-outline__notch">
                                                    <label class="mdc-floating-label">images</label>
                                                </div>
                                                <div class="mdc-notched-outline__trailing"></div>
                                            </div>
                                        </div> 
									
									 
									
									
                                    <div class="mdc-text-field mdc-text-field--outlined w-100 custom-field my-2">
                                          <input  value="<?php echo $item->adhaarnumber; ?>" class="mdc-text-field__input" type="text" id="txtadharnumber" name="txtadharnumber">
                                        <div class="mdc-notched-outline">
                                            <div class="mdc-notched-outline__leading"></div>
                                            <div class="mdc-notched-outline__notch">
                                                <label class="mdc-floating-label">Adharcard Number</label>
                                            </div>
                                            <div class="mdc-notched-outline__trailing"></div>
                                        </div>
                                    </div>
                                    
                                    <div class="my-2 col-xs-12 p-0">  
                                        <div class="mdc-text-field mdc-text-field--outlined w-100 custom-field my-2 mdc-text-field--textarea">
                                            <textarea class="mdc-text-field__input"  id="txtaddress" name="txtaddress"rows="3"cols="100"><?php echo $item->address; ?></textarea>
                                            <div class="mdc-notched-outline mdc-notched-outline--upgraded">
                                                <div class="mdc-notched-outline__leading"></div>
                                                <div class="mdc-notched-outline__notch">
                                                    <label class="mdc-floating-label">Address</label>
                                                </div>
                                                <div class="mdc-notched-outline__trailing"></div>
                                            </div>
                                        </div> 
                                    </div>
                                   
                                   
                                   
                                    <div class="row around-xs middle-xs p-2 mb-3"> 
                                        <button class="mdc-button mdc-button--raised" type="submit" id="btnsubmit" name="btnsubmit">
                                            <span class="mdc-button__ripple"></span>
                                            <span class="mdc-button__label">Update profile</span> 
                                        </button>
										
                                    </div> 
                                </form>  
								<?php } ?>
                            </div>
                            
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

<!-- Mirrored from www.housekey-html.themeseason.com/profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Mar 2020 07:49:36 GMT -->
</html>