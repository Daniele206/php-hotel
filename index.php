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

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP-Hotel</title>
</head>
<body>
  <div class="container d-flex flex-wrap">
    <?php foreach($hotels as $hotel): ?>
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title"><?php echo $hotel['name'] ?></h5>
          <h6 class="card-subtitle mb-2 text-body-secondary"><?php echo $hotel['description'] ?></h6>
          <?php if($hotel['parking']): ?>
            <p class="card-text">Parcheggio: Si</p>
            <?php else: ?>
              <p class="card-text">Parcheggio: No</p>
          <?php endif; ?>
          <p class="card-text">Voto medio: <?php echo $hotel['vote'] ?></p>
          <p class="card-text">Distanza dal centro: <?php echo $hotel['distance_to_center'] ?>min</p>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</body>
</html>