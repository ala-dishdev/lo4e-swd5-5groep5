<!DOCTYPE html>
<html lang="nl">
    <?php
    session_start();
    $_SESSION['fontsize'] = $_SESSION['fontsize'] ?? 16; // Stel standaard grootte in
    if ($_SERVER['REQUEST_METHOD'] == 'POST') 
        $_SESSION['fontsize'] += isset($_POST['bigger']) ? 2 : (isset($_POST['smaller']) ? -2 : 0);
        $_SESSION['fontsize'] = max(10, min(40, $_SESSION['fontsize']));
        ?>
<head>
    <meta charset="UTF-8">
    <!--Zorgt ervoor dat de pagina correct word weergegeven op mobiele apparaten.-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!--SEO (search engen optimation) Metagegevens -->
    <!-- Descripption voor zoekmachines en sociale media, omschrijft kort de inhoud van de pagina-->
    <meta name="description" content="hier kan je een tafel reserveeren voor het restourant umami shusi">
    <!-- Keywords Helpt zoekmachines begrijpen waar de pagina over gaat. -->
    <meta name="Keywords" content="Restorant, shusi, eten, vis">
    <!-- Author de naam van de developer van de pagina. -->
    <meta name="author" content="Tijs Vreijling">

    <title>Umami Sushi</title>
    <!-- Favicon kleine afbeelding die wordt weergegeven in de browser-tabbladen -->
    <link rel="icon" href="fotos/logo_vis.png" type="image/x-icon">
    <!-- link naar de stylesheet-->
    <link rel="stylesheet" href="styletijs.css">
    <link rel="javaschript" href="toegang.js">
    <link href='https://fonts.googleapis.com/css?family=Julee' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Jua' rel='stylesheet'>
    <script src="script.js"></script>
</head>

<body style="font-size: <?php echo $_SESSION['fontsize']; ?>px;">
    <header id="header1">
        <nav>
            <li><a href="index.php">Home</a></li>
            <li><a href="eten.php">Menu</a></li>
            <li><a href="vacatures.php">Vactures</a></li>
            <li><a href="reserveren.php">Reserveren</a></li>
            <li><a href="tijden.php">Openingstijden en Locatie</a></li>
        </nav>
        <img src="fotos/logo.png" alt="logo" class="logo">
    </header>

    <div id="header2" class="sushi">
        <button type="button" onclick="change_body_class('high_contrast')">Verhoog contrast</button>
        <button 
            class="button_dark" 
            type="button" 
            onclick="change_body_class('dark')">
            Dark mode
        </button>
        
        <button class="button_light" type="button" onclick="change_body_class('light')">Light mode</button>        
    </div>

    <footer id="footer">
        <p>&copy; 2025 Umami Sushi. Alle rechten voorbehouden.</p>
    </footer>
    
    <div class="content">
        <form method="post">
            <button type="submit" name="smaller">- Verkleinen</button>
            <button type="submit" name="bigger">+ Vergroten</button>
        </form>
    </div>
</body>



