<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>PHP web sity</title>
</head>
<body>
    <div class="container">

        <?php include "./blocks/header.php"?>
    
        <h3>Контактная форма</h3>

        <form action="check.php" method="post">
            <input class="form-control" type="email" name="email" placeholder="Email"><br>
            <textarea class="form-control" name="message" placeholder="Message"></textarea><br>
            <button class="btn btn-success" type="submit" name="send" >Отправить</button>
        </form>

        <?php include "./blocks/footer.php"?>

    </div>
</body>
</html>