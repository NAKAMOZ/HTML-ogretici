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
                &lt;button&gt;
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
                    <span class="etiketisimrenk" style="color:brown"><span class="etiketrenk" style="color:mediumblue">&lt;</span>button <span class="nitelikrenk" style="color:red"> name</span><span class="etiketrenk" style="color:mediumblue">="button"<span class="nitelikrenk" style="color:red"> type</span><span class="etiketrenk" style="color:mediumblue">="button"</span> </span><span class="etiketrenk" style="color:mediumblue">&gt;</span></span> Buraya Tıkla <span class="etiketisimrenk" style="color:brown"> <span class="etiketrenk" style="color:mediumblue">&lt;</span>/button<span class="etiketrenk" style="color:mediumblue">&gt;</span></span><br><br>
                    <span class="etiketisimrenk" style="color:brown"><span class="etiketrenk" style="color:mediumblue">&lt;</span>/body<span class="etiketrenk" style="color:mediumblue">&gt;</span></span><br>
                    <span class="etiketisimrenk" style="color:brown"><span class="etiketrenk" style="color:mediumblue">&lt;</span>/html<span class="etiketrenk" style="color:mediumblue">&gt;</span></span>
                </div>
            </div>
            <br>
            <p class="mtn">
                HTML &lt;button&gt; etiketi, web sayfanızda yer alan HTML formunda tıklanabilir bir düğme oluşturmak için kullanılır. &lt;button&gt; içerik…&lt;/button&gt; etiketleri arasına metin veya resim ekleyebilirsiniz. HTML &lt;button&gt; etiketi için type niteliğini belirtilir.
            </p>
            <p class="mtn">
                HTML &lt;button&gt; etiketi formun içinde veya dışında kullanılabilir.
            </p>
            <p class="mtn">
                HTML &lt;button&gt; etiketi formun içinde “gönder” düğmesi veya sıfırlama düğmesi olarak çalışır. Formun dışında ise JavaScript işlemi için çağırabilirsiniz.
            </p>
            <div class="ust-bsl">Örnek</div>
            <p class="mtn">
                <button name="button" type="button" class="buton">Buraya Tıkla</button>
            </p>
            <div class="ust-bsl">Özellikler</div>
            <div class="duy" style="font-weight:500;">
                <table>
                    <thead>
                        <tr>
                            <th>Özellik</th>
                            <th>Açıklama</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>autofocus</td>
                            <td>Sayfa yüklenmesi sırasında odaklanılacak bir buton belirtir.</td>
                        </tr>
                        <tr>
                            <td>disabled</td>
                            <td>Devre dışı bırakılacak düğmeyi belirtir.</td>
                        </tr>
                        <tr>
                            <td>form</td>
                            <td>Butonun ait olduğu formu belirtir.</td>
                        </tr>
                        <tr>
                            <td>formaction</td>
                            <td>Gönderme türü belirtilir.</td>
                        </tr>
                        <tr>
                            <td>formmethod</td>
                            <td>Form verisinin gönderim tipini belirtir.</td>
                        </tr>
                        <tr>
                            <td>formenctype</td>
                            <td>Form verisinin sunucuya gitmeden önce nasıl kodlanması gerektiğini belirtir.</td>
                        </tr>
                        <tr>
                            <td>formnovalidate</td>
                            <td>Form verilerinin başvuru sırasında onaylanmama durumunu belirtir.</td>
                        </tr>
                        <tr>
                            <td>formtarget</td>
                            <td>Formun yanıtının görüntüleneceği yeri belirtir.</td>
                        </tr>
                        <tr>
                            <td>name</td>
                            <td>Butonun ismini belirtir.</td>
                        </tr>
                        <tr>
                            <td>type</td>
                            <td>Buton türünü belirtir.</td>
                        </tr>
                        <tr>
                            <td style="border:0;">value</td>
                            <td style="border:0;">Buton değerini belirtir.</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <br>
        </div>
    </div>
    <div class="bol-b" style="float:right;width: 85.2%;">
        <footer class="footer">2021 Tüm Hakları Saklıdır</footer>
    </div>
</body>

</html>