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
                &lt;form&gt;
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
                    <span class="etiketisimrenk" style="color:brown"><span class="etiketrenk" style="color:mediumblue">&lt;</span>form <span class="nitelikrenk" style="color:red"> action</span><span class="etiketrenk" style="color:mediumblue">="sunucu linki"</span><span class="nitelikrenk" style="color:red"> method</span><span class="etiketrenk" style="color:mediumblue">="get veya post"</span><span class="etiketrenk" style="color:mediumblue">&gt;</span></span>Giriş kontrolleri buraya eklenir.<span class="etiketisimrenk" style="color:brown"><span class="etiketrenk" style="color:mediumblue">&lt;</span>/form<span class="etiketrenk" style="color:mediumblue">&gt;</span></span><br><br>
                    <span class="etiketisimrenk" style="color:brown"><span class="etiketrenk" style="color:mediumblue">&lt;</span>/body<span class="etiketrenk" style="color:mediumblue">&gt;</span></span><br>
                    <span class="etiketisimrenk" style="color:brown"><span class="etiketrenk" style="color:mediumblue">&lt;</span>/html<span class="etiketrenk" style="color:mediumblue">&gt;</span></span>
                </div>
            </div>
            <br>
            <p class="mtn">
                HTML &lt;form&gt; etiketi kullanıcı girişleri oluşturmak için kullanılır. HTML formları oluşturmak için &lt;form&gt; etiketi kullanılır.
            </p>
            <p class="mtn">
                Site ziyaretçilerinden veri toplamak için form etiketini kullanabilirsiniz.
            </p>
            <p class="mtn">
                Örneğin bir e-ticaret sitesi üzerinde kullanıcı ödeme işlemi için kredi kartı bilgileri girmek zorundadır. Bu bilgiler form etiketi ile kullanıcıdan alınır.
            </p>
            <div class="ust-bsl">HTML &lt;form&gt; Etiketleri</div>
            <div class="duy" style="font-weight:500;font-family:arial;">
                <table>
                    <thead>
                        <tr>
                            <th>Etiket</th>
                            <th>Açıklama</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>&lt;form&gt;</td>
                            <td>Kullanıcı girişleri için HTML formu tanımlar.</td>
                        </tr>
                        <tr>
                            <td>&lt;input&gt;</td>
                            <td>Bir giriş kontrolü tanımlar.</td>
                        </tr>
                        <tr>
                            <td>&lt;textarea&gt;</td>
                            <td>Çok satırlı giriş kontrolü tanımlar.</td>
                        </tr>
                        <tr>
                            <td>&lt;label&gt;</td>
                            <td>Giriş elemanı için etiket tanımlar.</td>
                        </tr>
                        <tr>
                            <td>&lt;fieldset&gt;</td>
                            <td>İlgili ögeyi formda gruplandırır.</td>
                        </tr>
                        <tr>
                            <td>&lt;legend&gt;</td>
                            <td>&lt;fieldset&gt; ögesi için resim yazısı tanımlar.</td>
                        </tr>
                        <tr>
                            <td>&lt;select&gt;</td>
                            <td>Açılır liste tanımlar.</td>
                        </tr>
                        <tr>
                            <td>&lt;optgroup&gt;</td>
                            <td>Açılır listede ilgili seçenek tanımlar.</td>
                        </tr>
                        <tr>
                            <td>&lt;option&gt;</td>
                            <td>Açılır listede seçenek tanımlar.</td>
                        </tr>
                        <tr>
                            <td>&lt;button&gt;</td>
                            <td>Bir düğme tanımlar.</td>
                        </tr>
                        <tr>
                            <td>&lt;datalist&gt;</td>
                            <td>Giriş kontrolü için önceden tanımlanmış bir liste belirtir.</td>
                        </tr>
                        <tr>
                            <td>&lt;keygen&gt;</td>
                            <td>Formlar için anahtar tanımlar.</td>
                        </tr>
                        <tr>
                            <td style="border-bottom:0px;">&lt;output&gt;</td>
                            <td style="border-bottom:0px;">Bir hesaplamanın sonucunu tanımlar.</td>
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