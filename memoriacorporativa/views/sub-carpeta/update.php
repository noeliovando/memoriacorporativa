<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\subcarpeta $model */

$this->title = 'Editar SubCarpeta: ' . $model->nombre;
$this->params['breadcrumbs'][] = ['label' => 'Subcarpetas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nombre, 'url' => ['view', 'nombre' => $model->nombre]];
$this->params['breadcrumbs'][] = 'Editar';
?>
<div class="subcarpeta-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
