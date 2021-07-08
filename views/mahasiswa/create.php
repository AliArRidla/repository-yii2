<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Mahasiswa */

$this->title = 'Create Mahasiswa';
$this->params['breadcrumbs'][] = ['label' => 'Mahasiswas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mahasiswa-create">
    <section class="section">
        <div class="section-header">
            <h1><?= Html::encode($this->title) ?></h1>
        </div>
    </section>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>