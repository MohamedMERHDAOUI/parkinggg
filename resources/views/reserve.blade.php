<?php
echo '<!DOCTYPE html>';
echo '<html lang="fr">';
echo '<head>';
echo '    <meta charset="UTF-8">';
echo '    <meta name="viewport" content="width=device-width, initial-scale=1.0">';
echo '    <title>Réservation de places de parking</title>';
echo '    <style>';
echo '        body {';
echo '            font-family: Arial, sans-serif;';
echo '            margin: 0;';
echo '            padding: 0;';
echo '        }';
echo '        .navbar {';
echo '            background-color: #333;';
echo '            overflow: hidden;';
echo '        }';
echo '        .navbar a {';
echo '            float: left;';
echo '            display: block;';
echo '            color: white;';
echo '            text-align: center;';
echo '            padding: 14px 20px;';
echo '            text-decoration: none;';
echo '        }';
echo '        .title {';
echo '            background: linear-gradient(to right, yellow, white);';
echo '            padding: 20px;';
echo '            text-align: center;';
echo '            margin-top: 20px;';
echo '        }';
echo '        .steps {';
echo '            margin-top: 20px;';
echo '            text-align: center;';
echo '        }';
echo '        .footer {';
echo '            background: #333;';
echo '            color: white;';
echo '            text-align: center;';
echo '            padding: 10px;';
echo '            position: fixed;';
echo '            bottom: 0;';
echo '            width: 100%;';
echo '        }';
echo '        .timetable {';
echo '            background: linear-gradient(to right, yellow, white);';
echo '            padding: 20px;';
echo '            text-align: center;';
echo '            margin-top: 20px;';
echo '        }';
echo '    </style>';
echo '</head>';
echo '<body>';

echo '<div class="navbar">';

echo '<a href="' . url('/') . '" class="text-sm text-gray-700 dark:text-gray-500 underline">Accueil</a>';
echo '<a href="' . url('/dashboard') . '" class="text-sm text-gray-700 dark:text-gray-500 underline">Connexion</a>';
echo '<a href="' . url('/register') . '" class="text-sm text-gray-700 dark:text-gray-500 underline">Incrisption</a>';
echo '<a href="' . url('/reserve') . '" class="text-sm text-gray-700 dark:text-gray-500 underline">Mes Réservation</a>';
echo '<a href="' . url('/create') . '" class="text-sm text-gray-700 dark:text-gray-500 underline">creationnn</a>';
echo '</div>';

echo '<div class="title">';
echo '    <h1>Premier arrivé, premier servi</h1>';
echo '    <h2>En 2 minutes, réservez vos places de parking dans une rapidité et facilité incomparable aux autres.</h2>';
echo '</div>';

echo '<div class="steps">';
echo '    <h2>Comment ça marche :</h2>';
echo '    <ol>';
echo '        <li>Choisissez votre lieu de stationnement.</li>';
echo '        <li>Sélectionnez la date et l\'heure de début de votre réservation.</li>';
echo '        <li>Procédez au paiement en ligne de manière sécurisée.</li>';
echo '        <li>Recevez votre confirmation de réservation par email.</li>';
echo '    </ol>';
echo '</div>';



echo '</body>';
echo '</html>';
?>