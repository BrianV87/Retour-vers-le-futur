<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Calcul de durée et carburant pour voyage temporel</title>
    <style>
    body {
        font-family: Arial, sans-serif;
    }

    .container {
        display: flex;
        justify-content: space-between;
        max-width: 800px;
        margin: 0 auto;
    }

    .section {
        padding: 20px;
        border: 1px solid #ccc;
        background-color: #f9f9f9;
    }
    </style>
</head>

<body>
    <?php
    // Création des objets DateTime
    $presentTime = new DateTime('2015-10-21 16:06:00'); // Date et heure actuelle : 21 octobre 2015 à 04:06 PM
    $destinationTime = new DateTime('2015-10-21 16:29:00'); // Date et heure de destination : 21 octobre 2015 à 04:29 PM

    // Formatage des dates pour l'affichage
    $presentTimeFormatted = $presentTime->format('m/d/Y A h:i');
    $destinationTimeFormatted = $destinationTime->format('m/d/Y A h:i');

    // Calcul de la durée entre les deux dates
    $interval = $presentTime->diff($destinationTime);

    // Formatage de l'intervalle pour l'affichage
    $intervalFormatted = $interval->format('%y années, %m mois, %d jours, %h heures et %i minutes');

    // Bonus: calcul du nombre de minutes entre les deux dates
    $intervalInMinutes = $interval->days * 24 * 60 + $interval->h * 60 + $interval->i;
    $requiredFuel = ceil($intervalInMinutes / 10000);
    ?>

    <div class="container">
        <div class="section">
            <h2>Present time & Destination time</h2>
            <p>Present time: <?php echo $presentTimeFormatted; ?></p>
            <p>Destination time: <?php echo $destinationTimeFormatted; ?></p>
        </div>
        <div class="section">
            <h2>Intervalle et carburant nécessaire</h2>
            <p>Intervalle entre les deux dates: <?php echo $intervalFormatted; ?></p>
            <p>Carburant nécessaire pour le trajet temporel: <?php echo $requiredFuel; ?> litres</p>
        </div>
    </div>
</body>

</html>