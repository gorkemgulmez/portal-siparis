<?php
namespace kouosl\siparis\controllers\frontend;
use kouosl\siparis\models\Orders;


use yii\helpers\ArrayHelper;
use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use kouosl\iletisim\models\ContactForm;
use kouosl\iletisim\models\Tablo;
use kouosl\iletisim\models\UploadForm;
use yii\web\UploadedFile;
use yii\filters\Cors;

/**
 * Default controller for the `siparis` module
 */
class DefaultController extends \kouosl\base\controllers\frontend\BaseController
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        $model = new Orders();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $model->user_id = Yii::$app->user->identity->id;
            if($model->save()) {
                Yii::$app->session->setFlash('success', 'Başarılı.');
            }
            else {
                Yii::$app->session->setFlash('error', 'Hata!');
            }
            return $this->refresh();
        } else {
            $userOrders = Yii::$app->db->createCommand("SELECT * FROM orders WHERE status='Yolda' and user_id=". Yii::$app->user->identity->id)->queryAll();
            return $this->render('_index', ['model' => $model, 'userOrders' => $userOrders]);
        }
    }

    public function actionCancelFunction($sID){
        if (isset($sID) && $sID!='') {
            $orderItem = Orders::findOne($sID);
            $orderItem->status = 'Iptal';
            $orderItem->save();

            $model = new Orders();
            $userOrders = Yii::$app->db->createCommand("SELECT * FROM orders WHERE status='Yolda' and user_id=". Yii::$app->user->identity->id)->queryAll();
            return $this->render('_index', ['model' => $model, 'userOrders' => $userOrders]);
        }
        return $this->goHome();

    }
}
