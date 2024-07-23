<?php

$testo= $_POST['testo'];

$word= $_POST['word'];

$new_text= str_replace($word,'****',$testo);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Il tuo testo senza la parola <?php echo $word; ?></h3>
    <p><?php echo $new_text; ?></p>    
</body>
</html>