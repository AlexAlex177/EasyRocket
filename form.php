
<?php

// Server side validation
// header('Access-Control-Allow-Origin: *');


$name = $_POST['name'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$message = $_POST['message'];


$from = "mailfrom: rushighadi9@gmail.com";
$to = "mailto: vishal@vrnl.net";
$subject = "Mail From  technicalbazaar@gmail.com ";
$cc = "mailto:  vishal@vrnl.net";
$txt ="";
$txt .="<html><body>";
$txt .= "<table style='border-collapse: collapse; width: 30%; background: #ddd7d769;'><tr>
<th style='border: 1px solid #0000004f; text-align: left; padding: 8px;'>First Name :</th>";
$txt .= "<td  style='  border: 1px solid #0000004f;text-align: left;padding: 8px;'>".$name."</td></tr>";
$txt .= "<tr><th style='border: 1px solid #0000004f; text-align: left; padding: 8px;'>Surname :</th>";
$txt .= "<td style='border: 1px solid #0000004f; text-align: left; padding: 8px;'>".$lname."</td></tr>";

 $txt .= "<tr 'background: lightgrey;'><th style='border: 1px solid #0000004f; text-align: left; padding: 8px;'>Email :</th>";
 $txt .= "<td style='border: 1px solid #0000004f; text-align: left; padding: 8px;'>".$email."</td></tr>";

$txt .= "<tr><th style='border: 1px solid #0000004f; text-align: left; padding: 8px;'>Contact :</th>";
$txt .= "<td style='border: 1px solid #0000004f; text-align: left; padding: 8px;'>".$contact."</td></tr>";
$txt .= "<tr><th style='border: 1px solid #0000004f; text-align: left; padding: 8px;'>Company Name :</th>";
$txt .= "<td style='border: 1px solid #0000004f; text-align: left; padding: 8px;'>".$message."</td></tr>";
$txt .= "</table>";
$txt .="</body></html>";


$headers = "From: vrnl.net" . "\r\n" ;

$headers .= 'Cc: '.$cc . "\r\n";
$headers .= "MIME-Version: 1.0'.PHP_EOL'\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

        if(!empty($email))
        {
            mail($to,$subject,$txt,$headers);
            $success_output = "Your message sent successfully, We will contact you soon. Thank You";
            $result = 'Success';
        }
        else
        {
            $error_output = "Something went wrong. Please try again later";
            $result = 'Fail';
        }

$output = array(
    // 'error'     =>  $error_output,
    'result'    => $result,
    'success'   =>  $success_output
);

// Output needs to be in JSON format
echo json_encode($output);

?>