<?php

function conecction() {

	$mbd=null;
	try {
    $mbd = new PDO('mysql:host=localhost;dbname=test', "root", "12345");
    //echo "Todo Bien";
    //$mbd = null;
	} catch (PDOException $e) {
    	print "¡Error!: " . $e->getMessage() . "<br/>";
    	die();
 	   	
	}
	
	return $mbd;
	
	
	//pdo base de datos general
	//$c = new PDO("sqlsrv:Server=localhost;Database=testdb", "NombreUsuario", "Contraseña");
	
	//pdo base de datos puerto especifico
	//$c = new PDO("sqlsrv:Server=localhost,1521;Database=testdb", "NombreUsuario", "Contraseña");
}

if(isset($_POST["crear_usuario"]) && $_POST["crear_usuario"]=='1'){

	$username = $_POST["username"];
	$password = $_POST["password"];
	
	$mbd = conecction();	
	$sentencia = $mbd->prepare("INSERT INTO usuarios (usuario, password) VALUES (?,?)");
	$sentencia->bindParam(1, $username);
	$sentencia->bindParam(2, $password);
	$sentencia->execute();
	$mbd = null;

	$result=array("suceso"=>"ok","mensaje"=>'Usuario Creado');
	$obj = json_encode($result);
	echo $obj;

};

if(isset($_POST["eliminar_usuario"]) && $_POST["eliminar_usuario"]=='1'){

	$username = $_POST["username"];
	$password = $_POST["password"];
	
	$mbd = conecction();	
	$sentencia = $mbd->prepare("DELETE FROM usuarios WHERE usuario = ?");
	$sentencia->bindParam(1, $username);
	$sentencia->execute();
	$mbd = null;

	$result=array("suceso"=>"ok","mensaje"=>'Usuario Eliminado');
	$obj = json_encode($result);
	echo $obj;

};

if(isset($_POST["editar_usuario"]) && $_POST["editar_usuario"]=='1'){

	$username = $_POST["username"];
	$password = $_POST["password"];
	
	$mbd = conecction();	
	$sentencia = $mbd->prepare("UPDATE usuarios SET password = ? WHERE usuario = ?");
	$sentencia->bindParam(1, $password);
	$sentencia->bindParam(2, $username);
	$sentencia->execute();
	$mbd = null;

	$result=array("suceso"=>"ok","mensaje"=>'Usuario Editado');
	$obj = json_encode($result);
	echo $obj;

};

if(isset($_POST["leer_usuario"]) && $_POST["leer_usuario"]=='1'){

	$username = $_POST["username"];
	$password = $_POST["password"];
	
	$mbd = conecction();	
	$sentencia = $mbd->prepare("SELECT * FROM usuarios WHERE usuario = ?");
	$sentencia->bindParam(1, $password);
	$sentencia->execute();
	$row = $sentencia->fetch(PDO::FETCH_ASSOC);
	$mbd = null;
	
	$datos_usuario = "Usuario :".$row["usuario"]."\n"."Password : ".$row["password"]."\n"."Id Usuario : ".$row["id"];	
	$result=array("suceso"=>"ok","mensaje"=>$datos_usuario);
	$obj = json_encode($result);
	echo $obj;

};


?>
