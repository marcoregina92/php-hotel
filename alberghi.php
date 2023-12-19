
<?php
$voto = $_GET["vote"] ?? "";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Trova il tuo Hotel!</title>
</head>


<!-- Array di hotels -->
<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];

?>

<body>

<table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">Nome Hotel</th>
      <th scope="col">Descrizione</th>
      <th scope="col">Parking</th>
      <th scope="col">Voto</th>
      <th scope="col">Distanza dal centro</th>
    </tr>
  </thead>
  <tbody>
  <?php
    
    foreach ($hotels as $hotel) {
        if ($voto == $hotel["vote"]) {
            echo "<tr>";
                echo "<td>" . $hotel["name"] . "</td>";
                echo "<td>" . $hotel["description"] . "</td>";
                if ($hotel["parking"] == true) {
                    echo "<td> Si </td>";
                } else {
                    echo "<td> No </td>";
    
                }
                echo "<td>" . $hotel["vote"] . "</td>";
                echo "<td>" . $hotel["distance_to_center"] . " km" . "</td>";
            echo "</tr>";
        }
        if ($voto=="") {
            echo "<tr>";
                echo "<td>" . $hotel["name"] . "</td>";
                echo "<td>" . $hotel["description"] . "</td>";
                if ($hotel["parking"] == true) {
                    echo "<td> Si </td>";
                } else {
                    echo "<td> No </td>";
    
                }
                echo "<td>" . $hotel["vote"] . "</td>";
                echo "<td>" . $hotel["distance_to_center"] . " km" . "</td>";
            echo "</tr>";
        }

    }

    ?>
  </tbody>
</table>

<a href="ricerca.php"> Torna alla ricerca hotel per voto </a>

</body>
</html>