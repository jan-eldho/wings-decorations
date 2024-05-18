<?php
$robotest = $_POST['name'];
//echo "<pre>";print_r($_POST);die;
if(isset($_POST) && !empty($_POST) && isset($_POST['Enquiry']['enquiryFields']['email_address']) &&  filter_var($_POST['Enquiry']['enquiryFields']['email_address'], FILTER_VALIDATE_EMAIL) ){
	$headers  = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

	// To send HTML mail, the Content-type header must be set
	$toEmail = "eldhosemathai002@gmail.com";
	// $toEmail = "wingsdecorations@gmail.com";
	$from = "wingsdecorations@gmail.com";	
	$name = strip_tags(@$_POST['Enquiry']['enquiryFields']['name']);
	$phone = strip_tags(@$_POST['Enquiry']['enquiryFields']['mobile_number']);
	$email = strip_tags(@$_POST['Enquiry']['enquiryFields']['email_address']);
	$message = strip_tags(@$_POST['Enquiry']['enquiryFields']['message']);
	$mailSubject = "Wings Decorations - Contact Us";
	

$msg='<p>&nbsp;</p>
<table width="650" align="center" bgcolor="#ffffff">
<tbody>
<tr style="height: 6px;">
<td style="height: 6px;" bgcolor="#001f59">&nbsp;</td>
</tr>
<tr style="height: 51px;">
<td style="padding: 20px 0px; height: 51px;" align="center" bgcolor="#001f59"><img src="https://jan-eldho.github.io/Cars/assets/wings-deco.jpg" alt="logo" width="192" height="48" /></td>
</tr>
<tr style="height: 577px;">
<td style="height: 577px;">
<table style="border: 1px solid #f3efef; padding: 35px; height: 577px;" width="637" align="center" bgcolor="#f9f9f9">
<tbody>
<tr>
<td style="font-size: 14px; color: #2f2f2f; width: 557px;"><strong>Hello Admin,</strong></td>
</tr>
<tr>
<td style="width: 557px;" height="5">&nbsp;</td>
</tr>
<tr>
<td style="font-size: 14px; font-weight: normal; color: #484848; width: 557px;"><span style="color: #484848;">We have got a new enquiry.</span></td>
</tr>
<tr>
<td style="width: 557px;" height="5">&nbsp;</td>
</tr>
<tr>
<td style="font-size: 14px; font-weight: normal; color: #484848; width: 557px;">Please see the details below:</td>
</tr>
<tr>
<td style="width: 557px;" height="20">&nbsp;</td>
</tr>
<tr>
<td style="width: 557px;">'; if($name !=""){ $msg .=''; } if($email !=""){ $msg .=''; } if($phone !=""){ $msg .=''; } if($message !=""){ $msg .=''; } $msg .='
<table style="background: #ffffff; border: 1px solid #e7e7e7; font-size: 13px;" width="100%">
<tbody>
<tr>
<td style="padding: 15px; border-right: 1px solid #e7e7e7; border-bottom: 1px solid #e7e7e7; color: #000000;" valign="top" width="30%"><strong>Name</strong></td>
<td style="padding: 15px; border-bottom: 1px solid #e7e7e7;" width="70%">'.$name.'</td>
</tr>
<tr>
<td style="padding: 15px; border-right: 1px solid #e7e7e7; border-bottom: 1px solid #e7e7e7; color: #000000;" valign="top" width="30%"><strong>Email Address</strong></td>
<td style="padding: 15px; border-bottom: 1px solid #e7e7e7;" width="70%">'.$email.'</td>
</tr>
<tr>
<td style="padding: 15px; border-right: 1px solid #e7e7e7; border-bottom: 1px solid #e7e7e7; color: #000000;" valign="top" width="30%"><strong>Mobile Number</strong></td>
<td style="padding: 15px; border-bottom: 1px solid #e7e7e7;" width="70%">'.$phone.'</td>
</tr>
<tr>
<td style="padding: 15px; border-right: 1px solid #e7e7e7; border-bottom: 1px solid #e7e7e7; color: #000000;" valign="top" width="30%"><strong>Message</strong></td>
<td style="padding: 15px; border-bottom: 1px solid #e7e7e7;" width="70%">'.$message.'</td>
</tr>
</tbody>
</table>
</td>
</tr>
<tr>
<td style="width: 557px;" height="10">&nbsp;</td>
</tr>
<tr>
<td style="font-size: 14px; color: #2f2f2f; width: 557px;"><strong>Regards</strong></td>
</tr>
<tr>
<td style="font-size: 14px; color: #2f2f2f; width: 557px;"><strong><a href="tel:+917592943871">Wings Decorations</a></strong></td>
</tr>
</tbody>
</table>
</td>
</tr>
<tr style="height: 9.79688px;">
<td style="height: 9.79688px;">&nbsp;</td>
</tr>
<tr style="height: 4px;">
<td style="height: 4px;" bgcolor="#212529">&nbsp;</td>
</tr>
</tbody>
</table>';

	// echo $msg;
 
	  
	$headersTo.= $headers.'From: '.$from;
	mail($toEmail,$mailSubject,$msg,$headersTo);
	$msg2 = '<table width="650" align="center" bgcolor="#ffffff">
	<tbody>
	<tr>
	<td bgcolor="#F0F0F0" height="6">&nbsp;</td>
	</tr>
	<tr>
	<td style="padding: 20px 0;" align="center" bgcolor="#F0F0F0"><img src="https://jan-eldho.github.io/Cars/assets/wings-deco.jpg" alt="logo" width="200" height="50" /></td>
	</tr>
	<tr>
	<td>
	<table style="border: 1px solid #f3efef; padding: 35px; height: 188px;" width="636" align="center" bgcolor="#f9f9f9">
	<tbody>
	<tr>
	<td style="font-size: 14px; color: #2f2f2f; width: 556px;"><strong>Hello '.$name.',</strong></td>
	</tr>
	<tr>
	<td style="width: 556px;" height="5"><span style="color: #484848;">Thank you for contacting us, we will be in touch.</span></td>
	</tr>
	<tr>
	<td style="font-size: 14px; font-weight: normal; color: #484848; width: 556px;">&nbsp;</td>
	</tr>
	<tr>
	<td style="font-size: 14px; color: #2f2f2f;"><strong>Regards</strong></td>
	</tr>
	<tr>
	<td style="font-size: 14px; color: #2f2f2f;"><strong><a href="tel:+917592943871">Wings Decorations</a></strong></td>
	</tr>
	</tbody>
	</table>
	</td>
	</tr>
	
	
	</tbody>
	</table>
	<p>&nbsp;&nbsp;</p>';
	$headersFrom .= $headers.'From: '.$from;
	$mailSubject = "Wings Decorations - Enquiry";
	mail($email,$mailSubject,$msg2,$headersFrom);
	$data ='success';
    echo json_encode($data);
}
?>




