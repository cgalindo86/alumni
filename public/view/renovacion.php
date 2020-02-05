<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link href="../../images/logo.png" rel="shortcut icon" type="image/x-icon" /><!-- Bootstrap core CSS -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>ALUMNI - Inscripción de padres</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="global_assets/css/icons/icomoon/styles.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/bootstrap_limitless.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/layout.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/components.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/colors.min.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script src="global_assets/js/main/jquery.min.js"></script>
	<script src="global_assets/js/main/bootstrap.bundle.min.js"></script>
	<script src="global_assets/js/plugins/loaders/blockui.min.js"></script>
	<script src="global_assets/js/plugins/ui/ripple.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="global_assets/js/plugins/forms/validation/validate.min.js"></script>
	<script src="global_assets/js/plugins/forms/styling/uniform.min.js"></script>

	<script src="assets/js/app.js"></script>
	<script src="global_assets/js/demo_pages/login_validation.js"></script>
	<!-- /theme JS files -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="application/javascript" src="../controler/renovacion.js"></script>

	<link href='fullcalendar/packages/core/main.css' rel='stylesheet' />
    <link href='fullcalendar/packages/daygrid/main.css' rel='stylesheet' />

	<script src='fullcalendar/packages/core/main.js'></script>
	<script src='fullcalendar/packages/interaction/main.js'></script>
	<script src='fullcalendar/packages/daygrid/main.js'></script>
	<script src='fullcalendar/packages/core/locales/es.js'></script>
	<style>
		#tema{
			/*background-image: 'imagenes/fondo.jpg';*/
			background: cadetblue;

		}
	</style>
</head>

<body id="tema">
    <?php 
		$id = $_GET['id'];
		echo '<input type="text" id="mid" value="'.$id.'">';
	?>    
	
	<!-- Page content -->
	<div class="page-content login-cover">

		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Content area -->
		<div class="card" style="margin:5%;">
			
			<div class="card">
				<div id="padres1" class="card">

					<!-- Form -->
						<center><img src="../../images/logo2.png" style="width: 20%; margin-top: 10px;"></center>
						
						<div class="text-center mb-3">
							<!--<img src="imagenes/lima.jpg" class="card-img">-->
							<h5 class="mb-0">REGISTRO DEL PADRE</h5>
							<span class="d-block text-muted">Llene los campos requeridos</span>
						</div>

						<div class="form-group text-center text-muted content-divider">
							<span class="px-2">Datos del padre</span>
						</div>

						<div class="form-group form-group-feedback form-group-feedback-left">
							<input type="text" id="pnombre" class="form-control" placeholder="Nombres" required>
							<div class="form-control-feedback">
								<i class="icon-user-check text-muted"></i>
							</div>
							<!--<span class="form-text text-danger"><i class="icon-cancel-circle2 mr-2"></i> This username is already taken</span>-->
						</div>

						<div class="form-group form-group-feedback form-group-feedback-left">
							<input type="text" id="papellidos" class="form-control" placeholder="Apellidos" required>
							<div class="form-control-feedback">
								<i class="icon-user-check text-muted"></i>
							</div>
							<!--<span class="form-text text-danger"><i class="icon-cancel-circle2 mr-2"></i> This username is already taken</span>-->
						</div>

						<div class="form-group form-group-feedback form-group-feedback-left">
							<input type="number" id="pdocumento" class="form-control" placeholder="Documento de identidad" required>
							<div class="form-control-feedback">
								<i class="icon-user-check text-muted"></i>
							</div>
							<!--<span class="form-text text-danger"><i class="icon-cancel-circle2 mr-2"></i> This username is already taken</span>-->
						</div>

						<div class="form-group form-group-feedback form-group-feedback-left">
							<input type="password" id="ppassword" class="form-control" placeholder="Contraseña" required>
							<div class="form-control-feedback">
								<i class="icon-user-lock text-muted"></i>
							</div>
						</div>

						<div class="form-group form-group-feedback form-group-feedback-left">
							<input type="password" id="ppassword2" class="form-control" placeholder="Repetir contraseña" required>
							<div class="form-control-feedback">
								<i class="icon-user-lock text-muted"></i>
							</div>
						</div>

						<!--<div class="form-group text-center text-muted content-divider">
							<span class="px-2">Datos de contacto</span>
						</div>-->

						<div class="form-group form-group-feedback form-group-feedback-left">
							<input type="email" id="pcorreo" class="form-control" placeholder="Correo" required>
							<div class="form-control-feedback">
								<i class="icon-user-check text-muted"></i>
							</div>
							<!--<span class="form-text text-danger"><i class="icon-cancel-circle2 mr-2"></i> This username is already taken</span>-->
						</div>

						<div class="form-group form-group-feedback form-group-feedback-left">
							<input type="number" id="pcelular" class="form-control" placeholder="Celular" required>
							<div class="form-control-feedback">
								<i class="icon-user-check text-muted"></i>
							</div>
							<!--<span class="form-text text-danger"><i class="icon-cancel-circle2 mr-2"></i> This username is already taken</span>-->
						</div>

						<!--<div class="form-group text-center text-muted content-divider">
							<span class="px-2">Adicionales</span>
						</div>-->

						<div class="form-group">
							<button id="bpadres1" type="button" class="btn bg-blue btn-block"> SIGUIENTE </button>
						</div>
						<div class="form-group">
							<a href="../../index.html"><button type="button" class="btn bg-blue btn-block" > VOLVER </button></a>
						</div>
					
					
					<!-- /form -->

				</div>
			</div>
			<div class="card">
				<div id="padres2" class="card">

					<!-- Form -->
					
						
						<div class="text-center mb-3">
							<!--<img src="imagenes/lima2.jpg" class="card-img">-->
							<h5 class="mb-0">INFORMACIÓN DEL ALUMNO</h5>
							<span class="d-block text-muted">Llene los campos requeridos</span>
						</div>

						<div class="form-group text-center text-muted content-divider">
							<span class="px-2">Datos del alumno</span>
						</div>

						<div class="form-group form-group-feedback form-group-feedback-left">
							<input type="text" id="pnombresa" class="form-control" placeholder="Nombres" required>
							<div class="form-control-feedback">
								<i class="icon-user-check text-muted"></i>
							</div>
							<!--<span class="form-text text-danger"><i class="icon-cancel-circle2 mr-2"></i> This username is already taken</span>-->
						</div>

						<div class="form-group form-group-feedback form-group-feedback-left">
							<input type="text" id="papellidosa" class="form-control" placeholder="Apellidos" required>
							<div class="form-control-feedback">
								<i class="icon-user-check text-muted"></i>
							</div>
							<!--<span class="form-text text-danger"><i class="icon-cancel-circle2 mr-2"></i> This username is already taken</span>-->
						</div>

						<div class="form-group form-group-feedback form-group-feedback-left">
							<select id="gradoa" class="form-control select">
								<option value="0">Grado</option>
								<option value="P1">1er grado de primaria</option>
								<option value="P2">2do grado de primaria</option>
								<option value="P3">3er grado de primaria</option>
								<option value="P4">4to grado de primaria</option>
								<option value="P5">5to grado de primaria</option>
								<option value="P6">6to grado de primaria</option>
							</select>
							<div class="form-control-feedback">
								<i class="icon-user-check text-muted"></i>
							</div>
							<!--<span class="form-text text-danger"><i class="icon-cancel-circle2 mr-2"></i> This username is already taken</span>-->
						</div>

						<div class="form-group form-group-feedback form-group-feedback-left">
							<input type="text" id="pdireccion" class="form-control" placeholder="Dirección de residencia" required>
							<div class="form-control-feedback">
								<i class="icon-user-check text-muted"></i>
							</div>
								<!--<span class="form-text text-danger"><i class="icon-cancel-circle2 mr-2"></i> This username is already taken</span>-->
						</div>
						<div class="form-group form-group-feedback form-group-feedback-left">
							<div id="odistrito"></div>
								
							<div class="form-control-feedback">
								<i class="icon-user-check text-muted"></i>
							</div>
								<!--<span class="form-text text-danger"><i class="icon-cancel-circle2 mr-2"></i> This username is already taken</span>-->
						</div>
						
						<div class="form-group text-center text-muted content-divider">
							<span class="px-2">Datos del colegio</span>
						</div>

						<div class="form-group form-group-feedback form-group-feedback-left">
							<div id="ocolegio"></div>
							
							<div class="form-control-feedback">
								<i class="icon-user-check text-muted"></i>
							</div>
							<input type="text" id="otrocolegio" class="form-control" placeholder="Otro colegio">
							<!--<span class="form-text text-danger"><i class="icon-cancel-circle2 mr-2"></i> This username is already taken</span>-->
						</div>

						
						<br><br>
						<div class="form-group">
							<button id="bagregar" type="button" class="btn bg-blue btn-block" > GUARDAR ALUMNO </button>
						</div>
						<div class="form-group">
							<button id="bagregar2" type="button" class="btn bg-blue btn-block" > AGREGAR OTRO ALUMNO </button>
						</div>
						<div class="form-group">
							<button id="bpadres2" type="button" class="btn bg-blue btn-block" > SIGUIENTE </button>
						</div>
						<div class="form-group">
							<button id="bvolver2" type="button" class="btn bg-blue btn-block" > VOLVER </button>
						</div>
					
					
					<!-- /form -->

				</div>
			</div>
			<div class="card">
				<div id="padres3" class="card">

					<!-- Form -->
					
						
						<div class="text-center mb-3">
							<!--<img src="imagenes/lima2.jpg" class="card-img">-->
							<h5 class="mb-0">DISPONIBILIDAD DE CLASES</h5>
							<span class="d-block text-muted">Llene los campos requeridos</span>
						</div>

						<div class="form-group form-group-feedback form-group-feedback-left">
							<div id="selectHijo"></div>
							
							<div class="form-control-feedback">
								<i class="icon-user-check text-muted"></i>
							</div>
							<!--<span class="form-text text-danger"><i class="icon-cancel-circle2 mr-2"></i> This username is already taken</span>-->
						</div>

						<div class="form-group form-group-feedback form-group-feedback-left">
							<!--<select id="servicio" onclick="Servicio()" class="form-control select">
								<option value="0">Seleccione el servicio que desea incluir (Puede ser más de uno)</option>
								<option value="1">Apoyo con tareas escolares</option>
								<option value="2">Repaso para exámenes/tareas</option>
								<option value="3">Refuerzo de idioma/curso</option>
								<option value="4">Adelanto de idioma/curso</option>
								
							</select>-->
							
							<div style="margin-left:30px;" >
								Seleccione el servicio que desea incluir (puede ser más de uno):<br>
								<input type="checkbox" id="serv1" value="1"> Apoyo con tareas escolares<br>
								<input type="checkbox" id="serv2" value="2"> Repaso para exámenes/tareas<br>
								<input type="checkbox" id="serv3" value="3"> Refuerzo de idioma/curso<br>
								<input type="checkbox" id="serv4" value="4"> Adelanto de idioma/curso<br>
							</div>
							<div class="form-control-feedback">
								<i class="icon-user-check text-muted"></i>
							</div>
							<!--<span class="form-text text-danger"><i class="icon-cancel-circle2 mr-2"></i> This username is already taken</span>-->
						</div>

						<div class="form-group form-group-feedback form-group-feedback-left">
							<div style="margin-left:30px;" >
								Seleccione los cursos que desea incluir (puede ser más de uno):<br>
								<input type="checkbox" id="cur1" value="1"> Matemática<br>
								<input type="checkbox" id="cur2" value="2"> Lengua<br>
								<input type="checkbox" id="cur3" value="3"> Ciencias naturales<br>
								<input type="checkbox" id="cur4" value="4"> Ciencias sociales<br>
								<input type="checkbox" id="cur5" value="3"> Inglés<br>
								<input type="checkbox" id="cur6" value="4"> Francés<br>
							</div>
							<div class="form-control-feedback">
								<i class="icon-user-check text-muted"></i>
							</div>
							<!--<span class="form-text text-danger"><i class="icon-cancel-circle2 mr-2"></i> This username is already taken</span>-->
						</div>

						<div class="form-group form-group-feedback form-group-feedback-left">
								<select id="idioma" class="form-control select">
									<option value="0">Seleccione el idioma para el servicio</option>
									<option value="1">Español</option>
									<option value="2">Inglés</option>
									<option value="3">Alemán</option>
									<option value="4">Portugues</option>
									<option value="5">Italiano</option>
						
								</select>
								<div class="form-control-feedback">
									<i class="icon-user-check text-muted"></i>
								</div>
								<input type="text" id="otroidioma" class="form-control" placeholder="Otro idioma">
								<!--<span class="form-text text-danger"><i class="icon-cancel-circle2 mr-2"></i> This username is already taken</span>-->
						</div>

						<div class="form-group text-center text-muted content-divider">
							<span class="px-4">
								<h1>El precio por hora es: S/ <div style="display:inline-block;" id="precio"></div>.00</h1>
							</span>
						</div>

						<div class="form-group form-group-feedback form-group-feedback-left">
							<div id="oplan"></div>
							
						</div>

						<!--<div class="form-group">
							<div class="form-check">
								<label class="form-check-label">
									<input onclick="Terminos()" type="checkbox" name="remember" class="form-input-styled" >
									Acepto los <a href="#">términos y condiciones</a>
								</label>
							</div>
						</div>-->

						<div class="form-group text-center text-muted content-divider">
								<span class="px-2">Seleccionar horarios</span>
						</div>
						<div class="form-group form-group-feedback form-group-feedback-left">
							<div style="margin-left: 4%;">
								<center>
								<table>
									<tr >
										<td style="width:50%;">
											<div id='calendar'></div>
										</td>
										<td style="width:50%;">
											<table style="width:80%; margin-left: 20px;">
												<tr>
													<td style="border: 1px sandybrown solid;">
														<center>FECHA
														<br><div id="lafecha"></div></center>
													</td>
													<td style="border: 1px sandybrown solid;">
														<center>INICIO
														<br>
														<select id="inicia" onclick="CambioHora()">
															<option value="8">08</option>
															<option value="9">09</option>
															<option value="10">10</option>
															<option value="11">11</option>
															<option value="12">12</option>
															<option value="13">13</option>
															<option value="14">14</option>
															<option value="15">15</option>
															<option value="16">16</option>
															<option value="17">17</option>
															<option value="18">18</option>
															<option value="19">19</option>
															
														</select>
														<select id="iniciaHora">
															<option value="00">00</option>
															<option value="30">30</option>
															
														</select></center>
													</td>
													<td style="border: 1px sandybrown solid;">
														<center>FINAL
														<br>
														<select id="finaliza">
															<option value="9">09</option>
															<option value="10">10</option>
															<option value="11">11</option>
															<option value="12">12</option>
															<option value="13">13</option>
															<option value="14">14</option>
															<option value="15">15</option>
															<option value="16">16</option>
															<option value="17">17</option>
															<option value="18">18</option>
															<option value="19">19</option>
															<option value="20">20</option>
															
														</select>
														<select id="finalizaHora">
															<option value="00">00</option>
															<option value="30">30</option>
															
														</select></center>
													</td>
													<td style="border: 1px sandybrown solid;">
														<center>
															<button onclick="AddHora()" >AGREGAR</button>
														</center>
													</td>
												</tr>
												
												<tr style="margin-top:50px; font-size: 20px;">
													<td colspan="4">
														<center>RESUMEN HORARIO ELEGIDO:</center>
													</td>
												</tr>
												<tr style="margin-top:50px;">
													<td colspan="4">
														<div id="resultadoHorario"></div>
													</td>
												</tr>
											</table>
										</td>
											
											
									</tr>
									
								</table>
								<br>
								<button onclick="Comprobar2(0)">Comprobar disponibilidad</button>
								<br>
								<div id="resultadoComprobar"></div>
									
							</center>
							</div>
							
							<div class="form-control-feedback">
								<i class="icon-user-check text-muted"></i>
							</div>
							<!--<span class="form-text text-danger"><i class="icon-cancel-circle2 mr-2"></i> This username is already taken</span>-->
						</div>
						<!--<button type="submit" class="btn bg-teal-400 btn-block">Continuar <i class="icon-circle-right2 ml-2"></i></button>
						-->
						<div class="form-group">
							<button onclick="GuardaDatosHorario()" type="button" class="btn bg-blue btn-block" > GUARDAR </button>
						</div>
						<div class="form-group">
							<button onclick="AntePenultimo()" type="button" class="btn bg-blue btn-block" > SIGUIENTE </button>
						</div>
						
						<div class="form-group">
							<button id="bvolver3" type="button" class="btn bg-blue btn-block" > VOLVER </button>
						</div>
					
					
					<!-- /form -->

				</div>
			</div>
			<div class="card">
				<div id="padres4" class="card">
					<div class="text-center mb-3">
						<!--<img src="imagenes/lima2.jpg" class="card-img">-->
						<h5 class="mb-0">INFORMACIÓN REGISTRADA</h5>
						<span class="d-block text-muted">Resumen de información</span>
					</div>
					<div id="resumenInfo"></div>

					<div class="form-group">
						<button onclick="Penultimo()" id="bpadres3" type="button" class="btn bg-blue btn-block" > SIGUIENTE </button>
					</div>
					
					<div class="form-group">
						<button id="bvolver4" type="button" class="btn bg-blue btn-block" > VOLVER </button>
					</div>
				</div>
			</div>
			<div class="card">
				<div id="padres5" class="card">
					<div class="text-center mb-3">
						<!--<img src="imagenes/lima2.jpg" class="card-img">-->
						<h5 class="mb-0">CONFIRMACIÓN DE CLASES</h5>
						<span class="d-block text-muted">Se ha reservado el horario</span>
					</div>

					<div id="resumenInfo2"></div>

					<div class="form-group">
						<button onclick="Finalizar()" id="bpadres3" type="button" class="btn bg-blue btn-block" > FINALIZAR </button>
					</div>
					
					<!--<div class="form-group">
						<button id="bvolver4" type="button" class="btn bg-blue btn-block" > VOLVER </button>
					</div>-->
				</div>
			</div>
	            <!-- Login form -->
				<div id="modal-login" class="modal fade" tabindex="-1">
					<div class="modal-dialog modal-sm">
						<div class="modal-content">

							<!-- Form -->
							<form class="modal-body" action="index.html">
								<div class="text-center mb-3">
									<i class="icon-reading icon-2x text-slate-300 border-slate-300 border-3 rounded-round p-3 mb-3 mt-1"></i>
									<h5 class="mb-0">Login to your account</h5>
									<span class="d-block text-muted">Your credentials</span>
								</div>

								<div class="form-group form-group-feedback form-group-feedback-left">
									<input type="text" class="form-control" placeholder="Username">
									<div class="form-control-feedback">
										<i class="icon-user text-muted"></i>
									</div>
								</div>

								<div class="form-group form-group-feedback form-group-feedback-left">
									<input type="password" class="form-control" placeholder="Password">
									<div class="form-control-feedback">
										<i class="icon-lock2 text-muted"></i>
									</div>
								</div>

								<div class="form-group d-flex align-items-center">
									<div class="form-check mb-0">
										<label class="form-check-label">
											<input type="checkbox" name="remember" class="form-input-styled" checked data-fouc>
											Remember
										</label>
									</div>

									<a href="login_password_recover.html" class="ml-auto">Forgot password?</a>
								</div>

								<div class="form-group">
									<button type="submit" class="btn btn-primary btn-block">Sign in <i class="icon-circle-right2 ml-2"></i></button>
								</div>

								<div class="form-group text-center text-muted content-divider">
									<span class="px-2">or sign in with</span>
								</div>

								<div class="form-group text-center">
									<button type="button" class="btn btn-outline bg-indigo border-indigo text-indigo btn-icon rounded-round border-2"><i class="icon-facebook"></i></button>
									<button type="button" class="btn btn-outline bg-pink-300 border-pink-300 text-pink-300 btn-icon rounded-round border-2 ml-2"><i class="icon-dribbble3"></i></button>
									<button type="button" class="btn btn-outline bg-slate-600 border-slate-600 text-slate-600 btn-icon rounded-round border-2 ml-2"><i class="icon-github"></i></button>
									<button type="button" class="btn btn-outline bg-info border-info text-info btn-icon rounded-round border-2 ml-2"><i class="icon-twitter"></i></button>
								</div>

								<div class="form-group text-center text-muted content-divider">
									<span class="px-2">Don't have an account?</span>
								</div>

								<div class="form-group">
									<a href="#" class="btn btn-light btn-block">Sign up</a>
								</div>

								<span class="form-text text-center text-muted">By continuing, you're confirming that you've read our <a href="#">Terms &amp; Conditions</a> and <a href="#">Cookie Policy</a></span>
							</form>
							<!-- /form -->

						</div>
					</div>
				</div>
				<!-- /login form -->


	            


	            <!-- Password recovery form -->
				<div id="modal-recover" class="modal fade" tabindex="-1">
					<div class="modal-dialog modal-sm">
						<div class="modal-content">

							<!-- Form -->
							<form class="modal-body" action="index.html">
								<div class="text-center mb-3">
									<i class="icon-spinner11 icon-2x text-warning border-warning border-3 rounded-round p-3 mb-3 mt-1"></i>
									<h5 class="mb-0">Password recovery</h5>
									<span class="d-block text-muted">We'll send you instructions in email</span>
								</div>

								<div class="form-group form-group-feedback form-group-feedback-right">
									<input type="email" class="form-control" placeholder="Your email">
									<div class="form-control-feedback">
										<i class="icon-mail5 text-muted"></i>
									</div>
								</div>

								<button type="submit" class="btn bg-blue btn-block"><i class="icon-spinner11 mr-2"></i> Reset password</button>
							</form>
							<!-- /form -->

						</div>
					</div>
				</div>
				<!-- /password recovery form -->


	            <!-- Tabbed form -->
				<div id="modal-tabbed" class="modal fade" tabindex="-1">
					<div class="modal-dialog modal-sm">
						<div class="modal-content">

							<!-- Form -->
							<form action="index.html">
								<ul class="nav nav-tabs nav-justified alpha-grey mb-0">
									<li class="nav-item"><a href="#login-tab1" class="nav-link border-y-0 border-left-0 active" data-toggle="tab"><h6 class="my-1">Sign in</h6></a></li>
									<li class="nav-item"><a href="#login-tab2" class="nav-link border-y-0 border-right-0" data-toggle="tab"><h6 class="my-1">Register</h6></a></li>
								</ul>

								<div class="tab-content modal-body">
									<div class="tab-pane fade show active" id="login-tab1">
										<div class="text-center mb-3">
											<i class="icon-reading icon-2x text-slate-300 border-slate-300 border-3 rounded-round p-3 mb-3 mt-1"></i>
											<h5 class="mb-0">Login to your account</h5>
											<span class="d-block text-muted">Your credentials</span>
										</div>

										<div class="form-group form-group-feedback form-group-feedback-left">
											<input type="text" class="form-control" placeholder="Username">
											<div class="form-control-feedback">
												<i class="icon-user text-muted"></i>
											</div>
										</div>

										<div class="form-group form-group-feedback form-group-feedback-left">
											<input type="password" class="form-control" placeholder="Password">
											<div class="form-control-feedback">
												<i class="icon-lock2 text-muted"></i>
											</div>
										</div>

										<div class="form-group d-flex align-items-center">
											<div class="form-check mb-0">
												<label class="form-check-label">
													<input type="checkbox" name="remember" class="form-input-styled" checked data-fouc>
													Remember
												</label>
											</div>

											<a href="login_password_recover.html" class="ml-auto">Forgot password?</a>
										</div>

										<div class="form-group">
											<button type="submit" class="btn btn-primary btn-block">Sign in</button>
										</div>

										<div class="form-group text-center text-muted content-divider">
											<span class="px-2">or sign in with</span>
										</div>

										<div class="form-group text-center">
											<button type="button" class="btn btn-outline bg-indigo border-indigo text-indigo btn-icon rounded-round border-2"><i class="icon-facebook"></i></button>
											<button type="button" class="btn btn-outline bg-pink-300 border-pink-300 text-pink-300 btn-icon rounded-round border-2 ml-2"><i class="icon-dribbble3"></i></button>
											<button type="button" class="btn btn-outline bg-slate-600 border-slate-600 text-slate-600 btn-icon rounded-round border-2 ml-2"><i class="icon-github"></i></button>
											<button type="button" class="btn btn-outline bg-info border-info text-info btn-icon rounded-round border-2 ml-2"><i class="icon-twitter"></i></button>
										</div>

										<div class="form-group text-center text-muted content-divider">
											<span class="px-2">Don't have an account?</span>
										</div>

										<div class="form-group">
											<a href="#" class="btn btn-light btn-block">Sign up</a>
										</div>

										<span class="form-text text-center text-muted">By continuing, you're confirming that you've read our <a href="#">Terms &amp; Conditions</a> and <a href="#">Cookie Policy</a></span>
									</div>

									<div class="tab-pane fade" id="login-tab2">
										<div class="text-center mb-3">
											<i class="icon-plus3 icon-2x text-success border-success border-3 rounded-round p-3 mb-3 mt-1"></i>
											<h5 class="mb-0">Create account</h5>
											<span class="d-block text-muted">All fields are required</span>
										</div>

										<div class="form-group form-group-feedback form-group-feedback-left">
											<input type="text" class="form-control" placeholder="Your username">
											<div class="form-control-feedback">
												<i class="icon-user-check text-muted"></i>
											</div>
										</div>

										<div class="form-group form-group-feedback form-group-feedback-left">
											<input type="password" class="form-control" placeholder="Your password">
											<div class="form-control-feedback">
												<i class="icon-user-lock text-muted"></i>
											</div>
										</div>

										<div class="form-group form-group-feedback form-group-feedback-left">
											<input type="password" class="form-control" placeholder="Your email">
											<div class="form-control-feedback">
												<i class="icon-mention text-muted"></i>
											</div>
										</div>

										<div class="form-group text-center text-muted content-divider">
											<span class="px-2">Additions</span>
										</div>

										<div class="form-group">
											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" name="remember" class="form-input-styled" checked data-fouc>
													Send me <a href="#">test account settings</a>
												</label>
											</div>

											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" name="remember" class="form-input-styled" checked data-fouc>
													Subscribe to monthly newsletter
												</label>
											</div>

											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" name="remember" class="form-input-styled" data-fouc>
													Accept <a href="#">terms of service</a>
												</label>
											</div>
										</div>

										<button type="submit" class="btn bg-dark btn-block">Register</button>
									</div>
								</div>
							</form>
							<!-- /form -->

						</div>
					</div>
				</div>
				<!-- /tabbed recovery form -->


	            <!-- Validation form -->
				<div id="modal-validation" class="modal fade" tabindex="-1">
					<div class="modal-dialog modal-sm">
						<div class="modal-content">

							<!-- Form -->
							<form class="modal-body form-validate" action="index.html">
								<div class="text-center mb-3">
									<i class="icon-reading icon-2x text-slate-300 border-slate-300 border-3 rounded-round p-3 mb-3 mt-1"></i>
									<h5 class="mb-0">Login to your account</h5>
									<span class="d-block text-muted">Your credentials</span>
								</div>

								<div class="form-group form-group-feedback form-group-feedback-left">
									<input type="text" class="form-control" name="username" placeholder="Username" required>
									<div class="form-control-feedback">
										<i class="icon-user text-muted"></i>
									</div>
								</div>

								<div class="form-group form-group-feedback form-group-feedback-left">
									<input type="password" class="form-control" name="password" placeholder="Password" required>
									<div class="form-control-feedback">
										<i class="icon-lock2 text-muted"></i>
									</div>
								</div>

								<div class="form-group d-flex align-items-center">
									<div class="form-check mb-0">
										<label class="form-check-label">
											<input type="checkbox" name="remember" class="form-input-styled" checked data-fouc>
											Remember
										</label>
									</div>

									<a href="login_password_recover.html" class="ml-auto">Forgot password?</a>
								</div>

								<div class="form-group">
									<button type="submit" class="btn btn-primary btn-block">Sign in <i class="icon-circle-right2 ml-2"></i></button>
								</div>

								<div class="form-group text-center text-muted content-divider">
									<span class="px-2">or sign in with</span>
								</div>

								<div class="form-group text-center">
									<button type="button" class="btn btn-outline bg-indigo border-indigo text-indigo btn-icon rounded-round border-2"><i class="icon-facebook"></i></button>
									<button type="button" class="btn btn-outline bg-pink-300 border-pink-300 text-pink-300 btn-icon rounded-round border-2 ml-2"><i class="icon-dribbble3"></i></button>
									<button type="button" class="btn btn-outline bg-slate-600 border-slate-600 text-slate-600 btn-icon rounded-round border-2 ml-2"><i class="icon-github"></i></button>
									<button type="button" class="btn btn-outline bg-info border-info text-info btn-icon rounded-round border-2 ml-2"><i class="icon-twitter"></i></button>
								</div>

								<div class="form-group text-center text-muted content-divider">
									<span class="px-2">Don't have an account?</span>
								</div>

								<div class="form-group">
									<a href="#" class="btn btn-light btn-block">Sign up</a>
								</div>

								<span class="form-text text-center text-muted">By continuing, you're confirming that you've read our <a href="#">Terms &amp; Conditions</a> and <a href="#">Cookie Policy</a></span>
							</form>
							<!-- /form -->

						</div>
					</div>
				</div>
				<!-- /validation form -->

			</div>
			<!-- /content area -->

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->

</body>
</html>
