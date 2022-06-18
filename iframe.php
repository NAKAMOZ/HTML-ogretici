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
                &lt;iframe&gt;
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
                    <span class="etiketisimrenk" style="color:brown"><span class="etiketrenk" style="color:mediumblue">&lt;</span>iframe <span class="nitelikrenk" style="color:red"> src</span><span class="etiketrenk" style="color:mediumblue">="index.html"</span><span class="nitelikrenk" style="color:red"> width</span><span class="etiketrenk" style="color:mediumblue">="50%"</span><span class="nitelikrenk" style="color:red"> height</span><span class="etiketrenk" style="color:mediumblue">="50%"</span><span class="etiketrenk" style="color:mediumblue">&gt;<span class="etiketisimrenk" style="color:brown"><span class="etiketrenk" style="color:mediumblue">&lt;</span>/iframe<span class="etiketrenk" style="color:mediumblue">&gt;</span></span><span class="etiketrenk" style="color:mediumblue">&nbsp;&lt;!--başka bir sayfayı eklenilen sayfada önizletir--&gt;</span></span></span><br><br>
                    <span class="etiketisimrenk" style="color:brown"><span class="etiketrenk" style="color:mediumblue">&lt;</span>/body<span class="etiketrenk" style="color:mediumblue">&gt;</span></span><br>
                    <span class="etiketisimrenk" style="color:brown"><span class="etiketrenk" style="color:mediumblue">&lt;</span>/html<span class="etiketrenk" style="color:mediumblue">&gt;</span></span>
                </div>
            </div>
            <p class="mtn">
                HTML &lt;iframe&gt; etiketi çerçeve tanımlamak için kullanılır. Tanımlanan bu çerçeve içerisine yeni bir HTML belgesi tanımlanabilir.
            </p>
            <div class="ust-bsl">Örnek</div>
            <p class="mtn">
                <iframe src="index.php" width="80%" height="700px"></iframe>
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
                            <td>align</td>
                            <td>
                                <ul>
                                    <li>left</li>
                                    <li>right</li>
                                    <li>middle</li>
                                    <li>top</li>
                                    <li>bottom</li>
                                </ul>
                            </td>
                            <td>Bağlantı sayfasının karakter kodlamasını belirtmek için kullanılır.</td>
                        </tr>
                        <tr>
                            <td>frameborder</td>
                            <td>
                                <ul>
                                    <li>1</li>
                                    <li>0</li>
                                </ul>
                            </td>
                            <td>Resim için konum ve boyut belirler.</td>
                        </tr>
                        <tr>
                            <td>height</td>
                            <td>pixel</td>
                            <td>Bağlantı verilen sayfanın URL adresini tanımlamak için kullanılır.</td>
                        </tr>
                        <tr>
                            <td>width</td>
                            <td>pixel</td>
                            <td>Bağlantının MIME tipini beliritr.</td>
                        </tr>
                        <tr>
                            <td>longdesc</td>
                            <td>URL</td>
                            <td>Bağlantı sayfasının dil kodlamasını belirtir.</td>
                        </tr>
                        <tr>
                            <td>marginheight</td>
                            <td>pixel</td>
                            <td>Bağlantının optimize edileceği cihazı belirtir.</td>
                        </tr>
                        <tr>
                            <td>marginwidth</td>
                            <td>pixel</td>
                            <td>Sayfa içi bağlantı ismi tanımlar.</td>
                        </tr>
                        <tr>
                            <td>name</td>
                            <td>isim</td>
                            <td>Geçerli sayfa ve bağlanılan sayfa arasındaki ilişkiyi belirtir.</td>
                        </tr>
                        <tr>
                            <td>sandbox</td>
                            <td>
                                <ul>
                                    <li>” “</li>
                                    <li>allow-forms</li>
                                    <li>allow-same-origin</li>
                                    <li>allow-scripts</li>
                                    <li>allow-top-navigation</li>
                                </ul>
                            </td>
                            <td>Resim haritası için şekil belirtir.</td>
                        </tr>
                        <tr>
                            <td>scrolling</td>
                            <td>
                                <ul>
                                    <li>yes</li>
                                    <li>no</li>
                                    <li>to</li>
                                </ul>
                            </td>
                            <td>Bağlantının açılacağı hedefi belirtir.</td>
                        </tr>
                        <tr>
                            <td>seamless</td>
                            <td>seamless</td>
                            <td>Bağlantının MIME tipini belirtir.</td>
                        </tr>
                        <tr>
                            <td>src</td>
                            <td>URL</td>
                            <td>Bağlantının MIME tipini belirtir.</td>
                        </tr>
                        <tr>
                            <td style="border:0px;">srcdoc</td>
                            <td style="border:0px;">HTML Bloğu</td>
                            <td style="border:0px;">Bağlantının MIME tipini belirtir.</td>
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