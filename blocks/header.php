<header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
      <div class="col-md-3 mb-2 mb-md-0"></div>

      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="./index.php" class="nav-link px-2 link-secondary">Главная</a></li>
        <li><a href="./about.php" class="nav-link px-2">Контакты</a></li>
      </ul>

      <div class="col-md-3 text-end">
        <?php if($_COOKIE["user"] == "true"): ?>
        
          <a class="btn btn-outline-primary me-2" href="./index.php">Кабинет</a>
          <a class="btn btn-outline-primary me-2" href="./auth.php">Выход</a>
         
        <?php else: ?>

          <a class="btn btn-outline-primary me-2" href="./auth.php">Войти</a>

        <?php endif; ?> 

      </div>
</header>