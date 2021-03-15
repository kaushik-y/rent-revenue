<header class="toolbar-1">  
        <div id="top-toolbar" class="mdc-top-app-bar"> 
            <div class="theme-container row between-xs middle-xs h-100">
                <div class="row start-xs middle-xs">  
                    <button id="sidenav-toggle" class="mdc-button mdc-ripple-surface d-md-none d-lg-none d-xl-none">
                        <span class="mdc-button__ripple"></span>
                        <i class="material-icons">menu</i>
                    </button>
                   
                        <span class="d-flex center-xs middle-xs item">
                            <i class="material-icons mat-icon-sm"></i>
                            <span class="px-1"></span>
                        </span>
                        <span class="v-divider"></span> 
                        <span class="d-flex center-xs middle-xs item">
                            <i class="material-icons mat-icon-sm"></i> 
                            <span class="px-1"></span>
                        </span>
                        <span class="v-divider"></span>
                        <span class="d-flex center-xs middle-xs item">
                            <i class="material-icons mat-icon-sm"></i>  
                            <span class="px-1"></span>
                        </span>  
                           
                </div> 
                
                <div class="row end-xs middle-xs">
				
				<?php
				if(!$this->session->userdata("isloginuser"))
				{
				?>
				
				
                    <div class="mdc-menu-surface--anchor"> 
                        <button class="mdc-button mdc-ripple-surface mutable"> 
                            <span class="mdc-button__ripple"></span>
							<i class="material-icons mdc-button__icon mx-1">how_to_reg</i>
                            <span class="mdc-button__label"><span class="mutable">Registration</span></span>
                            <i class="material-icons mdc-button__icon m-0">arrow_drop_down</i>
                        </button> 
                        <div class="mdc-menu mdc-menu-surface">
                            <ul class="mdc-list" role="menu" aria-hidden="true" aria-orientation="vertical" tabindex="-1">
                                <li class="mdc-list-item" role="menuitem">
									<i class="material-icons mdc-text-field__icon text-muted">person</i>
									<a href="<?php echo base_url('/index.php/user/RegisterController/index');?>"class="mdc-button menu-item-has-children">
                                    <span class="mdc-list-item__text">User</span>
								</a>
                                </li>
                                <li class="mdc-list-item" role="menuitem">
									<i class="material-icons mdc-text-field__icon text-muted">group</i>
                                    <a href="<?php echo base_url('/index.php/user/RegisterController/index1'); ?>"class="mdc-button menu-item-has-children">
										 <span class="mdc-list-item__text">Agent</span>
									</a>
                                </li> 
								
                            </ul>
                        </div> 
                    </div>
					
                    <div class="mdc-menu-surface--anchor"> 
                        <button class="mdc-button mdc-ripple-surface mutable">
                            <span class="mdc-button__ripple"></span> 
								<i class="material-icons mdc-button__icon mx-1">person</i>
                            <span class="mdc-button__label flag-name d-none d-lg-flex d-xl-flex"><span class="mutable">login</span></span>
							<i class="material-icons mdc-button__icon m-0">arrow_drop_down</i>
                        </button> 
						<div class="mdc-menu mdc-menu-surface">
                            <ul class="mdc-list" role="menu" aria-hidden="true" aria-orientation="vertical" tabindex="-1">
								
								<li class="mdc-list-item" role="menuitem">
									<i class="material-icons mdc-text-field__icon text-muted">person</i>
									<a href="<?php echo base_url('/index.php/user/LoginController/index'); ?>"class="mdc-button menu-item-has-children">
										<span class="mdc-list-item__text">User Login</span>
									</a>
                                </li>
								
                                <li class="mdc-list-item" role="menuitem">
									<i class="material-icons mdc-text-field__icon text-muted">group</i>
                                    <a href="<?php echo base_url('/index.php/user/LoginController/index1'); ?>"class="mdc-button menu-item-has-children">
										<span class="mdc-list-item__text flag-name">Agent Login</span>
									</a>
                                </li> 
                            </ul>
                        </div>
                    </div>  
				<?php } else { ?>
                    <div class="mdc-menu-surface--anchor"> 
                        <button class="mdc-button mdc-ripple-surface"> 
                            <span class="mdc-button__ripple"></span>
                            <i class="material-icons mdc-button__icon mx-1">person</i>
                            <span class="mdc-button__label">account</span>
                            <i class="material-icons mdc-button__icon m-0">arrow_drop_down</i>
                        </button> 
                        <div class="mdc-menu mdc-menu-surface user-menu">
                            <ul class="mdc-list" role="menu" aria-hidden="true" aria-orientation="vertical" tabindex="-1">
                                <li class="user-info row start-xs middle-xs">                   
                                    <img src="<?php echo base_url(); ?>uploads/userprofile/<?php echo $this->session->userdata("Userdata")->userphoto;?>" width="50" height="60" class="d-block mw-100">
                                    <p class="m-0"><?php 
				                    
									echo $this->session->userdata("Userdata")->name; ?> <br> </p>
				
				
                                </li>
                                <li role="separator" class="mdc-list-divider m-0"></li> 
                                <li>
                                    <a href="<?php echo base_url('/index.php/user/MyProfileController/index'); ?>" class="mdc-list-item" role="menuitem">
                                        <i class="material-icons mat-icon-sm text-muted">account_circle</i> 
                                        <span class="mdc-list-item__text px-3">My Profile</span>
                                    </a> 
                                </li>
                                <li>
                                    <a href="<?php echo base_url('/index.php/user/PropertyController/index5'); ?>" class="mdc-list-item" role="menuitem">
                                        <i class="material-icons mat-icon-sm text-muted">home</i> 
                                        <span class="mdc-list-item__text px-3">My Properties</span>
                                    </a>
                                </li>
								<li>
                                    <a href="<?php echo base_url('/index.php/user/BookingController/index'); ?>" class="mdc-list-item" role="menuitem">
                                        <i class="material-icons mat-icon-sm text-muted">booking</i> 
                                        <span class="mdc-list-item__text px-3">My Booking</span>
                                    </a>
                                </li>
								<li>
                                    <a href="<?php echo base_url('/index.php/user/ChangepasswordController/index'); ?>" class="mdc-list-item" role="menuitem">
                                        <i class="material-icons mat-icon-sm text-muted">edit</i> 
                                        <span class="mdc-list-item__text px-3">Change Password</span>
                                    </a> 
                                </li>
								<li>
                                       <a href="<?php echo base_url('/index.php/user/LoginController/logout'); ?>" class="mdc-list-item" role="menuitem">
                                        <i class="material-icons mat-icon-sm text-muted">power_settings_new</i> 
                                        <span class="mdc-list-item__text px-3">Sign Out</span>
                                    </a>
                                </li>
                                 
                            </ul>
                        </div> 
                    </div> 
				<?php } ?>
                </div> 
            </div> 
        </div>  
        <div id="main-toolbar" class="mdc-elevation--z2">
            <div class="theme-container row between-xs middle-xs h-100"> 
                <a class="logo" href="index-2.html"> 
                     <img src="<?php echo base_url();?>client/assets/favicol.jpg" style="fill-rule:evenodd;" width="125" height="55">
                </a>  
                <div class="horizontal-menu d-none d-md-flex d-lg-flex d-xl-flex">   
                    <div class="mdc-menu-surface--anchor"> 
                        <a href="<?php echo base_url('/index.php/user/HomeController/index'); ?>" class="mdc-button menu-item-has-children"> 
                            <span class="mdc-button__ripple"></span> 
                            Home</span>
                        </a>  
                          
                    </div>   
					<div>
                        <a href="<?php echo base_url('/index.php/user/AboutusController/index'); ?>" class="mdc-button">
                            <span class="mdc-button__ripple"></span>
                            <span class="mdc-button__label">Why Us?</span> 
                        </a> 
                    </div>
						<div class="mdc-menu-surface--anchor"> 
						<a href="<?php echo base_url('/index.php/user/PropertyController/index'); ?>" class="mdc-button menu-item-has-children"> 
							<span class="mdc-button__ripple"></span> 
							Property
						</a>  
					</div> 
					 <div class="mdc-menu-surface--anchor"> 
                        <a href="<?php echo base_url('/index.php/user/PackageController/index'); ?>" class="mdc-button menu-item-has-children"> 
                            <span class="mdc-button__ripple"></span> 
                            Pricing</span>
                        </a>  
                          
                    </div> 
                  <div class="mdc-menu-surface--anchor"> 
                        <a href="<?php echo base_url('/index.php/user/AgentController/index'); ?>" class="mdc-button menu-item-has-children"> 
                            <span class="mdc-button__ripple"></span> 
                            Agent
                        </a>
						
                    </div>  
                    <div>

                        <a href="<?php echo base_url('/index.php/user/ContactController/index'); ?>" class="mdc-button">
                            <span class="mdc-button__ripple"></span>
                            <span class="mdc-button__label">Contact</span> 
                        </a> 
                    </div> 
                    
                </div>
                <div class="row middle-xs"> 
                   
                    
                    <a href="submit-property.html" class="mdc-fab mdc-fab--mini primary d-sm-none d-md-none d-lg-none d-xl-none">
                        <span class="mdc-fab__ripple"></span>
                        <span class="mdc-fab__icon material-icons">add</span>
                    </a>  
					<?php
				if(!$this->session->userdata("isloginuser"))
				{
				?>
				 <a href="<?php echo base_url('/index.php/user/LoginController/index'); ?>" class="mdc-button mdc-button--raised d-none d-sm-flex d-md-flex d-lg-flex d-xl-flex">
                        <span class="mdc-button__ripple"></span>
                        <span class="mdc-button__label">submit property</span> 
                    </a> 
				<?php }  else { 
				$sql=$this->db->query("select * from tbl_property where userid='".$this->session->userdata("Userdata")->userid."'");
				if($sql->num_rows()<=0)
				{
				
				?>
                    <a href="<?php echo base_url('/index.php/user/PropertyController/index4'); ?>" class="mdc-button mdc-button--raised d-none d-sm-flex d-md-flex d-lg-flex d-xl-flex">
                        <span class="mdc-button__ripple"></span>
                        <span class="mdc-button__label">submit property</span> 
                    </a> 
				<?php } else {
					?>
					  <a href="<?php echo base_url('/index.php/user/ErrorController/index'); ?>" class="mdc-button mdc-button--raised d-none d-sm-flex d-md-flex d-lg-flex d-xl-flex">
                        <span class="mdc-button__ripple"></span>
                        <span class="mdc-button__label">submit property</span> 
                    </a> 
					
					<?php
					
				} } ?>
					
				</div> 	
            </div>  
        </div>
        
    </header>  