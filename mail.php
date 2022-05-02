<?php
    if (isset($_POST['message'])) {
        $entete  = 'MIME-Version: 1.0' . "\r\n";
        $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        $entete .= 'From: webmaster@arnaudbeaugeon.com' . "\r\n";
        $entete .= 'Reply-to: ' . $_POST['email'];

        $message = '<h1>Message envoyé depuis la page Contact de arnaudbeaugeon.com</h1>
        <p><b>Nom : </b>' . $_POST['nom'] . '<br>
        <p><b>Prenom : </b>' . $_POST['prenom'] . '<br>
        <p><b>Tél : </b>' . $_POST['tel'] . '<br>
        <p><b>Entreprise : </b>' . $_POST['entreprise'] . '<br>
        <b>Message : </b>' . htmlspecialchars($_POST['message']) . '</p>';

        $retour = mail('cv@arnaudbeaugeon.com', 'Envoi depuis page Contact', $message, $entete);
        if($retour)
            // echo '<p>Votre message a bien été envoyé.</p>';
            header("Location: /thanks.html");
    }
?>