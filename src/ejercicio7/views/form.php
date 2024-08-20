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
        <form action="calcularOperacionMatematica" method="POST">
            <h2>Cálculo</h2>
            <div class="mb-3">
                <label for="primerNumero" class="form-label">Primer número</label>
                <input type="number" class="form-control" id="primerNumero" name="primerNumero">
            </div>
            <div class="mb-3">
                <label for="segundoNumero" class="form-label">Segundo número</label>
                <input type="number" class="form-control" id="segundoNumero" name="segundoNumero">
            </div>
            <select class="form-select" name="operacion" aria-label="Default select example">
                <option value="MULTIPLICACION">MULTIPLICACION</option>
                <option value="SUMA">SUMA</option>
                <option value="RESTA">RESTA</option>
            </select>
            <button type="submit" class="btn btn-primary mt-3">Enviar</button>
        </form>     
    </div>
</body>
</html>