<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.housekey-html.themeseason.com/pricing.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Mar 2020 07:49:21 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>package</title> 
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
                <div class="my-5">
                    <div class="column center-xs middle-xs text-center">  
                      <h1 class="uppercase">Pricing packages</h1>             
                      <p class="text-muted fw-500">Choose a package that's best for your business.</p>
                    </div>

                    <div class="mdc-tab-bar-wrapper centered pricing-tabs">  
                    
                        <div class="tab-content tab-content--active">  
                            <div class="row">
							<?php
							foreach($packages as $row)
							{
							?>
                                <div class="col-xs-12 col-sm-6 col-md-3 p-2">
                                    <div class="mdc-card pricing-card text-center border-accent p-0 h-100">
                                        <h2 class="pricing-title my-3"><?php echo $row->packagename; ?></h2>
                                        <div class="bg-accent pricing-header p-3">   
                                            <h5>Rs. <?php echo number_format($row->price,2); ?><small> </small></h5>
                                            <p class="desc mb-2"><?php echo $row->duration; ?> Days</p>
                                        </div>
                                        <div class="p-3">
                                            <p class="py-2"><span class="mx-2 fw-500"><?php echo $row->	noproperty; ?></span>Properties</p>
                                            <p class="py-2 text-muted"><?php echo $row->description; ?></p>
                                           
                                        </div>
                                    </div>
                                </div>
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

<!-- Mirrored from www.housekey-html.themeseason.com/pricing.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Mar 2020 07:49:21 GMT -->
</html>