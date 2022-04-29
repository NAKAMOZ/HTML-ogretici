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
                &lt;textarea&gt;
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
                    <span class="etiketisimrenk" style="color:brown"><span class="etiketrenk" style="color:mediumblue">&lt;</span>textarea <span class="nitelikrenk" style="color:red"> rows</span><span class="etiketrenk" style="color:mediumblue">="6"</span><span class="nitelikrenk" style="color:red"> cols</span><span class="etiketrenk" style="color:mediumblue">="80" </span><span class="etiketrenk" style="color:mediumblue">&gt;</span></span><br />Textarea'nın içindeki bir metin.<br /><span class="etiketisimrenk" style="color:brown"><span class="etiketrenk" style="color:mediumblue">&lt;</span>/textarea<span class="etiketrenk" style="color:mediumblue">&gt;</span></span><br><br>
                    <span class="etiketisimrenk" style="color:brown"><span class="etiketrenk" style="color:mediumblue">&lt;</span>/body<span class="etiketrenk" style="color:mediumblue">&gt;</span></span><br>
                    <span class="etiketisimrenk" style="color:brown"><span class="etiketrenk" style="color:mediumblue">&lt;</span>/html<span class="etiketrenk" style="color:mediumblue">&gt;</span></span>
                </div>
            </div>
            <br>
            <p class="mtn">
                HTML &lt;textarea&gt; etiketi, çok satırlı metin giriş alanlarıtanımlamak için kullanılır. Tanımlanan metin alanlarına sınırsız sayıda karakter yazılabili. Ayrıca bu metin alanları sabit genişlikli yazı ile görüntülenir(Courier). Metin alanlarının boyutu cols ve rows kullanılarak belirlenir.
            </p>
            <div class="ust-bsl">
                Örnek
            </div>
            <br>
            <div class="mtn">
                <textarea rows="6" cols="80">
                Textarea'nın içindeki bir metin.
                </textarea>
            </div>
            <br>
            <div class="ust-bsl">Özellikler</div>
            <div class="duy" style="font-weight:500;font-family:arial;">
                <table>
                    <thead>
                        <tr>
                            <th>Özellik</th>
                            <th>Tanım</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>autofocus</td>
                            <td>Sayfa yüklendiği sırada metin alanının odaklanacağı noktayı belirtir.</td>
                        </tr>
                        <tr>
                            <td>form</td>
                            <td>Textarea’nın sahip olduğu form ve formları belirtir.</td>
                        </tr>
                        <tr>
                            <td>maxlength</td>
                            <td>Maksimum zin verilen karakter sayısını belirtir.</td>
                        </tr>
                        <tr>
                            <td>placeholder</td>
                            <td>Textarea içerisinde bir ipucu metini belirtir.</td>
                        </tr>
                        <tr>
                            <td>required</td>
                            <td>Textarea’nı boş geçilemeyeceğini belirtir.</td>
                        </tr>
                        <tr>
                            <td style="border-bottom:0px;">wrap</td>
                            <td style="border-bottom:0px;">Metin alanının nasıl paketleneceğini belirtir.</td>
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