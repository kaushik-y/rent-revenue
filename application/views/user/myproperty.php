<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.housekey-html.themeseason.com/properties.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Mar 2020 07:48:59 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Myproperty</title> 
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
                <div class="page-drawer-container mt-3">
                     <?php $this->load->view('user/include/profile'); ?>  
                    <div class="mdc-drawer-scrim page-sidenav-scrim"></div>  
                    <div class="page-sidenav-content"> 
                        <div class="properties-wrapper row mt-0">
                            <div class="row px-2 w-100">  
                                <div class="row mdc-card between-xs middle-xs w-100 p-2 filter-row mdc-elevation--z1 text-muted"> 
                                    <button id="page-sidenav-toggle" class="mdc-icon-button material-icons d-md-none d-lg-none d-xl-none"> 
                                        more_vert 
                                    </button>  
                                    <div class="mdc-menu-surface--anchor"> 
                                        <button class="mdc-button mdc-ripple-surface text-muted mutable"> 
                                            <span class="mdc-button__ripple"></span>
                                            <span class="mdc-button__label"><span class="mutable">Change Property View</span></span>
                                        </button> 
                                        <div class="mdc-menu mdc-menu-surface">
                                            
                                        </div> 
                                    </div>
                                    <div class="row middle-xs d-none d-sm-flex d-md-flex d-lg-flex d-xl-flex">
                                        <div class="mdc-menu-surface--anchor"> 
                                            <button class="mdc-button mdc-ripple-surface text-muted"> 
                                                <span class="mdc-button__ripple"></span>
                                            </button> 
                                            <div class="mdc-menu mdc-menu-surface">
                                               
                                            </div> 
                                        </div>
                                        <button class="mdc-icon-button material-icons view-type" data-view-type="list" data-col="1" data-full-width-page="false">view_list</button> 
                                        <button class="mdc-icon-button view-type" data-view-type="grid" data-col="2" data-full-width-page="false">
                                            <svg class="material-icons mat-icon-sm" viewBox="0 0 25 25">
                                                <path d="M3,11H11V3H3M3,21H11V13H3M13,21H21V13H13M13,3V11H21V3"/>
                                            </svg>
                                        </button> 
                                        <button class="mdc-icon-button view-type material-icons d-none d-lg-flex d-xl-flex" data-view-type="grid" data-col="3" data-full-width-page="false">view_module</button> 
                                    </div>
                                </div>  
                            </div> 
                            
                            
                            
                            <?php 
									foreach($property as $row)
									{
									?>
                            <div class="row item col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4"> 
                                <div class="mdc-card property-item grid-item column-3">
                                    <div class="thumbnail-section">
                                        
                                        <div class="property-image"> 
                                            <div class="swiper-container">
                                               <div class="swiper-wrapper"> 
                                                    <?php $res=$this->db->query("select * from tbl_gallary where propertyid='".$row->propertyid."' and type='Image'"); 
													 foreach($res->result() as $img)
													 {
													
													?>
													<div class="swiper-slide">
                                                        <img src="<?php echo base_url(); ?>uploads/property/<?php echo $img->mediaurl; ?>" alt="slide image" data-src="<?php echo base_url(); ?>uploads/property/<?php echo $img->mediaurl; ?>" height="200" width="200"class="slide-item swiper-lazy">
                                                        <div class="swiper-lazy-preloader"></div> 
                                                    </div> 
													 <?php } ?>
                                                </div>  
                                                <div class="swiper-pagination white"></div>  
                                                <button class="mdc-icon-button swiper-button-prev swipe-arrow"><i class="material-icons mat-icon-lg">keyboard_arrow_left</i></button>
                                                <button class="mdc-icon-button swiper-button-next swipe-arrow"><i class="material-icons mat-icon-lg">keyboard_arrow_right</i></button>
                                            </div>  
                                        </div> 
                                        
                                    </div>
									
                                    <div class="property-content-wrapper"> 
                                        <div class="property-content">
                                            <div class="content">
                                                <h1 class="title"><a href="<?php echo base_url(); ?>index.php/user/PropertyController/index3/<?php echo $row->propertyid; ?>"><?php echo $row->title;?></a></h1>
                                                <p class="row address flex-nowrap">
                                                    <i class="material-icons text-muted">location_on</i>
                                                    <span><?php echo $row->address;?></span>
                                                </p>
                                                <div class="row between-xs middle-xs">
                                                    <h3 class="primary-color price">
                                                        <span>Rs. <?php echo number_format($row->dayrent,2); ?></span> 
                                                    </h3> 
                                                   
                                                </div>
                                                <div class="d-none d-md-flex d-lg-flex d-xl-flex">
                                                    <div class="description mt-3"> 
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat modi dignissimos blanditiis accusamus, magni provident omnis perferendis laudantium illo recusandae ab molestiae repudiandae cum obcaecati nulla adipisci fuga culpa repellat!</p>
                                                    </div>
                                                </div>
                                                <div class="features mt-3">                    
                                                    <p><span>Property size</span><span><?php echo $row->squarefit;?> ft²</span></p>
                                                    <p><span>Registration Type</span><span><?php echo $row->registrationtype;?></span></p>
                                                    <p><span>Possessionby</span><span><?php echo $row->possessionby;?> Year Old </span></p>
                                                    <p><span>Over Looking</span><span><?php echo $row->overlooking;?></span></p>
                                                </div>   
                                            </div> 
                                            <div class="grow"></div>
                                            <div class="actions row between-xs middle-xs">
                                                <p class="row date mb-0">
                                                    <i class="material-icons text-muted">date_range</i>
                                                    <span class="mx-2"><?php echo $row->addeddate;?></span>
                                                </p> 
                                                
                                            </div>
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
            </div>  
        </div>  
       
        
    </main> 
<?php $this->load->view('user/include/footer'); ?>	
	<script src="<?php echo base_url(); ?>client/js/libs/jquery.min.js"></script> 
    <script src="<?php echo base_url(); ?>client/js/libs/material-components-web.min.js"></script> 
    <script src="<?php echo base_url(); ?>client/js/libs/swiper.min.js"></script> 
    <script src="<?php echo base_url(); ?>client/js/scripts.js"></script>  
	<script src="<?php echo base_url(); ?>client/js/libs/dropzone.js"></script>  
    <script src="<?php echo base_url(); ?>client/js/libs/js.js" async defer></script>
</body>

<!-- Mirrored from www.housekey-html.themeseason.com/properties.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Mar 2020 07:49:03 GMT -->
</html>