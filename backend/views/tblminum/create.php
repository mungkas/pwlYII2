<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tblminum */

$this->title = 'Create Tblminum';
$this->params['breadcrumbs'][] = ['label' => 'Tblminums', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tblminum-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
