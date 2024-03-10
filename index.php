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

    <h3 class="mb-5">Мои статьи</h3>

    <div class="d-flex flex-wrap">
        <?php
            for($i = 0; $i < 5; $i++):
        ?>
            <div class="card mb-4 rounded-3 shadow-sm">
                <div class="card-header py-3">
                    <h4 class="my-0 fw-normal">Просто текст</h4>
                </div>
                <div class="card-body">
                    <img src="./assets/<?php echo $i + 1 ?>.jpg" alt="qwe" class="img-thumbnail">
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>10 users included</li>
                        <li>2 GB of storage</li>
                        <li>Email support</li>
                        <li>Help center access</li>
                    </ul>
                    <button type="button" class="w-100 btn btn-lg btn-outline-primary">Подробнее</button>
                </div>
            </div>
        <?php endfor?>
    </div>

    <?php include "./blocks/footer.php"?>

</div>
</body>
</html>