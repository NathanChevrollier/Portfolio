<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $name = strip_tags(trim($_POST["name"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $subject = strip_tags(trim($_POST["subject"]));
    $message = trim($_POST["message"]);

    // Vérifier que toutes les données sont remplies
    if (empty($name) || empty($email) || empty($subject) || empty($message)) {
        http_response_code(400);
        echo "Veuillez remplir tous les champs du formulaire.";
        exit;
    }

    // Adresse email de réception
    $receiving_email_address = 'votre@email.com';

    // Format du message
    $email_content = "Nom: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Sujet: $subject\n";
    $email_content .= "Message:\n$message\n";

    // En-têtes de l'email
    $email_headers = "From: $name <$email>";

    // Envoyer l'email
    if (mail($receiving_email_address, $subject, $email_content, $email_headers)) {
        http_response_code(200);
        echo "Votre message a été envoyé. Merci !";
    } else {
        http_response_code(500);
        echo "Une erreur est survenue lors de l'envoi de votre message. Veuillez réessayer.";
    }
} else {
    http_response_code(403);
    echo "Une erreur s'est produite lors de l'envoi du formulaire. Veuillez réessayer.";
}
?>