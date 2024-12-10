$to = "jarvbot@gmail.com";
$subject = "Welcome to Our Service";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From: eranky794.com" . "\r\n";

$message = file_get_contents('gmail.html');

if(mail($to, $subject, $message, $headers)) {
    echo "Email sent successfully!";
} else {
    echo "Failed to send email.";
}
