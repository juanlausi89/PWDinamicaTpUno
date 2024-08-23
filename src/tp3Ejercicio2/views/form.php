<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>src/assets/parsley.css">
    <script src="<?php echo constant('URL'); ?>src/assets/jquery.min.js"></script>
    <script src="<?php echo constant('URL'); ?>src/assets/parsley.min.js"></script>
    <script src="<?php echo constant('URL'); ?>src/assets/i18n/es.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container w-25 mt-5">
        <form action="subirArchivoTxt" method="POST" enctype="multipart/form-data">
        <input type="file" name="archivo" accept=".txt">

            <input type="submit" value="Publicar">
        </form>
        <div class="mt-3">
            <?php if (!empty($this->d['resp'])): ?>
                <textarea class="form-control" id="sinopsis" name="sinopsis" rows="3" required><?php echo $this->d['resp'] ?></textarea>
            <?php endif; ?>
        </div>     
    </div>
    <div class="mb-3">
        <a href="menu" class="link-primary">Volver menú</a>
    </div>
</body>
</html>