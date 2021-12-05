<?php

if(isset($_POST['c_message'])){

	$name = $_POST['c_name'];
	$email = $_POST['c_email'];
	$message = $_POST['c_message'];
    
	
	$to      = 'eagle2020eye@yandex.com';
	$subject = 'bulatnasyrov.herokuapp.com';

	$headers = 'From: '. $email . "\r\n" .
    'Reply-To: '. $email . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

	$status = mail($to, $subject, $message, $headers);

	if($status == TRUE){	
		$res['sendstatus'] = 'done';
	
		//Edit your message here
		$res['c_message'] = 'Thank you, for !!!';
    }
	else{
		$res['c_message'] = 'Trouble with send. Please write to my email - admiralgeneral2003@gmail.com';
	}
	
	
	echo json_encode($res);
}

?>