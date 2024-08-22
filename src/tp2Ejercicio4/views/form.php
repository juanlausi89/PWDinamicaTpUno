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

<style>
  li{
    list-style-type: none;
  }
  .titulo{
    color: #1278B6;
    margin-top: 1em;
    margin-bottom: 1em;
  }
  .card{
    -webkit-box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.75);
    -moz-box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.75);
    box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.75);
    padding:2em ;
    height: 20em;
  }
</style>

</head>
<body>
    <div class="container">
        <h5 class="mt-3 mb-3">Cinem@s</h5>
        <form action="savePeliculas" method="POST" data-parsley-validate="">
            
          <div class="row">
            <div class="form-group mb-3 col-md-6">
                <label for="titulo" class="form-label">Titulo</label>
                <input placeholder="Titulo"  type="text" class="form-control" id="titulo" name="titulo" required>
            </div>

            <div class="form-group mb-3 col-md-6">
                <label for="actores" class="form-label">Actores</label>
                <input placeholder="Actores"  type="text" class="form-control" id="actores" name="actores" required>
            </div>
          </div>  

          <div class="row">
            <div class="mb-3 col-md-6">
                <label for="director" class="form-label">Director</label>
                <input placeholder="Director"  type="text" class="form-control" id="director" name="director" required>
            </div>

            <div class="mb-3 col-md-6">
                <label for="guion" class="form-label">Guión</label>
                <input placeholder="Guion"  type="text" class="form-control" id="guion" name="guion" required>
            </div>
          </div>  

          <div class="row">
            <div class="mb-3 col-md-6">
                <label for="produccion" class="form-label">Producción</label>
                <input placeholder="Producción"  type="text" class="form-control" id="produccion" name="produccion" required>
            </div>

            <div class="mb-3 col-md-2">
                <label for="anio" class="form-label">Año</label>
                <input placeholder="Año"  type="number" class="form-control" id="anio" name="anio" required data-parsley-maxlength="4">
            </div>
          </div>

          <div class="row">
            <div class="mb-3 col-md-6">
                <label for="nacionalidad" class="form-label">Nacionalidad</label>
                <input placeholder="Nacionalidad"  type="text" class="form-control" id="nacionalidad" name="nacionalidad" required>
            </div>

            <div class="col-md-6">
              <label for="genero" class="form-label">Genero</label>
              <select class="form-select" name="genero" aria-label="Default select example" required>
                  <option value="Comedia">Comedia</option>
                  <option value="Drama">Drama</option>
                  <option value="Terror">Terror</option>
                  <option value="Románticas">Románticas</option>
                  <option value="Suspenso">Suspenso</option>
                  <option value="Otras">Otras</option>
              </select>
            </div>

            
          </div>

          <div class="row">
            <div class="mb-3 col-md-2">
                  <label for="duracion" class="form-label">Duración</label>
                  <input placeholder="Duración"  type="number" class="form-control" id="duracion" name="duracion" required data-parsley-maxlength="3">
              </div>

              <div class="mb-3 col-md-8">
                <label class="mt-2 mb-1">Restricciones de edad</label><br>
                <div class="form-check form-check-inline">
                    <input value="Todo Público" class="form-check-input" type="radio" name="restriccionEdad" id="restriccionEdad1" required>
                    <label class="form-check-label" for="restriccionEdad1">
                      Todo Público
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input value="Mayores de 7 años" class="form-check-input" type="radio" name="restriccionEdad" id="restriccionEdad2" required>
                    <label class="form-check-label" for="restriccionEdad2">
                      Mayores de 7 años
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input value="Mayores de 18 años" class="form-check-input" type="radio" name="restriccionEdad" id="restriccionEdad3" required>
                    <label class="form-check-label" for="restriccionEdad3">
                      Mayores de 18 años
                    </label>
                </div>
              </div>   
            </div>  

            <div class="form-group mt-3">
              <label for="sinopsis">Sinopsis</label>
              <textarea class="form-control" id="sinopsis" name="sinopsis" rows="3" required></textarea>
            </div>
            
            <div class="mb-3">
                <button type="submit"  class="btn btn-success mt-2">Enviar</button>
                <button type="reset"  class="btn  mt-2">Borrar</button>
            </div>
        </form>
        
        <?php if (!empty($this->d['resp'])): ?>
        <div class="alert alert-success" role="alert">
          <h1 class="titulo">La pelicula introducida es</h1>
          <ul>
            <li><strong>Titulo: </strong><?php echo $this->d['resp']['titulo']; ?></li>
            <li><strong>Actores: </strong><?php echo $this->d['resp']['actores']; ?></li>
            <li><strong>Director: </strong><?php echo $this->d['resp']['director']; ?></li>
            <li><strong>Guion: </strong><?php echo $this->d['resp']['guion']; ?></li>
            <li><strong>Producción: </strong><?php echo $this->d['resp']['produccion']; ?></li>
            <li><strong>Año: </strong><?php echo $this->d['resp']['anio']; ?></li>
            <li><strong>Nacionalidad: </strong><?php echo $this->d['resp']['nacionalidad']; ?></li>
            <li><strong>Genero: </strong><?php echo $this->d['resp']['genero']; ?></li>
            <li><strong>Duración: </strong><?php echo $this->d['resp']['duracion']; ?></li>
            <li><strong>Restricción Edad: </strong><?php echo $this->d['resp']['restriccionEdad']; ?></li>
            <li><strong>Sinopsis: </strong><?php echo $this->d['resp']['sinopsis']; ?></li>
          </ul>
        </div> 
        <?php endif; ?>   
    </div>
    <div class="mb-3">
        <a href="menu" class="link-primary">Volver menú</a>
    </div>
</body>
</html>