<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\AccionInmediata $model */

$this->title = 'Create Accion Inmediata';
$this->params['breadcrumbs'][] = ['label' => 'Accion Inmediatas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="accion-inmediata-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
