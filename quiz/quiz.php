<?php
require 'pytaniaIOdpowiedzi.php'
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Zadanie Quiz</title>
</head>

<body>
<h2>Zadanie Quiz</h2>

<?php
$licznikPytań = 0;
$punkty = 0;
foreach ($pytaniaIOdpowiedzi as $pytanieIOdpowiedzi) {
    $numerPoprawnejOdpowiedzi = $pytanieIOdpowiedzi[2];
    $licznikPytań++;
    if (array_key_exists('question-' . $licznikPytań . '-answers', $_POST)) {
        $odpowiedz = $_POST['question-' . $licznikPytań . '-answers'];

        if ($odpowiedz == $numerPoprawnejOdpowiedzi) {
            $punkty++;
        }
    }
}
if ($licznikPytań > 0) {
    echo "Twój wynik poprawnych odpowiedzi: $punkty";
}
?>

<form method="post" action="quiz.php"
      id="form1" name="form1">
    <?php
    $licznikPytań = 0;
    foreach ($pytaniaIOdpowiedzi as $pytanieIOdpowiedzi) {
        $pytanie                  = $pytanieIOdpowiedzi[0];
        $odpowiedzi               = $pytanieIOdpowiedzi[1];
        $numerPoprawnejOdpowiedzi = $pytanieIOdpowiedzi[2];
        $licznikPytań++;
        ?>
        <li>
            <h3><?php echo $pytanie; ?></h3>

            <?php
            $licznikOdp = 0;
            foreach ($odpowiedzi as $odpowiedz) {
                $licznikOdp++;
                echo '<div>';
                echo '<input type="radio" name="question-' . $licznikPytań . '-answers" id="question-' . $licznikPytań . '-answers-' . $licznikOdp . '" value="' . $licznikOdp . '"/>';
                echo '<label for="question-' . $licznikPytań . '-answers-' . $licznikOdp . '">' . $odpowiedz . '</label>';
                echo '</div>';
            }
            ?>
        </li>
    <?php
    }
    ?>
    <br>
    <input type="submit" value="Wyślij"/>
</form>
</body>
</html>