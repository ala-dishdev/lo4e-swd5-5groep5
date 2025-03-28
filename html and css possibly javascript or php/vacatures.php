<?php include "header.php" ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sollicitatieformulier</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <form class="sollicitatie-formulier" action="submit.php" method="post">
            <label for="naam">naam:</label>
            <input type="text" id="naam" name="naam" required>

            <label for="leeftijd">leeftijd:</label>
            <input type="number" id="leeftijd" name="leeftijd" required>

            <label for="contact">email/telefoonnummer:</label>
            <input type="number" id="contact" name="contact" required>

            <label for="motivatie">waarom wil je hier werken:</label>
            <textarea id="motivatie" name="motivatie" rows="3" required></textarea>

            <label for="ervaring">ervaringen:</label>
            <textarea id="ervaring" name="ervaring" rows="3" required></textarea>

            <button onclick="alert('Uw verzoek is verstuurd en u word binnenkort gebeld of gemaild')">Submit</button>
            </div>
    </main>
    <img class="space" src="fotos/sushiphoto4.png" alt="Assorted sushi">
</body>