<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tblmakan */

$this->title = 'Create Tblmakan';
$this->params['breadcrumbs'][] = ['label' => 'Tblmakans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tblmakan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
