<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <title>CodePaste</title>
</head>
<body>
    <div class="container">
    <div class="row justify-content-center">
    <div class="col-lg-7">
    <form method="POST" action="">
    <h1>CodePaste</h1><p class="text-right"><input type="submit" value="Kaydet" class="btn btn-primary"></p>
    <?php
    if($_POST){
        if( empty($_POST["kod"]) ){
            echo "Lütfen boş bırakmayın!";
        }else{
            include("ayar.php");
            $kod = $_POST["kod"];
            $kodekle = $vt->prepare("insert into links set kod=?");
            $kodekle->execute(array($kod));

            $data = $vt->prepare("select * from links order by id desc");
            $data->execute();
            $_data = $data->fetch(PDO::FETCH_ASSOC);

            echo "<a href='/code.php?id=".$_data['id']."'>Koda gitmek için tıkla!</a>";
        }
    }
    ?>
    <textarea name="kod" rows="20" style="resize: none;"></textarea>
    </form>
    </div>
    </div>
    </div>
</body>
</html>