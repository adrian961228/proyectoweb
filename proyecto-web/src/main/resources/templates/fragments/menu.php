<nav th:fragment="menu-principal" class="navbar navbar-expand-md navbar-dark fixed-top bg-secondary">
        <a class="navbar-brand" href="#"><img th:src="@{imgs/banner.jpg}" width="40px" height="40px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        
         <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item">
        <a class="nav-link active" th:href="@{/}">Home</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" th:href="@{/servicios}">servicios</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">contacto</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" th:href="@{/acerca}">Acerca</a>
                </li>
        </li>
        </ul>
        <a class="btn bg-light text-dark" th:href="@{formLogin}">Ingresar</a>&nbsp;
        <a class="btn bg-light text-dark" th:href="@{registro}">Registrarse</a>
        </div>
        </nav>