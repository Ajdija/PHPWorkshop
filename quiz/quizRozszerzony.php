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
session_start();

if (!isset($_POST['pytanie'])) {
    $_POST['pytanie']   = 0;
    $_SESSION['punkty'] = 0;
} else {
    $pytanieIOdpowiedzi       = $pytaniaIOdpowiedzi[$_POST['pytanie']];
    $numerPoprawnejOdpowiedzi = $pytanieIOdpowiedzi[2];

    if (array_key_exists('question-' . ($_POST['pytanie']) . '-answers', $_POST)) {
        $odpowiedz = $_POST['question-' . ($_POST['pytanie']) . '-answers'];
        if ($odpowiedz == $numerPoprawnejOdpowiedzi) {
            $_SESSION['punkty']++;
        }
    }
    $_POST['pytanie']++;

    if (($_POST['pytanie'] + 1) > count($pytaniaIOdpowiedzi)) {
        echo "Dziękujemy za wypełnienie! <br/> Poprawnych odpowiedzi: " . $_SESSION['punkty'];
        echo "<br /><a href='quizRozszerzony.php'>Zagraj jeszcze raz</a>";
        exit;
    }
}
?>
<form method="post" action="quizRozszerzony.php"
      id="form1" name="form1">
    <?php
    $pytanieIOdpowiedzi = $pytaniaIOdpowiedzi[$_POST['pytanie']];
    $pytanie = $pytanieIOdpowiedzi[0];
    $odpowiedzi = $pytanieIOdpowiedzi[1];
    $numerPoprawnejOdpowiedzi = $pytanieIOdpowiedzi[2];
    $licznikPytan = $_POST['pytanie'];
    ?>
    <li>
        <h3><?php echo $pytanie; ?></h3>

        <?php
        $licznikOdp = 0;
        foreach ($odpowiedzi as $odpowiedz) {
            $licznikOdp++;
            echo '<div>';
            echo '<input type="radio" name="question-' . $licznikPytan . '-answers" id="question-' . $licznikPytan . '-answers-' . $licznikOdp . '" value="' . $licznikOdp . '"/>';
            echo '<label for="question-' . $licznikPytan . '-answers-' . $licznikOdp . '">' . $odpowiedz . '</label>';
            echo '</div>';
        }
        ?>
    </li>
    <br>
    <input type="hidden" name="pytanie" id="" value="<?php echo(isset($_POST['pytanie']) ? $_POST['pytanie'] : 0) ?>"/>

    <input type="submit" value="Wyślij"/>
</form>
</body>
</html>