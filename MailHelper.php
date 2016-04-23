<?php

class MailHelper {

	public fuction sentToCustomer($uname,$uEmail,$uContact,$uDate,$uService) {
		this->$uname = $uname;
		this->$uEmail =$uEmail;
		this->$uContact = $uContact;
		this->$uDate = $uDate;
		this->$uService = $uService;

		  /**
 	* This example shows settings to use when sending via Google's Gmail servers.
 	*/
	//SMTP needs accurate times, and the PHP time zone MUST be set
	//This should be done in your php.ini, but this is how to do it if you don't have access to that
	date_default_timezone_set('Etc/UTC');
	require 'PHPMailerAutoload.php';
	//Create a new PHPMailer instance
	$mail = new PHPMailer;
	//Tell PHPMailer to use SMTP
	$mail->isSMTP();
	//Enable SMTP debugging
	// 0 = off (for production use)
	// 1 = client messages
	// 2 = client and server messages
	$mail->SMTPDebug = 2;
	//Ask for HTML-friendly debug output
	$mail->Debugoutput = 'html';
	//Set the hostname of the mail server
	$mail->Host = 'smtp.gmail.com';
	// use
	// $mail->Host = gethostbyname('smtp.gmail.com');
	// if your network does not support SMTP over IPv6
	//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
	$mail->Port = 587;
	//Set the encryption system to use - ssl (deprecated) or tls
	$mail->SMTPSecure = 'tls';
	//Whether to use SMTP authentication
	$mail->SMTPAuth = true;
	//Username to use for SMTP authentication - use full email address for gmail
	$mail->Username = "lifeofpet.com@gmail.com";
	//Password to use for SMTP authentication
	$mail->Password = "Seyon@168";
	//Set who the message is to be sent from
	$mail->setFrom('info@lifeofpet.com', 'lifeofpet');
	//Set an alternative reply-to address
	$mail->addReplyTo('info@lifeofpet.com', 'lifeofpet');
	//Set who the message is to be sent to
	$mail->addAddress($_POST["customerEmail"], $_POST["name"]);
	//Set the subject line
	$mail->Subject = 'Comfirmation of appointment';
	//Read an HTML message body from an external file, convert referenced images to embedded,
	//convert HTML into a basic plain-text alternative body
	//$mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));

	$mail->msgHTML("<div align='center' >
	    <h2 style='color:#424242;'>Appointment Details</h2>
	    <div >
        	<table>
            <tr>
                <th>Name:</th>
	                <td>".$uname."</td>
            	</tr>
            	<tr>
	                <th>Contact:</th>
                	<td>$uContact</td>
            	</tr>
            	<tr>
	                <th>Email:</th>
                	<td>$uEmail</td>
            	</tr>
            	<tr>
	                <th>Date:</th>
                	<td>$uDate</td>
            	</tr>
            	<tr>
	                <th>Service type:</th>
                	<td>$uService</td>
            	</tr>
        	</table>    
    	</div>
  	</div>");
	//Replace the plain text body with one created manually
	$mail->AltBody = 'This is a plain-text message body';
	//Attach an image file

	// $mail->addAttachment('images/phpmailer_mini.png');
	//send the message, check for errors
	if (!$mail->send()) {
	    echo "Mailer Error: " . $mail->ErrorInfo;
	} else {
	    echo "Message sent!";
	} 
 }

	
}

?>