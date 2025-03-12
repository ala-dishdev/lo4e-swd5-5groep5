<?php include "header.php" ?>
<main class="Jua">
    <h1 class="Jua">Reserveren</h1>
    <article>
        <label for="Vnaam"> Voornaam: </label>
        <input type="text" name="Vnaam">
        <label for="Anaam"> Achternaam: </label>
        <input type="text" name="Anaam">
        <label for="Tele"> Telefoon nummer: </label>
        <input type="number" name="Tele">
        <label for="Tijd"> Tijd van Reservatie: </label>
        <input type="time" name="Tijd">
        <label for="Aperson"> Aatal Personen: </label>
        <input type="number" name="Aperson">
    </article>
    <knop>
        <input type="button" onclick="alert('Verzonden')" value="Zend">
    </knop>
</main>
<footer>
</footer>
</body>