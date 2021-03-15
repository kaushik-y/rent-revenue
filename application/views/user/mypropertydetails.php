<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.housekey-html.themeseason.com/property.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Mar 2020 07:49:03 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>propertydetails</title> 
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
                            
	<?php 
			foreach($property as $row)
			{
				
				$pid=$row->propertyid;
			?>   
    <main>  
        <div class="px-3">  
            <div class="theme-container">  
                <div class="page-drawer-container single-property mt-3"> 
                    <div class="page-sidenav-content">
                        <div class="mdc-card row between-xs middle-xs p-3">             
                            <div>
                                <h2 class="uppercase"><?php echo $row->title;?></h2>
                                <p class="row flex-nowrap address mb-0">
                                    <i class="material-icons text-muted">location_on</i>
                                    <span class="fw-500 text-muted"><?php echo $row->address;?></span>
                                </p>
                            </div>
                            <div class="column mx-3"> 
                                <h4 class="primary-color price">
                                    <span>Day Rent: <?php echo number_format($row->dayrent,2); ?></span> <br>
									<span>Full Rent: <?php echo number_format($row->fullrent,2); ?></span> <br>
									<span>Sell: <?php echo number_format($row->sell,2); ?></span> <br>
                                </h4> 
                                 
                            </div>
                            <button id="page-sidenav-toggle" class="mdc-icon-button material-icons text-muted d-md-none d-lg-none d-xl-none"> 
                                more_vert 
                            </button>
                        </div>
                        <div class="mdc-card p-3 mt-3">  
                            <div class="main-carousel mb-3"> 
                                
                                <div class="swiper-container">
                                    <div class="swiper-wrapper"> 
                                         <?php $res=$this->db->query("select * from tbl_gallary where propertyid='".$row->propertyid."' and type='Image'"); 
													 foreach($res->result() as $img)
													 {
													
													?>
													<div class="swiper-slide">
                                                        <img src="<?php echo base_url(); ?>uploads/property/<?php echo $img->mediaurl; ?>" alt="slide image" data-src="<?php echo base_url(); ?>uploads/property/<?php echo $img->mediaurl; ?>" height="900" width="1500" class="slide-item swiper-lazy">
                                                        <div class="swiper-lazy-preloader"></div> 
                                                    </div> 
													 <?php } ?>
                                          
                                    </div>     
                                    <button class="swiper-button-prev swipe-arrow mdc-fab mdc-fab--mini primary">
                                        <span class="mdc-fab__ripple"></span>
                                        <span class="mdc-fab__icon material-icons">keyboard_arrow_left</span> 
                                    </button>
                                    <button class="swiper-button-next swipe-arrow mdc-fab mdc-fab--mini primary"> 
                                        <span class="mdc-fab__ripple"></span>
                                        <span class="mdc-fab__icon material-icons">keyboard_arrow_right</span> 
                                    </button>   
                                </div>
                            </div> 

                            <div class="small-carousel">   
                                <div id="small-carousel" class="swiper-container"> 
                                    <div class="swiper-wrapper">  
                                        <?php $res=$this->db->query("select * from tbl_gallary where propertyid='".$row->propertyid."' and type='Image'"); 
													 foreach($res->result() as $img)
													 {
													
													?>
													<div class="swiper-slide">
                                                        <img src="<?php echo base_url(); ?>uploads/property/<?php echo $img->mediaurl; ?>" alt="slide image" data-src="<?php echo base_url(); ?>uploads/property/<?php echo $img->mediaurl; ?>" class="slide-item swiper-lazy">
                                                        <div class="swiper-lazy-preloader"></div> 
                                                    </div> 
													 <?php } ?> 	 	 
                                    </div>  
                                </div>
                            </div>


                        </div>
                        <div class="mdc-card p-3 mt-3"> 
                            <h2 class="uppercase text-center fw-500 mb-2">Details</h2>  
                            <div class="row details">
                                <div class="row col-xs-12 col-sm-6 item">
                                    <span>Property Type:</span>
                                    <span><?php echo $row->categoryname;?></span>
                                </div> 
                                 
                                <div class="row col-xs-12 col-sm-6 item">
                                    <span>Area:</span>
                                    <span><?php echo $row->areaname;?></span>
                                </div>
                                <div class="row col-xs-12 col-sm-6 item">
                                    <span>Pin Code:</span>
                                    <span><?php echo $row->pincode;?></span>
                                </div> 
                                <div class="row col-xs-12 col-sm-6 item">
                                    <span>Overlooking:</span>
                                        <span><?php echo $row->overlooking;?></span>
                                </div>
								<div class="row col-xs-12 col-sm-6 item">
                                    <span>Landmark</span>
                                    <span><?php echo $row->landmark;?></span>
                                </div>
                                <div class="row col-xs-12 col-sm-6 item">
                                    <span>Lattitude:</span>
									<span><?php echo $row->lattitude;?></span>
                                </div>
								 <div class="row col-xs-12 col-sm-6 item">
                                    <span>Logtitude:</span>
									<span><?php echo $row->longtitude;?></span>
                                </div>
                                <div class="row col-xs-12 col-sm-6 item">
                                    <span>Bathrooms:</span>
									<span><?php echo $row->bathroom;?></span>
                                </div>
                                <div class="row col-xs-12 col-sm-6 item">
                                    <span>Rooms:</span>
									<span><?php echo $row->otherroom;?></span>
                                </div>
                                <div class="row col-xs-12 col-sm-6 item">
                                    <span>Kitchen:</span>
                                    <span><?php echo $row->kitchen;?></span>
                                </div>
								<div class="row col-xs-12 col-sm-6 item">
                                    <span>Hall:</span>
                                    <span><?php echo $row->hall;?></span>
                                </div>
								<div class="row col-xs-12 col-sm-6 item">
                                    <span>Balcony:</span>
                                    <span><?php echo $row->balcony;?></span>
                                </div>
								<div class="row col-xs-12 col-sm-6 item">
                                    <span>Furniture</span>
                                    <span><?php echo $row->furniture;?></span>
                                </div>
                                <div class="row col-xs-12 col-sm-6 item">
                                    <span>Squerfit</span>
                                    <span> <?php echo $row->squarefit;?> ftÂ²</span>
                                </div>
								<div class="row col-xs-12 col-sm-6 item">
                                    <span>Totlefloor</span>
                                    <span><?php echo $row->totalfloor;?></span>
                                </div>
								<div class="row col-xs-12 col-sm-6 item">
                                    <span>PropertyOnFloor</span>
                                    <span><?php echo $row->propertyonfloor;?></span>
                                </div>
								<div class="row col-xs-12 col-sm-6 item">
                                    <span>Water Source</span>
                                    <span><?php echo $row->watersource;?></span>
                                </div>
								<div class="row col-xs-12 col-sm-6 item">
                                    <span>Registration Type</span>
                                    <span><?php echo $row->registrationtype ;?></span>
                                </div>
                                <div class="row col-xs-12 col-sm-6 item">
                                    <span>Possessionby</span>
                                    <span><?php echo $row->possessionby;?> Year Old</span>
                                </div>
								<div class="row col-xs-12 col-sm-6 item">
                                    <span>Description</span>
                                    <span></span>
                                </div>
                            </div>   
                        </div>
                       
                        <div class="mdc-card p-3 mt-3"> 
                            <h2 class="uppercase text-center fw-500 mb-2">Description</h2> 
							<?php echo $row->description;?>
                           
                        </div>
                        
                        
                        <div class="mdc-card p-3 mt-3"> 
                            <h2 class="uppercase text-center fw-500 mb-2">Videos</h2> 
                            <div class="videoWrapper">
							<br/><br/>
							<?php $res=$this->db->query("select * from tbl_gallary where propertyid='".$pid."' and type='Video'");
								$video = $res->row()->mediaurl;
								
							?> 
													
                                <iframe src="https://www.youtube.com/embed/<?php echo $video; ?>"></iframe>
                            </div> 
                        </div>
                       

                      
                    </div>  
                   
                    <div class="mdc-drawer-scrim page-sidenav-scrim"></div>  
                </div> 
            </div>  
        </div>  
       
       
    </main>  
	<?php } ?>
	<?php $this->load->view('user/include/footer'); ?>
   
    <div id="back-to-top"><i class="material-icons">arrow_upward</i></div>
   <script src="<?php echo base_url(); ?>client/js/libs/jquery.min.js"></script> 
    <script src="<?php echo base_url(); ?>client/js/libs/material-components-web.min.js"></script> 
    <script src="<?php echo base_url(); ?>client/js/libs/swiper.min.js"></script> 
    <script src="<?php echo base_url(); ?>client/js/scripts.js"></script>
	<script src="<?php echo base_url(); ?>client/js/libs/dropzone.js"></script>  
    <script src="<?php echo base_url(); ?>client/js/libs/js.js" async defer></script>
	<script>
	function getdropdown(type)
	{
		if(type=="sell")
		{
			$('#txtstartingdate').css("visibility","hidden");
			$('#txtendingdate').css("visibility","hidden");
			$('#txtnoofperson').css("visibility","hidden");
			$('#msg').html("");
		}
		else if(type=="Fullrent")
		{
			$('#msg').html("Its for 11 month");
			$('#txtstartingdate').css("visibility","hidden");
			$('#txtendingdate').css("visibility","hidden");
		}
		else
		{
			$('#msg').html("");
			$('#txtstartingdate').css("visibility","visible");
			$('#txtendingdate').css("visibility","visible");
		}
	}
	</script>
</body>

<!-- Mirrored from www.housekey-html.themeseason.com/property.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Mar 2020 07:49:15 GMT -->
</html>