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
</style>

<div class="site-index">
    <div class="jumbotron">

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
              <span class="glyphicon glyphicon-remove"></span>
              <span class="glyphicon glyphicon-search"></span>
              <span class="glyphicon glyphicon-cog"></span>
            </td>
          </tr>
          <tr>
            <td>2</td>
            <td>3</td>
            <td>421</td>
            <td>Yolda</td>
            <td>12.12.2019</td>
            <td>
              <span class="glyphicon glyphicon-remove"></span>
              <span class="glyphicon glyphicon-search"></span>
              <span class="glyphicon glyphicon-cog"></span>
            </td>
          </tr>
          <tr>
            <td>cell1_3</td>
            <td>cell2_3</td>
            <td>cell3_3</td>
            <td>cell4_3</td>
            <td>cell5_3</td>
            <td>
              <span class="glyphicon glyphicon-remove"></span>
              <span class="glyphicon glyphicon-search"></span>
              <span class="glyphicon glyphicon-cog"></span>
            </td>
          </tr>
          <tr>
            <td>cell1_4</td>
            <td>cell2_4</td>
            <td>cell3_4</td>
            <td>cell4_4</td>
            <td>cell5_4</td>
            <td>
              <span class="glyphicon glyphicon-remove"></span>
              <span class="glyphicon glyphicon-search"></span>
              <span class="glyphicon glyphicon-cog"></span>
            </td>
          </tr>
          <tr>
            <td>cell1_1</td>
            <td>cell2_1</td>
            <td>cell3_1</td>
            <td>cell4_1</td>
            <td>cell5_1</td>
            <td>
              <span class="glyphicon glyphicon-remove"></span>
              <span class="glyphicon glyphicon-search"></span>
              <span class="glyphicon glyphicon-cog"></span>
            </td>
          </tr>
          <tr>
            <td>cell1_2</td>
            <td>cell2_2</td>
            <td>cell3_2</td>
            <td>cell4_2</td>
            <td>cell5_2</td>
            <td>
              <span class="glyphicon glyphicon-remove"></span>
              <span class="glyphicon glyphicon-search"></span>
              <span class="glyphicon glyphicon-cog"></span>
            </td>
          </tr>
          <tr>
            <td>cell1_3</td>
            <td>cell2_3</td>
            <td>cell3_3</td>
            <td>cell4_3</td>
            <td>cell5_3</td>
            <td>
              <span class="glyphicon glyphicon-remove"></span>
              <span class="glyphicon glyphicon-search"></span>
              <span class="glyphicon glyphicon-cog"></span>
            </td>
          </tr>
          <tr>
            <td>cell1_4</td>
            <td>cell2_4</td>
            <td>cell3_4</td>
            <td>cell4_4</td>
            <td>cell5_4</td>
            <td>
              <span class="glyphicon glyphicon-remove"></span>
              <span class="glyphicon glyphicon-search"></span>
              <span class="glyphicon glyphicon-cog"></span>
            </td>
          </tr>
          <tr>
            <td>cell1_1</td>
            <td>cell2_1</td>
            <td>cell3_1</td>
            <td>cell4_1</td>
            <td>cell5_1</td>
            <td>
              <span class="glyphicon glyphicon-remove"></span>
              <span class="glyphicon glyphicon-search"></span>
              <span class="glyphicon glyphicon-cog"></span>
            </td>
          </tr>
          <tr>
            <td>cell1_2</td>
            <td>cell2_2</td>
            <td>cell3_2</td>
            <td>cell4_2</td>
            <td>cell5_2</td>
            <td>
              <span class="glyphicon glyphicon-remove"></span>
              <span class="glyphicon glyphicon-search"></span>
              <span class="glyphicon glyphicon-cog"></span>
            </td>
          </tr>
          <tr>
            <td>cell1_3</td>
            <td>cell2_3</td>
            <td>cell3_3</td>
            <td>cell4_3</td>
            <td>cell5_3</td>
            <td>
              <span class="glyphicon glyphicon-remove"></span>
              <span class="glyphicon glyphicon-search"></span>
              <span class="glyphicon glyphicon-cog"></span>
            </td>
          </tr>
          <tr>
            <td>cell1_4</td>
            <td>cell2_4</td>
            <td>cell3_4</td>
            <td>cell4_4</td>
            <td>cell5_4</td>
            <td>
              <span class="glyphicon glyphicon-remove"></span>
              <span class="glyphicon glyphicon-search"></span>
              <span class="glyphicon glyphicon-cog"></span>
            </td>
          </tr>
          <tr>
            <td>cell1_1</td>
            <td>cell2_1</td>
            <td>cell3_1</td>
            <td>cell4_1</td>
            <td>cell5_1</td>
            <td>
              <span class="glyphicon glyphicon-remove"></span>
              <span class="glyphicon glyphicon-search"></span>
              <span class="glyphicon glyphicon-cog"></span>
            </td>
          </tr>
          <tr>
            <td>cell1_2</td>
            <td>cell2_2</td>
            <td>cell3_2</td>
            <td>cell4_2</td>
            <td>cell5_2</td>
            <td>
              <span class="glyphicon glyphicon-remove"></span>
              <span class="glyphicon glyphicon-search"></span>
              <span class="glyphicon glyphicon-cog"></span>
            </td>
          </tr>
          <tr>
            <td>cell1_3</td>
            <td>cell2_3</td>
            <td>cell3_3</td>
            <td>cell4_3</td>
            <td>cell5_3</td>
            <td>
              <span class="glyphicon glyphicon-remove"></span>
              <span class="glyphicon glyphicon-search"></span>
              <span class="glyphicon glyphicon-cog"></span>
            </td>
          </tr>
          <tr>
            <td>cell1_4</td>
            <td>cell2_4</td>
            <td>cell3_4</td>
            <td>cell4_4</td>
            <td>cell5_4</td>
            <td>
              <span class="glyphicon glyphicon-remove"></span>
              <span class="glyphicon glyphicon-search"></span>
              <span class="glyphicon glyphicon-cog"></span>
            </td>
          </tr>
        </tbody>

      </table>
    </div>
</div>
