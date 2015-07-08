<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" >
    <title>Zadanie rozgrzewkowe 1</title>
</head>

<body>
<h2>Zadanie rozgrzewkowe 1</h2>

<?php
if (array_key_exists("name", $_POST)) {
?>
    <p>Cześć <?php echo $_POST["name"]?>!</p>
<?php
}
?>

<form method="post" action="helloworld.php"
      id="form1" name="form1">
    <p>Wpisz imię:</p>
    <input type="text" id="name" name="name"/>

    <input type="submit" value="Wyślij!"/>
</form>
</body>
</html>