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
                &lt;a&gt;
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
                    <span class="etiketisimrenk" style="color:brown"><span class="etiketrenk" style="color:mediumblue">&lt;</span>a <span class="nitelikrenk" style="color:red"> href</span><span class="etiketrenk" style="color:mediumblue">="Linki Buraya Yazınız"<span class="nitelikrenk" style="color:red"> target</span><span class="etiketrenk" style="color:mediumblue">="_blank"</span> </span><span class="etiketrenk" style="color:mediumblue">&gt;</span></span> Link Adı<span class="etiketisimrenk" style="color:brown"> <span class="etiketrenk" style="color:mediumblue">&lt;</span>/a<span class="etiketrenk" style="color:mediumblue">&gt;</span></span><br><br>
                    <span class="etiketisimrenk" style="color:brown"><span class="etiketrenk" style="color:mediumblue">&lt;</span>/body<span class="etiketrenk" style="color:mediumblue">&gt;</span></span><br>
                    <span class="etiketisimrenk" style="color:brown"><span class="etiketrenk" style="color:mediumblue">&lt;</span>/html<span class="etiketrenk" style="color:mediumblue">&gt;</span></span>
                </div>
            </div>
            <br>
            <p class="mtn">
                &lt;a&gt; etiketi sayfanızda bağlantı oluşturmanızı sağlar. Bağlantılar başka sayfalara geçiş için kullanılır.
            </p>
            <p class="mtn">
                Bu etiketin en önemli özelliği href özelliğidir. Bu özellik ile bağlantı kurmak istediğimiz linki belirtiriz.
            </p>
            <div class="ust-bsl">Örnek</div>
            <p class="mtn">
                <a href="#">Örnek &lt;a&gt; etiketi</a>
            </p>
            <div class="ust-bsl">Özellikler</div>
            <div class="duy" style="font-weight:500;font-family:arial;">
                <table>
                    <thead>
                        <tr>
                            <th>Özellik</th>
                            <th>Değer</th>
                            <th>Tanımı</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>charset</td>
                            <td>char_encoding</td>
                            <td>Bağlantı verilen sayfanın karakter kodlamasını belirtir.</td>
                        </tr>
                        <tr>
                            <td>coords</td>
                            <td>koordinatlar</td>
                            <td>Resim için konum ve boyut değerlerini belirtir.</td>
                        </tr>
                        <tr>
                            <td>href</td>
                            <td>URL</td>
                            <td>Bağlantı verilen sayfanın URL adresini belirtir.</td>
                        </tr>
                        <tr>
                            <td>hreflang</td>
                            <td>dil-kodu</td>
                            <td>Bağlantı verilen sayfanın dil kodlamasını belirtir.</td>
                        </tr>
                        <tr>
                            <td>media</td>
                            <td>media-sorgusu</td>
                            <td>Bağlantı verilen adresin hangi medya / cihaz için optimize edildiğini tanımlar.</td>
                        </tr>
                        <tr>
                            <td>name</td>
                            <td>çapa-ismi</td>
                            <td>Bağlantı için bir çapa ismi tanımlar.</td>
                        </tr>
                        <tr>
                            <td>rel</td>
                            <td>
                                <ul>
                                    <li>alternate</li>
                                    <li>author</li>
                                    <li>bookmark</li>
                                    <li>help</li>
                                    <li>license</li>
                                    <li>next</li>
                                    <li>nofollow</li>
                                    <li>noreferrer</li>
                                    <li>prefetch</li>
                                    <li>prev</li>
                                    <li>search</li>
                                    <li>tag</li>
                                </ul>
                            </td>
                            <td>Geçerli sayfa ile bağlantı verilmiş sayfa arasındaki ilişkiyi belirtir.</td>
                        </tr>
                        <tr>
                            <td>rev</td>
                            <td>metin</td>
                            <td>Bağlantı verilmiş sayfa ile geçerli sayfa arasındaki ilişkiyi belirtir.</td>
                        </tr>
                        <tr>
                            <td>shape</td>
                            <td>
                                <ul>
                                    <li>default</li>
                                    <li>rect</li>
                                    <li>circle</li>
                                    <li>poly</li>
                                </ul>
                            </td>
                            <td>Resim haritası için bir şekli belirtir.</td>
                        </tr>
                        <tr>
                            <td>target</td>
                            <td>
                                <ul>
                                    <li>_blank</li>
                                    <li>_parent</li>
                                    <li>_self</li>
                                    <li>_top</li>
                                </ul>
                            </td>
                            <td>Bağlantının nerede açılacağını belirtir.</td>
                        </tr>
                        <tr>
                            <td style="border:0px;">type</td>
                            <td style="border:0px;">MIME_tipi</td>
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