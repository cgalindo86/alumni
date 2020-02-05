$arrayDias='';
$idPadre='14';
$dia='';
var periodo,anio;
var lunes=false,martes=false,miercoles=false,jueves=false,viernes=false,sabado=false,domingo=false;
var diaElegido='';
var doc,cel;
var sen = true;
var fechaElegida='';
var cantHoras=0;
var coberturaid = [];
var coberturaText = [];
var d = new Date();
var anio = d.getFullYear();
var cter=0;
var feriados = [];
var diasSemana=[];
var dias=[];
var dia=[];
var seleccionado=[];
var horaInicio=[];
var horaFin=[];
var ant=null;
var fhi = 0;
var fhf = 0;

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

	if (window.performance.navigation.type == 1) {
		if(confirm('¿Desea salir sin completar el registro?')){
		  location.href ="inicio2.html";
		}
	 else{
		 //alert('Correcto');
	   }
	}


$(document).ready(function () {
	//Ocultar();
	$("#inicial").hide();

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

	$.post("../controler/usuario.php", {
		accion: "17"
	}, function(htmlexterno){
		console.log("distritos2",htmlexterno);
		$("#odistrito2").html(htmlexterno);
	});


	$("#iniciaPadres").click(function(){
		//Ocultar()();
		$("#padres1").show();
	});

	
});

function CambioDia(){
	var x = document.getElementById("semana").selectedIndex;
	var y = document.getElementById("semana").options;
	diaElegido = y[x].value;
	if(diaElegido!=-1){
		if(diaElegido=="1"){
			lunes = true;
			$("#lafecha").html("LUNES");
		} else if(diaElegido=="2"){
			martes = true;
			$("#lafecha").html("MARTES");
		} else if(diaElegido=="3"){
			miercoles = true;
			$("#lafecha").html("MIERCOLES");
		} else if(diaElegido=="4"){
			jueves = true;
			$("#lafecha").html("JUEVES");
		} else if(diaElegido=="5"){
			viernes = true;
			$("#lafecha").html("VIERNES");
		} else if(diaElegido=="6"){
			sabado = true;
			$("#lafecha").html("SABADO");
		} else if(diaElegido=="0"){
			domingo = true;
			$("#lafecha").html("DOMINGO");
		}
	}
	

}

function Terminos(){
	cter++;
	console.log(cter);
}

function DistritosCobertura(){
	
	if($("#distritosa2").val()!="0"){
		
		if($("#distritosa2").val()==coberturaid.find(element => element == $("#distritosa2").val())){
			
		} else {
			console.log($("#distritosa2").val());
			console.log($("#distritosa2 option:selected" ).text());
			coberturaid.push($("#distritosa2").val());
			coberturaText.push($("#distritosa2 option:selected" ).text());
			Cobertura(coberturaText);
		}
		
	}
	
}

function Cobertura(){
	var c=0;
	var ss='<table>'
	coberturaText.forEach(element => {
		
		ss = ss + '<tr><td>'+element+'</td><td><button onclick="Borrar2('+c+')" class="btn btn-danger btn-block"> ELIMINAR </button></td></tr>';
		c++;
	});
	ss = ss + '</table>';
	$("#cobertura").html(ss);
}

function Borrar2(i){
	console.log(i);
	coberturaid.splice(i,1);
	coberturaText.splice(i,1);
	Cobertura();
}

function GuardaAsesor(){
	doc = $("#pdocumento").val();
	cel = $("#pcelular").val();
	var coor = $("#pcorreo").val();
	var corre = coor.split("@");
        if($("#pnombre").val() != "" 
			&& $("#papellidos").val() != ""
			&& $("#ppassword").val() != ""
			&& $("#ppassword2").val() != ""
			&& $("#pdocumento").val() != ""
			&& doc.length == 8
			&& cel.length == 9
			&& cter%2==1
			&& corre.length>1
			&& $("#pcelular").val() != ""
            && $("#pcorreo").val() != ""
            && $("#pdireccion").val() != ""
            && $("#carrera").val() != ""
			&& $("#universidad").val() != "")
		{	
			if($("#ppassword").val() == $("#ppassword2").val()){
				
				$.post("../controler/usuario.php", {
					accion: "14",
					apellidos: $("#papellidos").val(),
					nombre: $("#pnombre").val(),
					documento: $("#pdocumento").val(),
					correo: $("#pcorreo").val(),
					password: $("#ppassword").val(),
                    celular: $("#pcelular").val(),
                    direccion: $("#pdireccion").val(),
                    distrito: $("#distritosa").val(),
                    carrera: $("#carrera").val(),
                    universidad: $("#universidad").val()
				}, function(htmlexterno){
					$idPadre = htmlexterno;
					console.log("idAsesor",$idPadre);
					alert("Datos registrados");
					GuardaDatosHorario();
				});
				
			} else {
				alert("Los contraseñas ingresadas no coinciden");
			}
			
		} else {
			if(doc.length != 8){
				alert("Verifique cantidad de dígitos del DNI");
			} else if(cel.length != 9){
				alert("Verifique cantidad de dígitos de su teléfono celular");
			} else if(cter%2==0){
				alert("Debe aceptar los términos y condiciones");
			} else if(corre.length==1){
				alert("Ingrese un correo válido");
			} else {
				alert("Verifique ingresar datos en todos los campos");
			}
		}

		
	
}


var text='';
var txt =  '<center><table style="width:80%"><tr><td></td><td>Inicio</td><td>Fin</td><td></td></tr>';
function AddHora(){
	//text='';
	sen=true;
	$hi = $("#inicia").val(); 
	$hf = $("#finaliza").val();
	
	
	//$dif = parseInt($hf) - parseInt($hi);

	var valuei = $("#inicia").val();
	$ti = $("#inicia").find('option[value=' + valuei + ']').text() +":"+ $("#iniciaHora").val();
	fhi = $("#inicia").find('option[value=' + valuei + ']').text() +""+ $("#iniciaHora").val();
	
	var valuef = $("#finaliza").val();
	$tf = $("#finaliza").find('option[value=' + valuef + ']').text() +":"+ $("#finalizaHora").val();
	fhf = $("#finaliza").find('option[value=' + valuef + ']').text() +""+ $("#finalizaHora").val();
	
	var ii,n;
	
	for(ii=1; ii<=31; ii++){
		var d = new Date();
		d.setFullYear(2020, 0, ii);
		if(diaElegido==d.getDay()){
			if(ii<10){ n='0'+ii; } else { n = ii+""; }
			$dia = '2020-01-'+n;
			dia.push($dia);
			
			dias.push({
				dia:$dia,
				horai:fhi,
				horaf:fhf,
				inicio: $ti,
				fin: $tf,
				diaSemana: diaElegido
			});
		}
		//console.log("day",d.getDay());
	}
	
	for(ii=1; ii<=29; ii++){
		var d = new Date();
		d.setFullYear(2020, 1, ii);
		if(diaElegido==d.getDay()){
			if(ii<10){ n='0'+ii; } else { n = ii+""; }
			$dia = '2020-02-'+n;
			dia.push($dia);
			//diasSemana.push({dia:diaElegido,inicio:$ti,fin:$tf});
			dias.push({
				dia:$dia,
				horai:fhi,
				horaf:fhf,
				inicio: $ti,
				fin: $tf,
				diaSemana: diaElegido
			});
		}
		//console.log("day",d.getDay());
	}

	for(ii=1; ii<=31; ii++){
		var d = new Date();
		d.setFullYear(2020, 2, ii);
		if(diaElegido==d.getDay()){
			if(ii<10){ n='0'+ii; } else { n = ii+""; }
			$dia = '2020-03-'+n;
			dia.push($dia);
			//diasSemana.push({dia:diaElegido,inicio:$ti,fin:$tf});
			dias.push({
				dia:$dia,
				horai:fhi,
				horaf:fhf,
				inicio: $ti,
				fin: $tf,
				diaSemana: diaElegido
			});
		}
		//console.log("day",d.getDay());
	}

	

	//text = text + '<center><table style="width:80%"><tr><td></td><td>Inicio</td><td>Fin</td><td></td></tr>';
	text = '';
	var c=-1, c2=0;
	diasSemana=[];
	dias.forEach(element => {
		var m;
		if(element.diaSemana=="1"){
			m="Lunes";
		} else if(element.diaSemana=="2"){
			m="Martes";
		} else if(element.diaSemana=="3"){
			m="Miercoles";
		} else if(element.diaSemana=="4"){
			m="Jueves";
		} else if(element.diaSemana=="5"){
			m="Viernes";
		} else if(element.diaSemana=="6"){
			m="Sabado";
		} else if(element.diaSemana=="0"){
			m="Domingo";
		}
		
		var e = diasSemana.findIndex(elem=>elem.dia==m);
		
		if(e==-1){
			c=diasSemana.length;
			diasSemana.push({dia:m,contador:c,doble:c2});
			if(c==0){
				text = txt + text + "<tr><td>"+m+"</td><td>"+element.inicio+"</td><td>"+element.fin+'</td><td><button onclick="Borra('+c+')" class="btn btn-danger btn-block">ELIMINAR</button></td></tr>';
			} else {
				text = text + "<tr><td>"+m+"</td><td>"+element.inicio+"</td><td>"+element.fin+'</td><td><button onclick="Borra('+c+')" class="btn btn-danger btn-block">ELIMINAR</button></td></tr>'; 
			
			}
			
		}
		c2++;
	});
	text = text +'</table></center>';
	$("#resultadoHorario").html(text);
	console.log("diasSemana",diasSemana);
	console.log("dias",dias);
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
}

function Borra(i){
	text='';
	console.log("diasSemanaIni",diasSemana);
	console.log("i",i);
	if(i==0 && diasSemana.length-1==0){
		var limite = dia.length;
		diasSemana.splice(i,1);
		dia.splice(i,limite);
		dias.splice(i,limite);
	} else if(i>=0 && i<diasSemana.length-1){
		var limite1 = parseInt(diasSemana[i].doble);
		var limite2 = parseInt(diasSemana[i+1].doble) - limite1;
		diasSemana.splice(i,1);
		dia.splice(limite1,limite2);
		dias.splice(limite1,limite2);
	} else if(i==diasSemana.length-1){
		console.log("caso3");
		var limite1 = parseInt(diasSemana[i].doble);
		var limite2 = dias.length - limite1;
		diasSemana.splice(i,1);
		dia.splice(limite1,limite2);
		dias.splice(limite1,limite2);
	}
	console.log("diasSemanaresult",diasSemana);
	console.log("dia result",dia);
	console.log("dias result",dias);
	
	text = text + '<center><table style="width:80%"><tr><td></td><td>Inicio</td><td>Fin</td><td></td></tr>';
	var c=-1, c2=0;
	diasSemana=[];
	dias.forEach(element => {
		var m;
		if(element.diaSemana=="1"){
			m="Lunes";
		} else if(element.diaSemana=="2"){
			m="Martes";
		} else if(element.diaSemana=="3"){
			m="Miercoles";
		} else if(element.diaSemana=="4"){
			m="Jueves";
		} else if(element.diaSemana=="5"){
			m="Viernes";
		} else if(element.diaSemana=="6"){
			m="Sabado";
		} else if(element.diaSemana=="0"){
			m="Domingo";
		}
		
		var e = diasSemana.findIndex(elem=>elem.dia==m);
		console.log("seguimiento",m+" - "+e+" - "+c);
		if(e==-1){
			c=diasSemana.length;
			diasSemana.push({dia:m,contador:c,doble:c2});
			if(c==0){
				text = txt + text + "<tr><td>"+m+"</td><td>"+element.inicio+"</td><td>"+element.fin+'</td><td><button onclick="Borra('+c+')" class="btn btn-danger btn-block">ELIMINAR</button></td></tr>';
			} else {
				text = text + "<tr><td>"+m+"</td><td>"+element.inicio+"</td><td>"+element.fin+'</td><td><button onclick="Borra('+c+')" class="btn btn-danger btn-block">ELIMINAR</button></td></tr>'; 
			
			}
			
		}
		c2++;
	});
	text = text +'</table></center>';
	
	console.log("diasSemanaresult",diasSemana);
	console.log("dia result",dia);
	console.log("dias result",dias);

	$("#resultadoHorario").html(text);
}


function GuardaDatosHorario(){
	var c=0; var total = coberturaText.length * dias.length;
	$("#padres1").hide();
	$("#mensaje").show();

	coberturaText.forEach(elt => {
		dias.forEach(element => {
		
			console.log("data","dist: "+elt+" - dia: "+element.dia+" - I: "+element.horai+" - F: "+element.horaf);
			//if($("#hijosa1").val()==element.alumno){
				$.post("../controler/usuario.php", {
					accion: "15",
					asesor: $idPadre,
					dia: element.dia,
					horai: element.horai,
					horaf: element.horaf,
					inicio: element.inicio,
					fin: element.fin,
					distrito: elt,
					periodo: periodo,
					anio: anio,
					diaSemana: element.diaSemana
				}, function(htmlexterno){
					console.log(htmlexterno);
					c++;
					if(c==total){
						$.get("https://www.sda.edu.pe/aula2.0/correo.php?padre="+$idPadre+"&correo="+$("#pcorreo").val()+"&pass="+$("#ppassword").val(), {
		
						}, function(data){
							
						});
						alert("Datos guardados");
						var imensaje = "Le hemos enviado un correo de confirmación. Por favor revise su bandeja de entrada. Si no lo visualiza en allí puede que este en la bandeja de SPAM";
						imensaje = '<br><br><center>' + imensaje + '</center>';
						$("#mensaje").html(imensaje);
						
					} else {
						var imensaje = "Procesando datos. Espere por favor...";
						imensaje = '<br><br><center><img src="gif.gif">' + imensaje + '</center>';
						$("#mensaje").html(imensaje);
					}
				});
			//}
			
		});	
		
			
	});

	//alert("Datos guardados");
	//window.location = "../view/asesores.php?id="+$idPadre;
	//window.location = "";

	//Comprobar();
}


function Comprobar(){
	//console.log(i);
	//dia.splice(i,1);
	//dias.splice(i,1);
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
	
	dias.forEach(element => {
		console.log(element.dia+" - "+element.horai+" - "+element.horaf);
		di = element.dia.split("-");
		text = text + "<tr><td>"+di[2]+"/"+di[1]+"/"+di[0]+"</td><td>"+element.inicio+"</td><td>"+element.fin+'</td><td><button onclick="Borra('+cont+')" class="btn btn-danger btn-block">X</button></td></tr>'; 
		
		//console.log("v"+c,element.dia+"-"+element.horai+"-"+element.horaf);
		$.post("../controler/usuario.php", {
			accion: "11",
			dias: element.dia,
			inicio: element.horai,
			fin: element.horaf
		}, function(htmlexterno){
			
			console.log("ases:",ases);
			console.log("contador:",cont);
			console.log("resp:",htmlexterno);
			
			if(htmlexterno=='0'){ 
				vfalse++;
				sena=false;
				ases = htmlexterno;
				asesores.push(ases);

				if(vfalse==0 && sena){
					$("#resultadoComprobar").html("Coincidencia " + sena);

				} else if(sena){
					$("#resultadoComprobar").html("Coincidencia " + sena);
					
				} else {
					$("#resultadoComprobar").html("No Coincidencia " + sena);
				}
			} else { 
				vtrue++;
				ases = htmlexterno;
				asesores.push(ases);

				for(var i=0; i<asesores.length; i++){
					if(asesores[0]==asesores[i]){ sena = true; } else { sena = false; } 
				}

				if(vfalse==0 && sena){
					$("#resultadoComprobar").html("Coincidencia " + sena);
				} else if(sena){
					$("#resultadoComprobar").html("Coincidencia " + sena);
				} else {
					$("#resultadoComprobar").html("No Coincidencia " + sena);
				}
			}
			
			
		});
		
		cont++;
		
	});
	text = text +'</table></center>';
	
	
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
	var id = document.getElementById("colegioa1").value;
	$.post("../controler/usuario.php", {
		accion: "10",
		id: id

	}, function(htmlexterno){
		var precio = parseInt(htmlexterno);

		$selectPlan = '<select id="horasElegidas" class="form-control select">';
		$selectPlan = $selectPlan + '<option value="1">4 horas al mes - '+precio*4+' soles</option>';
		$selectPlan = $selectPlan + '<option value="2">6 horas al mes - '+precio*6+' soles</option>';
		$selectPlan = $selectPlan + '<option value="3">8 horas al mes - '+precio*8+' soles</option>';
		$selectPlan = $selectPlan + '<option value="4">10 horas al mes - '+precio*10+' soles</option>';
		$selectPlan = $selectPlan + '<option value="5">12 horas al mes - '+precio*12+' soles</option>';
		$selectPlan = $selectPlan + '<option value="6">14 horas al mes - '+precio*14+' soles</option>';
		$selectPlan = $selectPlan + '<option value="7">16 horas al mes - '+precio*16+' soles</option>';
		$selectPlan = $selectPlan + '<option value="8">20 horas al mes - '+precio*20+' soles</option>';
		$selectPlan = $selectPlan + '</select>';
		$("#oplan").html($selectPlan);
	});
		
}

function DiaX($id){
	$arrayDias = $arrayDias + $id + "#";
	console.log($arrayDias);

}


/*
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

});*/


//var horario = [];
/*
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
		$servicio = $("#servicio").val();
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
			idioma: $idioma,
			oidioma: $oidioma
		});
	
		
	
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
		
		console.log(dias);
		console.log("cur",$("#cur1").val());
		console.log("cur",$("#cur1").is(':checked'));
		//$('.myCheckbox').is(':checked');
		//Ecalendario(eve2);

	} else {
		$dif = $dif - $dif2;
		alert("Verifique cantidad de horas seleccionadas para su plan");
	}

	
}
*/