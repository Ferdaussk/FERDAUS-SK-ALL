<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $conn = new mysqli("lotussk.com", "lotusskc_portfolio", "3[eVcUP[RnV;", "lotusskc_portfolio");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $stmt = $conn->prepare("INSERT INTO contact_messages (name, email, subject, message) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $subject, $message);

    if ($stmt->execute()) {
        $mail = new PHPMailer(true);

        try {
            // Server settings
            $mail->isSMTP();
            $mail->Host       = 'mail.lotussk.com'; // Your SMTP server
            $mail->SMTPAuth   = true;
            $mail->Username   = 'ferdaussk@lotussk.com'; // Your email address
            $mail->Password   = '2}aZza=dEV8g'; // Your email password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port       = 587; // Port may vary, consult your email provider's documentation

            // Recipients
            $mail->setFrom($email, $name);
            $mail->addAddress('ferdaussk@lotussk.com'); // Admin's email

            // Content
            $mail->isHTML(true);
            $mail->Subject = 'New Contact Form Submission';
            $mail->Body    = "Name: $name<br>Email: $email<br>Subject: $subject<br>Message:<br>$message";

            $mail->send();
            $response = "Form submitted successfully and email sent!";
        } catch (Exception $e) {
            $response = "Form submitted successfully but email could not be sent. Error: {$mail->ErrorInfo}";
        }
    } else {
        $response = "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();

    echo json_encode(['message' => $response]); // Send response as JSON
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <script>
        // JavaScript to handle form submission response
        document.addEventListener('DOMContentLoaded', function () {
            document.getElementById('contactForm').addEventListener('submit', function (event) {
                event.preventDefault();
                var formData = new FormData(this);
                fetch(this.action, {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    var successDiv = document.getElementById('success');
                    if (data.message) {
                        successDiv.innerHTML = data.message;
                    }
                })
                .catch(error => console.error('Error:', error));
            });
        });
    </script>
</head>

<body>

    <div class="contact-form text-center">
        <div id="success"></div>
        <form name="sentMessage" id="contactForm" novalidate="novalidate" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-row">
                <div class="control-group col-sm-6">
                    <input type="text" class="form-control p-4" name="name" id="name" placeholder="Your Name"
                        required="required" data-validation-required-message="Please enter your name" />
                    <p class="help-block text-danger"></p>
                </div>
                <div class="control-group col-sm-6">
                    <input type="email" class="form-control p-4" name="email" id="email" placeholder="Your Email"
                        required="required" data-validation-required-message="Please enter your email" />
                    <p class="help-block text-danger"></p>
                </div>
            </div>
            <div class="control-group">
                <input type="text" class="form-control p-4" name="subject" id="subject" placeholder="Subject"
                    required="required" data-validation-required-message="Please enter a subject" />
                <p class="help-block text-danger"></p>
            </div>
            <div class="control-group">
                <textarea class="form-control py-3 px-4" rows="5" name="message" id="message" placeholder="Message"
                    required="required" data-validation-required-message="Please enter your message"></textarea>
                <p class="help-block text-danger"></p>
            </div>
            <div>
                <button class="btn btn-outline-primary" type="submit" id="sendMessageButton">Send Message</button>
            </div>
        </form>
    </div>

</body>

</html>
