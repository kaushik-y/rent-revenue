<div class="app-header header-shadow">
        <div class="app-header__logo">
            <img src="<?php echo base_url('public'); ?>/assets/images/rentrevenue.jpg" height="55" width="150"alt="rent">
             <div class="app-header__mobile-menu">
		<div>
                    <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
        </div>
            </div>
        </div>
        <div class="app-header__mobile-menu">
            <div>
                <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
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
		<div class="app-header__content">
            <!--<div class="app-header-left">
                <div class="search-wrapper">
                    <div class="input-holder">
                        <input type="text" class="search-input" placeholder="Type to search">
                        <button class="search-icon"><span></span></button>
                    </div>
                    <button class="close"></button>
                </div>
                <ul class="header-megamenu nav">
                    <li class="nav-item">
                        <a href="javascript:void(0);" data-placement="bottom" rel="popover-focus" data-offset="300" data-toggle="popover-custom" class="nav-link">
                            <i class="nav-link-icon pe-7s-gift"> </i>
                            Mega Menu
                            <i class="fa fa-angle-down ml-2 opacity-5"></i>
                        </a>
                        <div class="rm-max-width">
                            <div class="d-none popover-custom-content">
                                <div class="dropdown-mega-menu">
                                    <div class="grid-menu grid-menu-3col">
                                        <div class="no-gutters row">
                                            <div class="col-sm-6 col-xl-4">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item-header nav-item">
                                                        Overview
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="javascript:void(0);" class="nav-link">
                                                            <i class="nav-link-icon lnr-inbox">
                                                            </i>
                                                            <span>
                                                                Contacts
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="javascript:void(0);" class="nav-link">
                                                            <i class="nav-link-icon lnr-book">
                                                            </i>
                                                            <span>
                                                                Incidents
                                                            </span>
                                                            <div class="ml-auto badge badge-pill badge-danger">5
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="javascript:void(0);" class="nav-link">
                                                            <i class="nav-link-icon lnr-picture">
                                                            </i>
                                                            <span>
                                                                Companies
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a disabled="" href="javascript:void(0);" class="nav-link disabled">
                                                            <i class="nav-link-icon lnr-file-empty">
                                                            </i>
                                                            <span>
                                                                Dashboards
                                                            </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-6 col-xl-4">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item-header nav-item">
                                                        Favourites
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="javascript:void(0);" class="nav-link">
                                                            Reports Conversions
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="javascript:void(0);" class="nav-link">
                                                            Quick Start
                                                            <div class="ml-auto badge badge-success">New</div>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="javascript:void(0);" class="nav-link">Users &amp; Groups</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="javascript:void(0);" class="nav-link">Proprieties</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-6 col-xl-4">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item-header nav-item">Sales &amp; Marketing
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="javascript:void(0);" class="nav-link">Queues
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="javascript:void(0);" class="nav-link">Resource Groups
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="javascript:void(0);" class="nav-link">Goal Metrics
                                                            <div class="ml-auto badge badge-warning">3
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="javascript:void(0);" class="nav-link">Campaigns
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="btn-group nav-item">
                        <a  class="nav-link" data-toggle="dropdown" aria-expanded="false">
                            <span class="badge badge-pill badge-danger ml-0 mr-2">4</span>
                            Settings
                            <i class="fa fa-angle-down ml-2 opacity-5"></i>
                        </a>
                        <div tabindex="-1" role="menu" aria-hidden="true" class="rm-pointers dropdown-menu">
                            <div class="dropdown-menu-header">
                                <div class="dropdown-menu-header-inner bg-secondary">
                                    <div class="menu-header-image opacity-5" style="background-image: url('assets/images/dropdown-header/abstract2.jpg');"></div>
                                    <div class="menu-header-content">
                                        <h5 class="menu-header-title">Overview</h5>
                                        <h6 class="menu-header-subtitle">Dropdown menus for everyone</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="scroll-area-xs">
                                <div class="scrollbar-container">
                                    <h6 tabindex="-1" class="dropdown-header">Key Figures</h6>
                                    <button type="button" tabindex="0" class="dropdown-item">Service Calendar</button>
                                    <button type="button" tabindex="0" class="dropdown-item">Knowledge Base</button>
                                    <button type="button" tabindex="0" class="dropdown-item">Accounts</button>
                                    <div tabindex="-1" class="dropdown-divider"></div>
                                    <button type="button" tabindex="0" class="dropdown-item">Products</button>
                                    <button type="button" tabindex="0" class="dropdown-item">Rollup Queries</button>
                                </div>
                            </div>
                            <ul class="nav flex-column">
                                <li class="nav-item-divider nav-item"></li>
                                <li class="nav-item-btn nav-item">
                                    <button class="btn-wide btn-shadow btn btn-danger btn-sm">Cancel</button>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="dropdown nav-item">
                        <a aria-haspopup="true"  data-toggle="dropdown" class="nav-link" aria-expanded="false">
                            <i class="nav-link-icon pe-7s-settings"></i>
                            Projects
                            <i class="fa fa-angle-down ml-2 opacity-5"></i>
                        </a>
                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-rounded dropdown-menu-lg rm-pointers dropdown-menu">
                            <div class="dropdown-menu-header">
                                <div class="dropdown-menu-header-inner bg-success">
                                    <div class="menu-header-image opacity-1" style="background-image: url('assets/images/dropdown-header/abstract3.jpg');"></div>
                                    <div class="menu-header-content text-left">
                                        <h5 class="menu-header-title">Overview</h5>
                                        <h6 class="menu-header-subtitle">Unlimited options</h6>
                                        <div class="menu-header-btn-pane">
                                            <button class="mr-2 btn btn-dark btn-sm">Settings</button>
                                            <button class="btn-icon btn-icon-only btn btn-warning btn-sm">
                                                <i class="pe-7s-config btn-icon-wrapper"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="button" tabindex="0" class="dropdown-item"><i class="dropdown-icon lnr-file-empty"> </i>Graphic Design</button>
                            <button type="button" tabindex="0" class="dropdown-item"><i class="dropdown-icon lnr-file-empty"> </i>App Development</button>
                            <button type="button" tabindex="0" class="dropdown-item"><i class="dropdown-icon lnr-file-empty"> </i>Icon Design</button>
                            <div tabindex="-1" class="dropdown-divider"></div>
                            <button type="button" tabindex="0" class="dropdown-item"><i class="dropdown-icon lnr-file-empty"> </i>Miscellaneous</button>
                            <button type="button" tabindex="0" class="dropdown-item"><i class="dropdown-icon lnr-file-empty"> </i>Frontend Dev</button>
                        </div>
                    </li>
                </ul>   
			</div>-->
            <div class="app-header-right">
               


























                <div class="header-btn-lg pr-0">
                    <div class="widget-content p-0">
                        <div class="widget-content-wrapper">
                            <div class="widget-content-left">
                                <div class="btn-group">
                                    <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                        <img width="42" class="rounded-circle" src="assets/images/avatars/1.jpg" alt="">
                                        <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                    </a>
                                    <div tabindex="-1" role="menu" aria-hidden="true" class="rm-pointers dropdown-menu-lg dropdown-menu dropdown-menu-right">
                                        <div class="dropdown-menu-header">
                                            <div class="dropdown-menu-header-inner bg-info">
                                                <div class="menu-header-image opacity-2" style="background-image: url('assets/images/dropdown-header/city3.jpg');"></div>
                                                <div class="menu-header-content text-left">
                                                    <div class="widget-content p-0">
                                                        <div class="widget-content-wrapper">
                                                            <div class="widget-content-left mr-3">
                                                                <img width="42" class="rounded-circle"
                                                                     src="assets/images/avatars/1.jpg"
                                                                     alt="">
                                                            </div>
                                                            <div class="widget-content-left">
                                                                <div class="widget-heading">MY ACCOUNT
                                                                </div>
                                                                
                                                            </div>
                                                            <div class="widget-content-right mr-2">
                                                                <button onclick="window.location='<?php echo base_url(); ?>index.php/console/LoginController/logout';" class="btn-pill btn-shadow btn-shine btn btn-focus">Logout
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="scroll-area-xs" style="height: 0px;">
                                            <div class="scrollbar-container ps">
                                                <ul class="nav flex-column">
                                                    
                                                     <!--<li class="nav-item">
                                                        <a href="<?php echo base_url('/index.php/console/ProfileController/index1'); ?>" class="nav-link">Edit Profile
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="<?php echo base_url('/index.php/console/ChangepasswordController/index'); ?>" class="nav-link">Change Password
                                                        </a>
                                                    </li>-->
                                                 
                                                </ul>
                                            </div>
                                        </div>
                                       
                                        
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content-left  ml-3 header-user-info">
                                <div class="widget-heading">
									Admin
                                </div>
                               
                            </div>
                         
                        </div>
                    </div>
                </div>
               </div>
        </div>
    </div> 