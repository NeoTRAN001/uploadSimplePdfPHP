<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if (isset($_GET['proceso'])){
        echo $_GET['proceso']."<br>";
    }
    ?>
    <form enctype="multipart/form-data" method="post" action="insert.php">
        Archivo: 
        <input type="file" name="archivo" size="30">
        <input type="submit" name="submit" value="Subir archivo">
    </form>
</body>
</html>