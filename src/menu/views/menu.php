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
    
    <div class="container w-50 mt-3">
        <h4 class="text-center">PHP Trabajo Práctico Nº 1</h4>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" href="ejercicio1">Ejercicio 1</a>
            </li>
            <p>
            Confeccionar un formulario que solicite un número. Al pulsar el botón de enviar debe
            llamar a un script –vernumero.php- y visualizar un mensaje que indique si el número
            enviado fue: positivo, cero o negativo. Añadir un link, a la página que visualiza la
            respuesta, que permita volver a la página anterior.
            </p>
            <li class="nav-item">
                <a class="nav-link active" href="ejercicio2">Ejercicio 2</a>
                <p>
                Crear una página php que contenga un formulario HTML que permita ingresar las horas
                de cursada, de la materia Programación Web Dinámica, por cada día de la semana.
                Enviar los datos del formulario por el método Get a otra página php que los reciba y
                complete un array unidimensional. Visualizar por pantalla la cantidad total de horas que
                se cursan por semana.
                </p>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="ejercicio3">Ejercicio 3</a>
                <p>
                Crear una página php que contenga un formulario HTML como el que se indica en la
                imagen (darle formato con CSS), enviar estos datos por el método Post a otra página php
                que los reciba y muestre por pantalla un mensaje como el siguiente: “Hola, yo soy
                nombre , apellido tengo edad años y vivo en dirección”, usando la información recibida.
                Cambiar el método Post por Get y analizar las diferencias
                </p>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="ejercicio4">Ejercicio 4</a>
                <p>
                Modificar el formulario del ejercicio anterior para que usando la edad solicitada, enviar
                esos datos a otra página en donde se muestren mensajes distintos dependiendo si la
                persona es mayor de edad o no; (si la edad es mayor o igual a 18).
                Enviar los datos usando el método GET y luego probar de modificar los datos
                directamente en la url para ver los dos posibles mensajes
                </p>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="ejercicio5">Ejercicio 5</a>
                <p>
                Modificar el formulario del ejercicio anterior solicitando, tal que usando componentes
                “radios buttons” se ingrese el nivel de estudio de la persona: 1-no tiene estudios, 2-
                estudios primarios, 3-estudios secundarios. Agregar el componente que crea más
                apropiado para solicitar el sexo. En la página que procesa el formulario mostrar además
                un mensaje que indique el tipo de estudios que posee y su sexo.
                </p>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="ejercicio6">Ejercicio 6</a>
                <p>
                Modificar el formulario del ejercicio anterior para que permita seleccionar los diferentes
                deportes que practica (futbol, basket, tennis, voley) un alumno. Mostrar en la página
                que procesa el formulario la cantidad de deportes que practica.
                </p>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="ejercicio7">Ejercicio 7</a>
                <p>
                Crear una página con un formulario que contenga dos input de tipo text y un select. En
                los inputs se ingresarán números y el select debe dar la opción de una operación
                matemática que podrá resolverse usando los números ingresados. En la página que
                procesa la información se debe mostrar por pantalla la operación seleccionada, cada
                uno de los operandos y el resultado obtenido de resolver la operación. Ejemplo del
                formulario:
                </p>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="ejercicio8">Ejercicio 8</a>
                <p>
                La empresa de Cine Cinem@s tiene establecidas diferentes tarifas para las entradas, en
                función de la edad y de la condición de estudiante del cliente. Desea que sean los propios
                clientes los que puedan calcular el valor de sus entradas a través de una página web. Si
                es estudiante o menor de 12 años el precio es de $160, si es estudiante y mayor o igual
                de 12 años el precio es de $180, en cualquier otro caso el precio es de $300. Diseñar un
                formulario que solicite la edad y permita ingresar si se trata de un estudiante o no. Con
                un botón enviar los datos a un script encargado de realizar el cálculo y visualizarlo.
                Agregar un botón para limpiar el formulario y volver a consultar.
                </p>
            </li>

            <li class="nav-item">
                <a class="nav-link active" href="tp2Ejercicio3">TP2 Ejercicio 3</a>
                <p>
                a) Crear una nueva página php con un formulario HTML de login en la que solicitan el usuario
                y la password para loguearse. Los datos del formulario son enviados a un script
                verificaPass.php en el que contienen un arreglo asociativo por cada usuario del sistema. El
                arreglo asociativo tiene como claves: “usuario” y “clave”. El script debe visualizar un mensaje
                de bienvenida si los datos ingresados coinciden con alguno de los almacenados en el arreglo
                y en caso contrario un mensaje de error.
                b) Realizar la validación de este formulario. Chequear no solo que se hayan cargado el
                usuario y la contraseña antes de ser enviados al servidor sino que también debe
                realizar un control de contraseña segura (La contraseña debe tener como mínimo 8
                caracteres, no puede ser igual que el nombre de usuario ingresado y debe contener
                letras y números).
                c) Aplicar Bootstrap.
                </p>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="tp2Ejercicio4">TP2 Ejercicio 4</a>
                <p>
                Diseñar un formulario que permita cargar las películas de la empresa Cinem@s. La lista géneros
                tiene los siguientes datos: Comedia, Drama, Terror, Románticas, Suspenso, Otras.
                Aplicar Bootstrap y validar los siguiente:
                - El año debe ser un campo que debe permitir ingresar como máximo 4 caracteres y solo
                aceptar números.
                - El campo duración debe permitir un máximo de 3 números.
                - Todos los datos son obligatorios
                - Al hacer click en el botón “Enviar”, se deberán mostrar todos los datos ingresados en el
                formulario.
                - El botón “Borrar” debe limpiar el formulario.
                </p>
            </li>
        </ul>
    </div>
    
   
</body>     
</html>