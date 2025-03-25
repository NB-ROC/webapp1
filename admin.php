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

        <h1>admin</h1>

        <section class="create">
            <h2>CREATE</h2>
            <form action="./dbcalls/create.php" method="post">
                <label for="">typ hier je gerechtnaam in:</label>
                <input type="text" name="gerecht" id="1">
                <label for="">typ hier je prijs in:</label>
                <input type="text" name="prijs" id="1">
                <label for="">typ hier je imagelocatie in:</label>
                <input type="text" name="imagelocation" id="1">

                <input type="submit" value="submit">
            </form>
        </section>


        <h2>Update/Delete</h2>
        <section class="admin">
            <?php

            include("./dbcalls/conn.php");
            include('./dbcalls/read.php');


            //Het loopen van de database gegevens
            foreach ($result as $value) {
                echo '<div class="test">';
                echo '<br> <h1>productnaam:</h1> ' . $value['Productnaam'];
                echo '<br> <h1>prijs:</h1> ' . $value['Prijs'];
                echo '<br> <h1>afbeelding:</h1> ' . '<img src="' . $value['img'] . '">';

                echo '<form action="./dbcalls/delete.php" method="post">';
                echo '<input type="hidden" name="ID" value="' . $value['ID'] . '">';
                echo '<input type="submit" name="" value="delete" > ';
                echo '</form>';

                echo '</div>';
            }
            ?>

        </section>

    </main>

    <?php include('./includes/footer.php'); ?>

</body>

</html>