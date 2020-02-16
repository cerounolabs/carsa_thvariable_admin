        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)">
                        <i class="ti-menu ti-close"></i>
                    </a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="../public/home.php">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <!--<img src="../assets/images/logo-icon.png" alt="homepage" class="dark-logo" />-->
                            <!-- Light Logo icon -->
                            <!--<img src="../assets/images/logo-light-icon.png" alt="homepage" class="light-logo" />-->
                            <img src="../assets/images/logoCarsa.png" alt="homepage" class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                            <!-- dark Logo text -->
                            <!--<img src="../assets/images/logo-text.png" alt="homepage" class="dark-logo" />-->
                            <!-- Light Logo text -->
                            <!--<img src="../assets/images/logo-light-text.png" class="light-logo" alt="homepage" />-->
                            
                        </span>
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="ti-more"></i>
                    </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto">
                        <li class="nav-item d-none d-md-block">
                            <a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar">
                                <i class="sl-icon-menu font-20"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right">
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item search-box">
                            <a class="nav-link waves-effect waves-dark" href="javascript:void(0)">
                                <i class="ti-search font-16"></i>
                            </a>
                            <form class="app-search position-absolute">
                                <input type="text" class="form-control" placeholder="Que desea hacer?">
                                <a class="srh-btn">
                                    <i class="ti-close"></i>
                                </a>
                            </form>
                        </li>
                        
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="<?php echo $usu_01; ?>" alt="<?php echo $usu_03; ?>" class="rounded-circle" width="60">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                                <span class="with-arrow">
                                    <span class="bg-primary"></span>
                                </span>
                                <div class="d-flex no-block align-items-center p-15 bg-primary text-white m-b-10" style="background-color:#27464e !important;">
                                    <div class="">
                                        <img src="<?php echo $usu_01; ?>" alt="<?php echo $usu_03; ?>" class="img-circle" width="60">
                                    </div>
                                    <div class="m-l-10">
                                        <h4 class="m-b-0"><?php echo $usu_03; ?></h4>
										<p class=" m-b-0"><?php echo $usu_05; ?></p>
                                        <p class=" m-b-0"><?php echo $usu_04; ?></p>
										<p class=" m-b-0"><?php echo $log_03; ?></p>
                                    </div>
                                </div>
                                <a class="dropdown-item" href="../public/perfil.php?codigo=<?php echo $usu_02; ?>">
                                    <i class="ti-user m-r-5 m-l-5"></i> Perfil</a>
                                <a class="dropdown-item" href="../class/session/session_logout.php">
                                    <i class="fa fa-power-off m-r-5 m-l-5"></i> Cerrar Secci&oacute;n</a>
                                <div class="dropdown-divider"></div>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
        	</nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
       	<aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="sidebar-item">
                        	<a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        		<i class="icon-Car-Wheel"></i>
                        		<span class="hide-menu"> Dashboard </span>
                        	</a>
							<ul aria-expanded="false" class="collapse first-level">
                            	<li class="sidebar-item">
                               		<a href="../public/home.php" class="sidebar-link">
                               			<i class="mdi mdi-home"></i>
                               			<span class="hide-menu"> Home </span>
                               		</a>
                               	</li>

                                <li class="sidebar-item">
                               		<a href="../public/dashboard_1.php" class="sidebar-link">
                               			<i class="mdi mdi-home"></i>
                               			<span class="hide-menu"> Dashboard 1 </span>
                               		</a>
                               	</li>
                            </ul>
                        </li>

                        <li class="sidebar-item">
                        	<a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                           		<i class="icon-Business-ManWoman"></i>
                           		<span class="hide-menu"> Colaboradores </span>
                           	</a>
							<ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                               		<a href="../public/colaborador_nuevo.php" class="sidebar-link">
                               			<i class="mdi mdi-colaborador"></i>
                               			<span class="hide-menu"> Nuevos </span>
                                    </a>
                               	</li>

                            	<li class="sidebar-item">
                               		<a href="../public/colaborador_activo.php" class="sidebar-link">
                               			<i class="mdi mdi-colaborador"></i>
                               			<span class="hide-menu"> Activos </span>
                                    </a>
                               	</li>

                                <li class="sidebar-item">
                               		<a href="../public/colaborador_auditoria.php" class="sidebar-link">
                               			<i class="mdi mdi-colaborador"></i>
                               			<span class="hide-menu"> Auditoria </span>
                                    </a>
                               	</li>
                            </ul>
                        </li>
                        
                        <li class="sidebar-item">
                        	<a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                           		<i class="icon-File-HorizontalText"></i>
                           		<span class="hide-menu"> Campa&ntilde;as </span>
                           	</a>
							<ul aria-expanded="false" class="collapse first-level">
                            	<li class="sidebar-item">
                               		<a href="../public/campanha.php" class="sidebar-link">
                               			<i class="mdi mdi-form"></i>
                               			<span class="hide-menu"> Campañas </span>
                                    </a>
                               	</li>

                                <li class="sidebar-item">
                               		<a href="../public/formulario_campanha.php" class="sidebar-link">
                               			<i class="mdi mdi-form"></i>
                               			<span class="hide-menu"> Formulario Campa&ntilde;a </span>
                                    </a>
                                </li>
                                   
                                <li class="sidebar-item">
                               		<a href="../public/formulario_colaborador.php" class="sidebar-link">
                               			<i class="mdi mdi-form"></i>
                               			<span class="hide-menu"> Formulario Colaborador </span>
                                    </a>
                               	</li>
                            </ul>
                        </li>

                        <li class="sidebar-item">
                        	<a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                           		<i class="icon-Router"></i>
                           		<span class="hide-menu"> Conexi&oacute;n </span>
                           	</a>
							<ul aria-expanded="false" class="collapse first-level">
                            	<li class="sidebar-item">
                                    <a href="../public/conexion_sistema.php" class="sidebar-link">
                               			<i class="mdi mdi-seguridad"></i>
                               			<span class="hide-menu"> Sistema </span>
                                    </a>

                               		<a href="../public/conexion_colaborador.php" class="sidebar-link">
                               			<i class="mdi mdi-seguridad"></i>
                               			<span class="hide-menu"> Colaborador </span>
                                    </a>
                               	</li>
                            </ul>
                        </li>

                        <li class="sidebar-item">
                        	<a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                           		<i class="icon-Box-withFolders"></i>
                           		<span class="hide-menu"> Par&aacute;metros </span>
                           	</a>
							<ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item"> <a class="has-arrow sidebar-link" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-academico"></i> <span class="hide-menu"> Acad&eacute;mico </span></a>
                                    <ul aria-expanded="false" class="collapse second-level">
                                        <li class="sidebar-item">
                                            <a href="../public/dominio.php?dominio=ACADEMICOESTADO" class="sidebar-link">
                                                <i class="mdi mdi-academico"></i>
                                                <span class="hide-menu"> Estado Acad&eacute;mico </span>
                                            </a>
                                        </li>

                                        <li class="sidebar-item">
                                            <a href="../public/dominio.php?dominio=ACADEMICOUNIVERSIDAD" class="sidebar-link">
                                                <i class="mdi mdi-academico"></i>
                                                <span class="hide-menu"> Universidad </span>
                                            </a>
                                        </li>

                                        <li class="sidebar-item">
                                            <a href="../public/dominio.php?dominio=ACADEMICOCARRERA" class="sidebar-link">
                                                <i class="mdi mdi-academico"></i>
                                                <span class="hide-menu"> Carrera </span>
                                            </a>
                                        </li>

                                        <li class="sidebar-item">
                                            <a href="../public/dominio.php?dominio=ACADEMICOGRADO" class="sidebar-link">
                                                <i class="mdi mdi-academico"></i>
                                                <span class="hide-menu"> Grado Acad&eacute;mico </span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="sidebar-item"> <a class="has-arrow sidebar-link" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-campanha"></i> <span class="hide-menu"> Campa&ntilde;a </span></a>
                                    <ul aria-expanded="false" class="collapse second-level">
                                        <li class="sidebar-item">
                                            <a href="../public/dominio.php?dominio=CAMPANHAESTADO" class="sidebar-link">
                                                <i class="mdi mdi-campanha"></i>
                                                <span class="hide-menu"> Estado Campa&ntilde;a </span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="sidebar-item"> <a class="has-arrow sidebar-link" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-laboral"></i> <span class="hide-menu"> Colaborador </span></a>
                                    <ul aria-expanded="false" class="collapse second-level">
                                        <li class="sidebar-item">
                                            <a href="../public/dominio.php?dominio=COLABORADORACTIVIDADECONOMICA" class="sidebar-link">
                                                <i class="mdi mdi-laboral"></i>
                                                <span class="hide-menu"> Actividad Econ&oacute;mica </span>
                                            </a>
                                        </li>

                                        <li class="sidebar-item">
                                            <a href="../public/dominio.php?dominio=COLABORADORCARGOOCUPADO" class="sidebar-link">
                                                <i class="mdi mdi-laboral"></i>
                                                <span class="hide-menu"> Cargo Ocupado </span>
                                            </a>
                                        </li>  

                                        <li class="sidebar-item">
                                            <a href="../public/dominio.php?dominio=COLABORADOREMPRESA" class="sidebar-link">
                                                <i class="mdi mdi-laboral"></i>
                                                <span class="hide-menu"> Empresa </span>
                                            </a>
                                        </li>

                                        <li class="sidebar-item">
                                            <a href="../public/dominio.php?dominio=COLABORADORMOTIVOSALIDA" class="sidebar-link">
                                                <i class="mdi mdi-laboral"></i>
                                                <span class="hide-menu"> Motivo Salida </span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="sidebar-item"> <a class="has-arrow sidebar-link" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-conexion"></i> <span class="hide-menu"> Conexi&oacute;n </span></a>
                                    <ul aria-expanded="false" class="collapse second-level">
                                        <li class="sidebar-item">
                                            <a href="../public/dominio.php?dominio=CONEXIONTIPO" class="sidebar-link">
                                                <i class="mdi mdi-conexion"></i>
                                                <span class="hide-menu"> Tipo Conexi&oacute;n </span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="sidebar-item"> <a class="has-arrow sidebar-link" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-persona"></i> <span class="hide-menu"> Persona </span></a>
                                    <ul aria-expanded="false" class="collapse second-level">
                                        <li class="sidebar-item">
                                            <a href="../public/dominio.php?dominio=PERSONAESTADOCIVIL" class="sidebar-link">
                                                <i class="mdi mdi-persona"></i>
                                                <span class="hide-menu"> Estado Civil </span>
                                            </a>
                                        </li>

                                        <li class="sidebar-item">
                                            <a href="../public/dominio.php?dominio=PERSONAHOBBIES" class="sidebar-link">
                                                <i class="mdi mdi-persona"></i>
                                                <span class="hide-menu"> Hobbies </span>
                                            </a>
                                        </li>
                                        
                                        <li class="sidebar-item">
                                            <a href="../public/dominio.php?dominio=PERSONAPARENTESCO" class="sidebar-link">
                                                <i class="mdi mdi-persona"></i>
                                                <span class="hide-menu"> Parentesco </span>
                                            </a>
                                        </li>

                                        <li class="sidebar-item">
                                            <a href="../public/dominio.php?dominio=PROYECTOPERSONAL" class="sidebar-link">
                                                <i class="mdi mdi-persona"></i>
                                                <span class="hide-menu"> Proyectos Personales </span>
                                            </a>
                                        </li>

                                        <li class="sidebar-item">
                                            <a href="../public/dominio.php?dominio=PERSONASEXO" class="sidebar-link">
                                                <i class="mdi mdi-persona"></i>
                                                <span class="hide-menu"> Sexo </span>
                                            </a>
                                        </li>

                                        <li class="sidebar-item">
                                            <a href="../public/dominio.php?dominio=PERSONADOCUMENTO" class="sidebar-link">
                                                <i class="mdi mdi-persona"></i>
                                                <span class="hide-menu"> Tipo Documento </span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="sidebar-item"> <a class="has-arrow sidebar-link" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-localidad"></i> <span class="hide-menu"> Localidad </span></a>
                                    <ul aria-expanded="false" class="collapse second-level">
                                        <li class="sidebar-item">
                                            <a href="../public/dominio.php?dominio=LOCALIDADTIPOVIVIENDA" class="sidebar-link">
                                                <i class="mdi mdi-localidad"></i>
                                                <span class="hide-menu"> Tipo Vivienda </span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                
                                <li class="sidebar-item"> <a class="has-arrow sidebar-link" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-telefonia"></i> <span class="hide-menu"> Telefon&iacute;a </span></a>
                                    <ul aria-expanded="false" class="collapse second-level">
                                        <li class="sidebar-item">
                                            <a href="../public/dominio.php?dominio=TELEFONIAPREFIJOTEL" class="sidebar-link">
                                                <i class="mdi mdi-telefonia"></i>
                                                <span class="hide-menu"> Prefijo Tel&eacute;fono </span>
                                            </a>
                                        </li>
                                        
                                        <li class="sidebar-item">
                                            <a href="../public/dominio.php?dominio=TELEFONIAPREFIJOCEL" class="sidebar-link">
                                                <i class="mdi mdi-telefonia"></i>
                                                <span class="hide-menu"> Prefijo Celular </span>
                                            </a>
                                        </li>

                                        <li class="sidebar-item">
                                            <a href="../public/dominio.php?dominio=TELEFONIAMARCA" class="sidebar-link">
                                                <i class="mdi mdi-telefonia"></i>
                                                <span class="hide-menu"> Marca Celular </span>
                                            </a>
                                        </li>

                                        <li class="sidebar-item">
                                            <a href="../public/dominio.php?dominio=TELEFONIAMODELO" class="sidebar-link">
                                                <i class="mdi mdi-telefonia"></i>
                                                <span class="hide-menu"> Modelo Celular </span>
                                            </a>
                                        </li>

                                        <li class="sidebar-item">
                                            <a href="../public/dominio.php?dominio=TELEFONIACOLOR" class="sidebar-link">
                                                <i class="mdi mdi-telefonia"></i>
                                                <span class="hide-menu"> Color Celular </span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        
                        <li class="sidebar-item">
                        	<a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                           		<i class="icon-Security-Block"></i>
                           		<span class="hide-menu"> Auditor&iacute;a </span>
                           	</a>
							<ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item"> <a class="has-arrow sidebar-link" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-aud-colaborador"></i> <span class="hide-menu"> Colaboradores </span></a>
                                    <ul aria-expanded="false" class="collapse second-level">
                                        <li class="sidebar-item">
                                            <a href="../public/funcionario_campanha_aud.php" class="sidebar-link">
                                                <i class="mdi mdi-aud-colaborador"></i>
                                                <span class="hide-menu"> Colaboradores </span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="sidebar-item"> <a class="has-arrow sidebar-link" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-aud-parameto"></i> <span class="hide-menu"> Par&aacute;metros </span></a>
                                    <ul aria-expanded="false" class="collapse second-level">
                                        <li class="sidebar-item">
                                            <a href="../public/dominio_aud.php?dominio=ESTADOCAMPANHA" class="sidebar-link">
                                                <i class="mdi mdi-aud-parameto"></i>
                                                <span class="hide-menu"> Estado Campa&ntilde;a </span>
                                            </a>
                                        </li>

                                        <li class="sidebar-item">
                                            <a href="../public/dominio_aud.php?dominio=ESTADOCIVIL" class="sidebar-link">
                                                <i class="mdi mdi-aud-parameto"></i>
                                                <span class="hide-menu"> Estado Civil </span>
                                            </a>
                                        </li>

                                        <li class="sidebar-item">
                                            <a href="../public/dominio_aud.php?dominio=PARENTESCO" class="sidebar-link">
                                                <i class="mdi mdi-aud-parameto"></i>
                                                <span class="hide-menu"> Parentesco </span>
                                            </a>
                                        </li>

                                        <li class="sidebar-item">
                                            <a href="../public/dominio_aud.php?dominio=TIPODOCUMENTO" class="sidebar-link">
                                                <i class="mdi mdi-aud-parameto"></i>
                                                <span class="hide-menu"> Tipo Documento </span>
                                            </a>
                                        </li>

                                        <li class="sidebar-item">
                                            <a href="../public/dominio_aud.php?dominio=SEXO" class="sidebar-link">
                                                <i class="mdi mdi-aud-parameto"></i>
                                                <span class="hide-menu"> Sexo </span>
                                            </a>
                                        </li>

                                        <li class="sidebar-item">
                                            <a href="../public/dominio_aud.php?dominio=PREFIJOTELEFONIA" class="sidebar-link">
                                                <i class="mdi mdi-aud-parameto"></i>
                                                <span class="hide-menu"> Prefijo de Telefon&iacute;a </span>
                                            </a>
                                        </li>

                                        <li class="sidebar-item">
                                            <a href="../public/dominio_aud.php?dominio=PREFIJOCELULAR" class="sidebar-link">
                                                <i class="mdi mdi-aud-parameto"></i>
                                                <span class="hide-menu"> Prefijo de Celular </span>
                                            </a>
                                        </li>

                                        <li class="sidebar-item">
                                            <a href="../public/dominio_aud.php?dominio=TIPOVIVIENDA" class="sidebar-link">
                                                <i class="mdi mdi-aud-parameto"></i>
                                                <span class="hide-menu"> Tipo Vivienda </span>
                                            </a>
                                        </li>

                                        <li class="sidebar-item">
                                            <a href="../public/dominio_aud.php?dominio=CIUDAD" class="sidebar-link">
                                                <i class="mdi mdi-aud-parameto"></i>
                                                <span class="hide-menu"> Ciudad </span>
                                            </a>
                                        </li>

                                        <li class="sidebar-item">
                                            <a href="../public/dominio_aud.php?dominio=ACTIVIDADECONOMICA" class="sidebar-link">
                                                <i class="mdi mdi-aud-parameto"></i>
                                                <span class="hide-menu"> Actividad Econ&oacute;mica </span>
                                            </a>
                                        </li>

                                        <li class="sidebar-item">
                                            <a href="../public/dominio_aud.php?dominio=CARGOOCUPADO" class="sidebar-link">
                                                <i class="mdi mdi-aud-parameto"></i>
                                                <span class="hide-menu"> Cargo Ocupado </span>
                                            </a>
                                        </li>

                                        <li class="sidebar-item">
                                            <a href="../public/dominio_aud.php?dominio=MOTIVOSALIDA" class="sidebar-link">
                                                <i class="mdi mdi-aud-parameto"></i>
                                                <span class="hide-menu"> Motivo Salida </span>
                                            </a>
                                        </li>

                                        <li class="sidebar-item">
                                            <a href="../public/dominio_aud.php?dominio=HOBBIES" class="sidebar-link">
                                                <i class="mdi mdi-aud-parameto"></i>
                                                <span class="hide-menu"> Hobbies </span>
                                            </a>
                                        </li>

                                        <li class="sidebar-item">
                                            <a href="../public/dominio_aud.php?dominio=PROYECTOPERSONAL" class="sidebar-link">
                                                <i class="mdi mdi-aud-parameto"></i>
                                                <span class="hide-menu"> Proyectos Personales </span>
                                            </a>
                                        </li>

                                        <li class="sidebar-item">
                                            <a href="../public/dominio_aud.php?dominio=GRADOACADEMICO" class="sidebar-link">
                                                <i class="mdi mdi-aud-parameto"></i>
                                                <span class="hide-menu"> Grado Acad&eacute;mico </span>
                                            </a>
                                        </li>

                                        <li class="sidebar-item">
                                            <a href="../public/dominio_aud.php?dominio=UNIVERSIDAD" class="sidebar-link">
                                                <i class="mdi mdi-aud-parameto"></i>
                                                <span class="hide-menu"> Universidad </span>
                                            </a>
                                        </li>

                                        <li class="sidebar-item">
                                            <a href="../public/dominio_aud.php?dominio=CARRERA" class="sidebar-link">
                                                <i class="mdi mdi-aud-parameto"></i>
                                                <span class="hide-menu"> Carrera </span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
						</li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->