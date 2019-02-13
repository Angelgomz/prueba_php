<?php
require_once('layouts/header.php');
?>
    <form method="POST" action="../index.php" id="formulario">
        <div class="row">
            <div class="container formulario">
            <br> <br>
                <center> 
                    <h4> Busqueda de productos: </h4>
                </center>
              <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div class="col-6 col-sm-16 col-md-4 col-lg-4 offset-4">
                     <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-address-book"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Titulo" aria-label="Titulo" aria-describedby="basic-addon1" id="titulo" name="titulo" required>
                    </div>
                 </div>
              </div>
              <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div class="col-6 col-sm-6 col-md-4 col-lg-4 offset-4">
                     <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-gamepad"></i></span>
                        </div>
                        <select id="consola" class="custom-select" name="consola">
                       
                        <?php 
                           session_start();
                         
                           foreach ($_SESSION['consulta'] as $key=> $row) {
                        ?>
                          <option value="<?php echo $row->id ?>" name="consola"><?php echo "$row->nombre" ?></option>
                         <?php

                           }
                        ?>
                         </select>
                    </div>
                </div>
              </div>
              <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                  <div class="col-4 col-sm-4 col-md-4 col-lg-4 offset-4">
                  <b> $1000&nbsp;</b><br> <input id="ex2" type="text" class="span2" value="" data-slider-min="1000" data-slider-max="100000" data-slider-step="5" data-slider-value="[1000,100000]" name="ex2" required/><br><b>&nbsp;$100000 </b>
                  </div>
            </div>
             <div class="col-12 col-sm-12 col-md-12 col-lg-12 offset-7">
                 <button class="btn btn-dark" type="submit" id="enviar">ENVIAR</button>
                    
             </div>
             <br> <br>
            </div>
        </div>
    </form>
        <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" id="modal" hidden>
  activa modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Lista de juegos disponibles</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <table class="table" id="table">
          
    <tbody id="tbody">
    </tbody>
    </tr>


            </tbody>
    </table>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">OK</button>
      </div>
    </div>
  </div>
</div>
<?php 
    require_once('layouts/footer.php');
?>