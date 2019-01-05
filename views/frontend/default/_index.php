<?php
use kouosl\theme\helpers\Html;
use kouosl\theme\widgets\Portlet;
use yii\bootstrap\ActiveForm;
use kouosl\siparis\models\Product;
use kouosl\siparis\models\Orders;
use kouosl\siparis\Module;


$this->title = 'Sipariş Sayfası';
$data['title'] = Html::encode($this->title);
$this->params['breadcrumbs'][] = $this->title;
?>

<style type="text/css">
span {
    margin-bottom: 20px;
}

td {
    font-size: 12px;
    text-align: left;
}

.glyphicon {
    padding-top: 20px;
    font-size: 75px;
    text-align: right;
}

.close-button {
    float: right;
}

.table {
    background-color: #28d18f;
}

#overlay {
    position: fixed;
    display: none;
      width: 100%;
      height: 100%;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background-color: rgba(0,0,0,0.5);
      z-index: 2;
      cursor: pointer;
}

#card-detail {
    position: absolute;
      top: 50%;
      left: 50%;
      font-size: 50px;
      color: white;
      transform: translate(-50%,-50%);
      -ms-transform: translate(-50%,-50%);
}

</style>

<div class="site-index">
    <div class="jumbotron">

        <h2><?php
        $lang = yii::$app->session->get('lang');
        			\Yii::$app->language = $lang;
        			yii::$app->session->set('lang',$lang);
        			\Yii::$app->language = 'tr-TR'; // /iletisim sayfası default olarak kendini en-US ayarladığı için tr'yi belirtmek zorunda kaldım. Çeviri özelliği çalışıyor. Module.php ayarları yapıldı.
                    echo Module::t('siparis','Orders');
        ?></h2>
        <button type="button" class="btn btn-info collapsed" data-toggle="collapse" data-target="#add-menu" ><?php echo Module::t('siparis','Add Order'); ?></button>
        <div id="add-menu" class="collapse jumbotron" style="width:50%; margin:0px auto;">
            <?php $form = ActiveForm::begin(['id' => 'contact-form','options' => ['enctype' => 'multipart/form-data']]); ?>

                <?= $form->field($model, 'product_id')->textInput(['autofocus' => true]) ?>
                <?= $form->field($model, 'address') ?>
                <?= $form->field($model, 'total_number') ?>
                <?= Html::submitButton('Gönder', ['class' => 'btn btn-success', 'name' => 'siparis-button']) ?>
            <?php ActiveForm::end(); ?>
        </div>
        <div class="container">

            <?php $i=1; foreach($userOrders as $item){ ?>
                <div class="row">
                    <div class="col-xs-6 col-md-3" style=" padding-top: 20px;">
                        <img alt="Tepsi" class="img-thumbnail" src="<?php echo Product::findOne( $item["product_id"])->image_url ?>" >
                        <span ><?php echo $item["order_id"]; ?></span>
                    </div>

                    <div class="col-xs-6 col-md-5"> </div>

                    <div class="col-xs-6 col-md-4" >
                        <div class="container">
                            <span onclick="showCard()" class="glyphicon glyphicon-eye-open"></span>
                        </div>
                            <div class="container">
                            <span> Sipariş Adı: <?php echo Product::findOne( $item["product_id"])->product_name; ?> </span>
                        </div>

                    </div>
                </div>

                <div id="overlay" >
                    <div id="card-detail" style="background-color: #72bd34">
                        <div class="card text-center" style="margin: 30px" >
                          <div class="card-header" >
                            <span style="text-align: center;margin-left: 64px;">Sipariş Adı</span>
                            <span class="btn close-button" onclick="closeCard()">X</span>
                          </div>
                          <div class="card-body">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>Sipariş Numarası</td>
                                        <td><?php echo $item["order_id"]; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Ürün No</td>
                                        <td><?php echo $item["product_id"]; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Ürün Miktarı</td>
                                        <td><?php echo $item["total_number"]; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Durumu</td>
                                        <td><?php echo $item["status"]; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Alım Tarihi</td>
                                        <td><?php echo $item["order_date"]; ?></td>
                                    </tr>
                                </tbody>
                            </table>
                          </div>
                          <div class="card-footer btn" style="background-color: #d51919;">
                            <?= Html::a('Siparişi İptal Et', ['class' => 'btn btn-success', 'cancel-function', 'sID' => $item["order_id"]]) ?>
                          </div>
                        </div>
                    </div>
                </div>
            <?php $i++; } ?>

        </div>

    </div>
</div>

<script type="text/javascript" >
    function showCard() {
        document.getElementById("overlay").style.display = "block";
    }

    function closeCard() {
        document.getElementById("overlay").style.display = "none";
    }
</script>
