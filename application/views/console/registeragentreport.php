<?php
$data["page"]="registeragentreport";
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
    <title> Register Agent Report</title>
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
                                    <i class="pe-7s-graph3 icon-gradient bg-amy-crisp">
                                    </i>
                                </div>
                                <div> Register Agent Report
                                   
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
                                           <canvas id="canvas"></canvas>
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

		var color = Chart.helpers.color;
		var barChartData = {
			labels: [
			<?php $start = $month = strtotime('2019-09-01');
			$end = strtotime(date('Y-m-d'));
			while($month < $end)
			{?>
			'<?php echo  date('F Y', $month); ?>',
			<?php
			$month = strtotime("+1 month", $month);
			} ?>
			],
			datasets: [{
				label: 'Total Agent',
				backgroundColor: color(window.chartColors.red).alpha(0.5).rgbString(),
				borderColor: window.chartColors.red,
				borderWidth: 1,
				data: [
					<?php $start = $month = strtotime('2019-09-01');
			$end = strtotime(date('Y-m-d'));
			while($month < $end)
			{
				$result=$this->db->query("select * from tbl_agent where DATE_FORMAT(registrationdate,'%m%Y')='".date('mY', $month)."'");
				
				?>
					<?php echo  $result->num_rows(); ?>,
			<?php
			$month = strtotime("+1 month", $month);
			} ?>
					
				]
			}]

		};

		window.onload = function() {
			var ctx = document.getElementById('canvas').getContext('2d');
			window.myBar = new Chart(ctx, {
				type: 'bar',
				data: barChartData,
				options: {
					responsive: true,
					legend: {
						position: 'top',
					},
					title: {
						display: true
					}
				}
			});

		};

</script>
</html>


