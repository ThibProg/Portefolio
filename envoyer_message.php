<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // R�cup�rer les donn�es du formulaire
    $nom = $_POST["nom"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Destination du message (votre adresse email)
    $destination = "thibaultvincentprog@protonmail.com"; // Remplacez par votre adresse email

    // Sujet du message
    $sujet = "Nouveau message de $nom depuis le formulaire de contact";

    // En-t�tes du message
    $headers = "From: $nom <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Envoyer le message
    $envoi = mail($destination, $sujet, $message, $headers);

    // V�rifier si l'envoi a r�ussi ou non
    if ($envoi) {
        echo "Votre message a �t� envoy� avec succ�s.";
    } else {
        echo "Une erreur est survenue lors de l'envoi du message. Veuillez r�essayer.";
    }
}
?>