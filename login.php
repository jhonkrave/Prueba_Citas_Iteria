<?php
ob_start();
if(!isset($_SESSION)){
 session_start();
}
include_once "Model/usuarioModel.php";
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="View/css/login.css">
	<title></title>
</head>
<body>
  <h2>Centro medico COMEVA</h2>
<p></p>


    <div class="container">
        <div class="card card-container">
            <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
            <img id="profile-img" class="profile-img-card" src="View/img/avatar_2x.png"/>
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin" name="form_log" method="post">
                <span id="reauth-email" class="reauth-email"></span>
                <input type="text" name="inp_name" id="inputEmail" class="form-control" placeholder="Usuario" required autofocus>
                <input type="password" name="inp_pass" id="inputPassword" class="form-control" placeholder="Contraseña" required>
                <div id="remember" class="checkbox">
                    <label>
                       <!-- <input type="checkbox" value="remember-me"> Recordarme-->
                    </label>
                </div>
                <button class="btn btn-lg btn-success btn-block btn-signin" name="btn_submit" type="submit">Iniciar Sesión</button>
            </form><!-- /form -->
            <a href="#" class="forgot-password">
               Registrarse
            </a>
        </div><!-- /card-container -->
    </div><!-- /container -->
</body>
</html>
<script src="https://code.jquery.com/jquery-2.2.4.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<?php
 
if(isset($_POST['btn_submit'])){
  if(isset($_POST['inp_name'],$_POST['inp_pass']) and !empty($_POST['inp_name']) and !empty($_POST['inp_pass'])){
    $user = new User();
    if(isset($_POST['inp_name'],$_POST['inp_pass'])){
      $respon = $user->Loguear(isset($_POST['inp_name']),$_POST['inp_name'],$_POST['inp_pass']);
      if(isset($respon)){
        if($respon['perfil'] == "afiliado"){
          $_SESSION['session__$%'] = base64_encode("user_1_234%$");
          $_SESSION['session__$%id'] = $respon['id'];
          header("location:afiliado.php");  
        }else if($respon['perfil'] == "medico"){
          $_SESSION['session__$%'] = base64_encode("user_2_26%34%$");  
          $_SESSION['session__$%id'] = $respon['id'];
          header("location:medico.php");    
        }else if($respon['perfil'] == "administrador"){
          $_SESSION['session__$%'] = base64_encode("user_3_234543$");
          $_SESSION['session__$%id'] = $respon['id'];
          header("location:administrador.php");
        }else if($respon['perfil'] == "operador"){
          $_SESSION['session__$%'] = base64_encode("user_4_22344%$");
          $_SESSION['session__$%id'] = $respon['id'];
          header("location:operadores.php");
        }
      }else{
        echo "<alert>No existe en el sistema</alert>";
      }
    }
  }
}
ob_end_flush(); 
?>

