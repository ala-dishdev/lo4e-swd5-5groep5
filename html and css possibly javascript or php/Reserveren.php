<?php include "header.php" ?>

<body>
    <main >
        <h1 class="jua">Reserveren</h1>

        <div class="form-container">
            <div class="form-group">
                <label for="Vnaam">Voornaam</label>
                <input type="text" id="Vnaam" placeholder="Value">
            </div>
            <div class="form-group">
                <label for="Anaam">Achternaam</label>
                <input type="text" id="Anaam" placeholder="Value">
            </div>
            <div class="form-group">
                <label for="Tele">Telefoon nummer</label>            
                <input type="text" id="Tele" placeholder="Value">            
            </div>
            <div class="form-group">
                <label for="Tijd">Tijd van Reservatie</label>
                <input type="time" id="Tijd" placeholder="Value">
            </div>
            <div class="form-group">
                <label for="Aperson">Aantal Personen</label>
                <input type="number" id="Aperson" placeholder="Value">
            </div>
        </div>

        <knop>
            <input type="button" onclick="alert('Verzonden')" value="Zend">
        </knop>
    </main>
    <footer>
    </footer>
</body>