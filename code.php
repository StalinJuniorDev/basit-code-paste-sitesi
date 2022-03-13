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
    <h1>CodePaste</h1>
    <?php
    include("ayar.php");
            $id = $_GET["id"];
            $kod = $vt->prepare("select * from links where id=?");
            $kod->execute(array($id));
            foreach($kod as $kodlar){

    ?>
    <div data-spy="scroll" data-target="#navbar-example3" data-offset="0">
    <p><?php echo $kodlar["kod"] ?></p>
    </div>
    <?php
            }
    ?>
    </div>
    </div>
    </div>
</body>
</html>