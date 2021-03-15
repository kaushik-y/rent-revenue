<aside class="mdc-drawer mdc-drawer--modal page-sidenav">
                        <a href="#" class="h-0"></a>
						
                        <div class="mdc-card"> 
                            <div class="row start-xs middle-xs p-3">
                                 <img src="<?php echo base_url(); ?>uploads/userprofile/<?php echo $this->session->userdata("Userdata")->userphoto;?>" width="100" height="100" class="d-block mw-100">
                                <h2 class="text-muted fw-500 mx-3"><p class="m-0"><?php 
				echo $this->session->userdata("Userdata")->name; ?> <br> </p></h2>
                            </div>
                            <hr class="mdc-list-divider m-0">
                            <ul class="mdc-list">
                                <li>
                                    <a href="<?php echo base_url('/index.php/user/MyProfileController/index'); ?>" class="mdc-list-item py-1">
                                        <span class="mdc-list-item__graphic material-icons text-muted mx-3">person</span>
                                        <span class="mdc-list-item__text">Profile</span>
                                    </a>
                                </li>
                                <li>
                                   <a href="<?php echo base_url('/index.php/user/PropertyController/index5'); ?>" class="mdc-list-item py-1">
                                        <span class="mdc-list-item__graphic material-icons text-muted mx-3">view_list</span>
                                        <span class="mdc-list-item__text">My Properties</span>
                                    </a>
                                </li>
                                
                                <li>
                                    <a href="<?php echo base_url('/index.php/user/PropertyController/index4'); ?>" class="mdc-list-item py-1">
                                        <span class="mdc-list-item__graphic material-icons text-muted mx-3">add_circle</span>
                                        <span class="mdc-list-item__text">Submit Property</span>
                                    </a>
                                </li>
                                <li>
                                   <a href="<?php echo base_url('/index.php/user/LoginController/index'); ?>" class="mdc-list-item py-1">
                                        <span class="mdc-list-item__graphic material-icons text-muted mx-3">power_settings_new</span>
                                        <span class="mdc-list-item__text">Logout</span>
                                    </a>
                                </li>
                            </ul>  
                        </div>
                    </aside>