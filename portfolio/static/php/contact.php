<?php

if(isset($_POST['message'])){

	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
    
	
	$to      = 'admiralgeneral2003@gmail.com';
	$subject = 'bulatnasyrov.herokuapp.com';

	$headers = 'From: '. $email . "\r\n" .
    'Reply-To: '. $email . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

	$status = mail($to, $subject, $message, $headers);

	if($status == TRUE){	
		$res['sendstatus'] = 'done';
	
		//Edit your message here
		$res['message'] = 'Спасибо за комментарий!!!';
    }
	else{
		$res['message'] = 'Проблема с отправкой. Пожалуйста напишите мне на почту admiralgeneral2003@gmail.com';
	}
	
	
	echo json_encode($res);
}

?>