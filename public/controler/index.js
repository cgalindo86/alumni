var $senal='';
var $curso='';
var $tipoCurso='';
var $sesion='';
var $mid='';

$(document).ready(function () {
	MainApp();

	$("#addInteres").click(function(){
		$("#cuerpoInteres2").show();
		$("#cuerpoInteres").hide();
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
	//$("#campoAlumnos").hide();
	//$("#campoPadres").hide();
	$("#dashboard-content").hide();
	$("#campoAsesores").show();
	console.log("ocultar");
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
	Ocultar();

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


