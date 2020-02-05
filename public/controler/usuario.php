<?php
    ini_set("display_errors", false);
    $accion = $_POST['accion'];
    $id = $_POST['id'];
    $fecha = $_POST['fecha'];
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
	$password  = $_POST['password'];
    $codigo = $_POST['codigo'];
    $distrito = $_POST['distrito'];
    
	$detalle = $_POST['detalle'];
	
	$descripcion = $_POST['descripcion'];
	
    $titulo = $_POST['titulo'];
    $material = $_POST['material'];
    $tipo = $_POST['tipo'];
    $dni = $_POST['dni'];
    $correo = $_POST['correo'];
    
    $curso = $_POST['curso'];
    $sesion = $_POST['sesion'];
    $tipomat = $_POST['tipomat'];
    
    //$tipo,$evento,$detalle,$lugar,$direccion,$fecha,$hora,$estado
    $evento = $_POST['evento'];
    $lugar = $_POST['lugar'];
    $direccion = $_POST['direccion'];
    $hora = $_POST['hora'];
    $estado = $_POST['estado'];

    $nacionalidad = $_POST['nacionalidad'];
    $documento = $_POST['documento'];
    $celular = $_POST['celular'];
    $opcion = $_POST['opcion'];
    $grado = $_POST['grado'];
    $dias = $_POST['dias'];
    $inicio = $_POST['inicio'];
    $fin = $_POST['fin']; //,$servicio,$idioma,$oidioma,$dia,$horai,$horaf,$inicio,$fin
    $servicio = $_POST['servicio'];
    $idioma = $_POST['idioma'];
    $oidioma = $_POST['oidioma'];
    $dia = $_POST['dia'];
    $horai = $_POST['horai'];
    $horaf = $_POST['horaf'];
    $carrera = $_POST['carrera'];
    $universidad = $_POST['universidad'];
    $asesor = $_POST['asesor'];
    $curso = $_POST['curso'];
    $alumno = $_POST['alumno'];
    $padre = $_POST['padre'];
    $colegio = $_POST['colegio'];
    $codcolegio = $_POST['codcolegio'];
    $usuario = $_POST['usuario'];
    $cuenta = $_POST['cuenta'];
    $banco = $_POST['banco'];
    $cci = $_POST['cci'];
    $mensaje = $_POST['mensaje'];
    $anio = $_POST['anio'];
    $periodo = $_POST['periodo'];
    $diaSemana = $_POST['diaSemana'];
    $puntaje = $_POST['puntaje'];

	include('../model/Usuario.php');
	
	$miprod = new Usuario("");

    if($accion=="1"){
        echo $miprod -> Asistencia($fecha);
    } else if($accion=="2"){
        echo $miprod -> Padres();
    } else if($accion=="3"){
        echo $miprod -> GuardaPadres($apellidos,$nombre,$nacionalidad,$documento,$direccion,$distrito,$correo,$celular,$password);
    } else if($accion=="4"){
        echo $miprod -> Asesores($estado);
    } else if($accion=="5"){
        echo $miprod -> Asesores2($id);
    } else if($accion=="6"){
        echo $miprod -> GuardaAsesores($opcion,$id,$apellidos,$nombre,$nacionalidad,$documento,$direccion,$distrito,$correo,$celular,$estado);
    } else if($accion=="7"){
        echo $miprod -> ConsultaColegios();
    } else if($accion=="8"){
        echo $miprod -> ConsultaDistritos();
    } else if($accion=="9"){
        echo $miprod -> GuardaAlumnos($id,$apellidos,$nombre,$distrito,$grado,$direccion,$colegio,$codcolegio);
    } else if($accion=="10"){
        echo $miprod -> Precio($id);
    } else if($accion=="11"){
        //echo $miprod -> ComprobarHorario($dias,$inicio,$fin,$distrito);
        echo $miprod -> ComprobarHorario2();
    } else if($accion=="12"){
        echo $miprod -> ConsultaHijos($id);
    } else if($accion=="13"){
        echo $miprod -> Antereserva($padre,$alumno,$servicio,$curso,$idioma,$oidioma,$dia,$horai,$horaf,$inicio,$fin,$asesor,$distrito);
    } else if($accion=="14"){
        echo $miprod -> GuardaAsesores2($apellidos,$nombre,$nacionalidad,$documento,$direccion,$distrito,$correo,$celular,$carrera,$universidad,$password);
    } else if($accion=="15"){
        echo $miprod -> HorarioAsesor($asesor,$dia,$horai,$horaf,$inicio,$fin,$distrito,$periodo,$anio,$diaSemana);
    } else if($accion=="16"){
        echo $miprod -> MostrarAsesor($asesor);
    } else if($accion=="17"){
        echo $miprod -> ConsultaDistritos2();
    } else if($accion=="18"){
        echo $miprod -> ResumenInfo($id,$alumno);
    } else if($accion=="19"){
        echo $miprod -> ResumenInfo2($id,$alumno);
    } else if($accion=="20"){
        echo $miprod -> Valida($usuario,$password);
    } else if($accion=="21"){
        echo $miprod -> Valida2($usuario,$password);
    } else if($accion=="22"){
        echo $miprod -> DataPadre($id);
    } else if($accion=="23"){
        echo $miprod -> Restantes($id);
    } else if($accion=="24"){
        echo $miprod -> HorarioPadre($id);
    } else if($accion=="25"){
        echo $miprod -> SugerenciaHorario($asesor,$dias,$inicio,$fin,$distrito);
    } else if($accion=="26"){
        echo $miprod -> EstatusAlumno($id);
    } else if($accion=="27"){
        echo $miprod -> PerfilAsesor($id);
    } else if($accion=="28"){
        echo $miprod -> MisAsesores($id);
    } else if($accion=="29"){
        echo $miprod -> DataAsesor($id);
    } else if($accion=="30"){
        echo $miprod -> PerfilAsesor2($id);
    } else if($accion=="31"){
        echo $miprod -> InfoAsesorias($id,$periodo,$anio);
    } else if($accion=="32"){
        echo $miprod -> InfoPagos($id);
    } else if($accion=="33"){
        echo $miprod -> GuardaInfoPagos($id,$banco,$cuenta,$cci);
    } else if($accion=="34"){
        echo $miprod -> HorarioDisponibleAsesor($id);
    } else if($accion=="35"){
        echo $miprod -> RestantesAsesor($id);
    } else if($accion=="36"){
        echo $miprod -> EstatusAlumnoAsesor($id);
    } else if($accion=="37"){
        echo $miprod -> EnviarComentario($id,$mensaje);
    } else if($accion=="38"){
        echo $miprod -> EnviarMensaje($padre,$asesor,$mensaje);
    } else if($accion=="39"){
        echo $miprod -> RevisarComentario($id);
    } else if($accion=="40"){
        echo $miprod -> HistorialAsesorias($id);
    } else if($accion=="41"){
        echo $miprod -> ContenidoDisponible($id);
    } else if($accion=="42"){
        echo $miprod -> ExtraerHorarios($id);
    } else if($accion=="43"){
        echo $miprod -> ExtraerAntereserva();
    } else if($accion=="44"){
        echo $miprod -> PerfilAsesor3($id);
    } else if($accion=="45"){
        echo $miprod -> PerfilPadre($id);
    } else if($accion=="46"){
        echo $miprod -> EnviarCalificaciones($padre,$asesor,$mensaje,$puntaje);
    } else if($accion=="47"){
        echo $miprod -> EnviarMensaje2($nombre,$correo,$mensaje);
    } else if($accion=="48"){
        echo $miprod -> Almacenes2($id);
    } else if($accion=="49"){
        echo $miprod -> Categorias();
    } else if($accion=="50"){
        echo $miprod -> GuardaCategorias($id,$tipo,$nombre);
    } else if($accion=="51"){
        echo $miprod -> Categorias2($id);
    } else if($accion=="52"){
        echo $miprod -> Productos();
    } else if($accion=="53"){
        echo $miprod -> SelectCategorias();
    } else if($accion=="54"){
        echo $miprod -> GuardaProductos($id,$almacen,$categoria,$tipo,$marca,$nombre,$stock);
    } else if($accion=="55"){
        echo $miprod -> SelectAlmacen();
    } else if($accion=="56"){
        echo $miprod -> Productos2($id);
    } else if($accion=="57"){
        echo $miprod -> SelectEmpleados();
    } else if($accion=="58"){
        echo $miprod -> SelectAlmacen2();
    } else if($accion=="59"){
        echo $miprod -> SelectEpp($id);
    } else if($accion=="60"){
        echo $miprod -> ValidaStock($id,$stock);
    } else if($accion=="61"){
        echo $miprod -> AgregaStock($id,$stock);
    } else if($accion=="62"){
        echo $miprod -> DisminuyeStock($id,$empleado,$stock);
    } else if($accion=="63"){
        echo $miprod -> MovimientoStock();
    } else if($accion=="64"){
        echo $miprod -> MovimientoStockEmpleado($id);
    } else if($accion=="65"){
        echo $miprod -> SelectEmpleados2();
    } else if($accion=="66"){
        echo $miprod -> Eventos();
    } else if($accion=="67"){
        echo $miprod -> GuardaEventos($tipo,$evento,$detalle,$lugar,$direccion,$fecha,$hora,$estado);
    } else if($accion=="68"){
        echo $miprod -> Eventos2($id);
    } else if($accion=="69"){
        echo $miprod -> EditaEventos($id,$tipo,$evento,$detalle,$lugar,$direccion,$fecha,$hora,$estado);
    } else if($accion=="70"){
        echo $miprod -> Empresas();
    } else if($accion=="71"){
        echo $miprod -> GuardaEmpresas($pais,$nombre);
    } else if($accion=="72"){
        echo $miprod -> Empresas2($id);
    } else if($accion=="73"){
        echo $miprod -> EditaEmpresas($id,$pais,$nombre);
    } else if($accion=="74"){
        echo $miprod -> SelectEmpresas();
    } else if($accion=="75"){
        echo $miprod -> ListarCentroCostos();
    } else if($accion=="76"){
        echo $miprod -> GuardaCentroCostos($empresa,$nombre);
    } else if($accion=="77"){
        echo $miprod -> ListarCentroCostos2($id);
    } else if($accion=="78"){
        echo $miprod -> EditaCentroCostos($id,$empresa,$nombre);
    } else if($accion=="79"){
        echo $miprod -> ListarUnidad();
    } else if($accion=="80"){
        echo $miprod -> GuardaUnidad($centro,$nombre);
    } else if($accion=="81"){
        echo $miprod -> ListarUnidad2($id);
    } else if($accion=="82"){
        echo $miprod -> EditaUnidad($id,$centro,$nombre);
    } else if($accion=="83"){
        echo $miprod -> SelectUnidad();
    } else if($accion=="84"){
        echo $miprod -> SelectCentroCostosUser();
    }

    
?>