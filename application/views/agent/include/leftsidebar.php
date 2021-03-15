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
                                <a href="<?php echo base_url('/index.php/agent/DashboardController/index'); ?>">
                                    <i class="metismenu-icon pe-7s-rocket"></i>
                                    Dashboards
                                </a>
                            </li>
							 <li <?php if($page=="package") {?>  class="mm-active" <?php } ?>>
                                <a href="<?php echo base_url('/index.php/agent/PackageController/index'); ?>">
                                    <i class="metismenu-icon pe-7s-box2"></i>
                                    Package
								</a>
                            </li>  
							
                            <li <?php if($page=="agentpackage") {?>  class="mm-active" <?php } ?>>
                                <a href="<?php echo base_url('/index.php/agent/AgentPackageController/index'); ?>">
                                    <i class="metismenu-icon pe-7s-plugin">
									</i>Agency Package
                                </a>
                            </li>
							
							<li>
                                <a href="#">
                                    <i class="metismenu-icon pe-7s-home"></i>
                                    Agent Property
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                </a>
                                <ul>
                                    <li <?php if($page=="newproperty") {?>  class="mm-active" <?php } ?>>
                                        <a href="<?php echo base_url('/index.php/agent/PropertyController/index'); ?>">
                                            <i class="metismenu-icon"></i>
                                            New Property
                                        </a>
                                    </li>
									
                                    <li <?php if($page=="approveproperty") {?>  class="mm-active" <?php } ?>>
                                        <a href="<?php echo base_url('/index.php/agent/PropertyController/index1'); ?>">
                                            <i class="metismenu-icon">
                                            </i>Approve Property
                                        </a>
                                    </li>
									
									<li <?php if($page=="rejectproperty") {?>  class="mm-active" <?php } ?>>
                                        <a href="<?php echo base_url('/index.php/agent/PropertyController/index2'); ?>">
                                            <i class="metismenu-icon">
                                            </i>Reject Property
                                        </a>
                                    </li>
                                   
                                </ul>
                            </li>				
                              
							<li>
                                <a href="#">
                                    <i class="metismenu-icon pe-7s-date"></i>
                                    Agent Bookings
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                </a>
                                <ul>
									 <li <?php if($page=="approvebooking") {?>  class="mm-active" <?php } ?>>
                                        <a href="<?php echo base_url('/index.php/agent/BookingController/index1'); ?>">
                                            <i class="metismenu-icon"></i>
                                           Approve Booking
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
                                        <a href="<?php echo base_url('/index.php/agent/FAQCategoryController/index'); ?>">
                                            <i class="metismenu-icon"></i>
                                           FAQ Category
                                        </a>
                                    </li>
									 <li <?php if($page=="faq") {?>  class="mm-active" <?php } ?>>
                                        <a href="<?php echo base_url('/index.php/agent/FAQController/index'); ?>">
                                            <i class="metismenu-icon"></i>
                                           FAQ
                                        </a>
                                    </li>
                                </ul>
                            </li>
							
							<li <?php if($page=="news") {?>  class="mm-active" <?php } ?>>
                                <a href="<?php echo base_url('/index.php/agent/NewsController/index'); ?>">
                                    <i class="metismenu-icon pe-7s-news-paper"></i>
                                    News
                                   
                                </a>
                            </li>
							
							
                        </ul>
                    </div>
                </div>
			</div>    
</div>