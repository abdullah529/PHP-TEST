<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <button type="submit" name="openp">Open Page</button>
    </form>
</body>
</html>
<?php
    if(isset($_POST['openp'])){
        header("refresh:3;url=https://academy.codershiyar.com");
    }
?>