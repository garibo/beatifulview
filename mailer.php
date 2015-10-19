<?php 
	
	$to = "info@beautifulviewwindowcleaning.com";
	$subject = "Contact Us - Beautiful View Window Cleaning";

	$nombre = $_POST['name'];
	$correo = $_POST['email'];
	$telefono = $_POST['subject'];
	$mensaje = $_POST['message'];
	$message =  "<p><strong>Name:</strong><span>$nombre,</span></p><p><strong>Email:</strong><span>$correo,</span></p><p><strong>Phone:</strong><span>$telefono,</span></p><p><strong>Message:</strong><span>$mensaje,</span></p>";


	// Always set content-type when sending HTML email
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

	// More headers
	$headers .= 'From: <'.$_POST['email'].'>' . "\r\n";

	if(mail($to,$subject,$message,$headers))
	{
		$respuesta[0] = array(
		'success' => 1,
		'name_msg' => $_POST['name'],
		'email_msg' => $_POST['email'],
		'subject_msg' => $_POST['subject'],
		'message_msg' => $_POST['message']
		);
		$send = json_encode($respuesta[0]);
		echo $send;
	}
	else
	{
		$respuesta[0] = array(
		'success' => 0,
		'name_msg' => $_POST['name'],
		'email_msg' => $_POST['email'],
		'subject_msg' => $_POST['subject'],
		'message_msg' => $_POST['message']
		);
		$send = json_encode($respuesta[0]);
		echo $send;		
	}

 ?>