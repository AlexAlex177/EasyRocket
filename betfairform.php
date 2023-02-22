
<?php

// Server side validation
// header('Access-Control-Allow-Origin: *');


$username = $_POST['username'];
$useremail = $_POST['useremail'];
$message = $_POST['msg'];

$to = "mailto: vishal@vrnl.net <vishal@vrnl.net>";
$subject = "Mail From  technicalbazaar@gmail.com ";
$cc = "mailto: vishal@vrnl.net <vishal@vrnl.net>";
$txt ="";
$txt .="<html><body>";
$txt .= "<table style='border-collapse: collapse; width: 30%; background: #ddd7d769;'><tr>
<th style='border: 1px solid #0000004f; text-align: left; padding: 8px;'>Name</th>";
$txt .= "<td  style='  border: 1px solid #0000004f;text-align: left;padding: 8px;'>".$username."</td></tr>";
// $txt .= "<tr><th style='border: 1px solid #0000004f; text-align: left; padding: 8px;'>Surname</th>";
// $txt .= "<td style='border: 1px solid #0000004f; text-align: left; padding: 8px;'>".$surname."</td></tr>";

// $txt .= "<tr><th style='border: 1px solid #0000004f; text-align: left; padding: 8px;'>Subject</th>";
// $txt .= "<td style='border: 1px solid #0000004f; text-align: left; padding: 8px;'>".$bsubject."</td></tr>";

$txt .= "<tr style='background: lightgrey;'><th style='border: 1px solid #0000004f; text-align: left; padding: 8px;'>Email</th>";
$txt .= "<td style='border: 1px solid #0000004f; text-align: left; padding: 8px;'>".$useremail."</td></tr>";
$txt .= "<tr><th style='border: 1px solid #0000004f; text-align: left; padding: 8px;'>Message</th>";
$txt .= "<td style='border: 1px solid #0000004f; text-align: left; padding: 8px;'>".$message."</td></tr>";
$txt .= "</table>";
$txt .="</body></html>";


$headers='From: vishal@vrnl.net \r\n';
$headers.='Reply-To: vishal@vrnl.net\r\n';
$headers.='X-Mailer: PHP/' . phpversion().'\r\n';
$headers.= 'MIME-Version: 1.0' . "\r\n";
$headers.= 'Content-type: text/html; charset=iso-8859-1 \r\n';
$headers.= "BCC: $to";
$headers.= "CC: $cc";


$headers = "From: vrnl.net" . "\r\n" ;

$headers .= 'Cc: '.$cc . "\r\n";
$headers .= "MIME-Version: 1.0'.PHP_EOL'\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

        if(!empty($useremail))
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