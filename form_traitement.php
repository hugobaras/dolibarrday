<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once "vendor/autoload.php";

$debug = true;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $lastname = isset($_POST['lastname']) ? htmlspecialchars($_POST['lastname']) : '';
    $firstname = isset($_POST['firstname']) ? htmlspecialchars($_POST['firstname']) : '';
    $email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '';
    $phone = isset($_POST['phone']) ? htmlspecialchars($_POST['phone']) : '';
    $website = isset($_POST['website']) ? htmlspecialchars($_POST['website']) : '';

    try {
        $conn = new PDO("mysql:host=localhost;=8889;dbname=dolibarday", "root", "root");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $conn->prepare("INSERT INTO participants (lastname, firstname, email, phone, website) VALUES (:lastname, :firstname, :email, :phone, :website)");
        $stmt->bindParam(':lastname', $lastname);
        $stmt->bindParam(':firstname', $firstname);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':website', $website);
        $stmt->execute();

        $mail = new PHPMailer($debug);
        if ($debug) {
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;
        }
        $mail->isSMTP();
        $mail->SMTPAuth = true;
        $mail->Host = "smtp.office365.com";
        $mail->Port = 587;
        $mail->Username = "testhugoelonet@outlook.com";
        $mail->Password = "9vdkawca5";
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->setFrom('testhugoelonet@outlook.com', 'DolibarrDay');
        $mail->addAddress($email, 'Hugo');
        $mail->CharSet = 'UTF-8';
        $mail->Encoding = 'base64';
        $mail->isHTML(true);
        $mail->Subject = 'Objet de votre email';
        $mail->Body = '<!DOCTYPE html>
                            <html lang="fr">
                            <head>
                            <meta charset="UTF-8">
                            <meta name="viewport" content="width=device-width, initial-scale=1.0">
                            <link
                            href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
                            rel="stylesheet">
                            <title>Confirmation d\'inscription - Dolibarr Day</title>
                            <style>
                            body {
                                margin: 0;
                                padding: 0;
                                font-family: Poppins, sans-serif;
                                background-color: #f4f4f4;
                            }
                            .email-container {
                                max-width: 600px;
                                margin: 0 auto;
                                background-color: #ffffff;
                                padding: 20px;
                                border-radius: 5px;
                                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                            }
                            .header {
                                background-color: #243c5c;
                                color: #ffffff;
                                padding: 20px;
                                text-align: center;
                                border-top-left-radius: 5px;
                                border-top-right-radius: 5px;
                            }
                            .header h1 {
                                margin: 0;
                            }
                            .content {
                                padding: 20px;
                            }
                            .content h2 {
                                color: #333333;
                            }
                            .content p {
                                color: #666666;
                                line-height: 1.6;
                            }
                            .footer {
                                background-color: #f4f4f4;
                                color: #666666;
                                text-align: center;
                                padding: 10px;
                                border-bottom-left-radius: 5px;
                                border-bottom-right-radius: 5px;
                                font-size: 12px;
                            }
                            .button {
                                display: inline-block;
                                padding: 10px 20px;
                                margin: 20px 0;
                                color: #ffffff;
                                background-color: #243c5c;
                                text-decoration: none;
                                border-radius: 5px;
                            }
                            @media only screen and (max-width: 600px) {
                                .email-container {
                                width: 100%;
                                padding: 10px;
                                }
                                .header, .footer {
                                padding: 15px;
                                }
                                .content {
                                padding: 15px;
                                }
                            }
                            </style>
                            </head>
                            <body>
                            <div class="email-container">
                                <div class="header">
                                <h1>DolibarrDay</h1>
                                </div>
                                <h1 style="text-align: center;">Confirmation d\'inscription</h1>
                                <div class="content">
                                <h2>Bonjour ' . $lastname . ' ' . $firstname . ',</h2>
                                <p>Merci de vous être inscrit au Dolibarr Day ! Nous sommes ravis de vous accueillir pour cet événement spécial.</p>
                                        
                                <p>Nous avons hâte de vous rencontrer et de partager cette journée enrichissante avec vous.</p>
                                <p>Si vous avez des questions, n\'hésitez pas à nous contacter.</p>
                                
                                <p>À bientôt,</p>
                                <p>L\'équipe Dolibarr Day</p>
                                </div>
                                <div class="footer">
                                <p>&copy; 2024 Elonet et NORD ERP CRM. Tous droits réservés.</p>
                                </div>
                            </div>
                            </body>
                            </html>
';
        $mail->send();
        echo "Message has been sent successfully";
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: " . $mail->ErrorInfo;
    }

    $response = [
        'status' => 'success',
        'message' => 'Données reçues avec succès',
    ];

    header('Content-Type: application/json');
    echo json_encode($response);
} else {
    $response = [
        'status' => 'error',
        'message' => 'Méthode non autorisée'
    ];

    header('Content-Type: application/json');
    echo json_encode($response);
}
