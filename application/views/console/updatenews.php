<?php
$data["page"]="news";
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
    <title>Update News</title>
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
                                    <i class="pe-7s-news-paper">
                                    </i>
                                </div>
                                <div>Update News
                                    <div class="page-title-subheading">Here You Can Add The News.
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
								foreach($newsdata as $item)
								{
								?>
									<form id="form1" class="" enctype="multipart/form-data" action="<?php echo base_url(); ?>index.php/console/NewsController/update/<?php echo $item->newsid; ?>" method="post">
                                       
                                        <div class="position-relative row form-group"><label for="exampleTitle" class="col-sm-2 col-form-label">Title</label>
                                            <div class="col-sm-10"><input value="<?php echo $item->title; ?>" name="txttitle" id="txttitle" placeholder="Enter Title" type="text" class="form-control"></div>
                                        </div>
										<div class="position-relative row form-group"><label for="exampleImage" class="col-sm-2 col-form-label">Image</label>
                                            <div class="col-sm-10"><input value="<?php echo $item->image; ?>" name="txtimage" id="txtimage" accept="image/*" placeholder="Select Image" accept="image/*" type="file" class="form-control"></div>
											 <td><img src="<?php echo base_url(); ?>uploads/<?php echo $item->image;?>" width="150" height="150"/></td>
                                        </div>
										<div class="position-relative row form-group"><label for="exampleDescription" class="col-sm-2 col-form-label">Description</label>
                                           <div class="col-sm-10"><textarea  name="txtdesc" id="txtdesc" placeholder="Enter Description" type="text" class="form-control"><?php echo $item->description; ?></textarea></div>
                                        </div> 
										<div class="position-relative row form-group"><label for="exampleIsActive" class="col-sm-2 col-form-label">IsActive</label>
                                           <div class="form-check ml-3">
                                                    <input type="radio" name="txtisactive" class="form-check-input" value="Y" <?php if($item->isactive=="Y") { ?>checked="" <?php } ?>>
                                                    <label class="form-check-label" for="exampleRadios1">
                                                       YES
                                                    </label>
                                                </div>
											  <div class="form-check ml-2">
                                                    <input type="radio" name="txtisactive" class="form-check-input" value="N" <?php if($item->isactive=="N") { ?>checked="" <?php } ?>>
                                                    <label class="form-check-label " for="exampleRadios1">
                                                       NO
                                                    </label>
                                                </div>
                                        </div>
										   <div class="position-relative row form-check">
                                            <div class=" offset-sm-8">
                                               <button type="submit" name="btnsubmit" id="btnsubmit" class="btn-wide mb-2 mr-2 btn btn-warning btn-lg">Update</button>
											    <button type="button" onclick="window.location='<?php echo base_url(); ?>index.php/console/NewsController/index';" name="btnsubmit" id="btnsubmit" class="btn-wide mb-2 mr-2 btn btn-danger btn-lg">cancel</button>
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
			txttitle:
			{
				alpha:true,
				required:true
			},
			txtdesc:
			{
				required:true
			}
			
		},
		messages:
		{
			txttitle:
			{
				alpha:"Required Only Alphabate",
				required:"Please Enter Title"
			},
			txtdesc:
			{
				required:"Please Enter Descripion"
			}
		}
		
	});
	
});
</script>

<!-- Mirrored from demo.dashboardpack.com/architectui-html-pro/forms-layouts.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Oct 2019 09:09:52 GMT -->
</html>

