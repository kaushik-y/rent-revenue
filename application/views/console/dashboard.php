<?php
$data["page"]="dashboard";
?>
<!doctype html>
<html lang="en">


<!-- Mirrored from demo.dashboardpack.com/architectui-html-pro/dashboards-commerce.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Oct 2019 09:09:26 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<link href="<?php echo base_url('public') ?>/main.cba69814a806ecc7945a.css" rel="stylesheet">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title> Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no"
    />
    <meta name="description" content="This dashboard was created as an example of the flexibility that Architect offers.">

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">

<link href="main.cba69814a806ecc7945a.css" rel="stylesheet"></head>
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
                                    <i class="metismenu-icon pe-7s-rocket">
                                    </i>
                                </div>
                                <div>Dashboard
                                    <div class="page-title-subheading">This dashboard was created as an example of the flexibility that Architect offers.
                                    </div>
                                </div>
                            </div>
                               </div>
                    </div>      
                    <div class="tabs-animation">
                        <div class="row">
                            <div class="col-lg-12 col-xl-6">
                                <div class="main-card mb-3 card">
                                    <div class="card-body"><h5 class="card-title">Property Category Report</h5>
                                        <div class="widget-chart-wrapper widget-chart-wrapper-lg opacity-10 m-0">
                                            <div style="height: 345px;">
											<h5 class="card-title"></h5>
                                                <canvas id="chart-area1"></canvas>
                                            </div>
                                        </div>
                                        
                                     
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-xl-6">
                                <div class="main-card mb-3 card">
                                    <div class="grid-menu grid-menu-2col">
                                        <div class="no-gutters row">
                                            <div class="col-sm-6">
                                                <div class="widget-chart widget-chart-hover">
                                                    <div class="icon-wrapper rounded-circle">
                                                        <div class="icon-wrapper-bg bg-warning"></div>
                                                        <i class="lnr-apartment icon-gradient bg-sunny-morning"></i></div>
                                                    <div class="widget-numbers">
													<?php
													$result=$this->db->query("select * from tbl_property");
													echo $result->num_rows();
													?>
													</div>
                                                    <div class="widget-subheading">Total Property</div>
                                                   <div class="widget-description text-primary">
                                                        <i class="fa fa-angle"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="widget-chart widget-chart-hover">
                                                    <div class="icon-wrapper rounded-circle">
                                                        <div class="icon-wrapper-bg bg-info"></div>
                                                        <i class="lnr-graduation-hat text-danger"></i>
                                                    </div>
                                                    <div class="widget-numbers">
													<?php
													$result=$this->db->query("select * from tbl_agent");
													echo $result->num_rows();
													?>
													</div>
                                                    <div class="widget-subheading">Total Agent </div>
													 <div class="widget-description text-primary">
                                                        <i class="fa fa-angle"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="widget-chart widget-chart-hover">
                                                    <div class="icon-wrapper rounded-circle">
                                                        <div class="icon-wrapper-bg bg-secondary"></div>
                                                        <i class="lnr-calendar-full icon-gradient bg-arielle-smile"></i>
                                                    </div>
                                                    <div class="widget-numbers">
													<?php
													$result=$this->db->query("select * from tbl_booking");
													echo $result->num_rows();
													?></div>
                                                    <div class="widget-subheading">Total Booking</div>
                                                    <div class="widget-description text-dark">
                                                        <i class="fa fa-angle text-danger"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="widget-chart widget-chart-hover br-br">
                                                    <div class="icon-wrapper rounded-circle">
                                                        <div class="icon-wrapper-bg bg-danger"></div>
                                                        <i class="lnr-user icon-gradient bg-ripe-malin"></i></div>
                                                    <div class="widget-numbers"><?php
													$result=$this->db->query("select * from tbl_users");
													echo $result->num_rows();
													?></div>
                                                    <div class="widget-subheading">Total Users</div>
                                                    <div class="widget-description text-warning">
                                                        <i class="fa fa-arrow"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered">
                            <thead>
                                <tr>
									<th>#</th>
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
			</div>
    </div>
</div>
   
    
</div>
<div class="app-drawer-overlay d-none animated fadeIn"></div><script type="text/javascript" src="<?php echo base_url('public') ?>/assets/scripts/main.cba69814a806ecc7945a.js"></script></body>

<!-- Mirrored from demo.dashboardpack.com/architectui-html-pro/dashboards-commerce.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Oct 2019 09:09:28 GMT -->

<script>

	var randomScalingFactor = function() {
			return Math.round(Math.random() * 100);
		};
		function getRandomColor() {
  var letters = '0123456789ABCDEF';
  var color = '#';
  for (var i = 0; i < 6; i++) {
    color += letters[Math.floor(Math.random() * 16)];
  }
  return color;
}

		var config = {
			type: 'pie',
			data: {
				datasets: [{
					data: [
						<?php
						$result=$this->db->query("select *,(select count(*) from tbl_property where categoryid=tbl_category.categoryid) as totalproperty from tbl_category");
						foreach($result->result() as $row)
						{
						?>
						<?php echo $row->totalproperty; ?>,
						<?php } ?>
					],
					backgroundColor: [
						
					<?php
						$result=$this->db->query("select *,(select count(*) from tbl_property where categoryid=tbl_category.categoryid) as totalproperty from tbl_category");
						foreach($result->result() as $row)
						{
						?>
						getRandomColor(),
						<?php } ?>
					],
					label: 'Dataset 1'
				}],
				labels: [
					<?php
						$result=$this->db->query("select *,(select count(*) from tbl_property where categoryid=tbl_category.categoryid) as totalproperty from tbl_category");
						foreach($result->result() as $row)
						{
						?>
					'<?php echo $row->categoryname; ?>',
						<?php } ?>
				]
			},
			options: {
				responsive: true
			}
		};

		window.onload = function() {
			var ctx = document.getElementById('chart-area1').getContext('2d');
			window.myPie = new Chart(ctx, config);
		};



</script>
</html>


