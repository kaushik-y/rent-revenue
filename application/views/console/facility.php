<?php
$data["page"]="facility";
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
    <title>Admin - Property Facility</title>
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
                                    <i class="pe-7s-note2">
                                    </i>
                                </div>
                                <div>Property Facility
                                    <div class="page-title-subheading">Here You Can Mannage Your Property Facility.
                                    </div>
                                </div>
                            </div>
                            <div class="page-title-actions">
                              
                                <div class="d-inline-block dropdown">
                                    <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-shadow dropdown-toggle btn btn-info">
                                        <span class="btn-icon-wrapper pr-2 opacity-7">
                                            <i class="fa fa-business-time fa-w-20"></i>
                                        </span>
                                        ACTION
                                    </button>
                                    <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a href="<?php echo base_url('/index.php/console/FacilityController/addfacility'); ?>"class="nav-link">
                                                    <i class="nav-link-icon lnr-inbox"></i>
                                                    Add
								  
                                                </a>
                                            </li>
                                           </ul>
                                    </div>
                                </div>
                            </div>    </div>
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
									<th>Facility Name</th>
									<th>Is Active</th>
									<th>Image</th>
									<th>Actions</th>
                                 </tr>
                                </thead>
                                <tbody>
								<?php
								$count=1;
								foreach($facilitydata as $item)
								{
								?>
								
                                <tr>
                                    <td><?php echo $count;$count++;?></td>
									<td><?php echo $item->facilityname;?></td>
                                    <td><?php echo $item->isactive;?></td>
									<td><img src="<?php echo base_url(); ?>uploads/<?php echo $item->image;?>" width="100" height="100"/></td>
                                    <th class="text-center">
									<button data-id="<?php echo $item->facilityid; ?>" data-toggle="modal" data-target=".bd-example-modal-sm" class="open-delete mb-2 mr-2 border-0 btn-transition btn btn-shadow btn-outline-danger">Delete
                                            </button>
											<button onclick="window.location='<?php echo base_url(); ?>index.php/console/FacilityController/updatefacility/<?php echo $item->facilityid; ?>';" class="mb-2 mr-2 border-0 btn-transition btn btn-shadow btn-outline-primary">Edit
                                            </button>
									</th>
                                </tr>
								<?php } ?>
                                </tbody>
                                <tfoot>
                                <tr>
									<th>#</th>
									<th>Facility Name</th>
									<th>Is Active</th>
									<th>Image</th>
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
			<form method="post" action="<?php echo base_url(); ?>index.php/console/FacilityController/deletefacility/">
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
