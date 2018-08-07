# websms
Websms Bulk Messaging Plugin
Signup for a test account at 
https://websms.co.tz
Description
Parameters	Meaning	Description
  Example 
<?php
include 'config.php';
date_default_timezone_set('Africa/Nairobi');
$datetime_variable = new DateTime();
$datetime_formatted = date_format($datetime_variable, 'Y-m-d H:i:s');
$account= $_POST['account'];
$account= intval($account);
$stmt=$conn->query("SELECT * FROM borrower WHERE borrower = '$account'");
$user = array();
if ($stmt->num_rows > 0)
{
while ($row=$stmt->fetch_assoc())
{
        $name = $row['name'];
        $points = $row['points'];
        $balance = $row['balance'];
        $phone = $row['phone'];
        $user[status] = "success";
        $user[account] = $account;
        $user[name] = $name;
        echo json_encode($user);
}
}
$api_key = '35B367HJHSADFB1mbmb9C7';
//$api_key = '35B46B0SFSFSFF4760073';
$contacts = $phone;
$from = 'Info';
$sms_text = urlencode("Dear ".$name.", Your Loan  balance is Tsh  ".$balance."", and you have erned  ".$points."");
$api_url = "http://bulk.websms.co.tz/app/smsapi/index.php?key=".$api_key."&campaign=16&routeid=7&type=text&contacts=".$contact$
//Submit to server
$response = file_get_contents( $api_url);
echo $response;
?>

