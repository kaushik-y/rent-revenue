<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.housekey-html.themeseason.com/my-properties.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Mar 2020 07:49:25 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>my booking</title> 
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
    <div class="mdc-drawer-scrim sidenav-scrim"></div>  
	<?php $this->load->view('user/include/header'); ?>  
	
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
						
                    <div class="mdc-card p-3">
                            <div class="mdc-text-field mdc-text-field--outlined custom-field w-100">
                                <input class="mdc-text-field__input" placeholder="Type for filter properties">
                                <div class="mdc-notched-outline">
                                    <div class="mdc-notched-outline__leading"></div>
                                    <div class="mdc-notched-outline__notch">
                                        <label class="mdc-floating-label">Filter properties</label>
                                    </div>
                                    <div class="mdc-notched-outline__trailing"></div>
                                </div>
                            </div>  
                        <div class="mdc-data-table border-0 w-100 mt-3">
                            <table class="mdc-data-table__table" aria-label="Dessert calories">
                                    <thead>
                                        <tr class="mdc-data-table__header-row">
											<th class="mdc-data-table__header-cell">ID</th>
                                            <th class="mdc-data-table__header-cell">Property Name</th>
											<th class="mdc-data-table__header-cell">Address</th>
                                            <th class="mdc-data-table__header-cell">Registration Type</th>
                                            <th class="mdc-data-table__header-cell">Pin Code</th>
											<th class="mdc-data-table__header-cell">Action</th>
                                        </tr>
                                    </thead>
                                   
							<tbody class="mdc-data-table__content">
									<?php
									$count=1;
									foreach($booking as $item)
									{
									?>
                                <tr class="mdc-data-table__row">
									<td class="mdc-data-table__cell"><?php echo $count; $count++;?></td>
									<td class="mdc-data-table__cell"><?php echo $item->title;?></td>
									<td class="mdc-data-table__cell"><?php echo $item->address;?></td>
									<td class="mdc-data-table__cell"><?php echo $item->registrationtype;?></td>
									<td class="mdc-data-table__cell"><?php echo $item->pincode;?></td>
                                    <td>
									<?php
									$res=$this->db->query("select * from tbl_rantingreview where bookingid='".$item->bookingid."'");
									if($res->num_rows($res)<=0)
									{
									?>
									<li class="nav-item">
                                                <a href="<?php echo base_url('/index.php/user/RatingController/index/'.$item->propertyid."/".$item->bookingid); ?>"class="nav-link">
                                                    <i class="nav-link-icon lnr-inbox"></i>
                                                   RatingReview
								  
                                                </a>
                                            </li>
									<?php } ?>
                                </tr>
									<?php } ?>
                            </tbody>
							<tfoot>
								<tr class="mdc-data-table__header-row">
									<th class="mdc-data-table__header-cell">ID</th>
									<th class="mdc-data-table__header-cell">Property Name</th>
									<th class="mdc-data-table__header-cell">Address</th>
									<th class="mdc-data-table__header-cell">Registration Type</th>
									<th class="mdc-data-table__header-cell">Pin Code</th>
									<th class="mdc-data-table__header-cell">Action</th>
								</tr>
							</tfoot>
							
							</table>
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

<!-- Mirrored from www.housekey-html.themeseason.com/my-properties.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Mar 2020 07:49:29 GMT -->
</html>