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
                &lt;link&gt;
            </div>
            <br>
            <div class="baslik grey-back golge bd-rad" style="width: 94%;">
                <h3 style="float: left;margin-top:-15px;">Bir HTML Örneği:</h3>
                <div class="baslik dark-back bd-red" style="clear: both;width: 95%;text-align: left;color: white;">
                    <span class="etiketisimrenk" style="color:brown"><span class="etiketrenk" style="color:mediumblue">&lt;</span>!DOCTYPE<span class="nitelikrenk" style="color:red"> html</span><span class="etiketrenk" style="color:mediumblue">&gt;</span></span><br>
                    <span class="etiketisimrenk" style="color:brown"><span class="etiketrenk" style="color:mediumblue">&lt;</span>html<span class="etiketrenk" style="color:mediumblue">&gt;</span></span><br>
                    <span class="etiketisimrenk" style="color:brown"><span class="etiketrenk" style="color:mediumblue">&lt;</span>head<span class="etiketrenk" style="color:mediumblue">&gt;</span></span><br>
                    <span class="etiketisimrenk" style="color:brown"><span class="etiketrenk" style="color:mediumblue">&lt;</span>title<span class="etiketrenk" style="color:mediumblue">&gt;</span></span>HTML Öğretici<span class="etiketisimrenk" style="color:brown"><span class="etiketrenk" style="color:mediumblue">&lt;</span>/title<span class="etiketrenk" style="color:mediumblue">&gt;</span></span><br>
                    <span class="etiketisimrenk" style="color:brown"><span class="etiketrenk" style="color:mediumblue">&lt;</span>link <span class="nitelikrenk" style="color:red"> rel</span><span class="etiketrenk" style="color:mediumblue">="stylesheet" </span><span class="nitelikrenk" style="color:red"> type</span><span class="etiketrenk" style="color:mediumblue">="text/css" </span><span class="nitelikrenk" style="color:red"> href</span><span class="etiketrenk" style="color:mediumblue">="" </span><span class="etiketrenk" style="color:mediumblue">&gt;</span></span><br>
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
                HTML &lt;link&gt; etiketi belge ile harici kaynak arasında bir ilişki tanımlar. HTML &lt;link&gt; etiketi genellikle stil sayfalarını belgeye bağlamak için kullanılır. Link etiketi head bölümünde tanımlanır.
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
                            <td>Bağlantılı kaynağın karakter kodlaması tanımlanır.</td>
                        </tr>
                        <tr>
                            <td>href</td>
                            <td>URL</td>
                            <td>Bağlantılı belgenin yolunu belirtir.</td>
                        </tr>
                        <tr>
                            <td>hreflang</td>
                            <td>language_code</td>
                            <td>Bağlantılı kaynağın metin dili belirtilir.</td>
                        </tr>
                        <tr>
                            <td>media</td>
                            <td>media_query</td>
                            <td>Bağlantılı kaynağın uygulandığı ortam belirtilir.</td>
                        </tr>
                        <tr>
                            <td>rel</td>
                            <td>
                                <ul>
                                    <li>alternate</li>
                                    <li>author</li>
                                    <li>dns-prefetch</li>
                                    <li>help</li>
                                    <li>icon</li>
                                    <li>license</li>
                                    <li>next</li>
                                    <li>pingback</li>
                                    <li>preconnect</li>
                                    <li>prefetch</li>
                                    <li>preload</li>
                                    <li>prerender</li>
                                    <li>prev</li>
                                    <li>search</li>
                                    <li>stylesheet</li>
                                </ul>
                            </td>
                            <td>Bağlantılı belge ile geçerli belge arasındaki ilişkiyi açıklar.</td>
                        </tr>
                        <tr>
                            <td>rev</td>
                            <td>
                                <ul>
                                    <li>reversed</li>
                                    <li>relationship</li>
                                </ul>
                            </td>
                            <td>Bağlantılı belge ile geçerli belge arasındaki ilişkiyi açıklar.</td>
                        </tr>
                        <tr>
                            <td>sizes</td>
                            <td>Height* weight</td>
                            <td>Bağlantılı kaynağın boyutunu belirtir.</td>
                        </tr>
                        <tr>
                            <td>target</td>
                            <td>
                                <ul>
                                    <li>_blank</li>
                                    <li>_self</li>
                                    <li>_top</li>
                                    <li>_parent</li>
                                    <li>frame_name</li>
                                </ul>
                            </td>
                            <td>Bağlantılı belgenin yükleneceği yeri belirtir.</td>
                        </tr>
                        <tr>
                            <td style="border:0px;">type</td>
                            <td style="border:0px;">media_type</td>
                            <td style="border:0px;">Belge ortam türünü belirtir.</td>
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