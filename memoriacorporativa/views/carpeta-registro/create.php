<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Carpetaregistro $model */

$this->title = 'Ingresar Carpeta Registro';
$this->params['breadcrumbs'][] = ['label' => 'Carpetaregistros', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="carpeta registro-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
