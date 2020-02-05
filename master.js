//Inicializamos las variables necesarias.
var express = require('express')
  , http = require('http');
const fs = require('fs');
//const soap = require('soap');
var app = express();
var server = http.createServer(app);
//var io = require('socket.io').listen(server);
//const oracledb = require('oracledb');
//const mypw = 'cosapi';
var mysql = require('mysql');

var puerto = 8001;

server.listen(puerto);



//Marco la ruta de acceso y la vista a mostrar
app.set('view options', {
	  layout: false
	});
app.use(express.static('public'));
app.get('', function(req, res){
	
	res.sendFile(__dirname + '/public/view/login_simple.html');
	//res.sendFile(__dirname + '/nn.html');
});
app.get('/prueba', function(req, res){
    res.sendFile(__dirname + '/public/view/tabla.html');
});
app.get('/valida', function(req, res){
	var nom = req.query;
    var n="";
    fs.readFile(__dirname+'/public/view/lista.html', 'utf8', (error, datos) => {
        if (error) throw error;
        //console.log("El contenido es: ", nom.a[0]);
        
        datos = datos.replace("MIDD",nom.a[0]);
        res.send(datos);
    });
    
});
app.get('/inicio', function(req, res){
	//var nom = req.query;
    //var n="";
    fs.readFile(__dirname+'/public/view/inicio.html', 'utf8', (error, datos) => {
        if (error) throw error;
        //console.log("El contenido es: ", nom.a[0]);
        
		/*datos = datos.replace("MIDD",nom.a[0]);
		datos = datos.replace("PROY",nom.a[1]);
		datos = datos.replace("NOMBRE",nom.a[2]);*/
        res.send(datos);
    });
    
});

app.get('/grafico', function(req, res){
	var nom = req.query;
    //var n="";
    fs.readFile(__dirname+'/public/view/grafico.html', 'utf8', (error, datos) => {
        if (error) throw error;
		console.log("Proyecto", nom.a[0]);
		console.log("Periodo", nom.a[1]);
		var matriz = '';
		async function run(){
			try{
				matriz = BD({proyecto:nom.a[0],periodo:nom.a[1]});
				console.log('matriz',matriz);
				var d1 = 'data: [1900, 1029, 1602]';
				var d2 = 'data: [100, 200, 800]';
				var d3 = 'data: [100, 200, 1200]';
				var ejeY = "data: ['Oct', 'Nov', 'Dic']"; 
				datos = datos.replace("DATA1",d1);
				datos = datos.replace("DATA2",d2);
				datos = datos.replace("DATA3",d3);
				datos = datos.replace("EJES",ejeY);
				res.send(datos);
			}  catch(err){
				console.error(err.message);
			} finally{
				
			}
		}
		
		run();
    });
    
});

app.get('/tablaEmpleados', function(req, res){
	var nom = req.query;
    var listaEmpleado="";
    fs.readFile(__dirname+'/public/view/tabla.html', 'utf8', (error, datos) => {
        if (error) throw error;
		console.log("Proyecto", nom.a[0]+nom.a[1]+nom.a[2]+nom.a[3]+nom.a[4]);
		var codProy = nom.a[0]+"" + nom.a[1]+nom.a[2]+nom.a[3]+nom.a[4];
		var connection;
		async function run(){
			try{
				connection = await oracledb.getConnection({
					user: 'RO',
					password: mypw,
					connectString: "dscope.cosapi.com.pe/desa"
				});
				
				var respuesta=""; 
						
				var sql = "SELECT * FROM EMPLEADO_PROYECTO WHERE PROYECTO = '"+codProy+"'";
				result = await connection.execute(sql);
				var a;
				for(a=0; a<result.rows.length; a++){
					var string=JSON.stringify(result.rows[a]);
					var json =  JSON.parse(string);
					var nn = json[0];
					listaEmpleado="";
					var sql2 = "SELECT * FROM EMPLEADO WHERE EMPLEADO = '"+nn+"'";
					var result2 = await connection.execute(sql2);
					var b;
					for(b=0; b<result2.rows.length; b++){
						var string2 = JSON.stringify(result2.rows[b]);
						var json =  JSON.parse(string2);
						respuesta = respuesta + json[0]+"#"+json[1]+"#"+json[2]+"#";
						respuesta = respuesta + json[3]+"#"+json[4]+"#"+json[5]+"#";
						respuesta = respuesta + json[6]+"#"+json[7]+"#"+json[8]+"#";
						respuesta = respuesta + json[9]+"#"+json[10]+"#"+json[11]+"#";
						respuesta = respuesta + json[12]+"#"+json[13]+"#"+json[14]+"#";
						respuesta = respuesta + json[15]+"#"+json[16]+"#"+json[17]+"#";
						respuesta = respuesta + json[18]+"#"+json[19]+"#"+json[20]+"#";
						respuesta = respuesta + json[21]+"#"+json[22]+"#"+json[23]+"#";
						respuesta = respuesta + json[24]+"#"+json[25]+"#"+json[26]+"#";
						
					}

					respuesta = respuesta + "%";
					var $areaSelect = '';
					var $funcionSelect = '';
					var tabla = '<table class="table datatable-responsive">';
					tabla = tabla + '<thead><tr><td>MATRICULA</td><td>APELLIDOS Y NOMBRES</td><td>UNIDAD FUNCIONAL</td>';
					tabla = tabla + '<td>F. INGRESO</td><td>F. CESE</td><td>AREA</td><td>AREA COSTOS</td>';
					tabla = tabla + '<td>FUNCION</td><td>FUNCION COSTOS</td><td>F. INICIO</td><td>F. FIN</td></tr></thead>';
					tabla = tabla+'<tbody>';
					var ini = respuesta.split("%");
					ext = ini.length;
					for(i=0; i<ext-1; i++){
						//var string=JSON.stringify(data.rows[i]);
						//var json =  JSON.parse(string);
						var json = ini[i].split("#");
						listaEmpleado = listaEmpleado + json[0] + "#";
						
						var pickeri = '<div class="form-group">';
						pickeri = pickeri + '<div class="input-group">';
						pickeri = pickeri + '<span class="input-group-prepend">';
						pickeri = pickeri + '<span class="input-group-text"><i class="icon-calendar22"></i></span>';
						pickeri = pickeri + '</span>';
						pickeri = pickeri + '<input name="datepicker" type="date" id="datepickeri'+i+'" style="width:150px;" value="'+json[21]+'" />';
						pickeri = pickeri + '</div>';
						pickeri = pickeri + '</div>';

						var pickerf = '<div class="form-group">';
						pickerf = pickerf + '<div class="input-group">';
						pickerf = pickerf + '<span class="input-group-prepend">';
						pickerf = pickerf + '<span class="input-group-text"><i class="icon-calendar22"></i></span>';
						pickerf = pickerf + '</span>';
						pickerf = pickerf + '<input name="datepicker" type="date" id="datepickerf'+i+'" style="width:150px;" value="'+json[22]+'" />';
						pickerf = pickerf + '</div>';
						pickerf = pickerf + '</div>';

						//console.log("data"+i+": "+data[i]["AreaCodigo"]);
						tabla = tabla+'<tr><td>'+json[0]+'</td>';
						tabla = tabla+'<td>'+json[4]+' '+json[3]+'</td>';
						//tabla = tabla+'<td>'+data[i]["EmpleadoNombre"]+'</td>';
						tabla = tabla+'<td>'+json[20]+'</td>';
						tabla = tabla+'<td>'+json[7]+'</td>';
						tabla = tabla+'<td>'+json[8]+'</td>';

						var larea = '<select id="AreaSelectVal_'+i+'">';
						larea = larea + '<option value="'+json[6]+'">'+json[24]+'</option>';
						larea = larea + $areaSelect+'</select>';

						tabla = tabla + '<td>'+json[24]+'</td>';
						tabla = tabla + '<td>'+larea+'</td>';
						//tabla = tabla+'<td>'+data[i]["AreaNombre"]+'</td>';
						var lfuncion = '<select id="FuncionSelectVal_'+i+'">';
						lfuncion = lfuncion + '<option value="'+json[5]+'">'+json[23]+'</option>';
						lfuncion = lfuncion + $funcionSelect+'</select>';
						
						tabla = tabla+'<td>'+json[23]+'</td>';
						tabla = tabla+'<td>'+lfuncion+'</td>';
						tabla = tabla+'<td>'+pickeri+'</td>';
						tabla = tabla+'<td>'+pickerf+'</td></tr>';
						
					}
					tabla = tabla+'</tbody></table>'; //'</div></div>';
					
					
					//$tablaEmpleado = tabla;
					//document.getElementById("dataInicial").innerHTML = tabla;
				}
				console.log("listaEmpleado",listaEmpleado);
				datos = datos.replace("LISTAEMPLEADOS",listaEmpleado);
				datos = datos.replace("TABLA",tabla);
				res.send(datos);
					
		
			} catch(err){
				console.error(err.message);
			} finally{
				if(connection){
					try{
						await connection.close();
					} catch(err){
						console.error(err.message);
					}
				}
			}

			//console.log('m2',m);
			//return m;
		}
		//console.log('m3',m);
		run();
	
						
	});
});


