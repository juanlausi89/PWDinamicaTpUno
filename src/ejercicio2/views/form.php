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
        <form action="enviarHoras" method="GET" data-parsley-validate="">
            <h2>Horas de la semana Programación Web Dinámica</h2>
            <div class="mb-3">
                <label for="horasLunes" class="form-label">Lunes</label>
                <input type="number" class="form-control" id="horasLunes" name="horasLunes" required>
            </div>
            <div class="mb-3">
                <label for="horasMartes" class="form-label">Martes</label>
                <input type="number" class="form-control" id="horasMartes" name="horasMartes" required>
            </div>
            <div class="mb-3">
                <label for="horasMiercoles" class="form-label">Miercoles</label>
                <input type="number" class="form-control" id="horasMiercoles" name="horasMiercoles" required>
            </div>
            <div class="mb-3">
                <label for="horasJueves" class="form-label">Jueves</label>
                <input type="number" class="form-control" id="horasJueves" name="horasJueves" required>
            </div>
            <div class="mb-3">
                <label for="horasViernes" class="form-label">Viernes</label>
                <input type="number" class="form-control" id="horasViernes" name="horasViernes" required>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>     
    </div>
    <div class="mb-3">
        <a href="menu" class="link-primary">Volver menú</a>
    </div>
</body>
</html>