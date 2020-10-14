<?php

$gemOrderID = time();

if($_POST['formSubmit'] == "Submit") 
  {
    // Get price 
    $varPriceZero = $_POST['price-0'];
    $varPriceOne = $_POST['price-1'];
    $varPriceTwo = $_POST['price-2'];
    $varPriceThree = $_POST['price-3'];
    $varPriceFour = $_POST['price-4'];
    $varPriceFive = $_POST['price-5'];


    // Get the Quantity
    $varQuantityZero = $_POST['quantity-0'];
    $varQuantityOne = $_POST['quantity-1'];
    $varQuantityTwo = $_POST['quantity-2'];
    $varQuantityThree = $_POST['quantity-3'];
    $varQuantityFour = $_POST['quantity-4'];
    $varQuantityFive = $_POST['quantity-5'];

    // Redefine the price to prevent the inspect value change
    $rePriceZero = 230 * $varQuantityZero;
    $rePriceOne = 161 * $varQuantityOne;
    $rePriceTwo = 230 * $varQuantityTwo;
    $rePriceThree = 184 * $varQuantityThree;
    $rePriceFour = 600 * $varQuantityFour;
    $rePriceFive = 161 * $varQuantityFive;

    //Assig the Packages name if quanity is over 0
    if($varQuantityZero > 0){
      $varPackageZero = "Thrilling Yoma Adventure (With Car)" .'='. $varQuantityZero .',';
    }

    if($varQuantityOne > 0){
      $varPackageOne = "Thrilling Yoma Adventure (Without Car)" .'='. $varQuantityOne .',';
    }

    if($varQuantityTwo > 0){
      $varPackageTwo = "Enchanting Ruby Land (With Car)" .'='. $varQuantityTwo .',';
    }

    if($varQuantityThree > 0){
      $varPackageThree = "Enchanting Ruby Land (Without Car)" .'='. $varQuantityThree .',';
    }

    if($varQuantityFour > 0){
      $varPackageFour = "Charming Palaung Cabin" .'='. $varQuantityFour .',';
    }

    if($varQuantityFive > 0){
      $varPackageFive = "Enchanting Ruby Land (Child)" .'='. $varQuantityFive .',';
    }


    // Calculate Total Amount
    $total_amount = $rePriceZero + $rePriceOne + $rePriceTwo + $rePriceThree + $rePriceFour + $rePriceFive;

    // convert to 12 digits
    $intValue = $total_amount * 100;
    $privateValue = sprintf("%012d", $intValue);

    // Get Full Name
    $varFullName = $_POST['name'];
    $varEmail = $_POST['email'];
    $varPhoneNumber = $_POST['dealer-phone'];
    
  }

// data to bitrix24

/**
 * Write data to log file.
 *
 * @param mixed $data
 * @param string $title
 *
 * @return bool
 */



function writeToLog($data, $title = '')
{
    $log = "\n------------------------\n";
    $log .= date("Y.m.d G:i:s") . "\n";
    $log .= (strlen($title) > 0 ? $title : 'DEBUG') . "\n";
    $log .= print_r($data, 1);
    $log .= "\n------------------------\n";
    file_put_contents(getcwd() . '/hook.log', $log, FILE_APPEND);
    return true;
}

$defaults = array('form_name' => 'MT Whatsnew', 'name' => '', 'last_name' => '', 'phone' => '', 'email' => '');

if (array_key_exists('saved', $_REQUEST)) {
    $defaults = $_REQUEST;
    writeToLog($_REQUEST, 'webform');

    $queryUrl = 'https://mgcrm.yomagroup.io/rest/1/qugl8xcovfjv1b5e/crm.lead.add.json';

    $queryData = http_build_query(array(
      'fields' => array(
          "TITLE" => $_REQUEST['form_name'],
          "NAME" => $_REQUEST['name'],
          "UF_CRM_1602683834469" => $varPackageZero,
          "UF_CRM_1602683850757" => $varPackageOne,
          "UF_CRM_1602683859702" => $varPackageTwo,
          "UF_CRM_1602683870386" => $varPackageThree,
          "UF_CRM_1602683880627" => $varPackageFour,
          "UF_CRM_1602683898313" => $varPackageFive,
          "UF_CRM_1602683908435" => $gemOrderID,
          "UF_CRM_1592918642354" => 'USD',
          "STATUS_ID" => "NEW",
          "OPENED" => "Y",
          "ASSIGNED_BY_ID" => 57,
          "PHONE" => array(array("VALUE" => $_REQUEST['dealer-phone'], "VALUE_TYPE" => "WORK")),
          "EMAIL" => array(array("VALUE" => $_REQUEST['email'], "VALUE_TYPE" => "WORK")),

      ),
      'params' => array("REGISTER_SONET_EVENT" => "Y"),
  ));

    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_POST => 1,
        CURLOPT_HEADER => 0,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_URL => $queryUrl,
        CURLOPT_POSTFIELDS => $queryData,
    ));

    $result = curl_exec($curl);
    curl_close($curl);

    $result = json_decode($result, 1);
    writeToLog($result, 'webform result');

    if (array_key_exists('error', $result)) {
        echo "Error saving Lead: " . $result['error_description'] . "
   ";
    }

}


	//Merchant's account information
    $merchant_id = "702840000000251"; //Get MerchantID when opening account with 2C2P
    $secret_key = "276D30F6AA042E10F5CBE8D546FB826FEE74719D24A00FCEC4DA62BC400D035B"; //Get SecretKey from 2C2P PGW Dashboard
	
	//Transaction information
  $payment_description  = '' . $varPackageZero . '' . $varPackageOne . '' . $varPackageTwo . '' . $varPackageThree . '' . $varPackageFour . '' . $varPackageFive . '' . $varFullName . ',' . $varEmail . ',' . $varPhoneNumber . '';
	$order_id  = $gemOrderID;
	$currency = "840";
	$amount  = $privateValue;
	
	//Request information
    $version = "8.5";
    $payment_url = "https://t.2c2p.com/RedirectV3/payment";
    $result_url_1 = "https://memories-travel.com/whatsnew/resultsusd.php";
	
	//Construct signature string
	$params = $version.$merchant_id.$payment_description.$order_id.$currency.$amount.$result_url_1;
	$hash_value = hash_hmac('sha256',$params, $secret_key,false);	//Compute hash value
	
	echo 'Payment information:';
echo '<html>
	<body hidden>
	<form id="myform" method="post" action="' . $payment_url . '">
		<input type="hidden" name="version" value="' . $version . '"/>
		<input type="hidden" name="merchant_id" value="' . $merchant_id . '"/>
		<input type="hidden" name="currency" value="' . $currency . '"/>
		<input type="hidden" name="result_url_1" value="' . $result_url_1 . '"/>
		<input type="hidden" name="hash_value" value="' . $hash_value . '"/>
    PRODUCT INFO : <input type="text" name="payment_description" value="' . $payment_description . '"  readonly/><br/>
		ORDER NO : <input type="text" name="order_id" value="' . $order_id . '"  readonly/><br/>
		AMOUNT: <input type="text" name="amount" value="' . $amount . '" readonly/><br/>
		<input type="submit" name="myform" value="Confirm" />
    </form>
    <script type="text/javascript">
  document.getElementById("myform").submit();
</script>
	</body>
	</html>';	 


?>