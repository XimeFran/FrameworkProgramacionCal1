<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!--jorge-->
    <title>LOGIN</title>
    <link rel="stylesheet" type="text/css" href="style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- CSS PROPIO -->
    <link rel="stylesheet" href="actCal1/style.css" type="text/css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <!--Jorge
     <form action="login.php" method="post">

        <h2>LOGIN</h2>

        <?php if (isset($_GET['error'])) { ?>

            <p class="error"><?php echo $_GET['error']; ?></p>

        <?php } ?>
        
        <label>User Name</label>

        <input type="text" name="uname" placeholder="User Name"><br>

        <label>Password</label>

        <input type="password" name="password" placeholder="Password"><br> 

        <button type="submit">Login</button>
        
     </form>
     -->
    <div>
        <button type="button" data-bs-toggle="modal" data-bs-target="#loginModal" class="btn btn-secondary">Iniciar
          Sesión </button>
    </div>
    <!-- ______________________________________MODAL SECTION_________________________________________-->
    <!-- MODAL INICIAR SESION -->
    <!-- The Modal -->
    <div class="modal" id="loginModal">
      <div class="modal-dialog">
          <form>
              <div class="modal-content">

                  <!-- Modal Header -->
                  <div class="modal-header">
                      <h4 class="modal-title">Iniciar Sesion</h4>
                      <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                  </div>

                  <!-- Modal body -->
                  <div class="modal-body">
                      <div class="input-group flex-nowrap mb-3">
                          <span class="input-group-text" id="addon-wrapping">Usuario</span>
                          <input type="text" class="form-control" placeholder="usuario" aria-label="usuario"
                              aria-describedby="addon-wrapping" name="usuario" required>
                      </div>

                      <div class="input-group flex-nowrap">
                          <span class="input-group-text" id="addon-wrapping">Contraseña</span>
                          <input type="text" class="form-control" placeholder="password" aria-label="password"
                              aria-describedby="addon-wrapping" name="password" required>
                      </div>
                      <a class="nav-link text-dark" href="">Olvide mi contraseña</a>
                  </div>

                  <!-- Modal footer -->
                  <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                      <button type="submit" class="btn btn-success">Iniciar</button>
                  </div>

              </div>
          </form>

      </div>
  </div>


</body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</html>

