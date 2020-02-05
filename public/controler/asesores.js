var $senal='';
var $curso='';
var $tipoCurso='';
var $sesion='';
var $mid='';
var minombre,miapellido,midocumento,micelular;
var cont=0,cont2=0;    
var ext=0;
var ext2=0;
var fil = [];
var periodo,anio;

$(document).ready(function () {
	MainApp();

	$mid = $("#mid").val();
	$("#mid").hide();

	var d = new Date();
	if(d.getMonth()+1==1 || d.getMonth()+1==2 || d.getMonth()+1==3){ periodo=1; }
	if(d.getMonth()+1==4 || d.getMonth()+1==5 || d.getMonth()+1==6 || d.getMonth()+1==7){ periodo=2; }
	if(d.getMonth()+1==8 || d.getMonth()+1==9 || d.getMonth()+1==10 || d.getMonth()+1==11 || d.getMonth()+1==12){ periodo=3; }
	anio = d.getFullYear();

	console.log("periodo-anio",periodo+"-"+anio);

	$.post("../controler/usuario.php", {
		accion: "29",
		id: $mid
	}, function(data){
		var d = data.split("#");
		minombre = d[0];
		miapellido = d[1];
		midocumento = d[2];
		micelular = d[3];

		$("#minombre").html("<b>"+minombre+" "+miapellido+'</b>');
		PerfilAsesor();
	});

	$('#bfotos').click(function(){
		var message = ""; 
		var formData = new FormData($("#formulario")[0]);
		console.log(fil);
		console.log(formData);
		$.ajax({
			
			url: 'guarda.php?id='+$mid+'&asesor=', 
			type: 'POST',
			data: formData,
			cache: false,
			contentType: false,
			processData: false,
			
			beforeSend: function(){
				console.log("data");        
			},
			
			success: function(data){
				console.log("data2",data);
				
			},
			
			error: function(){
				console.log("data3");
			}
		});
	});

	document.getElementById("archivo[]").onchange = function(e) {
		var fil2 = document.getElementById("archivo[]").files;
        cont2++;
        
        ext = ext + fil2.length;
        ext2 = fil2.length;
        
        console.log("ext2",ext2);
        
        if(0<ext2){
            console.log('cero size',fil2[0].name);
            fil.push(fil2[0]);
        }
        
        if(1<ext2){
            fil.push(fil2[1]);
        }
        
        if(2<ext2){
            fil.push(fil2[2]);
        }
        
        if(3<ext2){
            fil.push(fil2[3]);
        }
        
        if(4<ext2){
            fil.push(fil2[4]);
        }
        
        if(5<ext2){
            fil.push(fil2[5]);
        }
        
        if(6<ext2){
            fil.push(fil2[6]);
        }
        
        if(7<ext2){
            fil.push(fil2[7]);
        }
        
        if(8<ext2){
            fil.push(fil2[8]);
        }
        
        if(9<ext2){
            fil.push(fil2[9]);
        }
        
        console.log("fil",fil);
        
        var $i=0;
        Fotear(0);
        
        function Fotear($i){
            console.log("fotear1",$i);
            if(fil[$i]!=null){
                var $a = $i+1;
                var $b = 'img'+$a;
				
				let reader = new FileReader();
                reader.readAsDataURL(fil[$i]);
                                
                reader.onload = function(){
                    
					
					if(fil[$i].size<=26214400 && (/\.(doc|docx|ppt|pptx|xls|xlsx|pdf|png|jpg|jpeg)$/i).test(fil[$i].name)){
                        document.getElementById($b).value=fil[$i].name;
						var $c=$i+1;
						Fotear($c);
                    } else {
                        alert("El archivo "+fil[$i].name+" no cumple los requisitos");
                        fil.splice($i,1);
                        var $c=$i+1;
                        Fotear2($c);
                    }
                    
                                
                };  
            }
		}
		
		function Fotear2($i){
            console.log("fotear1",$i);
            if(fil[$i]!=null){
				var $a = $i-1;
				if($a==0){$a = 1;}
                var $b = 'img'+$a;
				
				let reader = new FileReader();
                reader.readAsDataURL(fil[$i]);
                                
                reader.onload = function(){
                    
					
					if(fil[$i].size<=26214400 && (/\.(doc|docx|ppt|pptx|xls|xlsx|pdf|png|jpg|jpeg)$/i).test(fil[$i].name)){
                        document.getElementById($b).value=fil[$i].name;
						var $c=$i+1;
						Fotear($c);
                    } else {
                        alert("El archivo "+fil[$i].name+" no cumple los requisitos");
                        fil.splice($i,1);
                        var $c=$i+1;
                        Fotear2($c);
                    }
                    
                                
                };  
            }
        }
	};
	
});


function MainApp() {
	init();
}

function init(){
	$("#mgif").hide();
	//Ocultar();
	$("#dashboard-content").show();
	console.log("ini");
	
}

function Ocultar(){
	
    $("#dashboard-content").hide();
    $("#campoPerfil").hide();
    $("#campoAsesorias").hide();
    $("#campoPagos").hide();
	$("#campoHorario").hide();
	$("#campoRestantes").hide();
	$("#campoEstatus").hide();
    $("#campoRevisar").hide();
    $("#campoHistorial").hide();
	$("#campoContenidos").hide();
	console.log("ocultar");
}

function Calificaciones(){
	Ocultar();
	$("#campoCalificaciones").show();
	$.post("../controler/usuario.php", {
		accion: "28",
		id: $mid
	}, function(data){
		var d = data.split("##");
		$("#elegirAsesor3").html(d[0]);
		
	});
}

function ContenidoDisponible(){
	Ocultar();
	$("#campoContenidos").show();
	$.post("../controler/usuario.php", {
		accion: "41",
		id: $mid
	}, function(data){
		console.log("rest historial",data);
		if(data!=""){
			var dat = data.split("%");
			var $t = '<table class="table table-bordered table-striped" style="margin-left:20px; width:90%;">';
			$t = $t + '<tr style="background-color:#6EA4F6;"><td>FECHA</td><td>HORA</td>';
			$t = $t + '<td>PADRE</td><td>ARCHIVO</td></tr>';
			
			var i; var arch;
			for(i=0; i<dat.length-1; i++){
				var e = dat[i].split("#");
				var n = e[0].split("-");
				arch = '<a href="imagenes/archivos/'+e[5]+'/'+$mid+'/'+e[4]+'" target="_blank">Arch</a>';
				$t = $t + '<tr><td>'+n[2]+"/"+n[1]+"/"+n[0]+'</td><td>'+e[1]+'</td><td>'+e[2]+'</td><td>Archivo: '+arch+'</td></tr>';
				
			}
			
			$t = $t+'</table>';
			var mensaje='';
			mensaje = mensaje + '<br><br><center>CONTENIDO DISPONIBLE</center>';
			
			mensaje = mensaje + '<br><br>'+$t+'<br><br>';
			$("#cuerpoContenidos").html(mensaje);
		} else {
			$("#cuerpoContenidos").html('<br><br>NO HAY DATOS<br><br>');
		}
		
	});
}

function HistorialAsesorias(){
	Ocultar();
	$("#campoHistorial").show();
	$.post("../controler/usuario.php", {
		accion: "40",
		id: $mid
	}, function(data){
		console.log("rest historial",data);
		if(data!=""){
			var dat = data.split("%");
			var $t = '<table class="table table-bordered table-striped" style="margin-left:20px; width:90%;">';
			$t = $t + '<tr style="background-color:#6EA4F6;"><td>FECHA</td><td>ALUMNO</td>';
			$t = $t + '<td>HORAS</td><td>MONTO POR HORAS</td><td>TOTAL</td></tr>';
			
			var i;
			for(i=0; i<dat.length-1; i++){
				var e = dat[i].split("#");
				var n = e[0].split("-");
				$t = $t + '<tr><td>'+n[2]+"/"+n[1]+"/"+n[0]+'</td><td>'+e[1]+'</td><td>'+e[2]+'</td><td>'+e[3]+'</td><td>'+e[4]+'</td></tr>';
				
			}
			
			$t = $t+'</table>';
			var mensaje='';
			mensaje = mensaje + '<br><br><center>HISTORIAL DE ASESORIAS</center>';
			
			mensaje = mensaje + '<br><br>* Para que aparezca la asesoría dictada en esta sección, primero debe ingresar el comentario de la misma, el cual será visualizado por el padre del alumno.<br>'+$t+'<br><br>';
			$("#cuerpoHistorial").html(mensaje);
		} else {
			$("#cuerpoHistorial").html('<br><br><center>NO HAY DATOS<br><br>Para que aparezca la asesoría dictada en esta sección, primero debe ingresar el comentario de la misma, el cual será visualizado por el padre del alumno.</center>');
		}
		
	});
}

function RevisarComentarios(){
	var d = new Date();
	var mes;
	if(d.getMonth()+1<10){
		mes = parseInt("0"+d.getMonth()+1);
	} else {
		mes = parseInt(d.getMonth()+1);
	}
	var diaActual = d.getFullYear()*10000+mes*100+d.getDate();
	console.log("dia actual", diaActual);
	Ocultar();
	$("#campoRevisar").show();
	$.post("../controler/usuario.php", {
		accion: "39",
		id: $mid
	}, function(data){
		console.log("rest est",data);
		if(data!=""){
			var dat = data.split("%");
			var $t = '<table class="table table-bordered table-striped" style="margin-left:20px; width:90%;">';
			$t = $t + '<tr style="background-color:#6EA4F6;"><td>FECHA</td><td>HORA</td>';
			$t = $t + '<td>PADRE</td><td>COMENTARIO</td></tr>';
			
			var i;
			for(i=0; i<dat.length-1; i++){
				var e = dat[i].split("#");
				var n = e[0].split("-");
				$t = $t + '<tr><td>'+n[2]+"/"+n[1]+"/"+n[0]+'</td><td>'+e[1]+'</td><td>'+e[2]+'</td><td>'+e[3]+'</td></tr>';
				
			}
			/*d.forEach(element => {
				var e = d[i].split("#");
				$t = $t + '<tr><td>'+e[0]+'</td><td>'+e[1]+'</td><td>'+e[2]+'</td></tr>';
				//i++;
			});*/
			$t = $t+'</table>';
			var mensaje='';
			mensaje = mensaje + '<br><br><center>REVISAR COMENTARIOS DE PADRES</center>';
			
			mensaje = mensaje + '<br><br>'+$t+'<br><br>';
			$("#cuerpoRevisar").html(mensaje);
		} else {
			$("#cuerpoRevisar").html('<br><br>NO HAY DATOS<br><br>');
		}
		
	});
}

function ContactoAsesor(){
	Ocultar();
	$("#campoContacto").show();
	$.post("../controler/usuario.php", {
		accion: "28",
		id: $mid
	}, function(data){
		var d = data.split("##");
		$("#elegirAsesor").html(d[0]);
		$("#elegirAsesor2").html(d[1]);
		
	});
}

function GuardaInfoPagos(){
    $.post("../controler/usuario.php", {
		accion: "33",
        id: $mid,
        banco: $("#banco").val(),
        cuenta: $("#cuenta").val(),
        cci: $("#cci").val()
	}, function(data){
        InfoPagos();
    });
}

function EditarPagos(){
    $.post("../controler/usuario.php", {
		accion: "32",
		id: $mid
	}, function(data){
        var d = data.split("#");
        if(d[1]!=null || d[1]!=undefined){
            var dist='<table class="table table-bordered table-striped" style="margin-left:20px; width:90%;">';
            dist = dist + '<tr><td style="width:50%; background-color:#6EA4F6;">BANCO</td><td style="width:50%; background-color:#ffffff;"><input id="banco" type="text" value="'+d[0]+'"></td></tr>';
            dist = dist + '<tr><td style="width:50%; background-color:#6EA4F6;">CUENTA</td><td style="width:50%; background-color:#ffffff;"><input id="cuenta" type="text" value="'+d[1]+'"></td></tr>';
            dist = dist + '<tr><td style="width:50%; background-color:#6EA4F6;">CCI</td><td style="width:50%; background-color:#ffffff;"><input id="cci" type="text" value="'+d[2]+'"></td></tr>';
                    
            var mensaje='';
            mensaje = mensaje + '<br><br><center>INFORMACIÓN PARA PAGOS';
            mensaje = mensaje + '<br><br>'+dist+'<br><br>';
            mensaje = mensaje + '<button onclick="GuardaInfoPagos()" class="btn bg-primary">GUARDAR</button></center>';
            $("#cuerpoPagos").html(mensaje);
        } else {
            var dist='<table class="table table-bordered table-striped" style="margin-left:20px; width:90%;">';
            dist = dist + '<tr><td style="width:50%; background-color:#6EA4F6;">BANCO</td><td style="width:50%; background-color:#ffffff;"><input id="banco" type="text"></td></tr>';
            dist = dist + '<tr><td style="width:50%; background-color:#6EA4F6;">CUENTA</td><td style="width:50%; background-color:#ffffff;"><input id="cuenta" type="text"></td></tr>';
            dist = dist + '<tr><td style="width:50%; background-color:#6EA4F6;">CCI</td><td style="width:50%; background-color:#ffffff;"><input id="cci" type="text"></td></tr>';
                    
            var mensaje='';
            mensaje = mensaje + '<br><br><center>INFORMACIÓN PARA PAGOS';
            mensaje = mensaje + '<br><br>'+dist+'<br><br>';
            mensaje = mensaje + '<button onclick="GuardaInfoPagos()" class="btn bg-primary">GUARDAR</button></center>';
            $("#cuerpoPagos").html(mensaje);
        }
    });
    
}

function InfoPagos(){
    Ocultar();
    $("#campoPagos").show();
    $.post("../controler/usuario.php", {
		accion: "32",
		id: $mid
	}, function(data){
        var d = data.split("#");
        if(d[1]!=null || d[1]!=undefined){
            var dist='<table class="table table-bordered table-striped" style="margin-left:20px; width:90%;">';
            dist = dist + '<tr><td style="width:50%; background-color:#6EA4F6;">BANCO</td><td style="width:50%; background-color:#ffffff;">'+d[0]+'</td></tr>';
            dist = dist + '<tr><td style="width:50%; background-color:#6EA4F6;">CUENTA</td><td style="width:50%; background-color:#ffffff;">'+d[1]+'</td></tr>';
            dist = dist + '<tr><td style="width:50%; background-color:#6EA4F6;">CCI</td><td style="width:50%; background-color:#ffffff;">'+d[2]+'</td></tr>';
            var mensaje='';
            mensaje = mensaje + '<br><br><center>INFORMACIÓN PARA PAGOS';
            mensaje = mensaje + '<br><br>'+dist+'<br><br>';
            mensaje = mensaje + '<button onclick="EditarPagos()" class="btn bg-primary">EDITAR</button></center>';
            $("#cuerpoPagos").html(mensaje);
        } else {
            var dist='<table class="table table-bordered table-striped" style="margin-left:20px; width:90%;">';
            dist = dist + '<tr><td style="width:50%; background-color:#6EA4F6;">BANCO</td><td style="width:50%; background-color:#ffffff;"></td></tr>';
            dist = dist + '<tr><td style="width:50%; background-color:#6EA4F6;">CUENTA</td><td style="width:50%; background-color:#ffffff;"></td></tr>';
            dist = dist + '<tr><td style="width:50%; background-color:#6EA4F6;">CCI</td><td style="width:50%; background-color:#ffffff;"></td></tr>';
            
            var mensaje='';
            mensaje = mensaje + '<br><br><center>INFORMACIÓN PARA PAGOS';
            mensaje = mensaje + '<br><br>'+dist+'<br><br>';
            mensaje = mensaje + '<button onclick="EditarPagos()" class="btn bg-primary">EDITAR</button></center>';
            $("#cuerpoPagos").html(mensaje);
        }
        
	});    
}

function EditarInfoAsesorias(){
	var d = new Date();
	var mes;
	if(d.getMonth()+1<10){
		mes = parseInt("0"+d.getMonth()+1);
	} else {
		mes = parseInt(d.getMonth()+1);
	}
	var diaActual = d.getFullYear()*10000+mes*100+d.getDate();
	console.log("dia actual", diaActual);
	var comodin=12;
	if(mes==3 || mes==7 || mes==12 || mes==comodin){
		var ip = "renovacionhorario.php?id="+$mid;
		var iframe = '<div class="embed-container">';
		iframe = iframe + '<iframe width="560" height="315" src="'+ip+'" frameborder="0" allowfullscreen></iframe>';
		iframe = iframe + '</div>';
		$("#cuerpoAsesorias").html(iframe);
        $("#cuerpoAsesorias2").html(" ");
	} else {
		alert("Se puede editar esta sección en los meses de marzo, julio y diciembre");
	}
}

function InfoAsesorias(){
    var d = new Date();
	var mes;
	if(d.getMonth()+1<10){
		mes = parseInt("0"+d.getMonth()+1);
	} else {
		mes = parseInt(d.getMonth()+1);
	}
	var diaActual = d.getFullYear()*10000+mes*100+d.getDate();
    console.log("dia actual", diaActual);
    
    Ocultar();
    $("#campoAsesorias").show();
    $.post("../controler/usuario.php", {
		accion: "31",
		id: $mid,
		anio: anio,
		periodo: periodo

	}, function(data){
		var d = data.split("__");
        console.log('dist',d[0]);
        var e = d[0].split("#");
        var i;
        var dist='<table class="table table-bordered table-striped" style="margin-left:20px; width:90%;">';
        var dis='';
        for(i=0; i<e.length; i++){
            if(dis.includes(e[i])){

            } else {
                dis = dis + e[i] + '<br>';
            }
        }
        dist = dist + '<tr><td style="width:50%; background-color:#6EA4F6;">DISTRITOS DE COBERTURA</td><td style="width:50%; background-color:#ffffff;">'+dis+'</td></tr></table>';

        var f = d[1].split("%");
        var $t = '';
        $t = $t + '<table class="table table-bordered table-striped" style="margin-left:20px; width:90%;">';
		$t = $t + '<tr style="background-color:#6EA4F6;"><td>DIA</td><td>HORA INICIO</td><td>HORA FIN</td>';
		$t = $t + '</tr>';
			
        var ii;
        var tab='', dia='', horai=2400, horaf=0, hi = '', hf='';

		for(ii=0; ii<f.length-1; ii++){
			var ee = f[ii].split("#");
			var diaSemana;
			if(ee[0]=="1"){
				diaSemana="LUNES";
			} else if(ee[0]=="2"){
				diaSemana="MARTES";
			} else if(ee[0]=="3"){
				diaSemana="MIERCOLES";
			} else if(ee[0]=="4"){
				diaSemana="JUEVES";
			} else if(ee[0]=="5"){
				diaSemana="VIERNES";
			} else if(ee[0]=="6"){
				diaSemana="SABADO";
			} else if(ee[0]=="7"){
				diaSemana="DOMINGO";
			}
            
            $t = $t + '<tr><td>'+diaSemana+'</td><td>'+ee[1]+'</td><td>'+ee[2]+'</td></tr>';
            tab = tab + f[ii] + '<br>';
			
        }
        
        $t = $t + '</table>';
        var mensaje='';
			mensaje = mensaje + '<br><br><center>HORARIOS DISPONIBLES -- <button onclick="EditarInfoAsesorias()" class="btn bg-primary" >EDITAR</button></center>';
			//mensaje = mensaje + '<div style="margin-left:20px;"><table><tr style="background-color:#C8CBCF;"><td>FECHA PASADA</td></tr>';
			//mensaje = mensaje + '<tr style="background-color:#ffffff;"><td>FECHA PENDIENTE</td></tr></table></div>';
			//mensaje = mensaje + '<br><br><button onclick="EditarInfoAsesorias()" class="btn bg-primary" >EDITAR</button><br>';
		mensaje = mensaje + '<br><br>'+$t+'<br><br>';
			
        $("#cuerpoAsesorias").html(dist);
        $("#cuerpoAsesorias2").html(mensaje);
        
	});
}

function PerfilAsesor(){
	Ocultar();

	$("#campoPerfil").show();
	
	$.post("../controler/usuario.php", {
		accion: "30",
		id: $mid
	}, function(data){
		$("#cuerpoPerfil").show();
		$("#cuerpoPerfil").html(data);
	});

}

function Renovacion(){
	Ocultar();
	$("#campoRenovacion").show();
	var ip = "renovacion.php?id="+$mid;
	var iframe = '<div class="embed-container">';
    iframe = iframe + '<iframe width="560" height="315" src="'+ip+'" frameborder="0" allowfullscreen></iframe>';
	iframe = iframe + '</div>';
	$("#cuerpoRenovacion").html(iframe);
}

function EnviarComentario($id){

	$.post("../controler/usuario.php", {
		accion: "37",
		id: $id,
		mensaje: $("#coment").val()
	}, function(data){
		console.log(data + " - "+$id);
		EstatusAlumno();
	});

}

function InsComentario($id,$fechita){
	console.log($fechita);
	var d = new Date();
	var mes;
	if(d.getMonth()+1<10){
		mes = parseInt("0"+d.getMonth()+1);
	} else {
		mes = parseInt(d.getMonth()+1);
	}

	var f = $fechita.split("-");
	var diaSelec = parseInt(f[0])*10000+parseInt(f[1])*100+parseInt(f[2]);
	var diaActual = d.getFullYear()*10000+mes*100+d.getDate();

	if(diaSelec<=diaActual){
		var com='<div class="card">';
		com = com + '<h3>Envia tu comentario de la clase:</h3><div id="datClase"></div>';
		com = com + '<br><br>';
		com = com + '<textarea id="coment" rows="4" cols="50">Redacta aquí tu comentario</textarea>';
		com = com + '<br><br>';
		com = com + '<button class="btn bg-primary" onclick="EnviarComentario('+$id+')">ENVIAR</button>';
		com = com + '</div>';	
		console.log("com",com);
		$("#cuerpoEstatus").html(com);
	} else {
		alert("Podrá ingresar comentarios en fecha igual o posterior a la clase dictada.");
	}
	
}

function EstatusAlumno(){
	var d = new Date();
	var mes;
	if(d.getMonth()+1<10){
		mes = parseInt("0"+d.getMonth()+1);
	} else {
		mes = parseInt(d.getMonth()+1);
	}
	var diaActual = d.getFullYear()*10000+mes*100+d.getDate();
	console.log("dia actual", diaActual);
	Ocultar();
	$("#campoEstatus").show();
	$.post("../controler/usuario.php", {
		accion: "36",
		id: $mid
	}, function(data){
		console.log("rest est",data);
		if(data!=""){
			var dat = data.split("%");
			var $t = '<table class="table table-bordered table-striped" style="margin-left:20px; width:90%;">';
			$t = $t + '<tr style="background-color:#6EA4F6;"><td>FECHA</td><td>HORARIO</td>';
			$t = $t + '<td>ALUMNO</td><td>COMENTARIO</td></tr>';
			
			var i;
			for(i=0; i<dat.length-1; i++){
				var e = dat[i].split("#");
				var n = e[0].split("-");
				var nn = parseInt(n[0])*10000+parseInt(n[1])*100+parseInt(n[2]);
				if(nn<diaActual){
					$t = $t + '<tr style="background-color:#C8CBCF;"><td>'+n[2]+"/"+n[1]+"/"+n[0]+'</td><td>'+e[1]+' - '+e[2]+'</td><td>'+e[3]+'</td><td>'+e[4]+'</td></tr>';
				} else {
					$t = $t + '<tr><td>'+n[2]+"/"+n[1]+"/"+n[0]+'</td><td>'+e[1]+' - '+e[2]+'</td><td>'+e[3]+'</td><td>'+e[4]+'</td></tr>';
				}
				
			}
			/*d.forEach(element => {
				var e = d[i].split("#");
				$t = $t + '<tr><td>'+e[0]+'</td><td>'+e[1]+'</td><td>'+e[2]+'</td></tr>';
				//i++;
			});*/
			$t = $t+'</table>';
			var mensaje='';
			mensaje = mensaje + '<br><br><center>INGRESAR COMENTARIOS</center>';
			mensaje = mensaje + '<div style="margin-left:20px;"><table><tr style="background-color:#C8CBCF;"><td>FECHA PASADA</td></tr>';
			mensaje = mensaje + '<td>FECHA PENDIENTE</td></tr></table></div>';
			
			mensaje = mensaje + '<br><br>'+$t+'<br><br>';
			$("#cuerpoEstatus").html(mensaje);
		} else {
			$("#cuerpoEstatus").html('<br><br>NO HAY DATOS<br><br>');
		}
		
	});
}

function Restantes(){
	var d = new Date();
	var mes;
	if(d.getMonth()+1<10){
		mes = parseInt("0"+d.getMonth()+1);
	} else {
		mes = parseInt(d.getMonth()+1);
	}
	var diaActual = d.getFullYear()*10000+mes*100+d.getDate();
	console.log("dia actual", diaActual);
	Ocultar();
	$("#campoRestantes").show();
	$.post("../controler/usuario.php", {
		accion: "35",
		id: $mid
	}, function(data){
		console.log("rest1",data);
		if(data!=""){
			var dat = data.split("%");
			
			var total=0,restantes=0,usadas=0;
			var i;
			for(i=0; i<dat.length-1; i++){
				var e = dat[i].split("#");
				var n = e[0].split("-");
				var nn = parseInt(n[0])*10000+parseInt(n[1])*100+parseInt(n[2]);
				total = total + parseInt(e[2])-parseInt(e[1]);
				
				if(e[3]!=""){
					usadas = usadas + parseInt(e[2])-parseInt(e[1]);
				} else {
					restantes = restantes + parseInt(e[2])-parseInt(e[1]);
				}
				

				console.log("rest2",total+"-"+usadas+"-"+restantes);
			}

				total = total/100;
				usadas = usadas/100;
				restantes = restantes/100;

			var $t = '<table class="table table-bordered table-striped" style="margin-left:20px; width:90%;">';
			$t = $t + '<tr><td>HORAS TOTALES</td><td>'+total+'</td></tr>';
			$t = $t + '<tr><td>HORAS RESTANTES</td><td>'+restantes+'</td></tr>';
			$t = $t + '<tr><td>HORAS DICTADAS</td><td>'+usadas+'</td></tr>';
			$t = $t+'</table>';
			var mensaje='';
			mensaje = mensaje + '<br><br><center>DESGLOSE DE HORAS</center>';
			
			mensaje = mensaje + '<br><br>'+$t+'<br><br>';
			$("#cuerpoRestantes").html(mensaje);
		} else {
			$("#cuerpoRestantes").html('<br><br>NO HAY DATOS DISPONIBLES<br><br>');
		}
		//$("#cuerpoRestantes").html('<br><br>'+data+'<br><br>');
	});
}

function Horario(){
	var d = new Date();
	var mes;
	if(d.getMonth()+1<10){
		mes = parseInt("0"+d.getMonth()+1);
	} else {
		mes = parseInt(d.getMonth()+1);
	}
	var diaActual = d.getFullYear()*10000+mes*100+d.getDate();
	console.log("dia actual", diaActual);
	Ocultar();
	$("#campoHorario").show();
	$.post("../controler/usuario.php", {
		accion: "34",
		id: $mid
	}, function(data){
		console.log("rest",data);
		if(data!=""){
			var dat = data.split("%");
			var $t = '<table class="table table-bordered table-striped" style="margin-left:20px; width:90%;">';
			$t = $t + '<tr style="background-color:#6EA4F6;"><td>FECHA</td><td>HORA INICIO</td><td>HORA FIN</td>';
			$t = $t + '<td>ALUMNO</td><td>CURSO</td></tr>';
			
			var i;
			for(i=0; i<dat.length-1; i++){
				var e = dat[i].split("#");
				var n = e[0].split("-");
				var nn = parseInt(n[0])*10000+parseInt(n[1])*100+parseInt(n[2]);
				if(nn<diaActual){
					$t = $t + '<tr style="background-color:#C8CBCF;"><td>'+n[2]+"/"+n[1]+"/"+n[0]+'</td><td>'+e[1]+'</td><td>'+e[2]+'</td><td>'+e[3]+'</td><td>'+e[4]+'</td></tr>';
				} else {
					$t = $t + '<tr><td>'+n[2]+"/"+n[1]+"/"+n[0]+'</td><td>'+e[1]+'</td><td>'+e[2]+'</td><td>'+e[3]+'</td><td>'+e[4]+'</td></tr>';
				}
				
			}
			/*d.forEach(element => {
				var e = d[i].split("#");
				$t = $t + '<tr><td>'+e[0]+'</td><td>'+e[1]+'</td><td>'+e[2]+'</td></tr>';
				//i++;
			});*/
			$t = $t+'</table>';
			var mensaje='';
			mensaje = mensaje + '<br><br><center>HORARIO</center>';
			mensaje = mensaje + '<div style="margin-left:20px;"><table><tr style="background-color:#C8CBCF;"><td>FECHA PASADA</td></tr>';
			mensaje = mensaje + '<td>FECHA PENDIENTE</td></tr></table></div>';
			
			mensaje = mensaje + '<br><br>'+$t+'<br><br>';
			$("#cuerpoHorario").html(mensaje);
		} else {
			$("#cuerpoHorario").html('<br><br>NO HAY HORARIOS SEPARADOS<br><br>');
		}
		
	});
}

function EditarAsesores($id){
	$("#tabla_asesores1").hide();
	$("#nuevoAsesor").hide();
	$("#guardaAsesores1").hide();
	$("#guardaAsesores2").show();
	$("#campoAsesores").show();
	$("#cuerpoAsesores").show();

	$mid = $id;

	$.post("../controler/usuario.php", {
		accion: "5",
		id: $mid
	}, function(htmlexterno){
		var d = htmlexterno.split("#");
		document.getElementById("asapellidos").value = d[0];
		document.getElementById("asnombres").value = d[1];
		document.getElementById("asnacionalidad").value = d[2];
		document.getElementById("asdocumento").value = d[3];
		document.getElementById("asdireccion").value = d[4];
		document.getElementById("asdistrito").value = d[5];
		document.getElementById("ascorreo").value = d[6];
		document.getElementById("ascelular").value = d[7];
	});

}

function GuardaAsesores($opc){
	console.log("opc",$opc);
	var x = document.getElementById("asestado").selectedIndex;
	var y = document.getElementById("asestado").options;
	var estado = y[x].value;

	if($opc=="1"){
		console.log("opc1",$opc);
		$.post("../controler/usuario.php", {
			accion: "6",
			opcion: $opc,
			id: "",
			apellidos: $("#asapellidos").val(),
			nombre: $("#asnombres").val(),
			nacionalidad: $("#asnacionalidad").val(),
			documento: $("#asdocumento").val(),
			direccion: $("#asdireccion").val(),
			distrito: $("#asdistrito").val(),
			correo: $("#ascorreo").val(),
			celular: $("#ascelular").val(),
			estado: estado
		}, function(htmlexterno){
			Asesores(1);
		});
	} else {
		console.log("opc2",$opc);
		
		$.post("../controler/usuario.php", {
			accion: "6",
			opcion: $opc,
			id: $mid,
			apellidos: $("#asapellidos").val(),
			nombre: $("#asnombres").val(),
			nacionalidad: $("#asnacionalidad").val(),
			documento: $("#asdocumento").val(),
			direccion: $("#asdireccion").val(),
			distrito: $("#asdistrito").val(),
			correo: $("#ascorreo").val(),
			celular: $("#ascelular").val(),
			estado: estado
		}, function(htmlexterno){
			Asesores(1);
		});
	}
}



function GuardaInteres(){
	var x = document.getElementById("itipo").selectedIndex;
    var y = document.getElementById("itipo").options;
	var tipo = y[x].value;
	
	if(tipo!="0"){
		var v = document.getElementById("ititulo").value;
		var v2 = document.getElementById("idetalle").value;
		var mat = document.getElementById("itexto").value;
		if(v!="" && v2!="2"){
			$.post("../controler/usuario.php", {
				accion: "19",
				titulo: v,
				detalle: v2,
				tipo: tipo,
				material: mat

			}, function(htmlexterno){
				Interes();
			});
		} else {

		}
	} else {
		alert("Elegir tipo material");
	}
}


