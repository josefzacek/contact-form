<?php

$field ="";
$security ="";

// when submit button is pressed
if(isset($_POST['submit']))
	{
	// check for security question
	if(isset($_POST['security']) && $_POST['security'] == 99)
		{
		// check if all fields are filled out
		if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['subject_field']) && isset($_POST['message']))
			{	
				// Data Variables
				$name = htmlentities($_POST['name']);
				$email = htmlentities($_POST['email']);
				$phone = htmlentities($_POST['phone']);
				$subject_field = htmlentities($_POST['subject_field']);
				$message = htmlentities($_POST['message']);
		
				
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		//$headers .= 'To:' . $email . "\r\n";	
		$headers .= 'From: ' . $email . "\r\n" .
						'X-Mailer: PHP/' . phpversion();
		
		
		// check if variables not empty
		if(!empty($name) && !empty($email) && !empty($phone) && !empty($subject_field) && !empty($message))
			{
			$to ="info@josefzacek.com";
			$subject = "Contact form ";
			$body = "<b>Name:</b>"
					."<br/>"
					.$name
					."<br/>"
					."<b>Email:</b>"
					."<br/>"
					.$email  
					."<br/>"
					."<b>Phone:</b>"
					."<br/>"
					.$phone 
					."<br/>"
					."<b>Subject:</b>"
					."<br/>"
					.$subject_field
					."<br/>"
					."<b>Message:</b>"
					."<br/>"
					.$message;
					  								
			
				if (mail($to, $subject, $body, $headers))
				{
					header ("Location: thank-you.php");
			
				}
				else
				{
					echo "Sorry an error occured";
				}		
			} // end of check if variables not empty
			else 
			{ 
        		$field = "Required!";
			}
	}//end of check if all fields are filled out

}// end of check for security question
	
else 
{
	$field = "Required!";
	$security = "/ Wrong answer";
}
}// end of when submit button is pressed



?>
