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
                                                        <img src="<?php echo base_url(); ?>uploads/property/<?php echo $img->mediaurl; ?>" alt="slide image" data-src="<?php echo base_url(); ?>uploads/property/<?php echo $img->mediaurl; ?>" height="900" width="1000" class="slide-item swiper-lazy">
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
                                    <span> <?php echo $row->squarefit;?> ft²</span>
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
                    <aside class="mdc-drawer mdc-drawer--modal page-sidenav">
                        <a href="#" class="h-0"></a>
                        <div class="mdc-card p-3">
						<?php 
						if($row->userid!=NULL)
						{
							$user=$this->db->query("select * from tbl_users where userid='".$row->userid."'");
								foreach($user->result() as $u)
								{
			?>  
							 
                            <div class="widget">  
                                <div class="mdc-card o-hidden">
                                    <img src="<?php echo base_url(); ?>uploads/userprofile/<?php echo $u->userphoto;?>"  alt="agent-image" class="mw-200 d-block"> 
                                    
                                    <div class="p-3">
                                        <h2 class="fw-600"><?php echo $u->name;?></h2> 
                                        
                                        <p class="mt-3 text-muted fw-500"><?php echo $u->address;?></p>                                    
                                        <p class="row middle-xs"><i class="material-icons primary-color" title="Organization">business</i><span class="mx-2 text-muted fw-500">RentRevenue</span></p>
                                        <p class="row middle-xs"><i class="material-icons primary-color">email</i><span class="mx-2 text-muted fw-500"><?php echo $u->email;?></span></p>
                                        <p class="row middle-xs"><i class="material-icons primary-color">call</i><span class="mx-2 text-muted fw-500"><?php echo $u->contact;?></span></p>
                                        <div class="row pb-3 p-relative">
                                            <div class="divider"></div>
                                        </div> 
                                       
                                    </div>  
                                </div>  
                            </div>  
							<?php
								}
			
						} else {
							
								$agent=$this->db->query("select * from tbl_agent where agentid='".$row->agentid."'");
								foreach($agent->result() as $a)
								{
			?>  
                            <div class="widget">  
                                <div class="mdc-card o-hidden">
                                    <img src="<?php echo base_url(); ?>uploads/agentprofile/<?php echo $a->profilephoto;?>" height="350" width="400" alt="agent-image" class="mw-100 d-block"> 
                                    
                                    <div class="p-3">
                                        <h2 class="fw-600"><?php echo $a->agentname;?></h2> 
                                         
                                        <p class="mt-3 text-muted fw-500"><?php echo $a->aboutagent;?></p>                                    
                                        <p class="row middle-xs"><i class="material-icons primary-color" title="Organization">business</i><span class="mx-2 text-muted fw-500">RentRevenue</span></p>
                                        <p class="row middle-xs"><i class="material-icons primary-color">email</i><span class="mx-2 text-muted fw-500"><?php echo $a->email;?></span></p>
                                        <p class="row middle-xs"><i class="material-icons primary-color">call</i><span class="mx-2 text-muted fw-500"><?php echo $a->contact;?></span></p>
                                        <div class="row pb-3 p-relative">
                                            <div class="divider"></div>
                                        </div> 
                                        
										
                                    </div>  
                                </div>  
                            </div>  
							<?php
								}
				
						}
					
			 					?>
                            <div class="widget">
                                <div class="widget-title bg-primary">Booking Property</div>
								<?php
								if($this->session->flashdata("msg"))
								{?>
								<div class="alert alert-danger fade show" role="alert"><h5>Massage!</h5>
                                    <p class="mb-0"><?php echo $this->session->flashdata("msg"); ?></p></div>
								<?php	}
								?>
								<?php
				if(!$this->session->userdata("isloginuser"))
				{
				?>
				     <form enctype="multipart/form-data" method="post" action="<?php echo base_url(); ?>index.php/user/BookingController/booking/<?php echo $id; ?>"> 
                                    <p>Interested in renting this property? Then Fill up a Booking Form.</p>
									
									 <div class="col-xs-12 col-sm-12 p-0 my-2">  
                                         <select onchange="getdropdown(this.value);" class="mdc-select__anchor" name="txttype" id="txttype" style="padding:5px; border-radius:4px;color:#858484">
										     <option>select rentype</option>
											<option value="dayrent">Day Rent</option>
											<option value="Fullrent">Full Rent</option>
											<option value="sell">Sell</option>
										 </select>
									</div>	 
									<input type="hidden" name="txtdayrent" value="<?php echo $row->dayrent; ?>"/>
									<input type="hidden" name="txtfullrent" value="<?php echo $row->fullrent; ?>"/>
									<input type="hidden" name="txtsalerent" value="<?php echo $row->sell; ?>"/>
                                    <p style="color:red;" id="msg"></p>
									
									<div class="mdc-text-field mdc-text-field--outlined w-100 custom-field my-2" id="txtstartingdate">
                                        <input class="mdc-text-field__input" min="<?php echo date('Y-m-d'); ?>" name="txtstartingdate"  type="date">
                                        <div class="mdc-notched-outline">
                                            <div class="mdc-notched-outline__leading"></div>
                                            <div class="mdc-notched-outline__notch">
                                                <label class="mdc-floating-label">Starting Date</label>
                                            </div>
                                            <div class="mdc-notched-outline__trailing"></div>
                                        </div>
                                    </div> 
                                    <div class="mdc-text-field mdc-text-field--outlined w-100 custom-field my-2" id="txtendingdate" >
                                        <input class="mdc-text-field__input" min="<?php echo date('Y-m-d'); ?>" name="txtendingdate" type="date">
                                        <div class="mdc-notched-outline">
                                            <div class="mdc-notched-outline__leading"></div>
                                            <div class="mdc-notched-outline__notch">
                                                <label class="mdc-floating-label">Ending Date</label>
                                            </div>
                                            <div class="mdc-notched-outline__trailing"></div>
                                        </div>
                                    </div> 
                                    
									<div class="mdc-text-field mdc-text-field--outlined w-100 custom-field my-2"  id="txtnoofperson">
                                        <input class="mdc-text-field__input" name="txtnoofperson" type="number">
										<div class="mdc-notched-outline">
                                            <div class="mdc-notched-outline__leading"></div>
                                            <div class="mdc-notched-outline__notch">
                                                <label class="mdc-floating-label">Number Of Person</label>
                                            </div>
                                            <div class="mdc-notched-outline__trailing"></div>
                                        </div>
                                    </div>
									<div class="mdc-text-field mdc-text-field--outlined w-100 custom-field my-2"  id="txtremark">
                                        <input class="mdc-text-field__input" name="txtremark" type="text">
										<div class="mdc-notched-outline">
                                            <div class="mdc-notched-outline__leading"></div>
                                            <div class="mdc-notched-outline__notch">
                                                <label class="mdc-floating-label">Remark</label>
                                            </div>
                                            <div class="mdc-notched-outline__trailing"></div>
                                        </div>
                                    </div>
									<div class="mdc-text-field mdc-text-field--outlined w-100 custom-field my-2"  id="txttext">
                                        <input class="mdc-text-field__input" name="txttext" type="text">
										<div class="mdc-notched-outline">
                                            <div class="mdc-notched-outline__leading"></div>
                                            <div class="mdc-notched-outline__notch">
                                                <label class="mdc-floating-label">Inquiry Text</label>
                                            </div>
                                            <div class="mdc-notched-outline__trailing"></div>
                                        </div>
                                    </div>
									
                                    <div class="row around-xs middle-xs p-2 mb-3" > 
                                        <button class="mdc-button mdc-button--raised bg-accent" type="submit" name="btnsubmit" >
                                            <span class="mdc-button__ripple"></span>
                                            <span class="mdc-button__label">Submit</span> 
                                        </button> 
                                    </div> 
                                </form> 
				<?php }
				else if($this->session->userdata("isloginuser") && $row->userid!=$this->session->userdata("Userdata")->userid)
				{
				?>
                                <form enctype="multipart/form-data" method="post" action="<?php echo base_url(); ?>index.php/user/BookingController/booking/<?php echo $id; ?>"> 
                                    <p>Interested in renting this property? Then Fill up a Booking Form.</p>
									
									 <div class="col-xs-12 col-sm-12 p-0 my-2">  
                                         <select onchange="getdropdown(this.value);" class="mdc-select__anchor" name="txttype" id="txttype" style="padding:5px; border-radius:4px;color:#858484">
										     <option>select rentype</option>
											<option value="dayrent">Day Rent</option>
											<option value="Fullrent">Full Rent</option>
											<option value="sell">Sell</option>
										 </select>
									</div>	 
									<input type="hidden" name="txtdayrent" value="<?php echo $row->dayrent; ?>"/>
									<input type="hidden" name="txtfullrent" value="<?php echo $row->fullrent; ?>"/>
									<input type="hidden" name="txtsalerent" value="<?php echo $row->sell; ?>"/>
                                    <p style="color:red;" id="msg"></p>
									
									<div class="mdc-text-field mdc-text-field--outlined w-100 custom-field my-2" id="txtstartingdate">
                                        <input class="mdc-text-field__input" min="<?php echo date('Y-m-d'); ?>" name="txtstartingdate"  type="date">
                                        <div class="mdc-notched-outline">
                                            <div class="mdc-notched-outline__leading"></div>
                                            <div class="mdc-notched-outline__notch">
                                                <label class="mdc-floating-label">Starting Date</label>
                                            </div>
                                            <div class="mdc-notched-outline__trailing"></div>
                                        </div>
                                    </div> 
                                    <div class="mdc-text-field mdc-text-field--outlined w-100 custom-field my-2" id="txtendingdate" >
                                        <input class="mdc-text-field__input" min="<?php echo date('Y-m-d'); ?>" name="txtendingdate" type="date">
                                        <div class="mdc-notched-outline">
                                            <div class="mdc-notched-outline__leading"></div>
                                            <div class="mdc-notched-outline__notch">
                                                <label class="mdc-floating-label">Ending Date</label>
                                            </div>
                                            <div class="mdc-notched-outline__trailing"></div>
                                        </div>
                                    </div> 
                                    
									<div class="mdc-text-field mdc-text-field--outlined w-100 custom-field my-2"  id="txtnoofperson">
                                        <input class="mdc-text-field__input" name="txtnoofperson" type="number">
										<div class="mdc-notched-outline">
                                            <div class="mdc-notched-outline__leading"></div>
                                            <div class="mdc-notched-outline__notch">
                                                <label class="mdc-floating-label">Number Of Person</label>
                                            </div>
                                            <div class="mdc-notched-outline__trailing"></div>
                                        </div>
                                    </div>
									<div class="mdc-text-field mdc-text-field--outlined w-100 custom-field my-2"  id="txtremark">
                                        <input class="mdc-text-field__input" name="txtremark" type="text">
										<div class="mdc-notched-outline">
                                            <div class="mdc-notched-outline__leading"></div>
                                            <div class="mdc-notched-outline__notch">
                                                <label class="mdc-floating-label">Remark</label>
                                            </div>
                                            <div class="mdc-notched-outline__trailing"></div>
                                        </div>
                                    </div>
									<div class="mdc-text-field mdc-text-field--outlined w-100 custom-field my-2"  id="txttext">
                                        <input class="mdc-text-field__input" name="txttext" type="text">
										<div class="mdc-notched-outline">
                                            <div class="mdc-notched-outline__leading"></div>
                                            <div class="mdc-notched-outline__notch">
                                                <label class="mdc-floating-label">Inquiry Text</label>
                                            </div>
                                            <div class="mdc-notched-outline__trailing"></div>
                                        </div>
                                    </div>
									
                                    <div class="row around-xs middle-xs p-2 mb-3" > 
                                        <button class="mdc-button mdc-button--raised bg-accent" type="submit" name="btnsubmit" >
                                            <span class="mdc-button__ripple"></span>
                                            <span class="mdc-button__label">Submit</span> 
                                        </button> 
                                    </div> 
                                </form> 

				<?php } else { echo "its your property";} ?>								
                            </div>
                            
                           
                        </div>
                    </aside>
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
			$('#txtremark').css("visibility","hidden");
			$('#txttext').css("visibility","visible");
			$('#txtstatus').css("visibility","visible");
			$('#msg').html("");
		}
		else if(type=="Fullrent")
		{
			$('#msg').html("Its for 11 month");
			$('#txtstartingdate').css("visibility","hidden");
			$('#txtendingdate').css("visibility","hidden");
			$('#txttext').css("visibility","hidden");
			$('#txtstatus').css("visibility","hidden");
		}
		else
		{
			$('#msg').html("");
			$('#txtstartingdate').css("visibility","visible");
			$('#txtendingdate').css("visibility","visible");
			$('#txttext').css("visibility","hidden");
			$('#txtstatus').css("visibility","hidden");
		}
	}
	</script>
</body>

<!-- Mirrored from www.housekey-html.themeseason.com/property.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Mar 2020 07:49:15 GMT -->
</html>