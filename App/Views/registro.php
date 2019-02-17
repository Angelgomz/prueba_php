<?php
require_once('layouts/header.php');
?>

            <div class="container formulario">
            <br> <br>
                <center> 
                    <h4> Registrar usuarios: </h4>
                </center>
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div class="col-6 col-sm-16 col-md-4 col-lg-4 offset-4">
                     <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-id-card"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Nombre" aria-label="user" aria-describedby="basic-addon1" id="nombre" name="nombre" required>
                    </div>
                 </div>
              </div>
              <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div class="col-6 col-sm-16 col-md-4 col-lg-4 offset-4">
                     <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-id-card"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Apellido" aria-label="user" aria-describedby="basic-addon1" id="apellido" name="apellido" required>
                    </div>
                 </div>
              </div>
              <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div class="col-6 col-sm-16 col-md-4 col-lg-4 offset-4">
                     <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-at"></i></span>
                        </div>
                        <input type="email" class="form-control" placeholder="Email" aria-label="email" aria-describedby="basic-addon1" id="email" name="user" required>
                    </div>
                 </div>
              </div>
              <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div class="col-6 col-sm-16 col-md-4 col-lg-4 offset-4">
                     <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Usuario" aria-label="user" aria-describedby="basic-addon1" id="user" name="user" required>
                    </div>
                 </div>
              </div>
              <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div class="col-6 col-sm-16 col-md-4 col-lg-4 offset-4">
                     <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="password" class="form-control" placeholder="Contrase;a" aria-label="user" aria-describedby="basic-addon1" id="password" name="password" required>
                    </div>
                 </div>
              </div>
              <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div class="col-6 col-sm-16 col-md-4 col-lg-4 offset-4">
                     <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="password" class="form-control" placeholder="Repetir contrase;a" aria-label="user" aria-describedby="basic-addon1" id="repetirpassword" name="repetirpassword" required>
                    </div>
                 </div>
              </div>
              <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                  <div class="col-4 col-sm-4 col-md-4 col-lg-4 offset-4">
                
                  </div>
            </div>
             <div class="col-12 col-sm-12 col-md-12 col-lg-12 offset-7">
                 <button class="btn btn-dark" type="submit" id="enviarregistro">ENVIAR</button>
                    
             </div>
             <br> <br>
            </div>
        </div>
 

<?php 
    require_once('layouts/footer.php');
?>