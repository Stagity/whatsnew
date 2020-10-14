<?php

error_reporting(0);

/**
 * Write data to log file.
 *
 * @param mixed $data
 * @param string $title
 *
 * @return bool
 */
function writeToLog($data, $title = '') {
 $log = "\n------------------------\n";
 $log .= date("Y.m.d G:i:s") . "\n";
 $log .= (strlen($title) > 0 ? $title : 'DEBUG') . "\n";
 $log .= print_r($data, 1);
 $log .= "\n------------------------\n";
 file_put_contents(getcwd() . '/hook.log', $log, FILE_APPEND);
 return true;
}

$defaults = array('form_name' => 'Pdfdownload','first_name' => '', 'last_name' => '', 'phone' => '', 'email' => '');

if (array_key_exists('saved', $_REQUEST)) {
 $defaults = $_REQUEST;
 writeToLog($_REQUEST, 'webform');

 $queryUrl = 'https://b24-04jvxe.bitrix24.com/rest/1/8hbabpv1f1zn58n2/crm.lead.add.json';
 $queryData = http_build_query(array(
 'fields' => array(
 "TITLE" => $_REQUEST['form_name'],
 "NAME" => $_REQUEST['first_name'],
 "LAST_NAME" => $_REQUEST['last_name'],
 "STATUS_ID" => "NEW",
 "OPENED" => "Y",
 "ASSIGNED_BY_ID" => 57,
 "PHONE" => array(array("VALUE" => $_REQUEST['phone'], "VALUE_TYPE" => "WORK" )),
 "EMAIL" => array(array("VALUE" => $_REQUEST['email'], "VALUE_TYPE" => "WORK" )),
 ),
 'params' => array("REGISTER_SONET_EVENT" => "Y")
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

 if (array_key_exists('error', $result)) echo "Error saving Lead: ".$result['error_description']."
";
}



echo'
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta http-equiv="refresh" content="5; URL=http://memoriesgroup.com/wp-content/uploads/2020/08/THRILLING-YOMA-ADVENTURE_without-car-and-driver.pdf" />
    

    <title>Sent</title>

    

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

   
  </head>
 



 <body>

    <!-- Begin page content -->
    <main role="main" class="container">
      <h1 class="mt-5">Thank you</h1>
      <p class="lead">We’ve sent the ‘THRILLING YOMA ADVENTURE’ detailed trip itinerary. Please check your inbox and spam folders!</p>
      
    </main>

    
  </body>
</html>';


?>



