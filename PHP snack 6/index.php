<!-- Utilizzare questo array: https://pastebin.com/CkX3680A.
Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i
PM in un rettangolo verde. -->
<?php

    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title></title>
  </head>
  <body>
    <?php
    foreach ($db as $key => $value) {
      if ($key == 'teachers') { ?>
        <div class="grey">

        <?php
      } else { ?>
        <div class="green">


        <?php
      }
        echo $key . '<br>';
        foreach ($value as $person) {
            echo $person['name'];
            echo $person['lastname'];
            echo '<br>';
          } ?>
      </div>
    <?php
    }?>

  </body>
</html>
