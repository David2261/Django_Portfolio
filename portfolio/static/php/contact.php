<?php

if(isset($_POST['c_message'])){

	$name = $_POST['c_name'];
	$email = $_POST['c_email'];
	$message = $_POST['c_message'];
    
	
<<<<<<< HEAD
	$to      = ''; // Email from
	$subject = ''; // Email to
=======
	$to      = 'eagle2020eye@yandex.com';
	$subject = 'bulatnasyrov.herokuapp.com';
>>>>>>> a1848d9665aa90c85224e94a7e978beba217b6e4

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