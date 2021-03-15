<?php
$data["page"]="agent";
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
    <title>Admin - Agent</title>
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
                                    <i class="pe-7s-users">
                                    </i>
                                </div>
                                <div>Agent
                                    <div class="page-title-subheading">Here You Can Mannage Your Agent.
                                    </div>
                                </div>
                            </div>
                            </div>
                    </div>            <div class="main-card mb-3 card">
                        <div class="card-body">
						<?php
								if($this->session->flashdata("msg"))
								{?>
								<div class="alert alert-success fade show" role="alert"><h5>Success!</h5>
                                    <p class="mb-0"><?php echo $this->session->flashdata("msg"); ?></p></div>
							<?php	}
								?>
                            <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered">
                                <thead>
                                <tr>
									<th>#</th>
                                    <th>Profile Photo</th>
                                    <th>Name</th>
                                    <th>Contact</th>
									<th>Email</th>
                                    <th>IsBlock</th>
									<th>AdhaarNumber</th>
									<th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
								<?php
								$count=1;
								foreach($agentdata as $item)
								{
								?>
								
                                <tr>
									<td><?php echo $count; $count++;?></td>
                                    <td><img src="<?php echo base_url(); ?>uploads/agentprofile/<?php echo $item->profilephoto;?>" width="100" height="100"/></td>
                                    <td><?php echo $item->agentname;?></td>
                                    <td><?php echo $item->contact;?></td>
									<td><?php echo $item->email;?></td>
									<td><?php   
									
									if($item->isblock=="Y")
									{
										?>
										<button onclick="window.location='<?php echo base_url(); ?>index.php/console/AgentController/changestatus/<?php echo $item->agentid; ?>/<?php echo $item->isblock; ?>';" class="mb-2 mr-2 btn-pill btn-hover-shine btn btn-success">BLOCK
                                            </button>
										<?php
									}
									else
									{?>
										<button onclick="window.location='<?php echo base_url(); ?>index.php/console/AgentController/changestatus/<?php echo $item->agentid; ?>/<?php echo $item->isblock; ?>';" class="mb-2 mr-2 btn-pill btn-hover-shine btn btn-danger">UNBLOCK
                                            </button>
									<?php }
									?></td>
									<td><?php echo $item->adhaarnumber;?></td>
                                    <th class="text-center"><button data-id="<?php echo $item->agentid; ?>" data-toggle="modal" data-target=".bd-example-modal-sm" class="open-delete mb-2 mr-2 border-0 btn-transition btn btn-shadow btn-outline-danger">Delete
                                    </button>
											<button  onclick="window.location='<?php echo base_url(); ?>index.php/console/AgentController/agentmore/<?php echo $item->agentid; ?>';" class="mb-2 mr-2 border-0 btn-transition btn btn-shadow btn-outline-alternate">More
                                    </button>
									</th>
                                </tr>
								<?php } ?> 
                                </tbody>
                                <tfoot>
                                <tr>
									<th>#</th>
                                    <th>Profile Photo</th>
                                    <th>Name</th>
                                    <th>Contact</th>
									<th>Email</th>
                                    <th>IsBlock</th>
									<th>AdhaarNumber</th>
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
<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Warning!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to delete record?</p>
            </div>
            <div class="modal-footer">
			<form method="post" action="<?php echo base_url(); ?>index.php/console/AgentController/deleteagent">
				<input type="hidden" name="deleteid" id="deleteid"/>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                <button type="submit" class="btn btn-primary">Yes</button>
				</form>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('console/include/rightslidebar');?>
<div class="app-drawer-overlay d-none animated fadeIn"></div><script type="text/javascript" src="<?php echo base_url('public') ?>/assets/scripts/main.cba69814a806ecc7945a.js"></script></body>
<script src="<?php echo base_url('public') ?>/js/jquery-3.4.1.min.js"></script>
<script>
$(document).ready(function(){
	
	$('.open-delete').click(function(){
		
		var id=$(this).attr("data-id");
		$('#deleteid').val(id);
		
	});
	
});
</script>
<!-- Mirrored from demo.dashboardpack.com/architectui-html-pro/tables-data-tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Oct 2019 09:09:50 GMT -->
</html>
