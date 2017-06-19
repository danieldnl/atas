<!DOCTYPE html>
<html>
<head>
    <title>Atas - NRC</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h2>Atas de Reuniões - <?= $area ?></h2>
    <hr>
    <div class="well col-md-4 pull-right">
        <form action="<?= Request::uri() ?>" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Arquivar nova Ata</label>
                <input type="hidden" name="MAX_FILE_SIZE" value="5000000">
                <input type="file" name="fileUpload">
            </div>
            <button class="btn btn-success">Enviar</button>
        </form>
    </div>
    <div class="col-md-6" style="padding-bottom: 20px;">
        <?php if(isset($result) && $result !== "" ): ?>
            <span class="<?= $result['alert'] ?>"><?= $result['msg'] ?></span>
        <?php endif; ?>
    </div>
    <div class="col-md-6">
        <ul>
            <?php foreach ($atas as $ata) : ?>
                <li><a href="<?= $ata['href'] ?>"><?= $ata['nome'] ?></a></li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>
</body>
</html>