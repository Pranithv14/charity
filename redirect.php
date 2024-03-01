<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Thank You For Donation</title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </head>

  <body>
    <div class="container">

      <div class="page-header">
        
        <p class="lead" style=color:blue>Thank you for your donation to Apya Charity.</p>
      </div>

      <strong><h3 style="color:#6da552">Thank You..!! Payment Done Sucessfully!!</h3> </strong>
   
    <p> Thank you for supporting Charity work with your generous regular donations. Your valuable gift is helping us provide long-term support to girls and poor people.
</p>
<p>Note : Check Your Email For Transaction Details</p>
 <?php

require_once('vendor/autoload.php');
 
            $API_KEY = "test_35b768e8da1dc13989fa65aa259";
            $AUTH_TOKEN = "test_04da40f24da0269e39487045d7b";
            $URL = "https://test.instamojo.com/api/1.1/";
 
            $api = new Instamojo\Instamojo($API_KEY, $AUTH_TOKEN,$URL);
 
            $payid = $_GET["payment_request_id"];
 
            try {
            $response = $api->paymentRequestStatus($payid);
            echo "<h5>Payment ID: " . $response['payments'][0]['payment_id'] . "</h5>" ;
            echo "<h5>Payment Name: " . $response['payments'][0]['buyer_name'] . "</h5>" ;
            echo "<h5>Payment Email: " . $response['payments'][0]['buyer_email'] . "</h5>" ;
            echo "<h5>Payment Mobile: " . $response['payments'][0]['buyer_phone'] . "</h5>" ;
            echo "<h5>Payment status: " . $response['payments'][0]['status'] . "</h5>" ;
            echo "<pre>";
 
            }
            catch (Exception $e) {
            print('Error: ' . $e->getMessage());
            }
        ?>
        <br>
        <p><a class="btn btn-warning" target="_blank" href="https://fuzz503.github.io/pranithvarma"> apya.com  
         <i class="fa fa-window-restore "></i></a></p>
        </div>
        <br><br><br>
    </article>           
<br><br><br>
</article>


  </body>
</html>
