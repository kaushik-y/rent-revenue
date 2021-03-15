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
    <title>Agent - Package</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no"
    />
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
                                    <i class="pe-7s-box2">
                                    </i>
                                </div>
                                <div>Package
                                    <div class="page-title-subheading">Here You Can Mannage Your Package.
                                    </div>
                                </div>
                            </div>
                              </div>
                    </div>            
                <div class="mb-3 card">
				 
                            <div class="row">
							<?php
							foreach($packages as $row)
							{
							?>
                                <div class="col-3 p-2">
                                    <div class="mdc-card pricing-card text-center border-accent p-0">
                                        <h3 color="red" class="pricing-title my-3"><?php echo $row->packagename; ?></h3>
                                        <div class="bg-accent pricing-header p-3">   
                                            <h4>Rs. <?php echo number_format($row->price,2); ?><small> </small></h4>
                                            <p class="desc mb-2"><?php echo $row->duration; ?> Days</p>
                                        </div>
                                        <div class="p-3">
                                            <p class="py-2"><span class="mx-2 fw-500"><?php echo $row->	noproperty; ?></span>Properties</p>
                                            <p class="py-2 text-muted"><?php echo $row->description; ?></p>
                                            <button type="submit" class="mdc-button mdc-button--raised">
                                                <span class="mdc-button__ripple"></span>
                                                <h6 class="fw-600"><a href="<?php echo base_url(); ?>index.php/agent/PackageController/index1/<?php echo $row->packageid;?>">Buy Now</a></h6> 
                                            </button>  
                                        </div>
                                    </div>
                                </div>
							<?php } ?>   
                                
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
			<form method="post" action="<?php echo base_url(); ?>index.php/agent/PackageController/deletepackage">
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
<?php $this->load->view('agent/include/rightslidebar');?>
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
