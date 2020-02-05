<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Limitless - Responsive Web Application Kit by Eugene Kopyov</title>

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
	<script type="application/javascript" src="../controler/inicio2.js"></script>

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

	
	<!-- Page content -->
	<div class="page-content login-cover">

		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Content area -->
		<div class="card" style="margin:5%;">
			
			<div class="card">
				<div id="padres1" class="card">

					<!-- Form -->
					
						
						<div class="text-center mb-3">
							<!--<img src="imagenes/lima.jpg" class="card-img">-->
							<h5 class="mb-0">ACTUALIZAR INFORMACIÓN</h5>
							<span class="d-block text-muted">Llene los campos requeridos</span>
						</div>

						<div class="form-group form-group-feedback form-group-feedback-left">
                            <div id="odistrito2"></div>
							<table style="width:80%; margin-left: 20px;">
								<tr>
									<td>Distritos de cobertura (puede ser más de uno)</td>
									<td><div id="cobertura"></div></td>
								</tr>
							</table>
							       
                            <div class="form-control-feedback">
                                <i class="icon-user-check text-muted"></i>
                            </div>
                            
						</div>
						
						<div class="form-group form-group-feedback form-group-feedback-left">
							<div style="margin-left:30px;" >
								Cursos que está dispuesto a dictar (puede ser más de uno):<br>
								<input type="checkbox" id="cur1" value="1"> Matemática<br>
								<input type="checkbox" id="cur2" value="2"> Lengua<br>
								<input type="checkbox" id="cur3" value="3"> Ciencias naturales<br>
								<input type="checkbox" id="cur4" value="4"> Ciencias sociales<br>
								<input type="checkbox" id="cur3" value="3"> Inglés<br>
								<input type="checkbox" id="cur4" value="4"> Francés<br>
							</div>
							<div class="form-control-feedback">
								<i class="icon-user-check text-muted"></i>
							</div>
							<!--<span class="form-text text-danger"><i class="icon-cancel-circle2 mr-2"></i> This username is already taken</span>-->
						</div>

						<div class="form-group form-group-feedback form-group-feedback-left">
								<div style="margin-left:30px;" >
									Idiomas en los que puede dictar los cursos (puede ser más de uno):<br>
									<input type="checkbox" id="idm1" value="1"> Español<br>
									<input type="checkbox" id="idm2" value="2"> Inglés<br>
									<input type="checkbox" id="idm3" value="3"> Alemán<br>
									<input type="checkbox" id="idm4" value="4"> Portugues<br>
									<input type="checkbox" id="idm5" value="5"> Italiano<br>
									
								</div>
								<div class="form-control-feedback">
									<i class="icon-user-check text-muted"></i>
								</div>
								<!--<span class="form-text text-danger"><i class="icon-cancel-circle2 mr-2"></i> This username is already taken</span>-->
						</div>
                        
                        <div class="text-center mb-3">
							<!--<img src="imagenes/lima2.jpg" class="card-img">-->
							<h5 class="mb-0">DISPONIBILIDAD DE CLASES</h5>
							<span class="d-block text-muted">Llene los campos requeridos</span>
						</div>
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
									
							</center>
							</div>
							
							<div class="form-control-feedback">
								<i class="icon-user-check text-muted"></i>
							</div>
							<div class="form-group text-center text-muted content-divider">
								<span class="px-2">Adicionales</span>
							</div>

							<!--<div class="form-group">
								<div class="form-check">
									<label class="form-check-label">
										<input onclick="Terminos()" type="checkbox" name="remember" class="form-input-styled" >
										Acepto los <a href="#">términos y condiciones</a>
									</label>
								</div>
							</div>-->
							<!--<span class="form-text text-danger"><i class="icon-cancel-circle2 mr-2"></i> This username is already taken</span>-->
						</div>
						<!--<div class="form-group">
                            
							<button onclick="GuardaDatosHorario()" type="button" class="btn bg-blue btn-block" > GUARDAR </button>
                        </div>-->
                        <div class="form-group">
							<button onclick="GuardaAsesor()" type="button" class="btn bg-blue btn-block"> GUARDAR </button>
						</div>
					<!-- /form -->

				</div>
			</div>
			
	            

		</div>
		<!-- /content area -->

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->

</body>
</html>
