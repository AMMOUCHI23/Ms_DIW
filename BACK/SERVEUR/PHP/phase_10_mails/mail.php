<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les mails</title>
</head>
<body>
<?php
/*Le mail doit contenir les informatons suivantes:

   1- Destinataire : l'adresse mail de la personne à laquelle on veut envoyer le mail
   2-Objet : le sujet du mail, tel qu'il apparaîtra dans les clients de messagerie
   3- Message : le contenu principal du mail, tel qu'il apparaîtra dans les clients de messagerie
   4- Entêtes (= headers) : des informations techniques facultatives.
   5- Paramètres : d'autres informations techniques facultatives.
 */
    mail('dave.loper@afpa.com',
         "Confirmation d'inscription",
         "Bienvenue sur Jarditou ! Tu peux y acheter des tomates cerises pour l'apéro et une brouette pour les transporter. Sors vite ton American Express !",
         array('From' => 'contact@jarditou.com',
                'Reply-To' => 'commercial@jarditou.com',
                'X-Mailer' => 'PHP/' . phpversion() 
                )
        );
        ?>
</body>
</html>