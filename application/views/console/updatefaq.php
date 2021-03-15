<?php
$data["page"]="faq";
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
    <title>Update FAQ Page</title>
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
                                    <i class="pe-7s-comment">
                                    </i>
                                </div>
                                <div>Update FAQ
                                    <div class="page-title-subheading">Here,You Can Update FAQ.
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
								foreach($faqdata as $item)
								{
								?>
								 <form id="form1" class="" method="post" action="<?php echo base_url(); ?>index.php/console/FAQController/update/<?php echo $item->faqid; ?>">
								 <div class="position-relative row form-group"><label for="exampleCity" class="col-sm-2 col-form-label"><center>FAQCategory Name</center></label>
                                            <div class="col-sm-9">
											<select name="txtfaqcat" id="txtfaqcat" class="form-control">
												<option value="">Please Select FAQCategory</option>
												<?php
												foreach($faqcatdata as $item1)
												{
												?>
												<option <?php if($item1->faqcategoryid==$item1->faqcategoryid) {?> selected <?php } ?> value="<?php echo $item1->faqcategoryid; ?>"><?php echo $item1->faqcategoryname; ?></option>
												<?php } ?>
											</select>
											</div>
                                        </div>            
										<div class="position-relative row form-group"><label for="exampleQuestion" class="col-sm-2 col-form-label"><center>Question</center></label>
                                            <div class="col-sm-9"><input value="<?php echo $item->faqquestion; ?>" name="txtque" id="txtque" placeholder="Enter Your Question" type="text" class="form-control"></div>
                                        </div>
										<div class="position-relative row form-group"><label for="exampleAnswer" class="col-sm-2 col-form-label"><center>Answer</center></label>
                                            <div class="col-sm-9"><input value="<?php echo $item->faqanswer; ?>" name="txtans" id="txtans" placeholder="Enter Your Answer" type="text" class="form-control"></div>
                                        </div>
										<hr class="mt-4 mb-3"/>
                                        
                                            <div class=" offset-sm-8"/>
                                               <button  type="submit" name="btnsubmit" id="btnsubmit" class="btn-wide mb-2 mr-2 btn btn-warning btn-lg">Update
                                                </button>
												<button type="button" onclick="window.location='<?php echo base_url(); ?>index.php/console/FAQController/index';" name="btncancel" id="btncancel" class="btn-wide mb-2 mr-2 btn btn-danger btn-lg">Cancel
                                                </button>
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
	 <?php $this->load->view('console/include/rightslidebar'); ?>
<script src="<?php echo base_url('public') ?>/js/jquery-3.4.1.min.js"></script>
<div class="app-drawer-overlay d-none animated fadeIn"></div><script type="text/javascript" src="<?php echo base_url('public') ?>/assets/scripts/main.cba69814a806ecc7945a.js"></script></body>
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
			txtque:
			{
				required:true
			},
			txtans:
			{
				required:true
			}
		},
		messages:
		{
			txtque:
			{
				required:"please Enter Question"
			},
			txtans:
			{
				required:"please Enter Answer"
			}
				
		}
		
	});
	
});
</script>



<!-- Mirrored from demo.dashboardpack.com/architectui-html-pro/forms-layouts.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Oct 2019 09:09:52 GMT -->
</html>