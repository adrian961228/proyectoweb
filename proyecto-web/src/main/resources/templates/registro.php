<!DOCTYPE html>
<html lang="es" xmlns:th="http://www.thymeleaf.org">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" th:href="@{/bootstrap/css/bootstrap.min.css}">
    <script th:src="@{/bootstrap/js/jquery-3.5.1.js}"></script>
    <script th:src="@{/bootstrap/js/index.umd.js}"></script>
    <script th:src="@{/bootstrap/js/bootstrap.min.js}"></script>
</head>
<body>
    <header  th:insert="fragments/menu.html::menu-principal">
    </header>

        <!--**********************************************formulario de registro**************************************-->
        <div class="container" style="margin-top: 100px;">
          <form>
          <div class="row">
            <div class="col-sm-4">
              <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" autofocus required placeholder="escriba su nombre(s)" pattern="" title="">
                  </div>
            </div>
            <div class="col-sm-4">
              <div class="form-group">
                <label for="apellidos">apellidos</label>
                <input type="text" class="form-control" id="apellidos" name="apellidos" required placeholder="escriba sus appellidos" pattern="" title="" >
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                  <label for="usuario">usuario</label>
                  <input type="email" class="form-control" id="correo" name="correo" required placeholder="escriba su correo"  >
                  <small id="emailHelp" class="form-text text-muted">escriba un correo valido.</small>
                </div>

            </div>
        </div>
        <div class="row">
          <div class="col-sm-4">
            <div class="form-group">
                <label for="contrasena">Contraseña</label>
                <input type="password" class="form-control" placeholder="Escriba su contraseña ejemplo(W1ebmaster0_)" id="contrasena" name="contrasena" required title="" pattern="" >
              </div>
        </div>
        <div class="col-sm-4">
          <div class="form-group">
            <label for="confirmarcontrasena">Confirmar contraseña</label>
            <input type="password" class="form-control" placeholder="Confirmar contraseña" id="confirmarcontrasena" name="confirmarcontrasena" required >
          </div>
        </div>
        </div>
        <div class="row">
          <div class="col-sm-4">
            <button type="button" class="btn btn-primary btn-lg btn-block">Guardar</button>
          </div>
          <div class="col-sm-4">
            </div>
          <div class="col-sm-4">
            </div>
      </div>
    </form>
    </div>

        </div>    
        <!--**********************************************pie de pagina**************************************-->
    <footer class="footer" th:insert="fragments/footer.html::pie-pagina">
        
        </footer>
</body>
</html>