$arrayDias='';
$idPadre='';
$dia='';
var sen = true;
var fechaElegida='';
var cantHoras=0;
var serv = [];
var eve2 = [];
var calendarEl,calendar;
var d = new Date();
var anio = d.getFullYear();
var miasesor;
var paso1=false;
var paso2=false;
var paso3=false;
var paso4=false;
var paso5=false;
var cter=0;
var mensaje = '';

var feriados = [];
	feriados.push(
		{
			title: 'FERIADO',
			start: anio+'-01-01T00:00:00',
			end: anio+'-01-01T23:59:59'
		  });
	feriados.push(
		{
			title: 'FERIADO',
			start: anio+'-05-01T00:00:00',
			end: anio+'-05-01T23:59:59'
		  });
	feriados.push(
		{
			title: 'FERIADO',
			start: anio+'-06-29T00:00:00',
			end: anio+'-06-29T23:59:59'
		  });
	feriados.push(
		{
			title: 'FERIADO',
			start: anio+'-07-28T00:00:00',
			end: anio+'-07-28T23:59:59'
		  });
	feriados.push(
		{
			title: 'FERIADO',
			start: anio+'-07-29T00:00:00',
			end: anio+'-07-29T23:59:59'
		  });
	feriados.push(
		{
			title: 'FERIADO',
			start: anio+'-08-30T00:00:00',
			end: anio+'-08-30T23:59:59'
		  });
	feriados.push(
		{
			title: 'FERIADO',
			start: anio+'-10-08T00:00:00',
			end: anio+'-10-08T23:59:59'
		  });
	feriados.push(
		{
			title: 'FERIADO',
			start: anio+'-11-01T00:00:00',
			end: anio+'-11-01T23:59:59'
		  });
	feriados.push(
		{
			title: 'FERIADO',
			start: anio+'-12-25T00:00:00',
			end: anio+'-12-25T23:59:59'
		  });
	feriados.push(
		{
			title: 'FERIADO',
			start: anio+'-12-08T00:00:00',
			end: anio+'-12-08T23:59:59'
		  });
	anio++;
	feriados.push(
		{
			title: 'FERIADO',
			start: anio+'-01-01T00:00:00',
			end: anio+'-01-01T23:59:59'
		  });
	feriados.push(
		{
			title: 'FERIADO',
			start: anio+'-05-01T00:00:00',
			end: anio+'-05-01T23:59:59'
		  });
	feriados.push(
		{
			title: 'FERIADO',
			start: anio+'-06-29T00:00:00',
			end: anio+'-06-29T23:59:59'
		  });
	feriados.push(
		{
			title: 'FERIADO',
			start: anio+'-07-28T00:00:00',
			end: anio+'-07-28T23:59:59'
		  });
	feriados.push(
		{
			title: 'FERIADO',
			start: anio+'-07-29T00:00:00',
			end: anio+'-07-29T23:59:59'
		  });
	feriados.push(
		{
			title: 'FERIADO',
			start: anio+'-08-30T00:00:00',
			end: anio+'-08-30T23:59:59'
		  });
	feriados.push(
		{
			title: 'FERIADO',
			start: anio+'-10-08T00:00:00',
			end: anio+'-10-08T23:59:59'
		  });
	feriados.push(
		{
			title: 'FERIADO',
			start: anio+'-11-01T00:00:00',
			end: anio+'-11-01T23:59:59'
		  });
	feriados.push(
		{
			title: 'FERIADO',
			start: anio+'-12-25T00:00:00',
			end: anio+'-12-25T23:59:59'
		  });
	feriados.push(
		{
			title: 'FERIADO',
			start: anio+'-12-08T00:00:00',
			end: anio+'-12-08T23:59:59'
		  });
	anio++;
	feriados.push(
		{
			title: 'FERIADO',
			start: anio+'-01-01T00:00:00',
			end: anio+'-01-01T23:59:59'
		  });
	feriados.push(
		{
			title: 'FERIADO',
			start: anio+'-05-01T00:00:00',
			end: anio+'-05-01T23:59:59'
		  });
	feriados.push(
		{
			title: 'FERIADO',
			start: anio+'-06-29T00:00:00',
			end: anio+'-06-29T23:59:59'
		  });
	feriados.push(
		{
			title: 'FERIADO',
			start: anio+'-07-28T00:00:00',
			end: anio+'-07-28T23:59:59'
		  });
	feriados.push(
		{
			title: 'FERIADO',
			start: anio+'-07-29T00:00:00',
			end: anio+'-07-29T23:59:59'
		  });
	feriados.push(
		{
			title: 'FERIADO',
			start: anio+'-08-30T00:00:00',
			end: anio+'-08-30T23:59:59'
		  });
	feriados.push(
		{
			title: 'FERIADO',
			start: anio+'-10-08T00:00:00',
			end: anio+'-10-08T23:59:59'
		  });
	feriados.push(
		{
			title: 'FERIADO',
			start: anio+'-11-01T00:00:00',
			end: anio+'-11-01T23:59:59'
		  });
	feriados.push(
		{
			title: 'FERIADO',
			start: anio+'-12-25T00:00:00',
			end: anio+'-12-25T23:59:59'
		  });
	feriados.push(
		{
			title: 'FERIADO',
			start: anio+'-12-08T00:00:00',
			end: anio+'-12-08T23:59:59'
		  });
	anio--; anio--;

var feriados2 = [];
	feriados2.push(anio+'-01-01');
	feriados2.push(anio+'-05-01');
	feriados2.push(anio+'-06-29');
	feriados2.push(anio+'-07-28');
	feriados2.push(anio+'-07-29');
	feriados2.push(anio+'-08-30');
	feriados2.push(anio+'-10-08');
	feriados2.push(anio+'-11-01');
	feriados2.push(anio+'-12-08');
	feriados2.push(anio+'-12-25');
	anio++;
	feriados2.push(anio+'-01-01');
	feriados2.push(anio+'-05-01');
	feriados2.push(anio+'-06-29');
	feriados2.push(anio+'-07-28');
	feriados2.push(anio+'-07-29');
	feriados2.push(anio+'-08-30');
	feriados2.push(anio+'-10-08');
	feriados2.push(anio+'-11-01');
	feriados2.push(anio+'-12-08');
	feriados2.push(anio+'-12-25');
	anio++;
	feriados2.push(anio+'-01-01');
	feriados2.push(anio+'-05-01');
	feriados2.push(anio+'-06-29');
	feriados2.push(anio+'-07-28');
	feriados2.push(anio+'-07-29');
	feriados2.push(anio+'-08-30');
	feriados2.push(anio+'-10-08');
	feriados2.push(anio+'-11-01');
	feriados2.push(anio+'-12-08');
	feriados2.push(anio+'-12-25');
	anio--; anio--;

var comprobacion = false;
	
if (window.performance.navigation.type == 1) {
	if(confirm('¿Desea salir sin completar el registro?')){
	  location.href ="inicio.html";
	}
 else{
	 //alert('Correcto');
   }
}

$(document).ready(function () {
	$idPadre = $("#mid").val();
	$("#mid").hide();

	Ocultar();
	
	$("#inicial").hide();

	$("#padres3").show();

	$.post("../controler/usuario.php", {
		accion: "12",
		id: $idPadre
	}, function(htmlexterno){
		$("#selectHijo").html(htmlexterno);
		Plan();
		//Ecalendario(eve2);
	});

	$.post("../controler/usuario.php", {
		accion: "7"
	}, function(htmlexterno){
		console.log("colegios",htmlexterno);
		$("#ocolegio").html(htmlexterno);
	});

	$.post("../controler/usuario.php", {
		accion: "8"
	}, function(htmlexterno){
		console.log("distritos",htmlexterno);
		$("#odistrito").html(htmlexterno);
	});


	$("#iniciaPadres").click(function(){
		//Ocultar()();
		$("#padres1").show();
	});

	var doc;
	var cel;

	$("#bpadres1").click(function(){
		if(paso1 == false){
			
			doc = $("#pdocumento").val();
			cel = $("#pcelular").val();
			var corr = ($("#pcorreo").val()).split("@");

			if($("#pnombre").val() != "" 
				&& $("#papellidos").val() != ""
				&& $("#ppassword").val() != ""
				&& $("#ppassword2").val() != ""
				&& $("#pdocumento").val() != ""
				&& doc.length == 8
				&& $("#pcelular").val() != ""
				&& cel.length == 9
				&& $("#pcorreo").val() != ""
				&& corr.length>1)
			{	
				if($("#ppassword").val() == $("#ppassword2").val()){
					paso1 = true;
					$.post("../controler/usuario.php", {
						accion: "3",
						apellidos: $("#papellidos").val(),
						nombre: $("#pnombre").val(),
						documento: $("#pdocumento").val(),
						correo: $("#pcorreo").val(),
						password: $("#ppassword").val(),
						celular: $("#pcelular").val()
					}, function(htmlexterno){
						$idPadre = htmlexterno;
						console.log("idPadre",$idPadre);
						alert("Datos registrados");
						$("#padres2").show();
						$("#padres1").hide();
					});
					
				} else {
					alert("Los contraseñas ingresadas no coinciden");
				}
				
			} else {
				var corr = ($("#pcorreo").val()).split("@");
				if(doc.length != 8){
					alert("Verifique cantidad de dígitos del DNI");
				} else if(cel.length != 9){
					alert("Verifique cantidad de dígitos de su teléfono celular");
				} else if(corr == 1){
					alert("Ingrese un correo electrónico válido");
				} else {
					alert("Verifique ingresar datos en todos los campos");
				}
				
			}
		} else {
			$("#padres2").show();
			$("#padres1").hide();
		}
		
	});

	/*$("#bvolver1").click(function(){
		Ocultar();
		$("#padres1").show();
		
	});*/

	$("#bvolver2").click(function(){
		Ocultar();
		$("#padres1").show();
	});

	$("#bvolver3").click(function(){
		Ocultar();
		$("#padres2").show();
	});

	$("#bvolver4").click(function(){
		Ocultar();
		$("#padres3").show();
	});

	$("#bagregar").click(function(){
		
		var x = document.getElementById("distritosa").selectedIndex;
		var y = document.getElementById("distritosa").options;
		var dist = y[x].text;

		var x = document.getElementById("colegioa1").selectedIndex;
		var y = document.getElementById("colegioa1").options;
		var cole = y[x].text;
		var codcole = y[x].value;

		if($("#pnombresa").val() != "" 
			&& $("#papellidosa").val() != ""
			&& $("#gradoa").val() != "0"
			&& $("#distritosa").val() != "0"
			&& $("#colegioa1").val() != "0")
		{	
			//if($("#ppassword").val() == $("#ppassword2").val()){
				
				$.post("../controler/usuario.php", {
					accion: "9",
					id: $idPadre,
					apellidos: $("#papellidosa").val(),
					nombre: $("#pnombresa").val(),
					distrito: dist,
					grado: $("#pgradoa").val(),
					direccion: $("#pdireccion").val(),
					colegio: cole,
					codcolegio: codcole

				}, function(htmlexterno){
					alert(htmlexterno);
					//Ocultar()();
					//$("#padres2").show();
				});
				
			/*} else {
				alert("Los contraseñas ingresadas no coinciden");
			}*/
			
		} else {
			alert("Verifique llenar todos los campos");
		}
		//$("#pnombresa").val(" ");
		//$("#papellidosa").val(" ");
	});

	$("#bagregar2").click(function(){
		$("#padres2").show();
		alert("Coloque los datos del siguiente alumno a inscribir");
		$("#pnombresa").val(" ");
		$("#papellidosa").val(" ");
	});

	$("#addUsuarios").click(function(){
		$senal = '1';
		$("#cuerpoUsuarios2").show();
		$("#cuerpoUsuarios").hide();

		$.post("../controler/usuario.php", {
			accion: "84",
			empresa: "1"
		}, function(htmlexterno){
			$("#userCentro").html(htmlexterno);
		});
	});
	
	$("#bpadres2").click(function(){

		if(paso2==false){
			paso2 = true;
			$.post("../controler/usuario.php", {
				accion: "12",
				id: $idPadre
			}, function(htmlexterno){
				$("#selectHijo").html(htmlexterno);
				$("#padres2").hide();
				$("#padres3").show();
				Plan();
				//Ecalendario(eve2);
			});
		} else {
			$("#padres2").hide();
			$("#padres3").show();
		}
		
	});
/*
	$("#bpadres3").click(function(){
		
		$inicia = $("#inicia").val();
		$finaliza = $("#finaliza").val();
		console.log("dat",$inicia + " - " + $finaliza);
		$.post("../controler/usuario.php", {
			accion: "84",
			dias: $arrayDias,
			inicio: $inicia,
			fin: $finaliza
		}, function(htmlexterno){
			$("#userCentro").html(htmlexterno);
		});
	});*/

	$("#d1").click(function(){
		document.getElementById("d1").style.background = "#ff0000";
	});

	$("#d2").click(function(){
		document.getElementById("d2").style.background = "#ff0000";
	});

	$("#d3").click(function(){
		document.getElementById("d3").style.background = "#ff0000";
	});

	$("#d4").click(function(){
		document.getElementById("d4").style.background = "#ff0000";
	});

	$("#d5").click(function(){
		document.getElementById("d5").style.background = "#ff0000";
	});

	
});


var dias=[];
var dia=[];
var seleccionado=[];
var horaInicio=[];
var horaFin=[];
var ant=null;
var eve = [
	{
	  title: 'BCH237',
	  start: '2019-12-12T10:30:00',
	  end: '2019-12-12T11:30:00',
	  extendedProps: {
		department: 'BioChemistry'
	  },
	  description: 'Lecture'
	},
	{
		title: 'TTT',
		start: '2019-12-13T10:30:00',
		end: '2019-12-13T11:30:00',
		extendedProps: {
		  department: 'BioChemistry'
		},
		description: 'Lecture'
	  }
	// more events ...
  ];



document.addEventListener('DOMContentLoaded', function() {
	calendarEl = document.getElementById('calendar');
	$dif=0;
	
		calendar = new FullCalendar.Calendar(calendarEl, {
				//plugins: [ 'dayGrid', 'timeGrid', 'list' ]
			plugins: [ 'interaction', 'dayGrid' ],
			defaultView: 'dayGridMonth',
			selectable: true,
			editable: true,
			locale: 'es',
			events: feriados,
			dateClick: function(info) {
				var fff = feriados2.findIndex((element => element == info.dateStr));
				console.log("fff",fff);
				if(fff==-1){
					var u = dia.findIndex((element) => element == info.dateStr);
					if(u!=-1){ 
						sen = true; 
					}
					
					console.log("sen",info.dayEl+" - "+info.dateStr);
					
					if(ant==null){ ant = info.dayEl; }
					ant.style.backgroundColor = 'transparent';
					if(info.dateStr==seleccionado.find(element => element == info.dateStr)){
						info.dayEl.style.backgroundColor = 'transparent';
						var i = seleccionado.findIndex((element) => element == info.dateStr);
						seleccionado.splice(i);
						if(sen){
							var i2 = dia.findIndex((element) => element == info.dateStr);
							dias.splice(i2);
							dia.splice(i2);
							$dif--;
							//$dia = info.dateStr;
							//AddHora();
						}
					} else {
						seleccionado.push(info.dateStr);
						info.dayEl.style.backgroundColor = '#8bc3da';
						
						$dia = info.dateStr;
						$fec = info.dateStr.split("-");
						$("#lafecha").html($fec[2]+"/"+$fec[1]+"/"+$fec[0]);
						
					}
				} else {
					alert("No se puede agregar clases a un día feriado");
				}
				sen=false;
				ant=info.dayEl;		
			}
				//plugins: ['googleCalendar']
		});	  	  
	
	
	calendar.render();

});


function AntePenultimo(){
	if(paso3==false){
		paso3=true;
		Ocultar();
		$("#padres4").show();
		$.post("../controler/usuario.php", {
			accion: "18",
			id: $idPadre
			//id: "31"
		}, function(data){
			console.log("resumen",data);
			$("#resumenInfo").html(data);
		});
	} else {
		paso3=true;
		Ocultar();
		$("#padres4").show();
	}
	
}

function Penultimo(){
	if(paso4==false){
		Ocultar();
		$("#padres5").show();
		
		var d = '<br><br><center>Su asesor es: '+miasesor+'<br>';
		d = d + 'Su primera fecha es: '+dias[0].dia+'</center><br><br>';
		$("#resumenInfo2").html(d);
	} else {
		Ocultar();
		$("#padres5").show();
	}
	
}

//var horario = [];
function AddHora(){
	//$cantHoras = parseInt($("#horasElegidas").val());
	$cantHoras = 4;
	$hi = $("#inicia").val(); 
	$hf = $("#finaliza").val();
	$hi2 = $("#iniciaHora").val();
	$hf2 = $("#finalizaHora").val();

	if($hi2=="00"){
		$inicio = parseFloat($hi)+0.0;
	} else {
		$inicio = parseFloat($hi)+0.5;
	}

	if($hf2=="00"){
		$fin = parseFloat($hf)+0.0;
	} else {
		$fin = parseFloat($hf)+0.5;
	}

	$dif2 = $fin - $inicio;
	console.log('dif2',$dif2);
	
	$dif = $dif + $dif2;
	console.log($dif);
	
	//$("#lafecha").html(info.dateStr);
	if($dif<=$cantHoras){
		//AddHora();
		sen=true;
		$hi = $("#inicia").val(); 
		$hf = $("#finaliza").val();
		
		//$dif = parseInt($hf) - parseInt($hi);
	
		var valuei = $("#inicia").val();
		$ti = $("#inicia").find('option[value=' + valuei + ']').text() +":"+ $("#iniciaHora").val();
		var valuef = $("#finaliza").val();
		$tf = $("#finaliza").find('option[value=' + valuef + ']').text() +":"+ $("#finalizaHora").val();
		dia.push($dia);
		$alumno = $("#hijosa1").val();

		var $servicio,$curso;
		if($("#serv1").is(':checked')){
			$servicio = $servicio + "#" + $("#serv1").val();
		}
		if($("#serv2").is(':checked')){
			$servicio = $servicio + "#" + $("#serv2").val();
		}
		if($("#serv3").is(':checked')){
			$servicio = $servicio + "#" + $("#serv3").val();
		}
		if($("#serv4").is(':checked')){
			$servicio = $servicio + "#" + $("#serv4").val();
		}

		if($("#cur1").is(':checked')){
			$curso = $curso + "#" + $("#cur1").val();
		}
		if($("#cur2").is(':checked')){
			$curso = $curso + "#" + $("#cur2").val();
		}
		if($("#cur3").is(':checked')){
			$curso = $curso + "#" + $("#cur3").val();
		}
		if($("#cur4").is(':checked')){
			$curso = $curso + "#" + $("#cur4").val();
		}
		if($("#cur5").is(':checked')){
			$curso = $curso + "#" + $("#cur5").val();
		}
		if($("#cur6").is(':checked')){
			$curso = $curso + "#" + $("#cur6").val();
		}


		$idioma = $("#idioma").val();
		$oidioma = $("#oidioma").val();
		dias.push({
			dia:$dia,
			horai:$hi,
			horaf:$hf,
			inicio: $ti,
			fin: $tf,
			alumno: $alumno,
			servicio: $servicio,
			curso: $curso,
			idioma: $idioma,
			oidioma: $oidioma
		});
	
		/*eve2.push(
			{
				title: $alumno,
				start: $ti+'T'+$hi+'00',
				end: $tf+'T'+$hf+'00',
				extendedProps: {
				  department: 'Horario'
				},
				description: 'Lectura'
			}
		);
	
		calendar.addEvent(eve2);*/
	
		var text='<center><table style="width:100%"><tr><td>DIA</td><td>INICIO</td><td>FIN</td></tr>';
		var c=0;
		var di='';
		dias.forEach(element => {
			
			di = element.dia.split("-");
			text = text + "<tr><td>"+di[2]+"/"+di[1]+"/"+di[0]+"</td><td>"+element.inicio+"</td><td>"+element.fin+'</td><td><button onclick="Borra('+c+')" class="btn btn-danger btn-block">X</button></td></tr>'; 
			c++;
		});
		text = text +'</table></center>';
		$("#resultadoHorario").html(text);
		/*$hff = parseInt($hi)+$dif;
		$hff2 = parseInt($hi)+1+$dif;
		$("#inicia").val($hff);
		$("#finaliza").val($hff2);*/
		console.log(dias);
		console.log("cur",$("#cur1").val());
		console.log("cur",$("#cur1").is(':checked'));
		//$('.myCheckbox').is(':checked');
		//Ecalendario(eve2);

	} else {
		$dif = $dif - $dif2;
		alert("Ha llegado al límite de horas seleccionadas");
	}

	
}

function CambioHora(){
	$hi = $("#inicia").val(); 
	$hi2 = $("#iniciaHora").val();
	$hff = parseInt($hi)+1;
	if($hi2=="00"){

	} else {
		$("#finalizaHora").val("30");
	}
	$("#finaliza").val($hff);

	//console.log("cur",$("#cur1").val());

}

function Borra(i){
	console.log(i);
	dia.splice(i,1);
	dias.splice(i,1);
	console.log(dia);
	console.log(dias);
	
	var text='<center><table style="width:80%"><tr><td></td><td>Inicio</td><td>Fin</td><td></td></tr>';
	var c=0;
	var di='';
	dias.forEach(element => {
		
		di = element.dia.split("-");
		text = text + "<tr><td>"+di[2]+"/"+di[1]+"/"+di[0]+"</td><td>"+element.inicio+"</td><td>"+element.fin+'</td><td><button onclick="Borra('+c+')" class="btn btn-danger btn-block">X</button></td></tr>'; 
		
		c++;
	});
	text = text +'</table></center>';

	$cantHoras = parseInt($("#horasElegidas").val());
	//$cantHoras = 4;
	$hi = $("#inicia").val(); 
	$hf = $("#finaliza").val();
	$hi2 = $("#iniciaHora").val();
	$hf2 = $("#finalizaHora").val();

	if($hi2=="00"){
		$inicio = parseFloat($hi)+0.0;
	} else {
		$inicio = parseFloat($hi)+0.5;
	}

	if($hf2=="00"){
		$fin = parseFloat($hf)+0.0;
	} else {
		$fin = parseFloat($hf)+0.5;
	}

	$dif2 = $fin - $inicio;
	console.log('dif2',$dif2);
	
	$dif = $dif - $dif2;
	console.log($dif);

	$("#resultadoHorario").html(text);
	
}

function Terminos(){
	cter++;
	console.log(cter);
}

function GuardaDatosHorario(){
	if(cter%2==1){
		dias.forEach(element => {
		
			if($("#hijosa1").val()==element.alumno){
				$.post("../controler/usuario.php", {
					accion: "13",
					padre: $idPadre,
					alumno: element.alumno,
					servicio: element.servicio,
					curso: element.curso,
					idioma: element.idioma,
					odioma: element.oidioma,
					dia: element.dia,
					horai: element.horai,
					horaf: element.horaf,
					inicio: element.inicio,
					fin: element.fin,
					asesor: miasesor
				}, function(htmlexterno){
					console.log(htmlexterno);
					alert("Datos guardados");
				});
			}
			
		});
	

	} else {
	
		alert("Debe aceptar los términos y condiciones");
	
	}
	

	//Comprobar();
}


function Comprobar(){
	console.log(dia);
	console.log(dias);
	var vfalse = 0;
	var vtrue = 0;
	var text='<center><table style="width:80%"><tr><td></td><td>Inicio</td><td>Fin</td><td></td></tr>';
	var cont=0;
	var di='';
	var ases = '';
	var sena = true;
	var asesores = [];
	var x = document.getElementById("distritosa").selectedIndex;
	var y = document.getElementById("distritosa").options;
	//var distrito = y[x].text;
	var distrito = "Chorrillos";
	console.log("el distr",distrito);
	//var distrito = 
	
	dias.forEach(element => {
		console.log(element.dia+" - "+element.horai+" - "+element.horaf);
		di = element.dia.split("-");
		text = text + "<tr><td>"+di[2]+"/"+di[1]+"/"+di[0]+"</td><td>"+element.inicio+"</td><td>"+element.fin+'</td><td><button onclick="Borra('+cont+')" class="btn btn-danger btn-block">X</button></td></tr>'; 
		
		//console.log("v"+c,element.dia+"-"+element.horai+"-"+element.horaf);
		$.post("../controler/usuario.php", {
			accion: "11",
			dias: element.dia,
			inicio: element.horai,
			fin: element.horaf,
			distrito: distrito
		}, function(htmlexterno){
			
			console.log("ases:",ases);
			console.log("contador:",cont);
			console.log("resp:",htmlexterno);
			
			if(htmlexterno=='0'){ 

				$.post("../controler/usuario.php", {
					accion: "25",
					dias: element.dia,
					asesor: ases,
					inicio: element.horai,
					fin: element.horaf,
					distrito: distrito
				}, function(data){
					console.log("sugerencia",data);
				});

				vfalse++;
				console.log("no encontrado",element.dia+" - "+element.horai+" - "+element.horaf);
				sena=false;
				ases = htmlexterno;
				asesores.push(ases);
				
				if(vfalse==0 && sena){
					comprobacion = false;
					$("#resultadoComprobar").html("No encontramos un asesor en este horario");
					
				} else if(sena){
					comprobacion = false;
					$("#resultadoComprobar").html("No encontramos un asesor en este horario");
				} else {
					comprobacion = false;
					$("#resultadoComprobar").html("No encontramos un asesor en este horario");
				}
			} else { 
				vtrue++;
				ases = htmlexterno;
				asesores.push(ases);

				for(var i=0; i<asesores.length; i++){
					if(asesores[0]==asesores[i]){ sena = true; } else { sena = false; } 
				}

				if(vfalse==0 && sena){
					comprobacion = true;
					MostrarAsesor(ases);
				} else if(sena){
					comprobacion = true;
					MostrarAsesor(ases);
				} else {
					comprobacion = false;
					$("#resultadoComprobar").html("No encontramos un asesor en este horario<br>Prueba con otro horario");
				}
			}
			
			
		});
		
		cont++;
		
	});
	text = text +'</table></center>';
		
}

function Comprobar2($i){
	var vfalse = 0;
	var vtrue = 0;
	var text='<center><table style="width:80%"><tr><td></td><td>Inicio</td><td>Fin</td><td></td></tr>';
	var cont=0;
	var di='';
	var ases = '';
	var sena = true;
	var asesores = [];
	var x = document.getElementById("distritosa").selectedIndex;
	var y = document.getElementById("distritosa").options;
	//var distrito = y[x].text;
	var distrito = "Chorrillos";
	console.log("el distr",distrito);

	
	var ext = dias.length;
	
	if(dias[$i]!=null){
		console.log(dias[$i].dia+" - "+dias[$i].horai+" - "+dias[$i].horaf);
		di = dias[$i].dia.split("-");
		text = text + "<tr><td>"+di[2]+"/"+di[1]+"/"+di[0]+"</td><td>"+dias[$i].inicio+"</td><td>"+dias[$i].fin+'</td><td><button onclick="Borra('+$i+')" class="btn btn-danger btn-block">X</button></td></tr>'; 
		
		//console.log("v"+c,element.dia+"-"+element.horai+"-"+element.horaf);
		$.post("../controler/usuario.php", {
			accion: "11",
			dias: dias[$i].dia,
			inicio: dias[$i].horai,
			fin: dias[$i].horaf,
			distrito: distrito
		}, function(htmlexterno){
			
			console.log("ases:",ases);
			console.log("contador:",cont);
			console.log("resp:",htmlexterno);
			
			if(htmlexterno=='0'){ 
				
				$.post("../controler/usuario.php", {
					accion: "25",
					dias: dias[$i].dia,
					asesor: ases,
					distrito: distrito
				}, function(data){
					console.log("sugerencia",data);
					var g = data.split("#");
					var mf=g[0].split("-");
					var mf1 = mf[2]+"/"+mf[1]+"/"+mf[0];
					
					var nn; var horass1; var horass2;
					if(parseFloat(g[4])==1){
						horass1 = parseInt(g[2])+1;
						horass2 = parseInt(g[3])+1;
						nn = '00';
					} else if(parseFloat(g[4])==1,5){
						horass1 = parseInt(g[2])+1;
						horass2 = parseInt(g[3])+1;
						nn = '30';
					}

					mensaje = mensaje + '<br>En la fecha '+mf1+' se sugiere corregir las horas por las siguientes: '+horass1+':'+nn +' - '+horass2+':'+nn;
					console.log('ext: ',$i+" - "+ext);
					if($i+1==ext){
						console.log('ext2: ',$i+" - "+ext);
						$("#resultadoComprobar").html(mensaje);
					}
				});

				vfalse++;
				console.log("no encontrado",dias[$i].dia+" - "+dias[$i].horai+" - "+dias[$i].horaf);
				sena=false;
				ases = htmlexterno;
				asesores.push(ases);
				
				if(vfalse==0 && sena){
					comprobacion = false;
					//$("#resultadoComprobar").html("No encontramos un asesor en este horario");
					
				} else if(sena){
					comprobacion = false;
					//$("#resultadoComprobar").html("No encontramos un asesor en este horario");
				} else {
					comprobacion = false;
					//$("#resultadoComprobar").html("No encontramos un asesor en este horario");
				}
			} else { 
				vtrue++;
				ases = htmlexterno;
				asesores.push(ases);

				for(var i=0; i<asesores.length; i++){
					if(asesores[0]==asesores[i]){ sena = true; } else { sena = false; } 
				}

				if(vfalse==0 && sena){
					comprobacion = true;
					MostrarAsesor(ases);
				} else if(sena){
					comprobacion = true;
					MostrarAsesor(ases);
				} else {
					comprobacion = false;
					//$("#resultadoComprobar").html("No encontramos un asesor en este horario<br>Prueba con otro horario");
				}
			}
			
			
		});

		
		Comprobar2($i+1);
		//cont++;
	}
	
}

function MostrarAsesor($id){
	$.post("../controler/usuario.php", {
		accion: "16",
		asesor: $id
	}, function(data){
		miasesor=data;
		$("#resultadoComprobar").html("¡FELICIDADES! Hemos encontrado un asesor disponible para tu horario ");
	});
}

function Ocultar(){
	//$("#inicial").hide();
	$("#padres1").hide();
	$("#padres2").hide();
	$("#padres3").hide();
	$("#padres4").hide();
	$("#padres5").hide();
}

function NuevoAsesor(){
	$("#nuevoAsesor").hide();
	$("#tabla_asesores1").hide();
	$("#cuerpoAsesores").show();
	$("#guardaAsesores1").show();
	$("#guardaAsesores2").hide();
}

function Asesores($estado){
	console.log("estado",$estado);
	//Ocultar()();

	$("#campoAsesores").show();
	$("#nuevoAsesor").show();
	$("#tabla_asesores1").show();
	$("#cuerpoAsesores").hide();
	$("#guardaAsesores1").hide();
	$("#guardaAsesores2").hide();

	if($estado==1){
		document.getElementById("asesores1").style.background = "#BCDBE5";
		document.getElementById("asesores2").style.background = "transparent";
		document.getElementById("asesores3").style.background = "transparent";	

		$("#tabla_asesores1").show();

	} else if($estado==2){
		document.getElementById("asesores2").style.background = "#BCDBE5";
		document.getElementById("asesores1").style.background = "transparent";
		document.getElementById("asesores3").style.background = "transparent";	
		
		$("#tabla_asesores2").show();

	} else if($estado==3){
		document.getElementById("asesores3").style.background = "#BCDBE5";
		document.getElementById("asesores1").style.background = "transparent";
		document.getElementById("asesores2").style.background = "transparent";	
	
		$("#tabla_asesores3").show();
	}

	$.post("../controler/usuario.php", {
		accion: "4",
		estado: $estado
	}, function(htmlexterno){
		$("#tabla_asesores1").html(htmlexterno);
	});

}


function GuardaPadres(){
	$.post("../controler/usuario.php", {
		accion: "3",
		apellidos: $("#papellidos").val(),
		nombre: $("#bpnombre").val(),
		documento: $("#pdocumento").val(),
		nacionalidad: $("#pnacionalidad").val(),
		direccion: $("#pdireccion").val(),
		distrito: $("#pdistrito").val(),
		correo: $("#pcorreo").val(),
		celular: $("#pcelular").val()
	}, function(htmlexterno){
		Padres();
	});
}

function Finalizar(){
	window.location = "../view/padres.php?id="+$idPadre;
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

function Plan(){
	$selectPlan = '<select id="horasElegidas" class="form-control select">';
		$selectPlan = $selectPlan + '<option value="4">Programa de 4 horas</option>';
		$selectPlan = $selectPlan + '<option value="6">Programa de 6 horas</option>';
		$selectPlan = $selectPlan + '<option value="8">Programa de 8 horas</option>';
		$selectPlan = $selectPlan + '<option value="10">Programa de 10 horas</option>';
		$selectPlan = $selectPlan + '<option value="12">Programa de 12 horas</option>';
		$selectPlan = $selectPlan + '<option value="14">Programa de 14 horas</option>';
		$selectPlan = $selectPlan + '<option value="16">Programa de 16 horas</option>';
		$selectPlan = $selectPlan + '<option value="20">Programa de 20 horas</option>';
		$selectPlan = $selectPlan + '</select>';
		$("#oplan").html($selectPlan);		
}

function Precio(){
	var x = document.getElementById("hijosa1").selectedIndex;
	var y = document.getElementById("hijosa1").options;
	var idhijo = y[x].value;

	console.log("idhijo",idhijo);
	
	$.post("../controler/usuario.php", {
		accion: "10",
		id: idhijo

	}, function(data){
		console.log("precio",data);
		var precio = parseInt(data);
		$("#precio").html(precio);

		
	});
}

function DiaX($id){
	$arrayDias = $arrayDias + $id + "#";
	console.log($arrayDias);

}


