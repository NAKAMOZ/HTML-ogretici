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
        <h3 style="float: left;font-size:x-large;margin-top: 17px;color:#222831;margin-right: 20px;margin-left: 10px;"> HTML5 ÖĞRETİCİ</h3>
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
                &lt;body&gt;
            </div>
            <br>
            <div class="baslik grey-back golge bd-rad" style="width: 94%;">
                <h3 style="float: left;margin-top:-15px;">Bir HTML Örneği:</h3>
                <div class="baslik dark-back bd-red" style="clear: both;width: 95%;text-align: left;color: white;">
                    <span class="etiketisimrenk" style="color:brown"><span class="etiketrenk" style="color:mediumblue">&lt;</span>!DOCTYPE<span class="nitelikrenk" style="color:red"> html</span><span class="etiketrenk" style="color:mediumblue">&gt;</span></span><br>
                    <span class="etiketisimrenk" style="color:brown"><span class="etiketrenk" style="color:mediumblue">&lt;</span>html<span class="etiketrenk" style="color:mediumblue">&gt;</span></span><br>
                    <span class="etiketisimrenk" style="color:brown"><span class="etiketrenk" style="color:mediumblue">&lt;</span>head<span class="etiketrenk" style="color:mediumblue">&gt;</span></span><br>
                    <span class="etiketisimrenk" style="color:brown"><span class="etiketrenk" style="color:mediumblue">&lt;</span>title<span class="etiketrenk" style="color:mediumblue">&gt;</span></span>HTML Öğretici<span class="etiketisimrenk" style="color:brown"><span class="etiketrenk" style="color:mediumblue">&lt;</span>/title<span class="etiketrenk" style="color:mediumblue">&gt;</span></span><br>
                    <span class="etiketisimrenk" style="color:brown"><span class="etiketrenk" style="color:mediumblue">&lt;</span>/head<span class="etiketrenk" style="color:mediumblue">&gt;</span></span><br>
                    <span class="etiketisimrenk" style="color:brown"><span class="etiketrenk" style="color:mediumblue">&lt;</span>body<span class="etiketrenk" style="color:mediumblue">&gt;</span></span><br><br>
                    <span class="etiketisimrenk" style="color:brown"><span class="etiketrenk" style="color:mediumblue">&lt;</span>h1<span class="etiketrenk" style="color:mediumblue">&gt;</span></span>Bu bir başlıktır<span class="etiketisimrenk" style="color:brown"><span class="etiketrenk" style="color:mediumblue">&lt;</span>/h1<span class="etiketrenk" style="color:mediumblue">&gt;</span></span><br>
                    <span class="etiketisimrenk" style="color:brown"><span class="etiketrenk" style="color:mediumblue">&lt;</span>p<span class="etiketrenk" style="color:mediumblue">&gt;</span></span>Bu bir paragraftır.<span class="etiketisimrenk" style="color:brown"><span class="etiketrenk" style="color:mediumblue">&lt;</span>/p<span class="etiketrenk" style="color:mediumblue">&gt;</span></span><br><br>
                    <span class="etiketisimrenk" style="color:brown"><span class="etiketrenk" style="color:mediumblue">&lt;</span>/body<span class="etiketrenk" style="color:mediumblue">&gt;</span></span><br>
                    <span class="etiketisimrenk" style="color:brown"><span class="etiketrenk" style="color:mediumblue">&lt;</span>/html<span class="etiketrenk" style="color:mediumblue">&gt;</span></span>
                </div>
            </div>
            <br>
            <p class="mtn">
                &lt;body&gt; etiketi, bir HTML belgesinin ana içeriğinin tanımlandığı bölgedir. Tarayıcıda görüntülenen bir HTML belgesinin ana içeriğinin tanımlandığı bu bölümde: paragraf, başlık, resim, tablo, bağlantı, video vb. HTML ögeleri tanımlanır.
            </p>
            <div class="duy" style="padding-top: 0px;">
                <span style="color:#f05454;font-size:200%;position:relative;top:9px;">!</span> Tüm HTML belgelerinde tanımlanmak zorunda olan bu etiket HTML belgesinin tamamında yalnızca bir kez kullanılır.
            </div>
            <div class="ust-bsl">
                Örnek
            </div>
            <div class="mtn">
                <h1>Bu bir başlıktır</h1>
                <p>Bu bir paragraftır.</p>
            </div>
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
                            <td>alink</td>
                            <td>color</td>
                            <td>Etkin bağlantının rengini tanımlar.(HTML 5’de desteklenmez.)</td>
                        </tr>
                        <tr>
                            <td>background</td>
                            <td>URL</td>
                            <td>Belgenin arka plan resmini belirler.(HTML 5’de desteklenmez.)</td>
                        </tr>
                        <tr>
                            <td>bgcolor</td>
                            <td>color</td>
                            <td>Belgenin arka plan rengini belirler.(HTML 5’de desteklenmez.)</td>
                        </tr>
                        <tr>
                            <td>link</td>
                            <td>color</td>
                            <td>Etkin olmayan bağlantının rengini belirler.(HTML 5’de desteklenmez.)</td>
                        </tr>
                        <tr>
                            <td>text</td>
                            <td>color</td>
                            <td>Metnin rengini belirler.(HTML 5’de desteklenmez.)</td>
                        </tr>
                        <tr>
                            <td>vlink</td>
                            <td>color</td>
                            <td>Ziyaret edilen bağlantının rengini belirler.(HTML 5’de desteklenmez.)</td>
                        </tr>
                        <tr>
                            <td>onload</td>
                            <td></td>
                            <td>Sayfa yüklemesi esnasında çağrılır.</td>
                        </tr>
                        <tr>
                            <td>onunload</td>
                            <td></td>
                            <td>Kullanıcı sayfadan ayrıldığında çağrılır.</td>
                        </tr>
                        <tr>
                            <td>onfocus</td>
                            <td></td>
                            <td>Kullanıcının belge üzerinde istenilen yere odaklanması için kullanılır.</td>
                        </tr>
                        <tr>
                            <td style="border:0px;">onblur</td>
                            <td style="border:0px;"></td>
                            <td style="border:0px;">Kullanıcının belge üzerinde istenilen yerden uzaklaşması için kullanılır.</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
    <div class="bol-b">
        <footer class="footer">2021 Tüm Hakları Saklıdır</footer>
    </div>
    </div>
</body>

</html>