<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body class="d-flex flex-column h-100">
    <?php $this->beginBody() ?>
    <div id="app">
        <div class="main-wrapper">
            <!-- navbar -->
            <?= $this->render('navbar') ?>
            <!-- sidebar -->
            <?= $this->render('sidebar') ?>
            <!-- Main Content -->
            <div class="main-content">
                <?= Alert::widget() ?>
                <?= $content ?>
            </div>
            <?= $this->render('footer') ?>
        </div>
    </div>
    <?php $this->endBody() ?>
</body>
<!-- <script>
    jQuery('document').ready(function() {
        jQuery('#mahasiswa-tanggal_lahir').datepicker();
    });
</script> -->

</html>
<?php $this->endPage() ?>