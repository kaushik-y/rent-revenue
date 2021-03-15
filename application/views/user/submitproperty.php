<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.housekey-html.themeseason.com/submit-property.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Mar 2020 07:49:23 GMT -->
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Housekey</title> 
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
    <main>   
        <div class="px-3">  
            <div class="theme-container">  
                <div class="py-3">
                    <div class="mdc-card p-3"> 
                        <div class="mdc-tab-bar-wrapper submit-property">  
                            <div class="mdc-tab-bar mb-3">
                                <div class="mdc-tab-scroller">
                                    <div class="mdc-tab-scroller__scroll-area">
                                        <div class="mdc-tab-scroller__scroll-content">
                                            <button class="mdc-tab mdc-tab--active" tabindex="0">
                                                <span class="mdc-tab__content">
                                                <span class="mdc-tab__text-label">Basic</span>
                                                </span>
                                                <span class="mdc-tab-indicator mdc-tab-indicator--active">
                                                <span class="mdc-tab-indicator__content mdc-tab-indicator__content--underline"></span>
                                                </span>
                                                <span class="mdc-tab__ripple"></span>
                                            </button>
                                            <button class="mdc-tab mdc-tab" tabindex="0">
                                                <span class="mdc-tab__content">
                                                <span class="mdc-tab__text-label">Address</span>
                                                </span>
                                                <span class="mdc-tab-indicator mdc-tab-indicator">
                                                <span class="mdc-tab-indicator__content mdc-tab-indicator__content--underline"></span>
                                                </span>
                                                <span class="mdc-tab__ripple"></span>
                                            </button> 
                                            <button class="mdc-tab mdc-tab" tabindex="0">
                                                <span class="mdc-tab__content">
                                                <span class="mdc-tab__text-label">Additional</span>
                                                </span>
                                                <span class="mdc-tab-indicator mdc-tab-indicator">
                                                <span class="mdc-tab-indicator__content mdc-tab-indicator__content--underline"></span>
                                                </span>
                                                <span class="mdc-tab__ripple"></span>
                                            </button> 
                                            <button class="mdc-tab mdc-tab" tabindex="0">
                                                <span class="mdc-tab__content">
                                                <span class="mdc-tab__text-label">Media</span>
                                                </span>
                                                <span class="mdc-tab-indicator mdc-tab-indicator">
                                                <span class="mdc-tab-indicator__content mdc-tab-indicator__content--underline"></span>
                                                </span>
                                                <span class="mdc-tab__ripple"></span>
                                            </button> 
                                            <button class="mdc-tab mdc-tab" tabindex="0">
                                                <span class="mdc-tab__content">
                                                <span class="mdc-tab__text-label">Confirmation</span>
                                                </span>
                                                <span class="mdc-tab-indicator mdc-tab-indicator">
                                                <span class="mdc-tab-indicator__content mdc-tab-indicator__content--underline"></span>
                                                </span>
                                                <span class="mdc-tab__ripple"></span>
                                            </button> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-content tab-content--active"> 
									<?php
								if($this->session->flashdata("msg"))
								{?>
								<div class="alert alert-danger fade show" role="alert"><h5>Massage!</h5>
                                    <p class="mb-0"><?php echo $this->session->flashdata("msg"); ?></p></div>
							<?php	}
								?>
							<form id="form1" enctype="multipart/form-data" class="row" method="post" action="<?php echo base_url(); ?>index.php/user/PropertyController/insertproperty">
                                    <div class="col-xs-12 p-3">
                                        <h1 class="fw-500 text-center">Basic</h1>
                                    </div> 
                                    <div class="col-xs-12 p-2">  
                                        <div class="mdc-text-field mdc-text-field--outlined">
                                            <input class="mdc-text-field__input" type="text" id="txttitle" name="txttitle">
                                            <div class="mdc-notched-outline">
                                                <div class="mdc-notched-outline__leading"></div>
                                                <div class="mdc-notched-outline__notch">
                                                    <label class="mdc-floating-label">Title</label>
                                                </div>
                                                <div class="mdc-notched-outline__trailing"></div>
                                            </div>
                                        </div> 
                                    </div>  
                                    <div class="col-xs-12 p-2">  
                                        <div class="mdc-text-field mdc-text-field--outlined mdc-text-field--textarea">
                                            <textarea class="mdc-text-field__input"  id="txtdescription" name="txtdescription"rows="5"></textarea>
                                            <div class="mdc-notched-outline mdc-notched-outline--upgraded">
                                                <div class="mdc-notched-outline__leading"></div>
                                                <div class="mdc-notched-outline__notch">
                                                    <label class="mdc-floating-label">Description</label>
                                                </div>
                                                <div class="mdc-notched-outline__trailing"></div>
                                            </div>
                                        </div> 
                                    </div>
                                   
                                    <div class="col-xs-12 col-sm-6 p-2">
									 
								
										<select class="mdc-select__anchor" id="txtcategory" name="txtcategory" style="padding:5px; border-radius:4px;">
											<option value="">Please Select Category</option>
											<?php
											foreach($catdata as $categoryname)
											{
											?>
											<option value="<?php echo $categoryname->categoryid; ?>"><?php echo $categoryname->categoryname; ?></option>
											<?php } ?>
											</select> 
									
                                    </div> 
                                    <div class="col-xs-12 col-sm-6 p-2">  
                                         <select class="mdc-select__anchor" name="txtRegistrationType" style="padding:5px; border-radius:4px;color:#858484">
											<option value="Commercial">Commercial</option>
											<option value="Recidental">Recidental</option>
											<option value="Other">Other</option>
										 </select>
										<!--<div class="mdc-select mdc-select--outlined">
                                            <div class="mdc-select__anchor">
                                                <i class="mdc-select__dropdown-icon"></i>
                                                <div class="mdc-select__selected-text" ></div>
                                                <div class="mdc-notched-outline">
                                                    <div class="mdc-notched-outline__leading"></div>
                                                    <div class="mdc-notched-outline__notch">
                                                        <label class="mdc-floating-label">Registration Type</label>
                                                    </div>
                                                    <div class="mdc-notched-outline__trailing"></div>
												</div>
											</div>
											<div class="mdc-select__menu mdc-menu mdc-menu-surface">
                                                <ul class="mdc-list">
                                                    <li class="mdc-list-item mdc-list-item--selected" data-value=""></li>
                                                    <li class="mdc-list-item" data-value="1">Commercial</li>
                                                    <li class="mdc-list-item" data-value="2">Recidental</li>
                                                    <li class="mdc-list-item" data-value="3">Other</li>
                                                </ul>
                                            </div>
                                        </div>--> 
                                    </div>  
                                   <div class="col-xs-12 col-sm-6 col-md-4 p-2">  
                                        <div class="mdc-text-field mdc-text-field--outlined">
                                            <input class="mdc-text-field__input" type="text" id="txtdayrent" name="txtdayrent">
                                            <div class="mdc-notched-outline">
                                                <div class="mdc-notched-outline__leading"></div>
                                                <div class="mdc-notched-outline__notch">
                                                    <label class="mdc-floating-label">Day rent Price</label>
                                                </div>
                                                <div class="mdc-notched-outline__trailing"></div>
                                            </div>
                                        </div> 
                                    </div>
									 <div class="col-xs-12 col-sm-6 col-md-4 p-2"> 
                                        <div class="mdc-text-field mdc-text-field--outlined">
                                            <input class="mdc-text-field__input" type="text" id="txtfullrent" name="txtfullrent">
                                            <div class="mdc-notched-outline">
                                                <div class="mdc-notched-outline__leading"></div>
                                                <div class="mdc-notched-outline__notch">
                                                    <label class="mdc-floating-label">Full rent Price</label>
                                                </div>
                                                <div class="mdc-notched-outline__trailing"></div>
                                            </div>
                                        </div> 
                                    </div>
									 <div class="col-xs-12 col-sm-6 col-md-4 p-2">  
                                        <div class="mdc-text-field mdc-text-field--outlined">
                                            <input class="mdc-text-field__input" type="text" id="txtsell" name="txtsell">
                                            <div class="mdc-notched-outline">
                                                <div class="mdc-notched-outline__leading"></div>
                                                <div class="mdc-notched-outline__notch">
                                                    <label class="mdc-floating-label">sell Price</label>
                                                </div>
                                                <div class="mdc-notched-outline__trailing"></div>
                                            </div>
                                        </div> 
                                    </div>
									<div class="col-xs-12 col-sm-6 col-md-4 p-2">  
                                        <div class="mdc-text-field mdc-text-field--outlined">
                                            <input class="mdc-text-field__input" type="number" id="txtpincode" name="txtpincode">
                                            <div class="mdc-notched-outline">
                                                <div class="mdc-notched-outline__leading"></div>
                                                <div class="mdc-notched-outline__notch">
                                                    <label class="mdc-floating-label">Pincode</label>
                                                </div>
                                                <div class="mdc-notched-outline__trailing"></div>
                                            </div>
                                        </div> 
                                    </div> 

								 <div class="col-xs-12 p-2 mt-3 end-xs"> 
                                        <button class="mdc-button mdc-button--raised next-tab" type="button">
                                            <span class="mdc-button__ripple"></span> 
                                            <span class="mdc-button__label">Next</span> 
                                            <i class="material-icons mdc-button__icon">navigate_next</i>
                                        </button>  
                                    </div> 
							</div>
                            <div class="tab-content"> 
                                    <div class="col-xs-12 p-3">
                                        <h1 class="fw-500 text-center">Address</h1>
                                    </div> 
                                    <div class="col-xs-12 p-2">  
                                        <div class="mdc-text-field mdc-text-field--outlined mdc-text-field--with-leading-icon">
                                            <i class="material-icons mdc-text-field__icon text-muted">location_on</i>
                                            <input class="mdc-text-field__input" type="text" id="txtaddress" name="txtaddress">
                                            <div class="mdc-notched-outline">
                                                <div class="mdc-notched-outline__leading"></div>
                                                <div class="mdc-notched-outline__notch">
                                                    <label class="mdc-floating-label">Address</label>
                                                </div>
                                                <div class="mdc-notched-outline__trailing"></div>
                                            </div>
                                        </div>  
                                    </div>  
                                 <div class="row">   
						<div class="col-xs-12 col-sm-6 p-2">  
                                        <div class="mdc-text-field mdc-text-field--outlined">
                                            <input class="mdc-text-field__input" type="text" id="txtlandmark" name="txtlandmark">
                                            <input class="mdc-text-field__input" type="hidden" id="txtlatitude" name="txtlatitude">
                                            <input class="mdc-text-field__input" type="hidden" id="txtlogtitude" name="txtlogtitude">
                                            
											
											<div class="mdc-notched-outline">
                                                <div class="mdc-notched-outline__leading"></div>
                                                <div class="mdc-notched-outline__notch">
                                                    <label class="mdc-floating-label">LandMark</label>
                                                </div>
                                                <div class="mdc-notched-outline__trailing"></div>
                                            </div>
                                        </div> 
                                    </div>
									
									
									<div class="col-xs-6 col-sm-6 p-2">  
                                        <div class="mdc-text-field mdc-text-field--outlined">
                                            <input class="mdc-text-field__input" type="text" id="txtlatitude" name="txtlatitude">
                                            <div class="mdc-notched-outline">
                                                <div class="mdc-notched-outline__leading"></div>
                                                <div class="mdc-notched-outline__notch">
                                                    <label class="mdc-floating-label">latitude</label>
                                                </div>
                                                <div class="mdc-notched-outline__trailing"></div>
                                            </div>
                                        </div> 
                                    </div>
									<div class="col-xs-6 col-sm-6 p-2">  
                                        <div class="mdc-text-field mdc-text-field--outlined">
                                            <input class="mdc-text-field__input" type="text" id="txtlogtitude" name="txtlogtitude">
                                            <div class="mdc-notched-outline">
                                                <div class="mdc-notched-outline__leading"></div>
                                                <div class="mdc-notched-outline__notch">
                                                    <label class="mdc-floating-label">Logtitude</label>
                                                </div>
                                                <div class="mdc-notched-outline__trailing"></div>
                                            </div>
                                        </div> 
                                    </div>
									</div>
									 <div class="row">   
                                    <div class="col-xs-12 col-sm-6 p-2">  
                                        <div class="mdc-text-field mdc-text-field--outlined">
                                            <input class="mdc-text-field__input" type="text" id="txtoverlooking" name="txtoverlooking">
                                            <div class="mdc-notched-outline">
                                                <div class="mdc-notched-outline__leading"></div>
                                                <div class="mdc-notched-outline__notch">
                                                    <label class="mdc-floating-label">OverLooking</label>
                                                </div>
                                                <div class="mdc-notched-outline__trailing"></div>
                                            </div>
                                        </div> 
                                    </div>
									  <div class="col-xs-12 col-sm-6 p-2">
                                           <select class="mdc-select__anchor" id="txtarea" name="txtarea" style="padding:5px; border-radius:4px;">
											<option value="">Please Select Area Name</option>
											<?php
											foreach($areadata as $area)
											{
											?>
											<option value="<?php echo $area->areaid; ?>"><?php echo $area->areaname; ?></option>
											<?php } ?>
											</select> 
										<!--<div class="mdc-select mdc-select--outlined">
                                            <div class="mdc-select__anchor">
                                                <i class="mdc-select__dropdown-icon"></i>
                                                <div class="mdc-select__selected-text"></div>
                                                <div class="mdc-notched-outline">
                                                    <div class="mdc-notched-outline__leading"></div>
                                                    <div class="mdc-notched-outline__notch">
                                                        <label class="mdc-floating-label">Area Name</label>
                                                    </div>
                                                    <div class="mdc-notched-outline__trailing"></div>
                                                </div>
                                            </div>
                                            <div class="mdc-select__menu mdc-menu mdc-menu-surface">
                                            
                                            </div>
										</div>-->
                                    </div> 
									</div>
                                    <div class="col-xs-12 p-2 mt-3 row between-xs"> 
                                        <button class="mdc-button mdc-button--raised prev-tab" type="button">
                                            <span class="mdc-button__ripple"></span> 
                                            <i class="material-icons mdc-button__icon">navigate_before</i>
                                            <span class="mdc-button__label">Back</span>  
                                        </button>
                                        <button class="mdc-button mdc-button--raised next-tab" type="button">
                                            <span class="mdc-button__ripple"></span> 
                                            <span class="mdc-button__label">Next</span> 
                                            <i class="material-icons mdc-button__icon">navigate_next</i>
                                        </button>  
                                    </div>  
                              
                            </div>
                            <div class="tab-content"> 
                                    <div class="col-xs-12 p-3">
                                        <h1 class="fw-500 text-center">Additional</h1>
                                    </div>
 <div class="row">   									
                                    <div class="col-xs-12 col-sm-6 col-md-4 p-2">  
                                        <div class="mdc-text-field mdc-text-field--outlined">
                                            <input class="mdc-text-field__input" type="number" id="txthall" name="txthall">
                                            <div class="mdc-notched-outline">
                                                <div class="mdc-notched-outline__leading"></div>
                                                <div class="mdc-notched-outline__notch">
                                                    <label class="mdc-floating-label">Hall</label>
                                                </div>
                                                <div class="mdc-notched-outline__trailing"></div>
                                            </div>
                                        </div> 
                                    </div> 
                                    <div class="col-xs-12 col-sm-6 col-md-4 p-2">  
                                        <div class="mdc-text-field mdc-text-field--outlined">
                                            <input class="mdc-text-field__input" type="number" id="txtkitchen" name="txtkitchen">
                                            <div class="mdc-notched-outline">
                                                <div class="mdc-notched-outline__leading"></div>
                                                <div class="mdc-notched-outline__notch">
                                                    <label class="mdc-floating-label">Kitchen</label>
                                                </div>
                                                <div class="mdc-notched-outline__trailing"></div>
                                            </div>
                                        </div> 
                                    </div> 
                                    <div class="col-xs-12 col-sm-6 col-md-4 p-2">  
                                        <div class="mdc-text-field mdc-text-field--outlined">
                                            <input class="mdc-text-field__input" type="number" id="txtbalcony" name="txtbalcony">
                                            <div class="mdc-notched-outline">
                                                <div class="mdc-notched-outline__leading"></div>
                                                <div class="mdc-notched-outline__notch">
                                                    <label class="mdc-floating-label">Balcony</label>
                                                </div>
                                                <div class="mdc-notched-outline__trailing"></div>
                                            </div>
                                        </div> 
                                    </div> 
									</div>
									 <div class="row">   
									<div class="col-xs-12 col-sm-6 col-md-4 p-2">  
                                        <div class="mdc-text-field mdc-text-field--outlined">
                                            <input class="mdc-text-field__input" type="number" id="txtbedroom" name="txtbedroom">
                                            <div class="mdc-notched-outline">
                                                <div class="mdc-notched-outline__leading"></div>
                                                <div class="mdc-notched-outline__notch">
                                                    <label class="mdc-floating-label">Bedrooms</label>
                                                </div>
                                                <div class="mdc-notched-outline__trailing"></div>
                                            </div>
                                        </div> 
                                    </div> 
                                    <div class="col-xs-12 col-sm-6 col-md-4 p-2">  
                                        <div class="mdc-text-field mdc-text-field--outlined">
                                            <input class="mdc-text-field__input" type="number" id="txtbathroom" name="txtbathroom">
                                            <div class="mdc-notched-outline">
                                                <div class="mdc-notched-outline__leading"></div>
                                                <div class="mdc-notched-outline__notch">
                                                    <label class="mdc-floating-label">Bathrooms</label>
                                                </div>
                                                <div class="mdc-notched-outline__trailing"></div>
                                            </div>
                                        </div> 
                                    </div> 
                                    <div class="col-xs-12 col-sm-6 col-md-4 p-2">  
                                        <div class="mdc-text-field mdc-text-field--outlined">
                                            <input class="mdc-text-field__input" type="number" id="txtroom" name="txtroom">
                                            <div class="mdc-notched-outline">
                                                <div class="mdc-notched-outline__leading"></div>
                                                <div class="mdc-notched-outline__notch">
                                                    <label class="mdc-floating-label">Other Room</label>
                                                </div>
                                                <div class="mdc-notched-outline__trailing"></div>
                                            </div>
                                        </div> 
                                    </div> 
									</div>
									 <div class="row">   
									<div class="col-xs-12 col-sm-6 col-md-4 p-2">  
                                        <div class="mdc-text-field mdc-text-field--outlined">
                                            <input class="mdc-text-field__input" type="number" id="txtfloor" name="txtfloor">
                                            <div class="mdc-notched-outline">
                                                <div class="mdc-notched-outline__leading"></div>
                                                <div class="mdc-notched-outline__notch">
                                                    <label class="mdc-floating-label">Total Floor</label>
                                                </div>
                                                <div class="mdc-notched-outline__trailing"></div>
                                            </div>
                                        </div> 
                                    </div> 
                                    <div class="col-xs-12 col-sm-6 col-md-4 p-2">  
                                        <div class="mdc-text-field mdc-text-field--outlined">
                                            <input class="mdc-text-field__input" type="number" id="txtonfloor" name="txtonfloor">
                                            <div class="mdc-notched-outline">
                                                <div class="mdc-notched-outline__leading"></div>
                                                <div class="mdc-notched-outline__notch">
                                                    <label class="mdc-floating-label">Property On Floor</label>
                                                </div>
                                                <div class="mdc-notched-outline__trailing"></div>
                                            </div>
                                        </div> 
                                    </div> 
                                    <div class="col-xs-12 col-sm-6 col-md-4 p-2">  
                                        <div class="mdc-text-field mdc-text-field--outlined">
                                            <input class="mdc-text-field__input"  type="number" id="txtpossessionby" name="txtpossessionby">
                                            <div class="mdc-notched-outline">
                                                <div class="mdc-notched-outline__leading"></div>
                                                <div class="mdc-notched-outline__notch">
                                                    <label class="mdc-floating-label">Possession By</label>
                                                </div>
                                                <div class="mdc-notched-outline__trailing"></div>
                                            </div>
                                        </div> 
                                    </div> 
									</div>
									 <div class="row">   
                                    <div class="col-xs-12 col-sm-6 col-md-4 p-2">  
                                        <div class="mdc-text-field mdc-text-field--outlined">
                                            <input class="mdc-text-field__input" type="text" id="txtsqrtfit" name="txtsqrtfit">
                                            <div class="mdc-notched-outline">
                                                <div class="mdc-notched-outline__leading"></div>
                                                <div class="mdc-notched-outline__notch">
                                                    <label class="mdc-floating-label">Area (ft2)</label>
                                                </div>
                                                <div class="mdc-notched-outline__trailing"></div>
                                            </div>
                                        </div> 
                                    </div> 
                                    <div class="col-xs-12 col-sm-6 col-md-4 p-2">  
                                        <div class="mdc-text-field mdc-text-field--outlined">
                                            <input class="mdc-text-field__input"  type="number" id="txtnoofguest" name="txtnoofguest">
                                            <div class="mdc-notched-outline">
                                                <div class="mdc-notched-outline__leading"></div>
                                                <div class="mdc-notched-outline__notch">
                                                    <label class="mdc-floating-label">No. Of Guest</label>
                                                </div>
                                                <div class="mdc-notched-outline__trailing"></div>
                                            </div>
                                        </div> 
                                    </div> 
									
                                     <div class="col-xs-12 col-sm-6 col-md-4 p-2">  
									 <select class="mdc-select__anchor" id="txtWaterSource" name="txtWaterSource" style="padding:5px; border-radius:4px;">
										
													<option value="Bore">Bore</option>
                                                    <option value="SMC">SMC</option>
                                                    <option value="Both">Both</option>
													<option value="Other">Other</option>
									 </select>
                                       <!-- <div class="mdc-select mdc-select--outlined">
                                            <div class="mdc-select__anchor">
                                                <i class="mdc-select__dropdown-icon"></i>
                                                <div class="mdc-select__selected-text" ></div>
                                                <div class="mdc-notched-outline">
                                                    <div class="mdc-notched-outline__leading"></div>
                                                    <div class="mdc-notched-outline__notch">
                                                        <label class="mdc-floating-label">Water Source</label>
                                                    </div>
                                                    <div class="mdc-notched-outline__trailing"></div>
												</div>
											</div>
											<div class="mdc-select__menu mdc-menu mdc-menu-surface">
                                                <ul class="mdc-list">
                                                    <li class="mdc-list-item mdc-list-item--selected" data-value=""></li>
                                                    <li class="mdc-list-item" data-value="1">Bore</li>
                                                    <li class="mdc-list-item" data-value="2">SMC</li>
                                                    <li class="mdc-list-item" data-value="3">Both</li>
													<li class="mdc-list-item" data-value="3">Other</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div> -->
									</div>
									
                                   
									<div class="mdc-radio-field mdc-radio-field--outlined  mdc-radio-field--with-leading-icon w-100 mt-3 custom-field ">
											<label for="mdc-floating-label" class="col-sm-2 col-form-label">Furniture</label>
											<div class="form-check">
											<input type="radio" name="txtfurniture" class="form-check-input  ml-5 " value="Y" checked=""> YES
											<label class="mdc-floating-label"  for="exampleRadios1">
											 
											</label>
											<input type="radio" name="txtfurniture" class="form-check-input  ml-4 " value="N" checked=""> NO
											<label class="mdc-floating-label" for="exampleRadios1">
											  
											</label>
										</div>
									</div>
									</div>
                                    <div class="col-xs-12 mb-2 p-0"> 
                                        <p class="uppercase m-2 fw-500">Features</p> 
									
			
										<?php 
										foreach($facility as $fac) {
										?>
										
											<input type="checkbox" class="mdc-checkbox" name="txtFeatures[]" value="<?php echo $fac->facilityid; ?>"/><label for="air-conditioning"> <?php echo $fac->facilityname; ?></label>
                                        
										<?php } ?>
					  
                                    </div>   
                                    <div class="col-xs-12 p-2 mt-3 row between-xs"> 
                                        <button class="mdc-button mdc-button--raised prev-tab" type="button">
                                            <span class="mdc-button__ripple"></span> 
                                            <i class="material-icons mdc-button__icon">navigate_before</i>
                                            <span class="mdc-button__label">Back</span>  
                                        </button>
                                        <button class="mdc-button mdc-button--raised next-tab" type="button">
                                            <span class="mdc-button__ripple"></span> 
                                            <span class="mdc-button__label">Next</span> 
                                            <i class="material-icons mdc-button__icon">navigate_next</i>
                                        </button>  
                                    </div>  
                                
                            </div>
                            <div class="tab-content"> 
                                
                                    <div class="col-xs-12 p-3">
                                        <h1 class="fw-500 text-center">Media</h1>
                                    </div>  
									<div class="col-xs-12 col-sm-12 p-2">  
                                        <div class="mdc-text-field mdc-text-field--outlined">
                                            <input class="mdc-text-field__input" type="text" id="txtVideo" name="txtVideo">
                                            <div class="mdc-notched-outline">
                                                <div class="mdc-notched-outline__leading"></div>
                                                <div class="mdc-notched-outline__notch">
                                                    <label class="mdc-floating-label">Video Url</label>
                                                </div>
                                                <div class="mdc-notched-outline__trailing"></div>
                                            </div>
                                        </div> 
                                    </div>
                         
						             <div class="col-xs-12 col-sm-12 p-2">  
                                        <div class="mdc-text-field mdc-text-field--outlined">
                                            <input class="mdc-text-field__input" type="file" id="userfile" name="userfile[]"  multiple="multiple">
                                            <div class="mdc-notched-outline">
                                                <div class="mdc-notched-outline__leading"></div>
                                                <div class="mdc-notched-outline__notch">
                                                    <label class="mdc-floating-label">images</label>
                                                </div>
                                                <div class="mdc-notched-outline__trailing"></div>
                                            </div>
                                        </div> 
                                    </div>
                                    <!--<div class="col-xs-12 p-0 dynamic-steps">
                                       
                                     <div class="row middle-xs">
                                                  
                                                  
                                                        <div class="col-xs-12 col-sm-12"> 
                                                            
                                                            
                                                                <label class="text-muted">Image</label> 
                                                                <div id="property-images" class="dropzone needsclick dz-clickable dz-started">
                                                                    <div class="dz-message needsclick text-muted">    
                                                                        Drop file here or click to upload.
                                                                    </div>
                                                                
                                                            </div>  
                                                        </div> 
                                                    
                                                  
                                                </div> 
                                         
                                    </div>-->
                                    
								
								
                                    <div class="col-xs-12 p-2 mt-3 row between-xs"> 
                                        <button class="mdc-button mdc-button--raised prev-tab" type="button">
                                            <span class="mdc-button__ripple"></span> 
                                            <i class="material-icons mdc-button__icon">navigate_before</i>
                                            <span class="mdc-button__label">Back</span>  
                                        </button>
                                        <button class="mdc-button mdc-button--raised next-tab" type="button">
                                            <span class="mdc-button__ripple"></span> 
                                            <span class="mdc-button__label">Submit</span> 
                                            <i class="material-icons mdc-button__icon">navigate_next</i>
                                        </button>  
                                    </div>  
                                 
                            </div>
                            <div class="tab-content"> 
                                < <div class="row center-xs middle-xs py-3">  
                                    <button class="mdc-button mdc-button--raised bg-accent" type="submit" name="btnsubmit" id="btnsubmit">
                                        <span class="mdc-button__ripple"></span> 
                                        <span class="mdc-button__label">submit-property</span>  
                                    </button>        
                                </div>
                                
                            </div>
							 </form>
                        </div>  
                        <div id="dropzone-preview-template" class="d-none plan-image-template">
                            <div class="dz-preview dz-file-preview">
                                <div class="dz-image"><img src="assets/images/others/transparent-bg.png" data-dz-thumbnail="" alt="prop-image"></div>
                                <div class="dz-details">
                                    <div class="dz-size"><span data-dz-size=""></span></div>
                                    <div class="dz-filename"><span data-dz-name=""></span></div>
                                </div>
                                <div class="dz-progress"><span class="dz-upload" data-dz-uploadprogress=""></span></div>
                                <div class="dz-error-message"><span data-dz-errormessage=""></span></div>
                                <div class="dz-success-mark">
                                    <i class="material-icons mat-icon-xlg">check</i> 
                                </div>
                                <div class="dz-error-mark">
                                    <i class="material-icons mat-icon-xlg">cancel</i> 
                                </div> 
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
	   <script src="<?php echo base_url(); ?>client/js/libs/dropzone.js"></script>  
    <script src="<?php echo base_url(); ?>client/js/scripts.js"></script> 
	<script src="<?php echo base_url(); ?>public/js/jquery.validate.min.js"></script> 
	<script src="<?php echo base_url(); ?>public/js/additional-methods.min.js"></script> 
	

  <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyClJ7bohWjfhtUsd71UVKXfsu48-Wq5O5s&amp;libraries=places" type="text/javascript"></script>
  <script type="text/javascript">
    function initialize() {
        var address = (document.getElementById('txtlandmark'));
		 var options = {
 				 componentRestrictions: {country: "IN"}
 			};
        var autocomplete = new google.maps.places.Autocomplete(address,options);
        autocomplete.setTypes(['geocode']);
        google.maps.event.addListener(autocomplete, 'place_changed', function() {
            var place = autocomplete.getPlace();
            if (!place.geometry) {
                return;
            }

        var address = '';
        if (place.address_components) {
            address = [
                (place.address_components[0] && place.address_components[0].short_name || ''),
                (place.address_components[1] && place.address_components[1].short_name || ''),
                (place.address_components[2] && place.address_components[2].short_name || '')
                ].join(' ');
        }
        /*********************************************************************/
        /* var address contain your autocomplete address *********************/
        /* place.geometry.location.lat() && place.geometry.location.lat() ****/
        /* will be used for current address latitude and longitude************/
        /*********************************************************************/
        document.getElementById('txtlatitude').value = place.geometry.location.lat();
        document.getElementById('txtlogtitude').value = place.geometry.location.lng();
        });
		
  }
   google.maps.event.addDomListener(window, 'load', initialize);
   
</script>

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
					
							var title=$('#txttitle').val();
							var description=$('#txtdescription').val();
							var dayrent=$('#txtdayrent').val();
							var fullrent=$('#txtfullrent').val();
							var sell=$('#txtsell').val();
							var pincode=$('#txtpincode').val();
							
							//alert("Day rent : "+fullrent);
							
							if(title=="")
							{
								alert("Please Enter Title");
							}
							else if(description=="")
							{
								alert("Please Enter description");
							}
							else if(dayrent=="")
							{
								alert("Please Enter Dayrent");
							}
							else if(fullrent=="")
							{
								alert("Please Enter Fullrent");
							}
							else if(sell=="")
							{
								alert("Please Enter sell");
							}
							else if(parseInt(fullrent)<parseInt(dayrent))
							{
								alert("Please Enter fullrent greterthen dayrent ");
							}
							else if(parseInt(sell)<parseInt(fullrent))
							{
								alert("Please Enter sell greterthen fullrent ");
							}
							else if(pincode=="")
							{
								alert("Please Enter pincode");
							}
							else if(pincode.length<6)
							{
								alert("enter valid pincode");
							}
							else if(pincode.length>6)
							{
								alert("enter valid pincode");
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
			txttitle:
			{
				required:true,
				alpha:true
			},
			txtdescription:
			{
				required:true,
				minlength:10
			},
			txtfullrent:
			{
				required:true,
				number:true
			},
			txtdayrent:
			{
				required:true,
				number:true
			},
			txtsell:
			{
				required:true,
				number:true
			},
			txtaddress:
			{
				required:true,
				alpha:true
			},
			txtpincode:
			{
				required:true,
				number:true
			}
		},
		messages:
		{
			txtname:
			{
				required:"Please Enter name",
				alpha:"Only Alphabate allowed"
			},
			txtdescription:
			{
				required:"Pelase enter description",
				minlength:"Enter atleaset 10 characters"
			},
			txtfullrent:
			{
				required:"Please Enter fullrent",
				number:"Only numbers allowed"
			},
			txtdayrent:
			{
				required:"Please Enter dayrent",
				number:"Only numbers allowed"
			},
			txtsell:
			{
				required:"Please Enter sell price",
				number:"Only numbers allowed"
			},
			txtaddress:
			{
				required:"Please Enter Address",
				alpha:"Only Alphabate allowed"
			},
			txtpincode:
			{
				required:"Please Enter pincode",
				number:"Only numbers allowed"
			}
			
		}
		
	});
	
});
</script>

<!-- Mirrored from www.housekey-html.themeseason.com/submit-property.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Mar 2020 07:49:25 GMT -->
</html>