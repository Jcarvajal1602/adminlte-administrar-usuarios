  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Panel de control</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">PC COM</a></li>
              <li class="breadcrumb-item active">Usuarios</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

  
     
     <div class="box">
        <div class="box-header with-border">
            
              <button class="btn btn-outline-dark" data-toggle="modal" data-target="#modalAgregarUsuario">Agregar Usuario</button>
      <br>
      <br>
      <div class="box-body">
     <table class="table table-striped tabladatatable dt-responsive">
        <thead class="dt-center">
          <tr>
            <th scope="col" width="10px">Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Usuario</th>
            <th scope="col">Foto</th>
            <th scope="col">Rol</th>
            <th scope="col">Estado</th>
            <th scope="col">Ultimo inicio de sesion</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody class="dt-center">

        <?php
        $item = null;
        $valor = null;
        $usuarios = ControladorUsuarios::ctrMostrarUsuarios($item, $valor);
        foreach ($usuarios as $usuario) {
          echo "<tr>
          <th scope='row'>".$usuario['id']."</th>
          <td>".$usuario['nombre']."</td>
          <td>".$usuario['usuario']."</td>";
          if ($usuario['foto'] != "") {
            echo "<td><img src='".$usuario['foto']."' class='img-thumbnail' width='40px' alt='usuario'></td>";
          }else {
            echo "<td><img src='vistas/img/user.jfif' class='img-thumbnail' width='40px' alt='usuario'></td>";
          }
          if($usuario['estado']!="1"){
            echo'<td><button class="btn btn-danger btnprueba btn-xs btnActivar" idUsuario="'.$usuario["id"].'" estadoUsuario="1">Inactivo</button></td>';
         }else{
            echo'<td><button class="btn btn-success btnprueba btn-xs btnActivar" idUsuario="'.$usuario["id"].'" estadoUsuario="0">Activo</button></td>';
         }
          echo "<td>".$usuario['perfil']."</td>
          <td>".$usuario['ultimo_login']."</td>
          <td>  
            <button class='btn btnEditarUsuario' idUsuario='".$usuario['id']."' data-toggle='modal' data-target='#modalEditarUsuario'><i class='fas fa-user-edit'></i></button>
            <button class='btn btnEliminarUsuario' idUsuario='".$usuario['id']."' fotoUsuario='".$usuario['foto']."' usuario='".$usuario['usuario']."'><i class='fa fa-trash-alt'></i></button>
          </td>";
        }
        ?>
        </tbody>
      </table>
      <br>
     </div>

     <div id="modalAgregarUsuario" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal Nuevo Usuario-->
   <form role="form" method="post" enctype="multipart/form-data">

    <div class="modal-content">
      <div class="modal-header" style="background: #343a40; color: white;"; >
      <span class="modal-title">Agregar usuario</span>
        <button type="button" class="close" data-dismiss="modal" style="color: white;">&times;</button>
      </div>
      <div class="modal-body">
         <div class="box-body">


         <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-user"> </i> </span>
          </div>
          <input type="text" class="form-control input-lg" name="nuevoNombre" placeholder="Ingresar nombre" required>
        </div>

        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-key"> </i></span>
          </div>
          <input type="text" class="form-control input-lg" id="nuevoUsuario" name="nuevoUsuario" placeholder="Ingresar usuario" required>
        </div>

        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fa fa-lock"> </i> </span>
          </div>
          <input type="password" class="form-control input-lg" name="nuevoPassword" placeholder="Ingresar contraseña" required>
        </div>

        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fa fa-users"> </i> </span>
          </div>
               <select class="form-control input-lg" name="nuevoPerfil">
                 <option value="">Seleccionar Perfil</option>
                 <option value="Administrador">Administrador</option>
                 <option value="Especial">Especial</option>
                 <option value="vendedor">Vendedor</option>
               </select>
        </div>

        <div class="input-group mb-3">
          <div class="input-group-prepend">
           <span class="input-group-text"><i class="fas fa-file-image"> </i></span>
          </div>
             <input type="file" name="nuevaFoto" class="nuevaFoto center-block">
        </div>

        <div class="form-group">
          <img src="vistas/img/usuarios/Default/user.png" class="thumbnail center-block previsualizar" width="100px">
        </div>

         </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Salir</button>
        <button type="submit" class="btn" style="background: #343a40; color: white;">Guardar Cambios</button>
      </div>
    </div>

    <?php
      $crearUsuario = new ControladorUsuarios();
      $crearUsuario ->ctrCrearUsuario();
    ?>
  </form>
    </div>
  </div>

  <!-- Modal Editar  Usuario -->
<div class="modal fade" id="modalEditarUsuario" role="dialog">
  <div class="modal-dialog">
     <form role="form" method="post" enctype="multipart/form-data">
    <div class="modal-content">
      <div class="modal-header" style="background: #343a40; color: white;";>
        <h5 class="modal-title" id="exampleModalLabel">Editar usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: white;">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

         <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-user"> </i> </span>
            </div>
            <input type="text" name="editarNombre" id="editarNombre" class="form-control input-lg" value="Nombre Usuario">
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-key"> </i> </span>
            </div>
            <input type="text" name="editarUsuario" id="editarUsuario" class="form-control input-lg" placeholder="Ingresar usuario" readonly>
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fa fa-lock"> </i> </span>
            </div>
            <input type="text" name="editarPassword" class="form-control input-lg" placeholder="Escriba la nueva contraseña">
            <input type="hidden" name="passwordActual" id="passwordActual">
          </div>

          <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fa fa-users"> </i> </span>
          </div>
               <select class="form-control input-lg" name="editarPerfil">
                 <option value="" id="editarPerfil"></option>
                 <option value="Administrador">Administrador</option>
                 <option value="Especial">Especial</option>
                 <option value="vendedor">Vendedor</option>
               </select>
        </div>

        <div class="input-group mb-3">
          <div class="input-group-prepend">
           <span class="input-group-text"><i class="fas fa-file-image"> </i></span>
          </div>
             <input type="file" name="editarFoto" class="nuevaFoto center-block">
        </div>

        <div class="form-group">
          <img src="vistas/img/usuarios/Default/user.png" class="thumbnail center-block previsualizar" width="100px">
          <input type="hidden" name="fotoActual" id="fotoActual">
        </div>

      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Salir</button>
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div>
    </div>
    <?php
    $editarUsuario = new ControladorUsuarios();
    $editarUsuario -> ctrEditarUsuario();
  ?>
</form>
  </div> 

</div>
</div>
  <!-- /.content-wrapper -->
  <?php
  $borrarUsuario = new ControladorUsuarios();
  $borrarUsuario -> ctrBorrarUsuario();
  ?>