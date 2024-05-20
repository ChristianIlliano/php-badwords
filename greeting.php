<?php
 $paragraph = $_GET["paragraph"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section>
        <h2>Ecco la lunghezza del tuo paragrafo</h2>
        <p><?php echo $paragraph; ?></p>
        <p>Questa è la sua lunghezza <?php echo strlen($paragraph); ?> </p>
    </section>

    <section>
        <h2>Ecco il un paragrafo censurato</h2>
        <!-- (find,replace,string,count) -->
        <p><?php echo str_replace("tutorials","***",$paragraph); ?> </p>
    </section>
</body>
</html>