<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" >
    <title>Zadanie ostatnie odwiedziny</title>
</head>

<body>
<h2>Zadanie ostatnie odwiedziny</h2>


<?php
if(!isset($_COOKIE['wizyta']))
{
    setcookie('wizyta', time(), time() + 30 * 99666);
    echo 'Witaj po raz pierwszy!';
}
else
{
    echo 'Cześć! Ostatni raz odwiedziłeś nas '.date('d.m.Y, H:i', $_COOKIE['wizyta']);
    setcookie('wizyta', time(), time() + 30 * 99666);
}

?>

</body>
</html>
