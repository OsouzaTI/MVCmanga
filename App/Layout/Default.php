<!DOCTYPE html>
<html lang="pt" class="bg-purple01">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $view ?></title>

  <!-- scripts -->
  <script src="/App/Assets/js/jquery-3.6.0.js"></script>
  <script src="/App/Assets/js/slick.js"></script>
  <script src="/App/Assets/js/fontawesome.js"></script>
  <script src="/App/Assets/js/tailwind.3.1.3.js"></script>
  <script src="/tailwind.config.js"></script>  

  <!-- styles -->
  <link rel="stylesheet" href="/App/Assets/css/slick-theme.css">
  <link rel="stylesheet" href="/App/Assets/css/slick.css">
  <link rel="stylesheet" href="/App/Assets/css/degrade-image.css">
  <link rel="stylesheet" href="/App/Assets/css/all.min.css">
  <link rel="stylesheet" href="/App/Assets/css/parallax.css">


</head>
<body>
  <?= $this->component->render('banner', [
    $this->assets->fetch('img/banners/banner01.jpg')
  ]) ?>
  <?= $this->component->render('navbar') ?>
  <?= $render() ?>
</body>
<footer></footer>
</html>

