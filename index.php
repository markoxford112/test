<!DOCTYPE html>
<html>
<head>
<title>Test Prueba Crud</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >

</head>
<body>



<div class="container">
    <div class="row">
		<div class="span12">
			
			  <fieldset>
			    <div id="legend">
			      <legend class="">Login</legend>
			    </div>
			    <div class="control-group">
			      <!-- Username -->
			      <label class="control-label"  for="username">Usuario</label>
			      <div class="controls">
			        <input type="text" id="username" name="username" placeholder="" class="input-xlarge">
			      </div>
			    </div>
			    <div class="control-group">
			      <!-- Password-->
			      <label class="control-label" for="password">Password</label>
			      <div class="controls">
			        <input type="password" id="password" name="password" placeholder="" class="input-xlarge">
			      </div>
			    </div>
			    <div class="control-group">
			      <!-- Button -->
			      <div class="controls">
			        <button onclick="crear_usuario()" type="button" class="btn btn-success">Crear Usuario</button>
			      </div>
			    </div>
			    
			    <div class="control-group">
			      <!-- Button -->
			      <div class="controls">
			        <button onclick="eliminar_usuario()" type="button" class="btn btn-danger">Eliminar Usuario</button>
			      </div>
			    </div>
			    
			    <div class="control-group">
			      <!-- Button -->
			      <div class="controls">
			        <button onclick="editar_usuario()" type="button" class="btn btn-warning">Editar Usuario</button>
			      </div>
			    </div>
			    
			    <div class="control-group">
			      <!-- Button -->
			      <div class="controls">
			        <button onclick="leer_usuario()" type="button" class="btn btn-primary">Ver Datos Usuario</button>
			      </div>
			    </div>
			  </fieldset>
			
		</div>
	</div>
</div>





<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>

<script type="text/javascript" >
	function crear_usuario(){
		
		var username = $("#username").val();
      var password = $("#password").val();		
		
				$.ajax({
                    type: "POST",
                    url: "crud.php",
                    dataType : 'json',
                    data : {"crear_usuario":'1',"username":username,"password":password},
                    success: function(DatosCrud) {
                     	if(DatosCrud.suceso=='ok'){
                           alert(DatosCrud.mensaje);
                       	}else {
                           alert("error");
                        }
                     } 
            });
	
	}
	
	function eliminar_usuario(){
		
		var username = $("#username").val();
      var password = $("#password").val();		
		
				$.ajax({
                    type: "POST",
                    url: "crud.php",
                    dataType : 'json',
                    data : {"eliminar_usuario":'1',"username":username,"password":password},
                    success: function(DatosCrud) {
                     	if(DatosCrud.suceso=='ok'){
                           alert(DatosCrud.mensaje);
                        }else {
                           alert("error");
                        }
                     } 
            });
	
	}
	
	function editar_usuario(){
		
		var username = $("#username").val();
      var password = $("#password").val();		
		
				$.ajax({
                    type: "POST",
                    url: "crud.php",
                    dataType : 'json',
                    data : {"editar_usuario":'1',"username":username,"password":password},
                    success: function(DatosCrud) {
                     	if(DatosCrud.suceso=='ok'){
                           alert(DatosCrud.mensaje);
                        }else {
                           alert("error");
                        }
                     } 
            });
	
	}
	
	function leer_usuario(){
		
		var username = $("#username").val();
      var password = $("#password").val();		
		
				$.ajax({
                    type: "POST",
                    url: "crud.php",
                    dataType : 'json',
                    data : {"leer_usuario":'1',"username":username,"password":password},
                    success: function(DatosCrud) {
                     	if(DatosCrud.suceso=='ok'){
                           alert(DatosCrud.mensaje);
                        }else {
                           alert("error");
                        }
                     } 
            });
	
	}
</script>



</body>
</html>
