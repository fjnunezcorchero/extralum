<aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="dist/img/user-2517433_640.png" width="160" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
              <p><?php echo $usuario->nombre.' '.$usuario->apellido; ?></p>

              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MEN&Uacute; PRINCIPAL</li>
            <li>
              <a href="index.php">
                <i class="fa fa-dashboard"></i> <span>Panel de control</span>
              </a>
            </li>
            <?php if ($usuario->compruebaDerecho('GUSU')) { ?>
            <li>
              <a href="usuarios.php">
                <i class="fa fa-users"></i> <span>Usuarios</span>
              </a>
            </li>
            <?php } ?>
            <?php if ($usuario->compruebaDerecho('GIDIO')) { ?>
            <li>
              <a href="idiomas.php">
                <i class="fa fa-flag"></i> <span>Idiomas</span>
              </a>
            </li>
            <?php } ?>
            <?php if ($usuario->compruebaDerecho('GCON')) { ?>
			<li class="treeview">
              <a href="#">
                <i class="fa fa-edit"></i> <span>Contenidos</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="contenido_cabecera.php"><i class="fa fa-circle-o"></i> Cabecera</a></li>
                <li><a href="contenido_cabecera.php"><i class="fa fa-circle-o"></i> P&aacute;gina principal</a></li>
                <li><a href="contenido_cabecera.php"><i class="fa fa-circle-o"></i> Nosotros</a></li>
                <li>
                  <a href="#"><i class="fa fa-circle-o"></i> Actividad<i class="fa fa-angle-left pull-right"></i></a>
                  <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Extrusi&oacute;n</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Lacado</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Anodizado</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Mecanizado</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Desarrollo</a></li>
                  </ul>
                </li>
                <li>
                  <a href="#"><i class="fa fa-circle-o"></i> Sectores<i class="fa fa-angle-left pull-right"></i></a>
                  <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Naval</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Ferrovial</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Construcci&oacute;n</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Industria El&eacute;ctrica</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Decoraci&oacute;n</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Automoci&oacute;n</a></li>
                  </ul>
                </li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Medioambiente</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Cat&aacute;logo</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Contacto</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Unete</a></li>
              </ul>
            </li>
            <?php } ?>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>