<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Zadanie rozgrzewkowe 2</title>
</head>

<body>
<h2>Zadanie rozgrzewkowe 2</h2>

<?php
$pytania = ["losowy ciag" => 'Pytanie 1', "inny losowy ciag" => 'Pytanie 2', 3 => 'Pytanie 3'];

foreach ($pytania as $klucz => $wartosc){
  echo "Klucz '$klucz' o wartości '$wartosc' <br />";
}
?>

</body>
</html>