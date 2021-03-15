<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.housekey-html.themeseason.com/agents.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Mar 2020 07:49:15 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>agentlist</title> 
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
            <div class="bg" <img src="background-image:<?php echo base_url(); ?>client/assets/images/others/contact.jpg;"></div>
            <div class="mask"></div>            
            <div class="header-image-content">
                <h1 class="title">Our Agents</h1>
                <p class="desc">Hire a real estate agent, who will invest in your  success</p> 
            </div>
        </div>  
		
        <div class="px-3">  
            <div class="theme-container">  
                <div class="row agents-wrapper"> 
				<?php
					foreach($agent as $row)
					{
					?>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 p-3">
                        <div class="mdc-card o-hidden">
                            
                                <img src="<?php echo base_url(); ?>uploads/agentprofile/<?php echo $row->profilephoto;?>" width="350" height="260" class="d-block mw-100">
                          
                            <div class="p-3">
                                <h2 class="fw-600"><a href="<?php echo base_url(); ?>index.php/user/AgentController/index1/<?php echo $row->agentid;?>"><?php echo $row->agentname;?></a></h2> 
                                
                                <p class="mt-3 text-muted fw-500"><?php echo $row->aboutagent;?></p>                                    
                                <p class="row middle-xs"><i class="material-icons primary-color" title="Organization">business</i><span class="mx-2 text-muted fw-500">RentRevenue</span></p>
                                <p class="row middle-xs"><i class="material-icons primary-color">email</i><span class="mx-2 text-muted fw-500"><?php echo $row->email; ?></span></p>
                                <p class="row middle-xs"><i class="material-icons primary-color">call</i><span class="mx-2 text-muted fw-500"><?php echo $row->contact; ?></span></p>
                                <div class="row pb-3 p-relative">
                                    <div class="divider"></div>
                                </div> 
                                
                            </div>  
                        </div> 
                    </div>
					<?php
					}
					?>
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

<!-- Mirrored from www.housekey-html.themeseason.com/agents.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Mar 2020 07:49:20 GMT -->
</html>