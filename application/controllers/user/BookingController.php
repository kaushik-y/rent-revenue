<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 require_once(APPPATH . "/third_party/paytmlib/config_paytm.php");
 require_once(APPPATH . "/third_party/paytmlib/encdec_paytm.php");
class BookingController extends CI_Controller
{
	function __construct()
	
	{
		
        parent::__construct();
		$this->load->model('user/BookingModel');
		$this->load->model('user/PropertyModel');
		$this->load->model('user/InquiryModel');
		
		
		if(!$this->session->userdata('isloginuser'))
		{
			redirect(base_url()."/index.php/user/LoginController/index");
		}
    }
	

    public function PaytmGateway($oid,$amt,$pid,$type,$startdate,$enddate,$noofperssons,$remark)
    {
        $orderId = $oid; /// must be unique
      $this->StartPayment($orderId,$amt,$pid,$type,$startdate,$enddate,$noofperssons,$remark);
    }
    public function StartPayment($orderId,$amt,$pid,$type,$startdate,$enddate,$noofperssons,$remark)
    {
        $paramList["MID"] = PAYTM_MERCHANT_MID;
        $paramList["ORDER_ID"] = $orderId;     
        $paramList["CUST_ID"] = 344;   /// according to your logic
        $paramList["INDUSTRY_TYPE_ID"] = 'RETIAL';
        $paramList["CHANNEL_ID"] = 'WEB';
        $paramList["TXN_AMOUNT"] = $amt;
        $paramList["WEBSITE"] = PAYTM_MERCHANT_WEBSITE;
        $paramList["CALLBACK_URL"] = "http://localhost:8080/FinalProject/index.php/user/BookingController/PaytmResponse/".$orderId."/".$amt."/".$pid."/".$type."/".$startdate."/".$enddate."/".$noofperssons."/".$remark;
        $paramList["MSISDN"] = '777777777'; //Mobile number of customer
        $paramList["EMAIL"] ='foo@gmail.com';
        $paramList["VERIFIED_BY"] = "EMAIL"; //
        $paramList["IS_USER_VERIFIED"] = "YES"; //
      //  print_r($paramList);
        $checkSum = getChecksumFromArray($paramList,PAYTM_MERCHANT_KEY);

        ?>

        <!--submit form to payment gateway OR in api environment you can pass this form data-->
   
        <form id="myForm" action="<?php echo PAYTM_TXN_URL ?>" method="post">
        <?php
         foreach ($paramList as $a => $b) {
        echo '<input type="hidden" name="'.htmlentities($a).'" value="'.htmlentities($b).'">';
       }
       ?>
            <input type="hidden" name="CHECKSUMHASH" value="<?php echo $checkSum ?>">
        </form>
        <script type="text/javascript">
            document.getElementById('myForm').submit();
         </script>
 
<?php
    }
	public function index2()
	{
		$this->load->view('user/payment');
	}
    /////////// response from paytm gateway////////////
    public function PaytmResponse($orderId,$amt,$pid,$type,$startdate,$enddate,$noofperssons,$remark)
    {
        $paytmChecksum = "";
        $paramList = array();
        $isValidChecksum = "FALSE";

        $paramList = $_POST;
        echo "<pre>";
      //  print_r($paramList);
   
        $paytmChecksum = isset($_POST["CHECKSUMHASH"]) ? $_POST["CHECKSUMHASH"] : ""; //Sent by Paytm pg

        $isValidChecksum = verifychecksum_e($paramList, PAYTM_MERCHANT_KEY, $paytmChecksum); //will return TRUE or FALSE string.

        if($isValidChecksum == "TRUE")
        {
            if ($_POST["STATUS"] == "TXN_SUCCESS")
            { /// put your to save into the database // tansaction successfull
		
					$data=array(
			
			     "userid"=>$this->session->userdata("Userdata")->userid,
			     "transactionno"=>$orderId,
				 "propertyid"=>$pid,
				 "totalpayment"=> $amt,
				 "type"=>$type,
				 "startdate"=>$startdate,
				 "enddate"=>$enddate,
				 "noofperssons" =>$noofperssons,
				 "remark"=>$remark,
				 "isapprove"=>'N',	
				 "ispay"=>'Y',
				 "paytype"=>'Paytm'
				
				
			);
			$result=$this->BookingModel->insertdata($data);
			$this->session->set_flashdata("msg","insert succsesfuly");
			redirect('user/BookingController/index2
			');
            }
            else {/// failed
                var_dump($paramList);
            }
        }else
        {//////////////suspicious
           // put your code here
       
        }
    } 
	public function index()
	{
		
		$this->load->model('user/BookingModel');
		$data["booking"]=$this->BookingModel->getbookingproperty();
		$this->load->view('user/mybooking',$data);
	}
	 public function index1($id)
	{
		$data["id"]=$id;
		$this->load->view('user/mybooking',$data);
	}
	public function booking($id)
	{
			$this->load->model('user/BookingModel');
		$total="0";
		if($this->input->post('txttype')=="dayrent")
		{
			$total=$this->input->post('txtdayrent');
		}
		else if($this->input->post('txttype')=="Fullrent")
		{
			$total=$this->input->post('txtfullrent');
		}
		else
		{
			$total=$this->input->post('txtsalerent');
		}
		if($this->input->post('txttype')=="sell")
		{
			$data=array(
			
                "userid"=>$this->session->userdata("Userdata")->userid,
				"propertyid"=>$id,
				"inquirytext"=>$this->input->post('txttext'),
				"status"=>'Active',
				
			);
			$result=$this->InquiryModel->insertdata($data);
			$this->session->set_flashdata("msg","insert succsesfuly");
		
		}
		else
		{
		
			$result=$this->BookingModel->check($this->input->post('txtstartingdate'),$this->input->post('txtendingdate'),$id);
			if($result)
			{
				$this->load->view('user/dateerror');
			}
			else
			{
				$r=$this->BookingModel->checkperson($id);
				if($this->input->post('txtnoofperson')>$r)
				{
					
				   $this->load->view('user/noofpersonerror');
				}
				else
				{
					$this->PaytmGateway(rand(11111,99999),$total,$id,$this->input->post('txttype'),date('Y-m-d',strtotime($this->input->post('txtstartingdate'))),$this->input->post('txtendingdate'),$this->input->post('txtnoofperson'),$this->input->post('txtremark'));
				}
			}
			
		/*	$data=array(
			
                "userid"=>$this->session->userdata("Userdata")->userid,
				"propertyid"=>$id,
				"type"=>$this->input->post('txttype'),
				"startdate"=>date('Y-m-d',strtotime($this->input->post('txtstartingdate'))),
				"enddate"=>$this->input->post('txtendingdate'),
				"totalpayment"=> $total,
				"isapprove"=>'N',
				"noofperssons" =>$this->input->post('txtnoofperson'),
				"remark"=>$this->input->post('txtremark')
			);
			$result=$this->BookingModel->insertdata($data);
			$this->session->set_flashdata("msg","insert succsesfuly");*/
		}
		//redirect('user/BookingController/index');
	}
	
}	