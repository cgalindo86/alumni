<?php

    include('conexion.php');

    if($_GET['asesor']!=""){
        $asesor = $_GET['asesor'];
        $query = "SELECT * FROM asesores WHERE id='$asesor'";
        mysqli_set_charset($mysqli, 'utf8'); 
        $result = mysqli_query($mysqli, $query);
        	
        while ($row = $result->fetch_array()){
            $pass = $row['contrasena'];
            $correo = $row['correo'];
                    
        }

        $mensaje = '<!DOCTYPE html><html><head><meta http-equiv="Content-Type" content="text/html; charset=gb18030"></head><body>';
            $mensaje = $mensaje.'Estimado usuario: <br><br>';
            $mensaje = $mensaje.'<br>Tenemos el agrado de comunicarnos con usted para informar sus datos de ingreso en nuestra plataforma ALUMNI<br>';
            $mensaje = $mensaje.'Usuario: '.$correo.'<br>';
            $mensaje = $mensaje.'Contraseña: '.$pass.'<br><br>';
            $mensaje = $mensaje.'Ingrese aquí: <a href="http://161.132.208.62/sda/alumni/public/view/login.html"><br><br>';
            $mensaje = $mensaje.'Atentamente, <br><br><center><img src="http://161.132.208.62/sda/alumni/images/logo.png"></center>';
            $mensaje = $mensaje.'</body></html>';
             
        	$to = $correo;
            $subject = "Bienvenido a ALUMNI";
            
            $headers1 = "MIME-Version: 1.0" . "\r\n";
            
            $headers2 = "From: cgalindo86.cg@gmail.com" . "\r\n" . "CC: cgalindo86.cg@gmail.com". "\r\n";
        	$headers3 = "Content-type:text/html;charset=UTF-8" . "\r\n";
     
     		$headers = $headers1.$headers2.$headers3;
    
            mail($to, $subject, $mensaje, $headers);
    }

    if($_GET['padre']!=""){
        $padre = $_GET['padres'];
        $query = "SELECT * FROM padres WHERE id='$padre'";
        mysqli_set_charset($mysqli, 'utf8'); 
        $result = mysqli_query($mysqli, $query);
        	
        while ($row = $result->fetch_array()){
            $pass = $row['contrasena'];
            $correo = $row['correo'];
                    
        }

        $mensaje = '<!DOCTYPE html><html><head><meta http-equiv="Content-Type" content="text/html; charset=gb18030"></head><body>';
            $mensaje = $mensaje.'Estimado usuario: <br><br>';
            $mensaje = $mensaje.'<br>Tenemos el agrado de comunicarnos con usted para informar sus datos de ingreso en nuestra plataforma ALUMNI<br>';
            $mensaje = $mensaje.'Usuario: '.$correo.'<br>';
            $mensaje = $mensaje.'Contraseña: '.$pass.'<br><br>';
            $mensaje = $mensaje.'Ingrese aquí: <a href="http://161.132.208.62/sda/alumni/public/view/login.html"><br><br>';
            $mensaje = $mensaje.'Atentamente, <br><br><center><img src="http://161.132.208.62/sda/alumni/images/logo.png"></center>';
            $mensaje = $mensaje.'</body></html>';
             
        	$to = $correo;
            $subject = "Bienvenido a ALUMNI";
            
            $headers1 = "MIME-Version: 1.0" . "\r\n";
            
            $headers2 = "From: cgalindo86.cg@gmail.com" . "\r\n" . "CC: cgalindo86.cg@gmail.com". "\r\n";
        	$headers3 = "Content-type:text/html;charset=UTF-8" . "\r\n";
     
     		$headers = $headers1.$headers2.$headers3;
    
            mail($to, $subject, $mensaje, $headers);
    }
    


?>