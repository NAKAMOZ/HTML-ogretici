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
                &lt;audio&gt;
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
                    <span class="etiketisimrenk" style="color:brown"><span class="etiketrenk" style="color:mediumblue">&lt;</span>audio <span class="nitelikrenk" style="color:red"> control</span></span><span class="etiketrenk" style="color:mediumblue">&gt;</span></span><br>
                    <span class="etiketisimrenk" style="color:brown"><span class="etiketrenk" style="color:mediumblue">&lt;</span>source <span class="nitelikrenk" style="color:red"> src</span><span class="etiketrenk" style="color:mediumblue">="ses dosyası linki"</span></span><span class="nitelikrenk" style="color:red"> type</span><span class="etiketrenk" style="color:mediumblue">="audio/mpeg"</span></span><span class="etiketrenk" style="color:mediumblue">&gt;</span></span><br>
                    <span class="etiketisimrenk" style="color:brown"><span class="etiketrenk" style="color:mediumblue">&lt;</span>/audio<span class="etiketrenk" style="color:mediumblue">&gt;</span></span><br><br>
                    <span class="etiketisimrenk" style="color:brown"><span class="etiketrenk" style="color:mediumblue">&lt;</span>/body<span class="etiketrenk" style="color:mediumblue">&gt;</span></span><br>
                    <span class="etiketisimrenk" style="color:brown"><span class="etiketrenk" style="color:mediumblue">&lt;</span>/html<span class="etiketrenk" style="color:mediumblue">&gt;</span></span>
                </div>
            </div>
            <br>
            <p class="mtn">
                HTML &lt;audio&gt; etiketi , mp3 ve diğer ses dosyaları HTML belgesi üzerinde tanımlamak için kullanılır.
            </p>
            <p class="mtn">
                HTML 5’in desteklediği 3 dosya birimi vardır:
            <ol>
                <li>mp3</li>
                <li>wav</li>
                <li>ogg</li>
            </ol>
            </p>
            <div class="ust-bsl">Örnek</div>
            <p class="mtn">
                <audio controls style="width:99%;">
                    <source src="ses/music.mp3" type="audio/mpeg">
                </audio>
            </p>
            <div class="ust-bsl">Özellikler</div>
            <div class="duy" style="font-weight:500;font-family:arial;">
                <table>
                    <thead>
                        <tr>
                            <th>Özellik</th>
                            <th>Açıklama</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>controls</td>
                            <td>Ses kontrollerini tanımlar.(Oynat/ Duraklat)</td>
                        </tr>
                        <tr>
                            <td>autoplay</td>
                            <td>Ses hazır olduğu an otomatik oynamaya başlar.</td>
                        </tr>
                        <tr>
                            <td>loop</td>
                            <td>Ses dosyaları bitince yeniden başlar.</td>
                        </tr>
                        <tr>
                            <td>muted</td>
                            <td>Ses dosyası sessiz bir şekilde oynatılır.</td>
                        </tr>
                        <tr>
                            <td>preload</td>
                            <td>Yazar sayfa yüklendiğinde ses dosyasının yüklenmesi gerektiğini düşünür.</td>
                        </tr>
                        <tr>
                            <td style="border:0px;">src</td>
                            <td style="border:0px;">Ses dosyasının bağlantı adresini belirtir.</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="ust-bsl">Ses Dosyaları İçin MIME Türleri:</div>
            <div class="duy" style="font-weight:500;font-family:arial;">
                <table>
                    <thead>
                        <tr>
                            <th>Ses Formatı</th>
                            <th>Mime Türü</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>.mp3</td>
                            <td>audio/mpeg</td>
                        </tr>
                        <tr>
                            <td>.wav</td>
                            <td>audio/wav</td>
                        </tr>
                        <tr>
                            <td style="border:0px;">.ogg</td>
                            <td style="border:0px;">audio/ogg</td>
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