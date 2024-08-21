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
        <form action="enviarDatosAlumno" method="GET">
            <h2>Completar con tus datos</h2>
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre">
            </div>
            <div class="mb-3">
                <label for="apellido" class="form-label">Apellido</label>
                <input type="text" class="form-control" id="apellido" name="apellido">
            </div>
            <div class="mb-3">
                <label for="edad" class="form-label">Edad</label>
                <input type="number" class="form-control" id="edad" name="edad">
            </div>
            <label class="form-label mb-1">Sexo</label>
            <div class="form-check">
                <input value="Femenino" class="form-check-input" type="radio" name="sexo" id="sexo1">
                <label class="form-check-label" for="sexo1">
                    Femenino
                </label>
            </div>
            <div class="form-check">
                <input value="Masculino" class="form-check-input" type="radio" name="sexo" id="sexo2">
                <label class="form-check-label" for="sexo2">
                    Masculino
                </label>
            </div>
            <div class="mt-3">
                <label for="direccion" class="form-label">Dirección</label>
                <input type="text" class="form-control" id="direccion" name="direccion">
            </div>
            <label class="form-label mt-3 mb-1">Nivel estudio</label>
            <div class="form-check">
                <input value="No tiene estudios" class="form-check-input" type="radio" name="nivelEstudio" id="nivelEstudio1">
                <label class="form-check-label" for="nivelEstudio1">
                    No tiene estudios
                </label>
            </div>
            <div class="form-check">
                <input value="Estudios primarios" class="form-check-input" type="radio" name="nivelEstudio" id="nivelEstudio2">
                <label class="form-check-label" for="nivelEstudio2">
                    Estudios primarios
                </label>
            </div>
            <div class="form-check">
                <input value="Estudios secundarios" class="form-check-input" type="radio" name="nivelEstudio" id="nivelEstudio3">
                <label class="form-check-label" for="nivelEstudio3">
                    Estudios secundarios
                </label>
            </div>
            <label class="form-label mt-3 mb-1">Deportes</label>
            <div class="form-check">
                <input class="form-check-input" name="deportes[]" type="checkbox" value="futbol" id="deporte1">
                <label class="form-check-label" for="deporte1">
                    Fútbol
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" name="deportes[]" type="checkbox" value="basket" id="deporte2">
                <label class="form-check-label" for="deporte2">
                    Basket
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" name="deportes[]" type="checkbox" value="tennis" id="deporte3">
                <label class="form-check-label" for="deporte3">
                    Tennis
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" name="deportes[]" type="checkbox" value="voley" id="deporte4">
                <label class="form-check-label" for="deporte4">
                    Voley
                </label>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Enviar</button>
        </form>     
    </div>
    <div class="mb-3">
        <a href="menu" class="link-primary">Volver menú</a>
    </div>
</body>
</html>