<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demander une nouvelle réservation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .card {
            width: 400px;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }
        .card-header {
            font-size: 24px;
            font-weight: bold;
            text-align: center;
            margin-bottom: 20px;
        }
        .card-body {
            text-align: center;
        }
        .btn-primary {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 15px 32px;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .btn-primary:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="card">
        <div class="card-header">Demander une nouvelle réservation</div>
        <div class="card-body">
            <p>Cliquez sur le bouton ci-dessous pour lancer une demande de réservation :</p>
            <form action="{{ route('reservations.store') }}" method="post">
                @csrf
                <button type="submit" class="btn btn-primary">Demander une réservation</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
