$arrayDias='';
$idPadre='';
$nombreAsesor='';
$dia='';
$dif=0;
var periodo,anio;
var sen = true;
var fechaElegida='';
var cantHoras=0;
var serv = [];
var eve2 = [];
var horariosd = [];
var reserva = [];
var sugerenciaAsesor = [];
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
var precio;
var estados = [];
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
var nombreDelPadre='';
	
if (window.performance.navigation.type == 1) {
	if(confirm('¿Desea salir sin completar el registro?')){
	  location.href ="inicio.html";
	}
 else{
	 //alert('Correcto');
   }
}

$(document).ready(function () {
	Ocultar();
	
	$("#inicial").hide();

	$("#padres1").show();

	var d = new Date();
	if(d.getMonth()+1==1 || d.getMonth()+1==2 || d.getMonth()+1==3){ periodo=1; }
	if(d.getMonth()+1==4 || d.getMonth()+1==5 || d.getMonth()+1==6 || d.getMonth()+1==7){ periodo=2; }
	if(d.getMonth()+1==8 || d.getMonth()+1==9 || d.getMonth()+1==10 || d.getMonth()+1==11 || d.getMonth()+1==12){ periodo=3; }
	anio = d.getFullYear();

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
					nombreDelPadre = $("#pnombre").val()+" "+$("#papellidos").val();
					$("#nombreDelPadre").html(nombreDelPadre);
					
					$.post("../controler/usuario.php", {
						accion: "3",
						apellidos: $("#papellidos").val(),
						nombre: $("#pnombre").val(),
						documento: $("#pdocumento").val(),
						correo: $("#pcorreo").val(),
						direccion: $("#pdistrito").val(),
						distrito: $("#pdireccion").val(),
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
				} else if(corr.length == 1){
					alert("Verifique que su correo esté completo por favor");
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
	
	var dc2 = new Date();
	var dcomp2 = dc2.getFullYear()*10000+(dc2.getMonth()+1)*100+dc2.getDate();
	console.log("fff1",dcomp2);

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
				var dc = info.dateStr.split("-");
				var dcomp = parseInt(dc[0])*10000+parseInt(dc[1])*100+parseInt(dc[2]);
				console.log("fff2",dcomp);
				
				if(fff==-1){
					var u = dia.findIndex((element) => element == info.dateStr);
					if(u!=-1){ 
						sen = true; 
					}
					
					console.log("sen",info.dateStr);
					
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
							//$dif--;
							
							//$dia = info.dateStr;
							//AddHora();
						}
					} else if(dcomp>dcomp2){
						seleccionado.push(info.dateStr);
						info.dayEl.style.backgroundColor = '#8bc3da';
						
						$dia = info.dateStr;
						$fec = info.dateStr.split("-");
						$("#lafecha").html($fec[2]+"/"+$fec[1]+"/"+$fec[0]);
						console.log("lafecha",$fec[2]+"/"+$fec[1]+"/"+$fec[0]);
						SugerirAsesor($dia);
					} else if(dcomp<=dcomp2){
						$("#isugerencias").html("<center>Por favor, elija días posteriores a la fecha actual</center>");
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

function ExtraerHorarios(){
	var x = document.getElementById("distritosa").selectedIndex;
	var y = document.getElementById("distritosa").options;
	var distritoid = y[x].value;

	var x = document.getElementById("distritosa").selectedIndex;
	var y = document.getElementById("distritosa").options;
	var distritonom = y[x].text;

	if(distritoid!="0"){
		
	}

	if(distritoid!="0"){
		$.post("../controler/usuario.php", {
			accion: "43"
			//id: "31"
		}, function(data){
			console.log("total antereserva",data);
			ConvertirAnteReserva(data);
			$.post("../controler/usuario.php", {
				accion: "42",
				id: distritonom
				//id: "31"
			}, function(data2){
				console.log("total horarios",data2);
				ConvertirHorarios(data2);
			});
		});
	}
	
}

function ConvertirHorarios(data){
	var d = data.split("%");
	var i;
	for(i=0; i<d.length; i++){
		var ee = d[i].split("#");

		var c = reserva.findIndex(e=>e.dia==ee[0] && e.fin==ee[1]);
		if(c==-1){
			horariosd.push({dia:ee[0], inicio:ee[1], fin:ee[2], inicioh:ee[3], finh:ee[4], distrito:ee[5], asesor:ee[6], nombreAsesor:ee[7], estado:ee[8]});
		} else {
			console.log("coincide",ee[0]+" - "+ee[1]);
		}
		
	}
}

function ConvertirAnteReserva(data){
	var d = data.split("%");
	var i;
	for(i=0; i<d.length-1; i++){
		var e = d[i].split("#");
		//$horarios = $horarios.$row['dia'].'#'.$row['hora']."#".$row['horaf']."#".$row['distrito']."#";
		//$horarios = $horarios.$row['asesor']."#".$row['estado']."#%";
		reserva.push({dia:e[0], inicio:e[1], fin:e[2], distrito:e[3], asesor:e[4], estado:e[5]});
		
	}
	console.log("reserva array",reserva);
}


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
		$.post("../controler/usuario.php", {
			accion: "30",
			id: miasesor
			//id: "31"
		}, function(data){
			var d = '<br><br><center>Su asesor es: '+data+'<br>';
			d = d + 'Su primera fecha es: '+dias[0].dia+'</center><br><br>';
			d = d + 'Horario reservado:<br><br>';
			//var text='<center><table style="width:50%"><tr style="color:#ff0000;"><td>DIA</td><td>INICIO</td><td>FIN</td><td>ESTADO</td><td>CORREGIR</td></tr>';
			var c=0;
			var di=''; var ni,nf,suma;
			var text='<center><table style="width:80%"><tr style="color:#ff0000;">';
			text = text + '<td style="width:20%">DIA</td><td style="width:20%">ASESOR</td>';
			text = text + '<td style="width:20%">HORA INICIO</td><td style="width:20%">HORA FIN</td>';
			text = text + '</tr>';
			var c=0;
			var di='';
			estados = [];
			dias.forEach(element => {
				di = element.dia.split("-");
				//var resta = parseInt(element.horaf)/100 - parseInt(element.horai)/100;
				text = text + "<tr><td>"+di[2]+"/"+di[1]+"/"+di[0]+"</td><td>"+element.nombreAsesor+"</td><td>"+element.inicio+"</td><td>"+element.fin+'</td></tr>'; 
				c++;
			});
			text = text +'</table></center>';
			text = text +'<table><tr><td><h1>El importe que debe abonar es: <b>S/ '+$cantHoras*precio +'.00 SOLES</b></h1></td></tr></table> ';

			//$cantHoras
			d = d + text + "La clase quedará reservada por un máximo de 48 horas hasta haber sido recibido el comprobante de pago</center>";
			$("#resumenInfo2").html(d);
		});
		
	} else {
		Ocultar();
		$("#padres5").show();
	}
	
}

//var horario = [];
function AddHora(){
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
	
	$dif = $dif + $dif2;
	console.log("dif",$dif);
	
	var ii = dias.findIndex(e=>e.dia==$dia);

	if($dif<=$cantHoras && $dia!="" && ii==-1){
		//AddHora();
		sen=true;
		//$hi = $("#inicia").val(); 
		//$hf = $("#finaliza").val();
		
		//$dif = parseInt($hf) - parseInt($hi);
	
		var valuei = $("#inicia").val();
		$ti = $("#inicia").find('option[value=' + valuei + ']').text() +":"+ $("#iniciaHora").val();
		$hi = $("#inicia").find('option[value=' + valuei + ']').text() +""+ $("#iniciaHora").val();
		var valuef = $("#finaliza").val();
		$tf = $("#finaliza").find('option[value=' + valuef + ']').text() +":"+ $("#finalizaHora").val();
		$hf = $("#finaliza").find('option[value=' + valuef + ']').text() +""+ $("#finalizaHora").val();
		
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
			oidioma: $oidioma,
			nombreAsesor: $nombreAsesor
		});
	
		
		var text='<center><table style="width:80%"><tr style="color:#ff0000;">';
		text = text + '<td style="width:20%">DIA</td><td style="width:20%">ASESOR</td>';
		text = text + '<td style="width:20%">HORA INICIO</td><td style="width:20%">HORA FIN</td>';
		text = text + '<td ></td><td ></td></tr>';
		var c=0;
		var di='';
		estados = [];
		dias.forEach(element => {
			di = element.dia.split("-");
			var resta = parseInt(element.horaf)/100 - parseInt(element.horai)/100;
			text = text + "<tr><td>"+di[2]+"/"+di[1]+"/"+di[0]+"</td><td>"+element.nombreAsesor+"</td><td>"+element.inicio+"</td><td>"+element.fin+'</td><td></td><td><button onclick="Borra('+c+')" class="btn btn-danger btn-block">ELIMINAR</button></td><td>'+resta+'/'+$cantHoras+'</td></tr>'; 
			c++;
		});
		text = text +'</table></center>';
		$("#resultadoHorario").html(text);
		
	} else if($dia==""){
		//$dif = $dif - $dif2;
		alert("Debe seleccionar un día en el calendario");
	} else {
		$dif = $dif - $dif2;
		alert("Ha llegado al límite de horas seleccionadas");
	}
}

function Compara(ndia,ninicio,nfin,nhinicio,nhfin){
	var ii;
	var bol=true;
	for(ii=parseInt(ninicio);ii<=parseInt(nfin);ii++){
		var i = horariosd.findIndex(element => element.dia == ndia && element.inicio==ninicio && element.fin==nfin);
		console.log("comparar",i);
		if(i!=-1 && bol==true){
			bol = true;
			miasesor = horariosd[i].asesor;
		} else {
			bol = false;
		}
	}

	if(bol == true){
		console.log("miasesor",miasesor);
		var i2 = reserva.findIndex(element=>element.dia==ndia && element.asesor==miasesor);
		//reserva.push({dia:e[0], inicio:e[1], fin:e[2], distrito:e[3], asesor:e[4], estado:e[5]});
		if(i2==-1){
			var msn='Hemos encontrado un asesor para ti';
			$("#resultadoComprobar").html(msn);
			return true;
		} else {
			console.log("ccc",parseInt(reserva[i2].fin)-parseInt(ninicio));
			if(parseInt(reserva[i2].fin)-parseInt(ninicio)>=0 && parseInt(reserva[i2].fin)-parseInt(ninicio)<1){
				var msn='Se recomienda iniciar media hora después';
				$("#resultadoComprobar").html(msn);
				return false;
			}
			
		}
		
	} else {
		Recomendar(ndia,miasesor);
		return false;
	}
}

function SugerirAsesor(mdia){
	console.log("sugerir asesor dia:",mdia);

	var msn='',msn2='';
	var c=0;
	var c2=-1;
	var i=0,f=0,ih=0,fh=0;
	sugerenciaAsesor = [];

	horariosd.forEach(element => {
		var n = sugerenciaAsesor.findIndex(e=>e.asesor==element.asesor);
		if(n==-1 && element.dia == mdia){
			sugerenciaAsesor.push({
				asesor:	element.asesor,
				dia: element.dia,
				nombreAsesor: element.nombreAsesor,
				inicio: element.inicio,
				fin: element.fin,
				inicioh: element.inicioh,
				finh: element.finh
			});

			//c2++;

			/*msn = msn + 'Asesor: '+element.nombreAsesor+" -N- Hora inicio: "+horariosd[c].inicioh;
			msn = msn + ' - Hora fin: '+horariosd[c].finh+"<br>";*/

			
		} else if(n!=-1 && element.dia == mdia){
			/*msn = msn + 'Asesor: '+element.nombreAsesor+" -A- Hora inicio: "+horariosd[c].inicioh;
			msn = msn + ' - Hora fin: '+horariosd[c].finh+"<br>";*/
			if(parseInt(sugerenciaAsesor[n].inicio)>=parseInt(horariosd[c].inicio)){
				i = horariosd[c].inicio;
				ih = horariosd[c].inicioh;
			} else {
				i = sugerenciaAsesor[n].inicio;
				ih = sugerenciaAsesor[n].inicioh;
			}
			if(parseInt(sugerenciaAsesor[n].fin)<=parseInt(horariosd[c].fin)){
				f = horariosd[c].fin;
				fh = horariosd[c].finh;
			} else {
				f = sugerenciaAsesor[n].fin;
				fh = sugerenciaAsesor[n].finh;
			}

			c2 = sugerenciaAsesor.findIndex(e=>e.asesor==element.asesor);

			sugerenciaAsesor.splice(c2,1);
			sugerenciaAsesor.push({
				asesor:	element.asesor,
				nombreAsesor: element.nombreAsesor,
				dia: element.dia,
				inicio: i,
				fin: f,
				inicioh: ih,
				finh: fh
			});
			
		}

		//console.log(sugerenciaAsesor);
		c++;
		
	});

	msn = '<center><table style="width:80%;">'
	sugerenciaAsesor.forEach(element=>{
		msn2='1';
		msn = msn + '<tr><td>Asesor: '+element.nombreAsesor+"</td></tr><tr><td>Hora inicio: "+element.inicioh+'</td>';
		msn = msn + '</tr><tr><td>Hora fin: '+element.finh;
		msn = msn +'</td></tr><tr><td><button onclick="VerAsesor('+element.asesor+')" class="btn btn-primary" ';
		msn = msn +'data-toggle="modal" data-target="#modal_asesores">MAS INFO</button></td></tr>';
		
	})
	msn = msn +'</table></center>';

	if(msn2==''){
		msn = 'Lo sentimos, no hemos encuentrado asesor disponible para la fecha seleccionada';
	}
	//console.log('Lo sentimos, no hemos encuentrado asesor disponible para la fecha seleccionada');
	$("#isugerencias").html(msn);
}

function VerAsesor(masesor){
	miasesor = masesor;
	$.post("../controler/usuario.php", {
		accion: "44",
		id: miasesor
		//id: "31"
	}, function(data){
		$("#perfilAsesor").html(data);
	});

	var c = sugerenciaAsesor.findIndex(e=>e.asesor==masesor);
	$nombreAsesor = sugerenciaAsesor[c].nombreAsesor;
	var pi = sugerenciaAsesor[c].inicioh.split(":");
	var pf = sugerenciaAsesor[c].finh.split(":");
	var i = parseInt(pi[0]);
	var f = parseInt(pf[0]);
	console.log("limites",i+" - "+f);
	var ii;
	var sinicia = '<select id="inicia" onclick="CambioHora()">';
	for(ii=i; ii<=f; ii++){
		var c2 = reserva.findIndex(e=>e.dia==sugerenciaAsesor[c].dia && e.inicio==(ii+"00"));
		if(c2==-1){
			if(ii<10){
				sinicia = sinicia + '<option value="'+ii+'">0'+ii+'</option>';
			} else {
				sinicia = sinicia + '<option value="'+ii+'">'+ii+'</option>';
			}
		}
		
		
	}
	sinicia = sinicia + '</select>';

	var ii2;
	var sfinaliza = '<select id="finaliza" onclick="CambioHora2()">';
	for(ii2=i+1; ii2<=f; ii2++){
		var c2 = reserva.findIndex(e=>e.dia==sugerenciaAsesor[c].dia && e.fin==(ii2+"00"));
		if(c2==-1){
			if(ii2<10){
				sfinaliza = sfinaliza + '<option value="'+ii2+'">0'+ii2+'</option>';
			} else {
				sfinaliza = sfinaliza + '<option value="'+ii2+'">'+ii2+'</option>';
			}
		}
		
		
	}
	sfinaliza = sfinaliza + '</select>';

	var siniciahora = '<select id="iniciaHora" onclick="CambioHora2()">';
	if(pi[1]=="00"){
		siniciahora = siniciahora + '<option value="00" selected>00</option>'
		siniciahora = siniciahora + '<option value="30">30</option>';
	} else {
		siniciahora = siniciahora + '<option value="00">00</option>'
		siniciahora = siniciahora + '<option value="30" selected>30</option>';
	}
	siniciahora = siniciahora + '</select>';

	var sfinalizahora = '<select id="finalizaHora" onclick="CambioHora2()">';
	if(pf[1]=="00"){
		sfinalizahora = sfinalizahora + '<option value="00" selected>00</option>'
		sfinalizahora = sfinalizahora + '<option value="30">30</option>';	
		
	} else {
		sfinalizahora = sfinalizahora + '<option value="00">00</option>'
		sfinalizahora = sfinalizahora + '<option value="30" selected>30</option>';	
		
	}
	sfinalizahora = sfinalizahora + '</select>';

	$("#inicia").html(sinicia);
	$("#finaliza").html(sfinaliza);
	$("#iniciaHora").html(siniciahora);
	$("#finalizaHora").html(sfinalizahora);

}

function Recomendar(mdia,masesor){
	var msn='';
	var c=0;
	horariosd.forEach(element => {
		//var c = horariosd.findIndex(element=>element.dia == mdia && element.asesor==masesor);
		//var c2 = horariosd.findIndex(element=>element.dia == mdia);
		
		if(element.dia == mdia && element.asesor==masesor){
			console.log("c",c);
			msn = msn + 'Sugerencia: '+"Hora inicio: "+horariosd[c].inicio;
			msn = msn + ' - Hora fin: '+horariosd[c].fin+"<br>";
		} else if(element.dia == mdia){
			console.log("c2",c);
			msn = msn + 'Sugerencia: '+"Hora inicio: "+horariosd[c].inicio;
			msn = msn + ' - Hora fin: '+horariosd[c].fin+"<br>";
		} 
		c++;
		
	});
	if(msn==''){
		msn = 'Lo sentimos, no hemos encuentrado asesor disponible para la fecha seleccionada';
	}
	console.log('Lo sentimos, no hemos encuentrado asesor disponible para la fecha seleccionada');
	$("#resultadoComprobar").html(msn);
}

function Validar(){}

function CambioHora(){
	$dife=0;
	$hi = $("#inicia").val(); 
	$hi2 = $("#iniciaHora").val();
	
	if($("#iniciaHora").val()=="00"){ $mi = 0; } else { $mi = 0.5; }
	if($("#finalizaHora").val()=="00"){ $mi2 = 0; } else { $mi2 = 0.5; }

	$hff = parseInt($hi)+1;
	$dife = (parseInt($("#finaliza").val()) + $mi2) - (parseInt($("#inicia").val()) + $mi);
	
	console.log('cambiohora',$dif);

	if($dife<1 && $("#finalizaHora").val()=="00"){
		console.log("c1",$dife);
		$("#finalizaHora").val("30");
	} else if($dife<1 && $("#finalizaHora").val()=="30") {
		console.log("c2",$dife);
		$("#finalizaHora").val("00");
	}

	$("#finaliza").val($hff);

	var b = sugerenciaAsesor.findIndex(e=>e.asesor==miasesor);
	var c = reserva.findIndex(e=>e.dia=sugerenciaAsesor[b].dia && e.fin==$hi+"00" && e.asesor==sugerenciaAsesor[b].asesor);
	
	if(c==-1){

	} else {
		$("#iniciaHora").val("30");
		$("#finaliza").val($hff);
		$("#finalizaHora").val("30");
		
	}

	var c2 = reserva.findIndex(e=>e.dia=sugerenciaAsesor[b].dia && e.asesor==sugerenciaAsesor[b].asesor);
	console.log("limite inicial",parseInt(reserva[0].inicio)+" "+parseInt($hi+"00"));
	
	var limF = parseInt($("#finaliza").val()+""+$("#finalizaHora").val()); 
	var limI = parseInt($("#inicia").val()+""+$("#iniciaHora").val());
	console.log("limite final 1",limF+" limite inicial "+limI);

	var limI2 = parseInt(reserva[c2].inicio);
	var limF2 = parseInt(reserva[c2].fin);
	console.log("limite final 2",limF2+" limite inicial "+limI2);

	var limF3 = parseInt(sugerenciaAsesor[b].fin);
	var limI3 = parseInt(sugerenciaAsesor[b].inicio);
	console.log("limite final 3",limF3+" limite inicial "+limI3);

	if(limF-limI<100){
		$("#mensajeSugerencia").html("No es posible seleccionar una clase de media hora");
		document.getElementById("addhora").disabled = true;
	} else {
		//document.getElementById("addhora").disabled = false;
		if(limI2>limI && limF2<limF){
			$("#mensajeSugerencia").html("El asesor está ocupado en este rango de horas. Seleccione otra opción por favor");
			document.getElementById("addhora").disabled = true;
		} else if(limI == limF3){
			$("#mensajeSugerencia").html("Está seleccionando un horario fuera del rango de horas del asesor");
			document.getElementById("addhora").disabled = true;
		} else {
			$("#mensajeSugerencia").html(" ");
			document.getElementById("addhora").disabled = false;
		}
	}

}

function CambioHora2(){
	$dife=0;
	$hi = $("#inicia").val(); 
	$hi2 = $("#iniciaHora").val();
	
	if($("#iniciaHora").val()=="00"){ $mi = 0; } else { $mi = 0.5; }
	if($("#finalizaHora").val()=="00"){ $mi2 = 0; } else { $mi2 = 0.5; }

	$hff = parseInt($hi)+1;
	$dife = (parseInt($("#finaliza").val()) + $mi2) - (parseInt($("#inicia").val()) + $mi);
	
	console.log('cambiohora2',$dife);

	if($dife<1 && $("#finalizaHora").val()=="00"){
		console.log("c1",$dife);
		$("#finaliza").val($hff);
		$("#finalizaHora").val("30");
	} else if($dife<1 && $("#finalizaHora").val()=="30") {
		console.log("c2",$dife);
		$("#finaliza").val($hff);
		$("#finalizaHora").val("00");
	}
	
	var b = sugerenciaAsesor.findIndex(e=>e.asesor==miasesor);
	var c = reserva.findIndex(e=>e.dia=sugerenciaAsesor[b].dia && e.fin==$hi+"00"  && e.asesor==sugerenciaAsesor[b].asesor);
	
	if(c==-1){

	} else {
		$("#iniciaHora").val("30");
		$("#finaliza").val($hff);
		$("#finalizaHora").val("30");
		
	}

	var c2 = reserva.findIndex(e=>e.dia=sugerenciaAsesor[b].dia && e.asesor==sugerenciaAsesor[b].asesor);
	console.log("limite inicial",parseInt(reserva[0].inicio)+" "+parseInt($hi+"00"));
	
	var limF = parseInt($("#finaliza").val()+""+$("#finalizaHora").val()); 
	var limI = parseInt($("#inicia").val()+""+$("#iniciaHora").val());
	console.log("limite final 1",limF+" limite inicial "+limI);

	var limI2 = parseInt(reserva[c2].inicio);
	var limF2 = parseInt(reserva[c2].fin);
	console.log("limite final 2",limF2+" limite inicial "+limI2);

	var limF3 = parseInt(sugerenciaAsesor[b].fin);
	var limI3 = parseInt(sugerenciaAsesor[b].inicio);
	console.log("limite final 3",limF3+" limite inicial "+limI3);

	if(limF-limI<100){
		$("#mensajeSugerencia").html("No es posible seleccionar una clase de media hora");
		document.getElementById("addhora").disabled = true;
	} else {
		//document.getElementById("addhora").disabled = false;
		if(limI2>limI && limF2<limF){
			$("#mensajeSugerencia").html("El asesor está ocupado en este rango de horas. Seleccione otra opción por favor");
			document.getElementById("addhora").disabled = true;
		} else if(limI == limF3){
			$("#mensajeSugerencia").html("Está seleccionando un horario fuera del rango de horas del asesor");
			document.getElementById("addhora").disabled = true;
		} else {
			$("#mensajeSugerencia").html(" ");
			document.getElementById("addhora").disabled = false;
		}
	}

}

function Borra(i){
	console.log(i);
	console.log("anteborrari",dias[i].inicio);
	console.log("anteborrarf",dias[i].fin);

	$cantHoras = parseInt($("#horasElegidas").val());
	//$cantHoras = 4;
	$antebi = dias[i].inicio.split(":");
	$antebf = dias[i].fin.split(":");

	$hi = $antebi[0]; 
	$hf = $antebf[0];
	$hi2 = $antebi[1];
	$hf2 = $antebf[1];

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
	console.log('dif2 borra',$dif2);
	
	$dif = $dif - $dif2;
	console.log('dif borra',$dif);

	dia.splice(i,1);
	//estados.splice(i,1);
	estados = [];
	dias.splice(i,1);
	console.log(dia);
	console.log(dias);
	
	var text='<center><table style="width:80%"><tr style="color:#ff0000;">';
	text = text + '<td style="width:20%">DIA</td><td style="width:20%">ASESOR</td>';
	text = text + '<td style="width:20%">HORA INICIO</td><td style="width:20%">HORA FIN</td>';
	text = text + '<td ></td><td ></td></tr>';
	var c=0;
	var di='';
	estados = [];
	dias.forEach(element => {
		di = element.dia.split("-");
		var resta = parseInt(element.horaf)/100 - parseInt(element.horai)/100;
		text = text + "<tr><td>"+di[2]+"/"+di[1]+"/"+di[0]+"</td><td>"+element.nombreAsesor+"</td><td>"+element.inicio+"</td><td>"+element.fin+'</td><td></td><td><button onclick="Borra('+c+')" class="btn btn-danger btn-block">ELIMINAR</button></td><td>'+resta+'/'+$cantHoras+'</td></tr>'; 
		c++;
	});
	text = text +'</table></center>';
	$("#resultadoHorario").html(text);
	var msn=' ';
	$("#resultadoComprobar").html(msn);
}

function Terminos(){
	cter++;
	console.log(cter);
}

function GuardaDatosHorario(){
	if($dif==$cantHoras){
		var estadof=estados.findIndex(element=>element=="0");
		console.log("estados",estados);
		if(estadof==-1){
			var x = document.getElementById("distritosa").selectedIndex;
			var y = document.getElementById("distritosa").options;
			var distrito = y[x].text;
	
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
							asesor: miasesor,
							distrito: distrito
						}, function(htmlexterno){
							console.log(htmlexterno);
							alert("Datos guardados");
						});
					}
					
				});
			
	
			} else {
			
				alert("Debe aceptar los términos y condiciones");
			
			}
		} else {
			alert("Verifique que el horario que está seleccionando no contenga errores");
		}
	} else {
		alert("Verifique que la cantidad de horas elegidas coincida con la cantidad de horas de clase")
	}
	
	/**/
	

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
	var distrito = y[x].text;
	//var distrito = "Chorrillos";
	console.log("el distr",distrito);
	//var distrito = 

	$.post("../controler/usuario.php", {
		accion: "11"
		
	}, function(data){
		var ndata = data.split("%");
		var i;
		for(i=0; i<ndata.length; i++){
			var gdata = ndata[i].split("#");
			
		}
	});
	
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
					if(data!=""){
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
					} else {
						$("#resultadoComprobar").html("Lo sentimos, no hemos encuentrado asesor disponible para la fecha seleccionada");
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
	$.get("https://www.sda.edu.pe/aula2.0/correo.php?padre="+$idPadre+"&correo="+$("#pcorreo").val()+"&pass="+$("#ppassword").val(), {
							
	}, function(data){
		
		
	});
	var imensaje = "Le hemos enviado un correo de confirmación. Por favor revise su bandeja de entrada. Si no lo visualiza en allí puede que este en la bandeja de SPAM";
		imensaje =  imensaje ;
		//$("#mensaje").html(imensaje);
		alert(imensaje);
	window.location = '../../index.html';
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
	$selectPlan = '<select style="color:#ffffff;" id="horasElegidas" class="form-control select">';
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
	
	$.post("../controler/usuario.php", {
		accion: "10",
		id: idhijo

	}, function(htmlexterno){
		
		precio = parseInt(htmlexterno);
		$("#precio").html(precio);

		
	});
}

function DiaX($id){
	$arrayDias = $arrayDias + $id + "#";
	console.log($arrayDias);

}


