<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Mahasiswa */

$this->title = 'Update Mahasiswa: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Mahasiswas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="mahasiswa-update">

    <section class="section">
        <div class="section-header">
            <h1><?= Html::encode($this->title) ?></h1>
        </div>
    </section>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>