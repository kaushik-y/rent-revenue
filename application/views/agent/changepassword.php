
<!doctype html>
<html lang="en">


<!-- Mirrored from demo.dashboardpack.com/architectui-html-pro/forms-layouts.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Oct 2019 09:09:52 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Change Password</title>
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
                                    <i class="pe-7s-way">
                                    </i>
                                </div>
                                <div>Change Password
                                    <div class="page-title-subheading">Here,You Can Change password.
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
							               <form action="<?php echo base_url(); ?>index.php/agent/ChangePasswordController/changepass" method="post">                      
										<div class="position-relative row form-group"><label for="exampleStateName" class="col-sm-2 col-form-label"><center>Current Password</center></label>
                                            <div class="col-sm-9"><input name="txtcurrent" id="txtcurrent" placeholder="Enter state password" type="password" class="form-control"></div>
                                        </div>
										<div class="position-relative row form-group"><label for="exampleStateName" class="col-sm-2 col-form-label"><center>New Password</center></label>
                                            <div class="col-sm-9"><input name="txtnew" id="txtnew" placeholder="Enter state password" type="password" class="form-control"></div>
                                        </div>
										<div class="position-relative row form-group"><label for="exampleStateName" class="col-sm-2 col-form-label"><center>Confirm Password</center></label>
                                            <div class="col-sm-9"><input name="txtconfirm" id="txtconfirm" placeholder="Enter state password" type="password" class="form-control"></div>
                                        </div>
                                        
										 <div class="position-relative row form-check">
                                             <div class=" offset-sm-8">
                                               <button  type="submit" name="btnsubmit" id="btnsubmit" class="btn-wide mb-2 mr-2 btn btn-warning btn-lg">Submit
                                                </button>
												<button type="button" onclick="window.location='<?php echo base_url(); ?>index.php/agent/DashboardController/index';" name="btncancel" id="btncancel" class="btn-wide mb-2 mr-2 btn btn-danger btn-lg">Cancel
                                                </button>
											</div>
                                        </div>
                                    </form>
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


<!-- Mirrored from demo.dashboardpack.com/architectui-html-pro/forms-layouts.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Oct 2019 09:09:52 GMT -->
</html>

