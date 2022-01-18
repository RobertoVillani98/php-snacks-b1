<!-- Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php
$partite = [
    [
        "squadraCasa" => "Olimpia Milano",
        "puntiCasa" => 55,
        "squadraOspite" => "Cantu",
        "puntiOspite" => 60
    ],
    [
        "squadraCasa" => "Virtus Bologna",
        "puntiCasa" => 86,
        "squadraOspite" => "Reggiana",
        "puntiOspite" => 74
    ],
    [
        "squadraCasa" => "Virtus Roma",
        "puntiCasa" => 65,
        "squadraOspite" => "Treviso",
        "puntiOspite" => 58
    ],
    [
        "squadraCasa" => "Dinamo Sassari",
        "puntiCasa" => 43,
        "squadraOspite" => "Partenope",
        "puntiOspite" => 72
    ]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1</title>
</head>

<body>
    <h1>Le partite di oggi</h1>
    <ul>
        <?php for ($i = 0; $i < count($partite); $i++) { ?>

            <li><?php echo "{$partite[$i]['squadraCasa']} - {$partite[$i]['squadraOspite']} | {$partite[$i]['puntiCasa']}-{$partite[$i]['puntiOspite']}"; ?></li>

        <?php } ?>
        <hr>
        <?php
        for ($i = 0; $i < count($partite); $i++) {
            echo "<li>{$partite[$i]['squadraCasa']} - {$partite[$i]['squadraOspite']} | {$partite[$i]['puntiCasa']}-{$partite[$i]['puntiOspite']}</li>";
        }
        ?>
    </ul>
</body>

</html>