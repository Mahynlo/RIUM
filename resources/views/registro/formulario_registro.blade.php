<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta content="initial-scale=1, shrink-to-fit=no, width=device-width" name="viewport">
      <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i|Roboto+Mono:300,400,700|Roboto+Slab:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Add Material CSS, replace Bootstrap CSS -->
    <link href="assets/css/material.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/home.css">
    <title>Google Sheets</title>
    </head>
  <body>
    
  <div class="container border mt-5">
  <div class="row justify-content-center">
    <div class="col-md-12 mb-5">
        <h2 class="text-center mt-3">Formulario con Google Sheets <hr></h2>
    </div>

    <div class="col-md-5">
        <form id="my-google-sheet">

            <div class="form-group">
                <label for="Marca temporal">Marca temporal</label>
                <input type="text" name="Marca temporal" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="Nombre">Nombres</label>
                <input type="text" name="Nombre(s)" class="form-control" required>
                <small id="emailHelp" class="form-text text-muted">Campo obligatorio.</small>
            </div>

            <div class="form-group">
                <label for="Apellidos">Apellidos</label>
                <input type="text" name="Apellidos" class="form-control" required>
                <small id="emailHelp" class="form-text text-muted">Campo obligatorio.</small>
            </div>

            <div class="form-group">
                <label for="E-mail">E-mail</label>
                <input type="text" name="E-MAIL" class="form-control" required>
                <small id="emailHelp" class="form-text text-muted">Campo obligatorio.</small>

           <div class="form-group">
                <label for="¿Qué proyecto desea presentar?">¿Qué proyecto desea presentar?</label>
                <input type="text" name="¿Qué proyecto desea presentar?" class="form-control" required>
                <small id="emailHelp" class="form-text text-muted">Campo obligatorio.</small>
            </div>

            <div class="form-group">
                <label for="¿Qué proyecto desea presentar?">¿Qué proyecto desea presentar?</label>
                <input type="text" name="¿Qué proyecto desea presentar?" class="form-control" required>
                <small id="emailHelp" class="form-text text-muted">Campo obligatorio.</small>
            </div>

            <div class="form-group">
                <label for="Tema de ponencia">Tema de ponencia</label>
                <input type="text" name="Tema de ponencia" class="form-control" required>
                <small id="emailHelp" class="form-text text-muted">Campo obligatorio.</small>
            </div>

             <div class="form-group">
                <label for="Forma de trabajo">Forma de trabajo</label>
                <input type="text" name="Forma de trabajo" class="form-control" required>
                <small id="emailHelp" class="form-text text-muted">Campo obligatorio.</small>
            </div>

            <div class="form-group">
                <label for="Tema del póster">Tema del póster</label>
                <input type="text" name="Tema del póster" class="form-control" required>
                <small id="emailHelp" class="form-text text-muted">Campo obligatorio.</small>
            </div>

            <div class="form-group">
                <label for="Ingrese el nombre de los integrantes:">Ingrese el nombre de los integrantes:</label>
                <input type="text" name="Ingrese el nombre de los integrantes:" class="form-control" required>
                <small id="emailHelp" class="form-text text-muted">Campo obligatorio.</small>
            </div>

                        <div class="form-group">
                <label for="Ingrese el correo de los integrantes">Ingrese el correo de los integrantes</label>
                <input type="text" name="Ingrese el correo de los integrantes" class="form-control" required>
                <small id="emailHelp" class="form-text text-muted">Campo obligatorio.</small>
            </div>

        </form>
        <div class="form-group mb-5 text-center mt-5">
          <button onclick="SendFormGoogleSheets()" class="btn btn-primary btn-sm">Enviar Formulario</button>
        </div>
    </div>

    <div class="col-md-5">
        <img src="assets/imgs/Google-Sheets-1.png" alt="" class="img-fluid">
    </div>
  </div>


  </div>
</div>


    <script src="https://code.jquery.com/jquery-3.6.0.js"  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="assets/js/material.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="crossorigin="anonymous"></script>
    <script>
      function SendFormGoogleSheets (){
        $.ajax({
          url:'https://script.google.com/macros/s/AKfycbyZOLi8MY6mWcj6_QmtXl-rQgwWnmee4eV0RcgGALY81yEGpE6MFo7O4L0wYhP0FQ4w/exec',
          type:'post',
          data:$("#my-google-sheet").serializeArray(),
          success: function(){
            alert("Registro exitoso")
          },
          error: function(){
            alert("Error en el Registro :(")
          }
      });
    }
    </script>


</body>
</html>