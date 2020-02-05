MainApp();



function MainApp() {

}


init();
		
	function init(){
		$("#bacceso").click(function(){
			alert("hola");
		});

		$.post("../controler/h.php", {
			accion: "3"
			
		}, function(htmlexterno){
		   //alert("Data: " + htmlexterno);
		   
		});

	}

	function Acceso(){
		$.post("../controler/usuario.php", {
			accion: "20",
			usuario: $("#usuario").val(),
			password: $("#password").val()
		}, function(data){
		   
		   console.log("data1:"+data);
		   if(data!=""){
				window.location = 'padres.php?id='+data;
		   } else {
				$.post("../controler/usuario.php", {
					accion: "21",
					usuario: $("#usuario").val(),
					password: $("#password").val()
				}, function(data2){
				
					console.log("data2:"+data2);
					if(data2!=""){
						window.location = 'asesores.php?id='+data2;
					} else {
						alert("Verifique datos ingresados");
					}
				});
		   }
		});
	}