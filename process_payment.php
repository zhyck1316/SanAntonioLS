<?php
require 'config.php';
require 'vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Stripe\Stripe;
use Stripe\Customer;
use Stripe\PaymentIntent;

//Secret key STRIPE API
Stripe::setApiKey(STRIPE_SECRET_KEY);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $paymentMethodId = $_POST['paymentMethodId'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $balance = $_POST['amount'];
    $amount = $balance * 100; // Convert to cents
    $signatureData = $_POST['signature'];

    if (isset($signatureData)) {
        $signatureData = str_replace('data:image/png;base64,', '', $signatureData);
        $signatureData = str_replace(' ', '+', $signatureData);
        $signatureData = base64_decode($signatureData);

        $filePath = './src/temp/signature_' . time() . '.png'; // Create a unique file name
        file_put_contents($filePath, $signatureData);
    }

    try {
        // CREATE CUSTOMER
        $customer = Customer::create([
            'name' => $fname . ' ' . $lname,
            'email' => $email,
            'payment_method' => $paymentMethodId,
            'invoice_settings' => [
                'default_payment_method' => $paymentMethodId,
            ],
        ]);

        // CREATE PAYMENT INTENT
        $paymentIntent = PaymentIntent::create([
            'amount' => $amount,
            'currency' => 'usd',
            'customer' => $customer->id,
            'payment_method' => $paymentMethodId,
            'off_session' => true,
            'confirm' => true,
        ]);

        // SEND EMAIL IF SUCCESS
        sendConfirmationEmail($email, $fname, $lname, $customer->id, $amount, $paymentIntent->id, $filePath);

        echo '. PAYMENT SUCCESSFUL! Payment Intent ID: ' . $paymentIntent->id;
    } catch (\Stripe\Exception\ApiErrorException $e) {
        echo 'Error: ' . $e->getMessage();
    }
}

function sendConfirmationEmail($to, $fname, $lname, $customerId, $amount, $paymentIntentId, $signatureFilePath) {
    $mail = new PHPMailer(true);

    try {
        //SERVER SETTINGS
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; // Set the SMTP server to send through
        $mail->SMTPAuth = true;
        $mail->Username = 'mjdez0612@gmail.com'; // SMTP username
        $mail->Password = 'btysjhtmubmftlky'; // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        //Recipients
        $mail->setFrom('zhyck1316@gmail.com', 'DiamondBack Process Service');
        $mail->addAddress($to); // Add a recipient

        //Reply-To
        $mail->addReplyTo('no-reply@yourcompany.com', 'No Reply');

        //Custom headers
        $mail->addCustomHeader('X-Auto-Response-Suppress', 'All');
        
        // Content
        $mail->isHTML(true);
        $mail->Subject = 'DIAMONDBACK PAYMENT CONFIRMATION!';
        $mail->Body    = "<strong style='font-size: 20px; font-weight: semibold; color: #00205b;' >YOU RECEIVED A PAYMENT!</strong><br><br>
                            <strong style='font-size: 14px; color: #00205b;' >Customer:</strong> $fname $lname <br>
                            <strong style='font-size: 14px; color: #00205b;' >Customer ID:</strong> $customerId<br>
                            <strong style='font-size: 14px; color: #00205b;' >Amount:</strong> $" . number_format($amount / 100, 2) . "<br>
                            <strong style='font-size: 14px; color: #00205b;' >Payment Intent ID:</strong> $paymentIntentId<br>
                            Please do not reply to this email. If you have any questions, contact support at support@yourcompany.com.";
        $mail->AltBody = "Thank you for your payment!\n\n
                           Customer ID: $customerId\n
                           Amount: $" . number_format($amount / 100, 2) . "\n
                           Payment Intent ID: $paymentIntentId\n\n
                           Please do not reply to this email. If you have any questions, contact support at support@yourcompany.com.";

        //SIGNATURE AS ATTACHMENT
        $mail->addAttachment($signatureFilePath, 'signature.png');

        $mail->send();
        echo 'Confirmation email has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>