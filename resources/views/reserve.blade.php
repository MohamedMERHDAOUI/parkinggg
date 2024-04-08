<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réservation de places de parking</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .navbar {
            background-color: #333;
            overflow: hidden;
        }
        .navbar a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
        }
        .title {
            background: linear-gradient(to right, yellow, white);
            padding: 20px;
            text-align: center;
            margin-top: 20px;
        }
        .steps {
            margin-top: 20px;
            text-align: center;
        }
        .footer {
            background: #333;
            color: white;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        .timetable {
            background: linear-gradient(to right, yellow, white);
            padding: 20px;
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>

<div class="navbar">
    <a href="<?= url('/') ?>" class="text-sm text-gray-700 dark:text-gray-500 underline">Accueil</a>
    <a href="<?= url('/dashboard') ?>" class="text-sm text-gray-700 dark:text-gray-500 underline">Connexion</a>
    <a href="<?= url('/register') ?>" class="text-sm text-gray-700 dark:text-gray-500 underline">Inscription</a>
    <a href="<?= url('/reserve') ?>" class="text-sm text-gray-700 dark:text-gray-500 underline">Mes Réservations</a>
    <a href="<?= url('/create') ?>" class="text-sm text-gray-700 dark:text-gray-500 underline">Création</a>
</div>

<div class="title">
    <h1>Premier arrivé, premier servi</h1>
    <h2>En 2 minutes, réservez vos places de parking dans une rapidité et facilité incomparable aux autres.</h2>
</div>

<div class="steps">
    <h2>Comment ça marche :</h2>
    <ol>
        <li>Choisissez votre lieu de stationnement.</li>
        <li>Sélectionnez la date et l'heure de début de votre réservation.</li>
        <li>Procédez au paiement en ligne de manière sécurisée.</li>
        <li>Recevez votre confirmation de réservation par email.</li>
    </ol>
</div>

</body>
</html>
