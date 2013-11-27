<?php 
$to = 'charu.garg@gmail.com,'.$_POST['Email'].',jayant@yahoo.com'; 
$from = $_POST['Email'];
$subject = "Message from CreativeWebLogix.com";
$message = '<html> 
<head> 
<title></title> 
</head> 
<body> 
<p>Hello</p>
<table>
<tr> 
<td colspan="2">Below are the details:</td>
</tr>
<tr> 
 <td>Name : </td><td>'.$_POST['Name'].'</td>
</tr>
<tr> 
 <td>E-Mail : </td><td>'.$_POST['Email'].'</td>
</tr>
<tr> 
 <td>Message : </td><td>'.$_POST['Message'].'</td>
</tr>
<tr> 
 <td>&nbsp;</td>
</tr>
<tr> 
<td colspan="2">Regards,<br/>CreativeWebLogix.com</td>
</tr>
</table> 
</body> 
</html>';

$headers  = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
$headers .= "From: " . $from . "\r\n"; 
		@mail($to, $subject, $message, $headers);
     	echo ('<strong>Hey</strong>,<br />

<strong>THANKS A TON!</strong><br />

We appreciate your interest in us.

Give us a l’il while and we’ll get back to you.

In case you’re in a hurry, call us @ <strong>(800) 704-0428</strong>');
		

 ?>