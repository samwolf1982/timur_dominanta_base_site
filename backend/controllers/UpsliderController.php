<?php

namespace backend\controllers;

use Yii;
use common\models\Upslider;
use common\models\UpsliderSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

use yii\web\UploadedFile;

/**
 * UpsliderController implements the CRUD actions for Upslider model.
 */
class UpsliderController extends Controller
{
    /**
     * @inheritdoc
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
     * Lists all Upslider models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new UpsliderSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Upslider model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Upslider model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Upslider();
        // if ($model->load(Yii::$app->request->post()) ) {
         if (Yii::$app->request->post()) {
                 
                 $post=Yii::$app->request->post();
                 $f=   UploadedFile::getInstance($model, 'img');
                 $today=date("F-j-Y"); 
                 $structure = Yii::getAlias('@upslider_upload')."/{$today}";
                 $filename=$structure.'/'.$f->baseName . '.' . $f->extension;
                 if (!file_exists($structure)) {
                    if (!mkdir($structure, 0777, true)) {
                    Yii::trace('Failed to create folders... line: '.__LINE__);
                                                        } 
                                                }

                  //если файл существует
                  // создать папку и туда записать файл
                                            
                    if (file_exists($filename)) {
                        $uniqid = uniqid();
                         $structure_uniqid = Yii::getAlias('@upslider_upload')."/{$today}/{$uniqid}/";
                    if (!mkdir($structure_uniqid, 0777, true)) {
                    Yii::trace('Failed to create folders... line: '.__LINE__);
                                                        } 
         $filename=$structure_uniqid.'/'.$f->baseName . '.' . $f->extension;                                  
                                                }
                   
 $post['Upslider']['img']= isset($uniqid)
                               ? "/{$today}/{$uniqid}".'/'.$f->baseName . '.' . $f->extension 
                               : "/{$today}".'/'.$f->baseName . '.' . $f->extension;


              if ($model->load($post)) {
                 $f->saveAs($filename);
                
                if ($model->save()) {
                    return $this->redirect(['view', 'id' => $model->id]);   
                }else{
                      return $this->render('create', [
                'model' => $model,]);  
                }

              
                     
              }else{
                     return $this->render('create', [
                'model' => $model,
            ]);
              }

          

        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Upslider model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $model2 = new Upslider();
             if (Yii::$app->request->post()) {
                 
                 $post=Yii::$app->request->post();
                 $f=   UploadedFile::getInstance($model, 'img');
                 $f2=   UploadedFile::getInstance($model2, 'img');


                 // Yii::trace($f);
   //                Yii::trace($f2);
   // return $this->render('update', [
   //              'model' => $model,]); 
               if (is_null($f2)) {
                $post['Upslider']['img']=$model->img;
               }else{


                 $today=date("F-j-Y"); 
                 $structure = Yii::getAlias('@upslider_upload')."/{$today}";
                 $filename=$structure.'/'.$f->baseName . '.' . $f->extension;
                 if (!file_exists($structure)) {
                    if (!mkdir($structure, 0777, true)) {
                    Yii::trace('Failed to create folders... line: '.__LINE__);
                                                        } 
                                                }


 $post['Upslider']['img']= isset($uniqid)
                               ? "/{$today}/{$uniqid}".'/'.$f->baseName . '.' . $f->extension 
                               : "/{$today}".'/'.$f->baseName . '.' . $f->extension;
                    }

              if ($model->load($post)) {
                 if (!is_null($f2)) {
                     $f->saveAs($filename);
                 }
                
                
                if ($model->save()) {
                    return $this->redirect(['view', 'id' => $model->id]);   
                }else{
                      return $this->render('create', [
                'model' => $model,]);  
                }

              
                     
              }else{
                     return $this->render('create', [
                'model' => $model,
            ]);
              }

          

        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }



        // if ($model->load(Yii::$app->request->post()) && $model->save()) {
        //     return $this->redirect(['view', 'id' => $model->id]);
        // } else {
        //     return $this->render('update', [
        //         'model' => $model,
        //     ]);
        // }
    }

    /**
     * Deletes an existing Upslider model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Upslider model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Upslider the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Upslider::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
