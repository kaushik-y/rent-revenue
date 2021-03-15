 <!doctype html>
<html lang="en">


<!-- Mirrored from demo.dashboardpack.com/architectui-html-pro/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Oct 2019 09:09:30 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Login - Rentrevenue</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no"
    />
    <meta name="description" content="ArchitectUI HTML Bootstrap 4 Dashboard Template">

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">

<link href="<?php echo base_url('public') ?>/main.cba69814a806ecc7945a.css" rel="stylesheet"></head>

<body>
<div class="app-container app-theme-white body-tabs-shadow">
        <div class="app-container">
            <div class="h-100">
                <div class="h-100 no-gutters row">
                    <div class="d-none d-lg-block col-lg-4">
                        <div class="slider-light">
                            <div class="slick-slider">
                                <div>
                                    <div class="position-relative h-100 d-flex justify-content-center align-items-center bg-plum-plate" tabindex="-1">
                                        <div class="slide-img-bg" style="background-image: url('<?php echo base_url('public') ?>/assets/images/originals/city.jpg');"></div>
                                        <div class="slider-content"><h3>Perfect Balance</h3>
                                            <p>Rentrevenue is like a dream. Some think it's too good to be true! Extensive collection of unified React Boostrap Components and Elements.</p></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="position-relative h-100 d-flex justify-content-center align-items-center bg-premium-dark" tabindex="-1">
                                        <div class="slide-img-bg" style="background-image: url('<?php echo base_url('public') ?>/assets/images/originals/citynights.jpg');"></div>
                                        <div class="slider-content"><h3>Scalable, Modular, Consistent</h3>
                                            <p>Easily exclude the components you don't require. Lightweight, consistent Bootstrap based styles across all elements and components</p></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="position-relative h-100 d-flex justify-content-center align-items-center bg-sunny-morning" tabindex="-1">
                                        <div class="slide-img-bg" style="background-image: url('<?php echo base_url('public') ?>/assets/images/originals/citydark.jpg');"></div>
                                        <div class="slider-content"><h3>Complex, but lightweight</h3>
                                            <p>We've included a lot of components that cover almost all use cases for any type of application.</p></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="h-100 d-flex bg-white justify-content-center align-items-center col-md-12 col-lg-8">
                        <div class="mx-auto app-login-box col-sm-12 col-md-10 col-lg-9">
                             <div class="col-lg-8">
								<img src="<?php echo base_url('public'); ?>/assets/images/rentrevenue.jpg" height="55" width="150"alt="rent">
							</div>
                            <h4 class="mb-0">
                                <span class="d-block">Welcome back,</span>
                                <span>Please sign in to your account.</span></h4>
                            
                            <div class="divider row"></div>
                            <div>
							<?php
								if($this->session->flashdata("msg"))
								{?>
								<div class="alert alert-danger fade show" role="alert"><h5>Error!</h5>
                                    <p class="mb-0"><?php echo $this->session->flashdata("msg"); ?></p></div>
							<?php	}
								?>
                                <form class="" id="form1" method="post" action="<?php echo base_url(); ?>index.php/console/LoginController/checklogin">
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="position-relative form-group"><label for="exampleEmail" class="">Email</label><input name="txtemail" id="txtemail" placeholder="Email here..." type="text" class="form-control"></div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="position-relative form-group"><label for="examplePassword" class="">Password</label><input name="txtpassword" id="txtpassword" placeholder="Password here..." type="password"
                                                                                                                                                   class="form-control"></div>
                                        </div>
                                    </div>
                                     <div class="divider row"></div>
                                    <div class="d-flex align-items-center">
                                       
                                            <button type="submit" class="btn btn-primary btn-lg">Login to Dashboard</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
<script type="text/javascript" src="<?php echo base_url('public') ?>/assets/scripts/main.cba69814a806ecc7945a.js"></script></body>

<script src="<?php echo base_url('public') ?>/js/jquery-3.4.1.min.js"></script>
<div class="app-drawer-overlay d-none animated fadeIn"></div><script type="text/javascript" src="<?php echo base_url('public') ?>/assets/scripts/main.cba69814a806ecc7945a.js"></script></body>
<script src="<?php echo base_url('public') ?>/js/jquery.validate.min.js"></script>
<script src="<?php echo base_url('public') ?>/js/additional-methods.min.js"></script>

<script>
$(document).ready(function(){
	

	$('#form1').validate({
		rules:
		{
			txtemail:
			{
				required:true
			
			},
			txtpassword:
			{
				required:true,
				minlength:3
			}
		},
		messages:
		{
			txtemail:
			{
				required:"Please Enter Email"
				
			},
			txtpassword:
			{
				required:"Please Enter Password",
				minlength:"Enter Minimum 8 Character."
			}
		}
		
	});
	
});
</script>
<!-- Mirrored from demo.dashboardpack.com/architectui-html-pro/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Oct 2019 09:09:33 GMT -->
</html>
