<!doctype html>
<html lang="en">


<!-- Mirrored from demo.dashboardpack.com/architectui-html-pro/tables-data-tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Oct 2019 09:09:50 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Admin - Gallary</title>
	
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
              <?php $this->load->view('console/include/leftsidebar'); ?>
			<div class="app-main__outer">
                <div class="app-main__inner">
                    <div class="app-page-title">
                        <div class="page-title-wrapper">
                            <div class="page-title-heading">
                                <div class="page-title-icon">
                                    <i class="metismenu-icon pe-7s-chat">
                                    </i>
                                </div>
                                <div>Gallary
                                    <div class="page-title-subheading">Here You Can Mannage Your Gallary.
                                    </div>
                                </div>
                            </div>
                              </div>
                    </div>            <div class="main-card mb-3 card">
                        <div class="card-body">
                            <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered">
                                <thead>
                                <tr>
									<th>#</th>
									<th>Property Id</th>
									<th>Media Use</th>
									<th>Type</th>
									<th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
								<?php
								$count=1;
									foreach($gallarydata as $item)
								{
									?>
                                <tr>
                                    <td><?php echo $count; $count++;?></td>
                                    <td><?php  echo $item->propertyid;?></td>
                                    <td><?php  echo $item->media;?></td>
									<td><?php  echo $item->type;?></td>
                                    <th class="text-center">
									<button  onclick="window.location='<?php echo base_url(); ?>index.php/console/GallaryController/deletegallary/<?php echo $item->gallrayid; ?>';" class="mb-2 mr-2 border-0 btn-transition btn btn-shadow btn-outline-danger">Delete
                                    </button>
							 </th>
                                </tr>
                                <?php } ?>
                                </tbody>
                                <tfoot>
                                <tr>
									<th>#</th>
									<th>Property Id</th>
									<th>Media Use</th>
									<th>Type</th>
									<th>Action</th>
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
