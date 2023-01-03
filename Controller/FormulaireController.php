<?php
// Si le tableau $_POST existe alors le formulaire a été envoyé
if(!empty($_POST))
{
    // Le login est-il rempli ?
    if(empty($_POST['nom']))
    {
        $message = 'Veuillez renseigner votre nom svp !';
    }
    // Le mot de passe est-il rempli ?
    elseif(empty($_POST['prenom']))
    {
        $message = 'Veuillez renseigner votre svp !';
    }

    elseif(empty($_POST['email']))
    {
        $message = ' Veuillez renseigner votre mail';
    }

}