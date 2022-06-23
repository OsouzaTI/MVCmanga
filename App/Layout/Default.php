<!DOCTYPE html>
<html lang="pt" class="bg-purple01">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $view ?></title>
  <script src="App/Assets/js/tailwind.3.1.3.js"></script>
  <script src="tailwind.config.js"></script>    
  <link rel="stylesheet" href="App/Assets/css/degrade-image.css">
  <script src="App/Assets/js/fontawesome.js"></script>
  <link rel="stylesheet" href="App/Assets/css/all.min.css">
</head>
<body>
  <?= $this->component->render('banner', [
    $this->assets->fetch('img/banners/banner01.jpg')
  ]) ?>
  
  <?= $render() ?>
</body>
<footer></footer>
</html>

