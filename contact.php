<?php
/*
From http://www.html-form-guide.com 
This is the simplest emailer one can have in PHP.
If this does not work, then the PHP email configuration is bad!
*/

    /* ****Important!****
    replace name@your-web-site.com below 
    with an email address that belongs to 
    the website where the script is uploaded.
    For example, if you are uploading this script to
    www.my-web-site.com, then an email like
    form@my-web-site.com is good.
    */

	$from_add = "form@kxayasan.no-ip.biz"; 
	$emailSubject = "Mail From Website";
	$to_add = "kxayasan@gmail.com"; //<-- put your yahoo/gmail email address here
	$nameField = $_POST['name'];
	$emailField = $_POST['email'];
	$subjectField = $_POST['subject'];
	$commentField = $_POST['comment'];
	$body = "Name: $nameField\r\nEmail: $emailField\r\nSubject: $subjectField\r\nComment: $commentField\r\n";
	$headers = "From: $emailField]r\n";
	if(mail($to_add, $emailSubject, $body, $headers))
	//if(mail("kxayasan@gmail.com","Subject","Message")) 
	{
		$msg = "Mail sent OK!!";
	} 
	else 
	{
 	   $msg = "Error sending email!";
	}
//	echo $msg
?>

