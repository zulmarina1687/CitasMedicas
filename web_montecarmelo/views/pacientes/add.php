<section id="content">
  <div class="line1">
    <article class="col1">
      <h2>Registrate</h2>
        <form class="form-horizontal" method="post" action="agregar_paciente" name="add_paciente" id="add_paciente" novalidate="novalidate">
                <div class="control-group">
                  <label class="control-label">Nombres</label>
                  <div class="controls">
                    <input type="text" name="nombres" id="nombres">
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">Apellido Paterno</label>
                  <div class="controls">
                    <input type="text" name="apellido_paterno" id="apellido_paterno">
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">Apellido Materno</label>
                  <div class="controls">
                    <input type="text" name="apellido_materno" id="apellido_materno">
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">Direccion</label>
                  <div class="controls">
                    <input type="text" name="direccion" id="direccion">
                  </div>
                </div>
                 <div class="control-group">
                  <label class="control-label">Grado Instruccion</label>
                  <div class="controls">
                    <input type="text" name="grado_instruccion" id="grado_instruccion">
                  </div>
                </div>
                 <div class="control-group">
                  <label class="control-label">Estado Civil</label>
                  <div class="controls">
                    <input type="text" name="estado_civil" id="estado_civil">
                  </div>
                </div>
                 <div class="control-group">
                  <label class="control-label">Sexo</label>
                  <div class="controls">
                    <input type="text" name="sexo" id="sexo">
                  </div>
                </div>
                 <div class="control-group">
                  <label class="control-label">Fecha Nacimiento</label>
                  <div class="controls">
                    <input type="text" name="fecha_nacimiento" id="fecha_nacimiento">
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">Correo</label>
                  <div class="controls">
                    <input type="text" name="correo" id="correo">
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">Usuario</label>
                  <div class="controls">
                    <input type="text" name="usuario" id="usuario">
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">Clave</label>
                  <div class="controls">
                    <input type="password" name="clave" id="clave">
                  </div>
                </div>



                <div class="form-actions">
                  <?php 
                        $add = new PacientesController();
                        $add->add();
                    ?>
                  <input type="submit" name="agregar_paciente" value="Guardar" class="btn btn-success">
                </div>
              </form>
    </article>

 <!--  <?php require "elements/col2.php"; ?> -->

  </div>
</section>
 