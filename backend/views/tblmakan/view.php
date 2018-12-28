<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Tblmakan */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tblmakans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tblmakan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'deks',
            'id',
            'nama',
            'harga',[
                'attribute'=>'gambar',
                'value'=>Yii::getAlias('@gambarImgUrl') . '/' . $model->gambar,
                'format' => ['image',['width'=>'100','height'=>'100']],   
            ]

        ],

    ]) ?>

</div>
