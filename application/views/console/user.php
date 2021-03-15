<?php
$data["page"]="user";
?>
<!doctype html>
<html lang="en">


<!-- Mirrored from demo.dashboardpack.com/architectui-html-pro/tables-data-tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Oct 2019 09:09:50 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Admin - User</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no"
    />
    <meta name="description" content="Choose between regular React Bootstrap tables or advanced dynamic ones.">

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
                            <div >User
								<div class="page-title-subheading">Here You Can Mannage Your User.    </div>
                            </div>
                        </div>
                    </div>
                </div>      
				<div class="main-card mb-3 card">
                    <div class="card-body">
                        <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered">
                            <thead>
                                <tr>
									<th>#</th>
									<th>User Picture</th>
									<th>User</th>
									<th>Contact</th>
									<th>Email</th>
									<th>Is Verify</th>
									<th>Is Block</th>
									<th>Actions</th>
                                </tr>
                            </thead>
								<tbody>
									<?php
									$count=1;
										foreach($userdata as $item)
									{
										?>
									<tr>
										<td><?php  echo $count; $count++;?></td>
										<td><img src="<?php echo base_url(); ?>uploads/userprofile/<?php echo $item->userphoto;?>" width="100" height="100"/></td>
										<td><?php  echo $item->name;?></td>
										<td><?php  echo $item->contact;?></td>
										<td><?php  echo $item->email;?></td>
										<td><?php  
										if($item->isverify=="Y")
										{
											?>	
											<button onclick="window.location='<?php echo base_url(); ?>index.php/console/UserController/changestatus1/<?php echo $item->userid; ?>/<?php echo $item->isverify; ?>';" class="mb-2 mr-2 btn-pill btn-hover-shine btn btn-danger"	>YES
												</button>
											<?php
										}
										else
										{?>
											<button onclick="window.location='<?php echo base_url(); ?>index.php/console/UserController/changestatus1/<?php echo $item->userid; ?>/<?php echo $item->isverify; ?>';" class="mb-2 mr-2 btn-pill btn-hover-shine btn btn-success">NO
												</button>
										<?php }
										?></td>
										<td><?php  
										if($item->isblock=="Y")
										{
											?>	
											<button onclick="window.location='<?php echo base_url(); ?>index.php/console/UserController/changestatus/<?php echo $item->userid; ?>/<?php echo $item->isblock; ?>';" class="mb-2 mr-2 btn-pill btn-hover-shine btn btn-danger" >BLOCK
												</button>
											<?php
										}
										else
										{?>
											<button onclick="window.location='<?php echo base_url(); ?>index.php/console/UserController/changestatus/<?php echo $item->userid; ?>/<?php echo $item->isblock; ?>';" class="mb-2 mr-2 btn-pill btn-hover-shine btn btn-success""text-center">UNBLOCK
												</button>
										<?php }
										?></td>
										
										<th class="text-center">
										<button  onclick="window.location='<?php echo base_url(); ?>index.php/console/UserController/deleteuser/<?php echo $item->userid; ?>';" class="mb-2 mr-2 border-0 btn-transition btn btn-shadow btn-outline-danger">Delete
										</button>
										<button onclick="window.location='<?php echo base_url(); ?>index.php/console/UserController/userdetail/<?php echo $item->userid; ?>';"  class="mb-2 mr-2 border-0 btn-transition btn btn-shadow btn-outline-alternate">More
                                            </button>
										<button onclick="window.location='<?php echo base_url(); ?>index.php/console/UserController/bookingdetails/<?php echo $item->userid; ?>';" class="mb-2 mr-2 border-0 btn-transition btn btn-shadow btn-outline-success" >Booking
											</button>
										</th>
									</tr>
									<?php } ?>
                                </tbody>
                            <tfoot>
                                <tr>
									<th>#</th>
									<th>User Picture</th>
									<th>User</th>
									<th>Contact</th>
									<th>Email</th>
									<th>Is Verify</th>
									<th>Is Block</th>
                                    <th>Actions</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
		</div>
	</div>
</div>
<?php $this->load->view('console/include/rightslidebar');?>
<div class="app-drawer-overlay d-none animated fadeIn"></div><script type="text/javascript" src="<?php echo base_url('public') ?>/assets/scripts/main.cba69814a806ecc7945a.js"></script></body>

<!-- Mirrored from demo.dashboardpack.com/architectui-html-pro/tables-data-tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Oct 2019 09:09:50 GMT -->
</html>