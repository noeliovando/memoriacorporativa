<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Division $model */

$this->title = 'Editar Division: ' . $model->nombre;
$this->params['breadcrumbs'][] = ['label' => 'Divisions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nombre, 'url' => ['view', 'nombre' => $model->nombre]];
$this->params['breadcrumbs'][] = 'Editar';
?>
<div class="division-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
