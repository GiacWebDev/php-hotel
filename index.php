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

  var_dump($hotels)
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- BOOTSTRAP -->
<title>PHP Hotel</title>
</head>

<body>

  <?php foreach ($hotels as $hotel): ?>

    <ul>
      <?php foreach ($hotel as $key => $value): ?>

      <li>
        <!-- Se la chiave non è "parking allora mostra il valore originale" -->
        <!-- se è parking se è true = si se è false = no (true / false sono prensenti gia in array-->
        <?php echo str_replace('_', ' ', $key) . ': ' . ($key === 'parking' ? ($value ? 'Si' : 'No') : $value);?>
      </li>

      <?php endforeach; ?>
    </ul>

  <?php endforeach; ?>

</body>
</html>
