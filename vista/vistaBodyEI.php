

<!-- Tabs Info -->

<div class="w3-border">
<div class="w3-bar w3-theme">
  
    <button class="w3-bar-item w3-button testbtn w3-padding-16" onclick="openCity(event,'evaluacionInfinita')">Probar Evaluacion de Conocimientos</button>
  <button class="w3-bar-item w3-button testbtn w3-padding-16" onclick="openCity(event,'estudiantes')">Estudiantes</button>
  <button class="w3-bar-item w3-button testbtn w3-padding-16" onclick="openCity(event,'profesores')">Profesores</button>
  
</div>

<div id="evaluacionInfinita" class="w3-container city w3-animate-opacity">
  <h2>Probar Evaluacion de Conocimientos</h2>

  <div class="card-header card-header-primary text-center">
                  <h4 class="card-title">Ingresar a la Evaluacion Libre</h4>
                  <a href="./quizPublico.php"><button type="button" class="btn  btn-success  ">Clic Aqui!</button></a>
                  <div class="social-line">
                    
                  </div>
                </div>
           
  </div>

  <div id="estudiantes" class="w3-container city w3-animate-opacity">
  <h2>Estudiantes</h2>
  <div class="row">
          <div class="col-lg-4 col-md-6 ml-auto mr-auto">
            <div class="card card-login">
              <form class="form" method="POST" action="controlador/loginEstudiantes.php">
                <div class="card-header card-header-primary text-center">
                  <h4 class="card-title">Iniciar Sesi&oacute;n Estudiante</h4>
                  <div class="social-line">
                    
                  </div>

                </div>
                <p class="description text-center">Evaluaciones</p>
                <div class="card-body">
                  <span class="bmd-form-group"><div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="material-icons">face</i>
                      </span>
                    </div>
                    <input name="username" type="text" class="form-control placeholder="USUARIO ASIGNADO...">
                  </div></span>

                </div>
                <div class="footer text-center">
                <button type="submit"  class="btn btn-primary btn-link btn-wd btn-lg"  > Iniciar Sesi&oacute;n </button>
                  </div>
              </form>
            </div>
          </div>
        </div></div>

<div id="profesores" class="w3-container city w3-animate-opacity">
  <h2>Profesores</h2>
 <div class="row">
          <div class="col-lg-4 col-md-6 ml-auto mr-auto">
            <div class="card card-login">
              <form class="form" method="POST" action="controlador/loginPanelProfesor.php">
                <div class="card-header card-header-primary text-center">
                  <h4 class="card-title">Iniciar Sesion Profesor</h4>
                  <div class="social-line">
                    
                  </div>
                </div>
                <p class="description text-center">panel de Evaluacion  </p>
                <div class="card-body">
                  <span class="bmd-form-group"><div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="material-icons">face</i>
                      </span>
                    </div>
                    <input name="username" type="text" class="form-control" placeholder="Nombre Completo...">
                  </div></span>
                 
                  <span class="bmd-form-group"><div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="material-icons">lock_outline</i>
                      </span>
                    </div>
                    <input name="password" type="password" class="form-control" placeholder="Password...">
                  </div></span>
                </div>
                <div class="footer text-center">
                <button type="submit"  class="btn btn-primary btn-link btn-wd btn-lg"  > Iniciar Sesi&oacute;n </button>
                </div>
              </form>
            </div>
          </div>
        </div></div>

</div>


<hr>
<!-- End Tabs Info -->


