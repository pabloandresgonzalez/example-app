<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
          setTimeout(function() {
              $(".alert").fadeOut(7000);
          });
      });
    </script>


    <title>Empresa</title>

    
  </head>
  <body>

    <div class="container" style="margin-top: 10%;">

      <div class="container-fluid" style="text-align: center;">

        @if(session('message'))
            <div class="alert alert-success" role="alert">
              {{ session('message') }}
            </div>
        @endif




   <div class="card" >
    <div class="card-header">
      <h1>Empresa</h1>
    </div>
   <div class="card-body">
    <h5 class="card-title">Bienvenid@! Gestiona los datos de un empleado</h5>
        <p class="card-text">Aquí puedes registrar, actualizar o eliminar la información de un empleado.</p>
        <a href="empleado/create" class="btn btn-primary">Registrar un empleado</a><br><br>
        <a href="empleado" class="btn btn-info">Ver la lista de los empleados</a><br><br>
          
    </div>
  </div>

    <footer  style="margin-top: 8%;">
      ® Empresa 2022
    </footer>
  </div>
      

    </div>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>