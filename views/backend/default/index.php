<?= $this->title = 'Sipariş Admin Sayfası'; ?>
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
                  <div class="card-footer btn" style="color: #d51919;">
                    Siparişi İptal Et
                  </div>
                </div>
            </div>
        </div>

        <form class="formC">
            <span style="padding-right: 10px;">Sipariş Ara:</span>
            <input type="search" placeholder="Sipariş No">
            <input type="submit" value="Ara">
        </form>

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
          <tr>
            <td>1</td>
            <td>3</td>
            <td>123</td>
            <td>İptal</td>
            <td>12.12.2018</td>
            <td>
                <span onclick="showCard()" class="glyphicon glyphicon-eye-open"></span>
                <span class="glyphicon glyphicon-remove"></span>
            </td>
          </tr>
          <tr>
            <td>2</td>
            <td>3</td>
            <td>421</td>
            <td>Yolda</td>
            <td>12.12.2019</td>
            <td>
                <span onclick="showCard()" class="glyphicon glyphicon-eye-open"></span>
                <span class="glyphicon glyphicon-remove"></span>
            </td>
          </tr>
          <tr>
            <td>cell1_3</td>
            <td>cell2_3</td>
            <td>cell3_3</td>
            <td>cell4_3</td>
            <td>cell5_3</td>
            <td>
                <span onclick="showCard()" class="glyphicon glyphicon-eye-open"></span>
                <span class="glyphicon glyphicon-remove"></span>
            </td>
          </tr>
          <tr>
            <td>cell1_4</td>
            <td>cell2_4</td>
            <td>cell3_4</td>
            <td>cell4_4</td>
            <td>cell5_4</td>
            <td>
                <span onclick="showCard()" class="glyphicon glyphicon-eye-open"></span>
                <span class="glyphicon glyphicon-remove"></span>
            </td>
          </tr>
          <tr>
            <td>cell1_1</td>
            <td>cell2_1</td>
            <td>cell3_1</td>
            <td>cell4_1</td>
            <td>cell5_1</td>
            <td>
                <span onclick="showCard()" class="glyphicon glyphicon-eye-open"></span>
                <span class="glyphicon glyphicon-remove"></span>
            </td>
          </tr>
          <tr>
            <td>cell1_2</td>
            <td>cell2_2</td>
            <td>cell3_2</td>
            <td>cell4_2</td>
            <td>cell5_2</td>
            <td>
                <span onclick="showCard()" class="glyphicon glyphicon-eye-open"></span>
                <span class="glyphicon glyphicon-remove"></span>
            </td>
          </tr>
          <tr>
            <td>cell1_3</td>
            <td>cell2_3</td>
            <td>cell3_3</td>
            <td>cell4_3</td>
            <td>cell5_3</td>
            <td>
                <span onclick="showCard()" class="glyphicon glyphicon-eye-open"></span>
                <span class="glyphicon glyphicon-remove"></span>
            </td>
          </tr>
          <tr>
            <td>cell1_4</td>
            <td>cell2_4</td>
            <td>cell3_4</td>
            <td>cell4_4</td>
            <td>cell5_4</td>
            <td>
                <span onclick="showCard()" class="glyphicon glyphicon-eye-open"></span>
                <span class="glyphicon glyphicon-remove"></span>
            </td>
          </tr>
          <tr>
            <td>cell1_1</td>
            <td>cell2_1</td>
            <td>cell3_1</td>
            <td>cell4_1</td>
            <td>cell5_1</td>
            <td>
                <span onclick="showCard()" class="glyphicon glyphicon-eye-open"></span>
                <span class="glyphicon glyphicon-remove"></span>
            </td>
          </tr>
          <tr>
            <td>cell1_2</td>
            <td>cell2_2</td>
            <td>cell3_2</td>
            <td>cell4_2</td>
            <td>cell5_2</td>
            <td>
                <span onclick="showCard()" class="glyphicon glyphicon-eye-open"></span>
                <span class="glyphicon glyphicon-remove"></span>
            </td>
          </tr>
          <tr>
            <td>cell1_3</td>
            <td>cell2_3</td>
            <td>cell3_3</td>
            <td>cell4_3</td>
            <td>cell5_3</td>
            <td>
                <span onclick="showCard()" class="glyphicon glyphicon-eye-open"></span>
                <span class="glyphicon glyphicon-remove"></span>
            </td>
          </tr>
          <tr>
            <td>cell1_4</td>
            <td>cell2_4</td>
            <td>cell3_4</td>
            <td>cell4_4</td>
            <td>cell5_4</td>
            <td>
                <span onclick="showCard()" class="glyphicon glyphicon-eye-open"></span>
                <span class="glyphicon glyphicon-remove"></span>
            </td>
          </tr>
          <tr>
            <td>cell1_1</td>
            <td>cell2_1</td>
            <td>cell3_1</td>
            <td>cell4_1</td>
            <td>cell5_1</td>
            <td>
                <span onclick="showCard()" class="glyphicon glyphicon-eye-open"></span>
                <span class="glyphicon glyphicon-remove"></span>
            </td>
          </tr>
          <tr>
            <td>cell1_2</td>
            <td>cell2_2</td>
            <td>cell3_2</td>
            <td>cell4_2</td>
            <td>cell5_2</td>
            <td>
                <span onclick="showCard()" class="glyphicon glyphicon-eye-open"></span>
                <span class="glyphicon glyphicon-remove"></span>
            </td>
          </tr>
          <tr>
            <td>cell1_3</td>
            <td>cell2_3</td>
            <td>cell3_3</td>
            <td>cell4_3</td>
            <td>cell5_3</td>
            <td>
                <span onclick="showCard()" class="glyphicon glyphicon-eye-open"></span>
                <span class="glyphicon glyphicon-remove"></span>
            </td>
          </tr>
          <tr>
            <td>cell1_4</td>
            <td>cell2_4</td>
            <td>cell3_4</td>
            <td>cell4_4</td>
            <td>cell5_4</td>
            <td>
                <span onclick="showCard()" class="glyphicon glyphicon-eye-open"></span>
                <span class="glyphicon glyphicon-remove"></span>
            </td>
          </tr>
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
