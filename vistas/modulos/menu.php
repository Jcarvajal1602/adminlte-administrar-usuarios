<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="vistas/img/pccom.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">PCCOM</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
        <?php
          if($_SESSION['foto']!=""){
            echo '<img src="'.$_SESSION["foto"].'" class="img-circle elevation-2" alt="User Image">';
          }else{
            echo '<img src="vistas/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">';
          }
          ?>
        </div>
        <div class="info">
        <?php if ($_SESSION["nombre"] != "") {
          echo "<a href='#' class='d-block'>".$_SESSION["nombre"]."</a>";
        }else {
          echo "<a href='#' class='d-block'>Nombre Usuario</a>";
        } ?>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

        <li class="nav-header">MENU</li>
          <li class="nav-item">
            <a href="usuarios" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Usuarios
                <span class="badge badge-info right">2</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="productos" class="nav-link">
              <i class="nav-icon fab fa-product-hunt"></i>
              <p>
                Productos
              </p>
            </a>
        </li>
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Ventas
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="crearventa" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Crear venta</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="reporteventa" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Reporte de venta</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>