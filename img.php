<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="HTML, HTML5, Nevzat, Nevzat ÇELİKKANAT,nevzatcelikkanat.name.tr,nevzatcelikkanatnametr">
    <meta name="description" content="HTML5 Öğretici">
    <meta name="autgoe" content="nevzatcelikkanat.name.tr">
    <title>HTML5 Öğretici</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="icon" href="img/site_logo_ico.png" type="image/x-icon">
</head>

<body>
    <div class="ust">
        <img src="img/site_logo.png" style="height: 60px !important; float: left;margin-left: 20px;" alt="Logo">
        <h3 style="float: left; font-size:x-large;margin-top: 17px;color:#222831;margin-right: 20px;margin-left: 10px;"> HTML5 ÖĞRETİCİ</h3>
        <?php include 'link/menu.php'; ?>
    </div>
    <div class="sol">
        <div class="menu-buton">
            <?php include 'link/sayfalar.php'; ?>
        </div>
    </div>
    <div class="orta">
        <div class="ort-pad">
            <div class="ust-bsl">
                &lt;img&gt;
            </div>
            <br>
            <div class="baslik grey-back golge bd-rad" style="width: 94%;">
                <h3 style="float: left;margin-top: -15px;">Bir HTML Örneği:</h3>
                <div class="baslik dark-back bd-red" style="clear: both;width: 95%;text-align: left;color: white;">
                    <span class="etiketisimrenk" style="color:brown"><span class="etiketrenk" style="color:mediumblue">&lt;</span>!DOCTYPE<span class="nitelikrenk" style="color:red"> html</span><span class="etiketrenk" style="color:mediumblue">&gt;</span></span><br>
                    <span class="etiketisimrenk" style="color:brown"><span class="etiketrenk" style="color:mediumblue">&lt;</span>html<span class="etiketrenk" style="color:mediumblue">&gt;</span></span><br>
                    <span class="etiketisimrenk" style="color:brown"><span class="etiketrenk" style="color:mediumblue">&lt;</span>head<span class="etiketrenk" style="color:mediumblue">&gt;</span></span><br>
                    <span class="etiketisimrenk" style="color:brown"><span class="etiketrenk" style="color:mediumblue">&lt;</span>title<span class="etiketrenk" style="color:mediumblue">&gt;</span></span>HTML Öğretici<span class="etiketisimrenk" style="color:brown"><span class="etiketrenk" style="color:mediumblue">&lt;</span>/title<span class="etiketrenk" style="color:mediumblue">&gt;</span></span><br>
                    <span class="etiketisimrenk" style="color:brown"><span class="etiketrenk" style="color:mediumblue">&lt;</span>/head<span class="etiketrenk" style="color:mediumblue">&gt;</span></span><br>
                    <span class="etiketisimrenk" style="color:brown"><span class="etiketrenk" style="color:mediumblue">&lt;</span>body<span class="etiketrenk" style="color:mediumblue">&gt;</span></span><br><br>
                    <span class="etiketisimrenk" style="color:brown"><span class="etiketrenk" style="color:mediumblue">&lt;</span>img <span class="nitelikrenk" style="color:red"> src</span><span class="etiketrenk" style="color:mediumblue">=" img/resim.jpg "</span><span class="etiketrenk" style="color:mediumblue">&gt;</span></span><span class="etiketrenk" style="color:mediumblue">&nbsp;&lt;--! Bir resim etiketi. --&gt;</span><span class="etiketisimrenk" style="color:brown"></span><br><br>
                    <span class="etiketisimrenk" style="color:brown"><span class="etiketrenk" style="color:mediumblue">&lt;</span>/body<span class="etiketrenk" style="color:mediumblue">&gt;</span></span><br>
                    <span class="etiketisimrenk" style="color:brown"><span class="etiketrenk" style="color:mediumblue">&lt;</span>/html<span class="etiketrenk" style="color:mediumblue">&gt;</span></span>
                </div>
            </div>
            <p class="mtn">
                HTML &lt;img&gt; etiketi HTML belgelerinize resim eklemek için kullanılır. Bu etiket ile src ve alt özellikleri kullanmak zorunludur. Eklenen image üzerinden başka belgeye bağlantı sağlamak için &lt;img&gt; etiketi &lt;a&gt; etiketi içerisinde kullanılır.
            </p>
            <div class="ust-bsl">Örnek</div>
            <p class="mtn">
                <img src="img/site_logo.png" alt="Site Logosu" height="250px">
            </p>
            <div class="ust-bsl">Özellikler</div>
            <div class="duy" style="font-weight:500;font-family:arial;">
                <table>
                    <thead>
                        <tr>
                            <th>Özellik</th>
                            <th>Değer</th>
                            <th>Açıklama</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>src</td>
                            <td>URL</td>
                            <td>Resmin yolunu tanımlar.</td>
                        </tr>
                        <tr>
                            <td>alt</td>
                            <td>Metin</td>
                            <td>Resim görüntülenmediği zaman alternatif bir metin tanımlar.</td>
                        </tr>
                        <tr>
                            <td>width</td>
                            <td>Genişlik</td>
                            <td>Resim için genişlik tanımlar.</td>
                        </tr>
                        <tr>
                            <td style="border:0px;">height</td>
                            <td style="border:0px;">Yükseklik</td>
                            <td style="border:0px;">Resim için yükseklik tanımlar.</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <br>
        </div>
    </div>
    </div>
    <div class="bol-b" style="float:right;width: 85%;">
        <footer class="footer">2021 Tüm Hakları Saklıdır</footer>
    </div>
    </div>
</body>

</html>