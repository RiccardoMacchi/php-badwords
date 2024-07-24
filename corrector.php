<?php

$testo= $_POST['testo'];

$word= $_POST['word'];

$new_text= str_replace($word,'****',$testo);

$testo_length= strlen($testo);
$new_testo_length= strlen($new_text);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h3>Il tuo testo originale è:</h3>
        <p><?php echo $testo; ?></p>
        <span>Il pragrafo è lungo: <?php echo $testo_length ?></span>
    </div>
    <div>
        <h3>Il tuo testo senza la parola <?php echo $word; ?></h3>
        <p><?php echo $new_text; ?></p>
        <span>Il pragrafo corretto è lungo: <?php echo $new_testo_length ?></span>
    </div>
    
</body>
</html>