<?php
namespace kouosl\siparis\controllers\backend;
use kouosl\siparis\models\Orders;
use Yii;

/**
 * Default controller for the `siparis` module
 */
class DefaultController extends \kouosl\base\controllers\backend\BaseController
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        if(Yii::$app->user->identity->id != 1) {
            Yii::$app->session->setFlash('error', 'Admin yekiniz bulunmamaktadır!');
            return $this->render('emptyPage');
        }
        //else
        $orders = Yii::$app->db->createCommand('SELECT * FROM orders')->queryAll();
        return $this->render('_index', ['orders' => $orders]);
    }

    public function actionDeleteFunction($sID){
        if (isset($sID) && $sID!='') {
            $orderItem = Orders::findOne($sID);
            $orderItem->delete();
        }
        $orders = Yii::$app->db->createCommand('SELECT * FROM orders')->queryAll();
        return $this->render('_index', ['orders' => $orders]);
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
