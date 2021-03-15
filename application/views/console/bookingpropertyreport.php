<?php
$data["page"]="bookingpropertyreport";
?>
<!doctype html>
<html lang="en">


<!-- Mirrored from demo.dashboardpack.com/architectui-html-pro/dashboards-commerce.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Oct 2019 09:09:26 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<link href="<?php echo base_url('public') ?>/main.cba69814a806ecc7945a.css" rel="stylesheet">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title> Booking Property Report</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no"
    />
    <meta name="description" content="This dashboard was created as an example of the flexibility that Architect offers.">

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">

<link href="main.cba69814a806ecc7945a.css" rel="stylesheet"></head>
<body>
<div class="app-container app-theme-white body-tabs-shadow fixed-header fixed-sidebar">
    
	<?php $this->load->view('console/include/header');	?>
	<div class="app-main">
             
				
				 <?php $this->load->view('console/include/leftsidebar',$data); ?>
				<div class="app-main__outer">
            <div class="app-main__inner">
                    <div class="app-page-title">
                        <div class="page-title-wrapper">
                            <div class="page-title-heading">
                                <div class="page-title-icon">
                                    <i class="pe-7s-graph icon-gradient bg-amy-crisp">
                                    </i>
                                </div>
                                <div>Booking Property Report
                                   
                                </div>
                            </div>
                            </div>
                    </div>           
                    <div class="tab-content">
                        <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                            <div class="row">
  <div class="col-md-2"></div>                              
							  <div class="col-md-8">
                                    <div class="main-card mb-3 card">
                                        <div class="card-body">
                                            <h5 class="card-title"></h5>
                                            <canvas id="chart-area1"></canvas>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="col-md-2"></div>                  
                            </div>
        
                        </div>
                        
                    </div>
        
                </div>
		</div>
	</div>
</div>
<div class="app-drawer-overlay d-none animated fadeIn"></div><script type="text/javascript" src="<?php echo base_url('public') ?>/assets/scripts/main.cba69814a806ecc7945a.js"></script></body>

<!-- Mirrored from demo.dashboardpack.com/architectui-html-pro/dashboards-commerce.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Oct 2019 09:09:28 GMT -->

<script>

	var randomScalingFactor = function() {
			return Math.round(Math.random() * 100);
		};
		function getRandomColor() {
  var letters = '0123456789ABCDEF';
  var color = '#';
  for (var i = 0; i < 6; i++) {
    color += letters[Math.floor(Math.random() * 16)];
  }
  return color;
}

		var config = {
			type: 'pie',
			data: {
				datasets: [{
					data: [
						<?php
						$result=$this->db->query("select *,(select count(*) from tbl_booking where propertyid=tbl_property.propertyid) as totalbooking from tbl_property");
						foreach($result->result() as $row)
						{
						?>
						<?php echo $row->totalbooking; ?>,
						<?php } ?>
					],
					backgroundColor: [
						
					<?php
						$result=$this->db->query("select *,(select count(*) from tbl_booking where propertyid=tbl_property.propertyid) as totalbooking from tbl_property");
						foreach($result->result() as $row)
						{
						?>
						getRandomColor(),
						<?php } ?>
					],
					label: 'Dataset 1'
				}],
				labels: [
					<?php
						$result=$this->db->query("select *,(select count(*) from tbl_booking where propertyid=tbl_property.propertyid) as totalbooking from tbl_property");
						foreach($result->result() as $row)
						{
						?>
					'<?php echo $row->title; ?>',
						<?php } ?>
				]
			},
			options: {
				responsive: true
			}
		};

		window.onload = function() {
			var ctx = document.getElementById('chart-area1').getContext('2d');
			window.myPie = new Chart(ctx, config);
		};



</script>
</html>


