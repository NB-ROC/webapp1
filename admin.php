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

    <form action="./dbcalls/create.php" method="post">
        <label for="">typ hier je gerechtnaam in:</label><br>
        <input type="text" name="gerecht" id="1">

        <input type="submit" value="submit">
    </form>


    </main>

    <?php include('./includes/footer.php'); ?>

</body>

</html>