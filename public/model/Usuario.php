<?php

class Usuario{

	function __constructor($id){
		$this -> id = $id;
		
	}
	
	function Valida($usuario,$password){
	    include('conexion.php');
    
        $query = "SELECT * FROM padres WHERE correo='$usuario' AND contrasena='$password'";
        mysqli_set_charset($mysqli, 'utf8'); 
    	$result = mysqli_query($mysqli, $query);
		
		$d = '';
    	while ($row = $result->fetch_array()){
    	    $d=$row['id'];
    			
    	}
		
		/*if($d==""){
			$query2 = "SELECT * FROM asesores WHERE correo='$usuario' ";
			mysqli_set_charset($mysqli, 'utf8'); 
			$result = mysqli_query($mysqli, $query2);
			
			$d = '';
			while ($row = $result->fetch_array()){
				$d=$row['id'];
					
			}
		}*/
    	return $d;
	}

	function Valida2($usuario,$password){
	    include('conexion.php');
    
        $d = '';
    	if($d==""){
			$query2 = "SELECT * FROM asesores WHERE correo='$usuario' ";
			mysqli_set_charset($mysqli, 'utf8'); 
			$result = mysqli_query($mysqli, $query2);
			
			$d = '';
			while ($row = $result->fetch_array()){
				$d=$row['id'];
					
			}
		}
    	return $d;
	}
	
	function DataPadre($id){
		include('conexion.php');
    
        $query = "SELECT * FROM padres WHERE id='$id' ";
        mysqli_set_charset($mysqli, 'utf8'); 
    	$result = mysqli_query($mysqli, $query);
    		
    	while ($row = $result->fetch_array()){
			$dat=$dat.$row['nombres']."#".$row['apellidos']."#";
			$dat=$dat.$row['documento']."#".$row['celular']."#";
		}
		
		return $dat;
	}

	function DataAsesor($id){
		include('conexion.php');
    
        $query = "SELECT * FROM asesores WHERE id='$id' ";
        mysqli_set_charset($mysqli, 'utf8'); 
    	$result = mysqli_query($mysqli, $query);
    		
    	while ($row = $result->fetch_array()){
			$dat=$dat.$row['nombres']."#".$row['apellidos']."#";
			$dat=$dat.$row['documento']."#".$row['celular']."#";
		}
		
		return $dat;
	}

	/*
	function Restantes($id){
		include('conexion.php');
		$query = "SELECT * FROM antereserva WHERE padre='$id' ";
		mysqli_set_charset($mysqli, 'utf8'); 
		$result = mysqli_query($mysqli, $query);
		$t = '<table style="margin-left:20px; width:90%;">';
		
		while ($row = $result->fetch_array()){
			$d = $this->NombreAlumno($row['alumno']);
			$d2 = explode("#",$d);
			$alumno = $d2[0];
			$colegio = $d2[1];
			$c = explode("#",$row['curso']);
			$curso=''; $servicio='';
			for($i=0; $i<sizeof($c); $i++){
				if($c[$i]=="1"){
					$curso = $curso . 'Matemática'.'<br>';
				} else if($c[$i]=="2"){
					$curso = $curso . 'Lengua'.'<br>';
				} else if($c[$i]=="3"){
					$curso = $curso . 'Ciencias Naturales'.'<br>';
				} else if($c[$i]=="4"){
					$curso = $curso . 'Ciencias sociales'.'<br>';
				} else if($c[$i]=="5"){
					$curso = $curso . 'Inglés'.'<br>';
				} else if($c[$i]=="6"){
					$curso = $curso . 'Francés'.'<br>';
				}
				//echo $c[$i].'--';
			}
			$s = explode("#",$row['servicio']);
			for($i=0; $i<sizeof($s); $i++){
				if($s[$i]=="1"){
					$servicio = $servicio . 'Apoyo con tareas escolares'.'<br>';
				} else if($s[$i]=="2"){
					$servicio = $servicio . 'Repaso para exámenes/tareas'.'<br>';
				} else if($s[$i]=="3"){
					$servicio = $servicio . 'Refuerzo de idioma/curso'.'<br>';
				} else if($s[$i]=="4"){
					$servicio = $servicio . 'Adelanto de idioma/curso'.'<br>';
				}
				//echo $s[$i].'--';
			} 

			if($row['idioma']=="1"){
				$idioma="Español";
			} else if($row['idioma']=="2"){
				$idioma="Inglés";
			}  else if($row['idioma']=="3"){
				$idioma="Alemán";
			}  else if($row['idioma']=="4"){
				$idioma="Portugués";
			} else if($row['idioma']=="5"){
				$idioma="Italiano";
			}

			$horario = 'DIA: '.$row['dia'].'<br> Inicia: '.$row['inicio'].'<br> Finaliza: '.$row['fin'];

			$t = $t.'<tr><td style="width:40%;">ALUMNO</td><td>'.$alumno."</td></tr>";
			$t = $t.'<tr><td style="width:40%;">COLEGIO</td><td>'.$colegio."</td></tr>";
			$t = $t.'<tr><td style="width:40%;">CURSOS</td><td>'.$curso."</td></tr>";
			$t = $t.'<tr><td style="width:40%;">SERVICIO</td><td>'.$servicio."</td></tr>";
			$t = $t.'<tr><td style="width:40%;">IDIOMAS</td><td>'.$idioma."</td></tr>";
			//$t = $t.'<tr><td style="width:40%;">HORARIO</td><td>'.$horario."</td></tr>";
		}

		return $t.'</table>';
	} */

	function Restantes($id){
		include('conexion.php');
		$query = "SELECT * FROM antereserva WHERE padre='$id' ";
		mysqli_set_charset($mysqli, 'utf8'); 
		$result = mysqli_query($mysqli, $query);
		
		while ($row = $result->fetch_array()){
			$t = $t.$row['dia']."#".$row['horai']."#".$row['horaf']."#".$row['comentario']."#%";
		}

		return $t;
	}

	function RestantesAsesor($id){
		include('conexion.php');
		$query = "SELECT * FROM antereserva WHERE asesor='$id' ";
		mysqli_set_charset($mysqli, 'utf8'); 
		$result = mysqli_query($mysqli, $query);
		
		while ($row = $result->fetch_array()){
			$t = $t.$row['dia']."#".$row['horai']."#".$row['horaf']."#".$row['comentario']."#%";
		}

		return $t;
	}

	function EnviarMensaje($padre,$asesor,$mensaje){
		$mensaje = utf8_decode($mensaje);

		date_default_timezone_set('America/Lima');
		$fecha = date('Y-m-d');
		$hora = date('H:i:s');
		
		include('conexion.php');

        $sql = "INSERT INTO mensajes (PADRE,ASESOR,MENSAJE,FECHA,HORA) 
        VALUES ('$padre','$asesor','$mensaje','$fecha','$hora')";
        
        if (!$resultado = $mysqli->query($sql)) {
    	    // ¡Oh, no! La consulta falló. 
    	    echo "Lo sentimos, este sitio web está experimentando problemas.";
    	
    	    // De nuevo, no hacer esto en un sitio público, aunque nosotros mostraremos
    	    // cómo obtener información del error
    	    echo "Error: La ejecución de la consulta falló debido a: \n";
    	    echo "Query: " . $sql . "\n";
    	    echo "Errno: " . $mysqli->errno . "\n";
    	    echo "Error: " . $mysqli->error . "\n";
    	    
    	    exit;
    	} else {
    		echo mysqli_insert_id($mysqli);
    		//echo "Ingresado"."\n";
    	    
    	}
	}


	function EnviarMensaje2($nombre,$correo,$mensaje){
		$mensaje = utf8_decode($mensaje);

		date_default_timezone_set('America/Lima');
		$fecha = date('Y-m-d');
		$hora = date('H:i:s');
		
		include('conexion.php');

        $sql = "INSERT INTO mensajes2 (NOMBRE,CORREO,MENSAJE,FECHA,HORA) 
        VALUES ('$nombre','$correo','$mensaje','$fecha','$hora')";
        
        if (!$resultado = $mysqli->query($sql)) {
    	    
    	    exit;
    	} else {
    		echo mysqli_insert_id($mysqli);
    		//echo "Ingresado"."\n";
    	    
    	}
	}

	function EnviarCalificaciones($padre,$asesor,$mensaje,$puntaje){
		$mensaje = utf8_decode($mensaje);

		date_default_timezone_set('America/Lima');
		$fecha = date('Y-m-d');
		$hora = date('H:i:s');
		
		include('conexion.php');

        $sql = "INSERT INTO calificaciones (PADRE,ASESOR,MENSAJE,PUNTOS,FECHA,HORA) 
        VALUES ('$padre','$asesor','$mensaje','$puntaje','$fecha','$hora')";
        
        if (!$resultado = $mysqli->query($sql)) {
    	    // ¡Oh, no! La consulta falló. 
    	    echo "Lo sentimos, este sitio web está experimentando problemas.";
    	
    	    // De nuevo, no hacer esto en un sitio público, aunque nosotros mostraremos
    	    // cómo obtener información del error
    	    echo "Error: La ejecución de la consulta falló debido a: \n";
    	    echo "Query: " . $sql . "\n";
    	    echo "Errno: " . $mysqli->errno . "\n";
    	    echo "Error: " . $mysqli->error . "\n";
    	    
    	    exit;
    	} else {
    		echo mysqli_insert_id($mysqli);
    		//echo "Ingresado"."\n";
    	    
    	}
	}


	function EnviarComentario($id,$mensaje){
		include('conexion.php');

		$sql = "UPDATE antereserva SET comentario='$mensaje' WHERE id='$id' ";
			
		if (!$resultado = $mysqli->query($sql)) {
			echo "Lo sentimos, este sitio web está experimentando problemas.";
			echo "Error: La ejecución de la consulta falló debido a: \n";
			echo "Query: " . $sql . "\n";
			echo "Errno: " . $mysqli->errno . "\n";
			echo "Error: " . $mysqli->error . "\n";
				
			exit;
		}

	}

	function EstatusAlumno($id){
		include('conexion.php');
		$query = "SELECT * FROM antereserva WHERE padre='$id' ORDER BY dia DESC ";
		mysqli_set_charset($mysqli, 'utf8'); 
		$result = mysqli_query($mysqli, $query);
		
		while ($row = $result->fetch_array()){
			$d = $this->NombreAlumno($row['alumno']);
			$d2 = explode("#",$d);
			$alumno = $d2[0];

			$asesor = $this->NombreAsesor($row['asesor']);
			
			$t = $t.$row['dia']."#".$row['inicio']."#".$row['fin']."#".$alumno."#".$asesor."#".$row['comentario']."#%";
		}

		return $t;
	}

	function EstatusAlumnoAsesor($id){
		include('conexion.php');
		$query = "SELECT * FROM antereserva WHERE asesor='$id' ORDER BY dia DESC ";
		mysqli_set_charset($mysqli, 'utf8'); 
		$result = mysqli_query($mysqli, $query);
		
		while ($row = $result->fetch_array()){
			$d = $this->NombreAlumno($row['alumno']);
			$d2 = explode("#",$d);
			$alumno = $d2[0];

			if($row['comentario']==""){
				$com = '<button onclick="InsComentario('."'".$row['id']."'".','."'".$row['dia']."'".')" class="btn bg-primary">EDITAR</button>';
			} else {
				$com = $row['comentario'];
			}
			
			$t = $t.$row['dia']."#".$row['inicio']."#".$row['fin']."#".$alumno."#".$com."#".$com."#%";
		}

		return $t;
	}

	function RevisarComentario($id){
		include('conexion.php');
		$query = "SELECT * FROM mensajes WHERE asesor='$id' ORDER BY fecha,hora DESC ";
		mysqli_set_charset($mysqli, 'utf8'); 
		$result = mysqli_query($mysqli, $query);
		
		while ($row = $result->fetch_array()){
			$d = $this->NombrePadre($row['padre']);
			$d2 = explode("#",$d);
			$padre = $d2[0];

			$com = $row['mensaje'];
			
			$t = $t.$row['fecha']."#".$row['hora']."#".$padre."#".$com."#".$com."#%";
		}

		return $t;
	}

	function CostoColegio($id){
		include('conexion.php');
		$query = "SELECT * FROM colegios2 WHERE id='$id' ";
		mysqli_set_charset($mysqli, 'utf8'); 
		$result = mysqli_query($mysqli, $query);
		//$t = '<br><table style="margin-left:20px; width:90%;">';
		
		while ($row = $result->fetch_array()){
			$costo = $row['precio'];
		}

		return $costo;
	}

	function ContenidoDisponible($id){
		include('conexion.php');
		$query = "SELECT * FROM archivos WHERE asesor='$id' ORDER BY fecha,hora DESC ";
		mysqli_set_charset($mysqli, 'utf8'); 
		$result = mysqli_query($mysqli, $query);
		//$t = '<br><table style="margin-left:20px; width:90%;">';
		
		while ($row = $result->fetch_array()){
			$padre = $this->NombrePadre($row['padre']);
			$t = $t.$row['fecha']."#".$row['hora']."#".$padre."#".$row['archivo']."#".$row['padre']."#%";
		}

		return $t;
	}

	function HistorialAsesorias($id){
		include('conexion.php');
		$query = "SELECT * FROM antereserva WHERE asesor='$id' AND comentario NOT LIKE '' ORDER BY dia DESC ";
		mysqli_set_charset($mysqli, 'utf8'); 
		$result = mysqli_query($mysqli, $query);
		//$t = '<br><table style="margin-left:20px; width:90%;">';
		
		while ($row = $result->fetch_array()){
			$d = $this->NombreAlumno($row['alumno']);
			$d2 = explode("#",$d);
			$alumno = $d2[0];
			$costo = floatval($this->CostoColegio($d2[2]));
			$curso=''; $servicio='';
			$f = explode(":",$row['fin']);
			if($f[1]=="30"){ 
				$horaf = floatval($row['horaf']) + 0.5; 
			} else {
				$horaf = floatval($row['horaf']);
			}

			$i = explode(":",$row['inicio']);
			if($i[1]=="30"){ 
				$horai = floatval($row['horai']) + 0.5; 
			} else {
				$horai = floatval($row['horai']);
			}

			$horas = ($horaf-$horai)/100;
			$total = $horas * $costo;
			$t = $t.$row['dia']."#".$alumno."#".$horas."#".$costo."#".$total."#%";
			
		}
		//$t = $t.'<tr><td style="width:40%;">HORARIO</td><td>'.$horario."</td></tr>";
		//return $t.'</table>';
		return $t;
	
	}

	function HorarioPadre($id){
		include('conexion.php');
		$query = "SELECT * FROM antereserva WHERE padre='$id' ORDER BY dia DESC ";
		mysqli_set_charset($mysqli, 'utf8'); 
		$result = mysqli_query($mysqli, $query);
		//$t = '<br><table style="margin-left:20px; width:90%;">';
		
		while ($row = $result->fetch_array()){
			$d = $this->NombreAlumno($row['alumno']);
			$d2 = explode("#",$d);
			$alumno = $d2[0];
			$c = explode("#",$row['curso']);
			$curso=''; $servicio='';
			for($i=0; $i<sizeof($c); $i++){
				if($c[$i]=="1"){
					$curso = $curso . 'Matemática'.'<br>';
				} else if($c[$i]=="2"){
					$curso = $curso . 'Lengua'.'<br>';
				} else if($c[$i]=="3"){
					$curso = $curso . 'Ciencias Naturales'.'<br>';
				} else if($c[$i]=="4"){
					$curso = $curso . 'Ciencias sociales'.'<br>';
				} else if($c[$i]=="5"){
					$curso = $curso . 'Inglés'.'<br>';
				} else if($c[$i]=="6"){
					$curso = $curso . 'Francés'.'<br>';
				}
				//echo $c[$i].'--';
			}
			//$horario = $horario.'DIA: '.$row['dia'].'<br> Inicia: '.$row['inicio'].'<br> Finaliza: '.$row['fin'].'<br>';
			$t = $t.$row['dia']."#".$row['inicio']."#".$row['fin']."#".$alumno."#".$curso."#%";
			
		}
		//$t = $t.'<tr><td style="width:40%;">HORARIO</td><td>'.$horario."</td></tr>";
		//return $t.'</table>';
		return $t;
	}

	function HorarioDisponibleAsesor($id){
		include('conexion.php');
		$query = "SELECT * FROM antereserva WHERE asesor='$id' ORDER BY dia DESC ";
		mysqli_set_charset($mysqli, 'utf8'); 
		$result = mysqli_query($mysqli, $query);
		//$t = '<br><table style="margin-left:20px; width:90%;">';
		
		while ($row = $result->fetch_array()){
			$d = $this->NombreAlumno($row['alumno']);
			$d2 = explode("#",$d);
			$alumno = $d2[0];
			$c = explode("#",$row['curso']);
			$curso=''; $servicio='';
			for($i=0; $i<sizeof($c); $i++){
				if($c[$i]=="1"){
					$curso = $curso . 'Matemática'.'<br>';
				} else if($c[$i]=="2"){
					$curso = $curso . 'Lengua'.'<br>';
				} else if($c[$i]=="3"){
					$curso = $curso . 'Ciencias Naturales'.'<br>';
				} else if($c[$i]=="4"){
					$curso = $curso . 'Ciencias sociales'.'<br>';
				} else if($c[$i]=="5"){
					$curso = $curso . 'Inglés'.'<br>';
				} else if($c[$i]=="6"){
					$curso = $curso . 'Francés'.'<br>';
				}
				//echo $c[$i].'--';
			}
			//$horario = $horario.'DIA: '.$row['dia'].'<br> Inicia: '.$row['inicio'].'<br> Finaliza: '.$row['fin'].'<br>';
			$t = $t.$row['dia']."#".$row['inicio']."#".$row['fin']."#".$alumno."#".$curso."#%";
			
		}
		//$t = $t.'<tr><td style="width:40%;">HORARIO</td><td>'.$horario."</td></tr>";
		//return $t.'</table>';
		return $t;
	}

	function Asistencia($fecha){
		include('conexion.php');
    
        $query = "SELECT * FROM asistencia ";
        mysqli_set_charset($mysqli, 'utf8'); 
    	$result = mysqli_query($mysqli, $query);
		
		$tabla = '<div class="table-responsive"><table class="table table-bordered table-striped">';
		$tabla = $tabla . '<thead><tr style="background:#ffffff;"><td>FECHA</td><td>EMPLEADO</td><td>HORA INGRESO</td>';
		$tabla = $tabla . '<td>HORA SALIDA</td></tr></thead>';
		$tabla = $tabla . '<tbody>';
    	while ($row = $result->fetch_array()){
			$nombre = $this->NombreUsuario($row['empleado']);
			$tabla = $tabla . '<tr><td>'.$row['fecha'].'</td><td>'.$nombre.'</td>';
			$tabla = $tabla . '<td>'.$row['hora_inicio'].'</td><td>'.$row['hora_fin'].'</td></tr>';
    	}
    	$tabla = $tabla . '</tbody></table></div>';
    	return $tabla;
	}

	function Padres(){
		include('conexion.php');
    
        $query = "SELECT * FROM padres ";
        mysqli_set_charset($mysqli, 'utf8'); 
    	$result = mysqli_query($mysqli, $query);
		
		$tabla = '<div class="table-responsive"><table class="table table-bordered table-striped">';
		$tabla = $tabla . '<thead><tr style="background:#ffffff;"><td>APELLIDOS</td><td>NOMBRES</td><td>NACIONALIDAD</td><td>NRO DOCUMENTO</td>';
		$tabla = $tabla . '<td>DIRECCION</td><td>DISTRITO</td>';
		$tabla = $tabla . '<td>CORREO</td><td>CELULAR</td><td>EDITAR</td><td>HIJOS</td></tr></thead>';
		$tabla = $tabla . '<tbody>';
    	while ($row = $result->fetch_array()){
			
			$tabla = $tabla . '<tr><td>'.$row['apellidos'].'</td><td>'.$row['nombre'].'</td>';
			$tabla = $tabla . '<td>'.$row['nacionalidad'].'</td>';
			$tabla = $tabla . '<td>'.$row['documento'].'</td><td>'.$row['direccion'].'</td>';
			$tabla = $tabla . '<td>'.$row['distrito'].'</td><td>'.$row['correo'].'</td>';
			$tabla = $tabla . '<td>'.$row['celular'].'</td>';
			$tabla = $tabla . '<td><img onclick="EditarPadres('.$row['id'].')" src="imagenes/editar.png"></td>';
			$tabla = $tabla . '<td><button onclick="AgregarHijos()" type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal_beneficios">HIJOS</button></td></tr>';
    	}
    	$tabla = $tabla . '</tbody></table></div>';
    	return $tabla;
	}
	//table datatable-basic
	

	function GuardaPadres($apellidos,$nombre,$nacionalidad,$documento,$direccion,$distrito,$correo,$celular,$password){
		include('conexion.php');

		$apellidos = utf8_decode($apellidos);
		$nombre = utf8_decode($nombre);
		$direccion = utf8_decode($direccion);
		$distrito = utf8_decode($distrito);
    								
        $sql = "INSERT INTO padres (APELLIDOS,NOMBRES,DOCUMENTO,DIRECCION,DISTRITO,CORREO,CELULAR,CONTRASENA) 
        VALUES ('$apellidos','$nombre','$documento','$direccion','$distrito','$correo','$celular','$password')";
        
        if (!$resultado = $mysqli->query($sql)) {
    	    // ¡Oh, no! La consulta falló. 
    	    echo "Lo sentimos, este sitio web está experimentando problemas.";
    	
    	    // De nuevo, no hacer esto en un sitio público, aunque nosotros mostraremos
    	    // cómo obtener información del error
    	    echo "Error: La ejecución de la consulta falló debido a: \n";
    	    echo "Query: " . $sql . "\n";
    	    echo "Errno: " . $mysqli->errno . "\n";
    	    echo "Error: " . $mysqli->error . "\n";
    	    
    	    exit;
    	} else {
    		echo mysqli_insert_id($mysqli);
    		//echo "Ingresado"."\n";
    	    
    	}
	} 

	function GuardaAlumnos($id,$apellidos,$nombre,$distrito,$grado,$direccion,$colegio,$codcolegio){
		include('conexion.php');

		$apellidos = utf8_decode($apellidos);
		$nombre = utf8_decode($nombre);
		$distrito = utf8_decode($distrito);
		$colegio = utf8_decode($colegio);
    								
        $sql = "INSERT INTO alumnos (ID_PADRE,APELLIDOS,NOMBRE,DISTRITO,GRADO,DIRECCION,COLEGIO,CODCOLEGIO) 
        VALUES ('$id','$apellidos','$nombre','$distrito','$grado','$direccion','$colegio','$codcolegio')";
        
        if (!$resultado = $mysqli->query($sql)) {
    	    // ¡Oh, no! La consulta falló. 
    	    echo "Lo sentimos, este sitio web está experimentando problemas.";
    	
    	    // De nuevo, no hacer esto en un sitio público, aunque nosotros mostraremos
    	    // cómo obtener información del error
    	    echo "Error: La ejecución de la consulta falló debido a: \n";
    	    echo "Query: " . $sql . "\n";
    	    echo "Errno: " . $mysqli->errno . "\n";
    	    echo "Error: " . $mysqli->error . "\n";
    	    
    	    exit;
    	} else {
    		$sql2 = "UPDATE padres SET direccion='$direccion', distrito='$distrito' WHERE id='$id' ";
			
			if (!$resultado = $mysqli->query($sql2)) {
				// ¡Oh, no! La consulta falló. 
				echo "Lo sentimos, este sitio web está experimentando problemas.";
			
				// De nuevo, no hacer esto en un sitio público, aunque nosotros mostraremos
				// cómo obtener información del error
				echo "Error: La ejecución de la consulta falló debido a: \n";
				echo "Query: " . $sql . "\n";
				echo "Errno: " . $mysqli->errno . "\n";
				echo "Error: " . $mysqli->error . "\n";
				
				exit;
			} else {
				
				echo "Ingresado"."\n";
				
			}
    		echo "Ingresado"."\n";
    	    
    	}
	}

	function Asesores($estado){
		include('../model/conexion.php');

		$query = "SELECT * FROM asesores WHERE estado='$estado' ";
		mysqli_set_charset($mysqli, 'utf8'); 
		$result = mysqli_query($mysqli, $query);
		
		$tabla = '<table class="table datatable-basic">';
		$tabla = $tabla . '<thead><tr><td>APELLIDOS</td><td>NOMBRES</td><td>NACIONALIDAD</td><td>NRO DOCUMENTO</td>';
		$tabla = $tabla . '<td>DIRECCION</td><td>DISTRITO</td>';
		$tabla = $tabla . '<td>CORREO</td><td>CELULAR</td><td>EDITAR</td><td>HIJOS</td></tr></thead>';
		$tabla = $tabla . '<tbody>';
		while ($row = $result->fetch_array()){
			
			$tabla = $tabla . '<tr><td>'.$row['apellidos'].'</td><td>'.$row['nombres'].'</td>';
			$tabla = $tabla . '<td>'.$row['nacionalidad'].'</td>';
			$tabla = $tabla . '<td>'.$row['documento'].'</td><td>'.$row['direccion'].'</td>';
			$tabla = $tabla . '<td>'.$row['distrito'].'</td><td>'.$row['correo'].'</td>';
			$tabla = $tabla . '<td>'.$row['celular'].'</td>';
			$tabla = $tabla . '<td><img onclick="EditarAsesores('.$row['id'].')" src="imagenes/editar.png"></td>';
			$tabla = $tabla . '<td><button onclick="Alumnos()" type="button" class="btn btn-danger" >ALUMNOS</button></td></tr>';
		}
		$tabla = $tabla . '</tbody></table>';
		echo $tabla;
	}

	function Asesores2($id){
		include('../model/conexion.php');

		$query = "SELECT * FROM asesores WHERE id='$id' ";
		mysqli_set_charset($mysqli, 'utf8'); 
		$result = mysqli_query($mysqli, $query);
		
		$tabla = '';
		while ($row = $result->fetch_array()){
			
			$tabla = $tabla . $row['apellidos'].'#'.$row['nombres'].'#';
			$tabla = $tabla . ''.$row['nacionalidad'].'#';
			$tabla = $tabla . ''.$row['documento'].'#'.$row['direccion'].'#';
			$tabla = $tabla . ''.$row['distrito'].'#'.$row['correo'].'#';
			$tabla = $tabla . ''.$row['celular'].'#';
		}
		
		echo $tabla;
	}

	function GuardaAsesores($opcion,$id,$apellidos,$nombre,$nacionalidad,$documento,$direccion,
	$distrito,$correo,$celular,$estado){
		include('conexion.php');

		$apellidos = utf8_decode($apellidos);
		$nombre = utf8_decode($nombre);
		$direccion = utf8_decode($direccion);
		$distrito = utf8_decode($distrito);
		echo 'Opcion: '.$opcion;
    	if($opcion=="1"){
			$sql = "INSERT INTO asesores (APELLIDOS,NOMBRES,NACIONALIDAD,DOCUMENTO,DIRECCION,DISTRITO,
			CORREO,CELULAR,ESTADO,BANCO,CUENTA,CCI) 
			VALUES ('$apellidos','$nombre','$nacionalidad','$documento','$direccion','$distrito',
			'$correo','$celular','1','','','')";
			
			if (!$resultado = $mysqli->query($sql)) {
				// ¡Oh, no! La consulta falló. 
				echo "Lo sentimos, este sitio web está experimentando problemas.";
			
				// De nuevo, no hacer esto en un sitio público, aunque nosotros mostraremos
				// cómo obtener información del error
				echo "Error: La ejecución de la consulta falló debido a: \n";
				echo "Query: " . $sql . "\n";
				echo "Errno: " . $mysqli->errno . "\n";
				echo "Error: " . $mysqli->error . "\n";
				
				exit;
			} else {
				$idT = mysqli_insert_id($mysqli);
				echo $idT;
				
			}
		} else {
			$sql = "UPDATE asesores SET apellidos='$apellidos', nombres='$nombre', nacionalidad='$nacionalidad', documento='$documento',
			direccion='$direccion', distrito='$distrito', correo='$correo',
			celular='$celular', estado='$estado' WHERE id='$id' ";
			
			if (!$resultado = $mysqli->query($sql)) {
				// ¡Oh, no! La consulta falló. 
				echo "Lo sentimos, este sitio web está experimentando problemas.";
			
				// De nuevo, no hacer esto en un sitio público, aunque nosotros mostraremos
				// cómo obtener información del error
				echo "Error: La ejecución de la consulta falló debido a: \n";
				echo "Query: " . $sql . "\n";
				echo "Errno: " . $mysqli->errno . "\n";
				echo "Error: " . $mysqli->error . "\n";
				
				exit;
			} else {
				
				echo "Ingresado"."\n";
				
			}
		}						
        
	} 

	function GuardaAsesores2($apellidos,$nombre,$nacionalidad,$documento,$direccion,
	$distrito,$correo,$celular,$carrera,$universidad,$password){
		include('conexion.php');

		$apellidos = utf8_decode($apellidos);
		$nombre = utf8_decode($nombre);
		$direccion = utf8_decode($direccion);
		$distrito = utf8_decode($distrito);
		$carrera = utf8_decode($carrera);
		$universidad = utf8_decode($universidad);

		$opcion=1;
    	if($opcion=="1"){
			$sql = "INSERT INTO asesores (APELLIDOS,NOMBRES,DOCUMENTO,DIRECCION,DISTRITO,
			CORREO,CELULAR,ESTADO,CARRERA,UNIVERSIDAD,BANCO,CUENTA,CCI,CONTRASENA) 
			VALUES ('$apellidos','$nombre','$documento','$direccion','$distrito','$correo',
			'$celular','3','$carrera','$universidad','','','','$password')";
			
			if (!$resultado = $mysqli->query($sql)) {
				// ¡Oh, no! La consulta falló. 
				echo "Lo sentimos, este sitio web está experimentando problemas.";
			
				// De nuevo, no hacer esto en un sitio público, aunque nosotros mostraremos
				// cómo obtener información del error
				echo "Error: La ejecución de la consulta falló debido a: \n";
				echo "Query: " . $sql . "\n";
				echo "Errno: " . $mysqli->errno . "\n";
				echo "Error: " . $mysqli->error . "\n";
				
				exit;
			} else {
				$idT = mysqli_insert_id($mysqli);
				echo $idT;
				
			}
		} else {
			$sql = "UPDATE asesores SET apellidos='$apellidos', nombres='$nombre', nacionalidad='$nacionalidad', documento='$documento',
			direccion='$direccion', distrito='$distrito', correo='$correo',
			celular='$celular', estado='$estado' WHERE id='$id' ";
			
			if (!$resultado = $mysqli->query($sql)) {
				// ¡Oh, no! La consulta falló. 
				echo "Lo sentimos, este sitio web está experimentando problemas.";
			
				// De nuevo, no hacer esto en un sitio público, aunque nosotros mostraremos
				// cómo obtener información del error
				echo "Error: La ejecución de la consulta falló debido a: \n";
				echo "Query: " . $sql . "\n";
				echo "Errno: " . $mysqli->errno . "\n";
				echo "Error: " . $mysqli->error . "\n";
				
				exit;
			} else {
				
				echo "Ingresado"."\n";
				
			}
		}						
        
	} 

	function ConsultaHijos($id){
		include('conexion.php');
    
        $query = "SELECT * FROM alumnos WHERE id_padre='$id' ";
        mysqli_set_charset($mysqli, 'utf8'); 
    	$result = mysqli_query($mysqli, $query);
		
		$tabla = '<select id="hijosa1" onclick="Precio()" class="form-control select">';
		while ($row = $result->fetch_array()){
			$tabla = $tabla.'<option value="'.$row['id'].'">'.$row['apellidos'] . ", " . $row['nombre']. '</option>';
			
    	}
		$tabla = $tabla.'</select>';

		return $tabla;
	}

	function ConsultaColegios(){
		include('conexion.php');
    
        $query = "SELECT * FROM colegios2 ORDER BY colegio ";
        mysqli_set_charset($mysqli, 'utf8'); 
    	$result = mysqli_query($mysqli, $query);
		
		$tabla = '<select id="colegioa1" onclick="Plan()" class="form-control select">
		<option value="0">Colegio</option>';
		while ($row = $result->fetch_array()){
			$tabla = $tabla.'<option value="'.$row['id'].'">'.$row['colegio'].'</option>';
			
    	}
		$tabla = $tabla.'</select>';

		return $tabla;
	}

	function ConsultaDistritos(){
		include('conexion.php');
    
        $query = "SELECT * FROM distritos ";
        mysqli_set_charset($mysqli, 'utf8'); 
    	$result = mysqli_query($mysqli, $query);
		
		$tabla = '<select id="distritosa" onclick="ExtraerHorarios()" class="form-control select">
		<option value="0">Distrito de residencia</option>';
		while ($row = $result->fetch_array()){
			$tabla = $tabla.'<option value="'.$row['id'].'">'.$row['distrito'].'</option>';
			
    	}
		$tabla = $tabla.'</select>';
		
		return $tabla;
	}

	function ConsultaDistritos2(){
		include('conexion.php');
    
        $query = "SELECT * FROM distritos ";
        mysqli_set_charset($mysqli, 'utf8'); 
    	$result = mysqli_query($mysqli, $query);
		
		$tabla = '<select onclick="DistritosCobertura()" id="distritosa2" class="form-control select">
		<option value="0">Seleccionar distritos de cobertura</option>';
		while ($row = $result->fetch_array()){
			$tabla = $tabla.'<option value="'.$row['id'].'">'.$row['distrito'].'</option>';
			
    	}
		$tabla = $tabla.'</select>';
		
		return $tabla;
	}

	function Precio($id){
		include('conexion.php');
		
		$query = "SELECT * FROM alumnos WHERE id='$id'";
        mysqli_set_charset($mysqli, 'utf8'); 
    	$result = mysqli_query($mysqli, $query);
		
		while ($row = $result->fetch_array()){
			$cole = $row['codcolegio'];
		}

        $query2 = "SELECT * FROM colegios2 WHERE id='$cole'";
        mysqli_set_charset($mysqli, 'utf8'); 
    	$result2 = mysqli_query($mysqli, $query2);
		
		while ($row = $result2->fetch_array()){
			$tabla = $row['precio'];
		}
    	return $tabla;
	}

	function VerificarAsesor($asesor,$dias,$hora,$horaf){
		include('conexion.php');
		$query = "SELECT * FROM antereserva WHERE dia='$dias' AND horai='$hora' AND horaf='$horaf' AND asesor='$asesor' ";
		mysqli_set_charset($mysqli, 'utf8'); 
		$result = mysqli_query($mysqli, $query);
		
		$dif=0;
		while ($row = $result->fetch_array()){
			$i = $row['inicio'];
			$f = $row['fin'];

			$ii = explode(":",$i);
			$ff = explode(":",$f);
			if($ff[1]=='00'){
				$v2 = floatval($ff[0]);
			} else {
				$v2 = floatval($ff[0])+0.5;
			}

			if($ii[1]=='00'){
				$v1 = floatval($ii[0]);
			} else {
				$v1 = floatval($ii[0])+0.5;
			}
			
			$dif = $v2 - $v1;

		}

		return $dif;
	}

	function ComprobarHorario2(){
		$query = "SELECT * FROM horarios ";
		mysqli_set_charset($mysqli, 'utf8'); 
		$result = mysqli_query($mysqli, $query);
		$asesor = '';
			
		while ($row = $result->fetch_array()){
			$t = $t.$row['asesor']."#".$row['dia']."#".$row['hora']."#".$row['horaf']."#".$row['distrito']."#$";
		}

		return $t;
	}

	function ComprobarHorario($dias,$inicio,$fin,$distrito){
		include('conexion.php');
		$tabla='0'; $t='t';
		$m = 'm';
		for($i=intval($inicio); $i<intval($fin); $i++){
			$i2 = $i+1;
			$dif = intval($inicio) - $i;
			//echo "$ ".$i." - ".$i2."\n";
			$query = "SELECT * FROM horarios WHERE dia='$dias' AND hora='$i' AND horaf='$i2' AND distrito LIKE '%$distrito%' ";
			mysqli_set_charset($mysqli, 'utf8'); 
			$result = mysqli_query($mysqli, $query);
			$asesor = '';
			
			//echo $query."\n";
			$c=0;
			while ($row = $result->fetch_array()){
				$t = $row['asesor'];
				$c++;
				$m = $this->VerificarAsesor($row['asesor'],$dias,$i,$i2);
			}

			
			if($c==0){
				$tabla='0';
			} else {
				if($dif==0 && $t!="" && floatval($m)<=1){
					$tabla = $t;
				} else if($t==$tabla && $dif>0 && floatval($m)<=1){
					$tabla = $t;
				} else if($t!=$tabla && $dif>0){
					$tabla = '0';
				} else if($t==''){
					$tabla='0';
				}
			}

		}
		
		if($tabla=="00"){ $tabla = '0'; }

        return $t;
	}

	function SugerenciaHorario($asesor,$dias,$inicio,$fin,$distrito){
		include('conexion.php');
		//echo $asesor.'?';
		if($asesor=="0" || $asesor==""){
			$query = "SELECT * FROM horarios WHERE dia='$dias' AND distrito LIKE '%$distrito%' ";
		} else {
			$query = "SELECT * FROM horarios WHERE dia='$dias' AND asesor='$asesor' AND distrito LIKE '%$distrito%' ";
		}
		
		mysqli_set_charset($mysqli, 'utf8'); 
		$result = mysqli_query($mysqli, $query);
		while ($row = $result->fetch_array()){
			$m = $this->VerificarAsesor($row['asesor'],$dias,$i,$i2);
			$t = $row['dia']."#".$row['asesor']."#".$row['hora']."#".$row['horaf']."#".$m."#$";
			
		}
		
		return $t;
	
	}

	function Antereserva($padre,$alumno,$servicio,$curso,$idioma,$oidioma,$dia,$horai,$horaf,$inicio,$fin,$asesor,$distrito){
		include('conexion.php');

		$sql = "INSERT INTO antereserva (PADRE,ALUMNO,SERVICIO,CURSO,IDIOMA,ODIOMA,DIA,HORAI,
			HORAF,INICIO,FIN,ASESOR) 
			VALUES ('$padre','$alumno','$servicio','$curso','$idioma','$oidioma','$dia',
			'$horai','$horaf','$inicio','$fin','$asesor')";
			
			if (!$resultado = $mysqli->query($sql)) {
				// ¡Oh, no! La consulta falló. 
				echo "Lo sentimos, este sitio web está experimentando problemas.";
			
				// De nuevo, no hacer esto en un sitio público, aunque nosotros mostraremos
				// cómo obtener información del error
				echo "Error: La ejecución de la consulta falló debido a: \n";
				echo "Query: " . $sql . "\n";
				echo "Errno: " . $mysqli->errno . "\n";
				echo "Error: " . $mysqli->error . "\n";
				
				exit;
			} else {
				
				echo "Ingresado"."\n";
				
			}
			
			
			$in = round(floatval($horai)/100);
			$fi = round(floatval($horaf)/100);
			
			$ci = 1;
			$cf = intval($fi) - intval($in);

			for($i=$in; $i<=$fi-1; $i=$i+1){
				$fin2 = $i+1;
				if(intval($fin2)<10){ $fin2 = '0'.$fin2;}
				if($ci==1){
					$ee = explode(":",$inicio);
					$cin = intval($ee[0])."".$ee[1];
					$cif = intval($fin2).'00';
					
					$cin1 = $ee[0].":".$ee[1];
					$cif1 = $fin2.':00';
					//echo $cin1."-".$cif1.'-'.$cin.'-'.$cif.'<br>';
					
					$sql2 = "UPDATE horarios SET estado='1' WHERE asesor='$asesor' AND dia='$dia' AND hora='$cin' 
					AND horaf='$cif' AND distrito='$distrito'";
					
					if (!$resultado = $mysqli->query($sql2)) {
						echo "Lo sentimos, este sitio web está experimentando problemas.";
						echo "Error: La ejecución de la consulta falló debido a: \n";
						echo "Query: " . $sql . "\n";
						echo "Errno: " . $mysqli->errno . "\n";
						echo "Error: " . $mysqli->error . "\n";
						exit;
					} else {
						echo "Ingresado"."\n";
					}
				} else if($ci==$cf){
					$cin = $i.'00';
					$cif = $fin2.'00';
					$cin1 = $i.":00";
					if(intval($i)<10){ $cin1 = '0'.$i.":00";}
					$cif1 = $fin2.":00";
					echo $cin1."-".$cif1.'-'.$cin.'-'.$cif.'<br>';
					
					$sql2 = "UPDATE horarios SET estado='1' WHERE asesor='$asesor' AND dia='$dia' AND hora='$cin' 
					AND horaf='$cif' AND distrito='$distrito'";
					
					if (!$resultado = $mysqli->query($sql2)) {
						echo "Lo sentimos, este sitio web está experimentando problemas.";
						echo "Error: La ejecución de la consulta falló debido a: \n";
						echo "Query: " . $sql . "\n";
						echo "Errno: " . $mysqli->errno . "\n";
						echo "Error: " . $mysqli->error . "\n";
						exit;
					} else {
						echo "Ingresado"."\n";
					}

					$ee = explode(":",$fin);
					$cif = intval($ee[0])."".$ee[1];
					$cin = (intval($i)+1).'00';
					$cin1 = (intval($i)+1).":00";
					if(intval($i)+1<10){ $cin1 = '0'.$i.":00";}
					$cif1 = $ee[0].":".$ee[1];
					echo $cin1."-".$cif1.'-'.$cin.'-'.$cif.'<br>';
					
					$sql2 = "UPDATE horarios SET estado='1' WHERE asesor='$asesor' AND dia='$dia' AND hora='$cin' 
					AND horaf='$cif' AND distrito='$distrito'";
					
					if (!$resultado = $mysqli->query($sql2)) {
						echo "Lo sentimos, este sitio web está experimentando problemas.";
						echo "Error: La ejecución de la consulta falló debido a: \n";
						echo "Query: " . $sql . "\n";
						echo "Errno: " . $mysqli->errno . "\n";
						echo "Error: " . $mysqli->error . "\n";
						exit;
					} else {
						echo "Ingresado"."\n";
					}
				} else {
					$cin = $i.'00';
					$cif = $fin2.'00';
					$cin1 = $i.":00";
					if(intval($i)<10){ $cin1 = '0'.$i.":00";}
					$cif1 = $fin2.":00";
					echo $cin1."-".$cif1.'-'.$cin.'-'.$cif.'<br>';
					
					$sql2 = "UPDATE horarios SET estado='1' WHERE asesor='$asesor' AND dia='$dia' AND hora='$cin' 
					AND horaf='$cif' AND distrito='$distrito'";
					
					if (!$resultado = $mysqli->query($sql2)) {
						echo "Lo sentimos, este sitio web está experimentando problemas.";
						echo "Error: La ejecución de la consulta falló debido a: \n";
						echo "Query: " . $sql . "\n";
						echo "Errno: " . $mysqli->errno . "\n";
						echo "Error: " . $mysqli->error . "\n";
						exit;
					} else {
						echo "Ingresado"."\n";
					}
				}
				
				$ci=$ci+1;

				

			}
			$sql2 = "UPDATE horarios SET estado='1' WHERE asesor='$asesor' AND dia='$dia' AND hora='$horai' 
			AND horaf='$horaf' AND distrito='$distrito'";
			
			
        
	}

	function ResumenInfo($id,$alumno){
		include('conexion.php');
		$query = "SELECT * FROM antereserva WHERE padre='$id' ";
		mysqli_set_charset($mysqli, 'utf8'); 
		$result = mysqli_query($mysqli, $query);
		$t = '<table style="margin-left:20px; width:90%;">';
		
		while ($row = $result->fetch_array()){
			$d = $this->NombreAlumno($row['alumno']);
			$d2 = explode("#",$d);
			$alumno = $d2[0];
			$colegio = $d2[1];
			$c = explode("#",$row['curso']);
			$curso=''; $servicio='';
			for($i=0; $i<sizeof($c); $i++){
				if($c[$i]=="1"){
					$curso = $curso . 'Matemática'.'<br>';
				} else if($c[$i]=="2"){
					$curso = $curso . 'Lengua'.'<br>';
				} else if($c[$i]=="3"){
					$curso = $curso . 'Ciencias Naturales'.'<br>';
				} else if($c[$i]=="4"){
					$curso = $curso . 'Ciencias sociales'.'<br>';
				} else if($c[$i]=="5"){
					$curso = $curso . 'Inglés'.'<br>';
				} else if($c[$i]=="6"){
					$curso = $curso . 'Francés'.'<br>';
				}
				//echo $c[$i].'--';
			}
			$s = explode("#",$row['servicio']);
			for($i=0; $i<sizeof($s); $i++){
				if($s[$i]=="1"){
					$servicio = $servicio . 'Apoyo con tareas escolares'.'<br>';
				} else if($s[$i]=="2"){
					$servicio = $servicio . 'Repaso para exámenes/tareas'.'<br>';
				} else if($s[$i]=="3"){
					$servicio = $servicio . 'Refuerzo de idioma/curso'.'<br>';
				} else if($s[$i]=="4"){
					$servicio = $servicio . 'Adelanto de idioma/curso'.'<br>';
				}
				//echo $s[$i].'--';
			} 

			if($row['idioma']=="1"){
				$idioma="Español";
			} else if($row['idioma']=="2"){
				$idioma="Inglés";
			}

			$horario = 'DIA: '.$row['dia'].'<br> Inicia: '.$row['inicio'].'<br> Finaliza: '.$row['fin'];

			$t = $t.'<tr><td style="width:40%;">ALUMNO</td><td>'.$alumno."</td></tr>";
			$t = $t.'<tr><td style="width:40%;">COLEGIO</td><td>'.$colegio."</td></tr>";
			$t = $t.'<tr><td style="width:40%;">CURSOS</td><td>'.$curso."</td></tr>";
			$t = $t.'<tr><td style="width:40%;">SERVICIO</td><td>'.$servicio."</td></tr>";
			$t = $t.'<tr><td style="width:40%;">IDIOMAS</td><td>'.$idioma."</td></tr>";
			$t = $t.'<tr><td style="width:40%;">HORARIO</td><td>'.$horario."</td></tr>";
		}

		return $t.'</table>';
	}


	function ResumenInfo2($id,$alumno){
		include('conexion.php');
		$query = "SELECT * FROM antereserva WHERE padre='$id' ";
		mysqli_set_charset($mysqli, 'utf8'); 
		$result = mysqli_query($mysqli, $query);
		$t = '<table style="margin-left:20px; width:90%;">';
		
		while ($row = $result->fetch_array()){
			$d = $this->NombreAlumno($row['alumno']);
			$d2 = explode("#",$d);
			$alumno = $d2[0];
			$colegio = $d2[1];
			$c = explode("#",$row['curso']);
			$curso=''; $servicio='';
			for($i=0; $i<sizeof($c); $i++){
				if($c[$i]=="1"){
					$curso = $curso . 'Matemática'.'<br>';
				} else if($c[$i]=="2"){
					$curso = $curso . 'Lengua'.'<br>';
				} else if($c[$i]=="3"){
					$curso = $curso . 'Ciencias Naturales'.'<br>';
				} else if($c[$i]=="4"){
					$curso = $curso . 'Ciencias sociales'.'<br>';
				} else if($c[$i]=="5"){
					$curso = $curso . 'Inglés'.'<br>';
				} else if($c[$i]=="6"){
					$curso = $curso . 'Francés'.'<br>';
				}
				//echo $c[$i].'--';
			}
			$s = explode("#",$row['servicio']);
			for($i=0; $i<sizeof($s); $i++){
				if($s[$i]=="1"){
					$servicio = $servicio . 'Apoyo con tareas escolares'.'<br>';
				} else if($s[$i]=="2"){
					$servicio = $servicio . 'Repaso para exámenes/tareas'.'<br>';
				} else if($s[$i]=="3"){
					$servicio = $servicio . 'Refuerzo de idioma/curso'.'<br>';
				} else if($s[$i]=="4"){
					$servicio = $servicio . 'Adelanto de idioma/curso'.'<br>';
				}
				//echo $s[$i].'--';
			} 

			if($row['idioma']=="1"){
				$idioma="Español";
			} else if($row['idioma']=="2"){
				$idioma="Inglés";
			} else if($row['idioma']=="3"){
				$idioma="Alemán";
			} else if($row['idioma']=="4"){
				$idioma="Portugués";
			} else if($row['idioma']=="5"){
				$idioma="Italiano";
			}
			$t = $t.'<tr><td style="width:40%;">ALUMNO</td><td>'.$alumno."</td></tr>";
			$t = $t.'<tr><td style="width:40%;">COLEGIO</td><td>'.$colegio."</td></tr>";
			$t = $t.'<tr><td style="width:40%;">CURSOS</td><td>'.$curso."</td></tr>";
			$t = $t.'<tr><td style="width:40%;">SERVICIO</td><td>'.$servicio."</td></tr>";
			$t = $t.'<tr><td style="width:40%;">IDIOMAS</td><td>'.$idioma."</td></tr>";
		}

		return $t.'</table>';
	}

	function HorarioAsesor($asesor,$dia,$horai,$horaf,$inicio,$fin,$distrito,$periodo,$anio,$diaSemana){
		include('conexion.php');

		$query = "SELECT * FROM horarios_dias WHERE asesor='$asesor' AND dia_semana='$diaSemana' AND periodo='$periodo' AND anio='$anio' ";
		mysqli_set_charset($mysqli, 'utf8'); 
		$result = mysqli_query($mysqli, $query);
		
		$c=0;
		while ($row = $result->fetch_array()){
			$c++;
		}

		if($c==0){
			$sql = "INSERT INTO horarios_dias (ASESOR,DIA_SEMANA,INICIO,FIN,PERIODO,ANIO) 
			VALUES ('$asesor','$diaSemana','$inicio','$fin','$periodo','$anio')";
					
			if (!$resultado = $mysqli->query($sql)) {
				echo "Lo sentimos, este sitio web está experimentando problemas.";
				echo "Error: La ejecución de la consulta falló debido a: \n";
				echo "Query: " . $sql . "\n";
				echo "Errno: " . $mysqli->errno . "\n";
				echo "Error: " . $mysqli->error . "\n";
				exit;
			} else {
				echo "Ingresado"."\n";
			}
		}
		

		$in = round(floatval($horai)/100);
        $fi = round(floatval($horaf)/100);
        
        $ci = 1;
        $cf = intval($fi) - intval($in);

        for($i=$in; $i<=$fi-1; $i=$i+1){
            $fin2 = $i+1;
            if(intval($fin2)<10){ $fin2 = '0'.$fin2;}
            if($ci==1){
                $ee = explode(":",$inicio);
                $cin = intval($ee[0])."".$ee[1];
                $cif = intval($fin2).'00';
                
                $cin1 = $ee[0].":".$ee[1];
                $cif1 = $fin2.':00';
				//echo $cin1."-".$cif1.'-'.$cin.'-'.$cif.'<br>';
				
				$sql = "INSERT INTO horarios (ASESOR,DIA,HORA,HORAF,INICIO,FIN,DISTRITO,ESTADO) 
				VALUES ('$asesor','$dia','$cin','$cif','$cin1','$cif1','$distrito','')";
				
				if (!$resultado = $mysqli->query($sql)) {
					echo "Lo sentimos, este sitio web está experimentando problemas.";
					echo "Error: La ejecución de la consulta falló debido a: \n";
					echo "Query: " . $sql . "\n";
					echo "Errno: " . $mysqli->errno . "\n";
					echo "Error: " . $mysqli->error . "\n";
					exit;
				} else {
					echo "Ingresado"."\n";
				}
            } else if($ci==$cf){
                $cin = $i.'00';
                $cif = $fin2.'00';
                $cin1 = $i.":00";
                if(intval($i)<10){ $cin1 = '0'.$i.":00";}
                $cif1 = $fin2.":00";
				echo $cin1."-".$cif1.'-'.$cin.'-'.$cif.'<br>';
				
				$sql = "INSERT INTO horarios (ASESOR,DIA,HORA,HORAF,INICIO,FIN,DISTRITO,ESTADO) 
				VALUES ('$asesor','$dia','$cin','$cif','$cin1','$cif1','$distrito','')";
				
				if (!$resultado = $mysqli->query($sql)) {
					echo "Lo sentimos, este sitio web está experimentando problemas.";
					echo "Error: La ejecución de la consulta falló debido a: \n";
					echo "Query: " . $sql . "\n";
					echo "Errno: " . $mysqli->errno . "\n";
					echo "Error: " . $mysqli->error . "\n";
					exit;
				} else {
					echo "Ingresado"."\n";
				}

                $ee = explode(":",$fin);
                $cif = intval($ee[0])."".$ee[1];
                $cin = (intval($i)+1).'00';
                $cin1 = (intval($i)+1).":00";
                if(intval($i)+1<10){ $cin1 = '0'.$i.":00";}
                $cif1 = $ee[0].":".$ee[1];
				echo $cin1."-".$cif1.'-'.$cin.'-'.$cif.'<br>';
				
				$sql = "INSERT INTO horarios (ASESOR,DIA,HORA,HORAF,INICIO,FIN,DISTRITO,ESTADO) 
				VALUES ('$asesor','$dia','$cin','$cif','$cin1','$cif1','$distrito','')";
				
				if (!$resultado = $mysqli->query($sql)) {
					echo "Lo sentimos, este sitio web está experimentando problemas.";
					echo "Error: La ejecución de la consulta falló debido a: \n";
					echo "Query: " . $sql . "\n";
					echo "Errno: " . $mysqli->errno . "\n";
					echo "Error: " . $mysqli->error . "\n";
					exit;
				} else {
					echo "Ingresado"."\n";
				}
            } else {
                $cin = $i.'00';
                $cif = $fin2.'00';
                $cin1 = $i.":00";
                if(intval($i)<10){ $cin1 = '0'.$i.":00";}
                $cif1 = $fin2.":00";
				echo $cin1."-".$cif1.'-'.$cin.'-'.$cif.'<br>';
				
				$sql = "INSERT INTO horarios (ASESOR,DIA,HORA,HORAF,INICIO,FIN,DISTRITO,ESTADO) 
				VALUES ('$asesor','$dia','$cin','$cif','$cin1','$cif1','$distrito','')";
				
				if (!$resultado = $mysqli->query($sql)) {
					echo "Lo sentimos, este sitio web está experimentando problemas.";
					echo "Error: La ejecución de la consulta falló debido a: \n";
					echo "Query: " . $sql . "\n";
					echo "Errno: " . $mysqli->errno . "\n";
					echo "Error: " . $mysqli->error . "\n";
					exit;
				} else {
					echo "Ingresado"."\n";
				}
            }
            
			$ci=$ci+1;

			

        }

		
	}

	function MostrarAsesor($asesor){
		include('conexion.php');
		
		$query = "SELECT * FROM asesores WHERE id='$asesor' ";
		mysqli_set_charset($mysqli, 'utf8'); 
		$result = mysqli_query($mysqli, $query);
		$asesor = '';
			
		while ($row = $result->fetch_array()){
			$asesor = $row['nombres']." ".$row['apellidos'];
		}

		return $asesor;
	}

	function GuardaConvocatorias($costos,$unidad,$puesto,$descripcion,$requisitos,$salario){
		include('conexion.php');

		$unidad = utf8_decode($unidad);
		$puesto = utf8_decode($puesto);
		$descripcion = utf8_decode($descripcion);
		$requisitos = utf8_decode($requisitos);
    								
        $sql = "INSERT INTO convocatorias (CENTRO_COSTOS,UNIDAD,PUESTO,DESCRIPCION,REQUISITOS,SALARIO) 
        VALUES ('$costos','$unidad','$puesto','$descripcion','$requisitos','$salario')";
        
        if (!$resultado = $mysqli->query($sql)) {
    	    // ¡Oh, no! La consulta falló. 
    	    echo "Lo sentimos, este sitio web está experimentando problemas.";
    	
    	    // De nuevo, no hacer esto en un sitio público, aunque nosotros mostraremos
    	    // cómo obtener información del error
    	    echo "Error: La ejecución de la consulta falló debido a: \n";
    	    echo "Query: " . $sql . "\n";
    	    echo "Errno: " . $mysqli->errno . "\n";
    	    echo "Error: " . $mysqli->error . "\n";
    	    
    	    exit;
    	} else {
    		
    		echo "Ingresado"."\n";
    	    
    	}
	} 

	function GuardaConvocatorias2($id,$costos,$unidad,$puesto,$descripcion,$requisitos,$salario){
		include('conexion.php');
		
		$unidad = utf8_decode($unidad);
		$puesto = utf8_decode($puesto);
		$descripcion = utf8_decode($descripcion);
		$requisitos = utf8_decode($requisitos);
		
		
        $sql = "UPDATE convocatorias SET centro_costos='$costos', unidad='$unidad', puesto='$puesto',
		descripcion='$descripcion', requisitos='$requisitos', 
		salario='$salario' WHERE id='$id' ";
        
        if (!$resultado = $mysqli->query($sql)) {
    	    // ¡Oh, no! La consulta falló. 
    	    echo "Lo sentimos, este sitio web está experimentando problemas.";
    	
    	    // De nuevo, no hacer esto en un sitio público, aunque nosotros mostraremos
    	    // cómo obtener información del error
    	    echo "Error: La ejecución de la consulta falló debido a: \n";
    	    echo "Query: " . $sql . "\n";
    	    echo "Errno: " . $mysqli->errno . "\n";
    	    echo "Error: " . $mysqli->error . "\n";
    	    
    	    exit;
    	} else {
    		
    		echo "Ingresado"."\n";
    	    
    	}
	}

	function Descansos(){
		include('conexion.php');
    
        $query = "SELECT * FROM descansos ";
        mysqli_set_charset($mysqli, 'utf8'); 
    	$result = mysqli_query($mysqli, $query);
		
		$tabla = '<div class="table-responsive"><table class="table table-bordered table-striped">';
		$tabla = $tabla . '<thead><tr style="background:#ffffff;"><td>EMPLEADO</td><td>FECHA INICIO</td><td>FECHA FIN</td>';
		$tabla = $tabla . '<td>DOCUMENTO</td><td>EDITAR</td></tr></thead>';
		$tabla = $tabla . '<tbody>';
    	while ($row = $result->fetch_array()){
			$direccion = '<a href="files/'.$row['direccion'].'" target="_blank">'.$row['direccion'].'</a>';
			$tabla = $tabla . '<tr><td>'.$row['empleado'].'</td><td>'.$row['fecha_inicio'].'</td>';
			$tabla = $tabla . '<td>'.$row['fecha_fin'].'</td><td>'.$direccion.'</td>';
			$tabla = $tabla . '<td><img onclick="EditarDescanso('.$row['id'].')" src="imagenes/editar.png"></td></tr>';
    	}
    	$tabla = $tabla . '</tbody></table></div>';
    	return $tabla;
	}

	function Descansos2($id){
		include('conexion.php');
    
        $query = "SELECT * FROM descansos WHERE id='$id' ";
        mysqli_set_charset($mysqli, 'utf8'); 
    	$result = mysqli_query($mysqli, $query);
		
		while ($row = $result->fetch_array()){
			$direccion = '<a href="files/'.$row['direccion'].'" target="_blank">'.$row['direccion'].'</a>';
			$tabla = $tabla . $row['empleado'].'#';
			$tabla = $tabla . $row['fecha_inicio'].'#'.$row['fecha_fin'].'#';
			$tabla = $tabla . $direccion.'#';
			
    	}
    	return $tabla;
	}

	function GuardaFrase($detalle){
		include('conexion.php');
		
		$detalle = utf8_decode($detalle);

        $sql = "INSERT INTO frases (DETALLE) 
        VALUES ('$detalle')";
        
        if (!$resultado = $mysqli->query($sql)) {
    	    // ¡Oh, no! La consulta falló. 
    	    echo "Lo sentimos, este sitio web está experimentando problemas.";
    	
    	    // De nuevo, no hacer esto en un sitio público, aunque nosotros mostraremos
    	    // cómo obtener información del error
    	    echo "Error: La ejecución de la consulta falló debido a: \n";
    	    echo "Query: " . $sql . "\n";
    	    echo "Errno: " . $mysqli->errno . "\n";
    	    echo "Error: " . $mysqli->error . "\n";
    	    
    	    exit;
    	} else {
    		
    		echo "Ingresado"."\n";
    	    
    	}
	} 

	function Frases(){
		include('conexion.php');
    
        $query = "SELECT * FROM frases ";
        mysqli_set_charset($mysqli, 'utf8'); 
    	$result = mysqli_query($mysqli, $query);
		
		$tabla = '<div class="table-responsive"><table class="table table-bordered table-striped">';
		$tabla = $tabla . '<thead><tr style="background:#ffffff;"><td>DETALLE</td><td>IMAGEN</td>';
		$tabla = $tabla . '<td>EDITAR</td></tr></thead>';
		$tabla = $tabla . '<tbody>';
    	while ($row = $result->fetch_array()){
			$direccion = '<a href="files/'.$row['imagen'].'" target="_blank">'.$row['imagen'].'</a>';
			$tabla = $tabla . '<tr><td>'.$row['detalle'].'</td><td>'.$direccion.'</td>';
			$tabla = $tabla . '<td><img onclick="EditarFrase('.$row['id'].')" src="imagenes/editar.png"></td></tr>';
    	}
    	$tabla = $tabla . '</tbody></table></div>';
    	return $tabla;
	}

	function Unidad($id){
		include('conexion.php');
		//echo $id;
        $query = "SELECT * FROM unidad WHERE centro_costos='$id'";
        mysqli_set_charset($mysqli, 'utf8'); 
    	$result = mysqli_query($mysqli, $query);
		
		$tabla = '<select id="iunidad"><option value="0">Seleccione</option>';
		
    	while ($row = $result->fetch_array()){
			$tabla = $tabla . '<option value="'.$row['id'].'">'.$row['descripcion'].'</option>';
    	}
    	$tabla = $tabla . '</select>';
    	return $tabla;
	}

	function Unidad2($id){
		include('conexion.php');
		//echo $id;
        $query = "SELECT * FROM unidad WHERE centro_costos='$id'";
        mysqli_set_charset($mysqli, 'utf8'); 
    	$result = mysqli_query($mysqli, $query);
		
		$tabla = '<select id="iunidad"><option value="0">Seleccione</option>';
		
    	while ($row = $result->fetch_array()){
			$tabla = $tabla . '<option value="'.$row['id'].'" selected>'.$row['descripcion'].'</option>';
    	}
    	$tabla = $tabla . '</select>';
    	return $tabla;
	}

	function Unidad3($centro,$id){
		include('conexion.php');
		//echo $id;
        $query = "SELECT * FROM unidad WHERE centro_costos='$centro'";
        mysqli_set_charset($mysqli, 'utf8'); 
    	$result = mysqli_query($mysqli, $query);
		
		$tabla = '<select id="iunidad"><option value="0">Seleccione</option>';
		
    	while ($row = $result->fetch_array()){
			if($row['id']==$id){
				$tabla = $tabla . '<option value="'.$row['id'].'" selected>'.$row['descripcion'].'</option>';
			} else {
				$tabla = $tabla . '<option value="'.$row['id'].'">'.$row['descripcion'].'</option>';
			}
			
    	}
    	$tabla = $tabla . '</select>';
    	return $tabla;
	}

	function CentroCostos(){
		include('conexion.php');
    
        $query = "SELECT * FROM centro_costos";
        mysqli_set_charset($mysqli, 'utf8'); 
    	$result = mysqli_query($mysqli, $query);
		
		$tabla = '<select id="icostos" onclick="CambioCentroCostos()">';
		//$tabla = '<select id="icostos" onclick="CambioCentroCostos()"><option value="0">Seleccione</option>';
		
    	while ($row = $result->fetch_array()){
			$tabla = $tabla . '<option value="'.$row['id'].'">'.$row['descripcion'].'</option>';
			
    	}
    	$tabla = $tabla . '</select>';
    	return $tabla;
	}

	function CentroCostos2($id){
		include('conexion.php');
    
        $query = "SELECT * FROM centro_costos WHERE id='$id'";
        mysqli_set_charset($mysqli, 'utf8'); 
    	$result = mysqli_query($mysqli, $query);
		
		$tabla = '<select id="icostos" onclick="CambioCentroCostos()">';
		//$tabla = '<select id="icostos" onclick="CambioCentroCostos()"><option value="0">Seleccione</option>';
		
    	while ($row = $result->fetch_array()){
			$tabla = $tabla . '<option value="'.$row['id'].'" selected>'.$row['descripcion'].'</option>';
			
    	}
    	$tabla = $tabla . '</select>';
    	return $tabla;
	}

	function CentroCostos3($id){
		include('conexion.php');
    
        $query = "SELECT * FROM centro_costos ";
        mysqli_set_charset($mysqli, 'utf8'); 
    	$result = mysqli_query($mysqli, $query);
		
		$tabla = '<select id="icostos" onclick="CambioCentroCostos()">';
		//$tabla = '<select id="icostos" onclick="CambioCentroCostos()"><option value="0">Seleccione</option>';
		
    	while ($row = $result->fetch_array()){
			if($row['id']==$id){
				$tabla = $tabla . '<option value="'.$row['id'].'" selected>'.$row['descripcion'].'</option>';
			} else {
				$tabla = $tabla . '<option value="'.$row['id'].'">'.$row['descripcion'].'</option>';
			}
			
    	}
    	$tabla = $tabla . '</select>';
    	return $tabla;
	}


	function Reglamentos(){
		include('conexion.php');
    
        $query = "SELECT * FROM reglamento ";
        mysqli_set_charset($mysqli, 'utf8'); 
    	$result = mysqli_query($mysqli, $query);
		
		$tabla = '<div class="table-responsive"><table class="table table-bordered table-striped">';
		$tabla = $tabla . '<thead><tr style="background:#ffffff;"><td>CENTRO DE COSTOS</td><td>UNIDAD</td>';
		$tabla = $tabla . '<td>ARCHIVO</td><td>EDITAR</td></tr></thead>';
		$tabla = $tabla . '<tbody>';
    	while ($row = $result->fetch_array()){
			$costo = $this->NombreCentro($row['centro_costos']);
			$unidad = $this->NombreUnidad($row['unidad']);

			$direccion = '<a href="files/'.$row['archivo'].'" target="_blank">'.$row['archivo'].'</a>';
			$tabla = $tabla . '<tr><td>'.$costo.'</td><td>'.$unidad.'</td><td>'.$direccion.'</td>';
			$tabla = $tabla . '<td><img onclick="EditarReglamentos('.$row['id'].')" src="imagenes/editar.png"></td></tr>';
    	}
    	$tabla = $tabla . '</tbody></table></div>';
    	return $tabla;
	}


	function Reglamentos2(){
		include('conexion.php');
    
        $query = "SELECT * FROM reglamento ";
        mysqli_set_charset($mysqli, 'utf8'); 
    	$result = mysqli_query($mysqli, $query);
		
		$tabla = '';
		while ($row = $result->fetch_array()){
			$costo = $this->CentroCostos2($row['centro_costos']);
			$unidad = $this->Unidad2($row['unidad']);
			$direccion = '<a href="files/'.$row['archivo'].'" target="_blank">'.$row['archivo'].'</a>';
			$tabla = $tabla . ''.$costo.'#'.$unidad.'#'.$direccion.'#';
			
    	}
		
		return $tabla;
	}

	function NombreCentro($id){
		include('conexion.php');
    
        $query = "SELECT * FROM centro_costos WHERE id='$id' ";
        mysqli_set_charset($mysqli, 'utf8'); 
		$result = mysqli_query($mysqli, $query);
		while ($row = $result->fetch_array()){
			$dat = $row['descripcion'];
		}
		return $dat;
	}

	function NombreUnidad($id){
		include('conexion.php');
    
        $query = "SELECT * FROM unidad WHERE id='$id' ";
        mysqli_set_charset($mysqli, 'utf8'); 
		$result = mysqli_query($mysqli, $query);
		while ($row = $result->fetch_array()){
			$dat = $row['descripcion'];
		}
		return $dat;
	}

	function NombreAlumno($id){
		include('conexion.php');
    
        $query = "SELECT * FROM alumnos WHERE id='$id' ";
        mysqli_set_charset($mysqli, 'utf8'); 
		$result = mysqli_query($mysqli, $query);
		while ($row = $result->fetch_array()){
			$dat = $row['nombre']." ".$row['apellidos']."#".$row['colegio']."#".$row['codcolegio']."#";
		}
		return $dat;
	}

	function NombrePadre($id){
		include('conexion.php');
    
        $query = "SELECT * FROM padres WHERE id='$id' ";
        mysqli_set_charset($mysqli, 'utf8'); 
		$result = mysqli_query($mysqli, $query);
		while ($row = $result->fetch_array()){
			$dat = $row['nombres']." ".$row['apellidos']."#";
		}
		return $dat;
	}

	function NombreAsesor($id){
		include('conexion.php');
    
        $query = "SELECT * FROM asesores WHERE id='$id' ";
        mysqli_set_charset($mysqli, 'utf8'); 
		$result = mysqli_query($mysqli, $query);
		while ($row = $result->fetch_array()){
			$dat = $row['nombres']." ".$row['apellidos'];
		}
		return $dat;
	}

	function NombreDistrito($id){
		include('conexion.php');
    
        $query = "SELECT * FROM distritos WHERE id='$id' ";
        mysqli_set_charset($mysqli, 'utf8'); 
		$result = mysqli_query($mysqli, $query);
		while ($row = $result->fetch_array()){
			$dat = $row['distrito'];
		}
		return $dat;
	}

	function Interes(){
		include('conexion.php');
    
        $query = "SELECT * FROM temas ";
        mysqli_set_charset($mysqli, 'utf8'); 
		$result = mysqli_query($mysqli, $query);
		
		
		$tabla = '<div class="table-responsive"><table class="table table-bordered table-striped">';
		$tabla = $tabla . '<thead><tr style="background:#ffffff;"><td>TITULO</td><td>DETALLE</td>';
		$tabla = $tabla . '<td>MATERIAL</td><td>EDITAR</td></tr></thead>';
		$tabla = $tabla . '<tbody>';
    	while ($row = $result->fetch_array()){
			$material = $this->MaterialXInteres($row['id']);

			$tabla = $tabla . '<tr><td>'.$row['titulo'].'</td><td>'.$row['detalle'].'</td><td>'.$material.'</td>';
			$tabla = $tabla . '<td><img onclick="EditarInteres('.$row['id'].')" src="imagenes/editar.png"></td></tr>';
		
		}
    	$tabla = $tabla . '</tbody></table></div>';
    	return $tabla;
	}

	function MaterialXInteres($id){
		include('conexion.php');
    
        $query = "SELECT * FROM materialesxtema WHERE tema = '$id' ";
        mysqli_set_charset($mysqli, 'utf8'); 
    	$result = mysqli_query($mysqli, $query);
		
		$tabla = '';
		while ($row = $result->fetch_array()){
			if(($row['tipo']=="1") OR ($row['tipo']=="2")){
				$direccion = '<a href="'.$row['detalle'].'"  target="_blank">'.$row['detalle'].'</a>';
			} else {
				$direccion = '<a href="files/'.$row['detalle'].'" target="_blank">'.$row['detalle'].'</a>';
			}
			
			$tabla = $tabla . ''.$direccion.'<br>';
			
    	}
		
		return $tabla;
	}

	function GuardaInteres($titulo,$detalle,$tipo,$material){
		include('conexion.php');
		
		$titulo = utf8_decode($titulo);
		$detalle = utf8_decode($detalle);

		$sql = "INSERT INTO temas (TITULO,DETALLE) VALUES ('$titulo','$detalle')";
                
                if (!$resultado = $mysqli->query($sql)) {
                    
                    echo "Lo sentimos, este sitio web está experimentando problemas.";
                    echo "Error: La ejecución de la consulta falló debido a: \n";
                    echo "Query: " . $sql . "\n";
                    echo "Errno: " . $mysqli->errno . "\n";
                    echo "Error: " . $mysqli->error . "\n";
                    
                    exit;
                } else {
                    $idT = mysqli_insert_id($mysqli);
                    echo 'EXITO';
                }
            
        $sql2 = "INSERT INTO materialesxtema (TEMA,TIPO,DETALLE) VALUES ('$idT','$tipo','$material')";
                
                if (!$resultado = $mysqli->query($sql2)) {
                    
                    echo "Lo sentimos, este sitio web está experimentando problemas.";
                    echo "Error: La ejecución de la consulta falló debido a: \n";
                    echo "Query: " . $sql . "\n";
                    echo "Errno: " . $mysqli->errno . "\n";
                    echo "Error: " . $mysqli->error . "\n";
                    
                    exit;
                } else {
                    //$id = mysqli_insert_id($mysqli);
                    echo 'EXITO';
                }
	}

	function Usuarios(){
		include('conexion.php');
    
        $query = "SELECT * FROM empleados ";
        mysqli_set_charset($mysqli, 'utf8'); 
		$result = mysqli_query($mysqli, $query);
		
		
		$tabla = '<div class="table-responsive"><table class="table table-bordered table-striped">';
		$tabla = $tabla . '<thead><tr style="background:#ffffff;"><td>APELLIDOS</td><td>NOMBRES</td>';
		$tabla = $tabla . '<td>DNI</td><td>CORREO</td><td>CENTRO COSTOS</td><td>UNIDAD</td><td>EDITAR</td></tr></thead>';
		$tabla = $tabla . '<tbody>';
    	while ($row = $result->fetch_array()){
			//$material = $this->MaterialXInteres($row['id']);
			$centro_costos = $this->Area($row['area']);
			$unidad = $this->SubArea($row['subarea']);

			$tabla = $tabla . '<tr><td>'.$row['apellidos'].'</td><td>'.$row['nombre'].'</td><td>'.$row['dni'].'</td>';
			$tabla = $tabla . '<td>'.$row['email'].'</td><td>'.$centro_costos.'</td><td>'.$unidad.'</td>';
			$tabla = $tabla . '<td><img onclick="EditarUsuarios('.$row['id'].')" src="imagenes/editar.png"></td></tr>';
		
		}
    	$tabla = $tabla . '</tbody></table></div>';
    	return $tabla;
	}

	function Usuarios2($id){
		include('conexion.php');
    
        $query = "SELECT * FROM empleados WHERE id='$id'";
        mysqli_set_charset($mysqli, 'utf8'); 
		$result = mysqli_query($mysqli, $query);
		
		
		$tabla = '';
    	while ($row = $result->fetch_array()){
			$tabla = $tabla . ''.$row['apellidos'].'#'.$row['nombre'].'#'.$row['dni'].'#';
			$tabla = $tabla . ''.$row['email'].'#';
			
		}
    	return $tabla;
	}

	function Area($id){
		include('conexion.php');
    
        $query = "SELECT * FROM centro_costos WHERE id='$id' ";
        mysqli_set_charset($mysqli, 'utf8'); 
		$result = mysqli_query($mysqli, $query);
		
		
		$tabla = '';
    	while ($row = $result->fetch_array()){
			$tabla = $row['descripcion'];
		}
    	return $tabla;
	}

	function Subarea($id){
		include('conexion.php');
    
        $query = "SELECT * FROM unidad WHERE centro_costos='$id' ";
        mysqli_set_charset($mysqli, 'utf8'); 
		$result = mysqli_query($mysqli, $query);
		
		
		$tabla = '';
    	while ($row = $result->fetch_array()){
			$tabla = $row['descripcion'];
		}
    	return $tabla;
	}


	function GuardaUsuarios($apellidos,$nombre,$dni,$correo,$centro,$unidad){
		include('conexion.php');
		
		$apellidos = utf8_decode($apellidos);
		$nombre = utf8_decode($nombre);
		$centro = utf8_decode($centro);
		$unidad = utf8_decode($unidad);
		
		$sql = "INSERT INTO empleados (APELLIDOS,NOMBRE,USUARIO,DNI,EMAIL,EMPRESA,SUCURSAL,AREA,SUBAREA) 
		VALUES ('$apellidos','$nombre','$nombre','$dni','$correo','1','1','$centro','$unidad')";
                
                if (!$resultado = $mysqli->query($sql)) {
                    
                    echo "Lo sentimos, este sitio web está experimentando problemas.";
                    echo "Error: La ejecución de la consulta falló debido a: \n";
                    echo "Query: " . $sql . "\n";
                    echo "Errno: " . $mysqli->errno . "\n";
                    echo "Error: " . $mysqli->error . "\n";
                    
                    exit;
                } else {
                    $idT = mysqli_insert_id($mysqli);
                    echo 'EXITO';
                }
	}

	function EditaUsuarios($id,$apellidos,$nombre,$dni,$correo,$centro,$unidad){
		include('conexion.php');
		
		$apellidos = utf8_decode($apellidos);
		$nombre = utf8_decode($nombre);
		$centro = utf8_decode($centro);
		$unidad = utf8_decode($unidad);
		
		
		$sql = "UPDATE empleados SET apellidos='$apellidos', nombre='$nombre', usuario='$nombre', 
		dni='$dni', email='$correo', area='$centro', subarea='$unidad' WHERE id='$id' ";
                
                if (!$resultado = $mysqli->query($sql)) {
                    
                    echo "Lo sentimos, este sitio web está experimentando problemas.";
                    echo "Error: La ejecución de la consulta falló debido a: \n";
                    echo "Query: " . $sql . "\n";
                    echo "Errno: " . $mysqli->errno . "\n";
                    echo "Error: " . $mysqli->error . "\n";
                    
                    exit;
                } else {
                    $idT = mysqli_insert_id($mysqli);
                    echo 'EXITO';
                }
	}

	function GuardaInfoPagos($id,$banco,$cuenta,$cci){
		include('conexion.php');
		
		$sql = "UPDATE asesores SET banco='$banco',  
		cuenta='$cuenta', cci='$cci' WHERE id='$id' ";
                
        if (!$resultado = $mysqli->query($sql)) {
                    
            echo "Lo sentimos, este sitio web está experimentando problemas.";
            echo "Error: La ejecución de la consulta falló debido a: \n";
            echo "Query: " . $sql . "\n";
            echo "Errno: " . $mysqli->errno . "\n";
            echo "Error: " . $mysqli->error . "\n";
                    
            exit;
         } else {
            echo 'EXITO';
        }
	}

	function InfoPagos($id){
		include('conexion.php');

		$query = "SELECT * FROM asesores WHERE id='$id'";
		mysqli_set_charset($mysqli, 'utf8'); 
		$result = mysqli_query($mysqli, $query);
		
		while ($row = $result->fetch_array()){
			$h = $row['banco'].'#'.$row['cuenta']."#".$row['cci']."#";
		}
    	return $h;
	}

	function InfoAsesorias($id,$periodo,$anio){
		include('conexion.php');

		$query = "SELECT * FROM horarios WHERE asesor='$id' ORDER BY dia DESC";
		mysqli_set_charset($mysqli, 'utf8'); 
		$result = mysqli_query($mysqli, $query);
		
		$distritos='';
		$horarios='';
		while ($row = $result->fetch_array()){
			//$horarios = $horarios.$row['dia'].'#'.$row['hora']."#".$row['horaf'].'#'.$row['inicio']."#".$row['fin']."#%";
			if($distritos!=$row['distrito']){
				$dist = $dist.$row['distrito']."#";
			}
			$distritos = $row['distrito'];
		}

		$query = "SELECT * FROM horarios_dias WHERE asesor='$id' AND periodo='$periodo' AND anio='$anio' ORDER BY dia_semana";
		mysqli_set_charset($mysqli, 'utf8'); 
		$result = mysqli_query($mysqli, $query);
		
		while ($row = $result->fetch_array()){
			$horarios = $horarios.$row['dia_semana'].'#'.$row['inicio']."#".$row['fin']."#%";
			
		}
    	return $dist."__".$horarios;
	}

	function PerfilAsesor($id){
		include('conexion.php');
    
        $query = "SELECT * FROM antereserva WHERE padre='$id' ORDER BY dia DESC ";
        mysqli_set_charset($mysqli, 'utf8'); 
		$result = mysqli_query($mysqli, $query);
		
		while ($row = $result->fetch_array()){
			$asesor = $row['asesor'];
		}

		$query = "SELECT * FROM asesores WHERE id='$asesor'";
        mysqli_set_charset($mysqli, 'utf8'); 
		$result = mysqli_query($mysqli, $query);

		//$imagen = '<br><center><img src="imagenes/asesores/'.$asesor.'.png" style="width:50%;"></center><br>';
		$imagen = '<br><center><img src="imagenes/asesores/usuario.jpg" style="width:20%;"></center><br>';
		$tabla = '<center><table class="table table-bordered table-striped">';
		
		while ($row = $result->fetch_array()){
			$tabla = $tabla . '<tr><td style="width:50%;">APELLIDOS: </td><td>'.$row['apellidos'].'</td></tr>';
			$tabla = $tabla . '<tr><td>NOMBRES: </td><td>'.$row['nombres'].'</td></tr>';
			$tabla = $tabla . '<tr><td>ESPECIALIDAD: </td><td>'.strtoupper($row['carrera']).'</td></tr>';
			$tabla = $tabla . '<tr><td>UNIVERSIDAD: </td><td>'.strtoupper($row['universidad']).'</td></tr>';
			
		}
    	$tabla = $tabla . '</table></center>';
    	return $imagen.$tabla;
	}

	function PerfilAsesor2($id){
		include('conexion.php');
    
        $query = "SELECT * FROM asesores WHERE id='$id'";
        mysqli_set_charset($mysqli, 'utf8'); 
		$result = mysqli_query($mysqli, $query);

		//$imagen = '<br><center><img src="imagenes/asesores/'.$asesor.'.png" style="width:50%;"></center><br>';
		$imagen = '<br><center><img src="imagenes/asesores/usuario.jpg" style="width:20%;"></center><br>';
		$tabla = '<center><table class="table table-bordered table-striped">';
		
		while ($row = $result->fetch_array()){
			$distrito = $this->NombreDistrito($row['distrito']);
			$tabla = $tabla . '<tr><td style="width:50%;">APELLIDOS: </td><td>'.$row['apellidos'].'</td></tr>';
			$tabla = $tabla . '<tr><td>NOMBRES: </td><td>'.$row['nombres'].'</td></tr>';
			$tabla = $tabla . '<tr><td>DNI: </td><td>'.$row['documento'].'</td></tr>';
			$tabla = $tabla . '<tr><td>DIRECCION: </td><td>'.strtoupper($row['direccion']).'</td></tr>';
			$tabla = $tabla . '<tr><td>DISTRITO: </td><td>'.strtoupper($distrito).'</td></tr>';
			$tabla = $tabla . '<tr><td>ESPECIALIDAD: </td><td>'.strtoupper($row['carrera']).'</td></tr>';
			$tabla = $tabla . '<tr><td>UNIVERSIDAD: </td><td>'.strtoupper($row['universidad']).'</td></tr>';
			
		}
    	$tabla = $tabla . '</table></center>';
    	return $imagen.$tabla;
	}

	

	function PerfilAsesor3($id){
		include('conexion.php');
    
        $query = "SELECT * FROM asesores WHERE id='$id'";
        mysqli_set_charset($mysqli, 'utf8'); 
		$result = mysqli_query($mysqli, $query);

		//$imagen = '<br><center><img src="imagenes/asesores/'.$asesor.'.png" style="width:50%;"></center><br>';
		$imagen = '<br><center></center><br>';
		$tabla = '<center><table class="table table-bordered table-striped">';
		
		while ($row = $result->fetch_array()){
			$distrito = $this->NombreDistrito($row['distrito']);
			$tabla = $tabla . '<tr><td rowspan="5" style="width:30%;"><img src="imagenes/asesores/usuario.jpg" style="width:80%;"></td>';
			$tabla = $tabla . '<td style="width:30%;">APELLIDOS: </td><td>'.$row['apellidos'].'</td></tr>';
			
			$tabla = $tabla . '<tr><td>NOMBRES: </td><td>'.$row['nombres'].'</td></tr>';
			$tabla = $tabla . '<tr><td>DNI: </td><td>'.$row['nombres'].'</td></tr>';
			$tabla = $tabla . '<tr><td>ESPECIALIDAD: </td><td>'.strtoupper($row['carrera']).'</td></tr>';
			$tabla = $tabla . '<tr><td>UNIVERSIDAD: </td><td>'.strtoupper($row['universidad']).'</td></tr>';
			
		}
    	$tabla = $tabla . '</table></center>';
    	return $imagen.$tabla;
	}

	function PerfilPadre($id){
		include('conexion.php');
    
        $query = "SELECT * FROM padres WHERE id='$id'";
        mysqli_set_charset($mysqli, 'utf8'); 
		$result = mysqli_query($mysqli, $query);

		//$imagen = '<br><center><img src="imagenes/asesores/'.$asesor.'.png" style="width:50%;"></center><br>';
		$imagen = '<br><center><img src="imagenes/asesores/usuario.jpg" style="width:20%;"></center><br>';
		$tabla = '<center><table class="table table-bordered table-striped">';
		
		while ($row = $result->fetch_array()){
			
			$tabla = $tabla . '<tr><td style="width:50%;">APELLIDOS: </td><td>'.$row['apellidos'].'</td></tr>';
			$tabla = $tabla . '<tr><td>NOMBRES: </td><td>'.$row['nombres'].'</td></tr>';
			$tabla = $tabla . '<tr><td>DNI: </td><td>'.$row['documento'].'</td></tr>';
			$tabla = $tabla . '<tr><td>DIRECCION: </td><td>'.strtoupper($row['direccion']).'</td></tr>';
			$tabla = $tabla . '<tr><td>DISTRITO: </td><td>'.strtoupper($row['distrito']).'</td></tr>';
			
			
		}
    	$tabla = $tabla . '</table></center>';
    	return $imagen.$tabla;
	}

	function MisAsesores($id){
		include('conexion.php');
    
        $query = "SELECT * FROM antereserva WHERE padre='$id'";
        mysqli_set_charset($mysqli, 'utf8'); 
		$result = mysqli_query($mysqli, $query);
		$ase='';
		$d = '<select id="iasesor">';
		$d2 = '<select id="iasesor2">';
		while ($row = $result->fetch_array()){
			if($ase!=$row['asesor']){
				$nombre = $this->NombreAsesor($row['asesor']);
				$d = $d.'<option value="'.$row['asesor'].'">'.$nombre.'</option>';
				$d2 = $d2.'<option value="'.$row['asesor'].'">'.$nombre.'</option>';
			}
			$ase = $row['asesor'];
		}
		
		$d = $d.'</select>';
		$d2 = $d2.'</select>';
    	return $d."##".$d2;
	}

	function GuardaCapacitaciones($nombre,$centro,$unidad){
		include('conexion.php');
		
		$nombre = utf8_decode($nombre);
		$centro = utf8_decode($centro);
		$unidad = utf8_decode($unidad);
		
		$sql = "INSERT INTO cursos (NOMBRE,EMPRESA,CENTRO_COSTOS,UNIDAD) 
		VALUES ('$nombre','1','$centro','$unidad')";
                
                if (!$resultado = $mysqli->query($sql)) {
                    
                    echo "Lo sentimos, este sitio web está experimentando problemas.";
                    echo "Error: La ejecución de la consulta falló debido a: \n";
                    echo "Query: " . $sql . "\n";
                    echo "Errno: " . $mysqli->errno . "\n";
                    echo "Error: " . $mysqli->error . "\n";
                    
                    exit;
                } else {
                    $idT = mysqli_insert_id($mysqli);
                    echo 'EXITO';
                }
	}

	function EditaCapacitaciones($id,$nombre,$centro,$unidad){
		include('conexion.php');
		
		$nombre = utf8_decode($nombre);
		$centro = utf8_decode($centro);
		$unidad = utf8_decode($unidad);
		
		
		$sql = "UPDATE cursos SET nombre='$nombre',  
		centro_costos='$centro', unidad='$unidad' WHERE id='$id' ";
                
                if (!$resultado = $mysqli->query($sql)) {
                    
                    echo "Lo sentimos, este sitio web está experimentando problemas.";
                    echo "Error: La ejecución de la consulta falló debido a: \n";
                    echo "Query: " . $sql . "\n";
                    echo "Errno: " . $mysqli->errno . "\n";
                    echo "Error: " . $mysqli->error . "\n";
                    
                    exit;
                } else {
                    //$idT = mysqli_insert_id($mysqli);
                    echo 'EXITO';
                }
	}

	function Inducciones(){
		include('conexion.php');
    
        $query = "SELECT * FROM inducciones ";
        mysqli_set_charset($mysqli, 'utf8'); 
		$result = mysqli_query($mysqli, $query);
		
		
		$tabla = '<div class="table-responsive"><table class="table table-bordered table-striped">';
		$tabla = $tabla . '<thead><tr style="background:#ffffff;"><td>CODIGO</td><td>NOMBRE</td>';
		$tabla = $tabla . '<td>CENTRO COSTOS</td><td>UNIDAD</td><td>EDITAR</td></tr></thead>';
		$tabla = $tabla . '<tbody>';
    	while ($row = $result->fetch_array()){
			//$material = $this->MaterialXInteres($row['id']);
			$centro_costos = $this->Area($row['centro_costos']);
			$unidad = $this->SubArea($row['unidad']);

			$tabla = $tabla . '<tr><td>'.$row['id'].'</td><td>'.$row['nombre'].'</td>';
			$tabla = $tabla . '<td>'.$centro_costos.'</td><td>'.$unidad.'</td>';
			$tabla = $tabla . '<td><img onclick="VerInducciones('.$row['id'].')" src="imagenes/ver.png"><img onclick="EditarInducciones('.$row['id'].')" src="imagenes/editar.png"></td></tr>';
		
		}
    	$tabla = $tabla . '</tbody></table></div>';
    	return $tabla;
	}

	function Inducciones2($id){
		include('conexion.php');
    
        $query = "SELECT * FROM inducciones WHERE id='$id'";
        mysqli_set_charset($mysqli, 'utf8'); 
		$result = mysqli_query($mysqli, $query);
		
		
		$tabla = '';
    	while ($row = $result->fetch_array()){
			$centro = $this->CentroCostos3($row['centro_costos']);
			$unidad = $this->Unidad3($row['centro_costos'],$row['unidad']);
			$tabla = $tabla . ''.$row['nombre'].'#';
			$tabla = $tabla . ''.$centro."#";
			$tabla = $tabla . ''.$unidad."#";
		}
    	return $tabla;
	}

	function GuardaInducciones($nombre,$centro,$unidad){
		include('conexion.php');
		
		$nombre = utf8_decode($nombre);
		$centro = utf8_decode($centro);
		$unidad = utf8_decode($unidad);
		
		$sql = "INSERT INTO inducciones (NOMBRE,EMPRESA,CENTRO_COSTOS,UNIDAD) 
		VALUES ('$nombre','1','$centro','$unidad')";
                
                if (!$resultado = $mysqli->query($sql)) {
                    
                    echo "Lo sentimos, este sitio web está experimentando problemas.";
                    echo "Error: La ejecución de la consulta falló debido a: \n";
                    echo "Query: " . $sql . "\n";
                    echo "Errno: " . $mysqli->errno . "\n";
                    echo "Error: " . $mysqli->error . "\n";
                    
                    exit;
                } else {
                    $idT = mysqli_insert_id($mysqli);
                    echo 'EXITO';
                }
	}

	function EditaInducciones($id,$nombre,$centro,$unidad){
		include('conexion.php');
		
		$nombre = utf8_decode($nombre);
		$centro = utf8_decode($centro);
		$unidad = utf8_decode($unidad);
		
		
		$sql = "UPDATE inducciones SET nombre='$nombre',  
		centro_costos='$centro', unidad='$unidad' WHERE id='$id' ";
                
                if (!$resultado = $mysqli->query($sql)) {
                    
                    echo "Lo sentimos, este sitio web está experimentando problemas.";
                    echo "Error: La ejecución de la consulta falló debido a: \n";
                    echo "Query: " . $sql . "\n";
                    echo "Errno: " . $mysqli->errno . "\n";
                    echo "Error: " . $mysqli->error . "\n";
                    
                    exit;
                } else {
                    //$idT = mysqli_insert_id($mysqli);
                    echo 'EXITO';
                }
	}

	function Sesiones($tipo,$curso){
		include('conexion.php');

		if($tipo=="1"){
			$query = "SELECT * FROM sesionesxcurso WHERE curso='$curso' ";
		} else {
			$query = "SELECT * FROM sesionesxinduccion WHERE induccion='$curso'";
		}
    
        
        mysqli_set_charset($mysqli, 'utf8'); 
		$result = mysqli_query($mysqli, $query);
		
		
		$tabla = '<div class="table-responsive"><table class="table table-bordered table-striped">';
		$tabla = $tabla . '<thead><tr style="background:#ffffff;"><td>COD. CURSO</td><td>NOMBRE</td>';
		$tabla = $tabla . '<td>EDITAR</td></tr></thead>';
		$tabla = $tabla . '<tbody>';
    	while ($row = $result->fetch_array()){
			if($tipo=="1"){
				$tabla = $tabla . '<tr><td>'.$row['curso'].'</td><td>'.$row['detalle'].'</td>';
			} else {
				$tabla = $tabla . '<tr><td>'.$row['induccion'].'</td><td>'.$row['detalle'].'</td>';
			}
			$tabla = $tabla . '<td><img onclick="VerSesiones('.$row['id'].')" src="imagenes/ver.png"><img onclick="EditarSesiones('.$row['id'].')" src="imagenes/editar.png"></td></tr>';
		
		}
    	$tabla = $tabla . '</tbody></table></div>';
    	return $tabla;
	}

	

	function GuardaSesiones($tipo,$curso,$nombre){
		include('conexion.php');
		
		$nombre = utf8_decode($nombre);
		
		if($tipo=="1"){
			$sql = "INSERT INTO sesionesxcurso (DETALLE,CURSO) 
			VALUES ('$nombre','$curso')";
					
					if (!$resultado = $mysqli->query($sql)) {
						
						echo "Lo sentimos, este sitio web está experimentando problemas.";
						echo "Error: La ejecución de la consulta falló debido a: \n";
						echo "Query: " . $sql . "\n";
						echo "Errno: " . $mysqli->errno . "\n";
						echo "Error: " . $mysqli->error . "\n";
						
						exit;
					} else {
						$idT = mysqli_insert_id($mysqli);
						echo 'EXITO';
					}
		} else {
			$sql = "INSERT INTO sesionesxinduccion (DETALLE,INDUCCION) 
			VALUES ('$nombre','$curso')";
					
					if (!$resultado = $mysqli->query($sql)) {
						
						echo "Lo sentimos, este sitio web está experimentando problemas.";
						echo "Error: La ejecución de la consulta falló debido a: \n";
						echo "Query: " . $sql . "\n";
						echo "Errno: " . $mysqli->errno . "\n";
						echo "Error: " . $mysqli->error . "\n";
						
						exit;
					} else {
						$idT = mysqli_insert_id($mysqli);
						echo 'EXITO';
					}
		}
		
	}

	function EditaSesiones($id,$tipo,$curso,$nombre){
		include('conexion.php');
		
		$nombre = utf8_decode($nombre);

		if($tipo=="1"){
			$sql = "UPDATE sesionesxcurso SET detalle='$nombre' WHERE id='$id' ";
					
			if (!$resultado = $mysqli->query($sql)) {
				echo "Lo sentimos, este sitio web está experimentando problemas.";
				echo "Error: La ejecución de la consulta falló debido a: \n";
				echo "Query: " . $sql . "\n";
				echo "Errno: " . $mysqli->errno . "\n";
				echo "Error: " . $mysqli->error . "\n";
						
				exit;
			} else {
				echo 'EXITO';
			}
		} else {
			$sql = "UPDATE sesionesxinduccion SET detalle='$nombre' WHERE id='$id' ";
					
			if (!$resultado = $mysqli->query($sql)) {
				echo "Lo sentimos, este sitio web está experimentando problemas.";
				echo "Error: La ejecución de la consulta falló debido a: \n";
				echo "Query: " . $sql . "\n";
				echo "Errno: " . $mysqli->errno . "\n";
				echo "Error: " . $mysqli->error . "\n";
						
				exit;
			} else {
				echo 'EXITO';
			}
		}
		
		
	}

	function Materiales($tipo,$sesion){
		include('conexion.php');

		if($tipo=="1"){
			$query = "SELECT * FROM materialesxcurso WHERE sesion='$sesion' ";
		} else {
			$query = "SELECT * FROM materialesxinduccion WHERE sesion='$sesion'";
		}
    
        
        mysqli_set_charset($mysqli, 'utf8'); 
		$result = mysqli_query($mysqli, $query);
		
		
		$tabla = '<div class="table-responsive"><table class="table table-bordered table-striped">';
		$tabla = $tabla . '<thead><tr style="background:#ffffff;"><td>COD. SESION</td><td>NOMBRE</td>';
		$tabla = $tabla . '<td>EDITAR</td></tr></thead>';
		$tabla = $tabla . '<tbody>';
    	while ($row = $result->fetch_array()){

			if(($row['tipo']=="1") OR ($row['tipo']=="2")){
				//$direccion = $video_title;
				$direccion = '<a href="'.$row['detalle'].'"  target="_blank">'.$row['detalle'].'</a>';
			} else {
				$direccion = '<a href="files/'.$row['detalle'].'" target="_blank">'.$row['detalle'].'</a>';
			}

			$tabla = $tabla . '<tr><td>'.$row['sesion'].'</td><td>'.$direccion.'</td>';
			$tabla = $tabla . '<td><img onclick="EditarMateriales('.$row['id'].')" src="imagenes/editar.png"></td></tr>';
		
		}
    	$tabla = $tabla . '</tbody></table></div>';
    	return $tabla;
	}

	function Materiales2($id,$tipo,$sesion){
		include('conexion.php');

		if($tipo=="1"){
			$query = "SELECT * FROM materialesxcurso WHERE id='$id' ";
		} else {
			$query = "SELECT * FROM materialesxinduccion WHERE id='$id' ";
		}
    
        
        mysqli_set_charset($mysqli, 'utf8'); 
		$result = mysqli_query($mysqli, $query);
		
		while ($row = $result->fetch_array()){
			if(($row['tipo']=="1") OR ($row['tipo']=="2")){
				$direccion = '<a href="'.$row['detalle'].'"  target="_blank">'.$row['detalle'].'</a>';
			} else {
				$direccion = '<a href="files/'.$row['detalle'].'" target="_blank">'.$row['detalle'].'</a>';
			}
			
			$tabla = $tabla . ''.$direccion.'#';
			
		}
    	return $tabla;
	}

	function GuardaMateriales($tipo,$tipomat,$sesion,$nombre){
		include('conexion.php');
		
		$nombre = utf8_decode($nombre);
		
		if($tipo=="1"){
			$sql = "INSERT INTO materialesxcurso (DETALLE,SESION,TIPO) 
			VALUES ('$nombre','$sesion','$tipomat')";
					
					if (!$resultado = $mysqli->query($sql)) {
						
						echo "Lo sentimos, este sitio web está experimentando problemas.";
						echo "Error: La ejecución de la consulta falló debido a: \n";
						echo "Query: " . $sql . "\n";
						echo "Errno: " . $mysqli->errno . "\n";
						echo "Error: " . $mysqli->error . "\n";
						
						exit;
					} else {
						$idT = mysqli_insert_id($mysqli);
						echo 'EXITO';
					}
		} else {
			$sql = "INSERT INTO materialesxinduccion (DETALLE,SESION,TIPO) 
			VALUES ('$nombre','$sesion','$tipomat')";
					
					if (!$resultado = $mysqli->query($sql)) {
						
						echo "Lo sentimos, este sitio web está experimentando problemas.";
						echo "Error: La ejecución de la consulta falló debido a: \n";
						echo "Query: " . $sql . "\n";
						echo "Errno: " . $mysqli->errno . "\n";
						echo "Error: " . $mysqli->error . "\n";
						
						exit;
					} else {
						$idT = mysqli_insert_id($mysqli);
						echo 'EXITO';
					}
		}
		
	}

	function EditaMateriales($id,$tipo,$tipomat,$sesion,$nombre){
		include('conexion.php');
		
		$nombre = utf8_decode($nombre);

		if($tipo=="1"){
			$sql = "UPDATE materialesxcurso SET detalle='$nombre' WHERE id='$id' ";
					
			if (!$resultado = $mysqli->query($sql)) {
				echo "Lo sentimos, este sitio web está experimentando problemas.";
				echo "Error: La ejecución de la consulta falló debido a: \n";
				echo "Query: " . $sql . "\n";
				echo "Errno: " . $mysqli->errno . "\n";
				echo "Error: " . $mysqli->error . "\n";
						
				exit;
			} else {
				echo 'EXITO';
			}
		} else {
			$sql = "UPDATE materialesxinduccion SET detalle='$nombre' WHERE id='$id' ";
					
			if (!$resultado = $mysqli->query($sql)) {
				echo "Lo sentimos, este sitio web está experimentando problemas.";
				echo "Error: La ejecución de la consulta falló debido a: \n";
				echo "Query: " . $sql . "\n";
				echo "Errno: " . $mysqli->errno . "\n";
				echo "Error: " . $mysqli->error . "\n";
						
				exit;
			} else {
				echo 'EXITO';
			}
		}
		
		
	}
	
	function Mejoras(){
		include('conexion.php');
		
		$tabla = '<div class="table-responsive"><table class="table table-bordered table-striped">';
		$tabla = $tabla . '<thead><tr style="background:#ffffff;"><td>CODIGO</td><td>EMPLEADO</td>';
		$tabla = $tabla . '<td>SUGERENCIA</td></tr></thead>';
		$tabla = $tabla . '<tbody>';
    	
		$query = "SELECT * FROM mejoras ";
		mysqli_set_charset($mysqli, 'utf8'); 
		$result = mysqli_query($mysqli, $query);
		while ($row = $result->fetch_array()){

			$dat = $dat.'<tr><td>'.$row['id']."</td><td>".$row['id_usuario']."</td><td>".$row['detalle']."</td></tr>";
		}

		$tabla = $tabla.$dat.'</tbody></table></div>';
		return $tabla;
			
	}

	function Procedimientos(){
		include('conexion.php');
    
        $query = "SELECT * FROM procedimientos ";
        mysqli_set_charset($mysqli, 'utf8'); 
    	$result = mysqli_query($mysqli, $query);
		
		$tabla = '<div class="table-responsive"><table class="table table-bordered table-striped">';
		$tabla = $tabla . '<thead><tr style="background:#ffffff;"><td>CENTRO DE COSTOS</td><td>UNIDAD</td>';
		$tabla = $tabla . '<td>ARCHIVO</td><td>EDITAR</td></tr></thead>';
		$tabla = $tabla . '<tbody>';
    	while ($row = $result->fetch_array()){
			$costo = $this->NombreCentro($row['centro_costos']);
			$unidad = $this->NombreUnidad($row['unidad']);

			$direccion = '<a href="files/'.$row['archivo'].'" target="_blank">'.$row['archivo'].'</a>';
			$tabla = $tabla . '<tr><td>'.$costo.'</td><td>'.$unidad.'</td><td>'.$direccion.'</td>';
			$tabla = $tabla . '<td><img onclick="EditarProcedimientos('.$row['id'].')" src="imagenes/editar.png"></td></tr>';
    	}
    	$tabla = $tabla . '</tbody></table></div>';
    	return $tabla;
	}


	function Procedimientos2(){
		include('conexion.php');
    
        $query = "SELECT * FROM procedimientos ";
        mysqli_set_charset($mysqli, 'utf8'); 
    	$result = mysqli_query($mysqli, $query);
		
		$tabla = '';
		while ($row = $result->fetch_array()){
			$costo = $this->CentroCostos2($row['centro_costos']);
			$unidad = $this->Unidad2($row['unidad']);
			$direccion = '<a href="files/'.$row['archivo'].'" target="_blank">'.$row['archivo'].'</a>';
			$tabla = $tabla . ''.$costo.'#'.$unidad.'#'.$direccion.'#';
			
    	}
		
		return $tabla;
	}

	function Videos(){
		include('conexion.php');

		$query = "SELECT * FROM videos ";
        
        mysqli_set_charset($mysqli, 'utf8'); 
		$result = mysqli_query($mysqli, $query);
		
		
		$tabla = '<div class="table-responsive"><table class="table table-bordered table-striped">';
		$tabla = $tabla . '<thead><tr style="background:#ffffff;"><td>CODIGO</td><td>ENLACE</td>';
		$tabla = $tabla . '<td>EDITAR</td></tr></thead>';
		$tabla = $tabla . '<tbody>';
    	while ($row = $result->fetch_array()){

			if(($row['tipo']=="1") OR ($row['tipo']=="2")){
				$direccion = '<a href="'.$row['detalle'].'"  target="_blank">'.$row['detalle'].'</a>';
			} else {
				$direccion = '<a href="files/'.$row['detalle'].'" target="_blank">'.$row['detalle'].'</a>';
			}

			$tabla = $tabla . '<tr><td>'.$row['id'].'</td><td>'.$direccion.'</td>';
			$tabla = $tabla . '<td><img onclick="EditarVideos('.$row['id'].')" src="imagenes/editar.png"></td></tr>';
		
		}
    	$tabla = $tabla . '</tbody></table></div>';
    	return $tabla;
	}

	function Videos2($id){
		include('conexion.php');

		$query = "SELECT * FROM videos WHERE id='$id'";
        
        mysqli_set_charset($mysqli, 'utf8'); 
		$result = mysqli_query($mysqli, $query);
		
		$tabla = '';
    	while ($row = $result->fetch_array()){

			$tabla = $tabla.$row['detalle'].'#';
		
		}
		
		return $tabla;
	}

	function GuardaVideos($tipomat,$nombre){
		include('conexion.php');
		
		$nombre = utf8_decode($nombre);
		
		$sql = "INSERT INTO videos (DETALLE,TIPO) 
			VALUES ('$nombre','$tipomat')";
					
					if (!$resultado = $mysqli->query($sql)) {
						
						echo "Lo sentimos, este sitio web está experimentando problemas.";
						echo "Error: La ejecución de la consulta falló debido a: \n";
						echo "Query: " . $sql . "\n";
						echo "Errno: " . $mysqli->errno . "\n";
						echo "Error: " . $mysqli->error . "\n";
						
						exit;
					} else {
						$idT = mysqli_insert_id($mysqli);
						echo 'EXITO';
					}
	}

	function EditaVideos($id,$tipomat,$nombre){
		include('conexion.php');
		
		$nombre = utf8_decode($nombre);

		$sql = "UPDATE videos SET detalle='$nombre' WHERE id='$id' ";
					
			if (!$resultado = $mysqli->query($sql)) {
				echo "Lo sentimos, este sitio web está experimentando problemas.";
				echo "Error: La ejecución de la consulta falló debido a: \n";
				echo "Query: " . $sql . "\n";
				echo "Errno: " . $mysqli->errno . "\n";
				echo "Error: " . $mysqli->error . "\n";
						
				exit;
			} else {
				echo 'EXITO';
			}
		
		
	}

	function Almacenes(){
		include('conexion.php');

		$query = "SELECT * FROM almacen ";
        
        mysqli_set_charset($mysqli, 'utf8'); 
		$result = mysqli_query($mysqli, $query);
		
		
		$tabla = '<div class="table-responsive"><table class="table table-bordered table-striped">';
		$tabla = $tabla . '<thead><tr style="background:#ffffff;"><td>CODIGO</td><td>NOMBRE</td>';
		$tabla = $tabla . '<td>EDITAR</td></tr></thead>';
		$tabla = $tabla . '<tbody>';
    	while ($row = $result->fetch_array()){

			$tabla = $tabla . '<tr><td>'.$row['id'].'</td><td>'.$row['nombre'].'</td>';
			$tabla = $tabla . '<td><img onclick="EditarAlmacenes('.$row['id'].')" src="imagenes/editar.png"></td></tr>';
		
		}
    	$tabla = $tabla . '</tbody></table></div>';
    	return $tabla;
	}

	function GuardaAlmacenes($id,$tipo,$nombre){
		include('conexion.php');
		
		$nombre = utf8_decode($nombre);
		
		if($tipo=="1"){
			$sql = "INSERT INTO almacen (EMPRESA,NOMBRE) 
			VALUES ('1','$nombre')";
					
			if (!$resultado = $mysqli->query($sql)) {
						
				echo "Lo sentimos, este sitio web está experimentando problemas.";
				echo "Error: La ejecución de la consulta falló debido a: \n";
				echo "Query: " . $sql . "\n";
				echo "Errno: " . $mysqli->errno . "\n";
				echo "Error: " . $mysqli->error . "\n";
						
				exit;
			} else {
				$idT = mysqli_insert_id($mysqli);
				echo 'EXITO';
			}
		} else {
			$sql = "UPDATE almacen SET nombre='$nombre' WHERE id='$id' ";
					
			if (!$resultado = $mysqli->query($sql)) {
				echo "Lo sentimos, este sitio web está experimentando problemas.";
				echo "Error: La ejecución de la consulta falló debido a: \n";
				echo "Query: " . $sql . "\n";
				echo "Errno: " . $mysqli->errno . "\n";
				echo "Error: " . $mysqli->error . "\n";
						
				exit;
			} else {
				echo 'EXITO';
			}
		}
		
	}

	function Almacenes2($id){
		include('conexion.php');

		$query = "SELECT * FROM almacen WHERE id='$id' ";
        
        mysqli_set_charset($mysqli, 'utf8'); 
		$result = mysqli_query($mysqli, $query);
		
		$tabla = $tabla . '';
    	while ($row = $result->fetch_array()){

			$tabla = $tabla . ''.$row['nombre'].'#';
			
		}
    	return $tabla;
	}


	function Categorias(){
		include('conexion.php');

		$query = "SELECT * FROM categorias ";
        
        mysqli_set_charset($mysqli, 'utf8'); 
		$result = mysqli_query($mysqli, $query);
		
		
		$tabla = '<div class="table-responsive"><table class="table table-bordered table-striped">';
		$tabla = $tabla . '<thead><tr style="background:#ffffff;"><td>CODIGO</td><td>NOMBRE</td>';
		$tabla = $tabla . '<td>EDITAR</td></tr></thead>';
		$tabla = $tabla . '<tbody>';
    	while ($row = $result->fetch_array()){

			$tabla = $tabla . '<tr><td>'.$row['id'].'</td><td>'.$row['nombre'].'</td>';
			$tabla = $tabla . '<td><img onclick="EditarCategorias('.$row['id'].')" src="imagenes/editar.png"></td></tr>';
		
		}
    	$tabla = $tabla . '</tbody></table></div>';
    	return $tabla;
	}

	function GuardaCategorias($id,$tipo,$nombre){
		include('conexion.php');
		
		$nombre = utf8_decode($nombre);
		
		if($tipo=="1"){
			$sql = "INSERT INTO categorias (EMPRESA,NOMBRE) 
			VALUES ('1','$nombre')";
					
			if (!$resultado = $mysqli->query($sql)) {
						
				echo "Lo sentimos, este sitio web está experimentando problemas.";
				echo "Error: La ejecución de la consulta falló debido a: \n";
				echo "Query: " . $sql . "\n";
				echo "Errno: " . $mysqli->errno . "\n";
				echo "Error: " . $mysqli->error . "\n";
						
				exit;
			} else {
				$idT = mysqli_insert_id($mysqli);
				echo 'EXITO';
			}
		} else {
			$sql = "UPDATE categorias SET nombre='$nombre' WHERE id='$id' ";
					
			if (!$resultado = $mysqli->query($sql)) {
				echo "Lo sentimos, este sitio web está experimentando problemas.";
				echo "Error: La ejecución de la consulta falló debido a: \n";
				echo "Query: " . $sql . "\n";
				echo "Errno: " . $mysqli->errno . "\n";
				echo "Error: " . $mysqli->error . "\n";
						
				exit;
			} else {
				echo 'EXITO';
			}
		}
		
	}

	function Categorias2($id){
		include('conexion.php');

		$query = "SELECT * FROM categorias WHERE id='$id' ";
        
        mysqli_set_charset($mysqli, 'utf8'); 
		$result = mysqli_query($mysqli, $query);
		
		$tabla = $tabla . '';
    	while ($row = $result->fetch_array()){
			$tabla = $tabla . ''.$row['nombre'].'#';
		}
    	return $tabla;
	}

	function SelectCategorias(){
		include('conexion.php');

		$query = "SELECT * FROM categorias ";
        
        mysqli_set_charset($mysqli, 'utf8'); 
		$result = mysqli_query($mysqli, $query);
		
		$tabla = $tabla.'<select id="scategorias"><option value="0">Seleccionar</option>';
    	while ($row = $result->fetch_array()){
			$tabla = $tabla . '<option value="'.$row['id'].'">'.$row['nombre'].'</option>';
		}
		$tabla = $tabla.'</select>';
    	return $tabla;
	}

	function SelectAlmacen(){
		include('conexion.php');

		$query = "SELECT * FROM almacen ";
        
        mysqli_set_charset($mysqli, 'utf8'); 
		$result = mysqli_query($mysqli, $query);
		
		$tabla = $tabla.'<select id="salmacen"><option value="0">Seleccionar</option>';
    	while ($row = $result->fetch_array()){
			$tabla = $tabla . '<option value="'.$row['id'].'">'.$row['nombre'].'</option>';
		}
		$tabla = $tabla.'</select>';
    	return $tabla;
	}


	function SelectAlmacen2(){
		include('conexion.php');

		$query = "SELECT * FROM almacen ";
        
        mysqli_set_charset($mysqli, 'utf8'); 
		$result = mysqli_query($mysqli, $query);
		
		$tabla = $tabla.'<select onclick="CambioAlmacen()" id="ssalmacen"><option value="0">Seleccionar</option>';
    	while ($row = $result->fetch_array()){
			$tabla = $tabla . '<option value="'.$row['id'].'">'.$row['nombre'].'</option>';
		}
		$tabla = $tabla.'</select>';
    	return $tabla;
	}

	function SelectEmpleados(){
		include('conexion.php');

		$query = "SELECT * FROM empleados ";
        
        mysqli_set_charset($mysqli, 'utf8'); 
		$result = mysqli_query($mysqli, $query);
		
		$tabla = $tabla.'<select id="sempleados"><option value="0">Seleccionar</option>';
    	while ($row = $result->fetch_array()){
			$tabla = $tabla . '<option value="'.$row['id'].'">'.$row['nombre'].' '.$row['apellidos'].'</option>';
		}
		$tabla = $tabla.'</select>';
    	return $tabla;
	}

	function SelectEmpleados2(){
		include('conexion.php');

		$query = "SELECT * FROM empleados ";
        
        mysqli_set_charset($mysqli, 'utf8'); 
		$result = mysqli_query($mysqli, $query);
		
		$tabla = $tabla.'<select onclick="CambiaEmpleado()" id="ssempleados"><option value="0">Seleccionar</option>';
    	while ($row = $result->fetch_array()){
			$tabla = $tabla . '<option value="'.$row['id'].'">'.$row['nombre'].' '.$row['apellidos'].'</option>';
		}
		$tabla = $tabla.'</select>';
    	return $tabla;
	}

	function SelectEpp($id){
		include('conexion.php');

		$query = "SELECT * FROM productos WHERE almacen = '$id' ";
        
        mysqli_set_charset($mysqli, 'utf8'); 
		$result = mysqli_query($mysqli, $query);
		
		$tabla = $tabla.'<select id="ssproductos"><option value="0">Seleccionar</option>';
    	while ($row = $result->fetch_array()){
			$tabla = $tabla . '<option value="'.$row['id'].'">'.$row['nombre'].' - Stock: '.$row['stock'].'</option>';
		}
		$tabla = $tabla.'</select>';
    	return $tabla;
	}

	function ValidaStock($id,$stock){
		include('conexion.php');

		$query = "SELECT * FROM productos WHERE id = '$id' ";
        
        mysqli_set_charset($mysqli, 'utf8'); 
		$result = mysqli_query($mysqli, $query);
		
		while ($row = $result->fetch_array()){
			$st = $row['stock'];
		}
		
		$stocki = intval($st);
		$stockf = intval($stock);

		if($stocki>=$stockf){
			$resp="ok";
		} else {
			$resp = "no";
		}

		return $resp;
	}

	function AgregaStock($id,$stock){
		include('conexion.php');

		date_default_timezone_set('America/Lima');
        //$date1 = new DateTime($row['fecha_salida']." ".$row['hora_salida']);
        $date2 = date("Y-m-d");
		//$diff = $date2->diff($date1);
						
		$query = "SELECT * FROM productos WHERE id = '$id' ";
        
        mysqli_set_charset($mysqli, 'utf8'); 
		$result = mysqli_query($mysqli, $query);
		
		while ($row = $result->fetch_array()){
			$st = $row['stock'];
		}
		
		$stockf = intval($stock) + intval($st);

		$sql = "UPDATE productos SET stock='$stockf' WHERE id='$id' ";
					
			if (!$resultado = $mysqli->query($sql)) {
				echo "Lo sentimos, este sitio web está experimentando problemas.";
				echo "Error: La ejecución de la consulta falló debido a: \n";
				echo "Query: " . $sql . "\n";
				echo "Errno: " . $mysqli->errno . "\n";
				echo "Error: " . $mysqli->error . "\n";
						
				exit;
			} else {
				echo 'EXITO';
			}

		$sql = "INSERT INTO movimientosepp (EPP,TIPO,CANTIDAD,EMPLEADO,FECHA) 
			VALUES ('$id','ingreso','$stock','0','$date2')";
					
			if (!$resultado = $mysqli->query($sql)) {
						
				echo "Lo sentimos, este sitio web está experimentando problemas.";
				echo "Error: La ejecución de la consulta falló debido a: \n";
				echo "Query: " . $sql . "\n";
				echo "Errno: " . $mysqli->errno . "\n";
				echo "Error: " . $mysqli->error . "\n";
						
				exit;
			}

		return "";
	}

	function DisminuyeStock($id,$empleado,$stock){
		include('conexion.php');

		$query = "SELECT * FROM productos WHERE id = '$id' ";
		
		date_default_timezone_set('America/Lima');
        //$date1 = new DateTime($row['fecha_salida']." ".$row['hora_salida']);
        $date2 = date("Y-m-d");
		//$diff = $date2->diff($date1);

        mysqli_set_charset($mysqli, 'utf8'); 
		$result = mysqli_query($mysqli, $query);
		
		while ($row = $result->fetch_array()){
			$st = $row['stock'];
		}
		
		$stockf = intval($st) - intval($stock);

		$sql = "UPDATE productos SET stock='$stockf' WHERE id='$id' ";
					
			if (!$resultado = $mysqli->query($sql)) {
				echo "Lo sentimos, este sitio web está experimentando problemas.";
				echo "Error: La ejecución de la consulta falló debido a: \n";
				echo "Query: " . $sql . "\n";
				echo "Errno: " . $mysqli->errno . "\n";
				echo "Error: " . $mysqli->error . "\n";
						
				exit;
			} else {
				echo 'EXITO';
			}

		$sql = "INSERT INTO movimientosepp (EPP,TIPO,CANTIDAD,EMPLEADO,FECHA) 
			VALUES ('$id','salida','$stock','$empleado','$date2')";
					
			if (!$resultado = $mysqli->query($sql)) {
						
				echo "Lo sentimos, este sitio web está experimentando problemas.";
				echo "Error: La ejecución de la consulta falló debido a: \n";
				echo "Query: " . $sql . "\n";
				echo "Errno: " . $mysqli->errno . "\n";
				echo "Error: " . $mysqli->error . "\n";
						
				exit;
			}

		return "";
	}

	function Productos(){
		include('conexion.php');

		$query = "SELECT * FROM productos ";
        
        mysqli_set_charset($mysqli, 'utf8'); 
		$result = mysqli_query($mysqli, $query);
		
		
		$tabla = '<div class="table-responsive"><table class="table table-bordered table-striped">';
		$tabla = $tabla . '<thead><tr style="background:#ffffff;"><td>CODIGO</td><td>NOMBRE</td><td>ALMACEN</td>';
		$tabla = $tabla . '<td>STOCK</td><td>EDITAR</td></tr></thead>';
		$tabla = $tabla . '<tbody>';
    	while ($row = $result->fetch_array()){
			$almacen = $this->NombreAlmacen($row['almacen']);
			$tabla = $tabla . '<tr><td>'.$row['id'].'</td><td>'.$row['nombre'].'</td><td>'.$almacen.'</td><td>'.$row['stock'].'</td>';
			$tabla = $tabla . '<td><img onclick="EditarProductos('.$row['id'].')" src="imagenes/editar.png"></td></tr>';
		
		}
    	$tabla = $tabla . '</tbody></table></div>';
    	return $tabla;
	}

	function GuardaProductos($id,$almacen,$categoria,$tipo,$marca,$nombre,$stock){
		include('conexion.php');
		
		$nombre = utf8_decode($nombre);
		
		if($tipo=="1"){
			$sql = "INSERT INTO productos (ALMACEN,CATEGORIA,MARCA,NOMBRE,STOCK) 
			VALUES ('$almacen','$categoria','$marca','$nombre','$stock')";
					
			if (!$resultado = $mysqli->query($sql)) {
						
				echo "Lo sentimos, este sitio web está experimentando problemas.";
				echo "Error: La ejecución de la consulta falló debido a: \n";
				echo "Query: " . $sql . "\n";
				echo "Errno: " . $mysqli->errno . "\n";
				echo "Error: " . $mysqli->error . "\n";
						
				exit;
			} else {
				$idT = mysqli_insert_id($mysqli);
				echo 'EXITO';
			}

			date_default_timezone_set('America/Lima');
			//$date1 = new DateTime($row['fecha_salida']." ".$row['hora_salida']);
			$date2 = date("Y-m-d");
			//$diff = $date2->diff($date1);

			$sql = "INSERT INTO movimientosepp (EPP,TIPO,CANTIDAD,EMPLEADO,FECHA) 
			VALUES ('$idT','ingreso','$stock','0','$date2')";
					
			if (!$resultado = $mysqli->query($sql)) {
						
				echo "Lo sentimos, este sitio web está experimentando problemas.";
				echo "Error: La ejecución de la consulta falló debido a: \n";
				echo "Query: " . $sql . "\n";
				echo "Errno: " . $mysqli->errno . "\n";
				echo "Error: " . $mysqli->error . "\n";
						
				exit;
			} else {
				$idT = mysqli_insert_id($mysqli);
				echo 'EXITO';
			}
		} else {
			$sql = "UPDATE productos SET almacen='$almacen', categoria='$categoria', 
			marca='$marca', stock='$stock', nombre='$nombre' WHERE id='$id' ";
					
			if (!$resultado = $mysqli->query($sql)) {
				echo "Lo sentimos, este sitio web está experimentando problemas.";
				echo "Error: La ejecución de la consulta falló debido a: \n";
				echo "Query: " . $sql . "\n";
				echo "Errno: " . $mysqli->errno . "\n";
				echo "Error: " . $mysqli->error . "\n";
						
				exit;
			} else {
				echo 'EXITO';
			}

			$sql = "UPDATE movimientosepp SET stock='$stock' WHERE id='$id' ";
					
			if (!$resultado = $mysqli->query($sql)) {
				echo "Lo sentimos, este sitio web está experimentando problemas.";
				echo "Error: La ejecución de la consulta falló debido a: \n";
				echo "Query: " . $sql . "\n";
				echo "Errno: " . $mysqli->errno . "\n";
				echo "Error: " . $mysqli->error . "\n";
						
				exit;
			} else {
				echo 'EXITO';
			}
		}
		
	}

	function Productos2($id){
		include('conexion.php');

		$query = "SELECT * FROM productos WHERE id='$id' ";
        
        mysqli_set_charset($mysqli, 'utf8'); 
		$result = mysqli_query($mysqli, $query);
		
		$tabla = $tabla . '';
    	while ($row = $result->fetch_array()){
			$tabla = $tabla . ''.$row['nombre'].'#'.$row['marca'].'#'.$row['stock'].'#';
		}
    	return $tabla;
	}

	function MovimientoStock(){
		include('conexion.php');

		$query = "SELECT * FROM movimientosepp ";
        
        mysqli_set_charset($mysqli, 'utf8'); 
		$result = mysqli_query($mysqli, $query);
		
		
		$tabla = '<div class="table-responsive"><table class="table table-bordered table-striped">';
		$tabla = $tabla . '<thead><tr style="background:#ffffff;"><td>EPP</td><td>TIPO</td><td>CANTIDAD</td>';
		$tabla = $tabla . '<td>EMPLEADO</td><td>FECHA</td></tr></thead>';
		$tabla = $tabla . '<tbody>';
    	while ($row = $result->fetch_array()){
			$empleado = $this->NombreUsuario($row['empleado']);
			$epp = $this->NombreProducto($row['epp']);
			$tabla = $tabla . '<tr><td>'.$epp.'</td><td>'.$row['tipo'].'</td><td>'.$row['cantidad'].'</td><td>'.$empleado.'</td>';
			$tabla = $tabla . '<td>'.$row['fecha'].'</td></tr>';
		
		}
    	$tabla = $tabla . '</tbody></table></div>';
    	return $tabla;
	}

	function MovimientoStockEmpleado($id){
		include('conexion.php');

		$query = "SELECT * FROM movimientosepp WHERE empleado = '$id' ";
        
        mysqli_set_charset($mysqli, 'utf8'); 
		$result = mysqli_query($mysqli, $query);
		
		
		$tabla = '<div class="table-responsive"><table class="table table-bordered table-striped">';
		$tabla = $tabla . '<thead><tr style="background:#ffffff;"><td>EPP</td><td>TIPO</td><td>CANTIDAD</td>';
		$tabla = $tabla . '<td>EMPLEADO</td><td>FECHA</td></tr></thead>';
		$tabla = $tabla . '<tbody>';
    	while ($row = $result->fetch_array()){
			$empleado = $this->NombreUsuario($row['empleado']);
			$epp = $this->NombreProducto($row['epp']);
			$tabla = $tabla . '<tr><td>'.$epp.'</td><td>'.$row['tipo'].'</td><td>'.$row['cantidad'].'</td><td>'.$empleado.'</td>';
			$tabla = $tabla . '<td>'.$row['fecha'].'</td></tr>';
		
		}
    	$tabla = $tabla . '</tbody></table></div>';
    	return $tabla;
	}

	function Eventos(){
		include('conexion.php');

		$query = "SELECT * FROM eventos ";
        
        mysqli_set_charset($mysqli, 'utf8'); 
		$result = mysqli_query($mysqli, $query);
		
		
		$tabla = '<div class="table-responsive"><table class="table table-bordered table-striped">';
		$tabla = $tabla . '<thead><tr style="background:#ffffff;"><td>TIPO</td><td>NOMBRE</td>';
		$tabla = $tabla . '<td>DETALLE</td><td>LUGAR</td><td>DIRECCION</td>';
		$tabla = $tabla . '<td>FECHA</td><td>HORA</td>';
		$tabla = $tabla . '<td>EDITAR</td></tr></thead>';
		$tabla = $tabla . '<tbody>';
    	while ($row = $result->fetch_array()){
			if($row['tipo']=="1"){
				$tipo = "PUBLICO";
			} else {
				$tipo = "PRIVADO";
			}

			$tabla = $tabla . '<tr><td>'.$tipo.'</td><td>'.$row['evento'].'</td>';
			$tabla = $tabla . '<td>'.$row['detalle'].'</td><td>'.$row['lugar'].'</td>';
			$tabla = $tabla . '<td>'.$row['direccion'].'</td><td>'.$row['fecha'].'</td><td>'.$row['hora'].'</td>';
			$tabla = $tabla . '<td><img onclick="EditarEventos('.$row['id'].')" src="imagenes/editar.png"></td></tr>';
		
		}
    	$tabla = $tabla . '</tbody></table></div>';
    	return $tabla;
	}

	function Eventos2($id){
		include('conexion.php');

		$query = "SELECT * FROM eventos WHERE id='$id'";
        
        mysqli_set_charset($mysqli, 'utf8'); 
		$result = mysqli_query($mysqli, $query);
		
		
		$tabla = $tabla . '';
    	while ($row = $result->fetch_array()){
			$tabla = $tabla . ''.$row['evento'].'#';
			$tabla = $tabla . ''.$row['detalle'].'#'.$row['lugar'].'#';
			$tabla = $tabla . ''.$row['direccion'].'#'.$row['fecha'].'#'.$row['hora'].'#';
			
		}
		
		return $tabla;
	}

	function GuardaEventos($tipo,$evento,$detalle,$lugar,$direccion,$fecha,$hora,$estado){
		include('conexion.php');
		
		$nombre = utf8_decode($nombre);
		
		$sql = "INSERT INTO eventos (EVENTO,TIPO,DETALLE,LUGAR,DIRECCION,FECHA,HORA,ESTADO) 
		VALUES ('$evento','$tipo','$detalle','$lugar','$direccion','$fecha','$hora','$estado')";
					
		if (!$resultado = $mysqli->query($sql)) {
						
			echo "Lo sentimos, este sitio web está experimentando problemas.";
			echo "Error: La ejecución de la consulta falló debido a: \n";
			echo "Query: " . $sql . "\n";
			echo "Errno: " . $mysqli->errno . "\n";
			echo "Error: " . $mysqli->error . "\n";
						
			exit;
		} else {
			$idT = mysqli_insert_id($mysqli);
			echo 'EXITO';
		}
	}

	function EditaEventos($id,$tipo,$evento,$detalle,$lugar,$direccion,$fecha,$hora,$estado){
		include('conexion.php');
		
		$nombre = utf8_decode($nombre);
		
		$sql = "UPDATE eventos SET evento='$evento', tipo='$tipo', detalle='$detalle', lugar='$lugar',
		direccion='$direccion', fecha='$fecha', hora='$hora' WHERE id='$id' ";
					
		if (!$resultado = $mysqli->query($sql)) {
						
			echo "Lo sentimos, este sitio web está experimentando problemas.";
			echo "Error: La ejecución de la consulta falló debido a: \n";
			echo "Query: " . $sql . "\n";
			echo "Errno: " . $mysqli->errno . "\n";
			echo "Error: " . $mysqli->error . "\n";
						
			exit;
		} else {
			//$idT = mysqli_insert_id($mysqli);
			echo 'EXITO';
		}
	}

	function Empresas(){
		include('conexion.php');

		$query = "SELECT * FROM empresa ";
        
        mysqli_set_charset($mysqli, 'utf8'); 
		$result = mysqli_query($mysqli, $query);
		
		
		$tabla = '<div class="table-responsive"><table class="table table-bordered table-striped">';
		$tabla = $tabla . '<thead><tr style="background:#ffffff;"><td>PAIS</td><td>NOMBRE</td>';
		$tabla = $tabla . '<td>EDITAR</td></tr></thead>';
		$tabla = $tabla . '<tbody>';
    	while ($row = $result->fetch_array()){
			if($row['pais']=="1"){
				$pais = "PERU";
			} else if($row['pais']=="2"){
				$pais = "SUDAFRICA";
			} else {
				$pais = "BRASIL";
			}

			$tabla = $tabla . '<tr><td>'.$pais.'</td><td>'.$row['nombre'].'</td>';
			$tabla = $tabla . '<td><img onclick="EditarEmpresas('.$row['id'].')" src="imagenes/editar.png"></td></tr>';
		
		}
    	$tabla = $tabla . '</tbody></table></div>';
    	return $tabla;
	}

	function Empresas2($id){
		include('conexion.php');

		$query = "SELECT * FROM empresa WHERE id='$id'";
        
        mysqli_set_charset($mysqli, 'utf8'); 
		$result = mysqli_query($mysqli, $query);
		
		
		$tabla = $tabla . '';
    	while ($row = $result->fetch_array()){
			$tabla = $tabla . ''.$row['nombre'].'#';
			
		}
		
		return $tabla;
	}

	function GuardaEmpresas($pais,$nombre){
		include('conexion.php');
		
		$nombre = utf8_decode($nombre);
		
		$sql = "INSERT INTO empresa (PAIS,NOMBRE) 
		VALUES ('$pais','$nombre')";
					
		if (!$resultado = $mysqli->query($sql)) {
						
			echo "Lo sentimos, este sitio web está experimentando problemas.";
			echo "Error: La ejecución de la consulta falló debido a: \n";
			echo "Query: " . $sql . "\n";
			echo "Errno: " . $mysqli->errno . "\n";
			echo "Error: " . $mysqli->error . "\n";
						
			exit;
		} else {
			$idT = mysqli_insert_id($mysqli);
			echo 'EXITO';
		}
	}

	function EditaEmpresas($id,$pais,$nombre){
		include('conexion.php');
		
		$nombre = utf8_decode($nombre);
		
		$sql = "UPDATE empresa SET pais='$pais', nombre='$nombre' WHERE id='$id' ";
					
		if (!$resultado = $mysqli->query($sql)) {
						
			echo "Lo sentimos, este sitio web está experimentando problemas.";
			echo "Error: La ejecución de la consulta falló debido a: \n";
			echo "Query: " . $sql . "\n";
			echo "Errno: " . $mysqli->errno . "\n";
			echo "Error: " . $mysqli->error . "\n";
						
			exit;
		} else {
			//$idT = mysqli_insert_id($mysqli);
			echo 'EXITO';
		}
	}

	function SelectEmpresas(){
		include('conexion.php');

		$query = "SELECT * FROM empresa ";
        
        mysqli_set_charset($mysqli, 'utf8'); 
		$result = mysqli_query($mysqli, $query);
		
		$tabla = $tabla.'<select id="centroCostosEmpresa"><option value="0">Seleccionar</option>';
    	while ($row = $result->fetch_array()){
			$tabla = $tabla . '<option value="'.$row['id'].'">'.$row['nombre'].'</option>';
		}
		$tabla = $tabla.'</select>';
    	return $tabla;
	}

	function ListarCentroCostos(){
		include('conexion.php');

		$query = "SELECT * FROM centro_costos ";
        
        mysqli_set_charset($mysqli, 'utf8'); 
		$result = mysqli_query($mysqli, $query);
		
		
		$tabla = '<div class="table-responsive"><table class="table table-bordered table-striped">';
		$tabla = $tabla . '<thead><tr style="background:#ffffff;"><td>EMPRESA</td><td>NOMBRE</td>';
		$tabla = $tabla . '<td>EDITAR</td></tr></thead>';
		$tabla = $tabla . '<tbody>';
    	while ($row = $result->fetch_array()){
			$empresa = $this->NombreEmpresa($row['empresa']);
			$tabla = $tabla . '<tr><td>'.$empresa.'</td><td>'.$row['descripcion'].'</td>';
			$tabla = $tabla . '<td><img onclick="EditarCentroCostos('.$row['id'].')" src="imagenes/editar.png"></td></tr>';
		
		}
    	$tabla = $tabla . '</tbody></table></div>';
    	return $tabla;
	}

	function ListarCentroCostos2($id){
		include('conexion.php');

		$query = "SELECT * FROM centro_costos WHERE id='$id'";
        
        mysqli_set_charset($mysqli, 'utf8'); 
		$result = mysqli_query($mysqli, $query);
		
		
		$tabla = $tabla . '';
    	while ($row = $result->fetch_array()){
			$tabla = $tabla . ''.$row['descripcion'].'#';
			
		}
		
		return $tabla;
	}

	function GuardaCentroCostos($empresa,$nombre){
		include('conexion.php');
		
		$nombre = utf8_decode($nombre);
		
		$sql = "INSERT INTO centro_costos (EMPRESA,DESCRIPCION) 
		VALUES ('$empresa','$nombre')";
					
		if (!$resultado = $mysqli->query($sql)) {
						
			echo "Lo sentimos, este sitio web está experimentando problemas.";
			echo "Error: La ejecución de la consulta falló debido a: \n";
			echo "Query: " . $sql . "\n";
			echo "Errno: " . $mysqli->errno . "\n";
			echo "Error: " . $mysqli->error . "\n";
						
			exit;
		} else {
			$idT = mysqli_insert_id($mysqli);
			echo 'EXITO';
		}
	}

	function EditaCentroCostos($id,$empresa,$nombre){
		include('conexion.php');
		
		$nombre = utf8_decode($nombre);
		
		$sql = "UPDATE centro_costos SET empresa='$empresa', descripcion='$nombre' WHERE id='$id' ";
					
		if (!$resultado = $mysqli->query($sql)) {
						
			echo "Lo sentimos, este sitio web está experimentando problemas.";
			echo "Error: La ejecución de la consulta falló debido a: \n";
			echo "Query: " . $sql . "\n";
			echo "Errno: " . $mysqli->errno . "\n";
			echo "Error: " . $mysqli->error . "\n";
						
			exit;
		} else {
			//$idT = mysqli_insert_id($mysqli);
			echo 'EXITO';
		}
	}

	function ListarUnidad(){
		include('conexion.php');

		$query = "SELECT * FROM unidad ";
        
        mysqli_set_charset($mysqli, 'utf8'); 
		$result = mysqli_query($mysqli, $query);
		
		
		$tabla = '<div class="table-responsive"><table class="table table-bordered table-striped">';
		$tabla = $tabla . '<thead><tr style="background:#ffffff;"><td>CENTRO COSTOS</td><td>NOMBRE</td>';
		$tabla = $tabla . '<td>EDITAR</td></tr></thead>';
		$tabla = $tabla . '<tbody>';
    	while ($row = $result->fetch_array()){
			$centro = $this->NombreCentroCostos($row['centro_costos']);
			$tabla = $tabla . '<tr><td>'.$centro.'</td><td>'.$row['descripcion'].'</td>';
			$tabla = $tabla . '<td><img onclick="EditarUnidad('.$row['id'].')" src="imagenes/editar.png"></td></tr>';
		
		}
    	$tabla = $tabla . '</tbody></table></div>';
    	return $tabla;
	}

	function ListarUnidad2($id){
		include('conexion.php');

		$query = "SELECT * FROM unidad WHERE id='$id' ";
        
        mysqli_set_charset($mysqli, 'utf8'); 
		$result = mysqli_query($mysqli, $query);
		
		
		while ($row = $result->fetch_array()){
			$tabla = $tabla . ''.$row['descripcion'].'#';
			
		}
    	return $tabla;
	}

	function SelectUnidad(){
		include('conexion.php');

		$query = "SELECT * FROM centro_costos ";
        
        mysqli_set_charset($mysqli, 'utf8'); 
		$result = mysqli_query($mysqli, $query);
		
		$tabla = $tabla.'<select id="select_centro_costos"><option value="0">Seleccionar</option>';
    	while ($row = $result->fetch_array()){
			$tabla = $tabla . '<option value="'.$row['id'].'">'.$row['descripcion'].'</option>';
		}
		$tabla = $tabla.'</select>';
    	return $tabla;
	}

	function GuardaUnidad($centro,$nombre){
		include('conexion.php');
		
		$nombre = utf8_decode($nombre);
		
		$sql = "INSERT INTO unidad (CENTRO_COSTOS,DESCRIPCION) 
		VALUES ('$centro','$nombre')";
					
		if (!$resultado = $mysqli->query($sql)) {
						
			echo "Lo sentimos, este sitio web está experimentando problemas.";
			echo "Error: La ejecución de la consulta falló debido a: \n";
			echo "Query: " . $sql . "\n";
			echo "Errno: " . $mysqli->errno . "\n";
			echo "Error: " . $mysqli->error . "\n";
						
			exit;
		} else {
			$idT = mysqli_insert_id($mysqli);
			echo 'EXITO';
		}
	}

	function EditaUnidad($id,$centro,$nombre){
		include('conexion.php');
		
		$nombre = utf8_decode($nombre);
		
		$sql = "UPDATE unidad SET centro_costos='$centro', descripcion='$nombre' WHERE id='$id' ";
					
		if (!$resultado = $mysqli->query($sql)) {
						
			echo "Lo sentimos, este sitio web está experimentando problemas.";
			echo "Error: La ejecución de la consulta falló debido a: \n";
			echo "Query: " . $sql . "\n";
			echo "Errno: " . $mysqli->errno . "\n";
			echo "Error: " . $mysqli->error . "\n";
						
			exit;
		} else {
			//$idT = mysqli_insert_id($mysqli);
			echo 'EXITO';
		}
	}


	function SelectCentroCostosUser(){
		include('conexion.php');

		$query = "SELECT * FROM centro_costos ";
        
        mysqli_set_charset($mysqli, 'utf8'); 
		$result = mysqli_query($mysqli, $query);
		
		$tabla = $tabla.'<select id="ucentro"><option value="0">Seleccionar</option>';
    	while ($row = $result->fetch_array()){
			$tabla = $tabla . '<option value="'.$row['id'].'">'.$row['descripcion'].'</option>';
		}
		$tabla = $tabla.'</select>';
    	return $tabla;
	}

	function ExtraerHorarios($id){
		include('conexion.php');

		$query = "SELECT * FROM horarios WHERE distrito LIKE '%$id%' AND estado='' ORDER BY dia,hora ASC";
		mysqli_set_charset($mysqli, 'utf8'); 
		$result = mysqli_query($mysqli, $query);
		
		$distritos='';
		$horarios='';
		while ($row = $result->fetch_array()){
			$nombre = $this->NombreAsesor($row['asesor']);
			$horarios = $horarios.$row['dia'].'#'.$row['hora']."#".$row['horaf']."#".$row['inicio']."#".$row['fin']."#".$row['distrito']."#";
			$horarios = $horarios.$row['asesor']."#".$nombre."#".$row['estado']."#%";
		}
    	return $horarios;
	}

	function ExtraerAntereserva(){
		include('conexion.php');

		//$query = "SELECT * FROM antereserva ";
		$query = "SELECT * FROM horarios WHERE distrito LIKE '%$id%' AND estado='1' ORDER BY dia,hora ASC";
		mysqli_set_charset($mysqli, 'utf8'); 
		$result = mysqli_query($mysqli, $query);
		
		$distritos='';
		$horarios='';
		while ($row = $result->fetch_array()){
			//$horarios = $horarios.$row['dia'].'#'.$row['horai']."#".$row['horaf']."#".$row['inicio']."#".$row['fin']."#".$row['asesor']."#%";
			$horarios = $horarios.$row['dia'].'#'.$row['hora']."#".$row['horaf']."#".$row['distrito']."#";
			$horarios = $horarios.$row['asesor']."#".$row['estado']."#%";
		}
    	return $horarios;
	}

}

?>