<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <?php require_once "menu.php" ?>
    <title>Estructuras de Control</title>
  </head>
  <body>

  <div class="container"><br>
    <div class="row justify-content-center">
        <div class="col-6 p-5 bg-white shadow-lg rounded">
        <h3>Inicio de sesion</h3>
            <hr>
      
            <form method="post" action="recibe_post.php">
    <div class="form-group">
        <label for="usuario">Usuario</label>
        <input id="usuario" class="form-control" type="text" name="usuario" value="Juan" require>

    </div>
    
    <div class="form-group">
        <label for="contra">Contraseña</label>
        <input id="contra" class="form-control" type="password" name="contra" value="1234" require>

        <br>
        <a href="http://">¿Olvidaste tu contraseña?</a>
        <br>
        
        <div class="form-group">
    <button class="btn btn-primary btn-lg btn-block" type="submit">Enviar</button>
  </div>
       
        </div>
    </div>
  </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>