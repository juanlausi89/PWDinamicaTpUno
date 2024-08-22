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
    <div class="container w-25 mt-5 card">
        <form action="login" method="POST" data-parsley-validate="" id="#demo-form">
            <h2>Member Login</h2>
            <div class="mb-3">
                <input placeholder="Username" type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="mb-3">
                <input placeholder="Password" type="password" class="form-control" id="password" name="password" required data-parsley-minlength="8"  data-parsley-user-distinto-password data-parsley-password-letras-numeros>
            </div>
            <div class="mb-3">
                <button type="submit" style="width:100%;" class="btn btn-success mt-2">Login</button>
            </div>
        </form> 
        <span class="mt-3"><?php echo  $this->d['resp']; ?></span>    
    </div>
    <div class="mb-3">
        <a href="menu" class="link-primary">Volver menú</a>
    </div>
</body>
<script type="text/javascript">
$(function () {
  // Registrar la regla personalizada para la contraseña
  window.Parsley.addValidator('userDistintoPassword', {
    validateString: function(value, requirement, field) {
      // Obtener el valor del campo username
      const username = document.querySelector('[name="username"]').value;
      // Verificar que la contraseña no sea igual al nombre de usuario
      if (value === username) {
        return false;
      }
      return true;
    },
    messages: {
      es: 'El nombre de usuario no puede ser igual que el de password.'
    }
  });

  // Inicializar Parsley en el formulario
  $('#demo-form').parsley()
    .on('field:validated', function() {
      var ok = $('.parsley-error').length === 0;
      $('.bs-callout-info').toggleClass('hidden', !ok);
      $('.bs-callout-warning').toggleClass('hidden', ok);
    })
    .on('form:submit', function() {
      return false; // No enviar el formulario para esta demostración
    });
});

$(function () {
  // Registrar la regla personalizada para la contraseña
  window.Parsley.addValidator('passwordLetrasNumeros', {
    validateString: function(value, requirement, field) {
      // Obtener el valor del campo username
      const username = document.querySelector('[name="username"]').value;
      // Expresión regular para verificar que la contraseña contenga al menos una letra y un número
      var regex = /^(?=.*[a-zA-Z])(?=.*\d).+$/;
      if (!regex.test(value)) {
        return false;
      }
      return true;
    },
    messages: {
      es: 'El password debe contener letras y numeros.'
    }
  });

  // Inicializar Parsley en el formulario
  $('#demo-form').parsley()
    .on('field:validated', function() {
      var ok = $('.parsley-error').length === 0;
      $('.bs-callout-info').toggleClass('hidden', !ok);
      $('.bs-callout-warning').toggleClass('hidden', ok);
    })
    .on('form:submit', function() {
      return false; // No enviar el formulario para esta demostración
    });
});
</script>
</html>