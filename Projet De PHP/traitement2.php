<?php

// Fonction pour calculer la moyenne pondérée
function calculerMoyennePonderee($notes, $coefficients)
{
    $sommeProduits = 0;
    $sommeCoefficients = 0;

    for ($i = 0; $i < count($notes); $i++) {
        $sommeProduits += $notes[$i] * $coefficients[$i];
        $sommeCoefficients += $coefficients[$i];
    }

    if ($sommeCoefficients > 0) {
        $moyenne = $sommeProduits / $sommeCoefficients;
        return $moyenne;
    } else {
        return "Erreur : La somme des coefficients est égale à zéro.";
    }
}

// Si l'on clique sur le bouton calculer par la clé submit, récupération des informations
if (isset($_POST["submit"])) {
    $nom = $_POST["nom"];
    $email = $_POST["email"];

    $note1 = $_POST["note1"];
    $coefficient1 = $_POST["coefficient1"];
    $note2 = $_POST["note2"];
    $coefficient2 = $_POST["coefficient2"];
    $note3 = $_POST["note3"];
    $coefficient3 = $_POST["coefficient3"];
    $note4 = $_POST["note4"];
    $coefficient4 = $_POST["coefficient4"];
    $note5 = $_POST["note5"];
    $coefficient5 = $_POST["coefficient5"];
    $note6 = $_POST["note6"];
    $coefficient6 = $_POST["coefficient6"];
    $note7 = $_POST["note7"];
    $coefficient7 = $_POST["coefficient7"];
    $note8 = $_POST["note8"];
    $coefficient8 = $_POST["coefficient8"];
    $note9 = $_POST["note9"];
    $coefficient9 = $_POST["coefficient9"];
    $note10 = $_POST["note10"];
    $coefficient10 = $_POST["coefficient10"];
    $note11 = $_POST["note11"];
    $coefficient11 = $_POST["coefficient11"];

    // Appel de la fonction pour calculer la moyenne pondérée
    $moyenne = calculerMoyennePonderee(
        [$note1, $note2, $note3, $note4, $note5, $note6, $note7, $note8, $note9, $note10, $note11],
        [$coefficient1, $coefficient2, $coefficient3, $coefficient4, $coefficient5, $coefficient6, $coefficient7, $coefficient8, $coefficient9, $coefficient10, $coefficient11]
    );
}





//Import PHPMailer classes into the global namespace
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
    $mail->Body = "BULLETIN PRESENTANT LES NOTES ET
    LA MOYENNE DE L'ETUDIANT : BANGA ADOU GEORGES EMMANUEL FLORIAN" . "<br><br>" . "Nom :" . $nom . "<br>" . "Email :" . $email . "<br>" . "PHP :" . $note1 . "<br>" . "MERISE : " . $note2 .  "<br>" . "Anglais : " . $note3 . "<br>" . "Français :" . $note4 . "<br>" . "Algorithmique : " . $note5 . "<br>" . "Javascript :" . $note6 . "<br>" . "Bootstrap : " . $note7 . "<br>" . "HTML : " . $note8 . "<br>" . "CSS :"  . $note9 . "<br>" . "Wordpress : " . $note10 . "<br>" . "Laravel : " . $note11 . "<br>" . "Votre moyenne est : ". $moyenne;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';



    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>affichage</title>
</head>

<body>

    <h1 class="titre" style="color: rgb(73, 73, 250); text-align:center; font-size: 25px;">BULLETIN PRESENTANT LES NOTES ET <br> LA MOYENNE DE L'ETUDIANT "X-Y6-Z" </h1>

    <?php
    // Affichage des informations
    echo "<h3>Nom : $nom<br></h3>";
    echo "<h3>E-mail : $email<br></h3><br>";

    // Affichage des notes et coefficients
    for ($i = 1; $i <= 11; $i++) {
        $note = $_POST["note$i"];
        $coefficient = $_POST["coefficient$i"];

        echo "<h3>Note $i : $note</h3>";
        echo "<h4>Coefficient $i : $coefficient<br></h4>";
    }

    // Affichage de la moyenne pondérée
    if (isset($moyenne)) {
        echo "<h1>Moyenne pondérée : " . round($moyenne, 2) . "</h1>"; // Arrondir à 2 décimales
    }


    ?>
</body>

</html>