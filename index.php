<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Document</title>
</head>

<body>
    <?php include('./includes/header.php'); ?>
    <main>



        <?php

        include("./dbcalls/conn.php");
        include('./dbcalls/read.php');


        //Het loopen van de database gegevens
        foreach ($result as $value) {
            echo '<div class="test">';
            echo '<br> <h1>productnaam:</h1> ' . $value['Productnaam'];
            echo '<br> <h1>prijs:</h1> ' . $value['Prijs'];
            echo '<br> <h1>afbeelding:</h1> ' . '<img src="' . $value['img'] . '">';
            echo '</div>';
        }
        ?>
    </main>

    <?php include('./includes/footer.php'); ?>

</body>

</html>