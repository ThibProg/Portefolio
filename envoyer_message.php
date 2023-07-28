<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $nom = $_POST["nom"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Destination du message (votre adresse email)
    $destination = "thibaultvincentprog@protonmail.com"; // Remplacez par votre adresse email

    // Sujet du message
    $sujet = "Nouveau message de $nom depuis le formulaire de contact";

    // En-têtes du message
    $headers = "From: $nom <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Envoyer le message
    $envoi = mail($destination, $sujet, $message, $headers);

    // Vérifier si l'envoi a réussi ou non
    if ($envoi) {
        echo "Votre message a été envoyé avec succès.";
    } else {
        echo "Une erreur est survenue lors de l'envoi du message. Veuillez réessayer.";
    }
}
?>