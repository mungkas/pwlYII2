<?php

namespace backend\controllers;

use Yii;
use app\models\Tblminum;
use backend\models\TblmimumSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * TblminumController implements the CRUD actions for Tblminum model.
 */
class TblminumController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Tblminum models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new TblmimumSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Tblminum model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Tblminum model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Tblminum();

        if ($model->load(Yii::$app->request->post())){
            $gbr=UploadedFile::getInstance($model, 'gambar');
            $model->gambar=$gbr->name;
            $model->save();
            $gbr->saveAs(Yii::getAlias('@gambarImgPath') . '/' . $gbr->name);

            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Tblminum model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
            $oldgbr=$model->gambar;
            if($oldgbr !=""){
                unlink(Yii::getAlias('@gambarImgPath') . '/' . $oldgbr);
            }
            $gbr=UploadedFile::getInstance($model, 'gambar');
            $model->gambar=$gbr->name;
            $model->save();
            $gbr->saveAs(Yii::getAlias('@gambarImgPath') . '/' . $gbr->name);

            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Tblminum model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id);
        unlink(Yii::getAlias('@gambarImgPath') . '/' . $oldgbr);
        $model->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Tblminum model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Tblminum the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Tblminum::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
