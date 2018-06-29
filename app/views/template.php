<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= SITE_NAME; ?> <?php echo (isset($title)) ? '- ' . $title : ''; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?=BASE_URL?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link rel="stylesheet" href="<?=BASE_URL?>/css/style.css">
</head>
<body>
    <?php include('inc/nav-deslogado.php'); ?>
    <?php $this->loadViewInTemplate($view, $data) ?>

    <script src="<?=BASE_URL?>/js/jquery.js"></script>
    <script src="<?=BASE_URL?>/js/poper.js"></script>
    <script src="<?=BASE_URL?>/js/bootstrap.js"></script>
    <script src="<?=BASE_URL?>/js/main.js"></script>
</body>
</html>