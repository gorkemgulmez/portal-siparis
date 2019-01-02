<?= $this->title = 'Sipariş Sayfası.'; ?>
<p> Başlamadan Önce Notları Okuyun </p>

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

        <h2>Siparişleriniz</h2>
        <div class="container">

            <div id="overlay" >
                <div id="card-detail" style="background-color: #72bd34">
                    <div class="card text-center" style="margin: 30px" >
                      <div class="card-header" >
                        <span style="text-align: center;margin-left: 64px;">Sipariş Adı</span>
                        <span class="btn close-button" onclick="closeCard()" >X</span>
                      </div>
                      <div class="card-body">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>Sipariş Numarası</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>Kullanıcı</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>Ürün No</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>Durumu</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>Alım Tarihi</td>
                                    <td>1</td>
                                </tr>
                            </tbody>
                        </table>
                      </div>
                      <div class="card-footer btn" style="background-color: #d51919;">
                        Siparişi İptal Et
                      </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-6 col-md-3" style=" padding-top: 20px;">
                    <img alt="Tepsi" class="img-thumbnail" src="https://www.trendyol.com/Content/images/defaultThumb.jpg" >
                    <span >Sipariş No</span>
                </div>

                <div class="col-xs-6 col-md-5"> </div>

                <div class="col-xs-6 col-md-4" >
                    <div class="container">
                        <span onclick="showCard()" class="glyphicon glyphicon-eye-open"></span>
                    </div>
                    <div class="container">
                        <span> Sipariş Adı: Tepsi </span>
                    </div>

                </div>
            </div>

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
