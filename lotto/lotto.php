<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Zadanie lotto</title>
</head>

<body>
<h2>Zadanie lotto</h2>

<?php
function losuj6Liczb($min, $max, $ilosc) {
    $numeryWylosowane = range($min, $max);
    shuffle($numeryWylosowane);
    return array_slice($numeryWylosowane, 0, $ilosc);
}

if (array_key_exists("typowaneLiczby", $_POST))
{
    $start = 1;
    $end = 49;
    $iloscLiczb = 6;
    $wylosowaneLiczby = losuj6Liczb($start, $end, $iloscLiczb);
    sort($wylosowaneLiczby);
    sort($_POST["typowaneLiczby"]);
    $typowaneLiczby = $_POST["typowaneLiczby"];

    echo "Wybrałaś/eś numery: <br/>";
    foreach($typowaneLiczby as $klucz => $numer)
    {
        echo "$numer ";
    }
    echo "<br />";

    echo "Automat wybrał numery: <br/>";
    foreach($wylosowaneLiczby as $klucz => $numer)
    {
        echo "$numer ";
    }
    echo "<br />";

    if($wylosowaneLiczby == $typowaneLiczby)
    {
        echo "Gratulacje! To są prawidłowe numery! Jesteś milionerem!";
    }

    echo "<p>Spróbuj jeszcze raz! Wybierz 6 liczb</p>";

}
else {
    echo "<p>Wybierz 6 liczby</p>";
}
?>

<form method="post" action="lotto.php"
      id="form1" name="form1">
<input type="checkbox" name="typowaneLiczby[]" value="1"> 1
<input type="checkbox" name="typowaneLiczby[]" value="2"> 2
<input type="checkbox" name="typowaneLiczby[]" value="3"> 3
<input type="checkbox" name="typowaneLiczby[]" value="4"> 4
<input type="checkbox" name="typowaneLiczby[]" value="5"> 5
<input type="checkbox" name="typowaneLiczby[]" value="6"> 6
<input type="checkbox" name="typowaneLiczby[]" value="7"> 7
<input type="checkbox" name="typowaneLiczby[]" value="8"> 8
<input type="checkbox" name="typowaneLiczby[]" value="9"> 9
<input type="checkbox" name="typowaneLiczby[]" value="10"> 10
<input type="checkbox" name="typowaneLiczby[]" value="11"> 11
<input type="checkbox" name="typowaneLiczby[]" value="12"> 12
<input type="checkbox" name="typowaneLiczby[]" value="13"> 13
<input type="checkbox" name="typowaneLiczby[]" value="14"> 14
<input type="checkbox" name="typowaneLiczby[]" value="15"> 15
<input type="checkbox" name="typowaneLiczby[]" value="16"> 16
<input type="checkbox" name="typowaneLiczby[]" value="17"> 17
<input type="checkbox" name="typowaneLiczby[]" value="18"> 18
<input type="checkbox" name="typowaneLiczby[]" value="19"> 19
<input type="checkbox" name="typowaneLiczby[]" value="20"> 20
<input type="checkbox" name="typowaneLiczby[]" value="21"> 21
<input type="checkbox" name="typowaneLiczby[]" value="22"> 22
<input type="checkbox" name="typowaneLiczby[]" value="23"> 23
<input type="checkbox" name="typowaneLiczby[]" value="24"> 24
<input type="checkbox" name="typowaneLiczby[]" value="25"> 25
<input type="checkbox" name="typowaneLiczby[]" value="26"> 26
<input type="checkbox" name="typowaneLiczby[]" value="27"> 27
<input type="checkbox" name="typowaneLiczby[]" value="28"> 28
<input type="checkbox" name="typowaneLiczby[]" value="29"> 29
<input type="checkbox" name="typowaneLiczby[]" value="30"> 30
<input type="checkbox" name="typowaneLiczby[]" value="31"> 31
<input type="checkbox" name="typowaneLiczby[]" value="32"> 32
<input type="checkbox" name="typowaneLiczby[]" value="33"> 33
<input type="checkbox" name="typowaneLiczby[]" value="34"> 34
<input type="checkbox" name="typowaneLiczby[]" value="35"> 35
<input type="checkbox" name="typowaneLiczby[]" value="36"> 36
<input type="checkbox" name="typowaneLiczby[]" value="37"> 37
<input type="checkbox" name="typowaneLiczby[]" value="38"> 38
<input type="checkbox" name="typowaneLiczby[]" value="39"> 39
<input type="checkbox" name="typowaneLiczby[]" value="40"> 40
<input type="checkbox" name="typowaneLiczby[]" value="41"> 41
<input type="checkbox" name="typowaneLiczby[]" value="42"> 42
<input type="checkbox" name="typowaneLiczby[]" value="43"> 43
<input type="checkbox" name="typowaneLiczby[]" value="44"> 44
<input type="checkbox" name="typowaneLiczby[]" value="45"> 45
<input type="checkbox" name="typowaneLiczby[]" value="46"> 46
<input type="checkbox" name="typowaneLiczby[]" value="47"> 47
<input type="checkbox" name="typowaneLiczby[]" value="48"> 48
<input type="checkbox" name="typowaneLiczby[]" value="49"> 49
<br>
<input type="submit" value="Wyślij"/>
</form>
</body>
</html>