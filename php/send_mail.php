<?php
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);
$to  = 'swiniak700@gmail.com';
$subject = 'Η Εγγραφή Ολοκληρώθηκε Επιτυχώς!';

// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";

// Put your HTML here
//$message = '<html><body>hello world</body></html>';
$message = file_get_contents('basic.html');
// Mail it
mail($to, $subject, $message, $headers);

/*$Content = file_get_contents('basic.html');
$Subject = 'Your form has been inserted into database';
if(($Content = file_get_contents('basic.html')) === false) {
    $Content = '<html><body>Hello, We would like to inform you that your form has been submitted and inserted into database successfully. Regards.</body></html>';
}

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

if(mail('swiniak700@gmail.com', $Subject, $Content, $Headers) == false) {
    echo ('There has been an error sending confirmation mail.')
}*/
?>
