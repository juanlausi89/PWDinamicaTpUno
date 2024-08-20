<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container w-25 mt-5">
        <h4>Datos</h4>
        <ul class="list-group">
            <li class="list-group-item">Nombre: <?php echo $this->d['resp']->getNombre(); ?></li>
            <li class="list-group-item">Apellido: <?php echo $this->d['resp']->getApellido(); ?></li>
            <li class="list-group-item">Edad: <?php echo $this->d['resp']->getEdad(); ?></li>
            <li class="list-group-item">Dirección: <?php echo $this->d['resp']->getDireccion(); ?></li>
            <li class="list-group-item">Nivel estudio: <?php echo $this->d['resp']->getNivelEstudio(); ?></li>
            <li class="list-group-item">Sexo: <?php echo $this->d['resp']->getSexo(); ?></li>
            <li class="list-group-item">Deportes: 
                <?php     
                    foreach($this->d['resp']->getDeportes() as $value){?>
                      <span><?php echo $value ?></span>  
                <?php } ?>
            </li>
        </ul>
    </div>
    
    <div class="mb-3">
        <a href="ejercicio6" class="link-primary">Volver</a>
    </div>
</body>     
</html>