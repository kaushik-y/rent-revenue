<?php
$data["page"]="user";
?>
<!doctype html>
<html lang="en">


<!-- Mirrored from demo.dashboardpack.com/architectui-html-pro/widgets-profile-boxes.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Oct 2019 09:09:51 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Users and Profiles.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no"
    />
    <meta name="description" content="These boxes are usually for dashboard elements centered around users and profiles.">

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">
<link href="<?php echo base_url('public') ?>/main.cba69814a806ecc7945a.css" rel="stylesheet"></head>
<body>
<div class="app-container app-theme-white body-tabs-shadow fixed-header fixed-sidebar">
		<?php $this->load->view('console/include/header');	?>
	<div class="app-main">
              <?php $this->load->view('console/include/leftsidebar',$data); ?>
		<div class="app-main__outer">
            <div class="app-main__inner">
                <div class="app-page-title">
                    <div class="page-title-wrapper">
                        <div class="page-title-heading">
							<div class="page-title-icon">
								<i class="metismenu-icon pe-7s-user"> </i>
                            </div>
                            <div >User And Profile
								<div class="page-title-subheading">Here You Can Mannage Your User.</div>
                            </div>
                        </div>
                    </div>
                </div>     
<?php foreach($userdata as $row) { ?>				
				<div class="main-card mb-2">
                  <div class="row">
				   <div class="col-md-2 col-lg-2 col-xl-2"></div>
                       <div class="col-md-8 col-lg-8 col-xl-8">
                            <div class="card-shadow-primary card-border mb-6 card">
                                <div class="dropdown-menu-header">
                                    <div class="dropdown-menu-header-inner bg-primary">
									
                                       <div class="menu-header-image" style="background-image: url('<?php echo base_url('public') ?>/assets/images/dropdown-header/city3.jpg');"></div>
                                        <div class="menu-header-content">
                                            <div class="avatar-icon-wrapper avatar-icon-lg">
                                                <div class="avatar-icon rounded btn-hover-shine"><img
                                                        src="<?php echo base_url('public'); ?>/assets/images/avatars/rent.jpg"
                                                        alt="rent"></div>
                                            </div>
                                            <div><h5 class="menu-header-title"><?php echo $row->name; ?></h5></div>
                                        </div>
                                    </div>
                                </div>
                              
                                    <div class="scrollbar-container">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">
                                                <div class="widget-content p-0">
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left center-elem mr-2"><i class="pe-7s-angle-right text-muted fsize-2"></i></div>
                                                        <div class="widget-content-left">
                                                            <div class="widget-heading"><h6><b>Email Address :</b></h6></div>
															<h6><?php echo $row->email; ?></h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="widget-content p-0">
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left center-elem mr-2"><i class="pe-7s-angle-right text-muted fsize-2"></i></div>
                                                        <div class="widget-content-left">
                                                             <div class="widget-heading"><h6><b>Contact :</b></h6></div>
															<h6><?php echo $row->contact; ?></h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="widget-content p-0">
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left center-elem mr-2"><i class="pe-7s-angle-right text-muted fsize-2"></i></div>
                                                        <div class="widget-content-left">
															<div class="widget-heading"><h6><b>Password :</b></h6></div>
															<h6><?php echo $row->password; ?></h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="widget-content p-0">
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left center-elem mr-2"><i class="pe-7s-angle-right text-muted fsize-2"></i></div>
                                                        <div class="widget-content-left">
                                                             <div class="widget-heading"><h6><b>Is Verify :</b></h6></div>
															<h6><?php echo $row->isverify; ?></h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="widget-content p-0">
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left center-elem mr-2"><i class="pe-7s-angle-right text-muted fsize-2"></i></div>
                                                        <div class="widget-content-left">
                                                            <div class="widget-heading"><h6><b>IS Blcok :</b></h6></div>
															<h6><?php echo $row->isblock; ?></h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="widget-content p-0">
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left center-elem mr-2"><i class="pe-7s-angle-right text-muted fsize-2"></i></div>
                                                        <div class="widget-content-left">
                                                            <div class="widget-heading"><h6><b>Profile Photo :</b></h6></div>
															<h6><?php echo $row->userphoto; ?></h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
											<li class="list-group-item">
                                                <div class="widget-content p-0">
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left center-elem mr-2"><i class="pe-7s-angle-right text-muted fsize-2"></i></div>
                                                        <div class="widget-content-left">
															<div class="widget-heading"><h6><b>Gender :</b></h6></div>
															<h6><?php echo $row->gender; ?></h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
											<li class="list-group-item">
                                                <div class="widget-content p-0">
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left center-elem mr-2"><i class="pe-7s-angle-right text-muted fsize-2"></i></div>
                                                        <div class="widget-content-left">
															<div class="widget-heading"><h6><b>Address :</b></h6></div>
															<h6><?php echo $row->address; ?></h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
											<li class="list-group-item">
                                                <div class="widget-content p-0">
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left center-elem mr-2"><i class="pe-7s-angle-right text-muted fsize-2"></i></div>
                                                        <div class="widget-content-left">
															<div class="widget-heading"><h6><b>City Name :</b></h6></div>
															<h6><?php echo $row->cityname; ?></h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
											<li class="list-group-item">
                                                <div class="widget-content p-0">
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left center-elem mr-2"><i class="pe-7s-angle-right text-muted fsize-2"></i></div>
                                                        <div class="widget-content-left">
															<div class="widget-heading"><h6><b>Registration Date :</b></h6></div>
															<h6><?php echo $row->registrationDate; ?></h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
											<li class="list-group-item">
                                                <div class="widget-content p-0">
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left center-elem mr-2"><i class="pe-7s-angle-right text-muted fsize-2"></i></div>
                                                        <div class="widget-content-left">
															<div class="widget-heading"><h6><b>Adhaar Photo :</b></h6></div>
															<h6><?php echo $row->adhaarphoto; ?></h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
											<li class="list-group-item">
                                                <div class="widget-content p-0">
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left center-elem mr-2"><i class="pe-7s-angle-right text-muted fsize-2"></i></div>
                                                        <div class="widget-content-left">
															<div class="widget-heading"><h6><b>Adhaar Number :</b></h6></div>
															<h6><?php echo $row->adhaarnumber; ?></h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                
                              
                            </div>
                        </div>
                    </div>
                </div>
<?php } ?>
            </div>
		</div>
	</div>
</div>
<div class="app-drawer-overlay d-none animated fadeIn"></div><script type="text/javascript" src="<?php echo base_url('public') ?>/assets/scripts/main.cba69814a806ecc7945a.js"></script></body>
<?php $this->load->view('console/include/rightslidebar');?>
<!-- Mirrored from demo.dashboardpack.com/architectui-html-pro/widgets-profile-boxes.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Oct 2019 09:09:52 GMT -->
</html>
