<?php
// Dans ce code, nous utilisons la même vérification $_SERVER["REQUEST_METHOD"] == "POST" pour s'assurer que le formulaire a été soumis. Ensuite, nous utilisons $_POST pour récupérer les valeurs saisies dans le formulaire. Les informations sont ensuite affichées dans la page. Si le formulaire n'a pas encore été soumis, un message d'erreur est affiché.


// Vérifie si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Récupère les valeurs du formulaire
    $nom = $_POST["nom"];
    $email = $_POST["email"];
    $Telephone = $_POST["Telephone"];
    $message = $_POST["message"];

    // Affichage des informations
    echo "<p><strong>Nom :</strong> $nom </p>";
    echo "<p><strong>E-mail:</strong> $email</p>";
    echo "<p><strong>Numéro de téléphone :</strong> $Telephone</p>";
    echo "<p><strong>Résultat du message saisis :</strong> $message</p>";
} else {
    // Si le formulaire n'a pas été soumis, affiche un message d'erreur
    echo "<p>Aucune information à afficher. Veuillez soumettre le formulaire.</p>";
}


$nom = $_POST["nom"];
$email = $_POST["email"];
$Telephone = $_POST["Telephone"];
$message = $_POST["message"];
$message = "nom: " . $nom . " email: " . $email . "\n" . " message: " . "\n" . $message . " tel: " . $Telephone;

//Import PHPMailer classes into the global namespace
// Importer des classes PHPMailer dans l'espace de noms global
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'bangageorgesemmanuel.12@gmail.com';
    $mail->Password = 'xwslsbdqlohmlvor';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;



    $mail->setFrom('from@example.com', 'vs');
    $mail->addAddress('bangageorgesemmanuel.12@gmail.com');
    $mail->isHTML(true);
    $mail->Subject = 'Here is the subject';
    $mail->Body = $message;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';



    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
