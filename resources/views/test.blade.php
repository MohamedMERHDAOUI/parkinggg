<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Réservation de place de parking</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 0;
                background-color: #f7f7f7;
            }
            .container {
                max-width: 1200px;
                margin: 0 auto;
                padding: 20px;
                text-align: center;
            }
            .TitrePrincipale {
                font-size: 5em;
                color: #333;
                margin-bottom: 20px;
                text-shadow: 2px 2px 3px rgba(0, 0, 0, 0.1);
            }
            .TitreSecondaire {
                font-size: 3em;
                color: #555;
                margin-bottom: 50px;
            }
            .button {
                border: none;
                color: white;
                padding: 16px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                margin: 4px 2px;
                cursor: pointer;
                transition: background-color 0.3s ease;
                border-radius: 5px;
            }
            .button3 {
                background-color: #e74c3c;
            }
            .button3:hover {
                background-color: #c0392b;
            }
            .button2 {
                background-color: #3498db;
            }
            .button2:hover {
                background-color: #2980b9;
            }
            .button1 {
                background-color: #2ecc71;
            }
            .button1:hover {
                background-color: #27ae60;
            }
            .reservation-form {
                margin-top: 50px;
                text-align: left;
            }
            .reservation-form label {
                display: block;
                margin-bottom: 10px;
                font-weight: bold;
            }
            .reservation-form input[type='text'],
            .reservation-form input[type='email'] {
                width: 100%;
                padding: 10px;
                margin-bottom: 20px;
                border-radius: 5px;
                border: 1px solid #ccc;
            }
            .reservation-form input[type='submit'] {
                background-color: #4CAF50;
                color: white;
                border: none;
                padding: 15px 32px;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                margin-top: 10px;
                border-radius: 5px;
                cursor: pointer;
            }
            .reservation-form input[type='submit']:hover {
                background-color: #45a049;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="TitrePrincipale"><strong>Réservation de place de parking</strong></div>
            <div class="TitreSecondaire"><strong>Accueil</strong></div>
            <div>
              <button class="button button1" onclick="window.location.href='/create'">Reservation</button>
                <button class="button button2" onclick="window.location.href='/dashboard'">Connexion</button>
                <button class="button button3" onclick="window.location.href='/register'">Inscription</button>

            </div>
            <div class="reservation-form">
                <form action="#" method="post">
                    <label for="nom">Nom :</label>
                    <input type="text" id="nom" name="nom" required>
                    <label for="email">Email :</label>
                    <input type="email" id="email" name="email" required>
                    <input type="submit" value="Réserver">
                </form>
            </div>
        </div>
    </body>
</html>
