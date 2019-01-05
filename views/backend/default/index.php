<?= $this->title = 'Sipariş Admin Sayfası'; ?>
<?php use kouosl\theme\helpers\Html; ?>
<p> Başlamadan Önce Notları Okuyun </p>

<div class="site-index">
    <div class="jumbotron">

        <div id="overlay" >
            <div id="card-detail" style="background-color: #72bd34">
                <div class="card text-center" style="margin: 30px" >
                  <div class="card-header" >
                    <span style="text-align: center;margin-left: 64px;">Sipariş Adı</span>
                    <span class="btn close-button" onclick="closeCard()" >X</span>
                  </div>
                  <div class="card-body">
                    <table class="table tableI">
                        <tbody>
                            <tr>
                                <td style="text-align: left;">Sipariş Numarası</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td style="text-align: left;">Kullanıcı</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td style="text-align: left;">Ürün No</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td style="text-align: left;">Durumu</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td style="text-align: left;">Alım Tarihi</td>
                                <td>1</td>
                            </tr>
                        </tbody>
                    </table>
                  </div>
                  <div class="card-footer btn" style="background-color: #d51919; ">
                    Siparişi İptal Et
                  </div>
                </div>
            </div>
        </div>

        <table class="table">

            <thead>
                <tr>
                    <th scope="col">Sipariş No</th>
                    <th scope="col">Kullanıcı</th>
                    <th scope="col">&Uuml;r&uuml;n No</th>
                    <th scope="col">Durumu</th>
                    <th scope="col">Alım Tarih</th>
                    <th scope="col">İşlemler</th>
                </tr>
            </thead>

        <tbody>
            <?php $i=1; foreach($orders as $item){ ?>
                        <tr>
                            <td><?php echo $item["order_id"]; ?></td>
                            <td><?php echo $item["user_id"]; ?></td>
                            <td><?php echo $item["product_id"]; ?></td>
                            <td><?php echo $item["status"]; ?></td>
                            <td><?php echo $item["order_date"]; ?></td>
                            <td>

                                <?= Html::a('X', ['class' => 'btn btn-success', 'delete-function', 'sID' => $item["order_id"]]) ?>
                            </td>
                        </tr>
            <?php $i++; } ?>
        </tbody>

      </table>
    </div>
</div>
