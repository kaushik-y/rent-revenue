<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.housekey-html.themeseason.com/header-image.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Mar 2020 07:48:39 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>homepage</title> 
    <link rel="icon" type="image/x-icon" href="<?php echo base_url(); ?>client/assets/favicon.ico">
    <link rel="stylesheet" href="<?php echo base_url(); ?>client/icon/css.css">  
    <link rel="stylesheet" href="<?php echo base_url(); ?>client/icon/icon.css">  
    <link rel="stylesheet" href="<?php echo base_url(); ?>client/css/libs/swiper.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>client/css/libs/dropzone.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>client/css/libs/material-components-web.min.css">  
    <link rel="stylesheet" href="<?php echo base_url(); ?>client/style.css"> 
    <link rel="stylesheet" href="<?php echo base_url(); ?>client/css/skins/blue.css">  
    <link rel="stylesheet" href="<?php echo base_url(); ?>client/css/responsive.css">  
	
	
	  <style>
       /* Set the size of the div element that contains the map */
      #map1 {
        height: 520px;  /* The height is 400 pixels */
        width: 100%;  /* The width is the width of the web page */
       }
       .heading
       {
        color:red;
       }
    </style>
		   <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyClJ7bohWjfhtUsd71UVKXfsu48-Wq5O5s&callback=initMap">
    </script>
	<script>
function initMap() {

  var locations = [
  <?php
  $result=$this->db->query("select *,(select mediaurl from  tbl_gallary where propertyid=tbl_property.propertyid LIMIT 1)as img from tbl_property where isapprove='Y'");
  foreach($result->result() as $row)
  {
  ?>
		["<?php echo $row->title; ?>","<?php echo $row->lattitude; ?>","<?php echo $row->longtitude; ?>","<?php echo $row->dayrent; ?>","<?php echo $row->address; ?>","<?php echo $row->fullrent; ?>"],
  <?php } ?>   
   ];


 var map = new google.maps.Map(document.getElementById('map1'), {
      zoom: 10,
      center: new google.maps.LatLng(21.1702, 72.8311),
      mapTypeId: google.maps.MapTypeId.TERRAIN
    });

  var infowindow = new google.maps.InfoWindow();
  var marker, i;

    for (i = 0; i < locations.length; i++) {  
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        map: map,
      });

      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          content='<div><h1 class="title">'+locations[i][0]+'</h1><p>Price : '+locations[i][3]+'</p><p>'+locations[i][4]+'</p></div>';
          infowindow.setContent(content);
          infowindow.open(map, marker);
        }
      })(marker, i));

    }
}
</script>
	
	<!--<img src="<?php echo base_url(); ?>uploads/property/'+locations[i][6]+'" style="height:100px; width:200px;" />-->
	

	
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
    <main class="content-offset-to-top"> 
        <div class="header-image-wrapper">
            <div class="bg bg-anime"></div>
            <div class="mask"></div>            
            <div class="header-image-content home-page offset-bottom">
                <h1 class="title">Rent Revenue</h1>
              
            </div>
        </div>  
        <!--<div class="px-3">  
            <div class="theme-container"> 
                <div class="mdc-card main-content-header">  
                   <form action="javascript:void(0);" id="filters" class="search-wrapper"> 
                        <div class="row">  
                            <div class="col-xs-12 col-sm-6 col-md-4 p-2">
                                <div class="mdc-select mdc-select--outlined">
                                    <div class="mdc-select__anchor">
                                        <i class="mdc-select__dropdown-icon"></i>
                                        <div class="mdc-select__selected-text"></div>
                                        <div class="mdc-notched-outline">
                                            <div class="mdc-notched-outline__leading"></div>
                                            <div class="mdc-notched-outline__notch">
                                                <label class="mdc-floating-label">Property Category</label>
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
                            <div class="col-xs-12 col-sm-6 col-md-4 p-2">  
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
                            <div class="col-xs-6 col-md-2 p-2">
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
                            <div class="col-xs-6 col-md-2 p-2 to">
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
                        <div class="row d-none" id="more-filters"> 
                            <div class="col-xs-12 col-sm-6 col-md-4 p-2">
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
                            <div class="col-xs-12 col-sm-6 col-md-4 p-2">  
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
                            <div class="col-xs-12 col-sm-6 col-md-4 p-2">
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
                            <div class="col-xs-12 col-sm-6 col-md-4 p-2">
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
                            <div class="col-xs-6 col-md-2 p-2"> 
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
                            <div class="col-xs-6 col-md-2 p-2 to">
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
                            <div class="col-xs-6 col-md-2 p-2"> 
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
                            <div class="col-xs-6 col-md-2 p-2 to">
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
                            <div class="col-xs-6 col-md-2 p-2"> 
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
                            <div class="col-xs-6 col-md-2 p-2 to">
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
                            <div class="col-xs-6 col-md-2 p-2">
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
                            <div class="col-xs-6 col-md-2 p-2 to">
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
                            <div class="col-xs-6 col-md-2 p-2">
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
                            <div class="col-xs-6 col-md-2 p-2 to">
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
                            <div class="col-xs-12 mb-2 p-0"> 
                                <p class="uppercase m-2 fw-500">Features</p>  
                                <div class="features">
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
                        <div class="row center-xs middle-xs p-2"> 
                            <button class="mdc-button mdc-button--raised bg-warn" type="button" id="clear-filter">
                                <span class="mdc-button__ripple"></span>
                                <span class="mdc-button__label">Clear</span> 
                            </button>
                            <button class="mdc-button mdc-button--raised mx-2" type="button" id="show-more-filters">
                                <span class="mdc-button__ripple"></span>
                                <span class="mdc-button__label">Advanced</span> 
                            </button>
                            <button class="mdc-button mdc-button--raised mx-2 d-none" type="button" id="hide-more-filters">
                                <span class="mdc-button__ripple"></span>
                                <span class="mdc-button__label">Hide</span> 
                            </button>
                            <button class="mdc-button mdc-button--raised" type="submit">
                                <span class="mdc-button__ripple"></span>
                                <i class="material-icons mdc-button__icon">search</i>
                                <span class="mdc-button__label">Search</span> 
                            </button>  
                        </div>
                    </form> 
                </div>-->  
				<br>
				
				</br>
							 <div id="map1"></div>
            </div>  
        </div> 
        <div class="section default">
            <div class="px-3">
                <div class="theme-container">
                    <h1 class="section-title">Our Mission</h1>   
                    <div class="mdc-card p-0 row o-hidden"> 
                        <div class="col-xs-12 col-lg-6 col-xl-6 p-3">            
                           <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 p-2">
                                    <i class="material-icons mat-icon-xlg primary-color">monetization_on</i>
                                    <h2 class="capitalize fw-600 mb-2">save money</h2>
                                    <p class="text-muted fw-500">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vitae dolor magnam, facilis voluptas quia excepturi provident cupiditate.</p>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 p-2">
                                    <i class="material-icons mat-icon-xlg primary-color">thumb_up</i>
                                    <h2 class="capitalize fw-600 mb-2">better ideas</h2>
                                    <p class="text-muted fw-500">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vitae dolor magnam, facilis voluptas quia excepturi provident cupiditate.</p>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 p-2">
                                    <i class="material-icons mat-icon-xlg primary-color">group</i>
                                    <h2 class="capitalize fw-600 mb-2">collaboration</h2>
                                    <p class="text-muted fw-500">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vitae dolor magnam, facilis voluptas quia excepturi provident cupiditate.</p>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 p-2">
                                    <i class="material-icons mat-icon-xlg primary-color">search</i>
                                    <h2 class="capitalize fw-600 mb-2">easy to find</h2>
                                    <p class="text-muted fw-500">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vitae dolor magnam, facilis voluptas quia excepturi provident cupiditate.</p>
                                </div>
                           </div>                     
                        </div> 
                        <div class="col-xs-12 col-lg-6 col-xl-6 p-0 d-none d-lg-flex d-xl-flex">                    
                            <img src="<?php echo base_url(); ?>client/assets/images/others/mission.jpg" alt="mission" class="mw-100 d-block">                
                        </div>            
                    </div>
                        
                </div>
            </div>   
        </div> 
        <div class="section mt-3">
            <div class="px-3">
                <div class="theme-container">
                    <h1 class="section-title">Our Services</h1>  
                    <div class="services-wrapper row">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 p-2"> 
                            <div class="mdc-card h-100 w-100 text-center middle-xs p-3">            
                                <i class="material-icons mat-icon-xlg primary-color">location_on</i>
                                <h2 class="capitalize fw-600 my-3">Find places anywhere in the world</h2>
                                <p class="text-muted fw-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vestibulum egestas nunc sed ultricies.</p>           
                            </div> 
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 p-2"> 
                            <div class="mdc-card h-100 w-100 text-center middle-xs p-3">     
                                <i class="material-icons mat-icon-xlg primary-color">supervisor_account</i>
                                <h2 class="capitalize fw-600 my-3">We have agents with experience</h2>
                                <p class="text-muted fw-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vestibulum egestas nunc sed ultricies.</p>             
                            </div> 
                        </div> 
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 p-2">  
                            <div class="mdc-card h-100 w-100 text-center middle-xs p-3">  
                                <i class="material-icons mat-icon-xlg primary-color">home</i>
                                <h2 class="capitalize fw-600 my-3">Buy or rent beautiful properties</h2>
                                <p class="text-muted fw-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vestibulum egestas nunc sed ultricies.</p>             
                            </div> 
                        </div>  
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 p-2"> 
                            <div class="mdc-card h-100 w-100 text-center middle-xs p-3">     
                                <i class="material-icons mat-icon-xlg primary-color">format_list_bulleted</i>
                                <h2 class="capitalize fw-600 my-3">With agent account you can list properties</h2>
                                <p class="text-muted fw-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vestibulum egestas nunc sed ultricies.</p>             
                            </div> 
                        </div>  
                    </div> 
                </div>
            </div>   
        </div>  
        <div class="section testimonials">
            <div class="px-3">
                <div class="theme-container">
                    <h1 class="section-title">Rating Review</h1>  
                    <div class="testimonials-carousel"> 
                        <div class="swiper-container">
                            <div class="swiper-wrapper"> 
							<?php
									foreach($reviewdata as $item)
									{
									?>
                                <div class="swiper-slide"> 
                                    <div class="content text-center">
                                         <!--<img src="<?php echo base_url(); ?>uploads/userprofile/.jpg" alt="adam">-->
                                        <div class="quote open text-left primary-color">“</div>
                                        <p class="text"><?php echo $item->reviewtext;?> </p>
										 <p class="text"><?php echo $item->ranting;?> </p>
										 <p class="text"><?php echo $item->title;?> </p>
										 <p class="text"><?php echo $item->name;?> </p>
                                        
                                    </div>  
                                </div>    
									<?php } ?>
                            </div>  
                            <div class="swiper-pagination"></div> 
                        </div>  
                    </div> 
                </div>
            </div>   
        </div> 
	
		<div class="section mt-3">
            <div class="px-3">
                <div class="theme-container">
                    <h1 class="section-title">Featured properties</h1>  
                    <div class="properties-carousel">   
                        <div class="swiper-container carousel-outer"> 
                            <div class="swiper-wrapper">  	<?php 
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
                                                <h1 class="title"><?php echo $row->title;?></a></h1>
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
        </div>   
		
         
        <div class="section agents">
            <div class="px-3">
                <div class="theme-container">
                    <h1 class="section-title">Meet our agents</h1> 
                    <div class="agents-carousel"> 
                        <div class="swiper-container carousel-outer"> 
                               <div class="swiper-wrapper"> 
							   <?php
					foreach($agent as $row)
					{
					?>      
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 p-3">
                        <div class="mdc-card o-hidden">
                            
                                <img src="<?php echo base_url(); ?>uploads/agentprofile/<?php echo $row->profilephoto;?>" width="350" height="260" class="d-block mw-100">
                          
                            <div class="p-3">
                                 <h2 class="fw-600"><?php echo $row->agentname;?></h2> 
                                
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
        <!--<div class="px-3">
            <div class="theme-container">  
                <div class="get-in-touch bg-primary"> 
                    <img src="<?php echo base_url(); ?>client/assets/images/others/operator.png" alt="operator" class="d-none d-sm-flex d-md-flex d-lg-flex d-xl-flex">        
                    <div class="row between-xs middle-xs content"> 
                        <div class="column p-3">
                            <h2>LOOKING TO SELL YOUR HOME?</h2>
                            <p class="mb-0">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                        </div>
                        <div class="row start-xs middle-xs p-3">
                            <i class="material-icons mat-icon-xlg mx-2">call</i>
                            <div class="column">               
                                <p class="mb-0">CALL US NOW</p>
                                <h2 class="ws-nowrap">(+100) 123 456 7890</h2>
                            </div>
                        </div>
                        <div class="p-3">
                            <a href="javascript:void(0);" class="mdc-button mdc-button--raised mx-3">
                                <span class="mdc-button__ripple"></span>
                                <span class="mdc-button__label">get in touch</span> 
                            </a>  
                        </div>
                    </div>
                </div>
            </div>
        </div>--> 
    </main> 
	<?php $this->load->view('user/include/footer'); ?>
    <div id="favorites-snackbar" class="mdc-snackbar">
        <div class="mdc-snackbar__surface">
            <div class="mdc-snackbar__label">The property has been added to favorites.</div>
            <div class="mdc-snackbar__actions">
                <button type="button" class="mdc-button mdc-snackbar__action">
                <div class="mdc-button__ripple"></div>
                <span class="mdc-button__label">
                    <i class="material-icons warn-color">close</i>
                </span>
                </button>
            </div>
        </div>
    </div> 
    <div id="back-to-top"><i class="material-icons">arrow_upward</i></div>
    <script src="<?php echo base_url(); ?>client/js/libs/jquery.min.js"></script> 
    <script src="<?php echo base_url(); ?>client/js/libs/material-components-web.min.js"></script> 
    <script src="<?php echo base_url(); ?>client/js/libs/swiper.min.js"></script> 
    <script src="<?php echo base_url(); ?>client/js/scripts.js"></script>  
   <script src="<?php echo base_url(); ?>client/js/libs/dropzone.js"></script>  
</body>

<!-- Mirrored from www.housekey-html.themeseason.com/header-image.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Mar 2020 07:48:39 GMT -->
</html>