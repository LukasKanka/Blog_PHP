<?php
session_start();

if (!isset($_SESSION['step'])) {
    $_SESSION['step'] = 1;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['choice'])) {
        $_SESSION['step'] = $_POST['choice'];
    }
}

if (isset($_GET['restart'])) {
    session_destroy();
    header('Location: ' . $_SERVER['PHP_SELF']);
    exit;
}

$step = $_SESSION['step'];
$story = '';
$choices = [];

switch ($step) {
    case 1:
        $story = 'Ocitl jsem se před barem, mám pěkný vokno a je my blbě. Asi jsem se někde porval. Vlastně si uvědomuji že ani nevím kdo jsem. Aspoň mohu vstát, protože začíná pršet a já musím jít.';
        $choices = [
            ['text' => 'Cesta', 'value' => 2]
        ];
        break;
    case 2:
        $story = 'Jsi na ulici a začíná pršet. Vidíš nadzemku a bar. Kam půjdeš?';
        $choices = [
            ['text' => 'Nadzemka', 'value' => 3],
            ['text' => 'Bar', 'value' => 4]
        ];
        break;
    case 3:
        $story = 'Jsi na nástupišti. Vidíš město, zachmuřené město. Vedle stojí tajemný týpek. Dáš se sním do řeči nebo počkáš na vlak?';
        $choices = [
            ['text' => 'Prohodím pár slov', 'value' => 5],
            ['text' => 'Počkám', 'value' => 6]
        ];
        break;
    case 4:
        $story = 'Jsi ve dveřích baru. Ve vnitř je prázdno a jen barman . Chceš jít dál?';
        $choices = [
            ['text' => 'Ano', 'value' => 7],
            ['text' => 'Ne', 'value' => 8]
        ];
        //     break;
        // case 4:
        //     $story = "Dorazil jsi do města, čeká tě tu sexy princezna. Konec hry.";
        //     break;
        // case 5:
        //     $story = "Tak si sedni a přemýšlej. Konec hry.";
        //     break;
        // case 6:
        //     $story = "Sežrala tě jeskyní příšera. Konec hry.";
        //     break;
        // case 7:
        //     $story = "Vrátil jsi se zpět do lesa a dokonce života v něm budeš bloudit v kruhu. Konec hry.";
        //     break;
}
?>

<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="./assets/css/style.css">   

    <title>Butcher</title>
</head>
<body>
<div class="game-wrapper">
<div class="game">
    <h1>Butcher</h1>
    <p><?php echo $story; ?></p>
    <?php if (!empty($choices)): ?>
        <form method="post" action="" >
            <?php foreach ($choices as $choice): ?>
                <button type="submit" name="choice" value="<?php echo $choice['value']; ?>"><?php echo $choice['text']; ?></button>
            <?php endforeach; ?>
        </form>
   
     <?php else: ?>
        <p>Hra skončila. Začni znovu <a href="?restart=1">tady</a>.</p>
    <?php endif; ?>
    </div>
    <footer class="footer">
            <div class="footer-wrapper">
                <div class="footer-text">
<!--                    <a class="footer-contact" href="#">Contact</a>-->
                    <div class="footer-text-div">
                        <p class="footer-text-p">Příběh je pravidelně aktualizováný.</p>
                        <p class="footer-text-p">Hra je přístupná 18let.</p>
                        <p class="footer-text-p">
                            © 2024 - Lukáš Kaňka. All Rights Reserved.

                        </p>


                    </div>
                </div>
            </div>
        </footer>
            
            </div>
            
</body>
</html>
