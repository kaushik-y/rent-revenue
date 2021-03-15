<?php
$data["page"]="state";
?>
<!doctype html>
<html lang="en">
<!-- Mirrored from demo.dashboardpack.com/architectui-html-pro/forms-layouts.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Oct 2019 09:09:52 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Update state Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no"
    />
    <meta name="description" content="Build whatever layout you need with our Architect framework.">

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">

<link href="<?php echo base_url('public') ?>/main.cba69814a806ecc7945a.css" rel="stylesheet"></head>
<body>
<div class="app-container app-theme-white body-tabs-shadow fixed-header fixed-sidebar">
		 <?php $this->load->view('console/include/header'); ?>
	   <div class="app-main">
				 <?php $this->load->view('console/include/leftsidebar',$data); ?>
			<div class="app-main__outer">
                <div class="app-main__inner">
                    <div class="app-page-title">
                        <div class="page-title-wrapper">
                            <div class="page-title-heading">
                                <div class="page-title-icon">
                                    <i class="pe-7s-way">
                                    </i>
                                </div>
                                <div>Update state
                                    <div class="page-title-subheading">Here,You Can Update state.
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
									<?php
								if($this->session->flashdata("msg"))
								{?>
								<div class="alert alert-success fade show" role="alert"><h5>Success!</h5>
                                    <p class="mb-0"><?php echo $this->session->flashdata("msg"); ?></p></div>
							<?php	}
								?>
								
								<?php
								foreach($statedata as $item)
								{
								?>
							
								 <form id="form1" class="" method="post" action="<?php echo base_url(); ?>index.php/console/StateController/updatedata/<?php echo $item->stateid; ?>">
									                                        
										
                                        
										<div class="position-relative row form-group"><label for="Statename" class="col-sm-2 col-form-label"><center>State Name</center></label>
                                            <div class="col-sm-9"><input value="<?php echo $item->statename; ?>" name="txtname" id="txtname" placeholder="Enter State Name" type="text" class="form-control"></div>
                                        </div>
										 <div class="position-relative row form-check">
                                        
                                            <div class=" offset-sm-8"/>
                                               <button type="submit" name="btnsubmit" id="btnsubmit" class="btn-wide mb-2 mr-2 btn btn-warning btn-lg">Update
                                                </button>
												<button type="button" onclick="window.location='<?php echo base_url(); ?>index.php/console/StateController/index';" name="btncancel" id="btncancel" class="btn-wide mb-2 mr-2 btn btn-danger btn-lg">Cancel
                                                </button>
											 </div>
                                        </div> 
                                    </form>
                                <?php } ?>
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
	 <?php $this->load->view('console/include/rightslidebar'); ?>
<div class="app-drawer-overlay d-none animated fadeIn"></div><script type="text/javascript" src="<?php echo base_url('public') ?>/assets/scripts/main.cba69814a806ecc7945a.js"></script></body>
<script src="<?php echo base_url('public') ?>/js/jquery-3.4.1.min.js"></script>
<script src="<?php echo base_url('public') ?>/js/jquery.validate.min.js"></script>
<script src="<?php echo base_url('public') ?>/js/additional-methods.min.js"></script>

<script>
$(document).ready(function(){
	
	 $.validator.addMethod("alpha", function(value, element) {
    return this.optional(element) || value == value.match(/^[a-zA-Z\s]+$/);
 });
	
	
	$('#form1').validate({
		rules:
		{
			txtname:
			{
				required:true,
				alpha:true
			}
			
		},
		messages:
		{
			txtname:
			{
				required:"Please Enter Name",
				alpha:"Only Required Alphabet"
			}
		}
		
	});
	
});
</script>

<!-- Mirrored from demo.dashboardpack.com/architectui-html-pro/forms-layouts.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Oct 2019 09:09:52 GMT -->
</html>

