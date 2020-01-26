<!-- Passare come parametri GET “name”, “mail” e “age” e verificare (cercando i
metodi che non conosciamo nella documentazione) che:
● “name” sia più lungo di 3 caratteri;
● “mail” contenga un punto e una chiocciola;
● “age” sia un numero.
Se tutto è ok, stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php
  $name = $_GET['name'];
  $email = $_GET['email'];
  $age = $_GET['age'];

  $error = 0;
  if (mb_strlen($name) <= 3) {
    $error = 1;
  } else if ((strpos($email,'.') === false) OR (strpos($email,'@') === false)) {
    $error = 1;
  } else if (!is_numeric($age)) {
    $error = 1;
  }

  if ($error == 1) {
    echo "No user" . " ". $name . " found";
  } else {
    echo "Welcome" . " " . $name;
  }

?>
