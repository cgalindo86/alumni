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
var puntos='';

$(document).ready(function () {
	MainApp();

	$mid = $("#mid").val();
	$("#mid").hide();

	MiPerfil();

	$.post("../controler/usuario.php", {
		accion: "22",
		id: $mid
	}, function(data){
		var d = data.split("#");
		minombre = d[0];
		miapellido = d[1];
		midocumento = d[2];
		micelular = d[3];

		$("#minombre").html("<b>"+minombre+" "+miapellido+'</b>');
	});

	$('#bfotos').click(function(){
		var message = ""; 
		var formData = new FormData($("#formulario")[0]);
		console.log(fil);
		console.log(formData);
		var asesor = $("#iasesor2").val();
		console.log("asesor",asesor);
		$.ajax({
			
			url: 'guarda.php?id='+$mid+'&asesor='+asesor, 
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
	Ocultar();
	$("#dashboard-content").show();
	console.log("ini");
}

function Ocultar(){
	
    $("#dashboard-content").hide();
    $("#campoMiPerfil").hide();
	$("#campoHorario").hide();
	$("#campoRestantes").hide();
	$("#campoEstatus").hide();
    $("#campoRenovacion").hide();
    $("#campoPerfil").hide();
	$("#campoContacto").hide();
	$("#campoCalificaciones").hide();
	
	console.log("ocultar");
}

function MiPerfil(){
	Ocultar();

	$("#campoPerfil").show();
	
	$.post("../controler/usuario.php", {
		accion: "45",
		id: $mid
	}, function(data){
		$("#cuerpoPerfil").show();
		$("#cuerpoPerfil").html(data);
	});

}

function Calificaciones(){
	Ocultar();
	$("#campoCalificaciones").show();
	$.post("../controler/usuario.php", {
		accion: "28",
		id: $mid
	}, function(data){
		var d = data.split("##");
		$("#elegirAsesor3").html(d[1]);
		
	});
}

function Califica($puntos){
	puntos = $puntos;
	document.getElementById("estrella1").style.backgroundColor="#FFFFFF";
	document.getElementById("estrella2").style.backgroundColor="#FFFFFF";
	document.getElementById("estrella3").style.backgroundColor="#FFFFFF";
	document.getElementById("estrella4").style.backgroundColor="#FFFFFF";
	document.getElementById("estrella5").style.backgroundColor="#FFFFFF";

	$("#ccalifica").html("<h1>Ha elegido calificar con "+puntos+" puntos</h1>");
	document.getElementById("estrella"+puntos).style.backgroundColor="#FF0000";
}

function ContactoAsesor(){
	Ocultar();
	$("#campoContacto").show();
	$("#Comentarios").hide();
	$("#Archivos").hide();
	$.post("../controler/usuario.php", {
		accion: "28",
		id: $mid
	}, function(data){
		var d = data.split("##");
		$("#elegirAsesor").html(d[0]);
		$("#elegirAsesor2").html(d[1]);
		
	});
}

function EnviarMensaje(){
	Ocultar();
	$("#campoContacto").show();
	$.post("../controler/usuario.php", {
		accion: "38",
		padre: $mid,
		asesor: $("#iasesor").val(),
		mensaje: $("#tucomentario").val()
	}, function(data){
		console.log(data);

		ContactoAsesor();
		$("#Comentarios").hide();
		$("#Archivos").hide();
		
	});
}

function EnviarCalificaciones(){
	var x = document.getElementById("iasesor2").selectedIndex;
	var y = document.getElementById("iasesor2").options;
	var iasesor2 = y[x].value;

	$.post("../controler/usuario.php", {
		accion: "46",
		padre: $mid,
		asesor: iasesor2,
		mensaje: $("#tucomentario2").val(),
		puntaje: puntos
	}, function(data){
		console.log(data);
		alert("Datos registrados. Gracias");
		MiPerfil();
	});
}

function PerfilAsesor(){
	Ocultar();

	$("#campoPerfil").show();
	
	$.post("../controler/usuario.php", {
		accion: "27",
		id: $mid
	}, function(data){
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

function EstatusAlumno(){
	Ocultar();
	$("#campoEstatus").show();
	$.post("../controler/usuario.php", {
		accion: "26",
		id: $mid
	}, function(data){
		console.log("estatus",data);
		if(data!=""){
			var dat = data.split("%");
			
			var $t = '<table class="table table-bordered table-striped" style="margin-left:20px; width:90%;">';
			$t = $t + '<tr style="background-color:#6EA4F6;"><td>FECHA</td><td>HORA INICIO</td><td>HORA FIN</td>';
			$t = $t + '<td>ALUMNO</td><td>ASESOR</td><td>COMENTARIO</td></tr>';
			
			var i;
			for(i=0; i<dat.length-1; i++){
				var e = dat[i].split("#");
				var n = e[0].split("-");
				$t = $t + '<tr><td>'+n[2]+"/"+n[1]+"/"+n[0]+'</td><td>'+e[1]+'</td><td>'+e[2]+'</td><td>'+e[3]+'</td><td>'+e[4]+'</td><td>'+e[5]+'</td></tr>';
			}
			$t = $t+'</table>';
			var mensaje='';
			mensaje = mensaje + '<br><br><center>ESTATUS ALUMNO</center>';
			
			mensaje = mensaje + '<br><br>'+$t+'<br><br>';
			$("#cuerpoEstatus").html(mensaje);
		} else {
			$("#cuerpoEstatus").html('<br><br>NO HAY DATOS DISPONIBLES<br><br>');
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
		accion: "23",
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
			$t = $t + '<tr><td>HORAS ESTUDIADAS</td><td>'+usadas+'</td></tr>';
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
		accion: "24",
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


