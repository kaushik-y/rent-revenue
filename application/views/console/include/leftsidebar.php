<div class="app-sidebar sidebar-shadow">
            <div class="app-sidebar sidebar-shadow">
                <div class="app-header__logo">
                    <div class="logo-src"></div>
                    <div class="header__pane ml-auto">
                        <div>
                            <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
                
                <div class="app-header__menu">
                    <span>
                        <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                            <span class="btn-icon-wrapper">
                                <i class="fa fa-ellipsis-v fa-w-6"></i>
                            </span>
                        </button>
                    </span>
                </div>   
				<div class="scrollbar-sidebar">
                    <div class="app-sidebar__inner">
                        <ul class="vertical-nav-menu">
                            <li class="app-sidebar__heading">Menu</li>
                            <li <?php if($page=="dashboard") {?>  class="mm-active" <?php } ?>>
                                <a href="<?php echo base_url('/index.php/console/DashboardController/index'); ?>">
                                    <i class="metismenu-icon pe-7s-rocket"></i>
                                    Dashboards
                                </a>
                            </li>
							<li>
                                <a href="#">
                                    <i class="metismenu-icon pe-7s-graph2"></i>
                                    Report
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                </a>
                                <ul>
                                    <li <?php if($page=="propertycategoryreport") {?>  class="mm-active" <?php } ?>>
                                        <a href="<?php echo base_url('/index.php/console/ReportController/index1'); ?>">
                                            <i class="metismenu-icon"></i>
                                            Property Category Report
                                        </a>
                                    </li>
                                    <li <?php if($page=="bookingpropertyreport") {?>  class="mm-active" <?php } ?>>
                                        <a href="<?php echo base_url('/index.php/console/ReportController/index2'); ?>">
                                            <i class="metismenu-icon">
                                            </i>Booking Property Report
                                        </a>
                                    </li>
                                    <li <?php if($page=="agentpackagereport") {?>  class="mm-active" <?php } ?>>
                                        <a href="<?php echo base_url('/index.php/console/ReportController/index3'); ?>">
                                            <i class="metismenu-icon">
                                            </i>Agent Package Report
                                        </a>
                                    </li> 
									<li <?php if($page=="bookinguserreport") {?>  class="mm-active" <?php } ?>>
                                        <a href="<?php echo base_url('/index.php/console/ReportController/index4'); ?>">
                                            <i class="metismenu-icon">
                                            </i>Booking User Report
                                        </a>
                                    </li> 
									<li <?php if($page=="registeruserreport") {?>  class="mm-active" <?php } ?>>
                                        <a href="<?php echo base_url('/index.php/console/ReportController/index5'); ?>">
                                            <i class="metismenu-icon">
                                            </i>Register User Report
                                        </a>
                                    </li> 
									<li <?php if($page=="registeragentreport") {?>  class="mm-active" <?php } ?>>
                                        <a href="<?php echo base_url('/index.php/console/ReportController/index6'); ?>">
                                            <i class="metismenu-icon">
                                            </i>Register Agent Report
                                        </a>
                                    </li> 
                                </ul>
                            </li>
							 <li <?php if($page=="package") {?>  class="mm-active" <?php } ?>>
                                <a href="<?php echo base_url('/index.php/console/PackageController/index'); ?>">
                                    <i class="metismenu-icon pe-7s-diamond"></i>
                                    Package
								</a>
                            </li>
							<li <?php if($page=="user") {?>  class="mm-active" <?php } ?>>
                                <a href="<?php echo base_url('/index.php/console/UserController/index'); ?>">
                                    <i class="metismenu-icon pe-7s-user"></i>
                                    User
								</a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="metismenu-icon pe-7s-map-marker"></i>
                                    Location
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                </a>
                                <ul>
                                    <li <?php if($page=="state") {?>  class="mm-active" <?php } ?>>
                                        <a href="<?php echo base_url('/index.php/console/StateController/index'); ?>">
                                            <i class="metismenu-icon"></i>
                                            State
                                        </a>
                                    </li>
                                    <li <?php if($page=="city") {?>  class="mm-active" <?php } ?>>
                                        <a href="<?php echo base_url('/index.php/console/CityController/index'); ?>">
                                            <i class="metismenu-icon">
                                            </i>City
                                        </a>
                                    </li>
                                    <li <?php if($page=="area") {?>  class="mm-active" <?php } ?>>
                                        <a href="<?php echo base_url('/index.php/console/AreaController/index'); ?>">
                                            <i class="metismenu-icon">
                                            </i>Area
                                        </a>
                                    </li>    
                                </ul>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="metismenu-icon pe-7s-users"></i>
                                    Agency
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                </a>
                                <ul>
                                    <li <?php if($page=="agent") {?>  class="mm-active" <?php } ?>>
                                        <a href="<?php echo base_url('/index.php/console/AgentController/index'); ?>" >
                                            <i class="metismenu-icon">
                                            </i>All Agency
                                        </a>
                                    </li>
                                    <li <?php if($page=="agentpackage") {?>  class="mm-active" <?php } ?>>
                                        <a href="<?php echo base_url('/index.php/console/AgentPackageController/index'); ?>">
                                            <i class="metismenu-icon">
                                            </i>Agency Package
                                        </a>
                                    </li>
								</ul>
                            </li>
					
							<li>
                                <a href="#">
                                    <i class="metismenu-icon pe-7s-culture"></i>
                                    Property Master
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                </a>
                                <ul>
                                    <li <?php if($page=="category") {?>  class="mm-active" <?php } ?>>
                                        <a href="<?php echo base_url('/index.php/console/CategoryController/index'); ?>">
                                            <i class="metismenu-icon"></i>
                                            Category
                                        </a>
                                    </li>
                                    <li <?php if($page=="facility") {?>  class="mm-active" <?php } ?>>
                                        <a href="<?php echo base_url('/index.php/console/FacilityController/index'); ?>">
                                            <i class="metismenu-icon"></i>
                                            Facility
                                        </a>
                                    </li>
                                </ul>
                            </li>
							
							<li>
                                <a href="#">
                                    <i class="metismenu-icon pe-7s-home"></i>
                                    User Property
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                </a>
                                <ul>
                                    <li <?php if($page=="usernewproperty") {?>  class="mm-active" <?php } ?>>
                                        <a href="<?php echo base_url('/index.php/console/PropertyController/index3'); ?>">
                                            <i class="metismenu-icon"></i>
                                            New Property
                                        </a>
                                    </li>
									
                                    <li <?php if($page=="userapproveproperty") {?>  class="mm-active" <?php } ?>>
                                        <a href="<?php echo base_url('/index.php/console/PropertyController/index4'); ?>">
                                            <i class="metismenu-icon">
                                            </i>Approve Property
                                        </a>
                                    </li>
									
									<li <?php if($page=="userrejectproperty") {?>  class="mm-active" <?php } ?>>
                                        <a href="<?php echo base_url('/index.php/console/PropertyController/index5'); ?>">
                                            <i class="metismenu-icon">
                                            </i>Reject Property
                                        </a>
                                    </li>
                                    <li <?php if($page=="userreview") {?>  class="mm-active" <?php } ?>>
                                        <a href="<?php echo base_url('/index.php/console/ReviewController/index1'); ?>">
                                            <i class="metismenu-icon">
                                            </i>Rating & Review
                                        </a>
                                    </li>
                                </ul>
                            </li>
							
							<li>
                                <a href="#">
                                    <i class="metismenu-icon pe-7s-home"></i>
                                    Agent Property
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                </a>
                                <ul>
                                    <li <?php if($page=="newproperty") {?>  class="mm-active" <?php } ?>>
                                        <a href="<?php echo base_url('/index.php/console/PropertyController/index'); ?>">
                                            <i class="metismenu-icon"></i>
                                            New Property
                                        </a>
                                    </li>
									
                                    <li <?php if($page=="approveproperty") {?>  class="mm-active" <?php } ?>>
                                        <a href="<?php echo base_url('/index.php/console/PropertyController/index1'); ?>">
                                            <i class="metismenu-icon">
                                            </i>Approve Property
                                        </a>
                                    </li>
									
									<li <?php if($page=="rejectproperty") {?>  class="mm-active" <?php } ?>>
                                        <a href="<?php echo base_url('/index.php/console/PropertyController/index2'); ?>">
                                            <i class="metismenu-icon">
                                            </i>Reject Property
                                        </a>
                                    </li>
                                    <li <?php if($page=="agentreview") {?>  class="mm-active" <?php } ?>>
                                        <a href="<?php echo base_url('/index.php/console/ReviewController/index'); ?>">
                                            <i class="metismenu-icon">
                                            </i>Rating & Review
                                        </a>
                                    </li>
                                </ul>
                            </li>
                                    <li <?php if($page=="inquiry") {?>  class="mm-active" <?php } ?>>
                                        <a href="<?php echo base_url('/index.php/console/InquiryController/index'); ?>">
                                            <i class="metismenu-icon pe-7s-help1"></i>
                                             Inquiry
                                        </a>
                                    </li>
                             <li>
                                <a href="#">
                                    <i class="metismenu-icon pe-7s-date"></i>
                                    Agent Bookings
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                </a>
                                <ul>
                                    <li <?php if($page=="agentpenddingbooking") {?>  class="mm-active" <?php } ?>>
                                        <a href="<?php echo base_url('/index.php/console/BookingController/index4'); ?>">
                                            <i class="metismenu-icon"></i>
                                           Pendding Booking
                                        </a>
                                    </li>
									 <li <?php if($page=="agentapprovebooking") {?>  class="mm-active" <?php } ?>>
                                        <a href="<?php echo base_url('/index.php/console/BookingController/index5'); ?>">
                                            <i class="metismenu-icon"></i>
                                           Approve Booking
                                        </a>
                                    </li>
									 <li <?php if($page=="agentrejectbooking") {?>  class="mm-active" <?php } ?>>
                                        <a href="<?php echo base_url('/index.php/console/BookingController/index6'); ?>">
                                            <i class="metismenu-icon"></i>
                                           Rejected Booking
                                        </a>
                                    </li>
									 <li <?php if($page=="agentcancelbooking") {?>  class="mm-active" <?php } ?>>
                                        <a href="<?php echo base_url('/index.php/console/BookingController/index7'); ?>">
                                            <i class="metismenu-icon"></i>
                                           Cancel Booking
                                        </a>
                                    </li>
                                </ul>
                            </li>
							
							<li>
                                <a href="#">
                                    <i class="metismenu-icon pe-7s-date"></i>
                                    User Bookings
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                </a>
                                <ul>
                                    <li <?php if($page=="userpenddingbooking") {?>  class="mm-active" <?php } ?>>
                                        <a href="<?php echo base_url('/index.php/console/BookingController/index0	'); ?>">
                                            <i class="metismenu-icon"></i>
                                           Pendding Booking
                                        </a>
                                    </li>
									 <li <?php if($page=="userapprovebooking") {?>  class="mm-active" <?php } ?>>
                                        <a href="<?php echo base_url('/index.php/console/BookingController/index1'); ?>">
                                            <i class="metismenu-icon"></i>
                                           Approve Booking
                                        </a>
                                    </li>
									 <li <?php if($page=="userrejectbooking") {?>  class="mm-active" <?php } ?>>
                                        <a href="<?php echo base_url('/index.php/console/BookingController/index2'); ?>">
                                            <i class="metismenu-icon"></i>
                                           Rejected Booking
                                        </a>
                                    </li>
									 <li <?php if($page=="usercancelbooking") {?>  class="mm-active" <?php } ?>>
                                        <a href="<?php echo base_url('/index.php/console/BookingController/index3'); ?>">
                                            <i class="metismenu-icon"></i>
                                           Cancel Booking
                                        </a>
                                    </li>
                                </ul>
                            </li>
							
							
							<li>
                                <a href="#">
                                    <i class="metismenu-icon pe-7s-light"></i>
                                    FAQ
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                </a>
                                <ul>
                                    <li <?php if($page=="faqcategory") {?>  class="mm-active" <?php } ?>>
                                        <a href="<?php echo base_url('/index.php/console/FAQCategoryController/index'); ?>">
                                            <i class="metismenu-icon"></i>
                                           FAQ Category
                                        </a>
                                    </li>
									 <li <?php if($page=="faq") {?>  class="mm-active" <?php } ?>>
                                        <a href="<?php echo base_url('/index.php/console/FAQController/index'); ?>">
                                            <i class="metismenu-icon"></i>
                                           FAQ
                                        </a>
                                    </li>
                                </ul>
                            </li>
							
							<li <?php if($page=="news") {?>  class="mm-active" <?php } ?>>
                                <a href="<?php echo base_url('/index.php/console/NewsController/index'); ?>">
                                    <i class="metismenu-icon pe-7s-news-paper"></i>
                                    News
                                   
                                </a>
                            </li>
							
							<li <?php if($page=="feedback") {?>  class="mm-active" <?php } ?>>
                                <a href="<?php echo base_url('/index.php/console/FeedbackController/index'); ?>">
                                    <i class="metismenu-icon pe-7s-note"></i>
                                    Feedback
                                  
                                </a>
                            </li>
							
                        </ul>
                    </div>
                </div>
			</div>    
</div>