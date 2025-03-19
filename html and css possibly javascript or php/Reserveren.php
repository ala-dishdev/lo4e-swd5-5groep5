<?php include "header.php" ?>

<body>
    <main >
        <h1 class="jua">Reserveren</h1>

        <div class="form-container">
            <div class="form-group">
                <label for="Vnaam">Voornaam</label>
                <input type="text" id="Vnaam" placeholder="Voornaam" required>
            </div>
            <div class="form-group">
                <label for="Anaam">Achternaam</label>
                <input type="text" id="Anaam" placeholder="Achternaam" required>
            </div>
            <div class="form-group">
                <label for="Tele">Telefoon nummer</label>            
                <input type="number" id="Tele" placeholder="Telefoon nummer" required>            
            </div>
            <div class="form-group">
                <label for="Tijd">Tijd van Reservatie</label>
                <input type="time" id="Tijd" required>
            </div>
            <div class="form-group">
                <label for="Aperson">Aantal Personen</label>
                <input type="number" id="Aperson" placeholder="Aantal Personen" min="1" max="20" required>
            </div>
        </div>

        <knop>
            <input type="submit" onclick="alert('Verzonden')" value="Send">
        </knop>
    </main>
    <footer>
            <p>&copy; 2025 Umami Sushi. Alle rechten voorbehouden.</p>
        </footer>
</body>