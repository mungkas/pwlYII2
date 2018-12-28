<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\TblmakanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tblmakans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tblmakan-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tblmakan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'deks',
            'id',
            'nama',
            'harga',
            'gambar',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
