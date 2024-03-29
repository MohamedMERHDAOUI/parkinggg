<?php
echo "<!DOCTYPE html>";
echo "<html>";
echo "    <head>";
echo "        <meta charset=\"utf-8\" />";
echo "        <title>Réservation de place de parking</title>";
echo "        <style>";
echo "            body {";
echo "                font-family: Arial, sans-serif;";
echo "                margin: 0;";
echo "                padding: 0;";
echo "                background-color: #f7f7f7;";
echo "            }";
echo "            .container {";
echo "                max-width: 1200px;";
echo "                margin: 0 auto;";
echo "                padding: 20px;";
echo "                text-align: center;";
echo "            }";
echo "            .TitrePrincipale {";
echo "                font-size: 5em;";
echo "                color: #333;";
echo "                margin-bottom: 20px;";
echo "                text-shadow: 2px 2px 3px rgba(0, 0, 0, 0.1);";
echo "            }";
echo "            .TitreSecondaire {";
echo "                font-size: 3em;";
echo "                color: #555;";
echo "                margin-bottom: 50px;";
echo "            }";
echo "            .button {";
echo "                border: none;";
echo "                color: white;";
echo "                padding: 16px 32px;";
echo "                text-align: center;";
echo "                text-decoration: none;";
echo "                display: inline-block;";
echo "                font-size: 16px;";
echo "                margin: 4px 2px;";
echo "                cursor: pointer;";
echo "                transition: background-color 0.3s ease;";
echo "                border-radius: 5px;";
echo "            }";
echo "            .button3 {";
echo "                background-color: #e74c3c;";
echo "            }";
echo "            .button3:hover {";
echo "                background-color: #c0392b;";
echo "            }";
echo "            .button2 {";
echo "                background-color: #3498db;";
echo "            }";
echo "            .button2:hover {";
echo "                background-color: #2980b9;";
echo "            }";
echo "            .button1 {";
echo "                background-color: #2ecc71;";
echo "            }";
echo "            .button1:hover {";
echo "                background-color: #27ae60;";
echo "            }";
echo "            .reservation-form {";
echo "                margin-top: 50px;";
echo "                text-align: left;";
echo "            }";
echo "            .reservation-form label {";
echo "                display: block;";
echo "                margin-bottom: 10px;";
echo "                font-weight: bold;";
echo "            }";
echo "            .reservation-form input[type='text'],";
echo "            .reservation-form input[type='email'] {";
echo "                width: 100%;";
echo "                padding: 10px;";
echo "                margin-bottom: 20px;";
echo "                border-radius: 5px;";
echo "                border: 1px solid #ccc;";
echo "            }";
echo "            .reservation-form input[type='submit'] {";
echo "                background-color: #4CAF50;";
echo "                color: white;";
echo "                border: none;";
echo "                padding: 15px 32px;";
echo "                text-decoration: none;";
echo "                display: inline-block;";
echo "                font-size: 16px;";
echo "                margin-top: 10px;";
echo "                border-radius: 5px;";
echo "                cursor: pointer;";
echo "            }";
echo "            .reservation-form input[type='submit']:hover {";
echo "                background-color: #45a049;";
echo "            }";
echo "        </style>";
echo "    </head>";
echo "    <body>";
echo "        <div class=\"container\">";
echo "            <div class=\"TitrePrincipale\"><strong>Réservation de place de parking</strong></div>";
echo "            <div class=\"TitreSecondaire\"><strong>Accueil</strong></div>";
echo "            <div>";
echo "              <button class=\"button button1\" onclick=\"window.location.href='/create'\">Reservation</button>";
echo "                <button class=\"button button2\" onclick=\"window.location.href='/dashboard'\">Connexion</button>";
echo "                <button class=\"button button3\" onclick=\"window.location.href='/register'\">Inscription</button>";

echo "            </div>";
echo "            <div class=\"reservation-form\">";
echo "                <form action=\"#\" method=\"post\">";
echo "                    <label for=\"nom\">Nom :</label>";
echo "                    <input type=\"text\" id=\"nom\" name=\"nom\" required>";
echo "                    <label for=\"email\">Email :</label>";
echo "                    <input type=\"email\" id=\"email\" name=\"email\" required>";
echo "                    <input type=\"submit\" value=\"Réserver\">";
echo "                </form>";
echo "            </div>";
echo "        </div>";
echo "    </body>";
echo "</html>";
?>
