<!DOCTYPE html>
<html lang="es" xmlns:th="http://www.thymeleaf.org">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" th:href="@{/bootstrap/css/bootstrap.min.css}">
   
</head>
<body>
    <header  th:insert="fragments/menu.html::menu-principal">
       
        </header>

        <!--**********************************************formulario de registro**************************************-->
        <div class="container" style="margin-top: 80px;">
        
         <div class="card">
        <div class="card-body">
        <form class="form-signin" method="GET" action="admin/index.html" onsubmit="validar()">
        <div class="row">
        <div class="col-md-4">
        </div>
        <div class="col-md-4">
        <img class="mb-4 rounded mx-auto d-block" th:src="@{imgs/lock.png}" alt="" width="128" height="128">
        <div id="mensajes">

        </div>
        <h4 class="h3 mb-3 font-weight-normal">Ingresar</h4>
        <label for="username" class="sr-only" >Username</label>
        <input type="text" name="username" id="username" class="form-control" placeholder="Username"  autofocus><br>
        <label for="password" class="sr-only">Password</label>
        <input type="password" name="password" id="password" class="form-control" placeholder="Password"><br>
        <button class="btn btn-lg btn-primary btn-block"
        type="submit" name="login" value="login">Entrar</button>
        <p class="text-primary" style="font-size: small">¿Todavía no estas registrado? <a th:href="@{/registro}">Regístrate</a></p>
        </div>
        <div class="col-md-4">
        </div>
        </div>
        </form>
        </div>
        </div>
        </div> <!-- /container -->
       <!--**********************************************pie de pagina**************************************-->
    <footer class="footer" th:insert="fragments/footer.html::pie-pagina">
       
        </footer>
         <script th:src="@{/bootstrap/js/jquery-3.5.1.js}"></script>
    <script th:src="@{/bootstrap/js/index.umd.js}"></script>
    <script th:src="@{/bootstrap/js/bootstrap.min.js}"></script>
</body>
</html>