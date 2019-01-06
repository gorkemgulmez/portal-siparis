# portal-siparis

## Kurulum
Sipariş modülünü portal web uygulamasına eklemek için /portal dizinindeki composer.json dosyasına aşağıdaki eklemeleri yapmamız gerekmektedir.


```php
....
"repositories": [
    {
        ....
        {
            "type": "vcs",
            "url": "https://github.com/gorkemgulmez/portal-siparis.git"
        }
],
"require": {

    ....   
    "kouosl/portal-siparis": "dev-develop"
},
....
```

portal-theme klasörünü de https://github.com/gorkemgulmez/portal-theme.git linkindeki dosyalar ile değiştirildikten sonra ise composer update yapılabilir.

Modülün yüklenmesinin ardından kullanıcı ve yönetici panellerinin çalışması için gerekli olan "product" ve "orders" tablolarını, verilen migrationlar ile yükleyebiliriz. Bu tabloların portal ile gelen tablolar ile key bağlantısı olduğu için gerekli user tablosunun önceden yüklenmiş olması gerekmektedir.

Modül tabloları için migrate kodu:


```bash
php yii migrate --migrationPath=@vendor/kouosl/portal-siparis/migrations --interactive=0
```

Yüklenen tabloları ve foreign keyleri silmek için kullanılan migrate kodu:

```bash
php yii migrate/down --migrationPath=@vendor/kouosl/portal-siparis/migrations --interactive=0
```

Yukarıdaki gibi belirtilmiştir. Bunun dışında başlamadan önce /phpmyadmin urlsinden product tablosuna test için kayıt oluşturabilirsiniz. Sipariş modülünün asıl amacı siparişler olduğu belirtildiği için ürünler ile ilgili kayıt sayfası oluşturulmamıştır.

İlk oluşturulan kullanıcı user id'sinden ötürü  admin sayılacaktır.


## Özellikler
* Layout düzenledi.
* Basit bir çeviri sistemi kuruldu
* Widgetlar oluşturuldu
* Css ve Js dosyaları eklendi.
* Assetler oluşturuldu ve düzenledi
* Kullanıcıya göre listeleme yapıldı ve bir kullanıcıya admin yetkisi verildi.
* Admin olmayan kullanıcılar kısıtlamalar getirildi.


## Tanıtım
-Siparis modülünde kullanıcı sipariş ekleyebilir, silebilir ve ya durumunu güncelleyebilir.

Modülümüzü kullanmak için giriş yaptıktan sonra sipariş sayfamızı açmaya hazırız. Bunun için navbarı ve ya verilen linki kullanabiliriz. <br />
[Sipariş](http://portal.kouosl/siparis) <br />
![alt tag](http://zekiesenalp.com/modul/1.jpg "Sipariş Sayfası")

Kullanıcıdan ilk olarak bir siparişi oluşturması bekleniyor. Bunun için öncelikle Sipariş Ekle butonun tıklıyoruz. Açılan pencerede belirtilen alanları doldurduktan sonra siparişimizi ekliyoruz. Eğer her şey yolunda ise sayfamıza bir başarı bildirimi geliyor. <br />
![alt tag](http://zekiesenalp.com/modul/2.jpg "Sipariş Ekleme")

Sayfa açıldıktan sonra kullanıcı eklediği siparişleri liste şeklinde görebilir.
Eğer göz simgesine basarsa siparişin detaylarını açılır bir listede daha net bir şekilde görebilir. Ayrıca siparişini iptal edebilir. <br />
İptal edilen siparişler bu sayfada görüntülenemez. <br />
![alt tag](http://zekiesenalp.com/modul/3.jpg "Sipariş Detay")


Modülde user idsi 1 olan kullanıcı admin yetkisine sahiptir. Üst kısımdaki navbardan ya da verilen linkten admin sayfasına girebilir. <br />
[Admin/Sipariş](http://portal.kouosl/admin/siparis) <br />
![alt tag](http://zekiesenalp.com/modul/4.jpg "Admin Paneli")

Eğer yetkisi yoksa bu sayfayı görmek yerine bir hata mesajı alır. <br />
![alt tag](http://zekiesenalp.com/modul/5.jpg "Admin Hata")

Admin bütün siparişleri bir liste halinde görebilir. İsterse bunları silebilir.


Layout ve navbar resimdeki gibi değiştirilmiştir. <br />
Kullanıcı admin değilse Admin/Sipariş sekmesini görmeyecektir. <br />
![alt tag](http://zekiesenalp.com/modul/6.jpg "Layout")


Çeviri için ise bir altyapı oluşturulmuştur. Çeviri için pek fazla kelime bulunmamaktadır. Ayrıca widget içindeki kelimeler çevirlememiştir.

Modül için theme kısmına assetler eklenmiştir. Fakat bu dosyalar tam olarak çalışamamaktadır. Bu sebepten ötürü frontendeki viewda hala css ve js dosyalarını tutulmaktadır. Bunun dışında diğer dosyalar theme aktarılmıştır.
