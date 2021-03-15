
<!doctype html>
<html lang="en">


<!-- Mirrored from demo.dashboardpack.com/architectui-html-pro/forms-layouts.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Oct 2019 09:09:52 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>My Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no"
    />
    <meta name="description" content="Build whatever layout you need with our Architect framework.">

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">

<link href="<?php echo base_url('public') ?>/main.cba69814a806ecc7945a.css" rel="stylesheet"></head>
<body>
<div class="app-container app-theme-white body-tabs-shadow fixed-header fixed-sidebar">
		 <?php $this->load->view('agent/include/header'); ?>
	   <div class="app-main">
				
			<div class="app-main__outer">
                <div class="app-main__inner">
                    <div class="app-page-title">
                        <div class="page-title-wrapper">
                            <div class="page-title-heading">
                                <div class="page-title-icon">
                                    <i class="pe-7s-news-paper">
                                    </i>
                                </div>
                                <div>Update Profile
                                    <div class="page-title-subheading">Here You Can Update Profile .
                                    </div>
                                </div>
                            </div>
                            </div>
                    </div>            
                    <div class="tab-content">
                        <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                            <div class="mb-12 card text-white bg-dark">
                                <div class="card-body"><h5 class="card-title"></h5>
								<div class="card-shadow-danger border mb-3 card card-body border-danger"><h5 class="card-title">
								<?php
								if($this->session->flashdata("msg"))
								{?>
								<div class="alert alert-success fade show" role="alert"><h5>Success!</h5>
                                    <p class="mb-0"><?php echo $this->session->flashdata("msg"); ?></p></div>
							<?php	}
								?>
								<?php
								foreach($Profiledata as $item)
								{
								?>
									<form id="form1" class="" enctype="multipart/form-data" action="<?php echo base_url(); ?>index.php/agent/MyProfileController/updatedata/<?php echo $item->agentid; ?>" method="post">
                                       
                                        <div class="position-relative row form-group"><label for="exampleTitle" class="col-sm-2 col-form-label">Name</label>
                                            <div class="col-sm-10"><input value="<?php echo $item->agentname; ?>" name="txtname" id="txtname" placeholder="Enter name" type="text" class="form-control"></div>
                                        </div>
										 <div class="position-relative row form-group"><label for="exampleTitle" class="col-sm-2 col-form-label">Contact</label>
                                            <div class="col-sm-10"><input value="<?php echo $item->contact; ?>" name="txtcontact" id="txtcontact" placeholder="Enter contact" type="text" class="form-control"></div>
                                        </div>
										 <div class="position-relative row form-group"><label for="exampleTitle" class="col-sm-2 col-form-label">Email</label>
                                            <div class="col-sm-10"><input value="<?php echo $item->email; ?>" name="txtemail" id="txtemail" placeholder="Enter email" type="email" class="form-control"></div>
                                        </div>
										<div class="position-relative row form-group"><label for="exampleImage" class="col-sm-2 col-form-label">Profile Photo </label>
                                            <div class="col-sm-10"><input value="<?php echo $item->profilephoto; ?>" name="txtimage" id="txtimage" accept="image/*" placeholder="Select Image" accept="image/*" type="file" class="form-control"></div>
											 <td><img src="<?php echo base_url(); ?>uploads/agentprofile/<?php echo $item->profilephoto;?>" width="100" height="100"/></td>
                                        </div>
					
										 <div class="position-relative row form-group"><label for="exampleTitle" class="col-sm-2 col-form-label">AdhaarNumber</label>
                                            <div class="col-sm-10"><input value="<?php echo $item->adhaarnumber; ?>" name="txtadhaarnumber" id="txtadhaarnumber" placeholder="Enter adhaarnumber" type="text" class="form-control"></div>
                                        </div>
										<div class="position-relative row form-group"><label for="exampleDescription" class="col-sm-2 col-form-label">Address</label>
                                           <div class="col-sm-10"><textarea  name="txtaddress" id="txtaddress" placeholder="Enter address" type="text" class="form-control"><?php echo $item->agentaddress; ?></textarea></div>
                                        </div>
                                          <div class="position-relative row form-group"><label for="exampleTitle" class="col-sm-2 col-form-label">Pincode</label>
                                            <div class="col-sm-10"><input value="<?php echo $item->pincode; ?>" name="txtpincode" id="txtpincode" placeholder="Enter pincode" type="text" class="form-control"></div>
                                        </div>										
										
										   <div class="position-relative row form-check">
                                            <div class=" offset-sm-8">
                                               <button type="submit" name="btnsubmit" id="btnsubmit" class="btn-wide mb-2 mr-2 btn btn-warning btn-lg">Update</button>
											    <button type="button" onclick="window.location='<?php echo base_url(); ?>index.php/agent/DashboardController/index';" name="btnsubmit" id="btnsubmit" class="btn-wide mb-2 mr-2 btn btn-danger btn-lg">cancel</button>
                                            </div>
                                        </div>
									</form>
									 <?php } ?>
								</div>
									
									
								
                                    
                                </div>
                            </div>
                            
                        </div>
                        
                    </div>
                </div>
               
					</div>
    </div>
</div>
	 <?php $this->load->view('agent/include/rightslidebar'); ?>
<div class="app-drawer-overlay d-none animated fadeIn"></div><script type="text/javascript" src="<?php echo base_url('public') ?>/assets/scripts/main.cba69814a806ecc7945a.js"></script></body>
<script src="<?php echo base_url('public') ?>/js/jquery-3.4.1.min.js"></script>
<script src="<?php echo base_url('public') ?>/js/jquery.validate.min.js"></script>
<script src="<?php echo base_url('public') ?>/js/additional-methods.min.js"></script>

<script>
$(document).ready(function(){
	
	 $.validator.addMethod("alpha", function(value, element) {
    return this.optional(element) || value == value.match(/^[a-zA-Z\s]+$/);
 });
	$('#form1').validate({
		rules:
		{
			txtname:
			{
				alpha:true,
				required:true
			},
			txtemail:
			{
				required:true
			},
			txtcontact:
			{
				required:true
			}
			
		},
		messages:
		{
			txtname:
			{
				alpha:"Required Only Alphabate",
				required:"Please Enter name"
			},
			txtemail:
			{
				required:"Please Enter email"
			},
			txtcontact:
			{
				required:"Please enter Contact"
			}
		}
		
	});
	
});
</script>

<!-- Mirrored from demo.dashboardpack.com/architectui-html-pro/forms-layouts.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Oct 2019 09:09:52 GMT -->
</html>

