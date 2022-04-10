<?php
session_start();
include('config.php');
include_once 'class/cliente.php';
if(isset($_GET['delete_id'])){
    $id = $_GET['delete_id'];
    $crud = new crud($conn);
    header("Location:eliminar_users");


}
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <?php require_once "navbar.php" ?>
  <title>LOGIN</title>
</head>

<body style="background-color:#7F8C8D">

  <div class="container"><br>
  <?php
  if(isset($_GET['delete_id'])){
      
  ?>
    <div class="row justify-content-center">
      <div class="col-5 p-5 bg-white shadow-lg rounded">
        <h3>Eliminacion</h3>
        <table class="table table-light">
            <tbody>
                <tr>
                    <td>Id</td>
                    <td>Nombre</td>
                    <td>Direccion</td>
                    <td>Telefono</td>
                    <td>Tlefono</td>


                </tr>
                <?php 
                $stmt = $conn->prepare("SELECT * FROM tbl_cliente WHERE id=:id");
                $stmt->execute(array(":id" => $_GET['delete_id']));
                while ($row = $stmt-> fetch(PDO::FETCH_BOTH));{
                ?>
                <tr>
                    <td>
                        <?php echo ($row['id']) ?>
                    </td>
                    <td>
                        <?php echo ($row['nombre']) ?>
                    </td>
                    <td>
                        <?php echo ($row['direccion']) ?>
                    </td>
                    <td>
                        <?php echo ($row['telefono']) ?>
                    </td>
                    <td>
                        <?php echo ($row['dui']) ?>
                    </td>

                </tr>
            </tbody>
            <?php
           }
          ?>
        </table>
        <?php
           }
          ?>

    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>