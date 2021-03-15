<?php
$data["page"]="package";
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
    <title>Admin - Package</title>
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
                                    <i class="pe-7s-diamond">
                                    </i>
                                </div>
                                <div>Package
                                    <div class="page-title-subheading">Here You Can Mannage Your Package.
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
                                                <a href="<?php echo base_url('/index.php/console/PackageController/addpackage'); ?>"class="nav-link">
                                                    <i class="nav-link-icon lnr-inbox"></i>
                                                    Add Package
								  
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
                                    <th>PackageName</th>
                                    <th>Description</th>
									<th>Price</th>
									<th>Duration</th>
									<th>No Of Property</th>
									<th>Is Active</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
								<?php
								$count=1;
								foreach($packagedata as $item)
								{
								?>
								
                                <tr>
									<td><?php echo $count; $count++;?></td>
                                    <td><?php echo $item->packagename;?></td>
                                    <td><?php echo $item->description;?></td>
									<td><?php echo $item->price;?></td>
									<td><?php echo $item->duration;?></td>
									<td><?php echo $item->noproperty;?></td>
									<td><?php   
									
									if($item->isactive=="Y")
									{
										?>
										<button onclick="window.location='<?php echo base_url(); ?>index.php/console/PackageController/changestatus/<?php echo $item->packageid; ?>/<?php echo $item->isactive; ?>';" class="mb-2 mr-2 btn-pill btn-hover-shine btn btn-success">ACTIVE
                                            </button>
										<?php
									}
									else
									{?>
										<button onclick="window.location='<?php echo base_url(); ?>index.php/console/PackageController/changestatus/<?php echo $item->packageid; ?>/<?php echo $item->isactive; ?>';" class="mb-2 mr-2 btn-pill btn-hover-shine btn btn-danger">INACTIVE
                                            </button>
									<?php }
									?></td>
                                    <th class="text-center">
									<button class="mb-2 mr-2 border-0 btn-transition btn btn-shadow btn-outline-danger opendialogdelete" data-id="<?php echo $item->packageid; ?>" data-toggle="modal" data-target="#exampleModal">Delete
                                            </button>
											<button onclick="window.location='<?php echo base_url(); ?>index.php/console/PackageController/updatepackage/<?php echo $item->packageid; ?>';" class="mb-2 mr-2 border-0 btn-transition btn btn-shadow btn-outline-primary">Edit
                                            </button>
									</th>
                                </tr>
								<?php } ?>
                                </tbody>
                                <tfoot>
                                <tr>
									<th>#</th>
                                    <th>PackageName</th>
                                    <th>Description</th>
									<th>Price</th>
									<th>Duration</th>
									<th>No Of Property</th>
									<th>Is Active</th>
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

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Confirm Delete </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
			<form method="post" action="<?php echo base_url(); ?>index.php/console/PackageController/deletepackage">
            <div class="modal-body">
                <p class="mb-0">Are you sure want to delete this record ?</p>
				<input type="hidden" name="hfdelete" id="hfdelete" />
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                <button type="submit" class="btn btn-primary">Yes</button>
            </div>
			</form>
        </div>
    </div>
</div>
<?php $this->load->view('console/include/rightslidebar');?>
<div class="app-drawer-overlay d-none animated fadeIn"></div><script type="text/javascript" src="<?php echo base_url('public') ?>/assets/scripts/main.cba69814a806ecc7945a.js"></script></body>
<script src="<?php echo base_url('public') ?>/js/jquery-3.4.1.min.js"></script>
<script>
$(document).ready(function(){
	 
	 $(".opendialogdelete").on("click",function(){
		var did = $(this).data('id'); 
		$("#hfdelete").val(did);
	 });
	 
});
</script>
<!-- Mirrored from demo.dashboardpack.com/architectui-html-pro/tables-data-tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Oct 2019 09:09:50 GMT -->
</html>
