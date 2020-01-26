<!-- Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno
avrà Nome, Cognome e un array contenente i suoi voti scolastici.
Stampare Nome, Cognome e la media dei voti di ogni alunno. -->
<?php
$class = [
  [
    'name' => 'John',
    'last_name' => 'Smith',
    'scores' => [
      9,8,7,6
    ]
  ],
  [
    'name' => 'Sara',
    'last_name' => 'Powels',
    'scores' => [
      5,8,2,5
    ]
  ],
  [
    'name' => 'Eric',
    'last_name' => 'Scott',
    'scores' => [
      6,9,8,4
    ]
  ],
];

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP Snack 7</title>
  </head>
  <body>
    <?php
      foreach ($class as $student) { ?>
    <strong> Student: <?php echo $student['name'] . ' ' . $student['last_name']; ?>
    </strong>
    <?php
        $sum = 0;
        foreach ($student['scores'] as $score) {
          $sum = $sum + $score;
        }
        $totalScores = count($student['scores']);
        $avg = $sum / $totalScores; ?>
    <p>Average: <?php echo $avg; ?>
    </p>
      <?php
    } ?>
  </body>
</html>
