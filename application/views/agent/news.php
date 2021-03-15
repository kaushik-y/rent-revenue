<?php
$data["page"]="news";
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
    <title>Admin - News</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no"/>
    <meta name="description" content="Choose between regular React Bootstrap tables or advanced dynamic ones.">

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">

<link href="<?php echo base_url('public') ?>/main.cba69814a806ecc7945a.css" rel="stylesheet"></head>
<body>
<div class="app-container app-theme-white body-tabs-shadow fixed-header fixed-sidebar">
		<?php $this->load->view('agent/include/header');	?>
	   <div class="app-main">
              <?php $this->load->view('agent/include/leftsidebar',$data); ?>
			<div class="app-main__outer">
                <div class="app-main__inner">
                    <div class="app-page-title">
                        <div class="page-title-wrapper">
                            <div class="page-title-heading">
                                <div class="page-title-icon">
                                    <i class="pe-7s-news-paper">
                                    </i>
                                </div>
                                <div>News
                                    <div class="page-title-subheading">Here You Can Mannage Your News.
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
									<th>Title</th>
                                    <th>Image</th>
                                    <th>Description</th>
									<th>Date/Time</th>
									
                                </tr>
                                </thead>
                                <tbody>
								<?php
								$count=1;
									foreach($newsdata as $item)
								{
								?>
                                <tr>
									<td><?php  echo $count; $count++;?></td>
									<td><?php  echo $item->title;?></td>
                                    <td><img src="<?php echo base_url(); ?>uploads/<?php echo $item->image;?>" width="100" height="100"/></td>
                                    <td><?php  echo $item->description;?></td>
                                    <td><?php  echo date("d-M-Y h:i:s a", strtotime($item->datetime));?></td>
                                </tr>
								<?php } ?>
                                
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>#</th>
									<th>Title</th>
                                    <th>Image</th>
                                    <th>Description</th>
									<th>Date/Time</th>
									
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
			<form method="post" action="<?php echo base_url(); ?>index.php/console/NewsController/deletenews">
				<input type="hidden" name="deleteid" id="deleteid"/>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                <button type="submit" class="btn btn-primary">Yes</button>
				</form>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('agent/include/rightslidebar');?>
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
