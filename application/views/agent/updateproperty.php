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
    <title>Upadte Agent Property</title>
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
                                <div class="page-title-icon">
                                    <i class="pe-7s-culture">
                                    </i>
                                </div>
                                <div>Update Property
                                    <div class="page-title-subheading">Here,You Can Manage Property.
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
								foreach($propertydata as $item)
								{
								?>
								 <form id="form1" class="" enctype="multipart/form-data" method="post" action="<?php echo base_url(); ?>index.php/agent/PropertyController/updatedata/<?php echo $item->propertyid; ?>">
									     <div class="position-relative row form-group"><label for="exampleCity" class="col-sm-2 col-form-label"><center>Category Name <span class="star">*</span></center></label>
                                            <div class="col-sm-9">
											<select name="txtcategory" id="txtcategory" class="form-control">
												<option value="">Please Select Category</option>
												<?php
												foreach($catdata as $item2)
												{
												?>
												<option <?php if($item->categoryid==$item2->categoryid) {?> selected <?php } ?> value="<?php echo $item2->categoryid; ?>"><?php echo $item2->categoryname; ?></option>
												<?php } ?>
											</select>
											</div>
                                        </div>   
										
										 <div class="position-relative row form-group"><label for="exampleCity" class="col-sm-2 col-form-label"><center>Area Name <span class="star">*</span></center></label>
                                            <div class="col-sm-9">
											<select name="txtarea" id="txtarea" class="form-control">
												<option value="">Please Select Area</option>
												<?php
												foreach($areadata as $item1)
												{
												?>
												<option  <?php if($item->areaid==$item1->areaid) {?> selected <?php } ?> value="<?php echo $item1->areaid; ?>"><?php echo $item1->areaname; ?></option>
												<?php } ?>
											</select>
											</div>
                                        </div>
										<div class="position-relative row form-group"><label for="examplePackageName" class="col-sm-2 col-form-label"><center>Title </center></label>
                                            <div class="col-sm-9"><input value="<?php echo $item->title; ?>" name="txttitle" id="txttitle" placeholder="Enter Title Name" type="text" class="form-control"></div>
                                        </div>
                                       <div class="position-relative row form-group"><label for="exampleDescription" class="col-sm-2 col-form-label"><center>Description</center></label>
                                           <div class="col-sm-9"><textarea value="<?php echo $item->description; ?>" name="txtdesc" id="txtdesc" placeholder="Enter Description" class="form-control"></textarea></div>
                                        </div> 
										 <div class="position-relative row form-group"><label for="exampleSquareFeet" class="col-sm-2 col-form-label"><center>Square Feet</center></label>
                                            <div class="col-sm-9"><input value="<?php echo $item->squarefit; ?>" name="txtsquarefeet" id="txtsquarefeet" placeholder="Enter Square Feet" type="text" class="form-control"></div>
                                        </div>
                                        <div class="position-relative row form-group"><label for="examplePrice" class="col-sm-2 col-form-label"><center>Day rent</center></label>
                                            <div class="col-sm-9"><input value="<?php echo $item->dayrent; ?>" name="txtdayrent" id="txtdayrent" placeholder="Enter Price" type="text" class="form-control"></div>
                                        </div>
										<div class="position-relative row form-group"><label for="examplePrice" class="col-sm-2 col-form-label"><center>Full rent</center></label>
                                            <div class="col-sm-9"><input value="<?php echo $item->fullrent; ?>" name="txtfullrent" id="txtfullrent" placeholder="Enter Price" type="text" class="form-control"></div>
                                        </div>
										<div class="position-relative row form-group"><label for="examplePrice" class="col-sm-2 col-form-label"><center>Sell</center></label>
                                            <div class="col-sm-9"><input value="<?php echo $item->sell; ?>" name="txtsell" id="txtsell" placeholder="Enter Price" type="text" class="form-control"></div>
                                        </div>
										<div class="position-relative row form-group"><label for="example" class="col-sm-2 col-form-label"><center>Bed Rooms</center></label>
                                            <div class="col-sm-9"><input value="<?php echo $item->rooms; ?>" name="txtbedroom" id="txtbedroom" placeholder="Enter BedRooms " type="text" class="form-control"></div>
                                        </div>
										<div class="position-relative row form-group"><label for="example" class="col-sm-2 col-form-label"><center>Hall</center></label>
                                            <div class="col-sm-9"><input value="<?php echo $item->hall; ?>" name="txthall" id="txthall" placeholder="Enter A Hall" type="text" class="form-control"></div>
                                        </div>
										<div class="position-relative row form-group"><label for="example" class="col-sm-2 col-form-label"><center>Kitchen</center></label>
                                            <div class="col-sm-9"><input value="<?php echo $item->kitchen; ?>" name="txtkitchen" id="txtkitchen" placeholder="Enter Kitchen" type="text" class="form-control"></div>
                                        </div>
										<div class="position-relative row form-group"><label for="example" class="col-sm-2 col-form-label"><center>Other Rooms</center></label>
                                            <div class="col-sm-9"><input value="<?php echo $item->otherroom; ?>" name="txtotherroom" id="txtotherroom" placeholder="Enter other Rooms " type="text" class="form-control"></div>
                                        </div>
										<div class="position-relative row form-group"><label for="example" class="col-sm-2 col-form-label"><center>Balcony</center></label>
                                            <div class="col-sm-9"><input value="<?php echo $item->balcony; ?>" name="txtbalcony" id="txtbalcony" placeholder="Enter Balcony" type="text" class="form-control"></div>
                                        </div>
										<div class="position-relative row form-group"><label for="example" class="col-sm-2 col-form-label"><center>Bathrooms</center></label>
                                            <div class="col-sm-9"><input value="<?php echo $item->bathroom; ?>"  name="txtbathroom" id="txtbathroom" placeholder="Enter Bathrooms" type="text" class="form-control"></div>
                                        </div>
										<div class="position-relative row form-group"><label for="example" class="col-sm-2 col-form-label"><center>Address</center></label>
                                            <div class="col-sm-9"><input value="<?php echo $item->address; ?>"name="txtaddress" id="txtaddress" placeholder="Enter Address" type="text" class="form-control"></div>
                                        </div>
										<div class="position-relative row form-group"><label for="example" class="col-sm-2 col-form-label"><center>LandMark</center></label>
                                            <div class="col-sm-9"><input value="<?php echo $item->landmark; ?>" name="txtlandmark" id="txtlandmark" placeholder="Enter LandMark" type="text" class="form-control"></div>
                                        </div>
										<div class="position-relative row form-group"><label for="example" class="col-sm-2 col-form-label"><center>Pincode</center></label>
                                            <div class="col-sm-9"><input value="<?php echo $item->pincode; ?>" name="txtpincode" id="txtpincode" placeholder="Enter Pincode" type="text" class="form-control"></div>
                                        </div>
										<div class="position-relative row form-group"><label for="example" class="col-sm-2 col-form-label"><center>Latitude</center></label>
                                            <div class="col-sm-9"><input value="<?php echo $item->lattitude; ?>" name="txtlatitude" id="txtlatitude" placeholder="Enter Latitude" type="text" class="form-control"></div>
                                        </div>
										<div class="position-relative row form-group"><label for="example" class="col-sm-2 col-form-label"><center>Longtitude</center></label>
                                            <div class="col-sm-9"><input value="<?php echo $item->longtitude; ?>"name="txtlongtitude" id="txtlongtitude" placeholder="Enter Longtitude" type="text" class="form-control"></div>
											</div>
										<div class="position-relative row form-group"><label for="example" class="col-sm-2 col-form-label"><center>Possession</center></label>
                                            <div class="col-sm-9"><input value="<?php echo $item->possessionby; ?>" name="txtpossessionby" id="txtpossessionby" placeholder="Enter PossessionBy" type="text" class="form-control"></div>
                                        </div>
										<div class="position-relative row form-group"><label for="example" class="col-sm-2 col-form-label"><center>Total Floor</center></label>
                                            <div class="col-sm-9"><input value="<?php echo $item->totalfloor; ?>" name="txttotalfloor" id="txttotalfloor" placeholder="Enter Total Floor" type="text" class="form-control"></div>
                                        </div>
										<div class="position-relative row form-group"><label for="example" class="col-sm-2 col-form-label"><center>Property On Floor</center></label>
                                            <div class="col-sm-9"><input value="<?php echo $item->propertyonfloor; ?>" name="txtpropertyonfloor" id="txtpropertyonfloor" placeholder="Enter Property On Floor" type="text" class="form-control"></div>
                                        </div>
										<div class="position-relative row form-group"><label for="example" class="col-sm-2 col-form-label"><center>OverLooking</center></label>
                                            <div class="col-sm-9"><input value="<?php echo $item->overlooking; ?>" name="txtoverlooking" id="txtoverlooking" placeholder="Enter OverLooking " type="text" class="form-control"></div>
                                        </div>
										<div class="position-relative row form-group"><label for="example" class="col-sm-2 col-form-label"><center>Number Of Guest</center></label>
                                            <div class="col-sm-9"><input value="<?php echo $item->noofguest; ?>" name="txtnoofguest" id="txtnoofguest" placeholder="Enter Number Of Guest " type="text" class="form-control"></div>
                                        </div>
										<div class="position-relative row form-group "><label for="exampleISActive" class="col-sm-2 col-form-label"><center>IsApprove</center></label>
                                           <div class="form-check">
                                                    <input type="radio" name="txtisapprove" class="form-check-input  ml-2"  value="Y" <?php if($item->isactive=="Y") { ?>checked="" <?php } ?>>
                                                    <label class="form-check-label  ml-4 "  for="exampleRadios1">
                                                       <h6>YES</h6>
                                                    </label>
                                                </div>
											  <div class="form-check ml-2">
                                                    <input type="radio" name="txtisapprove" class="form-check-input  ml-8 " value="N" <?php if($item->isactive=="N") { ?>checked="" <?php } ?>>
                                                    <label class="form-check-label  ml-10" for="exampleRadios1">
                                                       <h6>NO</h6>
                                                    </label>
                                                </div>
                                        </div>
										<div class="position-relative row form-group "><label for="exampleISActive" class="col-sm-2 col-form-label"><center>Furniture</center></label>
                                           <div class="form-check">
                                                    <input type="radio" name="txtfurniture" class="form-check-input  ml-2"value="Y" <?php if($item->isactive=="Y") { ?>checked="" <?php } ?>>
                                                    <label class="form-check-label  ml-4 "  for="exampleRadios1">
                                                       <h6>YES</h6>
                                                    </label>
                                                </div>
											  <div class="form-check ml-2">
                                                    <input type="radio" name="txtfurniture" class="form-check-input  ml-8 "  value="N" <?php if($item->isactive=="N") { ?>checked="" <?php } ?>>
                                                    <label class="form-check-label  ml-10" for="exampleRadios1">
                                                       <h6>NO</h6>
                                                    </label>
                                                </div>
                                        </div>
										<div class="position-relative row form-group"><label for="exampleCity" class="col-sm-2 col-form-label"><center>Registration Type<span class="star">*</span></center></label>
                                            <div class="col-sm-9">
											<select name="txtregi" id="txtregi" class="form-control">
												<option value="Residental">Residental</option>
												<option value="Commercial">Commercial</option>
												<option value="Other">Other</option>
												
											</select>
											</div>
                                        </div>
										<div class="position-relative row form-group"><label for="exampleCity" class="col-sm-2 col-form-label"><center>Water Source<span class="star">*</span></center></label>
                                            <div class="col-sm-9">
											<select name="txtwater" id="txtwater" class="form-control">
												<option value="smc">SMC</option>
												<option value="Bore">BORE</option>
												<option value="both">BOTH</option>
												
											</select>
											</div>
                                        </div>
										 <div class="position-relative row form-check">
                                        
                                             <div class=" offset-sm-8">
                                               <button  type="submit" name="btnsubmit" id="btnsubmit" class="btn-wide mb-2 mr-2 btn btn-warning btn-lg">Submit
                                                </button>
												<button type="button" onclick="window.location='<?php echo base_url(); ?>index.php/agent/PropertyController/index';" name="btncancel" id="btncancel" class="btn-wide mb-2 mr-2 btn btn-danger btn-lg">Cancel
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
			txtname:
			{
				required:true,
				alpha:true
			},
			txtdesc:
			{
				required:true,
				minlength:10
			},
			txtprice:
			{
				required:true,
				number:true
			},
			txtnoproperty:
			{
				required:true,
				number:true
			}
		},
		messages:
		{
			txtname:
			{
				required:"Please Enter name",
				alpha:"Only Alphabate allowed"
			},
			txtdesc:
			{
				required:"Pelase enter description",
				minlength:"Enter atleaset 10 characters"
			},
			txtprice:
			{
				required:"Please Enter Price",
				number:"Only numbers allowed"
			},
			txtprice:
			{
				required:"Please Enter No Of Property",
				number:"Only numbers allowed"
			}
		}
		
	});
	
});
</script>
<!-- Mirrored from demo.dashboardpack.com/architectui-html-pro/forms-layouts.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Oct 2019 09:09:52 GMT -->
</html>