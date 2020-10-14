<html>
    <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous" />

        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico" />

        <title>Payment Status</title>


    </head>

    <?php
//full response
$response = file_get_contents('php://input');
// echo "Response:<br/><textarea style='width:100%;height:80px'>".$response."</textarea>";

//each response params:
$version = $_REQUEST["version"];
$request_timestamp = $_REQUEST["request_timestamp"];
$merchant_id = $_REQUEST["merchant_id"];
$currency = $_REQUEST["currency"];
$order_id = $_REQUEST["order_id"];
$amount = $_REQUEST["amount"];
$invoice_no = $_REQUEST["invoice_no"];
$transaction_ref = $_REQUEST["transaction_ref"];
$approval_code = $_REQUEST["approval_code"];
$eci = $_REQUEST["eci"];
$transaction_datetime = $_REQUEST["transaction_datetime"];
$payment_channel = $_REQUEST["payment_channel"];
$payment_status = $_REQUEST["payment_status"];
$channel_response_code = $_REQUEST["channel_response_code"];
$channel_response_desc = $_REQUEST["channel_response_desc"];
$masked_pan = $_REQUEST["masked_pan"];
$stored_card_unique_id = $_REQUEST["stored_card_unique_id"];
$backend_invoice = $_REQUEST["backend_invoice"];
$paid_channel = $_REQUEST["paid_channel"];
$recurring_unique_id = $_REQUEST["recurring_unique_id"];
$paid_agent = $_REQUEST["paid_agent"];
$payment_scheme = $_REQUEST["payment_scheme"];
$user_defined_1 = $_REQUEST["user_defined_1"];
$user_defined_2 = $_REQUEST["user_defined_2"];
$user_defined_3 = $_REQUEST["user_defined_3"];
$user_defined_4 = $_REQUEST["user_defined_4"];
$user_defined_5 = $_REQUEST["user_defined_5"];
$browser_info = $_REQUEST["browser_info"];
$ippPeriod = $_REQUEST["ippPeriod"];
$ippInterestType = $_REQUEST["ippInterestType"];
$ippInterestRate = $_REQUEST["ippInterestRate"];
$ippMerchantAbsorbRate = $_REQUEST["ippMerchantAbsorbRate"];
$payment_scheme = $_REQUEST["payment_scheme"];
$process_by = $_REQUEST["process_by"];
$sub_merchant_list = $_REQUEST["sub_merchant_list"];
$hash_value = $_REQUEST["hash_value"];

$checkHashStr = $version . $request_timestamp . $merchant_id . $order_id .
    $invoice_no . $currency . $amount . $transaction_ref . $approval_code .
    $eci . $transaction_datetime . $payment_channel . $payment_status .
    $channel_response_code . $channel_response_desc . $masked_pan .
    $stored_card_unique_id . $backend_invoice . $paid_channel . $paid_agent .
    $recurring_unique_id . $user_defined_1 . $user_defined_2 . $user_defined_3 .
    $user_defined_4 . $user_defined_5 . $browser_info . $ippPeriod .
    $ippInterestType . $ippInterestRate . $ippMerchantAbsorbRate . $payment_scheme .
    $process_by . $sub_merchant_list;

$SECRETKEY = "276D30F6AA042E10F5CBE8D546FB826FEE74719D24A00FCEC4DA62BC400D035B";
$checkHash = hash_hmac('sha256', $checkHashStr, $SECRETKEY, false);
// echo "checkHash: ".$checkHash."<br/><br/>";


    // write log to files

    $log = "\n------------------------\n";
    $log .= date("Y.m.d G:i:s") . "\n";
    $log .= 'order_id = '. $order_id . "\n";
    $log .= 'amount = ' . $amount . "\n";
    $log .= 'invoice_no = ' . $invoice_no . "\n";
    $log .= 'transaction_ref = ' . $transaction_ref . "\n";
    $log .= 'Approval_code = ' . $approval_code . "\n";
    $log .= 'Payment Status = '. $payment_status . "\n";
    $log .= 'Payment Status = '. $channel_response_desc . "\n";
    $log .= 'Channel Respose = ' . $channel_response_code . "\n";
    $log .= "\n------------------------\n";
    file_put_contents(getcwd() . '/paymentusd.log', $log, FILE_APPEND); 



    if ( $payment_status == 000) {
        
        // echo "it is safe to use";
    
        echo '<body class="bg-light">
        <div class="container">
            <div class="py-5 text-center">
                <img class="d-block mx-auto mb-4" src="https://memories-travel.com/whatsnew/assets/img/header/success.png" alt="" width="72" height="72" />
                <h2>Awesome!</h2>
                <p class="lead"></p>
                <div>
                    Your booking has been confirmed.
                    <div>Please check your mail for invoices.</div>
                </div>
                <ul class="list-inline pt-4">
                  
                </ul>
                <p></p>
            </div>
        </div>
    
    
    
    </body>';

        
    } else {
        
        // echo "don't trust this results";
        echo '<body class="bg-light">
        <div class="container">
            <div class="py-5 text-center">
                <img class="d-block mx-auto mb-4" src="https://memories-travel.com/whatsnew/assets/img/header/unsuccess.png" alt="" width="72" height="72" />
                <h2>Sorry!</h2>
                <p class="lead"></p>
                <div>
                    Your payment was unsuccessful.
                    <div>Please contact to our support team.</div>
                </div>
                <ul class="list-inline pt-4">
                   
                </ul>
                <p></p>
            </div>
        </div>
    
    
    
    </body>';
    }
    
    
     
    
    
    ?>


</html>