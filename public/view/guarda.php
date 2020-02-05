<?php
	$id=$_GET['id'];
	$asesor=$_GET['asesor'];

	mkdir('imagenes/archivos/'.$id);
	mkdir('imagenes/archivos/'.$id.'/'.$asesor.'/');
	//Como el elemento es un arreglos utilizamos foreach para extraer todos los valores
	foreach($_FILES["archivo"]['tmp_name'] as $key => $tmp_name)
	{
		//Validamos que el archivo exista
		if($_FILES["archivo"]["name"][$key]) {
			$filename = $_FILES["archivo"]["name"][$key]; //Obtenemos el nombre original del archivo
			$source = $_FILES["archivo"]["tmp_name"][$key]; //Obtenemos un nombre temporal del archivo
			
			$directorio = 'imagenes/archivos/'.$id.'/'.$asesor.'/'; //Declaramos un  variable con la ruta donde guardaremos los archivos
			
			//Validamos si la ruta de destino existe, en caso de no existir la creamos
			if(!file_exists($directorio)){
				mkdir($directorio, 0777) or die("No se puede crear el directorio de extracci&oacute;n");	
			}
			
			$img_info = getimagesize($_FILES["archivo"] ['tmp_name'][$key]); //
            $ancho=$img_info[0];
            $alto=$img_info[1];
                                            
                                            
			//if($_FILES['archivo']['size'][$key] <= 1048546) {
            
            
            
            //if( $_FILES['archivo']['size'] <= 26214400 ) {
			    $dir=opendir($directorio); //Abrimos el directorio de destino
			    $target_path = $directorio.'/'.$filename; //Indicamos la ruta de destino, así como el nombre del archivo
			    
			    
			    if(move_uploaded_file($source, $target_path)) {	
						//echo "El archivo $filename se ha almacenado en forma exitosa.<br>";
						Insertar($id,$asesor,$filename);
    				} else {	
    				    //echo "Ha ocurrido un error, por favor inténtelo de nuevo.<br>";
    			}
    			closedir($dir); //Cerramos el directorio de destino
			
            
            
            $img_info = getimagesize($_FILES["archivo"]['tmp_name'][$key]); //
            $ancho=$img_info[0];
            $alto=$img_info[1];
                                            
            //echo $_FILES["archivo"]["type"][$key]." ancho: ".$ancho." - alto: ".$alto.'<br>';
            $directorio = 'imagenes/archivos/'.$id.'/'.$_FILES["archivo"]["name"][$key];
            //echo $directorio.'<br>'.$_FILES["archivo"]["size"][$key].'__________________________________<br>';
            
		}
	}
	
	function Insertar($padre,$asesor,$archivo){
		include('../model/conexion.php');

		date_default_timezone_set('America/Lima');
		$fecha = date('Y-m-d');
		$hora = date('H:i:s');

        $sql = "INSERT INTO archivos (PADRE,ASESOR,ARCHIVO,FECHA,HORA) 
        VALUES ('$padre','$asesor','$archivo','$fecha','$hora')";
        
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
	
    echo '--ok--'.$asesor;
?>