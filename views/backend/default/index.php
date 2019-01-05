<?= $this->title = 'Sipariş Admin Sayfası'; ?>
<?php use kouosl\theme\helpers\Html; ?>
<p> Başlamadan Önce Notları Okuyun </p>

<style type="text/css">
  thead{ background-color: #a6cf2b}
  tbody{ overflow-y:auto; }
  tbody{ overflow-y:auto; }
  th { text-align: center; }
  td { text-align: center; }

  .formC {
    text-align: left;
    padding-right: 15px;
    padding-bottom: 25px;
  }

  .close-button {
      float: right;
  }

  .tableI {
      background-color: #28d18f;
      font-size: 12px;
      text-align: left;
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

<script type="text/javascript" >
    function showCard() {
        document.getElementById("overlay").style.display = "block";
    }

    function closeCard() {
        document.getElementById("overlay").style.display = "none";
    }

</script>
