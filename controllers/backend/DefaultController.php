<?php
namespace kouosl\siparis\controllers\backend;
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
}
