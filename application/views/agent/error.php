<?php
$data["page"]="property";
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
    <title>Add Agent Property</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no"
    />
    <meta name="description" content="Build whatever layout you need with our Architect framework.">

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">

<link href="<?php echo base_url('public') ?>/main.cba69814a806ecc7945a.css" rel="stylesheet"></head>
<body>
<div class="app-container app-theme-white body-tabs-shadow fixed-header fixed-sidebar">
		 <?php $this->load->view('agent/include/header'); ?>
	   <div class="app-main">
				 <?php $this->load->view('agent/include/leftsidebar',$data); ?>
			<div class="app-main__outer">
                <div class="app-main__inner">
                    <div class="app-page-title">
                        <div class="page-title-wrapper">
                            <div class="page-title-heading">
                                
                                <h1>Property Placing limit exceeds for current package </h1>
                            </div>
                               </div>
                    </div>            
               
              </div>
					</div>
    </div>
</div>
	 <?php $this->load->view('agent/include/rightslidebar'); ?>
<div class="app-drawer-overlay d-none animated fadeIn"></div>
<script src="<?php echo base_url('public') ?>/js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('public') ?>/assets/scripts/main.cba69814a806ecc7945a.js"></script></body>
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
				required:true,
				alpha:true
			},
			txtdesc:
			{
				required:true,
				minlength:10
			},
			txtdayrent:
			{
				required:true,
				number:true
			},
			txtfullrent:
			{
				required:true,
				number:true
			},
			txtsell:
			{
				required:true,
				number:true
			},
			txtnoproperty:
			{
				required:true,
				number:true
			},
			txtpincode:
			{
				required:true,
				number:true,
				minlength:6,
				maxlength:6
			}
		},
		messages:
		{
			txttitle:
			{
				required:"Please Enter Property name",
				alpha:"Only Alphabate allowed"
			},
			txtdesc:
			{
				required:"Pelase enter description",
				minlength:"Enter atleaset 10 characters"
			},
			txtdayrent:
			{
				required:"Please Enter Price",
				number:"Only numbers allowed"
			},
			txtnoproperty:
			{
				required:"Please Enter No Of Property",
				number:"Only numbers allowed"
			},
			txtfullrent:
			{
				required:"Please Enter price",
				number:"Only numbers allowed"
			},
			txtsell:
			{
				required:"Please Enter Price",
				number:"Only numbers allowed"
			},
			txtpincode:
			{
				required:"Pelase enter pincode",
				number:"only number required",
				minlength:"minimum 6 digite",
				maxlength:"maximum 6 digite"
			}
			
		}
		
	});
	
});
</script>
<!-- Mirrored from demo.dashboardpack.com/architectui-html-pro/forms-layouts.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Oct 2019 09:09:52 GMT -->
</html>

