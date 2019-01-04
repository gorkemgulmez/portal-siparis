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
}
