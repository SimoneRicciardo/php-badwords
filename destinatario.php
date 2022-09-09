<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styleD.css">
    <title>Document</title>
</head>
<body>
    <?php
        $parolaDaCensurare = $_POST['censura'];

        $censurata = $parolaDaCensurare;

        $stringa = "„Io non sono tagliato per fare il soldato e l'eroe. E la terribile paura del dolore, delle mutilazioni o della morte non è l'unica ragione. Non si può obbligare un soldato a smettere di avere paura, tuttavia gli si può fornire una motivazione che lo aiuti a superarla. E io non ho una simile motivazione. Non posso averla. Sono uno strigo. Un mutante creato artificialmente. Uccido mostri. Per soldi. Difendo i bambini, quando i genitori mi pagano. Se a pagarmi saranno i genitori nilfgaardiani, difenderò i bambini nilfgaardiani. E, anche se il mondo sarà ridotto in rovina, cosa che mi sembra improbabile, ucciderò mostri sulle rovine del mondo finché uno di loro non ucciderà me. Questo è il mio destino, la mia motivazione, la mia vita e il mio rapporto nei confronti del mondo. Non l'ho scelto io. L'hanno fatto altri per me.“ —  Andrzej Sapkowski, libro Il sangue degli elfi.";

        $stringaSostituita = str_replace($censurata, '***', $stringa);

    ?>
    <div class="container">
        <h1>Testo censurato</h1>
        <p><?php echo $stringaSostituita; ?></p>
    </div>
</body>
</html>