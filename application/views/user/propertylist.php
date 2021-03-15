<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.housekey-html.themeseason.com/properties.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Mar 2020 07:48:59 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>propertylist</title> 
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
       
       <!-- <div class="px-3">  
            <div class="theme-container">  
                <div class="page-drawer-container mt-3">
                    <aside class="mdc-drawer mdc-drawer--modal page-sidenav">
                        <a href="#" class="h-0"></a>
                        <div class="mdc-card">   
                            <form action="javascript:void(0);" id="filters" class="search-wrapper m-0 o-hidden"> 
                                <div class="column p-2">  
                                    <div class="col-xs-12 p-2">
                                        <div class="mdc-select mdc-select--outlined">
                                            <div class="mdc-select__anchor">
                                                <i class="mdc-select__dropdown-icon"></i>
                                                <div class="mdc-select__selected-text"></div>
                                                <div class="mdc-notched-outline">
                                                    <div class="mdc-notched-outline__leading"></div>
                                                    <div class="mdc-notched-outline__notch">
                                                        <label class="mdc-floating-label">Property Type</label>
                                                    </div>
                                                    <div class="mdc-notched-outline__trailing"></div>
                                                </div>
                                            </div>
                                            <div class="mdc-select__menu mdc-menu mdc-menu-surface">
                                                <ul class="mdc-list">
                                                    <li class="mdc-list-item mdc-list-item--selected" data-value=""></li>
                                                    <li class="mdc-list-item" data-value="1">Office</li>
                                                    <li class="mdc-list-item" data-value="2">House</li>
                                                    <li class="mdc-list-item" data-value="3">Apartment</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>   
                                    <div class="col-xs-12 p-2">  
                                        <div class="mdc-select mdc-select--outlined">
                                            <div class="mdc-select__anchor">
                                                <i class="mdc-select__dropdown-icon"></i>
                                                <div class="mdc-select__selected-text"></div>
                                                <div class="mdc-notched-outline">
                                                    <div class="mdc-notched-outline__leading"></div>
                                                    <div class="mdc-notched-outline__notch">
                                                        <label class="mdc-floating-label">Property Status</label>
                                                    </div>
                                                    <div class="mdc-notched-outline__trailing"></div>
                                                </div>
                                            </div>
                                            <div class="mdc-select__menu mdc-menu mdc-menu-surface">
                                                <ul class="mdc-list">
                                                    <li class="mdc-list-item mdc-list-item--selected" data-value=""></li>
                                                    <li class="mdc-list-item" data-value="1">For Sale</li>
                                                    <li class="mdc-list-item" data-value="2">For Rent</li>
                                                    <li class="mdc-list-item" data-value="3">Open House</li>
                                                    <li class="mdc-list-item" data-value="4">No Fees</li>
                                                    <li class="mdc-list-item" data-value="5">Hot Offer</li>
                                                    <li class="mdc-list-item" data-value="6">Sold</li>
                                                </ul>
                                            </div>
                                        </div> 
        
                                    </div>  
                                    <div class="row">
                                        <div class="col-xs-6 p-2">
                                            <div class="mdc-text-field mdc-text-field--outlined">
                                                <input class="mdc-text-field__input">
                                                <div class="mdc-notched-outline">
                                                <div class="mdc-notched-outline__leading"></div>
                                                <div class="mdc-notched-outline__notch">
                                                    <label class="mdc-floating-label">Price From</label>
                                                </div>
                                                <div class="mdc-notched-outline__trailing"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 p-2 to">
                                            <div class="mdc-text-field mdc-text-field--outlined">
                                                <input class="mdc-text-field__input">
                                                <div class="mdc-notched-outline">
                                                <div class="mdc-notched-outline__leading"></div>
                                                <div class="mdc-notched-outline__notch">
                                                    <label class="mdc-floating-label">Price To</label>
                                                </div>
                                                <div class="mdc-notched-outline__trailing"></div>
                                                </div>
                                            </div>
                                        </div> 
                                    </div> 
                                    <div class="col-xs-12 p-2">
                                        <div class="mdc-select mdc-select--outlined">
                                            <div class="mdc-select__anchor">
                                                <i class="mdc-select__dropdown-icon"></i>
                                                <div class="mdc-select__selected-text"></div>
                                                <div class="mdc-notched-outline">
                                                    <div class="mdc-notched-outline__leading"></div>
                                                    <div class="mdc-notched-outline__notch">
                                                        <label class="mdc-floating-label">City</label>
                                                    </div>
                                                    <div class="mdc-notched-outline__trailing"></div>
                                                </div>
                                            </div>
                                            <div class="mdc-select__menu mdc-menu mdc-menu-surface">
                                                <ul class="mdc-list">
                                                    <li class="mdc-list-item mdc-list-item--selected" data-value=""></li>
                                                    <li class="mdc-list-item" data-value="1">New York</li>
                                                    <li class="mdc-list-item" data-value="2">Chicago</li>
                                                    <li class="mdc-list-item" data-value="3">Los Angeles</li>
                                                    <li class="mdc-list-item" data-value="4">Seattle</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 p-2">  
                                        <div class="mdc-text-field mdc-text-field--outlined">
                                            <input class="mdc-text-field__input">
                                            <div class="mdc-notched-outline">
                                                <div class="mdc-notched-outline__leading"></div>
                                                <div class="mdc-notched-outline__notch">
                                                    <label class="mdc-floating-label">Zip Code</label>
                                                </div>
                                                <div class="mdc-notched-outline__trailing"></div>
                                            </div>
                                        </div> 
                                    </div> 
                                    <div class="col-xs-12 p-2">
                                        <div class="mdc-select mdc-select--outlined">
                                            <div class="mdc-select__anchor">
                                                <i class="mdc-select__dropdown-icon"></i>
                                                <div class="mdc-select__selected-text"></div>
                                                <div class="mdc-notched-outline">
                                                    <div class="mdc-notched-outline__leading"></div>
                                                    <div class="mdc-notched-outline__notch">
                                                        <label class="mdc-floating-label">Neighborhood</label>
                                                    </div>
                                                    <div class="mdc-notched-outline__trailing"></div>
                                                </div>
                                            </div>
                                            <div class="mdc-select__menu mdc-menu mdc-menu-surface">
                                                <ul class="mdc-list">
                                                    <li class="mdc-list-item mdc-list-item--selected" data-value=""></li>
                                                    <li class="mdc-list-item" data-value="1">Astoria</li>
                                                    <li class="mdc-list-item" data-value="2">Midtown</li>
                                                    <li class="mdc-list-item" data-value="3">Chinatown</li>
                                                    <li class="mdc-list-item" data-value="4">Austin</li>
                                                    <li class="mdc-list-item" data-value="5">Englewood</li>
                                                    <li class="mdc-list-item" data-value="6">Riverdale</li>
                                                    <li class="mdc-list-item" data-value="7">Hollywood</li>
                                                    <li class="mdc-list-item" data-value="8">Sherman Oaks</li>
                                                    <li class="mdc-list-item" data-value="9">Highland Park</li>
                                                    <li class="mdc-list-item" data-value="10">Belltown</li>
        
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 p-2">
                                        <div class="mdc-select mdc-select--outlined">
                                            <div class="mdc-select__anchor">
                                                <i class="mdc-select__dropdown-icon"></i>
                                                <div class="mdc-select__selected-text"></div>
                                                <div class="mdc-notched-outline">
                                                    <div class="mdc-notched-outline__leading"></div>
                                                    <div class="mdc-notched-outline__notch">
                                                        <label class="mdc-floating-label">Street</label>
                                                    </div>
                                                    <div class="mdc-notched-outline__trailing"></div>
                                                </div>
                                            </div>
                                            <div class="mdc-select__menu mdc-menu mdc-menu-surface">
                                                <ul class="mdc-list">
                                                    <li class="mdc-list-item mdc-list-item--selected" data-value=""></li>
                                                    <li class="mdc-list-item" data-value="1">Astoria Street #1</li>
                                                    <li class="mdc-list-item" data-value="2">Astoria Street #2</li>
                                                    <li class="mdc-list-item" data-value="3">Midtown Street #1</li>
                                                    <li class="mdc-list-item" data-value="4">Midtown Street #2</li>
                                                    <li class="mdc-list-item" data-value="5">Chinatown Street #1</li>
                                                    <li class="mdc-list-item" data-value="6">Chinatown Street #2</li>
                                                    <li class="mdc-list-item" data-value="7">Austin Street #1</li>
                                                    <li class="mdc-list-item" data-value="8">Austin Street #2</li>
                                                    <li class="mdc-list-item" data-value="9">Englewood Street #1</li>
                                                    <li class="mdc-list-item" data-value="10">Englewood Street #2</li> 
                                                    <li class="mdc-list-item" data-value="11">Riverdale Street #1</li>
                                                    <li class="mdc-list-item" data-value="12">Riverdale Street #2</li>
                                                    <li class="mdc-list-item" data-value="13">Hollywood Street #1</li>
                                                    <li class="mdc-list-item" data-value="14">Hollywood Street #2</li>
                                                    <li class="mdc-list-item" data-value="15">Sherman Oaks Street #1</li>
                                                    <li class="mdc-list-item" data-value="16">Sherman Oaks Street #2</li>
                                                    <li class="mdc-list-item" data-value="17">Highland Park Street #1</li>
                                                    <li class="mdc-list-item" data-value="18">Highland Park Street #2</li>
                                                    <li class="mdc-list-item" data-value="19">Belltown Street #1</li>
                                                    <li class="mdc-list-item" data-value="20">Belltown Street #2</li> 
                                                </ul>
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="row">
                                        <div class="col-xs-6 p-2"> 
                                            <div class="mdc-select mdc-select--outlined">
                                                <div class="mdc-select__anchor">
                                                    <i class="mdc-select__dropdown-icon"></i>
                                                    <div class="mdc-select__selected-text"></div>
                                                    <div class="mdc-notched-outline">
                                                        <div class="mdc-notched-outline__leading"></div>
                                                        <div class="mdc-notched-outline__notch">
                                                            <label class="mdc-floating-label">Bedrooms From</label>
                                                        </div>
                                                        <div class="mdc-notched-outline__trailing"></div>
                                                    </div>
                                                </div>
                                                <div class="mdc-select__menu mdc-menu mdc-menu-surface">
                                                    <ul class="mdc-list">
                                                        <li class="mdc-list-item mdc-list-item--selected" data-value=""></li>
                                                        <li class="mdc-list-item" data-value="1">1</li>
                                                        <li class="mdc-list-item" data-value="2">2</li>
                                                        <li class="mdc-list-item" data-value="3">3</li>
                                                        <li class="mdc-list-item" data-value="4">4</li>
                                                        <li class="mdc-list-item" data-value="5">5</li>
                                                        <li class="mdc-list-item" data-value="6">6</li>
                                                        <li class="mdc-list-item" data-value="7">7</li>
                                                        <li class="mdc-list-item" data-value="8">8</li>
                                                        <li class="mdc-list-item" data-value="9">9</li>
                                                        <li class="mdc-list-item" data-value="10">10</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 p-2 to">
                                            <div class="mdc-select mdc-select--outlined">
                                                <div class="mdc-select__anchor">
                                                    <i class="mdc-select__dropdown-icon"></i>
                                                    <div class="mdc-select__selected-text"></div>
                                                    <div class="mdc-notched-outline">
                                                        <div class="mdc-notched-outline__leading"></div>
                                                        <div class="mdc-notched-outline__notch">
                                                            <label class="mdc-floating-label">Bedrooms To</label>
                                                        </div>
                                                        <div class="mdc-notched-outline__trailing"></div>
                                                    </div>
                                                </div>
                                                <div class="mdc-select__menu mdc-menu mdc-menu-surface">
                                                    <ul class="mdc-list">
                                                        <li class="mdc-list-item mdc-list-item--selected" data-value=""></li>
                                                        <li class="mdc-list-item" data-value="1">1</li>
                                                        <li class="mdc-list-item" data-value="2">2</li>
                                                        <li class="mdc-list-item" data-value="3">3</li>
                                                        <li class="mdc-list-item" data-value="4">4</li>
                                                        <li class="mdc-list-item" data-value="5">5</li>
                                                        <li class="mdc-list-item" data-value="6">6</li>
                                                        <li class="mdc-list-item" data-value="7">7</li>
                                                        <li class="mdc-list-item" data-value="8">8</li>
                                                        <li class="mdc-list-item" data-value="9">9</li>
                                                        <li class="mdc-list-item" data-value="10">10</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="row">
                                            <div class="col-xs-6 p-2"> 
                                                <div class="mdc-select mdc-select--outlined">
                                                    <div class="mdc-select__anchor">
                                                        <i class="mdc-select__dropdown-icon"></i>
                                                        <div class="mdc-select__selected-text"></div>
                                                        <div class="mdc-notched-outline">
                                                            <div class="mdc-notched-outline__leading"></div>
                                                            <div class="mdc-notched-outline__notch">
                                                                <label class="mdc-floating-label">Bathrooms From</label>
                                                            </div>
                                                            <div class="mdc-notched-outline__trailing"></div>
                                                        </div>
                                                    </div>
                                                    <div class="mdc-select__menu mdc-menu mdc-menu-surface">
                                                        <ul class="mdc-list">
                                                            <li class="mdc-list-item mdc-list-item--selected" data-value=""></li>
                                                            <li class="mdc-list-item" data-value="1">1</li>
                                                            <li class="mdc-list-item" data-value="2">2</li>
                                                            <li class="mdc-list-item" data-value="3">3</li>
                                                            <li class="mdc-list-item" data-value="4">4</li>
                                                            <li class="mdc-list-item" data-value="5">5</li>
                                                            <li class="mdc-list-item" data-value="6">6</li>
                                                            <li class="mdc-list-item" data-value="7">7</li>
                                                            <li class="mdc-list-item" data-value="8">8</li>
                                                            <li class="mdc-list-item" data-value="9">9</li>
                                                            <li class="mdc-list-item" data-value="10">10</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 p-2 to">
                                                <div class="mdc-select mdc-select--outlined">
                                                    <div class="mdc-select__anchor">
                                                        <i class="mdc-select__dropdown-icon"></i>
                                                        <div class="mdc-select__selected-text"></div>
                                                        <div class="mdc-notched-outline">
                                                            <div class="mdc-notched-outline__leading"></div>
                                                            <div class="mdc-notched-outline__notch">
                                                                <label class="mdc-floating-label">Bathrooms To</label>
                                                            </div>
                                                            <div class="mdc-notched-outline__trailing"></div>
                                                        </div>
                                                    </div>
                                                    <div class="mdc-select__menu mdc-menu mdc-menu-surface">
                                                        <ul class="mdc-list">
                                                            <li class="mdc-list-item mdc-list-item--selected" data-value=""></li>
                                                            <li class="mdc-list-item" data-value="1">1</li>
                                                            <li class="mdc-list-item" data-value="2">2</li>
                                                            <li class="mdc-list-item" data-value="3">3</li>
                                                            <li class="mdc-list-item" data-value="4">4</li>
                                                            <li class="mdc-list-item" data-value="5">5</li>
                                                            <li class="mdc-list-item" data-value="6">6</li>
                                                            <li class="mdc-list-item" data-value="7">7</li>
                                                            <li class="mdc-list-item" data-value="8">8</li>
                                                            <li class="mdc-list-item" data-value="9">9</li>
                                                            <li class="mdc-list-item" data-value="10">10</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div> 
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-6 p-2"> 
                                            <div class="mdc-select mdc-select--outlined">
                                                <div class="mdc-select__anchor">
                                                    <i class="mdc-select__dropdown-icon"></i>
                                                    <div class="mdc-select__selected-text"></div>
                                                    <div class="mdc-notched-outline">
                                                        <div class="mdc-notched-outline__leading"></div>
                                                        <div class="mdc-notched-outline__notch">
                                                            <label class="mdc-floating-label">Garages From</label>
                                                        </div>
                                                        <div class="mdc-notched-outline__trailing"></div>
                                                    </div>
                                                </div>
                                                <div class="mdc-select__menu mdc-menu mdc-menu-surface">
                                                    <ul class="mdc-list">
                                                        <li class="mdc-list-item mdc-list-item--selected" data-value=""></li>
                                                        <li class="mdc-list-item" data-value="1">1</li>
                                                        <li class="mdc-list-item" data-value="2">2</li>
                                                        <li class="mdc-list-item" data-value="3">3</li>
                                                        <li class="mdc-list-item" data-value="4">4</li>
                                                        <li class="mdc-list-item" data-value="5">5</li> 
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 p-2 to">
                                            <div class="mdc-select mdc-select--outlined">
                                                <div class="mdc-select__anchor">
                                                    <i class="mdc-select__dropdown-icon"></i>
                                                    <div class="mdc-select__selected-text"></div>
                                                    <div class="mdc-notched-outline">
                                                        <div class="mdc-notched-outline__leading"></div>
                                                        <div class="mdc-notched-outline__notch">
                                                            <label class="mdc-floating-label">Garages To</label>
                                                        </div>
                                                        <div class="mdc-notched-outline__trailing"></div>
                                                    </div>
                                                </div>
                                                <div class="mdc-select__menu mdc-menu mdc-menu-surface">
                                                    <ul class="mdc-list">
                                                        <li class="mdc-list-item mdc-list-item--selected" data-value=""></li>
                                                        <li class="mdc-list-item" data-value="1">1</li>
                                                        <li class="mdc-list-item" data-value="2">2</li>
                                                        <li class="mdc-list-item" data-value="3">3</li>
                                                        <li class="mdc-list-item" data-value="4">4</li>
                                                        <li class="mdc-list-item" data-value="5">5</li> 
                                                    </ul>
                                                </div>
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-6 p-2">
                                            <div class="mdc-text-field mdc-text-field--outlined">
                                                <input class="mdc-text-field__input">
                                                <div class="mdc-notched-outline">
                                                <div class="mdc-notched-outline__leading"></div>
                                                <div class="mdc-notched-outline__notch">
                                                    <label class="mdc-floating-label">Area From</label>
                                                </div>
                                                <div class="mdc-notched-outline__trailing"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 p-2 to">
                                            <div class="mdc-text-field mdc-text-field--outlined">
                                                <input class="mdc-text-field__input">
                                                <div class="mdc-notched-outline">
                                                <div class="mdc-notched-outline__leading"></div>
                                                <div class="mdc-notched-outline__notch">
                                                    <label class="mdc-floating-label">Area To</label>
                                                </div>
                                                <div class="mdc-notched-outline__trailing"></div>
                                                </div>
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-6 p-2">
                                            <div class="mdc-text-field mdc-text-field--outlined">
                                                <input class="mdc-text-field__input">
                                                <div class="mdc-notched-outline">
                                                <div class="mdc-notched-outline__leading"></div>
                                                <div class="mdc-notched-outline__notch">
                                                    <label class="mdc-floating-label">Year Built From</label>
                                                </div>
                                                <div class="mdc-notched-outline__trailing"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 p-2 to">
                                            <div class="mdc-text-field mdc-text-field--outlined">
                                                <input class="mdc-text-field__input">
                                                <div class="mdc-notched-outline">
                                                <div class="mdc-notched-outline__leading"></div>
                                                <div class="mdc-notched-outline__notch">
                                                    <label class="mdc-floating-label">Year Built To</label>
                                                </div>
                                                <div class="mdc-notched-outline__trailing"></div>
                                                </div>
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="col-xs-12 mb-2"> 
                                        <p class="uppercase m-2 fw-500">Features</p>  
                                        <div class="features column">
                                            <div class="mdc-form-field">
                                                <div class="mdc-checkbox">
                                                    <input type="checkbox" class="mdc-checkbox__native-control" id="air-conditioning"/>
                                                    <div class="mdc-checkbox__background">
                                                        <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                                                            <path class="mdc-checkbox__checkmark-path" fill="none" d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                                                        </svg>
                                                        <div class="mdc-checkbox__mixedmark"></div>
                                                    </div>
                                                    <div class="mdc-checkbox__ripple"></div>
                                                </div>
                                                <label for="air-conditioning">Air Conditioning</label>
                                            </div>    
                                            <div class="mdc-form-field">
                                                <div class="mdc-checkbox">
                                                    <input type="checkbox" class="mdc-checkbox__native-control" id="barbeque"/>
                                                    <div class="mdc-checkbox__background">
                                                        <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                                                            <path class="mdc-checkbox__checkmark-path" fill="none" d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                                                        </svg>
                                                        <div class="mdc-checkbox__mixedmark"></div>
                                                    </div>
                                                    <div class="mdc-checkbox__ripple"></div>
                                                </div>
                                                <label for="barbeque">Barbeque</label>
                                            </div>
                                            <div class="mdc-form-field">
                                                <div class="mdc-checkbox">
                                                    <input type="checkbox" class="mdc-checkbox__native-control" id="dryer"/>
                                                    <div class="mdc-checkbox__background">
                                                        <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                                                            <path class="mdc-checkbox__checkmark-path" fill="none" d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                                                        </svg>
                                                        <div class="mdc-checkbox__mixedmark"></div>
                                                    </div>
                                                    <div class="mdc-checkbox__ripple"></div>
                                                </div>
                                                <label for="dryer">Dryer</label>
                                            </div>
                                            <div class="mdc-form-field">
                                                <div class="mdc-checkbox">
                                                    <input type="checkbox" class="mdc-checkbox__native-control" id="microwave"/>
                                                    <div class="mdc-checkbox__background">
                                                        <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                                                            <path class="mdc-checkbox__checkmark-path" fill="none" d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                                                        </svg>
                                                        <div class="mdc-checkbox__mixedmark"></div>
                                                    </div>
                                                    <div class="mdc-checkbox__ripple"></div>
                                                </div>
                                                <label for="microwave">Microwave</label>
                                            </div>
                                            <div class="mdc-form-field">
                                                <div class="mdc-checkbox">
                                                    <input type="checkbox" class="mdc-checkbox__native-control" id="refrigerator"/>
                                                    <div class="mdc-checkbox__background">
                                                        <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                                                            <path class="mdc-checkbox__checkmark-path" fill="none" d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                                                        </svg>
                                                        <div class="mdc-checkbox__mixedmark"></div>
                                                    </div>
                                                    <div class="mdc-checkbox__ripple"></div>
                                                </div>
                                                <label for="refrigerator">Refrigerator</label>
                                            </div>
                                            <div class="mdc-form-field">
                                                <div class="mdc-checkbox">
                                                    <input type="checkbox" class="mdc-checkbox__native-control" id="tv-cable"/>
                                                    <div class="mdc-checkbox__background">
                                                        <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                                                            <path class="mdc-checkbox__checkmark-path" fill="none" d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                                                        </svg>
                                                        <div class="mdc-checkbox__mixedmark"></div>
                                                    </div>
                                                    <div class="mdc-checkbox__ripple"></div>
                                                </div>
                                                <label for="tv-cable">TV Cable</label>
                                            </div>
                                            <div class="mdc-form-field">
                                                <div class="mdc-checkbox">
                                                    <input type="checkbox" class="mdc-checkbox__native-control" id="sauna"/>
                                                    <div class="mdc-checkbox__background">
                                                        <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                                                            <path class="mdc-checkbox__checkmark-path" fill="none" d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                                                        </svg>
                                                        <div class="mdc-checkbox__mixedmark"></div>
                                                    </div>
                                                    <div class="mdc-checkbox__ripple"></div>
                                                </div>
                                                <label for="sauna">Sauna</label>
                                            </div>
                                            <div class="mdc-form-field">
                                                <div class="mdc-checkbox">
                                                    <input type="checkbox" class="mdc-checkbox__native-control" id="wi-fi"/>
                                                    <div class="mdc-checkbox__background">
                                                        <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                                                            <path class="mdc-checkbox__checkmark-path" fill="none" d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                                                        </svg>
                                                        <div class="mdc-checkbox__mixedmark"></div>
                                                    </div>
                                                    <div class="mdc-checkbox__ripple"></div>
                                                </div>
                                                <label for="wi-fi">WiFi</label>
                                            </div>
                                            <div class="mdc-form-field">
                                                <div class="mdc-checkbox">
                                                    <input type="checkbox" class="mdc-checkbox__native-control" id="fireplace"/>
                                                    <div class="mdc-checkbox__background">
                                                        <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                                                            <path class="mdc-checkbox__checkmark-path" fill="none" d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                                                        </svg>
                                                        <div class="mdc-checkbox__mixedmark"></div>
                                                    </div>
                                                    <div class="mdc-checkbox__ripple"></div>
                                                </div>
                                                <label for="fireplace">Fireplace</label>
                                            </div> 
                                            <div class="mdc-form-field">
                                                <div class="mdc-checkbox">
                                                    <input type="checkbox" class="mdc-checkbox__native-control" id="gym"/>
                                                    <div class="mdc-checkbox__background">
                                                        <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                                                            <path class="mdc-checkbox__checkmark-path" fill="none" d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                                                        </svg>
                                                        <div class="mdc-checkbox__mixedmark"></div>
                                                    </div>
                                                    <div class="mdc-checkbox__ripple"></div>
                                                </div>
                                                <label for="gym">Gym</label>
                                            </div>
                                        </div> 
                                    </div> 
                                </div>   
                                <div class="row around-xs middle-xs p-2 mb-3"> 
                                    <button class="mdc-button mdc-button--raised bg-warn" type="button" id="clear-filter">
                                        <span class="mdc-button__ripple"></span>
                                        <span class="mdc-button__label">Clear</span> 
                                    </button>
                                    <button class="mdc-button mdc-button--raised" type="submit">
                                        <span class="mdc-button__ripple"></span>
                                        <i class="material-icons mdc-button__icon">search</i>
                                        <span class="mdc-button__label">Search</span> 
                                    </button>  
                                </div>
                            </form>  
                        </div>-->
                    </aside>
                    <div class="mdc-drawer-scrim page-sidenav-scrim"></div>  
                    <div class="page-sidenav-content"> 
                        <div class="properties-wrapper row mt-0">
                            <div class="row px-2 w-100">  
                                <div class="row mdc-card between-xs middle-xs w-100 p-2 filter-row mdc-elevation--z1 text-muted"> 
                                   
                                    <div class="mdc-menu-surface--anchor"> 
                                        <button class="mdc-button mdc-ripple-surface text-muted mutable"> 
                                            <span class="mdc-button__ripple"></span>
                                            <span class="mdc-button__label"><span class="mutable">Change Property View</span></span>
                                        </button> 
                                        <div class="mdc-menu mdc-menu-surface">
                                           
                                        </div> 
                                    </div>
                                    <div class="row middle-xs d-none d-sm-flex d-md-flex d-lg-flex d-xl-flex">
                                        
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
                                                <h1 class="title"><a href="<?php echo base_url(); ?>index.php/user/PropertyController/index1/<?php echo $row->propertyid; ?>"><?php echo $row->title;?></a></h1>
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