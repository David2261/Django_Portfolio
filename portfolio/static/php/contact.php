<?php

if(isset($_POST['c_message'])){

	$name = $_POST['c_name'];
	$email = $_POST['c_email'];
	$message = $_POST['c_message'];
    
	
	$to      = 'admiralgeneral2003@gmail.com';
	$subject = 'bulatnasyrov.herokuapp.com';

	$headers = 'From: '. $email . "\r\n" .
    'Reply-To: '. $email . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

	$status = mail($to, $subject, $message, $headers);

	if($status == TRUE){	
		$res['sendstatus'] = 'done';
	
		//Edit your message here
		$res['c_message'] = 'Спасибо за комментарий!!!';
    }
	else{
		$res['c_message'] = 'Проблема с отправкой. Пожалуйста напишите мне на почту admiralgeneral2003@gmail.com';
	}
	
	
	echo json_encode($res);
}

?>