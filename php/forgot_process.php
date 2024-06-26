<?php
require_once("config.php");
require_once("PHPMailer/PHPMailer.php");
require_once("PHPMailer/Exception.php");
require_once("PHPMailer/SMTP.php");
if(isset($_POST['subforgot'])){ 
    $login = $_REQUEST['login_var'];
    
    $query = "SELECT * FROM users WHERE (name='$login' OR email='$login')"; 
    $res = mysqli_query($conn, $query);
    $count = mysqli_num_rows($res);

    if($count == 1) {
        $findresult = mysqli_query($conn, "SELECT * FROM users WHERE (name='$login' OR email='$login')");
        if($res = mysqli_fetch_array($findresult)) {
            $oldftemail = $res['email'];
        }

        $token = bin2hex(random_bytes(50));
        $inresult = mysqli_query($conn, "INSERT INTO pass_reset VALUES ('', '$oldftemail', '$token')"); 

        if ($inresult) {
            // Initialize PHPMailer
            $mail = new PHPMailer(true); // Passing `true` enables exceptions

            try {
                // Server settings
                $mail->isSMTP(); // Set mailer to use SMTP
                $mail->Host = 'smtp.gmail.com'; // Specify main and backup SMTP servers
                $mail->SMTPAuth = true; // Enable SMTP authentication
                $mail->Username = 'your-email@yourdomain.com'; // SMTP username
                $mail->Password = 'your-email-password'; // SMTP password
                $mail->SMTPSecure = 'tls'; // Enable TLS encryption, `ssl` also accepted
                $mail->Port = 587; // TCP port to connect to

                // Sender and recipient
                $mail->setFrom('no_reply@technosmarter.com', 'Techno Smarter');
                $mail->addAddress($oldftemail); // Add a recipient

                // Content
                $mail->isHTML(true); // Set email format to HTML
                $mail->Subject = 'You have received password reset email';
                $mail->Body = 'Your password reset link:<br>https://webshopwar.000webhostapp.com/Webstore-War/php/forgot_process.php?token=' . $token . '<br>Reset your password with this link. Click or open in new tab.<br><br>' . $credits;

                // Send email
                $mail->send();
                
                header("location:forgot-password.php?sent=1");
                exit;
            } catch (Exception $e) {
                header("location:forgot-password.php?servererr=1");
                exit;
            }
        } else {
            header("location:forgot-password.php?something_wrong=1");
            exit;
        }
    } else {
        header("location:forgot-password.php?err=" . $login);
        exit;
    }
}
?>